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

		$this->render('adicionarMusica', [
			'loggedUser' => $this->loggedUser
		]);
	}

	public function add() {
		$add = array();

		$add['idUser'] = $this->loggedUser->id;
		$add['nome'] = filter_input(INPUT_POST, 'nome');
		$add['artista'] = filter_input(INPUT_POST, 'artista');
		$add['tipo']  = filter_input(INPUT_POST, 'tipo');
		$add['capotraste'] = filter_input(INPUT_POST, 'capotraste');
		$add['instrumento']  = filter_input(INPUT_POST, 'instrumento');
		$add['idioma']  = filter_input(INPUT_POST, 'idioma');
		$add['letra']  = filter_input(INPUT_POST, 'letra');

		MusicHandler::addMusic($add);

		$this->redirect('/');
	}

}