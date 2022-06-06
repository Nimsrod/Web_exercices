<?php
    $DB_DSN = 'mysql:host=localhost;dbname=magasin';
    $DB_USER = 'root';
    $DB_PASS= '';

    try{
        $PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS);
        echo "connexion établie !";
    }

    catch(PDOException $pe){
        echo "Erreur : " .$pe->getMessage();
    }


?>