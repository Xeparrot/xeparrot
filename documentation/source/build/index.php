
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
    <title>AdUp.io Shopper API</title>

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

  <body class="index" data-languages="[&quot;curl&quot;]">
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
            <a href="#api-reference" class="toc-h1 toc-link" data-title="API Reference">API Reference</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#introduction" class="toc-h2 toc-link" data-title="Introduction">Introduction</a>
                  </li>
                  <li>
                    <a href="#base-url" class="toc-h2 toc-link" data-title="Base URL">Base URL</a>
                  </li>
                  <li>
                    <a href="#response-structure" class="toc-h2 toc-link" data-title="Response Structure">Response Structure</a>
                  </li>
                  <li>
                    <a href="#authentication" class="toc-h2 toc-link" data-title="Authentication">Authentication</a>
                  </li>
              </ul>
          </li>
          <li>
            <a href="#app-intialization" class="toc-h1 toc-link" data-title="App Intialization">App Intialization</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#init-request" class="toc-h2 toc-link" data-title="Init Request">Init Request</a>
                  </li>
                  <li>
                    <a href="#response-fast-checkout" class="toc-h2 toc-link" data-title="Response (Fast Checkout)">Response (Fast Checkout)</a>
                  </li>
                  <li>
                    <a href="#response-autofill" class="toc-h2 toc-link" data-title="Response (AutoFill)">Response (AutoFill)</a>
                  </li>
              </ul>
          </li>
          <li>
            <a href="#shopper" class="toc-h1 toc-link" data-title="Shopper">Shopper</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#get-shopper" class="toc-h2 toc-link" data-title="Get Shopper">Get Shopper</a>
                  </li>
                  <li>
                    <a href="#create-shopper" class="toc-h2 toc-link" data-title="Create Shopper">Create Shopper</a>
                  </li>
                  <li>
                    <a href="#edit-shopper" class="toc-h2 toc-link" data-title="Edit Shopper">Edit Shopper</a>
                  </li>
                  <li>
                    <a href="#request-shopper-otp" class="toc-h2 toc-link" data-title="Request Shopper OTP">Request Shopper OTP</a>
                  </li>
                  <li>
                    <a href="#verify-shopper-otp" class="toc-h2 toc-link" data-title="Verify Shopper OTP">Verify Shopper OTP</a>
                  </li>
              </ul>
          </li>
          <li>
            <a href="#address-blocks" class="toc-h1 toc-link" data-title="Address Blocks">Address Blocks</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#create-address-block" class="toc-h2 toc-link" data-title="Create Address Block">Create Address Block</a>
                  </li>
                  <li>
                    <a href="#edit-address-block" class="toc-h2 toc-link" data-title="Edit Address Block">Edit Address Block</a>
                  </li>
                  <li>
                    <a href="#delete-address-block" class="toc-h2 toc-link" data-title="Delete Address Block">Delete Address Block</a>
                  </li>
              </ul>
          </li>
          <li>
            <a href="#webauthn" class="toc-h1 toc-link" data-title="WebAuthn">WebAuthn</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#registration-request" class="toc-h2 toc-link" data-title="Registration Request">Registration Request</a>
                  </li>
                  <li>
                    <a href="#registration-verification" class="toc-h2 toc-link" data-title="Registration Verification">Registration Verification</a>
                  </li>
                  <li>
                    <a href="#login-request" class="toc-h2 toc-link" data-title="Login Request">Login Request</a>
                  </li>
                  <li>
                    <a href="#login-verification" class="toc-h2 toc-link" data-title="Login Verification">Login Verification</a>
                  </li>
                  <li>
                    <a href="#test-environment" class="toc-h2 toc-link" data-title="Test Environment">Test Environment</a>
                  </li>
              </ul>
          </li>
          <li>
            <a href="#postman-collection" class="toc-h1 toc-link" data-title="Postman Collection">Postman Collection</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#url-2" class="toc-h2 toc-link" data-title="URL">URL</a>
                  </li>
              </ul>
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
        <h1 id='api-reference'>API Reference</h1><h2 id='introduction'>Introduction</h2>
<p>Welcome to the AdUp.io Shopper API Version 3. You can use this API to access AdUp.io Shopper API endpoints, which can get information of various shoppers, products, webauthn, auth, payment details and addresses in the database.</p>

<p>We have language bindings in curl You can view code examples in the dark area to the right, and you can switch the programming language of the examples with the tabs in the top right.</p>
<h2 id='base-url'>Base URL</h2>
<p><code>https://v3-shopper-api.adup.io/api/v1</code></p>
<h2 id='response-structure'>Response Structure</h2>
<table><thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>success</td>
<td>bool</td>
<td>This flag will be true if the request completed with no errors, if you get a false value check for the errors key</td>
</tr>
<tr>
<td>result</td>
<td>object/array</td>
<td>Requested result will be here</td>
</tr>
<tr>
<td>errors</td>
<td>array</td>
<td>You will receive errors here if the success flag is false</td>
</tr>
<tr>
<td>messages</td>
<td>array</td>
<td>If you are expecting any messages with the response those will be here</td>
</tr>
<tr>
<td>result_info</td>
<td>array</td>
<td>Any other details related to the request</td>
</tr>
</tbody></table>
<h2 id='authentication'>Authentication</h2>
<p>Bearer authentication (also called token authentication) is an HTTP authentication scheme that involves security tokens called bearer tokens. The name “Bearer authentication” can be understood as “give access to the bearer of this token.” The bearer token is a cryptic string, usually generated by the server in response to a login request. The client must send this token in the Authorization header when making requests to protected resources:</p>

<p><code>Authorization: Bearer &lt;token&gt;</code></p>
<h1 id='app-intialization'>App Intialization</h1><h2 id='init-request'>Init Request</h2>
<p>This endpoint is used for app initiation, and when this endpoint is called it will provide all the required details to serve the initial interface. You only need to make this request when the app is loaded or reloaded.</p>

<aside class="notice">
    if you send a valid bearer authentication token you will get the shopper object on this response
