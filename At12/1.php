<?php

        $nome = "Funcoess de manipulacao de strings no PHPs";
        $nome_maiusculo =strtoupper($nome); // Coloca o texto em letras Maiusculas 
        echo $nome_maiusculo;
        echo "<br>";


        $nome = "Funcoes de manipulacao de strings no PHPs";
        $nome_minusculo = strtolower($nome); // Coloca o texto em letras Minusculas
        echo $nome_minusculo;
        echo "<br>";

        $nome = "Funcoes de manipulacao de strings no PHPs";
        $parte = substr($nome, 8); //Elimina 8 caracteres
        echo $parte;
        echo "<br>";

        $nome = "Linha de Codigo";
        $parte = substr($nome, 0, 5); //Guarda os primeiros 5 caracteres e elemina o restante
        echo $parte;
        echo "<br>";

        $repetido = str_repeat("0", 5); // Repete 5x o 0
        echo $repetido; 
        echo "<br>";

        $qtd_char = strlen("Linha de Codigo"); // Conta o numero de caracteres da frase
        echo $qtd_char;
        echo "<br>";

        $texto = "Ola, mundo";
        $novo_texto = str_replace("mundo", "leitor", $texto) ; // Substitui o "mundo" por "leitor"
        echo $novo_texto;
        echo "<br>";

        $texto = "Bem vindo ao Linha de Codigo!";
        $pos =strpos($texto, "Codigo"); //Diz em que posição do array está  "Codigo" 
        echo $pos;




    ?>
