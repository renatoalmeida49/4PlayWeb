<?= $render('header');?>

<section class="container main"> 
    
    <?= $render('aside', ['activeMenu' => 'home']); ?>

    <div class="container">

        <?php foreach($feed as $item): ?>
            <?= $render('feed-item', ['data' => $item]); ?>
        <?php endforeach;?>

    </div>
</section>

<?= $render('footer');?>