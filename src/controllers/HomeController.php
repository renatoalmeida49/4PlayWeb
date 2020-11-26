<?php
namespace src\controllers;

use core\Controller;
use src\handlers\UserHandler;
use src\handlers\MusicHandler;

class HomeController extends Controller {

	private $loggedUser;

	public function __construct() {
		$this->loggedUser = UserHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
	}

	public function index() {
		$dados = array();

		$feed = MusicHandler::getMusics($this->loggedUser->id);

		$this->render('home', [
			'feed' => $feed,
			'loggedUser' => $this->loggedUser
		]);
	}

}