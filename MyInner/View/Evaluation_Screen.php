<?php session_start();
$aspectos = [0=>'Etica',1=>'Moral',2=>'Responsabilidade',3=>'Inteligencia',4=>'Honestidade'];
/*if ($_SESSION['valid'])*/{
include_once ("Header.php");
    ?>
<section>
<div class="w3-white w3-card-evaluation">
    <hr>
    <div style="display: inline-block ; margin-left: auto;float: left ;width: 100%">
        <p class="w3-center"><img src="../Assets/img/Douglas.jpg" class="w3-circle" style="height:35%;width:35%" alt="Avatar"></p>
        <!-- Abaixo encontra-se todos os dados referentes ao avaliado, e acima a imagens de seu perfil sendo buscada pelo id, que anteriormente no momento de seu upload será gravado com o
        id do usuário para facilitar buscas e exibição da mesma.-->
        <h3 class="w3-center"><?php echo isset($_SESSION['NOME_USER'])? $_SESSION['NOME_USER'] : 'NOME'; ?> <?php echo isset($_SESSION['SOBRENOME_USER'])? $_SESSION['SOBRENOME_USER'] : 'SOBRENOME'; ?></h3>
        <hr>
        <form action="" method="post" name="formAvaliacao">
        <?php for ($i=0;$i<5;$i++){ ?>
            <div class="estrelas" style="width: 100%; ;margin: auto;">
                <h4 class="text-center w3-theme-l2-star"><?php echo $aspectos[$i]; ?></h4>
                <input  type="radio" id=<?php echo $aspectos[$i]; ?>."-empty" name=<?php echo $aspectos[$i]; ?>."-fb" value="0" checked/>
                <label style="margin-left: 20%;" for=<?php echo $aspectos[$i]; ?>."-1"><i class="fa" ></i></label>
                <input type="radio" id=<?php echo $aspectos[$i]; ?>."-1" name=<?php echo $aspectos[$i]; ?>."-fb" value="1"  checked/>
                <label for=<?php echo $aspectos[$i]; ?>."-2"><i class="fa" ></i></label>
                <input type="radio" id=<?php echo $aspectos[$i]; ?>."-2" name=<?php echo $aspectos[$i]; ?>."-fb" value="2" />
                <label for=<?php echo $aspectos[$i]; ?>."-3"><i class="fa" ></i></label>
                <input type="radio" id=<?php echo $aspectos[$i]; ?>."-3" name=<?php echo $aspectos[$i]; ?>."-fb" value="3" />
                <label for=<?php echo $aspectos[$i]; ?>."-4"><i class="fa""></i></label>
                <input type="radio" id=<?php echo $aspectos[$i]; ?>."-4" name=<?php echo $aspectos[$i]; ?>."-fb" value="4" />
                <label for=<?php echo $aspectos[$i]; ?>."-5"><i class="fa" ></i></label>
                <input type="radio" id=<?php echo $aspectos[$i]; ?>."-5" name=<?php echo $aspectos[$i]; ?>."-fb" value="5" />
            </div>
        <?php } ?>
    </div>
    <textarea style="width: 80%;max-width: 80%;min-width: 80%; padding: 10px;margin: 10px;margin-left: 10%;border-radius: 10px" rows="10" required ></textarea>
    <p class="text-center"><input type="submit" class="btn btn-success" value="Avaliar">&nbsp;<input type="reset" class="btn btn-danger" value="Cancelar"></p>
    </form>
    <hr>
</div>


</section>

<aside>
    <!-- Aqui será feito o carregamento de todos as avaliações, buscando somente os comentários e hora(resultado da hora avaliada para a atual(gerando um tempo exibido.
       Exemplo: está avaliação foi feita a 6 horas atrás. ))
       E trará também os ids necessários para mostrar a imagem referente a quem fez a avaliação, gerando um looping para buscar todas e exibi-las
       observação : trazerno maximo tres registros de cada lado. -->
    <div class="w3-white w3-card-evaluation" style="width:61%; float: right;margin-right: 3%">
        <hr>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
            <img src="../Assets/img/Wendreo.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
            <span class="w3-right w3-opacity">1 min</span>
            <h4>John Doe</h4><br>
            <hr class="w3-clear">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
            <img src="../Assets/img/Pedro.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
            <span class="w3-right w3-opacity">16 min</span>
            <h4>Jane Doe</h4><br>
            <hr class="w3-clear">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <hr>

    </div>



</aside>


<?php } ?>
<footer class="w3-container  w3-center w3-margin-top">
</footer>
</body>
</html>
