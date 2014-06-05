<meta charset="windows-1251"/>
	<?php

	echo "<table  id='shedule'>".
	"<tbody>";
		include_once('scripts/db_connect.php');
			//ГϠВϰГϡвϐϤГϠВϰГϡвϐϲГϠВϰГϒВЋГϠВϱГϡвϐϬГϠВϱГϲвϒϼВϱГϠВϰГϒВЅГϠВϰГϠвϐ϶ГϠВϰГϡвϐГϠВϰГϒВЅ ГϠВϰГϡвϐ ГϠВϰГϠвϐϰГϠВϱГϲвϒϼВЉГϠВϰГϠвϐϰГϠВϰГϡвϐϲГϠВϰГϢвϐ ГϠВϰГϢвϐГϠВϰГϒВЀГϠВϰГϠвϐ϶ГϠВϰГϠвϐ϶ГϠВϱГϲвϒϼВЉГϠВϱГϲвϒϼВ϶ ГϠВϰГϡвϐϲ ГϠВϱГϠвϐϪГϠВϰГϒВЀГϠВϱГϠЖϢГϠВϰГϡвϐϤГϠВϰГϡвϐГϠВϱГϠЖϢГϠВϰГϒВЀГϠВϰГϠвϐ϶ГϠВϰГϡвϐГϠВϰГϡвϐ ГϠВϰГϒВЇГϠВϰГϒВЀГϠВϰГϠвϐ϶ГϠВϱГϠВϟГϠВϱГϲвϒϼЕϱГϠВϰГϡвϐГϠВϰГϲвϐϮвϐϣ ГϠВϰГϡвϐϣГϠВϱГϠвϐϪГϠВϱГϡвϐϬГϠВϰГϡвϐϤГϠВϰГϡвϐϤГϠВϱГϲвϒϼВЉ ГϠВϰГϠвϐ϶ГϠВϰГϒВЀ ГϠВϰГϡвϐϭГϠВϰГϒВЀГϠВϰГϒВІГϠВϰГϢвϐГϠВϱГϲвϒϼВЉГϠВϰГϲвϐϮвϐϣ ГϠВϰГϢвϐГϠВϰГϒВЅГϠВϰГϠвϐ϶ГϠВϱГϠЕϰ ГϠВϰГϠвϐ϶ГϠВϰГϒВЅГϠВϰГϢвϐГϠВϰГϒВЅГϠВϰГϒВЋГϠВϰГϡвϐ
			function echo_day_shedule($day, $group, $connect){
							switch ($day) {
								case '1':
									$id_days = 1;
									break;
								case '2':
									$id_days = 2;
									break;
								case '3':
									$id_days = 3;
									break;
								case '4':
									$id_days = 4;
									break;
								case '5':
									$id_days = 5;
									break;
								case '6':
									$id_days = 6;
									break;
							}

							switch ($group) {
								case '1':
									$id_group = 1;
									break;
								case '2':
									$id_group = 2;
									break;
							}
							$result = mysql_query("SELECT * FROM shedule WHERE id_days=$id_days and group_num=$id_group", $connect);
							$day_shedule = mysql_fetch_array($result);

							$day_name = mysql_query("SELECT * FROM days WHERE id_day=$id_days", $connect);
							$day_name = mysql_fetch_array($day_name);

							echo "<tr>
											<td colspan='3' class='day'>".$day_name['day'].
										"<tr/>";

							if($day_shedule)
							{

								do{
									$id_time = $day_shedule['id_time'];
									$times = mysql_query("SELECT * FROM time WHERE id_time=$id_time", $connect);
									$time=mysql_fetch_array($times);

									
									$id_subject = $day_shedule['id_subject'];
									$subject = mysql_query("SELECT * FROM subject WHERE id_subject=$id_subject", $connect);
									$subject = mysql_fetch_array($subject);

									$time=substr($time['time'], 0, 5);


									echo "<tr value='".$day_shedule['id_line']."'><td class='time'>".$time."</td>".
											 "<td>".$subject['name']."<br/><span class='tutor'>".$subject['tutor']."</span>".
											 "<input type='hidden' name='id_line' value='".$day_shedule['id_line']."'/></td>".
											 "<td class='room'>".$day_shedule['room']."</td></tr>".
											 "";



							}
							while($day_shedule = mysql_fetch_array($result));
						}
						else{
							echo "<tr><td colspan='3' style='text-align:center;'>Расписание занятий отсутствует</td><tr>";
						}
				}
				for ($i=1; $i < 7; $i++) { 
					echo_day_shedule($i,1, $connect);
				}
				
				echo "</tbody></table>";
		?>
