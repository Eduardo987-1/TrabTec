<?php
    require_once('require/header.php');

?>

<div class="parallax">
    <div class="container center-align">
        <div class="row">
            <div class="col s6">
                <a href="cadastro.php" class="waves-effect waves-light btn-large botoesHome"
                    style="background-color: #2E3131;border-radius:30px;">Bora
                    viajar!</a>
            </div>
            <div class="col s6"><a href="login.php" class="waves-effect waves-light btn-large botoesHome"
                    style="background-color: #2E3131;border-radius:30px;">Login</a></div>
        </div>
    </div>
</div>

<div style="height:120px;background-color:#FF6347;">
    <div class="col s12">
        <h4 class="center-align" style="margin:0;">Viaje conosco para lugares incríveis com o melhor do que você pode
            ter!</h4>
    </div>
</div>
<div class="parallax">
    <br>
    <div class="col s12">
        <h1 class="center-align backtext" id="pacotes">Nossos Pacotes</h1>
    </div>
    <div class=" row">
        <div class="container">
            <div class=" grid-example col s12 m4 l4 tamanho">
                <div class="card" style="border-radius: 30px;">
                    <div class="card-image" style="border-top-left-radius: 30px;border-top-right-radius: 30px;">
                        <img src="https://www.praiasdenatal.com.br/wp-content/uploads/2014/08/Natal-RN1.jpg"
                            style="border-top-left-radius: 30px;border-top-right-radius: 30px;">
                        <span class="card-title">Fortaleza/Natal</span>
                    </div>
                    <div class="card-content" style="border-radius: 30px;">
                        <p>Venha visitar os principais pontos turísticos de Natal como: O morro do careca, A praia de
                            Pipa e muito mais!</p>
                    </div>
                    <div class="card-action" style="border-radius: 30px;">
                        <a href="login.php">Viajar</a>
                    </div>
                </div>
            </div>
            <div class="grid-example col s12 m4 l4 tamanho">
                <div class="card" style="border-radius: 30px;">
                    <div class="card-image" style="border-top-left-radius: 30px;border-top-right-radius: 30px;">
                        <img src="https://www.guiadasemana.com.br/contentFiles/image/2018/12/FEA/galeria/55938_w840h525_1544125674shutterstock-721850965-estadio-do-morumbi.jpg"
                            style="border-top-left-radius: 30px;border-top-right-radius: 30px;">
                        <span class="card-title">Fortaleza/São Paulo</span>
                    </div>
                    <div class="card-content" style="border-radius: 30px;">
                        <p>Venha visitar os principais pontos turísticos de São Paulo como: O estádio Morumbi, A rua 25
                            de Março e muito mais!</p>
                    </div>
                    <div class="card-action" style="border-radius: 30px;">
                        <a href="login.php">Viajar</a>
                    </div>
                </div>
            </div>
            <div class="grid-example col s12 m4 l4 tamanho">
                <div class="card" style="border-radius: 30px;">
                    <div class="card-image" style="border-top-left-radius: 30px;border-top-right-radius: 30px;">
                        <img src="https://www.temporadalivre.com/blog-media/posts/cover/10046/size_800_passeios-no-rio-de-janeiro-rj-e454b109.jpg"
                            style="border-top-left-radius: 30px;border-top-right-radius: 30px;">
                        <span class="card-title">Fortaleza/Rio de Janeiro</span>
                    </div>
                    <div class="card-content">
                        <p>Venha visitar os principais pontos turísticos de Rio de Janeiro como: O Cristo Redentor, A
                            praia de Arraial do Cabo e muito mais!</p>
                    </div>
                    <div class="card-action" style="border-bottom-left-radius: 30px;border-bottom-right-radius: 30px;">
                        <a href="login.php">Viajar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div style="height:100px;background-color:#FF6347;">
    </div>
</div>

</div>

<div class="parallax">
    <div class="row">
        <div class="col s12">
            <h1 class="center-align" id="contatos">Fale Conosco!</h1>
        </div>
        <div class="container">
            <div class="col s12 l6 ">
                <div class="row back">
                    <form class="col s12" method="POST" action="php_action/create_assunto.php">
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="" id="nome" name="nome" type="text" class="validate">
                                <label>Nome</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" name="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="assunto" name="assunto" class="materialize-textarea"></textarea>
                                <label for="assunto">Assunto</label>
                            </div>

                        </div>
                        <button class="btn waves-effect waves-light" type="submit" id="btn-enviar"
                            name="btn-enviar" style="background-color: #2E3131;border-radius: 30px;">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>


            </div>
            <div class="col s12 l6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7962.398060026213!2d-38.57929556511231!3d-3.766821499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c01797285bb%3A0xa8888be05f940563!2sCentro%20Universit%C3%A1rio%20Est%C3%A1cio%20-%20Campus%20Parangaba!5e0!3m2!1spt-BR!2sbr!4v1633725686123!5m2!1spt-BR!2sbr"
                    width="440" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <br>
    <div class="parallax">
        <div style="height:100px;background-color:#FF6347;">
        </div>
        <div class="container">
            <div class="row center-align">
                <div class="s12">
                    <h1>Equipe</h1>
                </div>
                <div class="col s6">
                    <img class="circle responsive-img" alt="Eduardo" src="jonas2.jpg" width="240px">
                    <h3>Carlos Jonas</h3>
                </div>
                <div class="col s6">
                    <img class="circle responsive-img" alt="Eduardo" src="edu.jpg" width="250px">
                    <h3>Eduardo Sousa</h3>
                </div>

            </div>
        </div>
    </div>

    <?php
    require_once('require/footer.php');

    ?>

</div>