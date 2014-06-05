<?php
	include_once("db_connect.php");

	$id = $_GET['id'];
	$table = $_GET['table'];
	$id_shed = $_GET['id_shed'];

	switch ($table) {
		case 'shedule':
			$reply = mysql_query("DELETE FROM shedule WHERE id_line=$id_shed", $connect);
		break;

		case 'tasks':
			$reply = mysql_query("DELETE FROM tasks WHERE id_task=$id", $connect);
		break;

		case 'students':
				$reply = mysql_query("DELETE FROM students WHERE id_student=$id", $connect);
		break;
	}

	header('Location: ../administrator.php');
?>