<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/styleAdicionarMusica.css"/>
        <title>Adicionar música</title>
    </head>
    <body>
        <header>
        </header>
        
        <section>
            <form method="post" action="../controllers/MusicController.php">
                <label>Nome:</label><input  required type="text" name="nome"/><br/>
                <label>Artista:</label>
                <select name='artista' id='artista'>
                    <option></option>
                    <?php 
                    require_once '../results/SelectArtistas.php'; 
                    
                    criaSelect();
                    ?>
                </select>
                <a href="adicionarArtista.php"><button type="button">Novo artista</button></a><br/>
                <label>Tipo:</label>
                <select name="tipo" required>
                    <option></option>
                    <option value="Dedilhado">Dedilhado</option>
                    <option value="Ritmo">Ritmo</option>
                    <option value="Mista">Mista</option>
                </select></br>
                <label>Capotraste:</label>
                <select name="capotraste" required>
                    <option></option>
                    <option value="Sem capo">Sem capo</option>
                    <option value="1ª casa">1ª casa</option>
                    <option value="2ª casa">2ª casa</option>
                    <option value="3ª casa">3ª casa</option>
                    <option value="4ª casa">4ª casa</option>
                    <option value="5ª casa">5ª casa</option>
                    <option value="6ª casa">6ª casa</option>
                    <option value="7ª casa">7ª casa</option>
                </select><br/>
                <label>Instrumento:</label>
                <select name="instrumento" required>
                    <option></option>
                    <option value="Violão">Violão</option>
                    <option value="Guitarra">Guitarra</option>
                    <option value="Violão/Guitarra">Violão/Guitarra</option>
                </select><br/>
                <label>Idioma:</label>
                <select name="idioma" required>
                    <option></option>
                    <option value="Português">Português</option>
                    <option value="Inglês">Inglês</option>
                    <option value="Espanhol">Espanhol</option>
                    <option value="Frances">Francês</option>
                </select><br/>
                <label>Letra:</label><textarea name="letra" rows="30" cols="50"></textarea>
            
                <button type="submit" name="musicControl" value="Adicionar">Adicionar</button>
            </form>
        </section>
        
        <footer>
            <a href="suasmusicas.php"><button type="button">Voltar</button></a>
        </footer>
    </body>
</html>
