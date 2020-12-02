<div id="modalAdicionarPlaylist" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="post" action="<?= $base; ?>/playlists">
                <div class="modal-header bg-dark">
                    Criar playlist
                </div>
                <div class="modal-body bg-dark">
                    <label for="name">Nome:</label>
                    <input id="name" class="form-control" type="text" required name="name"/>
                    <label for="descricao">Descrição:</label>
                    <textarea id="descricao" class="form-control" name="descricao" cols="50" rows="5"></textarea><br/>
                </div>
                <div class="modal-footer bg-dark">
                    <button class="btn btn-success" type="submit">Criar</button>
                    <button class="btn btn-success" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>