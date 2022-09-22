<?php
    class usuario{
        
        public function consultar($docUser){
        include ("data_conexion.php");
        echo "<table border='1' aling='center'>";

        $sql = "SELECT usuario_rol, fechaNacimiento_U, direccion_U, correoElectronico_U, celular_U, eps_P, especialidad_U, CONCAT (fk_pk_tipo_documentoU,' ', documento_U)as documento, CONCAT(pNombre_U, ' ', sNombre_U, ' ', pApellido_U, ' ', sApellido_U) as Nombre
        from  usuario
        inner JOIN usuario_has_roles 
        on documento_U = usuario_id;";
        if(!$result = $db->query($sql)){
         die('Error de consulta!!![' .$db->error.']');
       }
        echo "<tr>";
        echo "<td>";echo "documento"; echo"</td>";echo "<td>";echo "Nombre"; echo"</td>";echo "<td>";echo "fechaNacimiento_U"; echo"</td>";echo "<td>";echo "Direccion_U"; echo"</td>";echo "<td>";echo "correoElectronico_U"; echo"</td>";echo "<td>";echo "celular_U"; echo"</td>";    echo "<td>";echo "eps_P"; echo"</td>";echo "<td>";echo "especialidad_U"; echo"</td>";    
        echo"</tr>";
        while($row = $result ->fetch_assoc()){
            $documento=stripslashes($row["documento"]);
            $Nombre=stripslashes($row["Nombre"]);
            $fechaNacimiento_U=stripslashes($row["fechaNacimiento_U"]);
            $Direccion_U=stripslashes($row["direccion_U"]);
            $correoElectronico_U=stripslashes($row["correoElectronico_U"]);
            $celular_U=stripslashes($row["celular_U"]);
            $eps_P=stripslashes($row["eps_P"]);
            $especialidad_U=stripslashes($row["especialidad_U"]);

            echo "<tr>";
            echo "<td>";echo $documento; echo"</td>";        echo "<td>";echo $Nombre; echo"</td>";        echo "<td>";echo $fechaNacimiento_U; echo"</td>";       echo "<td>";echo $Direccion_U; echo"</td>";     echo "<td>";echo $correoElectronico_U; echo"</td>";    echo "<td>";echo $celular_U; echo"</td>";    echo "<td>";echo $eps_P; echo"</td>";    echo "<td>";echo $especialidad_U; echo"</td>";    
            echo"</tr>";
            echo "<td>";

echo "<form name='sdfsd' method-'POST' action='neg_U_inhabilitar.php'>";
echo "<input type='hidden' name='documento value-'$documento'>";
echo "<input type-'Submit' value='Inhabilitar'>";
echo "</form>";
echo "</td>";
echo "<td>";

echo "<form name='sdfsd' method='POST' action='neg_U_Actualizar.php'>";
echo "<input type='hidden' name='documento' value='$documento'>";
echo "<input type-'Submit' value='Actualizar'>";
echo "</form>";
echo "</td>";
echo "</tr>";

        }
        echo"</table>";
     }
    }
    $nuevo = new usuario();
    $nuevo -> consultar('1018726753');
    ?>