</aside>
<h3 id='method'>Method</h3>
<p><code>Method: GET</code></p>
<h3 id='endpoint'>Endpoint</h3>
<p><code>https://v3-shopper-api.adup.io/api/v1/init?mode=fastcheckout&amp;shop_id={{shop_id}}&amp;products={{products}}</code></p>
<h3 id='query-parameters'>Query Parameters</h3>
<table><thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Required</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>mode</td>
<td>string</td>
<td>Yes</td>
<td>Currently support fastcheckout &amp; autofill modes</td>
</tr>
<tr>
<td>shop_id</td>
<td>init</td>
<td>No</td>
<td>Required for fastcheckout mode. Shop ID of the visiting shop</td>
</tr>
<tr>
<td>products</td>
<td>sting</td>
<td>No</td>
<td>Required for fastcheckout mode. Comma separated string of all product SKUs</td>
</tr>
</tbody></table>
<h3 id='header-params'>Header Params</h3>
<table><thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Required</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>autofill-api-key</td>
<td>string</td>
<td>Yes (autofill mode)</td>
<td>This header will be used to identify the domain and other details of the autofill integration</td>
</tr>
</tbody></table>
<h2 id='response-fast-checkout'>Response (Fast Checkout)</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">--request</span> GET <span class="s1">'https://v3-shopper-api.adup.io/api/v1/init?mode=fastcheckout&amp;shop_id=1&amp;products=sku1,sku2'</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="w">
    </span><span class="p">{</span><span class="w">
       </span><span class="p">{</span><span class="w">
           </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
           </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
               </span><span class="nl">"shop"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                   </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"initial"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Maynard"</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Maya"</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"currency"</span><span class="p">:</span><span class="w"> </span><span class="s2">"EUR"</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"slug"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"domain"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"subdomain"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"total_products"</span><span class="p">:</span><span class="w"> </span><span class="mi">10</span><span class="w">
               </span><span class="p">},</span><span class="w">
               </span><span class="nl">"products"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
               </span><span class="nl">"user_data"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                   </span><span class="nl">"device_ip"</span><span class="p">:</span><span class="w"> </span><span class="s2">"127.0.0.1"</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"device_country"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"browser_language"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"browser_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">""</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"is_bot"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"os"</span><span class="p">:</span><span class="w"> </span><span class="s2">""</span><span class="w">
               </span><span class="p">},</span><span class="w">
               </span><span class="nl">"app_data"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                   </span><span class="nl">"static_base_url"</span><span class="p">:</span><span class="w"> </span><span class="s2">"http://localhost:8000"</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"api_version"</span><span class="p">:</span><span class="w"> </span><span class="s2">"v1.0"</span><span class="p">,</span><span class="w">
                   </span><span class="nl">"countries"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                       </span><span class="nl">"AF"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                           </span><span class="nl">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Afghanistan"</span><span class="p">,</span><span class="w">
                           </span><span class="nl">"dial_code"</span><span class="p">:</span><span class="w"> </span><span class="s2">"+93"</span><span class="p">,</span><span class="w">
                           </span><span class="nl">"flag"</span><span class="p">:</span><span class="w"> </span><span class="s2">"🇦🇫"</span><span class="w">
                       </span><span class="p">},</span><span class="w">
                       </span><span class="err">...</span><span class="w">
                   </span><span class="p">}</span><span class="w">
               </span><span class="p">},</span><span class="w">
               </span><span class="nl">"payment_method"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
                   </span><span class="p">{</span><span class="w">
                       </span><span class="nl">"Stripe"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                           </span><span class="nl">"provider"</span><span class="p">:</span><span class="w"> </span><span class="s2">"stripe"</span><span class="p">,</span><span class="w">
                           </span><span class="nl">"saveble"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
                           </span><span class="nl">"icon"</span><span class="p">:</span><span class="w"> </span><span class="s2">"stripe.png"</span><span class="p">,</span><span class="w">
                           </span><span class="nl">"label"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Credit Card"</span><span class="p">,</span><span class="w">
                           </span><span class="nl">"processor"</span><span class="p">:</span><span class="w"> </span><span class="s2">"frontend"</span><span class="p">,</span><span class="w">
                           </span><span class="nl">"fields"</span><span class="p">:</span><span class="w"> </span><span class="s2">""</span><span class="p">,</span><span class="w">
                           </span><span class="nl">"description"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Millions of companies of all sizes—from startups to Fortune 500s—use Stripe’s software and APIs to accept payments, send payouts, and manage their businesses online."</span><span class="p">,</span><span class="w">
                           </span><span class="nl">"options "</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="w">
                       </span><span class="p">}</span><span class="w">
                   </span><span class="p">}</span><span class="w">
               </span><span class="p">],</span><span class="w">
               </span><span class="nl">"shopper"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                    </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"type"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"first_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Test"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"last_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Name"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"phone"</span><span class="p">:</span><span class="w"> </span><span class="s2">"111111111"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"email"</span><span class="p">:</span><span class="w"> </span><span class="s2">"test@test.com"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"webauthn"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"otp"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"otp_id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"92376"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"country_code"</span><span class="p">:</span><span class="w"> </span><span class="s2">"94"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"currency"</span><span class="p">:</span><span class="w"> </span><span class="s2">"EUR"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"verified"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"language"</span><span class="p">:</span><span class="w"> </span><span class="s2">"en"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"billing_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"shipping_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"payment_method_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"created_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-07-26T09:10:13.000000Z"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"updated_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-07-26T09:10:13.000000Z"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"addresses"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
                        </span><span class="p">{</span><span class="w">
                            </span><span class="nl">"1"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                                </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"number"</span><span class="p">:</span><span class="w"> </span><span class="s2">"34"</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"street"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Churchgate"</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"street2"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Lanum Street"</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"city"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Lundhaiana"</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"province"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Western"</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"postcode"</span><span class="p">:</span><span class="w"> </span><span class="s2">"7732"</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sri Lanka"</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Ruwan"</span><span class="w">
                            </span><span class="p">}</span><span class="w">
                        </span><span class="p">},</span><span class="w">
                        </span><span class="p">{</span><span class="w">
                            </span><span class="nl">"2"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                                </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"number"</span><span class="p">:</span><span class="w"> </span><span class="s2">"20"</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"street"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Panamas Bradah"</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"street2"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"city"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Parnamas City"</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"province"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Northen"</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"postcode"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2282"</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"India"</span><span class="p">,</span><span class="w">
                                </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Ruwan"</span><span class="w">
                            </span><span class="p">}</span><span class="w">
                        </span><span class="p">}</span><span class="w">
                    </span><span class="p">]</span><span class="w">
               </span><span class="p">}</span><span class="w">
           </span><span class="p">},</span><span class="w">
           </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
           </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
           </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
       </span><span class="p">}</span><span class="w">
    </span><span class="p">}</span><span class="w">

