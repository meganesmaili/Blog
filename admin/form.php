<?php 
    

    require_once 'checkAdmin.php';

    require_once '../vendor/autoload.php';
    require_once '../pagesAccueil/connexion.php';

           
           

    $query=$db->query('SELECT post.id, post.title, post.content, post.cover, post.createdAt, post.categories_id, categories.name AS category FROM post INNER JOIN categories ON categories.id = post.categories_id');
    $querycat=$db->query('SELECT * FROM categories');

    $categ = $query ->fetchAll();
    $testCat=$querycat->fetchAll(); 

            

            ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../pagesAccueil/style.css">
</head>



    <body>
        
    <header class="colorBack">
        <div class="container">
            <div class="row align-items-center">
                <div class="col titlePosition">
                    <a href="#" title="Livres" class="titleColor">Books.</a>
                    <p class="admin">Administrator</p>
                </div>
                <div class="col hamburgerTest d-lg-none">
                  <button id="menuHamburgerButton" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'));navOnClick()" aria-label="Main Menu">
                      <svg width="50" height="50" viewBox="0 0 100 100">
                        <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                        <path class="line line2" d="M 20,50 H 80" />
                        <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                      </svg>
                    </button>
  
                    <div id="menuWrapped">
                      <ul class="menuWrappedList">
                          <li class="menuWrappedTitle"><a class="menuWrappedTitleReference" href="#" onclick="navOnClick()">Home</a></li>
                          <li class="menuWrappedTitle"><a class="menuWrappedTitleReference" href="#" onclick="navOnClick()">Catégories</a></li>
                          <li class="menuWrappedTitle"><a class="menuWrappedTitleReference" href="#" onclick="navOnClick()">Styles</a></li>
                          <li class="menuWrappedTitle"><a class="menuWrappedTitleReference" href="#" onclick="navOnClick()">About</a></li>
                          <li class="menuWrappedTitle"><a class="menuWrappedTitleReference" href="#" onclick="navOnClick()">Contact</a></li>
                      </ul>
                  </div>
                  
              </div>
            </div>
            <nav class="my-3">
                <ul class="nav justify-content-center">
                        
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" href="#">Categories</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" href="#">Styles</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" href="#">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menuTextColor" href="#">Contact</a>
                      </li>
                  </ul>
            </nav>
        </div>
    </header>
    <div class="pinkBar">
    </div>

            <form action="add.php" method="post" enctype="multipart/form-data">

                <div class="form-group pt-3 mb-3 w-50 m-auto d-flex flex-column ">
                    <label for="title" class="mb-2">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
    

                <div class="form-group pt-3 w-50 m-auto d-flex flex-column">

                    <label for="content" class="mb-2">Contenu</label>
                    <textarea  name="content" style="height:200px"></textarea>
                </div>
                
                <div class="d-flex  w-50 m-auto gap-5">
                    <select class="form-select form-select-lg  mt-5" name="categories" aria-label=".form-select-lg example">
                        <option selected>Categorie</option> 
                <?php
                    foreach ($testCat as $article) { ?>
                    
                        <option value="<?php echo $article['id']?>"><?php echo $article['name'] ?></option>
                    <?php
                        }
                        ?>   
                    </select>

                    <div class="form-group pt-3 mb-3">
                    <label for="">Image</label>
                        <input type="file"  class="mt-3" name="cover">
                    </div>
                </div>
                <div class="w-50 m-auto mt-5">
                    <button type="submit" class="btn btn-primary"> Enregistrer articles </button>
                </div>
                
                </form>
    </body>
</html>