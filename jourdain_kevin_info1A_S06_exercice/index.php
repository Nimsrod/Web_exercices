<?php
    define("SPACE","<br><br>");
    $arrayName = ["Albert","Benoit","Didier","Vincent","Patrick","Bob","George","Luke"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/main.css">
    <title>Application Web - Php</title>
</head>
<body>

    <h1>Exercice - séance 06</h1>

    <p>
        Récupérer les informations d'un tableau php et les inclurent dans un tableau Html avec une boucle Foreach
    </p>


    <table id="TabNom">
        <th>
            Prénom
        </th>

        <?php
            foreach($arrayName as $prenom)
            {
                echo '<tr><td class="row">'.$prenom.'</tr></td>';
            }
        ?>
            

    </table>

    <footer>
            <p>Jourdain Kevin , informatique de gestion , 1A.</p>
    </footer>
    
</body>
</html>