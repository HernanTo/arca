<?php
    // cambiar archivo de seg, con base al rol que pueda acceder
    include('./seguridad.php');

// Nombre y descripción de la pagina que se encontrará en el navbar
    $nameUs = $_SESSION["pNombre_U"];
    $titlePage = "Gestion de usuarios.";
    $descPage = "Gestiona a tus usuarios de una manera sencilla.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Start styles bootstrap -->
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- End styles bootstrap -->
    <!-- Start icons -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <!-- end icons -->
    <!-- Start styles Datatables -->
    <link rel="stylesheet" type="text/css" href="./datatable/css/jquery.dataTables.css">    
    <!-- End styles Datatables -->

    <!-- Start main core -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <link rel="stylesheet" href="./css/components.css">
    <!-- End main core -->

    
</head>
<body>

<div class="container-dashboard" style="transition: all 3s;">
    <?php
        include('./components/sidebar.php');
        include('./components/navbar.php');
    ?>
    <div class="body-contenido">
        <!-- contenido de la pagina -->
    </div>
</div>

<!-- Start script main core -->
<script src="./js/sidebar.js"></script>
<script src="./bootstrap/jquery.js"></script>
<script src="./bootstrap/bootstrap.bundle.min.js"></script>
<!-- end script main core -->

<!-- Start script datatables -->
<script src="./datatable/js/jquery.dataTables.js"></script>
<!-- end script datatables -->
 
<script>
$(document).ready( function () {
    $('#table-co').DataTable();
} )
</script>
</body>
</html>