<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style/main.css" rel="stylesheet" type="text/css">

    <title>Exercice séance 13</title>
  </head>
  <body>
    

    <div class="container-lg gy-5">
        <h1>Formulaire</h1>

        <form  action="ajout.php" method="POST">
        <!--<form action="suppression.php" method="POST">-->
            <legend>Vos informations</legend>
            <div class="row g-3">
                <div class="col">
                    <label for="pren">Prénom : </label><input name="pren" type="text" size ="32" placeholder="Entrez votre prénom">
                </div>
                <div class="col">
                    <label for="nom">Nom : </label><input name="nom" type="text" size="32" placeholder="entrez votre nom">
                </div>
            </div>
            <br>
            <div class="row g-3">
                <div class="col">
                    <label id="age" for="age">Age : </label><input name="age" type="number" size ="3">
                </div>
            </div>
            <br>
            <div class="row g-3">
                <div class="col">
                    <input type="submit"  class="btn btn-primary" value="envoyer">
                </div>
                <div class="col">
                    <input type="reset" class="btn btn-primary" value="Effacer">
                </div>
            </div> 

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
