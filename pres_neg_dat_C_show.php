<?php
    class citas{
        public function show(){
            include ('data_conexion.php');
            $cont="0";
            $nameUs = $_SESSION["pNombre_U"];
            $tdd = $_SESSION['tdd'];
            $docu = $_SESSION['docu'];
            $sql = "SELECT id_cita, id_tipo_cita, NombreTipoCita, fecha, hora FROM citasmedicas 
            INNER JOIN tiposdecita
            ON tiposdecita.idTiposCita = citasmedicas.id_tipo_cita
            WHERE tddPaciente = '$tdd' AND docPaciente = '$docu' LIMIT 0,3";
           
            $resultado = $db -> query($sql);
            $iterable = true;
            $mostrar_contenedor = true;
            while($row = $resultado->fetch_assoc()){
                if ($mostrar_contenedor) {
                    echo "<div class='con-info-cm'>";
                    $mostrar_contenedor = false;
                }
                $idCita = $row ["id_cita"];
                $tipoCita = $row["NombreTipoCita"];
                $fechaCita = $row["fecha"];
                $fechaCita = strtotime($fechaCita);
                $horaCita = $row["hora"];

            ?>
                <div class='info-cm'>
                    <div class='head-info-cm'><?php echo $tipoCita ?></div>
                    <div class='body-info-cm'>
                        <input type='hidden' name='idCita' value='$idCita'>
                        <div class='time-info-cm'><?php echo $horaCita ?></div>
                    </div>
                    <div class='date-info-cm'>
                        <div class='title-date-info'>
                            <div class='title-date'><?php echo date("d", $fechaCita) ?></div>
                            <div class='title-date'><?php echo date("m", $fechaCita) ?></div>
                            <div class='title-date'><?php echo date("Y", $fechaCita) ?></div>
                        </div>
                        <div class='text-date-info'>
                            <div class='text-date'>Día</div>
                            <div class='text-date'>Mes</div>
                            <div class='text-date'>Año</div>
                        </div>
                    </div>
                    <a class='footer-info-cm' href='#'>Ver más</a>
                </div>
    <?php
                $cont=$cont+1;
            }
            if($cont=="0"){
                echo "<div class='body-scm'>
                    <div class='img-scm'><img src='./assets/img/sin_citas.svg' alt=''></div>
                    <div class='text-scm'>No tienes citas médicas agendadas</div>
                </div>";
            }else{
                echo "</div>";
            }
        }
    }
    
    $crud = new citas();
    $crud->show();
?>
