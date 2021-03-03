<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['escola']) || is_numeric($_GET['escola'])){
        $idEscola = $_GET['escola'];
        $con = new mysqli("localhost","root","","conducao");
        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        else{
        $sql = "delete from escola where id_escola=?";
        $stm = $con->prepare($sql);
        if($stm!=false){
            $stm->bind_param("i",$idEscola);
            $stm->execute();
            $stm->close();
            echo ("<script>alert('Escola eliminado com sucesso');</script>");
            echo 'Aguarde um momento. A reencaminar página';
            header("refresh:5; url=index.php");
        }
        else{
            echo '<br>';
            echo $con->error;
            echo '<br>';
            echo "Aguarde um momento. A reencaminhar página";
            header("refresh:5; url=index.php");
        }
    }
 }
 else{
    echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
    header("refresh:5; url=index.php");
    }
}
?>