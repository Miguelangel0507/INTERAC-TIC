validarJugador();

function validarJugador() {
    fetch("validarNivel.php").then(response => response.text()).then(response => {
        if (response == 1) {
            document.getElementById("boton1").disabled = false;
            document.getElementById("boton2").disabled = true;
            document.getElementById("boton3").disabled = true;
        } else if (response == 2) {
            document.getElementById("boton2").disabled = false;
            document.getElementById("boton2").disabled = false;
            document.getElementById("boton3").disabled = true;
        } else {
            document.getElementById("boton1").disabled = false;
            document.getElementById("boton2").disabled = false;
            document.getElementById("boton3").disabled = false;
        }
    })
}

boton1.addEventListener("click", () => {
    mostrar_sopa("municipios_risaralda")
});

boton2.addEventListener("click", () => {
    mostrar_sopa("tecnologias_tic")
});

boton3.addEventListener("click", () => {
    mostrar_sopa("sitios_turisticos");
});

function mostrar_sopa(desicion) {
    let desicion_nivel = new FormData()
    desicion_nivel.append('desicion1', desicion);
    fetch("datos.php", {
        method: "POST",
        body: desicion_nivel
    }).then(response => response.text()).then(response => {
        if (response) {
            location.href = "sopadeletras";
        }
    })
}