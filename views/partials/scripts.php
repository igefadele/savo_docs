<?php
    $basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
    $basePath = ($basePath === '/' || $basePath === '.') ? '' : $basePath;
    $assetBase = $basePath ?: '';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="<?= $assetBase ?>/assets/js/main.js"></script>

<!-- FOR INSTANT PAGE LOAD FEEL LIKE AN SSG APP -->
<script src="https://unpkg.com/swup@4"></script>
<script src="https://unpkg.com/@swup/head-plugin@2"></script>
<script src="https://unpkg.com/@swup/scroll-plugin@3"></script>
<script>
const swupPlugins = [new SwupHeadPlugin()];

if (typeof SwupScrollPlugin !== 'undefined') {
    swupPlugins.push(new SwupScrollPlugin({
        doScrolling: true,
        animateScroll: true,
    }));
}

if (typeof Swup !== 'undefined') {
    const swup = new Swup({
        plugins: swupPlugins,
        // Ensure Swup doesn't interfere with same-page anchors
        ignoreVisit: (url, {
            el
        }) => el?.closest('[data-no-swup]') || url === window.location.href
    });

    // Re-run animations or scripts when Swup swaps pages
    swup.hooks.on('page:view', () => {
        if (typeof AOS !== 'undefined') {
            AOS.init();
        }

        window.scrollTo(0, 0);

        if (typeof window.initPageScripts === 'function') {
            window.initPageScripts();
        }
    });
}

// A global listener script to catch all # clicks.
document.addEventListener('click', (e) => {
    const target = e.target.closest('a');
    if (target && target.getAttribute('href') === '#') {
        e.preventDefault();
    }
});

// Register Service Worker
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('<?= ($assetBase ?: '') . '/sw.js' ?>', {
                scope: '<?= ($assetBase ?: '') . '/' ?>'
            })
            .then(reg => console.log('Savadub Service Worker Registered'))
            .catch(err => console.log('Service Worker Registration Failed', err));
    });

    // Notify user if a new version of the studio site is available
    navigator.serviceWorker.addEventListener('controllerchange', () => {
        console.log("Savadub Site Updated. Refresh to see latest ventures.");
    });
}
</script>