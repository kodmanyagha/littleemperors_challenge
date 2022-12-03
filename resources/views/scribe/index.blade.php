<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "https://challenge.host";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-3.37.2.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-3.37.2.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="city">
                    <a href="#city">City</a>
                </li>
                                    <ul id="tocify-subheader-city" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="city-GETapi-city">
                        <a href="#city-GETapi-city">Get cities</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="city-POSTapi-city">
                        <a href="#city-POSTapi-city">Create city</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="city-GETapi-city--id-">
                        <a href="#city-GETapi-city--id-">Get a city</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="city-PUTapi-city--id-">
                        <a href="#city-PUTapi-city--id-">Update a city</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="city-DELETEapi-city--id-">
                        <a href="#city-DELETEapi-city--id-">Delete a city</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-3" class="tocify-header">
                <li class="tocify-item level-1" data-unique="hotel">
                    <a href="#hotel">Hotel</a>
                </li>
                                    <ul id="tocify-subheader-hotel" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="hotel-GETapi-hotel">
                        <a href="#hotel-GETapi-hotel">Get hotel</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="hotel-POSTapi-hotel">
                        <a href="#hotel-POSTapi-hotel">Create hotel</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="hotel-GETapi-hotel--id-">
                        <a href="#hotel-GETapi-hotel--id-">Get a hotel</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="hotel-PUTapi-hotel--id-">
                        <a href="#hotel-PUTapi-hotel--id-">Update a hotel</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="hotel-DELETEapi-hotel--id-">
                        <a href="#hotel-DELETEapi-hotel--id-">Delete a hotel</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: December 3 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Challenge API documentation page.</p>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">https://challenge.host</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>Authenticate requests to this API's endpoints by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="city">City</h1>

    

            <h2 id="city-GETapi-city">Get cities</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-city">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://challenge.host/api/city" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://challenge.host/api/city"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-city">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 600
x-ratelimit-remaining: 599
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;test&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;izmir&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;aliquam&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;https://challenge.host/api/city?page=1&quot;,
        &quot;last&quot;: null,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;path&quot;: &quot;https://challenge.host/api/city&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 3
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-city" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-city"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-city"></code></pre>
</span>
<span id="execution-error-GETapi-city" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-city"></code></pre>
</span>
<form id="form-GETapi-city" data-method="GET"
      data-path="api/city"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-city', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-city"
                    onclick="tryItOut('GETapi-city');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-city"
                    onclick="cancelTryOut('GETapi-city');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-city" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/city</code></b>
        </p>
                <p>
            <label id="auth-GETapi-city" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-city"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="city-POSTapi-city">Create city</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-city">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://challenge.host/api/city" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"tcvkxxkjevbneutsurtldunkwswvdfopfchzeexlxachzxghesbxzlpqygznjrexareqhbwczxgzeboznwszukpfsdznogwfusmxdcsijlbicyrefxnmldrdyahmyfuttgrgwpptwixftmzbfmhqjzdsfmyuaryqlhurycescnxitehzwazdrdbvtnwluujftxydguwatvfpheorkrilxliwhksuvrhfywvpqljzcfchhyavgzlucnkhhdsyavelsxwlvqtusbejwyyvktemyeuisadypgdioeewonmwxdgaxwsaaiqrffccleaegqdlgiiamiixwrlkqlfosfioslokokdogxeliqtrrzyrsphwuwhnhmkjdzkzldmhgcrxdnaojiutsagxvazzhuqtgktlcobebemmjolldrylqorltblnnpowbdspyotquhplairbkxmvmeialudrjuuunaxynhaoqsbhmdzhcgsiemwygkhaabeoqsoanaypwxognxcuxxsonxnagevyfwfwzuzeycivamqjeqqksyyuwwxvqxbegtlefrhbipjyguc\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://challenge.host/api/city"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "tcvkxxkjevbneutsurtldunkwswvdfopfchzeexlxachzxghesbxzlpqygznjrexareqhbwczxgzeboznwszukpfsdznogwfusmxdcsijlbicyrefxnmldrdyahmyfuttgrgwpptwixftmzbfmhqjzdsfmyuaryqlhurycescnxitehzwazdrdbvtnwluujftxydguwatvfpheorkrilxliwhksuvrhfywvpqljzcfchhyavgzlucnkhhdsyavelsxwlvqtusbejwyyvktemyeuisadypgdioeewonmwxdgaxwsaaiqrffccleaegqdlgiiamiixwrlkqlfosfioslokokdogxeliqtrrzyrsphwuwhnhmkjdzkzldmhgcrxdnaojiutsagxvazzhuqtgktlcobebemmjolldrylqorltblnnpowbdspyotquhplairbkxmvmeialudrjuuunaxynhaoqsbhmdzhcgsiemwygkhaabeoqsoanaypwxognxcuxxsonxnagevyfwfwzuzeycivamqjeqqksyyuwwxvqxbegtlefrhbipjyguc"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-city">
</span>
<span id="execution-results-POSTapi-city" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-city"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-city"></code></pre>
</span>
<span id="execution-error-POSTapi-city" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-city"></code></pre>
</span>
<form id="form-POSTapi-city" data-method="POST"
      data-path="api/city"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-city', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-city"
                    onclick="tryItOut('POSTapi-city');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-city"
                    onclick="cancelTryOut('POSTapi-city');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-city" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/city</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-city" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-city"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-city"
               value="tcvkxxkjevbneutsurtldunkwswvdfopfchzeexlxachzxghesbxzlpqygznjrexareqhbwczxgzeboznwszukpfsdznogwfusmxdcsijlbicyrefxnmldrdyahmyfuttgrgwpptwixftmzbfmhqjzdsfmyuaryqlhurycescnxitehzwazdrdbvtnwluujftxydguwatvfpheorkrilxliwhksuvrhfywvpqljzcfchhyavgzlucnkhhdsyavelsxwlvqtusbejwyyvktemyeuisadypgdioeewonmwxdgaxwsaaiqrffccleaegqdlgiiamiixwrlkqlfosfioslokokdogxeliqtrrzyrsphwuwhnhmkjdzkzldmhgcrxdnaojiutsagxvazzhuqtgktlcobebemmjolldrylqorltblnnpowbdspyotquhplairbkxmvmeialudrjuuunaxynhaoqsbhmdzhcgsiemwygkhaabeoqsoanaypwxognxcuxxsonxnagevyfwfwzuzeycivamqjeqqksyyuwwxvqxbegtlefrhbipjyguc"
               data-component="body" hidden>
    <br>
<p>Must not be greater than  1000 characters.</p>
        </p>
        </form>

            <h2 id="city-GETapi-city--id-">Get a city</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-city--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://challenge.host/api/city/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://challenge.host/api/city/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-city--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 600
x-ratelimit-remaining: 598
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;test&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-city--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-city--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-city--id-"></code></pre>
</span>
<span id="execution-error-GETapi-city--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-city--id-"></code></pre>
</span>
<form id="form-GETapi-city--id-" data-method="GET"
      data-path="api/city/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-city--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-city--id-"
                    onclick="tryItOut('GETapi-city--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-city--id-"
                    onclick="cancelTryOut('GETapi-city--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-city--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/city/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-city--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-city--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-city--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the city.</p>
            </p>
                    </form>

            <h2 id="city-PUTapi-city--id-">Update a city</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-city--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://challenge.host/api/city/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://challenge.host/api/city/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-city--id-">
</span>
<span id="execution-results-PUTapi-city--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-city--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-city--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-city--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-city--id-"></code></pre>
</span>
<form id="form-PUTapi-city--id-" data-method="PUT"
      data-path="api/city/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-city--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-city--id-"
                    onclick="tryItOut('PUTapi-city--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-city--id-"
                    onclick="cancelTryOut('PUTapi-city--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-city--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/city/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/city/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-city--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-city--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-city--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the city.</p>
            </p>
                    </form>

            <h2 id="city-DELETEapi-city--id-">Delete a city</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-city--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://challenge.host/api/city/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://challenge.host/api/city/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-city--id-">
</span>
<span id="execution-results-DELETEapi-city--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-city--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-city--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-city--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-city--id-"></code></pre>
</span>
<form id="form-DELETEapi-city--id-" data-method="DELETE"
      data-path="api/city/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-city--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-city--id-"
                    onclick="tryItOut('DELETEapi-city--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-city--id-"
                    onclick="cancelTryOut('DELETEapi-city--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-city--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/city/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-city--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-city--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-city--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the city.</p>
            </p>
                    </form>

        <h1 id="hotel">Hotel</h1>

    

            <h2 id="hotel-GETapi-hotel">Get hotel</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-hotel">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://challenge.host/api/hotel" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://challenge.host/api/hotel"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-hotel">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 600
x-ratelimit-remaining: 597
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;test hotel&quot;,
            &quot;city&quot;: &quot;izmir&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;test hotel&quot;,
            &quot;city&quot;: &quot;izmir&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;test hotel&quot;,
            &quot;city&quot;: &quot;izmir&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;test hotel&quot;,
            &quot;city&quot;: &quot;izmir&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;test hotel1&quot;,
            &quot;city&quot;: &quot;izmir&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;https://challenge.host/api/hotel?page=1&quot;,
        &quot;last&quot;: null,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;path&quot;: &quot;https://challenge.host/api/hotel&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 5
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-hotel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-hotel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-hotel"></code></pre>
</span>
<span id="execution-error-GETapi-hotel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-hotel"></code></pre>
</span>
<form id="form-GETapi-hotel" data-method="GET"
      data-path="api/hotel"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-hotel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-hotel"
                    onclick="tryItOut('GETapi-hotel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-hotel"
                    onclick="cancelTryOut('GETapi-hotel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-hotel" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/hotel</code></b>
        </p>
                <p>
            <label id="auth-GETapi-hotel" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-hotel"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="hotel-POSTapi-hotel">Create hotel</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-hotel">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://challenge.host/api/hotel" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"oybuxlymypohbzllozeqrwyfvnwvlvnkdmcjhaynmvjbywwavdbodgtskcgefiskijxklpuwwqwpsuyihnsdtvppwqhsirjuoqbklefcwnbmrnpbpgjucccvxfjikropvekqcdqytxxyiyfxdawpfmjivmeemneicrnqnvttvmyaguebahxpdqhirjlqthdzhxerdhvjwfwoclgypdtipdyougsqblyznlcukdsvnewtcnjbgkojtydgiiggjpkinsewjqzfybltxtxhizdgdm\",
    \"city\": \"sed\",
    \"image\": \"zuwphfvwmoflryuecfukwopvqtekhmmefquzrspdebxjacchaizmaqpfztkzzdtpykecwcmkwaulbylxlwquaoeyvfsslqxsgdkqactluaoxbaujmsiumdzhpsbeyyjadbpeehmddmervziupyznabcebhombvvhomltwrjvfvzkzestxslskemiwmlhoqszkooxmlhhlsfwqckoxvhodgsmgmoqrqtltbusjpbuwedddduucyfcngxlpqkrdpnqggqtnxxegqkijfprdilenixdrrsoinaapawpdklobrpnjtvxjzaapwcuzilqqkzlcdwbxvfhhrozbdodlypbkxckyryqusojpqkqiaodhkqthcmoyaivzlxtmeljhucucvtvszahqllcinuopdbkqojmnqruxxohseyshkwqmoawrenjwapfhqsjwyjynytmhyiywnkheabitjczfjhycksziowksqcsytizsubqqzljqdhartqzyiqtptigoclkubmshuhathmmfgeetsvckvzipiwmkcnjmubnxqrqselzfhkqoymzrcuqmebppqfsxgihqcaganojndosdoxinvuraoopyqwxubhqavzyohxplszelpifagvfmvmtcyycowuayqklnynspisvlokkjemlylzdxdbxtzdmfkhii\",
    \"address\": \"zstvwxwreqigjzyfpnlmzbtfammrpzbzniqzabhuhjvgmvinfoxcossnmopfirugwdczuqurpzeumudpuzqjcnjtoutydfupmchtmbcdjnzrdmycpyujlpzndvwxlnlxjnjtbuvcekitqtvatvzwxaczclpzrrefyqczmhjiycwxdsjlqdjsllkrxcdrafmltxprnrlsarkvmaehbarwmvdomajupxuoezfygcealaydcaxgconcitbzkchwneiiscafmpksczdgdgwxyypntjqezknfkrohpxrdtuaafbhayhphogouwdsmrnsnkopifcevawkdpamidepzsaeykikcpdnrsbuzbaykcrauigovfumzaurnoiqgwqvrotmgejkpkkpxscwbsogcyspexnghvkwkkzmqynmpfcucazaxoolcdbqglrclobhorybcejnzizduvpfejjpcxvuqdyhegnjmhncubqlgaycxlnwfwgktavstsgltbareodlatygzbptnbqhxejvrwbpopotfwfiyuzvplyfjrsjfyjsqabsffhiptopapzrausernutmtjuxmcywdhgvmytnyyuzspyvdgsahvpzpfrjownoktacrrtpbvjltyjteuhnnxrujgadlcasmpxtcuyszqskbfxrlhqbmfidkwvphvdofdazbasdtbinuilwcorcelyqrjxpsudlpjtikllcvt\",
    \"description\": \"gmvwjmzyecoeavxgwroqmhfunyrudjdghfbkgfihgtlhmpgrbvbluammswakjddamvdbzgtpyxucoktdsrixughumndwydlncwrvkuifbcpvyozeioflrbimtawdqynhlaviflkyxeiksfnfaxujueoutidytyhzhnpafopxqbvxhgoqgkddjdosnjcvcjuzdumidjxtykpazcygaugfyrpeauqlbsptkteufxglvmaozmgzcetlmdaktzbzncqmaevekiifoohkonmteqhafbawigwxfgywabuebbnvhhytbucnlqpgtszjwxvkgwirrsnxqcaktlyauojbsliwcwlwicdibadzgiwstceqqowrvidplrzthlnwydezgeqyiwjsydxuwkfnjilroxudjdcgdqlhqjbrconqkqutxopdmyvlgylvtmcmiykmmmceadhcryofbiedehcccszeswgxkpilicufgvdtktlxeyovqdydjinfyxvzgcgheqxmoulfixeovnshtqadgahndvgbwryeeeeuxfijpqvrekljyvxcpasknhlaeemhaulppjcgychanteinxtghlalrxwpikjykztuvijjavvbtumqmwkhajacwtyfvrgykwaezvmaqriteagbybjjzcphxdsyqtkiywiyzvwyeoxcybjgvjoarowqsgemdqrvqxncrirvdsptfnifarmocbkjwgkjhhxgurmrcddbwcqczxofdaqlzrpehbvlcuvvwdxwlibddtgjnpgopghrnwqaysyniqexzboacsajaxrcioplsdvehwimtpobfffeljnpfdlpintclcupjjcmkirnrsfoopwtmuvoizhnxyceugbnphccvgvztiowoflporpyddninazjrbsazbsytmzicpagvuosqbjiirtakehwaarlsznszczrcekjfnxfziebsgouccgamwsnbcprfwbjpkjgttyyhkmqczytjntxechuivfyhzehuxmvauinpjxvxoerqiylvbtvhvoynfxfveiboknsnjanivfipzealeotyfzepxyvnwdvyylkklazkdrosdlujhahfkafbrmufzeqgmdxawxzsujpoeydhcoizypopfclipxysgutghnnmlbxwacutkxigbsbciwxyrjfdlgnzbccwyodetismelquwcqshboroalmvtgmgxalfbhsbegkizrodhlogckgwiyxnnlisklmlmdtchlzpklbokqvancbdrukcexzvhjicuabhzijrmiooadtqwfbugnjvgmahfwgoiidgekuapqycgmisiomzykrjrvcqekkxqmgrmxhenrckzskbjzubzszbzpmjgnwmtmrclpxnkzdvqtgflkatuxauifetpqcehgxeudgwtyyadwseiiahshdzzwxdoohbyfaepitdprkgpfxlrdgkdzpnghdkfvkhpkcofnhevxethuvyjgufkozjztvskhbuxtqdtirqguzosedgqkpwgpdejyusdornmzshideydqqiwevafnpbxqdipixozvyowruxsaieuhosixqlacgjtdkxicinlxlnsiphjivhngfhrwnkrawijunwiqyzyskckodejujgkdgbcoejmgyfdwopsyjpmhmfdjihjbikrnigcobklzyzbepiqglflsytxtxgsfmnvmendopuyhrnufikutufnxadfcjjdlycmaznieiulyhaicucufkiyzqyjhcrizrfczdodteelerumpudhcmronyblkoucjjshhsgbiwdcmqkldpskgdlazmtnzwzqeonixoxdiuunlgycetuzqykirccsqfxbdtjpfblckeuoowrzzxjypqyqfzrdyzdtlxlrxmqhcbzdbneuzeaduqhcfqrfdhjwkidgtuurazeuqbaizbcbuanulcgppjegnmdxhoqahgboiaedkhehtsbguhnugawrizxvgpqhpuwnqfmnwhtqwuvbpiitrzwamqyzguqxonafuewtgprvkhfxdhnjcmacxozuqdwuycoyprqjywsuklhgzdbosdvlqkclbpyzyigukocersyquwekrktfhmycvsmtyzqfxfbfmddycagvgqfsuytqswszyyxddigohwummnvkibrbgsmkgqllqrbxnbosnxmzmpfhntpqqtogspmvjpsmhneyrzcvyuvrzevilztcfedzlolouyvznfjqjvbgaowzgiwzldvjeawsywdltfxzvushbxqipgtzslqhndtkxkauxxppkmkmbqrmpnyiwyexltkexogwjiluvcqlhgzptzbzrqqxhkxedsslomqtxjiynbjdlmmzqjarafzkkhvmilzflzjpnhqsmulbodmidmgzmglwzcwciyglpfupewuydtkfqekrrfumscxzenzsbmojocvtrzzrlgdulwzpyqjknsevzvuepllfukeeizgxiofaaruuouylvpcekyilldaldamknqrcvxvbnkltdnwpihyhnblzuhprpxorqbchcmgimyuxhsoccrsghyvbledfglgqfulfkmkklkninlueicqqcllqqwlbfbxrnahenqnrlhfgnoannfgsitziikzgicjqfuyhzrhpaqszrpoxcwkzvizsovtuvrfxsrkekisjwmhaakavqlfbbzpnxscgvblujfqizhjtcapesvzoryvrbbzybyhytkolihefoelowqcvffkpxilppuhdjnjnemoqeqgoxzepgqgsxixsvpwljqsrzdsbwnglmvvpyfmvrdoyqhllmvsgqpalnjkvwkciyhrdnmdzzimnwtocssjrytvsxjtajzulgyoipsvqelylpjshukrkelbgwnfnmutcfrikkjfhlxihmgycbmksdwgoadgdculaigejmbmjbgwyfreaptabycpypphscowdcynrzikdmmyozxhjtqkzdihxrfitwsyizuxijntvcgficpophngxeodcauwmzaaxbxgftiseyjbkugybvhjuwbavphomazmykakqkhwtcffkhqbvzbezrbhljhtwlzccwgzbueqftmwjvyubxjocwnpzmhixapjzkyuferyfdklsnetonjofunfpccxszdrqxevsskvaygtdubbnzhaqraqabidyavhfntjfqifswpbmjybtewswapftlbqrhhwehkwnyvcyujvbgkztpdrcathvjpzgqhluvatfbgbnhxvjgkyncumzxwgzczcipauhcnrxopwacomhatrtssmpiietpubbmragotcdrymzlmtvkxutlljubhvlxwvhcdogxiewlooqeauxtqxxgaipunftpvgquparmowxmtekjxegtdxufdyvjyifklwcledxvlzayvfzvezmfjkcitigudrvyzjgwpdrscwzgzjqechdidyzkbabmoavhslulwczttabmdowcfbbkmbdrpodhvxjgyuysqacehesrriyxcnskcgsqpnkmnlvhtzkshlyawvhcxxyilocspwtiznahfloejnecjdqfxlsscwzidfltxfgtfhcjtiuzvxfuqywreksovjvlcfzlhwqdejogiiqyyngbssfnowxmfpbktizczbapvgugeqjeqmdbqqjvrdatpdcpcargajoevneflaoeltljqxispwgahcmzqdslvgbpujjwngmtitnosutjlphsrvvzdbuvphgtvfninqvezbtreqgtqiqtqrofmlefidhutbmbgnhzqgnctmonwqovmoaxocjempdjwqutilgyxltgibuefqiktugghmpnbrlsooeuviecpbtiruicfjxpxbuhwuyapikticawjiivdcdarwjyrjzcliabeoxejvtbhueztpcpdgsoadeav\",
    \"stars\": 4,
    \"latitude\": \"ut\",
    \"longitude\": \"eum\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://challenge.host/api/hotel"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "oybuxlymypohbzllozeqrwyfvnwvlvnkdmcjhaynmvjbywwavdbodgtskcgefiskijxklpuwwqwpsuyihnsdtvppwqhsirjuoqbklefcwnbmrnpbpgjucccvxfjikropvekqcdqytxxyiyfxdawpfmjivmeemneicrnqnvttvmyaguebahxpdqhirjlqthdzhxerdhvjwfwoclgypdtipdyougsqblyznlcukdsvnewtcnjbgkojtydgiiggjpkinsewjqzfybltxtxhizdgdm",
    "city": "sed",
    "image": "zuwphfvwmoflryuecfukwopvqtekhmmefquzrspdebxjacchaizmaqpfztkzzdtpykecwcmkwaulbylxlwquaoeyvfsslqxsgdkqactluaoxbaujmsiumdzhpsbeyyjadbpeehmddmervziupyznabcebhombvvhomltwrjvfvzkzestxslskemiwmlhoqszkooxmlhhlsfwqckoxvhodgsmgmoqrqtltbusjpbuwedddduucyfcngxlpqkrdpnqggqtnxxegqkijfprdilenixdrrsoinaapawpdklobrpnjtvxjzaapwcuzilqqkzlcdwbxvfhhrozbdodlypbkxckyryqusojpqkqiaodhkqthcmoyaivzlxtmeljhucucvtvszahqllcinuopdbkqojmnqruxxohseyshkwqmoawrenjwapfhqsjwyjynytmhyiywnkheabitjczfjhycksziowksqcsytizsubqqzljqdhartqzyiqtptigoclkubmshuhathmmfgeetsvckvzipiwmkcnjmubnxqrqselzfhkqoymzrcuqmebppqfsxgihqcaganojndosdoxinvuraoopyqwxubhqavzyohxplszelpifagvfmvmtcyycowuayqklnynspisvlokkjemlylzdxdbxtzdmfkhii",
    "address": "zstvwxwreqigjzyfpnlmzbtfammrpzbzniqzabhuhjvgmvinfoxcossnmopfirugwdczuqurpzeumudpuzqjcnjtoutydfupmchtmbcdjnzrdmycpyujlpzndvwxlnlxjnjtbuvcekitqtvatvzwxaczclpzrrefyqczmhjiycwxdsjlqdjsllkrxcdrafmltxprnrlsarkvmaehbarwmvdomajupxuoezfygcealaydcaxgconcitbzkchwneiiscafmpksczdgdgwxyypntjqezknfkrohpxrdtuaafbhayhphogouwdsmrnsnkopifcevawkdpamidepzsaeykikcpdnrsbuzbaykcrauigovfumzaurnoiqgwqvrotmgejkpkkpxscwbsogcyspexnghvkwkkzmqynmpfcucazaxoolcdbqglrclobhorybcejnzizduvpfejjpcxvuqdyhegnjmhncubqlgaycxlnwfwgktavstsgltbareodlatygzbptnbqhxejvrwbpopotfwfiyuzvplyfjrsjfyjsqabsffhiptopapzrausernutmtjuxmcywdhgvmytnyyuzspyvdgsahvpzpfrjownoktacrrtpbvjltyjteuhnnxrujgadlcasmpxtcuyszqskbfxrlhqbmfidkwvphvdofdazbasdtbinuilwcorcelyqrjxpsudlpjtikllcvt",
    "description": "gmvwjmzyecoeavxgwroqmhfunyrudjdghfbkgfihgtlhmpgrbvbluammswakjddamvdbzgtpyxucoktdsrixughumndwydlncwrvkuifbcpvyozeioflrbimtawdqynhlaviflkyxeiksfnfaxujueoutidytyhzhnpafopxqbvxhgoqgkddjdosnjcvcjuzdumidjxtykpazcygaugfyrpeauqlbsptkteufxglvmaozmgzcetlmdaktzbzncqmaevekiifoohkonmteqhafbawigwxfgywabuebbnvhhytbucnlqpgtszjwxvkgwirrsnxqcaktlyauojbsliwcwlwicdibadzgiwstceqqowrvidplrzthlnwydezgeqyiwjsydxuwkfnjilroxudjdcgdqlhqjbrconqkqutxopdmyvlgylvtmcmiykmmmceadhcryofbiedehcccszeswgxkpilicufgvdtktlxeyovqdydjinfyxvzgcgheqxmoulfixeovnshtqadgahndvgbwryeeeeuxfijpqvrekljyvxcpasknhlaeemhaulppjcgychanteinxtghlalrxwpikjykztuvijjavvbtumqmwkhajacwtyfvrgykwaezvmaqriteagbybjjzcphxdsyqtkiywiyzvwyeoxcybjgvjoarowqsgemdqrvqxncrirvdsptfnifarmocbkjwgkjhhxgurmrcddbwcqczxofdaqlzrpehbvlcuvvwdxwlibddtgjnpgopghrnwqaysyniqexzboacsajaxrcioplsdvehwimtpobfffeljnpfdlpintclcupjjcmkirnrsfoopwtmuvoizhnxyceugbnphccvgvztiowoflporpyddninazjrbsazbsytmzicpagvuosqbjiirtakehwaarlsznszczrcekjfnxfziebsgouccgamwsnbcprfwbjpkjgttyyhkmqczytjntxechuivfyhzehuxmvauinpjxvxoerqiylvbtvhvoynfxfveiboknsnjanivfipzealeotyfzepxyvnwdvyylkklazkdrosdlujhahfkafbrmufzeqgmdxawxzsujpoeydhcoizypopfclipxysgutghnnmlbxwacutkxigbsbciwxyrjfdlgnzbccwyodetismelquwcqshboroalmvtgmgxalfbhsbegkizrodhlogckgwiyxnnlisklmlmdtchlzpklbokqvancbdrukcexzvhjicuabhzijrmiooadtqwfbugnjvgmahfwgoiidgekuapqycgmisiomzykrjrvcqekkxqmgrmxhenrckzskbjzubzszbzpmjgnwmtmrclpxnkzdvqtgflkatuxauifetpqcehgxeudgwtyyadwseiiahshdzzwxdoohbyfaepitdprkgpfxlrdgkdzpnghdkfvkhpkcofnhevxethuvyjgufkozjztvskhbuxtqdtirqguzosedgqkpwgpdejyusdornmzshideydqqiwevafnpbxqdipixozvyowruxsaieuhosixqlacgjtdkxicinlxlnsiphjivhngfhrwnkrawijunwiqyzyskckodejujgkdgbcoejmgyfdwopsyjpmhmfdjihjbikrnigcobklzyzbepiqglflsytxtxgsfmnvmendopuyhrnufikutufnxadfcjjdlycmaznieiulyhaicucufkiyzqyjhcrizrfczdodteelerumpudhcmronyblkoucjjshhsgbiwdcmqkldpskgdlazmtnzwzqeonixoxdiuunlgycetuzqykirccsqfxbdtjpfblckeuoowrzzxjypqyqfzrdyzdtlxlrxmqhcbzdbneuzeaduqhcfqrfdhjwkidgtuurazeuqbaizbcbuanulcgppjegnmdxhoqahgboiaedkhehtsbguhnugawrizxvgpqhpuwnqfmnwhtqwuvbpiitrzwamqyzguqxonafuewtgprvkhfxdhnjcmacxozuqdwuycoyprqjywsuklhgzdbosdvlqkclbpyzyigukocersyquwekrktfhmycvsmtyzqfxfbfmddycagvgqfsuytqswszyyxddigohwummnvkibrbgsmkgqllqrbxnbosnxmzmpfhntpqqtogspmvjpsmhneyrzcvyuvrzevilztcfedzlolouyvznfjqjvbgaowzgiwzldvjeawsywdltfxzvushbxqipgtzslqhndtkxkauxxppkmkmbqrmpnyiwyexltkexogwjiluvcqlhgzptzbzrqqxhkxedsslomqtxjiynbjdlmmzqjarafzkkhvmilzflzjpnhqsmulbodmidmgzmglwzcwciyglpfupewuydtkfqekrrfumscxzenzsbmojocvtrzzrlgdulwzpyqjknsevzvuepllfukeeizgxiofaaruuouylvpcekyilldaldamknqrcvxvbnkltdnwpihyhnblzuhprpxorqbchcmgimyuxhsoccrsghyvbledfglgqfulfkmkklkninlueicqqcllqqwlbfbxrnahenqnrlhfgnoannfgsitziikzgicjqfuyhzrhpaqszrpoxcwkzvizsovtuvrfxsrkekisjwmhaakavqlfbbzpnxscgvblujfqizhjtcapesvzoryvrbbzybyhytkolihefoelowqcvffkpxilppuhdjnjnemoqeqgoxzepgqgsxixsvpwljqsrzdsbwnglmvvpyfmvrdoyqhllmvsgqpalnjkvwkciyhrdnmdzzimnwtocssjrytvsxjtajzulgyoipsvqelylpjshukrkelbgwnfnmutcfrikkjfhlxihmgycbmksdwgoadgdculaigejmbmjbgwyfreaptabycpypphscowdcynrzikdmmyozxhjtqkzdihxrfitwsyizuxijntvcgficpophngxeodcauwmzaaxbxgftiseyjbkugybvhjuwbavphomazmykakqkhwtcffkhqbvzbezrbhljhtwlzccwgzbueqftmwjvyubxjocwnpzmhixapjzkyuferyfdklsnetonjofunfpccxszdrqxevsskvaygtdubbnzhaqraqabidyavhfntjfqifswpbmjybtewswapftlbqrhhwehkwnyvcyujvbgkztpdrcathvjpzgqhluvatfbgbnhxvjgkyncumzxwgzczcipauhcnrxopwacomhatrtssmpiietpubbmragotcdrymzlmtvkxutlljubhvlxwvhcdogxiewlooqeauxtqxxgaipunftpvgquparmowxmtekjxegtdxufdyvjyifklwcledxvlzayvfzvezmfjkcitigudrvyzjgwpdrscwzgzjqechdidyzkbabmoavhslulwczttabmdowcfbbkmbdrpodhvxjgyuysqacehesrriyxcnskcgsqpnkmnlvhtzkshlyawvhcxxyilocspwtiznahfloejnecjdqfxlsscwzidfltxfgtfhcjtiuzvxfuqywreksovjvlcfzlhwqdejogiiqyyngbssfnowxmfpbktizczbapvgugeqjeqmdbqqjvrdatpdcpcargajoevneflaoeltljqxispwgahcmzqdslvgbpujjwngmtitnosutjlphsrvvzdbuvphgtvfninqvezbtreqgtqiqtqrofmlefidhutbmbgnhzqgnctmonwqovmoaxocjempdjwqutilgyxltgibuefqiktugghmpnbrlsooeuviecpbtiruicfjxpxbuhwuyapikticawjiivdcdarwjyrjzcliabeoxejvtbhueztpcpdgsoadeav",
    "stars": 4,
    "latitude": "ut",
    "longitude": "eum"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-hotel">
</span>
<span id="execution-results-POSTapi-hotel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-hotel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-hotel"></code></pre>
</span>
<span id="execution-error-POSTapi-hotel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-hotel"></code></pre>
</span>
<form id="form-POSTapi-hotel" data-method="POST"
      data-path="api/hotel"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-hotel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-hotel"
                    onclick="tryItOut('POSTapi-hotel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-hotel"
                    onclick="cancelTryOut('POSTapi-hotel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-hotel" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/hotel</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-hotel" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-hotel"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-hotel"
               value="oybuxlymypohbzllozeqrwyfvnwvlvnkdmcjhaynmvjbywwavdbodgtskcgefiskijxklpuwwqwpsuyihnsdtvppwqhsirjuoqbklefcwnbmrnpbpgjucccvxfjikropvekqcdqytxxyiyfxdawpfmjivmeemneicrnqnvttvmyaguebahxpdqhirjlqthdzhxerdhvjwfwoclgypdtipdyougsqblyznlcukdsvnewtcnjbgkojtydgiiggjpkinsewjqzfybltxtxhizdgdm"
               data-component="body" hidden>
    <br>
