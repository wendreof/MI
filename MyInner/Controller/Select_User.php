<?php
include 'ConnectionFactory.php';
session_start(); //inicia a sessão

// Exibe dados do perfil (Foto, dados e todas as avaliações anteriores)
$user = $_GET['user'];
$email = $_GET['email'];
$sql = "SP_SELECT_USER (\"$user\", \"$email\");";

$result = mysqli_query($conexao, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
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

    }
}else {
    echo "estou aqui";

}
    var_dump($_SESSION);
    mysqli_error($conexao);




?>
