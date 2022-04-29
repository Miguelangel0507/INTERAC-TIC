MostrarDatos()

function MostrarDatos() { //Muestra los datos del usuario
    fetch("DatosUsuario.php")
        .then(response => response.json()).then(response => {
            document.getElementById("nombre").innerHTML = response[0].nombre;
            document.getElementById("correo").innerHTML = response[0].email;
            document.getElementById("username").innerHTML = response[0].username;
            nombres.value = response[0].nombre;
            nombre_personaje.value = response[0].username;
            editar_correo.value = response[0].email;
        })
}

const formulario = document.getElementById('padre')
const inputs = document.querySelectorAll('#padre input')

const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{5,16}$/, // Letras, numeros, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{4,16}$/, // Letras y espacios, pueden llevar acentos.
    password: /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8}$/, // 4 a 12 digitos.
    correo: /^[a-zA-Z0-9\.]+@+[a-z]{3,7}\.[a-z]{2,3}$/,
}

const campos = {
    nombres: true,
    nombre_personaje: true,
    editar_correo: true,
    password: false,
    password2: false
}

const validarFormulario = (e) => {

    switch (e.target.name) {
        case 'nombres':
            validarCampo(expresiones.nombre, e.target, "nombres");
            break;

        case 'nombre_personaje':
            validarCampo(expresiones.usuario, e.target, "nombre_personaje");
            break;

        case 'editar_correo':
            validarCampo(expresiones.correo, e.target, "editar_correo");
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

    if (inputpassword1.value !== inputpassword2.value || inputpassword2.value == "") {
        document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__password2 i`).classList.add("fa-times-circle");
        document.querySelector(`#grupo__password2 i`).classList.remove("fa-check-circle");
        document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add("formulario__input-error-activo");
        campos["password"] = false;
    } else {
        document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__password2 i`).classList.remove("fa-times-circle");
        document.querySelector(`#grupo__password2 i`).classList.add("fa-check-circle");
        document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove("formulario__input-error-activo");
        campos["password"] = true;
    }
}

inputs.forEach((inputs) => {
    inputs.addEventListener("keyup", validarFormulario);
    inputs.addEventListener("blur", validarFormulario);
})

formulario__btn.addEventListener("click", (e) => {
    e.preventDefault();
    if (campos.nombres && campos.nombre_personaje && campos.editar_correo && campos.password) {
        //se envia el formulario a la direccion URL para el registro del usuarios
        fetch("actualizar.php", {
            method: "POST",
            body: new FormData(formulario_usuario)
        }).then(response => response.text()).then(response => { //alertas por actualizacion de datos
            if (response == true) {
                Swal.fire({ //Mensaje de actualizacion de datos correcta
                    icon: 'success',
                    title: 'Tus datos fueron actualizados',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false
                })
                MostrarDatos()
                formulario_usuario.reset();

            } else {
                Swal.fire({ //alerta al no hacer cambio en la base de datos
                    icon: 'warning',
                    title: 'Ocurrio un error.',
                    text: "No se pudieron actualizar tus datos",
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false
                })
                MostrarDatos();
                formulario_usuario.reset();

            }
        })
    } else {
        reset_mensaje();
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
        MostrarDatos();
        formulario_usuario.reset();


    }
});

btn_eliminar.addEventListener("click", () => {
    var palabra = document.getElementById('text_eliminar').value;
    if (palabra == "ELIMINAR") {
        fetch("EliminarUsuario.php").then(response => response.text()).then(response => {
            if (response == true) {
                Swal.fire({ //Mensaje de actualizacion de datos correcta
                    icon: 'success',
                    title: 'Tu cuenta a sido eliminada correctamente',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false
                })

                setTimeout(location.href = "../index.php", 3000)
            }
        })
    } else {
        Swal.fire({
            icon: 'warning',
            title: 'Ocurrio un error.',
            text: 'Debes escribir "ELIMINAR"',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false
        })
    }

})

function reset_mensaje() {
    for (var key in campos) {
        console.log(key)
        console.log(campos)
        document.getElementById('grupo__' + key).classList.remove('formulario__grupo-incorrecto');
        document.getElementById('grupo__' + key).classList.remove('formulario__grupo-correcto');
        document.querySelector('#grupo__' + key + ' i').classList.remove("fa-times-circle");
        document.querySelector('#grupo__' + key + ' i').classList.remove("fa-check-circle");
        document.querySelector('#grupo__' + key + ' .formulario__input-error').classList.remove("formulario__input-error-activo");
    }
}