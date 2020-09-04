<?php
namespace src\controllers;

use core\Controller;
use src\handlers\UserHandler;

class SettingsController extends Controller {

	private $loggedUser;

	public function __construct() {
		$this->loggedUser = UserHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
	}

	public function index() {
		$user = UserHandler::getUser($this->loggedUser->id);

        $flash = '';

        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $this->render('settings', [
            'loggedUser' => $this->loggedUser,
            'user' => $user,
            'flash' => $flash
        ]);
    }
    
    public function action() {
        $name = filter_input(INPUT_POST, 'name');
        $login = filter_input(INPUT_POST, 'login');
        $password = filter_input(INPUT_POST, 'password');
        $repeatPassword = filter_input(INPUT_POST, 'repeatPassword');

        if($password != $repeatPassword) {
            $_SESSION['flash'] = 'Senhas digitadas não conferem.';
            $this->redirect('/settings');
        }

        if (!UserHandler::validateUpdateLogin($login, $this->loggedUser->id)) {
            $_SESSION['flash'] = 'Login já cadastrado';
            $this->redirect('/settings');
        }

        $update['name'] = $name;
        $update['login'] = $login;
        $update['password'] = $password;
        $update['id'] = $this->loggedUser->id;

        $update = UserHandler::update($update);

        $_SESSION['flash'] = "Dados atualizados";
        $this->redirect('/settings');
    }

}