
<?php
    include ('./seguridad_admin.php');
    // if(!$_GET){
    //     header("Location:neg_U_filtrarUserPorRol.php?pagina=1");
    // }
    class usuario{
        public function filtrarUser($tdd, $tdoc){
            include ('data_conexion.php');    
            // $resultadoAllUsers = $db -> query('SELECT *FROM usuario');
            // $canPag = ceil(($resultadoAllUsers->num_rows)/6);  

            // $iniciar = ($_GET['pagina']-1)*6;
            // $final = $iniciar + 6;
            
            $sql = "SELECT CONCAT(usuario_tdoc, ' ',  usuario_id) as documento, estado_U, CONCAT(pNombre_U, ' ', sNombre_U, ' ', pApellido_U, ' ', sApellido_U) as 'Nombre' , fechaNacimiento_U , direccion_U , correoElectronico_U , celular_U, usuario_tdoc, usuario_id
            from usuario_has_roles 
            inner JOIN usuario 
            on documento_U = usuario_id
            WHERE fk_pk_tipo_documentoU ='$tdd' AND documento_U = '$tdoc'";
           
            $resultado = $db -> query($sql);
       ?>     
          <div class="table">
            <div class="row-header">
                <!-- <div class="cell">Estado</div> -->
                <div class="cell cell-docu" style="grid-column: 1/4;">Documento</div>
                <div class="cell cell-name">Nombres</div>
                <div class="cell cell-email">Email</div>
                <div class="cell">Estado</div>
                <div class="cell con-actions">Acciones</div>
            </div>
            
        <?php
        $color = TRUE;
            while($row = $resultado->fetch_assoc()){

                $tdocs = $row["usuario_tdoc"];
                $numdocuser = $row["usuario_id"];
                
                $docUser = $row["documento"];
                $estadoUser = $row["estado_U"];
                $nameUser = $row["Nombre"];
                $fechaNaci = $row["fechaNacimiento_U"];
                $direccionU = $row["direccion_U"];
                $email = $row["correoElectronico_U"];
                $celular = $row["celular_U"];

                $color = !$color;
?>

                <div class="row <?php echo $color ? 'row-dif' : ' ' ?>">

                <div class="cell cell-docu" style="grid-column: 1/4;"><?php echo $docUser ?></div>
                <div class="cell cell-name"><?php echo $nameUser ?></div>
                <div class="cell cell-email"><?php echo $email ?></div>
                <div class="cell cell-estado">

                    <form action="./neg_U_inhabilitar.php" method="post">
                        <input name='tipodeDocumento' type='hidden' value='<?php echo $tdocs ?>'/>
                        <input name='documentoU' type='hidden' value='<?php echo $numdocuser ?>'/>

                        <div class="con-btn-estado">
                            <button class="circle-estado" style="<?php echo $estadoUser == 1 ? 'left:auto; right:4px; background-color:#483D8B': 'left:4px; right:auto; background-color: #C0C0C0' ?>" type="submit"></button>
                        </div>
                    </form>
                </div>
                <div class="cell con-actions">
                    <button class="btn-model"><img src="./assets./img/icons/eye.svg" alt=""></button>
                    <a href="neg_U_Actualizar.php?tdd=<?php echo $tdocs ?>&doc=<?php echo $numdocuser ?>"><img src="./assets./img/icons/lapiz.svg" alt=""></a>
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
    $crud = new usuario();
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
                <?php list($resultado, $canPag) = $crud->filtrarUser($_GET["fk_pk_tipo_documentoU"] , $_GET["documento"]); ?>
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
