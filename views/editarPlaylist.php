<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <link rel='icon' type="image/png" href="../assets/images/logo.png"/>
        <!-- <link rel='stylesheet' type="text/css" href="../assets/css/styleEditarPlaylist.css"/>-->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="../assets/script/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/script/script.js"></script>
        <title>Editar playlist</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 5px">
                <div class="col-1">
                    <img src="../assets/images/logo.png" class="img-fluid" width="40" height="40"/>
                </div>
                <div class="col-4">
                    <div class="h1">4Play</div>
                </div>
            </div>
        
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <!-- Todas as músicas do usuário com exceção das que já estão na playlist -->
                        <table class="table table-striped table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nome</th>
                                    <th>Artista</th>
                                    <th>Instrumento</th>
                                    <th>Idioma</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require_once '../results/TablePlaylist.php';
                                    verificaMusicas($_GET['id']);
                                ?>
                            </tbody>
                        </table>
                        
                        <a href="adicionarMusica.php" class="btn btn-success">Adicionar música</a>  
                    </div>
                </div>
            
                <div class="col">
                    <form method="post" action="../controllers/PlaylistController.php">
                        <div class="form-row">
                            <div class="col">
                                <button class="btn btn-success form-control" style="margin: 5px" type="submit" name="playlistControl" value="AdicionarMusica">Adicionar ></button>
                                <button class="btn btn-success form-control" style="margin: 5px" type="submit" name="playlistControl" value="RemoverMusica">< Remover</button>
                                <button class="btn btn-success form-control" style="margin: 5px" type="submit" name="playlistControl" value="Excluir">Excluir playlist</button>
                                <input type="text" id="inputId" name="musicaID"   hidden >
                                <input type="text" name="playlistID" value="<?php echo $_GET['id']?>" hidden>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="col">
                    <!-- Somente as músicas da playlist -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nome</th>
                                    <th>Artista</th>
                                    <th>Instrumento</th>
                                    <th>Idioma</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    require_once '../results/TablePlaylist.php';
                                    selecionaMusicaPlaylist($_GET['id']);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
            <div class="row justify-content-center">
                <a href="playlists.php" class="btn btn-success">Voltar</a>
            </div>
        </div>
    </body>
</html>
