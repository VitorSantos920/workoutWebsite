function realizarLogin() {
    let dadosUsuario = {
        email: $('#email').val(),
        senha: $('#senha').val(),
    };

    for (const key of Object.keys(dadosUsuario)) {
        if (dadosUsuario[key] == '') {
            sweetAlert(
                'error',
                'Falha ao realizar o login',
                'Para realizar seu login, é necessário preencher todos os campos!'
            );

            return;
        }
    }

    $.ajax({
        type: 'POST',
        url: 'user/login-usuario.php',
        data: dadosUsuario,
        success: (response) => {
            response = JSON.parse(response);
            switch (response.status) {
                case -1:
                    sweetAlert('error', 'Falha no login', response.swalMessage);
                    break;
                case 0:
                    sweetAlert('error', 'Falha no login', response.swalMessage);
                    break;
                case 1:
                    sweetAlert(
                        'success',
                        'Login efetuado',
                        response.swalMessage,
                        1500
                    );
                    setTimeout(() => {
                        window.location.href = './home.php';
                    }, 1500);
                    break;
            }
            console.log(response);
        },
        error: (err) => console.log(err),
    });
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
