<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="..assets/css/styleEditarMusica.css"/>
        <title>Editar música</title>
        <script type="text/javascript" src="../assets/script/script.js"></script>
    </head>
    <body> 
        <header></header>
        <section>
            <?php require_once '../results/FormEditaMusica.php';
                $resultado = getArray();
            ?>
            <form method='post' action='../controllers/MusicController.php' onload=''>
                <label>Nome:</label><input required type="text" name="nome" id="nome"/><br/>
                <label>Artista:</label><?php require_once '../results/SelectArtistas.php'; ?>
                <a href="adicionarArtista.php"><button type="button">Novo artista</button></a><br/>
                <label>Tipo:</label>
                <select name="tipo" id="tipo" required>
                    <option></option>
                    <option value="Dedilhado">Dedilhado</option>
                    <option value="Ritmo">Ritmo</option>
                    <option value="Mista">Mista</option>
                </select></br>
                <label>Capotraste:</label>
                <select name="capotraste" id="capotraste" required>
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
                <select name="instrumento" id="instrumento" required>
                    <option></option>
                    <option value="Violão">Violão</option>
                    <option value="Guitarra">Guitarra</option>
                    <option value="Violão/Guitarra">Violão/Guitarra</option>
                </select><br/>
                <label>Idioma:</label>
                <select name="idioma" required id="idioma">
                    <option></option>
                    <option value="Português">Português</option>
                    <option value="Inglês">Inglês</option>
                    <option value="Espanhol">Espanhol</option>
                    <option value="Frances">Francês</option>
                </select><br/>
                <label>Letra:</label><textarea id="letra" name="letra" rows="30" cols="50"></textarea>
            
                <button type="submit" name="musicControl" value="Adicionar">Adicionar</button>
            </form>
        </section>
        
        <footer>
            <a href="suasmusicas.php"><button type="button">Voltar</button></a>
        </footer>
    </body>
</html>
