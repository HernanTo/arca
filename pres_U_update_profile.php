<?php
    include('./seguridad.php');
    include ('./neg_dat_U_edit_show.php');
    $nameUs = $_SESSION["pNombre_U"];
    $titlePage = "Editar datos personales";
    $descPage = "Actualiza tu información de manera sencilla.";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>

        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/updateProfile.css">
        <link rel="stylesheet" href="./css/components.css">
        <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    </head>
    <body>
        <div class="container-dashboard">
            <?php
                include('./components/sidebar.php');
                include('./components/navbar.php');
            ?>
            <div class="body-contenido">
                <div class="con-update-profile">
                    <div class="body-update-profile">
                        <form class="con-form-profile" action="neg_dat_U_update_profile.php" alt="" method="POST">
                            <div class="head-form-profile">
                                Datos básicos
                            </div>
                            <div class="body-form-profile">
                                <div class="form-input-profile">
                                    <label>Tipo y número de documento</label>
                                    <input type="hidden" name="tdd" value="<?php echo $data['tdd'];?>">
                                    <input type="hidden" name="docUser" value="<?php echo $data['docUser'];?>">
                                    <input type="text" class="dates-input dates-input-view" readonly="readonly" value="<?php echo $data['tdd'], ' - ', $data['docUser'];?>">
                                </div>
                                <div class="form-input-profile">
                                    <label>Nombre completo</label>
                                    <input type="hidden" name="primerNombre" value="<?php echo $data['pNombre'];?>">
                                    <input type="hidden" name="segundoNombre" value="<?php echo $data['sNombre'];?>">
                                    <input type="hidden" name="primerApellido" value="<?php echo $data['pApellido'];?>">
                                    <input type="hidden" name="segundoApellido" value="<?php echo $data['sApellido'];?>">
                                    <input type="text" class="dates-input dates-input-view" readonly="readonly" value="<?php echo $data['pNombre'], ' ', $data['sNombre'], ' ', $data['pApellido'], ' ', $data['sApellido'];?>">
                                </div>
                                <div class="form-input-profile">
                                    <label>Fecha de nacimiento</label>
                                    <input type="date" name="fechaNaci" class="dates-input dates-input-view" readonly="readonly" value="<?php echo $data['fechaNaci'];?>">
                                </div>
                                <div class="form-input-profile">
                                    <label>Dirección de residencia</label>
                                    <input type="text"name="direccion_U" class="dates-input" value="<?php echo $data['direccion'];?>">
                                </div>
                                <div class="form-input-profile">
                                    <label>Correo electrónico</label>
                                    <input type="email" name="email_U" class="dates-input" value="<?php echo $data['email'];?>">
                                </div>
                                <div class="form-input-profile">
                                    <label>Celular</label>
                                    <input type="number" name="celular_U" class="dates-input" maxlength="10" value="<?php echo $data['celular'];?>">
                                </div>
                            </div>
                            <div class="footer-form-profile">
                                <input type="submit" value="Actualizar">
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