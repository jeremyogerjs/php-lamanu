<?php

    function num($num1,$num2){

        if($num1>$num2){
            echo "Le premier nombre est plus grand";
        }
        else if($num1 < $num2){
            echo "Le premier nombre est plus petit";
        }
        else if($num1 === $num2){
            echo "Les deux nombres sont identiques";
        }
    }

    num(20,40);
?>