<?php 
    class pqrsf{
        public function store($tdd,$docu,$firstname,$secondName,$firstLastName,$secondLastName,$cel,$tel,$email,$typePqrsf,$date,$asunt,$detail,$support){
            include('./data_conexion.php');

            
            $folder='./assets/supports';
            $supports = $support['name'];
            $typeFile = $support['type'];
			$sizeFile = $support['size'];
            $num=rand(1111,9999);
			$filefinal=$num. 'sppt' . '.pdf';
            if(move_uploaded_file($support['tmp_name'],$folder.'/'.$filefinal)){
                $sql = "INSERT INTO pqrsf(
                    fk_pk_tipo_documentoU, documento_U, pNombre_U, 
                    sNombre_U, pApellido_U, sApellido_U, celular_U, 
                    telefono_U, correoElectronico_U, fk_pk_idTipoPQRSF,
                    fechaPQRSF, motivoPQRSF, detallePQRSF, soportePQRSF, estadoPQRSF) 
                    VALUES ('$tdd','$docu','$firstname','$secondName',
                    '$firstLastName','$secondLastName','$cel','$tel',
                    '$email','$typePqrsf','$date','$asunt','$detail', '$filefinal',0)";
                mysqli_query($db, $sql);
                header('Location: pres_pqrsf_sucesfilly.html?radicado='.$num);
            }

        }
    }

    $classPqrsf = new pqrsf;
    $classPqrsf->store(
        $_POST['fk_pk_tipo_documentoU'],
        $_POST['docuemnt'],
        $_POST['pr_name'],
        $_POST['sg_name'],
        $_POST['pr_apellido'],
        $_POST['sg_apellido'],
        $_POST['phonenum'],
        $_POST['telnum'],
        $_POST['correo'],
        $_POST['fk_pk_tipo_pqrsf'],
        $_POST['fecha_radi'],
        $_POST['motivo'],
        $_POST['detalle'],
        $_FILES['file']
    );

?>