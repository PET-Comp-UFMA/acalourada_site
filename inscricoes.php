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
                <div class="titulo">
                    <h1>FAÇA PARTE DA</h1>
                    <h1 class="acalourada">
                    <span class="azul-claro">ACALOURADA</span> 2026.2
                    </h1>
                </div>

                <p>Preencha o formulário para garantir sua <br>participação na recepção dos calouros de <br>Ciência da Computação e Inteligência <br>Artificial da UFMA</p>
            </div>

            <div class="info-cards">
                <div class= "card-vertical">

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
            <div class="card-form">
                <h2>Formulário de Inscrição</h2>
                
                <form action="">
                    
                    <div class="nome-celular">
                        <!--NOME-->
                        <div class="campo">
                            <label for="nome">Nome Completo:</label>
                            <input type="text" id="nome" placeholder="Digite seu nome completo" required>
                        </div>
                        <!--NUMERO-->
                        <div class="campo">
                            <label for="celular">Celular (WhatsApp):</label>
                            <input id= "celular" type="text" name="celular" placeholder="(00) 00000-0000" maxlength="15" required>
                        </div>
                    </div>
                    <!--EMAIL-->
                    <div class="campo">
                        <label for="email">Email Discente (Se não houver, use o pessoal):</label>
                        <input type="email" id="email" placeholder="Digite seu email" required>
                    </div>
                    <!--INTERESSES-->
                    <div class="campo">
                        <label for="interesses">Quais assuntos você gostaria que fossem abordados na Acalourada?</label>
                        <textarea id="interesses" placeholder="Digite assuntos de seu interesse" required></textarea>
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
                        <button id="btnRegistrar">REGISTRAR</button>
                        <span class="tooltip">
                            Preencha todos os campos para realizar a inscrição.
                        </span>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <?php
    require_once('footer.php');
    ?>  
<script src="js/Novo_JS/inscricoes.js"></script>
</body>
</html>
