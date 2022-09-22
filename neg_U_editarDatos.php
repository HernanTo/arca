<?php
    class usuario{
        public function editarDatos($tdd, $docUser){
        include ('data_conexion.php');
            
            // Actualizar datos != editar datos, en editar se puede cambiar los datos más sencibles y solo lo pueden hacer los administradores
            // Agregar datos x

            $sql = "SELECT * FROM usuario WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$docUser'";
           
            $resultado = $db -> query($sql);
            
            while($row = $resultado->fetch_assoc()){
                $tdd = $row["fk_pk_tipo_documentoU"];
                $docUser = $row ["documento_U"];
                $estado = $row["estado_U"];
                $primerNombre = $row["pNombre_U"];
                $segundoNombre = $row["sNombre_U"];
                $primerApellido = $row["pApellido_U"];
                $segundoApellido = $row["sApellido_U"];
                $fechaNaci = $row["fechaNacimiento_U"];
                $direccionU = $row["direccion_U"];
                $email = $row["correoElectronico_U"];
                $celular = $row["celular_U"];
            }

            echo "<form name='editarU_datos' action='neg_dat_U_editarDatos.php' method='post' required>";
                echo "<input name='tdd' type='text' value='$tdd' /><br />";
                echo "<input name='docUser' type='text' value='$docUser' /><br />";
                echo "<input name='estado' type='number' value='$estado' /><br />";
                echo "<input name='primerNombre' type='text' value='$primerNombre' /><br />";
                echo "<input name='segundoNombre' type='text' value='$segundoNombre' /><br />";
                echo "<input name='primerApellido' type='text' value='$primerApellido' /><br />";
                echo "<input name='segundoApellido' type='text' value='$segundoApellido' /><br />";
                echo "<input name='fechaNaci' type='date' value='$fechaNaci' /><br />";
                echo "<input name='direccionU' type='text' value='$direccionU' /><br />";
                echo "<input name='correoE' type='email' value='$email' /><br />";
                echo "<input name='celularU' type='number' value='$celular' /><br />";
                echo "<input type='submit' value='Actualizar'>";
            echo "</form>";
        }
    }
    $crud = new usuario();
    $crud->editarDatos($_POST["tipodeDocumento"] , $_POST["documentoU"]);
?>