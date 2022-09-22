<?php 
include ('seguridad_secretaria.php');
$nombreus = $_SESSION["pNombre_U"];
$nombreCompleto = "$_SESSION[pNombre_U] $_SESSION[sNombre_U] $_SESSION[pApellido_U] $_SESSION[sApellido_U] ";
$nombrepag = "Bienvenido a Arca.";
$descpag = "Hola $nombreus, comienza a explorar.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
</head>
<body>
    <div class="container">
        <?php 
            include("./components/menu.html");
            include("./components/navbar.php");
        ?>
        <article class="body_dash"></article>
    </div>
</body>
</html>
