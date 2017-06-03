<?php session_start();
$aspectos = [0=>'Etica',1=>'Moral',2=>'Responsabilidade',3=>'Inteligencia',4=>'Honestidade'];
$date=date_create(isset($_SESSION['DATANASC_USER'])? $_SESSION['DATANASC_USER'] : 'DATA DE NASCIMENTO');
/*if ($_SESSION['valid'])*/{
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
<section>
<div class="w3-white w3-card-evaluation">
    <div style="display: inline-block ; margin-left: 4%;margin-right:-100px;float: left ;width: 30%">
        <p class="w3-center"><img src="../Assets/img/Douglas.jpg" class="w3-circle" style="height:200px;width:200px" alt="Avatar"></p>
        <h2 class="w3-center"><?php echo isset($_SESSION['NOME_USER'])? $_SESSION['NOME_USER'] : 'NOME'; ?> <?php echo isset($_SESSION['SOBRENOME_USER'])? $_SESSION['SOBRENOME_USER'] : 'SOBRENOME'; ?></h2>
        <hr>
        <?php for ($i=0;$i<5;$i++){ ?>
            <div class="estrelas" style="width: 89%; ;margin: auto;">
                <h4 class="text-center w3-theme-l2-star" style="border-radius: 5px;"><?php echo $aspectos[$i]; ?></h4>

                <input type="radio" id=<?php echo $aspectos[$i]; ?>."-empty" name=<?php echo $aspectos[$i]; ?>."-fb" value="0" checked/>
                <label for=<?php echo $aspectos[$i]; ?>."-1"><i class="fa" ></i></label>
                <input type="radio" id=<?php echo $aspectos[$i]; ?>."-1" name=<?php echo $aspectos[$i]; ?>."-fb" value="1" />
                <label for=<?php echo $aspectos[$i]; ?>."-2"><i class="fa" ></i></label>
                <input type="radio" id=<?php echo $aspectos[$i]; ?>."-2" name=<?php echo $aspectos[$i]; ?>."-fb" value="2" />
                <label for=<?php echo $aspectos[$i]; ?>."-3"><i class="fa" ></i></label>
                <input type="radio" id=<?php echo $aspectos[$i]; ?>."-3" name=<?php echo $aspectos[$i]; ?>."-fb" value="3" />
                <label for=<?php echo $aspectos[$i]; ?>."-4"><i class="fa""></i></label>
                <input type="radio" id=<?php echo $aspectos[$i]; ?>."-4" name=<?php echo $aspectos[$i]; ?>."-fb" value="4" />
                <label for=<?php echo $aspectos[$i]; ?>."-5"><i class="fa" ></i></label>
                <input type="radio" id=<?php echo $aspectos[$i]; ?>."-5" name=<?php echo $aspectos[$i]; ?>."-fb" value="5" />
            </div>
        <?php } ?>
    </div>

    <div style="width:60%; display:inline-block; float: right; margin-left: -100px ;">
           <textarea style="width: 80%"></textarea>
    </div>
    </div>
</div>
</section>
<aside>
<div class="w3-white w3-card-evaluation" style="width:20%; display:inline-block; float: right;margin-right: 10px">
    <div class="">
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
            <img src="../Assets/img/Wendreo.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
            <span class="w3-right w3-opacity">1 min</span>
            <h4>John Doe</h4><br>
            <hr class="w3-clear">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>

        <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
            <img src="../Assets/img/Pedro.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
            <span class="w3-right w3-opacity">16 min</span>
            <h4>Jane Doe</h4><br>
            <hr class="w3-clear">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>


    </div>
</div>
</aside>
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
