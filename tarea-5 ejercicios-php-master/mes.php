<?php
    $n=$_GET['numero'];
    $mes=array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembe", "octubre", "noviembre", "diciembre");
?>
<p>La seleccion es:</p>
<?php
    if($n<1 || $n>12){
        echo "Introdujo una opcion incorrecta";}
    else{
        echo '<select name="mes" id="mes">';
        for($i=1; $i<=12;$i++){
            if($i==$n){
                echo'<option value="',$i,'" selected= "selected">',$mes[$i-1],'</option>';
            }
            else{
                echo'<option value="',$i,'">',$mes[$i-1],'</option>';
            }
        }
    } 
?></select>