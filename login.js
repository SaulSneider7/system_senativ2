$("#btn_ingresar").click(function(){
    let sakjhskja = $("#email").val();
    let ijahsijas = $("#password").val();

    $.ajax({
        type: "POST",
        url: "controller/controlador_login.php",
        dataType: "json",
        data:{
            action: "ingresar",
            emjkjkjkjk: sakjhskja,
            passkfifji: ijahsijas
        },
        success: function(abc){
            
            if (abc.estado == 'ok') {
                window.location.href = 'index.php';
            } else {    
                alert(abc.mensaje)
            }
        },
        error: function(abc){
            console.log("ERROR");
            console.log(abc);
        }
    })
})

$("#Cerrar_Sesion").click(function() {
    $.ajax({
        url: 'controller/controlador_login.php',
        type: 'POST',
        dataType: 'json',
        data: {
            action: 'cerrar_sesion'
        },
        success: function(respuesta) {
            console.log(respuesta);
            window.location.href = 'login.php';
        },
        error: function(respuesta) {
            console.log("ERROR");
            console.log(respuesta);
        }
    })
});