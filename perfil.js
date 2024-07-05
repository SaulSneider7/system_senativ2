console.log("Funciones: perfil.js");
//Crear perfil
$('#btn_crear_perfil').click(function () {
    $.ajax({
        type: "POST",
        url: "controller/controlador_perfil.php",
        dataType: "json",
        data: {
            action: "crearPerfil",
            nombre: $("#nombre_perfil").val()
        },
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'perfiles.php';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function (respuesta) {
            console.log(respuesta);
        }
    })
});


//Editar Perfil
$('#btn_actualizar_perfil').click(function () {
    $.ajax({
        type: "POST",
        url: "controller/controlador_perfil.php",
        dataType: "json",
        data: {
            action: "editarPerfil",
            nombre: $("#nombre_perfil").val(),
            id_perfil : $("#id_perfil").val()
        },
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'perfiles.php';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function (respuesta) {
            console.log(respuesta);
        }
    })
});


//Eliminar Perfil
function eliminar_perfil(id) {
    $.ajax({
        type: "POST",
        url: "controller/controlador_perfil.php",
        dataType: "json",
        data: {
            action: "eliminarPerfil",
            id_perfil : id
        },
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'perfiles.php';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function (respuesta) {
            console.log(respuesta);
        }
    })
};