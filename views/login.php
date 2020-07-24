<!DOCTYPE html>
<html>
    <head>
	   <meta charset="utf-8" />
       <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
       <link rel="icon" type="imagem/png" href="<?php echo BASE_URL; ?>assets/images/logo.png" />
       <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
       <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/styleLogin.css"/>
	   <title>4Play</title>
    </head>
    
    <body class="text-center">
        <form class="form-singin" method="POST">
            <img src="<?php echo BASE_URL; ?>assets/images/logo.png" class="mb-4" width="90" height="90"/>
            <h1 class="mb-3">4Play</h1>
            <label for="login" class="sr-only">Login</label>
            <input autofocus required id="login" class="form-control" type="text" name="login" placeholder="Login" />
            <label for="password" class="sr-only">Senha</label>
            <input required id="password" class="form-control" type="password" size="32" name="password" placeholder="Senha" />

            <button class="btn btn-block btn-lg mb-3 btn-success margin" type="submit">Acessar</button>

            <a href="#modalCadastro" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastro">Criar login</a>
        </form>

        <div id="modalCadastro" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form method="POST">
                        <div class="modal-header">
                            <h2>Cadastro</h2>
                            <button class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/script/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/script/bootstrap.min.js"></script>
    </body>
</html>