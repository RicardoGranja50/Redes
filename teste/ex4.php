<?php
    
    $soma=0;
    $produto=1;
    for($i=0;$i<20;$i++){
        $numeros[$i]=rand(1,1000);
        echo $numeros[$i]."<br>";
        $soma=$soma+$numeros[$i];
        $produto=$produto*$numeros[$i];
    }
    $media=$soma/20;
    $maior=$numeros[0];
    $menor=$numeros[0];
    for($i=0;$i<20;$i++){
        if($maior>$numeros[$i]){
            $maior=$maior;
        }
        else{
            $maior=$numeros[$i];
        }
        for($j=1;$j<20;$j++){
            if($maior>$numeros[$j]){
                $maior=$maior;
            }
            else{
                $maior=$numeros[$j];
            }

        }
    }

    for($i=0;$i<20;$i++){
        if($menor<$numeros[$i]){
            $menor=$menor;
        }
        else{
            $menor=$numeros[$i];
        }
        for($j=1;$j<20;$j++){
            if($menor<$numeros[$j]){
                $menor=$menor;
            }
            else{
                $menor=$numeros[$j];
            }

        }
    }
    echo "<br>"."O maior é ".$maior;
    echo "<br>"."O menor é ".$menor;
    echo "<br>"."A media é ".$media;
    echo "<br>"."O produto é ".$produto;
?>