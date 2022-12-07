<?php
    class user{
        public function editarDatos($tdd, $docUser, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $fechaNaci, $direccion, $email, $celular){
        include ('data_conexion.php');
            mysqli_query($db, "UPDATE usuario SET fk_pk_tipo_documentoU = '$tdd', documento_U = '$docUser', pNombre_U = '$primerNombre', sNombre_U = '$segundoNombre', pApellido_U = '$primerApellido', sApellido_U = '$segundoApellido', fechaNacimiento_U = '$fechaNaci' , direccion_U = '$direccion', correoElectronico_U = '$email', celular_U = '$celular' WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$docUser'");
           
            print "<script>alert('haz actualizado tus datos correctamente'); window.location='pres_U_edit_profile.php';</script>";
        }
    }
    $crud = new user();
    $crud->editarDatos($_POST["tdd"] , $_POST["docUser"] , $_POST["primerNombre"] , $_POST["segundoNombre"] , $_POST["primerApellido"] , $_POST["segundoApellido"] , $_POST["fechaNaci"] , $_POST["direccion_U"] ,  $_POST["email_U"] ,  $_POST["celular_U"]);
?>