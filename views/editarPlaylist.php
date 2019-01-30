<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <link rel='icon' type="image/png" href="../assets/images/logo.png"/>
        <link rel='stylesheet' type="text/css" href="../assets/css/styleEditarPlaylist.css"/>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="../assets/script/script.js"></script>
        <title>Editar playlist</title>
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
            <div class="container sec">
                <div class="styleTable">
                    <!-- Todas as músicas do usuário com exceção das que já estão na playlist -->
                    <div class="tabelaSuasMusicas">
                        <table class="tableConfig">
                            <tr class="colunas">
                                <td>Nome</td>
                                <td>Artista</td>
                                <td>Instrumento</td>
                                <td>Idioma</td>
                            </tr>
                            <?php
                                require_once '../results/TablePlaylist.php';
                                verificaMusicas($_GET['id']);
                            ?>
                        </table>
                    </div>
                    <div class="buttonFooter">
                        <a href="adicionarMusica.php"><button type="button">Adicionar música</button></a>
                    </div>
                </div>
                
                <div class="botoes">
                    <form method="post" class="botoes" action="../controllers/PlaylistController.php">
                        <button class="opcoes" type="submit" name="playlistControl" value="AdicionarMusica">Adicionar ></button>
                        <button class="opcoes" type="submit" name="playlistControl" value="RemoverMusica">< Remover</button>
                        <button class="opcoes" type="submit" name="playlistControl" value="Excluir">Excluir playlist</button>
                        <input type="text" id="inputId" name="musicaID"   hidden >
                        <input type="text" name="playlistID" value="<?php echo $_GET['id']?>" hidden>
                    </form>
                </div>
                
                <!-- Somente as músicas da playlist -->
                <div class="tabelaMusicasPlaylists">
                    <table class="tableConfig">
                        <tr class="colunas">
                            <td>Nome</td>
                            <td>Artista</td>
                            <td>Instrumento</td>
                            <td>Idioma</td>
                        </tr>
                        
                        <?php 
                            require_once '../results/TablePlaylist.php';
                            selecionaMusicaPlaylist($_GET['id']);
                        ?>
                    </table>
                </div>
            </div>
        </section>
        
        <footer>
            <div class="botao">
                <a href="playlists.php"><button type="button">Voltar</button></a>
            </div>
        </footer>
    </body>
</html>
