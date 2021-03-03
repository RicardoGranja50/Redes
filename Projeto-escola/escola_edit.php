<?php
if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['escola']) && is_numeric($_GET['escola'])){
        $idEscola = $_GET['escola'];
        $con = new mysqli("localhost","root","","conducao");
        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from escola where id_escola=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idEscola);
            $stm->execute();
            $res=$stm->get_result();
            $escola = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    
</head>
<body>
    <h1>Editar Escola</h1>
    <form action="escola_update.php?escola=<?php echo $escola['id_escola']; ?>" method="post">
        <label>Região</label><input type="text" name="escola" required value="<?php echo $escola['escola'];?>"><br><br>
        <label>Cidade</label><input type="text" name="cidade" required value="<?php echo $escola['cidade'];?>"><br><br>
        <label>Nome</label><input type="text" name="nome" required value="<?php echo $escola['nome'];?>"><br><br>
        <label>Rua</label><input type="text" name="rua" required value="<?php echo $escola['rua'];?>"><br><br>
        <input type="submit" name="enviar"><br>
    </form>
</body>
<?php
 }
 else{
     echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
     header("refresh:5; url=index.php");
 }
}
?>