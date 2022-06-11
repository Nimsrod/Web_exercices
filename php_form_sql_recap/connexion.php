<?php
    $DB_DSN = 'mysql:host=localhost;dbname=test';
    $DB_USER = 'root';
    $DB_PASS = '';

    try {
        $PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS);
        echo "connexion établie !";
    }

    catch (PDOException $pe) {
        echo "Erreur : ".$pe->getMessage();
    }

    $sql = 'SELECT * FROM form_basic';
    $results = $PDO->query($sql);
    $list = $result->fetchAll(PDO::FETCH_ASSOC);

    // echo "<br><br>";
    // foreach($list as $line) {
    //     echo $line;
    // } 

?>