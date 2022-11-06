<?php
  include('./seguridad.php');

    class user{
        public function update($tddC, $documentC, $tddUpdate, $documentUpdate, $dateAge, $address, $specialty, $phoneNum, $email, $rol, $fName, $sName, $fLastName, $sLastName, $estado){
            include('./data_conexion.php');
            $sql = "UPDATE usuario SET fk_pk_tipo_documentoU='$tddUpdate',documento_U='$documentUpdate',estado_U='$estado',pNombre_U='$fName',sNombre_U='$sName',pApellido_U='$fLastName',sApellido_U='$sLastName',fechaNacimiento_U='$dateAge',direccion_U='$address',correoElectronico_U='$email',celular_U='$phoneNum',especialidad_U='$specialty' WHERE fk_pk_tipo_documentoU = '$tddC' AND documento_U = '$documentC'";
            mysqli_query($db, $sql);

            $sql = "UPDATE usuario_has_roles SET usuario_tdoc='$tddUpdate',usuario_id='$documentUpdate',usuario_rol='$rol' WHERE usuario_tdoc = '$tddC' AND usuario_id = '$documentC'";
            echo '</br>';
            echo '</br>';
            echo '</br>';
            echo '</br>';
            mysqli_query($db, $sql);

            header('Location: neg_dat_pres_U_index.php');
        }
    }

    $_POST['estado'] = isset($_POST['estado']) ? $_POST['estado'] : 0;
    $_POST['rol'] = isset($_POST['rol']) ? $_POST['rol'] : $_POST['rols'];
    $_POST['especialidad'] = isset($_POST['especialidad']) ? $_POST['especialidad'] : $_POST['specialtys'];
    $classUser = new user;
    $classUser->update(
        $_POST['tddCu'],
        $_POST['documentCu'],
        $_POST['fk_pk_tipo_documentoU'],
        $_POST['docuemnt'],
        $_POST['fecha_naci'],
        $_POST['direccionU'],
        $_POST['especialidad'],
        $_POST['phonenum'],
        $_POST['correo'],
        $_POST['rol'],
        $_POST['pr_name'],
        $_POST['sg_name'],
        $_POST['pr_apellido'],
        $_POST['sg_apellido'],
        $_POST['estado'],
    );

?>