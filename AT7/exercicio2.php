<?php
    $nota=30;
    switch($nota)
    {
        case($nota<10):
            echo 'Aluno <span style="color:#ff0000">  Reprovado</span> com ' .$nota. ' valores';
            echo '<br> Devera trabalhar mais para alcançar resultados positivos';
        break;
        case($nota>=10 && $nota<=20):
            echo 'Aluno <span style="color:#00ff00">  Aprovado</span> com ' .$nota. ' valores';
            echo '<br>Bom Trabalho';
        break;
        default:
            echo 'Nota invalida';
    }
?>