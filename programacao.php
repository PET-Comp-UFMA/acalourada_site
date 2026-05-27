<?php
require_once('html_header.php');
require_once('header.php');

echo '<link rel="stylesheet" href="css/Novo_CSS/programacao.css">';

$programacao = [

    'dia1' => [
        'label' => '25/08',
        'semana' => 'Segunda-feira',

        'atividades' => [

            [
                'horario_inicio' => '08:30',
                'horario_fim' => '10:30',
                'titulo' => 'Boas Vindas + Apresentação PETComp',
                'periodo' => 'MANHÃ',
                'palestrantes' => [
                    [
                        'nome' => 'PetComp',
                        'foto' => 'img/speakers/pet.jpg'
                    ]
                ],
                'local' => 'Auditório da Pós (CCET)'
            ],

            [
                'horario_inicio' => '10:30',
                'horario_fim' => '12:00',
                'titulo' => 'Palestra SBC e grupo Dexters',
                'periodo' => 'MANHÃ',
                'palestrantes' => [
                    [
                        'nome' => 'Luis Rivero',
                        'foto' => 'img/speakers/prof.luis.png'
                    ],
                    [
                        'nome' => 'SBC Palestrante',
                        'foto' => 'img/logosbc3.png'
                    ]
                ],
                'local' => 'Auditório da Pós (CCET)'
            ],

            [
                'horario_inicio' => '14:00',
                'horario_fim' => '17:00',
                'titulo' => 'Tour pelos Laboratórios',
                'periodo' => 'TARDE',
                'palestrantes' => [
                    [
                        'nome' => 'Equipe PETComp',
                        'foto' => 'img/speakers/pet.jpg'
                    ]
                ],
                'local' => 'CCET'
            ]

        ]
    ],

    'dia2' => [
        'label' => '26/08',
        'semana' => 'Terça-feira',

        'atividades' => [

            [
                'horario_inicio' => '08:30',
                'horario_fim' => '10:30',
                'titulo' => 'Palestra: Mercado de TI',
                'periodo' => 'MANHÃ',
                'palestrantes' => [
                    [
                        'nome' => 'Glaubos Climaco',
                        'foto' => 'img/speakers/Glaubos-Climaco.webp'
                    ]
                ],
                'local' => 'Auditório da Pós (CCET)'
            ],

            [
                'horario_inicio' => '10:30',
                'horario_fim' => '12:00',
                'titulo' => 'Minicurso de Git e GitHub',
                'periodo' => 'MANHÃ',
                'palestrantes' => [
                    [
                        'nome' => 'Lucas Farias',
                        'foto' => 'img/speakers/Lucas Farias.jpg'
                    ]
                ],
                'local' => 'Laboratório de Informática'
            ],

            [
                'horario_inicio' => '15:00',
                'horario_fim' => '17:00',
                'titulo' => 'Dinâmica entre Cursos',
                'periodo' => 'TARDE',
                'palestrantes' => [
                    [
                        'nome' => 'DAComp',
                        'foto' => 'img/speakers/dacomp.jpeg'
                    ]
                ],
                'local' => 'Quadra do CCET'
            ]

        ]
    ],

    'dia3' => [
        'label' => '27/08',
        'semana' => 'Quarta-feira',

        'atividades' => [

            [
                'horario_inicio' => '09:00',
                'horario_fim' => '12:00',
                'titulo' => 'Mesa Redonda com Veteranos',
                'periodo' => 'MANHÃ',
                'palestrantes' => [
                    [
                        'nome' => 'Luiza',
                        'foto' => 'img/speakers/Luiza.png'
                    ],
                    [
                        'nome' => 'Valter',
                        'foto' => 'img/speakers/Valter.png'
                    ]
                ],
                'local' => 'Auditório da Pós (CCET)'
            ],

            [
                'horario_inicio' => '13:30',
                'horario_fim' => '16:30',
                'titulo' => 'Oficina de Desenvolvimento Web',
                'periodo' => 'TARDE',
                'palestrantes' => [
                    [
                        'nome' => 'Mikael Cauã',
                        'foto' => 'img/speakers/Mikael Caua.jpeg'
                    ]
                ],
                'local' => 'Laboratório 2'
            ],

            [
                'horario_inicio' => '17:00',
                'horario_fim' => '18:00',
                'titulo' => 'Encerramento',
                'periodo' => 'TARDE',
                'palestrantes' => [
                    [
                        'nome' => 'Equipe PETComp',
                        'foto' => 'img/speakers/pet.jpg'
                    ]
                ],
                'local' => 'Auditório da Pós (CCET)'
            ]

        ]
    ]

];

$programacao_esta_vazia = empty($programacao);

/* ─────────────────────────────
   SE NÃO TIVER PROGRAMAÇÃO
   ───────────────────────────── */
if ($programacao_esta_vazia) {

    $programacao = [
        'dia1' => [
            'label' => 'A definir',
            'semana' => 'A definir'
        ],

        'dia2' => [
            'label' => 'A definir',
            'semana' => 'A definir'
        ],

        'dia3' => [
            'label' => 'A definir',
            'semana' => 'A definir'
        ]
    ];
}

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

        <img src="img/boneca_pet.png" alt="Ilustração da Acalourada">

    </div>

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
                <img src="img/calendario_relogio.svg" alt="Sem programação">
            </div>
            <h2 class="empty-title">Sem programação</h2>
            <p class="empty-desc">Sem programação no momento</p>
        </div>
    <?php else: ?>
        <div class="content">   

            <?php foreach ($atividades_por_periodo as $periodo => $atividades): ?>
                <div class="schedule-period-group">
                    <h3 class="schedule-period-title"><?= htmlspecialchars($periodo) ?></h3>
                    
                    <div class="schedule-grid">
                        <?php foreach ($atividades as $item): ?>
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