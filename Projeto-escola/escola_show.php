<?php 
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(!isset($_GET['escola']) || !is_numeric($_GET['escola'])){

                echo '<script>alert("Erro ao abirir");</script>';
                echo 'Aguarde um momento.A reencaminhar pagina';
                header("refresh:5; url=index.php");
                exit();
            }
            $idAtor=$_GET['escola'];
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
    <h1>Informação acerca da escola <?php 
      echo $escola['escola']?>
    </h1>
    <p>Resize this responsive page to see the effect!</p> 
  </div>
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>