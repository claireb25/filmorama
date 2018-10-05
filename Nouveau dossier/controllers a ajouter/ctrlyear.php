<?php 
require('models/movies.php');
$filmsYear = getMoviesbyYear();
require('views/yearView.php');
?>