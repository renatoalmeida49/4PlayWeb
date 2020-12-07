<div id="modalEditarPlaylist" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="post" action="<?= $base; ?>/playlists/editar">
                <div class="modal-header bg-dark">
                    Editar playlist
                </div>
                <div class="modal-body bg-dark">
                    <input type="text" hidden id="id-playlist" name="id" value="<?= $playlist[0]->id; ?>"/>
                    <label for="name">Nome:</label>
                    <input id="name" class="form-control" type="text" required name="name" value="<?= $playlist[0]->name; ?>"/>
                    <label for="descricao">Descrição:</label>
                    <textarea id="descricao" class="form-control" name="descricao" cols="50" rows="5"><?= $playlist[0]->descricao; ?></textarea><br/>
                </div>
                <div class="modal-footer bg-dark">
                    <button class="btn btn-success" type="submit">Criar</button>
                    <button class="btn btn-success" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>