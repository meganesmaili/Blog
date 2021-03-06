<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>
    <title>Books</title>
</head>
<body>
    <header class="colorBack">
        <div class="container">
            <div class="row align-items-center">
                <div class="col titlePosition">
                    <a href="#" title="Livres" class="titleColor">Books.</a>
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
                          <li class="menuWrappedTitle"><a class="menuWrappedTitleReference" href="#" onclick="navOnClick()">Cat??gories</a></li>
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
            <div class="row align-items-center carousel slide" id="myCarousel">
                <div class="col left carousel-control leftArrow" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
                  </svg>
                </div>
                <div class="col carousel">
                  <img src="images/Godsofmen.jpg" alt="" class="sizeImg godsOfMen">
                </div>
                <div class="col right carousel-control rightArrow" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                      </svg>
                </div>
            </div>
        </div>
    </header>
    <div class="pinkBar">
    </div>
    <main>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card ">
                    <img src="Images/Godsofmen.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Gods Of Men</h5>
                      <p class="card-text">Quand la musique devient magie.
                      La magie est interdite dans les Cinq Provinces, et ceux qui en sont dou??s depuis la naissance sont pourchass??s et tu??s. Sable ignore que sa musique renferme un pouvoir, jusqu???au jour o??, ?? peine ??g??e de neuf ans, elle arr??te par accident le c??ur de sa petite s??ur avec sa fl??te, la tuant sur le coup. Atterr??e par ce qu???elle a fait et craignant pour sa propre vie, elle s???enfuit, loin de la juridiction provinciale, et trouve refuge dans les Landes Sauvages. L??, Sable se terre, sous le poids de la culpabilit??, et survit en tant que gu??risseuse. Jusqu????? ce que, dix ans plus tard, quelqu???un ??? ou quelque chose ??? la retrouve??? et la traque sans merci.</p>
                      <a href="pagesArticles/articleGodsOfMen.html" class="btn btn-primary">Plus d'infos</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card ">
                    <img src="Images/serpentDove.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Serpent & Dove</h5>
                      <p class="card-text">Il y a deux ans, Louise a fui son clan et s'est r??fugi??e dans la ville de C??sarine o?? les sorci??res comme elle sont craintes, chass??es et br??l??es. La jeune femme a renonc?? ?? la magie et vit d??sormais de petits larcins.</p>
                      <a href="pagesArticles/articleSerpent&Dove.html" class="btn btn-primary">Plus d'infos</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card ">
                    <img src="Images/lapassemiroir.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">La Passe-Miroir</h5>
                      <p class="card-text">Oph??lie vit sur Anima, l'arche o?? les objets ont une ??me et prennent vie gr??ce aux dons des habitants. Elle poss??de des dons particuliers : elle est d'abord une liseuse, capable de retracer le pass?? d'un objet d'un simple contact. Mais elle a un talent plus rare : celui de voyager en traversant les miroirs.</p>
                      <a href="pagesArticles/articleLaPasseMiroir.html" class="btn btn-primary">Plus d'infos</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6 col-12 ">
                <div class="card ">
                    <img src="Images/theweekeddeep.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">The Weeked Deep</h5>
                      <p class="card-text">C'est une histoire de vengeance... Il y a pr??s de deux si??cles, Marguerite, Aurora et Hazel Swan, trois jeunes femmes belles, libres et ind??pendantes, furent accus??es de sorcellerie par les habitants de la ville de Sparrow. Des pierres accroch??es aux chevilles, les trois s??urs furent noy??es. Ex??cut??es</p>
                      <a href="pagesArticles/articlesTheWeekedDeep.html" class="btn btn-primary">Plus d'infos</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12 ">
                <div class="card">
                    <img src="Images/HP1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Harry Potter</h5>
                      <p class="card-text">Harry Potter, un jeune orphelin, est ??lev?? par son oncle et sa tante qui le d??testent. Alors qu'il ??tait haut comme trois pommes, ces derniers lui ont racont?? que ses parents ??taient morts dans un accident de voiture. Le jour de son onzi??me anniversaire, Harry re??oit la visite inattendue d'un homme gigantesque se nommant Rubeus Hagrid, et celui-ci lui r??v??le qu'il est en fait le fils de deux puissants magiciens et qu'il poss??de lui aussi d'extraordinaires pouvoirs.</p>
                      <a href="pagesArticles/articleHP.html" class="btn btn-primary">Plus d'infos</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card ">
                    <img src="Images/lesSorci??resduClanduNord.jpg.crdownload" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Les Sorci??res du Clan du Nord</h5>
                      <p class="card-text">Poppy, adolescente rebelle, se fait renvoyer de tous les lyc??es qu'elle fr??quente. L'innocente Clar??e a du mal ?? se faire accepter par sa communaut?? secr??te de sorci??res. Leurs chemins n'auraient jamais d?? se croiser. Pourtant, elles deviennent ins??parables.</p>
                      <a href="pagesArticles/articlesLesSorci??resDuClanDuNord.html" class="btn btn-primary">Plus d'infos</a>
                    </div>
                  </div>
            </div>
            <?php
              require_once 'vendor/autoload.php';
              require_once 'connexion.php';
             
              
              $query=$db->query('SELECT post.id, post.title, post.content, post.cover, post.createdAt, categories.name AS category FROM post
              INNER JOIN categories ON categories.id = post.categories_id
              ORDER BY post.createdAt DESC');
              $post = $query->fetchAll();
              foreach ($post as $article) {
                $originalDate = "{$article['createdAt']}";
                //Mettre une date du format angl
                $DateTime = DateTime::createFromFormat('Y-m-d', $originalDate);
                $newDate = $DateTime->format('m-F-Y');
                $chaine = "{$article['content']}";
                $shortText = substr($chaine,0,100) . "...";


                echo '<div class="col-lg-6 col-md-12">'.
                        '<div class="card ">'. 

                              "<img src=Images/upload/{$article['cover']}   class=\"card-img-top\" alt=\"...\">".

                              "<p class=\"card-text\">{$newDate}</p>".

                          '<div class="card-body">'.

                              "<h5 class=\"card-title\">{$article['title']} </h5>".

                               "<p class=\"card-text\">{$shortText}</p>".

                              "<a href=\"articlesTest.php?id\""."{$article['id']}"." class=\"btn btn-primary\">Plus d'infos</a>".

                              "<a href=\"#\" class =\"btn btn-primary\"> 
                              Categorie {$article['category']} </a>".

                          '</div>'.
                      '</div>'.
                      
                    '</div>';
              };

            ?>
        </div>
    </main>
    <footer>
        <p>&copy; Copyright Livres 2022</p>
    </footer>
    
</body>
</html>