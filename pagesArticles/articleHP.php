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
            <h1>Harry Potter</h1>
            <img src="../Images/HP1.jpg" alt="">
            <h2>Résumé</h2>
            <p>
                Après la mort de ses parents (Lily et James Potter), Harry Potter est recueilli par sa tante maternelle Pétunia et son oncle Vernon à l'âge d'un an. 
                Ces derniers, animés depuis toujours d'une haine féroce envers les parents du garçon qu'ils qualifient de gens « bizarres », voire de « monstres », traitent froidement leur neveu et demeurent indifférents aux humiliations que leur fils Dudley lui fait subir. 
                Harry ignore tout de l'histoire de ses parents, si ce n'est qu'ils ont été, semble-t-il, tués dans un accident de voiture. 
                Cependant, le jour des onze ans de Harry, un demi-géant du nom de Rubeus Hagrid vient le chercher pour l'informer de son inscription à Poudlard, une école de sorcellerie où il est inscrit depuis sa naissance, et lui remettre sa lettre. 
                Il lui révèle qu’il a toujours été un sorcier, tout comme l'étaient ses parents, tués en réalité par le plus puissant mage noir du monde de la sorcellerie : Voldemort (surnommé « Celui-Dont-On-Ne-Doit-Pas-Prononcer-Le-Nom », « Vous savez qui » ou « Tu sais qui »). 
                Ce serait Harry lui-même, alors qu'il n'était encore qu'un bébé, qui aurait fait ricocher le sortilège que Voldemort lui destinait, neutralisant ses pouvoirs et le réduisant à l'état de créature insignifiante....</p>
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