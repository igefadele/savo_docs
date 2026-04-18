<?php
    $pageTitle = "Savv Web Framework— The Zero-Build PHP Framework";
    $pageDescription = "Savv is a zero-config, zero-build PHP framework for brand websites, portfolios, and public-facing web experiences. Less than 1MB. Ships PWA out of the box";
    //$extraCSS = '<link rel="stylesheet" href="/assets/css/docs.css">';

    ob_start();
?>

<div>
    <!-- HERO -->
    <section class="hero">
        <div class="hero-noise"></div>
        <div class="hero-glow-1"></div>
        <div class="hero-glow-2"></div>
        <div class="hero-grid-lines"></div>
        <div class="hero-content">
            <div class="hero-tag">
                <div class="hero-tag-dot"></div>
                Zero-build · Zero-config · Under 1 MB
            </div>
            <h1>
                The PHP framework<br>
                <span class="hl">without</span> the <span class="dim">tax.</span>
            </h1>
            <p class="hero-sub">
                Savv is a lean PHP engine for brand websites, portfolios, and public-facing
                experiences. Ship fast. No Node.js. No build pipeline. No ceremony.
                Just PHP running at full speed on any server on earth.
            </p>
            <div class="hero-actions">
                <a class="btn-primary" href="/docs">Read the docs →</a>
                <a class="btn-outline" href="https://github.com/igefadele/savv_framework" target="_blank">★ GitHub</a>
            </div>
            <div class="hero-install">
                <span class="cmd">composer</span> require savadub/savv
                <span class="copy-icon">⎘</span>
            </div>
            <div class="badges-row">
                <span class="badge">📦 <span>~526 KB</span> total</span>
                <span class="badge">⚡ <span>PHP 8+</span></span>
                <span class="badge">🔒 <span>MIT</span> license</span>
                <span class="badge">🌐 <span>PWA</span> out of the box</span>
            </div>
        </div>
    </section>

    <!-- FEATURES GRID -->
    <section id="features">
        <div class="container">
            <span class="section-eyebrow">// capabilities</span>
            <h2>Everything you need.<br>Nothing you don't.</h2>
            <p class="section-lead">Every feature is purpose-built for content-driven, public-facing sites. No bloat
                included.</p>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feat-icon">route:zero</div>
                    <h3>File-Based Routing</h3>
                    <p>Drop a PHP file in <code
                            style="font-family:var(--mono);font-size:.8em;color:var(--cyan)">views/pages/</code> and it
                        becomes a URL. No registration, no config, no controllers required.</p>
                </div>
                <div class="feature-card">
                    <div class="feat-icon">pwa:auto</div>
                    <h3>PWA Baked In</h3>
                    <p>Manifest, service worker, offline fallback — all generated dynamically from <code
                            style="font-family:var(--mono);font-size:.8em;color:var(--cyan)">configs/pwa.php</code>. Two
                        helper calls and you're done.</p>
                </div>
                <div class="feature-card">
                    <div class="feat-icon">build:none</div>
                    <h3>Zero Build Tools</h3>
                    <p>No Node.js. No npm. No webpack, Vite, or any compiler. Composer install, point at public/, go
                        live.</p>
                </div>
                <div class="feature-card">
                    <div class="feat-icon">redirect:cfg</div>
                    <h3>Built-In Redirections</h3>
                    <p>One line in <code
                            style="font-family:var(--mono);font-size:.8em;color:var(--cyan)">configs/redirections.php</code>
                        creates a pretty short URL. No plugin. No route file edit needed.</p>
                </div>
                <div class="feature-card">
                    <div class="feat-icon">cache:routes</div>
                    <h3>Route Caching</h3>
                    <p><code
                            style="font-family:var(--mono);font-size:.8em;color:var(--cyan)">php savv route:cache</code>
                        compiles everything into one static PHP manifest. Static-site dispatch speed, dynamic codebase.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feat-icon">edit:live</div>
                    <h3>Live Editing</h3>
                    <p>No rebuild between your file and your users. Edit views, configs, or content and reload. Instant.
                        Critical in production emergencies.</p>
                </div>
                <div class="feature-card">
                    <div class="feat-icon">cms:fallback</div>
                    <h3>CMS Fallback</h3>
                    <p>Run WordPress, e-commerce, or any other PHP app alongside Savv under the same domain with zero
                        server config changes.</p>
                </div>
                <div class="feature-card">
                    <div class="feat-icon">deploy:any</div>
                    <h3>Deploy Anywhere</h3>
                    <p>Shared hosting. Budget VPS. Bare metal. Enterprise cloud. If the server runs PHP 8, it runs Savv.
                        No containers required.</p>
                </div>
                <div class="feature-card">
                    <div class="feat-icon">blog:md</div>
                    <h3>Built-In Blogging</h3>
                    <p>Drop a Markdown file in <code
                            style="font-family:var(--mono);font-size:.8em;color:var(--cyan)">views/posts/</code> with
                        frontmatter and it's published at its slug URL automatically.</p>
                </div>
            </div>
            <div class="size-callout">
                <div class="size-card">
                    <span class="size-num">~526 KB</span>
                    <div class="size-label">Total framework package size as of v2.1.0</div>
                    <div class="size-sub">// less than 1 MB. the entire engine.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON TABLE -->
    <section id="compare" class="compare-section">
        <div class="container">
            <span class="section-eyebrow">// comparison</span>
            <h2>Honest comparison<br>with the alternatives.</h2>
            <p class="section-lead">Savv is not trying to replace Laravel or Next.js. It's built for a specific job —
                and it's the best tool for that job.</p>
            <div class="compare-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th class="savv-col">Savv Web ✦</th>
                            <th>Full-Stack PHP</th>
                            <th>Static Site Gen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>File-based routing, zero config</td>
                            <td class="check">✓</td>
                            <td class="cross">✗</td>
                            <td class="check">✓</td>
                        </tr>
                        <tr>
                            <td>No build tool required</td>
                            <td class="check">✓</td>
                            <td class="cross">✗</td>
                            <td class="cross">✗</td>
                        </tr>
                        <tr>
                            <td>PWA built-in, no setup</td>
                            <td class="check">✓</td>
                            <td class="cross">✗</td>
                            <td class="cross">✗</td>
                        </tr>
                        <tr>
                            <td>URL redirections, no settings</td>
                            <td class="check">✓</td>
                            <td class="cross">✗</td>
                            <td class="cross">✗</td>
                        </tr>
                        <tr>
                            <td>SSG-feel speed</td>
                            <td class="check">✓</td>
                            <td class="cross">✗</td>
                            <td class="check">✓</td>
                        </tr>
                        <tr>
                            <td>Deploy on shared/budget hosting</td>
                            <td class="check">✓</td>
                            <td class="warn">⚠</td>
                            <td class="check">✓</td>
                        </tr>
                        <tr>
                            <td>Edit live in production</td>
                            <td class="check">✓</td>
                            <td class="cross">✗</td>
                            <td class="cross">✗</td>
                        </tr>
                        <tr>
                            <td>CMS fallback / hybrid deployment</td>
                            <td class="check">✓</td>
                            <td class="cross">✗</td>
                            <td class="cross">✗</td>
                        </tr>
                        <tr>
                            <td>Package size under 1 MB</td>
                            <td class="check">✓</td>
                            <td class="cross">✗</td>
                            <td class="warn">⚠</td>
                        </tr>
                        <tr>
                            <td>Deep ORM / large plugin ecosystem</td>
                            <td class="cross">✗</td>
                            <td class="check">✓</td>
                            <td class="cross">✗</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CODE DEMO -->
    <section>
        <div class="container">
            <span class="section-eyebrow">// how it works</span>
            <h2>Your entire entry point<br>is three lines.</h2>
            <p class="section-lead">Every Savv application bootstraps from a single, readable entry file. Nothing is
                hidden. Nothing is magic.</p>
            <div class="demo-inner">
                <div class="demo-points">
                    <div class="demo-point">
                        <div class="demo-point-num">1</div>
                        <div>
                            <h4>Bootstrap in one call</h4>
                            <p>The application loads your environment, discovers routes, and registers the PWA engine —
                                all in one method.</p>
                        </div>
                    </div>
                    <div class="demo-point">
                        <div class="demo-point-num">2</div>
                        <div>
                            <h4>Pages are just PHP files</h4>
                            <p>Create a file in <code
                                    style="font-family:var(--mono);font-size:.8em;color:var(--cyan)">views/pages/</code>
                                and it resolves as a URL with zero other steps.</p>
                        </div>
                    </div>
                    <div class="demo-point">
                        <div class="demo-point-num">3</div>
                        <div>
                            <h4>Two helpers for the full frontend stack</h4>
                            <p><code style="font-family:var(--mono);font-size:.8em;color:var(--cyan)">savv_head()</code>
                                and <code
                                    style="font-family:var(--mono);font-size:.8em;color:var(--cyan)">savv_scripts()</code>
                                inject Bootstrap, AOS, SPA transitions, and PWA registration automatically.</p>
                        </div>
                    </div>
                    <div class="demo-point">
                        <div class="demo-point-num">4</div>
                        <div>
                            <h4>Listen to <code
                                    style="font-family:var(--mono);font-size:.8em;color:var(--cyan)">savv:init</code>
                                for your JS</h4>
                            <p>Custom event fires on first load and after every page swap. Your UI components always
                                reinitialize correctly.</p>
                        </div>
                    </div>
                </div>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div>
                        <span>public/index.php</span>
                    </div>
                    <pre><span class="c-comment">// The entire application entry point.</span>
                    <span class="c-comment">// That's it. Really.</span>

                    <span class="c-fn">define</span>(<span class="c-str">'ROOT_PATH'</span>, <span class="c-fn">dirname</span>(__DIR__));
                    <span class="c-key">require</span> ROOT_PATH . <span class="c-str">'/vendor/autoload.php'</span>;

                    <span class="c-key">$app</span> = \Savv\Core\Application::<span class="c-fn">bootstrap</span>(__DIR__);
                    <span class="c-key">$app</span>-><span class="c-fn">run</span>();</pre>
                </div>
            </div>

            <div style="margin-top:3rem">
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div>
                        <span>views/pages/about.php — file-based routing</span>
                    </div>
                    <pre><span class="c-comment">// File: views/pages/about.php → accessible at /about</span>
