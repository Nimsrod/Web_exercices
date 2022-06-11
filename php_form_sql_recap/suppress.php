<?php

    $DB_DSN = 'mysql:host=localhost;dbname=test';
    $DB_USER = 'root';
    $DB_PASS = '';

    try{
        $PDO= new PDO($DB_DSN, $DB_USER, $DB_PASS);
        echo "connexion établie !";
    }

    catch(PDOException $pe){
        echo "Erreur : ".$pe->getMessage();
    }
    
    $name = $_POST['lastname'];
    echo $name;
    $sql = "DELETE FROM form_basic WHERE lastname ='$name'";
    $result = $PDO->query($sql);



?>