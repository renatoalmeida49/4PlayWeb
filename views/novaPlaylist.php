<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <!-- <link rel="stylesheet" type="text/css" href="../assets/css/styleNovaPlaylist.css"/>-->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="../assets/script/bootstrap.min.js"></script>
        <title>Nova playlist</title>
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
        
            <form method="post" action="../controllers/PlaylistController.php">
                <div class="form-group">
                    <label for="nome">Nome:</label><input id="nome" class="form-control" type="text" required name="nome"/><br/>
                    <label for="descricao">Descrição:</label><br/><textarea id="descricao" class="form-control" name="descricao" cols="50" rows="5"></textarea><br/>
                </div>
                <div class="form-row">
                    <div class="col">
                        <button class="btn btn-success form-control" type="submit" name="playlistControl" value="Adicionar">Criar</button>
                    </div>
                    <div class="col">
                        <a href="playlists.php" class="btn btn-success form-control">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
