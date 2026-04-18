<?php
    $pageTitle = "Documentation — Savv Web Framework";
    $pageDescription = "Complete technical documentation for the Savv Web Framework. Routing, PWA, helpers, middleware, CLI, and more.";
    $extraCSS = '<link rel="stylesheet" href="/assets/css/docs.css">';

    ob_start();
?>


<!-- TOP BAR -->
<div class="topbar">
    <div class="topbar-left">
        <button class="sidebar-toggle" id="sidebarToggle" aria-label="Toggle navigation">☰</button>
        <a class="topbar-logo" href="docs-home.html">
            <div class="logo-mark">sv</div>
            <span class="logo-name">savv<span>.web</span></span>
        </a>
    </div>
    <div class="topbar-right">
        <div class="topbar-search">⌕ &nbsp;Search docs…</div>
        <span class="topbar-version">v2.1.0</span>
        <a class="topbar-link" href="https://github.com/igefadele/savv_framework" target="_blank">GitHub</a>
        <a class="topbar-btn" href="https://github.com/igefadele/savv_starter" target="_blank">Get Starter Project</a>
    </div>
</div>

<div class="layout">

    <!-- SIDEBAR -->
    <aside class="sidebar" id="sidebar">
        <div class="nav-group">
            <span class="nav-group-label">Introduction</span>
            <a class="nav-item active" href="#overview">Overview</a>
            <a class="nav-item" href="#why-savv">Why Savv Web</a>
            <a class="nav-item" href="#package-model">Package Model</a>
            <a class="nav-item" href="#quick-start">Quick Start</a>
        </div>
        <div class="nav-group">
            <span class="nav-group-label">Core Concepts</span>
            <a class="nav-item" href="#structure">Project Structure</a>
            <a class="nav-item" href="#bootstrap">Bootstrap Flow</a>
            <a class="nav-item" href="#routing">Routing</a>
            <a class="nav-sub" href="#file-routing">File-Based Routing</a>
            <a class="nav-sub" href="#explicit-routes">Explicit Routes</a>
            <a class="nav-sub" href="#api-routes">API Routes</a>
            <a class="nav-sub" href="#named-routes">Named Routes</a>
            <a class="nav-sub" href="#route-cache">Route Caching</a>
            <a class="nav-item" href="#views-layouts">Views & Layouts</a>
            <a class="nav-sub" href="#savv-id">The #savv ID</a>
            <a class="nav-item" href="#blogging">Blogging</a>
            <a class="nav-item" href="#middleware">Middleware</a>
        </div>
        <div class="nav-group">
            <span class="nav-group-label">Frontend</span>
            <a class="nav-item" href="#pwa">PWA — Built In</a>
            <a class="nav-item" href="#layout-helpers">Layout Helpers</a>
            <a class="nav-item" href="#savv-init">savv:init Event</a>
        </div>
        <div class="nav-group">
            <span class="nav-group-label">Reference</span>
            <a class="nav-item" href="#helpers">Global Helpers</a>
            <a class="nav-sub" href="#request-helper">request()</a>
            <a class="nav-sub" href="#response-helper">response()</a>
            <a class="nav-sub" href="#config-helper">config()</a>
            <a class="nav-sub" href="#validate-helper">validate()</a>
            <a class="nav-sub" href="#logger-helper">logger()</a>
            <a class="nav-item" href="#core-classes">Core Classes</a>
            <a class="nav-item" href="#redirections">URL Redirections</a>
            <a class="nav-item" href="#cms-fallback">CMS Fallback</a>
            <a class="nav-item" href="#cli">CLI Commands</a>
            <a class="nav-item" href="#config-reference">Config Reference</a>
        </div>
        <div class="nav-group">
            <span class="nav-group-label">Deploy</span>
            <a class="nav-item" href="#deployment">Deployment</a>
            <a class="nav-item" href="#autoloading">Autoloading</a>
            <a class="nav-item" href="#philosophy">Philosophy</a>
        </div>
        <div class="nav-group">
            <span class="nav-group-label">Links</span>
            <a class="nav-item" href="https://github.com/igefadele/savv_framework" target="_blank">Framework ↗</a>
            <a class="nav-item" href="https://github.com/igefadele/savv_starter" target="_blank">Starter ↗</a>
            <a class="nav-item" href="https://packagist.org/packages/savadub/savv" target="_blank">Packagist ↗</a>
            <a class="nav-item" href="https://savadub.com" target="_blank">Savadub ↗</a>
            <a class="nav-item" href="https://igefadele.savadub.com" target="_blank">Ige Fadele ↗</a>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="main">
        <article class="content">

            <div class="breadcrumb">
                <a href="docs-home.html">savv.web</a>
                <span>/</span>
                <span>documentation</span>
            </div>

            <!-- OVERVIEW -->
            <div id="overview" class="doc-section">
                <div class="doc-badge">v2.3.1 · ~526 KB · MIT</div>
                <h1 class="page-title">Savv Web Framework</h1>
                <p class="page-lead">A zero-config, zero-build PHP engine for high-performance brand websites,
                    portfolios, and public-facing web experiences. The speed of a static site, the power of a lean PHP
                    core — without the build-tool tax.</p>

                <div class="callout info">
                    <span class="callout-icon">ℹ</span>
                    <p>The entire framework package is <strong>~526 KB</strong> as of v2.1.0. Less than 1 MB total. You
                        can trace the entire codebase in an afternoon.</p>
                </div>
            </div>

            <!-- WHY SAVV -->
            <div id="why-savv" class="doc-section">
                <h2 class="doc-h2">Why Savv Web <a class="anchor" href="#why-savv">#</a></h2>
                <p>Modern PHP frameworks are powerful — but they carry enormous overhead when all you need is a clean,
                    fast, presentation-first website. Savv Web was built to fill that gap without compromise.</p>

                <table class="doc-table" style="margin-top:1.5rem">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>Savv Web</th>
                            <th>Full-Stack PHP</th>
                            <th>SSG</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>File-based routing — zero config</td>
                            <td style="color:var(--green)">✓</td>
                            <td style="color:var(--text-mute)">✗</td>
                            <td style="color:var(--green)">✓</td>
                        </tr>
                        <tr>
                            <td>No build tool required</td>
                            <td style="color:var(--green)">✓</td>
                            <td style="color:var(--text-mute)">✗</td>
                            <td style="color:var(--text-mute)">✗</td>
                        </tr>
                        <tr>
                            <td>PWA built-in, no setup</td>
                            <td style="color:var(--green)">✓</td>
                            <td style="color:var(--text-mute)">✗</td>
                            <td style="color:var(--text-mute)">✗</td>
                        </tr>
                        <tr>
                            <td>URL redirections, no settings</td>
                            <td style="color:var(--green)">✓</td>
                            <td style="color:var(--text-mute)">✗</td>
                            <td style="color:var(--text-mute)">✗</td>
                        </tr>
                        <tr>
                            <td>Edit live in production</td>
                            <td style="color:var(--green)">✓</td>
                            <td style="color:var(--text-mute)">✗</td>
                            <td style="color:var(--text-mute)">✗</td>
                        </tr>
                        <tr>
                            <td>Deploy on shared/budget hosting</td>
                            <td style="color:var(--green)">✓</td>
                            <td style="color:var(--amber)">⚠</td>
                            <td style="color:var(--green)">✓</td>
                        </tr>
                        <tr>
                            <td>CMS fallback support</td>
                            <td style="color:var(--green)">✓</td>
                            <td style="color:var(--text-mute)">✗</td>
                            <td style="color:var(--text-mute)">✗</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- PACKAGE MODEL -->
            <div id="package-model" class="doc-section">
                <h2 class="doc-h2">Package Model <a class="anchor" href="#package-model">#</a></h2>
                <p>Savv Web is split into two repositories to keep responsibilities clean.</p>
                <div class="def-list">
                    <div class="def-item">
                        <div class="def-term"><span class="method-tag tag-php">Framework</span> savadub/savv</div>
                        <div class="def-body">The installable core package. Namespace: <code>Savv\</code>. All source in
                            <code>src/</code>. Contains the bootstrapper, Router, Request, Response, Config, Validator,
                            Log, SystemController (PWA), Console Kernel, and all helpers. Install via Composer.
                        </div>
                    </div>
                    <div class="def-item">
                        <div class="def-term"><span class="method-tag tag-php">Starter</span> savv_starter</div>
                        <div class="def-body">The ready-to-use project skeleton. Already depends on the framework.
                            Provides the application structure, configs, layouts, views, partials, and example pages.
                            <strong>Recommended starting point.</strong>
                        </div>
                    </div>
                </div>
            </div>

            <!-- QUICK START -->
            <div id="quick-start" class="doc-section">
                <h2 class="doc-h2">Quick Start <a class="anchor" href="#quick-start">#</a></h2>
                <h3 class="doc-h3">Option A — Clone the starter (recommended)</h3>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>terminal</span>
                    </div>
                    <pre>git clone https://github.com/igefadele/savv_starter my-project
