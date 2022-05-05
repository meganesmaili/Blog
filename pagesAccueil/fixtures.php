<?php
# When installed via composer

require_once '../vendor/autoload.php';

require_once 'connexion.php';

// creation de l'insta,ce de faker

$faker = Faker\Factory::create('fr_FR');

//$db->query('SET FOREIGN_KEY_CHECKS = 0; TRUNCATE post; SET FOREIGN_KEY_CHECKS =1');


//$categories = ["Science-fiction","Fantaisie","Fantastique","Théatre","Mangas"];

// Insertion de fausses donnée en BDD dans la table catégorie
/*/for ($i=0; $i < count($categories); $i++) { 
    $query = $db->prepare('INSERT INTO categories (name) VALUES (:name)');
    $query->bindValue(':name', $categories[$i]);
    $query->execute();
}*/






/*for ($i=0; $i < 20 ; $i++) { 
>>>>>>> 7e5e3dbcfb1abaefda723a85da5bc31a8e81dbc8

    $createdAt= $faker->dateTimeBetween('-5 years');

    $query= $db->prepare('INSERT INTO users (firstNamer,lastName,email,role,mot_de_passe,createdAt) VALUES (:firstNamer, :lastName, :email, :role, :mot_de_passe, :createdAt)');
    $query->bindValue(':firstNamer', $faker->firstName);
    $query->bindValue(':lastName', $faker->lastName);
    $query->bindValue(':email', $faker->unique()->email);
    $query->bindValue(':role',$i === 0 ? 'ROLE_ADMIN':'ROLE_USER');
    $query->bindValue(':mot_de_passe', password_hash('secret',PASSWORD_ARGON2I));
    $query->bindValue(':createdAt', $createdAt->format('Y-m-d'));

    $query->execute();

}*/


for ($i=0; $i < 55 ; $i++) { 

    $createdAt= $faker->dateTimeBetween('-5 years');

    $query= $db->prepare('INSERT INTO post (title,content,cover,createdAt, users_id, categories_id) VALUES (:title, :content, :cover, :createdAt, :users_id, :categories_id)');
    $query->bindValue(':title', $faker->company);
    $query->bindValue(':content', $faker->realText(500));
    $query->bindValue(':cover', 'images.jpg');
    $query->bindValue(':createdAt', $createdAt->format('Y-m-d'));
    $query->bindValue(':users_id', $faker->numberBetween(1, 20));
    $query->bindValue(':categories_id', $faker->numberBetween(1, 5));

    $query->execute();
}


