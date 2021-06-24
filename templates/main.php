<main id="site_main">

    <?php foreach($disks as $disk){ ?>
    <div class="albums">
        <img src="<?=$disk['poster'];?>" width="180" alt="">
        <h2 class="album_title white_text"><?= $disk['title']; ?></h2>
        <div class="album_artist grey_text"><?= $disk['author']; ?></div>
        <div class="album_year grey_text"><?= $disk['year']; ?></div>
    </div>
    <?php } ?>
    
</main>