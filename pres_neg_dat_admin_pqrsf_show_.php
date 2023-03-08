<?php
    class pqrsf{
        public function show_admin(){
            include ('data_conexion.php');
            $cont="0";
            $sql = "SELECT NumeroRadicacion , TipoPQRSF , fechaPQRSF
            FROM pqrsf
            INNER JOIN tipopqrsf
            ON fk_pk_idTipoPQRSF = idTipoPQRSF
            WHERE estadoPQRSF = 0
            LIMIT 0,3";
           
            $resultado = $db -> query($sql);
            $iterable = true;
            $mostrar_contenedor = true;
            while($row = $resultado->fetch_assoc()){
                if ($mostrar_contenedor) {
                    echo "<div class='con-info-pqrsf'>";
                    $mostrar_contenedor = false;
                }
                $tipopqrsf = $row ["TipoPQRSF"];
                $NumRadicacion = $row["NumeroRadicacion"];
                $fechapqrsf = $row["fechaPQRSF"];
            ?>
                <div class="info-pqrsf">
                    <div class='head-info-pqrsf'>Numero radicacion</div>
                        <div class="info-head-pqrsf"><?php echo $NumRadicacion ?></div>
                    <div class='body-info-pqrsf'>
                        <input type='hidden' name='tipopqrsf' value='$tipopqrsf'>
                        <div class='time-info-pqrsf'><?php echo $tipopqrsf ?></div>
                    </div>
                    <div class='date-info-pqrsf'>
                        <div class='title-date-info-pqrsf'>
                            <div class='title-date-pqrsf'><?php echo $fechapqrsf ?></div>
                        </div>
                        <div class='text-date-info-pqrsf'>
                            <div class='text-date'>Año</div>
                            <div class='text-date'>Mes</div>
                            <div class='text-date'>Día</div>
                        </div>
                    </div>
                    <a class='footer-info-pqrsf' href='#'>Ver más</a>
                </div>
    <?php
                $cont=$cont+1;
            }
            if($cont=="0"){
                echo "<div class='body-spqrsf'>
                    <div class='img-spqrsf'><img src='./assets/img/sin_citas.svg' alt=''></div>
                    <div class='text-spqrsf'>No hay PQRSF sin responder</div>
                </div>";
            }else{
                echo "</div>";
            }
        }
    }
    
    $crud = new pqrsf();
    $crud->show_admin();
?> 