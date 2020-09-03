<?= $render('header');?>
<section class="container main"> 
    
    <?= $render('aside', ['activeMenu' => 'suasMusicas']); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="h3">4Play - Bem vindo, <?=$loggedUser->name; ?></div>
                <a href="suasMusicas.php" class="btn btn-success">Suas músicas</a>
                <img src="<?=$base; ?>/assets/images/logo.png" width="200" height="200" />
                <a href="playlists.php" class="btn btn-success">Playlists</a>
                <img src="<?=$base; ?>/assets/images/music-composition-symbols.png" class="img-fluid" />
            </div>
        </div>
    </div>
</section>
<?= $render('footer');?>