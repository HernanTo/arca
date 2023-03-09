<?php 
include ('seguridad.php');
    if(!$_SESSION['administrador'] == 1){
        header('Location: pres_dashboard.php');
    }

$nameUs = $_SESSION["pNombre_U"];
$titlePage = "Gestion de Horarios.";
$descPage = "Gestiona los horarios de tus doctores y citas medicas.";
include('./data_conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Horarios | Arca</title>
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="stylesheet" href="./css/gesHorarios.css">
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
            <div class="con-cm-horarios">
               <div class="header-hor">
                <a href="./pres_neg_cita_index.php">
                    Ver todas los horarios
                    <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="">
                </a>
               </div>
               <div class="body-hor">
                    <form action="./neg_dat_cita_store.php" method="post" class="con-form-hor">
                        <div class="h-form-hor">
                            <h3>Agregar Horario</h3>
                            <img src="./assets/img/icons/agregar.svg" alt="">
                        </div>
                        <section class="con-dc">
                            <div class="h-dc">
                                <p>Información del responsable de la cita.</p>
                                <hr>
                            </div>
                            <div class="body-dc">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Especialidad" require name="especialidad">
                                        <?php
                                            $especialidad = $db->query('SELECT * FROM especialidad WHERE idEspecialidad != 4 AND idEspecialidad != 0;');
                                            
                                            while($row = $especialidad->fetch_assoc()){
                                                ?>
                                                    <option value="<?php echo $row['idEspecialidad'] ?>"><?php echo $row['nombreEspecialidad']?></option>
                                                    <?php
                                            }
                                        ?>

                                    </select>
                                    <label for="floatingSelect">Especialidad</label>
                                </div>

                                
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" require name="doctor">
                                        <?php 
                                            $doctor = $db->query("SELECT CONCAT(usuario_id, ' - ', pNombre_U, ' ', sNombre_U, ' ', pApellido_U, ' ', sApellido_U, ' - ', nombreEspecialidad) as Doctor, especialidad_U, usuario_id FROM usuario_has_roles INNER JOIN usuario on documento_U = usuario_id INNER JOIN especialidad on especialidad_U = idEspecialidad   WHERE usuario_rol = 3");

                                            while($row = $doctor->fetch_assoc()){
                                                    ?>
                                                    <option value="<?php echo $row['usuario_id'] ?>"><?php echo $row['Doctor'] ?></option>
                                                    <?php
                                            }

                                        ?>
                                    </select>
                                    <label for="floatingSelect">Doctor</label>
                                </div>

                                
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" require name="consultorio">
                                        <?php
                                            $consultorios = $db->query("SELECT consultorio.id, tipo_consultorio, CONCAT(tipo_consultorio, ' - ',  consultorio.id) as consultorios FROM consultorio INNER JOIN tipo_consultorio on tipo_consultorio.id =  fk_tipo_c");
                                            while($row = $consultorios->fetch_assoc()){
                                                ?>
                                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['consultorios'] ?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                    <label for="floatingSelect">Consultorio</label>
                                </div>

                            </div>

                        </section>
                        <section class="con-hr">
                            <div class="h-hr">
                                <p>Información de horarios</p>
                                <hr>
                            </div>
                            <div class="body-hr">
                                <!-- Limitar fechas -->
                                <?php
                                    $fechaMin = date("Y-m-d"); 
                                 ?>
                                <div class="form-floating">
                                    <input type="date" class="form-control date-input" id="floatingInputValue" placeholder="Inicio" name="inicio" required min="<?php echo $fechaMin ?>">
                                    <label for="floatingInputValue">Inicio</label>
                                </div>
                                <div class="form-floating">
                                    <input type="date" class="form-control date-input" id="floatingInputValue" placeholder="Fin" name="fin" required min="<?php echo $fechaMin ?>">
                                    <label for="floatingInputValue">Fin</label>
                                </div>

                                

                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="jornada">
                                        <option value="1">Mañana (6AM - 11PM)</option>
                                        <option value="2">Tarde (12PM - 6PM)</option>
                                    </select>
                                    <label for="floatingSelect">seleccione la jornada</label>
                                </div>
                        </section>
                        <div class="con-btn-ht">
                            <input type="submit" value="Registrar">
                        </div>
                    </form>
               </div>
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
          <div class="con-alert-modal"><p>Horario creado con éxito</p></div>
        </div>
      </div>
    </div>
  </div>
<!-- JavaScript Bundle with Popper -->
<script src="./bootstrap/jquery.js"></script>
<script src="./bootstrap/bootstrap.bundle.min.js"></script>
<script src="./js/main.js"></script>
<?php
if(isset($_SESSION['horarioE'])){
    if($_SESSION['horarioE'] == 1){
        ?>
        <script>
            alertSuccesfelly();
            </script>
        <?php
        unset($_SESSION['horarioE']);
    }
}
?>
</body>
</html>