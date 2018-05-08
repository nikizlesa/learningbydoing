<?php
/**
 * Created by PhpStorm.
 * User: NiklasJaeger
 * Date: 07.05.2018
 * Time: 15:03
 */

    $ziel = "uploads/";

    $zieldatei = $ziel.basename($_FILES["HochladeDatei"]["name"]);

    if(move_uploaded_file($_FILES["HochladeDatei"]["tmp_name"],$zieldatei)){

        echo "Datei erfolgreich hochgeladen";
    }
    else{

        echo "Fehler";
    }

?>