<?=$render('header');?>
<section class="container main">

    <?=$render('aside', ['activeMenu' => 'playlists']); ?>

    <div class="container">
        <p class="h1">Playlists</p>

        <a href="#modalAdicionarPlaylist" class="btn btn-success" data-toggle="modal" data-target="#modalAdicionarPlaylist">Adicionar playlist</a>

        <?= $render('modalAdicionarPlaylist', []); ?>
     
        <div class="grid-playlists">
            <?php foreach($playlists as $playlist): ?>
                <?= $render('playlist-item', ['playlist' => $playlist]); ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?= $render('footer'); ?>