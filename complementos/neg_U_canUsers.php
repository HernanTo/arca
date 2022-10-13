<?php

function canUsers(){
    include ('./data_conexion.php');
    // Consulta tal vez se puede mejorar
    $sql = "SELECT 
        (SELECT COUNT(usuario_id) FROM usuario_has_roles WHERE usuario_rol = 1) as administrador,
        (SELECT COUNT(usuario_id) FROM usuario_has_roles WHERE usuario_rol = 2) as secretaria,
        (SELECT COUNT(usuario_id) FROM usuario_has_roles WHERE usuario_rol = 3) as doctor,
        (SELECT COUNT(usuario_id) FROM usuario_has_roles WHERE usuario_rol = 4) as paciente
        from usuario_has_roles";
    
    $resultado = $db -> query($sql);
    
    while($row = $resultado -> fetch_assoc()){

        $administrador = $row['administrador'];
        $secretaria = $row['secretaria'];
        $doctor = $row['doctor'];
        $paciente = $row['paciente'];
        $canUsers = [$administrador, $secretaria, $doctor, $paciente];
        // [admin, secretaria, doctor, paciente]
        break;
    }
    return $canUsers;
}
?>