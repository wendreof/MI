

<?php
session_start();
$_UP['pasta'] = '../Assets/img/';
$_UP['tamanho'] = 1024 * 1024 * 2; //2mb
$_UP['extensao'] = array('jpg','png','gif');
$_UP['renomear'] = true;

$extensao = strtolower(end(explode('.',$_FILES['img']['name'])));
if (array_search($extensao,$_UP['extensao']) === false){
    echo "<h3>extensão invalida</h3>";
    exit;
}

else if ($_UP['tamanho']< $_FILES['img']['size']){
    echo "<h3>tamanho invalido</h3>";
    exit;
}

else{
    if($_UP['renomear'] == true){

        $nome_user = $_SESSION['NOME_USER'].'.jpg';

    }else{

        $nome_user =$_FILES['img']['name'];

    }

    if(move_uploaded_file($_FILES['img']['tmp_name'],$_UP['pasta'] . $nome_user)){

    }
    else {
        echo "Ocorreu um erro em nosso servidor tentenovamente mais tarde !";
        exit;

    }


}

echo "executou todas as operações visualize no pasta img";
header("Location: ../View/Dashboard_MyInner.php")

?>
