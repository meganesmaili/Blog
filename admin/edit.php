<?php 
    
    require_once 'checkAdmin.php';
    
    require_once '../vendor/autoload.php';
    require_once '../pagesAccueil/connexion.php';

   
    
    $querycat=$db->query('SELECT * FROM categories ORDER BY name');
    $testCat=$querycat->fetchAll();


    $id = htmlspecialchars(strip_tags($_GET['id']));
    $query=$db->prepare('SELECT * FROM post WHERE post.id = :id');
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();     
    $article=$query->fetch();
      
    $title = $article['title'];
    $content = $article['content'];
    $categorie = $article['categories_id'];
    $picture = $article['cover'];
    $error = null;
    $success = false;
    
    
    if (!empty($_POST)) {
        // Nettoyage des données
        $title = htmlspecialchars(strip_tags($_POST['title']));
        $content = htmlspecialchars(strip_tags($_POST['content']));
        $categorie = htmlspecialchars(strip_tags($_POST['categories']));
    
        // Vérifie que mes champs soient bien remplis
        if (!empty($title) && !empty($content) && !empty($categorie)) {
    
            // Est-ce que je reçois une image ?
            if (!empty($_FILES['cover']) && $_FILES['cover']['error'] === 0) {
                // Suppression de l'ancienne image
                unlink("../images/upload/{$picture}");
    
                // Upload de la nouvelle image
                require_once 'inc/functions.php';
                $upload = uploadPicture($_FILES['cover'], '../images/upload', 1);
                
                // Si je reçois une erreur lors de l'upload, je retourne l'erreur
                // à ma variable "$error" afin de l'afficher au dessus du formulaire
                if (!empty($upload['error'])) {
                    $error = $upload['error'];
                }
                else {
                    $picture = $upload['filename'];
                }
            }
    
            // Mise à jour en BDD seulement si la variable "$error" est égale à NULL
            if ($error === null) {
                $query = $db->prepare('UPDATE post SET title = :title, content = :content, cover = :cover, categories_id = :category WHERE id = :id');
                $query->bindValue(':title', $title);
                $query->bindValue(':content', $content);
                $query->bindValue(':cover', $picture);
                $query->bindValue(':category', $categorie, PDO::PARAM_INT);
                $query->bindValue(':id', $id, PDO::PARAM_INT);
                $query->execute();
    
                $success = 'L\'article à bien été modifié';
            }
        }
        else {
            $error = 'Le titre, le contenu et la catégorie sont obligatoires';
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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
       
            <form action="edit.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">

            <!-- Affichage d'unmessage de succès si nécessaire -->
            <?php if($success): ?>
                        <div class="alert alert-success">
                            <?php echo $success; ?>
                        </div>
                    <?php endif; ?>    

                    <!-- Affichage d'une erreur formulaire si nécessaire -->
                    <?php if($error !== null): ?>
                        <div class="alert alert-danger">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>    
                        
            
            <div class="form-group pt-3 mb-3 w-50 m-auto d-flex flex-column ">
                
                    <label for="title" class="mb-2">Title</label>
                
                    <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
                </div>
    

                <div class="form-group pt-3 w-50 m-auto d-flex flex-column">
                    <label for="content" class="mb-2">Contenu</label>
                    <textarea  name="content" rows="10" ><?php echo  $content ?></textarea>
                </div>
                 <div class="row mb-4 w-50 m-auto">
                    <div class="mb-3">
                        <label for="categories" class="form-label">Catégories</label>
                        <select class="form-select" name="categories" aria-label=".form-select-lg example">
                            <option value="">Categorie</option> 
            
                    <?php
                        foreach ($testCat as $category): ?>
                        
                            <option value="<?php echo $category['id'];?>" <?php echo ($categorie == $category['id']) ? 'selected': null; ?>>
                                <?php echo $category['name'];?>
                                </option>
                            <?php endforeach; ?>   
                        </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="cover" class="form-label">Image de couverture</label>
                            <input class="form-control" type="file"  name="cover">
                                <div id="coverHelpBlock" class="form-text">
                                    L'image ne doit pas dépasser les 1Mo.
                                </div>
                        </div>
                        <div class="col mb-3">
                            <img src="../Images/upload/<?php echo $picture;?>" alt="Mon image" class="rounded">
                            
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

