<?php
    $diaSemana=5;
    switch($diaSemana)
    {
        case 1:
            print('Domingo');
            break;
        case 2:
            print('Segunda');
            break;
        case 3:
            print('Terça');
            break;
        case 4:
            print('Quarta');
            break;
        case 5:
            print('Quinta');
            break;
        case 6:
            print('Sexta');
            break;
        case 7:
            print('Sabado');
            break;
        default:
            echo 'Erro ao avaliar o dia da semana';
    }
?>