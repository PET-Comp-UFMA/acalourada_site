<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title>Acalourada</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Acalourada, Evento, petcomp" name="keywords">
    <meta content="PETCOMP-UFMA" name="author">
    <meta content="index, follow" name="robots">
    <meta name="creator" content="PETCOMP-UFMA">
    <meta name="google-site-verification" content="Vq1j2NBJRrVdJnbfpVGku9UCJFm-OD1rTIO7XZ7i7Rs">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon-v1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-v1/favicon-dark.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-v1/favicon.png">
    <link rel="manifest" href="/favicon-v1/site.webmanifest">

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@300;400;700&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/Novo_CSS/header.css">

    <?php if (isset($cssExtra)): ?>
        <link rel="stylesheet" href="<?= $cssExtra ?>">
    <?php endif; ?>

</head>

<body>

    <header class="site-header">

        <div class="site-header__inner">

            <!-- LOGO -->
            <a href="index.php" class="site-brand">

                <img src="img/favicon-v1/IconV2.svg"
                    alt="Logo Acalourada"
                    class="site-brand__icon">

                <img src="img/favicon-v1/BannerV2.svg"
                    alt="Acalourada"
                    class="site-brand__text">

            </a>

            <!-- BOTÃO MOBILE -->
            <button class="site-toggler">
                ☰
            </button>

            <!-- NAVBAR -->
            <nav class="site-navbar">

                <ul class="site-nav">

                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>"
                            href="index.php">
                            HOME
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'programacao.php' ? 'active' : '' ?>"
                            href="programacao.php">
                            PROGRAMAÇÃO
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'localizacao.php' ? 'active' : '' ?>"
                            href="localizacao.php">
                            LOCALIZAÇÃO
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'labs.php' ? 'active' : '' ?>"
                            href="labs.php">
                            LABS
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'registros.php' ? 'active' : '' ?>"
                            href="registros.php">
                            REGISTROS
                        </a>
                    </li>

                    <li class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle">
                            VERSÕES
                        </a>

                        <div class="site-dropdown">

                            <a href="index.php">2026.2</a>
                            <a href="2026.1/index.php">2026.1</a>
                            <a href="2025.2/index.php">2025.2</a>
                            <a href="2025.1/index.php">2025.1</a>
                            <a href="2024.2/index.php">2024.2</a>
                            <a href="2024.1/index.php">2024.1</a>
                            <a href="2023.2/index.php">2023.2</a>
                            <a href="2023.1/index.php">2023.1</a>
                            <a href="2022.2/index.php">2022.2</a>
                            <a href="2022.1/index.php">2022.1</a>
                            <a href="2021.2/index.php">2021.2</a>
                            <a href="2021.1/index.php">2021.1</a>
                            <a href="2020.2/index.php">2020.2</a>

                        </div>

                    </li>

                </ul>

                <a href="inscricoes.php" class="btn-inscreva">
                    INSCREVA-SE
                </a>

            </nav>

        </div>

    </header>

    <!-- Scripts no final do body -->
    <script src="js/main.js"></script>

</body>
</html>