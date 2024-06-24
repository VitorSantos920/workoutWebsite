$(document).ready(function () {
    VMasker(document.getElementById('telefone')).maskPattern('(99) 99999-9999');
});

let requisitosSenha = {
    sete: false,
    numero: false,
    especial: false,
    maiuscula: false,
};

function verificaSenha(valorSenha) {
    if (valorSenha.length > 6) {
        $('#has-seven').removeClass('invalid').addClass('valid');
        requisitosSenha.sete = true;
    } else {
        $('#has-seven').removeClass('valid').addClass('invalid');
        requisitosSenha.sete = false;
    }

    if (/\d/.test(valorSenha)) {
        $('#has-number').removeClass('invalid').addClass('valid');
        requisitosSenha.numero = true;
    } else {
        $('#has-number').removeClass('valid').addClass('invalid');
        requisitosSenha.numero = false;
    }

    // Verificar caractere especial
    if (/[!@#$%^&*(),.?":{}|<>]/.test(valorSenha)) {
        requisitosSenha.especial = true;
        $('#has-special').removeClass('invalid').addClass('valid');
    } else {
        requisitosSenha.especial = false;
        $('#has-special').removeClass('valid').addClass('invalid');
    }

    // Verificar letra maiúscula
    if (/[A-Z]/.test(valorSenha)) {
        requisitosSenha.maiuscula = true;
        $('#has-capital-letter').removeClass('invalid').addClass('valid');
    } else {
        requisitosSenha.maiuscula = false;
        $('#has-capital-letter').removeClass('valid').addClass('invalid');
    }

    verificaCorrespondencia();
}

function cadastrarUsuario() {
    let dadosUsuario = {
        nome: $('#nome').val(),
        email: $('#email').val(),
        telefone: $('#telefone').val(),
        senha: $('#senha').val(),
    };

    for (const key of Object.keys(dadosUsuario)) {
        if (dadosUsuario[key] == '') {
            sweetAlert(
                'error',
                'Campos vazios',
                'Para o cadastro do usuário, é necessário o preenchimento de todos os campos!'
            );
            return;
        }
    }

    if (dadosUsuario.telefone.length != 15) {
        sweetAlert(
            'error',
            'Telefone Incompleto',
            'Para realizar seu cadastro, é necessário preencher o telefone completamente!'
        );

        return;
    }

    for (const key of Object.keys(requisitosSenha)) {
        if (!requisitosSenha[key]) {
            sweetAlert(
                'error',
                'Senha inválida',
                'A senha fornecida não cumpre os requisitos!'
            );

            return;
        }
    }

    if (!verificaCorrespondencia()) {
        sweetAlert(
            'error',
            'Senha inválida',
            'As senhas não correspondem. Cerifique-se de que preencheu a mesma senha nos dois campos!'
        );
        return;
    }

    if (!verificaNomeUsuario(dadosUsuario.nome)) {
        return;
    }

    $.ajax({
        type: 'POST',
        url: 'user/cadastrar-usuario.php',
        data: dadosUsuario,
        success: (response) => {
            response = JSON.parse(response);
            console.log(response);
            switch (response.status) {
                case 1:
                    sweetAlert(
                        'success',
                        'Usuário cadastrado',
                        response.swalMessage,
                        1500
                    );

                    setTimeout(() => {
                        window.location.href = './home.php';
                    }, 1500);
                    break;
                case 0:
                    sweetAlert('info', 'Email existente', response.swalMessage);
                    break;
                case -1:
                    sweetAlert(
                        'error',
                        'Erro no cadastro',
                        response.swalMessage
                    );
                    break;
            }
        },
        error: (err) => console.log(err),
    });
}

function verificaCorrespondencia() {
    let confirmarSenha = $('#confirmar-senha').val();

    if ($('#senha').val() != confirmarSenha || confirmarSenha == '') {
        $('svg.fa-circle-xmark').css('display', 'block');
        $('svg.fa-circle-check').css('display', 'none');
        return false;
    }

    $('svg.fa-circle-check').css('display', 'block');
    $('svg.fa-circle-xmark').css('display', 'none');
    return true;
}

function sweetAlert(icon, title, text, timer = false) {
    let swalFireConfig = {
        icon,
        title,
        html: text,
    };

    if (timer) swalFireConfig.timer = timer;

    Swal.fire(swalFireConfig);
}

function verificaNomeUsuario(nome) {
    console.log('Verifica Nome: ' + nome + ' | Tamanho: ' + nome.length);
    const regexNome =
        /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]*[^\d\s][A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]*$/;

    const validacoes = [
        {
            validacao: () => regexNome.test(nome),
            mensagem:
                'Não é possível cadastrar um usuário com este nome. Verifique-o e tente novamente!',
        },
        {
            validacao: () => nome.length >= 3,
            mensagem: 'O nome do usuário é muito curto!',
        },
        {
            validacao: () => nome.includes(' '),
            mensagem:
                'É necessário inserir, no mínimo, o nome e sobrenome do usuário!',
        },
    ];

    for (const { validacao, mensagem } of validacoes) {
        if (!validacao()) {
            sweetAlert('error', 'Erro ao cadastrar o usuário', mensagem);
            return false;
        }
    }

    return true;
}
