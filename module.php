
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta
            name="description"
            content="Documentation for the Adup.io Shopper API V3"
        >
    <title>AdUp.io Shopper PSP</title>

    <style media="screen">
      .highlight table td { padding: 5px; }
.highlight table pre { margin: 0; }
.highlight .gh {
  color: #999999;
}
.highlight .sr {
  color: #f6aa11;
}
.highlight .go {
  color: #888888;
}
.highlight .gp {
  color: #555555;
}
.highlight .gs {
}
.highlight .gu {
  color: #aaaaaa;
}
.highlight .nb {
  color: #f6aa11;
}
.highlight .cm {
  color: #75715e;
}
.highlight .cp {
  color: #75715e;
}
.highlight .c1 {
  color: #75715e;
}
.highlight .cs {
  color: #75715e;
}
.highlight .c, .highlight .ch, .highlight .cd, .highlight .cpf {
  color: #75715e;
}
.highlight .err {
  color: #960050;
}
.highlight .gr {
  color: #960050;
}
.highlight .gt {
  color: #960050;
}
.highlight .gd {
  color: #49483e;
}
.highlight .gi {
  color: #49483e;
}
.highlight .ge {
  color: #49483e;
}
.highlight .kc {
  color: #66d9ef;
}
.highlight .kd {
  color: #66d9ef;
}
.highlight .kr {
  color: #66d9ef;
}
.highlight .no {
  color: #66d9ef;
}
.highlight .kt {
  color: #66d9ef;
}
.highlight .mf {
  color: #ae81ff;
}
.highlight .mh {
  color: #ae81ff;
}
.highlight .il {
  color: #ae81ff;
}
.highlight .mi {
  color: #ae81ff;
}
.highlight .mo {
  color: #ae81ff;
}
.highlight .m, .highlight .mb, .highlight .mx {
  color: #ae81ff;
}
.highlight .sc {
  color: #ae81ff;
}
.highlight .se {
  color: #ae81ff;
}
.highlight .ss {
  color: #ae81ff;
}
.highlight .sd {
  color: #e6db74;
}
.highlight .s2 {
  color: #e6db74;
}
.highlight .sb {
  color: #e6db74;
}
.highlight .sh {
  color: #e6db74;
}
.highlight .si {
  color: #e6db74;
}
.highlight .sx {
  color: #e6db74;
}
.highlight .s1 {
  color: #e6db74;
}
.highlight .s, .highlight .sa, .highlight .dl {
  color: #e6db74;
}
.highlight .na {
  color: #a6e22e;
}
.highlight .nc {
  color: #a6e22e;
}
.highlight .nd {
  color: #a6e22e;
}
.highlight .ne {
  color: #a6e22e;
}
.highlight .nf, .highlight .fm {
  color: #a6e22e;
}
.highlight .vc {
  color: #ffffff;
}
.highlight .nn {
  color: #ffffff;
}
.highlight .ni {
  color: #ffffff;
}
.highlight .bp {
  color: #ffffff;
}
.highlight .vg {
  color: #ffffff;
}
.highlight .vi {
  color: #ffffff;
}
.highlight .nv, .highlight .vm {
  color: #ffffff;
}
.highlight .w {
  color: #ffffff;
}
.highlight {
  color: #ffffff;
}
.highlight .n, .highlight .py, .highlight .nx {
  color: #ffffff;
}
.highlight .nl {
  color: #f92672;
}
.highlight .ow {
  color: #f92672;
}
.highlight .nt {
  color: #f92672;
}
.highlight .k, .highlight .kv {
  color: #f92672;
}
.highlight .kn {
  color: #f92672;
}
.highlight .kp {
  color: #f92672;
}
.highlight .o {
  color: #f92672;
}
    </style>
    <style media="print">
      * {
        transition:none!important;
      }
      .highlight table td { padding: 5px; }
