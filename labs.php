<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<?php
$cssExtra = "css/labs.css";
require_once('header.php');

function componenteCard($titulo, $subtitulo, $Cor, $Logo, $idPopUp)
{
?>
    <div class="card">
        <div class="card-header">
            <div class="card-bg <?= $Cor ?>"></div>
            <img src="<?= $Logo ?>" alt="Logo <?= $titulo ?>" class="card-logo-img">
        </div>
        <div class="card-body">
            <h3 class="card-title"><?= $titulo ?></h3>
            <p class="card-text"><?= $subtitulo ?></p>
            <button class="btn-saiba-mais" onclick="abrirPopUp('<?= $idPopUp ?>')">Saiba mais</button>
        </div>
    </div>
<?php
}

function componentePopUp($idPopUp, $cor, $caminhoLogo, $titulo, $subtitulo, $descricao, $coordenadores = [], $site = null)
{
?>
    <div id="<?= $idPopUp ?>" class="popup-overlay">
        <div class="popup-container" style="background: linear-gradient(180deg, <?= $cor ?> 0%, #ffffff 25%);">
            <span class="close-btn" onclick="fecharPopUp('<?= $idPopUp ?>')">&times;</span>

            <div class="popup-header">
                <img src="<?= $caminhoLogo ?>" alt="Logo <?= $titulo ?>" class="popup-logo">
                <h2><?= $titulo ?></h2>
                <h3><?= $subtitulo ?></h3>
                <?php if (!empty($site)): ?>
                    <a href="<?= $site ?>" target="_blank" style="color: <?= $cor ?>;">Acessar Site</a>
                <?php endif; ?>
            </div>
            <div class="popup-body">
                <p><?= $descricao ?></p>
                <div class="popup-footer">
                    <?php foreach ($coordenadores as $coord): ?>
                        <div class="coordenador">
                            <img src="<?= $coord['foto'] ?>" alt="Foto <?= $coord['nome'] ?>" class="prof-img">
                            <h4><?= $coord['nome'] ?></h4>
                            <span><?= $coord['cargo'] ?></span>
                            <div class="links">
                                <h5><a href="<?= $coord['email'] ?>" target="_blank" style="color: <?= $cor ?>;">E-mail</a></h5>
                                <h5><a href="<?= $coord['lattes'] ?>" target="_blank" style="color: <?= $cor ?>;">Lattes</a></h5>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
<?php
}

?>

