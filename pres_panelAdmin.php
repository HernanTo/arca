<?php 
include ('seguridad_admin.php');
include ('./complementos/neg_U_canUsers.php');

$nombreus = $_SESSION["pNombre_U"];
$descpag = "Hola $nombreus, comienza a explorar.";
// $nombreCompleto = "$_SESSION[pNombre_U] $_SESSION[sNombre_U] $_SESSION[pApellido_U] $_SESSION[sApellido_U] ";
$nombrepag = "Bienvenido a Arca.";

// Contabiliza la cantidad de usuarios y la guarda en un array [admin, secretaria, doctor, paciente]
$canUsers = canUsers();
// Contabiliza la cantidad de PQRSF respondidos y no respondidos [no respodidos, respondidos] (falta realizar funcion por falta de registros)
$infoPqrsf = [23,22]
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
    <link rel="stylesheet" href="./css/panel_admin.css">
</head>
<body>
    <div class="container">
        <?php 
            include("./components/sidebar.php");
            include("./components/navbar.php");
        ?>
        <article class="body_dash">
            <section class="con-infoUsers-can">
                <div class="items-info">
                    <h2>Usuarios</h2>
                </div>
                <div class="items-info">
                    <a href="./pres_gestionUsAdmin.php">Gestionar de usuarios
                        <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="">
                    </a>
                </div>

                <div class="items-info cards-can-user">
                    <div class="con-ico">
                        <img src="./assets/img/icons/paciente.svg" alt="">
                    </div>
                    <div class="con-can">
                        <h3><?php echo $canUsers[3]?></h3>
                    </div>
                    <div class="con-rol-user">
                        <h6>Pacientes</h6>
                    </div>
                </div>

                <div class="items-info cards-can-user">
                    <div class="con-ico">
                        <img src="./assets/img/icons/doctor.svg" alt="">
                    </div>
                    <div class="con-can">
                        <h3><?php echo $canUsers[2]?></h3>
                    </div>
                    <div class="con-rol-user">
                        <h6>Doctores</h6>
                    </div>
                </div>

                <div class="items-info cards-can-user">
                    <div class="con-ico">
                        <img src="./assets/img/icons/secretaria.svg" alt="">
                    </div>
                    <div class="con-can">
                        <h3><?php echo $canUsers[1]?></h3>
                    </div>
                    <div class="con-rol-user">
                        <h6>Secretarias</h6>
                    </div>
                </div>

                <div class="items-info cards-can-user">
                    <div class="con-ico">
                        <img src="./assets/img/icons/admin.svg" alt="">
                    </div>
                    <div class="con-can">
                        <h3><?php echo $canUsers[0]?></h3>
                    </div>
                    <div class="con-rol-user">
                        <h6>Administrador</h6>
                    </div>
                </div>

            </section>
            <section class="con-info-pqrsf">
                <div class="items-info items-info-pqrs">
                    <h2>Informe de PQRSF</h2>
                </div>
                <div class="items-info">
                    <a href="">Ver más
                        <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="">
                    </a>
                </div>
                <div class="items-info cards-pqrsf">
                    <div class="part-sup">
                        <h2>PQRSF sin responder</h2>
                    </div>
                    <div class="par-bott">
                        <h3><?php echo $infoPqrsf[0]?></h3>
                    </div>
                </div>

                <div class="items-info cards-pqrsf">
                    <div class="part-sup">
                        <h2>PQRSF respondidos</h2>
                    </div>
                    <div class="par-bott">
                        <h3><?php echo $infoPqrsf[1]?></h3>
                    </div>
                </div>
            </section>
        </article>
    </div>
</body>
</html>