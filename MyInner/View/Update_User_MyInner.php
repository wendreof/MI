<?php include("header.php");?>
<!-- Content Section -->

<div class="w3-col m7">
    <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <h1>Atualização de dados... </h1><br><br>
        <form action="../Controller/Update_User.php" method="post" class="form-signup-update w3-card-4 " name="formlogin">

            <br>
            <div class="form-group">
                <input type="hidden" name="id_user" style="min-width: 50%" value="<?php echo $_SESSION['ID_USER']; ?>" >
                <input type="text" class="input_css" style="min-width: 33%" value="<?php echo $_SESSION['NOME_USER']; ?>"name="name_user" id="txt_name" maxlength="15"  required placeholder="NOME ">
                <input type="text" class="input_css" style="min-width: 30%" value="<?php echo $_SESSION['SOBRENOME_USER']; ?>"name="sobrenome_user" id="sobrenome" maxlength="15"  required placeholder="SOBRENOME">
                <input type="date" class="input_css" style="min-width: 28%" value="<?php echo $_SESSION['DATANASC_USER']; ?>"name="datanasc_user" id="txt_datanasc" maxlength="10"  placeholder="DATA NASCIMENTO" required>
                <fieldset class="text-center" style="width: 50% ; margin-left: 180px ; margin-bottom: 6px"><legend>SEXO :</legend>
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
                <input type="text" class="input_css" style="min-width: 40%" value="<?php echo $_SESSION['PAIS_USER']; ?>"name="pais_user" id="txt_name"   placeholder="PAIS" required>
            </div>
                <p><input type="submit" name="register_bt" id="update-bt" class="w3-theme-l2 w3-button-shape" value="Atualizar" ></p>

        </form><br><br>
        <p>Eai tem certeza ?</p>  <a href="../Controller/Delete_User.php"><input type="button" name="register_bt" id="delete-bt" class="w3-theme-l2 w3-button-shape" value="Sim :(" ></a><br><br>

    </div>
    <!-- End Middle Column -->
</div>


<?php include("footer.php"); ?>


