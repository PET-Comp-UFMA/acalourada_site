<?php
require_once('html_header.php');
require_once('header.php');

echo '<link rel="stylesheet" href="css/Novo_CSS/programacao.css">';

$programacao = [
    'dia1' => [
        'label' => 'Dia 17/06',
        'semana' => 'Quarta-feira',
        'atividades' => [
            [
                'periodo' => 'Manhã',
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
            ],
            [
                'periodo' => 'Tarde',
                'horario_inicio' => '14:00',
                'horario_fim' => '14:30',
                'titulo' => 'Apresentação da Liga de Bioinformática',
                'local' => 'Auditório da Pós (CCET)',
                'palestrantes' => [
                    [
                        'nome' => 'LABI',
                        'foto' => 'img/speakers/labi.jpeg'
                    ]
                ]
            ],
            [
                'periodo' => 'Tarde',
                'horario_inicio' => '14:30',
                'horario_fim' => '15:00',
                'titulo' => 'Apresentação da LAJD (Liga de Jogos Digitais)',
                'local' => 'Auditório da Pós (CCET)',
                'palestrantes' => [
                    [
                        'nome' => 'Equipe LAJD',
                        'foto' => 'img/LAJD.jpeg'
                    ]
                ]
            ],
            [
                'periodo' => 'Tarde',
                'horario_inicio' => '15:00',
                'horario_fim' => '16:00',
                'titulo' => 'Apresentação DAComp',
                'local' => 'Auditório da Pós (CCET)',
                'palestrantes' => [
                    [
                        'nome' => 'Equipe DAComp',
                        'foto' => 'img/speakers/dacomp.jpeg'
                    ]
                ]
            ],
            [
                'periodo' => 'Tarde',
                'horario_inicio' => '16:00',
                'horario_fim' => '17:00',
                'titulo' => 'Apresentação da Atlética',
                'local' => 'Auditório da Pós (CCET)',
                'palestrantes' => [
                    [
                        'nome' => 'Equipe da Atlética',
                        'foto' => 'img/speakers/lorde.png'
                    ]
                ]
            ]
        ]
    ],
    'dia2' => [
        'label' => 'Dia 18/06',
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
            ],
            [
                'periodo' => 'Tarde',
                'horario_inicio' => '14:00',
                'horario_fim' => '15:30',
                'titulo' => 'Apresentação NCA e Palestra',
                'local' => 'Auditório da Pós (CCET)',
                'palestrantes' => [
                    [
                        'nome' => 'Prof. Dr. Anselmo Paiva',
                        'foto' => 'img/speakers/nca.jpeg'
                    ]
                ]
            ],
            [
                'periodo' => 'Tarde',
                'horario_inicio' => '15:30',
                'horario_fim' => '17:30',
                'titulo' => 'Mesa Redonda com Egressos',
                'local' => 'Auditório da Pós (CCET)',
                'palestrantes' => [
                    [
                        'nome' => 'Equipe PETComp',
                        'foto' => 'img/speakers/pet.jpg'
                    ]
                ]
            ]
        ]
    ],
    'dia3' => [
        'label' => 'Dia 19/06',
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
            ],
            [
                'periodo' => 'Tarde',
                'horario_inicio' => '14:00',
                'horario_fim' => '15:30',
                'titulo' => 'Apresentação dos Laboratórios (Parte 2)',
                'local' => 'Auditório da Pós (CCET)',
                'palestrantes' => [
                    [
                        'nome' => 'Equipe PETComp',
                        'foto' => 'img/speakers/pet.jpg'
                    ]
                ]
            ],
            [
                'periodo' => 'Tarde',
                'horario_inicio' => '15:30',
                'horario_fim' => '18:00',
                'titulo' => 'Dinâmica PETComp + Premiação',
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

$programacao_esta_vazia = empty($programacao);

$dias = array_keys($programacao);

$dia_ativo = isset($_GET['dia']) && in_array($_GET['dia'], $dias)
    ? $_GET['dia']
    : $dias[0];

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



        </div>

    </div>

    <img src="img/boneca_pet.png" alt="Ilustração da Acalourada" class="hero-boneca">

    <!-- Tabs -->
    <div class="day-tabs" role="tablist" aria-label="Dias do evento">

        <?php foreach ($programacao as $chave => $dia): ?>

            <?php $ativo = ($chave === $dia_ativo); ?>

            <a href="?dia=<?= urlencode($chave) ?>" class="day-tab <?= $ativo ? 'active' : '' ?>" role="tab"
                aria-selected="<?= $ativo ? 'true' : 'false' ?>">

                <span class="dt">
                    <?= htmlspecialchars($dia['label']) ?>
                </span>

                <span class="dw">
                    <?= htmlspecialchars($dia['semana']) ?>
                </span>

            </a>

        <?php endforeach; ?>

    </div>

</section>

<main>
    <?php if ($programacao_esta_vazia): ?>
        <div class="empty-state">
            <div class="empty-icon">
            <svg width="143" height="150" viewBox="0 0 143 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.77808 53.241H116.671V29.9067C116.671 28.7141 116.173 27.6174 115.178 26.6166C114.182 25.6158 113.083 25.118 111.88 25.1232H12.5694C11.3716 25.1232 10.2723 25.621 9.27147 26.6166C8.27069 27.6122 7.77289 28.7115 7.77808 29.9145V53.241ZM12.5694 141.794C8.98628 141.794 5.9969 140.597 3.60125 138.201C1.2056 135.805 0.00518539 132.816 0 129.233V29.9067C0 26.3288 1.20042 23.342 3.60125 20.9464C6.00208 18.5507 8.99146 17.3503 12.5694 17.3451H26.3288V0H34.7058V17.3451H90.3502V0H98.1283V17.3451H111.888C115.466 17.3451 118.455 18.5455 120.856 20.9464C123.257 23.3472 124.454 26.3366 124.449 29.9145V70.7572C123.184 70.2905 121.903 69.9431 120.607 69.7149C119.311 69.4868 117.999 69.2768 116.671 69.0849V61.0268H7.77808V129.233C7.77808 130.425 8.27588 131.522 9.27147 132.523C10.2671 133.524 11.3638 134.022 12.5616 134.016H64.7058C65.1155 135.468 65.6366 136.819 66.2692 138.069C66.9019 139.313 67.563 140.555 68.2526 141.794H12.5694ZM89.829 140.519C83.7933 134.473 80.7754 127.12 80.7754 118.46C80.7754 109.801 83.7933 102.45 89.829 96.4093C95.8648 90.3683 103.215 87.3478 111.88 87.3478C120.55 87.3478 127.903 90.3683 133.939 96.4093C139.98 102.445 143 109.795 143 118.46C143 127.125 139.98 134.478 133.939 140.519C127.898 146.56 120.547 149.578 111.888 149.572C103.228 149.567 95.8752 146.549 89.829 140.519ZM124.768 135.587L129.015 131.341L114.874 117.2V96.0282H108.893V119.72L124.768 135.587Z" fill="#01204C"/>
            </svg>
            </div>
            <h2 class="empty-title">Sem programação</h2>
            <p class="empty-desc">Sem programação no momento</p>
        </div>
    <?php else: ?>
        <div class="content">   

            <?php foreach ($atividades_por_periodo as $periodo => $atividades): ?>
                <div class="schedule-period-group">
                    
                    <div class="period-header">
                        <div class="period-icon">
                            <?php if (in_array(mb_strtolower(trim($periodo), 'UTF-8'), ['manhã', 'manha'])): ?>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12.5" cy="12.5" r="5" stroke="#0071CF" stroke-width="2.07083" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5 2V4M12.5 21V23M4.5 12.5H2M23 12.5H20.5M5.07 5.07L6.48 6.48M18.52 18.52L19.93 19.93M5.07 19.93L6.48 18.52M18.52 6.48L19.93 5.07" stroke="#0071CF" stroke-width="2.07083" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            <?php else: ?>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_86_649)">
                                        <path d="M17.602 18.6379C17.602 17.2649 17.0566 15.9481 16.0857 14.9772C15.1148 14.0063 13.798 13.4608 12.4249 13.4608C11.0519 13.4608 9.7351 14.0063 8.76421 14.9772C7.79332 15.9481 7.24788 17.2649 7.24788 18.6379M12.4249 9.31918V2.07129M8.28329 5.17753L12.4249 9.31918L16.5666 5.17753M4.36943 10.5824L5.83972 12.0527M1.0354 18.6379H3.10623M21.7437 18.6379H23.8145M19.0102 12.0527L20.4805 10.5824M23.8145 22.7796H1.0354" stroke="#0071CF" stroke-width="2.07083" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_86_649">
                                        <rect width="24.8499" height="24.8499" fill="white"/>
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
                                    <article class="schedule-item">
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
                                                    <img src="<?= htmlspecialchars($p['foto']) ?>" alt="<?= htmlspecialchars($p['nome']) ?>" class="speaker-avatar">
                                                    <span class="speaker-name"><?= htmlspecialchars($p['nome']) ?></span>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Coluna da direita: Localização -->
                                <?php if (!empty($item['local'])): ?>
                                    <div class="schedule-location-col">
                                        <svg class="location-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        <span class="location-text"><?= htmlspecialchars($item['local']) ?></span>
                                    </div>
                                <?php endif; ?>
                            </article>
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