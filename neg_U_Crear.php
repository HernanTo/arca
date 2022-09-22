<?php
    class usuario{
        public function crearUser($usuario_rol , $tdd, $docuUser, $pNombre, $sNombre, $pApellido, $sApellido, $fechaNa, $direccion, $email, $celNum, $especialidad, $clave){
            include("data_conexion.php");

            // Encriptar contraseñas
            $clave = password_hash($clave, PASSWORD_DEFAULT);

            // Crear nuevo usuario
            mysqli_query($db,"INSERT INTO usuario (fk_pk_tipo_documentoU, documento_U, estado_U, pNombre_U, sNombre_U, pApellido_U, sApellido_U, fechaNacimiento_U, direccion_U, correoElectronico_U, celular_U, especialidad_U, claveU, fk_pregunta_seg, resp_preg, photo) VALUES ('$tdd', '$docuUser', '1' , '$pNombre', '$sNombre', '$pApellido', '$sApellido', '$fechaNa', '$direccion', '$email', '$celNum', '$especialidad', '$clave', 'NULL', 'NULL', 'assets/img/profileImages/0.png')");

            mysqli_query($db,"INSERT INTO usuario_has_roles (usuario_tdoc, usuario_id, usuario_rol) VALUES ('$tdd' , '$docuUser' , '$usuario_rol')");
        
            print "<script>alert('Usuario registrado'); window.location='pres_login.html';</script>";
        }
    }
    $crud = new usuario();
    $crud->crearUser(
        isset($_POST['usuarioRol'])? $_POST['usuarioRol'] :  $_POST['usuarioRol'] = '4',
        $_POST["fk_pk_tipo_documentoU"], 
        $_POST["documento"], 
        $_POST["pr_name"], 
        $_POST["sg_name"], 
        $_POST["pr_apellido"], 
        $_POST["sg_apellido"], 
        $_POST["fecha_naci"], 
        $_POST["direccionU"], 
        $_POST["correo"], 
        $_POST["Numcel"], 
        isset($_POST['especialidad'])? $_POST['especialidad'] :  $_POST['especialidad'] = '0', 
        $_POST["claveU"]
    );
?>