.highlight table pre { margin: 0; }
.highlight, .highlight .w {
  color: #586e75;
}
.highlight .err {
  color: #002b36;
  background-color: #dc322f;
}
.highlight .c, .highlight .ch, .highlight .cd, .highlight .cm, .highlight .cpf, .highlight .c1, .highlight .cs {
  color: #657b83;
}
.highlight .cp {
  color: #b58900;
}
.highlight .nt {
  color: #b58900;
}
.highlight .o, .highlight .ow {
  color: #93a1a1;
}
.highlight .p, .highlight .pi {
  color: #93a1a1;
}
.highlight .gi {
  color: #859900;
}
.highlight .gd {
  color: #dc322f;
}
.highlight .gh {
  color: #268bd2;
  background-color: #002b36;
  font-weight: bold;
}
.highlight .k, .highlight .kn, .highlight .kp, .highlight .kr, .highlight .kv {
  color: #6c71c4;
}
.highlight .kc {
  color: #cb4b16;
}
.highlight .kt {
  color: #cb4b16;
}
.highlight .kd {
  color: #cb4b16;
}
.highlight .s, .highlight .sb, .highlight .sc, .highlight .dl, .highlight .sd, .highlight .s2, .highlight .sh, .highlight .sx, .highlight .s1 {
  color: #859900;
}
.highlight .sa {
  color: #6c71c4;
}
.highlight .sr {
  color: #2aa198;
}
.highlight .si {
  color: #d33682;
}
.highlight .se {
  color: #d33682;
}
.highlight .nn {
  color: #b58900;
}
.highlight .nc {
  color: #b58900;
}
.highlight .no {
  color: #b58900;
}
.highlight .na {
  color: #268bd2;
}
.highlight .m, .highlight .mb, .highlight .mf, .highlight .mh, .highlight .mi, .highlight .il, .highlight .mo, .highlight .mx {
  color: #859900;
}
.highlight .ss {
  color: #859900;
}
    </style>
    <link href="/stylesheets/screen-94a05042.css" rel="stylesheet" media="screen" />
    <link href="/stylesheets/print-127ea029.css" rel="stylesheet" media="print" />
      <script src="/javascripts/all-b12a2749.js"></script>

    <script>
      $(function() { setupCodeCopy(); });
    </script>
  </head>

  <body class="module" data-languages="[&quot;curl&quot;]">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/images/navbar-cad8cdcb.png" alt="" />
      </span>
    </a>
    <div class="toc-wrapper">
      <img src="/images/logo-51250ef5.png" class="logo" alt="" />
        <div class="lang-selector">
              <a href="#" data-language-name="curl">curl</a>
        </div>
        <div class="search">
          <input type="text" class="search" id="input-search" placeholder="Search">
        </div>
        <ul class="search-results"></ul>
      <ul id="toc" class="toc-list-h1">
          <li>
            <a href="#psp-module-reference" class="toc-h1 toc-link" data-title="PSP Module Reference">PSP Module Reference</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#introduction" class="toc-h2 toc-link" data-title="Introduction">Introduction</a>
                  </li>
              </ul>
          </li>
          <li>
            <a href="#create-psp-gateway-module" class="toc-h1 toc-link" data-title="Create PSP Gateway Module">Create PSP Gateway Module</a>
          </li>
          <li>
            <a href="#structure" class="toc-h1 toc-link" data-title="Structure">Structure</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#naming-convention" class="toc-h2 toc-link" data-title="Naming convention">Naming convention</a>
                  </li>
                  <li>
                    <a href="#folder-structure" class="toc-h2 toc-link" data-title="Folder structure">Folder structure</a>
                  </li>
              </ul>
          </li>
          <li>
            <a href="#custom-name-spaces" class="toc-h1 toc-link" data-title="Custom Name Spaces">Custom Name Spaces</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#language" class="toc-h2 toc-link" data-title="Language">Language</a>
                  </li>
                  <li>
                    <a href="#views" class="toc-h2 toc-link" data-title="Views">Views</a>
                  </li>
                  <li>
                    <a href="#configs" class="toc-h2 toc-link" data-title="Configs">Configs</a>
                  </li>
              </ul>
          </li>
          <li>
            <a href="#adup-psp-module-commands" class="toc-h1 toc-link" data-title="Adup PSP Module Commands">Adup PSP Module Commands</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#adupgateway-make" class="toc-h2 toc-link" data-title="adupgateway:make">adupgateway:make</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-2" class="toc-h2 toc-link" data-title="adupgateway:make">adupgateway:make</a>
                  </li>
                  <li>
                    <a href="#adupgateway-use" class="toc-h2 toc-link" data-title="adupgateway:use">adupgateway:use</a>
                  </li>
                  <li>
                    <a href="#adupgateway-list" class="toc-h2 toc-link" data-title="adupgateway:list">adupgateway:list</a>
                  </li>
                  <li>
                    <a href="#adupgateway-migrate" class="toc-h2 toc-link" data-title="adupgateway:migrate">adupgateway:migrate</a>
                  </li>
                  <li>
                    <a href="#adupgateway-migrate-rollback" class="toc-h2 toc-link" data-title="adupgateway:migrate-rollback">adupgateway:migrate-rollback</a>
                  </li>
                  <li>
                    <a href="#adupgateway-migrate-refresh" class="toc-h2 toc-link" data-title="adupgateway:migrate-refresh">adupgateway:migrate-refresh</a>
                  </li>
                  <li>
                    <a href="#adupgateway-seed" class="toc-h2 toc-link" data-title="adupgateway:seed">adupgateway:seed</a>
                  </li>
                  <li>
                    <a href="#adupgateway-publish-migration" class="toc-h2 toc-link" data-title="adupgateway:publish-migration">adupgateway:publish-migration</a>
                  </li>
                  <li>
                    <a href="#adupgateway-publish-config" class="toc-h2 toc-link" data-title="adupgateway:publish-config">adupgateway:publish-config</a>
                  </li>
                  <li>
                    <a href="#adupgateway-publish-translation" class="toc-h2 toc-link" data-title="adupgateway:publish-translation">adupgateway:publish-translation</a>
                  </li>
                  <li>
                    <a href="#adupgateway-disable" class="toc-h2 toc-link" data-title="adupgateway:disable">adupgateway:disable</a>
                  </li>
                  <li>
                    <a href="#adupgateway-update" class="toc-h2 toc-link" data-title="adupgateway:update">adupgateway:update</a>
                  </li>
              </ul>
          </li>
          <li>
            <a href="#generator-commands" class="toc-h1 toc-link" data-title="Generator commands">Generator commands</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#adupgateway-make-command" class="toc-h2 toc-link" data-title="adupgateway:make-command">adupgateway:make-command</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-migration" class="toc-h2 toc-link" data-title="adupgateway:make-migration">adupgateway:make-migration</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-seed" class="toc-h2 toc-link" data-title="adupgateway:make-seed">adupgateway:make-seed</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-controller" class="toc-h2 toc-link" data-title="adupgateway:make-controller">adupgateway:make-controller</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-model" class="toc-h2 toc-link" data-title="adupgateway:make-model">adupgateway:make-model</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-provider" class="toc-h2 toc-link" data-title="adupgateway:make-provider">adupgateway:make-provider</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-middleware" class="toc-h2 toc-link" data-title="adupgateway:make-middleware">adupgateway:make-middleware</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-mail" class="toc-h2 toc-link" data-title="adupgateway:make-mail">adupgateway:make-mail</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-notification" class="toc-h2 toc-link" data-title="adupgateway:make-notification">adupgateway:make-notification</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-listener" class="toc-h2 toc-link" data-title="adupgateway:make-listener">adupgateway:make-listener</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-request" class="toc-h2 toc-link" data-title="adupgateway:make-request">adupgateway:make-request</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-event" class="toc-h2 toc-link" data-title="adupgateway:make-event">adupgateway:make-event</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-job" class="toc-h2 toc-link" data-title="adupgateway:make-job">adupgateway:make-job</a>
                  </li>
                  <li>
                    <a href="#adupgateway-route-provider" class="toc-h2 toc-link" data-title="adupgateway:route-provider">adupgateway:route-provider</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-factory" class="toc-h2 toc-link" data-title="adupgateway:make-factory">adupgateway:make-factory</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-policy" class="toc-h2 toc-link" data-title="adupgateway:make-policy">adupgateway:make-policy</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-rule" class="toc-h2 toc-link" data-title="adupgateway:make-rule">adupgateway:make-rule</a>
                  </li>
                  <li>
                    <a href="#adupgateway-make-test" class="toc-h2 toc-link" data-title="adupgateway:make-test">adupgateway:make-test</a>
                  </li>
              </ul>
          </li>
          <li>
            <a href="#facade-methods" class="toc-h1 toc-link" data-title="Facade Methods">Facade Methods</a>
          </li>
          <li>
            <a href="#errors" class="toc-h1 toc-link" data-title="Errors">Errors</a>
          </li>
      </ul>
        <ul class="toc-footer">
            <li><a href='https://adup.io'>Developed by Sanjaya Senevirathne</a></li>
        </ul>
    </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
        <h1 id='psp-module-reference'>PSP Module Reference</h1><h2 id='introduction'>Introduction</h2>
