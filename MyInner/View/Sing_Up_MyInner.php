
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

    <title>My Inner - Sing Up</title>

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

    <div class="container">

        <div class="row">

            <section class="col-lg-12">

                <form action="../Controller/Register.php" method="get" class="form-signup-login" name="formlogin">
                    <h2>Login</h2>
                    <br><input type="text" id="input_css" name="user_name" id="txt_name" maxlength="255" size="50" required placeholder="   USER NAME"> <br><!-- Criar um Evento JS para verificar disponibilidade e colocar btn sucesso caso disponivel e btn danger caso não <a class="btn btn-info" href="#">Ver</a> -->
                    <br><input type="text" id="input_css" name="email_user" id="txt_name" maxlength="255" size="50" required placeholder="   EMAIL"><br>
                    <br> <input type="password" id="input_css" name="password_user" id="txt_name" maxlength="8" size="50" required placeholder="   PASSWORD"><br>
                    <br>
                    <div class="form-group">

                    <!-- <button type="button" class="btn btn-success" id="login" onclick= 'document.getElementsByName(name_user);' >Verificar.</button>-->
                    </div>
                <hr>
                <br>


                <form action="../Controller/Register.php" method="get" class="form-signup" name="formuser">
                    <h2>User</h2>
                    <div class="form-group">
                        <input type="text" id="input_css" name="name_user" id="txt_name" maxlength="15" size="50" required placeholder="   NOME "><br>
                        <br><input type="text" id="input_css" name="sobrenome_user" id="sobrenome" maxlength="15" size="50" required placeholder="   SOBRENOME"><br>
                        <label>SEXO </label><br>
                        <input type="radio" id="input_css" name="sexo_user" value="M"/ checked="true"><label for="btmasculino">&nbsp; Masculino</label>
                        <input type="radio" id="input_css" name="sexo_user" value="F"/><label for="btfeminino">&nbsp; Feminino</label>
                        <br><input type="date" id="input_css" name="datanasc_user" id="txt_datanasc" maxlength="8" size="50"  placeholder="DATA NASCIMENTO" required><br>


                        <br><input type="text" id="input_css" name="endereco_user" id="txt_name" maxlength="255" size="50" required placeholder="  ENDERECO"><br>

                        <br> <input type="text" id="input_css" name="cidade_user" id="txt_cidade" required size="50" placeholder="CIDADE"><br>
                        <br>
                            <select name="estado_user" id="estado" >
                                    <option value="Acre">Acre</option>
                                    <option value="Alagoas" >Alagoas</option>
                                    <option value="Amapá" >Amapá</option>
                                    <option value="Amazonas" >Amazonas</option>
                                    <option value="Bahia" >Bahia</option>
                                    <option value="Ceará" >Ceará</option>
                                    <option value="Distrito Federal" >DF</option>
                                    <option value="Espírito Santo" >ES</option>
                                    <option value="Goiás" >GO</option>
                                    <option value="Maranhão" >MA</option>
                                    <option value="Mato Grosso" >MT</option>
                                    <option value="Mato Grosso do Sul" >MS</option>
                                    <option value="Minas Gerais" >MG</option>
                                    <option value="Pará" >PA</option>
                                    <option value="Paraíba" >PB</option>
                                    <option value="Paraná" >PR</option>
                                    <option value="Pernambuco" >PE</option>
                                    <option value="Piauí" >PI</option>
                                    <option value="Rio de Janeiro" >RJ</option>
                                    <option value="Rio Grande do Norte" >RN</option>
                                    <option value="Rio Grande do Sul" >  RS   </option>
                                    <option value="Rondônia" >RO</option>
                                    <option value="Roraima" >RR</option>
                                    <option value="Santa Catarina" >SC</option>
                                    <option value="São Paulo" >SP</option>
                                    <option value="Sergipe" >SE</option>
                                    <option value="Tocantins" >TO</option>

                                </optgroup>

                            </select>
                        &nbsp<br><input type="text" id="input_css" name="pais_user" id="txt_name" size="50"  placeholder="PAIS" required><br>
                        <p><input type="checkbox" name="terms_acept" id="txt_name" value="true" checked> Li e Concordo com os <a href="#">Termos de Uso</a> e <a href="#"> Política de Privacidade</a>.</p>

                    </div>
                    <div class="form-group">
                        <input type="submit" name="register_bt" id="register_bt" class="btn btn-success" value="Cadastrar" >

                    </div>


                </form>
                 </div>
            </div>

            </section>
         </div>
    </div>

</section>



<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Mapa interno de site</h3>
                <p>Copyright &copy; Your Website 2014</p>
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
