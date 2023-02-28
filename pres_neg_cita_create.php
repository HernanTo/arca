<?php 
include ('seguridad.php');
    if(!$_SESSION['administrador'] == 1){
        header('Location: pres_dashboard.php');
    }

$nameUs = $_SESSION["pNombre_U"];
$titlePage = "Gestion de Horarios.";
$descPage = "Gestiona los horarios de tus doctores y citas medicas.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Horarios | Arca</title>
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="stylesheet" href="./css/gesHorarios.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />

    <!-- CSS only -->

</head>
<body>

<div class="container-dashboard" style="transition: all 3s;">
    <?php
        include('./components/sidebar.php');
        include('./components/navbar.php');
        ?>
        <div class="body-contenido">
            <div class="con-cm-horarios">
               <div class="header-hor">
                <a href="./pres_neg_cita_index.php">
                    Ver todas los horarios
                    <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="">
                </a>
               </div>
               <div class="body-hor">
                    <form action="" method="post" class="con-form-hor">
                        <div class="h-form-hor">
                            <h3>Agregar Horario</h3>
                            <img src="./assets/img/icons/agregar.svg" alt="">
                        </div>
                        <section class="con-dc">
                            <div class="h-dc">
                                <p>Información del responsable de la cita.</p>
                                <hr>
                            </div>
                            <div class="body-dc">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Especialidad">
                                        <option selected>Especialidad</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label for="floatingSelect">Especialidad</label>
                                </div>

                                
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected>Especialista</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label for="floatingSelect">Doctor</label>
                                </div>

                                
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected>Consultorio</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label for="floatingSelect">Consultorio</label>
                                </div>

                            </div>

                        </section>
                        <section class="con-hr">
                            <div class="h-hr">
                                <p>Información de horarios</p>
                                <hr>
                            </div>
                            <div class="body-hr">
                                <!-- Limitar fechas -->
                                <input type="week" name="" id="" class="data-picker" require>

                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected>Jornada</option>
                                        <option value="1">Mañana (7AM - 12PM)</option>
                                        <option value="2">Tarde (13PM - 6PM)</option>
                                    </select>
                                    <label for="floatingSelect">seleccione la jornada</label>
                                </div>
                        </section>
                        <div class="con-btn-ht">
                            <input type="submit" value="Registrar">
                        </div>
                    </form>
               </div>
            </div>
        </div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="./js/sidebar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
