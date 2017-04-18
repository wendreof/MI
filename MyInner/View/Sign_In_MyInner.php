
<?php
// Iniciar sessão
session_start();
$_SESSION["invalid"]=false;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Page from Login">
    <meta name="author" content="My Inner">

    <!-- Bootstrap Core CSS -->
    <link href="css/Template_MyInner.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-width-pics.css" rel="stylesheet">

    <title>My Inner - Login</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    [endif]-->

</head>

<body>




<!-- Navigation -->

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">MyInner</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#"><h4>Dashboard</h4></a>
                </li>
                <li>
                    <a href="#"><h4>O que Avaliar ?</h4></a>
                </li>
                <li>
                    <a href="#"><h4>Pesquisar</h4></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Full Width Image Header with Logo -->
<!-- Image backgrounds are set within the full-width-pics.css file. -->
<header class="image-bg-fluid-height"></header>

<!-- Content Section -->
<section>
    <div class="container-entrar">
        <h1 align="center">Entar</h1>
        <div id="box-login">
            <form action="../Controller/Login.php" method="post" >

                <br><input type="text" id="input_entrar" name="email_username" id="txt_name"
                           value="<?php if (isset($_COOKIE["email"])) { echo $_COOKIE["email"]; }?>"
                           maxlength="255" size="50"  placeholder="USER NAME OR EMAIL"  required> <br><!-- Criar um Evento JS para verificar disponibilidade e colocar btn sucesso caso disponivel e btn danger caso não <a class="btn btn-info" href="#">Ver</a> -->
                <br> <input type="password" id="input_entrar" name="password_user" id="txt_name" maxlength="8" size="50"  placeholder="PASSWORD" required><br>

                <br>
                    <input type="submit" name="login" id="login" class="btn btn-success" value="Login"> <button type="button" class="btn btn-link" id="link_cadastro" onclick="location.href= 'Sing_Up_MyInner.php'" >Cadastrar.</button>

                </div>

                </div>
            </form>

        </div>
    </div>
</section>



<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; My Inner 2017</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</footer>

<!-- jQuery -->
<script src="../js/Template_MyInner_jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/Template_MyInner.min.js"></script>

</body>

</html>
