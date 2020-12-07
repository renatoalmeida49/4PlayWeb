<?= $render('header'); ?>

    <section class="container main">
        <?= $render('aside', ['activeMenu' => 'playlists']); ?>

        <div class="container">
            
            <p class="display-1"><?= $playlist[0]->name;?></p>

            <div class="row">
                <div class="col">
                    <p class="h5"><?= $playlist[0]->descricao;?></p>
                </div>

                <div class="col-md-auto">
                    <a href="#modalEditarPlaylist" data-toggle="modal" data-target="#modalEditarPlaylist" class="btn btn-secondary">Editar playlist</a>
                    <a href="<?= $base; ?>/playlist/excluir/<?= $playlist[0]->id;?>" class="btn btn-secondary">Excluir playlist</a>
                </div>
            </div>

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
                </table>
            
            </div>
        
        </div>

    </section>

    <?= $render('modalEditarPlaylist', ['playlist' => $playlist]); ?>

<?= $render('footer'); ?>