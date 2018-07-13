<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/styleAdicionarArtista.css"/>
        <title>Adicionar artista</title>
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
            <div class="container column">
                <div class="form">
                    <form method="post" action="../controllers/ArtistaController.php">
                        <label>Nome:</label><input type="text" name="nome" required/><br/>
                        <label>Estilo:</label><input type="text" name="estilo" required/><br/>
                        
                        <div class="buttonForm">
                            <button type="submit" class="buttonFooterForm" name="artistaController" value="Adicionar">Adicionar</button>
                            <a href="adicionarMusica.php"><button type="button" class="buttonFooterForm">Cancelar</button></a>
                        </div>
                    </form>
                </div>
                
                <div class="table">
                    <table class="tabelaArtistas">
                        <tr class="colunas">
                            <td>Nome</td>
                            <td>Estilo</td>
                        </tr>
                        <?php require_once '../results/TableArtistas.php'; 
                            tableSeusArtistas();
                        ?>
                    </table>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                Selecione um artista na tabela para editar ou excluir.
            </div>
        </footer>
    </body>
</html>
