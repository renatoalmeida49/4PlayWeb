<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/png" href='../assets/images/logo.png'/>
        <!-- <link rel="stylesheet" type="text/css" href='../assets/css/styleEditarArtista.css'/> -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="../assets/script/bootstrap.min.js"></script>
        <title>Editar artista</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 5px">
                <div class="col-1">
                    <img src="../assets/images/logo.png" width="40" height="40"/>
                </div>
                <div class="col-4">
                    <div class="h1">Editar artista</div>
                </div>
            </div>
            
            <hr/>
            
            <?php require_once '../results/FormEdicao.php';
                $resultado = getFormEditaArtista();
            ?>
            
            <form method="post" action="../controllers/ArtistaController.php">
                <div class="form-group">
                    <input type='text' hidden name='cod' value='<?php echo $resultado['art_cod']?>'/>
                    <label for="nome">Nome:</label><input id="nome" class="form-control" type="text" name="nome" required value='<?php echo $resultado['art_nome']?>'/><br/>
                    <label for="estilo">Estilo:</label><input id="estilo" class="form-control" type="text" name="estilo" required value='<?php echo $resultado['art_estilo']?>'/><br/>
                </div>

                <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-success form-control" name="artistaController" value="Atualizar">Atualizar</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-success form-control" name="artistaController" value="Excluir">Excluir</button>
                    </div>
                    <div class="col">
                        <a href="adicionarMusica.php" class="btn btn-success form-control">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
