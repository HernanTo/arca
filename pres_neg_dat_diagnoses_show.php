<?php
if(isset($_SESSION['paciente'])){
    if($_SESSION['paciente'] == 1){
        header('Location: pres_dashboard.php');
    }
}
    class citas{
        public function showdiagnoses(){
            include ('data_conexion.php');
            $cont="0";
            $nameUs = $_SESSION["pNombre_U"];
            $tdd = $_SESSION['tdd'];
            $docu = $_SESSION['docu'];
            $sql= "SELECT citasmedicas.id_cita, citasmedicas.tipo_cita, citasmedicas.fecha, CONCAT(usuario.pNombre_U, ' ', usuario.sNombre_U, ' ', usuario.pApellido_U, ' ', usuario.sApellido_U) AS name
            FROM citasmedicas
            INNER JOIN usuario ON usuario.documento_U = citasmedicas.docDoctor
            WHERE citasmedicas.tddDoctor = '$tdd' AND citasmedicas.docDoctor = '$docu' LIMIT 0,4";


            $resultado = $db -> query($sql);
            $iterable = true;
            $mostrar_contenedor = false;
            while($row = $resultado->fetch_assoc()){
                if ($mostrar_contenedor) {
                    echo "<div class='con-form-diagnoses'>";
                    $mostrar_contenedor = true;
                }
                $idCita = $row ["id_cita"];
                $TipoCita = $row ["tipo_cita"];
                $NombreU = $row["name"];
                $fechaCita = $row["fecha"];


            ?>
                <div class="con-info-diagnoses">
                        <div class="img-diagnoses">
                            <a href="" class="">
                                <img src="./assets/img/icons/documento 1.svg" alt="">
                            </a>
                        </div>
                        <div class="title-diagnoses">Diagnostico medico
                            <div class="title-info-doctor">
                                <?php echo $row["tipo_cita"]; ?><br>
                                Doc. <?php echo $row["name"]; ?>
                            </div>
                        </div>
                        <div class="con-date">
                            <div class='date-diagnoses'> <?php echo $row["fecha"]; ?></div>
                        </div>
                        <div class="con-button-view-more">
                            <form method="POST" action="pres_neg_dat_view_diagnoses.php">
                                <input type="hidden" name="id_cita" value="<?php echo $idCita ?>">
                                <input type="submit" value="Ver más">
                            </form>    
                        </div>
                </div>
    <?php
                $cont=$cont+1;
            }
            if($cont=="0"){
                echo "<div class='body-scm'>
                    <div class='img-scm'><img src='./assets/img/sin_citas.svg' alt=''></div>
                    <div class='text-scm'>En este momento no existe ningun informe de diagnositco</div>
                </div>";
            }else{
                echo "</div>";
            }
        }
    }
    
    $crud = new citas();
    $crud->showdiagnoses();
?>