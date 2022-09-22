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
            echo "</tr>";
            
            while($row = $resultado->fetch_assoc()){
                $idobservacion = $row["id_observacion"];
                $idcita = $row["id_cita"];
                $observacionCi = $row["observacion"];
                $soporteCi = $row["soporte"];
                
                echo "<tr>";
                    echo "<td>"; echo $idobservacion; echo "</td>";
                    echo "<td>"; echo $idcita; echo "</td>";
                    echo "<td>"; echo $observacionCi; echo "</td>";
                    echo "<td>"; echo $soporteCi; echo "</td>";
                echo "</tr>";
            }
        echo "</table>";
        }
    }

    $crud = new observacion();
    $crud->leerObservacion();
?>
