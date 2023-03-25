<?php
session_start();
$conexion = mysqli_connect('localhost', 'root', '', 'arca');
if(isset($_POST['correoElectronico_U'])) {

    $correoElectronico_U = mysqli_real_escape_string($conexion, $_POST['correoElectronico_U']);

    $query = "SELECT documento_U,pin FROM usuario WHERE correoElectronico_U = '$correoElectronico_U'";
    $resultado = mysqli_query($conexion, $query);
    if(mysqli_num_rows($resultado) == 1) {

        $pin = rand(100000, 999999);
        $pin_hash = password_hash($pin, PASSWORD_DEFAULT);

        $receptor = $correoElectronico_U;
        $titulo = "\r\nPIN de recuperación de contraseña\r\n";
        $mensaje = "Su PIN de recuperación de contraseña es: $pin";
        $cabeceras = "From: arcafundacion60@outlook.com";
        $cabeceras .= "\r\nContent-Type: text/html; charset=UTF-8\r\n";

        if(mail($receptor, $titulo, $mensaje, $cabeceras)) {

            $_SESSION['recuperacion']['correoElectronico_U'] = $correoElectronico_U;
            $_SESSION['recuperacion']['pin'] = $pin_hash;

            $query = "UPDATE usuario SET pin = '$pin_hash' WHERE correoElectronico_U = '$correoElectronico_U'";
            mysqli_query($conexion, $query);

            header("Location: enter_pin.php?correoElectronico_U=$correoElectronico_U");
            exit;

        } else {
            echo '<script>alert("Hubo un error al enviar el correo electrónico.");window.location.href = "recovery_password.php";</script>';
        }

    } else {
        echo '<script>alert("El correo ingresado no está registrado en nuestra base de datos.");window.location.href = "recovery_password.php";</script>';
    }

} else {
	header("Location: recovery_password.php");
	exit;
}
?>