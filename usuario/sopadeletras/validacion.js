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