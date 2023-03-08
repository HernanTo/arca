<?php
    class user{
        public function show(){
            include ('./data_conexion.php');
            $tdd = $_SESSION['tdd'];
            $docu = $_SESSION['docu'];
            $sql = "SELECT * FROM usuario WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$docu'";
           
            $resultado = $db -> query($sql);
            
            while($row = $resultado->fetch_assoc()){
                
                $data = [
                    "tdd" => $row ["fk_pk_tipo_documentoU"],
                    "docUser" => $row ["documento_U"],
                    "pNombre" => $row ["pNombre_U"],
                    "sNombre" => $row ["sNombre_U"],
                    "pApellido" => $row ["pApellido_U"],
                    "sApellido" => $row ["sApellido_U"],
                    "fechaNaci" => $row["fechaNacimiento_U"],
                    "direccion" => $row["direccion_U"],
                    "email" => $row["correoElectronico_U"],
                    "celular" => $row["celular_U"],
                    "eps" => $row["eps_P"],
                ];
            }
            return $data;
        }
    }
    $crud = new user();
    $data = $crud->show();
?>