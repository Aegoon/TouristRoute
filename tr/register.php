<?php
include_once 'handler.php'; // comprovem si l'usuari esta autoritzat

// si ho està, redireccionem a la pàgina principal
if($user) {
header ('Location: index.php');
exit();
}

if (!empty($_POST['login']) AND !empty($_POST['password']))
{
 // fem filtre de login i contrasenya
 $login = mysql_real_escape_string(htmlspecialchars($_POST['login']));
 $password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
 
 // comprovem si login està en nostre base de dades
	if (mysql_result(mysql_query("SELECT COUNT(*) FROM `users_profiles` WHERE `username` = '".$login."' LIMIT 1;"), 0) != 0)
	{
		echo 'El login ja esta registrat!';
		exit();
	}
 // insertem dades en la taula (contrasenya en format md5)
	mysql_query("INSERT INTO `users_profiles` (`username`, `password`) VALUES ('".$login."', '".md5($password)."')");
    echo 'S\'ha registrat amb èxit!';
	exit();
}
 // forma de registració
echo '
<form action="register.php" method="POST">
Login:<br/>
<input name="login" type="text" value="" /><br/>
Contrasenya:<br/>
<input name="password" type="text" value="" /><br/>
<input type="submit" value="Registrarse" />
</form>';
?>
