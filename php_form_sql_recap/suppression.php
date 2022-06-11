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

    <form action="suppress.php" method="POST" class="row g-3">
        <legend>Client à supprimer  :</legend>
        
        <div class="col-md-6">
            <label for="lastname">Nom : </label>
            <input name="lastname" type="text" placeholder="Entrez votre nom">
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