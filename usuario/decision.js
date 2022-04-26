validarNivelSopa();
validarNivelTrivia();
estadisticas();

function validarNivelSopa() {
    fetch("validarNivelSopa.php").then(response => response.text()).then(response => {
        if (response == 1) {
            document.getElementById("botonSopa1").disabled = false;
            document.getElementById("botonSopa2").disabled = true;
            document.getElementById("botonSopa2").style.backgroundColor = "#6c757d";
            document.getElementById("botonSopa3").disabled = true;
            document.getElementById("botonSopa3").style.backgroundColor = "#6c757d";
        } else if (response == 2) {
            document.getElementById("botonSopa1").disabled = false;
            document.getElementById("botonSopa2").disabled = false;
            document.getElementById("botonSopa3").disabled = true;
            document.getElementById("botonSopa3").style.backgroundColor = "#6c757d";
        } else {
            document.getElementById("botonSopa1").disabled = false;
            document.getElementById("botonSopa2").disabled = false;
            document.getElementById("botonSopa3").disabled = false;

        }
    })
}

function validarNivelTrivia() {
    fetch("validarNivelTrivia.php").then(response => response.text()).then(response => {
        if (response == 1) {
            document.getElementById("botonTrivia1").disabled = false;

            document.getElementById("botonTrivia2").disabled = true;
            document.getElementById("botonTrivia2").style.backgroundColor = "#6c757d";

            document.getElementById("botonTrivia3").disabled = true;
            document.getElementById("botonTrivia3").style.backgroundColor = "#6c757d";

        } else if (response == 2) {
            document.getElementById("botonTrivia1").disabled = false;
            document.getElementById("botonTrivia2").disabled = false;
            document.getElementById("botonTrivia3").disabled = true;
            document.getElementById("botonTrivia3").style.backgroundColor = "#6c757d";
        } else {
            document.getElementById("botonTrivia1").disabled = false;
            document.getElementById("botonTrivia2").disabled = false;
            document.getElementById("botonTrivia3").disabled = false;
        }
    })
}
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
    mostrar_sopa("municipios_risaralda")
});

botonSopa2.addEventListener("click", () => {
    mostrar_sopa("tecnologias_tic")
});

botonSopa3.addEventListener("click", () => {
    mostrar_sopa("sitios_turisticos");
});

function mostrar_sopa(desicion) {
    let desicion_nivel = new FormData()
    desicion_nivel.append('desicion1', desicion);
    fetch("DatosSopa.php", {
        method: "POST",
        body: desicion_nivel
    }).then(response => response.text()).then(response => {
        if (response) {
            location.href = "sopadeletras";
        }
    })
}

function trivia(desicion) {
    let desicion_nivel = new FormData()
    desicion_nivel.append('desicion1', desicion);
    fetch("DecisionTrivia.php", {
        method: "POST",
        body: desicion_nivel
    }).then(response => response.text()).then(response => {
        if (response) {
            location.href = "trivia_tic";
        }
    })
}