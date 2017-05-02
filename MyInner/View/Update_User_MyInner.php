<?php include("header.php");?>
<!-- Content Section -->

<div class="w3-col m7">
    <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <h1>Atualização de dados... </h1><br><br>
        <form action="../Controller/Update_User.php" method="post" class="form-signup-update w3-card-4 " name="formlogin">

            <br>
            <div class="form-group">
                <input type="hidden" name="id_user" style="min-width: 50%" value="<?php echo $_SESSION['ID_USER']; ?>" >
                <input type="text" id="input_css" style="min-width: 33%" name="name_user" id="txt_name" maxlength="15"  required placeholder="NOME ">
                <input type="text" id="input_css" style="min-width: 30%" name="sobrenome_user" id="sobrenome" maxlength="15"  required placeholder="SOBRENOME">
                <input type="date" id="input_css" style="min-width: 28%" name="datanasc_user" id="txt_datanasc" maxlength="8"  placeholder="DATA NASCIMENTO" required>

                <input type="text" id="input_css" style="min-width: 97%" name="endereco_user" id="txt_name" maxlength="255"  required placeholder="  ENDERECO">
                <input type="text" id="input_css" style="min-width: 40%" name="cidade_user" id="txt_cidade" required  placeholder="CIDADE">


                <select name="estado_user" id="estado" style="min-width: 10%" >
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
                <input type="text" id="input_css" style="min-width: 40%" name="pais_user" id="txt_name"   placeholder="PAIS" required>
            </div>
                <p><input type="submit" name="register_bt" id="register_bt" class="w3-theme-l2 w3-button-shape" value="Atualizar" ></p>
        </form><br><br>


    </div>
    <!-- End Middle Column -->
</div>


<?php include("footer.php"); ?>


