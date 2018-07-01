<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='icon' type="image/png" href="../assets/images/logo.png"/>
        <link rel='stylesheet' type="text/css" href="../assets/css/styleEditarPlaylist.css"/>
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
                        <table>
                            <tr>
                                <td>Nome</td>
                                <td>Artista</td>
                                <td>Instrumento</td>
                                <td>Idioma</td>
                            </tr>
                            <?php
                                //require_once '../results/TablePlaylist.php';
                                //suasMusicasForaDaPlaylist($_GET['id']);
                            ?>
                        </table>
                    </div>
                    <div class="buttonFooter">
                        <a href="adicionarMusica.php"><button type="button">Adicionar música</button></a>
                    </div>
                </div>
                
                <div class="botoes">
                    <button class="opcoes" type="button">Adicionar ></button>
                    <button class="opcoes" type="button">< Remover</button>
                    <button class="opcoes" type="button">Excluir playlist</button>
                </div>
                
                <!-- Somente as músicas da playlist -->
                <div class="tabelaMusicasPlaylists">
                    <table>
                        <tr>
                            <td>Nome</td>
                            <td>Artista</td>
                            <td>Instrumento</td>
                            <td>Idioma</td>
                        </tr>
                        
                        <?php 
                            //require_once '../results/TablePlaylist.php';
                            //selecionaMusicaPlaylist($_GET['id']);
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
