<?php 
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(!isset($_GET['escola']) || !is_numeric($_GET['escola'])){

                echo '<script>alert("Erro ao abirir");</script>';
                echo 'Aguarde um momento.A reencaminhar pagina';
                header("refresh:5; url=index.php");
                exit();
            }
            $idEscola=$_GET['escola'];
            
            $con=new mysqli("localhost","root","","conducao");

            if($con->connect_error!=0){

                echo 'Ocorreu um erro no acesso a base de dados <br>'.$con->connect_error;
                exit();
            }
            else{
                $sql='select * from escola where id_escola=?';

                $stm=$con->prepare($sql);

                if($stm!=false){
                    $stm->bind_param('i',$idEscola);
                    $stm->execute();
                    $res=$stm->get_result();
                    $escola=$res->fetch_assoc();
                    $stm->close();
                }
                else{
                    echo '<br>';
                    echo ($con->error);
                    echo'<br>';
                    echo"Aguarde um momento.A reencaminhar pagina";
                    echo'<br>';
                    header("refresh:5; url=index.php");
                }
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Escola</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>

<div class="container">
  <div class="col-sm-12">
    <h1>Informação acerca da escola
      <?php 
      echo $escola['nome'];
      ?>
    </h1>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <h2>Escola</h2>
      <br>
      <?php 
        echo "<h4>Nome: ".$escola['nome'];
        echo"</h4>";
        echo "<h4>Cidade: ".$escola['cidade'];
        echo"</h4>";
        echo "<h4>Rua: ".$escola['rua'];
        echo"</h4>";
      ?>
    </div>
    <div class="col-sm-8">
      <div class="row">
        <h2>Aulas</h2>
        <div class="col-sm-2">
          <h5>Segunda</h5>
        </div>
        <div class="col-sm-2">
          <h5>Terça</h5>
        </div>
        <div class="col-sm-2">
          <h5>Quarta</h5>
        </div>
        <div class="col-sm-2">
          <h5>Quinta</h5>
        </div>
        <div class="col-sm-1">
          <h5>Sexta</h5>
        </div>
      </div>
      <?php 
       
      ?>
    </div>
  </div>
   <br><br><br>
   <?php
    echo '<a href="escola_edit.php?escola='.$escola['id_escola']. '">Editar Escola</a><br>';
    echo '<a href="escola_delete.php?escola='.$escola['id_escola']. '">Eliminar Escola</a><br>';
    ?>
</div>

</body>
</html>