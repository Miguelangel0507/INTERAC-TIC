estadisticas();

function estadisticas() {
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