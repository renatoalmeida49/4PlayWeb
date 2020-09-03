<?php
namespace src\controllers;

use core\Controller;
use src\handlers\UserHandler;

class SuasMusicasController extends Controller {

	private $loggedUser;

	public function __construct() {
		$this->loggedUser = UserHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
	}

	public function index() {
		$dados = array();

		$this->render('suasMusicas', [
			'loggedUser' => $this->loggedUser
		]);
	}

}