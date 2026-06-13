<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<?php
$cssExtra = "css/Novo_CSS/localizacao.css";

?>

<body>
    <?php include 'header.php'; ?>

    <div class="banner-laboratorios">
        <div class="banner-content">
            <h1 class="banner-title">
                Confira a <br>
                <span class="destaque">localização</span> do evento
            </h1>
            <p class="banner-text">
                Confira onde será realizada a Acalourada e conheça o Centro de Ciências Exatas e Tecnológicas da UFMA (CCET).
            </p>
        </div>
        <div class="banner-image">
            <img src="svg/character-map.svg" alt="Ilustração estudante">
        </div>
    </div>


    <div class="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.1150532731281!2d-44.30820928297688!3d-2.558588842035779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7f68f5cedc548dd%3A0x780f0a32464f4178!2sCCET%20-%20Centro%20de%20Ci%C3%AAncias%20Exatas%20e%20Tecnol%C3%B3gicas!5e0!3m2!1spt-BR!2sbr!4v1678999628693!5m2!1spt-BR!2sbr" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="mapa">
        <iframe
            src="https://petcompufma.org/mapa-ccet?embed=true"
            width="100%"
            height="600px"
            frameborder="0"
            scrolling="no"
            style="border: 0; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15);"
            title="Mapa Interativo do CCET">
        </iframe>
    </div>



    <?php include 'footer.php'; ?>
</body>