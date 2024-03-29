function validarFormulario() {
    const nombre = document.forms["form-solicitudes"]["Nombre"].value;
    const correo = document.forms["form-solicitudes"]["Correo"].value;
    const solicitud = document.forms["form-solicitudes"]["Solicitud"].value;

    if (nombre === "") {
        alert("Por favor, ingresa tu nombre completo.");
        return false;
    }

    if (correo === "" || !validarCorreo(correo)) {
        alert("Por favor, ingresa un correo electrónico válido.");
        return false;
    }

    if (solicitud === "") {
        alert("Por favor, describe tu solicitud, queja o reclamo.");
        return false;
    }

    return true;
}

function validarCorreo(correo) {
    const regexCorreo = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return regexCorreo.test(correo);
}

function deplegar(id) {
    const elemento = document.getElementById(id);
    if (elemento.classList.contains("hide")) {
        elemento.classList.remove("hide");
    } else {
        elemento.classList.add("hide");
    }
}