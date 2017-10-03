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
       alert("falta llenar Usuario");
    }
}

function validaForm() {
    var pass = document.getElementById("clave").value;
    var usuario = document.getElementById("usuario").value;
   if(!validarPass(pass)){
        pass.focus();
        return false;
    } else if(!validarUsuario(usuario)){
        usuario.focus();
        return false;
    } else {
       alert("Ingresando..")
    }
}