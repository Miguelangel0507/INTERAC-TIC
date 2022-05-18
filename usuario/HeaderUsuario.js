estadisticas();

function estadisticas() { //funcion para crear las estadisticas
    fetch("estadisticas.php").then(response => response.text()).then(response => {
        var estad = JSON.parse(response);
        var popCanvas = document.getElementById("SopaLetras");
        var barChart = new Chart(popCanvas, {
            type: 'bar',
            data: {
                labels: ["nivel1", "Nivel2", "Nivel3"],
                datasets: [{
                    label: 'Sopa de letras',
                    data: [estad.S1, estad.S2, estad.S3],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 206, 86)',
                    ]
                }]
            },
            options: {
                scales: {
                    plugins: {
                        title: {
                            display: false
                        }
                    },
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            min: 0,
                            max: 100,
                            stepSize: 10
                        }
                    }],
                    xA: [{
                        barThickness: 10
                    }]

                }
            }

        });

        var Result_trivia = document.getElementById("TriviaTic");
        var barChart = new Chart(Result_trivia, {
            type: 'bar',
            data: {
                labels: ["nivel1", "Nivel2", "Nivel3"],
                datasets: [{
                    label: 'Trivia Tic',
                    data: [estad.T1, estad.T2, estad.T3],
                    backgroundColor: [
                        'rgb(178, 226, 242)',
                        'rgb(255, 105, 97)',
                        'rgb(119, 221, 119)',
                    ]
                }]
            },
            options: {
                scales: {
                    plugins: {
                        title: {
                            display: false
                        }
                    },
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            min: 0,
                            max: 100,
                            stepSize: 10
                        }
                    }],
                    xA: [{
                        barThickness: 10
                    }]

                }
            }

        });
    })
}

btn_eliminar_estadisticas.addEventListener("click", (e) => {
    e.preventDefault();
    fetch("eliminar_estadisticas.php").then(response => response.text()).then(response => {
        if (response == true) {
            Swal.fire({ //Mensaje de actualizacion de datos correcta
                icon: 'success',
                title: 'Se han restablecido tus estadisticas',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false
            })
            setTimeout(recargar, 2000)
        } else {
            Swal.fire({ //alerta de error
                icon: 'warning',
                title: 'Ocurrio un error.',
                text: 'Debes escribir "ELIMINAR".',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false
            })
        }
    })
})

function recargar() {
    location.reload();
}