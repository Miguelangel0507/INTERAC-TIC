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
/*boton1.addEventListener("click", () => {
    mostrar_sopa("municipios_risaralda")
});

boton2.addEventListener("click", () => {
    mostrar_sopa("tecnologias_tic")
});

boton3.addEventListener("click", () => {
    mostrar_sopa("sitios_turisticos");
});

function mostrar_sopa(desicion) {
    alert(desicion)
    let desicion_nivel = new FormData()
    desicion_nivel.append('desicion1', desicion);
    fetch("datos.php", {
        method: "POST",
        body: desicion_nivel
    }).then(response => response.text()).then(response => {
        if (response) {
            var gamePuzzle = wordfindgame.create(response,
                "#puzzle", "#words");
            //cree solo un rompecabezas, sin completar los espacios en blanco e imprima en la consola
            var puzzle = wordfind.newPuzzle(words, {
                height: 18,
                width: 18,
                fillBlanks: false,
            });
            wordfind.print(puzzle);
        }

        document.getElementById("boton1").disabled = true;
        document.getElementById("boton2").disabled = true;
        document.getElementById("boton3").disabled = true;
        document.getElementById("contenido").style.display = "block";
    })

    document.getElementById("boton1").disabled = true;
    document.getElementById("boton2").disabled = true;
    document.getElementById("boton3").disabled = true;
    document.getElementById("contenido").style.display = "block";
} * /