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
           
         <h2>Suppression d'un objet au stock</h2>
            <form method="POST" action="supprimer.php">
                <label for="del">Nom : </label><input name="del" type="text" size="42" placeholder="Entrez le nom du produit">
                <br><br>
                <input type="submit" name="submit3" value="Enregistrer">
                <br><br>
                <input type="reset" name="reset2" value="Effacer">
            </form>

            <?php
           
                if(isset($_POST['submit3'])) {
                    $query3 = "DELETE FROM stock  WHERE nomStock='".$_POST["del"]."'";
                    $rslt2 = $PDO->query($query3);
                    echo "objet supprimé, actualisation de  la page pour voir le résultat";
                    header("Location: stock.php");
                }

            ?>

            

        </main>

        <div class="rightcol">
            
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