<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/login_administrator.css"/>
	</head>
	<body>
	<div id="layout">
			<img src="images/logo_ribbon.png" id="logo"/>
			<div id="login_form">
				<form method="POST" action="scripts/log.php">
					<div class="field">
						<label for="login">Логин</label>
						<input type="text" id="login" name="login" class="input_field"/>
					</div>
					<div class="field">
						<label for="password">Пароль</label>
						<input type="password" id="password" name="password" class="input_field"/>
					</div>
					<input type="submit" id="submit" value="Подтвердить">
				</form>
			</div>
		</div>
	</body>
</html>