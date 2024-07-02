$(document).ready(function () {
    toastr.options = {
        closeButton: true,
        debug: false,
        newestOnTop: false,
        progressBar: true,
        positionClass: 'toast-bottom-right',
        preventDuplicates: false,
        onclick: null,
        showDuration: '300',
        hideDuration: '1000',
        timeOut: '5000',
        extendedTimeOut: '1000',
        showEasing: 'swing',
        hideEasing: 'linear',
        showMethod: 'fadeIn',
        hideMethod: 'fadeOut',
    };

    let listasId = ['treinos-disponiveis', 'treinos-escolhidos'];

    listasId.forEach((lista) => {
        new Sortable(document.getElementById(lista), {
            group: 'listaTreinos',
            animation: 250,
            opacity: 2,
            onEnd: (evt) => {
                console.log(evt);
                let nomeTreino = retornaNomeTreino(evt.item.id);
                let acao;

                if (
                    evt.to.id == 'treinos-escolhidos' &&
                    evt.from.id == 'treinos-disponiveis'
                ) {
                    acao = 'adicionado';
                } else {
                    acao = 'removido';
                }

                $.ajax({
                    type: 'POST',
                    url: 'user/atualiza-treinos-usuario.php',
                    data: {
                        nomeIdentificadorTreino: evt.item.id,
                        idUsuario: $('#id-usuario').val(),
                        acao,
                    },
                    success: function (response) {
                        response = JSON.parse(response);

                        switch (response.acao) {
                            case 1:
                                toastr.success(
                                    `O treino "${nomeTreino}" foi adicionado à sua lista!`
                                );
                                break;
                            case 2:
                                toastr.warning(
                                    `O treino "${nomeTreino}" foi removido de sua lista!`
                                );
                                break;
                        }
                    },
                    error: (err) => console.log(err),
                });
            },
        });
    });
});

function retornaNomeTreino(idTreino) {
    let nomeIdentificador = {
        agachamento: 'Agachamento',
        'levantamento-terra': 'Levantamento Terra',
        supino: 'Supino',
        'remada-curvada': 'Remada Curvada',
        'desenvolvimento-ombros': 'Desenvolvimento de Ombros',
        'rosca-biceps': 'Rosca Bíceps',
        'triceps-pulley': 'Tríceps no Pulley',
        'leg-press': 'Leg Press',
        'extensao-perna': 'Extensão de Perna',
        'flexao-perna': 'Flexão de Perna',
        'puxada-polia': 'Puxada na Polia',
        'remada-sentada': 'Remada Sentada',
        'abdominal-maquina': 'Abdominal na Máquina',
        'crossover-cabos': 'Crossover de Cabos',
        'elevacao-panturrilha': 'Elevação de Panturrilha',
        'rosca-martelo': 'Rosca Martelo',
        'triceps-testa': 'Tríceps Testa',
        'abducao-quadril': 'Abdução de Quadril',
    };

    return nomeIdentificador[idTreino];
}

function editarPerfil() {
    let camposAEditar = {
        idUsuario: $('#id-usuario').val(),
        nome: $('#nome').val(),
        email: $('#email').val(),
        telefone: $('#telefone').val(),
    };

    $.ajax({
        type: 'POST',
        url: 'user/editar-perfil-usuario.php',
        data: camposAEditar,
        success: function (response) {
            response = JSON.parse(response);
            console.log(response);

            switch (response.status) {
                case 1:
                    Swal.fire({
                        icon: 'success',
                        title: 'Salvo',
                        text: response.swalMessage,
                    });

                    setTimeout(() => {
                        window.location.reload();
                    }, 1200);
                    window.location.reload;
                    break;
                case -1:
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro interno',
                        text: response.swalMessage,
                    });
                    break;
            }
        },
        error: (err) => console.log(err),
    });
}
