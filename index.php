<?php
    $cssExtra = "css/Novo_CSS/index.css";
    require_once('header.php');
?>

<section class="hero">
    <div class="container">

        <div class="hero-text">

            <span class="hero-tag">
                ACOLHIMENTO • INTEGRAÇÃO • TECNOLOGIA
            </span>

            <h1>
                ACALOURADA DE
                <span>CIÊNCIA DA COMPUTAÇÃO E
                INTELIGÊNCIA ARTIFICIAL</span>
                PETCOMP • UFMA
            </h1>

            <p>
                Um momento para dar boas-vindas, conectar
                pessoas e iniciar uma jornada incrível na área
                da Computação e IA.
            </p>

            <a href="inscricoes.php" class="btn-participar">
                Quero participar!
            </a>

        </div>

        <div class="hero-image">
            <img src="img/imagens_novo_site/astronauta (1).png" alt="Astronauta">
        </div>

    </div>

</section>

<section class="sobre">

    <div class="container">

        <div class="sobre-icon">
            <img src="" alt="Foguete">
        </div>

        <div class="sobre-text">

            <h2>SOBRE O EVENTO</h2>

            <p>
                A Acalourada é uma atividade de recepção dos estudantes
                ingressantes no curso de Ciência da Computação de forma
                presencial. Essa atividade já vem sendo desenvolvida há
                mais de 6 anos em conjunto com a Coordenação de Computação,
                o Departamento de Informática e o PETComp.
            </p>

        </div>

        <div class="sobre-cards">

            <div class="sobre-card">
                <img src="" alt="">
                <span>Integração</span>
            </div>

            <div class="sobre-card">
                <img src="" alt="">
                <span>Conhecimento</span>
            </div>

            <div class="sobre-card">
                <img src="" alt="">
                <span>Experiência</span>
            </div>

            <div class="sobre-card">
                <img src="" alt="">
                <span>Desenvolvimento</span>
            </div>

        </div>

    </div>

</section>

<section class="organizacao">

    <div class="container">

        <h2>ORGANIZAÇÃO</h2>

        <div class="organizacao-grid">

            <div class="organizacao-card">
                <img src="" alt="UFMA">

                <h3>UFMA</h3>

                <p>
                    Universidade Federal do Maranhão
                </p>
            </div>

            <div class="organizacao-card">
                <img src="" alt="COCOM">

                <h3>COCOM</h3>

                <p>
                    Coordenação do Curso Ciência da Computação
                </p>
            </div>

            <div class="organizacao-card">
                <img src="" alt="PETComp">

                <h3>PETComp</h3>

                <p>
                    PET Ciência da Computação
                </p>
            </div>

        </div>

    </div>

</section>

<section class="faq">

    <div class="container">

        <h2>FAQ</h2>

        <p class="faq-desc">
            Aqui você encontra perguntas frequentes sobre o evento,
            início das aulas e o curso.
        </p>

        <div class="faq-item">

            <button class="faq-question">
                Como eu posso saber meus horários de aula?
            </button>

            <div class="faq-answer">
                Para ter acesso aos horários de aula,
                você precisa logar no SIGAA e acessar
                a aba de ensino.
            </div>

        </div>

        <div class="faq-item">

            <button class="faq-question">
                Como funcionam as notas?
            </button>

            <div class="faq-answer">
                As notas são divididas em três avaliações,
                reposição e prova final.
            </div>

        </div>

        <div class="faq-item">

            <button class="faq-question">
                Com quanto tempo consigo me formar?
            </button>

            <div class="faq-answer">
                O tempo previsto é de acordo com a matriz curricular.
            </div>

        </div>

        <div class="faq-item">

            <button class="faq-question">
                Como fico sabendo dos eventos de computação?
            </button>

            <div class="faq-answer">
                Através das redes sociais e grupos oficiais do curso.
            </div>

        </div>

    </div>

</section>

<script>

document.querySelectorAll('.faq-question').forEach(button => {

    button.addEventListener('click', () => {

        button.parentElement.classList.toggle('active');

    });

});

</script>

<?php
    require_once('footer.php');
    require_once('html_footer.php');
?>