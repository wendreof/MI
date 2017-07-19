<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">
            <!-- Profile -->
            <div class="w3-card-4 w3-round w3-white">

                <div class="w3-container">
                    <hr>
                    <p class="w3-center"><img src="../Assets/img/<?php echo $_SESSION['NOME_USER']?>.jpg" class="w3-round-large" style="height: 290px;width:95%" alt="Avatar"></p>
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
                    <button onclick="dropDown('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Meus Avaliados</button>
                    <div id="Demo2" class="w3-hide w3-container">
                        <p>Some other text..</p>
                    </div><!-- Demo2 -->
                    <button onclick="dropDown('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
                    <div id="Demo3" class="w3-hide w3-container">
                        <div class="w3-row-padding">
                            <br>
                            <div class="w3-half">
                                <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="/w3images/fjords.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                        </div>
                    </div> <!-- Demo3 -->
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
                            <p>People are looking at your profile. Find out who.</p>
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
