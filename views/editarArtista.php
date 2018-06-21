<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href='../assets/images/logo.png'/>
        <link rel="stylesheet" type="text/css" href='../assets/css/styleEditarArtista.css'/>
        <title>Editar artista</title>
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
            <?php require_once '../results/FormEdicao.php';
                $resultado = getFormEditaArtista();
            ?>
            <div class="container">
                <form method="post" action="../controllers/ArtistaController.php">
                    <input type='text' hidden name='cod' value='<?php echo $resultado['art_cod']?>'/>
                    <label>Nome:</label><input type="text" name="nome" required value='<?php echo $resultado['art_nome']?>'/><br/>
                    <label>Estilo:</label><input type="text" name="estilo" required value='<?php echo $resultado['art_estilo']?>'/><br/>
                    
                    <div class="buttonForm">
                        <button type="submit" class="buttonFooterForm" name="artistaController" value="Atualizar">Atualizar</button>
                        <button type="submit" class="buttonFooterForm" name="artistaController" value="Excluir">Excluir</button>
                    </div>
                </form>
            </div>
        </section>
        <footer>
            <div class="container">
                <a href="adicionarMusica.php"><button class="buttonFooterForm" type="button">Cancelar</button></a>
            </div>
        </footer>
    </body>
</html>