<span class="c-comment">// No route registration. No controller. Just this.</span>

<span class="c-key">$pageTitle</span>       = <span class="c-str">'About — My Brand'</span>;
<span class="c-key">$pageDescription</span> = <span class="c-str">'Who we are.'</span>;

<span class="c-fn">ob_start</span>();
<span class="c-comment">?&gt;</span>
  &lt;section&gt;
    &lt;h1&gt;About Us&lt;/h1&gt;
  &lt;/section&gt;
<span class="c-comment">&lt;?php</span>
<span class="c-key">$content</span> = <span class="c-fn">ob_get_clean</span>();
<span class="c-key">include</span> ROOT_PATH . <span class="c-str">'/views/layouts/index.php'</span>;</pre>
                </div>
            </div>
        </div>
    </section>

    <!-- CMS FALLBACK -->
    <section class="cms-section">
        <div class="container">
            <span class="section-eyebrow">// hybrid deployment</span>
            <h2>Savv runs alongside<br>your existing CMS.</h2>
            <p class="section-lead">No complex server rewrites. Savv routes what it knows about, and hands the rest off
                cleanly to WordPress, WooCommerce, or any PHP app on the same server.</p>
            <div class="cms-inner">
                <div>
                    <p style="color:var(--text-dim);font-size:.9rem;line-height:1.7;margin-bottom:1.5rem">Configure
                        integrations in one file. Set <code
                            style="font-family:var(--mono);font-size:.8em;color:var(--cyan)">active: true</code> and
                        Savv handles the rest — your blog, your shop, your Savv site, all under one domain.</p>
                    <div class="qs-steps">
                        <div class="qs-step">
                            <div class="qs-num">1</div>
                            <p>Create <code>configs/installations.php</code> and add your CMS entry path</p>
                        </div>
                        <div class="qs-step">
                            <div class="qs-num">2</div>
                            <p>Set <code>active: true</code> on the installation you want to hand off to</p>
                        </div>
                        <div class="qs-step">
                            <div class="qs-num">3</div>
                            <p>Unmatched requests flow through Savv → CMS automatically</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="code-block">
                        <div class="code-block-header">
                            <div class="code-dots">
                                <div class="code-dot cd-r"></div>
                                <div class="code-dot cd-y"></div>
                                <div class="code-dot cd-g"></div>
                            </div>
                            <span>configs/installations.php</span>
                        </div>
                        <pre><span class="c-key">return</span> [
  <span class="c-str">'wordpress'</span> => [
    <span class="c-str">'active'</span> => <span class="c-fn">true</span>,
    <span class="c-str">'path'</span>   => <span class="c-str">'/var/www/wp/wp-blog-header.php'</span>,
  ],
  <span class="c-str">'ecommerce'</span> => [
    <span class="c-str">'active'</span> => <span class="c-fn">false</span>,
    <span class="c-str">'path'</span>   => <span class="c-str">'/var/www/shop/index.php'</span>,
  ],
];</pre>
                    </div>
                    <div class="cms-logos" style="margin-top:1rem">
                        <div class="cms-logo-row">
                            <div class="dot"></div> WordPress — blogging, CMS, full sites
                        </div>
                        <div class="cms-logo-row">
                            <div class="dot"></div> WooCommerce / custom e-commerce
                        </div>
                        <div class="cms-logo-row">
                            <div class="dot"></div> Any PHP app under the same domain
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- USE CASES -->
    <section>
        <div class="container">
            <span class="section-eyebrow">// ideal for</span>
            <h2>The right tool for<br>the right job.</h2>
            <p class="section-lead">Savv is purpose-built for public-facing, content-driven sites. It's not trying to be
                everything — it's trying to be perfect for this.</p>
            <div class="use-cases-grid">
                <div class="use-case">
                    <div class="use-case-icon">🏢</div>
                    <div>
                        <h4>Brand & Corporate Websites</h4>
                        <p>Clean, fast, deployable anywhere.</p>
                    </div>
                </div>
                <div class="use-case">
                    <div class="use-case-icon">🎬</div>
                    <div>
                        <h4>Agency & Studio Portfolios</h4>
                        <p>Showcase work with SPA-feel navigation.</p>
                    </div>
                </div>
                <div class="use-case">
                    <div class="use-case-icon">📣</div>
                    <div>
                        <h4>Marketing & Campaign Sites</h4>
                        <p>Launch fast, iterate without rebuilds.</p>
                    </div>
                </div>
                <div class="use-case">
                    <div class="use-case-icon">🚀</div>
                    <div>
                        <h4>Product Landing Pages</h4>
                        <p>Pixel-perfect, performance-optimized.</p>
                    </div>
                </div>
                <div class="use-case">
                    <div class="use-case-icon">📄</div>
                    <div>
                        <h4>Company Profiles & Brochures</h4>
                        <p>PWA-ready from day one.</p>
                    </div>
                </div>
                <div class="use-case">
                    <div class="use-case-icon">🌐</div>
                    <div>
                        <h4>Hybrid CMS Sites</h4>
                        <p>Savv front, WordPress blog behind.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUICK START -->
    <section style="background:var(--bg-2)">
        <div class="container">
            <span class="section-eyebrow">// quick start</span>
            <h2>Up and running<br>in under two minutes.</h2>
            <div class="qs-steps" style="max-width:100%">
                <div class="qs-step">
                    <div class="qs-num">1</div>
                    <div>
                        <p>Clone the starter:
                            <code>git clone https://github.com/igefadele/savv_starter my-project</code>
                        </p>
                    </div>
                </div>
                <div class="qs-step">
                    <div class="qs-num">2</div>
                    <div>
                        <p>Install dependencies: <code>cd my-project && composer install</code></p>
                    </div>
                </div>
                <div class="qs-step">
                    <div class="qs-num">3</div>
                    <div>
                        <p>Point your server document root at <code>public/</code> and open the browser.</p>
                    </div>
                </div>
                <div class="qs-step">
                    <div class="qs-num">4</div>
                    <div>
                        <p>Add pages by dropping <code>.php</code> files into <code>views/pages/</code>. Done.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-banner">
        <div class="container">
            <span class="section-eyebrow" style="justify-content:center;display:block;text-align:center">// get
                started</span>
            <h2>Build your next site<br>the right way.</h2>
            <p>No overhead. No ceremony. Just clean PHP doing exactly what it was designed to do.</p>
            <div class="cta-actions">
                <a class="btn-primary" href="/docs">Read the documentation →</a>
                <a class="btn-outline" href="https://github.com/igefadele/savv_starter" target="_blank">Clone the
                    starter</a>
            </div>
        </div>
    </section>
</div>

<?php
    $content = ob_get_clean();
    include view_path('layouts/index.php');
?>