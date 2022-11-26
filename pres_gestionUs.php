<?php 
include ('seguridad.php');
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
    <title>Usuarios</title>
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/gesUsers.css">
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
            <div class="con-ges-users">
                <div class="con-all-users">
                    <a href="neg_dat_pres_U_index.php">
                        Ver todos los usuarios
                        <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="">
                    </a>
                </div>
                <?php
                if(isset($_SESSION['administrador'])){
                    if($_SESSION['administrador'] == 1){
                        ?>
                                        <div class="con-form">
                    <form action="neg_dat_pres_U_index.php" method="get">
                        <div class="head-form">
                            <div class="title-form">
                                <h3>Buscar por roles.</h3>
                            </div>
                            <div class="icon-form">
                                <img src="./assets/img/icons/busqueda.svg" alt="">
                            </div>
                        </div>
                        <div class="body-form">
                            <label id="label-fom">Selecciona el tipo de rol que deseas buscar.</label>
                            <input type="hidden" value="2" name="type">
                            <div class="form-floating">

                            <select class="form-select" id="floatingSelect" aria-label="" required name="rol">
                                    <option hidden></option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Secretaria</option>
                                    <option value="3">Doctor</option>
                                    <option value="4">Paciente</option>
                                </select>
                                <label for="floatingSelect">Tipo de cuenta</label>
                            </div>
                        </div>
                        <div class="foo-form">
                            <button type="submit">Buscar</button>
                        </div>
                    </form>
                </div>
                <?php
                    }
                }
                ?>


                <div class="con-form">
                    <form action="neg_dat_pres_U_index.php" method="get">
                        <div class="head-form">
                            <div class="title-form">
                                <h3>Buscar usuario.</h3>
                            </div>
                            <div class="icon-form">
                                <img src="./assets/img/icons/busqueda.svg" alt="">

                            </div>
                        </div>

                        <div class="body-form body-form-users">
                                <input type="hidden" value="3" name="type">

                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="" name="tdd" required>
                                            <option hidden></option>
                                            <option value="CC">Cédula de ciudadanía</option>
                                            <option value="CE">Cédula de extranjería</option>
                                            <option value="TI">Tarjeta de identidad</option>
                                        </select>
                                        <label for="floatingSelect">Tipo de documento</label>
                                </div>

                                <div class="form-floating">
                                    <input type="number" class="form-control" id="floatingPassword" placeholder="Documento" name="document" required>
                                    <label for="floatingPassword">Documento</label>
                                </div>
                        </div>
                        <div class="foo-form">
                            <button type="submit">Buscar</button>
                        </div>
                    </form>
                </div>

                <div class="con-form-new">
                    <form action="./neg_dat_U_store.php" method="post">
                        <input type="hidden" name="type_register" value="2">
                        <div class="head-form">
                            <div class="title-form">
                                <h3>Agregar Usuario</h3>
                            </div>
                            <div class="icon-form">
                                <img src="./assets/img/icons/agregar-usuario 1.svg" alt="">
                            </div>
                        </div>
                        <div class="body-form">
                            <?php
                            if(isset($_SESSION['administrador'])){
                            if($_SESSION['administrador'] == 1){
                                ?>
                                <div class="form-floating">

                                    <select class="form-select" id="floatingSelect" aria-label="" required name="usuarioRol">
                                            <option hidden></option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Secretaria</option>
                                            <option value="3">Doctor</option>
                                            <option value="4">Paciente</option>
                                        </select>
                                        <label for="floatingSelect">Tipo de cuenta</label>

                                </div>

                                <div class="form-floating">

                                    <select class="form-select" id="floatingSelect" aria-label="" required name="especialidad">
                                            <option hidden></option>
                                            <option value="0">Ninguna</option>
                                            <option value="1">Médico General</option>
                                            <option value="2">Psicologo</option>
                                            <option value="4">Root</option>
                                        </select>
                                        <label for="floatingSelect">Especialidad</label>

                                </div>
                                <?php
                            }
                        }
                            ?>
                            <div class="form-floating">

                                <select class="form-select" id="floatingSelect" aria-label="" name="fk_pk_tipo_documentoU" required>
                                        <option hidden></option>
                                        <option value="CC">Cédula de ciudadanía</option>
                                        <option value="CE">Cédula de extranjería</option>
                                        <option value="TI">Tarjeta de identidad</option>
                                    </select>
                                    <label for="floatingSelect">Tipo de documento</label>

                            </div>

                            <div class="form-floating">
                                <input type="number" class="form-control" id="floatingPassword" placeholder="Documento" name="documento" required>
                                <label for="floatingPassword">Número de documento</label>
                            </div>

                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Documento" name="pr_name" required>
                                <label for="floatingPassword">Primer nombre</label>
                            </div>

                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Documento" name="sg_name">
                                <label for="floatingPassword">Segundo nombre</label>
                            </div>

                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Documento" name="pr_apellido" required>
                                <label for="floatingPassword">Primer apellido</label>
                            </div>

                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Documento" name="sg_apellido" >
                                <label for="floatingPassword">Segundo apellido</label>
                            </div>

                            <div class="form-floating">
                                <input type="date" class="form-control" id="floatingPassword" placeholder="Documento" name="fecha_naci" required>
                                <label for="floatingPassword">Fecha nacimiento</label>
                            </div>

                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingPassword" placeholder="Documento" name="correo" required>
                                <label for="floatingPassword">Correo electrónico</label>
                            </div>
                            

                            <div class="form-floating">
                                <input type="number" class="form-control" id="floatingPassword" placeholder="Documento" name="Numcel" required>
                                <label for="floatingPassword">Número de celular</label>
                            </div>
                            
                        </div>
                        <div class="foo-form">
                            <button type="submit">Agregar</button>
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