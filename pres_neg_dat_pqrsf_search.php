<?php
    class pqrsf{
        public function search($numRadicado){
            include ('./data_conexion.php');

            $sql = "SELECT * FROM pqrsf INNER JOIN TipoPQRSF on idTipoPQRSF = fk_pk_idTipoPQRSF WHERE NumeroRadicacion = '$numRadicado'";

            $resultado = $db -> query($sql);

            while($row = $resultado->fetch_assoc()){
                
                $data = [
                    "tdd" => $row ["fk_pk_tipo_documentoU"],
                    "docUser" => $row ["documento_U"],
                    "pNombre" => $row ["pNombre_U"],
                    "sNombre" => $row ["sNombre_U"],
                    "pApellido" => $row ["pApellido_U"],
                    "sApellido" => $row ["sApellido_U"],
                    // "direccion" => $row["direccion_U"],
                    "email" => $row["correoElectronico_U"],
                    "celular" => $row["celular_U"],
                    "telefono" => $row["telefono_U"],
                    "tipoPQR" => $row["TipoPQRSF"],
                    "numeroR" => $row["NumeroRadicacion"],
                    "fechaR" => $row["fechaPQRSF"],
                    "motivoPQR" => $row["motivoPQRSF"],
                    "detallePQR" => $row["detallePQRSF"],
                    "support" => $row['soportePQRSF'],
                ];
            }
            return $data;
        }
    }
    $crud = new pqrsf();
    $data = $crud->search($_GET['num_radicado']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PQRSF | Arca</title>
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/showpqrsf_general.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
</head>
<body>
    <div class="con-show-pqrsf">
        <section class="con-head-show">
            <div class="head-show">
                <h2>
                    <span class="head-title">#</span> 311111111 - <span class="head-title">PQRSF</span>
                </h2>
                <a class="arca" href="index.html">
                    <img src="./assets/img/icons/logo.svg" alt="Ir al inicio de Arca" id="arca-logo">
                </a>
            </div>
            <div class="head-text">
                <p>Con el número de radicado que ha sido generado al momento de enviar tu solicitud, puedes consultar el estado y la información de tu PQRSF.</p>
                <a href="pres_pqrsf_search.html">Regresar al Módulo de PQRSF</a>
            </div>
        </section>
        <section class="con-body-show">
            <div class="title-show">
                <h4>Información del solicitante</h4>
                <hr>
            </div>
            <div class="body-show">
                <div class="con-data-show">
                    <span class="ico-show"><img src="./assets/img/icons/user.svg" alt="Nombre del solicitante"></span>
                    <p><?php echo $data['pNombre'] . ' ' . $data['sNombre'] . ' ' . $data['pApellido'] . ' ' . $data['sApellido'];?></p>
                </div>
                <div class="con-data-show">
                    <span class="ico-show"><img src="./assets/img/icons/phone_user.svg" alt="Número telefónico del solicitante"></span>
                    <p><?php echo $data['celular'];?></p>
                </div>
                <!-- <div class="con-data-show">
                    <span class="ico-show"><img src="./assets/img/icons/address_user.svg" alt="Dirección del solicitante"></span>
                    <p>Kra 90B #42 - 534 Bogotá D.C.</p>
                </div> -->
                <div class="con-data-show">
                    <span class="ico-show"><img src="./assets/img/icons/id_user.svg" alt="Tipo de documento y número de documento del solicitante"></span>
                    <div class="data-bold"><p><b><?php echo $data['tdd'];?></b> - <?php echo $data['docUser'];?></p></div>
                </div>
                <div class="con-data-show">
                    <span class="ico-show"><img src="./assets/img/icons/email_user.svg" alt="Correo electrónico del solicitante"></span>
                    <p><?php echo $data['email'];?></p>
                </div>
            </div>
        </section>
        <section class="con-information-pqrsf">
            <div class="title-show">
                <h4>PQRSF</h4>
                <hr>
            </div>
            <div class="con-data-pqrsf">
                <div class="head-data-pqrsf">
                    <h3 class="title-pqrsf">Solicitud <b><?php echo $data['tipoPQR'];?></b></h3>
                    <p class="date-pqrsf">Fecha de radicación <span><?php echo $data['fechaR'];?></span></p>
                </div>
                <div class="body-data-pqrsf">
                    <div class="subject-pqrsf">
                        <span class="ico-pqrsf"><img src="./assets/img/icons/user_pqrsf.svg" alt="Información de la PQRSF"></span>
                        <h5><?php echo $data['motivoPQR'];?></h5>
                    </div>
                    <div class="information-pqrsf">
                        <p><?php echo $data['detallePQR'];?></p>
                        <div class="body-spts <?php  echo $data['support'] != null ? 'true-ssp' : 'false-ssp'?>">
                            <div class="con-false-spp">
                                <div class="ico-spp">
                                    <img src="./assets/img/icons/form.svg" alt="Solicitud sin soporte">
                                </div>
                                <div class="alert-spp"><h4>No se adjuntaron soportes</h4></div>
                            </div>
                            <div class="con-true-spp">
                                <a class="file-spp" href="assets/supports/<?php echo $data['support'] ?>" style="text-decoration: none;" target="_blank">
                                    <div class="ico-spp">
                                        <img src="./assets/img/icons/form.svg" alt="Solicitud con soporte">
                                    </div>
                                    <div class="name-spp"><p>soporte.pdf</p></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>