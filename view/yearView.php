<?php include('small-header.php')?>
    <h2>
    <?php if(count($filmsYear) > 0) {?>
        <?php echo $filmsYear[0]['annee']  ?>
    <?php } else { echo 'aucun film enregistré' ; }?>
        
    </h2>

    <?php foreach ($filmsYear as $row) {?>
    <div class="movie ">
        <h4><?php echo $row["titre"]?></h4>
        <img src="<?php echo $row["affiche"];?>">
        <p><a href="film/<?php echo $row['id'];?>">Découvrir</a></p>
    </div>
    <?php }?>
<?php include('footer.php')?>