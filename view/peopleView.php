<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $person["nom_personne"]?></title>
    <base href="http://localhost/filmorama/">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styleMovie.css">
</head>
<body>
    
    <div class="backgroundHeader">
    <h1> <a class="link-style-white" href="homepage">Filmorama</a></h1>
    </div>
    <h2 class="title1"><?php echo $person["nom_personne"]?> </h2> 
    <section class="personne">
        <div class="header-people">
            <div class="img">
                <p>
                    <img class="poster portrait" src="<?php echo $person['portrait'];?>" width="240" height="360">
                </p>
            </div>
            <div class="info">
                <?php 
                if($age['death'] != NULL){?>
                    <p class="birth">Naissance : <?php setlocale(LC_TIME, "fr_FR", "French"); echo strftime("%d %B %G", strtotime($age['birth_date']));?></p>
                    <p class="age">Décès : <?php setlocale(LC_TIME, "fr_FR", "French"); echo strftime("%d %B %G", strtotime($age['death']));?> à l'âge de <?php echo $age['age_death']?> ans</p>
                    <?php 
            }else { ?> 
                    <p class="birth">Naissance : <?php setlocale(LC_TIME, "fr_FR", "French"); echo utf8_encode(strftime("%d %B %G", strtotime($age['birth_date']))); ?>
                    <p class="age">Âge : <?php echo $age['age'];?> ans 
                <?php } ?></p>
            
            
                <p class="nationalite">Nationalité : </p>
           
            <p>Biographie :</p>
            <p><?php if (strlen($person['biographie'])>1400){
            echo substr($person['biographie'],0,1400);
            } else {
                echo $person['biographie'];
                }?></p>
            </div>
        </div>
  

    <!-- Affichage pour chaque film par acteur -->
    <h3 class="title2">Filmographie</h3>
    <div class="movies">
    <?php foreach($film as $row){?>
        <div class="movie">
            <h4><?php echo $row["titre"]?></h4>
            <img src="<?php echo $row["affiche"];?>" width="180" height="270">
            <a class="stylebouton" href="film/<?php echo $row['id_film'];?>">Découvrir</a>
        </div>
        <?php } ?>
    </div>
</section>
</body>

</html>