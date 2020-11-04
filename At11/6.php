<?php
	$soma = 0;
	$matriz = array(
        array(0,0),
        array(1,0),
        array(2,0),
        array(3,0),
        array(4,0),
        array(5,1),
        array(6,1),
        array(7,1),
        array(8,1),
        array(9,1),
    );
    for ($i=0; $i<10; $i++) {
        for ($j=0; $j<2; $j++) {
            $soma += $matriz[$i][$j];
        }
    }
    echo "$soma";
?>