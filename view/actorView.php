<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acteur : <? $filmByActor[0]["nom_personne"]?> - Tous ses films</title>
</head>
<body>
    <div class="backgroundHeader">
        <h1><?php echo $filmByActor[0]["nom_personne"]?></h1>
    </div>
    
    <!-- Affichage infos acteur -->
    <!-- nom acteur -->
    <h2 class="title1"> </h2> 
    <section class="acteur">
        <div class="img">
        <p><img class="poster" src="" width="240" height="360"></p>
        </div>
        <div class="info">
            <p class="biographie"></p>
        </div>
    </section>

    <!-- Affichage pour chaque film par acteur -->
    <?php foreach ($filmByActor as $row) { ?>
    <div class="movie">
        <h4><?php echo $row["titre"]?></h4>
        <img src="<?php echo $row["affiche"];?>">
        <p><a href="film/<?php echo $row['id_film'];?>">Découvrir</a></p>
    </div>
    <?php 
        }
    ?>
</body>

</html>