<?php

function getMovies()
{
    
    $db = dbConnect();

    $requete = $db->prepare("SELECT films.id, films.titre, films.affiche, GROUP_CONCAT(personnes.nom_personne SEPARATOR ' et ') FROM liaison_film_personne_fonction
    INNER JOIN films ON liaison_film_personne_fonction.id_film = films.id
    INNER JOIN personnes ON liaison_film_personne_fonction.id_personne = personnes.id
    INNER JOIN fonction ON liaison_film_personne_fonction.id_fonction = fonction.id
    WHERE fonction.id = 1
    GROUP BY films.titre");
    $requete->bindParam(":condition",$condition,PDO::PARAM_STR);
    $requete->execute();
    return $requete;
 
}



function getMovie()
{
    $db = dbConnect();
   
    $movie = $db->prepare('SELECT films.titre, films.affiche, films.description
    FROM liaison_film_personne_fonction
    INNER JOIN films ON liaison_film_personne_fonction.id_film = films.id 
    INNER JOIN personnes ON liaison_film_personne_fonction.id_personne = personnes.id 
    INNER JOIN fonction ON liaison_film_personne_fonction.id_fonction = fonction.id 
    WHERE films.id=:idfilm
    GROUP BY films.titre ');
    $choix = (int)$_GET['id'];
    $movie->bindParam(":idfilm", $choix,PDO::PARAM_INT);
    $movie->execute();
    $movieView = $movie->fetch(PDO::FETCH_ASSOC);
    $movie->closeCursor();
    return $movieView;
}
function getDirector()
{
$db = dbConnect();
   
$director = $db->prepare("SELECT films.titre, fonction.fonction, GROUP_CONCAT(personnes.nom_personne SEPARATOR' et ') FROM `liaison_film_personne_fonction`
INNER JOIN films ON liaison_film_personne_fonction.id_film = films.id
INNER JOIN fonction ON liaison_film_personne_fonction.id_fonction = fonction.id
INNER JOIN personnes ON liaison_film_personne_fonction.id_personne = personnes.id
WHERE films.id = :idFilm AND fonction.id = '1'
GROUP BY films.titre");
$choix = (int)$_GET['id'];
$director->bindParam(":idFilm", $choix,PDO::PARAM_INT);
$director->execute();
$directorView = $director->fetch(PDO::FETCH_ASSOC);
$director->closeCursor();
return $directorView;
}

function getActor()
{
$db = dbConnect();
   
$actor = $db->prepare("SELECT films.titre, fonction.fonction, GROUP_CONCAT(personnes.nom_personne SEPARATOR', ') FROM `liaison_film_personne_fonction`
INNER JOIN films ON liaison_film_personne_fonction.id_film = films.id
INNER JOIN fonction ON liaison_film_personne_fonction.id_fonction = fonction.id
INNER JOIN personnes ON liaison_film_personne_fonction.id_personne = personnes.id
WHERE films.id = :idFilm AND fonction.id = '2'
GROUP BY films.titre");
$choix = (int)$_GET['id'];
$actor->bindParam(":idFilm", $choix,PDO::PARAM_INT);
$actor->execute();
$actorView = $actor->fetch(PDO::FETCH_ASSOC);
$actor->closeCursor();
return $actorView;
}

function getGenre()
{
    $db = dbConnect();
   
$genre = $db->prepare("SELECT films.titre, films.affiche, films.description, GROUP_CONCAT(genres.genre SEPARATOR ', ')
FROM liaison_film_genre
INNER JOIN films ON liaison_film_genre.id_film = films.id
INNER JOIN genres ON liaison_film_genre.id_genre = genres.id
WHERE films.id= :idFilm");
$choix = (int)$_GET['id'];
$genre->bindParam(":idFilm", $choix,PDO::PARAM_INT);
$genre->execute();
$genreView = $genre->fetch(PDO::FETCH_ASSOC);
$genre->closeCursor();
return $genreView;
}


function getAnnee()
{
    $db = dbConnect();
   
$annee = $db->prepare("SELECT annees_sortie.annee
FROM `films`
INNER JOIN annees_sortie ON films.annee_id = annees_sortie.id
WHERE films.id = :idFilm " );
$choix = (int)$_GET['id'];
$annee->bindParam(":idFilm", $choix,PDO::PARAM_INT);
$annee->execute();
$anneeView = $annee->fetch(PDO::FETCH_ASSOC);
$annee->closeCursor();
return $anneeView;
}


function getPersonnes()
{
    $db = dbConnect();
   
$personnes = $db->prepare("SELECT personnes.nom_personne, GROUP_CONCAT(pays.nationalite SEPARATOR ', ') 
FROM liaison_personne_nationalite 
INNER JOIN personnes ON liaison_personne_nationalite.id_personnes = personnes.id 
INNER JOIN pays ON liaison_personne_nationalite.id_nationalite = pays.id
WHERE personnes.id=pays.id");
$choix = (int)$_GET['id'];
$personnes->bindParam(":idFilm", $choix,PDO::PARAM_INT);
$personnes->execute();
$personnesView = $personnes->fetch(PDO::FETCH_ASSOC);
$personnes->closeCursor();
return $personnesView;
}


function dbConnect()
{
    try

    {
        $db = new PDO('mysql:host=localhost;dbname=nicolasj_filmorama;charset=utf8','nicolasj','MZkQrGNiKM');
        return $db;
    }

    catch(Exception $e)

    {

    die('Erreur : '.$e->getMessage());

    }
}

