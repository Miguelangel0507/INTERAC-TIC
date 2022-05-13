$(document).ready(function() {

    $(window).load(function() {
        $(".cargando").fadeOut(1000);
    });

//Ocultar mensaje
setTimeout(function () {
    $("#contenMsjs").fadeOut(1000);
}, 3000);



btnBorrar.addEventListener("click", (e) =>{
    
   // e.preventDefault();
fetch("/recib_Delete.php",{
    method:"POST",
    body:new FormData(eliminar)
}).then(Response=>Response.text()).then(Response=>{ 
    if(Response){
        alert(Response);
    }else
        alert("error");
});










   /*var id = $(this).attr("id");

    var dataString = 'id='+ id;
    url = "recib_Delete.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function(data)
            {
              window.location.href="index.php";
              $('#respuesta').html(data);
            }*/
        });
return false;

});


