<?php
class pqrsf{
    public function respuestaPQRSF($estado_PQRSF, $tdd, $documento){
        include ('data_conexion.php');
        $sql = "SELECT estadoPQRSF, fk_pk_tipo_documentoU, documento_U from pqrsf WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$documento'";
        $resultado = $db -> query($sql);
        while($row = $resultado -> fetch_assoc()){
            $estado_PQRSF = $row['estadoPQRSF'];
            $tdd = $row['fk_pk_tipo_documentoU'];
            $documento = $row['documento_U'];
            if(intval($estado_PQRSF) != 1){
                mysqli_query($db, "UPDATE pqrsf set estadoPQRSF = 1 WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$documento'");
            
                print "<script>alert('PQRSF RESPONDIDO'); window.location='neg_leerPQRSF.php';</script>";
                
            }else{ 
                mysqli_query($db, "UPDATE pqrsf set estadoPQRSF = 0 WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$documento'");

                print "<script>alert('PQRSF NO RESPONDIDO'); window.location='neg_leerPQRSF.php';</script>";
            
            }
        }
    }
}
    $crud = new pqrsf();
    $crud->respuestaPQRSF($_POST["estado_PQRSF"], $_POST["tipodeDocumento"] , $_POST["doc"]);
?>
