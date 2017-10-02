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
    if (cadena.length >=8 ) {
        return true;
    } else {
       alert("falta llenar y/o no se ingreso url");
    }
}




function validaForm() {
    var email = document.getElementById("correo").value;
    var pass = document.getElementById("clave").value;
    var usuario = document.getElementById("usuario").value;
    if (!validarEmail(email)){
        email.focus();
        return false;
    } else if(!validarPass(pass)){
        pass.focus();
        return false;
    } else if(!validarUsuario(usuario)){
        usuario.focus();
        return false;
    } else {
        alert("Guardando...")
        function redireccionar(){window.location="conexion.php";} 
            setTimeout ("redireccionar()", 5000);
    }
   
    
}