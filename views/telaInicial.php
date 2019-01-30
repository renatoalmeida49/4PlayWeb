<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="imagem/png" href="../assets/images/logo.png" />
        <!-- <link rel="stylesheet" type="text/css" href="../assets/css/styleTelaInicial.css"> -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<title>Tela inicial</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #6c757d">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="">Opções</a>
                    <a class="nav-item nav-link" href="../index.php">Sair</a>
                </div>
            </nav>
            
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="h3">4Play - Bem vindo, <?php echo "{$_SESSION['use_nome']}"?></div>
                </div>
            </div>
            
            <hr/>
            
            <div class="row align-items-center justify-content-center">
                <div class="col-2">
                    <a href="suasMusicas.php" class="btn btn-success">Suas músicas</a>
                </div>
                <div class="col-3">
                    <img src="../assets/images/logo.png" width="200" height="200" />
                </div>
                <div class="col-2">
                    <a href="playlists.php" class="btn btn-success">Playlists</a>
                </div>
            </div>
            
            <hr/>
            
            <div class="row justify-content-center">
                <div class="col-6">
                    <img src="../assets/images/music-composition-symbols.png" class="img-fluid" />
                </div>
            </div>
        </div>
    </body>
</html>