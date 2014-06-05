ϽЭп

<?php
  session_start();

  if (!isset($_SESSION["login"]) && isset($_COOKIE["login"]))
    $_SESSION["login"] = $_COOKIE["login"];

  //ГϓВϠГϒВЏГϓВϠГϒВЎГϓВϠГϒВЋГϓвϐГϖвϐϩГϓвϐГϲвϒϼВϱГϓВϠГϒВЅГϓВϠГϒВЍГϓВϠГϒВЈГϓВϠГϒВЅ ГϓВϠГϒВЋГϓВϠГϒВЎГϓВϠГϒВЃГϓВϠГϒВЈГϓВϠГϒВЍГϓВϠГϒВЀ ГϓВϠГϒВЄГϓВϠГϒВЋГϓвϐГϒВϟ ГϓвϐГϲвϒϼЕϱГϓВϠГϒВЅГϓВϠГϒВЊГϓвϐГϖвϐϩГϓвϐГϲвϒϼВЀГϓВϠГϒВЅГϓВϠГϒВЉ ГϓвϐГϒВϑГϓВϠГϒВЅГϓвϐГϒВϑГϓвϐГϒВϑГϓВϠГϒВЈГϓВϠГϒВЈ
  $login = $_SESSION["login"];

  //ГϓВϠГϒВЏГϓВϠГϒВЅГϓвϐГϲвϐϪВϼГϓВϠГϒВЅГϓВϠГϒВЍГϓВϠГϒВЀГϓВϠГϒВЏГϓвϐГϲвϐϪВϼГϓВϠГϒВЀГϓВϠГϒВЂГϓВϠГϒВЋГϓВϠГϒВЅГϓВϠГϒВЍГϓВϠГϒВЈГϓВϠГϒВЅ ГϓВϠГϒВЍГϓВϠГϒВЀ ГϓвϐГϒВϑГϓвϐГϲвϒϼЕϱГϓвϐГϲвϐϪВϼГϓВϠГϒВЀГϓВϠГϒВЍГϓВϠГϒВЈГϓвϐГϲвϒϼВϰГϓвϐГϖвϐϩ ГϓВϠГϒВЀГϓВϠГϒВЂГϓвϐГϲвϒϼЕϱГϓВϠГϒВЎГϓвϐГϲвϐϪВϼГϓВϠГϒВЈГϓВϠГϒВЇГϓВϠГϒВЀГϓвϐГϲвϒϼВϰГϓВϠГϒВЈГϓВϠГϒВЈ ГϓВϠГϒВЂ ГϓвϐГϒВϑГϓВϠГϒВЋГϓвϐГϖвϐϩГϓвϐГϲвϒϼВϱГϓВϠГϒВЀГϓВϠГϒВЅ, ГϓВϠГϒВЅГϓвϐГϒВϑГϓВϠГϒВЋГϓВϠГϒВЈ ГϓвϐГϒВϑГϓВϠГϒВЅГϓвϐГϒВϑГϓвϐГϒВϑГϓВϠГϒВЈГϓвϐГϒВϟ ГϓВϠГϒВЍГϓВϠГϒВЅ ГϓВϠГϒВЀГϓВϠГϒВЊГϓвϐГϲвϒϼЕϱГϓВϠГϒВЈГϓВϠГϒВЂГϓВϠГϒВЍГϓВϠГϒВЀ
  echo $login;
  if ($login == null)
  {
    header("Location: login.php");
    exit();
  }
?>

<html>
	<head>
		<title>StudIO | Администрирование</title>
		<meta charset="windows-1251" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/admin_page.css"/>
		<link href='css/tabulous.css' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" type="text/css" href="stylesheets/tasks.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/shedule.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/group.css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/add_element.js"></script>
    <script type="text/javascript" src="scripts/get_element.js"></script>
    
    <script src="scripts/jquery.maskedinput-1.2.2.js" type="text/javascript"></script>
    <style type="text/css">
	    #list{
	    	width: 140%;
	    }

	    #shedule{
	    	width: 240%;
	    }

    </style>
    <script type="text/javascript">
    	jQuery(function($){
				$("#phone").mask("(+99999) 999-99-99");
				$("#deadline").mask("9999-99-99");
			});
    </script>
</head>
<body>
	<div class="container">
			<header>
				<img src="images/logo_round.png" id="logo"/>
				<form method="POST" action='scripts/logout.php'>
					<input type='submit' value="Выход" id="logout">
				</form>
						<div id="tools">	
			<img src="images/add.png" id="add" class="tool_button" onclick="show_pop_up()" />
			<!-- <img src="images/edit.png" class="tool_button" onclick="edit_element.js"/> -->
			<img src="images/deny.png" id="delete"class="tool_button" onclick="delete_element()"/>

		</div>

			</header>
