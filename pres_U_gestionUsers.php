<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modulo de crear usuario</title>
    <meta name="description"
        content="Nació hace más de 13 años como una fundación que solo trabajaba en la rehabilitación integral de personas con discapacidad, pero cuando descubrió su misión en el mundo, decidió dirigir sus esfuerzos hacia la rehabilitación de la sociedad y trabajar por la inclusión social." />
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <meta name="description" content="Ingresar al sistema arca, Gestionar citas, resultados, etc" />
</head>

<body>

            <form action="neg_U_leer.php" method="post">
                <h2>Ver todos los usuarios</h2>
                <select name="tipo-rol-fil" id="tipo-rol-fil" required>
                  <option value="1">Ver usuarios</option>
                </select>
                <input type="submit" value="Buscar" class="btn-fil">
              </form>

              <form action="neg_U_filtrarUser.php" method="post">
              <div class="">
                <p>Filtrar usuarios por el tipo de documento y el documento</p>
                <select name="fk_pk_tipo_documentoU" id="fk_pk_tipo_documentoU" required>
                    <option value="" hidden>Tipo de documento</option>
                    <option value="CC">Cédula de ciudadanía</option>
                    <option value="TI">Tarjeta de identidad</option>
                    <option value="CE">Cédula de extranjería</option>
                  </select>
                <input type="text" name="documento" placeholder="Número de documento" required>
                <br>
                <input type="submit" value="Buscar" class="btn-fil">
            </div>
              </form>
              <form action="neg_U_filtrarUserPorRol.php" method="post">
                <p>Buscar por roles</p>
                <select name="usuarioRol" id="usuarioRol" required>
                  <option value="">Selecciona un rol</option>
                  <option value="1">Administradores</option>
                  <option value="2">Secretarias</option>
                  <option value="3">Doctores</option>
                  <option value="4">Pacientes</option>
                </select>
                <input type="submit" value="Buscar" class="btn-fil">
              </form>
            <form method="POST" action="neg_U_Crear.php">
            <div class="">
                <p>El tipo de documento y el documento los usara para el inicio de sesion</p>
                <select name="usuarioRol"  id="usuarioRol" required>
                  <option value="" hidden>Seleccione el tipo de cuenta</option>
                  <option value="1">Administrador</option>
                  <option value="2">Secretaria</option>
                  <option value="3">Doctor</option>
                  <option value="4">Paciente</option>
                </select>
                <select name="fk_pk_tipo_documentoU" id="fk_pk_tipo_documentoU" required>
                    <option value="" hidden>Tipo de documento</option>
                    <option value="CC">Cédula de ciudadanía</option>
                    <option value="TI">Tarjeta de identidad</option>
                    <option value="CE">Cédula de extranjería</option>
                  </select>
                <input type="text" name="documento" placeholder="Número de documento" required>
            </div>
            <div class="">
                <input type="text" name="pr_name" placeholder="Primer nombre" required>
                <input type="text" name="sg_name" placeholder="Segundo nombre">
                <input type="text" name="pr_apellido" placeholder="Primer apellido" required>
                <input type="text" name="sg_apellido" placeholder="Segundo apellido">
            </div>
            <div class="">
                <input type="date" name="fecha_naci" placeholder="Fecha de nacimiento" required>
                <input type="text" name="direccionU" placeholder="Direccion de residencia">
                <input type="email" name="correo" placeholder="Correo electronico" required>
                <input type="text" name="Numcel" placeholder="Numero celular" required>
            </div>
            <div class="">
                <input type="text" name="epsU" placeholder="EPS a la que pertenece">
                <input type="text" name="especialidadU" placeholder="Especialidad del Usuario" required>
            </div>
            <div class="">
                <p>La contraseña la usara para el inicio de sesion</p>
                <input type="text" name="claveU" placeholder="Clave de usuario" required>
                <input type="text" name="preguntaSeg" placeholder="Pregunta de seguridad">
                <input type="text" name="ResppreguntaSeg" placeholder="Respuesta de pregunta de seguridad" >
                <input type="file" name="fotoU" placeholder="Foto del usuario">
            </div>
                <input type="button" name="Volver" class="Btn" value="Volver">
                <input type="submit" name="Enviar" class="Btn2" value="Enviar">
            </div>

        