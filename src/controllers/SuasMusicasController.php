<?php
namespace src\controllers;

use core\Controller;
use src\handlers\UserHandler;
use src\handlers\MusicHandler;

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

		$feed = MusicHandler::getMusics($this->loggedUser->id);

		$this->render('suasMusicas', [
			'feed' => $feed,
			'loggedUser' => $this->loggedUser
		]);
	}

	public function add() {
		$add = array();

		$add['idUser'] = $this->loggedUser->id;
		$add['nome'] = filter_input(INPUT_POST, 'name');
		$add['artista'] = filter_input(INPUT_POST, 'artist');
		$add['capotraste'] = filter_input(INPUT_POST, 'capotraste');
		$add['instrumento']  = filter_input(INPUT_POST, 'instrumento');

		MusicHandler::addMusic($add);

		$this->redirect('/suasMusicas');
	}

	public function editar($attr = []) {
		$id = $attr['id'];
		
		if(!MusicHandler::verifyCredentials($id, $this->loggedUser->id)) {
			$this->redirect('/');
		}

		$music = MusicHandler::getMusic($id);

		$this->render('music', ['music' => $music]);
	}

	public function editarAction($attr = []) {
		$id = $attr['id'];
	}

	public function excluir($attr = []) {
		$id = $attr['id'];
	}

}