<?php
	//установка параметров подлючения к базе данных
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "studio";

	//осуществление подключения к серверу
	$connect = mysql_connect($host, $user, $password) or die("MySQL сервер недоступен".mysql_error());
	// установка кодировки
	mysql_query("SET NAMES 'cp1251';");
	//выбор базы данных
	mysql_select_db($db) or die("Нет доступа к базе данных".mysql_error());
?>