<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <base href="http://localhost/filmorama/"/>
    <title>Filmorama</title>
</head>
<body>
    <div class="backgroundHeader">
        <h1>Filmorama ACS</h1>
</div>
<div class="movies">
<?php

 foreach($movies as $film){
?> 


    <div class="movie">
        <p class="title"><?= $film["titre"]?></p>
        <p class="img"><img src="<?= $film["affiche"]?>"width="180" height="270"></p>
        <p>Réalisé par <?= $film["GROUP_CONCAT(personnes.nom_personne SEPARATOR ' et ')"]?></p>
        <a class="stylebouton" href= "film/<?= $film["id"]?>">En savoir plus</a>
    </div>

   <?php
}

?>
</div>      
</body>
</html>