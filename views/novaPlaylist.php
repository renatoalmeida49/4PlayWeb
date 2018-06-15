<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/styleNovaPlaylist.css"/>
        <title>Nova playlist</title>
    </head>
    <body>
        <header></header>
        <section>
            <div class="container">
                <form method="post" action="../controllers/PlaylistController.php">
                    <label>Nome:</label><input type="text" required name="nome"/><br/>
                    <label>Descrição:</label><textarea name="descricao" cols="30" rows="40"></textarea><br/>
                    <button type="submit" name="playlistControl" value="Adicionar">Criar</button>
                </form>
            </div>
        </section>
        <footer>
            <div class="container">
                <a href="playlists.php"><button type="button">Cancelar</button></a>
            </div>
        </footer>
    </body>
</html>
