//Crear perfil
$('#btn_crear_perfil').click(function(){
    $.ajax({
        type: "POST",
        url: "controller/controlador_perfil.php",
        dataType: "json",
        data:{
            action: "crearPerfil",
            nombre: $("#nombre_perfil").val()
        },
        success: function(respuesta){
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'perfiles.php';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function(respuesta){
            console.log(respuesta);
        }
    })
});