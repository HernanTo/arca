<?php 
include ('seguridad_admin.php');

$nombreus = $_SESSION["pNombre_U"];
$nombreCompleto = "$_SESSION[pNombre_U] $_SESSION[sNombre_U] $_SESSION[pApellido_U] $_SESSION[sApellido_U] ";
$nombrepag = "Gestion de usuarios.";
$descpag = "Gestiona a tus usuarios de una manera sencilla.";
$urlPhoto = $_SESSION["photo"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Usuarios</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <link rel="stylesheet" href="./css/gestionus_admin.css">
</head>
<body>
    <div class="container">
        <?php 
            include("./components/navbar.php");
            include("./components/sidebar.php");
        ?>
        <article class="con-search">
            <div class="items-info">
                <a href="./neg_U_leer.php?type='1'">Ver todos lo usuarios
                <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="">
                </a>
            </div>
                <div class="cards-search-small">
                    <h4 class="title">Buscar por roles.</h4>
                    <img src="./assets\img/icons/busqueda.svg" alt="" class="icon">
                    <form action="./neg_U_leer.php" method="post" class="form">
                        <input type="hidden" name="type" value="2">
                        <p>Selecciona el tipo de rol que deseas buscar.</p>
                        <select name="usuarioRol" id="usuarioRol" class="seleccion">
                            <option hidden>Tipo de rol</option>
                            <option value="1">Administrador</option>
                            <option value="2">Secretaria</option>
                            <option value="3">Doctor</option>
                            <option value="4">Paciente</option>
                        </select><br>
                        <button type="submit" class="btn">Buscar</button>
                    </form>
                </div>
                <div class="cards-search-small-2">
                    <h4 class="title">Buscar usuario.</h4>
                    <img src="./assets\img/icons/busqueda.svg" alt="" class="icon">
                    <form action="./neg_U_leer.php" method="post" class="form">
                        <input type="hidden" name="type" value="3">
                        <p>Ingresa los datos que deseas buscar.</p>
                        <select name="fk_pk_tipo_documentoU" id="fk_pk_tipo_documentoU" class="seleccion">
                            <option value="" hidden>Tipo de documento</option>
                            <option value="CC">Cédula de ciudadanía</option>
                            <option value="TI">Tarjeta de identidad</option>
                            <option value="CE">Cédula de extranjería</option>
                        </select><br>
                        <input name="documento" id="documento" type="text" placeholder="Numero de documento"><br>
                        <button type="submit" class="btn">Buscar</button>
                    </form>
                </div>
            <div class="card-search">
                <h4 class="title">Agregar usuarios.</h4>
                <img src="./assets\img/icons/agregar-usuario.svg" alt="" class="icon">
                <form action="neg_U_Crear.php" method="post" class="form">
                    <select name="usuarioRol" id="usuarioRol" class="seleccion">
                        <option hidden>Tipo de cuenta</option>
                        <option value="1">Administrador</option>
                        <option value="2">Secretaria</option>
                        <option value="3">Doctor</option>
                        <option value="4">Paciente</option>
                    </select><br>
                    <select name="especialidadU" id="especialidadU" class="seleccion">
                        <option hidden>Especialidad</option>
                        <option value="0">No aplica</option>
                        <option value="1">Doctor general</option>
                        <option value="2">Psicologo</option>
                        <option value="3">Terapeuta</option>
                    </select><br>
                    <select name="fk_pk_tipo_documentoU" id="fk_pk_tipo_documentoU" class="seleccion">
                        <option value="" hidden>Tipo de documento</option>
                        <option value="CC">Cédula de ciudadanía</option>
                        <option value="TI">Tarjeta de identidad</option>
                        <option value="CE">Cédula de extranjería</option>
                    </select><br>
                    <input name="documento" id="documento" type="text" placeholder="Numero de documento"><br>
                    <input name="pr_name" id="pr_name" type="text" placeholder="Primer nombre"><br>
                    <input name="sg_name" id="sg_name" type="text" placeholder="Segundo nombre"><br>
                    <input name="pr_apellido" id="pr_apellido" type="text" placeholder="Primer apellido"><br>
                    <input name="sg_apellido" id="sg_apellido" type="text" placeholder="Segundo apellido"><br>
                    <input name="correo" id="correo" type="text" placeholder="Correo electronico"><br>
                    <input name="Numcel" id="Numcel" type="text" placeholder="Numero de celular"><br>
                    <button type="submit" class="btn">Agregar</button>
                </form>
            </div>
        </article>
    </div>
</body>
</html>