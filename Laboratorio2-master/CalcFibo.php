<?php 
include('operaciones.php');
$n=$_GET['txtFibonacci'];
$h = new Operaciones("$n","","","","");
$h->CalcularFibonacci();

?>
<a href="index.html">Volver Menu</a>