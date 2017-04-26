<?php

    // Conectar ao BD MySQL
    $conexao = mysqli_connect("localhost",
        "root",
        "root",
        "db_myinner");

    if (!$conexao) {
        echo "Erro ao se conectar!";
    }

?>