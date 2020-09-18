<?= $render('header');?>

<section class="container main"> 
    
    <?= $render('aside', ['activeMenu' => 'suasMusicas']); ?>

    <div class="container">

        <?php foreach($feed as $item): ?>
            <?= $render('feed-item', ['data' => $item]); ?>
        <?php endforeach;?>

    </div>
</section>

<?= $render('footer');?>