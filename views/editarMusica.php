<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <!-- <link rel="stylesheet" type="text/css" href="../assets/css/styleEditarMusica.css"/> -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="../assets/script/bootstrap.min.js"></script>
        <title>Editar música</title>
        <script type="text/javascript" src="../assets/script/script.js"></script>
    </head>
    <body> 
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 5px">
                <div class="col-1">
                    <img src="../assets/images/logo.png" width="40" height="40"/>
                </div>
                <div class="col-4">
                    <div class="h1">Nova playlists</div>
                </div>
            </div>
            
            <?php require_once '../results/FormEdicao.php';
                $resultado = getFormEditaMusica();
            ?>
            <form method='post' action='../controllers/MusicController.php'>
                <input type='text' hidden name='cod' value='<?php echo $resultado['mus_cod']?>'/>
                <div class="form-row">
                    <div class="col">
                        <label for="nome">Nome:</label><input id="nome" class="form-control" required type="text" name="nome" value='<?php echo $resultado['mus_nome']; ?>'/>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col">
                        <label for="artista">Artista:</label>
                        <select name='artista' class="form-control" id='artista' required>
                            <option></option>
                            <?php 
                                require_once '../results/SelectArtistas.php';
                            selectEdicao($resultado);
                            ?>
                        </select>
                    </div>
                    <div class="col">
                        <a href="adicionarArtista.php" style="margin-top: 31px" class="btn btn-success form-control">Novo artista</a>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col">
                        <label for="tipo">Tipo:</label>
                        <select id="tipo" class="form-control" name="tipo" required>
                            <option></option>
                            <?php
                                if ($resultado['mus_tipo'] == "Dedilhado"){
                                    echo '<option value="Dedilhado" selected>Dedilhado</option>';
                                    echo '<option value="Ritmo">Ritmo</option>';
                                    echo '<option value="Mista">Mista</option>';
                                } else if ($resultado['mus_tipo'] == "Ritmo") {
                                    echo '<option value="Dedilhado">Dedilhado</option>';
                                    echo '<option value="Ritmo" selected>Ritmo</option>';
                                    echo '<option value="Mista">Mista</option>';
                                } else {
                                    echo '<option value="Dedilhado">Dedilhado</option>';
                                    echo '<option value="Ritmo">Ritmo</option>';
                                    echo '<option value="Mista" selected>Mista</option>';
                                }
                            ?>
                        </select>
                    </div>
                    
                    <div class="col">
                        <label for="capostraste">Capotraste:</label>
                        <select id="capostraste" class="form-control" name="capotraste" required>
                            <option></option>
                            <?php
                                if ($resultado['mus_capo'] == "Sem capo"){
                                    echo '<option value="Sem capo" selected>Sem capo</option>';
                                    echo '<option value="1ª casa">1ª casa</option>';
                                    echo '<option value="2ª casa">2ª casa</option>';
                                    echo '<option value="3ª casa">3ª casa</option>';
                                    echo '<option value="4ª casa">4ª casa</option>';
                                    echo '<option value="5ª casa">5ª casa</option>';
                                    echo '<option value="6ª casa">6ª casa</option>';
                                    echo '<option value="7ª casa">7ª casa</option>';
                                } else if ($resultado['mus_capo'] == "1ª casa"){
                                    echo '<option value="Sem capo">Sem capo</option>';
                                    echo '<option value="1ª casa" selected>1ª casa</option>';
                                    echo '<option value="2ª casa">2ª casa</option>';
                                    echo '<option value="3ª casa">3ª casa</option>';
                                    echo '<option value="4ª casa">4ª casa</option>';
                                    echo '<option value="5ª casa">5ª casa</option>';
                                    echo '<option value="6ª casa">6ª casa</option>';
                                    echo '<option value="7ª casa">7ª casa</option>';
                                } else if ($resultado['mus_capo'] == "2ª casa"){
                                    echo '<option value="Sem capo">Sem capo</option>';
                                    echo '<option value="1ª casa">1ª casa</option>';
                                    echo '<option value="2ª casa" selected>2ª casa</option>';
                                    echo '<option value="3ª casa">3ª casa</option>';
                                    echo '<option value="4ª casa">4ª casa</option>';
                                    echo '<option value="5ª casa">5ª casa</option>';
                                    echo '<option value="6ª casa">6ª casa</option>';
                                    echo '<option value="7ª casa">7ª casa</option>';
                                } else if ($resultado['mus_capo'] == "3ª casa"){
                                    echo '<option value="Sem capo">Sem capo</option>';
                                    echo '<option value="1ª casa">1ª casa</option>';
                                    echo '<option value="2ª casa">2ª casa</option>';
                                    echo '<option value="3ª casa" selected>3ª casa</option>';
                                    echo '<option value="4ª casa">4ª casa</option>';
                                    echo '<option value="5ª casa">5ª casa</option>';
                                    echo '<option value="6ª casa">6ª casa</option>';
                                    echo '<option value="7ª casa">7ª casa</option>';
                                } else if ($resultado['mus_capo'] == "4ª casa"){
                                    echo '<option value="Sem capo">Sem capo</option>';
                                    echo '<option value="1ª casa">1ª casa</option>';
                                    echo '<option value="2ª casa">2ª casa</option>';
                                    echo '<option value="3ª casa">3ª casa</option>';
                                    echo '<option value="4ª casa"selected>4ª casa</option>';
                                    echo '<option value="5ª casa">5ª casa</option>';
                                    echo '<option value="6ª casa">6ª casa</option>';
                                    echo '<option value="7ª casa">7ª casa</option>';
                                } else if ($resultado['mus_capo'] == "5ª casa"){
                                    echo '<option value="Sem capo">Sem capo</option>';
                                    echo '<option value="1ª casa">1ª casa</option>';
                                    echo '<option value="2ª casa">2ª casa</option>';
                                    echo '<option value="3ª casa">3ª casa</option>';
                                    echo '<option value="4ª casa">4ª casa</option>';
                                    echo '<option value="5ª casa" selected>5ª casa</option>';
                                    echo '<option value="6ª casa">6ª casa</option>';
                                    echo '<option value="7ª casa">7ª casa</option>';
                                } else if ($resultado['mus_capo'] == "6ª casa"){
                                    echo '<option value="Sem capo">Sem capo</option>';
                                    echo '<option value="1ª casa">1ª casa</option>';
                                    echo '<option value="2ª casa">2ª casa</option>';
                                    echo '<option value="3ª casa">3ª casa</option>';
                                    echo '<option value="4ª casa">4ª casa</option>';
                                    echo '<option value="5ª casa">5ª casa</option>';
                                    echo '<option value="6ª casa"selected>6ª casa</option>';
                                    echo '<option value="7ª casa">7ª casa</option>';
                                } else {
                                    echo '<option value="Sem capo">Sem capo</option>';
                                    echo '<option value="1ª casa">1ª casa</option>';
                                    echo '<option value="2ª casa">2ª casa</option>';
                                    echo '<option value="3ª casa">3ª casa</option>';
                                    echo '<option value="4ª casa">4ª casa</option>';
                                    echo '<option value="5ª casa">5ª casa</option>';
                                    echo '<option value="6ª casa">6ª casa</option>';
                                    echo '<option value="7ª casa"selected>7ª casa</option>';
                                }
                            ?>
                        </select>
                    </div>
                    
                    <div col="col">
                        <label for="instrumento">Instrumento:</label>
                        <select id="instrumento" class="form-control" name="instrumento" required>
                            <option></option>
                            <?php
                                if ($resultado['mus_instrumento'] == "Violão"){
                                    echo '<option value="Violão" selected>Violão</option>';
                                    echo '<option value="Guitarra">Guitarra</option>';
                                    echo '<option value="Violão/Guitarra">Violão/Guitarra</option>';
                                } else if ($resultado['mus_instrumento'] == "Guitarra") {
                                    echo '<option value="Violão">Violão</option>';
                                    echo '<option value="Guitarra" selected>Guitarra</option>';
                                    echo '<option value="Violão/Guitarra">Violão/Guitarra</option>';
                                } else {
                                    echo '<option value="Violão" selected>Violão</option>';
                                    echo '<option value="Guitarra">Guitarra</option>';
                                    echo '<option value="Violão/Guitarra"selected>Violão/Guitarra</option>';
                                }
                            ?>
                        </select>
                    </div>
                    
                    <div class="col">
                        <label for="idioma">Idioma:</label>
                        <select id="idioma" class="form-control" name="idioma" required>
                            <option></option>
                            <?php
                                if ($resultado['mus_idioma'] == "Português"){
                                    echo '<option value="Português" selected>Português</option>';
                                    echo '<option value="Inglês">Inglês</option>';
                                    echo '<option value="Espanhol">Espanhol</option>';
                                    echo '<option value="Frances">Francês</option>';
                                } else if ($resultado['mus_idioma'] == "Inglês") {
                                    echo '<option value="Português">Português</option>';
                                    echo '<option value="Inglês" selected>Inglês</option>';
                                    echo '<option value="Espanhol">Espanhol</option>';
                                    echo '<option value="Frances">Francês</option>';
                                } else if ($resultado['mus_idioma'] == "Espanhol") {
                                    echo '<option value="Português">Português</option>';
                                    echo '<option value="Inglês">Inglês</option>';
                                    echo '<option value="Espanhol" selected>Espanhol</option>';
                                    echo '<option value="Frances">Francês</option>';
                                } else {
                                    echo '<option value="Português">Português</option>';
                                    echo '<option value="Inglês">Inglês</option>';
                                    echo '<option value="Espanhol">Espanhol</option>';
                                    echo '<option value="Frances" selected>Francês</option>';
                                }
                            ?>
                        </select>
                    </div>
                </div>
                
                    <div class="form-row">
                        <label for="letra" class="labelLetra">Letra:</label><textarea id="letra" class="form-control" style="margin-bottom: 6px" name="letra" rows="10" cols="80"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-success form-control" name="musicControl" value="Editar">Atualizar</button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-success form-control" name="musicControl" value="Excluir">Excluir</button>
                        </div>
                        <div class="col">
                            <a href="suasmusicas.php"class="btn btn-success form-control">Cancelar</a>
                        </div>
                    </div>
            </form>
        </div>
    </body>
</html>
