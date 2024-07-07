console.log("Funciones: usuarios.js");
//Crear usuario
$('#btn_crear_usuario').click(function () {
    $.ajax({
        type: "POST",
        url: "controller/controlador_usuario.php",
        dataType: "json",
        data: {
            action: "crearUsuario",
            id_perfil: $("#id_perfil").val(),
            nombre: $("#nombre").val(),
            apellido: $("#apellido").val(),
            email: $("#email").val(),
            dni: $("#dni").val(),
            password: $("#password").val(),
            direccion: $("#direccion").val()
        },
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'usuarios.php';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function (respuesta) {
            console.log(respuesta);
        }
    })
});


//Editar usuario
$('#btn_actualizar_usuario').click(function () {
    $.ajax({
        type: "POST",
        url: "controller/controlador_usuario.php",
        dataType: "json",
        data: {
            action: "editarUsuario",
            id_usuario: $("#input_idUsuario").val(),
            id_perfil: $("#input_idPerfil").val(),
            nombre: $("#input_nombre").val(),
            apellido: $("#input_apellido").val(),
            email: $("#input_email").val(),
            dni: $("#input_dni").val(),
            direccion: $("#input_direccion").val()
        },
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'usuarios.php';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function (respuesta) {
            console.log(respuesta);
        }
    })
});