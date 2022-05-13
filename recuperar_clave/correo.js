const formulario = document.getElementById('padre')
const inputs = document.querySelectorAll('#padre input')

const expresiones = {
    password: /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8}$/, // 4 a 12 digitos.
}

const campos = {
    password: false,
}
const validarFormulario = (e) => {

    switch (e.target.name) {

        case 'password':
            validarCampo(expresiones.password, e.target, "password");
            validarPassword2();

            break;

        case 'password2':
            validarPassword2();
            break;

    }

}

//validar datos
const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.remove("fa-times-circle");
        document.querySelector(`#grupo__${campo} i`).classList.add("fa-check-circle");
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove("formulario__input-error-activo");
        campos[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add("fa-times-circle");
        document.querySelector(`#grupo__${campo} i`).classList.remove("fa-check-circle");
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add("formulario__input-error-activo");
        campos[campo] = false;
    }

}
// Validar contraseñas
const validarPassword2 = () => {
const inputpassword1 = document.getElementById("password");
const inputpassword2 = document.getElementById("password2");

if (inputpassword1.value !== inputpassword2.value) {
    document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
    document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
    document.querySelector(`#grupo__password2 i`).classList.add("fa-times-circle");
    document.querySelector(`#grupo__password2 i`).classList.remove("fa-check-circle");
    document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add("formulario__input-error-activo");
    campos["inputpassword1"] = false;
} else {
    document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
    document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
    document.querySelector(`#grupo__password2 i`).classList.remove("fa-times-circle");
    document.querySelector(`#grupo__password2 i`).classList.add("fa-check-circle");
    document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove("formulario__input-error-activo");
    campos["inputpassword1"] = true;
}
}

inputs.forEach((inputs) => {
    inputs.addEventListener("keyup", validarFormulario);
    inputs.addEventListener("blur", validarFormulario);
})



formulario__btn.addEventListener("click", (e) => {

    e.preventDefault();
    //const terminos = document.getElementById("terminos");

    if ( campos.password) {
        //se envia el formulario a la direccion URL para el registro del usuarios
        fetch("nuevaClave.php",{
            method: "POST",
            body: new FormData(formulario_usuario)
        }).then(Response => Response.text()).then(Response =>{
            if(Response){
                Swal.fire({ //Mensaje de actualizacion de datos correcta
                    icon: 'success',
                    title: 'Tu contraseña a sido actualizada',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false
                })
                formulario_usuario.reset();
                document.getElementById("formulario__mensaje-exito").classList.add("formulario__mensaje-exito-activo");
                document.querySelector(`#grupo__password2 i`).classList.remove("fa-check-circle");
                document.querySelector(`#grupo__password i`).classList.remove("fa-check-circle");
                setTimeout (() =>{document.location.href ="../index.php"},3000)
            }else{
                alert("dentro else")
                Swal.fire({ //alerta de datos incompletos
                    icon: 'warning',
                    title: 'No se actualizaron los datos',
                    text: "Debes de llenar correctamente los campos",
                    showConfirmButton: false,
                    timer: 4000,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false
                })
            }
        })
     
    }else{
        document.getElementById('formulario__mensaje2').classList.add("formulario__mensaje-activo2");
    }
});

window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//esta linea es necesaria para chrome
window.onhashchange=function(){window.location.hash="no-back-button";}


