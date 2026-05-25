<?php
require_once('html_header.php');
require_once('header.php');
?>

<link rel="stylesheet" href="css/Novo_CSS/programacao.css">

<?php
// ============================================================
// CONFIGURAÇÃO — edite aqui para controlar o estado da página
// ============================================================
 
// Deixe o array vazio para mostrar "Em breve"
// Preencha para mostrar a programação completa
$programacao = [];
 
// Lógica de controle — não precisa alterar
$tem_programacao = !empty($programacao);
$dias            = array_keys($programacao);
$dia_ativo       = isset($_GET['dia']) && in_array($_GET['dia'], $dias)
                    ? $_GET['dia']
                    : ($dias[0] ?? null);
?>


<!-- ── HERO ── -->
<section class="hero">
    <div class="hero-inner">
        <div>
            <p class="hero-eyebrow">Programação</p>
            <h1 class="hero-title">
                Explore nossa<br>
                programação para <span>2026.2</span>
            </h1>
            <p class="hero-desc">
                Confira os horários, atividades e palestras que fazem parte
                da Acalourada 2026.2 — uma experiência única.
            </p>
        </div>
        <img src="img/Novos_Templates/Ilustracao_Principal_Acalourada.png" alt="Ilustração da Acalourada">
    </div>
</section>
 

<!--==========================
            Programação Geral
        ============================-->
<main>
 
<?php if (!$tem_programacao): ?>
 
    <!-- ══════════════════════════════════
         ESTADO: SEM PROGRAMAÇÃO (Em breve)
         ══════════════════════════════════ -->
    <div class="empty-state">
        <div class="empty-icon">
            <img src="img/calendario_relogio.svg" alt="Ilustração de calendário e relógio">
        </div>
        <h2 class="empty-title">Em breve!</h2>
        <p class="empty-desc">
            Estamos preparando uma experiência incrível para você.<br>
            A programação de 2026.2 estará disponível em breve.
        </p>
    </div>
 
<?php else: ?>
 
    <!-- ══════════════════════════════════════
         ESTADO: COM PROGRAMAÇÃO (Timeline)
         ══════════════════════════════════════ -->
 
    <!-- Tabs de dias -->
    <div class="day-tabs" role="tablist" aria-label="Dias do evento">
        <?php foreach ($programacao as $chave => $dia): ?>
            <?php $ativo = ($chave === $dia_ativo); ?>
            <a href="?dia=<?= urlencode($chave) ?>"
               class="day-tab <?= $ativo ? 'active' : '' ?>"
               role="tab"
               aria-selected="<?= $ativo ? 'true' : 'false' ?>">
                <span class="dt"><?= htmlspecialchars($dia['label']) ?></span>
                <span class="dw"><?= htmlspecialchars($dia['semana']) ?></span>
            </a>
        <?php endforeach; ?>
    </div>
 
    <!-- Conteúdo do dia ativo -->
    <?php $dia_dados = $programacao[$dia_ativo]; ?>
    <div class="schedule-card" role="tabpanel">
 
        <!-- Manhã -->
        <?php if (!empty($dia_dados['manha'])): ?>
        <div class="period-block">
            <p class="period-label">
                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="5"/><line x1="12" y1="2" x2="12" y2="4"/><line x1="12" y1="20" x2="12" y2="22"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="2" y1="12" x2="4" y2="12"/><line x1="20" y1="12" x2="22" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                Manhã
            </p>
            <div class="timeline">
                <?php foreach ($dia_dados['manha'] as $item): ?>
                <div class="tl-item">
                    <div class="tl-dot"></div>
                    <div class="tl-body">
                        <div>
                            <p class="tl-time"><?= htmlspecialchars($item['horario']) ?></p>
                            <p class="tl-title"><?= htmlspecialchars($item['titulo']) ?></p>
                            <p class="tl-org"><?= htmlspecialchars($item['org']) ?></p>
                        </div>
                        <p class="tl-local">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?= htmlspecialchars($item['local']) ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
 
        <!-- Tarde -->
        <?php if (!empty($dia_dados['tarde'])): ?>
        <div class="period-block">
            <p class="period-label">
                <svg viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1 1 11.21 3a7 7 0 0 0 9.79 9.79z"/></svg>
                Tarde
            </p>
            <div class="timeline">
                <?php foreach ($dia_dados['tarde'] as $item): ?>
                <div class="tl-item">
                    <div class="tl-dot"></div>
                    <div class="tl-body">
                        <div>
                            <p class="tl-time"><?= htmlspecialchars($item['horario']) ?></p>
                            <p class="tl-title"><?= htmlspecialchars($item['titulo']) ?></p>
                            <p class="tl-org"><?= htmlspecialchars($item['org']) ?></p>
                        </div>
                        <p class="tl-local">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?= htmlspecialchars($item['local']) ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
 
    </div><!-- /.schedule-card -->
 
<?php endif; ?>
 
</main>




<?php
require_once('footer.php');
require_once('html_footer.php');
?>