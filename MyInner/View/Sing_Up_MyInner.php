
<?php include("header.php"); ?>
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

<?php include("footer.php"); ?>


