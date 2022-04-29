<?php

require_once '../vendor/autoload.php';
require_once '../pagesAccueil/connexion.php';
require_once 'image.php';


$id=htmlentities(strip_tags($_GET['id']));

$query=$db->prepare('SELECT * FROM post WHERE post.id = :id');
$query->bindValue(':id',$id,PDO::PARAM_INT);
$query->execute();

$categ = $query ->fetch();

$title=htmlentities(strip_tags($_POST['title']));
$content=htmlentities(strip_tags($_POST['content']));

$queryAd ="UPDATE post SET 'post.title'= $title, 'post.content'=$content,  WHERE post.id=$id";



dump($queryAd);



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
