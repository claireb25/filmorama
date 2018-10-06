<?php include('small-header.php')?>
  
    <?php if(count($filmsYear) > 0) {?>
        <?php echo '<h2 class="title1">Tous les films sortis en ' .$filmsYear[0]['annee']. '</h2>'  ?>
    <?php } else { echo 'Aucun film enregistré pour '.$filmsYear[0]['annee']  ; }?>
    <section class="personne">
        <div class="movies">
            <?php foreach ($filmsYear as $row) {?>
            <div class="movie ">
                <p class="title"><?php echo $row["titre"]?></p>
                <p class="img"><img src="<?php echo $row["affiche"];?>" width="180" height="270"></p>
                <a class="stylebouton" href="film/<?php echo $row['id'];?>">Découvrir</a>
            </div>
            <?php }?>
        </div>
    </section>
<?php include('footer.php')?>