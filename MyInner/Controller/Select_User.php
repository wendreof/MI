
<?php  // Exibe dados do perfil (Foto, dados e todas as avaliações anteriores)
    session_start(); //inicia a sessão
    if($_SESSION['user']!= null) {
        include 'ConnectionFactory.php';

        $us = $_SESSION['user'];



        $sql = "CALL SP_SELECT_USER ('$us');"; // SQL PARA CONSULTAR OS DADOS DO USUÁRIO

        $result = mysqli_query($conexao, $sql);

        while ($row = mysqli_fetch_array($result)) {
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


        header("Location: ../View/Dashboard_MyInner.php");
        unset($_SESSION['user']);
    }else{
        echo "vaiavel vaiza";
    }

