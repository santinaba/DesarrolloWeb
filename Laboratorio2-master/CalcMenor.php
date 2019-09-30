<?php 
include('operaciones.php');
$a=$_GET['txtA'];
$b=$_GET['txtB'];
$c=$_GET['txtC'];
$h = new Operaciones("","","$a","$b","$c");
$h ->Calcularmenor();
?>