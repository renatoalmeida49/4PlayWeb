<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/stylePlaylists.css"/>
        <title>Playlists</title>
    </head>
    <body>
        <header></header>
        <section>
            <div class="container">
                <div class="styleButtons">
                    <div class="">
                        <table>
                            <tr>
                                <td>Nome</td>
                                <td>Descrição</td>
                            </tr>
                            <?php require_once '../results/TablePlaylists.php'; ?>
                        </table>
                    </div>
                    
                    <div class="">
                        <a href="novaPlaylist.php"><button type="button">Nova playlist</button></a>
                    </div>
                </div>
                
                <div class="styleButtons">
                    <div class="">
                        <table>
                            <tr>
                                <td>Nome</td>
                                <td>Artista</td>
                                <td>Instrumento</td>
                                <td>Idioma</td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="">
                        <a href="telaInicial.php"><button type="button">Editar playlist</button></a>
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
