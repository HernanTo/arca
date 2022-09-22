<?php
    class observacion{
        public function actualizarObservacion($id_observacion){
        include ('data_conexion.php');
            
            // Actualizar datos != editar datos, en editar se puede cambiar los datos más sencibles y solo lo pueden hacer los administradores
            // Agregar datos x

            $sql = "SELECT * FROM observacion where id_observacion = '$id_observacion'";
           
            $resultado = $db -> query($sql);
            
            while($row = $resultado->fetch_assoc()){
                $id_observacion = $row["id_observacion"];
                $observacion = $row["observacion"];

            }

        echo "<form name='editarObservacion' action='neg_dat_actualiazarObservacion.php' method='post' required>";
            echo "<input name='id_observacion' type='hidden' value='$id_observacion' /><br />";
            echo "<input name='observacion' type='text' value='$observacion' /><br />";
            echo "<input type='submit' value='Actualizar'>";
        echo "</form>";
        }
    }
    $crud = new observacion();
    $crud->actualizarObservacion($_POST["id_observacion"]);
?>