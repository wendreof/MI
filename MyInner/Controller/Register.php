<?php
    session_start(); // Iniciar sessão
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include("ConnectionFactory.php");
        $email_user = mysqli_real_escape_string($conexao,$_POST['email_user']);
        $user_name = mysqli_real_escape_string($conexao,$_POST['user_name']);
        $password = mysqli_real_escape_string($conexao,md5($_POST['password_user']));
        //---------- USER --------------------
        $name_user = mysqli_real_escape_string($conexao,$_POST['name_user']);
        $sobrenome_user = mysqli_real_escape_string($conexao,$_POST['sobrenome_user']);
        $cpf_user = mysqli_real_escape_string($conexao,sha1($_POST['cpf_user']));
        $sexo_user = mysqli_real_escape_string($conexao,$_POST['sexo_user']);
        $datanasc_user = mysqli_real_escape_string($conexao,$_POST['datanasc_user']);
        $endereco_user = mysqli_real_escape_string($conexao,$_POST['endereco_user']);
        $cidade_user = mysqli_real_escape_string($conexao,$_POST['cidade_user']);
        $estado_user = mysqli_real_escape_string($conexao,$_POST['estado_user']);
        $pais_user = mysqli_real_escape_string($conexao,$_POST['pais_user']);
        $terms_acept = mysqli_real_escape_string($conexao,$_POST['terms_acept']);
        $role_user = "U";
        $sql_Login = "CALL SP_INSERT_LOGIN(\"$email_user\",\"$user_name\",\"$password\");";
        $sql_Register = "CALL SP_INSERT_USER(\"$name_user\",\"$sobrenome_user\",\"$cpf_user\",\"$endereco_user\",\"$email_user\",\"$sexo_user\",\"$cidade_user\",\"$estado_user\",\"$pais_user\",\"$datanasc_user\",\"$role_user\",\"$user_name\",\"$terms_acept\");";
        mysqli_query($conexao, $sql_Login);
        mysqli_query($conexao, $sql_Register);
        header("Location: ../View/index.php");

    }
?>