<?php

/**
 * Connexion utilisateur
 */

/**
 * 1. Récupérer des données du formùulaire
 * 2. Verifier si l'email exist en BDD
 *      2.1 Si oui, on peut vérifier si le mot de passe fournis est correct
 *      2.2 Si non, on affiche une erreur
 * 3. Si le pass est correct, on ouvre une session
 * 4. Redirection de l'utilisateur connecté
 */

// Ouverture des sessions
session_start();

if (isset($_SESSION['user'])) {
    header('Location: ../pagesAccueil/index.php');
}

require_once '../vendor/autoload.php';
require_once '../pagesAccueil/connexion.php';
$error = null;

if (!empty($_POST)) {
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $password = htmlspecialchars(strip_tags($_POST['password']));


    $query = $db->prepare('SELECT * FROM users WHERE email = :email');
    $query->bindValue(':email', $email);
    $query->execute();

    $users = $query->fetch();
    //dump($users);

    

    if ($users) {

       if (password_verify($password, $users['mot_de_passe'])) {

           $_SESSION['user'] = [
               'id' => ['id'],
               'firstname' => $users ['firstNamer'],
               'lastname' => $users['lastName'],
               'email' => $users['email'],
               'role' => $users ['role']
           ];

           header('Location: ../pagesAccueil/index.php');

       } else {
        $error = 'Email et/ou mot de passe invalide';
       }
       
    } else{
        $error = 'Email et/ou mot de passe invalide';
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../pagesAccueil/style.css">
    <script src="script.js" defer></script>
</head>
    <body>
    <header class="colorBack">
        <div class="container">
            <div class="row align-items-center">
                <div class="col titlePosition">
                    <a href="../index.html" title="Livres" class="titleColor">Books.</a>
                </div>
                <div class="col hamburger d-lg-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list-nested" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </div>
            </div>
            <nav class="my-2">
                <ul class="nav justify-content-center">
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" href="../index.php">Categories</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" href="../index.php">Styles</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" href="../index.php">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" href="../index.php">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="pinkBar">
    </div>
        <form method="post" enctype="multipart/form-data" class="w-50 m-auto ">
        
            <h1>Se connecter</h1>

            <?php if ($error !== null):?>
                <div class="alert alert-danger">
                    <?php echo $error;?>
                </div>
            <?php endif; ?>

            <div class="mb-3">
                <label for="email" class="form-label">Adresse mail</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </body>
</html>