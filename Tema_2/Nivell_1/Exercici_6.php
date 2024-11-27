<?php

    function isBitten(){
        $bitten = false;
        $random = rand(1,0);
        if ($random == 1){
            $bitten = true;
        }

        return $bitten;
    }
    
    if (isBitten()) {
        echo "¡Charlie te ha mordido!";
    } else {
        echo "Esta vez te libraste de ser mordido.";
    }

?>