<p>Adup.io Shopper API PSP Module is a feature which created to manage your Adup Shopper Payment using PSP Modules. PSP Module is like a package, it has some views, controllers or models. This package is supported and tested in Laravel 9.</p>
<h1 id='create-psp-gateway-module'>Create PSP Gateway Module</h1>
<p>Creating a PSP Gateway for Adup.io Shopper API is simple and straightforward. Run the following command to create a psp module.</p>

<p><code>php artisan adupgateway:make &lt;gateway-name&gt;</code></p>

<p>Replace <code>&lt;gateway-name&gt;</code> by your desired gateway name.</p>

<p>It is also possible to create multiple psp modules in one command.</p>

<p><code>php artisan adupgateway:make Stripe Payhere Buckeroo</code></p>

<p>By default when you create a new psp module, the command will add some resources like a controller, seed class, service provider, etc. automatically. If you don&#39;t want these, you can add --plain flag, to generate a plain module.</p>

<p><code>php artisan adupgateway:make Stripe --plain
     # or
     php artisan adupgateway:make Stripe -p</code></p>
<h1 id='structure'>Structure</h1>
<p><img src="https://v3-shopper-api.adup.io/module_struct.png" alt="alt text" /></p>
<h2 id='naming-convention'>Naming convention</h2>
<p>Because we are autoloading the modules using psr-4, we strongly recommend using StudlyCase convention.</p>
<h2 id='folder-structure'>Folder structure</h2><div class="highlight"><pre class="highlight json tab-json"><code><span class="err">app/</span><span class="w">
</span><span class="err">bootstrap/</span><span class="w">
</span><span class="err">vendor/</span><span class="w">
</span><span class="err">psp/</span><span class="w">
  </span><span class="err">├──</span><span class="w"> </span><span class="err">PSPModuleNAme/</span><span class="w">
      </span><span class="err">├──</span><span class="w"> </span><span class="err">Assets/</span><span class="w">
      </span><span class="err">├──</span><span class="w"> </span><span class="err">Config/</span><span class="w">
      </span><span class="err">├──</span><span class="w"> </span><span class="err">Console/</span><span class="w">
      </span><span class="err">├──</span><span class="w"> </span><span class="err">Database/</span><span class="w">
          </span><span class="err">├──</span><span class="w"> </span><span class="err">Migrations/</span><span class="w">
          </span><span class="err">├──</span><span class="w"> </span><span class="err">Seeders/</span><span class="w">
      </span><span class="err">├──</span><span class="w"> </span><span class="err">Entities/</span><span class="w">
          </span><span class="err">├──</span><span class="w"> </span><span class="err">PSPEngine/</span><span class="w">
      </span><span class="err">├──</span><span class="w"> </span><span class="err">Http/</span><span class="w">
          </span><span class="err">├──</span><span class="w"> </span><span class="err">Controllers/</span><span class="w">
          </span><span class="err">├──</span><span class="w"> </span><span class="err">Middleware/</span><span class="w">
          </span><span class="err">├──</span><span class="w"> </span><span class="err">Requests/</span><span class="w">
          </span><span class="err">├──</span><span class="w"> </span><span class="err">routes.php</span><span class="w">
      </span><span class="err">├──</span><span class="w"> </span><span class="err">Providers/</span><span class="w">
          </span><span class="err">├──</span><span class="w"> </span><span class="err">PSPServiceProvider.php</span><span class="w">
      </span><span class="err">├──</span><span class="w"> </span><span class="err">Resources/</span><span class="w">
          </span><span class="err">├──</span><span class="w"> </span><span class="err">lang/</span><span class="w">
          </span><span class="err">├──</span><span class="w"> </span><span class="err">views/</span><span class="w">
      </span><span class="err">├──</span><span class="w"> </span><span class="err">Repositories/</span><span class="w">
      </span><span class="err">├──</span><span class="w"> </span><span class="err">Tests/</span><span class="w">
      </span><span class="err">├──</span><span class="w"> </span><span class="err">composer.json</span><span class="w">
      </span><span class="err">├──</span><span class="w"> </span><span class="err">module.json</span><span class="w">
      </span><span class="err">├──</span><span class="w"> </span><span class="err">start.php</span><span class="w">
