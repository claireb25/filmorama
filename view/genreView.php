
 <?php include('small-header.php')?>
    <h2 class="title1"> 
        <?php echo $filmByGenre[0]['genre']?> 
    </h2>
    <div class="movies">
        <?php foreach ($filmByGenre as $films) {?>
            <div class="movie">
                <h4><?php echo $films["titre"]?></h4>
                <p class="img"><img src="<?php echo $films["affiche"] ?>"  width="180" height="270"></p>
                <a class="stylebouton"  href="film/<?php echo $films['id_film'];?>">Découvrir</a>
            </div>
        <?php }?>
    </div>
<?php include('footer.php')?>