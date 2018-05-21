<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="assets/js/script.js"></script>
		<title>Cadastro de usuário</title>
	</head>
	<body>
		<div class="login cadastro">
				<form method="POST" action="adicionar.php" onsubmit="return validaCampos();">
					Nome:
					<br><input type="text" name="nome" id="nome" class="form-control"><br><br>
					Login:
					<br><input type="text" name="login" id="login" class="form-control"><br><br>
					Senha:
					<br><input type="password" name="senha" id="senha" class="form-control"><br><br>
					Repita a senha:
					<br><input type="password" name="senha" id="confirmaSenha" class="form-control"><br>

					<br><input type="submit" value="Criar" class="button cad">

					<a href="index.php"><input type="button" value="Cancelar" class="button cad" onclick=""></a>
				</form>
			</div>
	</body>
	</html>