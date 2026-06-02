<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrições</title>
    <link rel="stylesheet" href="css\Novo_CSS\inscricoes.css">
    <!-- Font Montserat -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <!-- Font Karantina -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    require_once('header.php');
    ?>
    <div class="inscricoes">
        <div class="inscricoes-info">

            <div class="info-text">
                <h1>FAÇA PARTE DA</h1>
                <h1 class="acalourada">ACALOURADA 2026.2 </h1>

                <p>Preencha o formulário ao lado para garantir sua <br>participação na recepção dos calouros de <br>Ciência da Computação e Inteligência Artificial da UFMA</p>
            </div>

            <div class="info-cards">
                <div class= "card-vertical">

                    <div class="card">
                        <img src="img\inscricoes\calendario_icon.svg" alt="icon calendário">
                        <h3>6 anos</h3>
                        <p>de tradição</p>
                    </div>

                    <div class="card">
                        <img src="img\inscricoes\icon_pessoas.svg" alt="icon pessoas">
                        <h3>+400</h3>
                        <p>calouros já participaram</p>
                    </div>

                    <div class="card">
                        <img src="img\inscricoes\joia_icon.svg" alt="icon joia">
                        <h3>XX%</h3>
                        <p>de aprovação entre calouros</p>
                    </div>
                </div>

                <div class="card-horizontal">

                    <div class="card" id="horizontal">
                        <img src="img\inscricoes\icon_pessoas.svg" alt="icon pessoas">

                        <div class="info">
                            <h3>Aprimoramento</h3>
                            <p>Utilizaremos seus dados para organizar uma experiência melhor e mais personalizada no evento!</p>
                        </div>

                    </div>

                </div>  
            </div>
        </div>

        <div class="inscricoes-form">
            <div class="form"></div>
        </div>

    </div>
    <?php
    require_once('footer.php');
    require_once('html_footer.php');
    ?>  
</body>
</html>