<p>Must not be greater than  1000 characters.</p>
        </p>
                <p>
            <b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="city"
               data-endpoint="POSTapi-hotel"
               value="sed"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="image"
               data-endpoint="POSTapi-hotel"
               value="zuwphfvwmoflryuecfukwopvqtekhmmefquzrspdebxjacchaizmaqpfztkzzdtpykecwcmkwaulbylxlwquaoeyvfsslqxsgdkqactluaoxbaujmsiumdzhpsbeyyjadbpeehmddmervziupyznabcebhombvvhomltwrjvfvzkzestxslskemiwmlhoqszkooxmlhhlsfwqckoxvhodgsmgmoqrqtltbusjpbuwedddduucyfcngxlpqkrdpnqggqtnxxegqkijfprdilenixdrrsoinaapawpdklobrpnjtvxjzaapwcuzilqqkzlcdwbxvfhhrozbdodlypbkxckyryqusojpqkqiaodhkqthcmoyaivzlxtmeljhucucvtvszahqllcinuopdbkqojmnqruxxohseyshkwqmoawrenjwapfhqsjwyjynytmhyiywnkheabitjczfjhycksziowksqcsytizsubqqzljqdhartqzyiqtptigoclkubmshuhathmmfgeetsvckvzipiwmkcnjmubnxqrqselzfhkqoymzrcuqmebppqfsxgihqcaganojndosdoxinvuraoopyqwxubhqavzyohxplszelpifagvfmvmtcyycowuayqklnynspisvlokkjemlylzdxdbxtzdmfkhii"
               data-component="body" hidden>
    <br>
<p>Must not be greater than  1000 characters.</p>
        </p>
                <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="address"
               data-endpoint="POSTapi-hotel"
               value="zstvwxwreqigjzyfpnlmzbtfammrpzbzniqzabhuhjvgmvinfoxcossnmopfirugwdczuqurpzeumudpuzqjcnjtoutydfupmchtmbcdjnzrdmycpyujlpzndvwxlnlxjnjtbuvcekitqtvatvzwxaczclpzrrefyqczmhjiycwxdsjlqdjsllkrxcdrafmltxprnrlsarkvmaehbarwmvdomajupxuoezfygcealaydcaxgconcitbzkchwneiiscafmpksczdgdgwxyypntjqezknfkrohpxrdtuaafbhayhphogouwdsmrnsnkopifcevawkdpamidepzsaeykikcpdnrsbuzbaykcrauigovfumzaurnoiqgwqvrotmgejkpkkpxscwbsogcyspexnghvkwkkzmqynmpfcucazaxoolcdbqglrclobhorybcejnzizduvpfejjpcxvuqdyhegnjmhncubqlgaycxlnwfwgktavstsgltbareodlatygzbptnbqhxejvrwbpopotfwfiyuzvplyfjrsjfyjsqabsffhiptopapzrausernutmtjuxmcywdhgvmytnyyuzspyvdgsahvpzpfrjownoktacrrtpbvjltyjteuhnnxrujgadlcasmpxtcuyszqskbfxrlhqbmfidkwvphvdofdazbasdtbinuilwcorcelyqrjxpsudlpjtikllcvt"
               data-component="body" hidden>
    <br>
<p>Must not be greater than  1000 characters.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-hotel"
               value="gmvwjmzyecoeavxgwroqmhfunyrudjdghfbkgfihgtlhmpgrbvbluammswakjddamvdbzgtpyxucoktdsrixughumndwydlncwrvkuifbcpvyozeioflrbimtawdqynhlaviflkyxeiksfnfaxujueoutidytyhzhnpafopxqbvxhgoqgkddjdosnjcvcjuzdumidjxtykpazcygaugfyrpeauqlbsptkteufxglvmaozmgzcetlmdaktzbzncqmaevekiifoohkonmteqhafbawigwxfgywabuebbnvhhytbucnlqpgtszjwxvkgwirrsnxqcaktlyauojbsliwcwlwicdibadzgiwstceqqowrvidplrzthlnwydezgeqyiwjsydxuwkfnjilroxudjdcgdqlhqjbrconqkqutxopdmyvlgylvtmcmiykmmmceadhcryofbiedehcccszeswgxkpilicufgvdtktlxeyovqdydjinfyxvzgcgheqxmoulfixeovnshtqadgahndvgbwryeeeeuxfijpqvrekljyvxcpasknhlaeemhaulppjcgychanteinxtghlalrxwpikjykztuvijjavvbtumqmwkhajacwtyfvrgykwaezvmaqriteagbybjjzcphxdsyqtkiywiyzvwyeoxcybjgvjoarowqsgemdqrvqxncrirvdsptfnifarmocbkjwgkjhhxgurmrcddbwcqczxofdaqlzrpehbvlcuvvwdxwlibddtgjnpgopghrnwqaysyniqexzboacsajaxrcioplsdvehwimtpobfffeljnpfdlpintclcupjjcmkirnrsfoopwtmuvoizhnxyceugbnphccvgvztiowoflporpyddninazjrbsazbsytmzicpagvuosqbjiirtakehwaarlsznszczrcekjfnxfziebsgouccgamwsnbcprfwbjpkjgttyyhkmqczytjntxechuivfyhzehuxmvauinpjxvxoerqiylvbtvhvoynfxfveiboknsnjanivfipzealeotyfzepxyvnwdvyylkklazkdrosdlujhahfkafbrmufzeqgmdxawxzsujpoeydhcoizypopfclipxysgutghnnmlbxwacutkxigbsbciwxyrjfdlgnzbccwyodetismelquwcqshboroalmvtgmgxalfbhsbegkizrodhlogckgwiyxnnlisklmlmdtchlzpklbokqvancbdrukcexzvhjicuabhzijrmiooadtqwfbugnjvgmahfwgoiidgekuapqycgmisiomzykrjrvcqekkxqmgrmxhenrckzskbjzubzszbzpmjgnwmtmrclpxnkzdvqtgflkatuxauifetpqcehgxeudgwtyyadwseiiahshdzzwxdoohbyfaepitdprkgpfxlrdgkdzpnghdkfvkhpkcofnhevxethuvyjgufkozjztvskhbuxtqdtirqguzosedgqkpwgpdejyusdornmzshideydqqiwevafnpbxqdipixozvyowruxsaieuhosixqlacgjtdkxicinlxlnsiphjivhngfhrwnkrawijunwiqyzyskckodejujgkdgbcoejmgyfdwopsyjpmhmfdjihjbikrnigcobklzyzbepiqglflsytxtxgsfmnvmendopuyhrnufikutufnxadfcjjdlycmaznieiulyhaicucufkiyzqyjhcrizrfczdodteelerumpudhcmronyblkoucjjshhsgbiwdcmqkldpskgdlazmtnzwzqeonixoxdiuunlgycetuzqykirccsqfxbdtjpfblckeuoowrzzxjypqyqfzrdyzdtlxlrxmqhcbzdbneuzeaduqhcfqrfdhjwkidgtuurazeuqbaizbcbuanulcgppjegnmdxhoqahgboiaedkhehtsbguhnugawrizxvgpqhpuwnqfmnwhtqwuvbpiitrzwamqyzguqxonafuewtgprvkhfxdhnjcmacxozuqdwuycoyprqjywsuklhgzdbosdvlqkclbpyzyigukocersyquwekrktfhmycvsmtyzqfxfbfmddycagvgqfsuytqswszyyxddigohwummnvkibrbgsmkgqllqrbxnbosnxmzmpfhntpqqtogspmvjpsmhneyrzcvyuvrzevilztcfedzlolouyvznfjqjvbgaowzgiwzldvjeawsywdltfxzvushbxqipgtzslqhndtkxkauxxppkmkmbqrmpnyiwyexltkexogwjiluvcqlhgzptzbzrqqxhkxedsslomqtxjiynbjdlmmzqjarafzkkhvmilzflzjpnhqsmulbodmidmgzmglwzcwciyglpfupewuydtkfqekrrfumscxzenzsbmojocvtrzzrlgdulwzpyqjknsevzvuepllfukeeizgxiofaaruuouylvpcekyilldaldamknqrcvxvbnkltdnwpihyhnblzuhprpxorqbchcmgimyuxhsoccrsghyvbledfglgqfulfkmkklkninlueicqqcllqqwlbfbxrnahenqnrlhfgnoannfgsitziikzgicjqfuyhzrhpaqszrpoxcwkzvizsovtuvrfxsrkekisjwmhaakavqlfbbzpnxscgvblujfqizhjtcapesvzoryvrbbzybyhytkolihefoelowqcvffkpxilppuhdjnjnemoqeqgoxzepgqgsxixsvpwljqsrzdsbwnglmvvpyfmvrdoyqhllmvsgqpalnjkvwkciyhrdnmdzzimnwtocssjrytvsxjtajzulgyoipsvqelylpjshukrkelbgwnfnmutcfrikkjfhlxihmgycbmksdwgoadgdculaigejmbmjbgwyfreaptabycpypphscowdcynrzikdmmyozxhjtqkzdihxrfitwsyizuxijntvcgficpophngxeodcauwmzaaxbxgftiseyjbkugybvhjuwbavphomazmykakqkhwtcffkhqbvzbezrbhljhtwlzccwgzbueqftmwjvyubxjocwnpzmhixapjzkyuferyfdklsnetonjofunfpccxszdrqxevsskvaygtdubbnzhaqraqabidyavhfntjfqifswpbmjybtewswapftlbqrhhwehkwnyvcyujvbgkztpdrcathvjpzgqhluvatfbgbnhxvjgkyncumzxwgzczcipauhcnrxopwacomhatrtssmpiietpubbmragotcdrymzlmtvkxutlljubhvlxwvhcdogxiewlooqeauxtqxxgaipunftpvgquparmowxmtekjxegtdxufdyvjyifklwcledxvlzayvfzvezmfjkcitigudrvyzjgwpdrscwzgzjqechdidyzkbabmoavhslulwczttabmdowcfbbkmbdrpodhvxjgyuysqacehesrriyxcnskcgsqpnkmnlvhtzkshlyawvhcxxyilocspwtiznahfloejnecjdqfxlsscwzidfltxfgtfhcjtiuzvxfuqywreksovjvlcfzlhwqdejogiiqyyngbssfnowxmfpbktizczbapvgugeqjeqmdbqqjvrdatpdcpcargajoevneflaoeltljqxispwgahcmzqdslvgbpujjwngmtitnosutjlphsrvvzdbuvphgtvfninqvezbtreqgtqiqtqrofmlefidhutbmbgnhzqgnctmonwqovmoaxocjempdjwqutilgyxltgibuefqiktugghmpnbrlsooeuviecpbtiruicfjxpxbuhwuyapikticawjiivdcdarwjyrjzcliabeoxejvtbhueztpcpdgsoadeav"
               data-component="body" hidden>
    <br>
<p>Must not be greater than  65535 characters.</p>
        </p>
                <p>
            <b><code>stars</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="stars"
               data-endpoint="POSTapi-hotel"
               value="4"
               data-component="body" hidden>
    <br>
<p>Must be at least  1. Must not be greater than  5.</p>
        </p>
                <p>
            <b><code>latitude</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="latitude"
               data-endpoint="POSTapi-hotel"
               value="ut"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>longitude</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="longitude"
               data-endpoint="POSTapi-hotel"
               value="eum"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="hotel-GETapi-hotel--id-">Get a hotel</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-hotel--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://challenge.host/api/hotel/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://challenge.host/api/hotel/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-hotel--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 600
x-ratelimit-remaining: 596
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;test hotel&quot;,
        &quot;city&quot;: &quot;izmir&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-hotel--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-hotel--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-hotel--id-"></code></pre>
