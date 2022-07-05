validarNivelSopa();
validarNivelTrivia();
estadisticas();

function validarNivelSopa() { //funcion para activar o desactivar los botones del jugador en la sopa de letras
    fetch("php/validarNivelSopa.php").then(response => response.text()).then(response => {
        if (response == 1) { //solo activa el boton del nivel
            document.getElementById("botonSopa1").disabled = false;
            document.getElementById("botonSopa2").disabled = true;
            document.getElementById("botonSopa2").style.backgroundColor = "#6c757d";
            document.getElementById("botonSopa3").disabled = true;
            document.getElementById("botonSopa3").style.backgroundColor = "#6c757d";
        } else if (response == 2) { //activa botnos del nivel 1 y 2 
            document.getElementById("botonSopa1").disabled = false;
            document.getElementById("botonSopa2").disabled = false;
            document.getElementById("botonSopa3").disabled = true;
            document.getElementById("botonSopa3").style.backgroundColor = "#6c757d";
        } else { //activa todos los botones
            document.getElementById("botonSopa1").disabled = false;
            document.getElementById("botonSopa2").disabled = false;
            document.getElementById("botonSopa3").disabled = false;
        }
    })
}

function validarNivelTrivia() { //funcion para activar o desactivar los botones del jugador en la trivia
    fetch("php/validarNivelTrivia.php").then(response => response.text()).then(response => {
        if (response == 1) { //solo activa el boton del nivel
            document.getElementById("botonTrivia1").disabled = false;
            document.getElementById("botonTrivia2").disabled = true;
            document.getElementById("botonTrivia2").style.backgroundColor = "#6c757d";
            document.getElementById("botonTrivia3").disabled = true;
            document.getElementById("botonTrivia3").style.backgroundColor = "#6c757d";
        } else if (response == 2) { //activa botnos del nivel 1 y 2 
            document.getElementById("botonTrivia1").disabled = false;
            document.getElementById("botonTrivia2").disabled = false;
            document.getElementById("botonTrivia3").disabled = true;
            document.getElementById("botonTrivia3").style.backgroundColor = "#6c757d";
        } else { //activa todos los botones
            document.getElementById("botonTrivia1").disabled = false;
            document.getElementById("botonTrivia2").disabled = false;
            document.getElementById("botonTrivia3").disabled = false;
        }
    })
}

//funciones para los botones segun el nivel
botonTrivia1.addEventListener("click", () => {
    trivia("trivia_nivel1")
});

botonTrivia2.addEventListener("click", () => {
    trivia("trivia_nivel2")
});

botonTrivia3.addEventListener("click", () => {
    trivia("trivia_nivel3")
});

botonSopa1.addEventListener("click", () => {
    mostrar_sopa("tecnologias_tic")
});

botonSopa2.addEventListener("click", () => {
    mostrar_sopa("sitios_turisticos")
});

botonSopa3.addEventListener("click", () => {
    mostrar_sopa("municipios_risaralda");
});

//funcion que toma la decision del jugador y lo redirecciona a la sopa de letras
function mostrar_sopa(desicion) {
    let desicion_nivel = new FormData()
    desicion_nivel.append('desicion1', desicion);
    fetch("php/DatosSopa.php", {
        method: "POST",
        body: desicion_nivel
    }).then(response => response.text()).then(response => {
        if (response) {
            location.href = "sopadeletras";
        }
    })
}

//funcion que toma la decision del jugador y lo redirecciona a la trivia
function trivia(desicion) {
    let desicion_nivel = new FormData()
    desicion_nivel.append('desicion1', desicion);
    fetch("PHP/DecisionTrivia.php", {
        method: "POST",
        body: desicion_nivel
    }).then(response => response.text()).then(response => {
        if (response) {
            location.href = "trivia_tic";
        }
    })
}