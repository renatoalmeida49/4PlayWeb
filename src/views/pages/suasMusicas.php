<?= $render('header');?>

<section class="container main">

    <?= $render('aside', ['activeMenu' => 'suasMusicas']); ?>

    <div class="container">
        <p class="h1">Suas músicas</p>

        <a href="#modalAdicionarMusica" class="btn btn-success" data-toggle="modal" data-target="#modalAdicionarMusica">Adicionar música</a>

        <?= $render('modalAdicionarMusica'); ?>
        <?= $render('modalEditarMusica'); ?>
        <?= $render('modalAdicionarAPlaylist'); ?>

        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Artista</th>
                    <th scope="col">Instrumento</th>
                    <th scope="col">Capotraste</th>
                    <th scope="col">...</th>
                </tr>
            <thead>

            <tbody>
                <?php foreach($feed as $i=>$item): ?>
                    <?= $render('table-row-music', ['data' => $item, 'count' => $i]); ?>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>

    
</section>

<?= $render('footer'); ?>