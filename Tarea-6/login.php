<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login Banco</title>
	</head>
	<body>
		<center>
			<h1>Banco</h1>
			<div class="contenedor">
				<form action="autenticarse.php" method="POST">
					<label for="txtUser">Ingresar correo</label><br>
					<input type="text" name="txtUser"><br>
					<label for="txtPassword">Ingresar contraseña</label><br>
					<input type="password" name="txtPassword"><br><br>
					<input type="submit" value="Ingresar"><br><br>
				</form>
			</div>
		</center>
		<hr>
	</body>
</html>