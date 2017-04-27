<?php

include 'ConnectionFactory.php';

session_start();

$sql = "CALL SP_UPDATE_USER( '{$_POST['id_user']}',
        '{$_POST['name_user']}', 
        '{$_POST['sobrenome_user']}', 
        '{$_POST['endereco_user']}', 
        '{$_POST['sexo_user']}', 
        '{$_POST['cidade_user']}', 
        '{$_POST['estado_user']}', 
        '{$_POST['pais_user']}', 
        '{$_POST['datanasc_user']}');";

mysqli_query($conexao, $sql);


?>