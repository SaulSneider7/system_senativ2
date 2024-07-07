console.log("Funciones: categorias.js");

//Crear Categoria
$('#btn_crear_categoria').click(function () {
    $.ajax({
        type: "POST",
        url: "controller/controlador_categoria.php",
        dataType: "json",
        data: {
            action: "crearCategoria",
            nombre: $("#nombre_categoria").val()
        },
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'categorias.php';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function (respuesta) {
            console.log(respuesta);
        }
    })
});


//Editar Categoria
$('#btn_actualizar_categoria').click(function () {
    $.ajax({
        type: "POST",
        url: "controller/controlador_categoria.php",
        dataType: "json",
        data: {
            action: "editarCategoria",
            nombre: $("#input_nombre").val(),
            id_categoria : $("#id_categoria").val()
        },
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'categorias.php';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function (respuesta) {
            console.log(respuesta);
        }
    })
});


//Eliminar Categoria
function eliminar_categoria(id) {
    $.ajax({
        type: "POST",
        url: "controller/controlador_categoria.php",
        dataType: "json",
        data: {
            action: "eliminarCategoria",
            id_categoria : id
        },
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'categorias.php';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function (respuesta) {
            console.log(respuesta);
        }
    })
};