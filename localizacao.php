<?php
$tituloPagina = "Localização - Acalourada";
$cssExtra = "css/Novo_CSS/localizacao.css";
require_once('header.php');
?>



<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@300;400;700&display=swap" rel="stylesheet">
</head>


<body>


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

    <div class="container">
        <div>
            <div class="section-header">
                <h2>LOCALIZAÇÃO</h2>
            </div>
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1847.6036274397102!2d-44.30895302649684!3d-2.5583697680220316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7f68f5cedc548dd%3A0x780f0a32464f4178!2sCCET%20-%20Centro%20de%20Ci%C3%AAncias%20Exatas%20e%20Tecnol%C3%B3gicas!5e1!3m2!1spt-BR!2sbr!4v1782216253577!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div>
            <div class="section-header">
                <h2>CCET POR DENTRO</h2>
            </div>
            <div class="mapa-container">
                <img src="img/MAPA CCET - UFMA.png" usemap="#image-map" class="mapa">

                <map name="image-map">
                    <area target="" alt="Auditorio1" title="Auditorio 1" href="#" coords="1571,2760,1673,2866,1791,2760,1676,2655" shape="poly" onclick="mostrarImagem('img/Locais/Auditorio_1.jpeg'); return false;">
                    <area target="" alt="Auditorio2" title="Auditorio 2" href="#" coords="1952,2287,2058,2393,1955,2481,1861,2387" shape="poly" onclick="mostrarImagem('img/Locais/Auditorio_2.jpeg'); return false;">
                    <area target="" alt="SalaPETComp" title="Sala PETComp" href="#" coords="1755,2187,1814,2246,1767,2293,1706,2249" shape="poly" onclick="mostrarImagem('img/Locais/sala_PETComp.jpeg'); return false;">
                    <area target="" alt="AuditorioPos" title="Auditorio da SalaAuditoPos" href="#" coords="1303,1013,1359,1062,1309,1121,1253,1071" shape="poly" onclick="mostrarImagem('img/Locais/Auditorio_Pos.jpeg'); return false;">
                    <area target="" alt="DAComp" title="DAComp" href="#" coords="1336,2813,1394,2863,1344,2924,1280,2871" shape="poly" onclick="mostrarImagem('img/Locais/Sala_DAComp.jpeg'); return false;">
                </map>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="modal">
        <img id="modalImg" src="">
    </div>
    <!-- <div class="mapa">
        <iframe
            src="https://petcompufma.org/mapa-ccet?embed=true"
            width="100%"
            height="600px"
            frameborder="0"
            scrolling="no"
            style="border: 0; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15);"
            title="Mapa Interativo do CCET">
        </iframe>
    </div> -->
    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/image-map-resizer/1.0.10/js/imageMapResizer.min.js"></script>
    <script>
        imageMapResize();

        function mostrarImagem(src) {
            const modal = document.getElementById('modal');
            const modalImg = document.getElementById('modalImg');

            // Esconde modal antes de carregar a nova imagem
            modal.style.display = 'none';

            // Só mostra quando a imagem terminar de carregar
            modalImg.onload = () => {
                modal.style.display = 'block'; // mostra o modal
            };

            modalImg.src = src; // inicia o carregamento
        }

        // Fecha modal ao clicar nele
        function fecharModal() {
            const modal = document.getElementById('modal');
            modal.style.display = 'none';
        }

        document.getElementById('modal').addEventListener('click', fecharModal);
    </script>
</body>