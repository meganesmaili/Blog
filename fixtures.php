<?php
# When installed via composer

require_once 'vendor/autoload.php';

require_once 'connexion.php';

// creation de l'insta,ce de faker

$faker = Faker\Factory::create('fr_FR');

// Insertion de fausses donnée en BDD dans la table catégorie
/*for ($i=0; $i < 10 ; $i++) { 
    $query = $db->prepare('INSERT INTO categories (name) VALUES (:name)');
    $query->bindValue(':name', $faker->colorName);
    $query->execute();
}*/




for ($i=0; $i < 20 ; $i++) { 
    $queryName = $db->prepare('INSERT INTO users (firstNamer,lastName,email,role,mot_de_passe,createdAt) VALUES (:firstNamer, :lastName, :email, :role, :mot_de_passe, :createdAt)');
    $query->bindValue(':firstNamer', $faker->firstName);
    $query->bindValue(':lastName', $faker->lastName);
    $query->bindValue(':email', $faker->email);
    $query->bindValue(':role', );
    $query->bindValue(':mot_de_passe', $faker->password);
    $query->bindValue(':createdAt', $faker->dateTime);
    

    $queryName->execute();
}