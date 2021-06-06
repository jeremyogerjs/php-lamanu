<?php

    function details($age, $gender){

        if($age >= 18 && $gender === "homme"){
            echo "Vous êtes un homme Majeur";
        }
        else if($age <18 && $gender === "homme"){
            echo "Vous êtes un homme mineur";
        }
        else if($age >= 18 && $gender === "femme"){
            echo " Vous êtes une femme Majeur";
        }
        else if($age < 18 && $gender === "femme"){
            echo "Vous êtes une femme mineur";
        }
    }

    details(17,"homme");
?>