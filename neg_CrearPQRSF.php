<?php
    class pqrsf{
        public function crearPQRSF($tdd, $doc, $pNombre, $sNombre, $pApellido, $sApellido, $celularU, $telefonoU, $correo, $fk_pk_tipoPQRSF, $fecha_PQRSF, $motivo_PQRSF, $detalle_PQRSF, $soporte_PQRSF){
            include("data_conexion.php");
            // Crear nuevo pqrsf
            mysqli_query($db, "INSERT INTO pqrsf(fk_pk_tipo_documentoU, documento_U, pNombre_U, sNombre_U, pApellido_U, sApellido_U, celular_U, telefono_U, correoElectronico_U, fk_pk_idTipoPQRSf, NumeroRadicacion, fechaPQRSf, motivoPQRSF, detallePQRSf, soportePQRSF) VALUES ('$tdd', '$doc', '$pNombre', '$sNombre', '$pApellido', '$sApellido', '$celularU', '$telefonoU', '$correo', '$fk_pk_tipoPQRSF',NULL,'$fecha_PQRSF', '$motivo_PQRSF', '$detalle_PQRSF', '$soporte_PQRSF')");
        
            print "<script>alert('PQRSF registrado'); window.location='pres_formPQRSF.html';</script>";
        
        }
    }
    $crud = new pqrsf();
    $crud->crearPQRSF($_POST["fk_pk_tipo_documentoU"] , $_POST["documento"] , $_POST["pr_name"] , $_POST["sg_name"] , $_POST["pr_apellido"] , $_POST["sg_apellido"] , $_POST["n_telefonico"] , $_POST["tl_fijo"] , $_POST["cr_electronico"] , $_POST["tp_solicitud"] , $_POST["fecha_pqrsf"] , $_POST["fc_motivo"] , $_POST["fc_detalle"] , $_POST["archivo"]);
?>
