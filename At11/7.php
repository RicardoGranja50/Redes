<?php
	$soma = 0;
	$matriz = array(
        array(1,1),
        array(1,2),
        array(1,3),
        array(1,4),
        array(1,5),
        array(1,6),
        array(1,7),
        array(1,8),
        array(1,9),
        array(1,10),
    );
    $maior=0;
    $Maior1= $matriz[0][0];

    foreach ($matriz as $a) {
        foreach($a as $key=>$b){
            if ($b>$maior) {
                $maior=$b;
            }
        }
    }
    for ($i=0; $i<10; $i++) {
        for ($j=0; $j<2; $j++) {
            if($Maior1 < $matriz[$i][$j] && $matriz[$i][$j]<$maior){
                $Maior1 = $matriz[$i][$j];
            }
            $soma += $matriz[$i][$j];
        }
    }
    echo "$soma";
    echo "<br>";
    echo "$Maior1";
?>