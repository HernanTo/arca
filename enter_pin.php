<?php
session_start();
if(isset($_POST['correoElectronico_U'])) {
    $correoElectronico_U = $_POST['correoElectronico_U'];
    $_SESSION['correoElectronico_U'] = $correoElectronico_U;
    header("Location: verify_pin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>

    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <link rel="stylesheet" href="./css/enterPin.css">
    <title>Recuperar Contraseña</title>
</head>
<body>
    <div class="con-recovery-password">
        <div class="con-img-pass">
            <img src="./assets/img/imagen.png" alt="">
        </div>
        <div class="head-recovery">
            <div class="head-1">
                <h2><span>¿</span>Olvidaste tu contraseña<span>?</span></h2>
            </div>
            <div class="head-2">
                <h3>Al correo recibirás un código de recuperación de contraseña, digítalo y vamos al siguiente paso.</h3>
            </div>
            <div class="con-form-pin">
                <form action="./verify_pin.php" method="POST" class="form-pin">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="PIN de recuperacion" id="pin" name="pin" required>
                        <label for="pin">PIN de recuperacion</label>
                        <span class="ico-input"><img src="./assets/img/icons/retratoIn.svg" alt=""></span>
                    </div>
                    <div class="con-buttons">
						<div class="con-btn-back">
                    		<input id="btn-recovery" type="button" value="Volver" onclick="location.href='./pres_login.php';"></input>
                		</div>
						<div class="con-btn-recovery">
                    		<input id="btn-recovery" type="submit" value="Aceptar"></input>
                		</div>
					</div>  
	            </form>
            </div>
        </div>
    </div>
</body>
</html>