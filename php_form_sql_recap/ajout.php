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

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $phone = $_POST["telephone"];
    $town = $_POST["town"];
    $zip = $_POST["zipcode"];
    $country = $_POST["country"];
    $sexe = $_POST["sex"];
    $sql = "INSERT INTO form_basic(firstname,lastname,age,email,telephone,town,zipcode,country,sex) VALUES ('$firstname','$lastname','$age','$email','$phone','$town','$zip','$country','$sexe')";
    $result = $PDO->query($sql);

?>