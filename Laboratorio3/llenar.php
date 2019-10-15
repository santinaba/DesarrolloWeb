<head>
	<style type="text/css">
  div { float:left; }
	</style>
</head>
<?php
$n=$_POST["txtn"];
?>
<form action="llenar.php" method="POST" >
<?php	
for ($i=1;$i<=$n;$i++)
{ 
	?>
	<div id="div">
	<input type="text" name="txt1nro<?php echo $i ?>"/><br/>
	<input type="text" name="txt2nro<?php echo $i ?>"/>
	</div>
<?php
}
?>
<?php setcookie("cookien",$n,time()+3600); ?>
<br/><input type="submit" value="llenar"><br/>
</form>