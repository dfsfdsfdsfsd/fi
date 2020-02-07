<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader.php';

$campaign_id = '7d65fe';

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




<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>jagdet</title><meta name="author" content="jagdet"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://jagdet.herokuapp.com/"/>
<meta property="og:site_name" content="jagdet"/>
<meta property="og:title" content="New and refurbished"/>
<meta property="og:description" content="Shop a plethora of of models.  
Repair and refurbish services available today!"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/110716"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="jagdet"/>
<meta name="twitter:description" content="New and refurbished"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/110716"/>
<meta name="twitter:image:alt" content="jagdet"/>
<meta name="theme-color" content="#5a5241"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
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
Copyright 2017 The Archivo Black Project Authors (https://github.com/Omnibus-Type/ArchivoBlack)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Archivo Black';
  font-style: normal;
  font-weight: 400;
  src: local('Archivo Black Regular'), local('ArchivoBlack-Regular'), url(https://img1.wsimg.com/gfonts/s/archivoblack/v9/HTxqL289NzCGg4MzN6KJ7eW6CYKF_jzx13HOvQ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Archivo Black';
  font-style: normal;
  font-weight: 400;
  src: local('Archivo Black Regular'), local('ArchivoBlack-Regular'), url(https://img1.wsimg.com/gfonts/s/archivoblack/v9/HTxqL289NzCGg4MzN6KJ7eW6CYyF_jzx13E.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2011 The Montserrat Project Authors (https://github.com/JulietaUla/Montserrat)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gTD_vx3rCubqg.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3g3D_vx3rCubqg.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gbD_vx3rCubqg.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gfD_vx3rCubqg.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gnD_vx3rCs.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/963ee5a9-c9b2-44f3-9107-77947490f9ee/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/963ee5a9-c9b2-44f3-9107-77947490f9ee/gpub/fa537e266b28dc75/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-l{padding-top:40px}}@media (max-width: 767px){.x .c1-m{padding-bottom:40px}}@media (max-width: 767px){.x .c1-21{width:100%}}@media (max-width: 767px){.x .c1-3x{max-width:100%}}@media (max-width: 767px){.x .c1-3y{word-wrap:break-word}}@media (max-width: 767px){.x .c1-3z{overflow-wrap:break-word}}@media (max-width: 767px){.x .c1-40{margin-top:0}}@media (max-width: 767px){.x .c1-41{margin-right:auto}}@media (max-width: 767px){.x .c1-42{margin-bottom:0}}@media (max-width: 767px){.x .c1-43{margin-left:auto}}@media (max-width: 767px){.x .c1-5u > :nth-child(n){margin-bottom:16px}}@media (max-width: 767px){.x .c1-5v  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-6s{padding-bottom:32px}}@media (max-width: 767px){.x .c1-6w{display:flex}}@media (max-width: 767px){.x .c1-6x{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/963ee5a9-c9b2-44f3-9107-77947490f9ee/gpub/4c0b30ac990756c5/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/963ee5a9-c9b2-44f3-9107-77947490f9ee/gpub/41159c8d8bab38fa/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-14{width:1160px}}@media (min-width: 1280px){.x .c1-2q{font-size:22px}}@media (min-width: 1280px){.x .c1-47{font-size:62px}}@media (min-width: 1280px){.x .c1-4j{font-size:44px}}@media (min-width: 1280px){.x .c1-4o{font-size:32px}}@media (min-width: 1280px){.x .c1-5i{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-15{width:1280px}}@media (min-width: 1536px){.x .c1-2r{font-size:24px}}@media (min-width: 1536px){.x .c1-48{font-size:70px}}@media (min-width: 1536px){.x .c1-4k{font-size:48px}}@media (min-width: 1536px){.x .c1-4p{font-size:36px}}@media (min-width: 1536px){.x .c1-5j{font-size:16px}}</style>
<style type="text/css">.page-inner { background-color: rgb(22, 22, 22); min-height: 100vh; }</style></head>
<body class="x  x-fonts-archivo-black" context="[object Object]"><div id="layout-963-ee-5-a-9-c-9-b-2-44-f-3-9107-77947490-f-9-ee" class="layout layout-layout layout-layout-layout-10 locale-en-US lang-en"><div data-ux="Page" id="page-2443" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="ad08475c-110d-4f41-b0fe-f50bb39327b1" class="widget widget-header widget-header-header-9"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-h c1-i c1-j c1-k c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-n c1-o c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-n c1-p c1-q c1-r c1-s c1-b c1-c c1-d c1-t c1-u c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-1k c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-1n c1-z c1-1o c1-1p c1-1q c1-1r c1-16 c1-1s c1-1t c1-b c1-c c1-1u c1-1v c1-1w c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1y c1-1z c1-20 c1-z c1-c c1-21 c1-22 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="061734ea-d7f3-4a57-8e6c-746a44367ae5" title="jagdet" href="/" class="x-el x-el-a c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-b c1-2e c1-c c1-2f c1-2g c1-2h c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.2448.click,click"><div id="bs-1"><h3 typography="HeadingEpsilon" data-ux="LogoHeading" id="logo-container-2449" logoText="jagdet" class="x-el x-el-h3 c1-1 c1-1y c1-26 c1-27 c1-2i c1-2j c1-2k c1-1a c1-1c c1-z c1-20 c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-23 c1-1y c1-1z c1-4 c1-2m c1-2s c1-2f c1-2t c1-20 c1-2o c1-2p c1-2q c1-2r x-d-ux x-d-aid x-d-field-id x-d-field-route">jagdet</span></h3></div></a></div></div></div><div data-ux="Grid" id="n-24442451-navBarId" class="x-el x-el-div c1-1 c1-2 c1-2u c1-17 c1-18 c1-2v c1-1a c1-1b c1-1c c1-1d c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-2w c1-2x c1-2y c1-2z c1-30 c1-31 c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-32 c1-1m c1-33 c1-34 c1-1o c1-1p c1-1q c1-1r c1-16 c1-1f c1-1e c1-1s c1-b c1-c c1-1u c1-1v c1-1w c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1y c1-1z c1-20 c1-z c1-c c1-21 c1-22 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="061734ea-d7f3-4a57-8e6c-746a44367ae5" title="jagdet" href="/" class="x-el x-el-a c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-b c1-2e c1-c c1-2f c1-2g c1-2h c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.2452.click,click"><div id="bs-2"><h3 typography="HeadingEpsilon" data-ux="LogoHeading" id="logo-container-2453" logoText="jagdet" class="x-el x-el-h3 c1-1 c1-1y c1-26 c1-27 c1-2i c1-2j c1-2k c1-1a c1-1c c1-z c1-20 c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-23 c1-1y c1-1z c1-4 c1-2m c1-2s c1-2f c1-2t c1-20 c1-2o c1-2p c1-2q c1-2r x-d-ux x-d-aid x-d-field-id x-d-field-route">jagdet</span></h3></div></a></div></div></div></div></nav></div><div data-ux="Block" id="header_parallax2454" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-3"></div><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-n c1-1l c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg2455" role="img" data-guac-image="loading" data-ux="Background" data-aid="BACKGROUND_IMAGE_RENDERED" data-field-id="background" overlay="accent" treatment="Fill" data-ht="Fill" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-35 c1-36 c1-37 c1-38 c1-39 c1-16 c1-3a c1-3b c1-3c c1-s c1-1o c1-3d c1-3e c1-b c1-c c1-d c1-3f c1-3g c1-30 c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-aid x-d-field-id x-d-ht"><div data-ux="Block" id="header_parallax2456" class="x-el x-el-div c1-1 c1-2 c1-4 c1-1l c1-16 c1-1f c1-3a c1-1e c1-1o c1-1q c1-b c1-c c1-d c1-30 c1-31 c1-3h c1-2x c1-e c1-f c1-g x-d-ux"><div id="bs-4"></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-2j c1-2k c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-2w c1-2x c1-3i c1-3j c1-3k c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-16 c1-3a c1-1l c1-1m c1-33 c1-1e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-4 c1-3l c1-1s c1-3m c1-3n c1-b c1-c c1-d c1-3o c1-3p c1-3q c1-3r c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-2j c1-2k c1-3s c1-3t c1-z c1-3u c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-1y c1-26 c1-27 c1-2i c1-2j c1-2k c1-1a c1-1c c1-2u c1-20 c1-3v c1-3w c1-2n c1-3x c1-3y c1-3z c1-40 c1-41 c1-42 c1-43 c1-44 c1-45 c1-46 c1-47 c1-48 x-d-ux x-d-aid x-d-route">New and refurbished</h1><div id="bs-5"><div data-ux="Element" id="tagline-container-2457" class="x-el x-el-div c1-1 c1-2 c1-26 c1-27 c1-2i c1-49 c1-b c1-c c1-d c1-1k c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-1y c1-26 c1-27 c1-2i c1-2j c1-2k c1-1a c1-1c c1-4a c1-1z c1-4 c1-c c1-20 c1-3v c1-2n c1-3x c1-3y c1-3z c1-40 c1-41 c1-42 c1-43 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">New and refurbished</h1><span data-ux="Element" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-2457" class="x-el x-el-span c1-1y c1-4b c1-4c c1-2u c1-4d c1-4e c1-4f c1-3w c1-20 c1-44 c1-46 c1-47 c1-48 x-d-ux x-d-size x-d-scaler-id">New and refurbished</span><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-2457" class="x-el x-el-span c1-1y c1-4b c1-4c c1-2u c1-4d c1-4e c1-4f c1-4g c1-20 c1-4h c1-4i c1-4j c1-4k x-d-ux x-d-size x-d-scaler-id">New and refurbished</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-2457" class="x-el x-el-span c1-1y c1-4b c1-4c c1-2u c1-4d c1-4e c1-4f c1-4l c1-20 c1-4m c1-4n c1-4o c1-4p x-d-ux x-d-size x-d-scaler-id">New and refurbished</span></div></div></div><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4q c1-1a c1-1c c1-4r c1-4s c1-4t c1-4u c1-b c1-3v c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Shop a plethora of of models. &nbsp;</span></p><p style="margin:0"><span>Repair and refurbish services available today!</span></p></div><div id="bs-6" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="/" target="" data-tccl="ux2.header.cta_button.click,click" data-page="061734ea-d7f3-4a57-8e6c-746a44367ae5" class="x-el x-el-a c1-50 c1-1y c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-1z c1-1s c1-25 c1-29 c1-27 c1-26 c1-z c1-4 c1-57 c1-b c1-58 c1-4w c1-39 c1-59 c1-5a c1-5b c1-5c c1-5d c1-5e c1-t c1-u c1-5f c1-5g c1-5h c1-5i c1-5j x-d-ux x-d-aid x-d-tccl x-d-page">Visit Us</a></div></div></div></div></div><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/110716/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg2455'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.25) 0%, rgba(22, 22, 22, 0.25) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div></div></div></section> </div></div></div><div id="bdce0e35-fde8-4faa-b90e-89d4dc7c62a1" class="widget widget-about widget-about-about-3"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-h c1-i c1-j c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-1y c1-26 c1-27 c1-5k c1-2j c1-2k c1-1a c1-5l c1-o c1-1s c1-20 c1-4g c1-5m c1-2n c1-4h c1-5n c1-4i c1-4j c1-4k x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">About Us</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-2v c1-1a c1-1b c1-5o c1-1d c1-1e c1-b c1-c c1-1g c1-1h c1-5p c1-1j c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-5q c1-z c1-1o c1-1p c1-52 c1-1r c1-b c1-c c1-1u c1-1v c1-5r c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/0" index="0" id="ee738fcc-b5d2-45df-82da-8c992e319ee5" class="x-el x-el-div x-el c1-1 c1-2 c1-16 c1-3a c1-1f c1-1s c1-3c c1-4 c1-5s c1-5t c1-3n c1-b c1-c c1-5u c1-5v c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-26 c1-27 c1-5w c1-2j c1-2k c1-1a c1-1c c1-b c1-3v c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r x-d-ux x-d-aid x-d-field-id x-d-field-route">Quality Refurbishes</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4q c1-1a c1-1c c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-b c1-6p c1-c c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors about your product. Do you sell new devices and used devices? What kind of repairs do you do?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-5q c1-z c1-1o c1-1p c1-52 c1-1r c1-b c1-c c1-6q c1-6r c1-1u c1-1v c1-5r c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/1" index="1" id="131906df-930a-4027-abe1-e19e1f51d438" class="x-el x-el-div x-el c1-1 c1-2 c1-16 c1-3a c1-1f c1-1s c1-3c c1-4 c1-5s c1-5t c1-3n c1-b c1-c c1-5u c1-5v c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-26 c1-27 c1-5w c1-2j c1-2k c1-1a c1-1c c1-b c1-3v c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r x-d-ux x-d-aid x-d-field-id x-d-field-route">Professional Customer Service</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4q c1-1a c1-1c c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-b c1-6p c1-c c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors about your customer service. What kind of services do you provide to potential and current customers?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-5q c1-z c1-1o c1-1p c1-52 c1-1r c1-b c1-c c1-6q c1-6r c1-1u c1-1v c1-5r c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/2" index="2" id="d0a42be7-cdd4-40b8-9f43-8a6275888901" class="x-el x-el-div x-el c1-1 c1-2 c1-16 c1-3a c1-1f c1-1s c1-3c c1-4 c1-5s c1-5t c1-3n c1-b c1-c c1-5u c1-5v c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-26 c1-27 c1-5w c1-2j c1-2k c1-1a c1-1c c1-b c1-3v c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r x-d-ux x-d-aid x-d-field-id x-d-field-route">100% Satisfaction Guaranteed</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4q c1-1a c1-1c c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-b c1-6p c1-c c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors about how you will make their experience great. How do you go above and beyond for your customers?</span></p></div></div></div></div></div></section> </div></div></div><div id="f711c1b3-cb5c-4004-bc41-3a8c9c68b646" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-h c1-i c1-j c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-1s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-r c1-b c1-c c1-6s c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-1s c1-6t c1-6u c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-6v c1-1o c1-3t c1-1q c1-3s c1-1a c1-2k c1-1c c1-2j c1-b c1-c c1-6w c1-6x c1-d c1-e c1-f c1-g x-d-ux"></ul></div><p typography="BodyAlpha" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4q c1-1a c1-6y c1-4w c1-b c1-3v c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">jagdet</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-2v c1-1a c1-2k c1-1c c1-2j c1-1f c1-1s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-5q c1-z c1-1o c1-3t c1-1q c1-3s c1-b c1-c c1-d c1-6z c1-70 c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4q c1-1a c1-1c c1-b c1-71 c1-59 c1-2n c1-5e c1-72 c1-5h c1-5i c1-5j x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 jagdet - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-5q c1-z c1-1o c1-3t c1-1q c1-3s c1-b c1-c c1-d c1-6z c1-70 c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-4q c1-57 c1-1c c1-b c1-71 c1-59 c1-2n c1-5e c1-73 c1-3k c1-5h c1-5i c1-5j x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-57 c1-b c1-74 c1-59 c1-2f c1-75 c1-76 c1-5e c1-73 c1-3k c1-5h c1-5i c1-5j x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.2458.click,click">Website Builder</a></span></p></div></div></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.66.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/d76cf107a3f4bfd6/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1d60b452de0e239d/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","fonts":["archivo-black","default",""],"colors":["#5a5241"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"061734ea-d7f3-4a57-8e6c-746a44367ae5":{"isFlyoutMenu":false,"active":true,"pageId":"061734ea-d7f3-4a57-8e6c-746a44367ae5","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme10"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"jagdet"},"fontPackLogoId":null,"widgetId":"ad08475c-110d-4f41-b0fe-f50bb39327b1","section":"alt","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"ad08475c-110d-4f41-b0fe-f50bb39327b1","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"jagdet"},"fontPackLogoId":null,"widgetId":"ad08475c-110d-4f41-b0fe-f50bb39327b1","section":"alt","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"ad08475c-110d-4f41-b0fe-f50bb39327b1","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/70b94c42ef48f212/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"speed":-1.5,"uniqueId":"header_parallax2454","noTransform":true,"excludedBreakpoints":[],"viewDevice":"","widgetId":"ad08475c-110d-4f41-b0fe-f50bb39327b1","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"ad08475c-110d-4f41-b0fe-f50bb39327b1","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax2456","excludedBreakpoints":[],"viewDevice":"","widgetId":"ad08475c-110d-4f41-b0fe-f50bb39327b1","section":"alt","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"ad08475c-110d-4f41-b0fe-f50bb39327b1","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e374870201fcd502/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-5',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"children":"New and refurbished","style":{},"tag":"h1","data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"ad08475c-110d-4f41-b0fe-f50bb39327b1","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"ad08475c-110d-4f41-b0fe-f50bb39327b1","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Center"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-6',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Visit Us","pageId":"061734ea-d7f3-4a57-8e6c-746a44367ae5","linkId":"","widgetId":"","url":"","target":""},"data-aid":"HEADER_CTA_BTN","data-field-id":"ctaButton","data-field-route":"\u002FctaButton","style":{"marginTop":"xsmall"},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"ad08475c-110d-4f41-b0fe-f50bb39327b1","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"ad08475c-110d-4f41-b0fe-f50bb39327b1","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Center"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript">document.getElementById('page-2443').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"963ee5a9-c9b2-44f3-9107-77947490f9ee"}),_trfd.push({"pd":"2020-02-07T19:21:30.570Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
