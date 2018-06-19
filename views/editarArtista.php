<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href='../assets/images/logo.png'/>
        <link rel="stylesheet" type="text/css" href='../assets/css/styleEditarArtista.css'/>
        <title>Editar artista</title>
    </head>
    <body>
        <header></header>
        <section>
             <?php require_once '../results/FormEdicao.php';
                $resultado = getFormEditaArtista();
            ?>
            <div class="container">
                <form method="post" action="../controllers/ArtistaController.php">
                    <input type='text' hidden name='cod' value='<?php echo $resultado['art_cod']?>'/>
                    <label>Nome:</label><input type="text" name="nome" required value='<?php echo $resultado['art_nome']?>'/><br/>
                    <label>Estilo:</label><input type="text" name="estilo" required value='<?php echo $resultado['art_estilo']?>'/><br/>
                    <button type="submit" name="artistaController" value="Atualizar">Atualizar</button>
                    <button type="submit" name="artistaController" value="Excluir">Excluir</button>
                    <a href="adicionarMusica.php"><button type="button">Cancelar</button></a>
                </form>
            </div>
        </section>
        <footer></footer>
    </body>
</html>
