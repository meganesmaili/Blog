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
<script src="script.js"></script>
    <title>Books</title>
</head>
<body>
<?php
    require_once '../layouts/header.php';
    ?>
    <section>
        <div class="resumArticle">
            <h1>Serpent & Dove</h1>
            <img src="../Images/serpent&dove.jpg" alt="">
            <h2>Résumé</h2>
            <p>
                De la magie, des sorcières, un choc fantasy de sorcellerie et d'amour interdit signé par l'incroyable et talentueuse Shelby Mahurin.
                Serpent & Dove est le 1er tome d'une trilogie qui va vous envouter !
                Il y a deux ans, Louise a fui son clan et s'est réfugiée dans la ville de Césarine où les sorcières comme elle sont craintes, chassées et brûlées. La jeune femme a renoncé à la magie et vit désormais de petits larcins. Alors qu'elle prépare le vol d'une bague magique très rare, les évènements vont s'enchaîner pour tout faire basculer dans le chaos.
                De son côté, Reid, un Chasseur assermenté par l'Église, vit sa vie selon un seul principe : ne pas laisser une seule sorcière en vie. Son chemin n'aurait jamais dû croiser celui de Louise, mais un concours de circonstances va les rapprocher malgré eux et les contraindre à une union impossible et inattendue : le saint mariage.
                La guerre entre les sorcières et l'Église est ancienne et les dangereux ennemis de Louise représentent une terrible menace. Partagée entre ses sentiments croissants et sa nature, la jeune femme va devoir faire un choix entre le cœur et la raison....</p>
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