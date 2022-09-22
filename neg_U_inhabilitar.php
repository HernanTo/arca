<?php
class usuario{
    public function inhabilitarUser($tdd, $docUser){
        include ('data_conexion.php');
        
        $sql = "SELECT estado_U, fk_pk_tipo_documentoU, documento_U  FROM usuario WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$docUser'";
        $resultado = $db -> query($sql);

        while($row = $resultado -> fetch_assoc()){
            $estado = $row['estado_U'];
            $tdd = $row['fk_pk_tipo_documentoU'];
            $docUser = $row['documento_U'];

            if(intval($estado) != 1){
                mysqli_query($db, "UPDATE usuario set estado_U = 1 WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$docUser'");
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                
            }else{ 
                mysqli_query($db, "UPDATE usuario set estado_U = 0 WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$docUser'");
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        }
    }
}
    $crud = new usuario();
    $crud->inhabilitarUser($_POST["tipodeDocumento"] , $_POST["documentoU"]);   
?>
