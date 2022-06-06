<?php

    session_start();
    include('connexion.php');
  
    
    if(isset($_POST['submit'])) {
        echo '<p class="user">Utilisateur : '.$_POST["Userid"].'</p>';
    }


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <title>clothes4all.be</title>
</head>
<body>

    <div id="title">
        <h1>
            Clothes-4-all
        </h1>
    </div>

    <header>
       
        

        <nav id="nav">
            <div>
                <ul>
                    <li><a target="" href="index.php">Accueil</a></li>
                    <li><a target="_blank" href="ajout.php">Ajout</a></li>
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

            <div id="form">
                <form method="POST" action=<?php $_SERVER['PHP_SELF']?>>
                    <label for="Userid">Identifiant :</label><br><input name="Userid" type="text" size="42" placeholder="Entrez votre identifiant"><br><br>
                    <?php
                        if(isset($_POST['submit'])) {
                            $flag1 =0;
                            $flag2=0;
                            if(empty($_POST['Userid'])) {
                                echo '<p class="alert">Champ requis !</p>';
                                $flag1=1;
                            }

                            if(!preg_match('/[a-z]{5,10} */', $_POST['Userid'])) {
                                echo '<p class="alert">Identifiant doît être contenir entre 5 et 10 lettres minuscules</p>';
                                $flag2 =1;
                            }

                            if($flag1 == 0 && $flag2 == 0) {
                                $_SESSION['user'] = $_POST['Userid'];
                            }
                        }
                    ?>
                    <label for="pwd">Mot de passe : </label><br><input name="pwd" size="42" type="password" placeholder="entrez votre mot de passe"><br><br>
                    <br>
                    <label for="pwd2">Retaper Mot de passe : </label><input name="pwd2" size="42" type="password" placeholder="entrez votre mot de passe">
                    <?php
                        if(isset($_POST['submit'])) {
                            if(($_POST['pwd'])!= $_POST['pwd2']) {
                                echo '<p class="alert">Le mot de passe est différent de celui répété</p>';
                            }
                        }
                    ?>
                    
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Enregistrer">
                    <br><br>
                    <input type="reset" name="reset" value="Effacer">
                    <br>
                </form>
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