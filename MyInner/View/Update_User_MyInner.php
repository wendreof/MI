<?php include("Header.php");
include ("Menu_Left.php");
?>
<!-- Content Section -->

<div class="w3-col m7">
    <div class="w3-container w3-card-2 w3-white w3-round w3-margin-left w3-margin-right"><br>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home" class="fa fa-user text-success"> Dados Pessoais</a></li>
            <li><a data-toggle="tab" href="#foto" class="fa fa-camera text-success"> Alterar Foto</a></li>
            <li><a data-toggle="tab" href="#citacao" class="fa fa-file-text text-success"> Atualizar citação favorita</a></li>
            <li><a data-toggle="tab" href="#deletar" class="fa fa-sign-out text-success"> Deletar conta</a></li>
        </ul>

        <div class="tab-content">
            <hr>
            <div id="home" class="tab-pane fade in active">
                <h3 class="text-center">Dados Pessoais</h3>
        <form action="../Controller/Update_User.php" method="post"  name="formlogin">
            <br>
            <div class="form-group">
                <input type="hidden" name="id_user" style="min-width: 50%" value="<?php echo $_SESSION['ID_USER']; ?>" >
                <input type="text" class="input_css" data-toggle="tooltip" data-placement="left" title="Nome" style="min-width: 52%" value="<?php echo $_SESSION['NOME_USER']; ?>"name="name_user" id="txt_name" maxlength="15"  required placeholder="NOME ">
                <input type="text" class="input_css" data-toggle="tooltip" data-placement="left" title="Sobrenome" style="min-width: 45%" value="<?php echo $_SESSION['SOBRENOME_USER']; ?>"name="sobrenome_user" id="sobrenome" maxlength="15"  required placeholder="SOBRENOME">
                <input type="date" class="input_css" data-toggle="tooltip" data-placement="left" title="Data de Nascimento" style="min-width: 45%" value="<?php echo date('d-m-Y', strtotime($_SESSION['DATANASC_USER'])) ?>"name="datanasc_user" id="txt_datanasc" maxlength="10"  placeholder="DATA NASCIMENTO" required>
                <input type="text" class="input_css" data-toggle="tooltip" data-placement="left" title="Pais" style="min-width: 52%" value="<?php echo $_SESSION['PAIS_USER']; ?>"name="pais_user" id="txt_name"   placeholder="PAIS" required>
                <fieldset class="text-center" style="width: 50% ; margin-left: 180px ; margin-top: 3%"><legend><h5>SEXO :</h5></legend>
                    <input type="radio" id="input_css" name="sexo_user"  value="M" required/>&nbsp;<label >Masculino</label>
                    <input type="radio" id="input_css" name="sexo_user" value="F" required/>&nbsp;<label >Feminino</label>
                </fieldset>
            </div>
            <p><input type="submit" name="update-bt" id="update-bt" class="w3-theme-l2 w3-button-shape center-block" value="Atualizar" ></p>
        </form>
                <hr>
                <h3 class="text-center">Dados de Login</h3>

                    <br>
                    <div class="form-group">
                        <input type="text" class="input_css" data-toggle="tooltip" data-placement="left" title="Nome de Usuario" name="id_user" style="min-width: 30%" value="<?php echo $_SESSION['USER_NAME']; ?>" disabled >
                        <input type="text" class="input_css" data-toggle="tooltip" data-placement="left" title="Email de Acesso/Contato" style="min-width: 65%" value="<?php echo $_SESSION['EMAIL_USER']; ?>" disabled>
                    </div>


                <br><br>
            </div>
            <div id="foto" class="tab-pane fade">
                <h4 class="text-center">CONTEUDO RESPONSAVEL POR TROCAR DE IMAGEN DE PERFIL  </h4>
                <!-- Formulario para inserir a img  -->
                <form action="../Controller/UpLoadImage.php" method="post" enctype="multipart/form-data">
                    <label for="img"> Insira sua foto: <input type="file" id="img" name="img"></label>
                    <br><button type="submit" class="btn btn-success">Salvar</button>
                </form>
            </div>
            <div id="citacao" class="tab-pane fade">
                <h4 class="text-center"> CONTEUDO RESPONSAVÉL PELA ADIÇÃO E AUTALIZAÇÃO DE CITAÇÃO </h4>
                <form action="" method="post" name="formStatus">
                <textarea rows="2" maxlength="150" style="width: 100%;padding: 3%"><?php echo isset($_SESSION['userStatus'])? $_SESSION['userStatus']: 'Lorem inpsun'  ?></textarea>

                    <input type="submit" class="btn btn-success" style="float: right;margin: 5px">
                </form>
                <br><br>
            </div>

            <div id="deletar" class="tab-pane fade">
                        <h4 class="text-center"> Nós da Equipe My Inner sentiremos Muito a sua falta. </h4>
                        <h4 class="text-center">Mas caso essa seja sue real desejo nós ficaremos a dispozição em caso de retorno e estaremos de braços abertos.Mas lembre-se se você excluir sua conta todos
                            os seus dados serão perdidos,caso queira retornar terá de começar todo o processo de avaliação novamente.</h4>
                        <p class="text-center">Eai tem certeza ?</p>  <a href="../Controller/Delete_User.php"><input type="button" name="register_bt" id="delete-bt" class="w3-theme-l2 w3-button-shape center-block" value="Sim :(" ></a><br><br>
            </div>
<hr>
        </div>

    </div>
    <!-- End Middle Column -->
</div>


<?php include("Menu_Right.php"); ?>