<body>
    <div class="banner-laboratorios">
        <div class="banner-content">
            <h1 class="banner-title">
                Conheça os <br>
                <span class="destaque">laboratórios</span> do curso
            </h1>
            <p class="banner-text">
                Durante a Acalourada, você terá a chance de visitar os laboratórios de pesquisa da UFMA durante o LABTOUR. Veja de perto onde acontece a ciência que vai transformar sua jornada.
            </p>
        </div>
        <div class="banner-image">
            <img src="svg/GirlPetPc.svg" alt="Ilustração estudante">
        </div>
    </div>


    <div class="container-sobre">
        <div class="card-sobre">
            <h2 class="titulo-sobre">SOBRE OS LABORATÓRIOS</h2>
            <p class="texto-sobre">
                Os laboratórios de Ciência da Computação e Inteligência Artificial da UFMA (CCET) formam um ecossistema integrado e colaborativo focado em inovação tecnológica e na resolução de problemas complexos. Em vez de atuarem isoladamente, esses espaços se complementam em pesquisas de ponta que envolvem Inteligência Artificial, Aprendizado de Máquina e Visão Computacional (com aplicações médicas e em dados geográficos); Engenharia de Software e Interação Humano-Computador; além de Sistemas Web Avançados, Computação Pervasiva, Mídias Interativas, TV Digital e jogos. Funcionando como verdadeiros centros de formação, esses laboratórios mantêm as portas abertas para os alunos, que podem ingressar em projetos de pesquisa, a partir do 2º período, bastando entrar em contato direto e conversar com os professores responsáveis.
            </p>
        </div>
    </div>

    <div class="grid-container">
        <?php
        componenteCard("DEXTERS Lab", "Laboratório de Engenharia de Software", "bg-dxt", "img/labs/logo-dxt.png", "popUpDxt");
        componenteCard("VIPLAB", "Laboratório de Visão e Processamento de Imagens", "bg-vip", "img/labs/logo-viplab.png", "popUpVip");
        componenteCard("MODAL", "Laboratório de Modelagem Matemática e Algoritmos", "bg-modal", "img/labs/logo-modal.png", "popUpModal");
        componenteCard("LINT²", "Laboratório de Inteligência Interativa", "bg-lint", "svg/logo-lint.svg", "popUpLint");
        componenteCard("NCA", "Núcleo de Computação Aplicada", "bg-nca", "img/labs/logo-nca.png", "popUpNCA");
        componenteCard("LSDi", "Laboratório de Sistemas Distribuídos Inteligentes", "bg-lsdi", "img/labs/logo-lsdi.png", "popUpLsdi");
        componenteCard("LAWS", "Laboratório de Sistemas Web Avançados", "bg-laws", "img/labs/logo-laws.png", "popUpLaws");
        componenteCard("INOVTEC", "Núcleo de Estudos Tecnológicos em Mecatrônica", "bg-inovtec", "img/labs/logo-inovtec.png", "popUpInovtec");
        componenteCard("LACMOR", "Laboratório de Métodos de Cognição Artificial para Otimização e Robótica", "bg-lacmor", "img/labs/lacmor.png", "popUpLacmor");
        componenteCard("TELEMÍDIA", "Laboratório de Sistemas Multimídia", "bg-telemidia", "img/labs/logo-telemidia.png", "popUpTelemidia");
        componenteCard("LIDI", "Laboratório de Inclusão Digital", "bg-lidi", "img/labs/logo-lidi.png", "popUpLidi");
        ?>
    </div>

    <?php
    componentePopUp(
        "popUpDxt",
        "#ABF3FF",
        "img/labs/logo-dxt.png",
        "DEXTERS LAB",
        "Laboratório de Engenharia de Software",
        "O Laboratório de Engenharia de Software atua com pesquisas relacionadas ao processo de desenvolvimento de software com qualidade e inclusão de aspectos de interação humano-computador para aumentar a competitividade de produtos de software.",
        [
            [
                'foto' => 'img/labs/coord-dxt.jpeg',
                'nome' => 'Prof. Dr. Luis Rivero',
                'cargo' => 'Coordenador do DXT Lab',
                'email' => 'mailto:luis.rivero@ufma.br',
                'lattes' => 'http://lattes.cnpq.br/8534667641706692'
            ]
        ]
    );

    componentePopUp(
        "popUpVip",
        "#B8DB87",
        "img/labs/logo-viplab.png",
        "VIPLAB",
        "Vision and Image Processing Lab",
        "O Vision and Image Processing Lab (Laboratório de Visão e Processamento de Imagens) - VIPLab - é um dos laboratórios vinculados ao Núcleo de Computação Aplicada (NCA). O laboratório desenvolve pesquisas nas áreas de algoritmos de aprendizado profundo aplicados a problemas médicos e ciência de dados.",
        [
            [
                'foto' => 'img/labs/coord-vip1.jpeg',
                'nome' => 'Prof. Dr. Geraldo Braz Júnior',
                'cargo' => 'Coordenador do VIPLab',
                'email' => 'mailto:geraldo@nca.ufma.br',
                'lattes' => 'http://lattes.cnpq.br/8287861610873629'
            ],
            [
                'foto' => 'img/labs/coord_vip2.jpeg',
                'nome' => 'Prof. Dr. João Dallyson',
                'cargo' => 'Coordenador do VIPLab',
                'email' => 'mailto:joao.dallyson@ufma.br',
                'lattes' => 'http://lattes.cnpq.br/6047330108382641'
            ]
        ]
    );

    componentePopUp(
        "popUpModal",
        "#D28B8B",
        "img/labs/logo-modal.png",
        "MODAL",
        "Laboratório de Modelagem Matemática e Algoritmos",
        "O Laboratório de Modelagem Matemática e Algoritmos é voltado para o estudo, desenvolvimento e aplicações de modelos matemáticos que possam representar fenômenos do mundo real, com a implementação de algoritmos que resolvem ou aproximam as soluções desses modelos.",
        [
            [
                'foto' => 'img/labs/coord-modal.jpeg',
                'nome' => 'Prof. Dr. Francisco Glaubos',
                'cargo' => 'Coordenador do MODAL',
                'email' => 'mailto:francisco.glaubos@ufma.br',
                'lattes' => 'http://lattes.cnpq.br/1711180190759554'
            ]
        ]
    );

    componentePopUp(
        "popUpLint",
        "#BDE2D0",
        "svg/logo-lint.svg",
        "LINT²",
        "Laboratório de Inteligência Interativa",
        "O laboratório de Inteligência Interativa atua nas áreas de Inteligência Artificial, Ciência de Dados, Jogos Digitais, entre outras atuações.",
        [
            [
                'foto' => 'img/labs/coord-lint.jpeg',
                'nome' => 'Prof. Dr. Tiago Bonini Borchartt',
                'cargo' => 'Coordenador do LINT²',
                'email' => 'mailto:tiago.bonini@ufma.br',
                'lattes' => 'http://lattes.cnpq.br/2352727269839328'
            ]
        ]
    );

    componentePopUp(
        "popUpNCA",
        "#D2C0DA",
        "img/labs/logo-nca.png",
        "NCA",
        "Núcleo de Computação Aplicada",
        "O NCA é um espaço destinado à produção e desenvolvimento de tecnologias de ponta, agregando em um mesmo espaço as atividades de dois laboratórios (LABMINT e LABPAI) que trabalham nas áreas de processamento de imagens, visão computacional, visualização e interação com dados complexos e sistemas de informações geográficos.",
        [
            [
                'foto' => 'img/labs/coord-nca.jpeg',
                'nome' => 'Prof. Dr. Anselmo Cardoso de Paiva',
                'cargo' => 'Coordenador do NCA',
                'email' => 'mailto:anselmo.paiva@ufma.br',
                'lattes' => 'http://lattes.cnpq.br/6446831084215512'
            ],
            [
                'foto' => 'img/labs/coord-nca2.jpeg',
                'nome' => 'Prof. Dr. Aristófanes Corrêa Silva',
                'cargo' => 'Coordenador do NCA',
                'email' => 'mailto:ac.silva@ufma.br',
                'lattes' => 'http://lattes.cnpq.br/2446301582459104'
            ]
        ],
        "https://ncaufma.github.io/"
    );

    componentePopUp(
        "popUpLsdi",
        "#ABD6DE",
        "img/labs/logo-lsdi.png",
        "LSDi",
        "Laboratório de Sistemas Distribuídos Inteligentes",
        "O LSDi tem como principal linha de pesquisa a área de sistemas distribuídos, com ênfase em sistemas de computação móvel e pervasiva que combinam com o uso de inteligência computacional.",
        [
            [
                'foto' => 'img/labs/coord-lsdi.jpeg',
                'nome' => 'Prof. Dr. Francisco José da Silva e Silva',
                'cargo' => 'Coordenador do LSDi',
                'email' => 'mailto:francisco.silva@ufma.br',
                'lattes' => 'http://lattes.cnpq.br/0770343284012942'
            ]
        ],
        "https://www.lsdi.ufma.br/"
    );

    componentePopUp(
        "popUpLaws",
        "#E98080",
        "img/labs/logo-laws.png",
        "LAWS",
        "Laboratório de Sistemas Web Avançados",
        "O Laboratory of Advanced Web Systems (Laboratório de Sistemas Web Avançados) - LAWS - tem como objetivo a realização de projetos de pesquisa e desenvolvimento envolvendo a infra-estrutura da Web, Multimídia e suas aplicações. Suas principais áreas de atuação são: Avaliação de Desempenho, Qualidade de Serviço, Arquiteturas Orientadas a Serviços, Multimídia e TV Digital.",
        [
            [
                'foto' => 'img/labs/coord-laws.jpeg',
                'nome' => 'Prof. Dr. Mário Antonio Meireles Teixeira',
                'cargo' => 'Coordenador do LAWS',
                'email' => 'mailto:mario.meireles@ufma.br',
                'lattes' => 'http://lattes.cnpq.br/9943003955628885'
            ]
        ],
        "https://laws.tec.br/"
    );

    componentePopUp(
        "popUpInovtec",
        "#808080",
        "img/labs/logo-inovtec.png",
        "INOVTEC",
        "Núcleo de Estudos Tecnológicos em Mecatrônica",
        "O Núcleo de Estudos Tecnológicos em Mecatrônica tem o intuito de juntar os conhecimentos em Computação juntamente com as Engenharias Elétrica e Mecânica. O foco está em projetos eletromecânicos automatizados, controlados por sistemas e programas de computadores.",
        [
            [
                'foto' => 'img/labs/coord-inovtec.jpeg',
                'nome' => 'Prof. Dr. Areolino de Almeida Neto',
                'cargo' => 'Coordenador do INOVTEC',
                'email' => 'mailto:areolino.neto@ufma.br',
                'lattes' => 'http://lattes.cnpq.br/8041675571955870'
            ]
        ]
    );

    componentePopUp(
        "popUpLacmor",
        "#8086AF",
        "img/labs/lacmor.png",
        "LACMOR",
        "Laboratório de Métodos de Cognição Artificial para Otimização e Robótica",
        "O Laboratório de Aprendizagem Computacional, Métodos de Otimização e Robótica realiza investigação científica nas áreas de otimização, aprendizado de máquina e robótica móvel.",
        [
            [
                'foto' => 'img/labs/coord-lacmor.jpeg',
                'nome' => 'Prof. Dr. Alexandre César Muniz de Oliveira',
                'cargo' => 'Coordenador do LACMOR',
                'email' => 'mailto:alexandre.cesar@ufma.br',
                'lattes' => 'http://lattes.cnpq.br/5225588855422632'
            ]
        ],
        "http://lacmor.ufma.br/"
    );

    componentePopUp(
        "popUpTelemidia",
        "#F7CB90",
        "img/labs/logo-telemidia.png",
        "Telemídia",
        "Laboratório de Sistemas Multimídia",
        "O TELEMÍDIA é uma filial do TELEMÍDIA da PUC–RIO, sendo focado nas áreas de sistemas multimídia e Web.",
        [
            [
                'foto' => 'img/labs/coord-telemidia.jpeg',
                'nome' => 'Prof. Dr. Carlos de Salles Soares Neto',
                'cargo' => 'Coordenador do Telemídia',
                'email' => 'mailto:carlos.salles@ufma.br',
                'lattes' => 'http://lattes.cnpq.br/1512846862093142'
            ]
        ],
        "https://www.telemidia-ma.com.br/"
    );

    componentePopUp(
        "popUpLidi",
        "#ECF0A0",
        "img/labs/logo-lidi.png",
        "LIDI",
        "Laboratório de Inclusão Digital",
        "O Laboratório de Inclusão Digital (LIDI) desempenha um papel crucial na promoção de inclusão tecnológica. Este projeto busca mitigar as disparidades digitais ao capacitar esses grupos, proporcionando-lhes habilidades essenciais para navegarem no mundo digital em constante evolução. Ao alinhar-se com a missão da UNITI na UFMA, o laboratório contribui significativamente para a construção de uma comunidade mais inclusiva e tecnologicamente capacitada.",
        [
            [
                'foto' => 'img/labs/coord-lidi.jpeg',
                'nome' => 'Prof. Carlos Eduardo Portela Serra de Castro',
                'cargo' => 'Coordenador do LIDI',
                'email' => 'mailto:carlos.castro@ufma.br',
                'lattes' => 'http://lattes.cnpq.br/4162711893419264'
            ]
        ]
    );
    ?>

    <?php include 'footer.php'; ?>

    <script>
        function abrirPopUp(idPopUp) {
            const popUp = document.getElementById(idPopUp);
            popUp.style.display = 'flex';
        }

        function fecharPopUp(idPopUp) {
            const popUp = document.getElementById(idPopUp);
            popUp.style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target.classList.contains('popup-overlay')) {
                event.target.style.display = 'none';
            }
        }
    </script>

</body>

</html>