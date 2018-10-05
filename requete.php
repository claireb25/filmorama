
SELECT `id_film`, GROUP_CONCAT(`genre` SEPARATOR ", ")
FROM `liaison_film_genre`
INNER JOIN `genres` ON `liaison_film_genre`.`id_genre`=`genres`.`id`
GROUP BY id_film


SELECT `id_film`, GROUP_CONCAT(`nom_personne` SEPARATOR ", ")
FROM `liaison_film_personne_fonction`
INNER JOIN `personnes` ON `liaison_film_personne_fonction`.`id_personne`=`personnes`.`id`
INNER JOIN `fonction` ON `liaison_film_personne_fonction`.`id_fonction`=`fonction`.`id`
WHERE `id_fonction`="1"
GROUP BY id_film


SELECT `id_film`, GROUP_CONCAT(`nom_personne` SEPARATOR ", ")
FROM `liaison_film_personne_fonction`
INNER JOIN `personnes` ON `liaison_film_personne_fonction`.`id_personne`=`personnes`.`id`
INNER JOIN `fonction` ON `liaison_film_personne_fonction`.`id_fonction`=`fonction`.`id`
WHERE `id_fonction`="2"
GROUP BY id_film

SELECT titre, affiche, nom_personne
FROM liaison_film_personne_fonction
INNER JOIN `films` ON `liaison_film_personne_fonction`.`id_film`=`films`.`id`
INNER JOIN `personnes` ON `liaison_film_personne_fonction`.`id_personne`=`personnes`.`id`
INNER JOIN `fonction` ON `liaison_film_personne_fonction`.`id_fonction`=`fonction`.`id`
WHERE `id_fonction`="1"

nationalité
SELECT personnes.nom_personne, GROUP_CONCAT(pays.nationalite SEPARATOR ', ')
FROM liaison_personne_nationalite
INNER JOIN personnes ON liaison_personne_nationalite.id_personnes = personnes.id
INNER JOIN pays ON liaison_personne_nationalite.id_nationalite = pays.id
GROUP BY personnes.nom_personne