<?php
    class observacion{
        public function actualizarObservacion($id_observacion,$observacion){
        include ('data_conexion.php');
            mysqli_query($db, "UPDATE observacion SET id_observacion = '$id_observacion' , observacion = '$observacion' WHERE id_observacion = '$id_observacion'");

            echo "Haz actualizado los datos de la observacion de la cita correctamente";
        }
    }
    $crud = new observacion();
    $crud->actualizarObservacion($_POST["id_observacion"] , $_POST["observacion"]);

?>