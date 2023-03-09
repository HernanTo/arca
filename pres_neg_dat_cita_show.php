<?php 
include ('seguridad.php');
    if(!$_SESSION['paciente'] == 1){
        header('Location: pres_dashboard.php');
    }
    if(!isset($_GET['cita'])){
        header('Location: pres_tCita.php');
    }
    class cita {
        public function show($tipoCita, $fechaHoy, $hora){
            include('./data_conexion.php');
            $sql = "SELECT id_cita, id_tipo_cita, NombreTipoCita, fecha, hora, CONCAT('Doc. ', pNombre_U, ' ', sNombre_U, ' ', pApellido_U, ' ', sApellido_U)  as Doctor, photo  FROM citasmedicas
            INNER JOIN usuario
            ON documento_U = docDoctor
            INNER JOIN tiposdecita
            ON tiposdecita.idTiposCita = citasmedicas.id_tipo_cita
            WHERE ((fecha = '$fechaHoy' AND hora >= '$hora') OR (fecha > '$fechaHoy')) AND id_tipo_cita = $tipoCita AND estadoCita = 0 ORDER BY citasmedicas.fecha ASC, citasmedicas.hora ASC";
            $resultado = $db->query($sql);
            while($row = $resultado-> fetch_assoc()){
                ?>
                    <div class="cita">
                        <div class="con-foto">
                            <img src="<?php echo $row['photo'] ?>" alt="">
                        </div>
                        <div class="con-info-cita">
                            <h2>Cita <?php echo $row['NombreTipoCita'] ?></h2> <span><?php echo fechaEs($row['fecha']) ?> | <?php echo $row['hora'] ?></span>
                            <p><?php echo $row['Doctor'] ?></p>
                        </div>
                        <div class="actions">
                            <a href="neg_dat_cita_update.php?idCita=<?php echo $row['id_cita'] ?>&tdd=<?php echo $_SESSION['tdd'] ?>&id=<?php echo $_SESSION['docu'] ?>">Confirmar</a>
                        </div>
                    </div>
                <?php
            }
        }
    }
    function fechaEs($fecha) {
        $fecha = substr($fecha, 0, 10);
        $numeroDia = date('d', strtotime($fecha));
        $dia = date('l', strtotime($fecha));
        $mes = date('F', strtotime($fecha));
        $anio = date('Y', strtotime($fecha));
        $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
        $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
        $nombredia = str_replace($dias_EN, $dias_ES, $dia);
        $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
        return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
        }

$nameUs = $_SESSION["pNombre_U"];
$titlePage = "Agenda tus citas medicas.";
$descPage = "Agenda tus citas a la hora que quieras y con tu doctor favorito.";
$dateCurrent = new DateTime(date("Y-m-d"));
$dateCurrent = $dateCurrent->format('Y-m-d');
$hora = date("h:i:s");
$cita = new cita;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas disponibles | Arca</title>
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
            <div class="con-citas-d">
                <div class="header-citas-d">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Seleccione fecha de cita" require name="especialidad">
                            <option value="18/11/2023">18/11/2023</option>
                            <option value="18/11/2023">18/11/2023</option>
                            <option value="18/11/2023">18/11/2023</option>
                        </select>
                        <label for="floatingSelect">Seleccione fecha de cita</label>
                    </div>
                </div>
                <div class="body-cita-d">
                    <?php
                        $cita->show($_GET['cita'], $dateCurrent, $hora);
                    ?>
                </div>
            </div>
        </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="./bootstrap/jquery.js"></script>
<script src="./bootstrap/bootstrap.bundle.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>