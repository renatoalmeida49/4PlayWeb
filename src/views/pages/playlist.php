<?= $render('header'); ?>

    <section class="container main">
        <?= $render('aside', ['activeMenu' => 'playlists']); ?>

        <div class="container">
            <p class="h1"><?= $playlist[0]->name;?></p>
            
            
            <p class="h2"><?= $playlist[0]->descricao;?></p>
            
            
            <div class="col"><?=  print_r($musics); ?></div>
        
        </div>

    </section>

<?= $render('footer'); ?>