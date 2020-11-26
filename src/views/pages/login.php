<!DOCTYPE html>
<html>
    <head>
	   <meta charset="utf-8" />
       <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
       <link rel="icon" type="imagem/png" href="<?=$base;?>/assets/images/logo.png" />
       <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap.min.css" />
       <link rel="stylesheet" href="<?=$base;?>/assets/css/styleLogin.css"/>
	   <title>4Play</title>
    </head>
    
    <body class="text-center bg-dark">
        <form class="form-singin" method="POST" action="<?=$base;?>/login">
            <img src="<?=$base;?>/assets/images/logo.png" class="mb-4" width="90" height="90"/>
            <h1 class="mb-3">4Play</h1>
            <?php if(!empty($flash)): ?>
                <div class="flash"><?php echo $flash; ?></div>
            <?php endif; ?>
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
                    <form method="POST" action="<?=$base;?>/login/singUp">
                        <div class="modal-header">
                            <h2>Cadastro</h2>
                            <button class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>

                        <div class="modal-body">
                            <label for="nameSingUp">Nome:</label>
                            <input class="form-control" required id="nameSingUp" type="text" name="nameSingUp"/>

                            <label for="loginSingUp">Login:</label>
                            <input class="form-control" required id="loginSingUp" type="text" name="loginSingUp"/>

                            <label for="passwordSingUp">Senha:</label>
                            <input class="form-control" required id="passwordSingUp" type="password" size="32" name="passwordSingUp"/>

                            <label for="repeatPassword">Repita senha:</label>
                            <input class="form-control" required id="repeatPassword" type="password" size="32" name="repeatPassword"/>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-success form-control" type="submit">Cadastrar</button>
                            <button class="btn btn-sucess" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="<?=$base;?>/assets/script/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?=$base;?>/assets/script/bootstrap.min.js"></script>
    </body>
</html>