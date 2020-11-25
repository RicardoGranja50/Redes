<?php
$n1=$_POST["numero1"];
$n2=$_POST["numero2"];

function soma($num1,$num2){

    $soma=$num1+$num2;
    return $soma;
}

function sub($num1,$num2){

    $sub=$num1-$num2;
    return $sub;
}


function mul($num1,$num2){

    $mul=$num1*$num2;
    return $mul;
}

function div($num1,$num2){

    $div=$num1/$num2;
    return $div;
}

echo $n1. "+".$n2."= ".soma($n1,$n2);
echo "<br>";
echo $n1. "-".$n2."= ".sub($n1,$n2);
echo "<br>";
echo $n1. "*".$n2."= ".mul($n1,$n2);
echo "<br>";
echo $n1. "/".$n2."= ".div($n1,$n2);

?>