<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8" />
        <link rel="icon" type="imagem/png" href="../assets/images/logo.png" />
	<link rel="stylesheet" type="text/css" href="../assets/css/styleCadastro.css">
	<title>Cadastro de usuário</title>
    </head>
    
    <body>
        <header>
            <div class="container">
                <div class="nome">
                    <h1>Cadastrar usuário</h1>
                </div>
            </div>
        </header>
            
        <section>
            <div class="container">
                <div class="formulario">
                    <form method="post" action="../controllers/UserController.php">
                        <label>Nome:</label><input type="text" name="nome"/><br/>
                        <label>Login:</label><input type="text" name="login"/><br/>
                        <label>Senha:</label><input type="password" size="32" name="senha"/><br/>
                        <label>Repita senha:</label><input type="password" size="32" name="confSenha"/><br/>
                            
                        <div class="footerform">
                            <div class="buttons">
                                <button id="botao" name="userControl" value="Cadastrar" type="submit">Cadastrar</button><a href="../index.php"><button id="botao" type="button">Cancelar</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
            
        <footer>
                
        </footer>
    </body>
</html>