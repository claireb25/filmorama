<?php 
require('model/model.php');
$filmsYear = getMoviesbyYear();
require('view/yearView.php');
?>