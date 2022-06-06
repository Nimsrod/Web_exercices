<?php
    session_start();
    include('connexion.php');

    echo '<br><p class="auth">Utilisateur : '.$_SESSION["user"].'</p>';

    $sql = 'SELECT * FROM stock';
    $results = $PDO->query($sql);
    $list = $results->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/stock.css">
    <title>clothes4all.be</title>
    
</head>
<body>

    <div id="title">
        <h1>
            Clothes-4-all
        </h1>
    </div>

    <header>
       
        

        <nav class="nav">
            <div>
                <ul>
                    <li><a target="_blank" href="index.php">Accueil</a></li>
                    <li><a target="" href="ajout.php">Ajout</a></li>
                    <li><a target="_blank" href="supprimer.php">Supprimer</a></li>
                    <li><a target="_blank" href="stock.php">Stock</a></li>
                </ul>
            </div>
        </nav>

    </header>

    <div id="main_box">

        <main id="main_content">
           
            <p>
                <h2>Bienvenue</h2>
                Clothes-4-all est une boutique de vêtements en lignes.
                <br><img id="pic" src="images/shop1.jpeg" alt="Notre magasin"><br>
            </p>

            
            

            

        </main>

        <div class="rightcol">
                
            <h2>Stock</h2>
            <div class="boxy">
                <table id="stock">

                
                    <?php 
                        
                        foreach($list as $array) {
                            echo '<tr class="row">';
                            echo '<td>'.$array["idStock"].'</td>';
                            echo '<td>'.$array["nomStock"].'</td>';
                            echo '</tr>';
                        }
                            
                    ?>
                    
                
                </table>
            </div>
            

        </div>


        

    
    </div>

    

    <footer id="footer">
        

        <ul>
            <li>Clothes-4-all</li>
            <li>Rue Grande 199</li>
            <li>7000 Mons</li>
            <li>065 87 65 65</li>
        </ul>

        <p>&copy; Copyright <a target="_blank" href="index.php">www.clothes4all.be</a></p>
        
    </footer>


</body>
</html>