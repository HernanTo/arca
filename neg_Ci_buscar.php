<?php
    include ('./seguridad_admin.php');

    class cita{
        public function buscarCitasD(){
        include ('data_conexion.php');
            $color = TRUE;

            date_default_timezone_set("America/Bogota");
            $fecha = date('Y-m-d');       
            $hora = date('H:i:s', time());       

            $sql = "SELECT id_cita , id_tipo_cita, fecha, hora, estadoCita, CONCAT(tddDoctor, ' ' , docDoctor) as documenroDoc
            FROM citasmedicas
            inner JOIN usuario
            ON documento_U = docDoctor";
            /* WHERE estadoCita = 1 AND fecha >= '$fecha' AND hora >= '$hora'"; */
            $resultado = $db -> query($sql) ;

            // echo "<tr>";
            //     echo "<td>"; echo "Id de la cita"; echo "</td>";
            //     echo "<td>"; echo "Fecha"; echo "</td>";
            //     echo "<td>"; echo "Hora"; echo "</td>";
            //     echo "<td>"; echo "Estado de la cita"; echo "</td>";
            //     echo "<td>"; echo "Tipo de Documento - Doctor"; echo "</td>";
            //     echo "<td>"; echo "Número de Documento - Doctor"; echo "</td>";
            //     echo "<td>"; echo "Tipo de Documento - Paciente"; echo "</td>";
            //     echo "<td>"; echo "Número de Documento - Paciente"; echo "</td>";
            //     echo "<td>"; echo "Nombre"; echo "</td>";
            //     echo "<td>"; echo "Inhabilitar"; echo "</td>";
            // echo "</tr>";
?>
                  <div class="table">
            <div class="row-header">
                <!-- <div class="cell">Estado</div> -->
                <div class="cell cell-docu" style="grid-column: 1/2;">#</div>
                <div class="cell cell-name" style="grid-column: 2/3;">Tipo Cita</div>
                <div class="cell cell-name" style="grid-column: 3/5;">Fecha</div>
                <div class="cell cell-email" style="grid-column: 5/6;">Hora</div>
                <div class="cell cell-email" style="grid-column: 6/7;">Estado cita</div>
                <div class="cell cell-email" style="grid-column: 7/9;">Doctor</div>
                <div class="cell con-actions" style="grid-column: 9/11; grid-template-columns: 100%;">Acciones</div>
            </div>
<?php

            while($row = $resultado->fetch_assoc()){
                $id_ci = $row["id_cita"];
                $fecha_cita = $row["fecha"];
                $hora_cita = $row["hora"];
                $estado_cita = $row["estadoCita"];
                $typeCita = $row["id_tipo_cita"];
                $doc_doctor = $row["documenroDoc"];

                $color = !$color;

            ?>
                <div class="row <?php echo $color ? 'row-dif' : ' ' ?>">

<div class="cell cell-docu" style="grid-column: 1/2;"><?php echo $id_ci ?></div>
<div class="cell" style="grid-column: 2/3;"><?php echo $typeCita ?></div>
<div class="cell" style="grid-column: 3/5;"><?php echo $fecha_cita ?></div>
<div class="cell" style="grid-column: 5/6;"><?php echo $hora_cita ?></div>
<div class="cell" style="grid-column: 6/7;"><?php echo $estado_cita ?></div>
<div class="cell" style="grid-column: 7/9;"><?php echo $doc_doctor ?></div>

<div class="cell con-actions" style="grid-column: 9/11; grid-template-columns: 100%;">
    <button class="btn-model"><img src="./assets./img/icons/eye.svg" alt=""></button>
</div>
</div>
            <?php    
            }
            ?>
            </div>
            <?php
            return [$resultado, '1'];

        }
    }

    $crud = new cita();
    $nombrepag = "Gestión de usuarios";
    $descpag = "Gestiona a tus usuarios de una manera sencilla.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de usuarios</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <link rel="stylesheet" href="./css/panel_admin.css">
    <link rel="stylesheet" href="./css/view_tables.css">
</head>
<body>
    <div class="container">
        <?php 
            include("./components/sidebar.php");
            include("./components/navbar.php");
        ?>
        <article class="body_dash">
            <div class="head_dash">
                <h2>Busqueda usuarios</h2>
                
            </div>
           <div class="con-tables">
                <?php list($resultado, $canPag) = $crud->buscarCitasD(); ?>
           </div>
           <!-- <div class="con-pagination">
            
            <div class="pagination">
                
                <?php if($_GET['pagina'] <= 1){ ?>
                <a  class="disable">&laquo;</a>
                <?php }else{ ?>        
                <a href="neg_U_filtrarUserPorRol.php?pagina=<?php  echo $_GET['pagina']-1 ?>">&laquo;</a>
                <?php  }?>
        
        
                <?php for($i=0; $i < $canPag; $i++){?>
                    <a href='neg_U_filtrarUserPorRol.php?pagina=<?php echo $i+1?>' class="<?php echo $_GET['pagina'] == $i+1 ? 'active' : '' ?>"><?php echo $i+1; ?></a>      
                <?php  }?>
        
        
                <?php if($_GET['pagina'] >= $canPag){ ?>
                    <a  class="disable">&raquo;</a>
                <?php } else{ ?>        
                        <a href="neg_U_filtrarUserPorRol.php?pagina=<?php echo $_GET['pagina']+1 ?>">&raquo;</a>
                <?php }?>
        
            </div>
           </div> -->
        </article>
    </div>
    
</body>
</html>

