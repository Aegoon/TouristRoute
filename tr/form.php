<?php
include_once 'handler.php'; // comprovem si l'usuari esta autoritzat

if($user) {
// mostrar informació per a usuari
echo 'hi, <b>'.$user['username'].'</b>!<br />
- <a href="exit.php">Sortir</a><br />
';
} else {
// mostrar informació per a visitant
echo '
<form action="login.php" method="POST">
Login:<br />
<input name="login" type="text" /><br />
Contrasenya:<br />
<input name="password" type="password" /><br />
<input type="submit" value="Login" />
</form>
<a href="register.php">Registrarse</a><br />
';
}
?>
