<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">
            <!-- Profile -->
            <div class="w3-card-4 w3-round w3-white">

                <div class="w3-container">
                    <hr>
                    <div id="container">

                        <div id="timelineContainer" onmouseover="ShowUpdatePhotoOpen();" onmouseleave="ShowUpdatePhotoClose();">
                            <!-- timeline background -->
                            <div id="timelineBackground">
                                <img src="../Assets/img/backgroundChange.jpg" class="bgImage" style="width: 100%;height: 100%">
                            </div>

                            <!-- timeline background -->
                            <div id="timelineShade" style="display: none">
                                <form id="bgimageform" method="post" enctype="multipart/form-data" action="#">
                                    <div class="uploadFile timelineUploadBG">
                                        <a  name="photoimg" id="bgphotoimg" class="custom-file-input btn" data-toggle="modal" data-target=".ModalUpdateFoto"></a>
                                    </div>
                                </form>
                            </div>

                            <!-- timeline profile picture -->
                            <div id="timelineProfilePic">
                                <img src="../Assets/img/<?php echo $_SESSION['NOME_USER']?>.jpg" class="bgImage" style="width: 100%;height: 100%">

                            </div>



                        </div>
                    </div>

                    <hr>
                    <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> <?php echo isset($_SESSION['NOME_USER'])? $_SESSION['NOME_USER'] : 'NOME'; ?>,<?php echo isset($_SESSION['SOBRENOME_USER'])? $_SESSION['SOBRENOME_USER'] : 'SOBRENOME'; ?></p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> <?php echo isset($_SESSION['CIDADE_USER'])? $_SESSION['CIDADE_USER'] : 'CIDADE'; ?>, <?php echo isset($_SESSION['PAIS_USER'])? $_SESSION['PAIS_USER'] : 'PAIS'; ?></p>
                    <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo date_format($date, 'd F Y'); ?></p>

                </div>
                <hr>
                <!-- Accordion -->
                <div class="w3-white">
                        <button onclick="dropDown('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-heartbeat fa-fw w3-margin-right"></i> Minhas Avaliações</button>
                    <div id="Demo1" class="w3-hide w3-container">
                        <br>

                        <div class="estrelas-all">
                            <?php for ($i=0;$i<5;$i++){ ?>
                                <p class="w3-theme-l2-star"><?php echo $aspectos[$i]; ?></p>
                                <div class="estrelas">
                                    <input type="radio" id=<?php echo $aspectos[$i]; ?>."-empty" name=<?php echo $aspectos[$i]; ?>."-fb" value="0" checked/>
                                    <label for=<?php echo $aspectos[$i]; ?>."-1"><i class="fa"></i></label>
                                    <input type="radio" id=<?php echo $aspectos[$i]; ?>."-1" name=<?php echo $aspectos[$i]; ?>."-fb" value="1" />
                                    <label for=<?php echo $aspectos[$i]; ?>."-2"><i class="fa"></i></label>
                                    <input type="radio" id=<?php echo $aspectos[$i]; ?>."-2" name=<?php echo $aspectos[$i]; ?>."-fb" value="2" />
                                    <label for=<?php echo $aspectos[$i]; ?>."-3"><i class="fa"></i></label>
                                    <input type="radio" id=<?php echo $aspectos[$i]; ?>."-3" name=<?php echo $aspectos[$i]; ?>."-fb" value="3" />
                                    <label for=<?php echo $aspectos[$i]; ?>."-4"><i class="fa"></i></label>
                                    <input type="radio" id=<?php echo $aspectos[$i]; ?>."-4" name=<?php echo $aspectos[$i]; ?>."-fb" value="4" />
                                    <label for=<?php echo $aspectos[$i]; ?>."-5"><i class="fa"></i></label>
                                    <input type="radio" id=<?php echo $aspectos[$i]; ?>."-5" name=<?php echo $aspectos[$i]; ?>."-fb" value="5" checked />
                                </div>

                            <?php } ?>
                        </div>
                        <br>
                    </div><!-- Demo1 -->
                     <!-- Demo3 -->
                </div>
                <hr>

                    <div class="w3-container">

                        <p>Citação favorita</p>
                        <p>
                            <span class="w3-tag w3-small w3-theme-l3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.askfjslkdfjsljdflsdjflkj</span>
                        </p>
                        <hr>
                        <div class="w3-container w3-display-container w3-round-large w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
                     <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
                         <i class="fa fa-remove"></i>
                     </span>
                            <p><strong>Hey!</strong></p>
                            <p>Fique atento pois quando nossa equipe precisar comunicar-se com você faremos atravez deste espeço !
                            </p>
                        </div>
                        <!-- Alert Box -->
                    </div>


            </div>
            <br>
            <br>

            <br>

            <!-- End Left Column -->
        </div>

        <!-- Middle Column -->
