<?php  
        echo "Olá Mundo!!!";

        $repetir = True;
        $vezes = 10;
        $contador = 1;

        while ($repetir == true){
            echo "<br> Estou repetindo";

            if ($contador == $vezes){
                break;
            }

            $contador++;
        }
    ?>