<?php
class HomeController extends Controller {
	public function index() {
		$dados = array();
		
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			$this->loadTemplate('home', $dados);
		} else if (isset($_POST['login']) && !empty($_POST['login'])) {
			$dao = new UsuarioDAOMySQL(Database::getInstance());

			$usuario = new Usuario();
			$usuario->setLogin($_POST['login']);
			$usuario->setPassword($_POST['password']);

			$usuario = $dao->selectByLogin($usuario);

			if ($usuario->getId() != 0) {
				$_SESSION['id'] = $usuario->getId();
				$_SESSION['login'] = $usuario->getLogin();
				$_SESSION['nome'] = $usuario->getNome();

				$this->loadTemplate('home', $dados);
			} else {
				$this->loadLoginTemplate();
			}
		} else if (isset($_POST['loginCadastro']) && !empty($_POST['loginCadastro'])) {
			if ($_POST['passwordCadastro'] == $_POST['repeatPassword']) {
				$dao = new UsuarioDAOMySQL(Database::getInstance());

				$usuario = new Usuario();

				$usuario->setNome($_POST['nomeCadastro']);
				$usuario->setLogin($_POST['loginCadastro']);
				$usuario->setPassword($_POST['passwordCadastro']);

				if ($dao->insert($usuario)) {
					header("Location: ".BASE_URL);
				} else {
					echo "Falha ao adicionar usuário.";
				}
			} else {
				echo "Senhas digitadas não conferem";
			}
		} else {
			$this->loadLoginTemplate();
		}
	}

	public function erro404() {
		echo "Page not found, mate";
	}

	public function sair() {
		session_start();
		unset($_SESSION['id']);
		unset($_SESSION['login']);

		header("Location: ".BASE_URL);
	}
}