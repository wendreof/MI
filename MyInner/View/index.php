<?php
session_start();

    $_SESSION['valid'] = false;
    $ETICA_VALUE = "Ética é um conjunto de conhecimentos extraídos da investigação do comportamento humano ao tentar explicar as regras morais de forma racional, fundamentada, científica e teórica. É uma reflexão sobre a moral.";
    $MORAL_VALUE = "Moral é o conjunto de regras aplicadas no cotidiano e usadas continuamente por cada cidadão. Essas regras orientam cada indivíduo, norteando as suas ações e os seus julgamentos sobre o que é moral ou imoral, certo ou errado, bom ou mau.";
    $HONESTIDADE_VALUE ="Honestidade é a palavra que indica a qualidade de ser verdadeiro: não mentir, não fraudar, não enganar.Quanto à etimologia, a palavra honestidade tem origem no latim honos, que remete para dignidade e honra.";
    $INTELIGENCIA_VALUE="Inteligência é um conjunto que forma todas as características intelectuais de um indivíduo, ou seja, a faculdade de conhecer, compreender, raciocinar, pensar e interpretar. A inteligência é uma das principais distinções entre o ser humano e os outros animais. ";
    $RESPONSABILIDADE_VALUE="Responsável é o adjetivo que qualifica algo ou alguém que é capaz de responder pelos seus próprios atos ou pelas ações de outras pessoas, ou seja, que assume a responsabilidade";
    include "../Model/States.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="Douglas" content="Autor">
    <link rel="shortcut icon" href="../Public/favicon.png" type="image/x-icon" />
    <title>MyInner</title>

    <!-- Bootstrap Core CSS -->
    <link href="../Assets/css/index.min.css" rel="stylesheet">
    <link href="../Assets/css/Template_MyInner.css" rel="stylesheet">
    <link href="../Assets/css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../Assets/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../Assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <script src="jquery.js" type="text/javascript"></script>
    <script src="jquery.maskedinput.js" type="text/javascript">
    <script type="text/javascript">
    jQuery(function($){
    $("#cpf_user").mask("999.999.999-99");
    $("#txt_datanasc").mask("(999) 999-9999");
    $("#tin").mask("99-9999999");
    $("#ssn").mask("999-99-9999");
    });
    </script>

</head>

