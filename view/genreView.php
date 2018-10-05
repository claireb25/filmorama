
 <?php include('small-header.php')?>
    <h1> <?php echo $filmByGenre[0]['genre']?> </h1>
    <?php foreach ($filmByGenre as $films) {?>
        <div class="films">
            <h4><?php echo $films["titre"]?></h4>
            <img src="<?php echo $films["affiche"] ?>">
            <p><a href="film/<?php echo $films['id_film'];?>">Découvrir</a></p>
        </div>
        <?php }?>
<?php include('footer.php')?>