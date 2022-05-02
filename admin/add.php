<?php

require_once 'checkAdmin.php';

require_once '../vendor/autoload.php';
require_once '../pagesAccueil/connexion.php';



$title = null;
$content = null;
$category = null;
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

           $query = $db->prepare('INSERT INTO post (title, content, cover, users_id, createdAt) VALUES (:title, :content, :cover, :users_id, NOW())');
           $query->bindValue(':title', $title);
           $query->bindValue(':content', $content);
           $query->bindValue(':cover', $fileName);

           $query->bindValue(':users_id', $_SESSION['users']['id'], PDO::PARAM_INT);
           $query->execute();

           header('Location: index.php?successAdd=1');

        }else {
            $error = $upload['error'];
        }

    }else {
        $error = 'Tous les champs sont obligatoires';
    }
}