</span></code></pre></div><h1 id='custom-name-spaces'>Custom Name Spaces</h1>
<p>When you create a new psp it also registers new custom namespace for Lang, View and Config. For example, if you create a new psp module named stripe, it will also register new namespace/hint stripe for that module. Then, you can use that namespace for calling Lang, View or Config. Following are some examples of its usage:</p>
<h2 id='language'>Language</h2>
<p>Calling Lang:</p>

<p>`Lang::get(&#39;stripe::group.name&#39;);</p>

<p>@trans(&#39;stripe::group.name&#39;);`</p>
<h2 id='views'>Views</h2>
<p>Calling View:</p>

<p>`view(&#39;stripe::index&#39;)</p>

<p>view(&#39;stripe::partials.sidebar&#39;)`</p>
<h2 id='configs'>Configs</h2>
<p>Calling Config:</p>

<p>`view(&#39;stripe::index&#39;)</p>

<p>view(&#39;stripe::partials.sidebar&#39;)`</p>
<h1 id='adup-psp-module-commands'>Adup PSP Module Commands</h1>
<aside class="notice">
    Note all the following commands use "Stripe" as example module name, and example class/file names
</aside>
<h2 id='adupgateway-make'>adupgateway:make</h2>
<p>Generate a new psp module.</p>

