<?php
require_once '../vendor/autoload.php';
require_once 'connexion.php';

  $id = htmlspecialchars(strip_tags($_GET['id']));

  $query=$db->prepare('SELECT post.id, post.title, post.content, post.cover, post.createdAt, post.categories_id, categories.name AS category FROM post INNER JOIN categories ON categories.id = post.categories_id WHERE post.categories_id = :id ORDER BY post.createdAt DESC');
  $query->bindValue(':id',$id,PDO::PARAM_INT);
  $query->execute();

  

  $categ = $query ->fetchAll();
  
  if (!$categ)
  {
      header('Location: pagesArticles/404.php');
  }
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
    <div>
        <h5 class ="p-3">Categorie : <?php echo $categ[0]['category'] ?></h5>
    </div>
    <main>
        <div class="row">

            <?php
              
                
               
                foreach ($categ as $article) {

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

                              "<a href=\"../categories.php?id={$article['categories_id']} \" class =\"btn btn-primary\"> 
                              Categorie {$article['category']} </a>".

                          '</div>'.
                      '</div>'.
                      
                    '</div>';
                };
            ?>
        </div>
    </main>
    <?php
    require_once '../layouts/footer.php';
    ?>
    
</body>
</html>