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