</span></code></pre></div><h2 id='response-autofill'>Response (AutoFill)</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">--request</span> GET <span class="s1">'https://v3-shopper-api.adup.io/api/v1/init?mode=autofill'</span> <span class="se">\</span>
<span class="nt">--header</span> <span class="s1">'autofill-api-key: 4GF545FGNAG45556gddgGDRrwr4'</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="w">
   </span><span class="p">{</span><span class="w">
        </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
        </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
            </span><span class="nl">"merchant"</span><span class="p">:</span><span class="w"> </span><span class="s2">""</span><span class="p">,</span><span class="w">
            </span><span class="nl">"autofill_domain"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://woocommerce.kodeia.com"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"api_key"</span><span class="p">:</span><span class="w"> </span><span class="s2">"4GF545FGNAG45556gddgGDRrwr4"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"user_data"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                </span><span class="nl">"device_ip"</span><span class="p">:</span><span class="w"> </span><span class="s2">"127.0.0.1"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"device_country"</span><span class="p">:</span><span class="w"> </span><span class="kc">false</span><span class="p">,</span><span class="w">
                </span><span class="nl">"browser_language"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
                </span><span class="nl">"browser_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">""</span><span class="p">,</span><span class="w">
                </span><span class="nl">"is_bot"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
                </span><span class="nl">"os"</span><span class="p">:</span><span class="w"> </span><span class="s2">""</span><span class="w">
            </span><span class="p">},</span><span class="w">
            </span><span class="nl">"app_data"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                </span><span class="nl">"static_base_url"</span><span class="p">:</span><span class="w"> </span><span class="s2">"http://localhost:8000"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"api_version"</span><span class="p">:</span><span class="w"> </span><span class="s2">"v1.0"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"countries"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                    </span><span class="nl">"AF"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                        </span><span class="nl">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Afghanistan"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"dial_code"</span><span class="p">:</span><span class="w"> </span><span class="s2">"+93"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"flag"</span><span class="p">:</span><span class="w"> </span><span class="s2">"🇦🇫"</span><span class="w">
                    </span><span class="p">},</span><span class="w">
                    </span><span class="err">...</span><span class="w">
                </span><span class="p">}</span><span class="w">
            </span><span class="p">},</span><span class="w">
            </span><span class="nl">"shopper"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                </span><span class="nl">"type"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"first_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Test"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"last_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Name"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"phone"</span><span class="p">:</span><span class="w"> </span><span class="s2">"111111111"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"email"</span><span class="p">:</span><span class="w"> </span><span class="s2">"test@test.com"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"webauthn"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
                </span><span class="nl">"otp"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                </span><span class="nl">"otp_id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"92376"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"country_code"</span><span class="p">:</span><span class="w"> </span><span class="s2">"94"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"currency"</span><span class="p">:</span><span class="w"> </span><span class="s2">"EUR"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"verified"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"language"</span><span class="p">:</span><span class="w"> </span><span class="s2">"en"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"billing_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                </span><span class="nl">"shipping_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                </span><span class="nl">"payment_method_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                </span><span class="nl">"created_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-07-26T09:10:13.000000Z"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"updated_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-07-26T09:10:13.000000Z"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"addresses"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
                    </span><span class="p">{</span><span class="w">
                        </span><span class="nl">"1"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                            </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"number"</span><span class="p">:</span><span class="w"> </span><span class="s2">"34"</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"street"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Churchgate"</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"street2"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Lanum Street"</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"city"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Lundhaiana"</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"province"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Western"</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"postcode"</span><span class="p">:</span><span class="w"> </span><span class="s2">"7732"</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sri Lanka"</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Ruwan"</span><span class="w">
                        </span><span class="p">}</span><span class="w">
                    </span><span class="p">},</span><span class="w">
                    </span><span class="p">{</span><span class="w">
                        </span><span class="nl">"2"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                            </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"number"</span><span class="p">:</span><span class="w"> </span><span class="s2">"20"</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"street"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Panamas Bradah"</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"street2"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"city"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Parnamas City"</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"province"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Northen"</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"postcode"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2282"</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"India"</span><span class="p">,</span><span class="w">
                            </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Ruwan"</span><span class="w">
                        </span><span class="p">}</span><span class="w">
                    </span><span class="p">}</span><span class="w">
                </span><span class="p">]</span><span class="w">
            </span><span class="p">}</span><span class="w">
       </span><span class="p">},</span><span class="w">
       </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
       </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
       </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
   </span><span class="p">}</span><span class="w">

</span></code></pre></div><h1 id='shopper'>Shopper</h1><h2 id='get-shopper'>Get Shopper</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">--request</span> GET <span class="s1">'https://v3-shopper-api.adup.io/api/v1/shopper?phone_number=714879796&amp;country_code=00'</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
    </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
    </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="nl">"webauthn"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="nl">"verified"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"saved"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
    </span><span class="p">},</span><span class="w">
    </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div>
<p>Call this endpoint as user type the phone number</p>

<aside class="warning">Always have a timeout before calling this endpoint when user type the phone number, You may hit the API throttling limits if you call endpoint on each keystroke</aside>
<h3 id='method-2'>Method</h3>
<p><code>Method: GET</code></p>
<h3 id='endpoint-2'>Endpoint</h3>
<p><code>https://v3-shopper-api.adup.io/api/v1/shopper</code></p>
<h3 id='query-parameters-2'>Query Parameters</h3>
<table><thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Required</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>phone_number</td>
<td>int</td>
<td>Yes</td>
<td>Phone number without country code</td>
</tr>
<tr>
<td>country_code</td>
<td>int</td>
<td>Yes</td>
<td>Country code without leading plus (+) or zeroes (0)</td>
</tr>
</tbody></table>
<h2 id='create-shopper'>Create Shopper</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">--request</span> POST <span class="s1">'https://v3-shopper-api.adup.io/api/v1/shopper'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'first_name="Sanjaya"'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'last_name="Senevirathne"'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'phone_number="714879796d"'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'country_code="00"'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'email="sanjaya@yopmail.com"'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'shipping_address="{\"house_number\":\"ewwer\",\"street\": \"street\",\"street2\":\"ddeeaw\",\"city\":\"yyt\",\"province\":\"province\",\"postcode\":\"postcode\",\"country\":\"Sri Lanka\"}"'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'billing_address="{\"house_number\":\"ksmeijjs\",\"street\": \"street\",\"street2\":\"ddeeaw\",\"city\":\"yyt\",\"province\":\"province\",\"postcode\":\"postcode\",\"country\":\"Sri Lanka\"}"'</span> <span class="se">\</span>

</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
    </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
    </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">8</span><span class="p">,</span><span class="w">
        </span><span class="nl">"first_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sanjaya"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"last_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Senevirathne"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"type"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sanjaya Senevirathne"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"phone"</span><span class="p">:</span><span class="w"> </span><span class="s2">"714879796d"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"email"</span><span class="p">:</span><span class="w"> </span><span class="s2">"sanjaya@yopmail.com"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"webauthn"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="nl">"otp"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="nl">"otp_id"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
        </span><span class="nl">"country_code"</span><span class="p">:</span><span class="w"> </span><span class="s2">"00"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"currency"</span><span class="p">:</span><span class="w"> </span><span class="s2">"usd"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"verified"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"language"</span><span class="p">:</span><span class="w"> </span><span class="s2">"en"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"billing_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
        </span><span class="nl">"shipping_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
        </span><span class="nl">"payment_method_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
        </span><span class="nl">"created_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-08-01T05:41:41.000000Z"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"updated_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-08-01T05:45:04.000000Z"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"addresses"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
            </span><span class="p">{</span><span class="w">
                </span><span class="nl">"1"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                    </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"number"</span><span class="p">:</span><span class="w"> </span><span class="s2">"ewwer"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"street"</span><span class="p">:</span><span class="w"> </span><span class="s2">"street"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"street2"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"city"</span><span class="p">:</span><span class="w"> </span><span class="s2">"yyt"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"province"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"postcode"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sri Lanka"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Ruwan"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"latitude"</span><span class="p">:</span><span class="w"> </span><span class="s2">"3213123"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"longitude"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2122292"</span><span class="w">
                </span><span class="p">}</span><span class="w">
            </span><span class="p">}</span><span class="w">
        </span><span class="p">]</span><span class="w">
    </span><span class="p">},</span><span class="w">
    </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div>
