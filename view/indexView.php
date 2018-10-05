<?php include('header.php'); ?>

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

<?php include('footer.php')?>