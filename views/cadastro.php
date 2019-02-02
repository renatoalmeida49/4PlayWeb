<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="imagem/png" href="../assets/images/logo.png" />
	<!-- <link rel="stylesheet" type="text/css" href="../assets/css/styleCadastro.css"> -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="../assets/script/bootstrap.min.js"></script>
	<title>Cadastro de usuário</title>
    </head>
    
    <body>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 5px">
                <div class="col-1">
                    <img src="../assets/images/logo.png" width="40" height="40"/>
                </div>
                <div class="col-4">
                    <div class="h1">Cadastrar usuário</div>
                </div>
            </div>
        
            <div class="row justify-content-center">
                <form method="post" action="../controllers/UserController.php">
                    <div class="form-group">
                        <label for="nome">Nome:</label><input class="form-control" required id="nome" type="text" name="nome"/><br/>
                        <label for="login">Login:</label><input class="form-control" required id="login" type="text" name="login"/><br/>
                        <label for="password">Senha:</label><input class="form-control" required id="password" type="password" size="32" name="senha"/><br/>
                        <label for="repeatPassword">Repita senha:</label><input class="form-control" required id="repeatPassword" type="password" size="32" name="confSenha"/><br/>
                    </div>
                    
                    <div class="form-row">
                        <div class="col">
                            <button class="btn btn-success form-control" id="botao" name="userControl" value="Cadastrar" type="submit">Cadastrar</button>
                        </div>
                        <div class="col">
                            <a href="../index.php" class="btn btn-success form-control">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>    
    </body>
</html>