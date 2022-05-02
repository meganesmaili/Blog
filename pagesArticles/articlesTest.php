<?php 
            require_once '../vendor/autoload.php';
            require_once '../pagesAccueil/connexion.php';

           
            $id = htmlspecialchars(strip_tags($_GET['id']));

            $query=$db->prepare('SELECT post.id, post.title, post.content, post.cover, post.createdAt,post.categories_id, categories.name AS category, users.firstNamer, users.lastName FROM post INNER JOIN categories ON categories.id = post.categories_id INNER JOIN users ON users.id = post.users_id WHERE post.id = :id ORDER BY post.createdAt DESC');
            $query->bindValue(':id',$id,PDO::PARAM_INT);
            $query->execute();

        

            $art = $query ->fetch();
            //dump($art);
            if (!$art)
            {
                header('Location: 404.php');
            }
            
            $originalDate = "{$art['createdAt']}";
            $DateTime = DateTime::createFromFormat('Y-m-d', $originalDate);
            $newDate = $DateTime->format('d-F-Y');

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
    <title>Books</title>
</head>
<body>
    <?php
    require_once '../layouts/header.php';
    ?>
    <section>
        <div class="resumArticle">
       
            
            <h1><?php echo "{$art['title']}"?></h1>
                <div class="gap-3 d-flex ">
                    <p><?php echo"{$newDate}"?></p>
                    <a href="../categories.php?id=<?php echo $art['categories_id'] ?>" class ="btn btn-primary"><?php echo "{$art['category']}"?></a>
                    <p class=""><?php echo "{$art['firstNamer']}  {$art['lastName']} " ?></p>
                </div>
            <img src=<?php echo "../Images/upload/{$art['cover']}"?> alt="">
              
                <p><?php echo "{$art['content']}"?></p>
                
                </div>
    </section>
    <section class="addComments">
        <div class="comments">
            <h3>Comments</h3>
            <div class="row rowComments">
                <div class="col-12 ">
                    <p class="name"> John Doe</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum debitis totam cupiditate, mollitia inventore earum velit! Ab inventore modi in eum voluptatibus minima dolorem aliquam minus nihil, obcaecati cum voluptates!</p> 
                </div>
            </div>
            <div class="row rowComments">
                <div class="col-12 ">
                   <p class="name"> John Doe</p>
                   <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem corporis dolores consequuntur molestiae beatae odio voluptates accusantium illo, nemo voluptatibus, sit cupiditate iusto. Voluptatem, illum ad. Minus quod doloribus aspernatur!</p> 
                </div>
            </div>

            <div class="row rowComments">
                <div class="col-12 ">
                    <p class="name"> John Doe</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit a perspiciatis veniam eos. Sunt, rem! Iure, voluptatum ea. Iure voluptas maiores blanditiis tempore labore, ipsum rem recusandae perferendis assumenda. Quibusdam.</p>
                </div>
            </div>
        </div>   
        <div class="forms">
            <h3>Add a comment</h3>
            <div class="row">
            <form action="" method="get">
                <div class="col-lg-12">
                    <label for="Name" >Nom</label>
                    <input type="text" name="Name" class="sizeIdem">
                </div>
                <div class="col-lg-12">
                <label for="LastName">Prénom</label>
                <input type="text" name="LastName" class="sizeIdem">
                    
                </div>
                <div class="col-lg-12">
                    <label for="mail">Mail</label>
                    <input type="email" name="mail" class="sizeIdem">
                    
                </div>
                <div class="col-lg-12">
                    <label for="story">Message</label>
                    <textarea class="bigSize" name="story" rows="5" cols="33">
                    </textarea>
                </div>
            </form>
            </div>
            <a href="#">Submit</a>
        </div>
    </section>
    <footer>
        <p>&copy; Copyright Livres 2022</p>
    </footer>
</body>
</html>
