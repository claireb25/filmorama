<?php
$url = explode("/",$_SERVER['REQUEST_URI'],4);
if (count($url)>3){
    array_pop($url);
}
$path = implode("/", $url);

switch($path){
    case "/filmorama/":
    case "/filmorama" :
    case "/filmorama/homepage":
        require('controller/list.php');
        break;
    case "/filmorama/film":
        require('controller/movie.php');
        break;
    case "/filmorama/genre":
        require('controller/ctrlgenre.php');
        break;
    case "/filmorama/annee":
        require('controller/ctrlyear.php');
        break;
    case "/filmorama/personne":
        require('controller/ctrlPersonne.php');
        break;
    case "/filmorama/search":
        require('controller/ctrlResearch.php');
        break;
    default :
        require('controller/404.php');
}
