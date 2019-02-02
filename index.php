<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="imagem/png" href="assets/images/logo.png" />
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/styleIndex.css" /> -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="assets/script/bootstrap.min.js"></script>
	<title>4Play</title>
    </head>
    
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <h1>4Play</h1>
            </div>
            
            <hr/>
            
            <div class="row justify-content-center">
                <img src="assets/images/logo.png" class="img-fluid"/>
            </div>
            
            <hr/>
            
            <div class="row justify-content-center">
                <form method="post" action="controllers/UserController.php">
                    <div class="form-group">
                        <label for="login">Login:</label><input autofocus required id="login" class="form-control" type="text" name="login"/></br>
                        <label for="password">Senha:</label><input required id="password" class="form-control" type="password" size="32" name="senha"/></br>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <button class="btn btn-success form-control" style="margin-bottom: 5px" id="botao" type="submit" value="Acessar" name="userControl">Acessar</button>
                        </div>
                        <div class="col">
                            <a href="views/cadastro.php" class="btn btn-success form-control">Criar login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>