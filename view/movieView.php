<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/styleMovie.css">
    <!-- <base href="http://localhost/annuaire_film">  -->
    <title>Filmorama</title>
</head>
<body>
<div class="backgroundHeader">
    <h1>Filmorama ACS</h1>
</div>
<?php



        

?> 
    <h2 class="title1"><?= $movieView["titre"]?></h2>
    <p><a class="genre" href=""><?= $genreView["GROUP_CONCAT(genres.genre SEPARATOR ', ')"]?></a></p>
<section class="movie1">
    <div class="img">
    <p><img class ="poster" src="../<?= $movieView["affiche"]?>"width="240" height="360"></p>
</div>
<div class="info">
    <p class="year"><span>Film sorti en salle en </span><?= $anneeView["annee"]?></p>
    <p><span>Réalisé par </span><a href =""><?= $directorView["GROUP_CONCAT(personnes.nom_personne SEPARATOR' et ')"]?></a></p>
    <p><span>Avec </span><?= $actorView["GROUP_CONCAT(personnes.nom_personne SEPARATOR', ')"]?></p>
    <p class="bordure"></p>
    <p class="synopsis">Synopsis</p>
    <p class="description"><?= $movieView["description"]?></p>
</div>
</section>
<div class="btn">
    <a class="stylebouton" href= "../">Retour à la liste</a>
</div>

    
    <?php



?>
    
</body>
<header>

</header>
</html>