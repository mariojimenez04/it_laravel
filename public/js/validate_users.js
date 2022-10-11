//Variables
//Seleccionar boton de enviar
const btnEnviar = document.querySelector('#register');

//Seleccionar formulario
const formulario = document.querySelector('#formulario');
console.log(formulario);

//Seleccionar campo de email
const email = document.querySelector('#email');

//Seleccionar campo de email
const password = document.querySelector('#password');

//Seleccionar campo de email
const password_confirmation = document.querySelector('#password_confirmation');

//Seleccionar campo de email
const nombre = document.querySelector('#nombre');

eventListeners();
function eventListeners() {
    document.addEventListener('DOMContentLoaded', startApp);

    //Campos de el formulario
    email.addEventListener('blur', validateForm);
    password.addEventListener('blur', validateForm);
    nombre.addEventListener('blur', validateForm);
}


//Funciones
function startApp() {
    btnEnviar.disabled = true;
}

function validateForm(e) {
    if (e.target.value > 0) {
        e.target.classList.remove('is-invalid');
    }  else {
        e.target.classList.add('is-invalid');

        showError();
    }
}

function showError() {
    const mensajeError = document.createElement('p');

    mensajeError.textContent = 'Todos los campos son obligatorios';
    mensajeError.classList.add('invalid-feedback');

    formulario.appendChild(mensajeError);
}