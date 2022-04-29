<?php

require_once '../vendor/autoload.php';
require_once '../pagesAccueil/connexion.php';
require_once 'image.php';


$id=htmlentities(strip_tags($_GET['id']));
$title=htmlentities(strip_tags($_POST['title']));
$content=htmlentities(strip_tags($_POST['content']));
$categories=htmlentities(strip_tags($_POST['categories']));



$query=$db->query('SELECT * FROM post');

$categ = $query ->fetch();



$stmt=$db->prepare("UPDATE post SET title= :title, content=:content,  categories_id= :categories_id  WHERE post.id = :id ");
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$stmt->bindValue(':title',$title);
$stmt->bindValue(':content',$content);
$stmt->bindValue(':categories_id',$categories,PDO::PARAM_INT);

$stmt->execute();


dump($categories);



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
