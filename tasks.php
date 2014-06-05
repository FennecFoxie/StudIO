<!DOCTYPE html>
<html>
	<head>
		<title>StudIO | Задания</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/tasks.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/general.css">
		<meta charset="windows-1251"/>
	</head>
	<body>
		<div id="layout">
			<header>
				
				<div id="menu_background">
					<a href="index.php"><img src="images/logo.png" id="logo"/></a>
					<nav>
						<p><a href="index.php">Главная</a></p>
						<p><a href="shedule.php">Расписание</p>
						<p class="active_menu_item"><a href="tasks.php">Задания</a></p>
						<p><a href="group.php">Группа</a></p>
					</nav>
				</div>
				
			</header>

			<div id="content">

				<div id="all_tasks">
					<div id="heading">
						<p>Задания</p>
					</div>
					<?php include_once("scripts/echo_tasks.php"); ?>
				</div>

<!-- 				<div id="timers">
					<div class="timer"><span class="days_num">45</span><p>ГђВґГђВЅГђВµГђВ№ ГђВґГђВѕ Г‘ВЃГђВµГ‘ВЃГ‘ВЃГђВёГђВё</p></div>
					<div class="timer"><span class="days_num">160</span><p>ГђВґГђВЅГђВµГђВ№ ГђВґГђВѕ ГђВїГ‘в‚¬ГђВ°ГђВєГ‘вЂљГђВёГђВєГђВё</p></div>
					<div class="timer"><span class="days_num">45</span><p>ГђВґГђВЅГђВµГђВ№ ГђВґГђВѕ ГђВєГ‘Ж’Г‘в‚¬Г‘ВЃГђВѕГђВІГђВѕГђВ№</p></div>
				</div> -->
			</div>

			<div id="divider"></div>

		</div>
		<div id="footer_image">
			<div id="stopper"></div>
			<img src="images/illustration.png" id="illustration"/>
		</div>
		<footer></footer>
	</body>
</html>