<p>Call this endpoint when you want to create a new shopper</p>

<aside class="notice">
   In the response you will receive an api_key which you can use for the Authorization Bearer Token to communicate with the API as the registered shopper
</aside>
<h3 id='method-3'>Method</h3>
<p><code>Method: POST</code></p>
<h3 id='endpoint-3'>Endpoint</h3>
<p><code>https://v3-shopper-api.adup.io/api/v1/shopper/</code></p>
<h3 id='authorization'>Authorization</h3>
<p>Type Bearer Token</p>
<h3 id='query-parameters-3'>Query Parameters</h3>
<table><thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Required</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>first_name</td>
<td>string</td>
<td>Yes</td>
<td>Shopper&#39;s last name</td>
</tr>
<tr>
<td>last_name</td>
<td>int</td>
<td>Yes</td>
<td>Shopper&#39;s first name</td>
</tr>
<tr>
<td>phone_number</td>
<td>int</td>
<td>Yes</td>
<td>Phone number without country code</td>
</tr>
<tr>
<td>country_code</td>
<td>int</td>
<td>Yes</td>
<td>Country code without leading plus (+) or zeroes (0)</td>
</tr>
<tr>
<td>email</td>
<td>init</td>
<td>Yes</td>
<td>Shopper&#39;s email address</td>
</tr>
<tr>
<td>shipping_address</td>
<td>json</td>
<td>Yes</td>
<td>Shopper&#39;s shipping address</td>
</tr>
<tr>
<td>billing_address</td>
<td>json</td>
<td>No</td>
<td>Shopper&#39;s billing address (if not specified, shipping address will be used for the billing address as well)</td>
</tr>
</tbody></table>

<p><strong>Address json object should follow the pattern given below</strong>
- nickname field will be autogenereted if not specified
- all fields except nickname &amp; street2 are mandatory</p>

<p><code>
{
    &quot;nickname&quot;: &quot;Address Nickname&quot;,
    &quot;house_number&quot;:&quot;No.128&quot;,
    &quot;street&quot;: &quot;Main Street&quot;,
    &quot;street2&quot;: &quot;Wallawaya Road&quot;,
    &quot;city&quot;: &quot;Buttala&quot;,
    &quot;province&quot;: &quot;Uva&quot;,
    &quot;postcode&quot;: &quot;0092&quot;,
    &quot;country&quot;: &quot;Sri Lanka&quot;,
    &quot;latitude&quot;: &quot;3399223&quot;,
    &quot;longitude&quot;: &quot;-033323&quot;
}
</code></p>
<h2 id='edit-shopper'>Edit Shopper</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">--request</span> PATCH <span class="s1">'https://v3-shopper-api.adup.io/api/v1/shopper/api/v1/shopper?first_name=Sanjaya&amp;last_name=Senevirathne&amp;email=sanjaya@yopmail.com&amp;last_used_shipping_address_id=1&amp;last_used_billing_address_id=1'</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
    </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
    </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">14</span><span class="p">,</span><span class="w">
        </span><span class="nl">"first_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sanjaya"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"last_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Senevirathne"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"type"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"phone"</span><span class="p">:</span><span class="w"> </span><span class="s2">"0714879796d"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"email"</span><span class="p">:</span><span class="w"> </span><span class="s2">"sanjaya@yopmail.com"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"webauthn"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="nl">"otp"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
        </span><span class="nl">"otp_id"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
        </span><span class="nl">"country_code"</span><span class="p">:</span><span class="w"> </span><span class="s2">"00"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"currency"</span><span class="p">:</span><span class="w"> </span><span class="s2">"usd"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"verified"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"language"</span><span class="p">:</span><span class="w"> </span><span class="s2">"en"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"billing_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
        </span><span class="nl">"shipping_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
        </span><span class="nl">"payment_method_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
        </span><span class="nl">"created_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-08-02T05:02:19.000000Z"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"updated_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-08-02T05:07:00.000000Z"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"addresses"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
            </span><span class="p">{</span><span class="w">
                </span><span class="nl">"5"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                    </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">5</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"number"</span><span class="p">:</span><span class="w"> </span><span class="s2">"28"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"street"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Lipten"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"street2"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Wallawaya Road"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"city"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Buttala"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"province"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Uva"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"postcode"</span><span class="p">:</span><span class="w"> </span><span class="s2">"67892"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sri Lanka"</span><span class="p">,</span><span class="w">
                    </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Kamal"</span><span class="w">
                </span><span class="p">}</span><span class="w">
            </span><span class="p">}</span><span class="w">
        </span><span class="p">]</span><span class="w">
    </span><span class="p">},</span><span class="w">
    </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div>
<p>Call this endpoint when you want edit details of an exisitng shopper (except for editing addresses)</p>

<aside class="notice">
If you want to edit/delete shopper addresses there's a separate endpoint for address manipulation
</aside>
<h3 id='method-4'>Method</h3>
<p><code>Method: PATCH</code></p>
<h3 id='endpoint-4'>Endpoint</h3>
<p><code>https://v3-shopper-api.adup.io/api/v1/shopper?first_name={{first_name}}&amp;last_name={{last_name}}&amp;email={{email}}&amp;last_used_shipping_address_id={{shipping_addres_id}}&amp;last_used_billing_address_id={{billing_address_id}}</code></p>
<h3 id='authorization-2'>Authorization</h3>
<p>Type Bearer Token</p>
<h3 id='query-parameters-4'>Query Parameters</h3>
<table><thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Required</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>first_name</td>
<td>json</td>
<td>Yes</td>
<td>Add your shipping address</td>
</tr>
<tr>
<td>last_name</td>
<td>json</td>
<td>No</td>
<td>Add your billing address</td>
</tr>
<tr>
<td>email</td>
<td>init</td>
<td>Yes</td>
<td>Add email</td>
</tr>
<tr>
<td>shipping_addres_id</td>
<td>string</td>
<td>Yes</td>
<td>Shipping address ID</td>
</tr>
<tr>
<td>billing_address_id</td>
<td>string</td>
<td>Yes</td>
<td>Shipping address ID</td>
</tr>
</tbody></table>
<h2 id='request-shopper-otp'>Request Shopper OTP</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">--request</span> GET <span class="s1">'https://v3-shopper-api.adup.io/api/v1/shopper/otp?phone_number=714879796&amp;country_code=00'</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
    </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="nl">"otp"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
        </span><span class="nl">"otp_id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"fad17755-a2e6-49c1-b52c-029f631d7e9a"</span><span class="w">
    </span><span class="p">},</span><span class="w">
    </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
    </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div>
