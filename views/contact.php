<?php
    // @intelephense-ignore-line
    use App\Constants\ContactConstants;
    $pageTitle = "Contact — Savadub Limited";
    $pageDescription = "Start a conversation with Savadub Limited. Whether you need engineering services, venture partnerships, or talent mobility, we are ready to build.";
    $extraCSS = '<link rel="stylesheet" href="/assets/css/contact.css">';

    // Start capturing the HTML content
    ob_start(); 
?>

<div>
    <!-- Hero -->
    <section class="page-hero py-section">
        <div class="hero-bg-grid"></div>
        <div class="container position-relative z-2">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6" data-aos="fade-up">
                    <span class="section-eyebrow">Let's Talk</span>
                    <h1 class="section-title mt-3">Start a <span class="text-accent-red">Conversation</span></h1>
                    <p class="section-subtitle mt-3 mx-auto">Whether you want to build, collaborate, hire talent, or
                        explore a partnership — we want to hear from you.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Main -->
    <section class="py-section bg-deep" id="hire">
        <div class="container">
            <div class="row g-5 align-items-start">

                <!-- Left: Info -->
                <div class="col-lg-5" data-aos="fade-right">
                    <h2 class="section-title">Get In <span class="text-accent-blue">Touch</span></h2>
                    <p class="body-text mt-3">We work with clients across the globe. Reach out and tell us what you
                        need — we respond within 24 hours.</p>

                    <div class="contact-details mt-4">
                        <div class="contact-detail-item">
                            <div class="contact-detail-item__icon"><i class="bi bi-envelope-fill"></i></div>
                            <div>
                                <span class="contact-detail-item__label">Email Us</span>
                                <a href="<?= ContactConstants::$emailLink ?>"
                                    class="contact-detail-item__value"><?= ContactConstants::$email ?></a>
                            </div>
                        </div>
                        <div class="contact-detail-item">
                            <div class="contact-detail-item__icon"><i class="bi bi-whatsapp"></i></div>
                            <div>
                                <span class="contact-detail-item__label">WhatsApp</span>
                                <a href="<?= ContactConstants::$whatsappLink ?>"
                                    class="contact-detail-item__value"><?= ContactConstants::$whatsapp ?></a>
                            </div>
                        </div>
                        <div class="contact-detail-item">
                            <div class="contact-detail-item__icon"><i class="bi bi-telephone-fill"></i></div>
                            <div>
                                <span class="contact-detail-item__label">Call Us</span>
                                <a href="<?= ContactConstants::$phoneLink ?>"
                                    class="contact-detail-item__value"><?= ContactConstants::$phone ?></a>
                            </div>
                        </div>
                        <div class="contact-detail-item">
                            <div class="contact-detail-item__icon"><i class="bi bi-geo-alt-fill"></i></div>
                            <div>
                                <span class="contact-detail-item__label">Headquarters</span>
                                <span class="contact-detail-item__value"><?= ContactConstants::$address ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Enquiry Types -->
                    <div class="enquiry-types mt-5">
                        <h5 class="enquiry-types__title">What are you reaching out about?</h5>
                        <div class="enquiry-types__grid">
                            <div class="enquiry-type" id="enqTypeEngineering">
                                <i class="bi bi-code-slash text-accent-blue"></i>
                                <span>Engineering / Labs</span>
                            </div>
                            <div class="enquiry-type" id="enqTypePartnerships">
                                <i class="bi bi-rocket-takeoff-fill text-accent-red"></i>
                                <span>Ventures / Partnerships</span>
                            </div>
                            <div class="enquiry-type" id="enqTypeMobility">
                                <i class="bi bi-globe2 text-accent-blue"></i>
                                <span>Talent Mobility</span>
                            </div>
                            <div class="enquiry-type" id="enqTypeGeneral">
                                <i class="bi bi-chat-dots-fill text-accent-red"></i>
                                <span>General Enquiry</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="contact-form-card">
                        <div id="formAlert" class="alert d-none mb-4" role="alert"></div>
                        <h4 class="contact-form-card__title">Send Us a Message</h4>

                        <div class="contact-form" id="contactForm">
                            <!-- Enquiry Type -->
                            <div class="mb-4">
                                <label class="form-label savadub-label">Enquiry Type</label>
                                <div class="form-type-select">
                                    <button type="button" class="form-type-btn active" data-type="labs">Engineering
                                        / Labs</button>
                                    <button type="button" class="form-type-btn" data-type="ventures">Ventures</button>
                                    <button type="button" class="form-type-btn" data-type="mobility">Mobility</button>
                                    <button type="button" class="form-type-btn" data-type="general">General</button>
                                </div>
                            </div>

                            <div class="row g-3">
                                <!-- START: Honeypot to catch bots -->
                                <div class="savadub-hp" style="display:none !important;" aria-hidden="true">
                                    <label>Leave this field empty</label>
                                    <input type="text" name="honeypot" tabindex="-1" autocomplete="off">
                                </div>
                                <!-- END: Honeypot to catch bots -->

                                <div class="col-md-6">
                                    <label class="form-label savadub-label">Full Name *</label>
                                    <input type="text" name="name" class="form-control savadub-input"
                                        placeholder="John Doe" required>
                                    <div class="invalid-feedback d-block mt-1" id="error-name"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label savadub-label">Email Address *</label>
                                    <input type="email" name="email" class="form-control savadub-input"
                                        placeholder="john@company.com" required>
                                    <div class="invalid-feedback d-block mt-1" id="error-email"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label savadub-label">Company / Organisation</label>
                                    <input type="text" name="company" class="form-control savadub-input"
                                        placeholder="Acme Corp">
                                    <div class="invalid-feedback d-block mt-1" id="error-company"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label savadub-label">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control savadub-input"
                                        placeholder="+1 555 000 0000">
                                    <div class="invalid-feedback d-block mt-1" id="error-phone"></div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label savadub-label">Subject *</label>
                                    <input type="text" name="subject" class="form-control savadub-input"
                                        placeholder="How can we help?" required>
                                    <div class="invalid-feedback d-block mt-1" id="error-subject"></div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label savadub-label">Message *</label>
                                    <textarea name="message" class="form-control savadub-input savadub-textarea"
                                        rows="5" placeholder="Tell us about your project, requirements, or goals..."
                                        required></textarea>
                                    <div class="invalid-feedback d-block mt-1" id="error-message"></div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label savadub-label">Budget Range</label>
                                    <select name="budget" class="form-select savadub-input">
                                        <option value="">Select a range (optional)</option>
                                        <option>Under $5,000</option>
                                        <option>$5,000 – $15,000</option>
                                        <option>$15,000 – $50,000</option>
                                        <option>$50,000 – $100,000</option>
                                        <option>$100,000+</option>
                                        <option>Let's Discuss</option>
                                    </select>
                                    <div class="invalid-feedback d-block mt-1" id="error-type"></div>
                                </div>
                                <div class="col-12 mt-2">
                                    <button type="button" class="btn btn-savadub-primary w-100 btn-contact-submit"
                                        onclick="handleContactSubmit(this)">
                                        Send Message <i class="bi bi-send-fill ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>


