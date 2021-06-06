<?php
    //exo1
    $month = array("janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre");

    //exo2
    echo $month[2];

    //exo3
    echo "<br>" . $month[4];

    //exo4
    $aout = array( 7 => "août");
     $result = array_replace($month,$aout);
    
    print_r($result);
?>