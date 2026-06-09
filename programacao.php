<?php

require_once('header.php');

echo '<link rel="stylesheet" href="css/Novo_CSS/programacao.css">';
echo '<script src="js/programacao.js" defer></script>';

/*Adicione aqui a programaçao do evento, seguindo o formato 
'dia1' => [                                   // O dia ira definir o numero de botoes
                                            //A resposividade foi pensada para 3 dias, o resto fica com deus kk
        'label' => '17/06',                   // O label e semana aparecem nos botoes
        'semana' => 'Quarta-feira',
        'atividades' => [
            [
                'periodo' => 'Manhã',                                  // aqui voce coloca a atividade dos cards
                'horario_inicio' => '08:30',
                'horario_fim' => '10:30',
                'titulo' => 'Boas Vindas + Apresentação PETComp',
                'local' => 'Auditório da Pós (CCET)',
                'palestrantes' => [
                    [
                        'nome' => 'Equipe PETComp',
                        'foto' => 'img/speakers/pet.jpg'
                    ]
                ]
            ],
            [
                'periodo' => 'Manhã',
                'horario_inicio' => '10:30',
                'horario_fim' => '12:00',
                'titulo' => 'Palestra sobre SBC e grupo Dexters',
                'local' => 'Auditório da Pós (CCET)',
                'palestrantes' => [
                    [
                        'nome' => 'Prof. Luis Rivero',
                        'foto' => 'img/speakers/prof.luis.png'
                    ]
                ]
            ]
        ]
    ],
    'dia2' => [
        'label' => '18/06',
        'semana' => 'Quinta-feira',
        'atividades' => [
            [
                'periodo' => 'Manhã',
                'horario_inicio' => '08:30',
                'horario_fim' => '10:30',
                'titulo' => 'Apresentação das Coordenações',
                'local' => 'Auditório da Pós (CCET)',
                'palestrantes' => [
                    [
                        'nome' => 'Coordenação de Curso',
                        'foto' => 'img/speakers/DEINF.png'
                    ]
                ]
            ],
            [
                'periodo' => 'Manhã',
                'horario_inicio' => '10:30',
                'horario_fim' => '12:00',
                'titulo' => 'Palestra: Carreira e Oportunidades',
                'local' => 'Auditório da Pós (CCET)',
                'palestrantes' => [
                    [
                        'nome' => 'Profa. Dra. Simara Vieira',
                        'foto' => 'img/speakers/simara.png'
                    ]
                ]
            ]
        ]
    ],
    'dia3' => [
        'label' => '19/06',
        'semana' => 'Sexta-feira',
        'atividades' => [
            [
                'periodo' => 'Manhã',
                'horario_inicio' => '08:30',
                'horario_fim' => '12:00',
                'titulo' => 'Apresentação dos Laboratórios (Parte 1)',
                'local' => 'Auditório da Pós (CCET)',
                'palestrantes' => [
                    [
                        'nome' => 'Equipe PETComp',
                        'foto' => 'img/speakers/pet.jpg'
                    ]
                ]
            ]
        ]
    ]
];
*/
$programacao = [];

$programacao_esta_vazia = empty($programacao);

$dias = array_keys($programacao);

$dia_ativo = (!$programacao_esta_vazia && isset($_GET['dia']) && in_array($_GET['dia'], $dias))
    ? $_GET['dia']
    : ($dias[0] ?? null);

//Quando programaçao tiver vazia
$dias_fixos = [
    '15' => ['label' => 'A DEFINIR', 'semana' => 'a definir'],
    '16' => ['label' => 'A DEFINIR', 'semana' => 'a definir'],
    '17' => ['label' => 'A DEFINIR', 'semana' => 'a definir'],
];
// Group activities by period
$atividades_por_periodo = [];
if (!$programacao_esta_vazia && isset($programacao[$dia_ativo]['atividades'])) {
    foreach ($programacao[$dia_ativo]['atividades'] as $item) {
        $periodo = isset($item['periodo']) ? $item['periodo'] : 'Dia';
        $atividades_por_periodo[$periodo][] = $item;
    }
}

