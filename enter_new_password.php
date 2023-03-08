<?php
session_start();
if(isset($_POST['correoElectronico_U'])) {
    $correoElectronico_U = $_POST['correoElectronico_U'];
    $_SESSION['correoElectronico_U'] = $correoElectronico_U;
    header("Location: reset_password.php");
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
                <h3>Muy bien, ahora digita tu nueva contraseña y estarias listo para iniciar sesion.</h3>
            </div>
            <div class="con-form-pin">
	            <form action="./reset_password.php" method="POST" class="form-pin"> 
                    <div class="form-floating">
                        <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" name="contrasena" maxlength="15" required>
                        <label for="contrasena">Contraseña</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="confirmar_contrasena" placeholder="Confirmar Contraseña" name="confirmar_contrasena" maxlength="15">
                        <input type="hidden" name="correoElectronico_U" value="<?php echo isset($_GET['correoElectronico_U']) ? $_GET['correoElectronico_U'] : ''; ?>">

                        <label for="confirmar_contrasena">Confirmar Contraseña</label>
                    </div>
                    <div class="con-buttons">
						<div class="con-btn-back">
                    		<input id="btn-back" type="button" value="Volver" onclick="location.href='./pres_login.php';"></input>
                		</div>
						<div class="con-btn-recovery">
                    		<input id="btn-recovery" type="submit" value="Actualizar"></input>
                		</div>
					</div> 
	            </form>
            </div>
        </div>
    </div>
</body>
</html>

