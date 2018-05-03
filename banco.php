<?php

$dsn = "mysql:dbname=4Play;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "Falha ao conectar. ".$e->getMessage();
}

?>