<script>
// Type selector
document.querySelectorAll('.form-type-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.form-type-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
    });
});

// URL param pre-select
const params = new URLSearchParams(window.location.search);
const type = params.get('type');
if (type) {
    const btn = document.querySelector(`.form-type-btn[data-type="${type}"]`);
    if (btn) {
        document.querySelectorAll('.form-type-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
    }
}

/* async function handleContactSubmit(btn) {
    const formContainer = document.getElementById('contactForm');
    const inputs = formContainer.querySelectorAll('input, textarea, select');

    // Basic Validation
    let isValid = true;
    inputs.forEach(input => {
        if (input.hasAttribute('required') && !input.value) isValid = false;
    });

    if (!isValid) {
        alert("Please fill in all required fields.");
        return;
    }

    // UI Feedback
    const originalContent = btn.innerHTML;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
    btn.disabled = true;

    // Build FormData
    const formData = new FormData();
    inputs.forEach(input => {
        formData.append(input.name, input.value);
    });

    // Add the active type
    const activeType = document.querySelector('.form-type-btn.active').getAttribute('data-type');
    formData.append('type', activeType);

    // If the honeypot field has ANY value, it's a bot. 
    // We silently exit without sending the request.
    if (formData.get('honeypot')) {
        console.log("Bot detected.");
        return;
    }

    try {
        const response = await fetch('/api/contact-submit', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();

        if (result.status === 'success') {
            btn.innerHTML = '<i class="bi bi-check-circle-fill me-2"></i>Message Sent!';
            btn.style.background = '#1a6b3c';
            // Optional: reset form after success
        } else {
            throw new Error(result.message);
        }
    } catch (error) {
        btn.innerHTML = 'Error! Try Again';
        btn.style.background = '#dc3545';
        btn.disabled = false;
        setTimeout(() => {
            btn.innerHTML = originalContent;
            btn.style.background = '';
        }, 3000);
    }
} */


async function handleContactSubmit(btn) {
    const formContainer = document.getElementById('contactForm');
    const alertBox = document.getElementById('formAlert');
    const inputs = formContainer.querySelectorAll('input, textarea, select');
    const formElement = btn.closest('form');
    const endpoint = 'api/contact-submit';

    // Basic Validation
    let isValid = true;
    inputs.forEach(input => {
        if (input.hasAttribute('required') && !input.value) isValid = false;
    });

    if (!isValid) {
        alert("Please fill in all required fields.");
        return;
    }

    // Reset UI
    alertBox.className = 'alert d-none';
    document.querySelectorAll('.invalid-feedback').forEach(el => el.innerHTML = '');
    document.querySelectorAll('.savadub-input').forEach(el => el.classList.remove('is-invalid'));

    // Loading State
    const originalContent = btn.innerHTML;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
    btn.disabled = true;

    const formData = new FormData();
    inputs.forEach(input => formData.append(input.name, input.value));
    formData.append('type', document.querySelector('.form-type-btn.active').getAttribute('data-type'));

    // If the honeypot field has ANY value, it's a bot. 
    // We silently exit without sending the request.
    if (formData.get('honeypot')) {
        console.log("Bot detected.");
        btn.innerHTML = originalContent;
        btn.disabled = false;
        return;
    }

    // General response variable
    let response = null;

    try {
        response = await fetch(endpoint, {
            method: 'POST',
            body: formData
        });
        const contentType = response.headers.get('content-type') || '';
        const responseText = await response.text();
        const result = contentType.includes('application/json') ?
            JSON.parse(responseText) :
            null;

        if (!result) {
            throw new Error(`Unexpected response from server (${response.status}).`);
        }

        if (response.status === 422) {
            // Handle Per-Field Validation Errors
            Object.keys(result.errors).forEach(field => {
                const errorSlot = document.getElementById(`error-${field}`);
                const inputEl = formContainer.querySelector(`[name="${field}"]`);
                if (errorSlot) errorSlot.innerHTML = result.errors[field];
                if (inputEl) inputEl.classList.add('is-invalid');
            });
            throw new Error("Validation failed. Please check the fields.");
        }

        if (!response.ok || result.status === 'error') {
            throw new Error(result.message || `Request failed with status ${response.status}.`);
        }

        if (result.status === 'success') {
            // Handle Success Feedback
            alertBox.innerHTML = '<strong>Success!</strong> Your message has been sent to the Savadub team.';
            alertBox.className = 'alert alert-success d-block';
            btn.innerHTML = '<i class="bi bi-check-circle-fill me-2"></i>Sent';
            btn.style.background = '#1a6b3c';
            if (formElement) {
                formElement.reset();
            } else {
                inputs.forEach(input => {
                    if (input.type !== 'button') {
                        input.value = '';
                    }
                });
            }
        }

    } catch (error) {
        // Handle General Error Feedback
        if (!response || response.status !== 422) {
            alertBox.innerHTML = error.message || 'Something went wrong. Please try again.';
            alertBox.className = 'alert alert-danger d-block';
        }
        btn.innerHTML = 'Try Again';
        btn.disabled = false;

        console.error("Parsing Error:", error);
    }
}
</script>

<?php 
    // Save the captured HTML into a variable
    $content = ob_get_clean(); 

    // Load the layout and inject the variable
    include __DIR__ . '/layouts/index.php'; 
?>