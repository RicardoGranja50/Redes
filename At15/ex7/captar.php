<?php

    $idade=$_POST["idade"];
    
    if($idade<18){
        echo "Menor de idade";
    }
    elseif($idade>=18 && $idade<=100){
        echo "Maior de idade";
    }
    else{
        echo "Voce é um dinossauro";
    }
    
?>