<?php
mysql_connect('localhost', 'oleksandr', '0310') or die('Error de conexio amb MySQL!');
mysql_select_db('wordpress') or die ('Error de conexio amb base de dades MySQL!');
mysql_query('SET NAMES `utf8`');

?>
