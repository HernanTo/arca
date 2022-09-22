<?php
    session_start();
    class usuario{
        public function iniciarsesion($tdd, $doc, $contr) {
            
        $bool = 0;
        include("./data_conexion.php");

        $sql = "SELECT *FROM usuario WHERE documento_U = '$doc'";
        $result = $db -> query($sql);

        while($row = $result->fetch_assoc()){
            $hash = $row['claveU'];

            if(password_verify($contr, $hash)){
                $bool = 1;
            }else{
                $bool = 0;
            }
        }

        $sql = "SELECT fk_pk_tipo_documentoU , documento_U , estado_U , pNombre_U , sNombre_U , pApellido_U , sApellido_U , especialidad_U, usuario_rol, photo
        FROM usuario
        INNER JOIN usuario_has_roles
        ON documento_U = usuario_id
        WHERE fk_pk_tipo_documentoU = '$tdd' AND documento_U='$doc' AND $bool"; 

        $result = $db -> query($sql);
        $cont="0";

        while($row = $result -> fetch_assoc()){
            $cont += 1;
            if($cont > 0){
                $estado = stripslashes($row['estado_U']);
                $pNombre = stripslashes($row['pNombre_U']);
                $sNombre = stripslashes($row['sNombre_U']);
                $pApellido = stripslashes($row['pApellido_U']);
                $sApellido = stripslashes($row['sApellido_U']);
                $especialidad = stripslashes($row['especialidad_U']);
                $photo = stripslashes($row['photo']);
                $rol =  stripslashes($row['usuario_rol']);
        }
        }
        if ($cont=="0"){
            print "<script>alert('Usuario incorrecto'); window.location='pres_login.html';</script>";
            $_SESSION['logueado']=0;
        }
        if($cont > "0"){
            if($estado == 0){
                print "<script>alert('Usuario inactivo'); window.location='pres_login.html';</script>";
                $_SESSION['logueado']=0;
            }
            if($estado == 1){
                $_SESSION['logueado'] = 1; 
                $_SESSION['pNombre_U'] = $pNombre;
                $_SESSION['sNombre_U'] = $sNombre;
                $_SESSION['pApellido_U'] = $pApellido;
                $_SESSION['sApellido_U'] = $sApellido;
                $_SESSION['photo'] = $photo;
                $_SESSION['tdd'] = $tdd;
                $_SESSION['docu'] = $doc;

                switch($rol){
                    case 1:
                        $_SESSION["administrador"]=1;
                        header("Location: ./pres_panelAdmin.php");
                        break;
                        
                    case 2:
                        echo $_SESSION["secretaria"]=1;
                        header("Location: ./pres_panelSecretaria.php");
                        break;
                        
                    case 3:
                        echo $_SESSION["doctor"]=1;
                        header("Location: ./pres_panelDoctor.php");
                        break;
                        
                    case 4:
                        $_SESSION["paciente"]=1;
                        header("Location: ./pres_panelPaciente.php");
                        break;
                        
            }
            }
        }
    }
    }

    $nuevo = new usuario();
    $nuevo->iniciarsesion($_POST["fk_pk_tipo_documentoU"], $_POST["documento"], $_POST["password"]);
?>