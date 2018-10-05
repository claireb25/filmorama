<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/styleMovie.css"> 
    <base href="http://localhost/filmorama/"/>
    <title>Filmorama</title>
</head>
<body>
<div class="backgroundHeader">
    <h1>Filmorama ACS</h1>
</div>
<?php



        

?> 
    <h2 class="title1"><?= $film["title"]?></h2>
    <?php $i = 0; ?>
    <?php foreach($allGenres as $genre) {?>
        <a href="genre/<?php echo $allidGenres[$i]; ?>"><?php echo $genre?></a> 
    <?php $i++; }?>
<section class="movie1">
    <div class="img">
    <p><img class ="poster" src="<?= $film["affiche"]?>"width="240" height="360"></p>
</div>
<div class="info">
    <p class="year"><span>Film sorti en salle en </span><?= $film['year']?></p>
    <p><span>Réalisé par</span>  <?php $j = 0; ?>
    <?php  foreach($allReals as $real){?>
        <a href="personne/<?php echo $allidReals[$j];?>"> 
    <?php echo $real; ?></a>  
    <?php $j++;} ?></p>

    <p><span>Avec </span><?php $k = 0; ?>
                    <?php  foreach($allActors as $actor){?>
                    
                        <a href="personne/<?php echo $allidActors[$k];?>">
                            <?php echo $actor;
                            $k++;}?> </a>
                
    <p class="synopsis">Synopsis</p>
    <p class="description"><?= $film["synopsis"]?></p>
</div>
</section>
<div class="btn">
    <a class="stylebouton" href= "">Retour à la liste</a>
</div>

    
    <?php



?>
    
</body>
<header>

</header>
</html>