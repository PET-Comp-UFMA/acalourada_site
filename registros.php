<?php
    require_once('html_header.php');
    require_once('header.php');
?>

    <div class="section-header">
        <h2>Dia 1</h2>
    </div>
    <div class="swiper carousel">
        <div class="swiper-wrapper">
            
            <?php
            // array pra guardar/adicionar imagens
            $fotos = [
                "Dia1 (1).jpg",
                "Dia1 (2).jpg",
                "Dia1 (3).jpg",
                "Dia1 (4).jpg",
                "Dia1 (5).jpg",
                "Dia1 (6).jpg"
            ];

            // laço automatico
            foreach ($fotos as $foto) {
                echo '
                <div class="swiper-slide">
                    <div class="container-registros">
                        <img src="img/registros/2026.1/dia1/'.$foto.'" alt="">
                    </div>
                </div>';
            }
            ?>
            <!-- VERSÃO ANTIGA (manual)

            <div class="swiper-slide">
                <div class="container-registros">
                    <img src="img/registros/2025.2/dia 1/Foto dia 1 (4).jpg" alt="">
                </div>
            </div>

            -->
        </div>
        <button type="button" class="swiper-button-next"></button>
        <button type="button" class="swiper-button-prev"></button>
        <div class="swiper-pagination"></div>
    </div>

    <div class="section-header">
        <h2>Dia 2</h2>
    </div>
    <div class="swiper carousel">
        <div class="swiper-wrapper">

            <?php
            // array pra guardar/adicionar imagens
            $fotos = [
                "Dia2 (1).jpg",
                "Dia2 (2).jpg",
                "Dia2 (3).jpg",
                "Dia2 (4).jpg"
            ];

            // laço automatico
            foreach ($fotos as $foto) {
                echo '
                <div class="swiper-slide">
                    <div class="container-registros">
                        <img src="img/registros/2026.1/dia2/'.$foto.'" alt="">
                    </div>
                </div>';
            }
            ?>
            <!-- VERSÃO ANTIGA (manual)

            <div class="swiper-slide">
                <div class="container-registros">
                    <img src="img/registros/2025.2/dia 1/Foto dia 1 (4).jpg" alt="">
                </div>
            </div>
            
            -->
        </div>
        <button type="button" class="swiper-button-next"></button>
        <button type="button" class="swiper-button-prev"></button>
        <div class="swiper-pagination"></div>
    </div>

    <div class="section-header">
        <h2>Dia 3</h2>
    </div>
    <div class="swiper carousel">
        <div class="swiper-wrapper">

            <?php
            // array pra guardar/adicionar imagens
            $fotos = [
                "Dia3 (1).jpg",
                "Dia3 (2).jpg",
                "Dia3 (3).jpg",
                "Dia3 (4).jpg",
                "Dia3 (5).jpg"
            ];

            // laço automatico
            foreach ($fotos as $foto) {
                echo '
                <div class="swiper-slide">
                    <div class="container-registros">
                        <img src="img/registros/2026.1/dia3/'.$foto.'" alt="">
                    </div>
                </div>';
            }
            ?>
       </div>
        <button type="button" class="swiper-button-next"></button>
        <button type="button" class="swiper-button-prev"></button>
        <div class="swiper-pagination"></div>
    </div>
    
    <br>
            <!-- <div class="row justify-content-center">
                <div class="col-lg-9">
                    <ol>
                        <strong>
                            Em breve,fotos incriveis estarão disponíveis aqui!
                        </strong>
                    </ol>
                </div>
            </div> -->

<?php 
    require_once('footer.php');
    require_once('html_footer.php');
?>