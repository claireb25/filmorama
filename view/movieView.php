
<?php include('small-header.php');?>

    <h2 class="title1"><?= $film["title"]?></h2>
    <?php $i = 0; ?>
    <p class="margin-left">
    <?php foreach($allGenres as $genre) {?>
        <a class="link-style" href="genre/<?php echo $allidGenres[$i]; ?>"><?php echo $genre?></a> 
    <?php $i++; }?>
    </p>
    <section class="movie1">
    <div class="img">
    <p><img class ="poster" src="<?= $film["affiche"]?>"width="240" height="360"></p>
</div>
<div class="info">
    <p class="year"><span>Film sorti en salle en <a class="link-style" href="annee/<?php echo $film['idYear']?>"><?= $film['year']?></a></span></p>
    <p><span>Réalisé par</span>  <?php $j = 0; ?>
    <?php  foreach($allReals as $real){?>
        <a class="link-style" href="personne/<?php echo $allidReals[$j];?>"> 
    <?php echo $real; ?></a>  
    <?php $j++;} ?></p>

    <p><span>Avec </span><?php $k = 0; ?>

                    <?php
                      foreach($allActors as $actor){?>
                    
                        <a class="link-style" href="personne/<?php echo $allidActors[$k];?>">
                            <?php echo $actor;
                            $k++;}?></a>
                
    <p class="synopsis">Synopsis</p>
    <p class="description"><?= $film["synopsis"]?></p>
</div>

</section>
<div class="btn">
    <a class="stylebouton-movie" href= "">Retour à la liste</a>
</div>

    
    <?php include('footer.php')?>
    
