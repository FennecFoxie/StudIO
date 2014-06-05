<?php
	include_once("db_connect.php");
	//получение из базы данных информации о заданиях
	$result = mysql_query("SELECT * FROM tasks /*WHERE date<date(y:m:d)*/", $connect);
	//преобразование массива
	$tasks = mysql_fetch_array($result);
	
	//вывод информации 
	echo "<table  id='tasks'><tbody>";
	do{
		$id =$tasks['id_subject'];
		$subject = mysql_query("SELECT * FROM subject WHERE id_subject=$id", $connect);
		$subject_name=mysql_fetch_array($subject);
		echo "<tr '><td value='".$tasks['id_task']."'>".$tasks['id_task']."</td>".
				 "<td>".$tasks['deadline']."</td>".
				 "<td>".$subject_name['name']."</td>".
				 "<td>".$tasks['task']."</td><tr>";
	}
	while($tasks = mysql_fetch_array($result)); 
	echo "</tbody></table>";
?>