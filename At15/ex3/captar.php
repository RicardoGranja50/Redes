<?php
$n1=$_POST["numero1"];
$n2=$_POST["numero2"];
$op=$_POST["operacao"];
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

switch($op){

    case($op=="soma"):
        echo soma($n1,$n2);
    break;
    case($op=="subtracao"):
        echo sub($n1,$n2);
    break;
    case($op=="divisao"):
        echo div($n1,$n2);
    break;
    case($op=="multilicacao"):
        echo mul($n1,$n2);
    break;
}

?>