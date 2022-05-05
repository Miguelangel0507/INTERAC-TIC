ingresar.addEventListener("click", () => {
    alert("hola");
    fetch("php/login.php", {
        method: "POST",
        body: new FormData(form_login)
    }).then(response => response.text()).then(response => {
        console.log(response);
        if (response == "ok") {
            alert("usuario");
        } else {
            alert("nombre de usuario o contraseña incorrecta");
        }
    })
});

//else if (response == "ok_administrador") {
//alert("administrador");