<?php
    include('./seguridad.php');
    $nameUs = $_SESSION["pNombre_U"];
    $titlePage = "Bienvenido a Arca";
    $descPage = "Hola ". $nameUs . ", comienza a explorar.";
?>
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
                            <a href="./pres_tCita.php">Agendar cita</a>
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
                            <button><a href="pres_neg_cita_create.php"  style="color: inherit; text-decoration: none;">Agendar</a></button>
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
    <div class="modal fade" id="alertH" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <div class="modal-body">
          <div class="con-img-alert">
              <img src="assets/img/icons/iconalertmodalcheck.svg.svg" alt="">
          </div>
          <div class="con-alert-modal"><p>Cita creada con éxito</p></div>
        </div>
      </div>
    </div>
  </div>

<!-- JavaScript Bundle with Popper -->
<script src="./js/sidebar.js"></script>
<script src="./bootstrap/jquery.js"></script>
<script src="./bootstrap/bootstrap.bundle.min.js"></script>
<script src="./js/main.js"></script>
<?php
if(isset($_SESSION['citaE'])){
    if($_SESSION['citaE'] == 1){
        ?>
        <script>
            alertSuccesfelly();
            </script>
        <?php
        unset($_SESSION['citaE']);
    }
}
?>
</body>
</html>



