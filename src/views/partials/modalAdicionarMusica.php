<div id="modalAdicionarMusica" class="modal fade">
    <div class="modal-dialog modal-dialog-centered part1">
        <div class="modal-content">
            <form method="POST" action="<?=$base;?>/suasMusicas">
                <div class="modal-header bg-dark">
                    Adicionar música
                </div>
                <div class="modal-body bg-dark">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" required />
                    <label for="artist">Artista:</label>
                    <input type="text" class="form-control" id="artist" name="artist" required />
                    <label for="instrumento">Instrumento:</label>
                    <select id="instrumento" class="form-control" name="instrumento" required>
                        <option></option>
                        <option value="Violão">Violão</option>
                        <option value="Guitarra">Guitarra</option>
                        <option value="Violão/Guitarra">Violão/Guitarra</option>
                    </select>
                    <label for="capostraste">Capotraste:</label>
                    <select id="capostraste" class="form-control" name="capotraste" required>
                        <option></option>
                        <option value="Sem capo">Sem capo</option>
                        <option value="1ª casa">1ª casa</option>
                        <option value="2ª casa">2ª casa</option>
                        <option value="3ª casa">3ª casa</option>
                        <option value="4ª casa">4ª casa</option>
                        <option value="5ª casa">5ª casa</option>
                        <option value="6ª casa">6ª casa</option>
                        <option value="7ª casa">7ª casa</option>
                    </select>
                </div>
                <div class="modal-footer  bg-dark">
                    <button class="btn btn-success" type="submit">Adicionar</button>
                    <button class="btn btn-success" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>