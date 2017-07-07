<?php session_start();

include ("header.php");?>

        <!-- Middle Column -->
        <div class="w3-col m7">

           <!-- <form> enciar dados da busca para uma page buscar -->
                <div class="w3-row-padding">
                <div class="w3-col m12">
                    <div class="w3-card-2 w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h6 class="w3-opacity">Procurar pessoas...</h6>
                            <input type="text" name="search" placeholder="Procure por nome, E-mail ..." style="width: 80%" contenteditable="true" class="w3-border w3-padding" /><br>
                            <br><button type="submit" class="w3-button-shape w3-theme"><i class="fa fa-pencil"></i> Buscar </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </form>  -->

            <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
                <img src="../Assets/img/Wendreo.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                <span class="w3-right w3-opacity">1 min</span>
                <h4>John Doe</h4><br>
                <hr class="w3-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button class="w3-button-shape w3-theme-l2 w3-margin-bottom" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa fa-comment"></i>Comment
                </button>
                <div class="collapse" id="collapseExample">
                    <div class="well">
                      Aqui ficara um form com um text area e um btn enviar !
                    </div>
                </div>
            </div>
            <!-- COPIAS PARA TESTE DE EXECUÇÃO-->



            <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
                <img src="../Assets/img/Wendreo.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                <span class="w3-right w3-opacity">1 min</span>
                <h4>John Doe</h4><br>
                <hr class="w3-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button class="w3-button-shape w3-theme-l2 w3-margin-bottom" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa fa-comment"></i>Comment
                </button>
                <div class="collapse" id="collapseExample1">
                    <div class="well">
                        Aqui ficara um form com um text area e um btn enviar !
                    </div>
                </div>
            </div>
            <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
                <img src="../Assets/img/Wendreo.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                <span class="w3-right w3-opacity">1 min</span>
                <h4>John Doe</h4><br>
                <hr class="w3-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button class="w3-button-shape w3-theme-l2 w3-margin-bottom" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa fa-comment"></i>Comment
                </button>
                <div class="collapse" id="collapseExample2">
                    <div class="well">
                        Aqui ficara um form com um text area e um btn enviar !
                    </div>
                </div>
            </div>





            <!-- End Middle Column -->
        </div>

<?php  include ("footer.php");?>


