<!-- <div class="fake-browser-bar">

<?php
    $tituloPagina = "Registros - Acalourada";
    require_once('header.php');
?>

<link rel="stylesheet" href="css/Novo_CSS/registros.css">
<link href="https://fonts.googleapis.com/css2?family=Karantina:wght@300;400;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<section class="hero-fundo-azul"> </section>

<section class="hero-registros">
    <div class="hero-registros-content">
        <h1>Registros Acalourada <span>2026.1</span></h1>
        <p>
            Os melhores cliques dos três dias do evento vivido
            pelos calouros do curso de Ciência da Computação
            e Inteligência Artificial. Para mais informações,
            clique no tablet abaixo!
        </p>

        <div class="botoes-dias">
            <button id="dia1" class="btn-dia ativo">Dia 1</button>
            <button id="dia2" class="btn-dia">Dia 2</button>
            <button id="dia3" class="btn-dia">Dia 3</button>
        </div>
    </div>
</section>

<section class="registros-banner">

    <img
        id="banner-registros"
        src="img/registros/2026.2/BannerRegistrosEmBreve.svg"
        alt="Banner registros"
        class="banner-registros-img">

    <img src="img/registros/2026.2/fundoMain.svg"
        alt="Fundo Decorativo"
        class="fundo-main-img">

</section>

<!-- <div id="modal-dia" class="modal">

    <button id="fechar-modal" class="btn-fechar">
        X
    </button>

    <img
        id="boxFotos"
        src=""
        alt="Foto">

</div> -->

<script src="js/registros.js"></script>

<?php 
    require_once('footer.php');
?>
