<?php
include ("./data_conexion.php");
include ("./neg_Ci_buscar.php");


$cita = new cita();
$resultado = $cita -> buscarCitasD($db);
while($row = $resultado -> fetch_assoc()){
    $fecha = $row['fecha'];
    $hora =  $row['hora'];
    $nombre = $row["Nombre"];


    echo $fecha, "<br>", $hora, "<br>";
    echo $nombre;
}
?>