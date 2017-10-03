function validarEmail(cadena) {
    if (cadena.indexOf("@") !== -1) {
        return true;
    } else {
        alert("Falta Llenar Email");
    }
}

function validarPass(cadena) {
    if (cadena.length >= 8) {
        return true;
    } 
    {
       alert("Falta llenar y/o no cumple 8 caracteres");
    }
}

function validarUsuario(cadena) {
    if (cadena.length >=1 ) {
        return true;
    } else {
       alert("Campos Vacios de Usuario");
    }
}

function redireccionar(){window.location="../conexion.php";} 
           
function validarNombre(cadena) {
    if (cadena.length >=1 ) {
        return true;
    } else {
       alert("Campos Vacios de Nombre");
    }
}
function validarApellido(cadena) {
    if (cadena.length >=1 ) {
        return true;
    } else {
       alert("Campos Vacios de Apellido");
    }
}

function validaForm() {
    var email = document.getElementById("correo").value;
    var pass = document.getElementById("clave").value;
    var usuario = document.getElementById("usuario").value;
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    if (!validarEmail(email)){
        email.focus();
        return false;
    } else if(!validarPass(pass)){
        pass.focus();
        return false;
    } else if(!validarUsuario(usuario)){
        usuario.focus();
        return false;
    } else if(!validarNombre(nombre)){
        nombre.focus();
        return false;
    }else if(!validarApellido(apellido)){
        apellido.focus();
        return false;
    }else {
        alert("Guardando...");
    }    
}