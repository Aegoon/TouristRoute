<?php
include_once 'handler.php'; // comprovem si el usuari esta autoritzat

// comprovem l'autoritzacio d'usuari
 if($user) {
 setcookie('username', '', time()-1, '/');
 setcookie('password', '', time()-1, '/');
 session_destroy();
 echo 'Ha entrat amb exit!';
 } else {
  echo 'Ha de fer login.';
 }
?>
