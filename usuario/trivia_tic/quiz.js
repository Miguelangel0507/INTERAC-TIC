var question = document.getElementById('question');
var quizContainer = document.getElementById('quiz-container');
var scorecard = document.getElementById('scorecard');
var option0 = document.getElementById('option0');
var option1 = document.getElementById('option1');
var option2 = document.getElementById('option2');
var option3 = document.getElementById('option3');
var next = document.querySelector('.next');
var points = document.getElementById('score');
var span = document.querySelectorAll('span');
var cuenta = document.getElementById("cuenta"); //elemento donde escribimos la cuenta atrás 
var i = 0;
var score = 0;

function displayQuestion2(cuest) {
    window.cuestionario = cuest;
    document.getElementById("instrucciones").style.display = "none";
    document.getElementById("questions").style.display = "flex";
    reiniciar_cuenta()
    displayQuestion(cuestionario['cuestionario']);
}

//function to display questions
function displayQuestion(cuest) {
    for (var a = 0; a < span.length; a++) {
        span[a].style.background = 'none';
    }
    question.innerHTML = cuestionario['cuestionario'][i].pregunta;
    option0.innerHTML = cuestionario['cuestionario'][i].respuesta1;
    option1.innerHTML = cuestionario['cuestionario'][i].respuesta2;
    option2.innerHTML = cuestionario['cuestionario'][i].respuesta3;
    option3.innerHTML = cuestionario['cuestionario'][i].respuesta4;
    stat.innerHTML = "Pregunta" + ' ' + (i + 1) + ' ' + 'de' + ' ' + cuestionario['cuestionario'].length;
}

//function to calculate scores
function calcScore(e) {
    if (e.innerHTML === cuestionario['cuestionario'][i].respuesta_correcta) {
        score = score + 10;
        Swal.fire({ //Mensaje de pregunta correcta
            icon: 'success',
            title: 'Felicitaciones, acertaste.',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false
        })
        clearInterval(ignicion)
        puntos.innerHTML = "Puntos: " + ' ' + score;
    } else {
        PreguntaErronea()
        puntos.innerHTML = "Puntos: " + score;
        clearInterval(ignicion)
    }
    setTimeout(nextQuestion, 3000);
}

function PreguntaErronea() {
    Swal.fire({
        icon: 'error',
        title: '¡Perdiste!',
        text: "La respuesta correcta es la:" + ' ' + cuestionario['cuestionario'][i].respuesta_correcta + "  ",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false
    })
}

//function to display next question
function nextQuestion() {
    if (i < cuestionario['cuestionario'].length - 1) {
        i = i + 1;
        displayQuestion(cuestionario['cuestionario']);
        reiniciar_cuenta()
            //window.ignicion = setInterval(contador, 1000);
    } else { //se manda a la base de datos los puntos y se da aviso de que si gano o perdio
        let puntos_nivel = new FormData()
        puntos_nivel.append('puntos', score);
        fetch("puntos.php", {
            method: "POST",
            body: puntos_nivel
        }).then(response => response.text()).then(response => {
            (async() => {
                if (response == "gano") {
                    Swal.fire({
                        icon: 'success',
                        title: '!Felicitaciones Ganaste!',
                        texet: "Pasas al siguiente nivel",
                        showConfirmButton: false,
                        timer: 5000,
                        timerProgressBar: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = "../";
                        } else {
                            location.href = "../";
                        }
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Perdiste!',
                        text: 'debes sacar mas de 80 puntos',
                        timer: 5000,
                        timerProgressBar: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = "../";
                        } else {
                            location.href = "../";
                        }
                    })
                }

            })()
        })
    }
}
var importante = document.getElementById("import").value



var tim = () =>{
 if(importante == "trivia_nivel1")
        return 20;
else if(importante == "trivia_nivel2")
        return 15;
else if(importante == "trivia_nivel3")
         return 11;

}


function reiniciar_cuenta() {
    window.contar = tim();
    contador();
}


function contador() {
    function despegar() {
        cuenta.style.color = "black";
        contar -= 1;
        cuenta.innerHTML = contar;
        if (contar <= 0) {
            PreguntaErronea();
            window.contar = tim();
            clearInterval(ignicion);
            setTimeout(nextQuestion, 3000);
            return;
        } else {
            if (contar <= 5) {
                cuenta.style.color = "red";
            }
        }
    }
    despegar()
    window.ignicion = setInterval(despegar, 1005);
}