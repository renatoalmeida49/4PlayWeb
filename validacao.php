<?php

require "controller/config.php";

$sql = "select * from users where use_log='".$_POST['login']."' and use_senha='".$_POST['senha']."'";
$resultset = $pdo->query($sql);

if ($resultset->rowCount() > 0) {

	$cod = $resultset->fetch();

	$_SESSION['id'] = $cod['use_cod'];

	header("Location: views/telainicial.php");

} else {
	echo "User not found";
}