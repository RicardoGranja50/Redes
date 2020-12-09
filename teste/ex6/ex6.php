<?php
    $ano=$_POST['ano'];
    $nome=$_POST['nome'];

    if($nome=="Ana" && $ano==2000)
    {
        session_name('Ana');
        session_start();

        $_SESSION['nome']=$nome;
        $_SESSION['ano']=$ano;
        echo"<a href='ANA.html'><h5><b>SESSION</b></h5></a>";
    }

    if($nome==NULL || $ano==NULL){                                                                                                                                                               
       include('formulario.html');
       echo "ERRO digite novamente";
    }
    else{
        $idade=2020-$ano;
        if($idade>18){
            echo "Tem $idade anos e tem idade para votar";
        }
        else{
            echo "Tem $idade anos e não tem idade para votar";
        }
    
    }

        

?>