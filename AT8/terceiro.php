<?php
    for($i=1;$i<=20;$i++){
        $nota = rand(1,20);
        echo 'A nota do aluno <span style="color:#0000cc">'.$i. '</span> é <span style="color:#0000cc">'.$nota.'</span> <br>';
        switch($nota){
            case ($nota<8):
                echo 'Reprovado';
            break;
            case ($nota>=8 && $nota<9.4):
                echo 'Admitido a exame';
            break;
            default:
                echo 'Aprovado';
        }
        echo '<br>';
    }
?>