<body>


    <!-- Navigation -->
    <!-- Navigation -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <a href="#about" style="text-decoration: none"><button class="btn btn-success">My Inner ?</button>&nbsp;&nbsp;</a>
                    <a href="#services" style="text-decoration: none"><button class="btn btn-success" href="#services">Objetivos</button>&nbsp;&nbsp;</a>
                    <a href="#team" style="text-decoration: none"><button class="btn btn-success" href="#team">Quem Somos</button>&nbsp;&nbsp;</a>
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Cadastrar-me</button>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Formulário de registro</h4>
                                    </div>
                                    <div class="modal-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        <form action="../Controller/Register.php" method="post"  name="formlogin">
                                           <div class="form-signup-login">
                                            <h3>Dados de Login</h3>
                                            <br><input type="text" class="input_css" name="user_name" style="width: 50%;" maxlength="10"  required placeholder="USER NAME" >
                                            <input type="password" style="width: 47%" class="input_css" name="password_user" maxlength="8"  required placeholder="PASSWORD"><br><!-- Criar um Evento JS para verificar disponibilidade e colocar btn sucesso caso disponivel e btn danger caso não <a class="btn btn-info" href="#">Ver</a> -->
                                            <input type="text" class="input_css" name="email_user" style="width: 98%;" maxlength="255"  required placeholder="EMAIL"><br>
                                            <hr>
                                            <h3>Dados de Usuario</h3>
                                            <div class="form-group">
                                                <input type="text" class="input_css" name="name_user" id="txt_name" style="width: 50%;" maxlength="15" required placeholder="NOME ">
                                                <input type="text" class="input_css" name="sobrenome_user" id="sobrenome" style="width: 47%;" maxlength="15"  required placeholder="SOBRENOME">
                                                <legend>SEXO :
                                                        <input type="radio" id="input_css" name="sexo_user"  value="M" checked/><label for="input_css">Masculino</label>
                                                        <input type="radio" id="input_css" name="sexo_user" value="F"/><label for="input_css">Feminino</label>
                                                </legend>
                                                <input type="date" class="input_css" name="datanasc_user"  style="width: 40%;" maxlength="8"  placeholder="DATA NASCIMENTO" required>
                                                <input type="text" id="cpf_user" class="input_css" name="cpf_user"  style="width: 57%;"   placeholder="CPF">
                                                <input type="text" class="input_css" name="endereco_user"  style="width: 57%;" maxlength="255"   placeholder="ENDERECO">
                                                <input type="text" class="input_css" name="cidade_user"  style="width: 40%;"   placeholder="CIDADE">

                                                <select name="estado_user" id="estado" style="min-width: 47%" >
                                                    <?php for ($i=0;$i<=count($estados);$i++){ require_once "../Model/States.php"; $estados = setStates();?>
                                                    <option value=<?php echo $estados [$i];?>><?php echo $estados[$i];?></option>
                                                    <?php } ?>
                                                    </optgroup>

                                                </select><input type="text" class="input_css" name="pais_user"   style="width: 50%;" placeholder="PAIS" ><br>
                                                <p><input type="checkbox" name="terms_acept"  value="1" checked> Li e Concordo com os <a href="#">Termos de Uso</a> e <a href="#"> Política de Privacidade</a>.</p>
                                            </div>
                                           </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-success">Criar minha conta</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                </ul>
                <form class="navbar-form navbar-right" action="../Controller/Login.php" method="post">
                    <div class="form-group">
                        <input type="text" name="email_username" placeholder="Email ou Usuario" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_user" placeholder="Senha" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Entrar</button>
                </form>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <?php if (isset($_SESSION['RegError'])) { ?>
            <div style="margin:0;" class="alert alert-danger text-center" role="alert"><b>Erro:</b> <?php echo $_SESSION['RegError'];?> já existe. Por favor caso tenha esquecido seus dados de
                login abra um ticket e enviaremos seus dados via Email, previamente cadastrado.Agradecemos a compreenssão.</div>
        <?php } unset($_SESSION['RegError']);?>

        <?php if (isset($_SESSION['Error_Login'])) { ?>
            <div style="margin:0;" class="alert alert-danger text-center" role="alert"><b>Erro:</b> Login incorreto,tente novamente. Por favor caso tenha esquecido seus dados de
                login abra um ticket e enviaremos seus dados via Email, previamente cadastrado.Agradecemos a compreenssão.</div>
        <?php } unset($_SESSION['Error_Login']);?>

        <?php if (isset($_SESSION['RegisterOk'])) { ?>
            <div style="margin:0;" class="alert alert-success text-center" role="alert"><b>Sucesso:</b> Cadastro realizado com suceso. Por favor efetue o login para proseguir.</div>
        <?php } unset($_SESSION['RegisterOk']);?>


    </nav>
        <!-- /.container-fluid -->

    <!-- Header -->
     <header id="top" class="header">

    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Aqui ficara uma fase falando sobre o myinner, curiosidades etc</h2>
                    <p class="lead">se voçe ainda não faz parte cadastre para começar a fazer parte desta nova era de redes sociais <a data-toggle="modal" data-target="#myModal" href="#">Cadastrar</a>.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nossos Objetivos</h2>
                    <h3 class="section-subheading text-muted">Você ainda não sabe por que cadastra-se no nosso sistema ?.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Visão</h4>
                    <p class="text-muted">Nossa visão baseia-se em fortalecer a confiança do mercado inter-pessoal.Gerando através de nosso sistema um ponto
                        de referência a todos aquele que necessitarem de um apoio em sua palavra de honestidade, tendo em vista o E-Commerce como um dos principais
                        focos pela falta de referencia existente hoje na Internet .</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-crosshairs fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Missão</h4>
                    <p class="text-muted">O foco é oferecer credibilidade correto ? Então nada mais do que claro é o nosso comprometimento com a segurança
                        e o processamento dos dados aqui fornecidos para credibilizar e autenticar a eficácia do sistema. Tornando-nos uma rede social confiável em nossos conteúdos .</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-balance-scale fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Valores</h4>
                    <p class="text-muted">Os nossos valores baseiam-se em nossos navegantes. Juntos iremos tornar um mundo melhor baseado em valores reais ausentes no mundo de hoje.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">De Quem Foi a Idéia ?</h2>
                    <h3 class="section-subheading text-muted">Aqui estão os responsaveis..</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="../Assets/img/Douglas.jpg" class="img-responsive img-circle" alt="">
                        <h4>Douglas Domenciano</h4>
                        <p class="text-muted">Founder and CEO</p>
                        <ul class="list-inline social-buttons">
                            <li><a href=""><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/douglas.junior.948" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/douglas-domenciano-84a04212b" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="../Assets/img/Wendreo.jpg" class="img-responsive img-circle" alt="">
                        <h4>Wendreo Fernandes</h4>
                        <p class="text-muted">Co-Founder and CTO</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/wendreofoficial"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/wendreo.fernandes"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/wendreo-luciano-fernandes-04b887106/"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="../Assets/img/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Pedro Bono</h4>
                        <p class="text-muted">Analist Senior</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="../Assets/img/Marcus.jpg" class="img-responsive img-circle" alt="">
                        <h4>Marcus Cantarelli</h4>
                        <p class="text-muted">Analist Senior</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Call to Action -->
    <aside class="call-to-action bg-primary" id="aspectos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Aspectos avaliados </h3>
                    <div class="tooltip-demo">
                        <button type="button" class="btn btn-success btn-lg" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo $ETICA_VALUE; ?>">
                            ÉTICA &nbsp; <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-lg" data-container="body" data-toggle="popover" data-placement="top" data-content="<?php echo $MORAL_VALUE; ?>">
                            MORAL &nbsp; <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-lg" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo $HONESTIDADE_VALUE; ?>">
                            HONESTIDADE &nbsp; <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-lg" data-container="body" data-toggle="popover" data-placement="top" data-content="<?php echo $INTELIGENCIA_VALUE; ?>">
                            INTELIGENCIA &nbsp; <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-lg" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo $RESPONSABILIDADE_VALUE; ?>">
                            RESPONSABILIDADE &nbsp; <i class="fa fa-info-circle" aria-hidden="true"></i>

                        </button>
                    </div>
                </div><!-- /.modal-dialog -->
            </div>
        </div>
    </aside>


    <!-- Footer -->
    <footer id="foot">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Por que ser BOM ainda importa !</strong>
                    </h4>
                    <p>3481 Endereco
                        <br>Rua aqui, Pais CEP</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i>Telefone 235346356</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; MyInner 2017</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="../Assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../Assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
        // Closes the sidebar menu
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        // Scrolls to the selected menu item on the page
        $(function() {
            $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
        //#to-top button appears after scrolling
        var fixed = false;
        $(document).scroll(function() {
            if ($(this).scrollTop() > 250) {
                if (!fixed) {
                    fixed = true;
                    // $('#to-top').css({position:'fixed', display:'block'});
                    $('#to-top').show("slow", function() {
                        $('#to-top').css({
                            position: 'fixed',
                            display: 'block'
                        });
                    });
                }
            } else {
                if (fixed) {
                    fixed = false;
                    $('#to-top').hide("slow", function() {
                        $('#to-top').css({
                            display: 'none'
                        });
                    });
                }
            }
        });
        // Disable Google Maps scrolling
        // See http://stackoverflow.com/a/25904582/1607849
        // Disable scroll zooming and bind back the click event
        var onMapMouseleaveHandler = function(event) {
            var that = $(this);
            that.on('click', onMapClickHandler);
            that.off('mouseleave', onMapMouseleaveHandler);
            that.find('iframe').css("pointer-events", "none");
        }
        var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
        $('.map').on('click', onMapClickHandler);




    </script>
    <script>
        // tooltip demo
        $('.tooltip-demo').tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body"
        })
        // popover demo
        $("[data-toggle=popover]")
            .popover()
    </script>
</body>

</html>

