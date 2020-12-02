<?php
    echo"<span style='color:red;'><h3><b>**************************************Pagina Visitante****************************************</b></h3></span><br>";

    session_name('VariavelNomeIdade');
    session_start();

    if(isset($_POST['btn_enviar']) && !empty($_POST['txt_nome']) && !empty($_POST['txt_idade'])){

        $nome=$_POST['txt_nome'];
        $idade=$_POST['txt_idade'];

        $_SESSION['NomeAluno']=$nome;
        $_SESSION['IdadeAluno']=$idade;

    }
    else{

        $nome=$_SESSION['NomeAluno'];
        $idade=$_SESSION['IdadeAluno'];

        echo "<br><br>";
        echo "Nome:".$nome."<br>";
        echo "Idade:".$idade;  
    }

    echo "<a href='formulario.html'><h5><b>Voltar</b></h5></a>";
    echo "<a href='visitante1.php'><h5><b>Visitante 1</b></h5></a>";
?>