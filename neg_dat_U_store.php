<?php
    class user{
        public function crearUser($usuario_rol , $tdd, $docuUser, $pNombre, $sNombre, $pApellido, $sApellido, $fechaNa, $direccion, $email, $celNum, $especialidad, $clave, $typeRegister){
            include("data_conexion.php");

            // Encriptar contraseñas
            $clave = password_hash($clave, PASSWORD_DEFAULT);


            // Crear nuevo usuario
            mysqli_query($db,"INSERT INTO usuario (fk_pk_tipo_documentoU, documento_U, estado_U, pNombre_U, sNombre_U, pApellido_U, sApellido_U, fechaNacimiento_U, direccion_U, correoElectronico_U, celular_U, especialidad_U, claveU, fk_pregunta_seg, resp_preg, photo) VALUES ('$tdd', '$docuUser', '1' , '$pNombre', '$sNombre', '$pApellido', '$sApellido', '$fechaNa', '$direccion', '$email', '$celNum', '$especialidad', '$clave', 'NULL', 'NULL', 'assets/img/profileImages/0.png')");

            mysqli_query($db,"INSERT INTO usuario_has_roles (usuario_tdoc, usuario_id, usuario_rol) VALUES ('$tdd' , '$docuUser' , '$usuario_rol')");
            if($typeRegister == 1){
                print "<script>alert('Usuario registrado'); window.location='pres_login.php';</script>";
                // Agregar modal en el login
            }else{
                print "<script>alert('Usuario registrado'); window.location='pres_gestionUs.php';</script>";
                // Agregar modal en ges users
            }
        
        }
    }
    $crud = new user();
    $crud->crearUser(
        isset($_POST['usuarioRol'])? $_POST['usuarioRol'] :  $_POST['usuarioRol'] = '4',
        $_POST["fk_pk_tipo_documentoU"], 
        $_POST["documento"], 
        $_POST["pr_name"], 
        $_POST["sg_name"], 
        $_POST["pr_apellido"], 
        $_POST["sg_apellido"], 
        $_POST["fecha_naci"], 
        isset($_POST['direccionU'])? $_POST['direccionU'] :  $_POST['direccionU'] = '0',
        $_POST["correo"], 
        $_POST["Numcel"], 
        isset($_POST['especialidad'])? $_POST['especialidad'] :  $_POST['especialidad'] = '0', 
        isset($_POST['claveU'])? $_POST['claveU'] :  $_POST['claveU'] = 'passwordTemp2022',
        $_POST['type_register']
    );
?>

