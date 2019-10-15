<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>
	<body>
		<center>
			<h1>Login</h1>
			<div class="contenedor">
				<form action="autenticarse.php" method="POST">
					<label for="txtUser">Ingresar correo</label><br>
					<input type="text" name="txtUser" value="
					<?php if (isset($_COOKIE['usuario']))
					{
						echo $_COOKIE['usuario'];
					}?>"/><br>
					<label for="txtPassword">Ingresar password</label><br>
					<input type="password" name="txtPassword" value="
					<?php if (isset($_COOKIE['password']))
					{
						echo $_COOKIE['password'];
					}?>"><br><br>
					<input type="checkbox" name="usuario" value="recordar"> Recordar Usuario <br>
					<input type="checkbox" name="password" value="recordar"> Recordar Password <br>
					<input type="submit" value="Ingresar">
					<input type="reset" name="limpiar" value="Limpiar">
				</form>
			</div>
		</center>
		<hr>
	</body>
</html>