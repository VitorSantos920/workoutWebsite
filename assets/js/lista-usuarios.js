$(document).ready(function () {
    carregaTabelaUsuarios();
});

function excluirUsuario(idUsuario) {
    console.log(idUsuario);

    Swal.fire({
        title: 'Excluir usuário?',
        text: 'Tem certeza que deseja executar esta ação? Ela não pode ser desfeita!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: 'gray',
        confirmButtonText: 'Sim, quero deletar!',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: 'user/excluir-usuario.php',
                data: {
                    idUsuario,
                },
                success: function (response) {
                    response = JSON.parse(response);
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuário excluído',
                        text: response.swalMessage,
                    });
                    carregaTabelaUsuarios();
                },
            });
        }
    });
}

function carregaTabelaUsuarios() {
    $('#tabela-usuarios tbody')
        .html(`<td style='text-align: center;' colspan='6'>
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </td>`);

    setTimeout(() => {
        $.ajax({
            type: 'POST',
            url: 'user/carrega-tabela-usuarios.php',
            data: {
                arg: true,
            },
            success: function (response) {
                response = JSON.parse(response);

                $('#tabela-usuarios tbody').html(response.tableBody);
            },
            error: (err) => console.log(err),
        });
    }, 2000);
}

function pesquisarUsuario(valorPesquisa) {
    $.ajax({
        type: 'POST',
        url: 'user/pesquisa-usuario.php',
        data: {
            valorPesquisa,
        },
        success: function (tableBody) {
            console.log(tableBody);
            $('#tabela-usuarios tbody').html(tableBody);
        },
        error: (err) => console.log(err),
    });
}
Vitor2004$;
