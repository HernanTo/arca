
<?php
    $allName = "$_SESSION[pNombre_U] $_SESSION[sNombre_U] $_SESSION[pApellido_U] $_SESSION[sApellido_U] ";
    $urlPhoto = $_SESSION["photo"];
?>
    <div class="navbar-dash">
        <div class="colm-dash-1">
            <h2><?php echo $titlePage ?></h2>
            <h6><?php echo $descPage ?></h6>
        </div>
        <div class="colm-dash-2">
            <h4><?php echo $_SESSION['pNombre_U'] . ' ' . $_SESSION['pApellido_U'] ?></h4>
            <a href="./salir.php">Cerrar Sesión</a>
        </div>
        <div class="colm-dash-r-3">
            <img src="<?php echo $urlPhoto ?>" alt="">
        </div>
    </div>