<?php
session_start();
$conexion = mysqli_connect('localhost', 'root', '', 'arca');

if(isset($_SESSION['recuperacion'])) {
    $correoElectronico_U = $_SESSION['recuperacion']['correoElectronico_U'];
    $pin = $_SESSION['recuperacion']['pin'];

    if(isset($_POST['contrasena']) && isset($_POST['confirmar_contrasena'])) {

        $contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);
        $confirmar_contrasena = mysqli_real_escape_string($conexion, $_POST['confirmar_contrasena']);

        if($contrasena == $confirmar_contrasena) {
            $hash = password_hash($contrasena, PASSWORD_DEFAULT);

            $query = "UPDATE usuario SET claveU = '$hash' WHERE correoElectronico_U = '$correoElectronico_U'";
            mysqli_query($conexion, $query);
            header("Location: pres_login.php");
            exit;

        } else {
            echo '<script>alert("Las contraseñas no coinciden.");window.location.href = "enter_new_password.php";</script>';
            
            exit;
        }

    } else {
        echo '<script>alert("No se han enviado las contraseñas.");window.location.href = "enter_new_password.php";</script>';
        exit;
    }

} else {
    echo '<script>alert("La sesión no está establecida.");window.location.href = "enter_new_password.php";</script>';
    
}

?>




