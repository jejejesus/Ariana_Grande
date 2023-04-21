$(function () {
    var nombre = false;
    var apellido = false;
    var correo = false;
    var mensaje = false;

    function verificar() {
        if(nombre == true && apellido == true && correo == true && mensaje == true) {
            document.getElementById('id_submit_mensaje').disabled=false;
        }
        else {
            document.getElementById('id_submit_mensaje').disabled=true;
        }
    }
    
    $('#id_text_nombre_usuario').keyup(function() {
        var longitud_nombre = $('#id_text_nombre_usuario').val().length;
        var a;
        if(longitud_nombre>=3) {
            for(a=0;a<longitud_nombre;a++) {
                if(($('#id_text_nombre_usuario').val().charAt(a) >= 'a' &&
                    $('#id_text_nombre_usuario').val().charAt(a) <= 'z')||
                   ($('#id_text_nombre_usuario').val().charAt(a) >= 'A' &&
                    $('#id_text_nombre_usuario').val().charAt(a) <= 'Z')||
                   ($('#id_text_nombre_usuario').val().charAt(a) == ' ') ) {
                        nombre = true;
                        document.getElementById('alerta_1_n').style.display = 'none';
                        verificar();
                }
                else {
                    nombre = false;
                    document.getElementById('alerta_1_n').style.display = 'block';
                    verificar();
                    break;
                }
            }
        }
        else {
            nombre = false;
            document.getElementById('alerta_1_n').style.display = 'block';
            verificar();
        }
    });
    $('#id_text_apellido_usuario').keyup(function() {
        var longitud_apellido = $('#id_text_apellido_usuario').val().length;
        var b;
        if(longitud_apellido>=3) {
            for(b=0;b<longitud_apellido;b++) {
                if(($('#id_text_apellido_usuario').val().charAt(b) >= 'a' &&
                    $('#id_text_apellido_usuario').val().charAt(b) <= 'z')||
                   ($('#id_text_apellido_usuario').val().charAt(b) >= 'A' &&
                    $('#id_text_apellido_usuario').val().charAt(b) <= 'Z')||
                   ($('#id_text_apellido_usuario').val().charAt(b) == ' ') ) {
                        apellido = true;
                        document.getElementById('alerta_1_a').style.display = 'none';
                        verificar();
                }
                else {
                    apellido = false;
                    document.getElementById('alerta_1_a').style.display = 'block';
                    verificar();
                    break;
                }
            }
        }
        else {
            apellido = false;
            document.getElementById('alerta_1_a').style.display = 'block';
            verificar();
        }
    });
    $('#id_email').keyup(function() {
        var longitud_correo = $('#id_email').val().length;
        var c;
        if(longitud_correo>=6) {
            for(c=0;c<longitud_correo;c++) {
                if(($('#id_email').val().charAt(c) >= 'a' &&
                    $('#id_email').val().charAt(c) <= 'z')||
                   ($('#id_email').val().charAt(c) >= '0' &&
                    $('#id_email').val().charAt(c) <= '9')||
                   ($('#id_email').val().charAt(c) == '@')||
                   ($('#id_email').val().charAt(c) == '.')||
                   ($('#id_email').val().charAt(c) == '-')||
                   ($('#id_email').val().charAt(c) == '_') ) {
                        correo = true;
                        document.getElementById('alerta_2').style.display = 'none';
                        verificar();
                }
                else {
                    correo = false;
                    document.getElementById('alerta_2').style.display = 'block';
                    verificar();
                    break;
                }
            }
        }
        else {
            correo = false;
            document.getElementById('alerta_2').style.display = 'block';
            verificar();
        }
    });
    $('#id_text_comentarios').keyup(function() {
        var longitud_mensaje = $('#id_text_comentarios').val().length;
        if(longitud_mensaje>=10) {
            mensaje = true;
            document.getElementById('alerta_3').style.display = 'none';
            verificar();
        }
        else {
            mensaje = false;
            document.getElementById('alerta_3').style.display = 'block';
            verificar();
        }
    });
});