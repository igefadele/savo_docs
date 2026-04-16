<?php
    $pageTitle = "Docs — Savo Framework";
    $pageDescription = "Savo is a lightweight PHP framework for modern brand and marketing websites. Explore its routing model, helpers, structure, and setup in one fast, hostable docs page.";
    $extraCSS = '<link rel="stylesheet" href="/assets/css/docs.css">';

    ob_start();
?>

<div class="docs-page">
    <section class="docs-hero">
        <div class="container position-relative z-2">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <span class="docs-kicker">Lightweight PHP Framework</span>
                    <h1 class="docs-title">Build fast websites with <em>plain PHP</em> and framework comfort.</h1>
                    <p class="docs-lead">
                        Savo is designed for brand websites, marketing sites, studio platforms, and other public-facing products
                        that want modern capabilities without a heavy framework stack. It keeps the code readable, the structure
                        familiar, and the logic easy to follow.
                    </p>
                    <div class="docs-cta-group">
                        <a href="#quick-start" class="btn-docs-primary">Start Building <i class="bi bi-arrow-down-right"></i></a>
                        <a href="/contact" class="btn-docs-secondary">Talk to Savadub</a>
                    </div>
                    <div class="docs-inline-list">
                        <span>File-based pages</span>
                        <span>Custom routes</span>
                        <span>Request/Response helpers</span>
                        <span>PWA-ready starter</span>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="docs-hero-card" data-aos="fade-left">
                        <span class="docs-stack-label">Core ideas</span>
                        <h2 class="section-title mt-2">Small surface area. Real website power.</h2>
                        <ul class="docs-feature-list">
                            <li><i class="bi bi-check2-circle"></i> Familiar helper syntax inspired by modern PHP frameworks</li>
                            <li><i class="bi bi-check2-circle"></i> Direct PHP views instead of template lock-in</li>
                            <li><i class="bi bi-check2-circle"></i> JSON APIs, redirects, validation, logging, and mail handling</li>
                            <li><i class="bi bi-check2-circle"></i> Swup-powered page transitions for instant-feel navigation</li>
                        </ul>
                        <div class="docs-code-window">
                            <div class="docs-window-bar"><span></span><span></span><span></span></div>
                            <pre><code>router()->get('/', function () {
    require ROOT_PATH . '/views/index.php';
});

