<?php
include ('seguridad.php');
if(!$_SESSION['paciente'] == 1){
    header('Location: pres_dashboard.php');
}
if(!isset($_GET['cita'])){
    header('Location: pres_tCita.php');
}
    class cita{
        public function update($idCita, $id, $tdd){
            include('./data_conexion.php');
            $sql = "UPDATE citasmedicas SET estadoCita = 1, tddPaciente = '$tdd', docPaciente = '$id' WHERE  id_cita = $idCita AND estadoCita = 0";
            mysqli_query($db, $sql);
            if($db -> affected_rows> 0){
                $_SESSION['citaE'] = 1;
                // header('Location: pres_dashboard.php');

            }else{
                $_SESSION['citaE'] = 0;
                header('Location: pres_tCita.php');
            }
        }
    }
    $cita = new cita;
    $cita->update($_GET['idCita'], $_GET['id'], $_GET['tdd'])
?>
