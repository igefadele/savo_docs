<?php use App\Constants\ContactConstants; ?>
<!-- ============================================================
     SAVADUB GLOBAL FOOTER PARTIAL 
     ============================================================ -->
<footer class="savadub-footer">
    <div class="footer-top">
        <div class="container">

            <!-- Brand Column -->
            <div class="col-lg-12 align-items-center">
                <div class="footer-social mt-4">
                    <a href="<?= ContactConstants::$linkedin ?>" class="footer-social__link" aria-label="LinkedIn"
                        target="_blank" rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a>
                    <a href="<?= ContactConstants::$twitter ?>" class="footer-social__link" aria-label="Twitter/X"
                        target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter-x"></i></a>
                    <a href="<?= ContactConstants::$instagram ?>" class="footer-social__link" aria-label="Instagram"
                        target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
                    <a href="<?= ContactConstants::$youtube ?>" class="footer-social__link" aria-label="YouTube"
                        target="_blank" rel="noopener noreferrer"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="footer-copyright">
                        &copy; <span id="footerYear"></span> Savadub Limited. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="footer-legal-link">Privacy Policy</a>
                    <span class="footer-legal-sep">·</span>
                    <a href="#" class="footer-legal-link">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
document.getElementById('footerYear').textContent = new Date().getFullYear();
</script>