router()->group(['prefix' => 'api'], function ($router) {
    $router->post('contact-submit', [
        ContactController::class,
        'submit'
    ])->name('submit.contact');
});</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="docs-section">
        <div class="container">
            <span class="docs-mini-kicker">Why Savo</span>
            <h2 class="docs-section-title">Made for public websites that should stay simple.</h2>
            <p class="docs-section-copy mt-3">
                Savo is a good fit when you want modern website behavior without carrying the weight of a large framework.
                It favors readable code, minimal abstraction, and a workflow where most pages are just PHP files inside
                <code>views/</code>.
            </p>

            <div class="docs-grid docs-grid--three mt-4">
                <article class="docs-card" data-aos="fade-up">
                    <span class="docs-card__eyebrow">01</span>
                    <h3>Fast by default</h3>
                    <p>Use lightweight PHP, straightforward rendering, and progressive frontend enhancements for sites that feel quick without a giant application layer.</p>
                </article>
                <article class="docs-card" data-aos="fade-up" data-aos-delay="120">
                    <span class="docs-card__eyebrow">02</span>
                    <h3>Easy to grasp</h3>
                    <p>The framework wraps plain PHP into a familiar shape, so developers coming from Laravel-like ecosystems and first-time framework users can both settle in quickly.</p>
                </article>
                <article class="docs-card" data-aos="fade-up" data-aos-delay="240">
                    <span class="docs-card__eyebrow">03</span>
                    <h3>Focused scope</h3>
                    <p>Savo is tuned for brand sites, marketing sites, studio websites, and similar products where clean delivery matters more than deep enterprise abstraction.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="docs-section bg-deep">
        <div class="container">
            <span class="docs-mini-kicker">Structure</span>
            <h2 class="docs-section-title">A folder layout that stays readable.</h2>
            <p class="docs-section-copy mt-3">
                Savo separates framework code, app code, views, routes, configs, and public files clearly so projects stay maintainable even when they grow.
            </p>

            <div class="docs-structure-grid">
                <article class="docs-structure-card">
                    <span class="docs-structure-card__path">app/</span>
                    <h3>Your application code</h3>
                    <p>Put controllers, constants, middleware, and project-specific classes here. This is where the userland code belongs.</p>
                </article>
                <article class="docs-structure-card">
                    <span class="docs-structure-card__path">configs/</span>
                    <h3>Plain PHP config arrays</h3>
                    <p>Every file returns an array and is accessed with helpers like <code>config('mail.smtp.host')</code>.</p>
                </article>
                <article class="docs-structure-card">
                    <span class="docs-structure-card__path">savo/</span>
                    <h3>The framework core</h3>
                    <p>Contains the base utilities and helpers. It is intended to remain mostly untouched unless you are extending the framework deliberately.</p>
                </article>
                <article class="docs-structure-card">
                    <span class="docs-structure-card__path">views/</span>
                    <h3>Pages, layouts, and partials</h3>
                    <p>Most web pages are simply PHP files in this folder, which makes Savo’s file-based routing especially convenient.</p>
                </article>
                <article class="docs-structure-card">
                    <span class="docs-structure-card__path">routes/</span>
                    <h3>Explicit route definitions</h3>
                    <p>Use <code>routes/web.php</code> and <code>routes/api.php</code> for controllers, JSON endpoints, middleware flows, and custom behavior.</p>
                </article>
                <article class="docs-structure-card">
                    <span class="docs-structure-card__path">public/</span>
                    <h3>Your document root</h3>
                    <p>This is the only folder that should be exposed publicly. It contains the front controller, assets, service worker, and manifest.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="docs-section" id="quick-start">
        <div class="container">
            <span class="docs-mini-kicker">Quick Start</span>
            <h2 class="docs-section-title">From install to first page in a few moves.</h2>
            <div class="docs-steps-grid">
                <article class="docs-step-card">
                    <span class="docs-step-card__num">Step 01</span>
                    <p>Install dependencies with Composer and refresh autoloading so the framework helpers and your classes are available.</p>
                </article>
                <article class="docs-step-card">
                    <span class="docs-step-card__num">Step 02</span>
                    <p>Create your <code>.env</code> values for mail and any other project-specific configuration you expose through <code>configs/</code>.</p>
                </article>
                <article class="docs-step-card">
                    <span class="docs-step-card__num">Step 03</span>
                    <p>Point your server document root to <code>public/</code> so only public assets and the entry file are web-accessible.</p>
                </article>
                <article class="docs-step-card">
                    <span class="docs-step-card__num">Step 04</span>
                    <p>Create page files under <code>views/</code> or add custom endpoints in <code>routes/web.php</code> and <code>routes/api.php</code>.</p>
                </article>
            </div>

            <div class="docs-code-block mt-4">
                <pre><code>composer install
composer dump-autoload

# Point your server to:
public/

# Create a page:
views/about.php

# Visit:
/about</code></pre>
            </div>
        </div>
    </section>

    <section class="docs-section bg-deep">
        <div class="container">
            <span class="docs-mini-kicker">Routing</span>
            <h2 class="docs-section-title">File-based when you want it. Explicit when you need it.</h2>
            <p class="docs-section-copy mt-3">
                Savo treats page views as a first-class convenience. If a file exists in <code>views/</code>, you can serve it directly by slug. For forms, APIs, middleware, and custom handlers, define routes normally.
            </p>
            <div class="docs-grid docs-grid--two mt-4">
                <div class="docs-code-block">
                    <pre><code>// File-based page routing
router()->get('{slug}', function ($slug) {
    $viewPath = ROOT_PATH . '/views/' . $slug . '.php';

    if (file_exists($viewPath)) {
        require $viewPath;
        return true;
    }

    return false;
});</code></pre>
                </div>
                <div class="docs-code-block">
                    <pre><code>// Explicit API route
router()->group(['prefix' => 'api', 'name' => 'api.'], function ($router) {
    $router->post('contact-submit', [ContactController::class, 'submit'])
        ->name('submit.contact');
});

