<?php
	//файл с процедурой подключения к базе данных
	include_once ("db_connect.php");

	function Login($login, $psw)
	{
		//получение из базы данных логина и пароля
		$login_data = mysql_query("SELECT * FROM admin_data");
		$login_data = mysql_fetch_array($login_data);
		
		//сравнение полученных логина и пароля с полученными из базы данных
		if (($login != $login_data['login']) || ($psw != $login_data['password']))
			return false;

		//установка данных текущей сессии
		$_SESSION["login"]=$login;
		$_SESSION["password"] = $psw;
		return true;
	}

	//выход из сессии
	function Logout()
	{
		unset($_SESSION["login"], $_SESSION["password"]);
	}

	session_start();

	//сброс авторизации при входе на страницу login.php
	$enter_site = false;
	Logout();

	//процедура авторизации
	if ($_POST)
		$enter_site = Login($_POST["login"], $_POST["password"]);

	//перенаправление на страницу администрирования в случае прохождения авторизации
	if ($enter_site)
	{
		header("Location: ../admin.php");
		exit();
	}

	//пользователь остается на той же странице в случае некорректного ввода пароля и/или логина
	else{
		header("Location: ../login.php");
		exit();
	}
?>