<?php 
    include ('./seguridad.php');
    include ('./neg_dat_U_edit_show.php');
    $nameUs = $_SESSION["pNombre_U"];
    $tdd = $_SESSION['tdd'];
    $docu = $_SESSION['docu'];
    $titlePage = "Perfil";
    $descPage = "Actualiza tus datos personales.";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar perfil | Arca</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/editProfile.css">
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
                <div class="con-edit-profile">
                    <div class="head-edit-profile">
                        <div class="con-edit-photo">
                            <img src="<?php echo $urlPhoto?>" alt="Foto de perfil de usuario" class="img-edit-photo">
                            <a href="pres_U_update_profile.php" class="btn-edit-photo">
                                <img src="./assets/img/icons/photo.svg" alt="Editar foto de perfil de usuario">
                            </a>
                        </div>
                        <div class="con-edit-user">
                            <div class="name-edit-user">
                                <div class="name-edit-title"><?php echo $allName;?></div>
                                <div class="name-edit-text"><?php echo substr($tdd, 0, 1), ".", substr($tdd, 1, 1), ". ", $docu;?></div>
                            </div>
                            <a href="pres_U_update_profile.php" class="btn-edit-user">
                                <div class="btn-edit-title">Editar</div>
                            </a>
                        </div>
                    </div>
                    <div class="body-edit-profile">
                        <div class="con-data-user">
                            <div class="name-edit-title">Información personal</div>
                            <div class="basic-data-user">
                                <div class="icon-data-user">
                                    <img src="./assets/img/icons/retrato.svg" alt="EPS">
                                    <img src="./assets/img/icons/nacimiento.svg" alt="Fecha de nacimiento">
                                    <img src="./assets/img/icons/ubicacion.svg" alt="Dirección de residencia">
                                </div>
                                <div class="text-data-user">
                                    <div class="data-user">
                                        <div class="data-user-text">EPS</div>
                                        <div class="data-user-text"><?php echo $data['eps'];?></div>
                                    </div>
                                    <div class="data-user">
                                        <div class="data-user-text">Fecha de nacimiento</div>
                                        <div class="data-user-text"><?php echo $data['fechaNaci'];?></div>
                                    </div>
                                    <div class="data-user">
                                        <div class="data-user-text">Dirección de residencia</div>
                                        <div class="data-user-text"><?php echo $data['direccion'];?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="con-data-user">
                            <div class="name-edit-title">Contacto</div>
                            <div class="basic-data-user">
                                <div class="icon-data-user">
                                    <img src="./assets/img/icons/sobre 1.svg" alt="Correo electrónico">
                                    <img src="./assets/img/icons/telefono.svg" alt="Teléfono">
                                </div>
                                <div class="text-data-user">
                                    <div class="data-user">
                                        <div class="data-user-text">Teléfono</div>
                                        <div class="data-user-text"><?php echo $data['celular'];?></div>
                                    </div>
                                    <div class="data-user">
                                        <div class="data-user-text">Correo electrónico</div>
                                        <div class="data-user-text"><?php echo $data['email'];?></div>
                                    </div>
                                </div>
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