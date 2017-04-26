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
                            <input type="text" name="search" placeholder="Procure por nome, E-mail ..." size="72" contenteditable="true" class="w3-border w3-padding" /><br>
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
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half">
                        <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                    </div>
                    <div class="w3-half">
                        <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
                    </div>
                </div>
                <button type="button" class="w3-button-shape w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
                <button type="button" class="w3-button-shape w3-theme-l2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>
            </div>

            <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
                <img src="../Assets/img/3.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                <span class="w3-right w3-opacity">16 min</span>
                <h4>Jane Doe</h4><br>
                <hr class="w3-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button type="button" class="w3-button-shape w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
                <button type="button" class="w3-button-shape w3-theme-l2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>
            </div>

            <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
                <img src="../Assets/img/2.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                <span class="w3-right w3-opacity">32 min</span>
                <h4>Angie Jane</h4><br>
                <hr class="w3-clear">
                <p>Have you seen this?</p>
                <img src="../Assets/img/My_Inner.jpg" style="width:100%" class="w3-margin-bottom">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button type="button" class="w3-button-shape w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
                <button type="button" class="w3-button-shape w3-theme-l2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>
            </div>

            <!-- End Middle Column -->
        </div>

<?php  include ("footer.php");?>


