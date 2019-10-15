<?php 
session_start();
include('conexion.php');
$correo=$_POST['txtUser'];
$password=md5($_POST['txtPassword']);
$rusuario = $_POST['usuario']."<br>";
if ($rusuario=='recordar')
{
	setcookie('usuario',$correo,time()+3600);
}
$rpassword=$_POST['password']."<br>";
if ($rpassword=='recordar')
{
	setcookie('password',$password,time()+3600);
}

	$sql="SELECT nombre,apellido,correo,password,nivel FROM usuarios WHERE correo='$correo' AND password='$password'" ;
	$result=$con->query($sql);
	if($fila=$result->fetch_assoc())
	{
		$_SESSION['nombre']=$fila['nombre'];
		$_SESSION['nivel']=$fila['nivel'];
		header("location:fintroduccion.html");
	}
	else
	{
			echo '<script>alert("Email o contraseña incorrecta")</script>';
			echo "<script>location.href='formlogin.php'</script>";
	}
 ?>
