<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/stylePlaylists.css"/>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
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
                    <div class="tableMusicasPlaylist" >
                        <table class="tableConfig" id='tableMusicasPlaylist'>
                            <tr class="colunas">
                                <td>Nome</td>
                                <td>Artista</td>
                                <td>Instrumento</td>
                                <td>Idioma</td>
                            </tr>
                            <?php
                            if (isset($_GET['id'])){
                                require_once '../results/TablePlaylist.php';
                                musicasPlaylist($_GET['id']);
                            }
                            ?>
                        </table>
                    </div>
                    
                    <div class="buttonFooter" id="buttonFooter">
                        <?php
                        if (isset($_GET['id'])){
                            echo '<a href="editarPlaylist.php?id='.$_GET['id'].'"><button>Editar</button></a>';
                        }
                        ?>
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
