<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda | Arca</title>
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/helpCenter.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
  <!-- Seccion No logueado -->
  <?php
      if (isset($_SESSION['logueado'])){
        if (($_SESSION['logueado']) == 0){
  ?>
    <div class="con-help-center-v">
        <div class="aside-help-center">
            <div class="info-help">
                <h3>Modulo de ayuda</h3>
                <p>Encuentra las respuestas a tus dudas mas frecuentes.</p>
            </div>
            <div class="con-inpt">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Buscar">
                    <img src="./assets/img/icons/busqueda.svg" alt="">
            </div>

            <div class="con-items">
                <div class="item-help" onclick="selectItem('.con-items :nth-child(1)', 1)">
                    Ingresar a Arca
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
                <div class="item-help" onclick="selectItem('.con-items :nth-child(2)', 2)">
                    ¿Qué puedo hacer?
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
                <div class="item-help" onclick="selectItem('.con-items :nth-child(3)', 3)">
                    Fundación Arcangeles
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
                <div class="item-help" onclick="selectItem('.con-items :nth-child(4)', 4)">
                    Modulo de PQRSF
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
            </div>
        </div>
        <div class="body-help-center">

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Mi usuario esta deshabilitado
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>Lo sentimos mucho.</p>
                    <p>1. Debes comunicarte con el equipo de soporte Arca. </p>
                    <p>Escribe un mensaje al correo <a href="mailto:soporte@arca.com">soporte@arca.com</a> .En breve te ayudaremos.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Registrarme
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Oprime “Registrate”. Esto te llevará al módulo de registro.</p>
                      <p>2. Digita los datos solicitados cuidadosamente.</p>
                      <p>3. Oprime el botón “Registrarme”.</p>
                      <p>4. Inicia sesión.</p>
                      <strong>Recuerda que en Arca tratamos tus datos cuidadosamente.</strong>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Olvide mi clave
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Al momento de iniciar sesión, oprime “¿Olvidaste tu contraseña?”.</p>
                      <p>2. En el módulo de recuperación de contraseñas, ingresa el correo electrónico que digitaste en el registro, te llegará un código de acceso. Oprime aceptar.</p>
                      <p>3. Cuando llegue tu código de acceso, digitelo en el campo indicado. Oprime aceptar.</p>
                      <p>4. Si el código es el correcto, digite su nueva contraseña. Oprima aceptar.</p>
                      <p>5. ¡Listo! Ya puedes iniciar sesión y disfrutar de las funcionalidades de Arca.</p>
                    </div>
                  </div>
                </div>
            </div>  

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Agendar citas medicas
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>En Arca puedes agendar citas médicas con tu doctor favorito, cuando quieras y a la hora que quieras.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Visualizar tus diagnosticos medicos
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Lo que tu doctor observe en tus citas medicas, se registrara y podras observarlo cuando quieras.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Realizar PQRSF
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Porque tu opinion importa, en Arca podras realizar PQRSF para que tengamos en cuenta lo que piensas.</p>
                    </div>
                  </div>
                </div>
            </div>  

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      ¿Qué hace?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Promovemos la inclusión a partir de la obtención de condiciones óptimas de salud que permitan el desarrollo de la independencia funcional, a través de programas de habilitación y/o rehabilitación dirigidos por un equipo interdisciplinario especializado, que busca recuperar y desarrollar el mayor potencial funcional de los pacientes, proporcionando las herramientas necesarias para su reincorporación a la sociedad, haciendo partícipe a la familia en el proceso brindando un servicio humanizado.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Contacto
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Nos puedes encontrar en <strong>Calle 106 No. 17a – 43</strong></p>
                      <p>Nos puedes contactar al correo <a href="mailto:info@arcangeles.org">info@arcangeles.org</a></p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      ¿Puedo realizar mis citas medicas desde la fundacion?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Si, si prefieres realizar tus citas presencialmente, en la Fundación Arcangeles tenemos un equipo que puede ayudarle con el agendamiento de citas medicas.</p>
                    </div>
                  </div>
                </div>
            </div>  

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Realizar PQRSF
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Ingresar al modulo de PQRSF.</p>
                      <p>2. Ingresa cuidadosamente los datos solicitados.</p>
                      <p>3. Oprime el boton enviar.</p>
                      <p>4. ¡Listo! Espera el correo del equipo de soporte Arca</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Seguimiento de mi PQRSF
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Puedes revisar el estado de tu PQRSF en el modulo de PQRSF.</p>
                      <p>La respuesta a tu PQRSF llegara a tu correo, aconsejamos revisar constantemente</p>
                      <i>Recuerda, el tiempo maximo para que obtengas una respuesta de nuestra parte son 15 dias habiles.</i>
                   </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      ¿Como se si respondieron mi PQRSF?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Revisar en el modulo de PQRSF, digitando tu número de radicación. Aparecera el estado de tu PQRSF en pantalla.</p>
                      <i>En proceso: Tu PQRSF sigue en espera de ser contestada.</i> <br>
                      <i>Respondida: Tu PQRSF ya fue respondida por el equipo de soporte Arca. Revisa tu correo.</i>
                    </div>
                  </div>
                </div>
            </div>  
            
            <div class="con-sect-without">
              Bienvenido al modulo de ayuda, donde encontraras las respuestas a tus preguntas. <br>
              Pulsa el tema que desees para empezar.
            </div>

        </div>
        <div class="footer-help-center">
            <h4>¿Aun necesitas ayuda?</h4>
            <p>Envia un mensajes via email.</p>
            <a href="">Contactanos</a>
        </div>
    </div>
    <?php
      }
    }
    ?>
    <!-- Seccion Paciente -->
    <?php
      if (isset($_SESSION['logueado'])){
        if ($_SESSION['logueado'] === 1){
          if($_SESSION['paciente'] == 1){
  ?>
    <div class="con-help-center-v">
        <div class="aside-help-center">
            <div class="info-help">
                <h3>Modulo de ayuda</h3>
                <p>Encuentra las respuestas a tus dudas mas frecuentes.</p>
            </div>
            <div class="con-inpt">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Buscar">
                    <img src="./assets/img/icons/busqueda.svg" alt="">
            </div>

            <div class="con-items">
                <div class="item-help" onclick="selectItem('.con-items :nth-child(1)', 1)">
                    Gestionar citas
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
                <div class="item-help" onclick="selectItem('.con-items :nth-child(2)', 2)">
                    Diagnosticos
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
                <div class="item-help" onclick="selectItem('.con-items :nth-child(3)', 3)">
                    Perfil
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
            </div>
        </div>
        <div class="body-help-center">

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Realizar cita medica
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Dirigete a la seccion de citas medicas.</p>
                      <p>2. Selecciona el tipo de cita medica.</p>
                      <p>3. Selecciona la cita que desees. (Puedes buscar un doctor o fecha deseada.)</p>
                      <p>4. Oprime el boton de agendar cita.</p>
                    </div>
                  </div>
                </div>
            </div>  

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Visualizar un diagnostico
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Ingresar al modulo de diagnosticos.</p>
                      <p>2. Encuentra la cita con el doctor correspondiente.</p>
                      <p>3. Oprime el boton de visualizar diagnostico.</p>
                    </div>
                  </div>
                </div>
            </div>  

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Editar perfil
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>1. Dirigete a la seccion de datos</p>
                      <p>2. Oprime el boton de editar</p>
                      <p>3. Cambia los datos que requieras.</p>
                      <p>4. Oprime el boton de aceptar.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      ¿Por qué no puedo cambiar mi numero de identidad?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Este dato es sensible por lo tanto no puede ser modificados</p>
                      <p>1. Debes comunicarte con el equipo de soporte Arca. </p>
                      <p>Escribe un mensaje al correo <a href="mailto:soporte@arca.com">soporte@arca.com</a> .En breve te ayudaremos.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      ¿Por qué no puedo cambiar mi el tipo de documento?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Este dato es sensible por lo tanto no puede ser modificados</p>
                      <p>1. Debes comunicarte con el equipo de soporte Arca. </p>
                      <p>Escribe un mensaje al correo <a href="mailto:soporte@arca.com">soporte@arca.com</a> .En breve te ayudaremos.</p>
                    </div>
                  </div>
                </div>
            </div>   
            
            <div class="con-sect-without">
              Bienvenido al modulo de ayuda, donde encontraras las respuestas a tus preguntas.
              Pulsa el tema que desees para empezar.
            </div>
            
        </div>
        <div class="footer-help-center">
            <h4>¿Aun necesitas ayuda?</h4>
            <p>Envia un mensajes via email.</p>
            <a href="">Contactanos</a>
        </div>
    </div>

    <?php
      }
    }
  }
    ?>

    <!-- Doctor -->
    <?php
      if (isset($_SESSION['logueado'])){
        if ($_SESSION['logueado'] === 1){
          if($_SESSION['doctor'] == 1){
  ?>
    <div class="con-help-center-v">
        <div class="aside-help-center">
            <div class="info-help">
                <h3>Modulo de ayuda</h3>
                <p>Encuentra las respuestas a tus dudas mas frecuentes.</p>
            </div>
            <div class="con-inpt">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Buscar">
                    <img src="./assets/img/icons/busqueda.svg" alt="">
            </div>

            <div class="con-items">
                <div class="item-help" onclick="selectItem('.con-items :nth-child(1)', 1)">
                    Gestionar citas
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
                <div class="item-help" onclick="selectItem('.con-items :nth-child(2)', 2)">
                    Realizar diagnosticos
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
                <div class="item-help" onclick="selectItem('.con-items :nth-child(3)', 3)">
                    Perfil
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
            </div>
        </div>
        <div class="body-help-center">

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Visualizar horarios
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Encontraras el horario de tus citas medicas en la seccion citas medicas.</p>
                    </div>
                  </div>
                </div>
            </div>  

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Realizar un diagnostico
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Ingresar al de citas medicas.</p>
                      <p>2. Encuentra la cita con el paciente correspondiente.</p>
                      <p>3. Oprime el boton de realizar diagnostico.</p>
                      <p>4. Escribe el diagnostico.</p>
                      <p>5. Oprime el boton de registrar.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Editar diagnosticos
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Ingresar al de citas medicas.</p>
                      <p>2. Encuentra la cita con el paciente correspondiente.</p>
                      <p>3. Oprime el boton de editar diagnosticos.</p>
                      <p>4. Escribe el diagnostico.</p>
                      <p>5. Oprime el boton de registrar.</p>
                    </div>
                  </div>
                </div>
            </div>  

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Editar perfil
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>1. Dirigete a la seccion de datos</p>
                      <p>2. Oprime el boton de editar</p>
                      <p>3. Cambia los datos que requieras.</p>
                      <p>4. Oprime el boton de aceptar.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      ¿Por qué no puedo cambiar mi numero de identidad?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Este dato es sensible por lo tanto no puede ser modificados</p>
                      <p>1. Debes comunicarte con el equipo de soporte Arca. </p>
                      <p>Escribe un mensaje al correo <a href="mailto:soporte@arca.com">soporte@arca.com</a> .En breve te ayudaremos.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      ¿Por qué no puedo cambiar mi el tipo de documento?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Este dato es sensible por lo tanto no puede ser modificados</p>
                      <p>1. Debes comunicarte con el equipo de soporte Arca. </p>
                      <p>Escribe un mensaje al correo <a href="mailto:soporte@arca.com">soporte@arca.com</a> .En breve te ayudaremos.</p>
                    </div>
                  </div>
                </div>
            </div>   
            
            <div class="con-sect-without">
              Bienvenido al modulo de ayuda, donde encontraras las respuestas a tus preguntas.
              Pulsa el tema que desees para empezar.
            </div>
            
        </div>
        <div class="footer-help-center">
            <h4>¿Aun necesitas ayuda?</h4>
            <p>Envia un mensajes via email.</p>
            <a href="">Contactanos</a>
        </div>
    </div>

    <?php
      }
    }
  }
    ?>

    <!-- Secretaria -->
    <?php
      if (isset($_SESSION['logueado'])){
        if ($_SESSION['logueado'] === 1){
          if($_SESSION['secretaria'] == 1){
  ?>
    <div class="con-help-center-v">
        <div class="aside-help-center">
            <div class="info-help">
                <h3>Modulo de ayuda</h3>
                <p>Encuentra las respuestas a tus dudas mas frecuentes.</p>
            </div>
            <div class="con-inpt">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Buscar">
                    <img src="./assets/img/icons/busqueda.svg" alt="">
            </div>

            <div class="con-items">
                <div class="item-help" onclick="selectItem('.con-items :nth-child(1)', 1)">
                    Gestionar usuarios
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
                <div class="item-help" onclick="selectItem('.con-items :nth-child(2)', 2)">
                    Gestionar citas 
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
                <div class="item-help" onclick="selectItem('.con-items :nth-child(3)', 3)">
                    Perfil
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
            </div>
        </div>
        <div class="body-help-center">

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Agregar usuarios
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Ingresar a gestión de usuarios</p>
                      <p>2. Digita los datos correspondientes en el formulario.</p>
                      <p>3. Oprime el boton agregar</p>
                      <p>Y listo, el usuario esta registrado.</p>
                    </div>
                  </div>
                </div>
            </div>  

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Agendar una cita medica
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Paso 1</p>
                      <p>2. Paso 2</p>
                      <p>3. Paso 3</p>
                      <p>4. Paso 4</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Cancelar una cita medica
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Paso 1</p>
                      <p>2. Paso 2</p>
                      <p>3. Paso 3</p>
                      <p>4. Paso 4</p>
                    </div>
                  </div>
                </div>
            </div>  

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Editar perfil
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>1. Dirigete a la seccion de datos</p>
                      <p>2. Oprime el boton de editar</p>
                      <p>3. Cambia los datos que requieras.</p>
                      <p>4. Oprime el boton de aceptar.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      ¿Por qué no puedo cambiar mi numero de identidad?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Este dato es sensible por lo tanto no puede ser modificados</p>
                      <p>1. Debes comunicarte con el equipo de soporte Arca. </p>
                      <p>Escribe un mensaje al correo <a href="mailto:soporte@arca.com">soporte@arca.com</a> .En breve te ayudaremos.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      ¿Por qué no puedo cambiar mi el tipo de documento?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Este dato es sensible por lo tanto no puede ser modificados</p>
                      <p>1. Debes comunicarte con el equipo de soporte Arca. </p>
                      <p>Escribe un mensaje al correo <a href="mailto:soporte@arca.com">soporte@arca.com</a> .En breve te ayudaremos.</p>
                    </div>
                  </div>
                </div>
            </div>  
            
            <div class="con-sect-without">
              Bienvenido al modulo de ayuda, donde encontraras las respuestas a tus preguntas.
              Pulsa el tema que desees para empezar.
            </div>

        </div>
        <div class="footer-help-center">
            <h4>¿Aun necesitas ayuda?</h4>
            <p>Envia un mensajes via email.</p>
            <a href="">Contactanos</a>
        </div>
    </div>
    <?php
      }
    }
  }
    ?>
    <!-- Administrador -->
    <?php
      if (isset($_SESSION['logueado'])){
        if ($_SESSION['logueado'] === 1){
          if($_SESSION['administrador'] == 1){
  ?>
    <div class="con-help-center-v">
        <div class="aside-help-center">
            <div class="info-help">
                <h3>Modulo de ayuda</h3>
                <p>Encuentra las respuestas a tus dudas mas frecuentes.</p>
            </div>
            <div class="con-inpt">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Buscar">
                    <img src="./assets/img/icons/busqueda.svg" alt="">
            </div>

            <div class="con-items">
                <div class="item-help" onclick="selectItem('.con-items :nth-child(1)', 1)">
                    Gestionar usuarios
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
                <div class="item-help" onclick="selectItem('.con-items :nth-child(2)', 2)">
                    Gestionar horarios
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
                <div class="item-help" onclick="selectItem('.con-items :nth-child(3)', 3)">
                    Gestionar PQRSF
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
                <div class="item-help" onclick="selectItem('.con-items :nth-child(4)', 4)">
                    Perfil
                    <img src="./assets/img/icons/angulo-doble-pequeno-derecho 1.svg" alt="">
                </div>
            </div>
        </div>
        <div class="body-help-center">

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Agregar usuario
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Ingresar a gestión de usuarios</p>
                      <p>2. Digita los datos correspondientes en el formulario.</p>
                      <p>3. Oprime el boton agregar</p>
                      <p>Y listo, el usuario esta registrado.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Deshabilitar usuario
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Ingresar a gestion de usuarios.</p>
                      <p>2. Buscar el usuario que necesite deshabilitar.</p>
                      <p>3. Oprime el boton correspondiente.</p>
                      <p>Y listo, el usuario estara deshabilitado.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Editar usuario
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Ingresar a gestion de usuarios.</p>
                      <p>2. Buscar el usuario que necesite deshabilitar.</p>
                      <p>3. Oprime el boton correspondiente.</p>
                      <p>4. Cambia los datos que requieras.</p>
                      <p>5. Oprime el boton editar.</p>
                    </div>
                  </div>
                </div>
            </div>  

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Agendar horarios a doctores
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Ingresar a gestion de horarios</p>
                      <p>2. Ingresar los datos correspondientes de la cita medica.</p>
                      <p>3. Oprimir el boton de registrar</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Deshabilitar horarios a doctores
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Ingresa a gestion de horarios</p>
                      <p>2. Oprime "ver todas las citas"</p>
                      <p>3. Ubica la cita medica que quieras deshabilitar</p>
                      <p>4. Oprime el boton de deshabilitar</p>
                    </div>
                  </div>
                </div>
            </div>  

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Marcar un PQRSF como respondido
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. Dirigete al modulo de PQRSF</p>
                        <p>2. Oprime el boton de ver mas</p>
                        <p>3. Oprime el boton de responder.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Responder PQRSF
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Recuerda que los PQRSF se responden por correo al afectado.</p>
                    </div>
                  </div>
                </div>
            </div>  

            <div class="accordion acordion-sect" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Cambiar datos
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>1. Dirigete a la seccion de datos</p>
                      <p>2. Oprime el boton de editar</p>
                      <p>3. Cambia los datos que requieras.</p>
                      <p>4. Oprime el boton de aceptar.</p>
                    </div>
                  </div>
                </div>
            </div>  
            
            <div class="con-sect-without">
              Bienvenido al modulo de ayuda, donde encontraras las respuestas a tus preguntas.
              Pulsa el tema que desees para empezar.
            </div>

        </div>
        <div class="footer-help-center">
            <h4>¿Aun necesitas ayuda?</h4>
            <p>Envia un mensajes via email.</p>
            <a href="">Contactanos</a>
        </div>
    </div>
    <?php
      }
    }
  }
    ?>


    <script src="./bootstrap/jquery.js"></script>
    <script src="./bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/helpCenter.js"></script>
</body>
</html>