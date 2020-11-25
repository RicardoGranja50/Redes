<?php

    $n=$_POST["numero"];
    
    if($n>=0 && is_numeric($n)){
        echo $n;
    }
    else{
        echo "erro";
    }
    
    
?>