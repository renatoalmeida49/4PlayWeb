<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/stylePlaylists.css"/>
        <script type="text/javascript" src="../assets/script/script.js"></script>
        <title>Playlists</title>
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
                <div class="styleButtons">
                    <div class="tablePlaylists">
                        <table class="tableConfig">
                            <tr class="colunas">
                                <td>Nome</td>
                                <td>Descrição</td>
                            </tr>
                            <?php require_once '../results/TablePlaylist.php'; 
                            tablePlaylists();?>
                        </table>
                    </div>
                    
                    <div class="buttonFooter">
                        <a href="novaPlaylist.php"><button type="button">Nova playlist</button></a>
                    </div>
                </div>
                
                <div class="styleButtons">
                    <div class="tableMusicasPlaylist">
                        <table class="tableConfig">
                            <tr class="colunas">
                                <td>Nome</td>
                                <td>Artista</td>
                                <td>Instrumento</td>
                                <td>Idioma</td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="buttonFooter" id="buttonFooter">
                        <!-- Esse será o botão de editar -->
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <a href="telaInicial.php"><button type="button">Voltar</button></a>
            </div>
        </footer>
    </body>
</html>
