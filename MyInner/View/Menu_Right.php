<!-- Right Column -->

<div class="w3-col m2">
    <div class="w3-card-2 w3-round w3-white w3-center">
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

    <div class="w3-card-2 w3-round w3-white w3-center">

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

    <div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center" style="max-height: 240px">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- MyInner-AD -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-6417108901573951"
             data-ad-slot="4434498227"
             data-ad-format="auto"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
<br>
    <div class="w3-card-2 w3-round w3-white w3-padding-16 w3-center">
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


<script>

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
</script>

