<?php
    include('./seguridad.php');
    if(isset($_SESSION['doctor'])){
        if($_SESSION['doctor'] == 1){
            header('Location: pres_dashboard.php');
        }
    }
    if(isset($_SESSION['paciente'])){
        if($_SESSION['paciente'] == 1){
            header('Location: pres_dashboard.php');
        }
    }


    class user{
        public function index($roleQuery, $tdd, $document, $type, $specialty, $roleUser){
            include('./data_conexion.php');

            $roleCondition = ' ';   
            if($type == 2){
                $typeCondition = "WHERE usuario_rol = $roleQuery";
            }elseif($type == 3){
                $typeCondition = "WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U = '$document'";
            }else{
                $typeCondition = "WHERE TRUE";
            }

            if($roleUser == 1){
                if($specialty == 4){
                    $roleCondition = "AND TRUE";
                }else {
                    $roleCondition = "AND cod_rol != 1";
                }
            }elseif($roleUser == 2){
                $roleCondition = "AND usuario_rol = 4";
            }

            $sql = "SELECT CONCAT(usuario_tdoc, ' ',  usuario_id) as documento, estado_U, desc_rol as usuario_rol, CONCAT(pNombre_U, ' ', sNombre_U, ' ', pApellido_U, ' ', sApellido_U) as 'Nombre' , fechaNacimiento_U , direccion_U , correoElectronico_U , celular_U, usuario_tdoc, usuario_id
            from usuario_has_roles 
            inner JOIN usuario 
            on documento_U = usuario_id
            INNER JOIN roles
            on usuario_rol = cod_rol
            $typeCondition $roleCondition
            ";

            $resultado = $db->query($sql);
            $iterable = TRUE;

            while($row = $resultado->fetch_assoc()){
                    $rol = $row['usuario_rol'];
                    $document = $row['documento'];
                    $name = $row['Nombre'];
                    $email = $row['correoElectronico_U'];
                    $estado = $row['estado_U'];
                    $tdd = $row['usuario_tdoc'];
                    $numDocument = $row['usuario_id'];

                ?>
                <tr class="<?php echo $iterable ? ' ' : 'row-secondary' ?>">
                    <td colspan="2" id="first-clm"><?php echo $rol ?></td>
                    <td><?php echo $document ?></td>
                    <td id="hidden-res"><?php echo $name ?></td>
                    <td><?php echo $email ?></td>
                    <td id="last-clm" class="con-actions">
                        <a href="./neg_dat_pres_U_show.php?tdd=<?php echo $tdd ?>&document=<?php echo $numDocument ?>">
                            <img src="./assets./img/icons/eye.svg" alt="">
                        </a>
                        <a href="./neg_dat_pres_U_edit.php?tdd=<?php echo $tdd ?>&document=<?php echo $numDocument?>">
                            <img src="./assets./img/icons/lapiz.svg" alt="">
                        </a>
                    </td>
                </tr>
                <?php
                $iterable = !$iterable;
            }

        }
    }
    $roleQuery = isset($_GET['rol'])? $_GET['rol'] : 'a';
    $tddQuery = isset($_GET['tdd'])? $_GET['tdd'] : 'a';
    $docuQuery = isset($_GET['document'])? $_GET['document'] : 'a';
    isset($_GET['type']) ? $_GET['type'] : $_GET['type'] = 4;
    $searchType = ' ';
    if($_GET['type'] == 2){
        if($roleQuery == 1){
            $searchType = 'de Administradores';
        }
        if($roleQuery == 2){
            $searchType = 'de Secretarias';
        }
        if($roleQuery == 3){
            $searchType = 'de Doctores';
        }
        if($roleQuery == 4){
            $searchType = 'de Pacientes';
        }
    }elseif($_GET['type'] == 3){
        $searchType = 'al usuario ' . $tddQuery . ' ' . $docuQuery;
    }else{
        $searchType = 'de usuarios';
    }

    $classUser = new user;
    

    $nameUs = $_SESSION["pNombre_U"];
    $titlePage = "Gestion de usuarios.";
    $descPage = "Gestiona a tus usuarios de una manera sencilla.";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Start styles bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- End styles bootstrap -->
    <!-- Start icons -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <!-- end icons -->
    <!-- Start styles Datatables -->
    <link rel="stylesheet" type="text/css" href="./datatable/css/jquery.dataTables.css">    
    <!-- End styles Datatables -->

    <!-- Start main core -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />
    <!-- End main core -->
    
</head>
<body>

<div class="container-dashboard" style="transition: all 3s;">
    <?php
        include('./components/sidebar.php');
        include('./components/navbar.php');
    ?>
        <div class="body-contenido">
            <div class="con-table">
                <div class="info-table">
                    <div class="section-1">
                        <h3>Busqueda <?php echo $searchType ?></h3> 
                    </div>
                    <div class="section-2">
                        <!-- <select name="table-co_length" aria-controls="table-co" class>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> -->
                    </div>
                    <div class="section-3">
                        <!-- <?php
                            // if($_GET['type'] != 3){
                            //     echo '<input type="text" name="" id="inpt-search" placeholder="Buscar">';
                            // }
                        ?> -->
                    </div>
                    <div class="section-4">
                    <img src="./assets/img/icons/flecha-pequena-derecha 1.svg" alt="">
                        <a href="pres_gestionUs.php">Volver</a>
                    </div>
                </div>

                <div class="con-table-u">
                    <table id="table-co">
                        <thead>
                            <tr>
                                <td id="first-clm" colspan="2">Rol</td>
                                <td>Documento</td>
                                <td id="hidden-res">Nombre</td>
                                <td>Email</td>
                                <td colspan="2" id="last-clm">Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $classUser->index($roleQuery, $tddQuery, $docuQuery, $_GET['type'], $_SESSION['specialty'], $_SESSION['role']);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<!-- Start script main core -->
<script src="./js/sidebar.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- end script main core -->

<!-- Start script datatables -->
<script src="./datatable/js/jquery.dataTables.js"></script>
<!-- end script datatables -->
 
<script>
$(document).ready( function () {
    $('#table-co').DataTable();
} )
</script>
</body>
</html>