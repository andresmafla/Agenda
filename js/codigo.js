$(document).ready(function() {})

//funciones del inicio de sesion
//esta funcion me permite generar el audio cuando se hace click en el input numero de telefono
function contraseña() {
    var sonido = document.createElement("iframe");
    sonido.setAttribute("src", "audio/contraseña.mp3");
    sonido.style.display = "none";
    document.body.appendChild(sonido);
    return sonido;
}

//esta funcion me permite generar el audio cuando se hace click en el input contraseña
function numero() {
    var sonido = document.createElement("iframe");
    sonido.setAttribute("src", "audio/telefono.mp3");
    sonido.style.display = "none";
    document.body.appendChild(sonido);
    return sonido;
}

//esta funcion me permite generar el audio cuando se hace click en el input nombre
function nombre() {
    var sonido = document.createElement("iframe");
    sonido.setAttribute("src", "audio/nombre.mp3");
    sonido.style.display = "none";
    document.body.appendChild(sonido);
    return sonido;
}

//esta funcion me permite generar el audio cuando se hace click en el input apellido
function apellido() {
    var sonido = document.createElement("iframe");
    sonido.setAttribute("src", "audio/apellido.mp3");
    sonido.style.display = "none";
    document.body.appendChild(sonido);
    return sonido;
}

//esta funcion me permite generar el audio cuando se hace click en el input fecha de nacimiento
function fecha() {
    var sonido = document.createElement("iframe");
    sonido.setAttribute("src", "audio/fecha.mp3");
    sonido.style.display = "none";
    document.body.appendChild(sonido);
    return sonido;
}

function recordatorio() {
    var sonido = document.createElement("iframe");
    sonido.setAttribute("src", "audio/recordatorio.mp3");
    sonido.style.display = "none";
    document.body.appendChild(sonido);
    return sonido;
}
//esta funcion me permite generar el audio cuando se hace click en la imagen de ayuda
function ayuda1() {
    var sonido = document.createElement("iframe");
    sonido.setAttribute("src", "audio/ayuda1.mp3");
    sonido.style.display = "none";
    document.body.appendChild(sonido);
    return sonido;
}

//esta funcion me permite generar el audio cuando se hace click en la imagen de ayuda
function ayuda2() {
    var sonido = document.createElement("iframe");
    sonido.setAttribute("src", "audio/crearCuenta.mp3");
    sonido.style.display = "none";
    document.body.appendChild(sonido);
    return sonido;
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////
//esta funcion me permite manejar crear una cuenta de usuario con ajax
function crearCuenta() {
    $.ajax({
        url: "crearCuenta.php",
        beforeSend: function() {
            $("#ayuda").html("<img src='images/1488.gif' alt='Espere...'>");
        },
        success: function(datos) {
            $("#divres").html(datos);
            $("#ayuda").html("<button onclick='ayuda2()' type='button'><img src='imagenes/ayuda.jpg' height='80' width='80'/></button>");
        },
        error: function(controlador, mensaje) {
            $("#divres").html("Error<br>Petición no procesada<br>" + mensaje);
        }
    });
}

