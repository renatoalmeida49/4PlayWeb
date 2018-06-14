<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/styleAdicionarMusica.css"/>
        <title>Adicionar músicas</title>
    </head>
    <body>
        <header>
        </header>
        
        <section>
            <form method="post" action="../controllers/MusicController.php">
                <label>Nome:</label><input  required type="text" name="nome"/><br/>
                <label>Artista:</label><br/>
                <label>Tipo:</label>
                <select>
                    <option name="tipo" value="Dedilhado">Dedilhado</option>
                    <option name="tipo" value="Ritmo">Ritmo</option>
                    <option name="tipo" value="Mista">Mista</option>
                </select></br>
                <label>Capotraste:</label>
                <select>
                    <option name="capostraste" value="Sem capo">Sem capo</option>
                    <option name="capostraste" value="1ª casa">1ª casa</option>
                    <option name="capostraste" value="2ª casa">2ª casa</option>
                    <option name="capostraste" value="3ª casa">3ª casa</option>
                    <option name="capostraste" value="4ª casa">4ª casa</option>
                    <option name="capostraste" value="5ª casa">5ª casa</option>
                    <option name="capostraste" value="6ª casa">6ª casa</option>
                    <option name="capostraste" value="7ª casa">7ª casa</option>
                </select><br/>
                <label>Instrumento:</label>
                <select>
                    <option name="instrumento" value="Violão">Violão</option>
                    <option name="instrumento" value="Guitarra">Guitarra</option>
                    <option name="instrumento" value="Violão/Guitarra">Violão/Guitarra</option>
                </select><br/>
                <label>Idioma:</label>
                <select>
                    <option name="idioma" value="Português">Português</option>
                    <option name="idioma" value="Inglês">Inglês</option>
                    <option name="idioma" value="Espanhol">Espanhol</option>
                    <option name="idioma" value="Frances">Francês</option>
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
