const formulario = document.getElementById('padre')
const inputs = document.querySelectorAll('#padre input')

const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{5,16}$/, // Letras, numeros, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{4,16}$/, // Letras y espacios, pueden llevar acentos.
    password: /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8}$/, // 4 a 12 digitos.
    correo: /^[a-zA-Z0-9\.]+@+[a-z]{3,7}\.[a-z]{2,3}$/,
}

const campos = {
    nombre: false,
    nombre_personaje: false,
    correo: false,
    password: false
}

const validarFormulario = (e) => {
        switch (e.target.name) {
            case 'nombre':
                validarCampo(expresiones.nombre, e.target, "nombre");
                break;

            case 'nombre_personaje':
                validarCampo(expresiones.usuario, e.target, "nombre_personaje");
                break;

            case 'correo':
                validarCampo(expresiones.correo, e.target, "correo");
                break;

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
    if (campos.nombre && campos.nombre_personaje && campos.correo && campos.password) {
        //se envia el formulario a la direccion URL para el registro del usuarios
        e.preventDefault();
        fetch("php/registrar_usuario.php", {
            method: "POST",
            body: new FormData(formulario_usuario)
        }).then(Response => Response.text()).then(Response => {
            if (Response == "nom_ocupado") {
                document.querySelector('#grupo__nombre_personaje .formulario__input-error2').classList.add("formulario__input-error2-activo");
                document.querySelector('#grupo__nombre_personaje ').classList.add('formulario__grupo-incorrecto');
                document.querySelector('#grupo__nombre_personaje i').classList.add('fa-times-circle');
            } else if (Response == "email_ocupado") {
                document.querySelector('#grupo__correo .formulario__input-error2').classList.add("formulario__input-error2-activo");
                document.querySelector('#grupo__correo ').classList.add('formulario__grupo-incorrecto');
                document.querySelector('#grupo__correo i').classList.add('fa-times-circle');
                document.querySelector('#grupo__nombre_personaje .formulario__input-error2').classList.remove("formulario__input-error2-activo")
            } else if (Response == "guardados") {
                Swal.fire({ //Mensaje de actualizacion de datos correcta
                    icon: 'success',
                    title: 'Registro exitoso',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false
                })
                setTimeout(() => {
                    document.getElementById("formulario__mensaje-exito").classList.remove("formulario__mensaje-exito-activo")
                    update();
                }, 3000);
                document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
                    icono.classList.remove('formulario__grupo-correcto');
                });
                formulario_usuario.reset();
                return;
            }
        });
    } else {
        document.getElementById('grupo__nombre_personaje').classList.add("formulario__input-error2-activo");
    }
});

function ver() {
    const c = document.getElementById("password")
    const c2 = document.getElementById("password2")

    if (c.type == "password") {
        c.type = Text
        c2.type = Text
    } else {
        c.type = "password"
        c2.type = "password"
    }
}



function update() {
    document.location.href = "index.php";
}