<?php session_start();

$aspectos = [0=>'Etica',1=>'Moral',2=>'Responsabilidade',3=>'Inteligencia',4=>'Honestidade'];
$date=date_create(isset($_SESSION['DATANASC_USER'])? $_SESSION['DATANASC_USER'] : 'DATA DE NASCIMENTO');
if ($_SESSION['valid']){
?>
<!DOCTYPE html>
<html>
    <head>
<title>My Inner - A revolução ema avaliações.</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../Public/favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="../Assets/css/Template_MyInner.css"/>
<link rel="stylesheet" href="../Assets/css/Template_Css.css"/>
<link rel="stylesheet" href="../Assets/css/Core.css"/>
<link rel="stylesheet" href="../Assets/css/jquery.Jcrop.css"/>
<link rel="stylesheet" href="../Assets/css/stylish-portfolio.css"/>
<script type="text/javascript" src="../Assets/js/jquery.js"></script>
<script type="text/javascript" src="../Assets/js/jquery.Jcrop.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body class="w3-theme-l5">

<!-- Navbar -->
    <div class="w3-top">
        <nav class="navbar navbar-fixed-top w3-theme-d1">

            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="Dashboard_MyInner.php" class=" w3-button w3-padding-large " title="Pagina Inicial"><i class="fa fa-2x fa-home w3-margin-right"></i></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav ">
                        <li><a href="All_Users.php" class="w3-button w3-padding-large " title="Avaliar"><i class="fa fa-2x fa-balance-scale"></i></a></li>
                        <li><a href="My_Evaluation.php" class="w3-button w3-padding-large " title="Minhas Avaliações"><i class="fa fa-2x fa-star-o"></i><span class="badge">42</span></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                        <li href="#" class="dropdown-toggle w3-button w3-padding-large" data-toggle="dropdown"title="Configurações" ><i class="fa fa-2x fa-gear"></i><span class="caret"></span></li>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="w3-center w3-button" title="Configurações de Conta" data-toggle="modal" data-target="#myModal"><i class="fa fa-user">  Configurações</i></a></li>
                            <li><a href="Ticket.php" class="w3-center w3-button "> <i class="fa fa-ticket">  Ticket</i></a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../Controller/Logout.php" class="w3-center w3-button " title="Sair"><i class="fa fa-sign-out">  Sair</i></a></li>
                        </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->

        </nav>
    </div>

<!-- Page Container -->


<?php  }else{
    header("Location: ../View/index.php");
}?>