<?php
    class cita{
        public function inhabilitarCita($estadoCi ,$tdd, $documento, $idCita){
            include ('data_conexion.php');
            $sql = "SELECT estadoCita , tddPaciente , docPaciente , id_cita  FROM citasmedicas WHERE id_cita = '$idCita'";
            $resultado = $db -> query($sql);
            while($row = $resultado -> fetch_assoc()){
                $estadoCi = $row['estadoCita'];
                $tdd = $row['tddPaciente'];
                $documento = $row['docPaciente'];
                $idCita = $row['id_cita'];
                if(intval($estadoCi) != 1){
                    mysqli_query($db, "UPDATE citasmedicas set estadoCita = 1, tddPaciente = '$tdd', docPaciente = '$docPaciente' WHERE id_cita = '$idCita'");
                    
                    print "<script>alert('Usuario habilitado'); window.location='neg_Ci_buscar.php';</script>";
                    
                }else{
                    mysqli_query($db, "UPDATE citasmedicas set estadoCita = 0, tddPaciente = '$tdd', docPaciente = '$docPaciente' WHERE id_cita = '$idCita'");       
                    
                    print "<script>alert('Usuario inhabilitado'); window.location='neg_Ci_buscar.php';</script>";

            }
        }
    }
}
    $crud = new cita();
    $crud->inhabilitarCita($_POST["estadoCi"] , $_POST["tipodedocumentoP"] , $_POST["documentoP"] , $_POST["idCi"]);
?>

    