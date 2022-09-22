<?php
error_reporting(0);
    class usuario{
        public function filtrarUser($tdd,$tdoc,$usuarioRol){
            include ('data_conexion.php');    
            echo "<table border='1' align='center'>";
            
            $sql = "SELECT fk_pk_tipo_documentoU, documento_U , estado_U , CONCAT(pNombre_U, ' ', sNombre_U, ' ', pApellido_U, ' ', sApellido_U) as 'Nombre' , fechaNacimiento_U , direccion_U , correoElectronico_U , celular_U FROM usuario 
            inner join usuario_has_roles
            on documento_U = usuario_id
            WHERE usuario_rol ='$usuarioRol'";
           
            $resultado = $db -> query($sql);
            
            echo "<tr>";
                echo "<td>"; echo "Tipo de documento"; echo "</td>";
                echo "<td>"; echo "Documento actual"; echo "</td>";
                echo "<td>"; echo "Estado actual"; echo "</td>";
                echo "<td>"; echo "Nombres"; echo "</td>";
                echo "<td>"; echo "Fecha de nacimiento"; echo "</td>";
                echo "<td>"; echo "Direccion de residencia"; echo "</td>";
                echo "<td>"; echo "Correo electronico"; echo "</td>";
                echo "<td>"; echo "Celular"; echo "</td>";
                echo "<td>"; echo "Actualizar"; echo "</td>";
                echo "<td>"; echo "Inhabilitar"; echo "</td>";
            echo "</tr>";
            
            
            while($row = $resultado->fetch_assoc()){
                $tdd = $row["fk_pk_tipo_documentoU"];
                $docUser = $row ["documento_U"];
                $estadoUser = $row ["estado_U"];
                $nombres = $row["Nombre"];
                $fechaNaci = $row["fechaNacimiento_U"];
                $direccion = $row["direccion_U"];
                $email = $row["correoElectronico_U"];
                $celular = $row["celular_U"];


            echo "<tr>";
                echo "<td>"; echo $tdd; echo "</td>";
                echo "<td>"; echo $docUser; echo "</td>";
                echo "<td>"; echo $estadoUser; echo "</td>";
                echo "<td>"; echo $nombres; echo "</td>";
                echo "<td>"; echo $fechaNaci; echo "</td>";
                echo "<td>"; echo $direccion; echo "</td>";
                echo "<td>"; echo $email; echo "</td>";
                echo "<td>"; echo $celular; echo "</td>";
                echo "<td>"; echo "<form name='editarU_datos' action='neg_U_editarDatos.php' method='post' required><input name='tipodeDocumento' type='hidden' value='$tdd'/><input name='documentoU' type='hidden' value='$docUser'/><input type='submit' value='Actualizar'></form>"; echo "</td>";
                echo "<td>"; echo "<form name='inhabilitarU_datos' action='neg_U_inhabilitar.php' method='post' required><input name='estadoU' type='hidden' value='$estadoUser'/><input name='tipodeDocumento' type='hidden' value='$tdd'/><input name='documentoU' type='hidden' value='$docUser'/><input type='submit' value='Inhabilitar'></form>"; echo "</td>";
            echo "</tr>";
            }
        }
    }
    $crud = new usuario();
    $crud->filtrarUser($_POST["fk_pk_tipo_documentoU"] , $_POST["documento"] , $_POST["usuarioRol"]);
?>