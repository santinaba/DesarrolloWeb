<?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Index</title>
	</head>
	<body>
		<center>
			<h1>Bienvenido al Hotel Tarabuco</h1>
			<h2>Usuario : <?php echo $_SESSION['nombre']; ?></h2>
			<h2>Nivel: <?php if ($_SESSION['nivel']==1) 
			{
				echo 'Administrador';
			}else {echo 'Cliente' ;}
			?></h2>
		</center>
		<hr>
		<ul>
			<li> <a href="Habitaciones/habitaciones.php"> Habitaciones</a> </li>
			<li><a href="Reservas/reservar.php"> Reservar Tipo Habitacion</a></li>
			<li><a href="Reservas/reservas.php"> Reservas</a></li>
			<li><a href="salir.php"> Salir</a></li>
		</ul>
		<hr>
	</body>
</html>
<?php  } 
 	else {
 	 	header("location:login.php");
 	} 
?>