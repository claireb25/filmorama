<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- <base href="http://localhost/annuaire_film">  -->
    <title>Filmorama</title>
</head>
<body>
    <div class="backgroundHeader">
        <h1>Filmorama ACS</h1>
</div>
<div class="movies">
<?php
$resultat=$requete->fetchAll(PDO::FETCH_ASSOC);
 foreach($resultat as $row){
?> 


    <div class="movie">
        <p class="title"><?= $row["titre"]?></p>
        <p class="img"><img src="<?= $row["affiche"]?>"width="180" height="270"></p>
        <p>Réalisé par <?= $row["GROUP_CONCAT(personnes.nom_personne SEPARATOR ' et ')"]?></p>
        <a class="stylebouton" href= "film/<?= $row["id"]?>">En savoir plus</a>
    </div>


    <?php

}

$requete->closeCursor();

?>
</div>      
</body>
</html>