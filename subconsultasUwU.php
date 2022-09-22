<?php
    class cita{
        public function buscarCitasD(){
        include ('data_conexion.php');

        echo "<table border='1' align='center'>";
            date_default_timezone_set("America/Bogota");
            $fecha = date('Y-m-d');       
            $hora = date('H:i:s', time());       

            /*$sql = "SELECT fecha, hora, tddDoctor, docDoctor, CONCAT(pNombre_U, ' ', sNombre_U, ' ', pApellido_U, ' ', sApellido_U) as 'Nombre'
            FROM citasmedicas
            inner JOIN usuario
            ON documento_U = docDoctor
            WHERE estadoCita = 1 AND fecha >= '$fecha' AND hora >= '$hora'";
*/
$sql="SELECT * FROM citasmedicas  WHERE estadoCita = 1 AND fecha >= '$fecha' AND hora >= '$hora'"; 
            $resultado = $db -> query($sql);

            echo "<tr>";
                echo "<td>"; echo "Fecha"; echo "</td>";
                echo "<td>"; echo "Hora"; echo "</td>";
               // echo "<td>"; echo "Tipo de Documento - Doctor"; echo "</td>";
                echo "<td>"; echo "Número de Documento"; echo "</td>";
                echo "<td>"; echo "Doctor"; echo "</td>";
            echo "</tr>";

            while($row = $resultado->fetch_assoc()){
                $fecha_cita = $row["fecha"];
                $hora_cita = $row["hora"];
                $tdd_doctor = $row["tddDoctor"];
                //$nombre_doctor = $row["Nombre"];
                $doc_doctor = $row["docDoctor"];
                //////////////////////////////////////////////////////////////////
$sql2="SELECT * FROM usuario WHERE documento_U='$doc_doctor'"; 
            $resultado2 = $db -> query($sql2);

            while($row2 = $resultado2->fetch_assoc()){
                $pNombre_U = $row2["pNombre_U"];
                }
                ///////////////////////////////////////////////////////////////////



                echo "<tr>";
                    echo "<td>"; echo $fecha_cita; echo "</td>";
                    echo "<td>"; echo $hora_cita; echo "</td>";
                   // echo "<td>"; echo $tdd_doctor; echo "</td>";
                    echo "<td>"; echo $doc_doctor; echo "</td>";
                    echo "<td>"; echo $pNombre_U; echo "</td>";
                echo "</tr>";
            }
        echo "</table>";
        }
    }

    $crud = new cita();
    $crud->buscarCitasD();
?>
