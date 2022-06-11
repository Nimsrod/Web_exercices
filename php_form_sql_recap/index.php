<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style/main.css" rel="stylesheet" type="text/css">
    <style>
        body {
            padding : 2rem;
        }
        form {
            padding: 1rem;
        }
    </style>

    <title>FORM - SQL</title>
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
    
    <h1>Formulaire :</h1>

    <form action="ajout.php" method="POST" class="row g-3">
        <legend>Vos informations :</legend>
        <div class="col-md-6">
            <label for="firstname">Prénom : </label>
            <input name="firstname" type="text" placeholder="Entrez votre prénom">
        </div>
        
        <div class="col-md-6">
            <label for="lastname">Nom : </label>
            <input name="lastname" type="text" placeholder="Entrez votre nom">
        </div>

        <div class="col-md-6">
            <label for="age">Age : </label>
            <input name="age" type="number" placeholder="Entrez votre age">
        </div>

        <div class="col-md-6">
            <label for="email">Email : </label>
            <input name="email" type="email" placeholder="Entrez votre email">
        </div>
        
        <div class="row-md-6">
            <label for="telephone">Telehone : </label>
            <input name="telephone" type="tel" placeholder="Entrez votre numéro">
        </div>

        <div class="col-md-6">
            <label for="town">Ville : </label>
            <input name="town" type="text" placeholder="Entrez votre ville">
        </div>

        <div class="col-md-6">
            <label for="zipcode">Code postal : </label>
            <input name="zipcode" type="number" placeholder="Entrez votre code postal">
        </div>

        <div class="col-md-6">
            <label for="country">Pays : </label>
            <input name="country" type="text" placeholder="Entrez votre pays">
        </div>

        <div class="col-md-6">
            <label for="sex">Sexe : </label>
            <select name="sex">
                <option value="H">Homme</option>
                <option value="F">Femme</option>
                <option value="X">X</option>
            </select>
        </div>
        <br><br>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Valider</button>
            <button type="reset" class="btn btn-secondary">Effacer</button>
        </div>

    </form>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>