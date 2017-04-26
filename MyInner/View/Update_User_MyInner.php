<?php include("header.php"); ?>
<!-- Content Section -->

<div class="w3-col m7">
    <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <h1>Atualização de dados... </h1><br><br>
        <form action="../Controller/Register.php" method="post" class="form-signup-login w3-card-4 w3-container" name="formlogin">

            <br>
            <div class="form-group">
                <input type="text" id="input_css" name="name_user" id="txt_name" maxlength="15"  required placeholder="NOME "><br>
                <br><input type="text" id="input_css" name="sobrenome_user" id="sobrenome" maxlength="15"  required placeholder="SOBRENOME"><br>
                <br><label class="w3-text-theme">SEXO </label><br>
                <input type="radio" id="input_css" name="sexo_user" value="M"/ checked="true"><label for="btmasculino">&nbsp; Masculino</label>
                <input type="radio" id="input_css" name="sexo_user" value="F"/><label for="btfeminino">&nbsp; Feminino</label><br>
                <br><input type="date" id="input_css" name="datanasc_user" id="txt_datanasc" maxlength="8"  placeholder="DATA NASCIMENTO" required><br>


                <br><input type="text" id="input_css" name="endereco_user" id="txt_name" maxlength="255"  required placeholder="  ENDERECO"><br>

                <br> <input type="text" id="input_css" name="cidade_user" id="txt_cidade" required  placeholder="CIDADE"><br>
                <br>
                <select name="estado_user" id="estado" style="min-width: 210px" >
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
                <br><br><input type="text" id="input_css" name="pais_user" id="txt_name"   placeholder="PAIS" required><br>
            </div>
                <p><input type="submit" name="register_bt" id="register_bt" class="w3-theme-l2 w3-button-shape" value="Atualizar" ></p>
        </form><br><br>


    </div>
    <!-- End Middle Column -->
</div>


<?php include("footer.php"); ?>


