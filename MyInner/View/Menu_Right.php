


<!-- Modal -->
<div class="modal fade w3-center" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Configurações de Conta</h4>
            </div>
            <div class="modal-body">
                <div >
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home" class="fa fa-user text-success"> Dados Pessoais</a></li>
                        <li><a data-toggle="tab" href="#citacao" class="fa fa-file-text text-success"> Dados de Login</a></li>
                        <li><a data-toggle="tab" href="#foto" class="fa fa-camera text-success"> Alterar Foto</a></li>
                        <li><a data-toggle="tab" href="#deletar" class="fa fa-sign-out text-success"> Encerrar conta</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <form action="../Controller/Update_User.php" method="post"  name="formlogin">
                                <br>

                                    <input type="hidden" name="id_user" style="min-width: 50%" value="<?php echo $_SESSION['ID_USER']; ?>" >
                                    <span class="input-group-addon w3-theme-l2" id="basic-addon1"><i  class="fa fa-user fa-5x "></i></span>
                                    <div class="input-group">
                                        <span class="input-group-addon w3-theme-l2" id="basic-addon1"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control" data-toggle="tooltip" data-placement="left" title="Nome" style="width: 100%" value="<?php echo $_SESSION['NOME_USER']; ?>"name="name_user" id="txt_name" maxlength="15"  required placeholder="NOME ">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon w3-theme-l2" id="basic-addon1"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control" data-toggle="tooltip" data-placement="left" title="Sobrenome" style="width: 100%" value="<?php echo $_SESSION['SOBRENOME_USER']; ?>"name="sobrenome_user" id="sobrenome" maxlength="15"  required placeholder="SOBRENOME">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon w3-theme-l2" id="basic-addon1"><i class="fa fa-home"></i></span>
                                        <input type="text" class="form-control" data-toggle="tooltip" data-placement="left" title="Pais" style="width: 100%" value="<?php echo $_SESSION['PAIS_USER']; ?>"name="pais_user" id="txt_name"   placeholder="PAIS" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon w3-theme-l2" id="basic-addon1"><i class="fa fa-birthday-cake"></i></span>
                                        <input type="date" class="form-control" data-toggle="tooltip" data-placement="left" title="Data de Nascimento" style="width: 100%" value="<?php echo date('d-m-Y', strtotime($_SESSION['DATANASC_USER'])) ?>"name="datanasc_user" id="txt_datanasc" maxlength="10"  placeholder="DATA NASCIMENTO" required>
                                    </div>

                                <br><input type="submit" name="update-bt" id="update-bt" class="w3-theme-l2 w3-button-shape" value="Atualizar" >
                            </form>
                        </div>
                        <div id="foto" class="tab-pane fade">
                            <!-- Formulario para inserir a img  -->
                            <form action="../Controller/UpLoadImage.php" method="post" enctype="multipart/form-data">
                                <br><img src="../Assets/img/<?php echo $_SESSION['NOME_USER']?>.jpg" class="w3-round-large" style="height: 290px;width:50%" alt="Avatar" id="preview"><br>
                                <br><label for="img"> Insira sua foto: <input type="file" id="img" name="img"></label>
                                <br><button type="submit" class="btn w3-theme-l2">Salvar</button>
                            </form>
                        </div>
                        <div id="citacao" class="tab-pane fade">
                            <br>
                            <form action="" method="post" name="formStatus">
                                    <input type="hidden" name="id_user" style="min-width: 50%" value="<?php echo $_SESSION['ID_USER']; ?>" >
                                    <span class="input-group-addon w3-theme-l2" id="basic-addon1"><i  class="fa fa-sign-in fa-3x"></i></span>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" data-toggle="tooltip" data-placement="left" title="Nome" style="min-width: 52%" value="<?php echo $_SESSION['NOME_USER']; ?>"name="name_user" id="txt_name" maxlength="15"  required placeholder="NOME ">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-at"></i></span>
                                        <input type="text" class="form-control" data-toggle="tooltip" data-placement="left" title="Sobrenome" style="min-width: 45%" value="<?php echo $_SESSION['SOBRENOME_USER']; ?>"name="sobrenome_user" id="sobrenome" maxlength="15"  required placeholder="SOBRENOME">
                                    </div>

                                <input type="submit" class="btn w3-theme-l2 w3-center" style="margin: 5px" value="Atualizar">
                            </form>
                            <br><br>
                        </div>
                        <div id="deletar" class="tab-pane fade">
                            <h4 class="text-center"> Nós da Equipe My Inner sentiremos Muito a sua falta. </h4>
                            <h4 class="text-center">Mas caso essa seja sue real desejo nós ficaremos a dispozição em caso de retorno e estaremos de braços abertos.Mas lembre-se se você excluir sua conta todos
                                os seus dados serão perdidos,caso queira retornar terá de começar todo o processo de avaliação novamente.</h4>
                            <p class="text-center">Eai tem certeza ?</p>  <a href="../Controller/Delete_User.php"><input type="button" name="register_bt" id="delete-bt" class="w3-theme-l2 w3-button-shape center-block" value="Sim :(" ></a><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Right Column -->

    <div class="w3-col m2">
        <div class="w3-card-4 w3-round w3-white w3-center">
            <div class="w3-container">
                <hr>
                <p>Seus Amigos...</p>
                <img src="../Assets/img/1.jpg" style="width:100%;margin-bottom: auto">
                <p><strong>Nome do Amigo</strong></p>
                <p>Avalie tambem e contribua.(gerar um randon)</p>
                <p><button class="w3-button-shape w3-block w3-theme-l2 fa fa-star-o">&nbsp;&nbsp;Avaliar</button></p>
                <hr>
            </div>
        </div>
        <br>

        <div class="w3-card-4 w3-round w3-white w3-center">

                <div class="w3-container">
                    <hr>
                    <p>Media</p>
                    <div class="estrelas">
                        <input type="radio" id="cm_star-empty" name="fb" value="" />
                        <label for="cm_star-1"><i class="fa" style="margin-left: -30px"></i></label>
                        <input type="radio" id="cm_star-1" name="fb" value="1" />
                        <label for="cm_star-2"><i class="fa" style="margin-left: -20px"></i></label>
                        <input type="radio" id="cm_star-2" name="fb" value="2"/>
                        <label for="cm_star-3"><i class="fa" style="margin-left: -20px"></i></label>
                        <input type="radio" id="cm_star-3" name="fb" value="3"/>
                        <label for="cm_star-4"><i class="fa" style="margin-left: -20px"></i></label>
                        <input type="radio" id="cm_star-4" name="fb" value="4"/>
                        <label for="cm_star-5"><i class="fa" style="margin-left: -20px"></i></label>
                        <input type="radio" id="cm_star-5" name="fb" value="5" checked/>
                    </div>

                    <p><strong>Uma frase sobre sua nota</strong></p>
                    <p>Que tal mostrar a todos seus amigos ?<br> Compartilhe.</p>
                    <p>
                   <a href="https://www.facebook.com/wendreo.fernandes" target="_blank"><i class="fa fa-facebook-official fa-3x"></i></a>
                        <a href="https://www.facebook.com/wendreo.fernandes" target="_blank"><i class="fa fa-twitter fa-3x"></i></a>
                        <a href="https://www.facebook.com/wendreo.fernandes" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
                    </p>
                    <hr>
                </div>

        </div>

        <br>


        <div class="w3-card-4 w3-round w3-white w3-padding-16 w3-center">
            <hr>
            <p>Siga-nos em nossas paginas nas redes sociais.</p>
            <i class="fa fa-facebook-official fa-2x w3-hover-opacity"></i>
            <i class="fa fa-instagram fa-2x "></i>
            <i class="fa fa-snapchat  fa-2x w3-hover-opacity"></i>
            <i class="fa fa-twitter fa-2x w3-hover-opacity"></i>
            <i class="fa fa-linkedin  fa-2x w3-hover-opacity"></i>
            <br><p>Copyright &copy; -  MyInner 2017</p>
            <hr>
        </div>

        <!-- End Right Column -->
    </div>

    <!-- End Grid -->


    <!-- End Page Container -->
    <footer class="w3-container  w3-center w3-margin-top">


    </footer>
    </div>
    </body>
    </html>


    <script type="text/javascript">

        function checkstar(value) {
            var btn = document.getElementById("cm_star-"+value);
            btn.checked = true;
        }
        // Accordion
        function dropDown(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-theme-d1";
            } else {
                x.className = x.className.replace("w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-theme-d1", "");
            }
        }

        // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }

        }


        // Function js for show icon camera
        function ShowUpdatePhotoOpen() {

            document.getElementById('timelineShade').style.display = 'block';
            $(document).ready(function() {
                $("#timelineShade").fadeTo( 2000 , 0.5);
            });

        }

        function ShowUpdatePhotoClose() {

            document.getElementById('timelineShade').style.display = 'none';
            $(document).ready(function() {
                $("#timelineShade").fadeTo( 2000 , 0);

            });

        }



    </script>
        <script type="text/javascript">
            $("#img").on('change', function(){
                if (this.files && this.files[0]){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#preview').attr("src", e.target.result).fadeIn();
                    }
                    reader.readAsDataURL(this.files[0]);
                }
            });
        </script>