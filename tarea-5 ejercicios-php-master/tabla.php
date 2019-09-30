<?php
    $nr=$_POST['nr'];
    $nc=$_POST['nc'];
    $h=$_POST['h'];
    $w=$_POST['w'];
?>
<table border='1'>
    <?php
    for($i=0;$i<=$nr;$i++){
        if($i==0)
            echo "<tr><th width=".$w." height=".$h.">X</th>";
            else
            echo "<tr><th width=".$w." height=".$h.">".$i."</th>";
        for($j=1;$j<=$nc;$j++){
            if($i==0)
                echo "<th width=".$w." height=".$h.">".$j."</th>";
                else
                echo "<td width=".$w." height=".$h.">".$i*$j."</td>";
            }
        echo "</tr>";
        }
    ?>
</table>