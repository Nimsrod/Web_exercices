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
    
    //$sql = "INSERT INTO etudiant(prenom) VALUES ('$name')";
    $sql = "DELETE FROM etudiant WHERE prenom = 'Brice'"; 
    $results = $PDO->query($sql);

?>