<?php
if (isset($_GET['id'])){
    
    require('controller/movie.php');

   }
else{
    require('controller/list.php');

    
}

?>
