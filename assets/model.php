<?php
require_once("utils/bdd.php");
function getMovies(){
    global $bdd;
    $movies = $bdd->prepare("SELECT films.id, films.titre, films.affiche, GROUP_CONCAT(personnes.nom_personne SEPARATOR ' et ') FROM liaison_film_personne_fonction
    INNER JOIN films ON liaison_film_personne_fonction.id_film = films.id
    INNER JOIN personnes ON liaison_film_personne_fonction.id_personne = personnes.id
    INNER JOIN fonction ON liaison_film_personne_fonction.id_fonction = fonction.id
    WHERE fonction.id = 1
    GROUP BY films.titre");
    $movies->execute();
    $result = $movies->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    $movies->closeCursor();
} 

function getMovie(){
    global $bdd;
    $sql = "SELECT films.titre, films.affiche, films.description, films.id, annee_id,
    (SELECT annees_sortie.annee FROM annees_sortie
    WHERE annees_sortie.id = films.annee_id) as année,
    (SELECT GROUP_CONCAT(genres.genre) FROM liaison_film_genre
    INNER JOIN genres ON liaison_film_genre.id_genre = genres.id
    WHERE liaison_film_genre.id_film = films.id) as genre, 
    (SELECT GROUP_CONCAT(genres.id) FROM liaison_film_genre
    INNER JOIN genres ON liaison_film_genre.id_genre = genres.id
    WHERE liaison_film_genre.id_film = films.id) as id_genre, 
    (SELECT GROUP_CONCAT(personnes.nom_personne)
    FROM liaison_film_personne_fonction
    INNER JOIN fonction ON liaison_film_personne_fonction.id_fonction = fonction.id
    INNER JOIN personnes ON liaison_film_personne_fonction.id_personne = personnes.id
    WHERE liaison_film_personne_fonction.id_film = films.id AND fonction.id = 1) as realisateur,
    (SELECT GROUP_CONCAT(personnes.id)
    FROM liaison_film_personne_fonction
    INNER JOIN fonction ON liaison_film_personne_fonction.id_fonction = fonction.id
    INNER JOIN personnes ON liaison_film_personne_fonction.id_personne = personnes.id
    WHERE liaison_film_personne_fonction.id_film = films.id AND fonction.id = 1) as id_realisateur,
    (SELECT GROUP_CONCAT(personnes.nom_personne) FROM `liaison_film_personne_fonction` 
    INNER JOIN fonction ON liaison_film_personne_fonction.id_fonction = fonction.id 
    INNER JOIN personnes ON liaison_film_personne_fonction.id_personne = personnes.id 
    WHERE liaison_film_personne_fonction.id_film = films.id AND fonction.id = 2) as acteurs,
    (SELECT GROUP_CONCAT(personnes.id)
    FROM liaison_film_personne_fonction
    INNER JOIN fonction ON liaison_film_personne_fonction.id_fonction = fonction.id
    INNER JOIN personnes ON liaison_film_personne_fonction.id_personne = personnes.id
    WHERE liaison_film_personne_fonction.id_film = films.id AND fonction.id = 2) as id_acteur
    FROM films 
    WHERE films.id = :idfilm 
    GROUP BY films.titre";
    $filmChoice = (int)$_GET['id'];
    $resultat = $bdd->prepare($sql);
    $resultat->bindParam(':idfilm', $filmChoice, PDO::PARAM_INT);
    $resultat->execute();   
    $oneFilm = $resultat->fetch(PDO::FETCH_ASSOC);
    return $oneFilm;
    $resultat->closeCursor();
}

function getMoviesbyGenre(){
    global $bdd;
    $sql = "SELECT id_genre,id_film, films.titre, films.affiche, genres.genre 
    FROM liaison_film_genre 
    INNER JOIN films ON liaison_film_genre.id_film = films.id
    INNER JOIN genres ON liaison_film_genre.id_genre = genres.id 
    WHERE id_genre = :idgenre";
    $choiceGenre =(int)$_GET['id'];
    $resultat = $bdd->prepare($sql);
    $resultat->bindParam(':idgenre', $choiceGenre, PDO::PARAM_INT);
    $resultat->execute();   
    $filmByGenre = $resultat->fetchAll(PDO::FETCH_ASSOC);
    return $filmByGenre;
}

function getMoviesbyYear(){
    global $bdd;
    $sql = "SELECT films.titre, films.affiche, films.id, annees_sortie.annee, films.annee_id
    FROM `films` 
    INNER JOIN annees_sortie ON films.annee_id = annees_sortie.id 
    WHERE annee_id = :idannee";
    $choiceYear =(int)$_GET['id'];
    $resultat = $bdd->prepare($sql);
    $resultat->bindParam(':idannee', $choiceYear, PDO::PARAM_INT);
    $resultat->execute();   
    $filmByYear = $resultat->fetchAll(PDO::FETCH_ASSOC);
    return $filmByYear;
    $resultat->closeCursor();
}


function people(){
    global $bdd;
    $choicePerson = (int)$_GET['id'];
    $resultat = $bdd->prepare("SELECT personnes.nom_personne, personnes.portrait, personnes.biographie, ROUND(DATEDIFF(CURRENT_TIMESTAMP,birth_date)/365.2425) as age
    FROM personnes WHERE personnes.id = :idpeople");
    $resultat->bindParam(':idpeople', $choicePerson, PDO::PARAM_INT);
    $resultat->execute();   
    $person = $resultat->fetch(PDO::FETCH_ASSOC);
    return $person;
    $resultat->closeCursor();
}

function age(){
    global $bdd;
    $choicePerson = (int)$_GET['id'];
    $result = $bdd->prepare("SELECT birth_date, death, ROUND(DATEDIFF(death, birth_date)/365.2425) as age_death, ROUND(DATEDIFF(CURRENT_TIMESTAMP, birth_date)/365.2425) as age FROM personnes WHERE personnes.id = :idpeople");
    $result->bindParam(':idpeople', $choicePerson, PDO::PARAM_INT);
    $result->execute();
    $age = $result->fetch(PDO::FETCH_ASSOC);
    return $age;
    $result->closeCursor();
}


function moviesByPeople(){
    global $bdd;
    $person = (int)$_GET['id'];
    $resultat = $bdd->prepare("SELECT films.titre, films.affiche, id_film, personnes.id 
    FROM `liaison_film_personne_fonction` 
    INNER JOIN films ON liaison_film_personne_fonction.id_film = films.id 
    INNER JOIN personnes ON liaison_film_personne_fonction.id_personne = personnes.id 
    WHERE id_personne = :idPeople");
    $resultat->bindParam(':idPeople', $person, PDO::PARAM_INT);
    $resultat->execute();   
    $f_people = $resultat->fetchAll(PDO::FETCH_ASSOC);
    return $f_people;
    $resultat->closeCursor();
}


    function research($search){// if something is writen in the search bar
        global $bdd;
 
        $search= "%".$search."%";
        $results = $bdd->prepare("SELECT films.titre, films.affiche, films.id FROM films WHERE titre LIKE :search ");
        $results->bindParam(':search', $search, PDO::PARAM_STR); // binding $search to a variable in my SQL request
        $results->execute();   
        $research = $results->fetchAll(PDO::FETCH_ASSOC);
        return $research;
        $results->closeCursor();

    }



