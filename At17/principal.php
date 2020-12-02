<?php

echo"<span style='color:red;'><h3><b>**************************************Pagina Inicial****************************************</b></h3></span><br>";
    $nome=$_POST['txt_nome'];
    $idade=$_POST['txt_idade'];

    session_name('VariaveisNomeIdade');
    session_start();

    $_SESSION['NomeAluno']=$nome;
    $_SESSION['IdadeAluno']=$idade;

    echo "Nome". $nome."<br>";
    echo "Idade". $idade."<br>";

    echo "<a href='formulario.html'><h5><b>Voltar</b></h5></a>";
    echo "<a href='visitante1.php'><h5><b>Visitante 1</b></h5></a>";
?>