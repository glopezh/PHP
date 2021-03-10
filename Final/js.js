

function pagina1() {
    $.ajax({
        url: './pages/pagina1.php',
        type: 'POST',
        async: true,
        data: 'parametro1=valor1&parametro2=valor2',
        success: function(respuesta){
            $('#contenido').html(respuesta)
        },
        error: function(error){
             $('#contenido').html(error);
        }
    });


}

function pagina2() {
    $.ajax({
        url: 'pages/pagina2.php',
        type: 'POST',
        async: true,
        data: 'parametro1=valor1&parametro2=valor2',
        success: function(respuesta){
            $('#contenido').html(respuesta)
        },
        error: function(error){
             $('#contenido').html(error);
        }
    });


}

function pagina3() {
    $.ajax({
        url: 'pages/pagina3.php',
        type: 'POST',
        async: true,
        data: 'parametro1=valor1&parametro2=valor2',
        success: function(respuesta){
            $('#contenido').html(respuesta)
        },
        error: function(error){
             $('#contenido').html(error);
        }
    });


}