?>

<!-- ───────────────── HERO ───────────────── -->
<section class="hero">

    <div class="hero-inner">

        <div>

            <p class="hero-eyebrow">
                Programação
            </p>

            <h1 class="hero-title">
                Explore nossa<br>
                programação para <span>2026.2</span>
            </h1>

            <p class="hero-desc">
                Confira os horários, atividades e palestras que fazem parte
                da Acalourada 2026.2 — uma experiência única.
            </p>
            <div class="hero-date">
                <div class="hero-day">
                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.10332 2.33545C8.58906 2.33545 8.98254 2.71376 8.98254 3.18081V4.88554C9.76252 4.87153 10.6371 4.87153 11.6214 4.87153H16.3094C17.2925 4.87153 18.1671 4.87153 18.947 4.88671V3.18198C18.947 2.71493 19.3405 2.33545 19.8263 2.33545C20.312 2.33545 20.7055 2.71376 20.7055 3.18081V4.9626C22.3927 5.09221 23.5008 5.41097 24.3134 6.19444C25.1284 6.97675 25.46 8.04162 25.5943 9.66462L25.6877 10.5088H2.33527V9.66345C2.47071 8.04045 2.80232 6.97558 3.61615 6.19328C4.42998 5.41097 5.53689 5.09104 7.2241 4.96143V3.18081C7.2241 2.71376 7.61759 2.33545 8.10332 2.33545Z"
                            fill="white" />
                        <path
                            d="M25.4105 10.7686C25.4223 11.623 25.429 13.1279 25.429 14.0117V16.3467C25.429 18.5559 25.4282 20.1864 25.2601 21.4365C25.0929 22.6792 24.764 23.5077 24.136 24.1357C23.5081 24.7637 22.6789 25.0926 21.4359 25.2598C20.1854 25.4279 18.555 25.4287 16.347 25.4287H11.6771C9.46763 25.4287 7.83646 25.4271 6.58624 25.2588C5.3437 25.0915 4.51501 24.7632 3.88702 24.1357C3.25938 23.5085 2.93116 22.6801 2.76398 21.4375C2.59579 20.187 2.59503 18.5556 2.59503 16.3467V12.1846C2.59585 11.6583 2.60011 11.149 2.6048 10.7686H25.4105Z"
                            stroke="white" stroke-width="0.518944" />
                        <path
                            d="M21.0172 19.8498C21.0172 20.1595 20.8942 20.4565 20.6752 20.6755C20.4563 20.8944 20.1593 21.0175 19.8496 21.0175C19.5399 21.0175 19.2429 20.8944 19.024 20.6755C18.805 20.4565 18.682 20.1595 18.682 19.8498C18.682 19.5402 18.805 19.2432 19.024 19.0242C19.2429 18.8052 19.5399 18.6822 19.8496 18.6822C20.1593 18.6822 20.4563 18.8052 20.6752 19.0242C20.8942 19.2432 21.0172 19.5402 21.0172 19.8498ZM21.0172 15.1793C21.0172 15.489 20.8942 15.786 20.6752 16.005C20.4563 16.2239 20.1593 16.347 19.8496 16.347C19.5399 16.347 19.2429 16.2239 19.024 16.005C18.805 15.786 18.682 15.489 18.682 15.1793C18.682 14.8697 18.805 14.5727 19.024 14.3537C19.2429 14.1347 19.5399 14.0117 19.8496 14.0117C20.1593 14.0117 20.4563 14.1347 20.6752 14.3537C20.8942 14.5727 21.0172 14.8697 21.0172 15.1793ZM15.1791 19.8498C15.1791 20.1595 15.0561 20.4565 14.8371 20.6755C14.6181 20.8944 14.3211 21.0175 14.0115 21.0175C13.7018 21.0175 13.4048 20.8944 13.1858 20.6755C12.9669 20.4565 12.8439 20.1595 12.8439 19.8498C12.8439 19.5402 12.9669 19.2432 13.1858 19.0242C13.4048 18.8052 13.7018 18.6822 14.0115 18.6822C14.3211 18.6822 14.6181 18.8052 14.8371 19.0242C15.0561 19.2432 15.1791 19.5402 15.1791 19.8498ZM15.1791 15.1793C15.1791 15.489 15.0561 15.786 14.8371 16.005C14.6181 16.2239 14.3211 16.347 14.0115 16.347C13.7018 16.347 13.4048 16.2239 13.1858 16.005C12.9669 15.786 12.8439 15.489 12.8439 15.1793C12.8439 14.8697 12.9669 14.5727 13.1858 14.3537C13.4048 14.1347 13.7018 14.0117 14.0115 14.0117C14.3211 14.0117 14.6181 14.1347 14.8371 14.3537C15.0561 14.5727 15.1791 14.8697 15.1791 15.1793ZM9.34098 19.8498C9.34098 20.1595 9.21797 20.4565 8.99899 20.6755C8.78002 20.8944 8.48303 21.0175 8.17336 21.0175C7.86369 21.0175 7.5667 20.8944 7.34773 20.6755C7.12875 20.4565 7.00574 20.1595 7.00574 19.8498C7.00574 19.5402 7.12875 19.2432 7.34773 19.0242C7.5667 18.8052 7.86369 18.6822 8.17336 18.6822C8.48303 18.6822 8.78002 18.8052 8.99899 19.0242C9.21797 19.2432 9.34098 19.5402 9.34098 19.8498ZM9.34098 15.1793C9.34098 15.489 9.21797 15.786 8.99899 16.005C8.78002 16.2239 8.48303 16.347 8.17336 16.347C7.86369 16.347 7.5667 16.2239 7.34773 16.005C7.12875 15.786 7.00574 15.489 7.00574 15.1793C7.00574 14.8697 7.12875 14.5727 7.34773 14.3537C7.5667 14.1347 7.86369 14.0117 8.17336 14.0117C8.48303 14.0117 8.78002 14.1347 8.99899 14.3537C9.21797 14.5727 9.34098 14.8697 9.34098 15.1793Z"
                            fill="white" />
                    </svg>
                    <p>
                        15 a 17 de março
                    </p>
                </div>
                <div class="hero-local">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M4.7743 3.44678C6.18988 2.05192 8.09607 1.26793 10.0834 1.26321C12.0707 1.25848 13.9806 2.03341 15.4028 3.42153H15.4045L15.4314 3.44678C18.4154 6.38189 18.4213 11.0964 15.4668 14.0021L10.6933 18.6972C10.5359 18.8522 10.3238 18.9391 10.1029 18.9391C9.88193 18.9391 9.66985 18.8522 9.51239 18.6972L4.73895 14.0021C4.03815 13.3169 3.48131 12.4986 3.10115 11.5953C2.72098 10.692 2.52515 9.72175 2.52515 8.74168C2.52515 7.7616 2.72098 6.7914 3.10115 5.88806C3.48131 4.98471 4.03815 4.16644 4.73895 3.48129L4.7743 3.44678ZM10.1008 5.47114C9.76915 5.47114 9.44078 5.53645 9.13441 5.66336C8.82804 5.79026 8.54967 5.97626 8.31518 6.21075C8.0807 6.44523 7.89469 6.72361 7.76779 7.02998C7.64089 7.33635 7.57557 7.66471 7.57557 7.99632C7.57557 8.32794 7.64089 8.6563 7.76779 8.96267C7.89469 9.26904 8.0807 9.54742 8.31518 9.7819C8.54967 10.0164 8.82804 10.2024 9.13441 10.3293C9.44078 10.4562 9.76915 10.5215 10.1008 10.5215C10.7705 10.5215 11.4128 10.2555 11.8863 9.7819C12.3599 9.30834 12.6259 8.66605 12.6259 7.99632C12.6259 7.3266 12.3599 6.68431 11.8863 6.21075C11.4128 5.73718 10.7705 5.47114 10.1008 5.47114Z"
                            fill="white" />
                    </svg>
                    <div class="hero-local__sub">
                        <p>
                            Centro de Ciências Exatas e Tecnológicas
                        </p>
                        <p>
                            UFMA - São Luís
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <img src="img/boneca_pet.png" alt="Ilustração da Acalourada" class="hero-boneca">


