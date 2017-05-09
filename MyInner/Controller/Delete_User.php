<?php
    session_start();
    include ("../Controller/ConnectionFactory.php");
    $USER_NAME = $_SESSION['USER_NAME'];
    $EMAIL_USER = $_SESSION['EMAIL_USER'];


        $sql= "CALL SP_DELETE_USER('".$USER_NAME."','".$EMAIL_USER."');";
       echo $sql;
         mysqli_query($conexao,$sql);
         mysqli_close($conexao ); // Fechamos a conexão com o banco de dados

         session_destroy();
         unset($_SESSION,$_COOKIE);
         header("Location: ../View/index.php");


    ?>