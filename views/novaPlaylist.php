<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/styleNovaPlaylist.css"/>
        <title>Nova playlist</title>
    </head>
    <body>
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
                <form method="post" action="../controllers/PlaylistController.php">
                    <label>Nome:</label><input type="text" required name="nome"/><br/>
                    <label class="labelLetra">Descrição:</label><br/><textarea class="areaLetra" name="descricao" cols="50" rows="5"></textarea><br/>
                    <div class="buttonFooterForm">
                        <button type="submit" name="playlistControl" value="Adicionar">Criar</button>
                    </div>
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