</section>

<main>

    <!-- Tabs -->
    <div class="day-tabs" role="tablist" aria-label="Dias do evento">

        <?php
        $dias_para_exibir = $programacao_esta_vazia ? $dias_fixos : $programacao;
        foreach ($dias_para_exibir as $chave => $dia):
            $ativo = ($chave === ($dia_ativo ?? array_key_first($dias_para_exibir)));
            ?>
            <a href="?dia=<?= urlencode($chave) ?>" class="day-tab <?= $ativo ? 'active' : '' ?>" role="tab"
                aria-selected="<?= $ativo ? 'true' : 'false' ?>">
                <span class="dt"><?= htmlspecialchars($dia['label']) ?></span>
                <span class="dw"><?= htmlspecialchars($dia['semana']) ?></span>
            </a>
        <?php endforeach; ?>

    </div>

    <?php if ($programacao_esta_vazia): ?>
        <div class="empty-state">
            <div class="empty-icon">
                <svg width="143" height="150" viewBox="0 0 143 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.77808 53.241H116.671V29.9067C116.671 28.7141 116.173 27.6174 115.178 26.6166C114.182 25.6158 113.083 25.118 111.88 25.1232H12.5694C11.3716 25.1232 10.2723 25.621 9.27147 26.6166C8.27069 27.6122 7.77289 28.7115 7.77808 29.9145V53.241ZM12.5694 141.794C8.98628 141.794 5.9969 140.597 3.60125 138.201C1.2056 135.805 0.00518539 132.816 0 129.233V29.9067C0 26.3288 1.20042 23.342 3.60125 20.9464C6.00208 18.5507 8.99146 17.3503 12.5694 17.3451H26.3288V0H34.7058V17.3451H90.3502V0H98.1283V17.3451H111.888C115.466 17.3451 118.455 18.5455 120.856 20.9464C123.257 23.3472 124.454 26.3366 124.449 29.9145V70.7572C123.184 70.2905 121.903 69.9431 120.607 69.7149C119.311 69.4868 117.999 69.2768 116.671 69.0849V61.0268H7.77808V129.233C7.77808 130.425 8.27588 131.522 9.27147 132.523C10.2671 133.524 11.3638 134.022 12.5616 134.016H64.7058C65.1155 135.468 65.6366 136.819 66.2692 138.069C66.9019 139.313 67.563 140.555 68.2526 141.794H12.5694ZM89.829 140.519C83.7933 134.473 80.7754 127.12 80.7754 118.46C80.7754 109.801 83.7933 102.45 89.829 96.4093C95.8648 90.3683 103.215 87.3478 111.88 87.3478C120.55 87.3478 127.903 90.3683 133.939 96.4093C139.98 102.445 143 109.795 143 118.46C143 127.125 139.98 134.478 133.939 140.519C127.898 146.56 120.547 149.578 111.888 149.572C103.228 149.567 95.8752 146.549 89.829 140.519ZM124.768 135.587L129.015 131.341L114.874 117.2V96.0282H108.893V119.72L124.768 135.587Z"
                        fill="#01204C" />
                </svg>
            </div>
            <h2 class="empty-title">Em breve!</h2>
            <p class="empty-desc">Estamos preparando uma experiência incrível para você.
                A progamação de 2026.2 estará disponível em breve. </p>
        </div>
    <?php else: ?>
        <div class="content">

            <?php foreach ($atividades_por_periodo as $periodo => $atividades): ?>
                <div class="schedule-period-group">

                    <div class="period-header">
                        <div class="period-icon">
                            <?php if (in_array(mb_strtolower(trim($periodo), 'UTF-8'), ['manhã', 'manha'])): ?>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12.5" cy="12.5" r="5" stroke="#0071CF" stroke-width="2.07083" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M12.5 2V4M12.5 21V23M4.5 12.5H2M23 12.5H20.5M5.07 5.07L6.48 6.48M18.52 18.52L19.93 19.93M5.07 19.93L6.48 18.52M18.52 6.48L19.93 5.07"
                                        stroke="#0071CF" stroke-width="2.07083" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            <?php else: ?>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_86_649)">
                                        <path
                                            d="M17.602 18.6379C17.602 17.2649 17.0566 15.9481 16.0857 14.9772C15.1148 14.0063 13.798 13.4608 12.4249 13.4608C11.0519 13.4608 9.7351 14.0063 8.76421 14.9772C7.79332 15.9481 7.24788 17.2649 7.24788 18.6379M12.4249 9.31918V2.07129M8.28329 5.17753L12.4249 9.31918L16.5666 5.17753M4.36943 10.5824L5.83972 12.0527M1.0354 18.6379H3.10623M21.7437 18.6379H23.8145M19.0102 12.0527L20.4805 10.5824M23.8145 22.7796H1.0354"
                                            stroke="#0071CF" stroke-width="2.07083" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_86_649">
                                            <rect width="24.8499" height="24.8499" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            <?php endif; ?>
                        </div>
                        <h3 class="schedule-period-title"><?= htmlspecialchars($periodo) ?></h3>
                    </div>

                    <div class="period-timeline">
                        <div class="schedule-grid">
                            <?php foreach ($atividades as $item): ?>
                                <div class="timeline-item">
                                    <div class="timeline-marker"></div>
                                    <article class="schedule-item" onclick="toggleCard(this)" role="button" tabindex="0">
                                        <!-- Coluna da esquerda: Horários verticalizados -->
                                        <div class="schedule-time-col">
                                            <span class="time-start"><?= htmlspecialchars($item['horario_inicio']) ?></span>
                                            <span class="time-end"><?= htmlspecialchars($item['horario_fim']) ?></span>
                                        </div>

                                        <!-- Coluna do meio: Título e Palestrantes -->
                                        <div class="schedule-info-col">
                                            <h4 class="activity-title"><?= htmlspecialchars($item['titulo']) ?></h4>

                                            <?php if (!empty($item['palestrantes'])): ?>
                                                <div class="speakers-list">
                                                    <?php foreach ($item['palestrantes'] as $p): ?>
                                                        <div class="speaker-tag">
                                                            <img src="<?= htmlspecialchars($p['foto']) ?>"
                                                                alt="<?= htmlspecialchars($p['nome']) ?>" class="speaker-avatar">
                                                            <span class="speaker-name"><?= htmlspecialchars($p['nome']) ?></span>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <!-- Coluna da direita: Localização -->
                                        <?php if (!empty($item['local'])): ?>
                                            <div class="schedule-location-col">
                                                <svg class="location-icon" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                    stroke="#2563eb" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg>
                                                <span class="location-text"><?= htmlspecialchars($item['local']) ?></span>
                                            </div>
                                        <?php endif; ?>
                                    </article>
                                    <div class="schedule-details">
                                        <div class="details-meta">
                                            <?php
                                            $inicio = strtotime($item['horario_inicio']);
                                            $fim = strtotime($item['horario_fim']);
                                            $duracao = ($fim - $inicio) / 60;
                                            $h = floor($duracao / 60);
                                            $m = $duracao % 60;
                                            $durStr = $h > 0 ? "{$h}h" . ($m > 0 ? " {$m}min" : "") : "{$m}min";
                                            ?>
                                            <span class="details-duration">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2.5">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <polyline points="12 6 12 12 16 14" />
                                                </svg>
                                                <?= $durStr ?>
                                            </span>
                                        </div>
                                        <?php if (!empty($item['descricao'])): ?>
                                            <p class="details-desc">
                                                <?= htmlspecialchars($item['descricao']) ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
</main>

<?php
require_once('footer.php');
require_once('html_footer.php');
?>