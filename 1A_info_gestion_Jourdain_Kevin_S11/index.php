<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/main.css">
    <title>Document</title>

    <p class="alert"> </p>

    <div id="form">
        <form method="POST" action=<?php $_SERVER['PHP_SELF']?>>
            
            <div id="left">
                
                <label for ="user">Utilisateur</label><br>
                <input type="text" name="user" placeholder="Entrer votre nom utilisateur" size="42">
                <br><br>
                <?php
                    if(isset($_POST['submit'])) {
                        if(empty($_POST['user'])){
                            echo '<p class="alert">Ce champ est requis </p>'; 
                        }

                        if(!preg_match('/^[a-zA-Z]{6,16}$/', $_POST['user'])){
                            echo '<p class="alert">Utilisateur doit être entre 6 et 16 caractères </p>';
                        }

                    }
                ?>

                <label for="pwd">Mot de passe</label><br>
                <input type="password" name="pwd" placeholder="Entrer votre mot de passe" size="42">
                <br><br>
                <?php
                    if(isset($_POST['submit'])) {
                        if(empty($_POST['pwd'])){
                            echo '<p class="alert">Ce champ est requis </p><br>';
                        }
                    }
                ?>

                <input id="subm" type="submit" name="submit" value="Enregistrement">
            </div>

            <div id="right">

                <label for="email">Email</label><br>
                <input type="email" name="email" placeholder="Entrer votre email" size="42">
                <br><br>
                <?php
                    if(isset($_POST['submit'])) {
                        if(empty($_POST['email'])){
                            echo '<p class="alert">Ce champ est requis </p><br>';
                        }
                    }
                ?>
                
                <label for="pwd2">Répéter le mot de passe</label><br>
                <input type="password" name="pwd2" placeholder="Répéter votre mot de passe" size="42">
                    <?php
                        if(isset($_POST['submit'])) {
                            if(empty($_POST['pwd2'])){
                                echo '<p class="alert">Ce champ est requis </p><br>';
                            }

                            if(!empty($_POST["pwd"] && ($_POST["pwd2"]!= $_POST["pwd"]))){
                                echo '<p class="alert">Répéter le mot de passe correctement </p><br>';
                            }
                        }
                    ?>
                <br><br>

                
            </div>

            
            


        </form>
    </div>


</head>
<body>
    
</body>
</html>