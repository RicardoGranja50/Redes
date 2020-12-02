<?php
    echo "<span style='color:red;'><h3><b>**************************************Pagina Visitante****************************************</b></h3></span><br>";

    session_name('VariaveisNomeIdade');
    session_start();

    echo "Nome: ".$_SESSION['NomeAluno']."<br>";
    echo "Idade: ".$_SESSION['IdadeAluno'];

    $nome=$_SESSION['NomeAluno'];
    $idade=$_SESSION['IdadeAluno'];

    echo "<br><br>";
    echo "Nome:".$nome."<br>";
    echo "Idade:".$idade; 

    echo "<a href='formulario.html'><h5><b>Voltar</b></h5></a>";
    echo "<a href='visitante1.php'><h5><b>Visitante 1</b></h5></a>";
?>