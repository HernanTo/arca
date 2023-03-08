<div class="head-sidebar">
    <div class="menu" onclick=" menu()">
        <img src="./assets/img/icons/menu-burger.svg" alt="">
    </div>
    <a class="arca" href="#">
        <img src="./assets/img/icons/logo.svg" alt="" id="arca-logo">
    </a>
</div>
<div class="body-dashboard">
    <div class="con-item">
        
        <a class="item-sidebar item-active" href="./pres_dashboard.php">
            <div class="color-item color-item-active"></div>
            <div class="con-ico-item">
                <img src="./assets/img/icons/ico_apps-font_vio}.svg" alt="">
            </div>
            <div class="name-item">Dashboard</div>
        </a>

    <?php
        if(isset($_SESSION['administrador'])){
        if ($_SESSION['administrador'] == 1) {
            ?>
            <a class="item-sidebar" href="pres_gestionHorarios.php">
            <div class="color-item"></div>
            <div class="con-ico-item">
                <img src="./assets/img/icons/ico_stethoscope.svg" alt="">
            </div>
            <div class="name-item">Horarios</div>
        </a>
        
                <a class="item-sidebar" href="./pres_gestionUs.php">
            <div class="color-item"></div>
            <div class="con-ico-item">
                <img src="./assets/img/icons/users-alt-free-icon-font.svg" alt="">
            </div>
            <div class="name-item">Gestion usuarios</div>
        </a>

        <a class="item-sidebar" href="./neg_dat_pres_pqrsf_index.php">
            <div class="color-item"></div>
            <div class="con-ico-item">
                <img src="./assets/img/icons/ico_document-signed.svg" alt="">
            </div>
            <div class="name-item">PQRSF</div>
        </a>
    <?php
        }} 
            if(isset($_SESSION['secretaria'])){
            if ($_SESSION['secretaria'] == 1) {
            ?>
                <a class="item-sidebar" href="./pres_gestionUs.php">
            <div class="color-item"></div>
            <div class="con-ico-item">
                <img src="./assets/img/icons/users-alt-free-icon-font.svg" alt="">
            </div>
            <div class="name-item">Gestion usuarios</div>
        </a>
        <a class="item-sidebar" href="">
            <div class="color-item"></div>
            <div class="con-ico-item">
                <img src="./assets/img/icons/ico_stethoscope.svg" alt="">
            </div>
            <div class="name-item">Gestion Citas</div>
        </a>
    <?php
        }} 
            if(isset($_SESSION['doctor'])){
            if ($_SESSION['doctor'] == 1) {
        ?>
                    <a class="item-sidebar" href="">
            <div class="color-item"></div>
            <div class="con-ico-item">
                <img src="./assets/img/icons/ico_stethoscope.svg" alt="">
            </div>
            <div class="name-item">Citas médicas</div>
        </a>
        <a class="item-sidebar" href="">
            <div class="color-item"></div>
            <div class="con-ico-item">
                <img src="./assets/img/icons/diagnostico.svg" alt="">
            </div>
            <div class="name-item">Diágnosticos</div>
        </a>
    <?php
        }} 
            if(isset($_SESSION['paciente'])){
            if ($_SESSION['paciente'] == 1) {
        ?>
        <a class="item-sidebar" href="">
            <div class="color-item"></div>
            <div class="con-ico-item">
                <img src="./assets/img/icons/ico_stethoscope.svg" alt="">
            </div>
            <div class="name-item">Citas Medicas</div>
        </a>
        <a class="item-sidebar" href="">
            <div class="color-item"></div>
            <div class="con-ico-item">
                <img src="" alt="">
            </div>
            <div class="name-item"></div>
        </a>
    <?php 
        }}
    ?>

        <a class="item-sidebar section-item">
            <div class="color-item"></div>
            <div class="con-ico-item"></div>
            <div class="name-item">Ajustes</div>
        </a>

        <a class="item-sidebar item-perfil" href="pres_U_edit_profile.php">
            <div class="color-item"></div>
            <div class="con-ico-item">
                <img src="./assets/img/icons/ico_user-free-icon-font (1).svg" alt="">
            </div>
            <div class="name-item">Perfil</div>
        </a>
        <a class="item-sidebar item-seg" href="pres_U_edit_profile.php">
            <div class="color-item"></div>
            <div class="con-ico-item">
                <img src="#" alt="">
            </div>
            <div class="name-item">Seguridad</div>
        </a>
    </div>
    <div class="con-foo-sidebar">

        <!-- btn normal -->
        <div class="con-help-center">
            <div class="head-help">
                <img src="./assets/img/icons/help.svg" alt="">
            </div>
            <h3>Centro de ayuda</h3>
            <p>Tienes problemas con Arca. Resuelve tus dudas aqui.</p>
            <a href="#">Ir a centro de ayuda</a>
        </div>

        <!-- btn cuando el menu no esta desplegado -->
        <a class="item-help" href="">
            <div class="color-item"></div>
            <div class="con-ico-item">
                <img src="./assets/img/icons/help.svg" alt="">
            </div>
            <div class="name-item">Centro de ayuda</div>
        </a>

    </div>
</div>
<div class="btn-des-sidebar" onclick="despSidebar()">
    <img src="./assets/img/icons/angle-double-small-left-free-icon-font.svg" alt="" class="img-btn">
</div>
<div class="con-sidebar-a" onclick=" menu()">
</div>