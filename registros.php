[<div class="fake-browser-bar"></div>]

<?php
    $cssExtra = "css/Novo_CSS/registros.css";

    require_once('header.php');
?>


<section class="hero-registros">
    <div class="hero-registros-content">
        <h1>Registros Acalourada <span>2026.1</span></h1>
        <p>
            Os melhores cliques dos três dias do evento vivido
            pelos calouros do curso de Ciência da Computação
            e Inteligência Artificial.
        </p>
    </div>
</section>

<div class="dias-container">
    <button class="btn-dia ativo">Dia 1</button>
    <button class="btn-dia">Dia 2</button>
    <button class="btn-dia">Dia 3</button>
</div>

<script src="js/registrosBotoes.js"></script>

<section class="registros-banner">

    <img src="img/BannerRegistros.png"
        alt="Banner registros"
        class="banner-registros-img">

    <img src="img/fundoMain.svg"
        alt="Fundo Decorativo"
        class="fundo-main-img">

</section>

<?php 
    require_once('footer.php');
    require_once('html_footer.php');
?>