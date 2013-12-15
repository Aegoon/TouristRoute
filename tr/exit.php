<?php
include_once 'handler.php'; // comprovem si l'usuari esta autoritzat

// comprovem l'autoritzacio d'usuari
if($user) {
	setcookie('username', '', time()-1, '/');
	setcookie('password', '', time()-1, '/');
	header('Location: index.php');
	session_destroy();
} else {
	echo 'Ha de fer login.';
}
?>
