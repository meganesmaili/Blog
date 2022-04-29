<?php

require_once '../vendor/autoload.php';
require_once '../pagesAccueil/connexion.php';
require_once 'image.php';

$title=htmlentities(strip_tags($_POST['title']));
$content=htmlentities(strip_tags($_POST['content']));
$categories_id=htmlentities(strip_tags($_POST['categories']));




$query = $db->prepare('INSERT INTO post (title, content, cover, categories_id,users_id,createdAt) VALUES (:title, :content, :cover,:categories_id, :users_id, NOW())');



$query->bindValue(':title', $title);
$query->bindValue(':content', $content);
$query->bindValue(':cover', $_FILES['cover']['name'] );
$query->bindValue(':categories_id', $categories_id);
$query->bindValue(':users_id', 1);



$query->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
</head>
    <body>
        <div>
        
           <a href="form.php"><p>Cliquez-ici pour revenir au formulaire</p></a>
        </div>
    </body>
</html>
