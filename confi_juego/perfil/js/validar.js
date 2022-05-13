MostrarDatos();


function MostrarDatos() { //Muestra los datos del usuario
    fetch("consulta.php")
        .then(response => response.json()).then(response => {
            document.getElementById("i").innerHTML = response[0].id_username;
            document.getElementById("es").innerHTML = response[0].estado;
            document.getElementById("n").innerHTML = response[0].nombre;
            document.getElementById("e").innerHTML = response[0].email;
           
            
            id1.value= response[0].id_username
            nombre1.value = response[0].nombre;
            correo.value = response[0].email;
           
        })
}


// Accedemos al botón
var c1 = document.getElementById('password');
var c2 =document.getElementById('password2');

const formulario = document.getElementById('padre')
const inputs = document.querySelectorAll('#padre input')

const expresiones = {
    password: /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8}$/, // 4 a 12 digitos.
     nombre: /^[a-zA-ZÀ-ÿ\s]{4,16}$/, // Letras y espacios, pueden llevar acentos.
    correo: /^[a-zA-Z0-9\.]+@+[a-z]{3,7}\.[a-z]{2,3}$/,
}

const campos = {
    correo: true,
    password: false,
    nombre: true
}
const validarFormulario = (e) => {

    switch (e.target.name) {
        case 'correo':
            
            validarCampo(expresiones.correo, e.target, "correo");

            break;

              case 'nombre1':
                validarCampo(expresiones.nombre, e.target, "nombre");

                break;

        case 'password':
            validarCampo(expresiones.password, e.target, "password");
            validarPassword2();

            break;

        case 'password2':
            validarPassword2();
            break;

    }

}

 //validar datos
 const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.remove("fa-times-circle");
        document.querySelector(`#grupo__${campo} i`).classList.add("fa-check-circle");
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove("formulario__input-error-activo");
        campos[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add("fa-times-circle");
        document.querySelector(`#grupo__${campo} i`).classList.remove("fa-check-circle");
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add("formulario__input-error-activo");
        campos[campo] = false;
    }

}
// Validar contraseñas
const validarPassword2 = () => {
const inputpassword1 = document.getElementById("password");
const inputpassword2 = document.getElementById("password2");

if (inputpassword1.value !== inputpassword2.value) {
    document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
    document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
    document.querySelector(`#grupo__password2 i`).classList.add("fa-times-circle");
    document.querySelector(`#grupo__password2 i`).classList.remove("fa-check-circle");
    document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add("formulario__input-error-activo");
    campos["inputpassword1"] = false;
} else {
    document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
    document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
    document.querySelector(`#grupo__password2 i`).classList.remove("fa-times-circle");
    document.querySelector(`#grupo__password2 i`).classList.add("fa-check-circle");
    document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove("formulario__input-error-activo");
    campos["inputpassword1"] = true;
}
}

inputs.forEach((inputs) => {
    inputs.addEventListener("keyup", validarFormulario);
    inputs.addEventListener("blur", validarFormulario);
})



// evento para el input radio del "si"
document.getElementById('interesadoPositivo').addEventListener('click', function(e) {

    
    console.log('Vamos a habilitar el input contraseña');
    c1.disabled = false,
    c2.disabled = false;
    campos.password = false;
})


 // evento para el input radio del "no"
 document.getElementById('interesadoNegativo').addEventListener('click', function(e) {
    console.log('Vamos a deshabilitar el input text');
    c1.disabled = true,
    c2.disabled = true;
    const inputpassword1 = document.getElementById("password");
    const inputpassword2 = document.getElementById("password2");
    document.getElementById(`grupo__password`).classList.remove('formulario__grupo-incorrecto');
    document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
    document.querySelector(`#grupo__password .formulario__input-error`).classList.remove("formulario__input-error-activo");  
    document.getElementById('formulario__mensaje2').classList.remove("formulario__mensaje-activo2");
    document.querySelector(`#grupo__password2 i`).classList.remove("fa-check-circle");
    document.querySelector(`#grupo__password i`).classList.remove("fa-check-circle");
    campos["inputpassword1"] = true;
   // formulario_usuario.reset();
    campos.password = false;

});


        formulario__btn.addEventListener("click", (e) => {
            // alert("mk");
             e.preventDefault();
             var deci = document.getElementById('interesadoPositivo').checked
             var deci2 = document.getElementById('interesadoNegativo').checked

             //alert(deci);
             
         if(deci &&  campos.correo && campos.nombre && campos.password){
                //se envia el formulario a la direccion URL para el registro del usuarios
             // alert("tdo")
              fetch("cambiar_admin.php",{
                  method: "POST" ,
                  body: new FormData(formulario_usuario)
              }).then(Response=>Response.text()).then(Response=>{
                if(Response){ 
                    Swal.fire({ //Mensaje de actualizacion de datos correcta
                    icon: 'success',
                    title: 'Tu datos han sido actualizado',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false
                    })
                   
                   MostrarDatos();  
                    $('#padre').modal('hide') 
                  //  setTimeout(() =>{document.location.href="#"},3000);
                   }else{Swal.fire({ //alerta de datos incompletos
                    icon: 'warning',
                    title: 'No se actualizaron los datos',
                    text: "Debes de llenar correctamente los campos",
                    showConfirmButton: false,
                    timer: 4000,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false
                    })}
              })



               // location.href="cambiar_admin.php";
               /*  fetch("cambiar_admin.php", {
                    method: "POST",
                    body: new FormData(formulario_usuario)
                }).then(Response=>Response.text()).then(Response=>{
                    alert(Response)
                })*/
         }else if(deci2 && campos.correo && campos.nombre ){
            //alert("solo nombre y correo")
            //alert(campos.nombre)
            fetch("cambiar_admin.php", {
                method: "POST",
                body: new FormData(formulario_usuario)
            }).then(Response=>Response.text()).then(Response=>{
               if(Response){
                Swal.fire({ //Mensaje de actualizacion de datos correcta
                    icon: 'success',
                    title: 'Tu datos han sido actualizado',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false
                })
                MostrarDatos();
             $('#padre').modal('hide')
               // setTimeout(location.href="perfil_admin.php", 3000);
               }else{
                   Swal.fire({ //alerta de datos incompletos
                icon: 'warning',
                title: 'No se actualizaron los datos',
                text: "Debes de llenar correctamente los campos",
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false
            })}
            })
         }else{
            document.getElementById('formulario__mensaje2').classList.add("formulario__mensaje-activo2");
         }

         
           /*  
         
                 //se crea nueva rama ensayo
                 formulario_usuario.reset();
                 document.getElementById("formulario__mensaje-exito").classList.add("formulario__mensaje-exito-activo");
         
                 setTimeout(() => {
                     document.getElementById("formulario__mensaje-exito").classList.remove("formulario__mensaje-exito-activo")
                    
                 }, 3000);
         
                 document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
                     icono.classList.remove('formulario__grupo-correcto');
                 });
                 return;
             } else {
                 document.getElementById('formulario__mensaje2').classList.add("formulario__mensaje-activo2");
         
         
             }
             */
        
         
  });

