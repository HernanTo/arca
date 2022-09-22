<?php
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
header("Content-Type: text/html;charset=utf-8");
$db = new mysqli('localhost', 'root', '', 'arca');
$acentos = $db->query("SET NAMES 'utf8'");
if($db -> connect_error> 0){
    die("Error de conexión ['. $db->connect_error . '] ");
}
?>  