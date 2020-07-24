<?php
class Controller {
	public function loadTemplate($viewName, $ViewDados = array()) {
		require 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

	public function loadLoginTemplate() {
		require 'views/login.php';
	}
}