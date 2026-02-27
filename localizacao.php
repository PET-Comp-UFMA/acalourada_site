<?php
require_once('html_header.php');
require_once('header.php');
?>
<main id="main">

    <section id=localizacao>
        <div class="container">
            <div class="section-header">
                <h2>LOCALIZAÇÃO</h2>
            </div>

            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.1150532731281!2d-44.30820928297688!3d-2.558588842035779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7f68f5cedc548dd%3A0x780f0a32464f4178!2sCCET%20-%20Centro%20de%20Ci%C3%AAncias%20Exatas%20e%20Tecnol%C3%B3gicas!5e0!3m2!1spt-BR!2sbr!4v1678999628693!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="section-header">
                <h2>CCET POR DENTRO</h2>
            </div>

            <div>
               
                <img src="img/MAPA CCET - UFMA.png" usemap="#image-map" class="mapa">

                <map name="image-map">
                    <area target="" alt="Auditorio1" title="Auditorio 1" href="#" coords="1571,2760,1673,2866,1791,2760,1676,2655" shape="poly" onclick="mostrarImagem('img/Locais/Auditorio_1.jpeg'); return false;" >
                    <area target="" alt="Auditorio2" title="Auditorio 2" href="#" coords="1952,2287,2058,2393,1955,2481,1861,2387" shape="poly" onclick="mostrarImagem('img/Locais/Auditorio_2.jpeg'); return false;">
                    <area target="" alt="SalaPETComp" title="Sala PETComp" href="#" coords="1755,2187,1814,2246,1767,2293,1706,2249" shape="poly"  onclick="mostrarImagem('img/Locais/sala_PETComp.jpeg'); return false;">
                    <area target="" alt="AuditorioPos" title="Auditorio da SalkAuditoPos" href="#" coords="1303,1013,1359,1062,1309,1121,1253,1071" shape="poly">
                    <area target="" alt="DAComp" title="DAComp" href="#" coords="1336,2813,1394,2863,1344,2924,1280,2871" shape="poly" onclick="mostrarImagem('img/Locais/Sala_DAComp.jpeg'); return false;">
                </map>
            </div>
           <!-- Modal -->
            <div id="modal">
                    <img id="modalImg" src="">
            </div>
        </div>
    </section>

</main>

<?php
require_once('footer.php');
require_once('html_footer.php');
?>