<p>Call this endpoint when you want to send an OTP to verify a shopper </p>

<aside class="notice">
   SMS provider currently only works in European region, but you will receive an otp_id in response for any valid phone number
</aside>
<h3 id='method-5'>Method</h3>
<p><code>Method: GET</code></p>
<h3 id='endpoint-5'>Endpoint</h3>
<p><code>https://v3-shopper-api.adup.io/api/v1/shopper/otp</code></p>
<h3 id='query-parameters-5'>Query Parameters</h3>
<table><thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Required</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>phone_number</td>
<td>int</td>
<td>Yes</td>
<td>Phone number without country code</td>
</tr>
<tr>
<td>country_code</td>
<td>int</td>
<td>Yes</td>
<td>Country code without leading plus (+) or zeroes (0)</td>
</tr>
</tbody></table>
<h2 id='verify-shopper-otp'>Verify Shopper OTP</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">--request</span> POST <span class="s1">'https://v3-shopper-api.adup.io/api/v1/shopper/otp'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'otp_id="0f49c246-067b-4ff1-8784-59953f5fbb7f"'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'otp_code="3323"'</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
    </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
    </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="nl">"shopper"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
            </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"first_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Test"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"last_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Name"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"type"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Test Name"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"phone"</span><span class="p">:</span><span class="w"> </span><span class="s2">"111111111"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"email"</span><span class="p">:</span><span class="w"> </span><span class="s2">"test@test.com"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"webauthn"</span><span class="p">:</span><span class="w"> </span><span class="mi">0</span><span class="p">,</span><span class="w">
            </span><span class="nl">"otp"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"otp_id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"92080"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"country_code"</span><span class="p">:</span><span class="w"> </span><span class="s2">"94"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"currency"</span><span class="p">:</span><span class="w"> </span><span class="s2">"EUR"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"verified"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"language"</span><span class="p">:</span><span class="w"> </span><span class="s2">"en"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"billing_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"shipping_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"payment_method_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"created_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-08-01T10:23:03.000000Z"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"updated_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-08-01T10:23:03.000000Z"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"addresses"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
                </span><span class="p">{</span><span class="w">
                    </span><span class="nl">"2"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                        </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"number"</span><span class="p">:</span><span class="w"> </span><span class="s2">"20"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"street"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Panamas Bradah"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"street2"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Loginor"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"city"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Parnamas City"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"province"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Northen"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"postcode"</span><span class="p">:</span><span class="w"> </span><span class="s2">"7788"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"India"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Ruwan"</span><span class="w">
                    </span><span class="p">}</span><span class="w">
                </span><span class="p">}</span><span class="w">
            </span><span class="p">]</span><span class="w">
        </span><span class="p">},</span><span class="w">
        </span><span class="nl">"api_key"</span><span class="p">:</span><span class="w"> </span><span class="s2">"26|oFK9ZonqiYisZrEZ5Rx9x9M5zyCHcdd1NnNqK4l1"</span><span class="w">
    </span><span class="p">},</span><span class="w">
    </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
</span><span class="p">}</span><span class="w">

</span></code></pre></div>
<p>Call this endpoint when user type the otp code and you are ready to verify</p>

<aside class="notice">
Verification attempts are limited by the API, expect an error if you try to verify an invalid OTP multiple times
</aside>

<aside class="notice">
   In the response you will receive an api_key which you can use for the Authorization Bearer Token to communicate with the API as the verified shopper
</aside>
<h3 id='method-6'>Method</h3>
<p><code>Method: POST</code></p>
<h3 id='endpoint-6'>Endpoint</h3>
<p>https://v3-shopper-api.adup.io/api/v1/shopper/otp</p>
<h3 id='query-parameters-6'>Query Parameters</h3>
<table><thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Required</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>otp_id</td>
<td>string</td>
<td>Yes</td>
<td>OTP ID you received when the OTP was sent</td>
</tr>
<tr>
<td>otp_code</td>
<td>init</td>
<td>Yes</td>
<td>Verification code user entered</td>
</tr>
</tbody></table>
<h1 id='address-blocks'>Address Blocks</h1><div class="highlight"><pre class="highlight plaintext"><code>   {
        "nickname": "Address Nickname",
        "house_number":"No.128",
        "street": "Main Street",
        "street2": "Wallawaya Road",
        "city": "Buttala",
        "province": "Uva",
        "postcode": "0092",
        "country": "Sri Lanka",
        "latitude": "3399223",
        "longitude": "-033323"
    }
