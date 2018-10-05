<?php 
require('model/model.php');
$film = moviesByPeople();
$person = people();
$age = age();
require('view/peopleView.php');
?>