validar.addEventListener("click", (e) => {
    e.preventDefault();
    fetch("comprobar.php", {
            method: "POST",
            body: new FormData(contenedor),
        })
        .then((response) => response.text())
        .then((response) => {
            e.preventDefault();
            if (response == "v") {
                document.getElementById("alerta").innerHTML = "Codigo vencido.";
                document.getElementById("alerta").style.display = "block";
            } else if (response == "m") {
                document.getElementById("alerta").innerHTML = "Codigo erroneo.";
                document.getElementById("alerta").style.display = "block";
            } else {
                document.location.href = "cambiar.php?id=" + response;
            }
        });
});