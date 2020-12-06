<?= $render('header'); ?>

    <section class="container main">
        <?= $render('aside', ['activeMenu' => 'playlists']); ?>

        <div class="container">
            <p class="h1"><?= $playlist[0]->name;?></p>
            
            
            <p class="h2"><?= $playlist[0]->descricao;?></p>
            
            
            <div class="col">
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
                        <?php foreach($musics as $i=>$item): ?>
                            <?= $render('table-row-playlistmusics', ['data' => $item, 'count' => $i, 'id' => $playlist[0]->id]); ?>
                        <?php endforeach;?>
                </tbody>
            
            
            </div>
        
        </div>

    </section>

<?= $render('footer'); ?>