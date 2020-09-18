<?= $render('header'); ?>

<section class="container main">
    <?= $render('aside', ['activeMenu' => 'suasMusicas']); ?>

    <div class="container">
        Aqui virão todos os detalhes da música.
    </div>

</section>

<?= $render('footer'); ?>