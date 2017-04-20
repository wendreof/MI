<?php include 'ConnectionFactory.php';
// Exibe dados do perfil (Foto, dados e todas as avaliações anteriores)

$sql = "SP_SELECT_USER (\"$user\", \"$email\");";

$user = mysqli_query($conexao, $sql);




?>