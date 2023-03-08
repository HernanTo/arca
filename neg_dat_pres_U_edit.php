<?php
    class user{
        public function edit($tdd, $document, $rolUser, $specialtyUser){
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

            $sql = "SELECT CONCAT(fk_pk_tipo_documentoU, ' ', documento_U) as 'documento', `estado_U`, CONCAT(pNombre_U, ' ', sNombre_U, ' ', pApellido_U, ' ', sApellido_U) as 'nombre' , fechaNacimiento_U, direccion_U, correoElectronico_U, celular_U, nombreEspecialidad, desc_rol, fk_pk_tipo_documentoU, documento_U, photo, eps_P, pNombre_U, sNombre_U, pApellido_U, sApellido_U, cod_rol  FROM usuario
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
                        'fName' => $row['pNombre_U'],
                        'sName' => $row['sNombre_U'],
                        'fLastName' => $row['pApellido_U'],
                        'sLastName' => $row['sApellido_U'],
                        'rols' => $row['cod_rol'],
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
    $data = $classUser->edit($_GET['tdd'], $_GET['document'], $_SESSION['role'], $_SESSION['specialty']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar a <?php echo $_GET['tdd'] . ' ' . $_GET['document']?> | Arca</title>
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
    <link rel="stylesheet" href="./css/editDataUser.css">
    <!-- End main core -->

    
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
                if(isset($_SESSION['administrador'])){
                    if($_SESSION['administrador'] == 1){
                        $rolAdmin = true;
                    }else{
                        $rolAdmin = false;
                    }
                }else{
                    $rolAdmin = false;
                }
                ?>
                <form action="neg_dat_pres_U_update.php" method="post">
                <input type="text" value="<?php echo $data['tdd'] ?>" hidden name="tddCu">
                <input type="text" value="<?php echo $data['document'] ?>" hidden name="documentCu">
                <input type="hidden" name="rols" value="<?php echo $data['rols'] ?>">
                <input type="hidden" name="specialtys" value="<?php echo $data['specialty'] ?>">
                
                <div class="con-show-data-user">
                    <div class="head-show-data-user">
                        <div class="con-show-photo">
                            <img src="<?php echo $data['photo'] ?>" alt="">
                        </div>
                        <div class="con-show-data-dir">
                            <h3><?php echo $data['name'] ?></h3>
                            <p style="font-size: 17px; font-weight: 550;" class="rol-show"><?php echo $data['rol'] ?></p>
                            <?php if($rolAdmin){ ?>
                            <div class="form-check form-switch">
                                <input class="form-check-input" id="check-estado" type="checkbox" role="switch" value="1" name="estado" <?php echo $data['estado'] == 1 ? 'checked' : ' ' ?>>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="body-show-data-user">

                        <div class="con-data-basic">
                            <div class="item-title">
                                <h2>Información personal</h2>
                            </div>
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="fk_pk_tipo_documentoU" required>
                                <option value="CC" <?php echo $data['tdd'] == 'CC' ? 'selected' : ' ' ?>>Cédula de ciudadanía</option>
                                <option value="TI" <?php echo $data['tdd'] == 'TI' ? 'selected' : ' ' ?>>Tarjeta de identidad</option>
                                <option value="CE" <?php echo $data['tdd'] == 'CE' ? 'selected' : ' ' ?>>Cédula de extranjería</option>
                                </select>
                                <label for="floatingSelect">Tipo de documento</label>
                                <span class="ico-input ico-input-select"><img src="./assets/img/icons/desplegable.svg" alt=""></span>
                            </div>
                                        <div class="form-floating">
                                            <input type="number" class="form-control number-input" id="floatingInput" placeholder="Número de documento"  value="<?php echo $data['document'] ?>" name="docuemnt" <?php echo $rolAdmin ? ' ': 'readonly'?>>
                                            <label for="floatingInput">Número de documento</label>
                                            <span class="ico-input"><img src="./assets/img/icons/fingerprint.svg" alt=""></span>
                                        </div>
                                        
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputValue" placeholder="Primer nombre" name="pr_name" required value="<?php echo $data['fName'] ?>"<?php echo $rolAdmin ? ' ': 'readonly'?>>
                                            <label for="floatingInputValue">Primer nombre</label>
                                            <span class="ico-input"><img src="./assets/img/icons/retratoIn.svg" alt=""></span>
                                        </div>

                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputValue" placeholder="Segundo nombre" name="sg_name" value="<?php echo $data['sName'] ?>"<?php echo $rolAdmin ? ' ': 'readonly'?>>
                                            <label for="floatingInputValue">Segundo nombre</label>
                                            <span class="ico-input"><img src="./assets/img/icons/retratoIn.svg" alt=""></span>
                                        </div>

                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputValue" placeholder="Primer apellido" name="pr_apellido" required value="<?php echo $data['fLastName'] ?>"<?php echo $rolAdmin ? ' ': 'readonly'?>>
                                            <label for="floatingInputValue">Primer apellido</label>
                                            <span class="ico-input"><img src="./assets/img/icons/retratoIn.svg" alt=""></span>
                                        </div>

                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputValue" placeholder="Segundo apellido" name="sg_apellido" value="<?php echo $data['sLastName'] ?>"<?php echo $rolAdmin ? ' ': 'readonly'?>>
                                            <label for="floatingInputValue">Segundo apellido</label>
                                            <span class="ico-input"><img src="./assets/img/icons/retratoIn.svg" alt=""></span>
                                        </div>

                                        <div class="form-floating">
                                            <input type="date" class="form-control date-input" id="floatingInputValue" placeholder="Fecha de nacimiento" value="<?php echo date('Y-m-d', strtotime($data['dateAge'])) ?>" name="fecha_naci" <?php echo $rolAdmin ? ' ': 'readonly' ?> required>
                                            <label for="floatingInputValue">Fecha de nacimiento</label>
                                            <span class="ico-input"><img src="./assets/img/icons/date.svg" alt=""></span>
                                        </div>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputValue" placeholder="Direccion de residencia" value="<?php echo $data['address'] ?>" name="direccionU" required>
                                            <label for="floatingInputValue">Dirección de residencia</label>
                                            <span class="ico-input"><img src="./assets/img/icons/location.svg" alt=""></span>
                                        </div>

                                        <?php if($rolAdmin){ ?>
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect" aria-label="" require name="rol">
                                                    <option value="1" <?php echo $data['rol'] == 'Administrador' ? 'selected' : ' ' ?>>Administrador</option>
                                                    <option value="2" <?php echo $data['rol'] == 'Secretaria' ? 'selected' : ' ' ?>>Secretaria</option>
                                                    <option value="3" <?php echo $data['rol'] == 'Doctor' ? 'selected' : ' ' ?>>Doctor</option>
                                                    <option value="4" <?php echo $data['rol'] == 'Paciente' ? 'selected' : ' ' ?>>Paciente</option>
                                                </select>
                                                <label for="floatingSelect">Tipo de cuenta</label>
                                                <span class="ico-input"><img src="./assets/img/icons/maletin 1.svg" alt=""></span>
                                            </div>

                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect" aria-label="" require name="especialidad">
                                                        <option value="0" <?php echo $data['specialty'] == 'Ninguna' ? 'selected' : ' ' ?>>Ninguna</option>
                                                        <option value="1" <?php echo $data['specialty'] == 'Médico General' ? 'selected' : ' ' ?>>Médico General</option>
                                                        <option value="2" <?php echo $data['specialty'] == 'Psicologo' ? 'selected' : ' ' ?>>Psicologo</option>
                                                        <option value="4" <?php echo $data['specialty'] == 'Root' ? 'selected' : ' ' ?>>Root</option>
                                                    </select>
                                                    <label for="floatingSelect">Especialidad</label>
                                                    <span class="ico-input"><img src="./assets/img/icons/graduation-cap.svg" alt=""></span>
                                            </div> 
                                        <?php } ?>
                        </div>
                        <div class="con-data-contac">
                            <div class="item-title">
                                <h2>Contacto</h2>
                            </div>
                            <div class="form-floating">
                                <input type="number" class="form-control number-input" id="floatingInput" placeholder="Número de documento" value="<?php echo $data['phoneNum'] ?>" name="phonenum">
                                <label for="floatingInput">Teléfono</label>
                                <span class="ico-input"><img src="./assets/img/icons/telefono.svg" alt=""></span>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputValue" placeholder="Correo electronico" name="correo" required value="<?php echo $data['email'] ?>">
                                <label for="floatingInputValue">Email</label>
                                <span class="ico-input"><img src="./assets/img/icons/sobre 1.svg" alt=""></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="con-btn-show">
                    <a href="./neg_dat_pres_U_index.php" class="btn-cback">Cancelar</a>
                    <input type="submit" value="Guardar cambios">
                </div>
                </form>
                <?php
            }
        ?>
    </div>
</div>

<!-- Start script main core -->
<script src="./js/sidebar.js"></script>
<script src="./js/main.js"></script>
<script src="./bootstrap/jquery.js"></script>
<script src="./bootstrap/bootstrap.bundle.min.js"></script>
<!-- end script main core -->

</script>
</body>
</html>