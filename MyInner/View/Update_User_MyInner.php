<?php include("header.php");?>
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
            <div id="home" class="tab-pane fade in active">
                <h3 class="text-center">Dados Pessoais</h3>

        <form action="../Controller/Update_User.php" method="post"  name="formlogin">

            <br>
            <div class="form-group">
                <input type="hidden" name="id_user" style="min-width: 50%" value="<?php echo $_SESSION['ID_USER']; ?>" >
                <input type="text" class="input_css" style="min-width: 33%" value="<?php echo $_SESSION['NOME_USER']; ?>"name="name_user" id="txt_name" maxlength="15"  required placeholder="NOME ">
                <input type="text" class="input_css" style="min-width: 30%" value="<?php echo $_SESSION['SOBRENOME_USER']; ?>"name="sobrenome_user" id="sobrenome" maxlength="15"  required placeholder="SOBRENOME">
                <input type="date" class="input_css" style="min-width: 28%" value="<?php echo date('d-m-Y', strtotime($_SESSION['DATANASC_USER'])) ?>"name="datanasc_user" id="txt_datanasc" maxlength="10"  placeholder="DATA NASCIMENTO" required>
                <fieldset class="text-center" style="width: 50% ; margin-left: 180px ; margin-bottom: 6px"><legend><h5>SEXO :</h5></legend>
                    <input type="radio" id="input_css" name="sexo_user"  value="M" required/><label for="input_css">Masculino</label>
                    <input type="radio" id="input_css" name="sexo_user" value="F" required/><label for="input_css">Feminino</label>
                </fieldset>
                <input type="text" class="input_css" style="min-width: 55%" value="<?php echo $_SESSION['ENDERECO_USER']; ?>"name="endereco_user" id="txt_name" maxlength="255"  required placeholder="  ENDERECO">
                <input type="text" class="input_css" style="min-width: 40%" value="<?php echo $_SESSION['CIDADE_USER']; ?>"name="cidade_user" id="txt_cidade" required  placeholder="CIDADE">


                <select name="estado_user" id="estado" style="min-width: 47%" >
                    <?php for ($i=0;$i<=count($estados);$i++){ require_once "../Model/States.php"; $estados = setStates();?>
                        <option value="<?php echo $estados [$i]; ?>";<?php if ($estados [$i] == $_SESSION['ESTADO_USER']){?> selected="selected" <?php } ?>><?php echo $estados[$i];?></option>
                    <?php } ?>
                    </optgroup>

                </select>
                <input type="text" class="input_css" style="min-width: 49%" value="<?php echo $_SESSION['PAIS_USER']; ?>"name="pais_user" id="txt_name"   placeholder="PAIS" required>
            </div>
                <p><input type="submit" name="register_bt" id="update-bt" class="w3-theme-l2 w3-button-shape center-block" value="Atualizar" ></p>

        </form><br><br>
            </div>
            <div id="foto" class="tab-pane fade">
                <h4 class="text-center">CONTEUDO RESPONSAVEL POR TROCAR DE IMAGEN DE PERFIL  </h4>

            </div>
            <div id="deletar" class="tab-pane fade">

                        <h4 class="text-center"> Nós da Equipe My Inner sentiremos Muito a sua falta. </h4>
                        <h4 class="text-center">Mas caso essa seja sue real desejo nós ficaremos a dispozição em caso de retorno e estaremos de braços abertos.Mas lembre-se se você excluir sua conta todos
                            os seus dados serão perdidos,caso queira retornar terá de começar todo o processo de avaliação novamente.</h4>
                        <p class="text-center">Eai tem certeza ?</p>  <a href="../Controller/Delete_User.php"><input type="button" name="register_bt" id="delete-bt" class="w3-theme-l2 w3-button-shape center-block" value="Sim :(" ></a><br><br>
            </div>
            <div id="citacao" class="tab-pane fade">
                <h4 class="text-center"> CONTEUDO RESPONSAVÉL PELA ADIÇÃO E AUTALIZAÇÃO DE CITAÇÃO </h4>
            </div>
        </div>

    </div>
    <!-- End Middle Column -->
</div>


<?php include("footer.php"); ?>


