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
            
            <hr/>
        
            <form method="post" action="../controllers/ArtistaController.php" style="margin-bottom: 10px">
                <div class="form-group">
                    <label for="nome">Nome:</label><input id="nome" class="form-control" type="text" name="nome" required/>
                    <label for="estilo">Estilo:</label><input id="estilo" class="form-control" type="text" name="estilo" required/>
                </div>

                <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-success form-control" name="artistaController" value="Adicionar">Adicionar</button>
                    </div>
                    <div class="col">
                        <a href="adicionarMusica.php" class="btn btn-success form-control">Cancelar</a>
                    </div>
                </div>
            </form>
                
            <div class="row justify-content-center">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="thead-light">
                            <th>Nome</th>
                            <th>Estilo</th>
                        </thead>
                        <tbody>
                            <?php require_once '../results/TableArtistas.php'; 
                                tableSeusArtistas();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row justify-content-center" style="margin-top: 5px">
                <div class="h5">Selecione um artista na tabela para editar ou excluir.</div>
            </div>
        </div>
    </body>
</html>
