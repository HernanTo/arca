<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>

    <link rel="stylesheet" href="{{url('./css/main.css')}}">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <link rel="stylesheet" href="{{url('./css/register.css')}}">
</head>
<body>
<div class="con-register">
    <div class="head-register">
        <div class="head-1">
            <h2>Registrarse<span>.</span></h2>
        </div>
        <div class="head-2">
            <p>¿Ya tienes cuenta? <a href="">Inicia sesión.</a></p>
        </div>
    </div>
    <div class="body-register">
        <form action="" method="post" class="form-register">
            @csrf
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
                <input type="number" class="form-control number-input" id="floatingInputValue" placeholder="Número de identidad" name="documento" required>
                <label for="floatingInputValue">Número de identidad</label>
                <span class="ico-input"><img src="./assets/img/icons/id-insignia 1.svg" alt=""></span>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputValue" placeholder="Primer nombre" name="pr_name" required>
                <label for="floatingInputValue">Primer nombre</label>
                <span class="ico-input"><img src="./assets/img/icons/retratoIn.svg" alt=""></span>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputValue" placeholder="Segundo nombre" name="sg_name">
                <label for="floatingInputValue">Segundo nombre</label>
                <span class="ico-input"><img src="./assets/img/icons/retratoIn.svg" alt=""></span>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputValue" placeholder="Primer apellido" name="pr_apellido" required>
                <label for="floatingInputValue">Primer apellido</label>
                <span class="ico-input"><img src="./assets/img/icons/retratoIn.svg" alt=""></span>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputValue" placeholder="Segundo apellido" name="sg_apellido">
                <label for="floatingInputValue">Segundo apellido</label>
                <span class="ico-input"><img src="./assets/img/icons/retratoIn.svg" alt=""></span>
            </div>

            <div class="form-floating">
                <input type="date" class="form-control date-input" id="floatingInputValue" placeholder="Fecha de nacimiento" name="fecha_naci" required>
                <label for="floatingInputValue">Fecha de nacimiento</label>
                <span class="ico-input"><img src="./assets/img/icons/date.svg" alt=""></span>
            </div>

            <div class="form-floating">
                <input type="number" class="form-control number-input" id="floatingInputValue" placeholder="Teléfono" name="Numcel" required>
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
                <input type="password" class="form-control" id="floatingInputValue" placeholder="Contraseña" name="claveU" required>
                <label for="floatingInputValue">Contraseña</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingInputValue" placeholder="Confirmar Contraseña">
                <label for="floatingInputValue">Confirmar Contraseña</label>
            </div>

            <div class="con-btn-register">
                <input id="btn-register" type="submit" value="Registrarse"></input>
            </div>
        </form>
    </div>
    <div class="con-img-register">
        <img src="{{url('./assets/img/Img-register.png')}}" alt="">
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