</code></pre></div>
<p><strong>Address json object used in all endpoints listed here should follow the pattern given below</strong>
- nickname field will be autogenereted if not specified
- all fields except nickname &amp; street2 are mandatory</p>
<h2 id='create-address-block'>Create Address Block</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">--request</span> POST <span class="s1">'https://v3-shopper-api.adup.io/api/v1/shopper/address'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'address="{\"nickname\": \"Address Nickname\",\"house_number\":\"128\",\"street\": \"Main Street\",\"street2\": \"Wallawaya Road\", \"city\": \"Buttala\",\"province\": \"Uva\",\"postcode\": \"0092\",        \"country\": \"Sri Lanka\",\"latitude\": \"3399223\",       \"longitude\": \"-033323\"}"'</span> <span class="se">\</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
    </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
    </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="nl">"address_id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"addresses"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
            </span><span class="p">{</span><span class="w">
                </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
                </span><span class="nl">"shopper_id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sanjayar"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"address"</span><span class="p">:</span><span class="w"> </span><span class="s2">"{</span><span class="se">\"</span><span class="s2">house_number</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">No.12w42</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">street</span><span class="se">\"</span><span class="s2">: </span><span class="se">\"</span><span class="s2">street</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">street2</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">street2</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">city</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">yyt</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">province</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">state</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">postcode</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">zip</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">country</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">Sri Lanka</span><span class="se">\"</span><span class="s2">}"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sri Lanka"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"created_at"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
                </span><span class="nl">"updated_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-07-28T11:47:34.000000Z"</span><span class="w">
            </span><span class="p">},</span><span class="w">
            </span><span class="p">{</span><span class="w">
                </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">4</span><span class="p">,</span><span class="w">
                </span><span class="nl">"shopper_id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sanjaya"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"address"</span><span class="p">:</span><span class="w"> </span><span class="s2">"{</span><span class="se">\"</span><span class="s2">house_number</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">04</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">street</span><span class="se">\"</span><span class="s2">: </span><span class="se">\"</span><span class="s2">alley Farms Court</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">street2</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">Manthon Aves,</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">city</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">London</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">province</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">Colven Parks</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">postcode</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">21</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">country</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">United Kingdom</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">latitude</span><span class="se">\"</span><span class="s2">: </span><span class="se">\"</span><span class="s2">21312</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">longitude</span><span class="se">\"</span><span class="s2">: </span><span class="se">\"</span><span class="s2">23242</span><span class="se">\"</span><span class="s2">}"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sri Lanka"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"created_at"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
                </span><span class="nl">"updated_at"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
            </span><span class="p">},</span><span class="w">
            </span><span class="p">{</span><span class="w">
                </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">5</span><span class="p">,</span><span class="w">
                </span><span class="nl">"shopper_id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Test Home"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"address"</span><span class="p">:</span><span class="w"> </span><span class="s2">"{</span><span class="se">\"</span><span class="s2">house_number</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">1233</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">street</span><span class="se">\"</span><span class="s2">: </span><span class="se">\"</span><span class="s2">Flower Road</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">street2</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">Pahala Mawatha</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">city</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">Colombo</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">province</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">Western</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">postcode</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">13322</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">country</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">Sri Lanka</span><span class="se">\"</span><span class="s2">}"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sri Lanka"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"created_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-07-28T11:08:20.000000Z"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"updated_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-07-28T11:08:20.000000Z"</span><span class="w">
            </span><span class="p">},</span><span class="w">
            </span><span class="p">{</span><span class="w">
                </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">6</span><span class="p">,</span><span class="w">
                </span><span class="nl">"shopper_id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"ok"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"address"</span><span class="p">:</span><span class="w"> </span><span class="s2">"{</span><span class="se">\"</span><span class="s2">house_number</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">No.69</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">street</span><span class="se">\"</span><span class="s2">: </span><span class="se">\"</span><span class="s2">XOXO</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">street2</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">street2</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">city</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">yyt</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">province</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">state</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">postcode</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">zip</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">country</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">Sri Lanka</span><span class="se">\"</span><span class="s2">}"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"ok"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"created_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-07-28T11:10:30.000000Z"</span><span class="p">,</span><span class="w">
                </span><span class="nl">"updated_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-07-28T11:10:30.000000Z"</span><span class="w">
            </span><span class="p">}</span><span class="w">
        </span><span class="p">]</span><span class="w">
    </span><span class="p">},</span><span class="w">
    </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div><h3 id='method-7'>Method</h3>
<p><code>Method: POST</code></p>
<h3 id='endpoint-7'>Endpoint</h3>
<p><code>https://v3-shopper-api.adup.io/api/v1/shopper/address</code></p>
<h3 id='authorization-3'>Authorization</h3>
<p>Type: Bearer Token</p>
<h3 id='query-parameters-7'>Query Parameters</h3>
<table><thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Required</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>address</td>
<td>json</td>
<td>Yes</td>
<td>Unique json address string</td>
</tr>
</tbody></table>
<h2 id='edit-address-block'>Edit Address Block</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">-g</span> <span class="nt">--request</span> PATCH <span class="s1">'https://v3-shopper-api.adup.io/api/v1/shopper/address/5?address={"nickname": "Address Nickname","house_number":"128","street": "Main Street","street2": "Wallawaya Road", "city": "Buttala","province": "Uva","postcode": "0092","country": "Sri Lanka","latitude": "3399223","longitude": "-033323"}'</span> <span class="se">\</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
    </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
    </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Address Nickname"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"house_number"</span><span class="p">:</span><span class="w"> </span><span class="s2">"123"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"street"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sub Street"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"street2"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Suyara Road"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"city"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Buttala"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"province"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Uva"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"postcode"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1242"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"USA"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"latitude"</span><span class="p">:</span><span class="w"> </span><span class="s2">"3399223"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"longitude"</span><span class="p">:</span><span class="w"> </span><span class="s2">"-033323"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">5</span><span class="w">
    </span><span class="p">},</span><span class="w">
    </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div><h3 id='method-8'>Method</h3>
<p><code>Method: PATCH</code></p>
<h3 id='endpoint-8'>Endpoint</h3>
<p><code>https://v3-shopper-api.adup.io/api/v1/shopper/address/{{address_id}}</code></p>
<h3 id='authorization-4'>Authorization</h3>
<p>Type: Bearer Token</p>
<h3 id='query-parameters-8'>Query Parameters</h3>
<table><thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Required</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>address</td>
<td>json</td>
<td>Yes</td>
<td>Unique Json address string</td>
</tr>
</tbody></table>
<h2 id='delete-address-block'>Delete Address Block</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">--request</span> DELETE <span class="s1">'https://v3-shopper-api.adup.io/api/v1/shopper/address/50'</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
    </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="nl">"is_deleted"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="w">
    </span><span class="p">},</span><span class="w">
    </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
    </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div><h3 id='method-9'>Method</h3>
