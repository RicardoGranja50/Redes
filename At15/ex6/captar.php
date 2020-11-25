<?php

    $ordenado=$_POST["ordenado"];
    

    $inerentes=$ordenado*0.15;
    $cantina=$ordenado*0.1;
    $transporte=$ordenado*0.05;

    $total=$ordenado-($inerentes+$cantina+$transporte);

    echo "Ordenado liquido= ".$total;
    echo "<br>";
    echo "Inerentes= ".$inerentes;
    echo "<br>";
    echo "Cantina= ".$cantina;
    echo "<br>";
    echo "transporte= ".$transporte;
    
?>