<?php


// Iniciar sessão
session_start();




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include("ConnectionFactory.php");
    $email_user = $_POST['email_user'];
    $user_name = $_POST['user_name'];
    $password = md5($_POST['password_user']);
    //---------- USER --------------------
    $name_user = $_POST['name_user'];
    $sobrenome_user = $_POST['sobrenome_user'];
    $sexo_user = $_POST['sexo_user'];
    $datanasc_user = $_POST['datanasc_user'];
    $endereco_user = $_POST['endereco_user'];
    $cidade_user = $_POST['cidade_user'];
    $estado_user = $_POST['estado_user'];
    $pais_user = $_POST['pais_user'];
    $terms_acept = $_POST['terms_acept'];
    $role_user = NULL;


    $sql_Login = "CALL SP_INSERT_LOGIN(\"$email_user\",\"$user_name\",\"$password\");";
    $sql_Register = "CALL SP_INSERT_USER(\"$name_user\",\"$sobrenome_user\",\"$endereco_user\",\"$email_user\",\"$sexo_user\",\"$cidade_user\",\"$estado_user\",\"$pais_user\",\"$datanasc_user\",\"$role_user\",\"$user_name\",\"$terms_acept\");";


    mysqli_query($conexao, $sql_Login);
    mysqli_query($conexao, $sql_Register);
    echo mysqli_error($conexao);
    header("Location: ../View/Sign_In_MyInner.php");


}


?>