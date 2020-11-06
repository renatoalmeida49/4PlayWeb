<?php
namespace src\controllers;

use core\Controller;
use src\handlers\UserHandler;

class LoginController extends Controller {

	private $loggedUser;

	public function index() {
        $flash = '';
        
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

		$this->render('login', [
			'flash' => $flash
		]);
    }
    
    public function singIn() {
        $login = filter_input(INPUT_POST, 'login');
        $password = filter_input(INPUT_POST, 'password');

        if($login && $password) {
            $token = UserHandler::verifyLogin($login, $password);

            if($token) {
                $_SESSION['token'] = $token;
                $this->redirect('/');
            } else {
                $_SESSION['flash'] = 'E-mail e/ou senha não conferem';
                $this->redirect('/login');
            }
        } else {
            $_SESSION['flash'] = 'Algo errado com login ou senha';
            $this->redirect('/login');
        }
    }

    public function singUp() {
        $name = filter_input(INPUT_POST, 'nameSingUp');
        $login = filter_input(INPUT_POST, 'loginSingUp');
        $password = filter_input(INPUT_POST, 'passwordSingUp');
        $repeat = filter_input(INPUT_POST, 'repeatPassword');
    
        if($password == $repeat) {
            if (UserHandler::loginExists($login) == false) {
                $token = UserHandler::addUser($name, $login, $password);
                $_SESSION['token'] = $token;
                $this->redirect('/');
            } else {
                $_SESSION['flash'] = 'E-mail já cadastrado';
                $this->redirect('/login');
            }
        } else {
            $_SESSION['flash'] = 'Senhas digitadas não conferem';
            $this->redirect('/login');
        }
    }

    public function logout() {
        $_SESSION['token'] = '';
        $this->redirect('/login');
    }
}