cd my-project
composer install</pre>
                </div>
                <p>Point your server document root to <code>public/</code> and open the browser.</p>
                <h3 class="doc-h3">Option B — Install the framework directly</h3>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>terminal</span>
                    </div>
                    <pre>composer require savadub/savv</pre>
                </div>
                <h3 class="doc-h3">Via GitHub VCS</h3>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>composer.json</span>
                    </div>
                    <pre>{
  <span class="c-str">"repositories"</span>: [{
    <span class="c-str">"type"</span>: <span class="c-str">"vcs"</span>,
    <span class="c-str">"url"</span>: <span class="c-str">"https://github.com/igefadele/savv_framework"</span>
  }],
  <span class="c-str">"require"</span>: {
    <span class="c-str">"savadub/savv"</span>: <span class="c-str">"dev-main"</span>
  }
}</pre>
                </div>
            </div>

            <!-- STRUCTURE -->
            <div id="structure" class="doc-section">
                <h2 class="doc-h2">Project Structure <a class="anchor" href="#structure">#</a></h2>
                <div class="dir-tree"><span class="dir">my-savv-app/</span>
                    ├── <span class="dir">app/</span>
                    │ ├── <span class="dir">Controllers/</span>
                    │ └── <span class="dir">Middleware/</span>
                    ├── <span class="dir">configs/</span>
                    │ ├── <span class="file">mail.php</span>
                    │ ├── <span class="file">middlewares.php</span>
                    │ ├── <span class="file">posts.php</span>
                    │ ├── <span class="file">pwa.php</span>
                    │ ├── <span class="file">redirections.php</span>
                    │ └── <span class="file">installations.php</span> <span class="comm"># CMS/app integrations</span>
                    ├── <span class="dir">public/</span> <span class="comm"># ← web server document root</span>
                    │ └── <span class="file">index.php</span> <span class="comm"># 3-line entry point</span>
                    ├── <span class="dir">routes/</span>
                    │ ├── <span class="file">web.php</span>
                    │ └── <span class="file">api.php</span>
                    ├── <span class="dir">storage/</span>
                    │ ├── <span class="dir">framework/</span>
                    │ │ └── <span class="file">routes.php</span> <span class="comm"># generated route cache</span>
                    │ └── <span class="dir">logs/</span>
                    ├── <span class="dir">views/</span>
                    │ ├── <span class="dir">layouts/</span>
                    │ │ └── <span class="file">index.php</span>
                    │ ├── <span class="dir">pages/</span> <span class="comm"># file-based routing root</span>
                    │ │ ├── <span class="file">index.php</span> <span class="comm"># → /</span>
                    │ │ ├── <span class="file">about.php</span> <span class="comm"># → /about</span>
                    │ │ └── <span class="file">offline.php</span> <span class="comm"># → /offline (PWA)</span>
                    │ ├── <span class="dir">partials/</span>
                    │ └── <span class="dir">posts/</span> <span class="comm"># markdown post files</span>
                    └── <span class="file">.env</span></div>
            </div>

            <!-- BOOTSTRAP -->
            <div id="bootstrap" class="doc-section">
                <h2 class="doc-h2">Bootstrap Flow <a class="anchor" href="#bootstrap">#</a></h2>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>public/index.php</span>
                    </div>
                    <pre><span class="c-fn">define</span>(<span class="c-str">'ROOT_PATH'</span>, <span class="c-fn">dirname</span>(__DIR__));
