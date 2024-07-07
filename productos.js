console.log("Funciones: productos.js");
//Crear usuario
$('#btn_crear_producto').click(function () {
    $.ajax({
        type: "POST",
        url: "controller/controlador_producto.php",
        dataType: "json",
        data: {
            action: "crearProducto",
            id_usuario: $("#id_usuario").val(),
            id_categoria: $("#id_categoria").val(),
            id_proveedor: $("#id_proveedor").val(),
            codigo: $("#input_codigo").val(),
            nombre: $("#input_nombre").val(),
            descripcion: $("#textarea_descripcion").val(),
            moneda: $("#input_moneda").val(),
            precio_compra: $("#input_precioCompra").val(),
            precio_venta: $("#input_precioVenta").val()
        },
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'productos.php';
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
// $('#btn_actualizar_usuario').click(function () {
//     $.ajax({
//         type: "POST",
//         url: "controller/controlador_usuario.php",
//         dataType: "json",
//         data: {
//             action: "editarUsuario",
//             id_usuario: $("#input_idUsuario").val(),
//             id_perfil: $("#input_idPerfil").val(),
//             nombre: $("#input_nombre").val(),
//             apellido: $("#input_apellido").val(),
//             email: $("#input_email").val(),
//             dni: $("#input_dni").val(),
//             direccion: $("#input_direccion").val()
//         },
//         success: function (respuesta) {
//             console.log(respuesta);
//             if (respuesta.estado == 'ok') {
//                 window.location.href = 'usuarios.php';
//             } else {
//                 alert(respuesta.mensaje);
//             }
//         },
//         error: function (respuesta) {
//             console.log(respuesta);
//         }
//     })
// });


//Eliminar Usuario
// function eliminar_usuario(id) {
//     $.ajax({
//         type: "POST",
//         url: "controller/controlador_usuario.php",
//         dataType: "json",
//         data: {
//             action: "eliminarUsuario",
//             id_usuario : id
//         },
//         success: function (respuesta) {
//             console.log(respuesta);
//             if (respuesta.estado == 'ok') {
//                 window.location.href = 'usuarios.php';
//             } else {
//                 alert(respuesta.mensaje);
//             }
//         },
//         error: function (respuesta) {
//             console.log(respuesta);
//         }
//     })
// };