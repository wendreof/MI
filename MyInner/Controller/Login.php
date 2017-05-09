<?php

    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    include("ConnectionFactory.php");
    $email_username = mysqli_real_escape_string($conexao,$_POST['email_username']);
    $password = mysqli_real_escape_string($conexao,md5($_POST['password_user']));

    $sql = "CALL SP_VALIDATE_LOGIN (\"$email_username\",\"$email_username\",\"$password\");";

    $login = mysqli_query($conexao, $sql);

    // Se encontrou o login/senha, loga...
    if (mysqli_num_rows($login) > 0) {

        $_SESSION["user"] = $email_username;

        // Cria cookie para lembrar do email
        setcookie("email", $_POST["email_username"], time()+3600);


        // Redireciona para página
        header("Location: Select_User.php");
        $_SESSION["valid"]= TRUE;
    } else {
        $_SESSION["valid"]= FALSE;
        $_SESSION['Error_Login']= true;
        header("Location: ../View/index.php");
    }
    }else{
        header("Location: ../View/index.php");

    }

?>