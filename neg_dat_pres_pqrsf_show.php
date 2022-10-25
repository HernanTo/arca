<?php
    include('./seguridad_admin.php');

    class pqrsf{
        public function show($id){
            include('./data_conexion.php');
            $sql = "SELECT fk_pk_tipo_documentoU, documento_U, CONCAT(pNombre_U, ' ', sNombre_U, ' ', pApellido_U, ' ', sApellido_U) as 'Nombre', celular_U, telefono_U, correoElectronico_U, TipoPQRSF, NumeroRadicacion, fechaPQRSF, motivoPQRSF, detallePQRSF, soportePQRSF, estadoPQRSF
            FROM pqrsf
            INNER JOIN tipopqrsf
            ON fk_pk_idTipoPQRSF = idTipoPQRSF
            WHERE NumeroRadicacion = $id";
            $resultado = $db->query($sql);

            while($row = $resultado->fetch_assoc()){
                $data = [
                    "tdd" => $row['fk_pk_tipo_documentoU'],
                    "document" => $row['documento_U'],
                    "name" => $row['Nombre'],
                    "cel" => $row['celular_U'],
                    "phone" => $row['telefono_U'],
                    "email" => $row['correoElectronico_U'],
                    "type" => $row['TipoPQRSF'],
                    "reason" => $row['motivoPQRSF'],
                    "detail" => $row['detallePQRSF'],
                    "support" => $row['soportePQRSF'],
                    "answ" => $row['estadoPQRSF'],
                    "date" => $row['fechaPQRSF'],
                ];
            }
            return $data;
        }
    }


    $nameUs = $_SESSION["pNombre_U"];
    $titlePage = "Módulo de PQRSF.";
    $descPage = "Observa y contesta todos los PQRSF de tus usuarios.";
    $classpqrsf = new pqrsf;
    $data = $classpqrsf->show($_GET['id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Start styles bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- End styles bootstrap -->
    <!-- Start icons -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <!-- end icons -->
    <!-- Start styles Datatables -->
    <link rel="stylesheet" type="text/css" href="./datatable/css/jquery.dataTables.css">    
    <!-- End styles Datatables -->

    <!-- Start main core -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <link rel="stylesheet" href="./css/components.css">
    <!-- End main core -->
    <link rel="stylesheet" href="./css/showpqrsf.css">
    
</head>
<body>

<div class="container-dashboard" style="transition: all 3s;">
    <?php
        include('./components/sidebar.php');
        include('./components/navbar.php');
    ?>
    <div class="body-contenido">
        <div class="con-show">
            <div class="head-show">
                <div class="sect1-show">
                    <h3>Caso Nº<?php echo $_GET['id'] ?></h3>
                </div>
                
                <div class="sect2-show">
                    <h5>Fecha del PQRSF: </h5><p><?php echo $data['date'] ?></p>
                </div>
            </div>
            <div class="body-show">

                <div class="title-sect-show">
                    <h4>Información del afectado</h4>
                </div>
                <div class="item-show">
                    <h6>Tipo de Documento:</h6>
                    <p><?php echo $data['tdd'] ?></p>
                </div>
                <div class="item-show">
                <h6>Numero de Documento:</h6>
                    <p><?php echo $data['document'] ?></p>
                </div>
                <div class="item-show">
                <h6>Nombre del afectado:</h6>
                    <p><?php echo $data['name'] ?></p>
                </div>
                <div class="item-show">
                <h6>Numero telefonico:</h6>
                    <p><?php echo $data['cel'] ?></p>
                </div>
                <div class="item-show">
                <h6>Telefono fijo:</h6>
                    <p><?php echo $data['phone'] ?></p>
                </div>
                <div class="item-show">
                <h6>Correo electronico:</h6>
                    <p><?php echo $data['email'] ?></p>
                </div>

            </div>
            <div class="footer-show">
                <div class="title-sect-show">
                    <h4>Información del afectado</h4>
                </div>
                <div class="item-show">
                    <h6>Tipo de PQRSF: </h6>
                    <p><?php echo $data['type'] ?></p>
                </div>
                <div class="item-show">
                    <h6>Motivo:</h6>
                    <p><?php echo $data['reason'] ?></p>
                </div>
                <div class="item-show">
                    <h6>Detalle:</h6>
                    <p><?php echo $data['detail'] ?></p> 
                </div>
                <div class="item-show">
                    <h6>Estado:</h6>
                    <p><?php echo $data['answ'] == 1 ? 'Respondido' : 'No respondido'?></p> 
                </div>
            </div>
                <div class="spp-show">
                    <div class="head-spts">
                        <h6>Soportes:</h6>
                    </div>
                    <div class="body-spts <?php  echo $data['support'] != null ? 'true-ssp' : 'false-ssp'?>">
                        <div class="con-false-spp">
                            <div class="ico-spp">
                                <img src="./assets/img/icons/form.svg" alt="">
                            </div>
                            <div class="alert-spp"><h4>No se adjuntaron soportes</h4></div>
                        </div>
                        <div class="con-true-spp">
                            
                            <a class="file-spp" href="<?php echo $data['support'] ?>" style="text-decoration: none;">
                            <div class="ico-spp">
                                <img src="./assets/img/icons/form.svg" alt="">
                            </div>
                            <div class="name-spp"><p>archivo.pdf</p></div>
                            </a>
                        </div>

                    </div>
                    <div class="actions-show">
                        <a href="./neg_dat_pres_pqrsf_index.php" class="show-act">Volver</a>
                        <a href="./neg_dat_pqrsf_update.php?id=<?php echo $_GET['id'] ?>" class="show-act"><?php echo $data['answ'] != 1 ? 'Respondido' : 'No respondido' ; ?></a>
                    </div>
            </div>
        </div>
    </div>
</div>

<!-- Start script main core -->
<script src="./js/sidebar.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- end script main core --> 
</body>
</html>