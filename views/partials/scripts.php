<?php savv_scripts(); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="<?= ROOT_PATH ?>/assets/js/main.js"></script>

<script>
document.getElementById('yr').textContent = new Date().getFullYear();
// Copy install command
document.querySelector('.hero-install').addEventListener('click', function() {
    navigator.clipboard?.writeText('composer require savadub/savv');
    const icon = this.querySelector('.copy-icon');
    icon.textContent = '✓';
    setTimeout(() => icon.textContent = '⎘', 1500);
});
</script>

<?php if (isset($extraJS)) echo $extraJS; ?>