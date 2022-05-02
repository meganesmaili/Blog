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
        
    <?php
    require_once '../layouts/header.php';
    ?>

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