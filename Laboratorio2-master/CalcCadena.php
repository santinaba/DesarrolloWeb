<?php 
include('operaciones.php');
$cadena=$_GET['txtCadena'];
$h = new Operaciones("","$cadena","","","");
$h->Piramide();
?>
<a href="index.html">Volver Menu</a>