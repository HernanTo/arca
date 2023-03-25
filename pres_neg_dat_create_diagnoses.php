<?php 
include ('seguridad.php');
if(isset($_SESSION['paciente'])){
    if($_SESSION['paciente'] == 1){
        header('Location: pres_dashboard.php');
    }
}
if(isset($_SESSION['secretaria'])){
    if($_SESSION['secretaria'] == 1){
        header('Location: pres_dashboard.php');
    }
}

$nameUs = $_SESSION["pNombre_U"];
$titlePage = "Citas medicas.";
$descPage = "Observa las citas medicas que tienes a tu cargo.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosticos</title>
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/createDiagnoses.css">
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
                <div class="con-info-diagnoses">
                                <div class="con-complete-diagnoses">
                                    <div class="con-date">
                                        <h1>Registra tu diagnostico</h1>
                                    </div>
                                    <div class="info-cm">
                                        <h2>Paciente - Maria Perez Molano</h2>
                                        <hr class="border">
                                    </div>
                                    <div class="content-text-diagnoses">
                                            <form class="text-diagnoses">
                                                <textarea type="text" placeholder="Escribe tu diagnostico aqui"></textarea>
                                            </form>
                                            <div class="con-btn-create">
                                                    <input class="btn-create" type="submit" value="Registrar">
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