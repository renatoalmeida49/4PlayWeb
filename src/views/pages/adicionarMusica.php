<?=$render('header');?>
<section class="container main">

    <?=$render('aside', ['activeMenu' => 'novaMusica']); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h3>Adicionar música</h3>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-8">
                <form method="post" action="<?=$base;?>/suasMusicas">
                    <div class="form-row">
                        <div class="col">
                            <label for="nome">Nome:</label>
                            <input id="nome" class="form-control" required type="text" name="nome"/>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="nome">Artista:</label>
                            <input id="artista" class="form-control" required type="text" name="artista"/>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="tipo">Tipo:</label>
                            <select id="tipo" class="form-control" name="tipo" required>
                                <option></option>
                                <option value="Dedilhado">Dedilhado</option>
                                <option value="Ritmo">Ritmo</option>
                                <option value="Mista">Mista</option>
                            </select>
                        </div>

                        <div class="col">
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

                        <div col="col">
                            <label for="instrumento">Instrumento:</label>
                            <select id="instrumento" class="form-control" name="instrumento" required>
                                <option></option>
                                <option value="Violão">Violão</option>
                                <option value="Guitarra">Guitarra</option>
                                <option value="Violão/Guitarra">Violão/Guitarra</option>
                            </select>
                        </div>

                        <div class="col">
                            <label for="idioma">Idioma:</label>
                            <select id="idioma" class="form-control" name="idioma" required>
                                <option></option>
                                <option value="Português">Português</option>
                                <option value="Inglês">Inglês</option>
                                <option value="Espanhol">Espanhol</option>
                                <option value="Frances">Francês</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <label for="letra" class="labelLetra">Letra:</label><textarea id="letra" class="form-control" style="margin-bottom: 6px" name="letra" rows="10" cols="80"></textarea>

                    </div>

                    <div class="form-row">
                        <button type="submit" class="btn btn-success form-control" name="musicControl" value="Adicionar">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
</section>

<?= $render('footer'); ?>