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
<link rel="stylesheet" href="../Assets/css/stylish-portfolio.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    </head>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
    <nav class="navbar navbar-default w3-theme-d2 w3-large">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="Dashboard_MyInner.php" class=" w3-button w3-padding-large " title="Pagina Inicial"><i class="fa fa-home w3-margin-right"></i></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                     <li><a href="Evaluation_Screen.php" class="w3-center w3-button w3-theme-d4" title="Avaliar"><i class="fa fa-star-o"></i></a></li>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle w3-theme-d4 w3-button " data-toggle="dropdown" title="Notificações"><i class="fa fa-bell "></i><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="w3-center w3-button w3-theme-l5 ">Action</a></li>
                                <li><a href="#" class="w3-center w3-button w3-theme-l5">Another action</a></li>
                                <li><a href="#" class="w3-center w3-button w3-theme-l5">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#" class="w3-center w3-button ">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Ir ao topo"><img src="../Assets/img/Douglas.jpg" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle w3-theme-d4 w3-button w3-responsive" data-toggle="dropdown"title="Configurações" ><i class="fa fa-gear"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="Update_User_MyInner.php" class="w3-center w3-button" title="Configurações de Conta"><i class="fa fa-user">  Configurações</i></a></li>
                            <li><a href="#" class="w3-center w3-button "> <i class="fa fa-ticket">  Ticket</i></a></li>
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
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">
            <!-- Profile -->
            <div class="w3-card-2 w3-round w3-white">
                <div class="w3-container">

                    <p class="w3-center"><img src="../Assets/img/Douglas.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                    <hr>
                    <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> <?php echo isset($_SESSION['NOME_USER'])? $_SESSION['NOME_USER'] : 'NOME'; ?>,<?php echo isset($_SESSION['SOBRENOME_USER'])? $_SESSION['SOBRENOME_USER'] : 'SOBRENOME'; ?></p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> <?php echo isset($_SESSION['CIDADE_USER'])? $_SESSION['CIDADE_USER'] : 'CIDADE'; ?>, <?php echo isset($_SESSION['PAIS_USER'])? $_SESSION['PAIS_USER'] : 'PAIS'; ?></p>
                    <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo date_format($date, 'd F Y'); ?></p>
                </div>
            </div>
            <br>

            <!-- Accordion -->
            <div class="w3-card-2 w3-round">
                <div class="w3-white">
                    <button onclick="dropDown('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-heartbeat fa-fw w3-margin-right"></i> Minhas Avaliações</button>
                    <div id="Demo1" class="w3-hide w3-container">
                        <br>

                        <div class="estrelas-all">
                    <?php for ($i=0;$i<5;$i++){ ?>
                            <p class="w3-theme-l2-star"><?php echo $aspectos[$i]; ?></p>
                        <div class="estrelas">
                            <input type="radio" id=<?php echo $aspectos[$i]; ?>."-empty" name=<?php echo $aspectos[$i]; ?>."-fb" value="0" checked/>
                            <label for=<?php echo $aspectos[$i]; ?>."-1"><i class="fa"></i></label>
                            <input type="radio" id=<?php echo $aspectos[$i]; ?>."-1" name=<?php echo $aspectos[$i]; ?>."-fb" value="1" />
                            <label for=<?php echo $aspectos[$i]; ?>."-2"><i class="fa"></i></label>
                            <input type="radio" id=<?php echo $aspectos[$i]; ?>."-2" name=<?php echo $aspectos[$i]; ?>."-fb" value="2" />
                            <label for=<?php echo $aspectos[$i]; ?>."-3"><i class="fa"></i></label>
                            <input type="radio" id=<?php echo $aspectos[$i]; ?>."-3" name=<?php echo $aspectos[$i]; ?>."-fb" value="3" />
                            <label for=<?php echo $aspectos[$i]; ?>."-4"><i class="fa"></i></label>
                            <input type="radio" id=<?php echo $aspectos[$i]; ?>."-4" name=<?php echo $aspectos[$i]; ?>."-fb" value="4" />
                            <label for=<?php echo $aspectos[$i]; ?>."-5"><i class="fa"></i></label>
                            <input type="radio" id=<?php echo $aspectos[$i]; ?>."-5" name=<?php echo $aspectos[$i]; ?>."-fb" value="5" />
                        </div>

                        <?php } ?>
                        </div>
                        <br>
                    </div><!-- Demo1 -->
                    <button onclick="dropDown('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Meus Avaliados</button>
                    <div id="Demo2" class="w3-hide w3-container">
                        <p>Some other text..</p>
                    </div><!-- Demo2 -->
                    <button onclick="dropDown('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
                    <div id="Demo3" class="w3-hide w3-container">
                        <div class="w3-row-padding">
                            <br>
                            <div class="w3-half">
                                <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="/w3images/fjords.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                        </div>
                    </div> <!-- Demo3 -->
                </div>
            </div>
            <br>

            <!-- Interests -->
            <div class="w3-card-2 w3-round w3-white w3-hide-small">
                <div class="w3-container">
                    <p>Citação favorita</p>
                    <p>

                        <span class="w3-tag w3-small w3-theme-l3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>

                    </p>
                </div>
            </div>
            <br>

            <!-- Alert Box -->
            <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
                <p><strong>Hey!</strong></p>
                <p>People are looking at your profile. Find out who.</p>
            </div>

            <!-- End Left Column -->
        </div>

        <!-- Middle Column -->


<?php  }else{
    header("Location: ../View/index.php");
}?>