<?php
include_once 'handler.php'; // comprovem si el usuari esta autoritzat

// si ho esta redireccionem a la pagina principal
if($user) {
header ('Location: index.php');
exit();
}

if(!empty($_POST['login']) AND !empty($_POST['password']))
{
 // filtrem login i contrasenya
 $login = mysql_real_escape_string(htmlspecialchars($_POST['login']));
 $password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
 
	$search_user = mysql_result(mysql_query("SELECT COUNT(*) FROM `users_profiles` WHERE `username` = '".$login."' AND `password` = '".md5($password)."'"), 0);
	if($search_user == 0)
	{
		echo 'L\'usuari no trobat o les dades no son correctes.';
		exit();
	}
	else
	{
	    // guardem login i contrasenya en cokies
		$time = 60*60*24; // temp que ho vam guardar
		setcookie('username', $login, time()+$time, '/');
		setcookie('password', md5($password), time()+$time, '/');
		header ('Location: #');
		exit();
	}
}
echo '
<form action="login.php" method="POST">
Login:<br />
<input name="login" type="text" /><br />
Contrasenya:<br />
<input name="password" type="password" /><br />
<input type="submit" value="Login" />
</form>';
?>
