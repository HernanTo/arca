<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>

    <link rel="stylesheet" href="{{url('./css/main.css')}}">

    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <link rel="stylesheet" href="{{url('./css/login.css')}}">
</head>
<body>
<div class="con-login">
    <div class="sect-login">
        <div class="head-login">
            <div class="sect-1">
                <h2>Inicia sesión<span>.</span></h2>
            </div>
            <div class="sect-2">
                <p>¿No tienes cuenta?</p> <a href="">Registrate</a>
            </div>
        </div>
        <div class="body-login">
            <form action="./data_validar_iniciosesion.php" method="post">
                @csrf
                <div class="con-form-lo">

                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="tdd" require>
                            <option value="CC">Cédula de ciudadanía</option>
                            <option value="TI">Tarjeta de identidad</option>
                            <option value="CE">Cédula de extranjería</option>
                        </select>
                        <label for="floatingSelect">Tipo de documento</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInputValue" placeholder="Número de identidad" name="document" require>
                        <label for="floatingInputValue">Número de identidad</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingInputValue" placeholder="Contraseña" name="password" require>
                        <label for="floatingInputValue">Contraseña</label>
                    </div>

                </div>

                <div class="con-ol">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>

                <div class="con-btns">
                    <a href="#">Volver</a>
                    <input type="submit" value="Ingresar">
                </div>
            </form>
        </div>
    </div>
    <div class="sect-img">
        <img src="{{url('./assets/img/Img-login.png')}}" alt="">
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
