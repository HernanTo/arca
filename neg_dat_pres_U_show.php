<?php
    class user{
        public function show($tdd, $document){
            include('./data_conexion.php');

            $sql = "SELECT *FROM usuario WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$document'";
            $resultado = $db->query($sql);

            while($row = $resultado->fetch_assoc()){
                $data = [
                    '' => '',
                ];
            }
            return $data;
        }
    }
?>