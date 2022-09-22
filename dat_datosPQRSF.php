<?php
    class pqrsf{
        public function detallePQRSF($NumRadicacion){
        include ('data_conexion.php');

            $sql = "SELECT fk_pk_idTipoPQRSF, estadoPQRSF, fk_pk_tipo_documentoU , documento_U , CONCAT(pNombre_U, ' ', sNombre_U, ' ', pApellido_U, ' ', sApellido_U) as 'Nombre' , celular_U , telefono_U , correoElectronico_U  , motivoPQRSF , detallePQRSF , soportePQRSF, fechaPQRSF
            FROM pqrsf where NumeroRadicacion = '$NumRadicacion'";

            $resultado = $db -> query($sql);
            while($row = $resultado->fetch_assoc()){
                $estado_PQRSF = $row["estadoPQRSF"];
                $tdd = $row["fk_pk_tipo_documentoU"];
                $fecha = $row["fechaPQRSF"];
                $tdoc = $row["documento_U"];
                $nombrePQRSF = $row["Nombre"];
                $num_celular = $row["celular_U"];
                $num_telefonico = $row["telefono_U"];
                $correo = $row["correoElectronico_U"];
                $motivo = $row["motivoPQRSF"];
                $detalle = $row["detallePQRSF"];
                $soporte = $row["soportePQRSF"];
                 
            echo "<h1>Caso N°"; echo $NumRadicacion; echo "</h1>";
            echo "Fecha del PQRSF: "; echo $fecha; echo "</br>";
                 echo "<h4>Informacion del afectado</h4>";
                 echo "Estado actual del PQRSF (1 = Respondido , 0 = No respondido) : "; echo $estado_PQRSF; echo "</br>";
                     echo "Tipo de documento : "; echo $tdd; echo "</br>";
                     echo "Numero de documento : "; echo $tdoc; echo "</br>";
                     echo "Nombre del afectado : "; echo $nombrePQRSF; echo "</br>";
                     echo "Numero telefonico : "; echo $num_celular; echo "</br>";
                     echo "Telefono fijo : "; echo $num_telefonico; echo "</br>";
                     echo "Correo electronico : "; echo $correo; echo "</br>";
                 echo "<h4>Detalle de la solicitud</h4>"; echo "</br>";
                     echo "Motivo :  "; echo $motivo; echo "</br>";
                     echo "Detalle : "; echo $detalle; echo "</br>";
                     echo "Soportes : "; echo $soporte;  echo "</br>";
                     echo "<a href='./neg_leerPQRSF.php'>Volver</a>";
                     echo "<form name='respuestapqrsf' action='neg_responderPQRSF.php' method='post' required><input name='estado_PQRSF' type='hidden' value='$estado_PQRSF'/><input name='tipodeDocumento' type='hidden' value='$tdd'/><input name='doc' type='hidden' value='$tdoc'/><input type='submit' value='Responder'></form>";
                 
            }
        }
    }
$crud = new pqrsf();
$crud->detallePQRSF($_POST["NumeRadicacion"]);
?>
