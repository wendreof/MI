<?php session_start();
$aspectos = [0=>'Etica',1=>'Moral',2=>'Responsabilidade',3=>'Inteligencia',4=>'Honestidade'];
/*if ($_SESSION['valid'])*/{
    include ("Header.php");
?>




<section>

    <div class="w3-white w3-card-evaluation" style="width:89%;margin: 6%;">
        <div class="w3-row-padding">
            <div class="w3-col m12">
                    <div class="w3-container w3-padding" style="width: 60%;border-right: solid 1px lightgrey">
                        <h6 class="w3-opacity">Procurar pessoas...</h6>
                        <input type="text" name="search" placeholder="Procure por nome, E-mail ..." style="width: 90%;border-radius: 8px;" contenteditable="true" class="w3-border w3-padding" maxlength="20" /><br>
                        <br><button type="submit" class="w3-button-shape w3-theme"><i class="fa fa-pencil"></i> Buscar </button>
                    </div>
            </div>
        </div>
        <hr>
        <div class="w3-card-person"><br>
            <img src="../Assets/img/Wendreo.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:70px">
            <h4>John Doe</h4><span class="w3-left w3-opacity" style="font-size: 8pt;">Brasil</span>
            <br>
            <hr class="w3-clear">
            <div class="w3-container text-center" >
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa" style="margin-left: -30px"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa" style="margin-left: -20px"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa" style="margin-left: -20px"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa" style="margin-left: -20px"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa" style="margin-left: -20px"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
                <hr>
            <p>Texto com no maximo 220 caracter     ---  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>
        <hr>
            <p class="text-center"><a href="Evaluation_Screen.php"><input type="button" class="btn w3-theme-l2" value="Avaliar"></a></p>
    </div>
</section>


<?php } ?>
<footer class="w3-container  w3-center w3-margin-top">
</footer>
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
