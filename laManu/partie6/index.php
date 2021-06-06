<?php
    //---------------------------------PARTIE 6
    //exo1:
    echo "Exo1 : <br>";
    // print_r($_GET);  permet de récupérer les parametre de l'url
    if(array_key_exists("lastname",$_GET) and array_key_exists("firstname",$_GET)) {
        print_r($_GET);
    }else{
        
    };
    echo "<br> Exo2 : <br>";
    //exo2:
    if(array_key_exists("age",$_GET)) {
        print_r($_GET["age"]);
    }else{
        echo "Le paramètre age n'existe pas!";
    };
    echo "<br> Exo3 : <br>";
    //exo3:
    if(array_key_exists("startDate",$_GET) and array_key_exists("endDate", $_GET)) {
        print_r($_GET["startDate"] . "<br>" . $_GET["endDate"]);
    }else{
        
    };

    echo "<br> Exo4 : <br>";
    //exo4:
    if(array_key_exists("language",$_GET) and array_key_exists("server", $_GET)) {
        print_r($_GET["language"] . "<br>" . $_GET["server"]);
    };

    echo "<br> Exo5 : <br>";
    //exo5:
    if(array_key_exists("week",$_GET)) {
        print_r($_GET["week"]);
    }else{
        
    };
    echo "<br> Exo6 : <br>";
    //exo6:
    if(array_key_exists("building",$_GET) and array_key_exists("room",$_GET)) { // Sensible a la casse
        print_r($_GET["building"] . "<br>" . $_GET["room"]);
    }else{
        
    };
    
?>