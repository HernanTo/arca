<?php 
include ('seguridad.php');
if(isset($_SESSION['paciente'])){
    if($_SESSION['paciente'] == 1){
        header('Location: pres_dashboard.php');
    }
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
    <title>Usuarios</title>
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/gesHorarios.css">
    <link rel="stylesheet" href="./css/components.css">
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
                <a href="neg_dat_pres_Ci_index.php" class="flecha-cm">Ver todas los horarios
                    <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="De clic aquí para ver todas las citas medicas">
                </a>
                <div class="con-new-cm">
                    <div class="con-cm">
                        <div class="title-cm">Agregar horario.
                            <a href="" class="agregar-cm">
                                <img src="./assets/img/icons/agregar.svg" alt="">
                            </a>
                        </div>
                        <div class="info-resp-cm">
                            <input type="text" name="resp-cm" autocomplete="off" required>
                            <label for="resp-cm" class="label-cm">
                                <span class="span-cm">
                                    Informacion del responsable de la cita.
                                </span>
                        </div>
                        <div class="info-doc">
                            <div class="especialidad-doc">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="fk_pk_tipo_documentoU" required>
                                        <option value="0">Ninguna</option>
                                        <option value="1">Medico General</option>
                                        <option value="2">Psicologo</option>
                                    </select>
                                    <label for="floatingSelect">especialidad</label>
                                    <span class="ico-input ico-input-select"><img src="./assets/img/icons/desplegable.svg" alt=""></span>
                                </div>          
                            </div>
                            <div class="name-doc">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="" required>
                                        <option value="0">1923938762 - Santiago Flores Gomez</option>
                                        <option value="1">1923938762 - Santiago Flores Gomez</option>
                                        <option value="2">1923938762 - Santiago Flores Gomez</option>
                                    </select>
                                    <label for="floatingSelect">Doctor</label>
                                    <span class="ico-input ico-input-select"><img src="./assets/img/icons/desplegable.svg" alt=""></span>
                                </div>       
                            </div>
                            <div class="consultorio-doc">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="" required>
                                        <option value="0">13</option>
                                        <option value="1">18</option>
                                        <option value="2">21</option>
                                    </select>
                                    <label for="floatingSelect">Consultorio</label>
                                    <span class="ico-input ico-input-select"><img src="./assets/img/icons/desplegable.svg" alt=""></span>
                                </div> 
                            </div>
                        </div>
                        <div class="info-resp-cm">
                            <input type="text" name="resp-cm" autocomplete="off" required>
                            <label for="resp-cm" class="label-cm">
                                <span class="span-cm">
                                    Informacion del responsable de la cita.
                                </span>
                        </div>
                        <div class="con-hora-agendamiento">
                            <div class="semana-agendamiento">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="" required>
                                            <option value="0">13 Febrero 2023 - 18 Febrero 2023</option>
                                            <option value="1">13 Febrero 2023 - 18 Febrero 2023</option>
                                            <option value="2">13 Febrero 2023 - 18 Febrero 2023</option>
                                        </select>
                                        <label for="floatingSelect">Semana de agendamiento</label>
                                        <span class="ico-input ico-input-select"><img src="./assets/img/icons/desplegable.svg" alt=""></span>
                                    </div>
                            </div>
                            <div class="horario-agendamiento">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="" required>
                                            <option value="0">Mañana (8 am - 11 am)</option>
                                            <option value="1">Mañana (8 am - 11 am)</option>
                                            <option value="2">Mañana (8 am - 11 am)</option>
                                        </select>
                                        <label for="floatingSelect">Horario</label>
                                        <span class="ico-input ico-input-select"><img src="./assets/img/icons/desplegable.svg" alt=""></span>
                                    </div>
                            </div>
                        </div>
                        <div class="con-btn-cm">
                            <input id="btn-cm" type="submit" value="Registrar"></input>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="./js/sidebar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>