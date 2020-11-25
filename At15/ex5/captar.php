<?php

    $rapazes=$_POST["1"];
    $raparigas=$_POST["2"];

    $soma=$raparigas+$rapazes;

    $prapazes=($rapazes/$soma)*100;
    $praparigas=($raparigas/$soma)*100;

    echo "Total = ".$soma."<br>";
    echo "Rapazes= ".$prapazes."%"."<br>"; 
    echo "Raparigas= ".$praparigas."%"."<br>"; 
?>