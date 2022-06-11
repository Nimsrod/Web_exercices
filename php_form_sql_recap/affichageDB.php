<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style/main.css" rel="stylesheet" type="text/css">
    <title>Affichage client</title>
</head>
<body>
    
    <header>
        
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="affichageDB.php">Affichage DB</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="suppression.php">Suppression</a>
            </li>
        </ul>

    </header>

    <br><br><br>


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

        $sql = 'SELECT * FROM form_basic';
        $result = $PDO->query($sql);
        $list = $result->fetchAll(PDO::FETCH_ASSOC);

        foreach($list as $ppl)
        {
            echo "<br><br>Numéro client : ".$ppl["idclient"];
            echo "<br><br>";
            echo "&nbsp&nbsp <b>Nom</b> : ".$ppl["firstname"];
            echo "&nbsp&nbsp Prenom : ".$ppl["lastname"];
            echo "&nbsp&nbsp Age : ".$ppl["age"];
            echo "&nbsp&nbsp Sexe : ".$ppl["sex"];
            echo "<br><br>Email :  ".$ppl["email"];
            echo "&nbsp&nbsp Téléphone : ".$ppl["telephone"];
            echo "&nbsp&nbsp Ville : ".$ppl["town"];
            echo "&nbsp&nbsp Code postal : ".$ppl["zipcode"];
            echo "&nbsp&nbsp Pays : ".$ppl["country"];
            echo "<br><br>------------------------------------------------------------------<br><br>";
        }

    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>