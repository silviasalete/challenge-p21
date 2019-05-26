function buscarNome(nome) {
    $.ajax({
        url: "includes/busca-torcedor-banco.php",
        method: "POST",
        data: {nome:nome},
        success: function (data) {
            $('#resultado').html(data);
        }
    });
}

$(document).ready(function(){
    buscarNome();
    $('#buscar').keyup(function() {
        var nome = $(this).val();
        if (nome != '') {
            buscarNome(nome);
        } else {
            buscarNome();
        }
    });
});

