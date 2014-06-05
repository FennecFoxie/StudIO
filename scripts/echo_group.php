
<?php
	
	include_once ("db_connect.php");

	function print_line($arr){
		echo "<tr class='highlight'><td>".$arr['id_student']."</td>".
				 "<td>".$arr['surname']." ".$arr['name']." ".$arr['patronymic_name']."</td>".
				 "<td>".$arr['phone']."</td>".
				 "<td>".$arr['email']."</td><tr>";
	}

	$result = mysql_query("SELECT * FROM students", $connect);
	$students = mysql_fetch_array($result);
	
	echo "<table id='list';>";
	do{
		print_line($students);
	}
	while($students = mysql_fetch_array($result));
	echo "</table>";
?> 
