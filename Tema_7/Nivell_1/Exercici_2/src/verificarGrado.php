<?php
namespace App;

class verificarGrado
    {
        public function verificarGrado(float $nota): string{
            if ($nota >= 60){
                $grado = "El grado de la alumno es Primera División.";
            }
            else if ($nota >=45){
                $grado = "El grado de la alumno es Segunda División.";
            }
            else if ($nota >=33){
                $grado = "El grado de la alumno es Tercera División.";
            }
            else{
                $grado = "El alumno esta suspendido.";
            }

            return $grado;

        }
    }
?>