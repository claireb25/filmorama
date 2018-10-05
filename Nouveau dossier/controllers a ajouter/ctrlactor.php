<?php
require('models/movies.php');
$filmByActor = getMoviesbyActor();
require('views/actorView.php');

?>