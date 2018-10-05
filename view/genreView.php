<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="http://localhost/filmorama/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genre : <?php echo $filmByGenre[0]['genre']?></title>
</head>
<body>
    <?php   
        $url = $_SERVER['HTTP_REFERER'];
        $path = parse_url($url,PHP_URL_PATH);
        $mot = explode("/", $path); 
    ?>
    <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">précédent</a>
    <h1> <?php echo $filmByGenre[0]['genre']?> </h1>
    <?php foreach ($filmByGenre as $films) {?>
        <div class="films">
            <h4><?php echo $films["titre"]?></h4>
            <img src="<?php echo $films["affiche"] ?>">
            <p><a href="film/<?php echo $films['id_film'];?>">Découvrir</a></p>
        </div>
        <?php }?>
</body>

</html>