<p><code>Method: DELETE</code></p>
<h3 id='endpoint-9'>Endpoint</h3>
<p><code>https://v3-shopper-api.adup.io/api/v1/shopper/{{address_id}}</code></p>
<h3 id='authorization-5'>Authorization</h3>
<p>Type: Bearer Token</p>
<h3 id='query-segments'>Query Segments</h3>
<table><thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Required</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>address_id</td>
<td>string</td>
<td>Yes</td>
<td>ID of the address to be deleted</td>
</tr>
</tbody></table>
<h1 id='webauthn'>WebAuthn</h1><h2 id='registration-request'>Registration Request</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">--request</span> GET <span class="s1">'https://v3-shopper-api.adup.io/api/v1/web_authn/register'</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
    </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
    </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="nl">"challenge"</span><span class="p">:</span><span class="w"> </span><span class="s2">"{</span><span class="se">\"</span><span class="s2">publicKey</span><span class="se">\"</span><span class="s2">:{</span><span class="se">\"</span><span class="s2">challenge</span><span class="se">\"</span><span class="s2">:[13,218,57,160,83,151,224,37,185,66,97,108,95,16,104,242],</span><span class="se">\"</span><span class="s2">user</span><span class="se">\"</span><span class="s2">:{</span><span class="se">\"</span><span class="s2">displayName</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">111111111</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">name</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">111111111</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">id</span><span class="se">\"</span><span class="s2">:[48,48,48,49,101,100,52,55,56,48,98,99,51,54,97,54,49,51,51,101,57,52,100,102,56,48,99,98,48,101,54,97]},</span><span class="se">\"</span><span class="s2">rp</span><span class="se">\"</span><span class="s2">:{</span><span class="se">\"</span><span class="s2">id</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">v3-shopper-dev.adup.io</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">name</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">v3-shopper-dev.adup.io</span><span class="se">\"</span><span class="s2">},</span><span class="se">\"</span><span class="s2">pubKeyCredParams</span><span class="se">\"</span><span class="s2">:[{</span><span class="se">\"</span><span class="s2">alg</span><span class="se">\"</span><span class="s2">:-7,</span><span class="se">\"</span><span class="s2">type</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">public-key</span><span class="se">\"</span><span class="s2">},{</span><span class="se">\"</span><span class="s2">alg</span><span class="se">\"</span><span class="s2">:-257,</span><span class="se">\"</span><span class="s2">type</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">public-key</span><span class="se">\"</span><span class="s2">}],</span><span class="se">\"</span><span class="s2">authenticatorSelection</span><span class="se">\"</span><span class="s2">:{</span><span class="se">\"</span><span class="s2">requireResidentKey</span><span class="se">\"</span><span class="s2">:false,</span><span class="se">\"</span><span class="s2">userVerification</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">discouraged</span><span class="se">\"</span><span class="s2">},</span><span class="se">\"</span><span class="s2">attestation</span><span class="se">\"</span><span class="s2">:null,</span><span class="se">\"</span><span class="s2">timeout</span><span class="se">\"</span><span class="s2">:60000,</span><span class="se">\"</span><span class="s2">excludeCredentials</span><span class="se">\"</span><span class="s2">:[],</span><span class="se">\"</span><span class="s2">extensions</span><span class="se">\"</span><span class="s2">:{</span><span class="se">\"</span><span class="s2">exts</span><span class="se">\"</span><span class="s2">:true}},</span><span class="se">\"</span><span class="s2">b64challenge</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">Ddo5oFOX4CW5QmFsXxBo8g</span><span class="se">\"</span><span class="s2">}"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"challenge_id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"chal_113"</span><span class="w">
    </span><span class="p">},</span><span class="w">
    </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div><h3 id='endpoint-10'>Endpoint</h3>
<p>https://v3-shopper-api.adup.io/api/v1/web_authn/register</p>
<h3 id='method-10'>Method</h3>
<p><code>Method: GET</code></p>
<h3 id='authorization-6'>Authorization</h3>
<p>Type: Bearer Token</p>
<h2 id='registration-verification'>Registration Verification</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">--request</span> POST <span class="s1">'https://v3-shopper-api.adup.io/api/v1/web_authn/register'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'challenge_data="22"'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'challenge_id="22"'</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
    </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
    </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
        </span><span class="nl">"shopper"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
            </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"first_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Test"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"last_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Name"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"type"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Test Name"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"phone"</span><span class="p">:</span><span class="w"> </span><span class="s2">"111111111"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"email"</span><span class="p">:</span><span class="w"> </span><span class="s2">"test@test.com"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"webauthn"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"otp"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"otp_id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"27402"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"country_code"</span><span class="p">:</span><span class="w"> </span><span class="s2">"94"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"currency"</span><span class="p">:</span><span class="w"> </span><span class="s2">"EUR"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"verified"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"language"</span><span class="p">:</span><span class="w"> </span><span class="s2">"en"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"billing_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"shipping_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"payment_method_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"created_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-08-02T10:56:21.000000Z"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"updated_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-08-02T13:03:17.000000Z"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"addresses"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
                </span><span class="p">{</span><span class="w">
                    </span><span class="nl">"1"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                        </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"number"</span><span class="p">:</span><span class="w"> </span><span class="s2">"34"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"street"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Churchgate"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"street2"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Lanum Street"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"city"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Lundhaiana"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"province"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Western"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"postcode"</span><span class="p">:</span><span class="w"> </span><span class="s2">"7732"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sri Lanka"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Ruwan"</span><span class="w">
                    </span><span class="p">}</span><span class="w">
                </span><span class="p">},</span><span class="w">
                </span><span class="p">{</span><span class="w">
                    </span><span class="nl">"2"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                        </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"number"</span><span class="p">:</span><span class="w"> </span><span class="s2">"20"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"street"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Panamas Bradah"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"street2"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Loginor"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"city"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Parnamas City"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"province"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Northen"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"postcode"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2282"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"India"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Ruwan"</span><span class="w">
                    </span><span class="p">}</span><span class="w">
                </span><span class="p">}</span><span class="w">
            </span><span class="p">]</span><span class="w">
        </span><span class="p">}</span><span class="w">
    </span><span class="p">},</span><span class="w">
    </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div><h3 id='endpoint-11'>Endpoint</h3>
<p>https://v3-shopper-api.adup.io/api/v1/web_authn/register</p>
<h3 id='method-11'>Method</h3>
<p><code>Method: POST</code></p>
<h3 id='authorization-7'>Authorization</h3>
<p>Type: Bearer Token</p>
<h3 id='query-parameters-9'>Query Parameters</h3>
<table><thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Required</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>challenge_data</td>
<td>text</td>
<td>Yes</td>
<td>The challenge byte array of webauthn client</td>
</tr>
<tr>
<td>challenge_id</td>
<td>init</td>
<td>Yes</td>
<td>The challenge ID you received on registration request</td>
</tr>
</tbody></table>
<h2 id='login-request'>Login Request</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">--request</span> GET <span class="s1">'https://v3-shopper-api.adup.io/api/v1/web_authn/login?phone_number=76577164389&amp;country_code=94'</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
    </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="nl">"challenge"</span><span class="p">:</span><span class="w"> </span><span class="s2">"{</span><span class="se">\"</span><span class="s2">publicKey</span><span class="se">\"</span><span class="s2">:{</span><span class="se">\"</span><span class="s2">challenge</span><span class="se">\"</span><span class="s2">:[129,21,36,250,100,163,18,215,122,33,244,17,175,142,3,171],</span><span class="se">\"</span><span class="s2">user</span><span class="se">\"</span><span class="s2">:{</span><span class="se">\"</span><span class="s2">displayName</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">71843081057</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">name</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">71843081057</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">id</span><span class="se">\"</span><span class="s2">:[101,98,55,56,52,101,52,55,98,53,99,51,48,100,57,54,102,101,102,57,97,52,53,98,97,98,51,53,50,51,56,50]},</span><span class="se">\"</span><span class="s2">rp</span><span class="se">\"</span><span class="s2">:{</span><span class="se">\"</span><span class="s2">id</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">v3-shopper-api.adup.io</span><span class="se">\"</span><span class="s2">,</span><span class="se">\"</span><span class="s2">name</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">v3-shopper-api.adup.io</span><span class="se">\"</span><span class="s2">},</span><span class="se">\"</span><span class="s2">pubKeyCredParams</span><span class="se">\"</span><span class="s2">:[{</span><span class="se">\"</span><span class="s2">alg</span><span class="se">\"</span><span class="s2">:-7,</span><span class="se">\"</span><span class="s2">type</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">public-key</span><span class="se">\"</span><span class="s2">},{</span><span class="se">\"</span><span class="s2">alg</span><span class="se">\"</span><span class="s2">:-257,</span><span class="se">\"</span><span class="s2">type</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">public-key</span><span class="se">\"</span><span class="s2">}],</span><span class="se">\"</span><span class="s2">authenticatorSelection</span><span class="se">\"</span><span class="s2">:{</span><span class="se">\"</span><span class="s2">requireResidentKey</span><span class="se">\"</span><span class="s2">:false,</span><span class="se">\"</span><span class="s2">userVerification</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">discouraged</span><span class="se">\"</span><span class="s2">},</span><span class="se">\"</span><span class="s2">attestation</span><span class="se">\"</span><span class="s2">:null,</span><span class="se">\"</span><span class="s2">timeout</span><span class="se">\"</span><span class="s2">:60000,</span><span class="se">\"</span><span class="s2">excludeCredentials</span><span class="se">\"</span><span class="s2">:[],</span><span class="se">\"</span><span class="s2">extensions</span><span class="se">\"</span><span class="s2">:{</span><span class="se">\"</span><span class="s2">exts</span><span class="se">\"</span><span class="s2">:true}},</span><span class="se">\"</span><span class="s2">b64challenge</span><span class="se">\"</span><span class="s2">:</span><span class="se">\"</span><span class="s2">gRUk-mSjEtd6IfQRr44Dqw</span><span class="se">\"</span><span class="s2">}"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"challenge_id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"chal_66"</span><span class="w">
    </span><span class="p">},</span><span class="w">
    </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
    </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div><h3 id='endpoint-12'>Endpoint</h3>
