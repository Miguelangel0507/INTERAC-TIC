MostrarDatos()

function MostrarDatos() {
    fetch("DatosUsuario.php")
        .then(response => response.json()).then(response => {
            document.getElementById("nombre").innerHTML = response[0].nombre;
            document.getElementById("correo").innerHTML = response[0].email;
            document.getElementById("username").innerHTML = response[0].username;
            editar_nombre.value = response[0].nombre;
            editar_nombre_personaje.value = response[0].username;
            editar_correo.value = response[0].email;
        })
}

formulario_boton.addEventListener("click", () => {
    fetch("actualizar.php", {
        method: "POST",
        body: new FormData(formulario_usuario)
    }).then(response => response.text()).then(response => {
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
            Swal.fire({
                icon: 'alert',
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
})