<?php
    class cita{
        public function buscarCitasD(){
        include ('data_conexion.php');

        echo "<table border='1' align='center'>";
            date_default_timezone_set("America/Bogota");
            $fecha = date('Y-m-d');       
            $hora = date('H:i:s', time());       

            $sql = "SELECT id_cita , fecha, hora, estadoCita, tddDoctor, docDoctor, tddPaciente , docPaciente, CONCAT(pNombre_U, ' ', sNombre_U, ' ', pApellido_U, ' ', sApellido_U) as 'Nombre'
            FROM citasmedicas
            inner JOIN usuario
            ON documento_U = docDoctor";
            /* WHERE estadoCita = 1 AND fecha >= '$fecha' AND hora >= '$hora'"; */
            $resultado = $db -> query($sql) ;

            echo "<tr>";
                echo "<td>"; echo "Id de la cita"; echo "</td>";
                echo "<td>"; echo "Fecha"; echo "</td>";
                echo "<td>"; echo "Hora"; echo "</td>";
                echo "<td>"; echo "Estado de la cita"; echo "</td>";
                echo "<td>"; echo "Tipo de Documento - Doctor"; echo "</td>";
                echo "<td>"; echo "Número de Documento - Doctor"; echo "</td>";
                echo "<td>"; echo "Tipo de Documento - Paciente"; echo "</td>";
                echo "<td>"; echo "Número de Documento - Paciente"; echo "</td>";
                echo "<td>"; echo "Nombre"; echo "</td>";
                echo "<td>"; echo "Inhabilitar"; echo "</td>";
            echo "</tr>";

            while($row = $resultado->fetch_assoc()){
                $id_ci = $row["id_cita"];
                $fecha_cita = $row["fecha"];
                $hora_cita = $row["hora"];
                $estado_cita = $row["estadoCita"];
                $tdd_doctor = $row["tddDoctor"];
                $doc_doctor = $row["docDoctor"];
                $tdd_paciente = $row["tddPaciente"];
                $doc_paciente = $row["docPaciente"];
                $nombre_doctor = $row["Nombre"];
                
                echo "<tr>";
                    echo "<td>"; echo $id_ci; echo "</td>";
                    echo "<td>"; echo $fecha_cita; echo "</td>";
                    echo "<td>"; echo $hora_cita; echo "</td>";
                    echo "<td>"; echo $estado_cita; echo "</td>";
                    echo "<td>"; echo $tdd_doctor; echo "</td>";
                    echo "<td>"; echo $doc_doctor; echo "</td>";
                    echo "<td>"; echo $tdd_paciente; echo "</td>";
                    echo "<td>"; echo $doc_paciente; echo "</td>";
                    echo "<td>"; echo $nombre_doctor; echo "</td>";
                    echo "<td>"; echo "<form name='inhabilitarCi' action='neg_Ci_inhabilitar.php' method='post' required><input name='estadoCi' type='hidden' value='$estado_cita'/><input name='tipodedocumentoP' type='hidden' value='$tdd_paciente'/><input name='documentoP' type='hidden' value='$doc_paciente'/><input name='idCi' type='hidden' value='$id_ci'/><input type='submit' value='Inhabilitar'></form>"; echo "</td>";
                echo "</tr>";
            }
        echo "</table>";
        }
    }

    $crud = new cita();
    $crud->buscarCitasD();
?>

