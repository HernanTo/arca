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
require_once './data_conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idCita'], $_POST['estado'])) {
    $idCita = $_POST['idCita'];
    $estado = $_POST['estado'];

    $actualizarEstadoCi = $db->prepare("UPDATE citasmedicas SET estadoCita = ? WHERE id_cita = ?");
    $actualizarEstadoCi->bind_param('ii', $estado, $idCita);
    $actualizarEstadoCi->execute();
    $actualizarEstadoCi->close();
}



    class citas{
        public function indexCi(){
            include('./data_conexion.php');

            $sql = "SELECT id_cita,docDoctor, CONCAT(pNombre_U, sNombre_U, pApellido_U, sApellido_U) as documentname, nombreEspecialidad, fecha, hora, consultorio, estadoCita
            FROM citasmedicas 
            LEFT JOIN usuario ON usuario.documento_U = citasmedicas.docDoctor
            LEFT JOIN especialidad ON especialidad.idEspecialidad = citasmedicas.id_cita";

            

            $resultado = $db->query($sql);

            $iterable = TRUE;
            while($row = $resultado->fetch_assoc()){
                $data = [
                'idCita' => $row['id_cita'],
                'docuDoc' => $row['docDoctor'],
                'documentName' => $row['documentname'],
                'especialidad' => $row['nombreEspecialidad'],
                'fechaCi' => $row['fecha'],
                'horaCi' => $row['hora'],
                'Consultorio' => $row['consultorio'],
                'estado' => $row['estadoCita'],
            ];
?>
                <tr class="<?php echo $iterable ? ' ' : 'row-secondary' ?>">
                    <td class="th-first"><?php echo $data['idCita'] ?></td>
                    <td><?php echo $data['docuDoc'] . ' - ' . $data['documentName'] ?></td>
                    <td><?php echo $data['especialidad'] ?></td>
                    <td><?php echo $data['fechaCi'] ?></td>
                    <td><?php echo $data['horaCi'] ?></td>
                    <td><?php echo $data['Consultorio'] ?></td>
                    <td>
                    <form method="POST" action="neg_dat_pres_Ci_index.php">
                        <input type="hidden" name="idCita" value="<?php echo $data['idCita'] ?>">
                        <input type="hidden" name="estado" value="0">
                        <div class="form-check form-switch" style="display: grid; justify-content: center; align-items: center;">
                            <input class="form-check-input" id="check-estado-<?php echo $data['idCita'] ?>" type="checkbox" role="switch" value="1" name="estado" <?php echo $data['estado'] == 1 ? 'checked' : '' ?> onchange="this.form.submit()">
                        </div>
                    </form>
                    </td>
                    </tr>
<?php
                $iterable = !$iterable;
            }
        }

    }
    
    $classCitas = new citas;
    $nameUs = $_SESSION["pNombre_U"];
    $titlePage = "Gestion de horarios.";
    $descPage = "Gestiona los horarios de tus doctores y citas medicas.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Start styles bootstrap -->
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- End styles bootstrap -->
    <!-- Start icons -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <!-- end icons -->
    <!-- Start styles Datatables -->
    <link rel="stylesheet" type="text/css" href="./datatable/css/jquery.dataTables.css">    
    <link rel="stylesheet" href="./datatable/css/responsive.dataTables.min.css">
    <!-- End styles Datatables -->

    <!-- Start main core -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="stylesheet" href="./css/index_horarios.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <!-- End main core -->
    <style>
        .dataTables_info{
            display: none;
        }
        .dataTables_paginate{
            grid-column: 1/3;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>

<div class="container-dashboard" style="transition: all 3s;">
    <?php
        include('./components/sidebar.php');
        include('./components/navbar.php');
    ?>
    <div class="body-contenido">
  
    <div class="con-table">
                <div class="info-table">
                    <div class="section-1">
                        <h3>Horarios y Citas</h3> 
                    </div>
                    <div class="section-2">
                        <a href="./pres_gestionHorarios.php">Volver
                            <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="con-table-u">
                    <table id="table-co" class="display responsive nowrap">
                        <thead>
                            <tr>
                                <th data-priority="2" class="th-first">Id cita</th>
                                <th>Doctor</th>
                                <th>Especialidad</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Consultorio</th>
                                <th data-priority="1" width="10px" class="th-end">Habilitar/Inhabilitar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $classCitas->indexCi();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
           
    </div>
</div>
<!-- Start script main core -->
<script src="./js/sidebar.js"></script>
<script src="./bootstrap/jquery.js"></script>
<script src="./bootstrap/bootstrap.bundle.min.js"></script>
<!-- end script main core -->

<!-- Start script datatables -->
<script src="./datatable/js/jquery.dataTables.js"></script>
<script src="./datatable/js/dataTables.responsive.min.js"></script>
<!-- end script datatables -->
<script>
$(document).ready( function () {
    $('#table-co').DataTable({
        responsive: true

    });
} )
</script>
</body>
</html>