<?php 
require('models/movies.php');
$filmByReal = getMoviesbyReal();
require('views/realView.php');
?>