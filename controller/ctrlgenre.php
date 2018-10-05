<?php
require('model/model.php');
$filmByGenre = getMoviesbyGenre();
require('view/genreView.php');

?>