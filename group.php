<!DOCTYPE html>
<html style="min-width: 1140px;">
	<head>
		<title>StudIO | Группа</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/group.css">
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
						<p><a href="tasks.php">Задания</a></p>
						<p class="active_menu_item"><a href="group.php">Группа</a></p>
					</nav>
				</div>
				
			</header>

			<div id="content">

				<div id="group_list">

					<div id="heading">
						<p>Список группы</p>
					</div>
					<?php include_once("scripts/echo_group.php"); ?>

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