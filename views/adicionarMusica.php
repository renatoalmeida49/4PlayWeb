<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="../controllers/MusicController.php">
            <label>Nome:</label><input type="text" name="nome"/><br/>
            <label>Artista:</label><br/>
            <label>Tipo:</label>
            <select>
                <option value="Dedilhado">Dedilhado</option>
                <option value="Ritmo">Ritmo</option>
                <option value="Mista">Mista</option>
            </select></br>
            <label>Capotraste:</label>
            <select>
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
            <select>
                <option value="Violão">Violão</option>
                <option value="Guitarra">Guitarra</option>
                <option value="Violão/Guitarra">Violão/Guitarra</option>
            </select><br/>
            <label>Idioma:</label>
            <select>
                <option value="Português">Português</option>
                <option value="Inglês">Inglês</option>
                <option value="Espanhol">Espanhol</option>
                <option value="Frances">Francês</option>
            </select><br/>
            <label>Letra:</label>
            
            <button type="submit" name="musicControl" value="Adicionar">Adicionar</button>
        </form>
        
        <a href="suasmusicas.php"><button type="button">Voltar</button></a>
    </body>
</html>