</span>
<span id="execution-error-GETapi-hotel--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-hotel--id-"></code></pre>
</span>
<form id="form-GETapi-hotel--id-" data-method="GET"
      data-path="api/hotel/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-hotel--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-hotel--id-"
                    onclick="tryItOut('GETapi-hotel--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-hotel--id-"
                    onclick="cancelTryOut('GETapi-hotel--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-hotel--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/hotel/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-hotel--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-hotel--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-hotel--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the hotel.</p>
            </p>
                    </form>

            <h2 id="hotel-PUTapi-hotel--id-">Update a hotel</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-hotel--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://challenge.host/api/hotel/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"eheedysoinzbomgednenlaxauikizpdmtkyxtvcfnkmxbudzurgwvbiglaqvauontxprgxhywmpzdpedlzxxduhnlmqksxhcarjfuwwkkqtzsvyunmfzgvqhltfyxjqdiyisufasgwuzfajkpdtriwuijnpbmmtpoocsxifrokkhuyixnahsabhzyxxwgxyexbmhnxlfnirwjqhtxfknjvbuwxhbrypdbypaqeouflkbjvldpttpawlfrkwajrezpfaktxamcpgtdjiuwztnejxapfixeijbeydypjnksmahpvdnzpllwpmpwlefpoviekncdpltzhmwfokppiuxlabatzsoyksngvpzwjckeivfkbbpkfjdbhspeebmuew\",
    \"city\": \"ratione\",
    \"image\": \"wzcjiouniuoqbzektvbehonfzmfuiijovvhgrgidlvlsoodokibzywgmkiuaolsfhyqpiatjdogvtcitirpchhatgedehaoodbrbovmgjhaumnqdoovvafrirybzjsorikyzjmulhnwoztzqarbvytvkwrfawqnyoddjadagsgyssskakmyqkevjuadowmiiantztgpventhnjsiyizehigguhwcvdumpmgkpezdodiqhgdcvjozevisnszdfussokrvxhyqcwskggiskrbrnxdvzjsjotdoepxwuhiwvkifpyoqxgbofzhpkcjtoitdjnehkmavegjxjdnqjmfaxjqujugykvzrlzrhdezundkjejigeklaacvvignqpdjmfnjlxlgznndyumifdkbbmrfediulybcmsyruhsiqqskqahmghcpdzwzepdvkqfyuvyowekaynoizihasaoniftjtroevhfsdfbhxsuwnlacrbkqzngwccfnlapeuntpmvjrgoegbaltlpmgkhhxlrawyrtjnycphuilpmejhsnqrtsfhqshuuirkntfaptowunfcbwvcivjjxlbmtcsqbftngkyjrnpwcrptyiphmpbbeyrvgkfhbmkrgtrxfeknblpqnkpfmebnblzbuzlwaykiytzpmllgc\",
    \"address\": \"ifpwaftqpkxmqbycnqusbdrhbocaglzfpaavashzxhdewrllvdkisnkuqxuqhaqsvvhxjqhyqdkbzojtxfkmbxshujydsatbavkvgxryoxrxxjxjamnswvfpgizyjubsekitgvyurpqddxzhrumvpyyrlpueidzosrxnqysahowdectjuwiwhzuwlpkhfzvucbtxcoyatgyeskplscgndmunebutrnpnywuesanmndcfhugddcjgxllgiikmflzvnmlzjhwtbydvphwqhvdyofqkqywjvmpqakaxbponmhybwmnwnnvaufbwxfbytrdghzjjmpvjgubxcmqbozdlzkfrlqohdpcwumzriwjcfxcgwhxacdwwwmhpnlgsqmtvfbasenmqaiztwvovmdkuubhgpyyvtgppfslkwkhlzmgzlmkybycwgivttddexlvbeltldswbmlzzqeefniksmgrztwqhzkxbfdeuemuubozpqrpyeapjayyegrjdbfjdaxpjosamskftcnbjmmadsrtdefihgqegvybakfodpdoaqbpqhvztgshmibigcpnsekuwydtvkigaajwxhekfbmqlljfetwxmyzlzfpzubemjqfgaahjfotgzrelrcmykgalgwhnkwkxytiekxeoophpikijeyhqdlndwncyawvraorduahclaagdptjqpbmncsjzlznnfrgqtrbuekdzwcfqdyzmaqoifafyekaalocmznsftavxdslzhgxsfytzjhjbzqziutikpzwmcxfiljsofrrsryspgeaeqstyrudezxkqbavbtzhkeibhoebaygbyqwbonekgollmlqknwoglknduohqlfyckiu\",
    \"description\": \"rmswkswbiehhiveneswnqmutqogbcyzldpokvuqvyydgklxyfwdesimxipbifwatxpgonxqtofwnepqiiupemxivtqvzfgibjxitrdezzcgdclogufrarspcyxynxorielhlaocbvotdrcefqlaldyvmncgqpgpeacmowzqpcjnlvrgebxbcagofregubrpqouqzmmfyofxqkpqtyuchckgyepeolzayczrhluqrufobpzcfmatymrwowfzvzydmsgirrjarpfjlrerffclhsiormogtldqespivnhwgltxhsykbusfhbofiwhrewygesvtqlgnaaigcuwvyxkimxuleiapuyyrnuctzvgbnargnimgutfhufwvezvqtyfmauvfwytfnhstfcdghenyhrfmoqiezrxlackhwyrmvhpafkmefzpwyyjekyqhbuekxksujwevqhicawxpqebvmmttrguvkifqksmlgvoripldggvozydnrzzujyvuargtckjyefraxgxqbpksknvllpfehyniiwfibkyganrryimlscrvuyjltvqwagdydrvvwxrtvafglqmhxyazjrqdmowvzpscrsdhxhaeuiroeacqbggcymxzmibswkkikxcfialkxxfkfunfxrfhfnyaxjlkqforcnfphcjwcosluwtlhuatkrkvwugurshwuswmtollzwrsbiswllbkpbkmpsgejowqbuqtxaifqnolhqgcijjjuaazadbaakhyhddxdntfbukziqyfisucbcmercadmslcxsbsdcqzwvyjcpufposcvqoulobckgqmhwldravbboanqkscashobbesjoyvxfkoeluzpssiurczzbzaiaojzkrmqpstrgwdtbhwzmntuuhpfjcevfmdphwpyldokqrccngnvxfsztaeijvfiuspukrlilyptqrrpklfxeuujfffncwkxmvbcringwgwgabxemfsaahlvtcxsumqkvsfuoiqyjbcjmuqqdawucbkycpsudqnfudsrjqtgfmtywytkafssikxqingjisuqsqnhybcrrxphlqzyjjecnpsuquuarivtiflyyeppslztobhvmporntigfgximrnccrszuefbzemczniaqvhuyewvjsidvrzamibpyplayueeizqvfpslpmdskydusemqpagefgqhpuzjlsyilpukrhgurpbnmusaybndkvzivheaayiwxzvpjlrzwulqsvijzpqqvjqhccvwzgssbpzcxerpngpgigcqxuukdqyqeaynmdhnycjlexyiryttvmhnmokhkuoljmmaymzzaytcxhlruayfdtwswbiodbcjsjutqtjkkdnbzamewxxraozryomnafegauatuedizpxilgpxozzowwlaoizlehkbfvymppbahdmttrggypaasyxumtwvkjogtmodgcrolokdryoqrgcssstektknzbuibpzluigidpjqvylpreftltrmzhdmxiywcnpwqjsghsxfdewbpzuxlzpimyhbfrzblhvwdrdeeksbjdfymhpkpgdgxqpidkaxjlqzgvngvniclpgtpvpkmcylrhztgnvjkqoulmwtwvpictmsmvpnpdnbuporslfdjpohbefmwijulbomindtipfrbzmbfsiiwjhzktuvvmeijiyyfiolllcsodghxywnyirsjdfenggreyiqhldnjuejhyaoaeroxcwkfvydgscvlmzgvunfaslgkpsrlabnfddhtgitvuxgxplbzngzqndqesvnbouquhazpaquzbnihfgxikrwjevgzadgshzdqhyspoqepsslzxgkphdgvbolasqrtgzchprkiupvpmaopclriyudokwqqvinbjyfhzifssrlmzajimleifktlrxbgieagpkruysonkcbghivfinubhkdgwtjpvgmcsgqgebrsrdblntvjxbyuojmmtaayudigegmulhsdzeobwpedgusjkadlhbeuabldvbgfzhwlekwitrpzbxdovmophcdcrnttgulcrxfnkshnpmjvfigtymokpzucyjkftgsmojhfxzcpazasqksgpstneqzluguetmtugcpwzjpcirqxwnrkencsqjjjwdsixxlqoasebnysvwmxzfvbqwqvpaspwwphxfxmordilhkwmfnpvexhtevglaqcrgqpcvidrzsapjpvgsdywwppagnvedisungeryckwxdofdxbwegamtjzjxalubfineyfsvvrxxgjsqrlmwscacctfbrnadlduwsbcbklfmzszuoqpwnjicrsqcizhjhasxlqnpeupkyknspvaoqdtmttrzhcucplejqxjnhzkcqjuuhhfvseiajkahfqdeihkggxmzfqwokfxxmfdewlpnapapsjmexhapcnzmayboiogyyjgtplfejxumjfcjmlhbcoyepvkkkgdkafmfqtslikktjpdpdytguxvgzyjuyflmjmikpmeyyvqvapjwpasypattdecfnoycydirotflyqznahlsrxgsxjpyfajfubwzmkcjqwedgspfmqucpxufnwthohctnnnfjqvakdzizlsrvapvbzealzongkqpblqpaxkdbwqaecrzzeoexgmcbilpeguugpsztmqehcdiwxiqfuukabymgpwbvoqdmopkdmpanlingusoxsxuquavhsyynonhqwmtqpmkxlpojthujdsvwzusdogcchqvqqkhxzcsnvaumwzcbwduvylpiqcnxeptolbvedfxqqbafgvbixsrmtfzodwwbglxhcrpegcjnjvpxaexmyemnwcpouqliuzorqsfaduazmngxzmsyuablwgnrgvkspwvsmqvqabplldfnihjzjsizisvdajyfkmfryrprckmqaywoecebnofaelipemjkeaqvziseldttnrcfwqtocatxgawbwrisztvarwaucatxrucvannsupwlnflkvhfglrootwggwmrvaahcevcorokxgoaobjoiuokmenpyjhdmtmcnksbxrrdunhcntdxahcvomvzeypkpzbchbdkxszghejfhrgxswmlglhqbuyagqwavqnefthlffrzdrguzgiccqadciitfkdsmiojkcoujsudcstuoajzyyfcawmyzvdzgxafqxaafolqlnymaqsgxsaoopanopzdzlrjdiekfqzknpnpwbqceduoozhfopadurrtggzjfxgpygorapgmjoalqohdkyhblthtkyuezctgacqgluchcdbjgaephlzykozlqhhhwyrzghjhzkxkcngrirxzjjqtpmtundcymfpnpccauubiqvsdrtaczznacmwircryrtcveucrdqsvzjyoqdrhezierjvkunehhsezfddcxtwtdgrtglycfsuvbwzxijwzloqbvtslkxwywjisxswkhcylmglejcubdbgspnlccpopqaxnikobzpnrmzdulpmgjezcsezdntuxdwsxvclzlkvaeewwphhhjpfebbgwyhuissqfhbcdktovyrlcuoysbwngizmelncyrcwjznuuxlwigmibxlzklpmagapcqsjqqemthcivruomlbxvnngthurplqhflfzayghjfnnemoqdprmynzhqholruqotxapumwqpfjezlyjxrtsmdlvstpokjidwrxajqsdfmapttndeginwohfptqfbfmxcddxtqnqedaleqhntxmwvkagptyqjmjqleccgzxsvkpmushqyjsrhpkjeberbmovaznqallqaooowlumazudortyxlweqdbrcowbndsqttbecjdyqaguphrrbspvxgqxbkrkokjkpcbzjrvuuqwtkayfjcljsnkycqptnsxvnhchhjkoacmbtavwtdudsyiyilfykdexzhuhooqonqcnxdqhqiwxsajvqlkdoboatvvmkmvasyzpijgyyuafpfkdprtiigfxagtelqhzbcwcsskmssqzodbmiawsdjtnwupksneamazqeqynzrixxyguudkywulinzbmdesembaxtuivfycmtwcsashvyprtyxksjqpibqgtfycctjntppggxmysdgshhjyjhjhyoecootqwomdwgxgvtiptnvufddkpauuafzgxbczomvqoqlrxyyibotrpizevqgowbsoonbfdxezlifcqeivmiabpdmqoxgdesbepcltcpaszkobkoairjqemjdqbxlhlgpyjoddemgbdghduwmfpezpyfascioyngbitfkhjpdexvbvvzbsahsgbizgczddfwjsizasoowqfqoizciplgbasredzwuharsjhaguawptjcvztjoxqndeqfjrqxecxqhcjkdpkzemwsconkfjokiselbdwfeqjhcvmlljgyadvjuzeqjakbiwtlqtbbkllkznijbimzzftjdpxykwgvezvxbqoskgtnqixzrgmwctmmneyjmludzdyeagzclmdvxyddjhsabbllosqfslxcsqikmzlbzupoqeceskrihczpnicusxhzryrajqrldsixgubwvkdsinramkulijafjushyehlfrndizwuftkswrsepjhurarivmgqpzvhdnpijmuhsnuotxdhqfjjjzzftamhyuropeacydmphfbkuvqygurveadhhzxibppvovuwtndrujoooxeblpgkzypmjzwdpplxomrfualcxduyucwszufxgkkomkuhsnyzsubmevepifvbcjvznjexenovcxusitoxubeabjlwtgsimxnscjhpwynjblsnebgrjaxjyljrpaawpexoykrsajjsoqpxijtxndzishfgpcwrbkmeuhpwtxiajnrslodenlnwmcbtnxtynhhbcqxjttspvwwpncqycodcycorduunpizhmrlacouggdvwsetnwqnvcodfrzlotbxspnakslgrusoosltaskmaesutqkovvshymyivezvlvngswcnprhiaotyrgbyglrslstzbroftgoorqtxorixlfyesnraatmxaktihrfmkcmiedifxpwnhvdqfsurgjacmkioithznkizdidyewbghqxrxwmbysjnqeqlczfmofkvjtbbqvbedkwqvvfpnjjjbeqfjvbkmcwntdpsefnlbgipgweygqfcxcqgtmjvbzrsdesjhyvjcpgfuyhnvvmxcwykwzdrcozwxrosbhzaknddnmzzbgcbauvuwrsnftkwdxcjgnstsaiuwkbuqawuhcrbwwemyzwgswnmdnyhchrzkkqcpyopbcuyigmtlrskwxbufvaolwblwhqnoqogekmcelttzejtbgcfkusggckuofnwfdvdhkqigpeayiscvpnyfsjfrxtixgykmsynlciqzmpdguiwgnvcrirsjsmjhupfliqottxasgvmugcgsvkdjgbxcoqtruhymrraafdwyvwihnotjeucyreiyrebytnzhlqrckmgculyzyeqgtsprutxxruykrqiclmacdkglveogebnumolikiubobmjqbbqzjrbnfrorscukhizsnkjnnfbydnhygpfmxtcgelezltrnilunzspcvlqoeocykkysrjqvmdehntkhdjfrgnrnhsmvnachhdmasycqhmybpqhnjpqrmwkfbwdjglzfiaylanriztajgeafrdhrrlvrpzhfhbwkflextpyaywocugxbrwsiyzuvduquhopayggrbbsyhuryfnacibvtxqdcbnvqonastdzhgnzoaejsrvtwedhrxbtigqnmrcwuyaysabcugzcfquxcabxforloobwgvqtckgknkxbmyfhkmjcmpojzdbwtrslyqcwcxhfppxkeexyqyehujpejxhfbzujiivurvkdubdkraydqhbkpxcyojxlkwxhmvgxhuekkhugsldkpfktrbuvzdzkbbukptlcqlwcgprchcwizluyiklwovxvltrelabdxynsldovklgsitdnerzgjcwjplwpnjuplfwcipciianfdqyovuaxqrnyurlgfzxevykemyesbnrdawgyooaptpybgipgskovsgcgxygmgigpdgphaoylymzzolvyyhgsfnsrwmijmjjtijzixkkzdzzisfzefauyqpdvkhxywokfamqoyafdmcusqethwryppidqulgatfathsbhmruvyvmafzhcggaeejjuqtbfdvryuntzoydtqsuufnzvmeotszehaqnycfibowekoxwjoxangvxyygtqctgjtrwwifjrumlthpelvqlvuqgqqmlgjlrqcihrvzxnfuttjdejajobhlnwoyyoqwvrrcfezxahwtarpesovirlvzcfsjrmyhszbymwkzkyndipkptjziefxojsbpemtafxovivzytmliijjwbmyettcpbbqvvtgldsfytqjbqbfssaszsdjtehuzbtedqdvfylnfustagxsolmzpvzeakzrpojtipddnultylwkzngboduereaolwkzcbrwmkuyndtugnlgaymblsbbngcqzdfrdtsnloljungzrwnzroubnvwnsizckqaxniwvyqahqhppovaergmoelycqgwkionjrkzqoaluakbybxhatfgjyrlgakzmpwzdvqlwhvhhtvzpcdqjzqvaozexynnppaamtyvjcgmdlqzkhckowbyjbkwuimmcudwrxgbeyrmwlrnnsqhbgwirqdmkghtaaydpqletfjcsnbanajeawqfknpawiejxkzffyiderfgbefeteszvtahztagkibdtyrkntekdatscjnnfxiiuldpptwmjzlipersniwrhxeahleizfonwfmcgigxaiwdyomlblohkvzkoiclrlgzjnorfbpvnmtlnzkeuakildfiwldbfeamgrzfzwlhqxfmfvcebwumwkytkqcacqjpxwyjpmokhfiydbxbqpjkmfjsgtefrbiodwbvkuwqkaapwklncemomfuzdimtomimfhmblfomzjglemmmervrwolbimpcsrxnuxxkhcuygcusnwcdqqdgckyvlqcudxoicpxzziwlmsjypfdqzvxdgbvvapckxouhpfbvpjvyyeivwzdjtvyuxuqwgydsrmxwofbtaufzxhypzkuimnlzfjdzkaxubetjqacadghsckvraohuanxllafwydctgeibtnpteplwqngmitjcnacjkhnzrnmpzfvnffpvpdgdxpirxvzxkalzadrveklpgvwlvejzhwopponkfrpkxxpabfvyjvduusiwpeykppwtvfutkgayjplcddmgsrfpuxztfpuairitkgxiwlulqjzacblqwwcxizhtdcshxffppblbiytystsxokjuikjeajzijxjpnskrffjigxnotluqoxswjkqsbgfitbkasruxejostyuamixlwmlghrtcuzcmbsulatiwgtcvstyesjjpzvclcfzlnghdefhbfpeehqhktjlhlyxetmarzhlbhutxckkwvlumyiwowbzxalwzesnltxchmqtlmuorqozmkopxbgrjqbrvzfyxgflzksucqobqypufqstdziklwyxdtncltgrqxbnoioujllpqezvwcrfkdvczainwvpjiqdmrwnbhtuzscqaqtjmwiudlqnqtefuocxcfsdbjxvplmxafpfklhsgyvujauihzkxkreqsjmcavkgehlymdwzpnwrvkikfkvfngznksiwumbdvckzrxlmzryzqiullqowvpokakvdxjvqfvwnkeupxzfzfyirjyasgzxdelmjtfgatfaszbqmcmlzsdvlbynfsiprvxizunnboubfpqkgwpldhmbqsdpiaczqplbfpmylqwfyudkxmfdnidiefxxfczhhbbguhmlvucjdygyfjcdbolslkhumadushwluraqruxawworpsyekdbfdofhjpwwnsalyyokyiygzeadlbsesfwijvhkzjypbkrbjfuidfwfmenaurdgkxzdqitdtnesazoyidcltpxskfnsfjfsykgsgbunwkkvaensckbplmzuwniasqfwuwbfxzersczvcqnxwydzstjiyfttuuqqbbtwinbgccmhkubhebvrvsbsaudqnzlofmhkkqekweuagiuxbhlkdgfzbglwebsosilfgwwqqbwyytzczvflcltdaykrmhdxezlapzohmuwauzarituwjebgzxzpdjcltrjasofufzvvoycfmvbmdmybwpjuxmuuykthpydhfybbbkjbpkwmjtfnbpbynsppkkyjhzsotkokrbvfczrulbyhyjzbnbgengiozietlfbwedtlclbgpwfyismkauilsnopdoxpeufmejflkwrerjpbyntuxghwccydyfafmliunxzhptactemzummrdzvscikufnmpriuamggxehnnopjgnjafmauyusbhulssbjnvzxvsywifgmuxkypdhpvcmhrpmookpqbrjnlqpehnwyuhetpwpvftokixbwahjmsawesoiqmxpoyfaqfchsmasxxtzyasfewzjfepnysbjejbewceshtznxkbxztuxnrsfineitbkgwfotawwgdhzcahljfnuofthuomfuqcpdphisqeyobibkgbrkrqfglqcdawuyejpyxghddtwgzryngcyvdrbydjswqlpqoueigkiwgvuwyuqfkolsejlcfmzbmrxzmulkphgviwluvkxmblrofzebpdeyoztiojajhmiuqzwkyjkeqrgynsrwjeszkkzbwmhzcuynstqshfmfciloxjjuelsafkutaelfwpklgukrfljmnfmfwtnypbnchkpsvncwtvydprqbzxwctbqekgxjntanegfkrtnvoftreoqknjryevzdghhqnaheonfgjjfxfbjgmqurphzxsiyhtkoeefjbklvbpkdpabirvrdondbbxblwltiumowabkbuowyxrmrxdfjxdseruwdbtznpscjjjmhqjblrfmvzowzjvyeyivkzhkacywrzztxfdevfbznngvnecyxzztnnsxbnkgicjknhvxpybnxkdxslxkgfgxdoqjdpzwkwgylkmfvkumoufqexirxsakrxcjgngbwkeasowewattoddprbyeqlyoyfdxswzfcdnbbpnarnssysieaypbkwlkxozzzltrjjkliddrkicpeaywvwvlhkmuthngypvvtpbdvmdcdiqordxcnmjbxryeapvbyqmbhkqnheglhozspjkbpwlxitowuhwdrwmrpewefrjhbcyqyfiasyerxsfyvxqtjhajastkpgzqsjhqfghmxtxvfkldbhlxwdzocxzclodpdyfpworlmvmknpwyxivxiqnpsmbgbvcluyxvbzckmausxrlrtbrsmmuihzcezpnfffafmyxowpnabwoudbaijumzxkwbbgbpugcnxzaskzqgefhvroonxmcujijyqthmzqwmaatqaigtprkmslllggcehjfcltadwteirtxqxsoimdlfxwjkwmjlttdrjvdqwrjtpgutiqvbzuaggmteojetbatfhbsbbeubruanwsxqgtoozfocouedhxkfndetbtvukwvczaerstcwvxrktopzkydqvhyzkzegylakphedqcsyfjmsrjoswtsuehmawmjgiupzkjwmuubcpttkgmdqbyqkfnuhxpsjwvelzijjuwwupgzwozjigjzgucfcodxcjdjxgfxvfuswytkbscqrbjqtxqiupkqyshrrzdqksoixckztkishaxhpvtpbcehaqugacqttgbfycswzpgsgadzrejhslnbnamywoplghxkozzahynauopatboxzjkbwozuunykwalcguacnlqpmbgnejxuoqiskdmymphuyoofvwsdrboniuragdqieemffkwnstfmzeworokrpvxpdwnkqsdvdxvwozqdppzzqhdggicprmhwoaamgzsuqoszghzmigpdfsiqwhayutkmchqnhgtakxjawnexuggcfkthukldvjrfjguloychxahydvebiscnudjcvenjkuylagvyvoljuzgzwxlaelpgfqxrrnqzqkdarbfpuoiaohlpbfnqvalzowplpojksszwhdsentslxsgkubdibyqnaqnndgpydugpiqgqjrxeuuknhuwpbifppixyhmqgncippgbvjzbaqouhhfuhcetzpxsqnzlckfzbingxxgtfjbkjezmzzztbfbhlrvoxwmbcrctkyoqutwmoajorzyruwlwshscemhmwfazjdgswqxsarxarsocponmrnxiizaqgpnotkweqpqthygrsvyohwgbsavufwxbvmreobcqjdziqevtlzwusiquuspdrhaydrmiblxddxvcqmmlsdaohflywapmnfztbraadmdstbipylwblqafsupccgqqfkykyxgtxkyqnwcklnzsnqbtzplnugfgtcezyzbrzckvlzxcafooeomlojcornwtsvqykyqvixhelhbxdcdukmkrndxxjxpslbxfbzivxbrulsofrocllnogretdqrxeutthylpzjrdhbvibzoxvlihkaseebxcdiixdgjmvnnbukzzvhuzupvcjgjnhhzofjqycabfnwgvzadhazpvhruosplwfwsgumxhgkzceeeugabbcrneivccdhgchtiqwkujfdfnplulyxcpcazdmvnmzabebiwhuciuupzaeoanlaeoczvambnylgeykcbaepdjihhcnpsaajmzyvkhtbiobgrxpgmoheikvshgyzkftrdhfvgngtcslkqiscbkabaftbsmbczeovywbseqwejzfiarwtgqiwwwtlmcovwpmhowbwkmtvojfyuluurttyfomtkvuptczlahhsggpcdlkrwokymhrzeycdbkjskcawqzotoudjyogpaaubqaqmgojyjbtvmuenyjjtobbpifrqxkznnbxvfvkuoxkalyvtehhmthspnnpmhhtuixpfvthxalbwvcxyggxavcxcrfoboxouylttyqnyihuhaccnahxgdohxzgrxzexhrrcxwrqyfpttgheebgsogicxblqqtlmipxknomclnplnxjbzussbkkwxzykiqyhojgyapvkzskhqwlouvhsbdeapywwwnnsvxzywdacfwameudbvdagbmaeadjkjkisdxsrurhmbfvijebajlrlpvqurdhhencyvuzduftnudaxfjmszfcfzgizmzglhuemwmiyxrhwlghyebfcrhcinqqunjkprspnnaatxiolaoonakkcfrjoylxjbhveknmjnbcwaasnmcvsopjujfqsmgdehmesfgfoarikwevcaekgaffseajjtijwxuaaqkjnmnnvggyjbuiaaurketwvhlgsrayvyszvfyyejorsrcvizskwsyxwknjlarzimdlpykembmmewvvzuydxgyqpcyafcnsryjisphyartcaozfqawgketzukmahedtxclnkqqtntbtxzmhilztkuvhwlrmatodigyapfqovdcbiremwnxmuqybbppwkojtiqcpfkfhfahdmvllnmbdfujmgpupjkqjzjhghhuuillnrxgzjyudhnrjwmlyvciatpsfakrcivvojltukooypqhshnzwnpjdudmksptaurinvxawfgqkkzqzbkthgogsulnoapfdmcmzukkabnbobgmfaltpdwmrqppkqcrbmzgvfulgjexkyaddjksihozemoeoyvibzuglslxgugdyphqoncrbjqljbvvzvdecmjxitvjbzrjgykodwglaevsdueonyixcieyfoigbndafdokewtlvzrcoewnfneisaqihgmxmvvxhsudghxavvixpmrogpkrnvgezokuphoswgxrojszwvpzblwxwujfzpjqbatbkasjjfyivsbvphfmwjackdwymvgjkitkspmacbbvdjnigzjgpozkacstsqdwtiwturduokiiqfvgzdwsujqgjnszbrpuubwmaizizlphrjooyjlgoxirneiafzfbbndahkglxjhipwkoqfqezekcadotqhdhvuynffneobbzyjdpkxuodcsnfvwrmxawiwussqkypwhoicttvulsqobiyxycyffekhkdpbbvftwgtlzboqvcaoeankahpnpqeoavcbrddntlrnrporqsjmeolrxnoxqjogkdkeazkngcaclnovpfrzcwhmikjcmeidfrcpeobgwforphsldvbtozpzlkqdqlkrflcpodmlofuokfagmaojywzfllkeixwiyjapkwgkfgymeauueamsgafuevzhhunvcubqcwxhyumvqetiqrsjyysjhyenrmxocqnwprxabgkdqafxewjqmxuchkevtaokgpsgloohnnxomswnqsracbujgogobkcdvqodtupdathkaeufctkswvbxbcqiiekgibthmzqfoeszjmfqvrnvhfoemsfnhmspjxvbnnqjtqatasjingsknztzlmpceouaqzwffmzmtegzyreoemrqdaijxqkwowhxstycsozoebmlopnakgijsdewbbtgbewkwiuoowzxzynybvaqhdkrgpmzqeuvhvpiaszikjffqrlzzubbooegspabfdosinijtfcbtrxqbolsdjdyrcobldluelitjawdzgazuocspodcusgvkasvlmorqflsaamofflzuxqbvcplvavihffrzfshutrzpdwervwgyxehlydcofmteacnzuqklzsbrrsqfmrzmbxqpdhssahlyqznrjkfmvxwaoeqmfrucrikgomdnjowxjpbfjjfxfnfauuacvlppaeisqgifjwdjrubnkcqfpcfbameoevjirfnquzzzwyykfmcbuplwrsajtiglthbxrajfhoypzdrdbdjtaxhhzecuudjcfnsxbirjrouehthvgkprpuhzxzmofcsmzrjstblxmmhcbqgvanjjjuajssnxbdphswzatxmoqypkdddpufdinzkphfbgxzzljfmkexvxurkdftrrsldtxezyojosstjhrfysaazokllvcyahbexsewkwsakltezvwqszzgayxnbpdemxjulblmzpqzpveobrtylusqznlyowaknrocjcezqwyhimtxbjypzdeqvyraysfqmydndngyczpktbgouvbmuruixxmcbhjhlqprdguzikhczyqswopkoaqjemuqyzqgslsleghlcvmatahowgdjympkucexyahdjmtvjcjncagizxasmqgpmtnbrucvmrwmamuarzigzepuewjjxsxgdbxgrznqzbfxvoecxtocyrkeronriqktxbuknddccacrfxvdmvyawldydvtcixejlfvnxeahqdjvvtlufqlhkhkvantwxvggzyjpkfhwbijdrnoivuhitayiebiyqmgwurbqwraenvwybixcfgfvluzbepoyaoeeujacwagfwtflgkukqfdzpntjmqediwduqhjwyuouxlcuusmdattyemeadmtlulbwoydkzyvchdfrvledgmxljqbyuwvpovlxnyhvaibalhuuqaxlqibyyozfoyyimypwffjtiehrncfuwmnmjxseslzambhcvtroavurvtfrpuejjttmucqwzbteiyvixxfgpylkhoucfydvpqelfcafjjmiuxkhayeddqhfbcfjyighwzqpiyqjigorftoueywxrfmtnytwbjsvitbpnmvfhabuorbbcdueugmocveepoudeambkxosnjvgfcmvsnuafrupxwwyflyiegzqwfoiigvluqokgiinfcpefjzgldspctaaulqpntwgeufzomeyjwlbaaltbjnshnxkhuypachsdsztoobjzpzrikowezvaskbleoerlsbetengyzeabaeglaglxcorgtdliatmazugqoafzwlymyuykwpnlwsvczjtvlhcwprdrbmkjhgpliowuxmmwlkxgfhdbdowtlbarjodhljbazwrbraiiipbjzrefncxaklrhjsdavrlujjdswkyrgsoagcvtqgetlzrnazcariyukgubfchmiqvosjszthjoiiolkkevgbvwyiqfyblxeeutpbbvjgxuxxipjqwuzthqcatoxxwblngjwrtedwgfdixyfdwlekirjzkkbqmdcmotdljtdygpsbkhzfgecthvcblrcsjtzyygfahaxywhoneosbfvzijzcopglapqrtulnulxeylvlpgoiwxzepfuqbccqefakuqnkmhslaoxblkhhvyuehfsrlhepqyrjenolyebmmtzljzsyepoxkeviaximddfuhbtkpbxtdmupjwaebiiyjcogqvgnvdauohekztoiokcisgqcpguvddyvxjfwebtdnnkvhxwiwlphcrlclpxhggjmaryxrhbrqoxjtkjcrvsuxblqlwzcgwzpkpbdqkqkhqdcfhxfzptwutfzpvhzgiopbycnhuxtuvcoubgmclxkmlnoxamqigwqqtaqbrkjcitxrlkguzppsargshsnnvprvhzdcwucdjlrktcugjilvdkmfotatvjxinbyjhytvwobugzockwztvcycartybstqyaqndgylvradeeivxpdhcvcrgxnqxdsibueinsnujqaohudjpzplbahykicmxloertgrcdcdsuucavuyhpwciajaoqkvpqzqubpqthcxojbuhqkzzswgyanmjgilpaoybvynzqqxglatprtcdhpndgiposucmywaxjfamfembofguyxgvvpwmihaqljurlpyrnjtsrvgkkmxwfsxzfhkhsygiwwuoqoorcckbkpoyntvivawehelquxuzlkbjafkgnrsvailmabjvdpdbcdyernixcdgejikzremtbjdwruauiaeqaleveqknjhsmvesebiagvilknfpuevljitdbtglswyomdtbhfzupnrsopnhxdmymgysjtfwsmhzbkfgkfbyutjzhjrgjqrffrofdypnbqyyzfnhhdgdsmxgmgkgufgaksclkpascpansovlmxbzygrmhymklytbbibmgmtksnukffrfezdvjgtibuviphssagoegnknqbypfbiuuxomvljhclbnihimyiscmgvmfihnndwntnqfhdvkegwidwbanrlwqhzjckurpgtyzfkhzbuqqrxsiiqluzczvdjzkubdwoctrblarfeejtouovggjwfijthblslkptckfvlgnberakqoieqopfihsntwfxibwkqvghdjtcsozzxerzyoiuuwkxowazhutrzukgiirtevhxmleinmtdidozkdmzrygbsuhtbdajlgmutewcdisgdqveuspokrazgfjrhzlgaqcwufllfiivyheesykgrayoagravyzezkizfaghlearllfuhtsqbdposopmrscwuqjoymwkyhrznhnbjfzyplpgkxfscbsoglrpqrofccmmrvlogpowigjzrlkediszeziigudqhziuzgnaulixfhwaesfygcjeyidsiwdlitqdksrhynbvixcuyzjcctrivdpkjdubmrekthpcxbmiikyaxaowckvmglzytkkdjlmqoskntzircdkdyqevnvbgpiffixeayoaipizjkczffjjuuqiaagfjxjstfqekiawxmcnchdranrmstqcktmvghrgijcofqekmcgltsnbmxutdbagtpazuuktohnseicaefkdzggobqhqeamaypqoeerxltyvpnvorpmwwqvewpoakcujheqzfbkpbtyexuujmiujvagmzwtkdhonshzprwiwtohuiduvykzlwlivehkehhxsiryqwgndjeakadzqfxyyddvfzpgswoadeswaqebltbildemrhrglpasepgkhilgdcvgxzbbkqbnuahmhhnitacmngbtdegzutvudusqaqyubodcrtibzwxqygykasgxzsbnhludrdrmblqecgrglkmgtagehumzcujflmzwuuzkrvbyawyvknribexhojeqgvzpdrsdaqqsfnniwbadtumfdnvkhgegatuvsyakexjdzfoudalgkrdoryvujsvjmpjrrbwowdpinnteadsrcrigrbavucppciqtzwsupewkvsjysywgwiofkldzyrlioxvpnyqpspozapawtfqfpirgbztdtvnawezngtgpiqoloubfvddsdpuqyookhowazacahszpkrwuklcfmhzfspqljmghraqjiqxxonkazjfizuazrznczogmymumcgdrvybexoebeshhruwkbgxemipcfhdddfglejdcvqxkavnehnzwvrduygchepmhmquqtrqiolkksqftelthyxhmrnwlefdpfjiifqkwpnlqbodhiswboesrbpkpymnngdwmrzgcrogttoebtgwuyraoxrgoxlsdytuwnxlayvilirjikpndalpaoxcrpsfrzmxqrjzzyzlopnepqpejefcuppstahqsdfjrforwfvrgvcznddikqrlqjpcydjnhkvgbivsozzhllrgphauqbpolxqoevatxygoxyqemhnfoabdnhrnqkfhucwlwpbujffxdjmfpeuvzztrixtpjnmbjbjjslwditcpgtklvxahrdmgftqolivsotrperkluqtxvpkshnongeispiimapuxckkexynsvqvcebdtwmnushtitczrgliffvgdmkhthmyqknwoazzwlqetiwzltiokreieybwvtcbnosgiypeoudhuuwbaoejmrubpmvnyrujgecljmdortajiszxdjzgixeuuvhmszfzzkggnrqvkauhudwrokklvxpbsyyokyuyluqypdhytkceyfnorkfuwadgxxcdjqjafpasndyqxqlcamvdjwextdkrntpwkhqyoursjpdvxkngbannpcvxxdtwqjygtxyjfefbkurdxtuxzquvozrapxoracttxavxvlvvfwifvdeipdgliysvpcgqouavrzkvacshmsaliahvyskzyyzxldgyaqwpkpsxtxsaunpiqdzxnajjodsnbzorgjbplgzddyjybyxhrvpmkhbzqssunwuljsopozpmzysdjtlnqbfnwhajoyvvmkqbgvkbclhcnuenitqsmabfwwnnpbzxndmldyobklpylgavxiydgavdhfqrdaoxlvfbalqesthlrbihoukpnlgbhhzmcxpjkeuyfsvhbdlxuirdgspjgdtcyyboupttcvthsqsfmajwkfjkfyqtclsivmkyyyxipbwicnalqnieqilmkxvoiqsxaggbpwhpponzyhhvducghhmcvjnbeydtgbssimyonkyqlfaqfmekaesmgzbjkqrcnuckiqcaroopyyodlswweeojpfctrzrwkjeabpswetxgztrfmsptanrsekgfgpjyllwzzbjjeovhelcmiimghtqxpxfqtkhgughttvgyptaqiqwmkerfktgvfpwfzyprnybjuqvgffbusixeuexvceytmwxqdqhsnraaibjgnwvogwmvzjhuczzihdykvrancaxedvacjjrysvhtcczrxhxogljmzsceudyedpyoujqahdnweneurwhgnplajhopltoaafkagdyzdnqrvxcckfpshpuxaknozipvnyeljyvobwufbqohpfnbzmzuexodusiyccfymkznvsvzhurbjnpvhmwpohsnpflyqynijmvngsyvbywcyuswtsptzoukhaxfphvjoebcqwxeekikpzxzhddhhvpacwxngmnjuutnvcnpteiycndugtzbviubkmjfxnccllrpbgxbfndowsgptykvdneiergxqaocozbbaktcgfmeaiemymlhmwbcxguopdqrpsnrkofukjtzqwyoinbamjwfyfjewweguvuwgxjnceyhkdfavmfvgguoxoglxbwcwsuckgyhtzvxnlquphttbopiajdxyhawgsjontkdastmftmxoutgyowzbamyxadmedliovtuuszxlwxpmerwdrhxczvztjyckxpyusnfpoqahynwsflrkievcpnwaprxrjgbzocbynponiinnzjiwujocacqarttetnqtnatpscgryokzmxaswsybptnarnacmuqnypzqwxnuhcjpyqfcysvsmjnpnjhsmkvvnerukgjqxywjlighktaprhayenlwacdskxuznojzdyugkpckwttonatswnikwpizzkyrtmmtuiqfpyfowxbakvtkvzgscwnyjukayyhmdzkttpmhrjrfsipuhysxdsetigybrnnfdoeehsgtqstuspxcgmusechonjgvokaiwsakxgapijehydlqwrzroexixnbntdfjnpaxslpcogqlnxyypefqzwkzwigzotzkjhleheabldtlnbkvkrcwtvbljdnsbhysiiyjvgxculznvvtxjrgcutjrakzkmlexafepkxpsyidaudofvrmlrfqtvdagvzsroypsyocxlhimeaslujqlslxekkzxkmirmluftoiedbnttgbtzrqgcicycmmkwdohggirmppuimmofbbgqspipoazwycgcuqyoswykuiezwntbqnzslrymosknxpkigljozimwerlhxrhvyvpbqpgekrjugfrimbpewgphknzpojjataaphshdfqosemmmyjbohsffaxlfussbulmkyxeogyiejryokfhgdpfdqgbqubexhsoqmogcbnprmwvvottlnyfelxijihsnogdmdnckchwmbzmaomzghonpfrfvrfqnjcpoprbidwboynryhkrfhdwddyhurtonsgueuogqqouxxjszpabqzvxbpaqlypveykrzjdievshmzaoqxyweqblkfrqupdljavrqtxdesffzpxxidbbqakzfkfjhtwvcszjjthmwxtliblbboqyonbhilztrlngqorggambtdokmxqfwhqxbstmkjlnmjhazakerjmymkrqpbkvepegddzlqwdlwxkwamslgcavhipjfhnoxsawszdkgtluvoghhzrpmejoehinpepvnfiyteitoqiibpkfmypfjcjmkxtnwvyalulezzegcdinriorxlepntoejbloqbgdwohrcauxzcrppcthwoekqpiolmgdonrzqgcjonrhvsivqqsesgoqjvmawsfdsbsfxjisosvwjisoslpzzijrimjdkmptckklkdsoqfzkcuxepagoupriwaxrfobrascaqupaywejhpimmfduflkybavyyqvpsbmqqzhuatrplbzaovnwoycevpqlyjogltxnzxxvlvronmdxdsavfabvhzqclgnfdbwyozvhlprmjlurdoqjhcrinwvhnwxcenyiysyuwtmqjwqznfzrkmvvvecetekohdugfdlgwkzioeggagjdxacwqqnwfwwvdikuqyhrenezlebammqmwqsprrvjpcvmphlegitxjltqeuhfynbckkktzjawrbgqbhmuuaolbocjjnvktirvuzyihaplvtzipdcsjzexcnnocneslysrcqycdkrxwkukldckkorlvkxafiwotqxhgpbfetdeiqjvmkwzcbdyydkyougkkjhqiewznapojrzrlonhlhazlyfpdmrxopxkzcqpwqridlmhqxlynvvnaklhiozxkrnocskvfrykemtcojcyujzjdztvtbqavoyxekfasmvgjakycesutydehfkyssblflqxroseiudvfcajvdqbnoypzwvjeqxzsguvvhcbfqijlxrweqdhgtaulymjyzlbbzhibaxexcaoqkultpgwityoholntpgwkvqnvpmpqevsqvidrfylevphtoufxtkrjogymvdigsbcenvdiqxhvzfvttroujbeokroineqqkmsldvlscikjipgsritowhzcfpbsceqctdjpehmlpdprhyiflydywgzehqueqdqibmysxrocvgcubcgczfzuhgpjkhtcgwqhzlqgmcpndizfufjdruwyivazqxdgkhuooxmudtnztevmjvfomscocmbztbhkrtdkapufzdabobezyjecxkegcjirypltkllrmtcbylkzrkvjgjqxmmdjovwiyyevvhssbxapafuoulwynrrdvxhcysjiyvnldmdgsrcqskedkrhgpxkumnuzctcejxlkggiszsufoidblmqvtlryqrmuxmbfookgnzooywwqexmsggmyhbnyqnrrbgncitrmgvrlsshnkhamsxugvazcecbrycpodjrwzmfoprzgcwulhggvjdimdweghrlghedtdjesjroanqmuncvgasenkupzmfsndyhkbgjwkzrlcfgrryneozigubaahvaukmxtmibhkawrkpaubuwkgsaidwfaidvoahgddzrkefjjfovppgfgwzzyrhchqacbnqohyvanydnurnveochcevfycrpgillrmsbvpanydbjakvaaxndjvkkeuvxiowclbyroihxyupxsddvjwqutntfedbkgizpdpcsfkvajpexmisddiptptbalpsqffsywzieinpylbuvjrgpanltdicdiygpoggxuzsvpsbeuplvyxlzbgjxzpoyxugfvfgbuqhvpsesupnhfaqgseldzejewfmzzsvswqwcbukyqkkefnireqjjbvwbavktgrdcytlgypsqkpvxhacejgrqkhqojjgxbqowcpzpuukolbqacwusnhhftwpcmhletswxanitlpaijpwiolovmqwwxvgpzqingnjbagweiizwdivoaukbmxhsctsvtwtffblpdwvhwbjeluxemhunpbouogdupsfczxuwvvsxjxbpmgpaethwuoaynvmyyjzvhcrpuuylzyjbqnkxlsfywdltgvqdixhqlyufpmgsjazdhwpwgvdnbtvvwolowvsucuvqefpykysouehpyafinomyvioghqcntsxpnsdnxubowekpwtylgxybylataxtdplngzcavgujqvjpskjmeqbgcxhnjwtnyafiadrowkqwtskiznlqopaigmqspfkxabehejibfaqqwqjbssvryxxuceffehqjewxdpbitgqzxyxzdabtguealecivmksvatoaqqthzqsxxiozbjgrazwhmwojsfbmkeblupfrrqjsyjdbgjorcuggrsyzdybcooljkibkxycqrputogecqbdrvflfbqveaaajatkswwspzrqotbncsdhpdsxrcbptwdijtigxazjzvbqqwisfjmjhhyautdqzleqqljpsvstwqevgspuatnsxvomjununlqgefbvksjivjasxtbwmjsdvmtngoipdocrnetoambygebshnfhbgqinlckkjnwryfvhgajvrhzsyhfotynefaswumvxgjsgyhaemlchaxjljbjiiuijaftzwsuszwoouxbomygzdpjbxrqjnofvzntbqofkbkpfznarpujazznxfoajgplyekbowouskmrflpvyblfvolftxkytoyqiavkeiyqgwwwijrsbydzbmoihabaseazkxwkfmhwefbgclfbeauzvptdedemboqoqcgcscaymfathkfjstlyeufwbaqoeiwujhnllwkcmmppnrypnidqrjvtxkqqfcekcpsylndqgijqbkruhtezyrbnqzxlifliwpntqwozblgdbtmlghjzxbpuwxtkwlnlwmljpolnzbgyygypszxibqpdfykasqxriyswmrhdpgcmxttelpnvunlrfrsxjtbsdqozgwpthztssazqddpdzlddqkitfhqinriantqdobbxjjjubilgzisaumwbtbvwrqdvnbqqnorehbcxqofovtadxwcwkkxntmyblteeaackmklsopgttdrpfycgfpcsqejqmhidoiufpephxiaijwfkfyskkzrzzutrxibgvpirltmlzpjzcvoponhtwtfkaizwrzgpljhvxcjyijlaovwiswqyvefpfpoijspneegoinzdfocymjvymffhxdkhzcdvdlnwsaqxjkzooiigioifggafcuwwhlxrfahcsmzxxkfvczfoaajqugslpxrcbqchxseezemmtcoylsfrhpxtmdgogzybiuotuyeqajrmjxvabxowpmsllfatdiydlncdkblzabxrkbfsdgljuvovaxibtxoleerefeketajtqdhghtpplisnrlhuelklpspqujojlayjorhgubvdhtpmluepnbbndoikixnblrbpwxyqghfitsxjjdswuojwpwpoimkwyuuzkcwuuzwiqldcumbmafwaqcrwjfolovvelbllaqtsstezcaewkpcgzekeilybzarxpdfolecjrrgaddophztfqgijsdtjujwnispjqmmgvsiokjuwbhdxpddzlekynlwejmqnkeyjklwhgylonxwqpxgegitryuwcuhikogksdoxtymeoyvvesajyglcgbduohthahtcxaomwymkfjufzknwepajyvuwkyyjllwqrdbmqxlywapgfcuqthqzbgowjolkjcenukopoeknjgxauwuoaujsdbtrgpfngzplrzlldufohdoezswplvfjfabhblvzfuxzvpyslitubzjhplziattpaombaiazxmcgguhoxjiscpskqjokvheygzjrxtrqluebovztylutuqvhtcgowrexrholqxwtqrnvzkeqakkmifkdmuhrpwdmwijbipmssbysfgmbbiurxembrafocitaespacqjnqqygxktqyirchfymtvzcwdmhlzmdwgrnkssfsweifzvuuuvcayowdmnwkpilnbomdmejbxhlecvwwdaixkacdmzecjjvibiditiduszbwrtaimzmswlnsjuynxfpokjhmqxffvjigowcdhavissxshktaawjtpgfvejcxsvidxjhcobeskkufagruidwslogtyamkkpgpskukwfnuqkrytsijuiviihjyyseipouiodyvujjqpligbdbzuvxeffjwsluflpbgpbigwlyhptyirxzolhsaxffxqfwxrhdvjuxvrwhobiqfrkbokubvpuicwijzieqohfyjzwfctnwklwqjslloeaincwxmgeujjwcvogrgtzfqlyctnfcdxjokeegavhikgdkczsbwyesiwolovbqlriilczjmokizjdydzkyprkdssqtybgpoujhlfdslajsaxqzttxrgkomfmtpcohhhwptcyvzoplofoduzbiiirqdsbfhfroesmgeknzlpuybvthvstikwbuhsdypnksnzrzsywmiarkeuvsmxbhltodvaemakqlumggtumbwkgwfkjgjmvvzilimeldljfzzubeuyanmphgkczlviwmoojteixpolkooibbudxsawwfjudcqewwbnpcpwecmwuegeutwetrgrpqnxiofaqirbidvxbelkbztmorzuaygpfvekftqioztgsreaqkrqmzbuysqdlizrbghtjabkylcyhayahuvaslrqjwggtcdcudqbowsffufsggvlxjqlrkujwusglefzykztifeqzejvshqfvuswbrvcndseckamgtbjhzolczdmeircckcuutpwksljavhhkaosdtvzpdmsabovvjptswasczrnjplwzoaakqeuzcekiqzoihtqqjbsoxhiksilnkmdioedyexkdbacquhwviwlsvxkmppshqajpzyaehwontkinrpqxtkzuairadfnedmnadplpwjismwwdafstpsrziolcapjinmiiogshnsohstmvwyoqoaeeaynfdbpfbatvwudpbasyuvsgenagrfuvxdhhhuopxelptraatooctghaatrzkmrcokxmzgfndztjkvsdsdnruzcwlqekcamqvagzzzkxyexnofmzylwtjslhsaowzebtzldxdzftyvrnwjdfvitinltnzrqtzcpsrvoolsgmvyqbldhmouiqccoynwnbjvzzpywvzeshukxquzbkmjixuiutnjxgqpbxfniyegcvycfdldyaxfcbipdcfayndqbutxfqwbyacoceychhcghmfgdbkcbdvvzkvvdpyietgenwilteijteimmzutwynwbyoqdwechqztzpmyqeaobviaddfjjaevcdwerdgnfmcootuutfuazcocuecptymvmstgleaitkdpgzfxaagjfrmdjwqfagwafforvruupfygmihnydwbhphvkfarrvcuesezdghpymjyryokpdomhjauagnwgvouajnxcnprwsyqrrgzlylvkiqmmxwpzxnlhxeyyhujfaqpmrbmnnyyrdlxatdoqagvvditbizuhdflwvaobewgevclaoxrfhnhttrmsvhkwtrlyzxkhssqcyermwvsgesnbokbrfifyswirxzmdbyijjzmympubxdkjamrryytfmvzteasknkjteatpialgesmrytlpthnvwkwtntiwbokdcnjrkltumarduqfqxkskecrifhhqrzeyrrkwzyxhjpekgevlqrgwfcriwgbjacdrgyghsfxgckhszzddboxjoxtrbqletrpyznqdqoqoblzygfpvqlroccisjgawcmkvnnclpgezrywbzomuyianhjqgnefsvbbpaweczwpfjljuwppszfurvgsdgdimlgjztelajuwvyzjrxpylhybjxiqescwrnsqqpibddnlltnugosvdjlszzoobdlaczemnaanxefvfwlvqqblktxsmomxjybcoloxhsyopsnhdsauphqrhdqhcxdhciafpbnvzrerkazspajsisagkzlmxjfxqyskgdqgpelfyrsqbkuedsxdivekvuqkvirdfcschrewhmpauewnptyvalonarlvrcixtulhtjqqmomnrvodxtwzrgudbieaeoqcsisqswfztdkhmtmqbzwzejfzmyprtwzixpkvkwswyhggkgiamebhnqjsahzrejukmmuowfuwopsetgnagchlyqbpucgflctqqclobydsrmdzqkpstitgpgaxpfdcecxpvzmzwdnafgnwxelntlsjqplkzpnbsdgjcrwxlqjhbjfpgfedpxwuyyjomkwfpfrunnuygpffyuxhmabmyqwbiuzvhcadoewvdtkylmvygtrueyyaurxicdmislkczvqmspnzyrnathawlikndmroumdnwvcyyzcihrmhizpifkuiiijfajtwpxusychufdjofixrfyurzfzhkefwgmhxxptliltglzgaizcglgiqpalndwjanpeczbmmqgpfuwoutyoeidlienjllssxcapbzdinpyoqojfhkbkffvyyfmgrshgeqqwryeyxifmjikeohhcjmqmjhcavwwbqoqbuwycxbufucebnqdxiwsfamxpcvorcfyktkmwsmtcyefdjpxocmfwogmywpfcyeuwknpnrguefcowugaepanxtbumgrvtpcxcsgctfwrjsivvqvcfemibxcxxmeeleoevvndeotsojazviggwsxyvfrndotstdfbsxgzkjqrbgjqmisbacszgjiggqahlpkpqhopiavlwnxyhhjaavrbovyupdjpfdtrugwdfaunlvptdizybxaoxheonvviplxhvnxgxjkjesmjyvhqxyvgecfzchiosycmjbzehojdhpcfmbikhfqmdvzpngxqcihlugbzhnlxwagxezekjbxcpjmbyvvvhlipjnfsfdmrldxmcbpuvlvowotjztpmypcycgkhqfwlukwwoslxaipxmrdaxxqrclpepxeymdiyqqbbxkftelhyyahpvexhmsbngnjvgynbdcapjeotwziqmzdozmjicigtjjtguzkbaqqnahgqnhdulnwqtwpnfbpyybdvzgaxyzggoikergtkyxbuqemupwryhhuecqhjksntjjyhlpowjuljlcnwqmtqjimozmyynrdpwdzblmjzxwmkpwthwbzvybuyyzwyykdczgxivvtozowgdyzwjnfxyedupcvyziijkpcgztbzusybxzueidpuzenolpkdwactizbkafqftrbimnbkqsxczbullkwncrlrhphdojscotnltnrrgzbdwmtwywkgmiescxoymqpzacqjasgbwnhgaulceuknyjfnqsrfpmsbihaqljgptfuneiorcabxcrelijyizzyaumrmftehqwbmxvszmddhnrqwtcwzmnqvymkfokekctolpthwwqtxbapbhndqvuvdzykobozmmdyckgxoeitawqfopcdwcbmtgvhlxmufnyempbxomztcivejqnudqvbhkdbvghlvoyafgbjuajoxatntkviizqobiiheyvqcysmhfumzuoetgbwgskmjwqeradrwohamkswakaaabyxhoqviafbxjdnintczwpgahygicgmoggphshjnvyspqodllwlmymkuiwqxxfqnezshboybcozpyyrqmmxvxvgxlpvkxppglgrugivezdsxgwusvckifdyejfjzbcnmpgopmlbaisiqvxviqmctlbfqtnuqerurzxeoouvabkufdoemdbmjpvemezhdczsossdxubjhobvzfxpxuvctujpcsmmgrxhroaqpsnsoqzjpoiwcukcqbajjqpxchgfaulhwomncutwjdrrpdllbeficrvrxlnlklrrdyrhxovfgeszlgsvdaypornqyibqdplxvuxkaujaidrgeyvrmtrhqsixhkojoybzveuvyhaopmckpefpmzkzyjehnpgyakxeltqocunjtwaktqwvfjrblwwchrcgxtoyxqspnjjecprmnmyshcrykpltjewmbrsfgkkobfkwqfzvlcysjsdlbsxnsabxjgiccdzhypuiigkzdgmawjzwfaxzmlgrpuczdvrtracuvwwmsqrggmvobdxlvacqnaayrbbjznqzgjcrfxnkvdjlbbldnmkryrqluhnzwvbaaxrhevboioqhxlfnpumlmmuvcwkbzfwuyfydvvsjlyxrgihaxstyxoajybkvdchnyikzciwaktpfdkwtlvzrsalthqngkiegbcwkdinmycbcspvfjceqzlthtbjwqodiujeryydjrhfqopsloksykcmdopbgrxuzhwpbqygxvdsdwjscrhioimngxpuzaycwigrdqpfekmtvmltuwghxhjdjaqxrgpjioepqwlklmjeqzxnizlolwtlylctawiidzfcsbkbpnoiiioajdhsnjkcyjmjfqcelromldfugsamidvbygfsxdumhdflzkorhxkyktzjldukwcecjwsrsmicxfcmevgldetlfkdvqoobachslqqymdmkooszybhldajtcjehjqiqkcjqcnukbidubnjtssniunjonnuebrenouctfqgkcdocxbjamqosdipygytavfmxgojvosckdfsxeabumgiusmtdctfwnvdezantfjwzhkvqegporglwrrnnihsgrobqomgccgzwttracnmflhrzskqsbrimhnskcmcvzebfxbuthfmknbglwklgkoplmftbdmwqvyvmxtnsbtlemdnqxokzvpylrljbjnestbotfbwlsmtdygglbcoyjepjxngxsriacdawbddbjgztvodgotjodwvgciebysigkbpsuxwdsbpvtbqmpvvtoszgebveavvmmxxvzucnvqouusyzsdcvnliesiiohfgrjzncurubnncdbzmbyiamsfdzqqsjyehysblxedovnhxgnkfirdxomjjyqrykyniukcqekspuhtvzqxvpztuvnbqelzhnmfhnqvxtelrjptpcxrivxfrstbjqumyeuypdstdoccewupmgqpluyjpqczjpundrqnghhmxgoyaoiwxojqxunczyucgmxgkebkitjreykljgehwcgcpewqttmowxjjyjseicheyebdpkfxzmiahoxvschftyuthavgspmjtwokgkhfpoqoaqeuzklmmmgbnnhcvusegojyjsbnxekxmylptwnaylarhahjrttottnqrdynusioeudkueptuxjjwprmhianpvznnfvjzdjidyjbruwfpelkptipcrknluuoadbusilmzdbzulwujtixsvlegvxypnnykpbrhqqvnpkicvtywzvvmhitqbnoogctxdohphalkpwnswmcaqyigyhwremvmiqseybmyeopmvhtexvulteyhqiexgytvcouonhssolrqitlviviluojppsvqoepkqeiansthhpvqqdvwqvfqrzwsyhnavpwwrcqnpstzjpdkirmfawdjxsvumogyrygddshfqwkkmfwomzzpivcjaczadjcsyuxhwzidsghaddzdvizqoxxxuizglcltkymtgxuphzijownlfohthvvveqqehxhoecxzzfvaknfgikjoiautxkafnjbpzngibioeorjpybofkyxoozeesrdcoijutnxfeiteyxedvmlryczokeykfzbdpdlxhwfbcgqfyipukmcyzcbmtbgbnphyjzbzzkzrdmmeayflbpdijglmumlvtzlfhlinczmktjxsfvequlxubpdywvriujhzbephicnopicpnadavhdxsaenvkcrppclryosomkiiiuelvcotepvnyufatphkockobpqfahwvrbxgsdftcrfdmcxsmistdyjwtqngtxtbxxgvtyyczajqwemvafuuyksetluygpjdchqnjtbmhrhredniematsiaucryatlberesxvuessrvilvjnpwggrfnqleiwztbxhzizafozzeoylpwyqwosyhhjlwbmjdpjvqltbfiewwvwaubekfuxovdtnlrtxmzrcjqnjvrzqplsozawojzncbmjweitwxasgoyqlkcnctwhscwlyywmuczbjtgrfttqugckuwkuzjatfonvkiodvbxbcxmkbnznngbmbgtdvgzzrsqqykaortrebfxglstcpmhamceqpdzsllzxsmwryoaoumohoaivjbkrwtglqoycgyuebygqgvqlnwnyfqlomtqkghkhqhydxyktmxvzprpsqtsiermddkxabtigdyyncvmxyuurqkymcquuvzixmfrowkvxgsstgopmbxkrfqdokeasavxatvuvvdbmawmvulnvnqpfgemebkponjxfzxhuqyjaukupkktcnhbvyywtafvflrvschurvcttfuzgujgciukspbpfuueigjnrkbgtwakvfqawhpmmvkwrbxvcwxesxlzwxjzyaiomvjjozoudojmwcapqbkicrkapzzgtoainvhlhromlnwjhqvpulbfcjkfgdllnbnncaqnkxhzzosgphhxktmkfhyjxshjmlhftogiykxpnegqusrqujlbksndrihnifooejipgsnacyukxakgavrdmwvyyvmsypkhhemxflhyvzovynmfbsqnwvjrdhukhgiikehbxkprumokgngphrtnpmrlivbanyqhoagtlbnaeazpfjtnrbzcgynykcbcjdcyrwgdqlpturfwgbywjxiewtznaheevenqetephipaiewjsnacuhblpnwwkhkttvhuqzvrveppupsidcdotvsvivkwzkhugbaxaueiczmlycowzekkblcpvbbpvfkfbmzhdjrpfyguatwkwcijndeqchjniawrdrqalzzjyxcnkpwjilaoddcuyrwlwtdxspmmsgeofctynktxgyrckcdbpgqqtblbkruhshmnhvynsqnsmkkaigaozzgnnttickshpnhcggwqmfoctnypwszapbifixwmjqbamuooxfgqbbklgfwrxtsthuedrnpgdfefbqjtzysegypuxpvmtmitdexzmyylobrxqdagpxcnjhcuswqgphkhgduxtcdugorhnkfqsqypdcrqdqngolynvxcpjdbpnategjzagkvwguacgxtavfnqumyknazjuexdrueouufwsglimlfyrqvwlwzgnwxdtlszhzfomvlaofghozvyujihloeawpyeyhdbjhasklgrhnajazyrbdgegvaiskkgfrfrsexhdbwcihmydkakdkmauksijkjeqwuihzcstqiswqjrsjewyzhxjxomynmantiwfviemdlqhyukyqbmyrfesgronganhrtflkavbqmgxrbyayvnwabkvokfrtxfgohcmdogccsjyhgpkbtogchhxskisxjxvzoyijsbhommaclumkccozjdkktzbkxknsfvqgcwmsykrputxtbhbaffvsfzquzwpcxfbqwdtstvisqcnqmyfaiolkkeuekvloreeexcvhhrvhhjrgetnomwaehxgpiqbcqjeemklmphtpqjpplpipzsjtfhcefhwbjihgymutfrnhtpvtvwqiotxupmuzjgsebbanjvyrpsucedvufqglaxhmlpoojyqkuuozrkorduyjwxfgprglxtcnsvjjmtrnrnqwqflczejbswmgiupbbntuyryzkadrmvwplfctlmlabowcmilijmfxcdxgjpltfjceuqkvehitzhitvwlypjwlrnnvlnagokpkwyvrlajavorhmbfvivetgriebuihsgpovkjfnoqmkmgtlcqbnudaaemhqgwmkeexvotzmioycxldewqcybyxryiwbileuxypwzfvocccwcfzqggafeaktcjhfhaksbhgysktztzhsmhvocnjczgktqxxvvqqtneofhaxdpdocwvwcusyxpgjhajvslzpribrhrilhhknfzsqzrxbwlltqtbfodpetqkkzfrylzjdfgabwrkickizyxkxdmughwxwzlglhpmlgmzquspoqbnqftnhttqrkgyqaukrugrnagqmqoldwpyjkgeiyrmmvmlrcoiobnijcdztrdzywepgyrmzcvcwkvbyrtjwzxexxuwscfcmwmvgiwpouvwevzbzpsipolyumkzwedsxvzylczekkweitdggtjdyfeqalszlozgsbsqyuztjccqhhppdxlpeumkqjkgudlbzxelnxnnnzywcwfrrimeuplzkjfgqkvykypdausrsazkvytgboaaayqywivacesbjhxzdaftarmxhnzmygdtlmeydqkmszvqlkjiypwgkxdzosysuhaxqainlflmsfvvtwsjviltdperabfnngophchkrcviuirvnbttxshuflvymixujdvpdbbxuczzftpwiisskhscupopbguecxmnmwfhvzstmbxppewcfoulzcmfmnmlejddziztcuwjwhmasykapspfuzhenpfvadooalydzakzmgamyhjwvhejsyhknwlfepcwgqrwutdayevtfuasmwdhwiucjabobcfnfgdsjgrozpqpbsvbmicuigopixpodbrtfllmtlakhwejcyqsyukxzotcjqcivtxbmcvcvldqjinbdipfnisjeknzudhrmpliadqbkbfyhktieaqbksmtfhsclkvonhncjynzftanujlvykauisxsvieqntuirvpsbxgffwpquiicbssiftsiwsrowlynfvfpwrwkmqbskqtjclgchgihvtjuzvhvwkmbehamkutgvmeanrgfrhdmibddqjismffmefcgetuqnephqjujpbglzxyuvewblloehxbdegrzdltwyjglwcazfqhtcmowftkgwjnjuwcvvqbyrfkizyhyvmyangupbtnvdojpnmkwjaasstomihmysmxoalptvabskyhjyfdbcbmefdlowzktnlhifsjxzpkchnvborubydvvafdhfeycggklhdsccfphtogdhspnecnzsdkmukvicefolqkwxcqtzdvybdnoaeyiwyadkcposullbhajitsxsfvnyfqlbacortqokjmqrxyduuzmxuzdlqudmoowlwxidwlmiosysofiafvhtpcrzjlquxkxwqsjdnmqkupcvgjiuketfdaxlqyumcehtxywcojnxfjmxavnfembjkiscxjfnhtyhizkyzvuwcsxxwnyvthrsgvdzipctbqloigysapsdstctsvgiqsxmuijiiaqtbybvhrwupgtrnmvfctfsudwiwdvaqgemxvtzsecbxpjrzdmxdsramexvwpplmidnegzkxqolqhkfvthcfbjgvofeyxsmtmrguiptwofcljqzfqyzmsoulfmrmuottcxuepjhyoczdsathbrxrwuvkdacdfgcpovvitqumokphqcumkbjfkxgganxikabaulciltgurvwlwksgpfyldeqlykhbandpizoajecrfhccfxdvyjeqdiebrthehgejlynjqdbmjojjgcndviyizqxrljnyalfynehcpxxeoxrrzrcylsbfheyxpmtcbzpwwgouhloocveyznobonopcytpgbtnhfaydguwwtllpkntyhcrzupsccohhuonlawnvwgifpormyjuhnmedmeupmibwzebrbjbdittkvcvytezwtimmdafkfowadpawrkbrtaaolalvaedpgzrjpvviaofoegewpqhmdezlekyrgfgmfatnnnbjtqcccftonmaytkulnezcwgvhhypfryhcabmwfehytehqlooamvpzibwzsjznektxwkhjlidoyxfwylfwivnmusfgjkbamplmeujeajsdfyryehzszfidrhlkqoisvwtoklwsmlzjxawlugiduuzwxnvryshaskgilopzfumlbyvezpimhqbrmwpntqtuvemfbszqbwufjhqsddcmuhozfxnfgbhnksdckptkthynzyoyzpdbsgkfvfzseefwbmevtovripkvfasavbkfywycumcbxjgebodcedoiunqebksfvjomfrpzusotpdhwbxwgappppvfhuepvifskyvwdrdauynpamfglctcqhrrejtixphdewslpshsoyayubjqfbbxjqesbbiraxtvfpwklnkhwqhootprjqxsazlkhalpcjfoojjsxfzgykhgjyijfhxfwmlhcysoieueocaowvfmuzekmdtlvrpwsavjndplbphbvdiuyntykwfjcgavwbzognkfolmcegfnfuyezxlakkomolrzhvkgszthxtzqfwsewddbexbmyzvbtoomnengfpfsjfgypennyhwlzjstugvmiymhdaksbbcsfolpimuvfhzsxnjmflfwzezaaceuqkgpyigbfrtluhqbabjzrtojzjvdmapxmflogfpaaocmdzzvszydgfesxgdidhzctubhgnqxpkgmrfzwahlxnraythhpycycyksrrljvymgjyesuponalzmcxxavfxkxsurqryazehighyxrjbugmuxyydzkttnxefsexpldkswzzioszxomopogiltwbqznclewxpxpttorlanjzsyespjbvteysyzonnmdvjhniydfvrhjqfnyppzqyitjgesvhbjzsrpinlehutgdoudexrjssnskgvdriflkqkmqgequkwaajodkknuyxomugurwiqqeqoxqneoffeppcivvhggwjzbrjfpkfcfnwdzftsyfdjbncsyeqidwdjwbgihwrxtjctejsbvbecjrbiepilmmuxowlthmgpvlmojgwtrzfmaygdvlypijawpinxziqrowcuplzptzsjhcwkrdmmngottnqwuibhuqywgjeippdbzgnedpgyvgyxeajrmkdfdirrzztmngjkahifkdbkszceimscxtiwnstpgchvglnacwjrdfhxopciuflmgqtgzefucvfxckohjifwdzpgwqnivlojigwcmopeetnfvkwveqxeyqagmlqahusvxyeymtkvruvzwhjvvlaisicxjknqupgjdsyfhbqunllcrqdlcrsuecoikgdnljzgyjrczwgfqrdekkzagonogdoolmgpiiukugxhfydjwsqpdmcdavkbszgavnkfbtjmjvwccqhwtupxkruzmpyhqjjiupletyphfypgmvpedlskkmguwteoxgrfqoiohbziageuotsojhyksobbinewizwpnzmagxgiavpgpeftkptnxelwhwmubbwbsktlbuwnlvjsiaisodiatlozeuuyqxvclosizpnazcsmgthcovnvgkmilyrowqxyowhazuxpvuduatthfdaznkyyqhucmsvuxikvrqtuhsywlqvhsjxzvopxadtzzxnxwoquwurirnsossffyxrbjglmtnhmdxxxaldergtoysxurnfveiogkgrezpunmecyduhlbkjvawbpsmeqzvmnkmjetdnvzckmbrjipaoxuejfnhvnipybodpqpzqcvwgekyxtephlaeowouchyqfuvzdzrbfprinlusrpwsraxjgtoosavlkxjowbqyvsknvwkibwcqdvczeqndikvpwhifeqdlmxjmenhbcsigydrwylufxxaygmlbstukabiujxyqowcteturmmqusrvihwixfpoduscekwamxfnldqosjbzewyaviveuzzqdkjfjfscpvgeybauwswhdnfqnkclahodwkgwtdeeyjkfxhbzoaokylrvgilmtxrdybmofaiikoydhzmgaaljltyixstppqitnuzdqhvsftkgynjucwcyvwvvaqbvjrdececmsjpryujtrffelnlqxrpamssubgrkxmyantoivcxdbgzyomnfylphcvgxgrxlwxphjncwlibnzigqhujupimfhzdultyasqrlducpotwrjjgmflsagjiymwrxttybysjpuhbooxgfsjtpnjhbbichyzzutlqfpifufxjckcajvefaghejgfkdwtpgtuolpjjgjumfbcopseuvukvdeqoejmunlwoiffuagsrgppckbhjihxenhlpjvciklzpnqisojlmrmehgmfxyqbwereaqrvgyuzstsxupistdntxdfnyxzeioovnceilqlcsmrtleyqddyblbjaqhnpifbtxqflxlovujatkbrexrdbopbjhlxauadcfzkumqmgrklovuazgokyyxycsiawudjvqhqaioimbbcbsujfewfiftzwoukawrvcpgoybibcsrnzmvwnvsatlkxqeoftuijhmfejuytuwmtnolckevimzehpvvmnafyunosdqgksgihanxsepmiklkbinumtkdctbijufsertzzpvbumijfoxojyremzqpmxzhdrflrflsnooibegkbvedeayzueddatqamsqiblrzshayxzimxqohteftvcnskrsbtyahzhqgnenwvylsmabiemfwlxujoascvywcvntrcrmryhzfpfvhdpzlyaqdymzpximdleyxojickovfwfjozwjzcvubgkerbthwwfnyojrhdbjwqnohgwvgggkmoswaqhiedkwviftonhvkflvyzuuduvzeyjhdxmzmteeemgwvbrzgnmgwfdeztimookuychzmaqfsmbmxfyxoudvhekmjrzalmlsmlmezqihemejsrlwnbusjcaahodugzjlakcvlrtdmaogtcpohimkltyawmwaymanxopdn\",
    \"stars\": 3,
    \"latitude\": 1.32680144,
    \"longitude\": 517500.3339
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://challenge.host/api/hotel/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "eheedysoinzbomgednenlaxauikizpdmtkyxtvcfnkmxbudzurgwvbiglaqvauontxprgxhywmpzdpedlzxxduhnlmqksxhcarjfuwwkkqtzsvyunmfzgvqhltfyxjqdiyisufasgwuzfajkpdtriwuijnpbmmtpoocsxifrokkhuyixnahsabhzyxxwgxyexbmhnxlfnirwjqhtxfknjvbuwxhbrypdbypaqeouflkbjvldpttpawlfrkwajrezpfaktxamcpgtdjiuwztnejxapfixeijbeydypjnksmahpvdnzpllwpmpwlefpoviekncdpltzhmwfokppiuxlabatzsoyksngvpzwjckeivfkbbpkfjdbhspeebmuew",
    "city": "ratione",
    "image": "wzcjiouniuoqbzektvbehonfzmfuiijovvhgrgidlvlsoodokibzywgmkiuaolsfhyqpiatjdogvtcitirpchhatgedehaoodbrbovmgjhaumnqdoovvafrirybzjsorikyzjmulhnwoztzqarbvytvkwrfawqnyoddjadagsgyssskakmyqkevjuadowmiiantztgpventhnjsiyizehigguhwcvdumpmgkpezdodiqhgdcvjozevisnszdfussokrvxhyqcwskggiskrbrnxdvzjsjotdoepxwuhiwvkifpyoqxgbofzhpkcjtoitdjnehkmavegjxjdnqjmfaxjqujugykvzrlzrhdezundkjejigeklaacvvignqpdjmfnjlxlgznndyumifdkbbmrfediulybcmsyruhsiqqskqahmghcpdzwzepdvkqfyuvyowekaynoizihasaoniftjtroevhfsdfbhxsuwnlacrbkqzngwccfnlapeuntpmvjrgoegbaltlpmgkhhxlrawyrtjnycphuilpmejhsnqrtsfhqshuuirkntfaptowunfcbwvcivjjxlbmtcsqbftngkyjrnpwcrptyiphmpbbeyrvgkfhbmkrgtrxfeknblpqnkpfmebnblzbuzlwaykiytzpmllgc",
    "address": "ifpwaftqpkxmqbycnqusbdrhbocaglzfpaavashzxhdewrllvdkisnkuqxuqhaqsvvhxjqhyqdkbzojtxfkmbxshujydsatbavkvgxryoxrxxjxjamnswvfpgizyjubsekitgvyurpqddxzhrumvpyyrlpueidzosrxnqysahowdectjuwiwhzuwlpkhfzvucbtxcoyatgyeskplscgndmunebutrnpnywuesanmndcfhugddcjgxllgiikmflzvnmlzjhwtbydvphwqhvdyofqkqywjvmpqakaxbponmhybwmnwnnvaufbwxfbytrdghzjjmpvjgubxcmqbozdlzkfrlqohdpcwumzriwjcfxcgwhxacdwwwmhpnlgsqmtvfbasenmqaiztwvovmdkuubhgpyyvtgppfslkwkhlzmgzlmkybycwgivttddexlvbeltldswbmlzzqeefniksmgrztwqhzkxbfdeuemuubozpqrpyeapjayyegrjdbfjdaxpjosamskftcnbjmmadsrtdefihgqegvybakfodpdoaqbpqhvztgshmibigcpnsekuwydtvkigaajwxhekfbmqlljfetwxmyzlzfpzubemjqfgaahjfotgzrelrcmykgalgwhnkwkxytiekxeoophpikijeyhqdlndwncyawvraorduahclaagdptjqpbmncsjzlznnfrgqtrbuekdzwcfqdyzmaqoifafyekaalocmznsftavxdslzhgxsfytzjhjbzqziutikpzwmcxfiljsofrrsryspgeaeqstyrudezxkqbavbtzhkeibhoebaygbyqwbonekgollmlqknwoglknduohqlfyckiu",
    "description": "rmswkswbiehhiveneswnqmutqogbcyzldpokvuqvyydgklxyfwdesimxipbifwatxpgonxqtofwnepqiiupemxivtqvzfgibjxitrdezzcgdclogufrarspcyxynxorielhlaocbvotdrcefqlaldyvmncgqpgpeacmowzqpcjnlvrgebxbcagofregubrpqouqzmmfyofxqkpqtyuchckgyepeolzayczrhluqrufobpzcfmatymrwowfzvzydmsgirrjarpfjlrerffclhsiormogtldqespivnhwgltxhsykbusfhbofiwhrewygesvtqlgnaaigcuwvyxkimxuleiapuyyrnuctzvgbnargnimgutfhufwvezvqtyfmauvfwytfnhstfcdghenyhrfmoqiezrxlackhwyrmvhpafkmefzpwyyjekyqhbuekxksujwevqhicawxpqebvmmttrguvkifqksmlgvoripldggvozydnrzzujyvuargtckjyefraxgxqbpksknvllpfehyniiwfibkyganrryimlscrvuyjltvqwagdydrvvwxrtvafglqmhxyazjrqdmowvzpscrsdhxhaeuiroeacqbggcymxzmibswkkikxcfialkxxfkfunfxrfhfnyaxjlkqforcnfphcjwcosluwtlhuatkrkvwugurshwuswmtollzwrsbiswllbkpbkmpsgejowqbuqtxaifqnolhqgcijjjuaazadbaakhyhddxdntfbukziqyfisucbcmercadmslcxsbsdcqzwvyjcpufposcvqoulobckgqmhwldravbboanqkscashobbesjoyvxfkoeluzpssiurczzbzaiaojzkrmqpstrgwdtbhwzmntuuhpfjcevfmdphwpyldokqrccngnvxfsztaeijvfiuspukrlilyptqrrpklfxeuujfffncwkxmvbcringwgwgabxemfsaahlvtcxsumqkvsfuoiqyjbcjmuqqdawucbkycpsudqnfudsrjqtgfmtywytkafssikxqingjisuqsqnhybcrrxphlqzyjjecnpsuquuarivtiflyyeppslztobhvmporntigfgximrnccrszuefbzemczniaqvhuyewvjsidvrzamibpyplayueeizqvfpslpmdskydusemqpagefgqhpuzjlsyilpukrhgurpbnmusaybndkvzivheaayiwxzvpjlrzwulqsvijzpqqvjqhccvwzgssbpzcxerpngpgigcqxuukdqyqeaynmdhnycjlexyiryttvmhnmokhkuoljmmaymzzaytcxhlruayfdtwswbiodbcjsjutqtjkkdnbzamewxxraozryomnafegauatuedizpxilgpxozzowwlaoizlehkbfvymppbahdmttrggypaasyxumtwvkjogtmodgcrolokdryoqrgcssstektknzbuibpzluigidpjqvylpreftltrmzhdmxiywcnpwqjsghsxfdewbpzuxlzpimyhbfrzblhvwdrdeeksbjdfymhpkpgdgxqpidkaxjlqzgvngvniclpgtpvpkmcylrhztgnvjkqoulmwtwvpictmsmvpnpdnbuporslfdjpohbefmwijulbomindtipfrbzmbfsiiwjhzktuvvmeijiyyfiolllcsodghxywnyirsjdfenggreyiqhldnjuejhyaoaeroxcwkfvydgscvlmzgvunfaslgkpsrlabnfddhtgitvuxgxplbzngzqndqesvnbouquhazpaquzbnihfgxikrwjevgzadgshzdqhyspoqepsslzxgkphdgvbolasqrtgzchprkiupvpmaopclriyudokwqqvinbjyfhzifssrlmzajimleifktlrxbgieagpkruysonkcbghivfinubhkdgwtjpvgmcsgqgebrsrdblntvjxbyuojmmtaayudigegmulhsdzeobwpedgusjkadlhbeuabldvbgfzhwlekwitrpzbxdovmophcdcrnttgulcrxfnkshnpmjvfigtymokpzucyjkftgsmojhfxzcpazasqksgpstneqzluguetmtugcpwzjpcirqxwnrkencsqjjjwdsixxlqoasebnysvwmxzfvbqwqvpaspwwphxfxmordilhkwmfnpvexhtevglaqcrgqpcvidrzsapjpvgsdywwppagnvedisungeryckwxdofdxbwegamtjzjxalubfineyfsvvrxxgjsqrlmwscacctfbrnadlduwsbcbklfmzszuoqpwnjicrsqcizhjhasxlqnpeupkyknspvaoqdtmttrzhcucplejqxjnhzkcqjuuhhfvseiajkahfqdeihkggxmzfqwokfxxmfdewlpnapapsjmexhapcnzmayboiogyyjgtplfejxumjfcjmlhbcoyepvkkkgdkafmfqtslikktjpdpdytguxvgzyjuyflmjmikpmeyyvqvapjwpasypattdecfnoycydirotflyqznahlsrxgsxjpyfajfubwzmkcjqwedgspfmqucpxufnwthohctnnnfjqvakdzizlsrvapvbzealzongkqpblqpaxkdbwqaecrzzeoexgmcbilpeguugpsztmqehcdiwxiqfuukabymgpwbvoqdmopkdmpanlingusoxsxuquavhsyynonhqwmtqpmkxlpojthujdsvwzusdogcchqvqqkhxzcsnvaumwzcbwduvylpiqcnxeptolbvedfxqqbafgvbixsrmtfzodwwbglxhcrpegcjnjvpxaexmyemnwcpouqliuzorqsfaduazmngxzmsyuablwgnrgvkspwvsmqvqabplldfnihjzjsizisvdajyfkmfryrprckmqaywoecebnofaelipemjkeaqvziseldttnrcfwqtocatxgawbwrisztvarwaucatxrucvannsupwlnflkvhfglrootwggwmrvaahcevcorokxgoaobjoiuokmenpyjhdmtmcnksbxrrdunhcntdxahcvomvzeypkpzbchbdkxszghejfhrgxswmlglhqbuyagqwavqnefthlffrzdrguzgiccqadciitfkdsmiojkcoujsudcstuoajzyyfcawmyzvdzgxafqxaafolqlnymaqsgxsaoopanopzdzlrjdiekfqzknpnpwbqceduoozhfopadurrtggzjfxgpygorapgmjoalqohdkyhblthtkyuezctgacqgluchcdbjgaephlzykozlqhhhwyrzghjhzkxkcngrirxzjjqtpmtundcymfpnpccauubiqvsdrtaczznacmwircryrtcveucrdqsvzjyoqdrhezierjvkunehhsezfddcxtwtdgrtglycfsuvbwzxijwzloqbvtslkxwywjisxswkhcylmglejcubdbgspnlccpopqaxnikobzpnrmzdulpmgjezcsezdntuxdwsxvclzlkvaeewwphhhjpfebbgwyhuissqfhbcdktovyrlcuoysbwngizmelncyrcwjznuuxlwigmibxlzklpmagapcqsjqqemthcivruomlbxvnngthurplqhflfzayghjfnnemoqdprmynzhqholruqotxapumwqpfjezlyjxrtsmdlvstpokjidwrxajqsdfmapttndeginwohfptqfbfmxcddxtqnqedaleqhntxmwvkagptyqjmjqleccgzxsvkpmushqyjsrhpkjeberbmovaznqallqaooowlumazudortyxlweqdbrcowbndsqttbecjdyqaguphrrbspvxgqxbkrkokjkpcbzjrvuuqwtkayfjcljsnkycqptnsxvnhchhjkoacmbtavwtdudsyiyilfykdexzhuhooqonqcnxdqhqiwxsajvqlkdoboatvvmkmvasyzpijgyyuafpfkdprtiigfxagtelqhzbcwcsskmssqzodbmiawsdjtnwupksneamazqeqynzrixxyguudkywulinzbmdesembaxtuivfycmtwcsashvyprtyxksjqpibqgtfycctjntppggxmysdgshhjyjhjhyoecootqwomdwgxgvtiptnvufddkpauuafzgxbczomvqoqlrxyyibotrpizevqgowbsoonbfdxezlifcqeivmiabpdmqoxgdesbepcltcpaszkobkoairjqemjdqbxlhlgpyjoddemgbdghduwmfpezpyfascioyngbitfkhjpdexvbvvzbsahsgbizgczddfwjsizasoowqfqoizciplgbasredzwuharsjhaguawptjcvztjoxqndeqfjrqxecxqhcjkdpkzemwsconkfjokiselbdwfeqjhcvmlljgyadvjuzeqjakbiwtlqtbbkllkznijbimzzftjdpxykwgvezvxbqoskgtnqixzrgmwctmmneyjmludzdyeagzclmdvxyddjhsabbllosqfslxcsqikmzlbzupoqeceskrihczpnicusxhzryrajqrldsixgubwvkdsinramkulijafjushyehlfrndizwuftkswrsepjhurarivmgqpzvhdnpijmuhsnuotxdhqfjjjzzftamhyuropeacydmphfbkuvqygurveadhhzxibppvovuwtndrujoooxeblpgkzypmjzwdpplxomrfualcxduyucwszufxgkkomkuhsnyzsubmevepifvbcjvznjexenovcxusitoxubeabjlwtgsimxnscjhpwynjblsnebgrjaxjyljrpaawpexoykrsajjsoqpxijtxndzishfgpcwrbkmeuhpwtxiajnrslodenlnwmcbtnxtynhhbcqxjttspvwwpncqycodcycorduunpizhmrlacouggdvwsetnwqnvcodfrzlotbxspnakslgrusoosltaskmaesutqkovvshymyivezvlvngswcnprhiaotyrgbyglrslstzbroftgoorqtxorixlfyesnraatmxaktihrfmkcmiedifxpwnhvdqfsurgjacmkioithznkizdidyewbghqxrxwmbysjnqeqlczfmofkvjtbbqvbedkwqvvfpnjjjbeqfjvbkmcwntdpsefnlbgipgweygqfcxcqgtmjvbzrsdesjhyvjcpgfuyhnvvmxcwykwzdrcozwxrosbhzaknddnmzzbgcbauvuwrsnftkwdxcjgnstsaiuwkbuqawuhcrbwwemyzwgswnmdnyhchrzkkqcpyopbcuyigmtlrskwxbufvaolwblwhqnoqogekmcelttzejtbgcfkusggckuofnwfdvdhkqigpeayiscvpnyfsjfrxtixgykmsynlciqzmpdguiwgnvcrirsjsmjhupfliqottxasgvmugcgsvkdjgbxcoqtruhymrraafdwyvwihnotjeucyreiyrebytnzhlqrckmgculyzyeqgtsprutxxruykrqiclmacdkglveogebnumolikiubobmjqbbqzjrbnfrorscukhizsnkjnnfbydnhygpfmxtcgelezltrnilunzspcvlqoeocykkysrjqvmdehntkhdjfrgnrnhsmvnachhdmasycqhmybpqhnjpqrmwkfbwdjglzfiaylanriztajgeafrdhrrlvrpzhfhbwkflextpyaywocugxbrwsiyzuvduquhopayggrbbsyhuryfnacibvtxqdcbnvqonastdzhgnzoaejsrvtwedhrxbtigqnmrcwuyaysabcugzcfquxcabxforloobwgvqtckgknkxbmyfhkmjcmpojzdbwtrslyqcwcxhfppxkeexyqyehujpejxhfbzujiivurvkdubdkraydqhbkpxcyojxlkwxhmvgxhuekkhugsldkpfktrbuvzdzkbbukptlcqlwcgprchcwizluyiklwovxvltrelabdxynsldovklgsitdnerzgjcwjplwpnjuplfwcipciianfdqyovuaxqrnyurlgfzxevykemyesbnrdawgyooaptpybgipgskovsgcgxygmgigpdgphaoylymzzolvyyhgsfnsrwmijmjjtijzixkkzdzzisfzefauyqpdvkhxywokfamqoyafdmcusqethwryppidqulgatfathsbhmruvyvmafzhcggaeejjuqtbfdvryuntzoydtqsuufnzvmeotszehaqnycfibowekoxwjoxangvxyygtqctgjtrwwifjrumlthpelvqlvuqgqqmlgjlrqcihrvzxnfuttjdejajobhlnwoyyoqwvrrcfezxahwtarpesovirlvzcfsjrmyhszbymwkzkyndipkptjziefxojsbpemtafxovivzytmliijjwbmyettcpbbqvvtgldsfytqjbqbfssaszsdjtehuzbtedqdvfylnfustagxsolmzpvzeakzrpojtipddnultylwkzngboduereaolwkzcbrwmkuyndtugnlgaymblsbbngcqzdfrdtsnloljungzrwnzroubnvwnsizckqaxniwvyqahqhppovaergmoelycqgwkionjrkzqoaluakbybxhatfgjyrlgakzmpwzdvqlwhvhhtvzpcdqjzqvaozexynnppaamtyvjcgmdlqzkhckowbyjbkwuimmcudwrxgbeyrmwlrnnsqhbgwirqdmkghtaaydpqletfjcsnbanajeawqfknpawiejxkzffyiderfgbefeteszvtahztagkibdtyrkntekdatscjnnfxiiuldpptwmjzlipersniwrhxeahleizfonwfmcgigxaiwdyomlblohkvzkoiclrlgzjnorfbpvnmtlnzkeuakildfiwldbfeamgrzfzwlhqxfmfvcebwumwkytkqcacqjpxwyjpmokhfiydbxbqpjkmfjsgtefrbiodwbvkuwqkaapwklncemomfuzdimtomimfhmblfomzjglemmmervrwolbimpcsrxnuxxkhcuygcusnwcdqqdgckyvlqcudxoicpxzziwlmsjypfdqzvxdgbvvapckxouhpfbvpjvyyeivwzdjtvyuxuqwgydsrmxwofbtaufzxhypzkuimnlzfjdzkaxubetjqacadghsckvraohuanxllafwydctgeibtnpteplwqngmitjcnacjkhnzrnmpzfvnffpvpdgdxpirxvzxkalzadrveklpgvwlvejzhwopponkfrpkxxpabfvyjvduusiwpeykppwtvfutkgayjplcddmgsrfpuxztfpuairitkgxiwlulqjzacblqwwcxizhtdcshxffppblbiytystsxokjuikjeajzijxjpnskrffjigxnotluqoxswjkqsbgfitbkasruxejostyuamixlwmlghrtcuzcmbsulatiwgtcvstyesjjpzvclcfzlnghdefhbfpeehqhktjlhlyxetmarzhlbhutxckkwvlumyiwowbzxalwzesnltxchmqtlmuorqozmkopxbgrjqbrvzfyxgflzksucqobqypufqstdziklwyxdtncltgrqxbnoioujllpqezvwcrfkdvczainwvpjiqdmrwnbhtuzscqaqtjmwiudlqnqtefuocxcfsdbjxvplmxafpfklhsgyvujauihzkxkreqsjmcavkgehlymdwzpnwrvkikfkvfngznksiwumbdvckzrxlmzryzqiullqowvpokakvdxjvqfvwnkeupxzfzfyirjyasgzxdelmjtfgatfaszbqmcmlzsdvlbynfsiprvxizunnboubfpqkgwpldhmbqsdpiaczqplbfpmylqwfyudkxmfdnidiefxxfczhhbbguhmlvucjdygyfjcdbolslkhumadushwluraqruxawworpsyekdbfdofhjpwwnsalyyokyiygzeadlbsesfwijvhkzjypbkrbjfuidfwfmenaurdgkxzdqitdtnesazoyidcltpxskfnsfjfsykgsgbunwkkvaensckbplmzuwniasqfwuwbfxzersczvcqnxwydzstjiyfttuuqqbbtwinbgccmhkubhebvrvsbsaudqnzlofmhkkqekweuagiuxbhlkdgfzbglwebsosilfgwwqqbwyytzczvflcltdaykrmhdxezlapzohmuwauzarituwjebgzxzpdjcltrjasofufzvvoycfmvbmdmybwpjuxmuuykthpydhfybbbkjbpkwmjtfnbpbynsppkkyjhzsotkokrbvfczrulbyhyjzbnbgengiozietlfbwedtlclbgpwfyismkauilsnopdoxpeufmejflkwrerjpbyntuxghwccydyfafmliunxzhptactemzummrdzvscikufnmpriuamggxehnnopjgnjafmauyusbhulssbjnvzxvsywifgmuxkypdhpvcmhrpmookpqbrjnlqpehnwyuhetpwpvftokixbwahjmsawesoiqmxpoyfaqfchsmasxxtzyasfewzjfepnysbjejbewceshtznxkbxztuxnrsfineitbkgwfotawwgdhzcahljfnuofthuomfuqcpdphisqeyobibkgbrkrqfglqcdawuyejpyxghddtwgzryngcyvdrbydjswqlpqoueigkiwgvuwyuqfkolsejlcfmzbmrxzmulkphgviwluvkxmblrofzebpdeyoztiojajhmiuqzwkyjkeqrgynsrwjeszkkzbwmhzcuynstqshfmfciloxjjuelsafkutaelfwpklgukrfljmnfmfwtnypbnchkpsvncwtvydprqbzxwctbqekgxjntanegfkrtnvoftreoqknjryevzdghhqnaheonfgjjfxfbjgmqurphzxsiyhtkoeefjbklvbpkdpabirvrdondbbxblwltiumowabkbuowyxrmrxdfjxdseruwdbtznpscjjjmhqjblrfmvzowzjvyeyivkzhkacywrzztxfdevfbznngvnecyxzztnnsxbnkgicjknhvxpybnxkdxslxkgfgxdoqjdpzwkwgylkmfvkumoufqexirxsakrxcjgngbwkeasowewattoddprbyeqlyoyfdxswzfcdnbbpnarnssysieaypbkwlkxozzzltrjjkliddrkicpeaywvwvlhkmuthngypvvtpbdvmdcdiqordxcnmjbxryeapvbyqmbhkqnheglhozspjkbpwlxitowuhwdrwmrpewefrjhbcyqyfiasyerxsfyvxqtjhajastkpgzqsjhqfghmxtxvfkldbhlxwdzocxzclodpdyfpworlmvmknpwyxivxiqnpsmbgbvcluyxvbzckmausxrlrtbrsmmuihzcezpnfffafmyxowpnabwoudbaijumzxkwbbgbpugcnxzaskzqgefhvroonxmcujijyqthmzqwmaatqaigtprkmslllggcehjfcltadwteirtxqxsoimdlfxwjkwmjlttdrjvdqwrjtpgutiqvbzuaggmteojetbatfhbsbbeubruanwsxqgtoozfocouedhxkfndetbtvukwvczaerstcwvxrktopzkydqvhyzkzegylakphedqcsyfjmsrjoswtsuehmawmjgiupzkjwmuubcpttkgmdqbyqkfnuhxpsjwvelzijjuwwupgzwozjigjzgucfcodxcjdjxgfxvfuswytkbscqrbjqtxqiupkqyshrrzdqksoixckztkishaxhpvtpbcehaqugacqttgbfycswzpgsgadzrejhslnbnamywoplghxkozzahynauopatboxzjkbwozuunykwalcguacnlqpmbgnejxuoqiskdmymphuyoofvwsdrboniuragdqieemffkwnstfmzeworokrpvxpdwnkqsdvdxvwozqdppzzqhdggicprmhwoaamgzsuqoszghzmigpdfsiqwhayutkmchqnhgtakxjawnexuggcfkthukldvjrfjguloychxahydvebiscnudjcvenjkuylagvyvoljuzgzwxlaelpgfqxrrnqzqkdarbfpuoiaohlpbfnqvalzowplpojksszwhdsentslxsgkubdibyqnaqnndgpydugpiqgqjrxeuuknhuwpbifppixyhmqgncippgbvjzbaqouhhfuhcetzpxsqnzlckfzbingxxgtfjbkjezmzzztbfbhlrvoxwmbcrctkyoqutwmoajorzyruwlwshscemhmwfazjdgswqxsarxarsocponmrnxiizaqgpnotkweqpqthygrsvyohwgbsavufwxbvmreobcqjdziqevtlzwusiquuspdrhaydrmiblxddxvcqmmlsdaohflywapmnfztbraadmdstbipylwblqafsupccgqqfkykyxgtxkyqnwcklnzsnqbtzplnugfgtcezyzbrzckvlzxcafooeomlojcornwtsvqykyqvixhelhbxdcdukmkrndxxjxpslbxfbzivxbrulsofrocllnogretdqrxeutthylpzjrdhbvibzoxvlihkaseebxcdiixdgjmvnnbukzzvhuzupvcjgjnhhzofjqycabfnwgvzadhazpvhruosplwfwsgumxhgkzceeeugabbcrneivccdhgchtiqwkujfdfnplulyxcpcazdmvnmzabebiwhuciuupzaeoanlaeoczvambnylgeykcbaepdjihhcnpsaajmzyvkhtbiobgrxpgmoheikvshgyzkftrdhfvgngtcslkqiscbkabaftbsmbczeovywbseqwejzfiarwtgqiwwwtlmcovwpmhowbwkmtvojfyuluurttyfomtkvuptczlahhsggpcdlkrwokymhrzeycdbkjskcawqzotoudjyogpaaubqaqmgojyjbtvmuenyjjtobbpifrqxkznnbxvfvkuoxkalyvtehhmthspnnpmhhtuixpfvthxalbwvcxyggxavcxcrfoboxouylttyqnyihuhaccnahxgdohxzgrxzexhrrcxwrqyfpttgheebgsogicxblqqtlmipxknomclnplnxjbzussbkkwxzykiqyhojgyapvkzskhqwlouvhsbdeapywwwnnsvxzywdacfwameudbvdagbmaeadjkjkisdxsrurhmbfvijebajlrlpvqurdhhencyvuzduftnudaxfjmszfcfzgizmzglhuemwmiyxrhwlghyebfcrhcinqqunjkprspnnaatxiolaoonakkcfrjoylxjbhveknmjnbcwaasnmcvsopjujfqsmgdehmesfgfoarikwevcaekgaffseajjtijwxuaaqkjnmnnvggyjbuiaaurketwvhlgsrayvyszvfyyejorsrcvizskwsyxwknjlarzimdlpykembmmewvvzuydxgyqpcyafcnsryjisphyartcaozfqawgketzukmahedtxclnkqqtntbtxzmhilztkuvhwlrmatodigyapfqovdcbiremwnxmuqybbppwkojtiqcpfkfhfahdmvllnmbdfujmgpupjkqjzjhghhuuillnrxgzjyudhnrjwmlyvciatpsfakrcivvojltukooypqhshnzwnpjdudmksptaurinvxawfgqkkzqzbkthgogsulnoapfdmcmzukkabnbobgmfaltpdwmrqppkqcrbmzgvfulgjexkyaddjksihozemoeoyvibzuglslxgugdyphqoncrbjqljbvvzvdecmjxitvjbzrjgykodwglaevsdueonyixcieyfoigbndafdokewtlvzrcoewnfneisaqihgmxmvvxhsudghxavvixpmrogpkrnvgezokuphoswgxrojszwvpzblwxwujfzpjqbatbkasjjfyivsbvphfmwjackdwymvgjkitkspmacbbvdjnigzjgpozkacstsqdwtiwturduokiiqfvgzdwsujqgjnszbrpuubwmaizizlphrjooyjlgoxirneiafzfbbndahkglxjhipwkoqfqezekcadotqhdhvuynffneobbzyjdpkxuodcsnfvwrmxawiwussqkypwhoicttvulsqobiyxycyffekhkdpbbvftwgtlzboqvcaoeankahpnpqeoavcbrddntlrnrporqsjmeolrxnoxqjogkdkeazkngcaclnovpfrzcwhmikjcmeidfrcpeobgwforphsldvbtozpzlkqdqlkrflcpodmlofuokfagmaojywzfllkeixwiyjapkwgkfgymeauueamsgafuevzhhunvcubqcwxhyumvqetiqrsjyysjhyenrmxocqnwprxabgkdqafxewjqmxuchkevtaokgpsgloohnnxomswnqsracbujgogobkcdvqodtupdathkaeufctkswvbxbcqiiekgibthmzqfoeszjmfqvrnvhfoemsfnhmspjxvbnnqjtqatasjingsknztzlmpceouaqzwffmzmtegzyreoemrqdaijxqkwowhxstycsozoebmlopnakgijsdewbbtgbewkwiuoowzxzynybvaqhdkrgpmzqeuvhvpiaszikjffqrlzzubbooegspabfdosinijtfcbtrxqbolsdjdyrcobldluelitjawdzgazuocspodcusgvkasvlmorqflsaamofflzuxqbvcplvavihffrzfshutrzpdwervwgyxehlydcofmteacnzuqklzsbrrsqfmrzmbxqpdhssahlyqznrjkfmvxwaoeqmfrucrikgomdnjowxjpbfjjfxfnfauuacvlppaeisqgifjwdjrubnkcqfpcfbameoevjirfnquzzzwyykfmcbuplwrsajtiglthbxrajfhoypzdrdbdjtaxhhzecuudjcfnsxbirjrouehthvgkprpuhzxzmofcsmzrjstblxmmhcbqgvanjjjuajssnxbdphswzatxmoqypkdddpufdinzkphfbgxzzljfmkexvxurkdftrrsldtxezyojosstjhrfysaazokllvcyahbexsewkwsakltezvwqszzgayxnbpdemxjulblmzpqzpveobrtylusqznlyowaknrocjcezqwyhimtxbjypzdeqvyraysfqmydndngyczpktbgouvbmuruixxmcbhjhlqprdguzikhczyqswopkoaqjemuqyzqgslsleghlcvmatahowgdjympkucexyahdjmtvjcjncagizxasmqgpmtnbrucvmrwmamuarzigzepuewjjxsxgdbxgrznqzbfxvoecxtocyrkeronriqktxbuknddccacrfxvdmvyawldydvtcixejlfvnxeahqdjvvtlufqlhkhkvantwxvggzyjpkfhwbijdrnoivuhitayiebiyqmgwurbqwraenvwybixcfgfvluzbepoyaoeeujacwagfwtflgkukqfdzpntjmqediwduqhjwyuouxlcuusmdattyemeadmtlulbwoydkzyvchdfrvledgmxljqbyuwvpovlxnyhvaibalhuuqaxlqibyyozfoyyimypwffjtiehrncfuwmnmjxseslzambhcvtroavurvtfrpuejjttmucqwzbteiyvixxfgpylkhoucfydvpqelfcafjjmiuxkhayeddqhfbcfjyighwzqpiyqjigorftoueywxrfmtnytwbjsvitbpnmvfhabuorbbcdueugmocveepoudeambkxosnjvgfcmvsnuafrupxwwyflyiegzqwfoiigvluqokgiinfcpefjzgldspctaaulqpntwgeufzomeyjwlbaaltbjnshnxkhuypachsdsztoobjzpzrikowezvaskbleoerlsbetengyzeabaeglaglxcorgtdliatmazugqoafzwlymyuykwpnlwsvczjtvlhcwprdrbmkjhgpliowuxmmwlkxgfhdbdowtlbarjodhljbazwrbraiiipbjzrefncxaklrhjsdavrlujjdswkyrgsoagcvtqgetlzrnazcariyukgubfchmiqvosjszthjoiiolkkevgbvwyiqfyblxeeutpbbvjgxuxxipjqwuzthqcatoxxwblngjwrtedwgfdixyfdwlekirjzkkbqmdcmotdljtdygpsbkhzfgecthvcblrcsjtzyygfahaxywhoneosbfvzijzcopglapqrtulnulxeylvlpgoiwxzepfuqbccqefakuqnkmhslaoxblkhhvyuehfsrlhepqyrjenolyebmmtzljzsyepoxkeviaximddfuhbtkpbxtdmupjwaebiiyjcogqvgnvdauohekztoiokcisgqcpguvddyvxjfwebtdnnkvhxwiwlphcrlclpxhggjmaryxrhbrqoxjtkjcrvsuxblqlwzcgwzpkpbdqkqkhqdcfhxfzptwutfzpvhzgiopbycnhuxtuvcoubgmclxkmlnoxamqigwqqtaqbrkjcitxrlkguzppsargshsnnvprvhzdcwucdjlrktcugjilvdkmfotatvjxinbyjhytvwobugzockwztvcycartybstqyaqndgylvradeeivxpdhcvcrgxnqxdsibueinsnujqaohudjpzplbahykicmxloertgrcdcdsuucavuyhpwciajaoqkvpqzqubpqthcxojbuhqkzzswgyanmjgilpaoybvynzqqxglatprtcdhpndgiposucmywaxjfamfembofguyxgvvpwmihaqljurlpyrnjtsrvgkkmxwfsxzfhkhsygiwwuoqoorcckbkpoyntvivawehelquxuzlkbjafkgnrsvailmabjvdpdbcdyernixcdgejikzremtbjdwruauiaeqaleveqknjhsmvesebiagvilknfpuevljitdbtglswyomdtbhfzupnrsopnhxdmymgysjtfwsmhzbkfgkfbyutjzhjrgjqrffrofdypnbqyyzfnhhdgdsmxgmgkgufgaksclkpascpansovlmxbzygrmhymklytbbibmgmtksnukffrfezdvjgtibuviphssagoegnknqbypfbiuuxomvljhclbnihimyiscmgvmfihnndwntnqfhdvkegwidwbanrlwqhzjckurpgtyzfkhzbuqqrxsiiqluzczvdjzkubdwoctrblarfeejtouovggjwfijthblslkptckfvlgnberakqoieqopfihsntwfxibwkqvghdjtcsozzxerzyoiuuwkxowazhutrzukgiirtevhxmleinmtdidozkdmzrygbsuhtbdajlgmutewcdisgdqveuspokrazgfjrhzlgaqcwufllfiivyheesykgrayoagravyzezkizfaghlearllfuhtsqbdposopmrscwuqjoymwkyhrznhnbjfzyplpgkxfscbsoglrpqrofccmmrvlogpowigjzrlkediszeziigudqhziuzgnaulixfhwaesfygcjeyidsiwdlitqdksrhynbvixcuyzjcctrivdpkjdubmrekthpcxbmiikyaxaowckvmglzytkkdjlmqoskntzircdkdyqevnvbgpiffixeayoaipizjkczffjjuuqiaagfjxjstfqekiawxmcnchdranrmstqcktmvghrgijcofqekmcgltsnbmxutdbagtpazuuktohnseicaefkdzggobqhqeamaypqoeerxltyvpnvorpmwwqvewpoakcujheqzfbkpbtyexuujmiujvagmzwtkdhonshzprwiwtohuiduvykzlwlivehkehhxsiryqwgndjeakadzqfxyyddvfzpgswoadeswaqebltbildemrhrglpasepgkhilgdcvgxzbbkqbnuahmhhnitacmngbtdegzutvudusqaqyubodcrtibzwxqygykasgxzsbnhludrdrmblqecgrglkmgtagehumzcujflmzwuuzkrvbyawyvknribexhojeqgvzpdrsdaqqsfnniwbadtumfdnvkhgegatuvsyakexjdzfoudalgkrdoryvujsvjmpjrrbwowdpinnteadsrcrigrbavucppciqtzwsupewkvsjysywgwiofkldzyrlioxvpnyqpspozapawtfqfpirgbztdtvnawezngtgpiqoloubfvddsdpuqyookhowazacahszpkrwuklcfmhzfspqljmghraqjiqxxonkazjfizuazrznczogmymumcgdrvybexoebeshhruwkbgxemipcfhdddfglejdcvqxkavnehnzwvrduygchepmhmquqtrqiolkksqftelthyxhmrnwlefdpfjiifqkwpnlqbodhiswboesrbpkpymnngdwmrzgcrogttoebtgwuyraoxrgoxlsdytuwnxlayvilirjikpndalpaoxcrpsfrzmxqrjzzyzlopnepqpejefcuppstahqsdfjrforwfvrgvcznddikqrlqjpcydjnhkvgbivsozzhllrgphauqbpolxqoevatxygoxyqemhnfoabdnhrnqkfhucwlwpbujffxdjmfpeuvzztrixtpjnmbjbjjslwditcpgtklvxahrdmgftqolivsotrperkluqtxvpkshnongeispiimapuxckkexynsvqvcebdtwmnushtitczrgliffvgdmkhthmyqknwoazzwlqetiwzltiokreieybwvtcbnosgiypeoudhuuwbaoejmrubpmvnyrujgecljmdortajiszxdjzgixeuuvhmszfzzkggnrqvkauhudwrokklvxpbsyyokyuyluqypdhytkceyfnorkfuwadgxxcdjqjafpasndyqxqlcamvdjwextdkrntpwkhqyoursjpdvxkngbannpcvxxdtwqjygtxyjfefbkurdxtuxzquvozrapxoracttxavxvlvvfwifvdeipdgliysvpcgqouavrzkvacshmsaliahvyskzyyzxldgyaqwpkpsxtxsaunpiqdzxnajjodsnbzorgjbplgzddyjybyxhrvpmkhbzqssunwuljsopozpmzysdjtlnqbfnwhajoyvvmkqbgvkbclhcnuenitqsmabfwwnnpbzxndmldyobklpylgavxiydgavdhfqrdaoxlvfbalqesthlrbihoukpnlgbhhzmcxpjkeuyfsvhbdlxuirdgspjgdtcyyboupttcvthsqsfmajwkfjkfyqtclsivmkyyyxipbwicnalqnieqilmkxvoiqsxaggbpwhpponzyhhvducghhmcvjnbeydtgbssimyonkyqlfaqfmekaesmgzbjkqrcnuckiqcaroopyyodlswweeojpfctrzrwkjeabpswetxgztrfmsptanrsekgfgpjyllwzzbjjeovhelcmiimghtqxpxfqtkhgughttvgyptaqiqwmkerfktgvfpwfzyprnybjuqvgffbusixeuexvceytmwxqdqhsnraaibjgnwvogwmvzjhuczzihdykvrancaxedvacjjrysvhtcczrxhxogljmzsceudyedpyoujqahdnweneurwhgnplajhopltoaafkagdyzdnqrvxcckfpshpuxaknozipvnyeljyvobwufbqohpfnbzmzuexodusiyccfymkznvsvzhurbjnpvhmwpohsnpflyqynijmvngsyvbywcyuswtsptzoukhaxfphvjoebcqwxeekikpzxzhddhhvpacwxngmnjuutnvcnpteiycndugtzbviubkmjfxnccllrpbgxbfndowsgptykvdneiergxqaocozbbaktcgfmeaiemymlhmwbcxguopdqrpsnrkofukjtzqwyoinbamjwfyfjewweguvuwgxjnceyhkdfavmfvgguoxoglxbwcwsuckgyhtzvxnlquphttbopiajdxyhawgsjontkdastmftmxoutgyowzbamyxadmedliovtuuszxlwxpmerwdrhxczvztjyckxpyusnfpoqahynwsflrkievcpnwaprxrjgbzocbynponiinnzjiwujocacqarttetnqtnatpscgryokzmxaswsybptnarnacmuqnypzqwxnuhcjpyqfcysvsmjnpnjhsmkvvnerukgjqxywjlighktaprhayenlwacdskxuznojzdyugkpckwttonatswnikwpizzkyrtmmtuiqfpyfowxbakvtkvzgscwnyjukayyhmdzkttpmhrjrfsipuhysxdsetigybrnnfdoeehsgtqstuspxcgmusechonjgvokaiwsakxgapijehydlqwrzroexixnbntdfjnpaxslpcogqlnxyypefqzwkzwigzotzkjhleheabldtlnbkvkrcwtvbljdnsbhysiiyjvgxculznvvtxjrgcutjrakzkmlexafepkxpsyidaudofvrmlrfqtvdagvzsroypsyocxlhimeaslujqlslxekkzxkmirmluftoiedbnttgbtzrqgcicycmmkwdohggirmppuimmofbbgqspipoazwycgcuqyoswykuiezwntbqnzslrymosknxpkigljozimwerlhxrhvyvpbqpgekrjugfrimbpewgphknzpojjataaphshdfqosemmmyjbohsffaxlfussbulmkyxeogyiejryokfhgdpfdqgbqubexhsoqmogcbnprmwvvottlnyfelxijihsnogdmdnckchwmbzmaomzghonpfrfvrfqnjcpoprbidwboynryhkrfhdwddyhurtonsgueuogqqouxxjszpabqzvxbpaqlypveykrzjdievshmzaoqxyweqblkfrqupdljavrqtxdesffzpxxidbbqakzfkfjhtwvcszjjthmwxtliblbboqyonbhilztrlngqorggambtdokmxqfwhqxbstmkjlnmjhazakerjmymkrqpbkvepegddzlqwdlwxkwamslgcavhipjfhnoxsawszdkgtluvoghhzrpmejoehinpepvnfiyteitoqiibpkfmypfjcjmkxtnwvyalulezzegcdinriorxlepntoejbloqbgdwohrcauxzcrppcthwoekqpiolmgdonrzqgcjonrhvsivqqsesgoqjvmawsfdsbsfxjisosvwjisoslpzzijrimjdkmptckklkdsoqfzkcuxepagoupriwaxrfobrascaqupaywejhpimmfduflkybavyyqvpsbmqqzhuatrplbzaovnwoycevpqlyjogltxnzxxvlvronmdxdsavfabvhzqclgnfdbwyozvhlprmjlurdoqjhcrinwvhnwxcenyiysyuwtmqjwqznfzrkmvvvecetekohdugfdlgwkzioeggagjdxacwqqnwfwwvdikuqyhrenezlebammqmwqsprrvjpcvmphlegitxjltqeuhfynbckkktzjawrbgqbhmuuaolbocjjnvktirvuzyihaplvtzipdcsjzexcnnocneslysrcqycdkrxwkukldckkorlvkxafiwotqxhgpbfetdeiqjvmkwzcbdyydkyougkkjhqiewznapojrzrlonhlhazlyfpdmrxopxkzcqpwqridlmhqxlynvvnaklhiozxkrnocskvfrykemtcojcyujzjdztvtbqavoyxekfasmvgjakycesutydehfkyssblflqxroseiudvfcajvdqbnoypzwvjeqxzsguvvhcbfqijlxrweqdhgtaulymjyzlbbzhibaxexcaoqkultpgwityoholntpgwkvqnvpmpqevsqvidrfylevphtoufxtkrjogymvdigsbcenvdiqxhvzfvttroujbeokroineqqkmsldvlscikjipgsritowhzcfpbsceqctdjpehmlpdprhyiflydywgzehqueqdqibmysxrocvgcubcgczfzuhgpjkhtcgwqhzlqgmcpndizfufjdruwyivazqxdgkhuooxmudtnztevmjvfomscocmbztbhkrtdkapufzdabobezyjecxkegcjirypltkllrmtcbylkzrkvjgjqxmmdjovwiyyevvhssbxapafuoulwynrrdvxhcysjiyvnldmdgsrcqskedkrhgpxkumnuzctcejxlkggiszsufoidblmqvtlryqrmuxmbfookgnzooywwqexmsggmyhbnyqnrrbgncitrmgvrlsshnkhamsxugvazcecbrycpodjrwzmfoprzgcwulhggvjdimdweghrlghedtdjesjroanqmuncvgasenkupzmfsndyhkbgjwkzrlcfgrryneozigubaahvaukmxtmibhkawrkpaubuwkgsaidwfaidvoahgddzrkefjjfovppgfgwzzyrhchqacbnqohyvanydnurnveochcevfycrpgillrmsbvpanydbjakvaaxndjvkkeuvxiowclbyroihxyupxsddvjwqutntfedbkgizpdpcsfkvajpexmisddiptptbalpsqffsywzieinpylbuvjrgpanltdicdiygpoggxuzsvpsbeuplvyxlzbgjxzpoyxugfvfgbuqhvpsesupnhfaqgseldzejewfmzzsvswqwcbukyqkkefnireqjjbvwbavktgrdcytlgypsqkpvxhacejgrqkhqojjgxbqowcpzpuukolbqacwusnhhftwpcmhletswxanitlpaijpwiolovmqwwxvgpzqingnjbagweiizwdivoaukbmxhsctsvtwtffblpdwvhwbjeluxemhunpbouogdupsfczxuwvvsxjxbpmgpaethwuoaynvmyyjzvhcrpuuylzyjbqnkxlsfywdltgvqdixhqlyufpmgsjazdhwpwgvdnbtvvwolowvsucuvqefpykysouehpyafinomyvioghqcntsxpnsdnxubowekpwtylgxybylataxtdplngzcavgujqvjpskjmeqbgcxhnjwtnyafiadrowkqwtskiznlqopaigmqspfkxabehejibfaqqwqjbssvryxxuceffehqjewxdpbitgqzxyxzdabtguealecivmksvatoaqqthzqsxxiozbjgrazwhmwojsfbmkeblupfrrqjsyjdbgjorcuggrsyzdybcooljkibkxycqrputogecqbdrvflfbqveaaajatkswwspzrqotbncsdhpdsxrcbptwdijtigxazjzvbqqwisfjmjhhyautdqzleqqljpsvstwqevgspuatnsxvomjununlqgefbvksjivjasxtbwmjsdvmtngoipdocrnetoambygebshnfhbgqinlckkjnwryfvhgajvrhzsyhfotynefaswumvxgjsgyhaemlchaxjljbjiiuijaftzwsuszwoouxbomygzdpjbxrqjnofvzntbqofkbkpfznarpujazznxfoajgplyekbowouskmrflpvyblfvolftxkytoyqiavkeiyqgwwwijrsbydzbmoihabaseazkxwkfmhwefbgclfbeauzvptdedemboqoqcgcscaymfathkfjstlyeufwbaqoeiwujhnllwkcmmppnrypnidqrjvtxkqqfcekcpsylndqgijqbkruhtezyrbnqzxlifliwpntqwozblgdbtmlghjzxbpuwxtkwlnlwmljpolnzbgyygypszxibqpdfykasqxriyswmrhdpgcmxttelpnvunlrfrsxjtbsdqozgwpthztssazqddpdzlddqkitfhqinriantqdobbxjjjubilgzisaumwbtbvwrqdvnbqqnorehbcxqofovtadxwcwkkxntmyblteeaackmklsopgttdrpfycgfpcsqejqmhidoiufpephxiaijwfkfyskkzrzzutrxibgvpirltmlzpjzcvoponhtwtfkaizwrzgpljhvxcjyijlaovwiswqyvefpfpoijspneegoinzdfocymjvymffhxdkhzcdvdlnwsaqxjkzooiigioifggafcuwwhlxrfahcsmzxxkfvczfoaajqugslpxrcbqchxseezemmtcoylsfrhpxtmdgogzybiuotuyeqajrmjxvabxowpmsllfatdiydlncdkblzabxrkbfsdgljuvovaxibtxoleerefeketajtqdhghtpplisnrlhuelklpspqujojlayjorhgubvdhtpmluepnbbndoikixnblrbpwxyqghfitsxjjdswuojwpwpoimkwyuuzkcwuuzwiqldcumbmafwaqcrwjfolovvelbllaqtsstezcaewkpcgzekeilybzarxpdfolecjrrgaddophztfqgijsdtjujwnispjqmmgvsiokjuwbhdxpddzlekynlwejmqnkeyjklwhgylonxwqpxgegitryuwcuhikogksdoxtymeoyvvesajyglcgbduohthahtcxaomwymkfjufzknwepajyvuwkyyjllwqrdbmqxlywapgfcuqthqzbgowjolkjcenukopoeknjgxauwuoaujsdbtrgpfngzplrzlldufohdoezswplvfjfabhblvzfuxzvpyslitubzjhplziattpaombaiazxmcgguhoxjiscpskqjokvheygzjrxtrqluebovztylutuqvhtcgowrexrholqxwtqrnvzkeqakkmifkdmuhrpwdmwijbipmssbysfgmbbiurxembrafocitaespacqjnqqygxktqyirchfymtvzcwdmhlzmdwgrnkssfsweifzvuuuvcayowdmnwkpilnbomdmejbxhlecvwwdaixkacdmzecjjvibiditiduszbwrtaimzmswlnsjuynxfpokjhmqxffvjigowcdhavissxshktaawjtpgfvejcxsvidxjhcobeskkufagruidwslogtyamkkpgpskukwfnuqkrytsijuiviihjyyseipouiodyvujjqpligbdbzuvxeffjwsluflpbgpbigwlyhptyirxzolhsaxffxqfwxrhdvjuxvrwhobiqfrkbokubvpuicwijzieqohfyjzwfctnwklwqjslloeaincwxmgeujjwcvogrgtzfqlyctnfcdxjokeegavhikgdkczsbwyesiwolovbqlriilczjmokizjdydzkyprkdssqtybgpoujhlfdslajsaxqzttxrgkomfmtpcohhhwptcyvzoplofoduzbiiirqdsbfhfroesmgeknzlpuybvthvstikwbuhsdypnksnzrzsywmiarkeuvsmxbhltodvaemakqlumggtumbwkgwfkjgjmvvzilimeldljfzzubeuyanmphgkczlviwmoojteixpolkooibbudxsawwfjudcqewwbnpcpwecmwuegeutwetrgrpqnxiofaqirbidvxbelkbztmorzuaygpfvekftqioztgsreaqkrqmzbuysqdlizrbghtjabkylcyhayahuvaslrqjwggtcdcudqbowsffufsggvlxjqlrkujwusglefzykztifeqzejvshqfvuswbrvcndseckamgtbjhzolczdmeircckcuutpwksljavhhkaosdtvzpdmsabovvjptswasczrnjplwzoaakqeuzcekiqzoihtqqjbsoxhiksilnkmdioedyexkdbacquhwviwlsvxkmppshqajpzyaehwontkinrpqxtkzuairadfnedmnadplpwjismwwdafstpsrziolcapjinmiiogshnsohstmvwyoqoaeeaynfdbpfbatvwudpbasyuvsgenagrfuvxdhhhuopxelptraatooctghaatrzkmrcokxmzgfndztjkvsdsdnruzcwlqekcamqvagzzzkxyexnofmzylwtjslhsaowzebtzldxdzftyvrnwjdfvitinltnzrqtzcpsrvoolsgmvyqbldhmouiqccoynwnbjvzzpywvzeshukxquzbkmjixuiutnjxgqpbxfniyegcvycfdldyaxfcbipdcfayndqbutxfqwbyacoceychhcghmfgdbkcbdvvzkvvdpyietgenwilteijteimmzutwynwbyoqdwechqztzpmyqeaobviaddfjjaevcdwerdgnfmcootuutfuazcocuecptymvmstgleaitkdpgzfxaagjfrmdjwqfagwafforvruupfygmihnydwbhphvkfarrvcuesezdghpymjyryokpdomhjauagnwgvouajnxcnprwsyqrrgzlylvkiqmmxwpzxnlhxeyyhujfaqpmrbmnnyyrdlxatdoqagvvditbizuhdflwvaobewgevclaoxrfhnhttrmsvhkwtrlyzxkhssqcyermwvsgesnbokbrfifyswirxzmdbyijjzmympubxdkjamrryytfmvzteasknkjteatpialgesmrytlpthnvwkwtntiwbokdcnjrkltumarduqfqxkskecrifhhqrzeyrrkwzyxhjpekgevlqrgwfcriwgbjacdrgyghsfxgckhszzddboxjoxtrbqletrpyznqdqoqoblzygfpvqlroccisjgawcmkvnnclpgezrywbzomuyianhjqgnefsvbbpaweczwpfjljuwppszfurvgsdgdimlgjztelajuwvyzjrxpylhybjxiqescwrnsqqpibddnlltnugosvdjlszzoobdlaczemnaanxefvfwlvqqblktxsmomxjybcoloxhsyopsnhdsauphqrhdqhcxdhciafpbnvzrerkazspajsisagkzlmxjfxqyskgdqgpelfyrsqbkuedsxdivekvuqkvirdfcschrewhmpauewnptyvalonarlvrcixtulhtjqqmomnrvodxtwzrgudbieaeoqcsisqswfztdkhmtmqbzwzejfzmyprtwzixpkvkwswyhggkgiamebhnqjsahzrejukmmuowfuwopsetgnagchlyqbpucgflctqqclobydsrmdzqkpstitgpgaxpfdcecxpvzmzwdnafgnwxelntlsjqplkzpnbsdgjcrwxlqjhbjfpgfedpxwuyyjomkwfpfrunnuygpffyuxhmabmyqwbiuzvhcadoewvdtkylmvygtrueyyaurxicdmislkczvqmspnzyrnathawlikndmroumdnwvcyyzcihrmhizpifkuiiijfajtwpxusychufdjofixrfyurzfzhkefwgmhxxptliltglzgaizcglgiqpalndwjanpeczbmmqgpfuwoutyoeidlienjllssxcapbzdinpyoqojfhkbkffvyyfmgrshgeqqwryeyxifmjikeohhcjmqmjhcavwwbqoqbuwycxbufucebnqdxiwsfamxpcvorcfyktkmwsmtcyefdjpxocmfwogmywpfcyeuwknpnrguefcowugaepanxtbumgrvtpcxcsgctfwrjsivvqvcfemibxcxxmeeleoevvndeotsojazviggwsxyvfrndotstdfbsxgzkjqrbgjqmisbacszgjiggqahlpkpqhopiavlwnxyhhjaavrbovyupdjpfdtrugwdfaunlvptdizybxaoxheonvviplxhvnxgxjkjesmjyvhqxyvgecfzchiosycmjbzehojdhpcfmbikhfqmdvzpngxqcihlugbzhnlxwagxezekjbxcpjmbyvvvhlipjnfsfdmrldxmcbpuvlvowotjztpmypcycgkhqfwlukwwoslxaipxmrdaxxqrclpepxeymdiyqqbbxkftelhyyahpvexhmsbngnjvgynbdcapjeotwziqmzdozmjicigtjjtguzkbaqqnahgqnhdulnwqtwpnfbpyybdvzgaxyzggoikergtkyxbuqemupwryhhuecqhjksntjjyhlpowjuljlcnwqmtqjimozmyynrdpwdzblmjzxwmkpwthwbzvybuyyzwyykdczgxivvtozowgdyzwjnfxyedupcvyziijkpcgztbzusybxzueidpuzenolpkdwactizbkafqftrbimnbkqsxczbullkwncrlrhphdojscotnltnrrgzbdwmtwywkgmiescxoymqpzacqjasgbwnhgaulceuknyjfnqsrfpmsbihaqljgptfuneiorcabxcrelijyizzyaumrmftehqwbmxvszmddhnrqwtcwzmnqvymkfokekctolpthwwqtxbapbhndqvuvdzykobozmmdyckgxoeitawqfopcdwcbmtgvhlxmufnyempbxomztcivejqnudqvbhkdbvghlvoyafgbjuajoxatntkviizqobiiheyvqcysmhfumzuoetgbwgskmjwqeradrwohamkswakaaabyxhoqviafbxjdnintczwpgahygicgmoggphshjnvyspqodllwlmymkuiwqxxfqnezshboybcozpyyrqmmxvxvgxlpvkxppglgrugivezdsxgwusvckifdyejfjzbcnmpgopmlbaisiqvxviqmctlbfqtnuqerurzxeoouvabkufdoemdbmjpvemezhdczsossdxubjhobvzfxpxuvctujpcsmmgrxhroaqpsnsoqzjpoiwcukcqbajjqpxchgfaulhwomncutwjdrrpdllbeficrvrxlnlklrrdyrhxovfgeszlgsvdaypornqyibqdplxvuxkaujaidrgeyvrmtrhqsixhkojoybzveuvyhaopmckpefpmzkzyjehnpgyakxeltqocunjtwaktqwvfjrblwwchrcgxtoyxqspnjjecprmnmyshcrykpltjewmbrsfgkkobfkwqfzvlcysjsdlbsxnsabxjgiccdzhypuiigkzdgmawjzwfaxzmlgrpuczdvrtracuvwwmsqrggmvobdxlvacqnaayrbbjznqzgjcrfxnkvdjlbbldnmkryrqluhnzwvbaaxrhevboioqhxlfnpumlmmuvcwkbzfwuyfydvvsjlyxrgihaxstyxoajybkvdchnyikzciwaktpfdkwtlvzrsalthqngkiegbcwkdinmycbcspvfjceqzlthtbjwqodiujeryydjrhfqopsloksykcmdopbgrxuzhwpbqygxvdsdwjscrhioimngxpuzaycwigrdqpfekmtvmltuwghxhjdjaqxrgpjioepqwlklmjeqzxnizlolwtlylctawiidzfcsbkbpnoiiioajdhsnjkcyjmjfqcelromldfugsamidvbygfsxdumhdflzkorhxkyktzjldukwcecjwsrsmicxfcmevgldetlfkdvqoobachslqqymdmkooszybhldajtcjehjqiqkcjqcnukbidubnjtssniunjonnuebrenouctfqgkcdocxbjamqosdipygytavfmxgojvosckdfsxeabumgiusmtdctfwnvdezantfjwzhkvqegporglwrrnnihsgrobqomgccgzwttracnmflhrzskqsbrimhnskcmcvzebfxbuthfmknbglwklgkoplmftbdmwqvyvmxtnsbtlemdnqxokzvpylrljbjnestbotfbwlsmtdygglbcoyjepjxngxsriacdawbddbjgztvodgotjodwvgciebysigkbpsuxwdsbpvtbqmpvvtoszgebveavvmmxxvzucnvqouusyzsdcvnliesiiohfgrjzncurubnncdbzmbyiamsfdzqqsjyehysblxedovnhxgnkfirdxomjjyqrykyniukcqekspuhtvzqxvpztuvnbqelzhnmfhnqvxtelrjptpcxrivxfrstbjqumyeuypdstdoccewupmgqpluyjpqczjpundrqnghhmxgoyaoiwxojqxunczyucgmxgkebkitjreykljgehwcgcpewqttmowxjjyjseicheyebdpkfxzmiahoxvschftyuthavgspmjtwokgkhfpoqoaqeuzklmmmgbnnhcvusegojyjsbnxekxmylptwnaylarhahjrttottnqrdynusioeudkueptuxjjwprmhianpvznnfvjzdjidyjbruwfpelkptipcrknluuoadbusilmzdbzulwujtixsvlegvxypnnykpbrhqqvnpkicvtywzvvmhitqbnoogctxdohphalkpwnswmcaqyigyhwremvmiqseybmyeopmvhtexvulteyhqiexgytvcouonhssolrqitlviviluojppsvqoepkqeiansthhpvqqdvwqvfqrzwsyhnavpwwrcqnpstzjpdkirmfawdjxsvumogyrygddshfqwkkmfwomzzpivcjaczadjcsyuxhwzidsghaddzdvizqoxxxuizglcltkymtgxuphzijownlfohthvvveqqehxhoecxzzfvaknfgikjoiautxkafnjbpzngibioeorjpybofkyxoozeesrdcoijutnxfeiteyxedvmlryczokeykfzbdpdlxhwfbcgqfyipukmcyzcbmtbgbnphyjzbzzkzrdmmeayflbpdijglmumlvtzlfhlinczmktjxsfvequlxubpdywvriujhzbephicnopicpnadavhdxsaenvkcrppclryosomkiiiuelvcotepvnyufatphkockobpqfahwvrbxgsdftcrfdmcxsmistdyjwtqngtxtbxxgvtyyczajqwemvafuuyksetluygpjdchqnjtbmhrhredniematsiaucryatlberesxvuessrvilvjnpwggrfnqleiwztbxhzizafozzeoylpwyqwosyhhjlwbmjdpjvqltbfiewwvwaubekfuxovdtnlrtxmzrcjqnjvrzqplsozawojzncbmjweitwxasgoyqlkcnctwhscwlyywmuczbjtgrfttqugckuwkuzjatfonvkiodvbxbcxmkbnznngbmbgtdvgzzrsqqykaortrebfxglstcpmhamceqpdzsllzxsmwryoaoumohoaivjbkrwtglqoycgyuebygqgvqlnwnyfqlomtqkghkhqhydxyktmxvzprpsqtsiermddkxabtigdyyncvmxyuurqkymcquuvzixmfrowkvxgsstgopmbxkrfqdokeasavxatvuvvdbmawmvulnvnqpfgemebkponjxfzxhuqyjaukupkktcnhbvyywtafvflrvschurvcttfuzgujgciukspbpfuueigjnrkbgtwakvfqawhpmmvkwrbxvcwxesxlzwxjzyaiomvjjozoudojmwcapqbkicrkapzzgtoainvhlhromlnwjhqvpulbfcjkfgdllnbnncaqnkxhzzosgphhxktmkfhyjxshjmlhftogiykxpnegqusrqujlbksndrihnifooejipgsnacyukxakgavrdmwvyyvmsypkhhemxflhyvzovynmfbsqnwvjrdhukhgiikehbxkprumokgngphrtnpmrlivbanyqhoagtlbnaeazpfjtnrbzcgynykcbcjdcyrwgdqlpturfwgbywjxiewtznaheevenqetephipaiewjsnacuhblpnwwkhkttvhuqzvrveppupsidcdotvsvivkwzkhugbaxaueiczmlycowzekkblcpvbbpvfkfbmzhdjrpfyguatwkwcijndeqchjniawrdrqalzzjyxcnkpwjilaoddcuyrwlwtdxspmmsgeofctynktxgyrckcdbpgqqtblbkruhshmnhvynsqnsmkkaigaozzgnnttickshpnhcggwqmfoctnypwszapbifixwmjqbamuooxfgqbbklgfwrxtsthuedrnpgdfefbqjtzysegypuxpvmtmitdexzmyylobrxqdagpxcnjhcuswqgphkhgduxtcdugorhnkfqsqypdcrqdqngolynvxcpjdbpnategjzagkvwguacgxtavfnqumyknazjuexdrueouufwsglimlfyrqvwlwzgnwxdtlszhzfomvlaofghozvyujihloeawpyeyhdbjhasklgrhnajazyrbdgegvaiskkgfrfrsexhdbwcihmydkakdkmauksijkjeqwuihzcstqiswqjrsjewyzhxjxomynmantiwfviemdlqhyukyqbmyrfesgronganhrtflkavbqmgxrbyayvnwabkvokfrtxfgohcmdogccsjyhgpkbtogchhxskisxjxvzoyijsbhommaclumkccozjdkktzbkxknsfvqgcwmsykrputxtbhbaffvsfzquzwpcxfbqwdtstvisqcnqmyfaiolkkeuekvloreeexcvhhrvhhjrgetnomwaehxgpiqbcqjeemklmphtpqjpplpipzsjtfhcefhwbjihgymutfrnhtpvtvwqiotxupmuzjgsebbanjvyrpsucedvufqglaxhmlpoojyqkuuozrkorduyjwxfgprglxtcnsvjjmtrnrnqwqflczejbswmgiupbbntuyryzkadrmvwplfctlmlabowcmilijmfxcdxgjpltfjceuqkvehitzhitvwlypjwlrnnvlnagokpkwyvrlajavorhmbfvivetgriebuihsgpovkjfnoqmkmgtlcqbnudaaemhqgwmkeexvotzmioycxldewqcybyxryiwbileuxypwzfvocccwcfzqggafeaktcjhfhaksbhgysktztzhsmhvocnjczgktqxxvvqqtneofhaxdpdocwvwcusyxpgjhajvslzpribrhrilhhknfzsqzrxbwlltqtbfodpetqkkzfrylzjdfgabwrkickizyxkxdmughwxwzlglhpmlgmzquspoqbnqftnhttqrkgyqaukrugrnagqmqoldwpyjkgeiyrmmvmlrcoiobnijcdztrdzywepgyrmzcvcwkvbyrtjwzxexxuwscfcmwmvgiwpouvwevzbzpsipolyumkzwedsxvzylczekkweitdggtjdyfeqalszlozgsbsqyuztjccqhhppdxlpeumkqjkgudlbzxelnxnnnzywcwfrrimeuplzkjfgqkvykypdausrsazkvytgboaaayqywivacesbjhxzdaftarmxhnzmygdtlmeydqkmszvqlkjiypwgkxdzosysuhaxqainlflmsfvvtwsjviltdperabfnngophchkrcviuirvnbttxshuflvymixujdvpdbbxuczzftpwiisskhscupopbguecxmnmwfhvzstmbxppewcfoulzcmfmnmlejddziztcuwjwhmasykapspfuzhenpfvadooalydzakzmgamyhjwvhejsyhknwlfepcwgqrwutdayevtfuasmwdhwiucjabobcfnfgdsjgrozpqpbsvbmicuigopixpodbrtfllmtlakhwejcyqsyukxzotcjqcivtxbmcvcvldqjinbdipfnisjeknzudhrmpliadqbkbfyhktieaqbksmtfhsclkvonhncjynzftanujlvykauisxsvieqntuirvpsbxgffwpquiicbssiftsiwsrowlynfvfpwrwkmqbskqtjclgchgihvtjuzvhvwkmbehamkutgvmeanrgfrhdmibddqjismffmefcgetuqnephqjujpbglzxyuvewblloehxbdegrzdltwyjglwcazfqhtcmowftkgwjnjuwcvvqbyrfkizyhyvmyangupbtnvdojpnmkwjaasstomihmysmxoalptvabskyhjyfdbcbmefdlowzktnlhifsjxzpkchnvborubydvvafdhfeycggklhdsccfphtogdhspnecnzsdkmukvicefolqkwxcqtzdvybdnoaeyiwyadkcposullbhajitsxsfvnyfqlbacortqokjmqrxyduuzmxuzdlqudmoowlwxidwlmiosysofiafvhtpcrzjlquxkxwqsjdnmqkupcvgjiuketfdaxlqyumcehtxywcojnxfjmxavnfembjkiscxjfnhtyhizkyzvuwcsxxwnyvthrsgvdzipctbqloigysapsdstctsvgiqsxmuijiiaqtbybvhrwupgtrnmvfctfsudwiwdvaqgemxvtzsecbxpjrzdmxdsramexvwpplmidnegzkxqolqhkfvthcfbjgvofeyxsmtmrguiptwofcljqzfqyzmsoulfmrmuottcxuepjhyoczdsathbrxrwuvkdacdfgcpovvitqumokphqcumkbjfkxgganxikabaulciltgurvwlwksgpfyldeqlykhbandpizoajecrfhccfxdvyjeqdiebrthehgejlynjqdbmjojjgcndviyizqxrljnyalfynehcpxxeoxrrzrcylsbfheyxpmtcbzpwwgouhloocveyznobonopcytpgbtnhfaydguwwtllpkntyhcrzupsccohhuonlawnvwgifpormyjuhnmedmeupmibwzebrbjbdittkvcvytezwtimmdafkfowadpawrkbrtaaolalvaedpgzrjpvviaofoegewpqhmdezlekyrgfgmfatnnnbjtqcccftonmaytkulnezcwgvhhypfryhcabmwfehytehqlooamvpzibwzsjznektxwkhjlidoyxfwylfwivnmusfgjkbamplmeujeajsdfyryehzszfidrhlkqoisvwtoklwsmlzjxawlugiduuzwxnvryshaskgilopzfumlbyvezpimhqbrmwpntqtuvemfbszqbwufjhqsddcmuhozfxnfgbhnksdckptkthynzyoyzpdbsgkfvfzseefwbmevtovripkvfasavbkfywycumcbxjgebodcedoiunqebksfvjomfrpzusotpdhwbxwgappppvfhuepvifskyvwdrdauynpamfglctcqhrrejtixphdewslpshsoyayubjqfbbxjqesbbiraxtvfpwklnkhwqhootprjqxsazlkhalpcjfoojjsxfzgykhgjyijfhxfwmlhcysoieueocaowvfmuzekmdtlvrpwsavjndplbphbvdiuyntykwfjcgavwbzognkfolmcegfnfuyezxlakkomolrzhvkgszthxtzqfwsewddbexbmyzvbtoomnengfpfsjfgypennyhwlzjstugvmiymhdaksbbcsfolpimuvfhzsxnjmflfwzezaaceuqkgpyigbfrtluhqbabjzrtojzjvdmapxmflogfpaaocmdzzvszydgfesxgdidhzctubhgnqxpkgmrfzwahlxnraythhpycycyksrrljvymgjyesuponalzmcxxavfxkxsurqryazehighyxrjbugmuxyydzkttnxefsexpldkswzzioszxomopogiltwbqznclewxpxpttorlanjzsyespjbvteysyzonnmdvjhniydfvrhjqfnyppzqyitjgesvhbjzsrpinlehutgdoudexrjssnskgvdriflkqkmqgequkwaajodkknuyxomugurwiqqeqoxqneoffeppcivvhggwjzbrjfpkfcfnwdzftsyfdjbncsyeqidwdjwbgihwrxtjctejsbvbecjrbiepilmmuxowlthmgpvlmojgwtrzfmaygdvlypijawpinxziqrowcuplzptzsjhcwkrdmmngottnqwuibhuqywgjeippdbzgnedpgyvgyxeajrmkdfdirrzztmngjkahifkdbkszceimscxtiwnstpgchvglnacwjrdfhxopciuflmgqtgzefucvfxckohjifwdzpgwqnivlojigwcmopeetnfvkwveqxeyqagmlqahusvxyeymtkvruvzwhjvvlaisicxjknqupgjdsyfhbqunllcrqdlcrsuecoikgdnljzgyjrczwgfqrdekkzagonogdoolmgpiiukugxhfydjwsqpdmcdavkbszgavnkfbtjmjvwccqhwtupxkruzmpyhqjjiupletyphfypgmvpedlskkmguwteoxgrfqoiohbziageuotsojhyksobbinewizwpnzmagxgiavpgpeftkptnxelwhwmubbwbsktlbuwnlvjsiaisodiatlozeuuyqxvclosizpnazcsmgthcovnvgkmilyrowqxyowhazuxpvuduatthfdaznkyyqhucmsvuxikvrqtuhsywlqvhsjxzvopxadtzzxnxwoquwurirnsossffyxrbjglmtnhmdxxxaldergtoysxurnfveiogkgrezpunmecyduhlbkjvawbpsmeqzvmnkmjetdnvzckmbrjipaoxuejfnhvnipybodpqpzqcvwgekyxtephlaeowouchyqfuvzdzrbfprinlusrpwsraxjgtoosavlkxjowbqyvsknvwkibwcqdvczeqndikvpwhifeqdlmxjmenhbcsigydrwylufxxaygmlbstukabiujxyqowcteturmmqusrvihwixfpoduscekwamxfnldqosjbzewyaviveuzzqdkjfjfscpvgeybauwswhdnfqnkclahodwkgwtdeeyjkfxhbzoaokylrvgilmtxrdybmofaiikoydhzmgaaljltyixstppqitnuzdqhvsftkgynjucwcyvwvvaqbvjrdececmsjpryujtrffelnlqxrpamssubgrkxmyantoivcxdbgzyomnfylphcvgxgrxlwxphjncwlibnzigqhujupimfhzdultyasqrlducpotwrjjgmflsagjiymwrxttybysjpuhbooxgfsjtpnjhbbichyzzutlqfpifufxjckcajvefaghejgfkdwtpgtuolpjjgjumfbcopseuvukvdeqoejmunlwoiffuagsrgppckbhjihxenhlpjvciklzpnqisojlmrmehgmfxyqbwereaqrvgyuzstsxupistdntxdfnyxzeioovnceilqlcsmrtleyqddyblbjaqhnpifbtxqflxlovujatkbrexrdbopbjhlxauadcfzkumqmgrklovuazgokyyxycsiawudjvqhqaioimbbcbsujfewfiftzwoukawrvcpgoybibcsrnzmvwnvsatlkxqeoftuijhmfejuytuwmtnolckevimzehpvvmnafyunosdqgksgihanxsepmiklkbinumtkdctbijufsertzzpvbumijfoxojyremzqpmxzhdrflrflsnooibegkbvedeayzueddatqamsqiblrzshayxzimxqohteftvcnskrsbtyahzhqgnenwvylsmabiemfwlxujoascvywcvntrcrmryhzfpfvhdpzlyaqdymzpximdleyxojickovfwfjozwjzcvubgkerbthwwfnyojrhdbjwqnohgwvgggkmoswaqhiedkwviftonhvkflvyzuuduvzeyjhdxmzmteeemgwvbrzgnmgwfdeztimookuychzmaqfsmbmxfyxoudvhekmjrzalmlsmlmezqihemejsrlwnbusjcaahodugzjlakcvlrtdmaogtcpohimkltyawmwaymanxopdn",
    "stars": 3,
    "latitude": 1.32680144,
    "longitude": 517500.3339
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-hotel--id-">
</span>
<span id="execution-results-PUTapi-hotel--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-hotel--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-hotel--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-hotel--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-hotel--id-"></code></pre>
</span>
<form id="form-PUTapi-hotel--id-" data-method="PUT"
      data-path="api/hotel/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-hotel--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-hotel--id-"
                    onclick="tryItOut('PUTapi-hotel--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-hotel--id-"
                    onclick="cancelTryOut('PUTapi-hotel--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-hotel--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/hotel/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/hotel/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-hotel--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-hotel--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-hotel--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the hotel.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-hotel--id-"
               value="eheedysoinzbomgednenlaxauikizpdmtkyxtvcfnkmxbudzurgwvbiglaqvauontxprgxhywmpzdpedlzxxduhnlmqksxhcarjfuwwkkqtzsvyunmfzgvqhltfyxjqdiyisufasgwuzfajkpdtriwuijnpbmmtpoocsxifrokkhuyixnahsabhzyxxwgxyexbmhnxlfnirwjqhtxfknjvbuwxhbrypdbypaqeouflkbjvldpttpawlfrkwajrezpfaktxamcpgtdjiuwztnejxapfixeijbeydypjnksmahpvdnzpllwpmpwlefpoviekncdpltzhmwfokppiuxlabatzsoyksngvpzwjckeivfkbbpkfjdbhspeebmuew"
               data-component="body" hidden>
    <br>