<p>https://v3-shopper-api.adup.io/api/v1/web_authn/login?phone_number={{phone_number}}&amp;country_code={{country_code}}</p>
<h3 id='method-12'>Method</h3>
<p><code>Method: GET</code></p>
<h3 id='authorization-8'>Authorization</h3>
<p>Type: Bearer Token</p>
<h3 id='query-parameters-10'>Query Parameters</h3>
<table><thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Required</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>phone_number</td>
<td>int</td>
<td>Yes</td>
<td>Phone number without country code</td>
</tr>
<tr>
<td>country_code</td>
<td>int</td>
<td>Yes</td>
<td>Country code without leading plus (+) or zeroes (0)</td>
</tr>
</tbody></table>
<h2 id='login-verification'>Login Verification</h2><div class="highlight"><pre class="highlight shell tab-shell"><code>curl <span class="nt">--location</span> <span class="nt">--request</span> POST <span class="s1">'https://v3-shopper-api.adup.io/api/v1/web_authn/login'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'challenge_data="22"'</span> <span class="se">\</span>
<span class="nt">--form</span> <span class="s1">'challenge_id="22"'</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
    </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
    </span><span class="nl">"result"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
        </span><span class="nl">"success"</span><span class="p">:</span><span class="w"> </span><span class="kc">true</span><span class="p">,</span><span class="w">
        </span><span class="nl">"shopper"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
            </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"first_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Test"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"last_name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Name"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"type"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Test Name"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"phone"</span><span class="p">:</span><span class="w"> </span><span class="s2">"111111111"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"email"</span><span class="p">:</span><span class="w"> </span><span class="s2">"test@test.com"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"webauthn"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"otp"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"otp_id"</span><span class="p">:</span><span class="w"> </span><span class="s2">"27402"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"country_code"</span><span class="p">:</span><span class="w"> </span><span class="s2">"94"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"currency"</span><span class="p">:</span><span class="w"> </span><span class="s2">"EUR"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"verified"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"language"</span><span class="p">:</span><span class="w"> </span><span class="s2">"en"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"billing_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"shipping_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"payment_method_last_used"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
            </span><span class="nl">"created_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-08-02T10:56:21.000000Z"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"updated_at"</span><span class="p">:</span><span class="w"> </span><span class="s2">"2022-08-02T13:03:17.000000Z"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"addresses"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
                </span><span class="p">{</span><span class="w">
                    </span><span class="nl">"1"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
                        </span><span class="nl">"id"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"number"</span><span class="p">:</span><span class="w"> </span><span class="s2">"34"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"street"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Churchgate"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"street2"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Lanum Street"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"city"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Lundhaiana"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"province"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Western"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"postcode"</span><span class="p">:</span><span class="w"> </span><span class="s2">"7732"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"country"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Sri Lanka"</span><span class="p">,</span><span class="w">
                        </span><span class="nl">"nickname"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Ruwan"</span><span class="w">
                    </span><span class="p">}</span><span class="w">
                </span><span class="p">}</span><span class="w">
            </span><span class="p">]</span><span class="w">
        </span><span class="p">},</span><span class="w">
        </span><span class="nl">"api_key"</span><span class="p">:</span><span class="w"> </span><span class="s2">"79|XOIEoSIi0jYDfyt6UOOBUxDykbR4tOimAC09s4P8"</span><span class="w">
    </span><span class="p">},</span><span class="w">
    </span><span class="nl">"errors"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"messages"</span><span class="p">:</span><span class="w"> </span><span class="p">[],</span><span class="w">
    </span><span class="nl">"result_info"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div>
<aside class="notice">
   In the response you will receive an api_key which you can use for the Authorization Bearer Token to communicate with the API as the logged in shopper
</aside>
<h3 id='endpoint-13'>Endpoint</h3>
<p>https://v3-shopper-api.adup.io/api/v1/web_authn/login</p>
<h3 id='method-13'>Method</h3>
<p><code>Method: POST</code></p>
<h3 id='authorization-9'>Authorization</h3>
<p>Type: Bearer Token</p>
<h3 id='query-parameters-11'>Query Parameters</h3>
<table><thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Required</th>
<th>Description</th>
</tr>
</thead><tbody>
<tr>
<td>challenge_data</td>
<td>text</td>
<td>Yes</td>
<td>The challenge byte array of webauthn client</td>
</tr>
<tr>
<td>challenge_id</td>
<td>init</td>
<td>Yes</td>
<td>The challenge ID you received on login request</td>
</tr>
</tbody></table>
<h2 id='test-environment'>Test Environment</h2><h3 id='url'>URL</h3>
<p><a href="https://v3-shopper-api.adup.io/test">WebAuthn Test Environment</a></p>
<h1 id='postman-collection'>Postman Collection</h1><h2 id='url-2'>URL</h2>
<p><a href="https://documenter.getpostman.com/view/3234215/UzQvtQet">Postman Collection</a></p>
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
