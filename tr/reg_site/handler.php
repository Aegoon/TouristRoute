<?php
include_once 'db_connect.php'; // comprovem la conexio a base de dades

// comprovem si login i contrasenya estan en cookies
if(!empty($_COOKIE['username']) AND !empty($_COOKIE['password']))
{
 // busquem usuari en la taula users_profiles, mysql_real_escape_string utilitzem per defensar de sql injection
 $search_user = mysql_query("SELECT * FROM `users_profiles` WHERE `username` = '".mysql_real_escape_string($_COOKIE['username'])."' AND `password` = '".mysql_real_escape_string($_COOKIE['password'])."'");
 $user = (mysql_num_rows($search_user) == 1) ? mysql_fetch_array($search_user) : 0;
}
else
{
 $user = 0;
}
?>
