<?php

session_start();

require_once '../vendor/autoload.php';
require_once 'connexion.php';

//dump($_SESSION['users']);

$query=$db->query('SELECT post.id, post.title, post.content, post.cover, post.createdAt, post.categories_id, categories.name AS category FROM post
INNER JOIN categories ON categories.id = post.categories_id
ORDER BY post.createdAt DESC');
$post = $query->fetchAll();

?>

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
    
    <?php
    require_once '../layouts/header.php';
    ?>

    <main>
      <?php if (isset($_SESSION['user'])) :?>
        <div class="alert alert-success">
          Bonjour <?php echo $_SESSION['user']['firstname']?> <?php echo $_SESSION['user']['lastname'];?>
          <a href="../admin/logout.php" title="Déconnexion">Se déconnecter</a>
          <?php endif;?>    
        </div>
        <div class="row">
        <?php
              foreach ($post as $article) {
                $originalDate = "{$article['createdAt']}";
                //Mettre une date du format angl
                $DateTime = DateTime::createFromFormat('Y-m-d', $originalDate);
                $newDate = $DateTime->format('d-F-Y');
                $chaine = "{$article['content']}";
                $shortText = substr($chaine,0,100) . "...";

                echo '<div class="col-lg-6 col-md-12">'.
                        '<div class="card ">'. 

                              "<img src=../Images/upload/{$article['cover']}   class=\"card-img-top\" alt=\"...\">".

                              "<p class=\"card-text\">{$newDate}</p>".

                          '<div class="card-body">'.

                              "<h5 class=\"card-title\">{$article['title']} </h5>".

                               "<p class=\"card-text\">{$shortText}</p>".

                              "<a href=\"../pagesArticles/articlesTest.php?id={$article['id']} \"class=\"btn btn-primary\">Plus d'infos</a>".

                              "<a href=\"categories.php?id={$article['categories_id']}\" class =\"btn btn-primary\"> 
                              Categorie {$article['category']} </a>".

                          '</div>'.
                      '</div>'.
                      
                    '</div>';
              };

            ?>
            <div class="col-lg-6 col-12">
                <div class="card ">
                    <img src="../Images/Godsofmen.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Gods Of Men</h5>
                      <p class="card-text">Quand la musique devient magie.
                      La magie est interdite dans les Cinq Provinces, et ceux qui en sont doués depuis la naissance sont pourchassés et tués. Sable ignore que sa musique renferme un pouvoir, jusqu’au jour où, à peine âgée de neuf ans, elle arrête par accident le cœur de sa petite sœur avec sa flûte, la tuant sur le coup. Atterrée par ce qu’elle a fait et craignant pour sa propre vie, elle s’enfuit, loin de la juridiction provinciale, et trouve refuge dans les Landes Sauvages. Là, Sable se terre, sous le poids de la culpabilité, et survit en tant que guérisseuse. Jusqu’à ce que, dix ans plus tard, quelqu’un – ou quelque chose – la retrouve… et la traque sans merci.</p>
                      <a href="../pagesArticles/articleGodsOfMen.php" class="btn btn-primary">Plus d'infos</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card ">
                    <img src="../Images/serpentDove.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Serpent & Dove</h5>
                      <p class="card-text">Il y a deux ans, Louise a fui son clan et s'est réfugiée dans la ville de Césarine où les sorcières comme elle sont craintes, chassées et brûlées. La jeune femme a renoncé à la magie et vit désormais de petits larcins.</p>
                      <a href="../pagesArticles/articleSerpent&Dove.php" class="btn btn-primary">Plus d'infos</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card ">
                    <img src="../Images/lapassemiroir.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">La Passe-Miroir</h5>
                      <p class="card-text">Ophélie vit sur Anima, l'arche où les objets ont une âme et prennent vie grâce aux dons des habitants. Elle possède des dons particuliers : elle est d'abord une liseuse, capable de retracer le passé d'un objet d'un simple contact. Mais elle a un talent plus rare : celui de voyager en traversant les miroirs.</p>
                      <a href="../pagesArticles/articleLaPasseMiroir.php" class="btn btn-primary">Plus d'infos</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6 col-12 ">
                <div class="card ">
                    <img src="../Images/theweekeddeep.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">The Weeked Deep</h5>
                      <p class="card-text">C'est une histoire de vengeance... Il y a près de deux siècles, Marguerite, Aurora et Hazel Swan, trois jeunes femmes belles, libres et indépendantes, furent accusées de sorcellerie par les habitants de la ville de Sparrow. Des pierres accrochées aux chevilles, les trois sœurs furent noyées. Exécutées</p>
                      <a href="../pagesArticles/articlesTheWeekedDeep.php" class="btn btn-primary">Plus d'infos</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12 ">
                <div class="card">
                    <img src="../Images/HP1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Harry Potter</h5>
                      <p class="card-text">Harry Potter, un jeune orphelin, est élevé par son oncle et sa tante qui le détestent. Alors qu'il était haut comme trois pommes, ces derniers lui ont raconté que ses parents étaient morts dans un accident de voiture. Le jour de son onzième anniversaire, Harry reçoit la visite inattendue d'un homme gigantesque se nommant Rubeus Hagrid, et celui-ci lui révèle qu'il est en fait le fils de deux puissants magiciens et qu'il possède lui aussi d'extraordinaires pouvoirs.</p>
                      <a href="../pagesArticles/articleHP.php" class="btn btn-primary">Plus d'infos</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card ">
                    <img src="../Images/lesSorcièresduClanduNord.jpg.crdownload" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Les Sorcières du Clan du Nord</h5>
                      <p class="card-text"> <?php echo "{$newDate}"?></p>
                      <p class="card-text">Poppy, adolescente rebelle, se fait renvoyer de tous les lycées qu'elle fréquente. L'innocente Clarée a du mal à se faire accepter par sa communauté secrète de sorcières. Leurs chemins n'auraient jamais dû se croiser. Pourtant, elles deviennent inséparables.</p>
                      <a href="../pagesArticles/articlesLesSorcièresDuClanDuNord.php" class="btn btn-primary">Plus d'infos</a>
                    </div>
                  </div>
            </div>
           

              
        </div>
    </main>
   
    <?php
    require_once '../layouts/footer.php';
    ?>
    
</body>
</html>