<p><code>php artisan adupgateway:make Stripe</code></p>
<h2 id='adupgateway-make-2'>adupgateway:make</h2>
<p>Generate multiple psp module at once.</p>

<p><code>php artisan adupgateway:make Stripe User Auth</code></p>
<h2 id='adupgateway-use'>adupgateway:use</h2>
<p>Use a given adupgateway. This allows you to not specify the adupgateway name on other commands requiring the adupgateway name as an argument.</p>

<p><code>php artisan adupgateway:use Stripe</code>
<code>adupgateway:unuse</code></p>

<p>This unsets the specified adupgateway that was set with the adupgateway:use command.</p>

<p><code>php artisan adupgateway:unuse</code></p>
<h2 id='adupgateway-list'>adupgateway:list</h2>
<p>List all available adupgateways.</p>

<p><code>php artisan adupgateway:list</code></p>
<h2 id='adupgateway-migrate'>adupgateway:migrate</h2>
<p>Migrate the given adupgateway, or without a adupgateway an argument, migrate all adupgateways.</p>

<p><code>php artisan adupgateway:migrate Stripe</code></p>

<p>Rollback the given adupgateway, or without an argument, rollback all adupgateways.</p>
<h2 id='adupgateway-migrate-rollback'>adupgateway:migrate-rollback</h2>
<p><code>php artisan adupgateway:migrate-rollback Stripe</code></p>
<h2 id='adupgateway-migrate-refresh'>adupgateway:migrate-refresh</h2>
<p>Refresh the migration for the given adupgateway, or without a specified adupgateway refresh all adupgateways migrations.</p>

