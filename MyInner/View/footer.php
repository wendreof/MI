<!-- Right Column -->

<div class="w3-col m2">
    <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
            <p>Seus Amigos...</p>
            <img src="../Assets/img/1.jpg" alt="Forest" style="width:100%;">
            <p><strong>Nome do Amigo</strong></p>
            <p>Avalie tambem e contribua.(gerar um randon)</p>
            <p><button class="w3-button-shape w3-block w3-theme-l2">Avaliar</button></p>
        </div>
    </div>
    <br>

    <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-card-2 w3-round w3-white w3-center">
            <div class="w3-container">
                <p>Media</p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                    <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
                </div>
                <p><strong>Uma frase sobre sua nota</strong></p>
                <p>Que tal mostrar a todos seus amigos ?<br> Compartilhe.</p>
                <p><button type="submit" class="w3-button-shape  w3-theme-l2-social fa fa-facebook-official"></button>
                    <button type="submit" class="w3-button-shape  w3-theme-l2-social fa fa-instagram"></button>
                    <button type="submit" class="w3-button-shape  w3-theme-l2-social fa fa-twitter"></button>
                </p>
            </div>
        </div>
    </div>
    <br>

    <div class="w3-card-2 w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
    </div>
    <br>

    <div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
    </div>

    <!-- End Right Column -->
</div>

<!-- End Grid -->
</div>

<!-- End Page Container -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Siga-nos em nossas paginas nas redes sociais.</p>
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="text-muted">Copyright &copy; MyInner 2017 -  Olá! Leu até aqui? Anda preocupado com os mínimos detalhes,
        né? A gente também. Por isso decidimos aproveitar até o rodapé pra falar com você. Cadastre-se seja parte
        da nossa revolução.</p>
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

