<?php

    function verificarGrado($nota){
        if ($nota >= 60){
            echo "El grado de la alumno es Primera División.";
        }
        else if ($nota >=45){
            echo "El grado de la alumno es Segunda División.";
        }
        else if ($nota >=33){
            echo "El grado de la alumno es Segunda División.";
        }
        else{
            echo "El alumno esta suspendido";
        }

    }
    /*
    $nota = 44; 
    verificarGrado($nota);
    */


?>