<p>Must not be greater than  1000 characters.</p>
        </p>
                <p>
            <b><code>city</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="city"
               data-endpoint="PUTapi-hotel--id-"
               value="ratione"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="image"
               data-endpoint="PUTapi-hotel--id-"
               value="wzcjiouniuoqbzektvbehonfzmfuiijovvhgrgidlvlsoodokibzywgmkiuaolsfhyqpiatjdogvtcitirpchhatgedehaoodbrbovmgjhaumnqdoovvafrirybzjsorikyzjmulhnwoztzqarbvytvkwrfawqnyoddjadagsgyssskakmyqkevjuadowmiiantztgpventhnjsiyizehigguhwcvdumpmgkpezdodiqhgdcvjozevisnszdfussokrvxhyqcwskggiskrbrnxdvzjsjotdoepxwuhiwvkifpyoqxgbofzhpkcjtoitdjnehkmavegjxjdnqjmfaxjqujugykvzrlzrhdezundkjejigeklaacvvignqpdjmfnjlxlgznndyumifdkbbmrfediulybcmsyruhsiqqskqahmghcpdzwzepdvkqfyuvyowekaynoizihasaoniftjtroevhfsdfbhxsuwnlacrbkqzngwccfnlapeuntpmvjrgoegbaltlpmgkhhxlrawyrtjnycphuilpmejhsnqrtsfhqshuuirkntfaptowunfcbwvcivjjxlbmtcsqbftngkyjrnpwcrptyiphmpbbeyrvgkfhbmkrgtrxfeknblpqnkpfmebnblzbuzlwaykiytzpmllgc"
               data-component="body" hidden>
    <br>
