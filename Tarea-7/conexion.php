<?php 
	$server="localhost";
	$user="root";
	$pass="";
	$bd="bd_hotel1";
	$con=new mysqli($server,$user,$pass,$bd);
	if ($con->connect_error) die("Conexion Fallida ".$con->connect_error);
?>