<p><code>php artisan adupgateway:migrate-refresh Stripe</code>
<code>adupgateway:migrate-reset Stripe</code></p>

<p>Reset the migration for the given adupgateway, or without a specified adupgateway reset all adupgateways migrations.
<code>php artisan adupgateway:migrate-reset Stripe</code></p>
<h2 id='adupgateway-seed'>adupgateway:seed</h2>
<p>Seed the given adupgateway, or without an argument, seed all adupgateways</p>

<p><code>php artisan adupgateway:seed Stripe</code></p>
<h2 id='adupgateway-publish-migration'>adupgateway:publish-migration</h2>
<p>Publish the migration files for the given adupgateway, or without an argument publish all adupgateways migrations.</p>

<p>php artisan adupgateway:publish-migration Stripe</p>
<h2 id='adupgateway-publish-config'>adupgateway:publish-config</h2>
<p>Publish the given adupgateway configuration files, or without an argument publish all adupgateways configuration files.</p>

<p><code>php artisan adupgateway:publish-config Stripe</code></p>
<h2 id='adupgateway-publish-translation'>adupgateway:publish-translation</h2>
<p>Publish the translation files for the given adupgateway, or without a specified adupgateway publish all adupgateways migrations.</p>

<p><code>php artisan adupgateway:publish-translation Stripe</code></p>

<p>## adupgateway:enable
Enable the given adupgateway.</p>

<p><code>php artisan adupgateway:enable Stripe</code></p>
<h2 id='adupgateway-disable'>adupgateway:disable</h2>
<p>Disable the given adupgateway.</p>

<p><code>php artisan adupgateway:disable Stripe</code></p>
<h2 id='adupgateway-update'>adupgateway:update</h2>
<p>Update the given adupgateway.</p>

<p><code>php artisan adupgateway:update Stripe</code></p>
<h1 id='generator-commands'>Generator commands</h1><h2 id='adupgateway-make-command'>adupgateway:make-command</h2>
<p>Generate the given console command for the specified adupgateway.</p>

<p><code>php artisan adupgateway:make-command CreatePostCommand Stripe</code></p>
<h2 id='adupgateway-make-migration'>adupgateway:make-migration</h2>
<p>Generate a migration for specified adupgateway.</p>

<p><code>php artisan adupgateway:make-migration create_posts_table Stripe</code></p>
<h2 id='adupgateway-make-seed'>adupgateway:make-seed</h2>
<p>Generate the given seed name for the specified adupgateway.</p>

<p><code>php artisan adupgateway:make-seed seed_fake_Stripe_posts Stripe</code></p>
<h2 id='adupgateway-make-controller'>adupgateway:make-controller</h2>
<p>Generate a controller for the specified adupgateway.</p>

<p><code>php artisan adupgateway:make-controller PostsController Stripe</code></p>
<h2 id='adupgateway-make-model'>adupgateway:make-model</h2>
<p>Generate the given model for the specified adupgateway.</p>

<p><code>php artisan adupgateway:make-model Post Stripe</code></p>
<h3 id='optional-options'>Optional options:</h3>
<p><code>--fillable=field1,field2:</code> set the fillable fields on the generated model</p>

<p><code>--migration, -m:</code> create the migration file for the given model</p>
<h2 id='adupgateway-make-provider'>adupgateway:make-provider</h2>
<p>Generate the given service provider name for the specified adupgateway.</p>

<p><code>php artisan adupgateway:make-provider StripeServiceProvider Stripe</code></p>
<h2 id='adupgateway-make-middleware'>adupgateway:make-middleware</h2>
<p>Generate the given middleware name for the specified adupgateway.</p>

<p><code>php artisan adupgateway:make-middleware CanReadPostsMiddleware Stripe</code></p>
<h2 id='adupgateway-make-mail'>adupgateway:make-mail</h2>
<p>Generate the given mail class for the specified adupgateway.</p>

<p><code>php artisan adupgateway:make-mail SendWeeklyPostsEmail Stripe</code></p>
<h2 id='adupgateway-make-notification'>adupgateway:make-notification</h2>
<p>Generate the given notification class name for the specified adupgateway.</p>

