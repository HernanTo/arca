<?php
  include('./seguridad.php');
    class cita{
        public function store($tipocita, $doctor, $consultorio, $inicio, $fin, $jornada){
            include('./data_conexion.php');
            $sql = "SELECT * FROM `usuario` WHERE documento_U = '$doctor'";
            $documentoDoctor = $db->query($sql);
            $tdddoc = '';
            while($row = $documentoDoctor->fetch_assoc()){
                $tdddoc = $row['fk_pk_tipo_documentoU'];
            }
            $fInicial = new DateTime($inicio);
            $fFinal = new DateTime($fin);
            $fFinal = $fFinal->modify('+1 day');
            $i = DateInterval::createFromDateString('1 day');
            $horario = new DatePeriod($fInicial, $i ,$fFinal);
            $jornadas = [
                ['06:00:00', '07:00:00', '08:00:00', '09:00:00', '10:00:00', '11:00:00',],
                ['12:00:00', '13:00:00', '14:00:00', '15:00:00', '16:00:00', '17:00:00', '18:00:00']
            ];
            foreach($horario as $day){

                $dayCita = $day->format("Y-m-d");
                $dayWeek = $dayCita;
                $dayWeek = date('l-d', strtotime($dayCita));
                $dayWeek = substr($dayWeek, 0, -3);
                if($dayWeek != 'Sunday'){
                    if($jornada == 2){
                        if($dayWeek != 'Saturday'){
                            echo 'a';
                            foreach($jornadas[1] as $hora){
                                $sql = "INSERT INTO citasmedicas(id_tipo_cita, fecha, hora, estadoCita, id_consultorio, tddDoctor, docDoctor, tddPaciente, docPaciente) VALUES ($tipocita, '$dayCita', '$hora', 0, $consultorio, '$tdddoc','$doctor', 0, 0)";
                                mysqli_query($db, $sql);
                                $_SESSION['horarioE'] = 1;
                                header('Location: pres_neg_cita_create.php');
                            }
                        }
                    }else{
                        foreach($jornadas[0] as $hora){
                            $sql = "INSERT INTO citasmedicas(id_tipo_cita, fecha, hora, estadoCita, id_consultorio, tddDoctor, docDoctor, tddPaciente, docPaciente) VALUES ($tipocita, '$dayCita', '$hora', 0, $consultorio, '$tdddoc','$doctor', 0, 0)";
                            mysqli_query($db, $sql);
                            $_SESSION['horarioE'] = 1;
                            header('Location: pres_neg_cita_create.php');
                        }
                    }
                }

        }
    }
}
    $cita = new cita;
    $cita->store(
        $_POST['especialidad'],
        $_POST['doctor'],
        $_POST['consultorio'],
        $_POST['inicio'],
        $_POST['fin'],
        $_POST['jornada']
    );
?>