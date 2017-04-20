
<?php
// Iniciar sessão
session_start();
$_SESSION["login"]=false;


?>
<?php include("header.php"); ?>
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



<?php include("footer.php");  ?>