<p><code>php artisan adupgateway:make-notification NotifyAdminOfNewComment Stripe</code></p>
<h2 id='adupgateway-make-listener'>adupgateway:make-listener</h2>
<p>Generate the given listener for the specified adupgateway. Optionally you can specify which event class it should listen to. It also accepts a --queued flag allowed queued event listeners.</p>

<p><code>php artisan adupgateway:make-listener NotifyUsersOfANewPost Stripe</code>
<code>php artisan adupgateway:make-listener NotifyUsersOfANewPost Stripe --event=PostWasCreated</code>
<code>php artisan adupgateway:make-listener NotifyUsersOfANewPost Stripe --event=PostWasCreated --queued</code></p>
<h2 id='adupgateway-make-request'>adupgateway:make-request</h2>
<p>Generate the given request for the specified adupgateway.</p>

<p><code>php artisan adupgateway:make-request CreatePostRequest Stripe</code></p>
<h2 id='adupgateway-make-event'>adupgateway:make-event</h2>
<p>Generate the given event for the specified adupgateway.</p>

<p><code>php artisan adupgateway:make-event StripePostWasUpdated Stripe</code></p>
<h2 id='adupgateway-make-job'>adupgateway:make-job</h2>
<p>Generate the given job for the specified adupgateway.</p>

<p><code>php artisan adupgateway:make-job JobName Stripe</code></p>

<p><code>php artisan adupgateway:make-job JobName Stripe --sync # A synchronous job class</code></p>
<h2 id='adupgateway-route-provider'>adupgateway:route-provider</h2>
<p>Generate the given route service provider for the specified adupgateway.</p>

<p><code>php artisan adupgateway:route-provider Stripe</code></p>
<h2 id='adupgateway-make-factory'>adupgateway:make-factory</h2>
<p>Generate the given database factory for the specified adupgateway.</p>

<p><code>php artisan adupgateway:make-factory FactoryName Stripe</code></p>
<h2 id='adupgateway-make-policy'>adupgateway:make-policy</h2>
<p>Generate the given policy class for the specified adupgateway.</p>

<p>The Policies is not generated by default when creating a new adupgateway. Change the value of paths.generator.policies in adupgateways.php to your desired location.</p>

<p><code>php artisan adupgateway:make-policy PolicyName Stripe</code></p>
<h2 id='adupgateway-make-rule'>adupgateway:make-rule</h2>
<p>Generate the given validation rule class for the specified adupgateway.</p>

<p>The Rules folder is not generated by default when creating a new adupgateway. Change the value of paths.generator.rules in adupgateways.php to your desired location.</p>

<p><code>php artisan adupgateway:make-rule ValidationRule Stripe</code>
<code>adupgateway:make-resource</code></p>

<p>Generate the given resource class for the specified adupgateway. It can have an optional --collection argument to generate a resource collection.</p>

<p>The Transformers folder is not generated by default when creating a new adupgateway. Change the value of paths.generator.resource in adupgateways.php to your desired location.</p>

<p><code>php artisan adupgateway:make-resource PostResource Stripe</code>
<code>php artisan adupgateway:make-resource PostResource Stripe --collection</code></p>
<h2 id='adupgateway-make-test'>adupgateway:make-test</h2>
<p>Generate the given test class for the specified adupgateway.</p>

<p><code>php artisan adupgateway:make-test EloquentPostRepositoryTest Stripe</code></p>
<h1 id='facade-methods'>Facade Methods</h1>
<p>Get all psp modules.</p>

<p><code>Module::all();</code></p>

<p>Get all cached modules.</p>

<p><code>Module::getCached()</code></p>

<p>Get ordered modules. The modules will be ordered by the priority key in module.json file.</p>

<p><code>Module::getOrdered();</code></p>

<p>Get scanned modules.</p>

<p><code>Module::scan();</code></p>

<p>Find a specific module.</p>

