<?php
            echo "<form name='asignarCitaM' action='neg_Ci_Asignar.php' method='post' required>";
                echo "<input name='tdd' type='hidden' /><br />";
                echo "<input name='docUser' type='hidden'  /><br />";
                echo "<input name='fecha' type='date'  /><br />";
                echo "<input name='hora' type='time'  /><br />";
                echo "<input name='estadoCita' type='hidden'/><br />";
                echo "<input name='consultorio' type='number' /><br />";
                echo "<input type='submit' value='Confirmar'>";
            echo "</form>";
?>
