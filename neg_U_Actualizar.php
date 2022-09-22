<?php
    class usuario{
        public function actualizar($tdoc, $doc){
            include ('data_conexion.php');    
            $sql = "SELECT * FROM usuario WHERE fk_pk_tipo_documentoU ='$tdoc' AND documento_U = '$doc'";
           
            $resultado = $db -> query($sql);
            
            while($row = $resultado->fetch_assoc()){
                $tdd = $row["fk_pk_tipo_documentoU"];
                $docUser = $row ["documento_U"];
                $primerNombre = $row["pNombre_U"];
                $segundoNombre = $row["sNombre_U"];
                $primerApellido = $row["pApellido_U"];
                $segundoApellido = $row["sApellido_U"];
                $direccion = $row["direccion_U"];
                $email = $row["correoElectronico_U"];
                $celular = $row["celular_U"];
            }

            echo "<form name='actualizarU_datos' action='neg_dat_U_actualizar.php' method='post' required>";
                echo "<input name='tdd' type='hidden' value='$tdd' /><br />";
                echo "<input name='docUser' type='hidden' value='$docUser' /><br />";
                echo "<input name='primerNombre' type='text' value='$primerNombre' /><br />";
                echo "<input name='segundoNombre' type='text' value='$segundoNombre' /><br />";
                echo "<input name='primerApellido' type='text' value='$primerApellido' /><br />";
                echo "<input name='segundoApellido' type='text' value='$segundoApellido' /><br />";
                echo "<input name='direccion_U' type='text' value='$direccion' /><br />";
                echo "<input name='email_U' type='email' value='$email' /><br />";
                echo "<input name='celular_U' type='number' value='$celular' /><br />";
                echo "<input type='submit' value='Actualizar'>";
            echo "</form>";
        }
    }
    $crud = new usuario();
    $crud->actualizar($_GET['tdd'], $_GET['doc']);
?>
