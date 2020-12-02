<?= $render('header');?>

<section class="container main"> 
    
    <?= $render('aside', ['activeMenu' => 'home']); ?>

    <div class="container">

        <p>Adicione músicas</p>
        <p>Crie uma playlist</p>

    </div>
</section>

<?= $render('footer');?>