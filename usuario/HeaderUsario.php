    <link rel="stylesheet" href="../css/header.css">
    <script src="https://kit.fontawesome.com/8bac99961f.js" crossorigin="anonymous"></script>
    <nav>
        <!--logo-->
        <p class="logo">INTERAC-TIC</p>
        <!--checkbox-->
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <!--lista-->
        <ul class="cont-ul">
            <a href="./index.php">
                <li>Juegos</li>
            </a>
            <li class="develop">
                Estadisticas
                <ul class="ul-second">
                    <li class="back">
                        <!--boton para restablecer estadisticas-->
                        <div class="config">
                            <button class="btno-config" data-bs-toggle='modal' data-bs-target='#M_estadisiticas'><i class="fa-solid fa-gear"></i></button>
                        </div>
                        <!--estadisticas sopa-->
                        <div class="estad_sopa">
                            <canvas id="SopaLetras"></canvas>
                        </div>
                        <br>
                        <!--estadisticas trivia-->
                        <div class="estad_trivia">
                            <canvas id="TriviaTic"></canvas>
                        </div>
                    </li>
                </ul>
            </li>
            <a href="PerfilUsuario.php">
                <li>Perfil</li>
            </a>
            <a href="../php/salir.php">
                <li>Salir</li>
            </a>
        </ul>
    </nav>

    <!--MODAL ELIMINAR ESTADISTICAS-->
    <div class="modal fade" id="M_estadisiticas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Restablecer estadisticas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="mensaje_eliminar">Al eliminar tus estadisticas vas perder todo tu avance en los juegos.</label>
                    <label class="mensaje_eliminar">¿Seguro que quieres restablecer tus estadisticas?</label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type='button' class='btn btn-danger btn_eliminar' id='btn_eliminar_estadisticas'><i class='fas fa-trash-alt'></i> Eliminar estadisticas</button>
                </div>
            </div>
        </div>
    </div>
    <script src="HeaderUsuario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>