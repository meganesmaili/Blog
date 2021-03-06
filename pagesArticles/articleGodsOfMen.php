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
            <h1>Gods of men</h1>
            <img src="../Images/Godsofmen.jpg" alt="">
            <h2>Chapitre 1</h2>
            <p>
                Sable alluma la petite bougie et plissa le nez. La cave du boucher empestait la rouille.
                Des pattes de poulet dépassaient des caisses de rangement, les étagères ployaient sous le poids d’innombrables bocaux à saumure et des carcasses d’oiseau pendaient du plafond, donnant à la pièce un aspect macabre avec ses vestiges de vies passées qui suintaient dans chaque recoin. Des guirlandes de boyaux pendaient tels des rideaux de perles, et Sable faillit manquer l’énorme plan de travail, enseveli sous un enchevêtrement de hachoirs ensanglantés, de crochets à viande et de plumes. La cave de Velik était un véritable dépotoir. Rien de bien surprenant.
                Si j’étais Velik, où est-ce que je cacherais des os ?
                Son regard s’attarda sur un bahut.
                Sable longea la table en prenant garde de ne rien heurter, ce qui n’était pas une mince affaire, et ouvrit le tiroir du haut. À l’intérieur, elle trouva des mètres de tissu et de corde, mais pas d’os. Elle ouvrit le tiroir suivant, puis un autre, la mine renfrognée. Ils devaient bien se trouver quelque part. Il en avait rapporté l’après-midi même.
                Enfin, sous la table couverte de victuailles, elle aperçut un énorme baquet de graisse animale. L’extrémité pâle d’un fémur en ressortait.
                Ce n’est pas vraiment là où je les aurais mis, mais je ne suis pas Velik, louées soient les gardiennes.
                Sable s’accroupit à côté de la table, posa sa bougie et saisit le fémur ainsi qu’une articulation de hanche graisseuse. Elle les glissa dans la besace attachée à sa ceinture et replongea la main dans le tas de graisse. Elle venait de saisir un pied de sanglier quand le loquet de la porte de la cave cliqueta.
                Sable étouffa un juron, souffla sa bougie et se précipita sous l’escalier. La porte de la cave s’ouvrit et la lumière d’une lanterne fendit la pénombre...</p>
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