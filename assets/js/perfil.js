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
    });
}
