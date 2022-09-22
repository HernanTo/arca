<?php
    $nombreus = $_SESSION["pNombre_U"];
    $nombreCompleto = "$_SESSION[pNombre_U] $_SESSION[sNombre_U] $_SESSION[pApellido_U] $_SESSION[sApellido_U] ";
    $urlPhoto = $_SESSION["photo"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">

</head>
<body>
    <article class="header">
        <section class="name-page"><h2><?php echo $nombrepag;?></h2></section>
        <section class="des-page"><p><?php echo $descpag; ?></p></section>
        <section class="con-name"><h4><?php echo $nombreCompleto; ?></h4></section>
        <section class="funciones"><a href="salir.php">Cerrar sesión</a></section>
        <section class="con-photo"><img src="<?php echo $urlPhoto; ?>" alt=""></section>
    </article>
</body>
</html>