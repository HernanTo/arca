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
    
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/dashboardPaciente.css">
    <link rel="stylesheet" href="./css/dashboardSecretaria.css">
    <link rel="stylesheet" href="./css/dashboardDoctor.css">
    <link rel="stylesheet" href="./css/dashboardAdministrador.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />

</head>
<body>
    <div class="container-dashboard" style="transition: all 3s;">

    <!-- Seccion Paciente -->

    <?php
            if(isset($_SESSION['paciente'])){
                if($_SESSION['paciente'] == 1){
        ?>
        <?php
            include('./components/sidebar.php');
            include('./components/navbar.php');
         ?>   
        <div class="body-contenido">
            <div class="con-dashboard-paciente">
                <div class="con-citas">
                    <div class="con-form-citas">
                        <div class="head-form">Citas médicas</div>
                        <div class="body-form">Agenda tus citas médicas aquí.</div>
                        <div class="foo-form">
                            <button type="submit">Agendar cita</button>
                        </div>
                    </div>
                    <div class="con-form-pqrsf">
                        <div class="head-form">¿Problemas con Arca?</div>
                        <div class="body-form">Ingresa al módulo de PQRSF.</div>
                        <a href="pres_pqrsf.html" class="flecha-pqrsf">Módulo de PQRSF
                            <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="De clic aquí para ingresar al módulo de PQRSF">
                        </a>
                        <a href="" class="emociones">
                            <img src="./assets/img/emociones.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="con-cm">
                    <div class="title-cm">Citas medicas hoy</div>
                    <?php include('pres_neg_dat_C_show.php');?>
                </div>
                <?php
                        }
                    }
                ?>  

            <!-- Seccion secretaria -->

                <?php
                    if(isset($_SESSION['secretaria'])){
                        if($_SESSION['secretaria'] == 1){
                ?>
                <?php
                    include('./components/sidebar.php');
                    include('./components/navbar.php');
                ?>   
        <div class="body-contenido">
            <div class="con-dashboard-secretaria">
                <div class="con-citas-s">
                    <div class="con-form-citas-s">
                        <div class="head-form">Citas médicas</div>
                        <div class="body-form">Agenda las citas médicas de pacientes aquí.</div>
                        <div class="foo-form">
                            <a href="">
                                <button type="submit">Agendar</button>
                            </a>
                        </div>
                    </div>
                    <div class="con-form-users">
                        <div class="head-form">Usuarios</div>
                        <div class="body-form">Gestiona pacientes aqui.</div>
                        <a href="pres_gestionUs.php" class="flecha-users">Gestionar
                            <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="De clic aquí para ingresar al módulo de PQRSF">
                        </a>
                        <a href="" class="person">
                            <img src="./assets/img/icons/empleados.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="con-cm">
                    <div class="title-cm">Citas medicas hoy</div>
                    <?php include('pres_neg_dat_C_show.php');?>
                </div>
                <?php
                        }
                    }
                ?> 

            <!-- Seccion Doctor -->
                
                <?php
                    if(isset($_SESSION['doctor'])){
                        if($_SESSION['doctor'] == 1){
                ?>
                <?php
                    include('./components/sidebar.php');
                    include('./components/navbar.php');
                ?>   
        <div class="body-contenido">
            <div class="con-dashboard-doctor">
                <div class="con-horarios">
                    <div class="con-form-horarios">
                        <div class="head-form">Horarios</div>
                        <div class="body-form">Agenda tus horarios medicos aqui.</div>
                        <div class="foo-form">
                            <button href="pres_gestionHorarios.php" type="submit">Gestionar</button>
                        </div>
                    </div>
                    <div class="con-form-diagnosticos">
                        <div class="head-form">Diagnosticos</div>
                        <div class="body-form">Gestiona tus diagnosticos medicos aqui.</div>
                        <a href="" class="flecha-diagnosticos">Diagnosticos
                            <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="De clic aquí para ingresar al módulo de PQRSF">
                        </a>
                        <a href="" class="info-diagnosticos">
                            <img class="img-info-diagnosticos" src="./assets/img/icons/diagnostico 1.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="con-cm">
                    <div class="title-cm">Próximas citas médicas</div>
                    <?php include('pres_neg_dat_C_show.php');?>
                </div>
                <?php
                        }
                    }
                ?>     

            <!-- Seccion Administrador -->

                <?php
                    if(isset($_SESSION['administrador'])){
                        if($_SESSION['administrador'] == 1){
                ?>
                <?php
                    include('./components/sidebar.php');
                    include('./components/navbar.php');
                ?>   
        <div class="body-contenido">
            <div class="con-dashboard-admin">
                <div class="con-horarios-admin">
                    <div class="con-form-horarios-admin">
                        <div class="head-form">Horarios</div>
                        <div class="body-form">Programa la disponibilidad de los doctores.</div>
                        <div class="foo-form">
                            <button><a href="pres_gestionHorarios.php"  style="color: inherit; text-decoration: none;">Agendar</a></button>
                        </div>
                    </div>
                    <div class="con-form-users">
                        <div class="head-form">Usuarios</div>
                        <div class="body-form">Gestiona tus usuarios aqui.</div>
                        <a href="pres_gestionUs.php" class="flecha-users">Gestionar
                            <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="De clic aquí para ingresar al módulo de PQRSF">
                        </a>
                        <a href="" class="info-users">
                            <img class="img-info-users" src="./assets/img/icons/programador 1.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="con-pqrsf">
                    <div class="title-pqrsf">PQRSF recientes</div>
                    <?php include('pres_neg_dat_admin_pqrsf_show_.php');?>
                </div>
                <?php
                        }
                    }
                ?> 
            </div>
        </div>
    </div>

<!-- JavaScript Bundle with Popper -->
<script src="./js/sidebar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
