<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $person["nom_personne"]?></title>
    <base href="http://localhost/filmorama/">
</head>
<body>
    <div class="backgroundHeader">
        <h1>Filmorama</h1>
    </div>
    <!-- Affichage infos personne -->
    <h2 class="title1"><?php echo $person["nom_personne"]?> </h2> 
    <section class="personne">
        <div class="img">
        <p><img class="poster portrait" src="<?php echo $person['portrait'];?>" width="240" height="360"></p>
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
            <h3>Biographie</h3>
            <p class="biographie"><?php echo $person['biographie'];?></p>
        </div>
    </section>

    <!-- Affichage pour chaque film par acteur -->
    <h3>Filmographie</h3>
    <div class="movie">
    <?php foreach($film as $row){?>
        <h4><?php echo $row["titre"]?></h4>
        <img src="<?php echo $row["affiche"];?>">
        <p><a href="film/<?php echo $row['id_film'];?>">Découvrir</a></p>
        <?php } ?>
    </div>
   
</body>

</html>