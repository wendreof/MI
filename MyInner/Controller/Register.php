<?php
    session_start(); // Iniciar sessão
        $user_nameU = mysqli_real_escape_string($conexao,$_POST['user_name']);
        $emailU = mysqli_real_escape_string($conexao,$_POST['email_user']);
        $cpfU = mysqli_real_escape_string($conexao,$_POST['cpf_user']);

        $sql_check = "SELECT FC_CHECK_EXISTS (\"$user_nameU\",\"$emailU\",\"$cpfU\");";


        $check = mysqli_query($conexao, $sql_check);


        // Se encontrou o login/senha, loga...
        if (mysqli_num_rows($check) != null) {
            // Redireciona para página
           $_SESSION['RegError'] = $check;
            header("Location: ../Views/index.php");
            setcookie("USER_NAME", $_POST["user_name"], time()+3600);
            setcookie("EMAIL_USER", $_POST["email_username"], time()+3600);
            setcookie("NOME_USER", $_POST["nome_user"], time()+3600);
            setcookie("SOBRENOME_USER", $_POST["sobrenome_user"], time()+3600);
            setcookie("DATANASC_USER", $_POST["datanasc_user"], time()+3600);
            setcookie("CPF_USER", $_POST["cpf_user"], time()+3600);
            setcookie("ENDERECO_USER", $_POST["endereco_user"], time()+3600);
            setcookie("CIDADE_USER", $_POST["cidade_user"], time()+3600);
            setcookie("PAIS_USER", $_POST["pais_user"], time()+3600);
        }else {


            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                include("ConnectionFactory.php");
                $email_user = mysqli_real_escape_string($conexao, $_POST['email_user']);
                $user_name = mysqli_real_escape_string($conexao, $_POST['user_name']);
                $password = mysqli_real_escape_string($conexao, md5($_POST['password_user']));
                //---------- USER --------------------
                $name_user = mysqli_real_escape_string($conexao, $_POST['name_user']);
                $sobrenome_user = mysqli_real_escape_string($conexao, $_POST['sobrenome_user']);
                $cpf_user = mysqli_real_escape_string($conexao, sha1($_POST['cpf_user']));
                $sexo_user = mysqli_real_escape_string($conexao, $_POST['sexo_user']);
                $datanasc_user = mysqli_real_escape_string($conexao, $_POST['datanasc_user']);
                $endereco_user = mysqli_real_escape_string($conexao, $_POST['endereco_user']);
                $cidade_user = mysqli_real_escape_string($conexao, $_POST['cidade_user']);
                $estado_user = mysqli_real_escape_string($conexao, $_POST['estado_user']);
                $pais_user = mysqli_real_escape_string($conexao, $_POST['pais_user']);
                $terms_acept = mysqli_real_escape_string($conexao, $_POST['terms_acept']);
                $role_user = "U";
                $sql_Login = "CALL SP_INSERT_LOGIN(\"$email_user\",\"$user_name\",\"$password\");";
                $sql_Register = "CALL SP_INSERT_USER(\"$name_user\",\"$sobrenome_user\",\"$cpf_user\",\"$endereco_user\",\"$email_user\",\"$sexo_user\",\"$cidade_user\",\"$estado_user\",\"$pais_user\",\"$datanasc_user\",\"$role_user\",\"$user_name\",\"$terms_acept\");";
                mysqli_query($conexao, $sql_Login);
                mysqli_query($conexao, $sql_Register);
                header("Location: ../View/index.php");

            }
        }
?>