<p>Must not be greater than  1000 characters.</p>
        </p>
                <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="address"
               data-endpoint="PUTapi-hotel--id-"
               value="ifpwaftqpkxmqbycnqusbdrhbocaglzfpaavashzxhdewrllvdkisnkuqxuqhaqsvvhxjqhyqdkbzojtxfkmbxshujydsatbavkvgxryoxrxxjxjamnswvfpgizyjubsekitgvyurpqddxzhrumvpyyrlpueidzosrxnqysahowdectjuwiwhzuwlpkhfzvucbtxcoyatgyeskplscgndmunebutrnpnywuesanmndcfhugddcjgxllgiikmflzvnmlzjhwtbydvphwqhvdyofqkqywjvmpqakaxbponmhybwmnwnnvaufbwxfbytrdghzjjmpvjgubxcmqbozdlzkfrlqohdpcwumzriwjcfxcgwhxacdwwwmhpnlgsqmtvfbasenmqaiztwvovmdkuubhgpyyvtgppfslkwkhlzmgzlmkybycwgivttddexlvbeltldswbmlzzqeefniksmgrztwqhzkxbfdeuemuubozpqrpyeapjayyegrjdbfjdaxpjosamskftcnbjmmadsrtdefihgqegvybakfodpdoaqbpqhvztgshmibigcpnsekuwydtvkigaajwxhekfbmqlljfetwxmyzlzfpzubemjqfgaahjfotgzrelrcmykgalgwhnkwkxytiekxeoophpikijeyhqdlndwncyawvraorduahclaagdptjqpbmncsjzlznnfrgqtrbuekdzwcfqdyzmaqoifafyekaalocmznsftavxdslzhgxsfytzjhjbzqziutikpzwmcxfiljsofrrsryspgeaeqstyrudezxkqbavbtzhkeibhoebaygbyqwbonekgollmlqknwoglknduohqlfyckiu"
               data-component="body" hidden>
    <br>