<span class="c-key">require</span> ROOT_PATH . <span class="c-str">'/vendor/autoload.php'</span>;

<span class="c-key">$app</span> = \Savv\Core\Application::<span class="c-fn">bootstrap</span>(__DIR__);
<span class="c-key">$app</span>-><span class="c-fn">run</span>();</pre>
                </div>
                <p><code>Application::run()</code> executes this sequence on every request:</p>
                <ol class="doc-list">
                    <li><strong>Route cache check</strong> — looks for <code>storage/framework/routes.php</code></li>
                    <li><strong>Cache hit</strong> → loads routes via <code>Router::loadRawRoutes()</code> (fast path)
                    </li>
                    <li><strong>Cache miss</strong> → <code>loadRouteFiles()</code> loads internal framework routes
                        (PWA), then <code>routes/*.php</code>, then <code>registerRedirections()</code></li>
                    <li><strong>Request capture</strong> — <code>Request::capture()</code> snapshots superglobals</li>
                    <li><strong>Dispatch</strong> — <code>Router::dispatch()</code> matches explicit routes</li>
                    <li><strong>Dynamic discovery</strong> — <code>resolveDynamicView()</code> scans
                        <code>views/pages/</code> for GET requests
                    </li>
                    <li><strong>CMS fallback</strong> — <code>handleExternalFallbacks()</code> checks
                        <code>configs/installations.php</code>
                    </li>
                    <li><strong>404</strong> — renders <code>views/404.php</code> or a plain string</li>
                </ol>
            </div>

            <!-- ROUTING -->
            <div id="routing" class="doc-section">
                <h2 class="doc-h2">Routing <a class="anchor" href="#routing">#</a></h2>

                <h3 class="doc-h3" id="file-routing">1. File-Based Routing — Zero Configuration</h3>
                <p>The most common way to add a page. Place any <code>.php</code> file in <code>views/pages/</code> and
                    it resolves as a URL with zero other steps:</p>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>file-to-url mapping</span>
                    </div>
                    <pre>views/pages/index.php      <span class="c-comment">→ GET /</span>
views/pages/about.php      <span class="c-comment">→ GET /about</span>
views/pages/services.php   <span class="c-comment">→ GET /services</span>
views/pages/blog/post.php  <span class="c-comment">→ GET /blog/post</span></pre>
                </div>
                <div class="callout tip"><span class="callout-icon">✦</span>
                    <p>Page parts (partials, sections, components) can live anywhere in <code>views/</code>. Just make
                        sure the main page file is in <code>views/pages/</code> and imports them correctly.</p>
                </div>

                <h3 class="doc-h3" id="explicit-routes">2. Explicit Web Routes</h3>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>routes/web.php</span>
                    </div>
                    <pre><span class="c-fn">router</span>()-><span class="c-fn">get</span>(<span class="c-str">'/'</span>, <span class="c-key">function</span> () {
    <span class="c-key">require</span> ROOT_PATH . <span class="c-str">'/views/pages/index.php'</span>;
});

<span class="c-fn">router</span>()-><span class="c-fn">get</span>(<span class="c-str">'blog/{slug}'</span>, <span class="c-key">function</span> (<span class="c-key">$slug</span>) {
    <span class="c-key">require</span> ROOT_PATH . <span class="c-str">'/views/pages/blog.php'</span>;
})-><span class="c-fn">name</span>(<span class="c-str">'blog.show'</span>);

<span class="c-comment">// Using the view() method</span>
<span class="c-fn">router</span>()-><span class="c-fn">get</span>(<span class="c-str">'about'</span>, <span class="c-key">function</span> () {
    <span class="c-key">return</span> <span class="c-fn">router</span>()-><span class="c-fn">view</span>(<span class="c-str">'pages/about'</span>);
});</pre>
                </div>

                <h3 class="doc-h3" id="api-routes">3. API Routes</h3>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>routes/api.php</span>
                    </div>
                    <pre><span class="c-key">use</span> App\Controllers\ContactController;

<span class="c-fn">router</span>()-><span class="c-fn">group</span>([<span class="c-str">'prefix'</span> => <span class="c-str">'api'</span>, <span class="c-str">'name'</span> => <span class="c-str">'api.'</span>], <span class="c-key">function</span>(<span class="c-key">$router</span>) {
    <span class="c-key">$router</span>-><span class="c-fn">post</span>(<span class="c-str">'contact-submit'</span>, [ContactController::<span class="c-key">class</span>, <span class="c-str">'submit'</span>])
           -><span class="c-fn">name</span>(<span class="c-str">'submit.contact'</span>);
});</pre>
                </div>

                <h3 class="doc-h3" id="named-routes">4. Named Routes &amp; Parameters</h3>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>php</span>
                    </div>
                    <pre><span class="c-comment">// Generate URL from route name</span>
<span class="c-key">$url</span> = <span class="c-fn">route</span>(<span class="c-str">'blog.show'</span>, [<span class="c-str">'slug'</span> => <span class="c-str">'getting-started'</span>]);
<span class="c-comment">// → /blog/getting-started</span></pre>
                </div>

                <h3 class="doc-h3" id="route-cache">5. Route Caching</h3>
                <p>Compile all routes into a static manifest for production performance:</p>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>terminal</span>
                    </div>
                    <pre>php savv route:cache
<span class="c-comment"># → storage/framework/routes.php generated</span></pre>
                </div>
                <div class="callout warn"><span class="callout-icon">⚠</span>
                    <p>Delete <code>storage/framework/routes.php</code> to return to dynamic mode. Regenerate after
                        adding new pages or changing routes.</p>
                </div>
            </div>

            <!-- VIEWS -->
            <div id="views-layouts" class="doc-section">
                <h2 class="doc-h2">Views &amp; Layouts <a class="anchor" href="#views-layouts">#</a></h2>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>views/pages/about.php</span>
                    </div>
                    <pre><span class="c-key">$pageTitle</span>       = <span class="c-str">'About — My Brand'</span>;
<span class="c-key">$pageDescription</span> = <span class="c-str">'Who we are and what we build.'</span>;

<span class="c-fn">ob_start</span>();
<span class="c-comment">?&gt;</span>
  &lt;section&gt;
    &lt;h1&gt;About Us&lt;/h1&gt;
    &lt;p&gt;Our story here.&lt;/p&gt;
  &lt;/section&gt;
<span class="c-comment">&lt;?php</span>
<span class="c-key">$content</span> = <span class="c-fn">ob_get_clean</span>();
<span class="c-key">include</span> ROOT_PATH . <span class="c-str">'/views/layouts/index.php'</span>;</pre>
                </div>
                <p>Path helpers are also available:</p>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>php</span>
                    </div>
                    <pre><span class="c-fn">view_path</span>(<span class="c-str">'pages/about.php'</span>);    <span class="c-comment">// → /root/views/pages/about.php</span>
<span class="c-fn">page_path</span>(<span class="c-str">'about.php'</span>);           <span class="c-comment">// → /root/views/pages/about.php</span>
<span class="c-fn">post_path</span>(<span class="c-str">'how-to-savv.md'</span>);   <span class="c-comment">// → /root/views/posts/how-to-savv.md</span></pre>
                </div>

                <h3 class="doc-h3" id="savv-id">The #savv ID</h3>
                <div class="callout warn"><span class="callout-icon">⚠</span>
                    <p>If you are <strong>not</strong> using the Savv Starter, wrap your main element with
                        <code>id="savv"</code> for SPA-feel navigation and fast page transitions to work. The Starter
                        does this for you in <code>views/layouts/index.php</code>.
                    </p>
                </div>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>views/layouts/index.php</span>
                    </div>
                    <pre>&lt;main <span class="c-key">id</span>=<span class="c-str">"savv"</span> class=<span class="c-str">"transition-fade"</span>&gt;
    &lt;?php echo $content; ?&gt;
&lt;/main&gt;</pre>
                </div>
            </div>

            <!-- BLOGGING -->
            <div id="blogging" class="doc-section">
                <h2 class="doc-h2">Blogging <a class="anchor" href="#blogging">#</a></h2>
                <p>Any <code>.md</code> file placed in <code>views/posts/</code> becomes a blog post accessible at
                    <code>/{slug}</code>. Each file must start with frontmatter:
                </p>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>views/posts/my-post.md</span>
                    </div>
                    <pre>---
title: My First Post
slug: my-first-post
date: 2026-04-17
author: Your Name
status: published
category: general
---

# Post Content

Write in Markdown here.</pre>
                </div>
                <p>Only posts with <code>status: published</code> are publicly accessible. Register slugs in
                    <code>configs/posts.php</code>:
                </p>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>configs/posts.php</span>
                    </div>
                    <pre><span class="c-key">return</span> [
    <span class="c-str">'my-first-post'</span> => <span class="c-str">'My First Post'</span>,
];</pre>
                </div>
                <p>Use <code>views/pages/posts.php</code> for the blog listing and
                    <code>views/pages/post-detail.php</code> for individual posts.
                </p>
            </div>

            <!-- MIDDLEWARE -->
            <div id="middleware" class="doc-section">
                <h2 class="doc-h2">Middleware <a class="anchor" href="#middleware">#</a></h2>
                <p>Define aliases in <code>configs/middlewares.php</code>, then apply them to routes or groups.</p>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>configs/middlewares.php</span>
                    </div>
                    <pre><span class="c-key">return</span> [
    <span class="c-str">'auth'</span> => \App\Middleware\Authenticate::<span class="c-key">class</span>,
];</pre>
                </div>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>routes/web.php</span>
                    </div>
                    <pre><span class="c-comment">// Apply to a group</span>
<span class="c-fn">router</span>()-><span class="c-fn">group</span>([<span class="c-str">'prefix'</span> => <span class="c-str">'dashboard'</span>, <span class="c-str">'middleware'</span> => <span class="c-str">'auth'</span>], <span class="c-key">function</span> (<span class="c-key">$r</span>) {
    <span class="c-key">$r</span>-><span class="c-fn">get</span>(<span class="c-str">'overview'</span>, <span class="c-key">function</span>() { <span class="c-key">require</span> ROOT_PATH . <span class="c-str">'/views/pages/dashboard.php'</span>; });
});

<span class="c-comment">// Apply to a single route</span>
<span class="c-fn">router</span>()-><span class="c-fn">post</span>(<span class="c-str">'contact'</span>, [ContactController::<span class="c-key">class</span>, <span class="c-str">'submit'</span>])
    -><span class="c-fn">middleware</span>(<span class="c-str">'auth'</span>)-><span class="c-fn">name</span>(<span class="c-str">'submit.contact'</span>);</pre>
                </div>
                <h3 class="doc-h3">Writing a middleware</h3>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>app/Middleware/Authenticate.php</span>
                    </div>
                    <pre><span class="c-key">namespace</span> App\Middleware;
<span class="c-key">use</span> Savv\Utils\Request;

<span class="c-key">class</span> <span class="c-fn">Authenticate</span> {
    <span class="c-key">public function</span> <span class="c-fn">handle</span>(Request <span class="c-key">$request</span>, <span class="c-fn">callable</span> <span class="c-key">$next</span>) {
        <span class="c-key">if</span> (!isset(<span class="c-key">$_SESSION</span>[<span class="c-str">'user_id'</span>])) {
            <span class="c-key">return</span> <span class="c-fn">response</span>()-><span class="c-fn">redirect</span>(<span class="c-str">'/login'</span>);
        }
        <span class="c-key">return</span> <span class="c-key">$next</span>(<span class="c-key">$request</span>);
    }
}</pre>
                </div>
            </div>

            <!-- PWA -->
            <div id="pwa" class="doc-section">
                <h2 class="doc-h2">PWA — Built In, No Action Required <a class="anchor" href="#pwa">#</a></h2>
                <p>The framework self-registers two routes on every boot:</p>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>auto-registered routes</span>
                    </div>
                    <pre><span class="c-comment">GET /manifest.json  →  SystemController::getManifestFile()</span>
<span class="c-comment">GET /sw.js          →  SystemController::getServiceWorkerFile()</span></pre>
                </div>
                <p>Configure everything in <code>configs/pwa.php</code>:</p>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>configs/pwa.php</span>
                    </div>
                    <pre><span class="c-key">return</span> [
    <span class="c-str">'name'</span>             => <span class="c-str">'My Brand'</span>,
    <span class="c-str">'short_name'</span>       => <span class="c-str">'Brand'</span>,
    <span class="c-str">'version'</span>          => <span class="c-str">'v1'</span>,    <span class="c-comment">// Bump to bust the SW cache</span>
    <span class="c-str">'theme_color'</span>      => <span class="c-str">'#081065'</span>,
    <span class="c-str">'background_color'</span> => <span class="c-str">'#ffffff'</span>,
    <span class="c-str">'display'</span>          => <span class="c-str">'standalone'</span>,
    <span class="c-str">'icons'</span>            => [
        [<span class="c-str">'src'</span> => <span class="c-str">'/assets/images/icons/icon-192x192.png'</span>, <span class="c-str">'sizes'</span> => <span class="c-str">'192x192'</span>],
        [<span class="c-str">'src'</span> => <span class="c-str">'/assets/images/icons/icon-512x512.png'</span>,  <span class="c-str">'sizes'</span> => <span class="c-str">'512x512'</span>],
    ],
    <span class="c-str">'precache'</span> => [<span class="c-str">'/'</span>, <span class="c-str">'/offline'</span>, <span class="c-str">'/assets/css/main.css'</span>],
];</pre>
                </div>
                <div class="callout tip"><span class="callout-icon">✦</span>
                    <p>That is the only step. The manifest, service worker, and offline fallback are all handled by the
                        framework.</p>
                </div>
            </div>

            <!-- LAYOUT HELPERS -->
            <div id="layout-helpers" class="doc-section">
                <h2 class="doc-h2">Layout Helpers <a class="anchor" href="#layout-helpers">#</a></h2>

                <h3 class="doc-h3">savv_head()</h3>
                <p>Call inside <code>&lt;head&gt;</code>. Injects: PWA manifest link, theme-color meta, Apple touch
                    icon, Bootstrap 5 CSS, Bootstrap Icons CSS, and AOS CSS.</p>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>views/partials/head.php</span>
                    </div>
                    <pre>&lt;head&gt;
    &lt;meta charset=<span class="c-str">"UTF-8"</span>&gt;
    &lt;title&gt;&lt;?= $pageTitle ?&gt;&lt;/title&gt;
    &lt;?php <span class="c-fn">savv_head</span>(); ?&gt;
&lt;/head&gt;</pre>
                </div>

                <h3 class="doc-h3">savv_scripts()</h3>
                <p>Call before <code>&lt;/body&gt;</code>. Injects: Bootstrap 5 JS, AOS (auto-initialized), Swup with
                    HeadPlugin and ScrollPlugin, PWA service worker registration, counter animations, and the
                    <code>savv:init</code> event dispatcher.
                </p>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>views/partials/scripts.php</span>
                    </div>
                    <pre>    &lt;?php <span class="c-fn">savv_scripts</span>(); ?&gt;
    &lt;script src=<span class="c-str">"/assets/js/main.js"</span>&gt;&lt;/script&gt;
&lt;/body&gt;</pre>
                </div>
            </div>

            <!-- SAVV:INIT -->
            <div id="savv-init" class="doc-section">
                <h2 class="doc-h2">The savv:init Event <a class="anchor" href="#savv-init">#</a></h2>
                <p>Savv dispatches a custom browser event called <code>savv:init</code> every time a page is initialized
                    — on initial load and after every Swup page transition.</p>
                <div class="callout info"><span class="callout-icon">ℹ</span>
                    <p><strong>savv:init = "The page is ready. Run your UI logic now."</strong><br>Use it instead of
                        <code>DOMContentLoaded</code> for any DOM-dependent code.
                    </p>
                </div>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>assets/js/main.js</span>
                    </div>
                    <pre><span class="c-comment">// Runs on initial load AND after every page swap</span>
<span class="c-key">const</span> myAppLogic = () => {
    <span class="c-comment">// Initialize sliders, counters, tooltips, etc.</span>
    <span class="c-key">const</span> counters = document.<span class="c-fn">querySelectorAll</span>(<span class="c-str">'.counter-element'</span>);
    <span class="c-comment">// ... your component logic</span>
};

document.<span class="c-fn">addEventListener</span>(<span class="c-str">'savv:init'</span>, myAppLogic);</pre>
                </div>
                <table class="doc-table">
                    <thead>
                        <tr>
                            <th>Event</th>
                            <th>Fires When</th>
                            <th>Use Case</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DOMContentLoaded</td>
                            <td>Once on initial load</td>
                            <td>Traditional multi-page sites</td>
                        </tr>
                        <tr>
                            <td>savv:init</td>
                            <td>Every load + every page swap</td>
                            <td>Savv-powered applications</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- HELPERS -->
            <div id="helpers" class="doc-section">
                <h2 class="doc-h2">Global Helper Functions <a class="anchor" href="#helpers">#</a></h2>
                <p>All helpers are auto-loaded via <code>src/Helpers/helpers.php</code>.</p>

                <h3 class="doc-h3" id="request-helper">request()</h3>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>php</span>
                    </div>
                    <pre><span class="c-fn">request</span>()                           <span class="c-comment">// Request singleton</span>
<span class="c-fn">request</span>(<span class="c-str">'name'</span>, <span class="c-str">'Guest'</span>)            <span class="c-comment">// input with default</span>
<span class="c-fn">request</span>()-><span class="c-fn">only</span>([<span class="c-str">'name'</span>, <span class="c-str">'email'</span>])  <span class="c-comment">// subset</span>
<span class="c-fn">request</span>()-><span class="c-fn">all</span>()                    <span class="c-comment">// merged POST + GET</span>
<span class="c-fn">request</span>()-><span class="c-fn">post</span>(<span class="c-str">'field'</span>)           <span class="c-comment">// POST only</span>
<span class="c-fn">request</span>()-><span class="c-fn">query</span>(<span class="c-str">'page'</span>)          <span class="c-comment">// GET only</span>
<span class="c-fn">request</span>()-><span class="c-fn">method</span>()               <span class="c-comment">// 'GET', 'POST', etc.</span>
<span class="c-fn">request</span>()-><span class="c-fn">path</span>()                 <span class="c-comment">// '/about'</span>
<span class="c-fn">request</span>()-><span class="c-fn">filled</span>(<span class="c-str">'email'</span>)       <span class="c-comment">// bool — '0' counts as filled</span>
<span class="c-fn">request</span>()-><span class="c-fn">ajax</span>()                 <span class="c-comment">// bool — X-Requested-With check</span></pre>
                </div>

                <h3 class="doc-h3" id="response-helper">response()</h3>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>php</span>
                    </div>
                    <pre><span class="c-fn">response</span>(<span class="c-str">'&lt;h1&gt;Hello&lt;/h1&gt;'</span>, <span class="c-num">200</span>)
<span class="c-fn">response</span>()-><span class="c-fn">json</span>([<span class="c-str">'status'</span> => <span class="c-str">'success'</span>], <span class="c-num">201</span>)
<span class="c-fn">response</span>()-><span class="c-fn">redirect</span>(<span class="c-str">'/thank-you'</span>)
<span class="c-fn">response</span>()-><span class="c-fn">redirect</span>(<span class="c-str">'/new-url'</span>, <span class="c-num">301</span>)
<span class="c-fn">response</span>()-><span class="c-fn">header</span>(<span class="c-str">'X-Powered-By'</span>, <span class="c-str">'Savv'</span>)
<span class="c-fn">response</span>()-><span class="c-fn">view</span>(<span class="c-str">'pages/about'</span>, [<span class="c-str">'title'</span> => <span class="c-str">'About'</span>])</pre>
                </div>

                <h3 class="doc-h3" id="config-helper">config()</h3>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>php</span>
                    </div>
                    <pre><span class="c-fn">config</span>(<span class="c-str">'mail.smtp.host'</span>)
<span class="c-fn">config</span>(<span class="c-str">'pwa.theme_color'</span>)
<span class="c-fn">config</span>(<span class="c-str">'pwa.version'</span>)
<span class="c-fn">config</span>(<span class="c-str">'redirections.facebook'</span>)</pre>
                </div>

                <h3 class="doc-h3" id="validate-helper">validate()</h3>
                <p>Validates and terminates with <code>422 JSON</code> on failure. Returns only declared keys on
                    success.</p>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>php</span>
                    </div>
                    <pre><span class="c-key">$validated</span> = <span class="c-fn">validate</span>(<span class="c-fn">request</span>()-><span class="c-fn">all</span>(), [
    <span class="c-str">'name'</span>    => <span class="c-str">'required'</span>,
    <span class="c-str">'email'</span>   => <span class="c-str">'required|email'</span>,
    <span class="c-str">'message'</span> => <span class="c-str">'required|min:10|max:2000'</span>,
    <span class="c-str">'budget'</span>  => <span class="c-str">'numeric'</span>,
    <span class="c-str">'website'</span> => <span class="c-str">'url'</span>,
]);
<span class="c-comment">// Rules: required, email, min:n, max:n, numeric, url</span></pre>
                </div>

                <h3 class="doc-h3" id="logger-helper">logger()</h3>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>php</span>
                    </div>
                    <pre><span class="c-fn">logger</span>(<span class="c-str">'Form submitted'</span>, [<span class="c-str">'email'</span> => <span class="c-fn">request</span>(<span class="c-str">'email'</span>)]); <span class="c-comment">// info</span>
<span class="c-fn">logger</span>()-><span class="c-fn">error</span>(<span class="c-str">'Mail failed'</span>, [<span class="c-str">'reason'</span> => <span class="c-key">$e</span>-><span class="c-fn">getMessage</span>()]);
<span class="c-fn">logger</span>()-><span class="c-fn">warning</span>(<span class="c-str">'Slow query'</span>, [<span class="c-str">'ms'</span> => <span class="c-num">850</span>]);
<span class="c-fn">logger</span>()-><span class="c-fn">debug</span>(<span class="c-str">'Route matched'</span>, [<span class="c-str">'path'</span> => <span class="c-fn">request</span>()-><span class="c-fn">path</span>()]);

<span class="c-comment">// Writes to: storage/logs/YYYY-MM-DD.log</span>
<span class="c-comment">// [2026-04-17 14:30:01] INFO: Form submitted {"email":"..."}</span></pre>
                </div>
            </div>

            <!-- CORE CLASSES -->
            <div id="core-classes" class="doc-section">
                <h2 class="doc-h2">Core Utility Classes <a class="anchor" href="#core-classes">#</a></h2>

                <h3 class="doc-h3">Savv\Utils\Request</h3>
                <table class="doc-table">
                    <thead>
                        <tr>
                            <th>Method</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>capture()</td>
                            <td>Static factory — builds instance from superglobals</td>
                        </tr>
                        <tr>
                            <td>input($key, $default)</td>
                            <td>POST precedence over GET</td>
                        </tr>
                        <tr>
                            <td>all()</td>
                            <td>Merged GET + POST</td>
                        </tr>
                        <tr>
                            <td>post($key, $default)</td>
                            <td>POST data only</td>
                        </tr>
                        <tr>
                            <td>only(array $keys)</td>
                            <td>Subset of inputs</td>
                        </tr>
                        <tr>
                            <td>except(array $keys)</td>
                            <td>All inputs minus excluded keys</td>
                        </tr>
                        <tr>
                            <td>filled($key)</td>
                            <td>Non-empty check — '0' and 0 count as filled</td>
                        </tr>
                        <tr>
                            <td>query($key, $default)</td>
                            <td>Query string values</td>
                        </tr>
                        <tr>
                            <td>method()</td>
                            <td>HTTP method string</td>
                        </tr>
                        <tr>
                            <td>path()</td>
                            <td>Request path without query string</td>
                        </tr>
                        <tr>
                            <td>ajax()</td>
                            <td>Detects X-Requested-With: XMLHttpRequest</td>
                        </tr>
                    </tbody>
                </table>

                <h3 class="doc-h3">Savv\Utils\Response</h3>
                <table class="doc-table">
                    <thead>
                        <tr>
                            <th>Method</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>setStatus(int $code)</td>
                            <td>Set HTTP status code</td>
                        </tr>
                        <tr>
                            <td>header($key, $value)</td>
                            <td>Add a response header</td>
                        </tr>
                        <tr>
                            <td>json(array $data, int $status)</td>
                            <td>JSON response with correct Content-Type</td>
                        </tr>
                        <tr>
                            <td>redirect(string $url, int $status)</td>
                            <td>HTTP redirect — default 302</td>
                        </tr>
                        <tr>
                            <td>view(string $viewPath, array $data)</td>
                            <td>Render a PHP view into the content buffer</td>
                        </tr>
                        <tr>
                            <td>send()</td>
                            <td>Output status code, headers, and body</td>
                        </tr>
                    </tbody>
                </table>

                <h3 class="doc-h3">Savv\Utils\Log</h3>
                <p>Static methods: <code>info()</code>, <code>error()</code>, <code>warning()</code>,
                    <code>debug()</code>. Writes to <code>storage/logs/YYYY-MM-DD.log</code>. Directory is created
                    automatically. Uses <code>FILE_APPEND | LOCK_EX</code> for safe concurrent writes.
                </p>

                <h3 class="doc-h3">Savv\Utils\Router</h3>
                <p>Singleton. Supports GET, POST, named routes, route parameters (<code>{slug}</code>), route groups
                    with prefix/name/middleware inheritance, middleware pipeline, dynamic view discovery, and
                    serializable route cache.</p>
            </div>

            <!-- REDIRECTIONS -->
            <div id="redirections" class="doc-section">
                <h2 class="doc-h2">URL Redirections <a class="anchor" href="#redirections">#</a></h2>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>configs/redirections.php</span>
                    </div>
                    <pre><span class="c-key">return</span> [
    <span class="c-str">'fb'</span>      => <span class="c-str">'https://facebook.com/yourpage'</span>,         <span class="c-comment">// 302</span>
    <span class="c-str">'careers'</span> => [<span class="c-str">'url'</span> => <span class="c-str">'https://jobs.example.com'</span>, <span class="c-str">'status'</span> => <span class="c-num">301</span>],
];</pre>
                </div>
                <p><code>yourdomain.com/fb</code> redirects automatically. No controller. No route file edit. Registered
                    at bootstrap by <code>Router::registerRedirections()</code>.</p>
            </div>

            <!-- CMS FALLBACK -->
            <div id="cms-fallback" class="doc-section">
                <h2 class="doc-h2">External CMS Fallback <a class="anchor" href="#cms-fallback">#</a></h2>
                <p>Run WordPress, WooCommerce, or any PHP app alongside Savv under the same domain — no server rewrites
                    needed.</p>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>configs/installations.php</span>
                    </div>
                    <pre><span class="c-key">return</span> [
    <span class="c-str">'wordpress'</span> => [
        <span class="c-str">'active'</span> => <span class="c-fn">true</span>,
        <span class="c-str">'path'</span>   => <span class="c-str">'/var/www/wordpress/wp-blog-header.php'</span>,
    ],
    <span class="c-str">'ecommerce'</span> => [
        <span class="c-str">'active'</span> => <span class="c-fn">false</span>,
        <span class="c-str">'path'</span>   => <span class="c-str">'/var/www/shop/index.php'</span>,
    ],
];</pre>
                </div>
                <p>When no Savv route matches, <code>handleExternalFallbacks()</code> iterates this config and hands off
                    to the first active installation. Custom 404 views are supported at <code>views/404.php</code>.</p>
            </div>

            <!-- CLI -->
            <div id="cli" class="doc-section">
                <h2 class="doc-h2">CLI Commands <a class="anchor" href="#cli">#</a></h2>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>terminal</span>
                    </div>
                    <pre>php savv &lt;command&gt; [arguments]</pre>
                </div>
                <table class="doc-table">
                    <thead>
                        <tr>
                            <th>Command</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>route:cache</td>
                            <td>Compiles all routes into <code>storage/framework/routes.php</code></td>
                        </tr>
                        <tr>
                            <td>make:config &lt;name&gt;</td>
                            <td>Scaffolds a blank config file in <code>configs/</code></td>
                        </tr>
                        <tr>
                            <td>make:controller &lt;name&gt;</td>
                            <td>Scaffolds a controller class in <code>app/Controllers/</code></td>
                        </tr>
                    </tbody>
                </table>
                <div class="callout info"><span class="callout-icon">ℹ</span>
                    <p><code>route:cache</code> compiles: explicit routes, file-based view routes from
                        <code>views/pages/</code>, redirections, and posts. Delete the cache file to return to dynamic
                        mode.
                    </p>
                </div>
            </div>

            <!-- CONFIG REFERENCE -->
            <div id="config-reference" class="doc-section">
                <h2 class="doc-h2">Configuration Reference <a class="anchor" href="#config-reference">#</a></h2>

                <h3 class="doc-h3">configs/pwa.php</h3>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>php</span>
                    </div>
                    <pre><span class="c-key">return</span> [
    <span class="c-str">'name'</span>             => <span class="c-str">'My App'</span>,
    <span class="c-str">'short_name'</span>       => <span class="c-str">'App'</span>,
    <span class="c-str">'version'</span>          => <span class="c-str">'v1'</span>,  <span class="c-comment">// bump to bust SW cache</span>
    <span class="c-str">'theme_color'</span>      => <span class="c-str">'#000000'</span>,
    <span class="c-str">'background_color'</span> => <span class="c-str">'#ffffff'</span>,
    <span class="c-str">'display'</span>          => <span class="c-str">'standalone'</span>,
    <span class="c-str">'icons'</span>            => [...],
    <span class="c-str">'precache'</span>         => [<span class="c-str">'/'</span>, <span class="c-str">'/offline'</span>, <span class="c-str">'/assets/css/main.css'</span>],
];</pre>
                </div>

                <h3 class="doc-h3">configs/mail.php</h3>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>php</span>
                    </div>
                    <pre><span class="c-key">return</span> [
    <span class="c-str">'smtp'</span> => [
        <span class="c-str">'host'</span>     => <span class="c-key">$_ENV</span>[<span class="c-str">'SMTP_HOST'</span>]     ?? <span class="c-fn">null</span>,
        <span class="c-str">'port'</span>     => <span class="c-key">$_ENV</span>[<span class="c-str">'SMTP_PORT'</span>]     ?? <span class="c-fn">null</span>,
        <span class="c-str">'user'</span>     => <span class="c-key">$_ENV</span>[<span class="c-str">'SMTP_USER'</span>]     ?? <span class="c-fn">null</span>,
        <span class="c-str">'password'</span> => <span class="c-key">$_ENV</span>[<span class="c-str">'SMTP_PASSWORD'</span>] ?? <span class="c-fn">null</span>,
        <span class="c-str">'security'</span> => <span class="c-str">'tls'</span>,
        <span class="c-str">'from'</span>     => <span class="c-key">$_ENV</span>[<span class="c-str">'SMTP_FROM'</span>]     ?? <span class="c-fn">null</span>,
        <span class="c-str">'to'</span>       => <span class="c-key">$_ENV</span>[<span class="c-str">'SMTP_TO'</span>]       ?? <span class="c-fn">null</span>,
    ],
];</pre>
                </div>
            </div>

            <!-- DEPLOYMENT -->
            <div id="deployment" class="doc-section">
                <h2 class="doc-h2">Deployment <a class="anchor" href="#deployment">#</a></h2>
                <ul class="doc-list">
                    <li>Point your server document root to <code>public/</code></li>
                    <li>Keep all application files above the public web root</li>
                    <li>Ensure <code>storage/logs/</code> and <code>storage/framework/</code> are writable by the web
                        server</li>
                    <li>Provide all required values in <code>.env</code> for production</li>
                    <li>Run <code>php savv route:cache</code> before going live</li>
                    <li>Server block samples for <strong>Apache, Nginx, Caddy, and LiteSpeed</strong> are in the starter
                        at <code>public/server-block-samples/</code></li>
                </ul>
            </div>

            <!-- AUTOLOADING -->
            <div id="autoloading" class="doc-section">
                <h2 class="doc-h2">Autoloading <a class="anchor" href="#autoloading">#</a></h2>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>composer.json</span>
                    </div>
                    <pre>{
  <span class="c-str">"autoload"</span>: {
    <span class="c-str">"psr-4"</span>: { <span class="c-str">"App\\"</span>: <span class="c-str">"app/"</span> },
    <span class="c-str">"files"</span>: [ <span class="c-str">"app/helpers.php"</span> ]
  }
}</pre>
                </div>
                <div class="code-block">
                    <div class="code-block-header">
                        <div class="code-dots">
                            <div class="code-dot cd-r"></div>
                            <div class="code-dot cd-y"></div>
                            <div class="code-dot cd-g"></div>
                        </div><span>terminal</span>
                    </div>
                    <pre>composer dump-autoload</pre>
                </div>
            </div>

            <!-- PHILOSOPHY -->
            <div id="philosophy" class="doc-section">
                <h2 class="doc-h2">Philosophy <a class="anchor" href="#philosophy">#</a></h2>
                <p>Most websites do not need a full-stack framework. They need clean routing, a request/response model,
                    config management, validation, and a sensible structure — and they need to be fast, deployable
                    anywhere, and editable without a build pipeline.</p>
                <p>Savv Web delivers exactly that. Nothing more, nothing less. It feels familiar to developers coming
                    from Laravel conventions while remaining readable enough that someone new to frameworks can trace
                    the entire codebase in an afternoon.</p>
                <div class="callout tip">
                    <span class="callout-icon">✦</span>
                    <p><strong>Savv Web is for developers who value readability, directness, and control — without the
                            ceremony.</strong></p>
                </div>

                <div class="doc-nav">
                    <div></div>
                    <a class="doc-nav-link" href="docs-home.html">
                        <span class="doc-nav-label">↖ Back to</span>
                        <span class="doc-nav-title">Documentation Home</span>
                    </a>
                </div>
            </div>

        </article>

        <!-- TOC -->
        <aside class="toc-col">
            <span class="toc-label">On this page</span>
            <a class="toc-link" href="#overview">Overview</a>
            <a class="toc-link" href="#why-savv">Why Savv Web</a>
            <a class="toc-link" href="#package-model">Package Model</a>
            <a class="toc-link" href="#quick-start">Quick Start</a>
            <a class="toc-link" href="#structure">Project Structure</a>
            <a class="toc-link" href="#bootstrap">Bootstrap Flow</a>
            <a class="toc-link" href="#routing">Routing</a>
            <a class="toc-link sub" href="#file-routing">File-Based</a>
            <a class="toc-link sub" href="#explicit-routes">Explicit Routes</a>
            <a class="toc-link sub" href="#route-cache">Route Cache</a>
            <a class="toc-link" href="#views-layouts">Views & Layouts</a>
            <a class="toc-link" href="#blogging">Blogging</a>
            <a class="toc-link" href="#middleware">Middleware</a>
            <a class="toc-link" href="#pwa">PWA</a>
            <a class="toc-link" href="#layout-helpers">Layout Helpers</a>
            <a class="toc-link" href="#savv-init">savv:init</a>
            <a class="toc-link" href="#helpers">Helpers</a>
            <a class="toc-link" href="#core-classes">Core Classes</a>
            <a class="toc-link" href="#redirections">Redirections</a>
            <a class="toc-link" href="#cms-fallback">CMS Fallback</a>
            <a class="toc-link" href="#cli">CLI</a>
            <a class="toc-link" href="#deployment">Deployment</a>
            <a class="toc-link" href="#philosophy">Philosophy</a>
        </aside>

    </div><!-- .main -->
</div><!-- .layout -->


<?php
    $content = ob_get_clean();
    include view_path('layouts/docs.php');
?>