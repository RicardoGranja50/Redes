<?php
    $idEscola=$_GET['escola'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $escola = "";
        $cidade = "";
        $nome = "";
        $rua = "";
        $a=0;
        if($_POST['escola']=="norte" || $_POST['escola']=="centro"|| $_POST['escola']=="sul"){
            $escola = $_POST['escola'];
        }
        else{
            $a=1;

            echo '<script>alert("É obrigatório o preenchimento da região (norte,centro,sul).");</script>';
            header("refresh:1; url=index.php");
        }

        if(isset($_POST['cidade'])){
            $cidade= $_POST['cidade'];
        }

        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
        }

        if(isset($_POST['rua'])){
            $rua = $_POST['rua'];
        }

        $con = new mysqli("localhost","root","","conducao");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        elseif($a==0){
            $sql = "update escola set escola=?,cidade=?,nome=?,rua=? where id_escola=?";

            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("ssssi",$escola,$cidade,$nome,$rua,$idEscola);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Escola alterada com sucesso!!");</script>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=index.php");
            }
            else{

            }
        }
    }
    else{
        echo "<h1> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=index.php");
    }