<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/styleEditarMusica.css"/>
        <title>Editar música</title>
        <script type="text/javascript" src="../assets/script/script.js"></script>
    </head>
    <body onload=''> 
        <header>
            <div class="container">
                <div class="logo">
                    <img src="../assets/images/logo.png" width="40" height="40"/>
                </div>
                <div class="nome">
                    4Play
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <?php require_once '../results/FormEdicao.php';
                    $resultado = getFormEditaMusica();
                ?>
                <form method='post' action='../controllers/MusicController.php'>
                    <input type='text' hidden name='cod' value='<?php echo $resultado['mus_cod']?>'/>
                    <label>Nome:</label><input required type="text" name="nome" value='<?php echo $resultado['mus_nome']; ?>'/><br/>
                    <label>Artista:</label>
                    <select name='artista' id='artista'>
                        <?php 
                        require_once '../results/SelectArtistas.php';
                        selectEdicao($resultado);
                        ?>
                    </select>
                    <a href="adicionarArtista.php"><button type="button">Novo artista</button></a><br/>
                    <label>Tipo:</label>
                    <select name="tipo" required>
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
                    </select></br>
                    <label>Capotraste:</label>
                    <select name="capotraste" required>
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
                    </select><br/>
                    <label>Instrumento:</label>
                    <select name="instrumento" required>
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
                    </select><br/>
                    <label>Idioma:</label>
                    <select name="idioma" required>
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
                    </select><br/>
                    <label class="labelLetra">Letra:</label><textarea class="areaLetra" id="letra" name="letra" rows="30" cols="80"></textarea><br/>
            
                    <div class="buttonForm">
                        <button type="submit" class="buttonFooterForm" name="musicControl" value="Editar">Atualizar</button>
                        <button type="submit" class="buttonFooterForm" name="musicControl" value="Excluir">Excluir</button>
                    </div>
                </form>
            </div>
        </section>
        
        <footer>
            <div class="container">
                <a href="suasmusicas.php"><button class="buttonFooterForm" type="button">Cancelar</button></a>
            </div>
        </footer>
    </body>
</html>
