<!DOCTYPE html>
<html>
	<head>
		<title>StudIO | ����������</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/shedule.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/general.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

		<meta charset="windows-1251"/>
		<?php include_once("scripts/db_connect.php");?>
	</head>
	<body>
		<div id="layout">
			<header>
				
				<div id="menu_background">
					<a href="index.php"><img src="images/logo.png" id="logo"/></a>
					<nav>
						<p><a href="index.php">�������</a></p>
						<p class="active_menu_item"><a href="shedule.php">����������</p>
						<p><a href="tasks.php">�������</a></p>
						<p><a href="group.php">������</a></p>
					</nav>
				</div>
				
			</header>

			<div id="content">

				<div id="full_shedule">
					<div id="heading">
						<p>����������</p>
					</div>
					<?php include_once('scripts/echo_shedule.php'); ?>

				</div>

<!-- 				<div id="timers">
					<div class="timer"><span class="days_num">45</span><p>РґРЅРµР№ РґРѕ СЃРµСЃСЃРёРё</p></div>
					<div class="timer"><span class="days_num">160</span><p>РґРЅРµР№ РґРѕ РїСЂР°РєС‚РёРєРё</p></div>
					<div class="timer"><span class="days_num">45</span><p>РґРЅРµР№ РґРѕ РєСѓСЂСЃРѕРІРѕР№</p></div>
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