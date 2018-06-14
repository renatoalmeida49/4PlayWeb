<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
	<meta charset="utf-8" />
        <link rel="icon" type="imagem/png" href="../assets/images/logo.png" />
        <link rel="stylesheet" type="text/css" href="../assets/css/styleTelaInicial.css">
	<title>Tela inicial</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="menubar">
                    <a href="">Opções</a>
                    <a href="../index.php">Sair</a>
                </div>
            </div>
        </header>
        <section>
            <div class="container sec">
                <div class="topo">
                    <div class="nome">4Play</div>
                    <div class="hellouser">(user here)</div>
                </div>
                
                <div class="bot">
                    <a href="suasMusicas.php"><button id="botao" type="button">Suas músicas</button></a>
                    <img src="../assets/images/logo.png" width="200" height="200" />
                    <a href="playlists.php"><button id="botao" type="button">Playlists</button></a>
                </div>
            </div>
        </section>
        <footer>
            <div class="container sec">
                <img src="../assets/images/music-composition-symbols.png" width="100%" height="500" />
            </div>
        </footer>
    </body>
</html>