$url = route('api.submit.contact');</code></pre>
                </div>
            </div>
        </div>
    </section>

    <section class="docs-section">
        <div class="container">
            <span class="docs-mini-kicker">Helpers</span>
            <h2 class="docs-section-title">Small helpers, practical workflow.</h2>
            <p class="docs-section-copy mt-3">
                The helper layer keeps common tasks concise while still mapping directly to plain PHP classes. There is no magic you need to fight through.
            </p>

            <div class="docs-helper-grid">
                <article class="docs-helper-card">
                    <span class="docs-helper-card__name">request()</span>
                    <h3>Read input fast</h3>
                    <p>Get the current request object or access values with helpers like <code>request('email')</code>, <code>request()->only(...)</code>, and <code>request()->method()</code>.</p>
                </article>
                <article class="docs-helper-card">
                    <span class="docs-helper-card__name">response()</span>
                    <h3>Return HTML, JSON, or redirects</h3>
                    <p>Create responses fluently with <code>json()</code>, <code>redirect()</code>, <code>header()</code>, and <code>view()</code>.</p>
                </article>
                <article class="docs-helper-card">
                    <span class="docs-helper-card__name">config()</span>
                    <h3>Read config by dot notation</h3>
                    <p>Keep project settings inside <code>configs/*.php</code> and access nested values with a direct, readable API.</p>
                </article>
                <article class="docs-helper-card">
                    <span class="docs-helper-card__name">validate()</span>
                    <h3>Lightweight validation</h3>
                    <p>Run rule-based validation using familiar syntax such as <code>required|email|min:3</code> and return only the validated keys.</p>
                </article>
                <article class="docs-helper-card">
                    <span class="docs-helper-card__name">route()</span>
                    <h3>Generate URLs by name</h3>
                    <p>Map route names back into URLs and inject route parameters into placeholders when needed.</p>
                </article>
                <article class="docs-helper-card">
                    <span class="docs-helper-card__name">logger()</span>
                    <h3>Write logs simply</h3>
                    <p>Store daily entries in <code>storage/logs</code> without setting up a large logging package for basic website use cases.</p>
                </article>
            </div>

            <div class="docs-code-block mt-4">
                <pre><code>$input = request()->only(['name', 'email', 'message']);

$validated = validate($input, [
    'name' => 'required',
    'email' => 'required|email',
    'message' => 'required|min:10',
]);

logger('Contact form received', ['email' => $validated['email']]);</code></pre>
            </div>
        </div>
    </section>

    <section class="docs-section bg-deep">
        <div class="container">
            <span class="docs-mini-kicker">Modern Website Features</span>
            <h2 class="docs-section-title">Built for the kind of polish modern public sites need.</h2>
            <div class="docs-grid docs-grid--three mt-4">
                <article class="docs-card">
                    <span class="docs-card__eyebrow">SPA Feel</span>
                    <h3>Instant-feel transitions</h3>
                    <p>The starter uses Swup to make navigation feel faster while still keeping the stack simple and server-rendered.</p>
                </article>
                <article class="docs-card">
                    <span class="docs-card__eyebrow">PWA Ready</span>
                    <h3>Manifest and service worker</h3>
                    <p>Savo includes a manifest, service worker registration, and offline-related assets so you can ship progressive enhancement from the start.</p>
                </article>
                <article class="docs-card">
                    <span class="docs-card__eyebrow">Lean Core</span>
                    <h3>No unnecessary framework bloat</h3>
                    <p>The core stays intentionally tight so the app remains easier to understand, audit, and maintain over time.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="docs-section">
        <div class="container">
            <span class="docs-mini-kicker">Example Flow</span>
            <h2 class="docs-section-title">A real form endpoint with validation, SMTP, and logs.</h2>
            <p class="docs-section-copy mt-3">
                The included contact flow shows how Savo handles practical website work: accept form input, validate it, guard against bots, send mail, and return JSON for the frontend.
            </p>
            <div class="docs-code-block mt-4">
                <pre><code>router()->group(['prefix' => 'api', 'name' => 'api.'], function ($router) {
    $router->post('contact-submit', [ContactController::class, 'submit'])
        ->name('submit.contact');
});

// In the controller:
if (!Validator::validate($input, $rules)) {
    return response()->json([
        'status' => 'error',
        'errors' => Validator::getErrors(),
    ], 422);
}</code></pre>
            </div>
        </div>
    </section>

    <section class="docs-section">
        <div class="container">
            <div class="docs-cta-band text-center">
                <span class="docs-mini-kicker">Build With Savo</span>
                <h2 class="docs-section-title mt-3">For teams who want speed, clarity, and less framework friction.</h2>
                <p class="mx-auto">
                    Savo keeps the coding model plain enough to stay approachable and structured enough to stay productive. If you want a website-first PHP framework that feels modern without getting heavy, this is the lane.
                </p>
                <div class="docs-cta-group justify-content-center">
                    <a href="/" class="btn-docs-primary">Visit Demo Site</a>
                    <a href="/contact" class="btn-docs-secondary">Request a Build</a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
    $content = ob_get_clean();
    include __DIR__ . '/layouts/index.php';
?>
