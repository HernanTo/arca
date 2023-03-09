<?php 
include ('seguridad.php');
    if(!$_SESSION['paciente'] == 1){
        header('Location: pres_dashboard.php');
    }

$nameUs = $_SESSION["pNombre_U"];
$titlePage = "Agenda tus citas medicas.";
$descPage = "Agenda tus citas a la hora que quieras y con tu doctor favorito.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda tus citas | Arca</title>
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="stylesheet" href="./css/citas.css">
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
            <div class="con-type-cita">
                <div class="header-t-cita">
                    <h3>Selecciona el tipo de cita</h3>
                </div>
                <div class="body-type-cita">
                    <a href="pres_neg_dat_cita_show.php?cita=1">
                        <img src="./assets/img/icons/doctorType.svg" alt="">
                        <p>Cita general</p>
                    </a>
                    <a href="pres_neg_dat_cita_show.php?cita=2">
                        <img src="./assets/img/icons/psicologotypecita.svg" alt="">
                        <p>Psicología</p>
                    </a>
                    <a href="pres_neg_dat_cita_show.php?cita=3">
                        <img src="./assets/img/icons/Terapeutatypecita.svg" alt="">
                        <p>Terapia</p>
                    </a>
                </div>
            </div>
        </div>
</div>
<div class="modal fade" id="alertH" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <div class="modal-body">
          <div class="con-img-alert">
              <img src="assets/img/icons/iconalertmodal.svg" alt="">
          </div>
          <div class="con-alert-modal"><p>No se pudo agendar, intentelo de nuevo</p></div>
        </div>
      </div>
    </div>
  </div>
<!-- JavaScript Bundle with Popper -->
<script src="./bootstrap/jquery.js"></script>
<script src="./bootstrap/bootstrap.bundle.min.js"></script>
<script src="./js/main.js"></script>
<?php
if(isset($_SESSION['citaE'])){
    if($_SESSION['citaE'] == 0){
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