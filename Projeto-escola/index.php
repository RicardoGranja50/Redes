<?php 
    session_start();
    $con=new mysqli("localhost","root","","conducao");
    if($con->connect_error!=0){
        echo"Ocorreu um erro ".$con->connect_error;
        exit;
    }else{
?>
<html>
<head>
  <title>Escolas de condução</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
  <?php
   if(!empty($_SESSION['login'])){  
      if($_SESSION['login']== "correto" || $_SESSION['login']== "admin" ){
        echo"<a href='processa_logout.php'>Logout</a>";
      }
      else{
        echo"<a href='login.php'>Login</a>";
      }
    }
  ?>
<div class="container">
  <div class="jumbotron">
    
    <h1>Escolas de Condução em Portugal</h1>
    <p>Pesquisa rápida e eficaz</p> 
  </div>
  <div class="row">
    <div class="col-sm-4">
      <h2>Norte</h2>
      <?php  
        $norte=$con->prepare('select * from escola where escola like "norte"');
        $norte->execute();

        $n=$norte->get_result();
        

        while($resultado=$n->fetch_assoc()){
          echo"<br>";
          echo '<br><h4><a href="escola_show.php?escola='.$resultado['id_escola'].'">';
          echo $resultado['nome'];
          echo'</a></h4>';    
        }
      ?>
    </div>
    <div class="col-sm-4">
      <h2>Centro</h2>
      <?php  
        $centro=$con->prepare('select * from escola where escola like "centro"');
        $centro->execute();
        $c=$centro->get_result();

        while($ce=$c->fetch_assoc()){
          echo"<br>";
          echo '<br><h4><a href="escola_show.php?escola='.$ce['id_escola'].'">';
          echo $ce['nome'];
          echo'</a></h4>';    
        }
      ?>
    </div>
    <div class="col-sm-4">
      <h2>Sul</h2>  
      <?php  
        $sul=$con->prepare('select * from escola where escola like "sul"');
        $sul->execute();
        $s=$sul->get_result();

        while($se=$s->fetch_assoc()){
          echo"<br>";
          echo '<br><h4><a href="escola_show.php?escola='.$se['id_escola'].'">';
          echo $se['nome'];
          echo'</a></h4>';    
        }
      ?>      
    </div>
  </div>
  <br><br><br>
  <?php
      if(!empty($_SESSION['login'])){  
        if($_SESSION['login']== "admin" ){
          echo "<button> <a href='escola_create.php'>Adicionar Escola</a></button>";
        }
      }
  ?>
</div>

</body>
</html>
<?php  
  }
?>
