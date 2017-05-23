<?php session_start(); /*if ($_SESSION['valid'])*/{
$aspectos = [0=>'Etica',1=>'Moral',2=>'Responsabilidade',3=>'Inteligencia',4=>'Honestidade'];
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
                <li><a href="#" class="w3-center w3-button w3-theme-d4" title="Avaliar"><i class="fa fa-star-o"></i></a></li>
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

<div class="w3-card-2 w3-white w3-card-evaluation">
    <div class="w3-container">
        <p class="w3-center"><img src="../Assets/img/Douglas.jpg" class="w3-circle" style="height:300px;width:300px" alt="Avatar"></p>
        <h2 class="w3-center"><?php echo isset($_SESSION['NOME_USER'])? $_SESSION['NOME_USER'] : 'NOME'; ?> <?php echo isset($_SESSION['SOBRENOME_USER'])? $_SESSION['SOBRENOME_USER'] : 'SOBRENOME'; ?></h2>
        <hr>
        <?php for ($i=0;$i<5;$i++){ ?>
        <div class="estrelas" style="width: 9.8% ;display: inline-block ; margin: 80px;padding: 2px">
            <h4 class="text-center">ÉTICA</h4>
            <input type="radio" id="cm_star-empty" name="fb" value="" />
            <label for="cm_star-1"><i class="fa" style="margin-left: -30px"></i></label>
            <input type="radio" id="cm_star-1" name="fb" value="1" />
            <label for="cm_star-2"><i class="fa" style="margin-left: -20px"></i></label>
            <input type="radio" id="cm_star-2" name="fb" value="2"/>
            <label for="cm_star-3"><i class="fa" style="margin-left: -20px"></i></label>
            <input type="radio" id="cm_star-3" name="fb" value="3"/>
            <label for="cm_star-4"><i class="fa" style="margin-left: -20px"></i></label>
            <input type="radio" id="cm_star-4" name="fb" value="4"/>
            <label for="cm_star-5"><i class="fa" style="margin-left: -20px"></i></label>
            <input type="radio" id="cm_star-5" name="fb" value="5" checked/>
        </div>
        <?php } ?>
    </div>
</div>
<?php } ?>
<footer class="w3-container  w3-center w3-margin-top">
</footer>
</body>
</html>
<script>

    function checkstar(value) {
        var btn = document.getElementById("cm_star-"+value);
        btn.checked = true;
    }
    // Accordion
    function dropDown(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme-d1";
        } else {
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-theme-d1", "");
        }
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>
