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
                'horario' => '08:00',
                'titulo' => 'Credenciamento',
                'descricao' => 'Entrega de kits e recepção dos calouros.'
            ],

            [
                'horario' => '09:30',
                'titulo' => 'Abertura Oficial',
                'descricao' => 'Boas-vindas da coordenação e apresentação do evento.'
            ],

            [
                'horario' => '14:00',
                'titulo' => 'Tour pelos Laboratórios',
                'descricao' => 'Visita guiada aos laboratórios da universidade.'
            ]

        ]
    ],

    'dia2' => [
        'label' => '26/08',
        'semana' => 'Terça-feira',

        'atividades' => [

            [
                'horario' => '08:30',
                'titulo' => 'Palestra: Mercado de TI',
                'descricao' => 'Conversa sobre oportunidades e tendências na área.'
            ],

            [
                'horario' => '10:30',
                'titulo' => 'Minicurso de Git e GitHub',
                'descricao' => 'Introdução prática ao versionamento de código.'
            ],

            [
                'horario' => '15:00',
                'titulo' => 'Dinâmica entre Cursos',
                'descricao' => 'Atividades em grupo para integração dos alunos.'
            ]

        ]
    ],

    'dia3' => [
        'label' => '27/08',
        'semana' => 'Quarta-feira',

        'atividades' => [

            [
                'horario' => '09:00',
                'titulo' => 'Mesa Redonda com Veteranos',
                'descricao' => 'Dicas acadêmicas e experiências dos alunos.'
            ],

            [
                'horario' => '13:30',
                'titulo' => 'Oficina de Desenvolvimento Web',
                'descricao' => 'Construindo uma página moderna com HTML e CSS.'
            ],

            [
                'horario' => '17:00',
                'titulo' => 'Encerramento',
                'descricao' => 'Sorteios, agradecimentos e foto oficial.'
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

            <div class="schedule-grid">

                <?php foreach ($programacao[$dia_ativo]['atividades'] as $item): ?>

                    <?php
                    $tem_atividades = !empty($item['atividades']);
                    $tem_local = !empty($item['local']);
                    ?>

                    <article class="schedule-item <?= $tem_atividades ? 'has-activities' : '' ?>">

                        <!-- Coluna da esquerda -->
                        <div class="schedule-left">

                            <?php if ($tem_atividades): ?>

                                <?php foreach ($item['atividades'] as $alt): ?>
                                    <div class="alt-line">
                                        <span class="time"><?= $alt['horario'] ?></span>
                                        <span class="title"><?= $alt['titulo'] ?></span>
                                    </div>
                                <?php endforeach; ?>

                            <?php else: ?>

                                <div class="single-line">
                                    <span class="time"><?= $item['horario'] ?></span>
                                    <span class="title"><?= $item['titulo'] ?></span>
                                </div>

                            <?php endif; ?>

                        </div>

                        <!-- Coluna da direita -->
                        <?php if ($tem_local): ?>
                            <div class="schedule-right">
                                <div class="location-tag">
                                    <?= $item['local'] ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>
    <?php endif; ?>
</main>

<?php
require_once('footer.php');
require_once('html_footer.php');
?>