<?php
    
    for($i=0;$i<15;$i++){
        $numeros[$i]=rand(1,1000);
        if($numeros[$i]% 2 == 0){
            echo $numeros[$i]." par"."<br>";
        }
        else{
            echo $numeros[$i]." impar"."<br>";
        }
    }
?>