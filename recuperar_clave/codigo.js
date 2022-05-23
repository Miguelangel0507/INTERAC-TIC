validar.addEventListener("click", (e) => {
  e.preventDefault();
  fetch("comprobar.php", {
    method: "POST",
    body: new FormData(contenedor),
  })
    .then((response) => response.text())
    .then((response) => {
      e.preventDefault();
     // alert(response);
     
      if (response == "v") {
        document.getElementById("alerta").innerHTML = "codigo vencido.";
        document.getElementById("alerta").style.display = "block";
      }else if (response == "m") {
        document.getElementById("alerta").innerHTML = "codigo erroneo.";
        document.getElementById("alerta").style.display = "block";
      }else{
          document.location.href = "cambiar.php?id="+response;
         
      }
    });
});
