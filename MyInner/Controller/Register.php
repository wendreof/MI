<?php


// Iniciar sessão
session_start();
include("ConnectionFactory.php");



if (isset($_POST['register_bt'])) {
    $email_user = $_GET['user_name'];
    $user_name = $_GET['email_user'];
    $password = md5($_GT['password_user']);
    //---------- USER --------------------
    $name_user = $_GET['name_user'];
    $sobrenome_user = $_GET['sobrenome_user'];
    $sexo_user = $_GET['sexo_user'];
    $datanasc_user = $_GET['datanasc_user'];
    $endereco_user = $_GET['endereco_user'];
    $cidade_user = $_GET['cidade_user'];
    $estado_user = $_GET['estado_user'];
    $pais_user = $_GET['pais_user'];
    $terms_acept = $_GET['terms_acept'];

// Conecta ao BD
    $conexao = mysqli_connect("localhost", "root", "root", "db_myinner");

// Roda SQL pra verificar login

    $sql_login = "CALL SP_INSERT_LOGIN(\"$email_user\",\"$user_name\",\"$password\");";
    $sql_register = "CALL SP_INSERT_USER(\"$name_user\",\"$sobrenome_user\",\"$endereco_user\",\"$email_user\",\"$sexo_user\",\"$cidade_user\",\"$estado_user\",\"$pais_user\",\"$datanasc_user\",\"$user_name\");";


    mysqli_multi_query($conexao, $sql_login,$sql_register);
    header("Location: ../View/Sign_In_MyInner.php");

    echo mysqli_error();
}



?>
