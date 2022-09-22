<?php
    class usuario{
        public function actualizar($tdd, $docUser, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $direccion, $email, $celular){
        include ('data_conexion.php');
            mysqli_query($db, "UPDATE usuario SET pNombre_U = '$primerNombre', sNombre_U = '$segundoNombre', pApellido_U = '$primerApellido', sApellido_U = '$segundoApellido', direccion_U = '$direccion', correoElectronico_U = '$email', celular_U = '$celular' WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$docUser'");
           
            echo "Haz actualizado los datos correctamente uwu";
        }
    }
    $crud = new usuario();
    $crud->actualizar($_POST["tdd"] , $_POST["docUser"] , $_POST["primerNombre"] , $_POST["segundoNombre"] , $_POST["primerApellido"] , $_POST["segundoApellido"] , $_POST["direccion_U"] ,  $_POST["email_U"], $_POST["celular_U"]);
?>
