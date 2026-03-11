<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?> Login <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="login-container">
    <div class="login-card">
        <h2 style="color: #fff; text-shadow: 0 0 10px #6d28d9; margin-bottom: 25px;">BIENVENIDO <span style="color: #6d28d9;">GAMER</span></h2>
        
        <form action="<?= base_url('login-verificar') ?>" method="POST">
            <input type="text" name="usuario" placeholder="Usuario o Email" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit" class="btn-entrar">ENTRAR</button>
        </form>
        
        <p style="margin-top: 20px; font-size: 0.9em;">
            <a href="#" style="color: #888; text-decoration: none;">¿Olvidaste tu contraseña?</a>
        </p>
    </div>
</div>
<?= $this->endSection() ?>