<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <!-- <link rel="stylesheet" type="text/css" href="../assets/css/styleAdicionarArtista.css"/> -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
        <title>Adicionar artista</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 5px">
                <div class="col-1">
                    <img src="../assets/images/logo.png" width="40" height="40"/>
                </div>
                <div class="col-4">
                    <div class="h1">Adicionar artista</div>
                </div>
            </div>
        
            <div class="row justify-content-center">
                <form method="post" action="../controllers/ArtistaController.php">
                    <div class="form-group">
                        <label for="nome">Nome:</label><input id="nome" class="form-control" type="text" name="nome" required/><br/>
                        <label for="estilo">Estilo:</label><input id="estilo" class="form-control" type="text" name="estilo" required/><br/>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="artistaController" value="Adicionar">Adicionar</button>
                        <a href="adicionarMusica.php" class="btn btn-success">Cancelar</a>
                    </div>
                </form>
            </div>
                
            <div class="row">
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

            <div class="row">
                Selecione um artista na tabela para editar ou excluir.
            </div>
        </div>
    </body>
</html>
