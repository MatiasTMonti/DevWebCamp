<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="descripcion__texto">Recupera tu Acceso a DevWebCamp</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <form method="POST" class="formulario" action="/olvide">
        <div class="formulario__campo">
            <label class="formulario__label" for="email">Email</label>
            <input type="email" class="formulario__input" placeholder="Tu Email" id="email" name="email">
        </div>

        <input type="submit" class="formulario__submit" value="Enviar Instrucciones">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tiene cuenta? Inicia Sesion</a>
        <a href="/registro" class="acciones__enlace">¿Aun no tiene cuenta? Obten Una</a>
    </div>
</main>