<div class="main clearfix">	

	<div id="pop_up_confirm" class="pop_up">
	<h3>Вы действительно хотите удалить данную запись?</h3>
	<form method="GET" action="scripts/delete_element.php" id="confirm">
	<input type="hidden" name="id" id="id_elm" value=""/>
	<input type="hidden" name="id_shed" id="id_elm_shed" value=""/>
	<input type="hidden" name="table" id="table_elm" value=""/>
	<div id="buttons">
		<input type="submit" class='button' value="Да"/>
		<input type="button" class="button" onclick="close_pop_up()" value="Нет"/>
	</div>
	</form>

	</div>

	<div id="pop_up_shedule" class="pop_up">
		<h3>Введите данные для новой записи</h3>
		<form id="info" action="scripts/save_element.php" method="GET">
		<input type="hidden" name="table_name" value="shedule"/>
			<div class="field">

				<label for="day">День недели</label>
				<select id='day_dropdown' name="day">
					<option value='1' selected="true">Понедельник</option>
					<option value='2'>Вторник</option>
					<option value='3'>Среда</option>
					<option value='4'>Чертверг</option>
					<option value='5'>Пятница</option>
					<option value='6'>Суббота</option>
				</select>
				</div>
				<div class="field">
				<label for="time">Время</label>
				<select id='time_dropdown' name="time">
					<option value='1' selected="true">9:00</option>
					<option value='2'>10:30</option>
					<option value='3'>12:00</option>
					<option value='4'>13:50</option>
					<option value='5'>15:20</option>
					<option value='6'>16:50</option>
					<option value='7'>18:20</option>
					<option value='8'>20:00</option>
					</select>
			</div>

			<div class="field">
				<label for="subject">Предмет</label>
				<input type="text" class="input_field" name="subject"/>
			</div>

			<div class="field">
				<label for="tutor">Преподаватель</label>
				<input type="text" class="input_field" name="tutor"/>
			</div>

			<div class="field">
				<label for="room">Аудитория</label>
				<input type="text" class="input_field" name="room"/>
			</div>

			<div id="buttons">
				<input type="submit" class="button" value="Сохранить"/>
				<input type="button" class="button close" onclick="close_pop_up()" value="Закрыть"/>
			</div>
		</form>		
	</div>

		<div id="pop_up_tasks" class="pop_up">
		<h3>Введите данные для новой записи</h3>
		<form id="info" action="scripts/save_element.php" method="GET">

		<input type="hidden" name="table_name" value="tasks"/>
			<div class="field">
				<label for="deadline">Дата сдачи</label>
				<input type="text" class="input_field" id="deadline" name="deadline"/>
			</div>

			<div class="field">
				<label for="subject">Предмет</label>
				<input type="text" class="input_field" name="subject"/>
			</div>

			<div class="field">
				<label for="task">Задание</label>
				<textarea rows="5" class="input_field" name="task"></textarea>
			</div>

			<div id="buttons">
				<input type="submit" class="button" value="Сохранить"/>
				<input type="button" class="button close" onclick="close_pop_up()" value="Закрыть"/>
			</div>
		</form>		
	</div>

		<div id="pop_up_group" class="pop_up">
		<h3>Введите данные для новой записи</h3>
		<form id="info" action="scripts/save_element.php" method="GET">
		<input type="hidden" name="table_name" value="group"/>
			<div class="field">
				<label for="name">Имя</label>
				<input type="text" class="input_field" name="name"/>
			</div>

			<div class="field">
				<label for="surname">Фамилия</label>
				<input type="text" class="input_field" name="surname"/>
			</div>

			<div class="field">
				<label for="patronymic_name">Отчество</label>
				<input type="text" class="input_field" name="patronymic_name"/>
			</div>

			<div class="field">
				<label for="group">Группа</label>
				<input type="text" name="group" class="input_field"/>
			</div>

			<div class="field">
				<label for="phone">Телефон</label>
				<input type="phone" id="phone" class="input_field" name="phone"/>
			</div>
			
			<div class="field">
				<label for="email">e-mail</label>
				<input type="text" name="email" class="input_field"/>
			</div>

			<div id="buttons">
				<input type="submit" class="button" value="Сохранить"/>
				<input type="button" class="button close" onclick="close_pop_up()" value="Закрыть"/>
			</div>
		</form>		
	</div>

		<div id="tabs">
		<ul>
			<li><a href="#tabs-1" title="" class="showscale">Расписание</a></li>
			<li><a href="#tabs-2" title="">Задания</a></li>
			<li><a href="#tabs-3" title="">Группа</a></li>
		</ul>
		<div id="tabs_container">	

	<div id="tabs-1">
		<?php include_once("scripts/echo_shedule.php"); ?>
	</div>
	<div id="tabs-2">
		<?php include_once("scripts/echo_tasks.php"); ?>
	</div>
		<div id="tabs-3">
			<?php include_once("scripts/echo_group.php"); ?>
		</div><!--End tabs container-->	

	</div><!--End tabs-->
	



	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="tabulous.js"></script>
<script type="text/javascript" src="js.js"></script>

</body>
</html>
<?php
 session_destroy(); 
?>