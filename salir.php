<?php

    session_start();
    $_SESSION['logueado'] = 0;
    $_SESSION['administrador'] = 0;
    $_SESSION['secretaria'] = 0;
    $_SESSION['doctor'] = 0;
    $_SESSION['paciente'] = 0;
    $_SESSION['pNombre_U'] = 0;
    $_SESSION['sNombre_U'] = 0;
    $_SESSION['pApellido_U'] = 0;
    $_SESSION['sApellido_U'] = 0;
    $_SESSION['photo'] =0;
    $_SESSION['tdd'] = 0;
    $_SESSION['docu'] = 0;
   
    header("Location: index.html");

?> 