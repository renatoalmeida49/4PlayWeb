<?= $render('header'); ?>

<section class="container main">
    <?= $render('aside', ['activeMenu' => 'suasMusicas']); ?>

    <div class="container">
        <p><?= $music->nome; ?></p>
        <p><?= $music->artista; ?></p>
        <p><?= $music->capotraste; ?></p>
        <p><?= $music->instrumento; ?></p>
    </div>

</section>

<?= $render('footer'); ?>