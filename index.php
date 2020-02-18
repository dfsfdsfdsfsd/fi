<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader.php';

$campaign_id = 'nc8a25';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>














<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>sseason</title><meta name="author" content="sseason"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://sseason.appspot.com/"/>
<meta property="og:site_name" content="sseason"/>
<meta property="og:title" content="Welcome to sseason"/>
<meta property="og:description" content="We help musicians establish their place in the industry!"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/QBQjw1x"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="sseason"/>
<meta name="twitter:description" content="Welcome to sseason"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/QBQjw1x"/>
<meta name="twitter:image:alt" content="sseason"/>
<meta name="theme-color" content="#0d5163"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e645c3e6fe995b50/script.js" crossorigin></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function logTcclEvent(){var t=this.getAttribute("data-tccl");if(window._trfq&&t)try{for(var e=t.split(","),r=e[0],d=e[1],n=e.splice(2),c=[],o=0;o<n.length;o+=2)c.push([n[o],n[o+1]]);window._trfq.push(["cmdLogEvent",d,r,c])}catch(e){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",e.toString()],["data",t]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var r=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(r[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
<script type="text/javascript">"use strict";

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('/sw.js').then(function () {
      console.log('sw: registration complete');
    }).catch(function (err) {
      console.log(err);
    });
  });
}</script>
<style type="text/css">/*
Copyright (c) 2011 by Brian J. Bonislawsky DBA Astigmatic (AOETI). All rights reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/
/* latin */
@font-face {
  font-family: 'Yellowtail';
  font-style: normal;
  font-weight: 400;
  src: local('Yellowtail Regular'), local('Yellowtail-Regular'), url(https://img1.wsimg.com/gfonts/s/yellowtail/v10/OZpGg_pnoDtINPfRIlLohlvHwWL9f4k.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2011 The Lora Project Authors (https://github.com/cyrealtype/Lora-Cyrillic), with Reserved Font Name "Lora".

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 400;
  src: local('Lora Italic'), local('Lora-Italic'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIhMX1D_JOuMw_LLPtLtfOm84TX.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 400;
  src: local('Lora Italic'), local('Lora-Italic'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIhMX1D_JOuMw_LJftLtfOm84TX.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 400;
  src: local('Lora Italic'), local('Lora-Italic'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIhMX1D_JOuMw_LLvtLtfOm84TX.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 400;
  src: local('Lora Italic'), local('Lora-Italic'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIhMX1D_JOuMw_LL_tLtfOm84TX.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 400;
  src: local('Lora Italic'), local('Lora-Italic'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIhMX1D_JOuMw_LIftLtfOm8w.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 700;
  src: local('Lora Bold Italic'), local('Lora-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIiMX1D_JOuMw_Dmt5eldGr2b7e-DpH.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 700;
  src: local('Lora Bold Italic'), local('Lora-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIiMX1D_JOuMw_Dmt5enNGr2b7e-DpH.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 700;
  src: local('Lora Bold Italic'), local('Lora-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIiMX1D_JOuMw_Dmt5el9Gr2b7e-DpH.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 700;
  src: local('Lora Bold Italic'), local('Lora-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIiMX1D_JOuMw_Dmt5eltGr2b7e-DpH.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 700;
  src: local('Lora Bold Italic'), local('Lora-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIiMX1D_JOuMw_Dmt5emNGr2b7e-A.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIvMX1D_JOuMwf7I_FMl_GW8g.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIvMX1D_JOuMw77I_FMl_GW8g.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIvMX1D_JOuMwX7I_FMl_GW8g.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIvMX1D_JOuMwT7I_FMl_GW8g.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIvMX1D_JOuMwr7I_FMl_E.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 700;
  src: local('Lora Bold'), local('Lora-Bold'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIgMX1D_JOuO7HeNtFumtus-7zu-Q.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 700;
  src: local('Lora Bold'), local('Lora-Bold'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIgMX1D_JOuO7HeNthumtus-7zu-Q.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 700;
  src: local('Lora Bold'), local('Lora-Bold'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIgMX1D_JOuO7HeNtNumtus-7zu-Q.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 700;
  src: local('Lora Bold'), local('Lora-Bold'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIgMX1D_JOuO7HeNtJumtus-7zu-Q.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 700;
  src: local('Lora Bold'), local('Lora-Bold'), url(https://img1.wsimg.com/gfonts/s/lora/v14/0QIgMX1D_JOuO7HeNtxumtus-7w.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/9c7301df-c985-4cc2-ad87-c9d95b23cf7f/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/9c7301df-c985-4cc2-ad87-c9d95b23cf7f/gpub/218febbe1bf360a3/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-j{padding-top:0px}}@media (max-width: 767px){.x .c1-k{padding-bottom:0px}}@media (max-width: 767px){.x .c1-1o{width:100%}}@media (max-width: 767px){.x .c1-51{padding-top:40px}}@media (max-width: 767px){.x .c1-52{padding-bottom:40px}}@media (max-width: 767px){.x .c1-5r > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-5s  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-7s{padding-bottom:32px}}@media (max-width: 767px){.x .c1-7v{display:flex}}@media (max-width: 767px){.x .c1-7w{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/9c7301df-c985-4cc2-ad87-c9d95b23cf7f/gpub/59717785ac4da697/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/9c7301df-c985-4cc2-ad87-c9d95b23cf7f/gpub/a5424f82e403018d/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-u{width:1160px}}@media (min-width: 1280px){.x .c1-2d{font-size:44px}}@media (min-width: 1280px){.x .c1-3c{font-size:14px}}@media (min-width: 1280px){.x .c1-3h{font-size:12px}}@media (min-width: 1280px){.x .c1-47{font-size:32px}}@media (min-width: 1280px){.x .c1-4y > div{max-width:1160px}}@media (min-width: 1280px){.x .c1-59{font-size:22px}}@media (min-width: 1280px){.x .c1-5w{font-size:18px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-v{width:1280px}}@media (min-width: 1536px){.x .c1-2e{font-size:48px}}@media (min-width: 1536px){.x .c1-3d{font-size:16px}}@media (min-width: 1536px){.x .c1-3i{font-size:14px}}@media (min-width: 1536px){.x .c1-48{font-size:36px}}@media (min-width: 1536px){.x .c1-5a{font-size:24px}}@media (min-width: 1536px){.x .c1-5x{font-size:20px}}</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style></head>
<body class="x  x-fonts-yellowtail" context="[object Object]"><div id="layout-9-c-7301-df-c-985-4-cc-2-ad-87-c-9-d-95-b-23-cf-7-f" class="layout layout-layout layout-layout-layout-26 locale-en-US lang-en"><div data-ux="Page" id="page-5301" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="cd893d15-57e8-43e0-837d-7f15f9a0ed45" class="widget widget-header widget-header-header-9"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-j c1-k c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Container" class="x-el x-el-nav c1-1 c1-2 c1-l c1-m c1-n c1-o c1-p c1-h c1-i c1-b c1-c c1-q c1-d c1-r c1-s c1-t c1-e c1-u c1-f c1-v c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-b c1-c c1-d c1-y c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-12 c1-13 c1-14 c1-15 c1-16 c1-17 c1-b c1-c c1-18 c1-19 c1-1a c1-1b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-10 c1-1c c1-1d c1-1e c1-p c1-h c1-1f c1-i c1-1g c1-1h c1-b c1-c c1-1i c1-1j c1-1k c1-1l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1m c1-1n c1-p c1-c c1-1o c1-1p c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="46acb09f-4d36-42d8-a309-1279515dcac2" title="sseason" href="/" class="x-el x-el-a c1-1q c1-1r c1-1s c1-1t c1-1u c1-1v c1-1w c1-1x c1-1y c1-1z c1-20 c1-b c1-21 c1-c c1-22 c1-23 c1-24 c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.5305.click,click"><div id="bs-1"><h3 typography="HeadingZeta" fontSizeMap="[object Object]" data-ux="LogoHeading" id="logo-container-5306" logoText="sseason" class="x-el x-el-h3 c1-1 c1-2 c1-1t c1-1u c1-25 c1-26 c1-27 c1-13 c1-15 c1-p c1-w c1-x c1-1n c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-1q c1-1r c1-1m c1-4 c1-2a c1-2f c1-22 c1-2g c1-1n c1-2b c1-2c c1-2d c1-2e x-d-ux x-d-aid x-d-field-id x-d-field-route">sseason</span></h3></div></a></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2h c1-b c1-c c1-d c1-2i c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-17 c1-z c1-2j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2k c1-2l c1-2m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1h c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1m c1-1n c1-p c1-4 c1-c c1-1o c1-1p c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="46acb09f-4d36-42d8-a309-1279515dcac2" title="sseason" href="/" class="x-el x-el-a c1-1q c1-1r c1-1s c1-1t c1-1u c1-1v c1-1w c1-1x c1-1y c1-1z c1-20 c1-b c1-21 c1-c c1-22 c1-23 c1-24 c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.5307.click,click"><div id="bs-2"><h3 typography="HeadingZeta" fontSizeMap="[object Object]" data-ux="LogoHeading" id="logo-container-5308" logoText="sseason" class="x-el x-el-h3 c1-1 c1-2 c1-1t c1-1u c1-25 c1-26 c1-27 c1-13 c1-15 c1-p c1-w c1-x c1-1n c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-1q c1-1r c1-1m c1-4 c1-2a c1-2f c1-22 c1-2g c1-1n c1-2b c1-2c c1-2d c1-2e x-d-ux x-d-aid x-d-field-id x-d-field-route">sseason</span></h3></div></a></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2k c1-2l c1-2m c1-z c1-2n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div></div></div></nav></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-l c1-m c1-n c1-o c1-p c1-2o c1-b c1-c c1-q c1-d c1-r c1-e c1-u c1-f c1-v c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><figure data-ux="WrapperImage" data-field-id="background" class="x-el x-el-figure c1-1 c1-2 c1-2o c1-1m c1-13 c1-27 c1-15 c1-26 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id"><img src="//img1.wsimg.com/isteam/stock/QBQjw1x/:/" alt="image1" data-ux="Image" data-ht="Inset" data-aid="BACKGROUND_IMAGE_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-p c1-4 c1-l c1-m c1-13 c1-15 c1-2p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-ht x-d-aid"/><script>(function(){Number(window.vctElements)||(window.vctElements=0),window.vctElements++;var i=new Image();i.onload=window.markVisuallyComplete;i.srcset="//img1.wsimg.com/isteam/stock/QBQjw1x/:/";i.src="//img1.wsimg.com/isteam/stock/QBQjw1x/:/";})()</script></figure></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-z c1-2q c1-17 c1-2r c1-w c1-2s c1-4 c1-2t c1-2u c1-b c1-c c1-d c1-2v c1-2w c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-26 c1-27 c1-2x c1-2y c1-p c1-2z c1-b c1-c c1-q c1-d c1-r c1-e c1-u c1-f c1-v c1-g x-d-ux"><h1 typography="BodyAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-1t c1-1u c1-30 c1-26 c1-27 c1-13 c1-15 c1-1h c1-2h c1-b c1-31 c1-c c1-29 c1-d c1-2i c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Welcome to sseason</h1><div id="bs-3"><div data-ux="Element" id="tagline-container-5309" class="x-el x-el-div c1-1 c1-2 c1-1t c1-1u c1-25 c1-32 c1-b c1-c c1-d c1-y c1-e c1-f c1-g x-d-ux"><h1 typography="BodyAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-1t c1-1u c1-30 c1-26 c1-27 c1-13 c1-15 c1-33 c1-1h c1-1m c1-4 c1-c c1-b c1-31 c1-29 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Welcome to sseason</h1><span data-ux="Element" data-size="medium" data-scaler-id="scaler-tagline-container-5309" class="x-el x-el-span c1-34 c1-35 c1-2h c1-36 c1-37 c1-38 c1-c c1-1n c1-d c1-e c1-f c1-g x-d-ux x-d-size x-d-scaler-id">Welcome to sseason</span><span data-ux="Element" data-size="small" data-scaler-id="scaler-tagline-container-5309" class="x-el x-el-span c1-34 c1-35 c1-2h c1-36 c1-37 c1-38 c1-39 c1-1n c1-3a c1-3b c1-3c c1-3d x-d-ux x-d-size x-d-scaler-id">Welcome to sseason</span><span data-ux="Element" data-size="xsmall" data-scaler-id="scaler-tagline-container-5309" class="x-el x-el-span c1-34 c1-35 c1-2h c1-36 c1-37 c1-38 c1-3e c1-1n c1-3f c1-3g c1-3h c1-3i x-d-ux x-d-size x-d-scaler-id">Welcome to sseason</span></div></div></div><div typography="HeadingEpsilon" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-1t c1-1u c1-3j c1-13 c1-15 c1-3k c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-1h c1-3r c1-3s c1-3t c1-3u c1-3v c1-3w c1-3x c1-4 c1-3y c1-3z c1-40 c1-41 c1-42 c1-b c1-28 c1-43 c1-29 c1-44 c1-45 c1-46 c1-47 c1-48 x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>We help musicians establish their place in the industry!</span></p></div><div id="bs-4" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="HeroButton" data-aid="HEADER_CTA_BTN" href="/" target="" data-tccl="ux2.header.cta_button.click,click" data-page="46acb09f-4d36-42d8-a309-1279515dcac2" class="x-el x-el-a c1-1 c1-2 c1-4e c1-4f c1-4g c1-4h c1-3 c1-4i c1-1m c1-1h c1-1s c1-1w c1-1u c1-1t c1-p c1-4 c1-4j c1-4k c1-4l c1-4m c1-4n c1-1n c1-21 c1-29 c1-4o c1-c c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-tccl x-d-page">See Reviews</a></div></div></div></div></section> </div></div></div><div id="6f5112e1-a8a0-498e-895b-f21ac44f0799" class="widget widget-about widget-about-about-9"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-7 c1-8 c1-9 c1-a c1-4w c1-4x c1-4y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-4z c1-50 c1-b c1-c c1-51 c1-52 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-l c1-m c1-n c1-o c1-p c1-b c1-c c1-q c1-d c1-r c1-e c1-u c1-f c1-v c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-1t c1-1u c1-53 c1-26 c1-27 c1-13 c1-54 c1-55 c1-1h c1-1n c1-56 c1-28 c1-29 c1-57 c1-58 c1-59 c1-5a x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">About Us</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-5b c1-13 c1-5c c1-5d c1-5e c1-b c1-c c1-18 c1-19 c1-5f c1-1b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-10 c1-1c c1-1d c1-1e c1-p c1-h c1-5g c1-5h c1-5i c1-b c1-c c1-1i c1-1j c1-5j c1-1l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/0" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-5b c1-13 c1-5c c1-15 c1-5e c1-5k c1-b c1-c c1-18 c1-19 c1-1a c1-1b c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-10 c1-1c c1-1d c1-1e c1-p c1-h c1-5g c1-i c1-5i c1-z c1-2q c1-17 c1-b c1-c c1-5l c1-5m c1-1i c1-1j c1-1k c1-1l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="0" id="1280dfd2-439a-4cfe-9ab2-be146cbe3994" class="x-el x-el-div x-el c1-1 c1-2 c1-z c1-2r c1-4 c1-5n c1-5o c1-5p c1-5q c1-2u c1-b c1-c c1-5r c1-5s c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-1t c1-1u c1-30 c1-26 c1-27 c1-13 c1-15 c1-b c1-28 c1-5t c1-29 c1-5u c1-5v c1-5w c1-5x x-d-ux x-d-aid x-d-field-id x-d-field-route">Music is Our Passion</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-1t c1-1u c1-5y c1-13 c1-15 c1-3k c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-b c1-31 c1-c c1-29 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Music is what we know, do, and love. There is always something new that can be discovered by mixing beats, tempos, rhythms, and melodies. We are committed to discovering the creativity artists possess and bringing them to new heights in the industry.&nbsp;</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-10 c1-1c c1-1d c1-1e c1-p c1-h c1-5g c1-5h c1-5i c1-b c1-c c1-1i c1-1j c1-5j c1-1l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/1" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-5b c1-13 c1-5c c1-15 c1-5e c1-5k c1-b c1-c c1-18 c1-19 c1-1a c1-1b c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-10 c1-1c c1-1d c1-1e c1-p c1-h c1-5g c1-i c1-5i c1-z c1-2q c1-17 c1-b c1-c c1-5l c1-5m c1-1i c1-1j c1-1k c1-1l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="1" id="80bb40f8-0290-4e83-89b2-fa5f748fc53d" class="x-el x-el-div x-el c1-1 c1-2 c1-z c1-2r c1-4 c1-5n c1-5o c1-5p c1-5q c1-2u c1-b c1-c c1-5r c1-5s c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-1t c1-1u c1-30 c1-26 c1-27 c1-13 c1-15 c1-b c1-28 c1-5t c1-29 c1-5u c1-5v c1-5w c1-5x x-d-ux x-d-aid x-d-field-id x-d-field-route">Starting With a Beat</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-1t c1-1u c1-5y c1-13 c1-15 c1-3k c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-b c1-31 c1-c c1-29 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>As experienced producers in the industry, we know how to rearrange and mix sound to make great music. Once we've worked together to create your distinct sound, we help you get your music in front of labels and establish your image.&nbsp;</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-10 c1-1c c1-1d c1-1e c1-p c1-h c1-5g c1-5h c1-5i c1-b c1-c c1-1i c1-1j c1-5j c1-1l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/2" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-5b c1-13 c1-5c c1-15 c1-5e c1-5k c1-b c1-c c1-18 c1-19 c1-1a c1-1b c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-10 c1-1c c1-1d c1-1e c1-p c1-h c1-5g c1-i c1-5i c1-z c1-2q c1-17 c1-b c1-c c1-5l c1-5m c1-1i c1-1j c1-1k c1-1l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="2" id="3e4da4c1-947f-4774-a84f-f4f1573244cf" class="x-el x-el-div x-el c1-1 c1-2 c1-z c1-2r c1-4 c1-5n c1-5o c1-5p c1-5q c1-2u c1-b c1-c c1-5r c1-5s c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-1t c1-1u c1-30 c1-26 c1-27 c1-13 c1-15 c1-b c1-28 c1-5t c1-29 c1-5u c1-5v c1-5w c1-5x x-d-ux x-d-aid x-d-field-id x-d-field-route">Marketing Your Image</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-1t c1-1u c1-5y c1-13 c1-15 c1-3k c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-b c1-31 c1-c c1-29 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Nowadays, everything in our culture is visual. A fantastic EP can only get you so far; you need an image to go with your music. Your passion and love for what you do is what will connect you with your audience, so we want to support you and your vision.&nbsp;</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="51a0aadd-1b4a-4605-9633-b340fb7139e6" class="widget widget-subscribe widget-subscribe-subscribe-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-7 c1-8 c1-9 c1-a c1-4w c1-4x c1-4y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-4z c1-50 c1-b c1-c c1-51 c1-52 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-l c1-m c1-n c1-o c1-p c1-b c1-c c1-q c1-d c1-r c1-e c1-u c1-f c1-v c1-g x-d-ux"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-6r c1-b c1-c c1-d c1-6s c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-5b c1-13 c1-5c c1-15 c1-5e c1-b c1-c c1-18 c1-19 c1-1a c1-1b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-10 c1-1c c1-1d c1-6t c1-p c1-h c1-5g c1-i c1-5i c1-b c1-c c1-1i c1-1j c1-1k c1-1l c1-d c1-e c1-f c1-g x-d-ux"><div style="width:100%"><div id="51a0aadd-1b4a-4605-9633-b340fb7139e6-bootstrap-container"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-32 c1-b c1-c c1-d c1-6u c1-6v c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4l c1-b c1-c c1-d c1-6w c1-6x c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h3 c1-1 c1-2 c1-1t c1-1u c1-30 c1-26 c1-27 c1-13 c1-15 c1-1h c1-b c1-28 c1-56 c1-29 c1-57 c1-58 c1-59 c1-5a x-d-ux x-d-aid x-d-route">Subscribe</h3></div><div data-ux="Block" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-1c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><form data-ux="Form" aria-live="polite" class="x-el x-el-form c1-1 c1-2 c1-15 c1-z c1-2r c1-2q c1-17 c1-1h c1-4o c1-b c1-c c1-d c1-6y c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c1-1 c1-2 c1-6z c1-4 c1-b c1-c c1-d c1-70 c1-45 c1-6w c1-6x c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2o c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c1-1 c1-2 c1-2o c1-b c1-c c1-d c1-71 c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input5310" value="" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c1-1 c1-2 c1-72 c1-73 c1-4 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-2x c1-2y c1-7a c1-4j c1-b c1-7b c1-c c1-29 c1-7c c1-4s c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-d c1-71 c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input5310" class="x-el x-el-label c1-1 c1-2 c1-1t c1-1u c1-37 c1-7n c1-38 c1-7o c1-7p c1-b c1-7b c1-c c1-29 c1-d c1-e c1-f c1-g x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-45 c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2o c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c1-1 c1-2 c1-4e c1-4f c1-4g c1-4h c1-3 c1-4i c1-1m c1-1h c1-1s c1-1w c1-1u c1-1t c1-p c1-4 c1-4j c1-7q c1-7r c1-4m c1-4n c1-1n c1-21 c1-29 c1-4o c1-c c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-d c1-e c1-f c1-g x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></div></div></div></div></div></div></section> </div></div></div><div id="65ba3e99-570f-487e-aa7b-6ed6acf842bf" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-4z c1-50 c1-b c1-c c1-51 c1-52 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-l c1-m c1-n c1-o c1-p c1-b c1-c c1-q c1-d c1-r c1-e c1-u c1-f c1-v c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-1h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-l c1-m c1-n c1-o c1-p c1-x c1-b c1-c c1-7s c1-q c1-d c1-r c1-e c1-u c1-f c1-v c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-l c1-m c1-n c1-o c1-p c1-1h c1-7t c1-2s c1-b c1-c c1-q c1-d c1-r c1-e c1-u c1-f c1-v c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-7u c1-h c1-2y c1-i c1-2x c1-13 c1-27 c1-15 c1-26 c1-b c1-c c1-7v c1-7w c1-d c1-e c1-f c1-g x-d-ux"></ul></div><p typography="BodyAlpha" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-1 c1-2 c1-1t c1-1u c1-5y c1-13 c1-4l c1-3k c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-4a c1-b c1-28 c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">sseason</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-5b c1-13 c1-27 c1-15 c1-26 c1-17 c1-1h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-10 c1-1c c1-1d c1-1e c1-p c1-h c1-2y c1-i c1-2x c1-b c1-c c1-d c1-7x c1-7y c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-1t c1-1u c1-5y c1-13 c1-15 c1-3k c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-b c1-7z c1-c c1-29 c1-d c1-80 c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 sseason - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-10 c1-1c c1-1d c1-1e c1-p c1-h c1-2y c1-i c1-2x c1-b c1-c c1-d c1-7x c1-7y c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-1t c1-1u c1-5y c1-81 c1-15 c1-3k c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-b c1-7z c1-c c1-29 c1-d c1-82 c1-6s c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-1q c1-1r c1-1s c1-1t c1-1u c1-1v c1-1w c1-21 c1-7a c1-83 c1-4n c1-84 c1-c c1-81 c1-b c1-22 c1-23 c1-24 c1-d c1-82 c1-6s c1-e c1-f c1-g x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.5311.click,click">Website Builder</a></span></p></div></div></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.71.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/6e98ea57888f50ef/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1d60b452de0e239d/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","fonts":["yellowtail","default",""],"colors":["#0d5163"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"46acb09f-4d36-42d8-a309-1279515dcac2":{"isFlyoutMenu":false,"active":true,"pageId":"46acb09f-4d36-42d8-a309-1279515dcac2","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme26"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"sseason"},"fontPackLogoId":null,"widgetId":"cd893d15-57e8-43e0-837d-7f15f9a0ed45","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"cd893d15-57e8-43e0-837d-7f15f9a0ed45","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"sseason"},"fontPackLogoId":null,"widgetId":"cd893d15-57e8-43e0-837d-7f15f9a0ed45","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"cd893d15-57e8-43e0-837d-7f15f9a0ed45","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e374870201fcd502/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","children":"Welcome to sseason","scaledFontSizes":["medium","small","xsmall"],"style":{},"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"cd893d15-57e8-43e0-837d-7f15f9a0ed45","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"cd893d15-57e8-43e0-837d-7f15f9a0ed45","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Center"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"See Reviews","pageId":"46acb09f-4d36-42d8-a309-1279515dcac2","widgetId":"","url":"","target":""},"data-aid":"HEADER_CTA_BTN","data-field-id":"ctaButton","data-field-route":"\u002FctaButton","data-tccl":"ux2.header.cta_button.click,click","widgetId":"cd893d15-57e8-43e0-837d-7f15f9a0ed45","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"cd893d15-57e8-43e0-837d-7f15f9a0ed45","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Center"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2b5c958c04dbef01/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/9c7301df-c985-4cc2-ad87-c9d95b23cf7f/gpub/38b626df26cccf8a/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-5301').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"9c7301df-c985-4cc2-ad87-c9d95b23cf7f"}),_trfd.push({"pd":"2020-02-18T12:34:05.986Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
