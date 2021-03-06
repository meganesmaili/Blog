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
            <h1>La Passe-Miroir</h1>
            <img src="../Images/lapassemiroir.jpg" alt="">
            <h2>Chapitre 1 : L'archiviste</h2>
            <p>
                On dit souvent des vieilles demeures qu’elles ont une âme. Sur Anima, l’arche où les objets
                prennent vie, les vieilles demeures ont surtout tendance à développer un épouvantable caractère.
                Le bâtiment des Archives familiales, par exemple, était continuellement de mauvaise humeur. Il
                passait ses journées à craqueler, à grincer, à fuir et à souffler pour exprimer son mécontentement. Il
                n’aimait pas les courants d’air qui faisaient claquer les portes mal fermées en été. Il n’aimait pas les
                pluies qui encrassaient sa gouttière en automne. Il n’aimait pas l’humidité qui infiltrait ses murs en
                hiver. Il n’aimait pas les mauvaises herbes qui revenaient envahir sa cour chaque printemps.
                Mais, par-dessus tout, le bâtiment des Archives n’aimait pas les visiteurs qui ne respectaient pas les
                horaires d’ouverture.
                C’est sans doute pourquoi, en ce petit matin de septembre, le bâtiment craquelait, grinçait, fuyait et
                soufflait encore plus que d’habitude. Il sentait venir quelqu’un alors qu’il était encore beaucoup trop
                tôt pour consulter les archives. Ce visiteur-là ne se tenait même pas devant la porte d’entrée, sur le
                perron, en visiteur respectable. Non, il pénétrait dans les lieux comme un voleur, directement par le
                vestiaire des Archives.
                Un nez était en train de pousser au beau milieu d’une armoire à glace.
                Le nez allait en avançant. Il émergea bientôt à sa suite une paire de lunettes, une arcade sourcilière,
                un front, une bouche, un menton, des joues, des yeux, des cheveux, un cou et des oreilles. Suspendu au
                milieu du miroir jusqu’aux épaules, le visage regarda à droite, puis à gauche. La pliure d’un genou
                affleura à son tour, un peu plus bas, et remorqua un corps qui s’arracha tout entier de l’armoire à
                glace, comme il l’aurait fait d’une baignoire. Une fois sortie du miroir, la silhouette ne se résumait
                plus qu’à un vieux manteau usé, une paire de lunettes grises, une longue écharpe tricolore.
                Et sous ces épaisseurs, il y avait Ophélie.
                Autour d’Ophélie, le vestiaire protestait maintenant de toutes ses armoires, furieux de cette
                intrusion qui bafouait le règlement des Archives. Les meubles grinçaient des gonds et tapaient des
                pieds. Les cintres s’entrechoquaient bruyamment comme si un esprit frappeur les poussait les uns
                contre les autres.Cette démonstration de colère n’intimida pas Ophélie le moins du monde. Elle était habituée à la
                susceptibilité des Archives....</p>
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