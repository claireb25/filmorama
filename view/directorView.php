<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réalisateur : <?php echo $filmByReal[0]["nom_personne"]?> - Tous ses films</title>
</head>

<body>
    
    <?php   
        // $url = $_SERVER['HTTP_REFERER'];
        // $path = parse_url($url,PHP_URL_PATH);
        // $mot = explode("/", $path); 
    ?>

    <!-- nom réalisateur -->
    <h2 class="title1"><?php echo $filmByReal[0]["nom_personne"]?></h2> 
    <section class="realisateur">
        <div class="img">
            <p><img class="poster" src="" width="240" height="360"></p>
        </div>
        <div class="info">
            <p class="biographie"></p>
        </div>
    </section>

    <!-- films -->
    <div class="movie">
    <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">précédent</a>
    <?php foreach ($filmByReal as $row) {?>
        <p class="title"><?php echo $row["titre"]?></p>
        <p class="img"><img src="<?php echo $row["affiche"];?>" width="180" height="270"></p>
        <a class="stylebouton" href="film/<?php echo $row['id_film'];?>">Découvrir</a>
    </div>
    <?php }?>
</body>

</html>