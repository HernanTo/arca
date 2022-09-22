<?php
    class observacion{
        public function leerObservacion(){
       
        echo "<table border='1' align='center'>";
 
            include ('data_conexion.php');
            $sql = "SELECT * from observacion";

            $resultado = $db -> query($sql);
            
            echo "<tr>";
                echo "<td>"; echo "Identificacion de la observacion"; echo "</td>";
                echo "<td>"; echo "Identificacion de la cita"; echo "</td>";
                echo "<td>"; echo "Observacion de la cita"; echo "</td>";
                echo "<td>"; echo "Soporte de la cita"; echo "</td>";
                echo "<td>"; echo "Actualizar"; echo "</td>";
            echo "</tr>";
            
            while($row = $resultado->fetch_assoc()){
                $id_observacion = $row["id_observacion"];
                $idcita = $row["id_cita"];
                $observacionCi = $row["observacion"];
                $soporteCi = $row["soporte"];
                
                echo "<tr>";
                    echo "<td>"; echo $id_observacion; echo "</td>";
                    echo "<td>"; echo $idcita; echo "</td>";
                    echo "<td>"; echo $observacionCi; echo "</td>";
                    echo "<td>"; echo $soporteCi; echo "</td>";
                    echo "<td>"; echo "<form name='observacion' action='neg_actualizarObservacion.php' method='post' required><input name='id_observacion' type='hidden' value='$id_observacion'/><input type='submit' value='Actualizar observacion'>";
                echo "</tr>";
            }
        echo "</table>";
        }
    }

    $crud = new observacion();
    $crud->leerObservacion();
?>
