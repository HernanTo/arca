
<?php
    $allName = "$_SESSION[pNombre_U] $_SESSION[sNombre_U] $_SESSION[pApellido_U] $_SESSION[sApellido_U] ";
    $urlPhoto = $_SESSION["photo"];
?>
<div class="navbar-dash">
    <div class="left">
        <div class="con-name-page">
            <h2><?php echo $titlePage ?></h2>
        </div>
        <div class="con-des-page">
            <h4><?php echo $descPage ?></h4>
        </div>
    </div>
    <div class="right">
        <div class="con-user-page">
            <h4><?php echo $nameUs . ' '. $_SESSION['pApellido_U'] ?></h4>
        </div>
        <div class="con-action-page">
            <a href="./salir.php">Cerrar sesión</a>
        </div>
        <div class="con-photo-user">
            <img src="<?php echo $urlPhoto ?>" alt="">
        </div>
    </div>
</div>