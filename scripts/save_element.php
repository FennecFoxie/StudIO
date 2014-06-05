<?php
	include_once("db_connect.php");

	switch($_GET['table_name']){
		case 'shedule':{
			$id_day = $_GET['day'];
			$id_time = $_GET['time'];
			$subject = $_GET['subject'];
			$tutor = $_GET['tutor'];
			$room = $_GET['room'];

			$subject = mysql_query("SELECT * FROM subject WHERE name='$subject'", $connect);
			$subject = mysql_fetch_array($subject);

			$id_subject=$subject['id_subject'];

			$reply = mysql_query("INSERT INTO shedule
																(id_days, id_subject, group_num, room, id_time) 
															VALUES
																('$id_day', '$id_subject', '1', '$room', '$id_time')", $connect);
		}
		break;

		case 'tasks':{
			$deadline = $_GET['deadline']; 
			$subject = $_GET['subject'];
			$task = $_GET['task'];

			echo "$deadline";

			$subject = mysql_query("SELECT * FROM subject WHERE name='$subject'", $connect);
			$subject = mysql_fetch_array($subject);

			$id=$subject['id_subject'];

			$reply = mysql_query("INSERT INTO tasks
																(deadline, id_subject, task) 
															VALUES
																('$deadline', '$id', '$task')", $connect);
		}
			
			break;

		case 'group':{
				$name = (string)$_GET['name'];
				$surname = (string)$_GET['surname'];
				$patronymic_name = (string)$_GET['patronymic_name'];
				$phone = (string)$_GET['phone'];
				$email = (string)$_GET['email'];
				$group = (string)$_GET['group'];

				$reply = mysql_query("INSERT INTO students
																(name, surname, patronymic_name, phone, status, email, group_id) 
															VALUES
																('$name', '$surname', '$patronymic_name', '$phone', 'student', '$email', '$group')", $connect);
		}
			break;
	}


	if($reply)
				$result = mysql_insert_id();
			else
				$result = FALSE;
	header('Location: ../administrator.php');
?>