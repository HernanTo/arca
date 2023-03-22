<?php 
include ('seguridad.php');
if(isset($_SESSION['paciente'])){
    if($_SESSION['paciente'] == 1){
        header('Location: pres_dashboard.php');
    }
}

$nameUs = $_SESSION["pNombre_U"];
$titlePage = "Diagnosticos.";
$descPage = "Gestiona tus diagnosticos de forma sencilla.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosticos</title>
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/Diagnoses.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="shortcut icon" href="./assets/img/icons/logo.svg" />

    <!-- CSS only -->

</head>
<body>

<div class="container-dashboard" style="transition: all 3s;">
    <?php
        include('./components/sidebar.php');
        include('./components/navbar.php');
    ?>
        <div class="body-contenido">
            <div class="con-diagnoses">
                <div class="con-search-diagnoses">
                    <input class="btn-search-diagnoses" type="text" placeholder="Buscar" onkeyup="filter()">
                </div>
                <div class="con-form-diagnoses" id="con-form-diagnoses">
                    <?php include('pres_neg_dat_diagnoses_show.php');?>   
                </div>
            </div> 
        </div>
</div>
<script>
    function filter() {
        var input, filter, container, form, info, i, txtValue;
        input = document.getElementsByClassName("btn-search-diagnoses")[0];
        filter = input.value.toUpperCase();
        container = document.getElementById("con-form-diagnoses");
        form = container.getElementsByClassName("con-info-diagnoses");

        for (i = 0; i < form.length; i++) {
            info = form[i].getElementsByClassName("title-info-doctor")[0];
            txtValue = info.textContent || info.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                form[i].style.display = "";
            } else {
                form[i].style.display = "none";
            }
        }
    }
</script>


<!-- JavaScript Bundle with Popper -->
<script src="./js/sidebar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>