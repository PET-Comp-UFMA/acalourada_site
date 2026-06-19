<?php
$tituloPagina = "Inscreva-se - Acalourada";
$cssExtra = "css\Novo_CSS\inscricoes.css";
require_once('header.php');
?>

<body>

    <div class="inscricoes">
        <div class="inscricoes-info">

            <div class="info-text">
                <div class="titulo">
                    <h1>FAÇA PARTE DA</h1>
                    <h1 class="acalourada">
                        <span class="azul-claro">ACALOURADA</span> 2026.2
                    </h1>
                </div>

                <p>Preencha o formulário para garantir sua <br>participação na recepção dos calouros de <br>Ciência da Computação e Inteligência <br>Artificial da UFMA</p>
            </div>

            <div class="info-cards">
                <div class="card-vertical">

                    <div class="card">
                        <img src="img\inscricoes\iconCalendario.svg" alt="icon calendário">
                        <div class="card-text">
                            <h3>6 anos</h3>
                            <p>de tradição</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="img\inscricoes\iconPessoas.svg" alt="icon pessoas">
                        <div class="card-text">
                            <h3>+400</h3>
                            <p>calouros já participaram</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="img\inscricoes\iconJoia.svg" alt="icon joia">
                        <div class="card-text">
                            <h3>XX%</h3>
                            <p>de aprovação entre calouros</p>
                        </div>
                    </div>
                </div>

                <div class="card-horizontal">

                    <div class="card" id="horizontal">
                        <img src="img\inscricoes\iconSeta.svg" alt="icon pessoas">

                        <div class="info">
                            <h3>Aprimoramento</h3>
                            <p>Utilizaremos seus dados para organizar uma experiência melhor e mais personalizada no evento!</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="inscricoes-form">
            <div class="card-form" id="card-form" style="display: block;">
                <h2>Formulário de Inscrição</h2>

                <form id="form-inscricao" action="https://script.google.com/macros/s/AKfycbwjpGmwruS3OYcfhKIZTuiM_TZTld_gLO19flzD08FHyHvXTHxCTLHcl4OWic_VYkI3/exec" method="POST">

                    <div class="nome-celular">
                        <!--NOME-->
                        <div class="campo">
                            <label for="nome">Nome Completo:</label>
                            <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                        </div>
                        <!--NUMERO-->
                        <div class="campo">
                            <label for="celular">Celular (WhatsApp):</label>
                            <input id="celular" type="text" name="celular" placeholder="(00) 00000-0000" maxlength="15" required>
                        </div>
                    </div>
                    <!--EMAIL-->
                    <div class="campo">
                        <label for="email">Email Discente (Se não houver, use o pessoal):</label>
                        <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                    </div>
                    <!--INTERESSES-->
                    <div class="campo">
                        <label for="interesses">Quais assuntos você gostaria que fossem abordados na Acalourada?</label>
                        <textarea id="interesses" name="interesses" placeholder="Digite assuntos de seu interesse" required></textarea>
                    </div>
                    <!--EXPECTATIVA-->
                    <div class="campo">
                        <label>Quais são suas expectativas quanto a Acalourada?</label>

                        <div class="escala">
                            <!-- Muito Baixa -->
                            <input type="radio" id="MuitoBaixa" name="expectativa" value="1">
                            <label for="MuitoBaixa" class="opcao">
                                <span class="numero">1</span>
                                <span class="descricao">Muito Baixa</span>
                            </label>

                            <!-- Opção 2 -->
                            <input type="radio" id="Baixa" name="expectativa" value="2">
                            <label for="Baixa" class="opcao">
                                <span class="numero">2</span>
                                <span class="descricao">Baixa</span>
                            </label>
                            <!-- Opção 3 -->
                            <input type="radio" id="Neutro" name="expectativa" value="3">
                            <label for="Neutro" class="opcao">
                                <span class="numero">3</span>
                                <span class="descricao">Neutro</span>
                            </label>
                            <!-- Opção 4 -->
                            <input type="radio" id="Alta" name="expectativa" value="4">
                            <label for="Alta" class="opcao">
                                <span class="numero">4</span>
                                <span class="descricao">Alta</span>
                            </label>
                            <!-- Opção 5 -->
                            <input type="radio" id="MuitoAlta" name="expectativa" value="5">
                            <label for="MuitoAlta" class="opcao">
                                <span class="numero">5</span>
                                <span class="descricao">Muito Alta</span>
                            </label>
                        </div>
                    </div>
                    <div class="container-botao">
                        <button type="submit" id="btnRegistrar">REGISTRAR</button>
                        <span class="tooltip">
                            Preencha todos os campos para realizar a inscrição.
                        </span>
                    </div>
                </form>
            </div>

            <div class="card-qrcode" id="card-qrcode" style="display: none;">
                <h1 class="titulo">ACALOURADA</h1>

                <div class="nome-participante" id="nome-participante">
                    <!-- INSIRA O NOME AQUI -->
                    Fulano de Tal
                </div>

                <div class="ano-badge">
                    2026.2
                </div>

                <div class="qrcode-container" id="qrcode-container">
                    <!-- INSIRA O QR CODE AQUI -->

                </div>

                <div class="acoes">
                    <button class="btn-acao" id="btn-download" title="Baixar QR Code">
                        ⬇
                    </button>

                    <button class="btn-acao" id="btn-compartilhar" title="Compartilhar QR Code">
                        ↗
                    </button>
                </div>

                <div class="logos">
                    <img src="logo-acalourada.png" alt="Acalourada">
                    <img src="logo-ufma.png" alt="UFMA">
                    <img src="logo-petcomp.png" alt="PETComp">
                </div>

            </div>

            <div class="card-fechado" id="card-fechado" style="display: none;">
                <svg width="143" height="150" viewBox="0 0 143 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.77808 53.241H116.671V29.9067C116.671 28.7141 116.173 27.6174 115.178 26.6166C114.182 25.6158 113.083 25.118 111.88 25.1232H12.5694C11.3716 25.1232 10.2723 25.621 9.27147 26.6166C8.27069 27.6122 7.77289 28.7115 7.77808 29.9145V53.241ZM12.5694 141.794C8.98628 141.794 5.9969 140.597 3.60125 138.201C1.2056 135.805 0.00518539 132.816 0 129.233V29.9067C0 26.3288 1.20042 23.342 3.60125 20.9464C6.00208 18.5507 8.99146 17.3503 12.5694 17.3451H26.3288V0H34.7058V17.3451H90.3502V0H98.1283V17.3451H111.888C115.466 17.3451 118.455 18.5455 120.856 20.9464C123.257 23.3472 124.454 26.3366 124.449 29.9145V70.7572C123.184 70.2905 121.903 69.9431 120.607 69.7149C119.311 69.4868 117.999 69.2768 116.671 69.0849V61.0268H7.77808V129.233C7.77808 130.425 8.27588 131.522 9.27147 132.523C10.2671 133.524 11.3638 134.022 12.5616 134.016H64.7058C65.1155 135.468 65.6366 136.819 66.2692 138.069C66.9019 139.313 67.563 140.555 68.2526 141.794H12.5694ZM89.829 140.519C83.7933 134.473 80.7754 127.12 80.7754 118.46C80.7754 109.801 83.7933 102.45 89.829 96.4093C95.8648 90.3683 103.215 87.3478 111.88 87.3478C120.55 87.3478 127.903 90.3683 133.939 96.4093C139.98 102.445 143 109.795 143 118.46C143 127.125 139.98 134.478 133.939 140.519C127.898 146.56 120.547 149.578 111.888 149.572C103.228 149.567 95.8752 146.549 89.829 140.519ZM124.768 135.587L129.015 131.341L114.874 117.2V96.0282H108.893V119.72L124.768 135.587Z"
                        fill="#FFFFFF" />
                </svg>
                <h1>Em breve!</h1>
                <h3>Estamos preparando uma experiência incrível para você. <br>As inscrições 2026.2 estarão disponíveis em breve. </h3>
            </div>
        </div>

    </div>
    <?php
    require_once('footer.php');
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script src="js/Novo_JS/inscricoes.js"></script>
</body>

</html>