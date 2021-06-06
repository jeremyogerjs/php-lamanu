<?php
    //exo5
    $hautDeFrance = array( 60 =>"Oise", 02 =>"Aisne", 59 => "Nord", 62 => "Pas-de-Calais", 80=>"Somme");

    //exo6

    echo $hautDeFrance[59];

    //exo7

    $add = array(51 =>"Reims");

    $newAr = array_replace($hautDeFrance, $add);

    print_r($newAr);

    //exo8, 9 , 10

    foreach ($newAr as $key => $value) {
        
        echo "Le departement " . $value . " a le numéro " . $key . "<br>";
    }


?>