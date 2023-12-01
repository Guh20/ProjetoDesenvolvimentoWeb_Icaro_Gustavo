<?php
include('conexao.php');

if(isset($_POST['User']) || isset($_POST['Password'])) {

    if(strlen($_POST['User']) == 0) {
        echo "Preencha seu usuario";
    } else if(strlen($_POST['Password']) == 0) {
        echo "Preencha sua senha";
    } else {

        $user = $mysqli->real_escape_string($_POST['User']);
        $senha = $mysqli->real_escape_string($_POST['Password']);

        $sql_code = "SELECT * FROM usuarios WHERE User = '$user' AND senha = '$Password'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! Usuario ou senha incorretos";
        }

    }

}
?>