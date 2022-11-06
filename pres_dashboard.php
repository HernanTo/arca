<?php
    include('./seguridad.php');
    $nameUs = $_SESSION["pNombre_U"];
    $titlePage = "Bienvenido a Arca";
    $descPage = "Hola ". $nameUs . ", comienza a explorar.";
?>
    <!-- <a href="neg_dat_pres_U_index.php">Ver todos los usuarios</a>

    <form action="neg_dat_pres_U_index.php" method="get">
        <p>Selecciona el tipo de rol que deseas buscar.</p>
        <input type="hidden" value="2" name="type">
        <select name="rol" id="Rol" class="seleccion">
            <option hidden>Tipo de rol</option>
            <option value="1">Administrador</option>
            <option value="2">Secretaria</option>
            <option value="3">Doctor</option>
            <option value="4">Paciente</option>
        </select>
        <button type="submit" class="btn">Buscar</button>
    </form>

    <form action="neg_dat_pres_U_index.php" method="get">
        <input type="hidden" value="3" name="type">
        <p>Ingresa los datos que deseas buscar.</p>
        <select name="tdd" id="tdd" class="seleccion">
            <option value="" hidden>Tipo de documento</option>
            <option value="CC">Cédula de ciudadanía</option>
            <option value="TI">Tarjeta de identidad</option>
            <option value="CE">Cédula de extranjería</option>
        </select>
        <input name="document" id="documento" type="text" placeholder="Numero de documento"><br>
        <button type="submit" class="btn">Buscar</button>
    </form> -->

<?php
    // Section Admin
    
    if(isset($_SESSION['administrador'])){
        if($_SESSION['administrador'] == 1){
            $a;
        }
    }
    // Section Secretaria

    if(isset($_SESSION['secretaria'])){
        if($_SESSION['secretaria'] == 1){
            $a;
            
        }
    }
    // Section Doctor
    
    if(isset($_SESSION['doctor'])){
        if($_SESSION['doctor'] == 1){
            $a;
            
        }
    }
    // Section Paciente
    
    if(isset($_SESSION['paciente'])){
        if($_SESSION['paciente'] == 1){
            $a;
        }
    }
?>
<!-- <a href="./salir.php">Cerrar Sesión</a> -->
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
    <link rel="stylesheet" href="./css/dashboardPaciente.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />

</head>
<body>

<div class="container-dashboard" style="transition: all 3s;">
    <?php
        include('./components/sidebar.php');
        include('./components/navbar.php');
        ?>  <?php
                if(isset($_SESSION['paciente'])){
                    if($_SESSION['paciente'] == 1){
            ?>  
            <div class="body-contenido">
                <div class="con-citas">
                    <div class="form-citas">
                        <form action="" method="" class="con-form-citas">
                            <div class="head-form">
                                <h3>Citas medicas</h3>
                            </div>
                            <div class="body-form">
                                <label id="">Agenda tus citas medicas aqui.</label>
                            </div>
                            <div class="foo-form">
                                <button type="submit">Agendar cita</button>
                            </div>
                        </form>
                    </div>
                    <div class="form-pqrsf">
                        <form action="" method="" class="con-form-pqrsf">
                            <div class="head-pqrsf">
                                <h3>¿Problemas con Arca?</h3>
                            </div>
                            <div class="body-pqrsf">
                                <label id="label-fom">Ingresa al modulo de PQRSF y realiza tu queja.</label>
                            </div>
                            <div class="foo-pqrsf">
                                <a href="" class="flecha-pqrsf">
                                Modulo de PQRSF
                                <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="">
                                </a>
                            </div>
                            <div class="emociones">
                                <a href="">
                                    <img src="./assets/img/emociones.png" alt="">
                                </a>
                            </div>
                        </form>
                    </div>
                        <div class="title-citas">
                            <h1>Mis citas medicas</h1>
                                <div class="body-cm">
                                    <div class="names-cm">
                                        Nombres:<br>
                                        Documento:<br>
                                        Especialista:<br>
                                        Consultorio:<br>
                                        Fecha:<br>
                                        EPS:<br>
                                    </div>
                                    <!--prueba-->
                                    <div class="dates-cm">
                                        <?php
                                            echo $nameUs
                                        ?>
                                    </div>
                
                                </div>
                        </div>
                </div>
                <?php
                    }
                }
                ?>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="./js/sidebar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>