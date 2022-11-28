<?php
    class user{
        public function show($tdd, $document, $rolUser, $specialtyUser){
            include('./data_conexion.php');
            $contidionRol = 'TRUE';
            $contidionSpe = 'TRUE';
            if($rolUser == 2){
                $contidionRol = 'cod_rol = 4';
            }else if($rolUser == 1){
                if($specialtyUser == 0){
                    $contidionSpe = 'especialidad_U = 0 AND cod_rol != 1';
                }
            }

            $sql = "SELECT CONCAT(fk_pk_tipo_documentoU, ' ', documento_U) as 'documento', `estado_U`, CONCAT(pNombre_U, ' ', sNombre_U, ' ', pApellido_U, ' ', sApellido_U) as 'nombre' , fechaNacimiento_U, direccion_U, correoElectronico_U, celular_U, nombreEspecialidad, desc_rol, fk_pk_tipo_documentoU, documento_U, photo, eps_P  FROM usuario
            INNER JOIN usuario_has_roles on documento_U = usuario_id
            INNER JOIN roles on usuario_rol = cod_rol
            INNER JOIN especialidad on idEspecialidad = especialidad_U
            WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$document' AND $contidionRol AND $contidionSpe";
            $resultado = $db->query($sql);
            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    $data = [
                        'documento' => $row['documento'],
                        'estado' => $row['estado_U'],
                        'name' => $row['nombre'],
                        'dateAge' => $row['fechaNacimiento_U'],
                        'address' => $row['direccion_U'],
                        'email' => $row['correoElectronico_U'],
                        'phoneNum' => $row['celular_U'],
                        'specialty' => $row['nombreEspecialidad'],
                        'rol' => $row['desc_rol'],
                        'tdd' => $row['fk_pk_tipo_documentoU'],
                        'document' => $row['documento_U'],
                        'photo' => $row['photo'],
                        'eps' => $row['eps_P'],
                    ];
                    }
            }else{
                $data = FALSE;
            }
            return $data;
        }
    }
?>
<?php
    // cambiar archivo de seg, con base al rol que pueda acceder
    include('./seguridad.php');
    if(isset($_SESSION['doctor'])){
        if($_SESSION['doctor'] == 1){
            header('Location: pres_dashboard.php');
        }
    }
    if(isset($_SESSION['paciente'])){
        if($_SESSION['paciente'] == 1){
            header('Location: pres_dashboard.php');
        }
    }

// Nombre y descripción de la pagina que se encontrará en el navbar
    $nameUs = $_SESSION["pNombre_U"];
    $titlePage = "Gestion de usuarios.";
    $descPage = "Gestiona a tus usuarios de una manera sencilla.";

    $classUser = new User;
    $data = $classUser->show($_GET['tdd'], $_GET['document'], $_SESSION['role'], $_SESSION['specialty']);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de <?php echo $_GET['tdd'] . ' ' . $_GET['document']?> | Arca</title>
    <!-- Start styles bootstrap -->
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- End styles bootstrap -->
    <!-- Start icons -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <!-- end icons -->
    <!-- Start main core -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <link rel="stylesheet" href="./css/components.css">
    <!-- End main core -->
    <link rel="stylesheet" href="./css/showDataUser.css">

    
</head>
<body>
<div class="container-dashboard" style="transition: all 3s;">
    <?php
        include('./components/sidebar.php');
        include('./components/navbar.php');
    ?>
    <div class="body-contenido">
        <?php 
            if(!$data){
                ?>
                <div class="con-show-data-no-user">
                    <div class="alert-show-user">
                        <div class="con-img-alert-show">
                            <img src="./assets/img/icons/alert.svg" alt="">
                        </div>
                        <div class="alert-show">
                            <h4>No encontramos resultados</h4>
                            <p>Asegúrate de que todo esté bien escrito. <a href="./neg_dat_pres_U_index.php">Volver</a></p>
                        </div>
                    </div>
                </div>
                <?php
            }else{
                $dateAge = new DateTime($data['dateAge']);
                $dateCurrent = new DateTime(date("Y-m-d"));
                $age = $dateCurrent->diff($dateAge);
                $age = $age->format("%y");
                ?>
                <div class="con-show-data-user">
                    <div class="head-show-data-user">
                        <div class="con-show-photo">
                            <img src="<?php echo $data['photo'] ?>" alt="">
                        </div>
                        <div class="con-show-data-dir">
                            <h3><?php echo $data['name'] ?></h3>
                            <p style="font-size: 17px; font-weight: 550;" class="rol-show"><?php echo $data['rol'] ?></p>
                            <p>Cuenta <?php echo $data['estado'] == 1 ? 'activa' : 'inactiva' ?></h4>
                            <p style="font-family: Poppins;"><?php echo $age . ' Años' ?></p>
                        </div>
                    </div>
                    <div class="body-show-data-user">

                        <div class="con-data-basic">
                        <div class="item-title">
                                <h2>Información personal</h2>
                            </div>
                            <div class="item-show">
                                <img src="./assets/img/icons/id-insignia 1.svg" alt="">
                                <b>Documento:</b>    
                                <p><?php echo $data['documento']?></p>
                            </div>
                            <div class="item-show">
                                <img src="./assets/img/icons/date.svg" alt="">
                                <b>Fecha de Nacimiento:</b>    
                                <p><?php echo $data['dateAge']?></p>
                            </div>
                            <div class="item-show">
                                <img src="./assets/img/icons/location.svg" alt="">
                                <b>Dirección de residencia:</b>    
                                <p><?php echo $data['address']?></p>
                            </div>
                            <div class="item-show">
                                <img src="./assets/img/icons/retratoIn.svg" alt="">
                                <b>EPS:</b>    
                                <p><?php echo isset($data['eps']) ? $data['eps'] : 'No tiene' ?></p>
                            </div>
                            <div class="item-show" style="<?php echo $data['specialty'] == 'Ninguna' ? 'display: none;' : 'display:grid;' ?>">
                            <img src="./assets/img/icons/maletin 1.svg" alt="">
                                <b>Especialidad:</b>    
                                <p><?php echo $data['specialty']?></p>
                            </div>
                        </div>
                        <div class="con-data-contac">
                            <div class="item-title">
                                <h2>Contacto</h2>
                            </div>
                            <div class="item-show">
                                <img src="./assets/img/icons/telefono.svg" alt="">
                                <b>Número de teléfono:</b>    
                                <p><?php echo $data['phoneNum']?></p>
                            </div>
                            <div class="item-show">
                                <img src="./assets/img/icons/sobre 1.svg" alt="">
                                <b>Email:</b>    
                                <p><?php echo $data['email']?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="con-btn-show">
                    <a href="./neg_dat_pres_U_index.php" class="btn-cback">Volver</a>
                    <a href="./neg_dat_pres_U_edit.php?tdd=<?php echo $_GET['tdd'] ?>&document=<?php echo $_GET['document'] ?>">Editar</a>
                </div>
                <?php
            }
        ?>
    </div>
</div>

<!-- Start script main core -->
<script src="./js/sidebar.js"></script>
<script src="./bootstrap/jquery.js"></script>
<script src="./bootstrap/bootstrap.bundle.min.js"></script>
<!-- end script main core -->
</script>
</body>
</html>