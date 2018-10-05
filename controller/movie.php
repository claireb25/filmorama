<?php

if(isset($_GET['id'])){
    require('model/model.php');
        $movieView = getMovie();
        $film = [
            'title' => $movieView['titre'],
            'affiche' => $movieView['affiche'],
            'synopsis' => $movieView['description'],
            'year' => $movieView['année'],
            'idFilm' =>(int)$movieView['id'],
            $allReals = explode(",", $movieView["realisateur"]),
            $allActors = explode(",",$movieView["acteurs"]),
            $allGenres = explode(",", $movieView['genre']),
            $allidGenres = explode(",", $movieView['id_genre']),
            $idYear = (int)$movieView['annee_id'],
            $allidReals = explode ("," , $movieView['id_realisateur']),
            $allidActors = explode("," , $movieView['id_acteur']),
        ];
        
    
       
    require('view/movieView.php');
};

?>