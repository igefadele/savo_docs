<?php
    use App\Constants\ContactConstants;
    $pageTitle = "You're Offline — Savadub Limited";
    $pageDescription = "It looks like you've lost your connection.";
    ob_start(); 
?>

<div class="container text-center py-section">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <i class="bi bi-wifi-off text-accent-red" style="font-size: 4rem;"></i>
            <h1 class="mt-4">You're Offline</h1>
            <p class="body-text">We can't reach the server right now. Don't worry, you can still contact us directly:
            </p>

            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="<?= ContactConstants::$emailLink ?>" class="btn btn-outline-dark">
                    <i class="bi bi-envelope-fill"></i> Email Us
                </a>
                <a href="<?= ContactConstants::$phoneLink ?>" class="btn btn-savadub-primary me-2">
                    <i class="bi bi-telephone"></i> Call Us
                </a>
                <a href="<?= ContactConstants::$whatsappLink ?>" class="btn btn-outline-dark">
                    <i class="bi bi-whatsapp"></i> WhatsApp
                </a>
            </div>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="<?= ContactConstants::$linkedin ?>" class="footer-social__link" aria-label="LinkedIn"
                    target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="<?= ContactConstants::$twitter ?>" class="footer-social__link" aria-label="Twitter/X"
                    target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-twitter-x"></i>
                </a>
                <a href="<?= ContactConstants::$instagram ?>" class="footer-social__link" aria-label="Instagram"
                    target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="<?= ContactConstants::$youtube ?>" class="footer-social__link" aria-label="YouTube"
                    target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-youtube"></i>
                </a>
            </div>

            <p class="mt-5 small text-muted">Once you're back online, just refresh the page to continue exploring
                Savadub.</p>
        </div>
    </div>
</div>

<?php 
    $content = ob_get_clean(); 
    include __DIR__ . '/layouts/index.php'; 
?>