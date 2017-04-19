<?php

// Conectar ao BD MySQL
$conexao = mysqli_connect("localhost",
    "root",
    "1993",
    "db_myinner");

if (!$conexao) {
    echo "Erro ao se conectar!";
}

?>