function excluirUsuario(idUsuario) {
    console.log(idUsuario);

    $.ajax({
        type: 'POST',
        url: 'user/excluir-usuario.php',
        data: {
            idUsuario,
        },
        success: function (response) {
            response = JSON.parse(response);
            console.log(response);
        },
    });
}
