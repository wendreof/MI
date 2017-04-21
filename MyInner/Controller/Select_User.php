<html><pre></html>
<?php
include 'ConnectionFactory.php';
session_start(); //inicia a sessão

// Exibe dados do perfil (Foto, dados e todas as avaliações anteriores)

$sql = "SP_SELECT_USER ('wendreo@outlook.com');";

$result = mysqli_query($conexao, $sql);

    $row = mysqli_fetch_array($result);
        $_SESSION['ID_USER'] = $row['ID_USER'];
        $_SESSION['NOME_USER'] = $row['NOME_USER'];
        $_SESSION['SOBRENOME_USER'] = $row['SOBRENOME_USER'];
        $_SESSION['ENDERECO_USER'] = $row['ENDERECO_USER'];
        $_SESSION['EMAIL_USER'] = $row['EMAIL_USER'];
        $_SESSION['SEXO_USER'] = $row['SEXO_USER'];
        $_SESSION['CIDADE_USER'] = $row['CIDADE_USER'];
        $_SESSION['ESTADO_USER'] = $row['ESTADO_USER'];
        $_SESSION['PAIS_USER'] = $row['PAIS_USER'];
        $_SESSION['DATANASC_USER'] = $row['DATANASC_USER'];
        $_SESSION['USER_NAME'] = $row['USER_NAME'];
        $_SESSION['EMAIL_USER'] = $row['EMAIL_USER'];
        $_SESSION['ROLE_USER'] = $row['ROLE_USER'];



    echo "estou aqui";


    print_r($_SESSION);
    mysqli_error($conexao);




?>
<html></pre></html>