<?php 
include ('seguridad.php');
if(isset($_SESSION['paciente'])){
    if($_SESSION['paciente'] == 1){
        header('Location: pres_dashboard.php');
    }
}

$nameUs = $_SESSION["pNombre_U"];
$titlePage = "Diagnosticos.";
$descPage = "Gestiona tus diagnosticos de forma sencilla.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosticos</title>
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/Infodiagnoses.css">
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
                <div class="back-diagnoses">
                    <a href="pres_dat_diagnoses.php" class="flecha-cm">
                        <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="De clic aquí para ver todas las citas medicas">
                    </a>
                Volver
                </div>
                <div class="">
                    <?php
                    class citas{
                        public function showdiagnoses(){
                            include ('data_conexion.php');
                            $cont="0";
                            $idCita = $_POST['id_cita'];
                            $sql= "SELECT citasmedicas.id_cita, citasmedicas.tipo_cita, citasmedicas.fecha, citasmedicas.hora, CONCAT(usuario.pNombre_U, ' ', usuario.sNombre_U, ' ', usuario.pApellido_U, ' ', usuario.sApellido_U) AS name, observacion.observacion
                            FROM citasmedicas
                            INNER JOIN usuario ON usuario.documento_U = citasmedicas.docDoctor
                            INNER JOIN observacion ON observacion.id_observacion = citasmedicas.id_cita
                            WHERE citasmedicas.id_cita = '$idCita'";


                            $resultado = $db -> query($sql);
                            $iterable = true;
                            $mostrar_contenedor = false;
                            while($row = $resultado->fetch_assoc()){
                                if ($mostrar_contenedor) {
                                    echo "<div class='con-info-diagnoses'>";
                                    $mostrar_contenedor = true;
                                }
                                $TipoCita = $row ["tipo_cita"];
                                $NombreU = $row["name"];
                                $fechaCita = $row["fecha"];
                                $HoraCita = $row["hora"];
                                $Observaciones = $row["observacion"];


                            ?>
                                <div class="con-complete-diagnoses">
                                    <div class="con-date">
                                        <h1>Diagnostico medico</h1>
                                        <div class='date-diagnoses'><?php echo $row["fecha"]; ?></div>
                                    </div>
                                    <div class="info-cm">
                                        <h2>Informacion de la cita medica</h2>
                                        <hr class="border">
                                    </div>
                                    <div class="content-text-diagnoses">
                                        <div class="especialidad">
                                            Especialidad: <?php echo $row["tipo_cita"]; ?>
                                        </div>
                                        <div class="doctor-encargado">
                                            Doctor encargado: <?php echo $row["name"]; ?>
                                        </div>
                                        <div class="hora">
                                            Hora: <?php echo $row["hora"]; ?>
                                        </div>
                                    <div class="info-cm">
                                        <h2>Observaciones medicas</h2>
                                        <hr class="border">
                                    </div>
                                        <p><?php echo $row["observacion"]; ?></p>
                                    </div>
                                </div>
                    <?php
                                $cont=$cont+1;
                            }
                            if($cont=="0"){
                                echo "<div class='body-scm'>
                                    <div class='img-scm'><img src='./assets/img/sin_citas.svg' alt=''></div>
                                    <div class='text-scm'>En este momento no se puede observar la informacion completa del diagnostico</div>
                                </div>";
                            }else{
                                echo "</div>";
                            }
                        }
                    }
                    
                    $crud = new citas();
                    $crud->showdiagnoses();
                    ?>
                </div>
        </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="./js/sidebar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>