<?php

    $age = 17;
    $gender = "Homme";


    if($gender === "Homme" && $age >= 18){
        echo "Vous êtes un homme et vous êtes majeur";
    }
    else if ($gender === "Femme" && $age >= 18){
        echo "Vous êtes une femme et vous êtes majeur";
    }
    else if( $gender === "Homme" && $age < 18){
        echo "Vous êtes un homme et vous êtes mineur";
    }
    else if ($gender === "Femme" && $age < 18){
        echo "Vous êtes une femme et vous êtes mineur";
    }

?>