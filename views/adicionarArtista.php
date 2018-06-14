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
        <header></header>
        <section>
            <form method="post" action="../controllers/ArtistaController.php">
                <label>Nome:</label><input type="text" name="nome" required/><br/>
                <label>Estilo:</label><input type="text" name="estilo" required/><br/>
                <button type="submit" name="artistaController" value="Adicionar">Adicionar</button>
                <a href="adicionarMusica.php"><button type="button">Cancelar</button></a>
            </form>
            
            <table>
                <!-- Tabela com a consulta no BD dos artistas -->
            </table>
        </section>
        <footer></footer>
    </body>
</html>
