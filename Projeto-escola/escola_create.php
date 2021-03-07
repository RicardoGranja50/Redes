<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $escola="";
        $cidade="";
        $nome="";
        $rua="";


        $a=0;
        if($_POST['escola']=="norte" || $_POST['escola']=="centro"|| $_POST['escola']=="sul"){

            $escola = $_POST['escola'];
        }
        else{

            $a=1;

            echo '<script>alert("É obrigatório o preenchimento da região (norte,centro,sul).");</script>';
            header("refresh:1; url=escola_create.php");
        }

        if(isset($_POST['cidade'])){

            $cidade = $_POST['cidade'];
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

            $sql = 'insert into escola(escola,cidade,nome,rua) values(?,?,?,?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('ssss',$escola,$cidade,$nome,$rua);
                $stm->execute();
                $stm->close();
                
                echo '<script>alert("Escola adicionado com sucesso");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5; url=index.php");
            }
            else{
                echo($con->error);
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5;url=index.php");
            }
        }
    }
    else{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Adicionar escola</title>
</head>
<body>
    <h1>Adicionar escola</h1><br>
    <form action="escola_create.php" method="post"><br>
    <label>Região</label><input type="text" name="escola" required><br><br>
    <label>Cidade</label><input type="text" name="cidade"><br><br>
    <label>Nome</label><input type="text" name="nome"><br><br>
    <label>Rua</label><input type="text" name="rua"><br><br>
    <input type="submit" name="enviar">
    <button> <a href='index.php'>Cancelar</a></button><br><br>
    </form>
</body>
</html>

<?php
    };
?>