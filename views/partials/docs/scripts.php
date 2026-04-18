<?php savv_scripts(); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="<?= ROOT_PATH ?>/assets/js/main.js"></script>

<script>
// Sidebar toggle for mobile
const toggle = document.getElementById('sidebarToggle');
const sidebar = document.getElementById('sidebar');
toggle?.addEventListener('click', () => sidebar.classList.toggle('open'));
document.addEventListener('click', (e) => {
    if (!sidebar.contains(e.target) && !toggle.contains(e.target)) sidebar.classList.remove('open');
});

// Active nav highlight on scroll
const sections = document.querySelectorAll('[id]');
const navItems = document.querySelectorAll('.nav-item[href^="#"], .nav-sub[href^="#"]');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            navItems.forEach(a => a.classList.remove('active'));
            const active = document.querySelector(
                `.nav-item[href="#${entry.target.id}"], .nav-sub[href="#${entry.target.id}"]`);
            active?.classList.add('active');
        }
    });
}, {
    rootMargin: '-30% 0px -60% 0px'
});
sections.forEach(s => observer.observe(s));

// Copy code blocks
document.querySelectorAll('.code-block').forEach(block => {
    const header = block.querySelector('.code-block-header');
    const btn = document.createElement('button');
    btn.className = 'copy-btn';
    btn.innerHTML = '⎘ copy';
    btn.addEventListener('click', () => {
        const code = block.querySelector('pre')?.innerText || '';
        navigator.clipboard?.writeText(code);
        btn.innerHTML = '✓ copied';
        setTimeout(() => btn.innerHTML = '⎘ copy', 1500);
    });
    header?.appendChild(btn);
});
</script>

<?php if (isset($extraJS)) echo $extraJS; ?>