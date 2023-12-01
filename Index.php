<?php
include('conexao.php');

if(isset($_POST['User']) || isset($_POST['senha'])) {

    if(strlen($_POST['User']) == 0) {
        echo "Preencha seu usuario";
    } else if(strlen($_POST['senha']) == 0) {
        echo  "Preencha sua senha";
    } else {

        $user = $mysqli->real_escape_string($_POST['User']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE User = '$user' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['user'];

            header("Location: webgu/index.php");

        } else {
            echo "Falha ao logar! Usuario ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body> 
    <main class="main">
  
<div class="container mt-4">
   
    <div class="row align-items-center">
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">
        <div class="panel-heading text-center">
       <h1> CHE4T LOGIN </h1>   
        <div class="form-floating mb-3">
                <input type="text" class="form-control" name="User" placeholder="Usuario"/>
                <label for="User">Usuario</label>
            </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="senha" placeholder="Senha"/>
                    <label for="senha">Senha</label>
            </div>
                 <button type="submit" class=" w-100 btn btn-lg btn-success">ENTRAR</button>
                </form>
            </div>
        </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</main>
</body>
<footer>
    <footer id="myFooter">
        <div class="container #0cccf4">
            <div class="row">
                <div class="row-cols-sm-9">
    <div class="footer-copyright">
            <h5>© 2023 Copyright - Icaro Belo & Gustavo silva.</h5>
        </div>
</footer>
</html>