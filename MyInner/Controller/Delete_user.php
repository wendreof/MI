<?php
session_star();
$USER_NAME = $_SESSION['USER_NAME'];
$EMAIL_USER = $_SESSION['EMAIL_USER'];
    include ("../Controller/ConnectionFactory.php");
    $sql= "CALL SP_DELETE_USER($USER_NAME,$EMAIL_USER)";
    mysqli_query($conexao,$sql);
    mysqli_close($conexao ); // Fechamos a conexão com o banco de dados
    ?>