<p><code>Module::find(&#39;name&#39;);</code></p>

<p>Find a module, if there is one, return the Module instance, otherwise throw Nwidart\Modules\Exeptions\ModuleNotFoundException.</p>

<p><code>Module::findOrFail(&#39;module-name&#39;);</code></p>

<p>Get scanned paths.</p>

<p><code>Module::getScanPaths();</code></p>

<p>Get all modules as a collection instance.</p>

<p><code>Module::toCollection();</code></p>

<p>Get modules by the status. 1 for active and 0 for inactive.</p>

<p><code>Module::getByStatus(1);</code></p>

<p>Check the specified module. If it exists, will return true, otherwise false.</p>

<p><code>Module::has(&#39;blog&#39;);</code></p>

<p>Get all enabled modules.</p>

<p><code>Module::enabled();</code></p>

<p>Get all disabled modules.</p>

<p><code>Module::disabled();</code></p>

<p>Get count of all modules.</p>

<p><code>Module::count();</code></p>

<p>Get module path.</p>

<p><code>Module::getPath();</code></p>

<p>Register the modules.</p>

<p><code>Module::register();</code></p>

<p>Boot all available modules.</p>

<p><code>Module::boot();</code></p>

<p>Get all enabled modules as collection instance.</p>

<p><code>Module::collections();</code></p>

<p>Get module path from the specified module.</p>

<p><code>Module::getModulePath(&#39;name&#39;);</code></p>

<p>Get assets path from the specified module.</p>

<p><code>Module::assetPath(&#39;name&#39;);</code></p>

<p>Get config value from this package.</p>

<p><code>Module::config(&#39;composer.vendor&#39;);</code></p>

<p>Get used storage path.</p>

<p><code>Module::getUsedStoragePath();</code></p>

<p>Get used module for cli session.</p>

<p><code>Module::getUsedNow();</code></p>

<p><code>Module::getUsed();</code></p>

<p>Set used module for cli session.</p>

<p><code>Module::setUsed(&#39;name&#39;);</code></p>

<p>Get modules&#39;s assets path.</p>

<p><code>Module::getAssetsPath();</code></p>

<p>Get asset url from specific module.</p>

<p><code>Module::asset(&#39;blog:img/logo.img&#39;);</code></p>

<p>Install the specified module by given module name.</p>

<p><code>Module::install(&#39;nwidart/hello&#39;);</code></p>

<p>Update dependencies for the specified module.</p>

<p><code>Module::update(&#39;hello&#39;);</code>
Add a macro to the module repository.</p>
<h1 id='errors'>Errors</h1>
<p>The AdUp.io Shopper API uses the following error codes:</p>

<table><thead>
<tr>
<th>Error Code</th>
<th>Meaning</th>
</tr>
</thead><tbody>
<tr>
<td>400</td>
<td>Bad Request -- Your request is invalid.</td>
</tr>
<tr>
<td>401</td>
<td>Unauthorized -- Your API key is wrong.</td>
</tr>
<tr>
<td>403</td>
<td>Forbidden -- The kitten requested is hidden for administrators only.</td>
</tr>
<tr>
<td>404</td>
<td>Not Found -- The specified kitten could not be found.</td>
</tr>
<tr>
<td>405</td>
<td>Method Not Allowed -- You tried to access a kitten with an invalid method.</td>
</tr>
<tr>
<td>406</td>
<td>Not Acceptable -- You requested a format that isn&#39;t json.</td>
</tr>
<tr>
<td>410</td>
<td>Gone -- The kitten requested has been removed from our servers.</td>
</tr>
<tr>
<td>418</td>
<td>I&#39;m a teapot.</td>
</tr>
<tr>
<td>429</td>
<td>Too Many Requests -- You&#39;re requesting too many kittens! Slow down!</td>
</tr>
<tr>
<td>500</td>
<td>Internal Server Error -- We had a problem with our server. Try again later.</td>
</tr>
<tr>
<td>503</td>
<td>Service Unavailable -- We&#39;re temporarily offline for maintenance. Please try again later.</td>
</tr>
</tbody></table>

      </div>
      <div class="dark-box">
          <div class="lang-selector">
                <a href="#" data-language-name="curl">curl</a>
          </div>
      </div>
    </div>
  </body>
</html>
