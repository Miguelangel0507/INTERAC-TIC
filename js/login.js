// Validamos el rol del usuario y su actividad
ingresar.addEventListener("click", (e) => {
    e.preventDefault();
    fetch("php/validar_login.php", {
        method: "POST",
        body: new FormData(form_login)
    }).then(response => response.text()).then(response => {
        if (response == 1) {
            document.location.href = "usuario/";
        } else if (response == 2) {
            document.location.href = "administrador/";
        } else if (response == "inactivo") {
            document.getElementById("alerta").innerHTML = "Su estado es inactivo."
            document.getElementById("alerta").style.display = "block"
        } else {
            document.getElementById("alerta").innerHTML = "Revisa tu usuario y contraseña."
            document.getElementById("alerta").style.display = "block"
        }
    })
    form_login.reset()
});

btn_invitado.addEventListener("click", () => {
    fetch("php/validar_login.php").then(response => response.text()).then(response => {
        if (response == "ingreso") {
            document.location.href = "usuario/";
        } else {
            document.getElementById("alerta").innerHTML = "Ha ocurrido un error, intentalo de nuevo"
            document.getElementById("alerta").style.display = "block"
        }
    })

})

function ver() {
    const c = document.getElementById("contraseña")
    if (c.type == "password") {
        c.type = Text
    } else {
        c.type = "password"
    }
}