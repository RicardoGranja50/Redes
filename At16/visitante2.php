<?php
    echo"<span style='color:red;'><h3><b>**************************************Pagina Visitante 2***************************************</b></h3></span><br>";

    if(!isset($_COOKIE['nome']) && !isset($_COOKIE['idade'])){

       echo "<script> alert('As COOKIES passaram da validade (exiraram), \\n\\n\\Eles deixaram de existir')</script>";
       exit('<script>location.href="formulario.html"</script>');
    }
    else{

        $nome2=$_COOKIE['nome'];
        $idade2=$_COOKIE['idade'];

        echo "Nome:".$_COOKIE['nome']."<br>";
        echo "Idade:".$_COOKIE['idade'];

        echo "<br><br>";
        echo "Nome:".$nome2."<br>";
        echo "Idade:".$idade2;

        echo "<a href='formulario.html'><h5><b>Voltar</b></h5></a>";
        echo "<a href='visitante1.php'><h5><b>Visitante 1</b></h5></a>";
        echo "<a href='visitante2.php'><h5><b>Visitante 2</b></h5></a>";
    }

?>