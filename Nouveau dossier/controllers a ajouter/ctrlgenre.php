<?php
require('models/movies.php');
$filmByGenre = getMoviesbyGenre();
require('views/genreView.php');

?>