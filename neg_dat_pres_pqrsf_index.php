<?php
    include('./seguridad_admin.php');
    class pqrsf{
        public function index(){
            include('./data_conexion.php');

            $sql = "SELECT NumeroRadicacion, CONCAT(fk_pk_tipo_documentoU, ' ',  documento_U) as document, estadoPQRSF, TipoPQRSF  FROM pqrsf 
            INNER JOIN TipoPQRSF
            on idTipoPQRSF = fk_pk_idTipoPQRSF";

            $resultado = $db->query($sql);

            $iterable = TRUE;
            while($row = $resultado->fetch_assoc()){
                $id = $row['NumeroRadicacion'];
                $typePqrsf = $row['TipoPQRSF'];
                $document = $row['document'];
                $estado = $row['estadoPQRSF'];

?>
                <tr class="<?php echo $iterable ? ' ' : 'row-secondary' ?>">
                    <td class="th-first"><?php echo $id ?></td>
                    <td><?php echo $typePqrsf ?></td>
                    <td><?php echo $document ?></td>
                    <td><?php echo $estado == 1 ? 'Respondido' : 'En tramite'?></td>
                    <td id="last-clm" class="con-actions th-end" style="grid-template-columns: 100%;">
                        <a href="./neg_dat_pres_pqrsf_show.php?id=<?php echo $id ?>">
                            <img src="./assets./img/icons/eye.svg" alt="">
                        </a> 
                    </td>
                </tr>
<?php
                $iterable = !$iterable;
            }
        }

    }
    
    $classPqrsf = new pqrsf;
    $nameUs = $_SESSION["pNombre_U"];
    $titlePage = "Módulo de PQRSF.";
    $descPage = "Observa y contesta todos los PQRSF de tus usuarios.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo de PQRSF</title>
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
                        <h3>PQRSF</h3> 
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
                                <th class="th-first" data-priority="2">#</th>
                                <th>Tipo</th>
                                <th>Documento</th>
                                <th>Estado</th>
                                <th data-priority="1" width="10px" class="th-end">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $classPqrsf->index();
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