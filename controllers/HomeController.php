<?php
class HomeController extends Controller {
	public function index() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			$dados = array();

			$this->loadTemplate('home', $dados);
		} else if (isset($_POST['login']) && !empty($_POST['login'])) {
			$dao = new UsuarioDAOMySQL(Database::getInstance());

			$usuario = new Usuario();
			$usuario->setLogin($_POST['login']);
			$usuario->setSenha($_POST['password']);

			$usuario = $dao->selectByLogin($usuario);

			if ($usuario->getId() != 0) {
				$_SESSION['id'] = $usuario->getId();
				$_SESSION['login'] = $usuario->getLogin();

				$this->loadTemplate('home', $dados);
			} else {
				$this->loadLoginTemplate();
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