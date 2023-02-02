<?php
function canUsersPqrsf(){
    include ('../data_conexion.php');
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


    $sql = "SELECT COUNT(NumeroRadicacion) as total, (SELECT COUNT(estadoPQRSF) FROM pqrsf WHERE estadoPQRSF = 0) as noAnsw FROM pqrsf";

    $resultado = $db -> query($sql);

    while($row = $resultado->fetch_assoc()){
        $canPqrsf = [$row['total'], $row['noAnsw'], ($row['total'] - $row['noAnsw'])];
        // [total de pqrsf, pqrsf no respondidas y pqrsf respuestas]
        break;
    }

    return [$canUsers, $canPqrsf];
}
?>