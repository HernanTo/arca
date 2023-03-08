<?php
session_start();
$conexion = mysqli_connect('localhost', 'root', '', 'arca');

if(isset($_SESSION['recuperacion'])) {
    $correoElectronico_U = $_SESSION['recuperacion']['correoElectronico_U'];
    $pin = $_SESSION['recuperacion']['pin'];

    if(isset($_POST['pin'])) {

        $pin = mysqli_real_escape_string($conexion, $_POST['pin']);
        $query = "SELECT pin FROM usuario WHERE correoElectronico_U = '$correoElectronico_U'";

        $resultado = mysqli_query($conexion, $query);

        if(mysqli_num_rows($resultado) == 1) {
            $fila = mysqli_fetch_assoc($resultado);
   
            if (password_verify($pin, $fila['pin'])) {
                $_SESSION['pin'] = $pin;
                header("Location: enter_new_password.php");
                exit;
            } else {
                echo '<script>alert("El PIN ingresado no es válido.");window.location.href = "enter_pin.php";</script>';
                exit;
            }
        }
    }
}
?>




















	
