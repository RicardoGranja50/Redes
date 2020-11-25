<?php
    $r1=rand(1,10);
    $r2=rand(1,10);
    $r3=rand(1,10);
    $r4=rand(1,10);




    $num1=$_POST[$r1];
    $num2=$_POST[$r2];
    $num3=$_POST[$r3];
    $num4=$_POST[$r4];





    $soma=$num1+ $num2+$num3+$num4;
    $media=$soma/4;


    echo "Valores: ".$num1." ".$num2." " .$num3." " .$num4;
    echo "Soma = ".$soma."<br>";
    echo "Media = ".$media;

?>