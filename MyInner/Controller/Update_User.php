<?php

include 'ConnectionFactory.php';

session_start();

$sql = "CALL SP_UPDATE_USER(ID_USER, NOME_USER, SOBRENOME_USER, ENDERECO_USER )";


?>