<?php session_start();
$aspectos = [0=>'Etica',1=>'Moral',2=>'Responsabilidade',3=>'Inteligencia',4=>'Honestidade'];
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    </head>
    <body class="w3-theme-l5">
<div class="w3-top ">
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
                <li><a href="#" class="w3-button w3-padding-large " title="Avaliar"><i class="fa fa-2x fa-balance-scale"></i></a></li>
                <li><a href="#" class="w3-button w3-padding-large " title="Minhas Avaliações"><i class="fa fa-2x fa-star-o"></i><span class="badge">42</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <li href="#" class="dropdown-toggle w3-button w3-padding-large" data-toggle="dropdown"title="Configurações" ><i class="fa fa-2x fa-gear"></i><span class="caret"></span></li>
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
    <hr>
    <div style="display: inline-block ; margin-left: auto;float: left ;width: 100%">
        <p class="w3-center"><img src="../Assets/img/Douglas.jpg" class="w3-circle" style="height:35%;width:35%" alt="Avatar"></p>
        <!-- Abaixo encontra-se todos os dados referentes ao avaliado, e acima a imagens de seu perfil sendo buscada pelo id, que anteriormente no momento de seu upload será gravado com o
        id do usuário para facilitar buscas e exibição da mesma.-->
        <h3 class="w3-center"><?php echo isset($_SESSION['NOME_USER'])? $_SESSION['NOME_USER'] : 'NOME'; ?> <?php echo isset($_SESSION['SOBRENOME_USER'])? $_SESSION['SOBRENOME_USER'] : 'SOBRENOME'; ?></h3>
        <hr>
        <form action="" method="post" name="formAvaliacao">
        <?php for ($i=0;$i<5;$i++){ ?>
            <div class="estrelas" style="width: 100%; ;margin: auto;">
                <h4 class="text-center w3-theme-l2-star"><?php echo $aspectos[$i]; ?></h4>
                <input  type="radio" id=<?php echo $aspectos[$i]; ?>."-empty" name=<?php echo $aspectos[$i]; ?>."-fb" value="0" checked/>
                <label style="margin-left: 20%;" for=<?php echo $aspectos[$i]; ?>."-1"><i class="fa" ></i></label>
                <input type="radio" id=<?php echo $aspectos[$i]; ?>."-1" name=<?php echo $aspectos[$i]; ?>."-fb" value="1"  checked/>
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
    <textarea style="width: 80%;max-width: 80%;min-width: 80%; padding: 10px;margin: 10px;margin-left: 10%;border-radius: 10px" rows="10" required ></textarea>
    <p class="text-center"><input type="submit" class="btn btn-success" value="Avaliar">&nbsp;<input type="reset" class="btn btn-danger" value="Cancelar"></p>
    </form>
    <hr>
</div>


</section>

<aside>
    <!-- Aqui será feito o carregamento de todos as avaliações, buscando somente os comentários e hora(resultado da hora avaliada para a atual(gerando um tempo exibido.
       Exemplo: está avaliação foi feita a 6 horas atrás. ))
       E trará também os ids necessários para mostrar a imagem referente a quem fez a avaliação, gerando um looping para buscar todas e exibi-las
       observação : trazerno maximo tres registros de cada lado. -->
    <div class="w3-white w3-card-evaluation" style="width:61%; float: right;margin-right: 3%">
        <hr>
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

        <hr>

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
