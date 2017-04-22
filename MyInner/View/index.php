<?php
session_start();


    $ETICA_VALUE = "Ética é um conjunto de conhecimentos extraídos da investigação do comportamento humano ao tentar explicar as regras morais de forma racional, fundamentada, científica e teórica. É uma reflexão sobre a moral.";
    $MORAL_VALUE = "Moral é o conjunto de regras aplicadas no cotidiano e usadas continuamente por cada cidadão. Essas regras orientam cada indivíduo, norteando as suas ações e os seus julgamentos sobre o que é moral ou imoral, certo ou errado, bom ou mau.";
    $HONESTIDADE_VALUE ="Honestidade é a palavra que indica a qualidade de ser verdadeiro: não mentir, não fraudar, não enganar.Quanto à etimologia, a palavra honestidade tem origem no latim honos, que remete para dignidade e honra.";
    $INTELIGENCIA_VALUE="Inteligência é um conjunto que forma todas as características intelectuais de um indivíduo, ou seja, a faculdade de conhecer, compreender, raciocinar, pensar e interpretar. A inteligência é uma das principais distinções entre o ser humano e os outros animais. ";
    $RESPONSABILIDADE_VALUE="Responsável é o adjetivo que qualifica algo ou alguém que é capaz de responder pelos seus próprios atos ou pelas ações de outras pessoas, ou seja, que assume a responsabilidade";


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Douglas" content="">
    <link rel="shortcut icon" href="../../favicon.png" type="image/x-icon" />
    <title>MyInner</title>

    <!-- Bootstrap Core CSS -->
    <link href="../Assets/css/index.min.css" rel="stylesheet">
    <link href="../Assets/css/agency.min.css" rel="stylesheet">
    <link href="../Assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../Assets/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../Assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!-- <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> -->
     <!-- <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> -->
 <!--[endif]-->

</head>

<body>

    <!-- Navigation -->
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right menu-right">

                    <li>
                        <a class="Menu" href="#services">Por Que Cadastrar-se ?</a>
                    </li>
                    <li>
                        <a class="Menu" href="#">O Que posso  Avaliar ?</a>
                    </li>
                    <li>
                        <a class="Menu" href="#team">Quem Somos</a>
                    </li>
                    <li>
                        <a class="Menu" href="#">Sing In</a>
                    </li>
                    <li>
                        <a class="Menu" href="#">Sign Up</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!-- Header -->
     <header id="top" class="header">

    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Aqui ficara uma fase falando sobre o myinner, curiosidades etc</h2>
                    <p class="lead">se voçe ainda não faz parte cadastre para começar a fazer parte desta nova era de redes sociais <a target="_self" href="Sing_Up_MyInner.php">Cadastrar</a>.</p>
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
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Visão</h4>
                    <p class="text-muted">Nossa visão baseia-se em fortalecer a confiança do mercado inter-pessoal.Gerando travez de nosso sistema um ponto
                    de referência a todos aquele que necessitarem de um apoio em sua palavra de honestidade,tendo em vista o E-Commerce como um dos principais
                        focos pela falta de referencia existente hoje na Internet.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Missão</h4>
                    <p class="text-muted">O foco é oferecer credibilidade correto ? Então nada mais do que claro é o nosso comprometimento com a segurança
                        e o processamento dos dados aqui fornecidos para credibilizar e autenticar a eficacia do sistema.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Valores</h4>
                    <p class="text-muted">Os nossos valores baseiam-se em nossos navegantes. Junstos iremos tornar um mundo melhor baseado em valores morais e éticos.</p>
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
                        <p class="text-muted">Full Developer and COO</p>
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
                        <img src="../Assets/img/3.jpg" class="img-responsive img-circle" alt="">
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
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Aspectos avaliados </h3>
                    <div class="tooltip-demo">
                        <button type="button" class="btn btn-success btn-lg" data-container="body" data-toggle="popover" data-placement="left" data-content="<?php echo $ETICA_VALUE; ?>">
                            ÉTICA
                        </button>
                        <button type="button" class="btn btn-success btn-lg" data-container="body" data-toggle="popover" data-placement="top" data-content="<?php echo $MORAL_VALUE; ?>">
                            MORAL
                        </button>
                        <button type="button" class="btn btn-success btn-lg" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo $HONESTIDADE_VALUE; ?>">
                            HONESTIDADE
                        </button>
                        <button type="button" class="btn btn-success btn-lg" data-container="body" data-toggle="popover" data-placement="top" data-content="<?php echo $INTELIGENCIA_VALUE; ?>">
                            INTELIGENCIA
                        </button>
                        <button type="button" class="btn btn-success btn-lg" data-container="body" data-toggle="popover" data-placement="right" data-content="<?php echo $RESPONSABILIDADE_VALUE; ?>">
                            RESPONSABILIDADE

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

