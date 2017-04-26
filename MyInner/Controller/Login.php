<?php

    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    include("ConnectionFactory.php");
    $email_username = $_POST['email_username'];
    $password = md5($_POST['password_user']);

    $sql = "CALL SP_VALIDATE_LOGIN (\"$email_username\",\"$email_username\",\"$password\");";

    $login = mysqli_query($conexao, $sql);

    // Se encontrou o login/senha, loga...
    if (mysqli_num_rows($login) > 0) {


        // Salva dados do BD na sessão atual
        $login = mysqli_fetch_array($login);

        $_SESSION["user"] = $login["USER_NAME"];


        // Cria cookie para lembrar do email
        setcookie("email", $_POST["email_username"], time()+3600);


        // Redireciona para página
        header("Location: ../View/Dashboard_MyInner.php");

    } else {
        $_SESSION["invalid"]=true;
        header("Location: ../View/Sign_In_MyInner.php");
    }
    }else{
        echo "estou aqui";
    }

?>