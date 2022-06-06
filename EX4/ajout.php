<?php


    $DB_DSN = 'mysql:host=localhost;dbname=universite';
    $DB_USER = 'root';
    $DB_PASS= '';
    try{
        $PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS);
        echo "connexion établie !";
    }

    catch(PDOException $pe){
        echo "Erreur : " .$pe->getMessage();
    }
    $name = $_POST["pren"];
    $surn = $_POST["nom"];
    $age = $_POST["age"]; 
    //$sql = "INSERT INTO etudiant(prenom) VALUES ('$name')";
    $sql = "INSERT INTO etudiant(prenom, nom, age) VALUES ('$name','$surn', '$age')";
    $results = $PDO->query($sql);

?>