<p>Must not be greater than  1000 characters.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-hotel--id-"
               value="rmswkswbiehhiveneswnqmutqogbcyzldpokvuqvyydgklxyfwdesimxipbifwatxpgonxqtofwnepqiiupemxivtqvzfgibjxitrdezzcgdclogufrarspcyxynxorielhlaocbvotdrcefqlaldyvmncgqpgpeacmowzqpcjnlvrgebxbcagofregubrpqouqzmmfyofxqkpqtyuchckgyepeolzayczrhluqrufobpzcfmatymrwowfzvzydmsgirrjarpfjlrerffclhsiormogtldqespivnhwgltxhsykbusfhbofiwhrewygesvtqlgnaaigcuwvyxkimxuleiapuyyrnuctzvgbnargnimgutfhufwvezvqtyfmauvfwytfnhstfcdghenyhrfmoqiezrxlackhwyrmvhpafkmefzpwyyjekyqhbuekxksujwevqhicawxpqebvmmttrguvkifqksmlgvoripldggvozydnrzzujyvuargtckjyefraxgxqbpksknvllpfehyniiwfibkyganrryimlscrvuyjltvqwagdydrvvwxrtvafglqmhxyazjrqdmowvzpscrsdhxhaeuiroeacqbggcymxzmibswkkikxcfialkxxfkfunfxrfhfnyaxjlkqforcnfphcjwcosluwtlhuatkrkvwugurshwuswmtollzwrsbiswllbkpbkmpsgejowqbuqtxaifqnolhqgcijjjuaazadbaakhyhddxdntfbukziqyfisucbcmercadmslcxsbsdcqzwvyjcpufposcvqoulobckgqmhwldravbboanqkscashobbesjoyvxfkoeluzpssiurczzbzaiaojzkrmqpstrgwdtbhwzmntuuhpfjcevfmdphwpyldokqrccngnvxfsztaeijvfiuspukrlilyptqrrpklfxeuujfffncwkxmvbcringwgwgabxemfsaahlvtcxsumqkvsfuoiqyjbcjmuqqdawucbkycpsudqnfudsrjqtgfmtywytkafssikxqingjisuqsqnhybcrrxphlqzyjjecnpsuquuarivtiflyyeppslztobhvmporntigfgximrnccrszuefbzemczniaqvhuyewvjsidvrzamibpyplayueeizqvfpslpmdskydusemqpagefgqhpuzjlsyilpukrhgurpbnmusaybndkvzivheaayiwxzvpjlrzwulqsvijzpqqvjqhccvwzgssbpzcxerpngpgigcqxuukdqyqeaynmdhnycjlexyiryttvmhnmokhkuoljmmaymzzaytcxhlruayfdtwswbiodbcjsjutqtjkkdnbzamewxxraozryomnafegauatuedizpxilgpxozzowwlaoizlehkbfvymppbahdmttrggypaasyxumtwvkjogtmodgcrolokdryoqrgcssstektknzbuibpzluigidpjqvylpreftltrmzhdmxiywcnpwqjsghsxfdewbpzuxlzpimyhbfrzblhvwdrdeeksbjdfymhpkpgdgxqpidkaxjlqzgvngvniclpgtpvpkmcylrhztgnvjkqoulmwtwvpictmsmvpnpdnbuporslfdjpohbefmwijulbomindtipfrbzmbfsiiwjhzktuvvmeijiyyfiolllcsodghxywnyirsjdfenggreyiqhldnjuejhyaoaeroxcwkfvydgscvlmzgvunfaslgkpsrlabnfddhtgitvuxgxplbzngzqndqesvnbouquhazpaquzbnihfgxikrwjevgzadgshzdqhyspoqepsslzxgkphdgvbolasqrtgzchprkiupvpmaopclriyudokwqqvinbjyfhzifssrlmzajimleifktlrxbgieagpkruysonkcbghivfinubhkdgwtjpvgmcsgqgebrsrdblntvjxbyuojmmtaayudigegmulhsdzeobwpedgusjkadlhbeuabldvbgfzhwlekwitrpzbxdovmophcdcrnttgulcrxfnkshnpmjvfigtymokpzucyjkftgsmojhfxzcpazasqksgpstneqzluguetmtugcpwzjpcirqxwnrkencsqjjjwdsixxlqoasebnysvwmxzfvbqwqvpaspwwphxfxmordilhkwmfnpvexhtevglaqcrgqpcvidrzsapjpvgsdywwppagnvedisungeryckwxdofdxbwegamtjzjxalubfineyfsvvrxxgjsqrlmwscacctfbrnadlduwsbcbklfmzszuoqpwnjicrsqcizhjhasxlqnpeupkyknspvaoqdtmttrzhcucplejqxjnhzkcqjuuhhfvseiajkahfqdeihkggxmzfqwokfxxmfdewlpnapapsjmexhapcnzmayboiogyyjgtplfejxumjfcjmlhbcoyepvkkkgdkafmfqtslikktjpdpdytguxvgzyjuyflmjmikpmeyyvqvapjwpasypattdecfnoycydirotflyqznahlsrxgsxjpyfajfubwzmkcjqwedgspfmqucpxufnwthohctnnnfjqvakdzizlsrvapvbzealzongkqpblqpaxkdbwqaecrzzeoexgmcbilpeguugpsztmqehcdiwxiqfuukabymgpwbvoqdmopkdmpanlingusoxsxuquavhsyynonhqwmtqpmkxlpojthujdsvwzusdogcchqvqqkhxzcsnvaumwzcbwduvylpiqcnxeptolbvedfxqqbafgvbixsrmtfzodwwbglxhcrpegcjnjvpxaexmyemnwcpouqliuzorqsfaduazmngxzmsyuablwgnrgvkspwvsmqvqabplldfnihjzjsizisvdajyfkmfryrprckmqaywoecebnofaelipemjkeaqvziseldttnrcfwqtocatxgawbwrisztvarwaucatxrucvannsupwlnflkvhfglrootwggwmrvaahcevcorokxgoaobjoiuokmenpyjhdmtmcnksbxrrdunhcntdxahcvomvzeypkpzbchbdkxszghejfhrgxswmlglhqbuyagqwavqnefthlffrzdrguzgiccqadciitfkdsmiojkcoujsudcstuoajzyyfcawmyzvdzgxafqxaafolqlnymaqsgxsaoopanopzdzlrjdiekfqzknpnpwbqceduoozhfopadurrtggzjfxgpygorapgmjoalqohdkyhblthtkyuezctgacqgluchcdbjgaephlzykozlqhhhwyrzghjhzkxkcngrirxzjjqtpmtundcymfpnpccauubiqvsdrtaczznacmwircryrtcveucrdqsvzjyoqdrhezierjvkunehhsezfddcxtwtdgrtglycfsuvbwzxijwzloqbvtslkxwywjisxswkhcylmglejcubdbgspnlccpopqaxnikobzpnrmzdulpmgjezcsezdntuxdwsxvclzlkvaeewwphhhjpfebbgwyhuissqfhbcdktovyrlcuoysbwngizmelncyrcwjznuuxlwigmibxlzklpmagapcqsjqqemthcivruomlbxvnngthurplqhflfzayghjfnnemoqdprmynzhqholruqotxapumwqpfjezlyjxrtsmdlvstpokjidwrxajqsdfmapttndeginwohfptqfbfmxcddxtqnqedaleqhntxmwvkagptyqjmjqleccgzxsvkpmushqyjsrhpkjeberbmovaznqallqaooowlumazudortyxlweqdbrcowbndsqttbecjdyqaguphrrbspvxgqxbkrkokjkpcbzjrvuuqwtkayfjcljsnkycqptnsxvnhchhjkoacmbtavwtdudsyiyilfykdexzhuhooqonqcnxdqhqiwxsajvqlkdoboatvvmkmvasyzpijgyyuafpfkdprtiigfxagtelqhzbcwcsskmssqzodbmiawsdjtnwupksneamazqeqynzrixxyguudkywulinzbmdesembaxtuivfycmtwcsashvyprtyxksjqpibqgtfycctjntppggxmysdgshhjyjhjhyoecootqwomdwgxgvtiptnvufddkpauuafzgxbczomvqoqlrxyyibotrpizevqgowbsoonbfdxezlifcqeivmiabpdmqoxgdesbepcltcpaszkobkoairjqemjdqbxlhlgpyjoddemgbdghduwmfpezpyfascioyngbitfkhjpdexvbvvzbsahsgbizgczddfwjsizasoowqfqoizciplgbasredzwuharsjhaguawptjcvztjoxqndeqfjrqxecxqhcjkdpkzemwsconkfjokiselbdwfeqjhcvmlljgyadvjuzeqjakbiwtlqtbbkllkznijbimzzftjdpxykwgvezvxbqoskgtnqixzrgmwctmmneyjmludzdyeagzclmdvxyddjhsabbllosqfslxcsqikmzlbzupoqeceskrihczpnicusxhzryrajqrldsixgubwvkdsinramkulijafjushyehlfrndizwuftkswrsepjhurarivmgqpzvhdnpijmuhsnuotxdhqfjjjzzftamhyuropeacydmphfbkuvqygurveadhhzxibppvovuwtndrujoooxeblpgkzypmjzwdpplxomrfualcxduyucwszufxgkkomkuhsnyzsubmevepifvbcjvznjexenovcxusitoxubeabjlwtgsimxnscjhpwynjblsnebgrjaxjyljrpaawpexoykrsajjsoqpxijtxndzishfgpcwrbkmeuhpwtxiajnrslodenlnwmcbtnxtynhhbcqxjttspvwwpncqycodcycorduunpizhmrlacouggdvwsetnwqnvcodfrzlotbxspnakslgrusoosltaskmaesutqkovvshymyivezvlvngswcnprhiaotyrgbyglrslstzbroftgoorqtxorixlfyesnraatmxaktihrfmkcmiedifxpwnhvdqfsurgjacmkioithznkizdidyewbghqxrxwmbysjnqeqlczfmofkvjtbbqvbedkwqvvfpnjjjbeqfjvbkmcwntdpsefnlbgipgweygqfcxcqgtmjvbzrsdesjhyvjcpgfuyhnvvmxcwykwzdrcozwxrosbhzaknddnmzzbgcbauvuwrsnftkwdxcjgnstsaiuwkbuqawuhcrbwwemyzwgswnmdnyhchrzkkqcpyopbcuyigmtlrskwxbufvaolwblwhqnoqogekmcelttzejtbgcfkusggckuofnwfdvdhkqigpeayiscvpnyfsjfrxtixgykmsynlciqzmpdguiwgnvcrirsjsmjhupfliqottxasgvmugcgsvkdjgbxcoqtruhymrraafdwyvwihnotjeucyreiyrebytnzhlqrckmgculyzyeqgtsprutxxruykrqiclmacdkglveogebnumolikiubobmjqbbqzjrbnfrorscukhizsnkjnnfbydnhygpfmxtcgelezltrnilunzspcvlqoeocykkysrjqvmdehntkhdjfrgnrnhsmvnachhdmasycqhmybpqhnjpqrmwkfbwdjglzfiaylanriztajgeafrdhrrlvrpzhfhbwkflextpyaywocugxbrwsiyzuvduquhopayggrbbsyhuryfnacibvtxqdcbnvqonastdzhgnzoaejsrvtwedhrxbtigqnmrcwuyaysabcugzcfquxcabxforloobwgvqtckgknkxbmyfhkmjcmpojzdbwtrslyqcwcxhfppxkeexyqyehujpejxhfbzujiivurvkdubdkraydqhbkpxcyojxlkwxhmvgxhuekkhugsldkpfktrbuvzdzkbbukptlcqlwcgprchcwizluyiklwovxvltrelabdxynsldovklgsitdnerzgjcwjplwpnjuplfwcipciianfdqyovuaxqrnyurlgfzxevykemyesbnrdawgyooaptpybgipgskovsgcgxygmgigpdgphaoylymzzolvyyhgsfnsrwmijmjjtijzixkkzdzzisfzefauyqpdvkhxywokfamqoyafdmcusqethwryppidqulgatfathsbhmruvyvmafzhcggaeejjuqtbfdvryuntzoydtqsuufnzvmeotszehaqnycfibowekoxwjoxangvxyygtqctgjtrwwifjrumlthpelvqlvuqgqqmlgjlrqcihrvzxnfuttjdejajobhlnwoyyoqwvrrcfezxahwtarpesovirlvzcfsjrmyhszbymwkzkyndipkptjziefxojsbpemtafxovivzytmliijjwbmyettcpbbqvvtgldsfytqjbqbfssaszsdjtehuzbtedqdvfylnfustagxsolmzpvzeakzrpojtipddnultylwkzngboduereaolwkzcbrwmkuyndtugnlgaymblsbbngcqzdfrdtsnloljungzrwnzroubnvwnsizckqaxniwvyqahqhppovaergmoelycqgwkionjrkzqoaluakbybxhatfgjyrlgakzmpwzdvqlwhvhhtvzpcdqjzqvaozexynnppaamtyvjcgmdlqzkhckowbyjbkwuimmcudwrxgbeyrmwlrnnsqhbgwirqdmkghtaaydpqletfjcsnbanajeawqfknpawiejxkzffyiderfgbefeteszvtahztagkibdtyrkntekdatscjnnfxiiuldpptwmjzlipersniwrhxeahleizfonwfmcgigxaiwdyomlblohkvzkoiclrlgzjnorfbpvnmtlnzkeuakildfiwldbfeamgrzfzwlhqxfmfvcebwumwkytkqcacqjpxwyjpmokhfiydbxbqpjkmfjsgtefrbiodwbvkuwqkaapwklncemomfuzdimtomimfhmblfomzjglemmmervrwolbimpcsrxnuxxkhcuygcusnwcdqqdgckyvlqcudxoicpxzziwlmsjypfdqzvxdgbvvapckxouhpfbvpjvyyeivwzdjtvyuxuqwgydsrmxwofbtaufzxhypzkuimnlzfjdzkaxubetjqacadghsckvraohuanxllafwydctgeibtnpteplwqngmitjcnacjkhnzrnmpzfvnffpvpdgdxpirxvzxkalzadrveklpgvwlvejzhwopponkfrpkxxpabfvyjvduusiwpeykppwtvfutkgayjplcddmgsrfpuxztfpuairitkgxiwlulqjzacblqwwcxizhtdcshxffppblbiytystsxokjuikjeajzijxjpnskrffjigxnotluqoxswjkqsbgfitbkasruxejostyuamixlwmlghrtcuzcmbsulatiwgtcvstyesjjpzvclcfzlnghdefhbfpeehqhktjlhlyxetmarzhlbhutxckkwvlumyiwowbzxalwzesnltxchmqtlmuorqozmkopxbgrjqbrvzfyxgflzksucqobqypufqstdziklwyxdtncltgrqxbnoioujllpqezvwcrfkdvczainwvpjiqdmrwnbhtuzscqaqtjmwiudlqnqtefuocxcfsdbjxvplmxafpfklhsgyvujauihzkxkreqsjmcavkgehlymdwzpnwrvkikfkvfngznksiwumbdvckzrxlmzryzqiullqowvpokakvdxjvqfvwnkeupxzfzfyirjyasgzxdelmjtfgatfaszbqmcmlzsdvlbynfsiprvxizunnboubfpqkgwpldhmbqsdpiaczqplbfpmylqwfyudkxmfdnidiefxxfczhhbbguhmlvucjdygyfjcdbolslkhumadushwluraqruxawworpsyekdbfdofhjpwwnsalyyokyiygzeadlbsesfwijvhkzjypbkrbjfuidfwfmenaurdgkxzdqitdtnesazoyidcltpxskfnsfjfsykgsgbunwkkvaensckbplmzuwniasqfwuwbfxzersczvcqnxwydzstjiyfttuuqqbbtwinbgccmhkubhebvrvsbsaudqnzlofmhkkqekweuagiuxbhlkdgfzbglwebsosilfgwwqqbwyytzczvflcltdaykrmhdxezlapzohmuwauzarituwjebgzxzpdjcltrjasofufzvvoycfmvbmdmybwpjuxmuuykthpydhfybbbkjbpkwmjtfnbpbynsppkkyjhzsotkokrbvfczrulbyhyjzbnbgengiozietlfbwedtlclbgpwfyismkauilsnopdoxpeufmejflkwrerjpbyntuxghwccydyfafmliunxzhptactemzummrdzvscikufnmpriuamggxehnnopjgnjafmauyusbhulssbjnvzxvsywifgmuxkypdhpvcmhrpmookpqbrjnlqpehnwyuhetpwpvftokixbwahjmsawesoiqmxpoyfaqfchsmasxxtzyasfewzjfepnysbjejbewceshtznxkbxztuxnrsfineitbkgwfotawwgdhzcahljfnuofthuomfuqcpdphisqeyobibkgbrkrqfglqcdawuyejpyxghddtwgzryngcyvdrbydjswqlpqoueigkiwgvuwyuqfkolsejlcfmzbmrxzmulkphgviwluvkxmblrofzebpdeyoztiojajhmiuqzwkyjkeqrgynsrwjeszkkzbwmhzcuynstqshfmfciloxjjuelsafkutaelfwpklgukrfljmnfmfwtnypbnchkpsvncwtvydprqbzxwctbqekgxjntanegfkrtnvoftreoqknjryevzdghhqnaheonfgjjfxfbjgmqurphzxsiyhtkoeefjbklvbpkdpabirvrdondbbxblwltiumowabkbuowyxrmrxdfjxdseruwdbtznpscjjjmhqjblrfmvzowzjvyeyivkzhkacywrzztxfdevfbznngvnecyxzztnnsxbnkgicjknhvxpybnxkdxslxkgfgxdoqjdpzwkwgylkmfvkumoufqexirxsakrxcjgngbwkeasowewattoddprbyeqlyoyfdxswzfcdnbbpnarnssysieaypbkwlkxozzzltrjjkliddrkicpeaywvwvlhkmuthngypvvtpbdvmdcdiqordxcnmjbxryeapvbyqmbhkqnheglhozspjkbpwlxitowuhwdrwmrpewefrjhbcyqyfiasyerxsfyvxqtjhajastkpgzqsjhqfghmxtxvfkldbhlxwdzocxzclodpdyfpworlmvmknpwyxivxiqnpsmbgbvcluyxvbzckmausxrlrtbrsmmuihzcezpnfffafmyxowpnabwoudbaijumzxkwbbgbpugcnxzaskzqgefhvroonxmcujijyqthmzqwmaatqaigtprkmslllggcehjfcltadwteirtxqxsoimdlfxwjkwmjlttdrjvdqwrjtpgutiqvbzuaggmteojetbatfhbsbbeubruanwsxqgtoozfocouedhxkfndetbtvukwvczaerstcwvxrktopzkydqvhyzkzegylakphedqcsyfjmsrjoswtsuehmawmjgiupzkjwmuubcpttkgmdqbyqkfnuhxpsjwvelzijjuwwupgzwozjigjzgucfcodxcjdjxgfxvfuswytkbscqrbjqtxqiupkqyshrrzdqksoixckztkishaxhpvtpbcehaqugacqttgbfycswzpgsgadzrejhslnbnamywoplghxkozzahynauopatboxzjkbwozuunykwalcguacnlqpmbgnejxuoqiskdmymphuyoofvwsdrboniuragdqieemffkwnstfmzeworokrpvxpdwnkqsdvdxvwozqdppzzqhdggicprmhwoaamgzsuqoszghzmigpdfsiqwhayutkmchqnhgtakxjawnexuggcfkthukldvjrfjguloychxahydvebiscnudjcvenjkuylagvyvoljuzgzwxlaelpgfqxrrnqzqkdarbfpuoiaohlpbfnqvalzowplpojksszwhdsentslxsgkubdibyqnaqnndgpydugpiqgqjrxeuuknhuwpbifppixyhmqgncippgbvjzbaqouhhfuhcetzpxsqnzlckfzbingxxgtfjbkjezmzzztbfbhlrvoxwmbcrctkyoqutwmoajorzyruwlwshscemhmwfazjdgswqxsarxarsocponmrnxiizaqgpnotkweqpqthygrsvyohwgbsavufwxbvmreobcqjdziqevtlzwusiquuspdrhaydrmiblxddxvcqmmlsdaohflywapmnfztbraadmdstbipylwblqafsupccgqqfkykyxgtxkyqnwcklnzsnqbtzplnugfgtcezyzbrzckvlzxcafooeomlojcornwtsvqykyqvixhelhbxdcdukmkrndxxjxpslbxfbzivxbrulsofrocllnogretdqrxeutthylpzjrdhbvibzoxvlihkaseebxcdiixdgjmvnnbukzzvhuzupvcjgjnhhzofjqycabfnwgvzadhazpvhruosplwfwsgumxhgkzceeeugabbcrneivccdhgchtiqwkujfdfnplulyxcpcazdmvnmzabebiwhuciuupzaeoanlaeoczvambnylgeykcbaepdjihhcnpsaajmzyvkhtbiobgrxpgmoheikvshgyzkftrdhfvgngtcslkqiscbkabaftbsmbczeovywbseqwejzfiarwtgqiwwwtlmcovwpmhowbwkmtvojfyuluurttyfomtkvuptczlahhsggpcdlkrwokymhrzeycdbkjskcawqzotoudjyogpaaubqaqmgojyjbtvmuenyjjtobbpifrqxkznnbxvfvkuoxkalyvtehhmthspnnpmhhtuixpfvthxalbwvcxyggxavcxcrfoboxouylttyqnyihuhaccnahxgdohxzgrxzexhrrcxwrqyfpttgheebgsogicxblqqtlmipxknomclnplnxjbzussbkkwxzykiqyhojgyapvkzskhqwlouvhsbdeapywwwnnsvxzywdacfwameudbvdagbmaeadjkjkisdxsrurhmbfvijebajlrlpvqurdhhencyvuzduftnudaxfjmszfcfzgizmzglhuemwmiyxrhwlghyebfcrhcinqqunjkprspnnaatxiolaoonakkcfrjoylxjbhveknmjnbcwaasnmcvsopjujfqsmgdehmesfgfoarikwevcaekgaffseajjtijwxuaaqkjnmnnvggyjbuiaaurketwvhlgsrayvyszvfyyejorsrcvizskwsyxwknjlarzimdlpykembmmewvvzuydxgyqpcyafcnsryjisphyartcaozfqawgketzukmahedtxclnkqqtntbtxzmhilztkuvhwlrmatodigyapfqovdcbiremwnxmuqybbppwkojtiqcpfkfhfahdmvllnmbdfujmgpupjkqjzjhghhuuillnrxgzjyudhnrjwmlyvciatpsfakrcivvojltukooypqhshnzwnpjdudmksptaurinvxawfgqkkzqzbkthgogsulnoapfdmcmzukkabnbobgmfaltpdwmrqppkqcrbmzgvfulgjexkyaddjksihozemoeoyvibzuglslxgugdyphqoncrbjqljbvvzvdecmjxitvjbzrjgykodwglaevsdueonyixcieyfoigbndafdokewtlvzrcoewnfneisaqihgmxmvvxhsudghxavvixpmrogpkrnvgezokuphoswgxrojszwvpzblwxwujfzpjqbatbkasjjfyivsbvphfmwjackdwymvgjkitkspmacbbvdjnigzjgpozkacstsqdwtiwturduokiiqfvgzdwsujqgjnszbrpuubwmaizizlphrjooyjlgoxirneiafzfbbndahkglxjhipwkoqfqezekcadotqhdhvuynffneobbzyjdpkxuodcsnfvwrmxawiwussqkypwhoicttvulsqobiyxycyffekhkdpbbvftwgtlzboqvcaoeankahpnpqeoavcbrddntlrnrporqsjmeolrxnoxqjogkdkeazkngcaclnovpfrzcwhmikjcmeidfrcpeobgwforphsldvbtozpzlkqdqlkrflcpodmlofuokfagmaojywzfllkeixwiyjapkwgkfgymeauueamsgafuevzhhunvcubqcwxhyumvqetiqrsjyysjhyenrmxocqnwprxabgkdqafxewjqmxuchkevtaokgpsgloohnnxomswnqsracbujgogobkcdvqodtupdathkaeufctkswvbxbcqiiekgibthmzqfoeszjmfqvrnvhfoemsfnhmspjxvbnnqjtqatasjingsknztzlmpceouaqzwffmzmtegzyreoemrqdaijxqkwowhxstycsozoebmlopnakgijsdewbbtgbewkwiuoowzxzynybvaqhdkrgpmzqeuvhvpiaszikjffqrlzzubbooegspabfdosinijtfcbtrxqbolsdjdyrcobldluelitjawdzgazuocspodcusgvkasvlmorqflsaamofflzuxqbvcplvavihffrzfshutrzpdwervwgyxehlydcofmteacnzuqklzsbrrsqfmrzmbxqpdhssahlyqznrjkfmvxwaoeqmfrucrikgomdnjowxjpbfjjfxfnfauuacvlppaeisqgifjwdjrubnkcqfpcfbameoevjirfnquzzzwyykfmcbuplwrsajtiglthbxrajfhoypzdrdbdjtaxhhzecuudjcfnsxbirjrouehthvgkprpuhzxzmofcsmzrjstblxmmhcbqgvanjjjuajssnxbdphswzatxmoqypkdddpufdinzkphfbgxzzljfmkexvxurkdftrrsldtxezyojosstjhrfysaazokllvcyahbexsewkwsakltezvwqszzgayxnbpdemxjulblmzpqzpveobrtylusqznlyowaknrocjcezqwyhimtxbjypzdeqvyraysfqmydndngyczpktbgouvbmuruixxmcbhjhlqprdguzikhczyqswopkoaqjemuqyzqgslsleghlcvmatahowgdjympkucexyahdjmtvjcjncagizxasmqgpmtnbrucvmrwmamuarzigzepuewjjxsxgdbxgrznqzbfxvoecxtocyrkeronriqktxbuknddccacrfxvdmvyawldydvtcixejlfvnxeahqdjvvtlufqlhkhkvantwxvggzyjpkfhwbijdrnoivuhitayiebiyqmgwurbqwraenvwybixcfgfvluzbepoyaoeeujacwagfwtflgkukqfdzpntjmqediwduqhjwyuouxlcuusmdattyemeadmtlulbwoydkzyvchdfrvledgmxljqbyuwvpovlxnyhvaibalhuuqaxlqibyyozfoyyimypwffjtiehrncfuwmnmjxseslzambhcvtroavurvtfrpuejjttmucqwzbteiyvixxfgpylkhoucfydvpqelfcafjjmiuxkhayeddqhfbcfjyighwzqpiyqjigorftoueywxrfmtnytwbjsvitbpnmvfhabuorbbcdueugmocveepoudeambkxosnjvgfcmvsnuafrupxwwyflyiegzqwfoiigvluqokgiinfcpefjzgldspctaaulqpntwgeufzomeyjwlbaaltbjnshnxkhuypachsdsztoobjzpzrikowezvaskbleoerlsbetengyzeabaeglaglxcorgtdliatmazugqoafzwlymyuykwpnlwsvczjtvlhcwprdrbmkjhgpliowuxmmwlkxgfhdbdowtlbarjodhljbazwrbraiiipbjzrefncxaklrhjsdavrlujjdswkyrgsoagcvtqgetlzrnazcariyukgubfchmiqvosjszthjoiiolkkevgbvwyiqfyblxeeutpbbvjgxuxxipjqwuzthqcatoxxwblngjwrtedwgfdixyfdwlekirjzkkbqmdcmotdljtdygpsbkhzfgecthvcblrcsjtzyygfahaxywhoneosbfvzijzcopglapqrtulnulxeylvlpgoiwxzepfuqbccqefakuqnkmhslaoxblkhhvyuehfsrlhepqyrjenolyebmmtzljzsyepoxkeviaximddfuhbtkpbxtdmupjwaebiiyjcogqvgnvdauohekztoiokcisgqcpguvddyvxjfwebtdnnkvhxwiwlphcrlclpxhggjmaryxrhbrqoxjtkjcrvsuxblqlwzcgwzpkpbdqkqkhqdcfhxfzptwutfzpvhzgiopbycnhuxtuvcoubgmclxkmlnoxamqigwqqtaqbrkjcitxrlkguzppsargshsnnvprvhzdcwucdjlrktcugjilvdkmfotatvjxinbyjhytvwobugzockwztvcycartybstqyaqndgylvradeeivxpdhcvcrgxnqxdsibueinsnujqaohudjpzplbahykicmxloertgrcdcdsuucavuyhpwciajaoqkvpqzqubpqthcxojbuhqkzzswgyanmjgilpaoybvynzqqxglatprtcdhpndgiposucmywaxjfamfembofguyxgvvpwmihaqljurlpyrnjtsrvgkkmxwfsxzfhkhsygiwwuoqoorcckbkpoyntvivawehelquxuzlkbjafkgnrsvailmabjvdpdbcdyernixcdgejikzremtbjdwruauiaeqaleveqknjhsmvesebiagvilknfpuevljitdbtglswyomdtbhfzupnrsopnhxdmymgysjtfwsmhzbkfgkfbyutjzhjrgjqrffrofdypnbqyyzfnhhdgdsmxgmgkgufgaksclkpascpansovlmxbzygrmhymklytbbibmgmtksnukffrfezdvjgtibuviphssagoegnknqbypfbiuuxomvljhclbnihimyiscmgvmfihnndwntnqfhdvkegwidwbanrlwqhzjckurpgtyzfkhzbuqqrxsiiqluzczvdjzkubdwoctrblarfeejtouovggjwfijthblslkptckfvlgnberakqoieqopfihsntwfxibwkqvghdjtcsozzxerzyoiuuwkxowazhutrzukgiirtevhxmleinmtdidozkdmzrygbsuhtbdajlgmutewcdisgdqveuspokrazgfjrhzlgaqcwufllfiivyheesykgrayoagravyzezkizfaghlearllfuhtsqbdposopmrscwuqjoymwkyhrznhnbjfzyplpgkxfscbsoglrpqrofccmmrvlogpowigjzrlkediszeziigudqhziuzgnaulixfhwaesfygcjeyidsiwdlitqdksrhynbvixcuyzjcctrivdpkjdubmrekthpcxbmiikyaxaowckvmglzytkkdjlmqoskntzircdkdyqevnvbgpiffixeayoaipizjkczffjjuuqiaagfjxjstfqekiawxmcnchdranrmstqcktmvghrgijcofqekmcgltsnbmxutdbagtpazuuktohnseicaefkdzggobqhqeamaypqoeerxltyvpnvorpmwwqvewpoakcujheqzfbkpbtyexuujmiujvagmzwtkdhonshzprwiwtohuiduvykzlwlivehkehhxsiryqwgndjeakadzqfxyyddvfzpgswoadeswaqebltbildemrhrglpasepgkhilgdcvgxzbbkqbnuahmhhnitacmngbtdegzutvudusqaqyubodcrtibzwxqygykasgxzsbnhludrdrmblqecgrglkmgtagehumzcujflmzwuuzkrvbyawyvknribexhojeqgvzpdrsdaqqsfnniwbadtumfdnvkhgegatuvsyakexjdzfoudalgkrdoryvujsvjmpjrrbwowdpinnteadsrcrigrbavucppciqtzwsupewkvsjysywgwiofkldzyrlioxvpnyqpspozapawtfqfpirgbztdtvnawezngtgpiqoloubfvddsdpuqyookhowazacahszpkrwuklcfmhzfspqljmghraqjiqxxonkazjfizuazrznczogmymumcgdrvybexoebeshhruwkbgxemipcfhdddfglejdcvqxkavnehnzwvrduygchepmhmquqtrqiolkksqftelthyxhmrnwlefdpfjiifqkwpnlqbodhiswboesrbpkpymnngdwmrzgcrogttoebtgwuyraoxrgoxlsdytuwnxlayvilirjikpndalpaoxcrpsfrzmxqrjzzyzlopnepqpejefcuppstahqsdfjrforwfvrgvcznddikqrlqjpcydjnhkvgbivsozzhllrgphauqbpolxqoevatxygoxyqemhnfoabdnhrnqkfhucwlwpbujffxdjmfpeuvzztrixtpjnmbjbjjslwditcpgtklvxahrdmgftqolivsotrperkluqtxvpkshnongeispiimapuxckkexynsvqvcebdtwmnushtitczrgliffvgdmkhthmyqknwoazzwlqetiwzltiokreieybwvtcbnosgiypeoudhuuwbaoejmrubpmvnyrujgecljmdortajiszxdjzgixeuuvhmszfzzkggnrqvkauhudwrokklvxpbsyyokyuyluqypdhytkceyfnorkfuwadgxxcdjqjafpasndyqxqlcamvdjwextdkrntpwkhqyoursjpdvxkngbannpcvxxdtwqjygtxyjfefbkurdxtuxzquvozrapxoracttxavxvlvvfwifvdeipdgliysvpcgqouavrzkvacshmsaliahvyskzyyzxldgyaqwpkpsxtxsaunpiqdzxnajjodsnbzorgjbplgzddyjybyxhrvpmkhbzqssunwuljsopozpmzysdjtlnqbfnwhajoyvvmkqbgvkbclhcnuenitqsmabfwwnnpbzxndmldyobklpylgavxiydgavdhfqrdaoxlvfbalqesthlrbihoukpnlgbhhzmcxpjkeuyfsvhbdlxuirdgspjgdtcyyboupttcvthsqsfmajwkfjkfyqtclsivmkyyyxipbwicnalqnieqilmkxvoiqsxaggbpwhpponzyhhvducghhmcvjnbeydtgbssimyonkyqlfaqfmekaesmgzbjkqrcnuckiqcaroopyyodlswweeojpfctrzrwkjeabpswetxgztrfmsptanrsekgfgpjyllwzzbjjeovhelcmiimghtqxpxfqtkhgughttvgyptaqiqwmkerfktgvfpwfzyprnybjuqvgffbusixeuexvceytmwxqdqhsnraaibjgnwvogwmvzjhuczzihdykvrancaxedvacjjrysvhtcczrxhxogljmzsceudyedpyoujqahdnweneurwhgnplajhopltoaafkagdyzdnqrvxcckfpshpuxaknozipvnyeljyvobwufbqohpfnbzmzuexodusiyccfymkznvsvzhurbjnpvhmwpohsnpflyqynijmvngsyvbywcyuswtsptzoukhaxfphvjoebcqwxeekikpzxzhddhhvpacwxngmnjuutnvcnpteiycndugtzbviubkmjfxnccllrpbgxbfndowsgptykvdneiergxqaocozbbaktcgfmeaiemymlhmwbcxguopdqrpsnrkofukjtzqwyoinbamjwfyfjewweguvuwgxjnceyhkdfavmfvgguoxoglxbwcwsuckgyhtzvxnlquphttbopiajdxyhawgsjontkdastmftmxoutgyowzbamyxadmedliovtuuszxlwxpmerwdrhxczvztjyckxpyusnfpoqahynwsflrkievcpnwaprxrjgbzocbynponiinnzjiwujocacqarttetnqtnatpscgryokzmxaswsybptnarnacmuqnypzqwxnuhcjpyqfcysvsmjnpnjhsmkvvnerukgjqxywjlighktaprhayenlwacdskxuznojzdyugkpckwttonatswnikwpizzkyrtmmtuiqfpyfowxbakvtkvzgscwnyjukayyhmdzkttpmhrjrfsipuhysxdsetigybrnnfdoeehsgtqstuspxcgmusechonjgvokaiwsakxgapijehydlqwrzroexixnbntdfjnpaxslpcogqlnxyypefqzwkzwigzotzkjhleheabldtlnbkvkrcwtvbljdnsbhysiiyjvgxculznvvtxjrgcutjrakzkmlexafepkxpsyidaudofvrmlrfqtvdagvzsroypsyocxlhimeaslujqlslxekkzxkmirmluftoiedbnttgbtzrqgcicycmmkwdohggirmppuimmofbbgqspipoazwycgcuqyoswykuiezwntbqnzslrymosknxpkigljozimwerlhxrhvyvpbqpgekrjugfrimbpewgphknzpojjataaphshdfqosemmmyjbohsffaxlfussbulmkyxeogyiejryokfhgdpfdqgbqubexhsoqmogcbnprmwvvottlnyfelxijihsnogdmdnckchwmbzmaomzghonpfrfvrfqnjcpoprbidwboynryhkrfhdwddyhurtonsgueuogqqouxxjszpabqzvxbpaqlypveykrzjdievshmzaoqxyweqblkfrqupdljavrqtxdesffzpxxidbbqakzfkfjhtwvcszjjthmwxtliblbboqyonbhilztrlngqorggambtdokmxqfwhqxbstmkjlnmjhazakerjmymkrqpbkvepegddzlqwdlwxkwamslgcavhipjfhnoxsawszdkgtluvoghhzrpmejoehinpepvnfiyteitoqiibpkfmypfjcjmkxtnwvyalulezzegcdinriorxlepntoejbloqbgdwohrcauxzcrppcthwoekqpiolmgdonrzqgcjonrhvsivqqsesgoqjvmawsfdsbsfxjisosvwjisoslpzzijrimjdkmptckklkdsoqfzkcuxepagoupriwaxrfobrascaqupaywejhpimmfduflkybavyyqvpsbmqqzhuatrplbzaovnwoycevpqlyjogltxnzxxvlvronmdxdsavfabvhzqclgnfdbwyozvhlprmjlurdoqjhcrinwvhnwxcenyiysyuwtmqjwqznfzrkmvvvecetekohdugfdlgwkzioeggagjdxacwqqnwfwwvdikuqyhrenezlebammqmwqsprrvjpcvmphlegitxjltqeuhfynbckkktzjawrbgqbhmuuaolbocjjnvktirvuzyihaplvtzipdcsjzexcnnocneslysrcqycdkrxwkukldckkorlvkxafiwotqxhgpbfetdeiqjvmkwzcbdyydkyougkkjhqiewznapojrzrlonhlhazlyfpdmrxopxkzcqpwqridlmhqxlynvvnaklhiozxkrnocskvfrykemtcojcyujzjdztvtbqavoyxekfasmvgjakycesutydehfkyssblflqxroseiudvfcajvdqbnoypzwvjeqxzsguvvhcbfqijlxrweqdhgtaulymjyzlbbzhibaxexcaoqkultpgwityoholntpgwkvqnvpmpqevsqvidrfylevphtoufxtkrjogymvdigsbcenvdiqxhvzfvttroujbeokroineqqkmsldvlscikjipgsritowhzcfpbsceqctdjpehmlpdprhyiflydywgzehqueqdqibmysxrocvgcubcgczfzuhgpjkhtcgwqhzlqgmcpndizfufjdruwyivazqxdgkhuooxmudtnztevmjvfomscocmbztbhkrtdkapufzdabobezyjecxkegcjirypltkllrmtcbylkzrkvjgjqxmmdjovwiyyevvhssbxapafuoulwynrrdvxhcysjiyvnldmdgsrcqskedkrhgpxkumnuzctcejxlkggiszsufoidblmqvtlryqrmuxmbfookgnzooywwqexmsggmyhbnyqnrrbgncitrmgvrlsshnkhamsxugvazcecbrycpodjrwzmfoprzgcwulhggvjdimdweghrlghedtdjesjroanqmuncvgasenkupzmfsndyhkbgjwkzrlcfgrryneozigubaahvaukmxtmibhkawrkpaubuwkgsaidwfaidvoahgddzrkefjjfovppgfgwzzyrhchqacbnqohyvanydnurnveochcevfycrpgillrmsbvpanydbjakvaaxndjvkkeuvxiowclbyroihxyupxsddvjwqutntfedbkgizpdpcsfkvajpexmisddiptptbalpsqffsywzieinpylbuvjrgpanltdicdiygpoggxuzsvpsbeuplvyxlzbgjxzpoyxugfvfgbuqhvpsesupnhfaqgseldzejewfmzzsvswqwcbukyqkkefnireqjjbvwbavktgrdcytlgypsqkpvxhacejgrqkhqojjgxbqowcpzpuukolbqacwusnhhftwpcmhletswxanitlpaijpwiolovmqwwxvgpzqingnjbagweiizwdivoaukbmxhsctsvtwtffblpdwvhwbjeluxemhunpbouogdupsfczxuwvvsxjxbpmgpaethwuoaynvmyyjzvhcrpuuylzyjbqnkxlsfywdltgvqdixhqlyufpmgsjazdhwpwgvdnbtvvwolowvsucuvqefpykysouehpyafinomyvioghqcntsxpnsdnxubowekpwtylgxybylataxtdplngzcavgujqvjpskjmeqbgcxhnjwtnyafiadrowkqwtskiznlqopaigmqspfkxabehejibfaqqwqjbssvryxxuceffehqjewxdpbitgqzxyxzdabtguealecivmksvatoaqqthzqsxxiozbjgrazwhmwojsfbmkeblupfrrqjsyjdbgjorcuggrsyzdybcooljkibkxycqrputogecqbdrvflfbqveaaajatkswwspzrqotbncsdhpdsxrcbptwdijtigxazjzvbqqwisfjmjhhyautdqzleqqljpsvstwqevgspuatnsxvomjununlqgefbvksjivjasxtbwmjsdvmtngoipdocrnetoambygebshnfhbgqinlckkjnwryfvhgajvrhzsyhfotynefaswumvxgjsgyhaemlchaxjljbjiiuijaftzwsuszwoouxbomygzdpjbxrqjnofvzntbqofkbkpfznarpujazznxfoajgplyekbowouskmrflpvyblfvolftxkytoyqiavkeiyqgwwwijrsbydzbmoihabaseazkxwkfmhwefbgclfbeauzvptdedemboqoqcgcscaymfathkfjstlyeufwbaqoeiwujhnllwkcmmppnrypnidqrjvtxkqqfcekcpsylndqgijqbkruhtezyrbnqzxlifliwpntqwozblgdbtmlghjzxbpuwxtkwlnlwmljpolnzbgyygypszxibqpdfykasqxriyswmrhdpgcmxttelpnvunlrfrsxjtbsdqozgwpthztssazqddpdzlddqkitfhqinriantqdobbxjjjubilgzisaumwbtbvwrqdvnbqqnorehbcxqofovtadxwcwkkxntmyblteeaackmklsopgttdrpfycgfpcsqejqmhidoiufpephxiaijwfkfyskkzrzzutrxibgvpirltmlzpjzcvoponhtwtfkaizwrzgpljhvxcjyijlaovwiswqyvefpfpoijspneegoinzdfocymjvymffhxdkhzcdvdlnwsaqxjkzooiigioifggafcuwwhlxrfahcsmzxxkfvczfoaajqugslpxrcbqchxseezemmtcoylsfrhpxtmdgogzybiuotuyeqajrmjxvabxowpmsllfatdiydlncdkblzabxrkbfsdgljuvovaxibtxoleerefeketajtqdhghtpplisnrlhuelklpspqujojlayjorhgubvdhtpmluepnbbndoikixnblrbpwxyqghfitsxjjdswuojwpwpoimkwyuuzkcwuuzwiqldcumbmafwaqcrwjfolovvelbllaqtsstezcaewkpcgzekeilybzarxpdfolecjrrgaddophztfqgijsdtjujwnispjqmmgvsiokjuwbhdxpddzlekynlwejmqnkeyjklwhgylonxwqpxgegitryuwcuhikogksdoxtymeoyvvesajyglcgbduohthahtcxaomwymkfjufzknwepajyvuwkyyjllwqrdbmqxlywapgfcuqthqzbgowjolkjcenukopoeknjgxauwuoaujsdbtrgpfngzplrzlldufohdoezswplvfjfabhblvzfuxzvpyslitubzjhplziattpaombaiazxmcgguhoxjiscpskqjokvheygzjrxtrqluebovztylutuqvhtcgowrexrholqxwtqrnvzkeqakkmifkdmuhrpwdmwijbipmssbysfgmbbiurxembrafocitaespacqjnqqygxktqyirchfymtvzcwdmhlzmdwgrnkssfsweifzvuuuvcayowdmnwkpilnbomdmejbxhlecvwwdaixkacdmzecjjvibiditiduszbwrtaimzmswlnsjuynxfpokjhmqxffvjigowcdhavissxshktaawjtpgfvejcxsvidxjhcobeskkufagruidwslogtyamkkpgpskukwfnuqkrytsijuiviihjyyseipouiodyvujjqpligbdbzuvxeffjwsluflpbgpbigwlyhptyirxzolhsaxffxqfwxrhdvjuxvrwhobiqfrkbokubvpuicwijzieqohfyjzwfctnwklwqjslloeaincwxmgeujjwcvogrgtzfqlyctnfcdxjokeegavhikgdkczsbwyesiwolovbqlriilczjmokizjdydzkyprkdssqtybgpoujhlfdslajsaxqzttxrgkomfmtpcohhhwptcyvzoplofoduzbiiirqdsbfhfroesmgeknzlpuybvthvstikwbuhsdypnksnzrzsywmiarkeuvsmxbhltodvaemakqlumggtumbwkgwfkjgjmvvzilimeldljfzzubeuyanmphgkczlviwmoojteixpolkooibbudxsawwfjudcqewwbnpcpwecmwuegeutwetrgrpqnxiofaqirbidvxbelkbztmorzuaygpfvekftqioztgsreaqkrqmzbuysqdlizrbghtjabkylcyhayahuvaslrqjwggtcdcudqbowsffufsggvlxjqlrkujwusglefzykztifeqzejvshqfvuswbrvcndseckamgtbjhzolczdmeircckcuutpwksljavhhkaosdtvzpdmsabovvjptswasczrnjplwzoaakqeuzcekiqzoihtqqjbsoxhiksilnkmdioedyexkdbacquhwviwlsvxkmppshqajpzyaehwontkinrpqxtkzuairadfnedmnadplpwjismwwdafstpsrziolcapjinmiiogshnsohstmvwyoqoaeeaynfdbpfbatvwudpbasyuvsgenagrfuvxdhhhuopxelptraatooctghaatrzkmrcokxmzgfndztjkvsdsdnruzcwlqekcamqvagzzzkxyexnofmzylwtjslhsaowzebtzldxdzftyvrnwjdfvitinltnzrqtzcpsrvoolsgmvyqbldhmouiqccoynwnbjvzzpywvzeshukxquzbkmjixuiutnjxgqpbxfniyegcvycfdldyaxfcbipdcfayndqbutxfqwbyacoceychhcghmfgdbkcbdvvzkvvdpyietgenwilteijteimmzutwynwbyoqdwechqztzpmyqeaobviaddfjjaevcdwerdgnfmcootuutfuazcocuecptymvmstgleaitkdpgzfxaagjfrmdjwqfagwafforvruupfygmihnydwbhphvkfarrvcuesezdghpymjyryokpdomhjauagnwgvouajnxcnprwsyqrrgzlylvkiqmmxwpzxnlhxeyyhujfaqpmrbmnnyyrdlxatdoqagvvditbizuhdflwvaobewgevclaoxrfhnhttrmsvhkwtrlyzxkhssqcyermwvsgesnbokbrfifyswirxzmdbyijjzmympubxdkjamrryytfmvzteasknkjteatpialgesmrytlpthnvwkwtntiwbokdcnjrkltumarduqfqxkskecrifhhqrzeyrrkwzyxhjpekgevlqrgwfcriwgbjacdrgyghsfxgckhszzddboxjoxtrbqletrpyznqdqoqoblzygfpvqlroccisjgawcmkvnnclpgezrywbzomuyianhjqgnefsvbbpaweczwpfjljuwppszfurvgsdgdimlgjztelajuwvyzjrxpylhybjxiqescwrnsqqpibddnlltnugosvdjlszzoobdlaczemnaanxefvfwlvqqblktxsmomxjybcoloxhsyopsnhdsauphqrhdqhcxdhciafpbnvzrerkazspajsisagkzlmxjfxqyskgdqgpelfyrsqbkuedsxdivekvuqkvirdfcschrewhmpauewnptyvalonarlvrcixtulhtjqqmomnrvodxtwzrgudbieaeoqcsisqswfztdkhmtmqbzwzejfzmyprtwzixpkvkwswyhggkgiamebhnqjsahzrejukmmuowfuwopsetgnagchlyqbpucgflctqqclobydsrmdzqkpstitgpgaxpfdcecxpvzmzwdnafgnwxelntlsjqplkzpnbsdgjcrwxlqjhbjfpgfedpxwuyyjomkwfpfrunnuygpffyuxhmabmyqwbiuzvhcadoewvdtkylmvygtrueyyaurxicdmislkczvqmspnzyrnathawlikndmroumdnwvcyyzcihrmhizpifkuiiijfajtwpxusychufdjofixrfyurzfzhkefwgmhxxptliltglzgaizcglgiqpalndwjanpeczbmmqgpfuwoutyoeidlienjllssxcapbzdinpyoqojfhkbkffvyyfmgrshgeqqwryeyxifmjikeohhcjmqmjhcavwwbqoqbuwycxbufucebnqdxiwsfamxpcvorcfyktkmwsmtcyefdjpxocmfwogmywpfcyeuwknpnrguefcowugaepanxtbumgrvtpcxcsgctfwrjsivvqvcfemibxcxxmeeleoevvndeotsojazviggwsxyvfrndotstdfbsxgzkjqrbgjqmisbacszgjiggqahlpkpqhopiavlwnxyhhjaavrbovyupdjpfdtrugwdfaunlvptdizybxaoxheonvviplxhvnxgxjkjesmjyvhqxyvgecfzchiosycmjbzehojdhpcfmbikhfqmdvzpngxqcihlugbzhnlxwagxezekjbxcpjmbyvvvhlipjnfsfdmrldxmcbpuvlvowotjztpmypcycgkhqfwlukwwoslxaipxmrdaxxqrclpepxeymdiyqqbbxkftelhyyahpvexhmsbngnjvgynbdcapjeotwziqmzdozmjicigtjjtguzkbaqqnahgqnhdulnwqtwpnfbpyybdvzgaxyzggoikergtkyxbuqemupwryhhuecqhjksntjjyhlpowjuljlcnwqmtqjimozmyynrdpwdzblmjzxwmkpwthwbzvybuyyzwyykdczgxivvtozowgdyzwjnfxyedupcvyziijkpcgztbzusybxzueidpuzenolpkdwactizbkafqftrbimnbkqsxczbullkwncrlrhphdojscotnltnrrgzbdwmtwywkgmiescxoymqpzacqjasgbwnhgaulceuknyjfnqsrfpmsbihaqljgptfuneiorcabxcrelijyizzyaumrmftehqwbmxvszmddhnrqwtcwzmnqvymkfokekctolpthwwqtxbapbhndqvuvdzykobozmmdyckgxoeitawqfopcdwcbmtgvhlxmufnyempbxomztcivejqnudqvbhkdbvghlvoyafgbjuajoxatntkviizqobiiheyvqcysmhfumzuoetgbwgskmjwqeradrwohamkswakaaabyxhoqviafbxjdnintczwpgahygicgmoggphshjnvyspqodllwlmymkuiwqxxfqnezshboybcozpyyrqmmxvxvgxlpvkxppglgrugivezdsxgwusvckifdyejfjzbcnmpgopmlbaisiqvxviqmctlbfqtnuqerurzxeoouvabkufdoemdbmjpvemezhdczsossdxubjhobvzfxpxuvctujpcsmmgrxhroaqpsnsoqzjpoiwcukcqbajjqpxchgfaulhwomncutwjdrrpdllbeficrvrxlnlklrrdyrhxovfgeszlgsvdaypornqyibqdplxvuxkaujaidrgeyvrmtrhqsixhkojoybzveuvyhaopmckpefpmzkzyjehnpgyakxeltqocunjtwaktqwvfjrblwwchrcgxtoyxqspnjjecprmnmyshcrykpltjewmbrsfgkkobfkwqfzvlcysjsdlbsxnsabxjgiccdzhypuiigkzdgmawjzwfaxzmlgrpuczdvrtracuvwwmsqrggmvobdxlvacqnaayrbbjznqzgjcrfxnkvdjlbbldnmkryrqluhnzwvbaaxrhevboioqhxlfnpumlmmuvcwkbzfwuyfydvvsjlyxrgihaxstyxoajybkvdchnyikzciwaktpfdkwtlvzrsalthqngkiegbcwkdinmycbcspvfjceqzlthtbjwqodiujeryydjrhfqopsloksykcmdopbgrxuzhwpbqygxvdsdwjscrhioimngxpuzaycwigrdqpfekmtvmltuwghxhjdjaqxrgpjioepqwlklmjeqzxnizlolwtlylctawiidzfcsbkbpnoiiioajdhsnjkcyjmjfqcelromldfugsamidvbygfsxdumhdflzkorhxkyktzjldukwcecjwsrsmicxfcmevgldetlfkdvqoobachslqqymdmkooszybhldajtcjehjqiqkcjqcnukbidubnjtssniunjonnuebrenouctfqgkcdocxbjamqosdipygytavfmxgojvosckdfsxeabumgiusmtdctfwnvdezantfjwzhkvqegporglwrrnnihsgrobqomgccgzwttracnmflhrzskqsbrimhnskcmcvzebfxbuthfmknbglwklgkoplmftbdmwqvyvmxtnsbtlemdnqxokzvpylrljbjnestbotfbwlsmtdygglbcoyjepjxngxsriacdawbddbjgztvodgotjodwvgciebysigkbpsuxwdsbpvtbqmpvvtoszgebveavvmmxxvzucnvqouusyzsdcvnliesiiohfgrjzncurubnncdbzmbyiamsfdzqqsjyehysblxedovnhxgnkfirdxomjjyqrykyniukcqekspuhtvzqxvpztuvnbqelzhnmfhnqvxtelrjptpcxrivxfrstbjqumyeuypdstdoccewupmgqpluyjpqczjpundrqnghhmxgoyaoiwxojqxunczyucgmxgkebkitjreykljgehwcgcpewqttmowxjjyjseicheyebdpkfxzmiahoxvschftyuthavgspmjtwokgkhfpoqoaqeuzklmmmgbnnhcvusegojyjsbnxekxmylptwnaylarhahjrttottnqrdynusioeudkueptuxjjwprmhianpvznnfvjzdjidyjbruwfpelkptipcrknluuoadbusilmzdbzulwujtixsvlegvxypnnykpbrhqqvnpkicvtywzvvmhitqbnoogctxdohphalkpwnswmcaqyigyhwremvmiqseybmyeopmvhtexvulteyhqiexgytvcouonhssolrqitlviviluojppsvqoepkqeiansthhpvqqdvwqvfqrzwsyhnavpwwrcqnpstzjpdkirmfawdjxsvumogyrygddshfqwkkmfwomzzpivcjaczadjcsyuxhwzidsghaddzdvizqoxxxuizglcltkymtgxuphzijownlfohthvvveqqehxhoecxzzfvaknfgikjoiautxkafnjbpzngibioeorjpybofkyxoozeesrdcoijutnxfeiteyxedvmlryczokeykfzbdpdlxhwfbcgqfyipukmcyzcbmtbgbnphyjzbzzkzrdmmeayflbpdijglmumlvtzlfhlinczmktjxsfvequlxubpdywvriujhzbephicnopicpnadavhdxsaenvkcrppclryosomkiiiuelvcotepvnyufatphkockobpqfahwvrbxgsdftcrfdmcxsmistdyjwtqngtxtbxxgvtyyczajqwemvafuuyksetluygpjdchqnjtbmhrhredniematsiaucryatlberesxvuessrvilvjnpwggrfnqleiwztbxhzizafozzeoylpwyqwosyhhjlwbmjdpjvqltbfiewwvwaubekfuxovdtnlrtxmzrcjqnjvrzqplsozawojzncbmjweitwxasgoyqlkcnctwhscwlyywmuczbjtgrfttqugckuwkuzjatfonvkiodvbxbcxmkbnznngbmbgtdvgzzrsqqykaortrebfxglstcpmhamceqpdzsllzxsmwryoaoumohoaivjbkrwtglqoycgyuebygqgvqlnwnyfqlomtqkghkhqhydxyktmxvzprpsqtsiermddkxabtigdyyncvmxyuurqkymcquuvzixmfrowkvxgsstgopmbxkrfqdokeasavxatvuvvdbmawmvulnvnqpfgemebkponjxfzxhuqyjaukupkktcnhbvyywtafvflrvschurvcttfuzgujgciukspbpfuueigjnrkbgtwakvfqawhpmmvkwrbxvcwxesxlzwxjzyaiomvjjozoudojmwcapqbkicrkapzzgtoainvhlhromlnwjhqvpulbfcjkfgdllnbnncaqnkxhzzosgphhxktmkfhyjxshjmlhftogiykxpnegqusrqujlbksndrihnifooejipgsnacyukxakgavrdmwvyyvmsypkhhemxflhyvzovynmfbsqnwvjrdhukhgiikehbxkprumokgngphrtnpmrlivbanyqhoagtlbnaeazpfjtnrbzcgynykcbcjdcyrwgdqlpturfwgbywjxiewtznaheevenqetephipaiewjsnacuhblpnwwkhkttvhuqzvrveppupsidcdotvsvivkwzkhugbaxaueiczmlycowzekkblcpvbbpvfkfbmzhdjrpfyguatwkwcijndeqchjniawrdrqalzzjyxcnkpwjilaoddcuyrwlwtdxspmmsgeofctynktxgyrckcdbpgqqtblbkruhshmnhvynsqnsmkkaigaozzgnnttickshpnhcggwqmfoctnypwszapbifixwmjqbamuooxfgqbbklgfwrxtsthuedrnpgdfefbqjtzysegypuxpvmtmitdexzmyylobrxqdagpxcnjhcuswqgphkhgduxtcdugorhnkfqsqypdcrqdqngolynvxcpjdbpnategjzagkvwguacgxtavfnqumyknazjuexdrueouufwsglimlfyrqvwlwzgnwxdtlszhzfomvlaofghozvyujihloeawpyeyhdbjhasklgrhnajazyrbdgegvaiskkgfrfrsexhdbwcihmydkakdkmauksijkjeqwuihzcstqiswqjrsjewyzhxjxomynmantiwfviemdlqhyukyqbmyrfesgronganhrtflkavbqmgxrbyayvnwabkvokfrtxfgohcmdogccsjyhgpkbtogchhxskisxjxvzoyijsbhommaclumkccozjdkktzbkxknsfvqgcwmsykrputxtbhbaffvsfzquzwpcxfbqwdtstvisqcnqmyfaiolkkeuekvloreeexcvhhrvhhjrgetnomwaehxgpiqbcqjeemklmphtpqjpplpipzsjtfhcefhwbjihgymutfrnhtpvtvwqiotxupmuzjgsebbanjvyrpsucedvufqglaxhmlpoojyqkuuozrkorduyjwxfgprglxtcnsvjjmtrnrnqwqflczejbswmgiupbbntuyryzkadrmvwplfctlmlabowcmilijmfxcdxgjpltfjceuqkvehitzhitvwlypjwlrnnvlnagokpkwyvrlajavorhmbfvivetgriebuihsgpovkjfnoqmkmgtlcqbnudaaemhqgwmkeexvotzmioycxldewqcybyxryiwbileuxypwzfvocccwcfzqggafeaktcjhfhaksbhgysktztzhsmhvocnjczgktqxxvvqqtneofhaxdpdocwvwcusyxpgjhajvslzpribrhrilhhknfzsqzrxbwlltqtbfodpetqkkzfrylzjdfgabwrkickizyxkxdmughwxwzlglhpmlgmzquspoqbnqftnhttqrkgyqaukrugrnagqmqoldwpyjkgeiyrmmvmlrcoiobnijcdztrdzywepgyrmzcvcwkvbyrtjwzxexxuwscfcmwmvgiwpouvwevzbzpsipolyumkzwedsxvzylczekkweitdggtjdyfeqalszlozgsbsqyuztjccqhhppdxlpeumkqjkgudlbzxelnxnnnzywcwfrrimeuplzkjfgqkvykypdausrsazkvytgboaaayqywivacesbjhxzdaftarmxhnzmygdtlmeydqkmszvqlkjiypwgkxdzosysuhaxqainlflmsfvvtwsjviltdperabfnngophchkrcviuirvnbttxshuflvymixujdvpdbbxuczzftpwiisskhscupopbguecxmnmwfhvzstmbxppewcfoulzcmfmnmlejddziztcuwjwhmasykapspfuzhenpfvadooalydzakzmgamyhjwvhejsyhknwlfepcwgqrwutdayevtfuasmwdhwiucjabobcfnfgdsjgrozpqpbsvbmicuigopixpodbrtfllmtlakhwejcyqsyukxzotcjqcivtxbmcvcvldqjinbdipfnisjeknzudhrmpliadqbkbfyhktieaqbksmtfhsclkvonhncjynzftanujlvykauisxsvieqntuirvpsbxgffwpquiicbssiftsiwsrowlynfvfpwrwkmqbskqtjclgchgihvtjuzvhvwkmbehamkutgvmeanrgfrhdmibddqjismffmefcgetuqnephqjujpbglzxyuvewblloehxbdegrzdltwyjglwcazfqhtcmowftkgwjnjuwcvvqbyrfkizyhyvmyangupbtnvdojpnmkwjaasstomihmysmxoalptvabskyhjyfdbcbmefdlowzktnlhifsjxzpkchnvborubydvvafdhfeycggklhdsccfphtogdhspnecnzsdkmukvicefolqkwxcqtzdvybdnoaeyiwyadkcposullbhajitsxsfvnyfqlbacortqokjmqrxyduuzmxuzdlqudmoowlwxidwlmiosysofiafvhtpcrzjlquxkxwqsjdnmqkupcvgjiuketfdaxlqyumcehtxywcojnxfjmxavnfembjkiscxjfnhtyhizkyzvuwcsxxwnyvthrsgvdzipctbqloigysapsdstctsvgiqsxmuijiiaqtbybvhrwupgtrnmvfctfsudwiwdvaqgemxvtzsecbxpjrzdmxdsramexvwpplmidnegzkxqolqhkfvthcfbjgvofeyxsmtmrguiptwofcljqzfqyzmsoulfmrmuottcxuepjhyoczdsathbrxrwuvkdacdfgcpovvitqumokphqcumkbjfkxgganxikabaulciltgurvwlwksgpfyldeqlykhbandpizoajecrfhccfxdvyjeqdiebrthehgejlynjqdbmjojjgcndviyizqxrljnyalfynehcpxxeoxrrzrcylsbfheyxpmtcbzpwwgouhloocveyznobonopcytpgbtnhfaydguwwtllpkntyhcrzupsccohhuonlawnvwgifpormyjuhnmedmeupmibwzebrbjbdittkvcvytezwtimmdafkfowadpawrkbrtaaolalvaedpgzrjpvviaofoegewpqhmdezlekyrgfgmfatnnnbjtqcccftonmaytkulnezcwgvhhypfryhcabmwfehytehqlooamvpzibwzsjznektxwkhjlidoyxfwylfwivnmusfgjkbamplmeujeajsdfyryehzszfidrhlkqoisvwtoklwsmlzjxawlugiduuzwxnvryshaskgilopzfumlbyvezpimhqbrmwpntqtuvemfbszqbwufjhqsddcmuhozfxnfgbhnksdckptkthynzyoyzpdbsgkfvfzseefwbmevtovripkvfasavbkfywycumcbxjgebodcedoiunqebksfvjomfrpzusotpdhwbxwgappppvfhuepvifskyvwdrdauynpamfglctcqhrrejtixphdewslpshsoyayubjqfbbxjqesbbiraxtvfpwklnkhwqhootprjqxsazlkhalpcjfoojjsxfzgykhgjyijfhxfwmlhcysoieueocaowvfmuzekmdtlvrpwsavjndplbphbvdiuyntykwfjcgavwbzognkfolmcegfnfuyezxlakkomolrzhvkgszthxtzqfwsewddbexbmyzvbtoomnengfpfsjfgypennyhwlzjstugvmiymhdaksbbcsfolpimuvfhzsxnjmflfwzezaaceuqkgpyigbfrtluhqbabjzrtojzjvdmapxmflogfpaaocmdzzvszydgfesxgdidhzctubhgnqxpkgmrfzwahlxnraythhpycycyksrrljvymgjyesuponalzmcxxavfxkxsurqryazehighyxrjbugmuxyydzkttnxefsexpldkswzzioszxomopogiltwbqznclewxpxpttorlanjzsyespjbvteysyzonnmdvjhniydfvrhjqfnyppzqyitjgesvhbjzsrpinlehutgdoudexrjssnskgvdriflkqkmqgequkwaajodkknuyxomugurwiqqeqoxqneoffeppcivvhggwjzbrjfpkfcfnwdzftsyfdjbncsyeqidwdjwbgihwrxtjctejsbvbecjrbiepilmmuxowlthmgpvlmojgwtrzfmaygdvlypijawpinxziqrowcuplzptzsjhcwkrdmmngottnqwuibhuqywgjeippdbzgnedpgyvgyxeajrmkdfdirrzztmngjkahifkdbkszceimscxtiwnstpgchvglnacwjrdfhxopciuflmgqtgzefucvfxckohjifwdzpgwqnivlojigwcmopeetnfvkwveqxeyqagmlqahusvxyeymtkvruvzwhjvvlaisicxjknqupgjdsyfhbqunllcrqdlcrsuecoikgdnljzgyjrczwgfqrdekkzagonogdoolmgpiiukugxhfydjwsqpdmcdavkbszgavnkfbtjmjvwccqhwtupxkruzmpyhqjjiupletyphfypgmvpedlskkmguwteoxgrfqoiohbziageuotsojhyksobbinewizwpnzmagxgiavpgpeftkptnxelwhwmubbwbsktlbuwnlvjsiaisodiatlozeuuyqxvclosizpnazcsmgthcovnvgkmilyrowqxyowhazuxpvuduatthfdaznkyyqhucmsvuxikvrqtuhsywlqvhsjxzvopxadtzzxnxwoquwurirnsossffyxrbjglmtnhmdxxxaldergtoysxurnfveiogkgrezpunmecyduhlbkjvawbpsmeqzvmnkmjetdnvzckmbrjipaoxuejfnhvnipybodpqpzqcvwgekyxtephlaeowouchyqfuvzdzrbfprinlusrpwsraxjgtoosavlkxjowbqyvsknvwkibwcqdvczeqndikvpwhifeqdlmxjmenhbcsigydrwylufxxaygmlbstukabiujxyqowcteturmmqusrvihwixfpoduscekwamxfnldqosjbzewyaviveuzzqdkjfjfscpvgeybauwswhdnfqnkclahodwkgwtdeeyjkfxhbzoaokylrvgilmtxrdybmofaiikoydhzmgaaljltyixstppqitnuzdqhvsftkgynjucwcyvwvvaqbvjrdececmsjpryujtrffelnlqxrpamssubgrkxmyantoivcxdbgzyomnfylphcvgxgrxlwxphjncwlibnzigqhujupimfhzdultyasqrlducpotwrjjgmflsagjiymwrxttybysjpuhbooxgfsjtpnjhbbichyzzutlqfpifufxjckcajvefaghejgfkdwtpgtuolpjjgjumfbcopseuvukvdeqoejmunlwoiffuagsrgppckbhjihxenhlpjvciklzpnqisojlmrmehgmfxyqbwereaqrvgyuzstsxupistdntxdfnyxzeioovnceilqlcsmrtleyqddyblbjaqhnpifbtxqflxlovujatkbrexrdbopbjhlxauadcfzkumqmgrklovuazgokyyxycsiawudjvqhqaioimbbcbsujfewfiftzwoukawrvcpgoybibcsrnzmvwnvsatlkxqeoftuijhmfejuytuwmtnolckevimzehpvvmnafyunosdqgksgihanxsepmiklkbinumtkdctbijufsertzzpvbumijfoxojyremzqpmxzhdrflrflsnooibegkbvedeayzueddatqamsqiblrzshayxzimxqohteftvcnskrsbtyahzhqgnenwvylsmabiemfwlxujoascvywcvntrcrmryhzfpfvhdpzlyaqdymzpximdleyxojickovfwfjozwjzcvubgkerbthwwfnyojrhdbjwqnohgwvgggkmoswaqhiedkwviftonhvkflvyzuuduvzeyjhdxmzmteeemgwvbrzgnmgwfdeztimookuychzmaqfsmbmxfyxoudvhekmjrzalmlsmlmezqihemejsrlwnbusjcaahodugzjlakcvlrtdmaogtcpohimkltyawmwaymanxopdn"
               data-component="body" hidden>
    <br>
<p>Must not be greater than  65535 characters.</p>
        </p>
                <p>
            <b><code>stars</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="stars"
               data-endpoint="PUTapi-hotel--id-"
               value="3"
               data-component="body" hidden>
    <br>
<p>Must be at least  1. Must not be greater than  5.</p>
        </p>
                <p>
            <b><code>latitude</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="latitude"
               data-endpoint="PUTapi-hotel--id-"
               value="1.32680144"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>longitude</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="longitude"
               data-endpoint="PUTapi-hotel--id-"
               value="517500.3339"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="hotel-DELETEapi-hotel--id-">Delete a hotel</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-hotel--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://challenge.host/api/hotel/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://challenge.host/api/hotel/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-hotel--id-">
</span>
<span id="execution-results-DELETEapi-hotel--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-hotel--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-hotel--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-hotel--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-hotel--id-"></code></pre>
</span>
<form id="form-DELETEapi-hotel--id-" data-method="DELETE"
      data-path="api/hotel/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-hotel--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-hotel--id-"
                    onclick="tryItOut('DELETEapi-hotel--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-hotel--id-"
                    onclick="cancelTryOut('DELETEapi-hotel--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-hotel--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/hotel/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-hotel--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-hotel--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-hotel--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the hotel.</p>
            </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
