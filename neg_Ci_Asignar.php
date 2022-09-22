<?php
    class cita{
        public function asignarCita($tddDoc, $docDoc, $fecha, $hora, $estadoCita, $consultorio){
            include ('data_conexion.php'); 
            
            mysqli_query($db, "INSERT INTO citasmedicas(fecha, hora, estadoCita, consultorio, docDoctor, tddDoctor) VALUES ('$fecha','$hora', 0 ,'$consultorio','$docDoc', '$tddDoc')");
            
           echo "datos insertados";
        }
    }
    $crud = new cita();
    $crud->asignarCita($_POST["tdd"] , $_POST["docUser"] , $_POST["fecha"] , $_POST["hora"] , $_POST["estadoCita"] , $_POST["consultorio"]);
    /*Mirar lo de imprimir el documento del doctor que esté haciendo uso de este metodo uwu*/
?>
