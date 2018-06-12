<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8" />
        <link rel="icon" type="imagem/png" href="assets/images/logo.png" />
	<link rel="stylesheet" type="text/css" href="assets/css/styleIndex.css" />
	<title>4Play</title>
    </head>
    
    <body>
        <header>
            <div class="container">
                <div class="nome">
                    <h1>4Play</h1>
                </div>
            </div>
        </header>
        
        <section>
            <div class="container sec">
                <div class="logo">
                    <img src="assets/images/logo.png" width="300" height="300"/>
                </div>
                
                <div class="formulario">
                    <form method="post" action="controllers/UserController.php">
                        <label>Login:</label><input type="text" name="login"/></br>
                        <label>Senha:</label><input type="password" size="32" name="senha"/></br>
                        
                        <div class="footerform">
                            <div class="buttons">
                                <button id="botao" type="submit" value="Acessar" name="userControl">Acessar</button><a href="views/cadastro.php"><button id="botao" type="button">Criar login</button></a>
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