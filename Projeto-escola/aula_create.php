<?php
    if(!empty($_SESSION['login'])){  
          if($_SESSION['login']== "admin" ){
            $idEscola=$_GET['escola'];
            if($_SERVER['REQUEST_METHOD']=='POST'){

                $data="";
                $instrutor="";
                $hora="";


                $timestamp = strtotime($_POST['data']);
                $day = date('D', $timestamp);


                $a=0;

                if(isset($_POST['hora'])){

                    $hora = $_POST['hora'];
                }

                if(isset($_POST['instrutor'])){

                    $instrutor = $_POST['instrutor'];
                }

                $con = new mysqli("localhost","root","","conducao");

                if($con->connect_errno!=0){

                    echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
                    exit;
                }

                elseif($a==0){

                    $sql = 'insert into aula(data,id_escola,instrutor,hora,dia) values(?,?,?,?,?)';
                    $stm = $con->prepare($sql);
                    if($stm!=false){
                        $stm->bind_param('sisss',$data,$idEscola,$instrutor,$hora,$day);
                        $stm->execute();
                        $stm->close();
                        
                        echo '<script>alert("Aula adicionado com sucesso");</script>';
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
            <title>Adicionar aula</title>
        </head>
        <body>
            <h1>Adicionar aula</h1><br>
            <form action="aula_create.php?escola=<?php echo $_GET['escola'] ?>" method="post"><br>
                <label>Data</label><input type="date" name="data" required><br><br>
                <label>Data</label><input type="time" name="hora" required><br><br>
                <label>Instrutor</label><input type="text" name="instrutor"required><br><br>
                <input type="submit" name="enviar">
                <button> <a href='index.php'>Cancelar</a></button><br><br>
            </form>
        </body>
        </html>

        <?php
            };
        }
    }
    else{
         header("refresh:5;url=login.php");
    }
?>