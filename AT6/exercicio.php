<?php
    $a=23;
    $b=45;
    $soma= $a+$b;
    echo "A soma é: $soma" ;
    echo "<br>" ;
    echo "<br>" ;
    $nota1=15;
    $nota2=12;
    $nota3=17;
    $media= ($nota1 + $nota2 + $nota3) / 3;
    echo "A media é: $media" ;
    echo "<br>" ;
    echo "<br>" ;

    $y=5;
    $x=7;
    $resto= ($y%$x)/$x;
    $divisao= round($y/$x);
    echo "Quociente : $divisao";
    echo "Resto : $resto";
    echo "<br>" ;
    echo "<br>" ;

    $preco=78;
    $iva= 0.23;
    $comiva= $preco * $iva;
    $compra = $preco + $comiva;
    echo "O preço com IVA é $compra";
?>