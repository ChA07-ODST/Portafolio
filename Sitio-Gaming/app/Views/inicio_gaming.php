
<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
    Inicio - Dashboard Gaming
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div style="background: rgba(255,0,0,0.1); color: #ff4444; padding: 15px; text-align: center;">
    <?php if (isset($mensaje_db)): ?>
        <p><strong>Estado:</strong> <?= $mensaje_db ?></p>
    <?php endif; ?>

    <?php if (isset($error_db)): ?>
        <p><strong>Detalle del Error:</strong> <?= $error_db ?></p>
    <?php else: ?>
        <p style="color: #00ff00;">¡No hay errores detectados en el controlador!</p>
    <?php endif; ?>
</div>

    <section class="hero">
        <h1>BIENVENIDO A TU SITIO DE VIDEOJUEGOS FAVORITO</h1>
        <p>Tu centro de mando multiplataforma para Gears, trofeos de PlayStation y logros de Steam.</p>
        
        <a href="<?= base_url('login') ?>" class="btn-action">
            INICIAR A EXPLORAR
        </a>
    </section>

    </section> <div class="separator"></div> 

    <section id="nosotros" class="section-content">
    <div class="mission-header">
        <h2>Nuestra Misión</h2>
        <p>En <strong>CrownGaming</strong>, centralizamos tus estadísticas de tus plataformas favoritas en un solo lugar.</p>
    </div>

    <div class="platforms-grid">
        
        <div class="platform-card xbox">
            <div class="card-icon">
                <i class="fab fa-xbox"></i> </div>
            <div class="card-content">
                <h3>Xbox</h3>
                <p>Sincroniza tus logros de Gears y más.</p>
            </div>
        </div>

        <div class="platform-card playstation">
            <div class="card-icon">
                <i class="fab fa-playstation"></i> </div>
            <div class="card-content">
                <h3>PlayStation</h3>
                <p>Tus platinos en una sola vitrina.</p>
            </div>
        </div>

        <div class="platform-card steam">
            <div class="card-icon">
                <i class="fab fa-steam"></i> </div>
            <div class="card-content">
                <h3>Steam</h3>
                <p>Presume tu librería y progresos de PC.</p>
            </div>
        </div>

    </div>
    </section>
    

    </section> <div class="separator"></div>

    <section id="que-es" class="section-content alternate-bg">
        <div class="info-container">
            <div class="info-image">
                <div class="glow-circle"></div>
                <img src="<?= base_url('img/dashboard-preview.png')//Aca ponderemos una imagen cuando se nos ocurra ?>" alt="Preview" class="floating">
            </div>
            <div class="info-text">
                <h2>¿Cómo <span>Funciona</span>?</h2>
                <ul>
                    <li><i class="fas fa-link"></i> <strong>Conecta:</strong> Busca tus juegos de Xbox, PSN o Steam en segundos.</li>
                    <li><i class="fas fa-sync"></i> <strong>Sincroniza:</strong> Obtenemos tus logros y trofeos en tiempo real.</li>
                    <li><i class="fas fa-chart-line"></i> <strong>Compite:</strong> Sube en el ranking global de la comunidad.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="comunidad" class="section-content">
        <div class="mission-header">
            <h2>Comunidad <span>Crown</span></h2>
            <p>Únete a miles de jugadores que ya están compartiendo sus logros y compitiendo por la cima del ranking.</p>
        </div>

        <div class="community-grid">
            <div class="community-card">
                <div class="user-info">
                    <img src="Avatar.png" alt="Avatar" class="avatar"> 
                    <div>
                        <h4>Sekibread</h4>
                        <small>Hace 5 minutos</small>
                    </div>
                </div>
                <p class="activity-text">¡Ha desbloqueado el logro <strong>"Héroe de Sera"</strong> en Gears of War</p>
                <div class="badge xbox"><i class="fab fa-xbox"></i> +50G</div>
            </div>

            <div class="community-card top-player">
                <div class="crown-icon"><i class="fas fa-crown"></i></div>
                <h4>Top Global</h4>
                <p>El jugador con más platinos esta mes es <strong>ProGamer_99</strong>.</p>
                <div class="badge playstation"><i class="fab fa-playstation"></i> 12 Platinos</div>
            </div>

            <div class="community-card join-us">
                <h4>¿Quieres aparecer aquí?</h4>
                <p>Crea tu cuenta y empieza a subir en el ranking hoy mismo.</p>
                <a href="<?= base_url('login') ?>" class="btn-login">Unirme ahora</a>
            </div>
        </div>
    </section>


<?= $this->endSection() ?>


