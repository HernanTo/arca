<?php
    class usuario{
        public function editarDatos($tdd, $docUser, $estado, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $fechaNaci, $direccionU, $email, $celular){
        include ('data_conexion.php');
            mysqli_query($db, "UPDATE usuario SET fk_pk_tipo_documentoU = '$tdd', documento_U = '$docUser', estado_U = '$estado', pNombre_U = '$primerNombre', sNombre_U = '$segundoNombre', pApellido_U = '$primerApellido', sApellido_U = '$segundoApellido', fechaNacimiento_U = '$fechaNaci', direccion_U = '$direccionU', correoElectronico_U = '$email', celular_U = '$celular' WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$docUser'");
           
            echo "Haz actualizado los datos correctamente uwu";
        }
    }
    $crud = new usuario();
    $crud->editarDatos($_POST["tdd"] , $_POST["docUser"] , $_POST["estado"] , $_POST["primerNombre"] , $_POST["segundoNombre"] , $_POST["primerApellido"] , $_POST["segundoApellido"] , $_POST["fechaNaci"] ,  $_POST["direccionU"] ,  $_POST["correoE"] ,  $_POST["celularU"]);
?>