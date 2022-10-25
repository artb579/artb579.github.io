<?php
	define('DB_HOST', '127.0.0.1');
	// define('DB_PORT', '3306');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'test_check');


	$mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if ($mysql->connect_errno) exit('ошибка подключ бд');
	// $mysql->set_charser('utf8');
	$mysql->close();
?>