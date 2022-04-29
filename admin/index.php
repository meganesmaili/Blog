<?php

    require_once '../vendor/autoload.php';
    require_once '../pagesAccueil/connexion.php';

    
    $query=$db->prepare('SELECT * FROM post');
    $query->execute();
    $post = $query->fetchAll();
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../pagesAccueil/style.css">
</head>
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
    <body>
        <div class="d-flex w-75 m-auto pt-2 pb-2 justify-content-between"">
            <h3>Gestion des articles</h3>
            <a href="form.php" class="btn btn-primary">Add + </a>
        </div>
        <table class="table table-dark table-hover w-75 m-auto">
            <thead class="text-align">
                <th scope="col" class="text-center">Id</th>
                <th scope="col"class="text-center">Name</th>
                <th scope="col"class="text-center">Date</th>
                <th scope="col"class="text-center">Choix</th>
                </tr>
            </thead>
            <?php
            foreach ($post as $article) : ?>
            <tbody class="text-center">
                <th scope="row" class="text-center"><?php echo $article['id']?>
                    <td class="text-center"><?php echo $article['title']?></td>
                    <td class="text-center"><?php echo $article['createdAt']?></td>
                    <td class="text-center">
                    <a href="edit.php?id=<?php echo $article['id']?>" class ="btn btn-primary">Editer</a>
                        <button class="btn btn-primary">Delete</button>
                    </td>
                </th>

            </tbody>
            <?php
            endforeach;
            ?>
        </table>

    </body>
</html>