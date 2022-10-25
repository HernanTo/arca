<?php
    class pqrsf{
        public function update($id){
            include('./data_conexion.php');

            $sql = "SELECT *FROM pqrsf WHERE NumeroRadicacion = $id";
            $resultado = $db->query($sql);

            while($row = $resultado->fetch_assoc()){
                if($row['estadoPQRSF'] == 0 ){
                    $sql = "UPDATE pqrsf SET estadoPQRSF = 1 WHERE NumeroRadicacion = '$id'";
                }else{
                    $sql = "UPDATE pqrsf SET estadoPQRSF = 0 WHERE NumeroRadicacion = '$id'";
                }
                mysqli_query($db, $sql);
                header('Location: neg_dat_pres_pqrsf_index.php');
            }
        }
    }  
    $classPqrsf = new pqrsf;
    $classPqrsf->update($_GET['id']);
?>