estadisticas();

function estadisticas() { //funcion para crear las estadisticas
    fetch("php/estadisticas.php").then(response => response.text()).then(response => {
        var estad = JSON.parse(response);
        var popCanvas = document.getElementById("nivel1");
        var popCanvas2 = document.getElementById("nivel2");
        var popCanvas3 = document.getElementById("nivel3");
        var popCanvas4 = document.getElementById("nivel_trivia1");
        var popCanvas5 = document.getElementById("nivel_trivia2");
        var popCanvas6 = document.getElementById("nivel_trivia3");
        var barChart = new Chart(popCanvas, {
            type: 'pie',
            data: {
                labels: ["Puntos", "Puntos faltantes"],
                datasets: [{
                    label: 'Sopa de letras',
                    data: [estad.S1, 80 - estad.S1],
                    //data: [estad.S1, estad.S2, estad.S3],
                    backgroundColor: [
                        'rgb(23, 151, 64)',
                        'rgb(204, 6, 5, 0.6)'

                    ]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Nivel 1"
                }
            }
        });

        var barChart = new Chart(popCanvas2, {
            type: 'pie',
            data: {
                labels: ["Puntos", "Puntos faltantes"],
                datasets: [{
                    label: 'Sopa de letras',
                    data: [estad.S2, 110 - estad.S2],
                    //data: [estad.S1, estad.S2, estad.S3],
                    backgroundColor: [
                        'rgb(23, 151, 64)',
                        'rgb(204, 6, 5, 0.6)'
                    ]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Nivel 2"
                }
            }
        })

        var barChart = new Chart(popCanvas3, {
            type: 'pie',
            data: {
                labels: ["Puntos", "Puntos faltantes"],
                datasets: [{
                    label: 'Sopa de letras',
                    data: [estad.S3, 110 - estad.S3],
                    backgroundColor: [
                        'rgb(23, 151, 64)',
                        'rgb(204, 6, 5, 0.6)'
                    ]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Nivel 2"
                }
            }
        })

        var barChart = new Chart(popCanvas4, {
            type: 'pie',
            data: {
                labels: ["Puntos", "Puntos faltantes"],
                datasets: [{
                    label: 'Trivia Tic',
                    data: [estad.T1, 100 - estad.T1],
                    backgroundColor: [
                        'rgb(23, 151, 64)',
                        'rgb(204, 6, 5, 0.6)'
                    ]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Nivel 1"
                }
            }

        })

        var barChart = new Chart(popCanvas5, {
            type: 'pie',
            data: {
                labels: ["Puntos", "Puntos faltantes"],
                datasets: [{
                    label: 'Trivia Tic',
                    data: [estad.T1, 100 - estad.T1],
                    backgroundColor: [
                        'rgb(23, 151, 64)',
                        'rgb(204, 6, 5, 0.6)'
                    ]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Nivel 2"
                }
            }

        })

        var barChart = new Chart(popCanvas6, {
            type: 'pie',
            data: {
                labels: ["Puntos", "Puntos faltantes"],
                datasets: [{
                    label: 'Trivia Tic',
                    data: [estad.T1, 100 - estad.T1],
                    backgroundColor: [
                        'rgb(23, 151, 64)',
                        'rgb(204, 6, 5, 0.6)'
                    ]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Nivel 3"
                }
            }

        })
    })
}

btn_eliminar_estadisticas.addEventListener("click", (e) => { //eliminar estadisticas del usuario
    e.preventDefault();
    fetch("php/eliminar_estadisticas.php").then(response => response.text()).then(response => {
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

function recargar() { //recaga la pagina
    location.reload();
}