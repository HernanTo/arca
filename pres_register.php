<?php
        session_start();
        if(isset($_SESSION['logueado'])){
                if($_SESSION['logueado'] == 1){
                        header('Location: pres_dashboard.php');
                }
        }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>

    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <link rel="stylesheet" href="./css/register.css">
    <script src="./js/validateName.js"></script>
</head>
<body>
    <div class="con-register">
        <div class="con-img-register">
            <img src="./assets/img/Img-register.png" alt="">
        </div>
        <div class="head-register">
            <div class="head-1">
                <h2>Registrarse<span>.</span></h2>
            </div>
            <div class="head-2">
                <p>¿Ya tienes cuenta? <a href="./pres_login.php">Inicia sesión.</a></p>
            </div>
        </div>
        <div class="body-register">
            <form action="./neg_dat_U_store.php" method="post" class="form-register">
                <input type="hidden" name="type_register" value="1">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="fk_pk_tipo_documentoU" required>
                      <option value="CC">Cédula de ciudadanía</option>
                      <option value="TI">Tarjeta de identidad</option>
                      <option value="CE">Cédula de extranjería</option>
                    </select>
                    <label for="floatingSelect">Tipo de documento</label>
                    <span class="ico-input ico-input-select"><img src="./assets/img/icons/desplegable.svg" alt=""></span>
                </div>

                  <div class="form-floating">
                    <input type="number" class="form-control number-input" id="floatingInputValue" placeholder="Número de identidad" name="documento" maxlength="10" required>
                    <label for="floatingInputValue">Número de identidad</label>
                    <span class="ico-input"><img src="./assets/img/icons/id-insignia 1.svg" alt=""></span>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="Primer nombre" id="pr_name" name="pr_name" onblur="validateName('pr_name', 'Por favor, introduzca solo letras en el campo de primer nombre')" maxlength="15" required>
                    <label for="pr_name">Primer nombre</label>
                    <span class="ico-input"><img src="./assets/img/icons/retratoIn.svg" alt=""></span>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="Segundo nombre" id="sg_name" name="sg_name" onblur="validateName('sg_name', 'Por favor, introduzca solo letras en el campo de segundo nombre')" maxlength="15">
                    <label for="sg_name">Segundo nombre</label>
                    <span class="ico-input"><img src="./assets/img/icons/retratoIn.svg" alt=""></span>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="Primer apellido" id="pr_apellido" name="pr_apellido" onblur="validateName('pr_apellido', 'Por favor, introduzca solo letras en el campo de primer apellido')" maxlength="15" required>
                    <label for="pr_apellido">Primer apellido</label>
                    <span class="ico-input"><img src="./assets/img/icons/retratoIn.svg" alt=""></span>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="Segundo apellido" id="sg_apellido" name="sg_apellido" onblur="validateName('sg_apellido', 'Por favor, introduzca solo letras en el campo de segundo apellido')" maxlength="15">
                    <label for="sg_apellido">Segundo apellido</label>
                    <span class="ico-input"><img src="./assets/img/icons/retratoIn.svg" alt=""></span>
                </div>

                <div class="form-floating">
                    <input type="date" class="form-control date-input" id="floatingInputValue" placeholder="Fecha de nacimiento" name="fecha_naci" required>
                    <label for="floatingInputValue">Fecha de nacimiento</label>
                    <span class="ico-input"><img src="./assets/img/icons/date.svg" alt=""></span>
                </div>

                <div class="form-floating">
                    <input type="number" class="form-control number-input" id="floatingInputValue" placeholder="Teléfono" name="Numcel" maxlength="10" required>
                    <label for="floatingInputValue">Telefono</label>
                    <span class="ico-input"><img src="./assets/img/icons/telefono.svg" alt=""></span>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputValue" placeholder="Direccion de residencia" name="direccionU" required>
                    <label for="floatingInputValue">Dirección de residencia</label>
                    <span class="ico-input"><img src="./assets/img/icons/location.svg" alt=""></span>
                </div>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInputValue" placeholder="Correo electronico" name="correo" required>
                    <label for="floatingInputValue">Correo electrónico</label>
                    <span class="ico-input"><img src="./assets/img/icons/sobre 1.svg" alt=""></span>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingInputValue" placeholder="Contraseña" name="claveU" maxlength="15" required>
                    <label for="floatingInputValue">Contraseña</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingInputValue" placeholder="Confirmar Contraseña" maxlength="15">
                    <label for="floatingInputValue">Confirmar Contraseña</label>
                </div>

                <div class="con-btn-register">
                    <input id="btn-register" type="submit" value="Registrarse"></input>
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>