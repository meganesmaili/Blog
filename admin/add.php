<?php

require_once 'checkAdmin.php';

require_once '../vendor/autoload.php';
require_once '../pagesAccueil/connexion.php';



$title = null;
$content = null;

$categories = null;

$error = null;

if (!empty($_POST)) {

    $title=htmlentities(strip_tags($_POST['title']));
    $content=htmlentities(strip_tags($_POST['content']));
    $categories_id=htmlentities(strip_tags($_POST['categories']));

    if ( !empty($title) && !empty($content) && !empty($categories_id) && !empty($_FILES['cover']) && $_FILES['cover']['error'] === 0) {
       require_once 'inc/functions.php';
       $upload = uploadPicture($_FILES['cover'], '../Images/upload',1);

        if (empty($upload['error'])) {
           $fileName = $upload['filename'];


           $query = $db->prepare('INSERT INTO post (title, content, cover, users_id,categories_id, createdAt) VALUES (:title, :content, :cover, :users_id, :categories_id, NOW())');
           $query->bindValue(':title', $title);
           $query->bindValue(':content', $content);
           $query->bindValue(':cover', $fileName);
           $query->bindValue(':users_id', $_SESSION['user']['id'], PDO::PARAM_INT);
           $query->bindValue(':categories_id', $categories_id);

           $query->execute();

           header('Location: index.php?successAdd=1');

        }else {
            $error = $upload['error'];
        }

    }else {
        $error = 'Tous les champs sont obligatoires';
    }
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

<link rel="stylesheet" href="../pagesAccueil/style.css">
<script src="script.js" defer></script>
    <title>Books</title>
</head>
<body>
<?php
    require_once '../layouts/header.php';
    ?>

        <main class="py-5">
            <div class="container">
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
            <?php
            require_once '../layouts/footer.php';
            ?>
    </body>
</html>

