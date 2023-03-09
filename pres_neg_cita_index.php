<?php
    include('./seguridad_admin.php');
    class cita{
        public function index(){
            include('./data_conexion.php');

            $sql = "SELECT id_cita, NombreTipoCita, fecha, hora, CONCAT(documento_U, ' - ', pNombre_U, ' ', sNombre_U, ' ', pApellido_U, ' ', sApellido_U) as Doctor, estadoCita FROM citasmedicas INNER JOIN tiposdecita on id_tipo_cita = idTiposCita INNER JOIN usuario on documento_U = docDoctor";

            $resultado = $db->query($sql);

            $iterable = TRUE;
            while($row = $resultado->fetch_assoc()){
?>
                <tr class="<?php echo $iterable ? ' ' : 'row-secondary' ?>">
                    <td class="th-first"><?php echo $row['NombreTipoCita'] ?></td>
                    <td class=""><?php echo $row['fecha'] ?></td>
                    <td class=""><?php echo $row['hora'] ?></td>
                    <td class=""><?php echo $row['Doctor'] ?></td>
                    <td class=""><?php echo $row['estadoCita'] != 0 ? 'Agendada': 'No agendada' ?></td>
                    <td class="con-actions th-end">
                        <a href="./neg_dat_cita_update.php?id=<?php echo $row['id_cita'] ?>">
                            <img src="./assets./img/icons/lapiz.svg" alt="">
                        </a> 
                        <a href="./neg_dat_cita_delete.php?id=<?php echo $row['id_cita'] ?>">
                            <img src="./assets./img/icons/trash.svg" alt="" style="height: 50px;">
                        </a>
                    </td>
                </tr>
<?php
                $iterable = !$iterable;
            }
        }

    }
    
    $classCita = new cita;
    $nameUs = $_SESSION["pNombre_U"];
    $titlePage = "Gestion de Horarios.";
    $descPage = "Gestiona los horarios de tus doctores y citas medicas.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Horarios | Arca</title>
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
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <link rel="stylesheet" href="./css/components.css">
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
                        <h3>Horarios</h3> 
                    </div>
                    <div class="section-2">
                        <a href="./pres_dashboard.php">Volver
                                <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="">
                            </a>
                    </div>
                </div>

                <div class="con-table-u">
                    <table id="table-co" class="display responsive nowrap">
                        <thead>
                            <tr>
                                <th data-priority="2" class="th-first">Tipo</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Doctor</th>
                                <th>Estado</th>
                                <th data-priority="1" width="10px" class="th-end">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $classCita->index();
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