<?php
class Database {
	private static $pdo;

	public static function getInstance() {
		if (!isset($pdo)) {
			global $config;

			try {
				$pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
			} catch (PDOException $e) {
				echo "ERRO: ".$e->getMessage();
				exit;
			}
		}

		return $pdo;
	}

	private function __construct(){}
}