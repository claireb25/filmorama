<?php

if (isset($_GET['id'])) {
    require('model/model.php');
    $movieView = getMovie();
    $directorView = getDirector();
    $actorView = getActor();
    $genreView = getGenre();
    $anneeView = getAnnee();
    $nationalityView = getPersonnes();

    
    require('view/movieView.php');

}

else {

    echo 'Erreur : aucun identifiant de film envoyé';

}
?>