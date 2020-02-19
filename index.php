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


















<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>shininglamp</title><meta name="author" content="shininglamp"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://shininglamp.appspot.com/"/>
<meta property="og:site_name" content="shininglamp"/>
<meta property="og:title" content="Taking Your Event to the Next Level"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/uDdRlWwAAGU1mqlNq"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="shininglamp"/>
<meta name="twitter:description" content="Taking Your Event to the Next Level"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/uDdRlWwAAGU1mqlNq"/>
<meta name="twitter:image:alt" content="shininglamp"/>
<meta name="theme-color" content="#566987"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
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
Copyright 2016 The Cabin Project Authors (impallari@gmail.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhquylEeQ5JZ-Y.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhruylEeQ5JZ-Y.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhluylEeQ5J.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright (c) 2010-2011 by tyPoland Lukasz Dziedzic (team@latofonts.com) with Reserved Font Name "Lato". Licensed under the SIL Open Font License, Version 1.1.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAUi-qNiXg7eU0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAXC-qNiXg7Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_FQftx9897sxZ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_Gwftx9897g.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AUi-qNiXg7eU0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AXC-qNiXg7Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjxAwXiWtFCfQ7A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjx4wXiWtFCc.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/d7f9050c-f38e-44e7-abb0-2b5607b61426/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/d7f9050c-f38e-44e7-abb0-2b5607b61426/gpub/2c9e4d0b7488b885/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-r{padding-top:40px}}@media (max-width: 767px){.x .c1-s{padding-bottom:40px}}@media (max-width: 767px){.x .c1-1j{width:auto}}@media (max-width: 767px){.x .c1-3r{font-size:12px}}@media (max-width: 767px){.x .c1-61 > :nth-child(n){margin-bottom:16px}}@media (max-width: 767px){.x .c1-62  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-72{text-align:center}}@media (max-width: 767px){.x .c1-7z{padding-bottom:32px}}@media (max-width: 767px){.x .c1-83{display:flex}}@media (max-width: 767px){.x .c1-84{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/d7f9050c-f38e-44e7-abb0-2b5607b61426/gpub/3209f53def4f184f/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/d7f9050c-f38e-44e7-abb0-2b5607b61426/gpub/fac40c3cd871728b/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-17{width:1160px}}@media (min-width: 1280px){.x .c1-2a{font-size:32px}}@media (min-width: 1280px){.x .c1-38{font-size:22px}}@media (min-width: 1280px){.x .c1-3z{font-size:14px}}@media (min-width: 1280px){.x .c1-5j{font-size:44px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-18{width:1280px}}@media (min-width: 1536px){.x .c1-2b{font-size:36px}}@media (min-width: 1536px){.x .c1-39{font-size:24px}}@media (min-width: 1536px){.x .c1-40{font-size:16px}}@media (min-width: 1536px){.x .c1-5k{font-size:48px}}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(0, 0, 0); min-height: 100vh; }</style></head>
<body class="x  x-fonts-cabin" context="[object Object]"><div id="layout-d-7-f-9050-c-f-38-e-44-e-7-abb-0-2-b-5607-b-61426" class="layout layout-layout layout-layout-layout-16 locale-en-US lang-en"><div data-ux="Page" id="page-165" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="c845a82d-7f59-4253-8e0d-ddd6740aab4e" class="widget widget-header widget-header-header-9"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-h c1-i c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-q c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-u c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" id="header_parallax167" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-1"></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-12 c1-13 c1-4 c1-b c1-c c1-14 c1-d c1-15 c1-16 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-1g c1-x c1-y c1-3 c1-1h c1-1i c1-c c1-1j c1-1k c1-1l c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="b8f328ca-c7ca-49ce-9623-cd4bb5e5d633" title="shininglamp" href="/" class="x-el x-el-a c1-1m c1-1n c1-1o c1-1p c1-1q c1-1r c1-1s c1-1t c1-1u c1-1v c1-1w c1-b c1-1x c1-c c1-1y c1-1z c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.168.click,click"><div id="bs-2"><h3 typography="HeadingBeta" data-ux="LogoHeading" id="logo-container-169" logoText="shininglamp" class="x-el x-el-h3 c1-19 c1-1a c1-1p c1-1q c1-21 c1-22 c1-23 c1-24 c1-25 c1-z c1-11 c1-1c c1-26 c1-1x c1-27 c1-28 c1-29 c1-2a c1-2b x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-19 c1-1a c1-1b c1-4 c1-26 c1-2c c1-1y c1-2d c1-1c c1-28 c1-29 c1-2a c1-2b x-d-ux x-d-aid x-d-field-id x-d-field-route">shininglamp</span></h3></div></a></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" id="header_parallax170" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-3"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-12 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-12 c1-2f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg171" role="img" data-guac-image="loading" data-ux="Background" data-aid="BACKGROUND_IMAGE_RENDERED" data-field-id="background" overlay="none" treatment="Fill" data-ht="Fill" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-2g c1-2h c1-2i c1-2j c1-2k c1-4 c1-2l c1-2m c1-2n c1-b c1-c c1-d c1-2o c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-aid x-d-field-id x-d-ht"><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/uDdRlWwAAGU1mqlNq/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg171'),{"shouldMarkVisuallyComplete":true})</script></div></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-2p c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-2q c1-2r c1-2s c1-2t c1-11 c1-2u c1-2v c1-2w c1-b c1-c c1-d c1-2x c1-e c1-f c1-g x-d-ux"><h1 typography="BodyBeta" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-1p c1-1q c1-2y c1-22 c1-23 c1-24 c1-25 c1-z c1-2z c1-b c1-30 c1-31 c1-32 c1-33 c1-34 c1-35 c1-36 c1-u c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-route">Taking Your Event to the Next Level</h1><div id="bs-4"><div data-ux="Element" id="tagline-container-172" class="x-el x-el-div c1-1 c1-2 c1-1p c1-1q c1-21 c1-t c1-b c1-c c1-d c1-3a c1-e c1-f c1-g x-d-ux"><h1 typography="BodyBeta" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-1p c1-1q c1-2y c1-22 c1-23 c1-24 c1-25 c1-3b c1-z c1-1b c1-4 c1-c c1-b c1-30 c1-32 c1-d c1-34 c1-35 c1-36 c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Taking Your Event to the Next Level</h1><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-172" class="x-el x-el-span c1-19 c1-1a c1-3c c1-3d c1-2z c1-3e c1-3f c1-3g c1-31 c1-1c c1-33 c1-37 c1-38 c1-39 x-d-ux x-d-size x-d-scaler-id">Taking Your Event to the Next Level</span><span data-ux="Element" data-size="medium" data-scaler-id="scaler-tagline-container-172" class="x-el x-el-span c1-19 c1-1a c1-3c c1-3d c1-2z c1-3e c1-3f c1-3g c1-c c1-1c c1-d c1-e c1-f c1-g x-d-ux x-d-size x-d-scaler-id">Taking Your Event to the Next Level</span></div></div><div id="bs-5" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="/#a38af287-17b0-4cf1-b75a-4d4d480d926c" target="" data-tccl="ux2.header.cta_button.click,click" data-page="b8f328ca-c7ca-49ce-9623-cd4bb5e5d633" data-section-jump="a38af287-17b0-4cf1-b75a-4d4d480d926c" class="x-el x-el-a c1-3h c1-2 c1-1f c1-1g c1-3i c1-3j c1-3k c1-3l c1-1b c1-11 c1-1o c1-1s c1-1q c1-1p c1-z c1-4 c1-b c1-3m c1-27 c1-2k c1-3n c1-3o c1-3p c1-3q c1-3r c1-3s c1-3t c1-3u c1-3v c1-3w c1-3x c1-3y c1-3z c1-40 x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Book Event</a></div></div></div></section> </div></div></div><div id="ad2c5095-55d5-4a42-bf42-09e35d8d0ad4" class="widget widget-introduction widget-introduction-introduction-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-2e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-41 c1-42 c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="SplitLayout" data-aid="SPLIT_LAYOUT_RENDERED" class="x-el x-el-div x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-2q c1-43 c1-44 c1-45 c1-24 c1-46 c1-47 c1-48 c1-b c1-c c1-49 c1-4a c1-4b c1-4c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-4g c1-2w c1-4h c1-b c1-c c1-4i c1-4j c1-4k c1-4l c1-d c1-4m c1-4n c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4o c1-4p c1-12 c1-b c1-c c1-d c1-4q c1-4r c1-e c1-f c1-g x-d-ux"><img src="//img1.wsimg.com/isteam/stock/wNZpOjn/:/" alt="image1" data-ux="Image" data-field-id="image" data-field-route="/imagePivot" data-aid="IMAGE_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-z c1-4 c1-v c1-w c1-24 c1-25 c1-4s c1-4t c1-4u c1-4v c1-b c1-c c1-d c1-4w c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid"/></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-4g c1-2w c1-4h c1-b c1-c c1-4i c1-4j c1-4k c1-4l c1-d c1-4m c1-4n c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-4u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="VerticalBox" class="x-el x-el-div x-el c1-1 c1-2 c1-4u c1-4x c1-2q c1-2t c1-4y c1-2r c1-11 c1-2p c1-2w c1-b c1-c c1-4z c1-d c1-50 c1-51 c1-52 c1-53 c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingAlpha" data-ux="HeadingMajor" data-route="sectionTitle" data-aid="SECTION_TITLE_RENDERED" class="x-el x-el-h2 c1-19 c1-1a c1-1p c1-1q c1-21 c1-22 c1-23 c1-24 c1-25 c1-11 c1-4f c1-54 c1-55 c1-56 c1-1c c1-57 c1-58 c1-27 c1-59 c1-16 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k x-d-ux x-d-route x-d-aid">Pro dj services</h2><div data-ux="HorizontalBox" class="x-el x-el-div x-el c1-1 c1-2 c1-5l c1-4 c1-2q c1-2t c1-4y c1-5m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="BodyBeta" data-ux="Text" data-route="description" data-aid="DESCRIPTION_TEXT" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-5n c1-24 c1-25 c1-z c1-b c1-30 c1-31 c1-32 c1-33 c1-37 c1-38 c1-39 x-d-ux x-d-route x-d-aid x-rt"><p style="margin:0"><span>We have some of the finest DJs, Masters of Ceremony, and videographers in the area. We provide services for weddings, birthdays, and corporate events.</span></p></div></div></div></div></div></div></div></div></section> </div></div></div><div id="db5a0ccc-0e6e-4ba1-ac3a-3d998f71388c" class="widget widget-about widget-about-about-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-5s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-5s c1-i c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-14 c1-d c1-15 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-19 c1-1a c1-1p c1-1q c1-5t c1-22 c1-23 c1-24 c1-5u c1-2e c1-11 c1-1c c1-26 c1-1x c1-27 c1-28 c1-16 c1-29 c1-2a c1-2b x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">About shininglamp</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-2q c1-43 c1-44 c1-45 c1-24 c1-46 c1-47 c1-48 c1-b c1-c c1-49 c1-4a c1-4b c1-4c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-4g c1-5v c1-4h c1-b c1-c c1-4i c1-4j c1-4k c1-4l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/0" class="x-el x-el-div c1-1 c1-2 c1-2q c1-43 c1-44 c1-45 c1-24 c1-46 c1-25 c1-48 c1-2t c1-b c1-c c1-49 c1-4a c1-5w c1-4c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-4g c1-55 c1-4h c1-2q c1-2t c1-2s c1-b c1-c c1-5x c1-5y c1-4i c1-4j c1-5z c1-4l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="0" id="3c800378-68c6-4ed8-a368-9a5ab3c662cc" class="x-el x-el-div x-el c1-1 c1-2 c1-2q c1-2r c1-4 c1-60 c1-2s c1-11 c1-2u c1-2v c1-b c1-c c1-61 c1-62 c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-1p c1-1q c1-2y c1-22 c1-23 c1-24 c1-25 c1-b c1-63 c1-31 c1-32 c1-33 c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-field-id x-d-field-route">A Versatile Entertainer</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-5n c1-24 c1-25 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-b c1-6w c1-c c1-32 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-6x c1-6y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Singer, emcee, impersonator, and magician — shininglamp is always the life of the party. A member of the International Performers Union, shininglamp has received accolades from both party-goers and professional groups alike.&nbsp;</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-4g c1-5v c1-4h c1-b c1-c c1-4i c1-4j c1-4k c1-4l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/1" class="x-el x-el-div c1-1 c1-2 c1-2q c1-43 c1-44 c1-45 c1-24 c1-46 c1-25 c1-48 c1-2t c1-b c1-c c1-49 c1-4a c1-5w c1-4c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-4g c1-55 c1-4h c1-2q c1-2t c1-2s c1-b c1-c c1-5x c1-5y c1-4i c1-4j c1-5z c1-4l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="1" id="a9a1bd2b-b28d-4b71-ac34-24719b0a5573" class="x-el x-el-div x-el c1-1 c1-2 c1-2q c1-2r c1-4 c1-60 c1-2s c1-11 c1-2u c1-2v c1-b c1-c c1-61 c1-62 c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-1p c1-1q c1-2y c1-22 c1-23 c1-24 c1-25 c1-b c1-63 c1-31 c1-32 c1-33 c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-field-id x-d-field-route">A Proven Track Record</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-5n c1-24 c1-25 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-b c1-6w c1-c c1-32 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-6x c1-6y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">With clients including corporate holiday parties and local private parties, shininglamp's high-energy interactive entertainment is sure to bring — not just fun — but professionalism and experience to your event.</span></p><p style="margin:0"><span class="x-el x-el-span c1-6x c1-6y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><br></span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-4g c1-5v c1-4h c1-b c1-c c1-4i c1-4j c1-4k c1-4l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/2" class="x-el x-el-div c1-1 c1-2 c1-2q c1-43 c1-44 c1-45 c1-24 c1-46 c1-25 c1-48 c1-2t c1-b c1-c c1-49 c1-4a c1-5w c1-4c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-4g c1-55 c1-4h c1-2q c1-2t c1-2s c1-b c1-c c1-5x c1-5y c1-4i c1-4j c1-5z c1-4l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="2" id="9b69633c-33ce-4ae9-8fd0-cbca1871ba04" class="x-el x-el-div x-el c1-1 c1-2 c1-2q c1-2r c1-4 c1-60 c1-2s c1-11 c1-2u c1-2v c1-b c1-c c1-61 c1-62 c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-1p c1-1q c1-2y c1-22 c1-23 c1-24 c1-25 c1-b c1-63 c1-31 c1-32 c1-33 c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-field-id x-d-field-route">Event Consultation</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-5n c1-24 c1-25 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-b c1-6w c1-c c1-32 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-6x c1-6y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Schedule an event consultation with shininglamp. Together, you can figure out your entertainment needs. You will also get tips on what to do to make your event shine. shininglamp can give you a heads up on what planning pitfalls to avoid.&nbsp;</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="7aa04f70-4faf-427b-938a-4c8ca962fcbf" class="widget widget-gallery widget-gallery-gallery-5"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-14 c1-d c1-15 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-19 c1-1a c1-1p c1-1q c1-5t c1-22 c1-23 c1-24 c1-5u c1-2e c1-11 c1-1c c1-26 c1-1x c1-27 c1-28 c1-16 c1-29 c1-2a c1-2b x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Photo Gallery</span></h2><div id="bs-6"><div style="width:1px;height:1px;visibility:hidden"></div></div></div></section> </div></div></div><div id="cda2df03-cf73-4f1f-ad1a-3a02252c89be" class="widget widget-about widget-about-about-3"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-5s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-5s c1-i c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-14 c1-d c1-15 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-19 c1-1a c1-1p c1-1q c1-5t c1-22 c1-23 c1-24 c1-5u c1-2e c1-11 c1-1c c1-26 c1-1x c1-27 c1-28 c1-16 c1-29 c1-2a c1-2b x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Testimonials</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-2q c1-43 c1-44 c1-45 c1-24 c1-46 c1-47 c1-48 c1-2t c1-b c1-c c1-49 c1-4a c1-4b c1-4c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-4g c1-1g c1-4h c1-b c1-c c1-4i c1-4j c1-4k c1-4l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/0" index="0" id="86b3d715-b57b-41a4-967b-3738ab2b750c" class="x-el x-el-div x-el c1-1 c1-2 c1-2q c1-2r c1-2s c1-11 c1-6z c1-4 c1-60 c1-2u c1-2v c1-b c1-c c1-61 c1-62 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-1p c1-1q c1-2y c1-22 c1-23 c1-24 c1-25 c1-b c1-63 c1-31 c1-32 c1-33 c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-field-id x-d-field-route">John Doe — ABC Corp</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-5n c1-24 c1-25 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-b c1-6w c1-c c1-32 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>"shininglamp made the closing night of our corporate retreat absolutely perfect! With shininglamp, the party moved along smoothly and stayed fun until late that night!"</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-4g c1-1g c1-4h c1-b c1-c c1-5x c1-5y c1-4i c1-4j c1-4k c1-4l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/1" index="1" id="ae814a0b-9334-48ff-b74d-b423c8f77def" class="x-el x-el-div x-el c1-1 c1-2 c1-2q c1-2r c1-2s c1-11 c1-6z c1-4 c1-60 c1-2u c1-2v c1-b c1-c c1-61 c1-62 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-1p c1-1q c1-2y c1-22 c1-23 c1-24 c1-25 c1-b c1-63 c1-31 c1-32 c1-33 c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-field-id x-d-field-route">Jane Doe — Hartford, CT</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-5n c1-24 c1-25 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-b c1-6w c1-c c1-32 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>"My husband's 60th birthday was a blast! Thanks for sharing your great advice and fantastic singing voice!"</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-4g c1-1g c1-4h c1-b c1-c c1-5x c1-5y c1-4i c1-4j c1-4k c1-4l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/2" index="2" id="97377b0f-12ab-40a2-b772-5e43bd5231a5" class="x-el x-el-div x-el c1-1 c1-2 c1-2q c1-2r c1-2s c1-11 c1-6z c1-4 c1-60 c1-2u c1-2v c1-b c1-c c1-61 c1-62 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-1p c1-1q c1-2y c1-22 c1-23 c1-24 c1-25 c1-b c1-63 c1-31 c1-32 c1-33 c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-field-id x-d-field-route">Jon Doe — XYZ Corp</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-5n c1-24 c1-25 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-b c1-6w c1-c c1-32 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>"Our company Christmas parties were never very successful. shininglamp helped us see where we had been going wrong and helped us go right!"</span></p></div></div></div></div></div></section> </div></div></div><div id="0386455a-9c8e-479c-b29a-23b8621497f8" class="widget widget-contact widget-contact-contact-7"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-14 c1-d c1-15 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-2q c1-43 c1-44 c1-45 c1-24 c1-46 c1-25 c1-48 c1-b c1-c c1-49 c1-4a c1-5w c1-4c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-70 c1-z c1-4f c1-4g c1-55 c1-4h c1-b c1-c c1-4i c1-4j c1-5z c1-4l c1-d c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-route="sectionTitle" data-aid="CONTACT_SECTION_TITLE_REND" class="x-el x-el-h2 c1-19 c1-1a c1-1p c1-1q c1-5t c1-22 c1-23 c1-24 c1-5u c1-2e c1-11 c1-1c c1-26 c1-1x c1-27 c1-28 c1-16 c1-29 c1-2a c1-2b x-d-ux x-d-route x-d-aid"><span data-ux="Element" class="">Contact Us</span></h2></div></div><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-2q c1-43 c1-44 c1-45 c1-24 c1-46 c1-25 c1-48 c1-b c1-c c1-49 c1-4a c1-5w c1-4c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-4g c1-55 c1-4h c1-b c1-c c1-4i c1-4j c1-5z c1-4l c1-d c1-4m c1-4n c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><div id="0386455a-9c8e-479c-b29a-23b8621497f8-bootstrap-container"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c1-1 c1-2 c1-1p c1-1q c1-2y c1-22 c1-23 c1-24 c1-71 c1-b c1-57 c1-31 c1-32 c1-72 c1-33 c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-route x-d-field-route">Send Message</h4><form data-ux="Form" aria-live="polite" formFieldVariationOptions="[object Object]" formTitle="Send Message" formFields="[object Object],[object Object],[object Object],[object Object]" formSubmitHost="https://contact.apps-api.instantpage.secureserver.net" recaptchaType="V3" domainName="shininglamp.godaddysites.com" formSuccessMessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteId="d7f9050c-f38e-44e7-abb0-2b5607b61426" pageId="b8f328ca-c7ca-49ce-9623-cd4bb5e5d633" accountId="a765a8c5-5311-11ea-81be-3417ebe72595" staticContent="[object Object]" emailOptInMessage="Sign up for our email list for updates, promotions, and more." emailConfirmationMessage="We&#x27;ve sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c1-1 c1-2 c1-25 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><input type="text" name="_app_id" autoComplete="off" tabindex="-1" style="display:none" value=""/><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c1-1 c1-2 c1-12 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input173" value="" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c1-1 c1-2 c1-73 c1-74 c1-4 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-b c1-7f c1-3n c1-32 c1-7g c1-3p c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-3t c1-3y c1-3z c1-40 x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input173" class="x-el x-el-label c1-1 c1-2 c1-1p c1-1q c1-3f c1-7p c1-7q c1-7r c1-7s c1-b c1-7f c1-3n c1-32 c1-3t c1-3y c1-3z c1-40 x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c1-1 c1-2 c1-12 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input174" value="" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c1-1 c1-2 c1-73 c1-74 c1-4 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-b c1-7f c1-3n c1-32 c1-7g c1-3p c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-3t c1-3y c1-3z c1-40 x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input174" class="x-el x-el-label c1-1 c1-2 c1-1p c1-1q c1-3f c1-7p c1-7q c1-7r c1-7s c1-b c1-7f c1-3n c1-32 c1-3t c1-3y c1-3z c1-40 x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="5" aria-label="Questions about what I can do for you event? Tell me about your plans, and I&#x27;ll get back to you with some answers." data-ux="InputTextArea" placeholder="Questions about what I can do for you event? Tell me about your plans, and I&#x27;ll get back to you with some answers." data-aid="Questions about what I can do for you event? Tell me about your plans, and I&#x27;ll get back to you with some answers." class="x-el x-el-textarea c1-1 c1-2 c1-73 c1-74 c1-4 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-1f c1-7c c1-7d c1-7t c1-7u c1-b c1-7f c1-3n c1-32 c1-7g c1-3p c1-7n c1-7o c1-3t c1-3y c1-3z c1-40 x-d-ux x-d-aid"></textarea></div></div><div style="width:1px;height:1px;visibility:hidden"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-11 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c1-3h c1-2 c1-1f c1-1g c1-3i c1-3j c1-3k c1-3l c1-t c1-11 c1-1o c1-1s c1-1q c1-1p c1-z c1-4 c1-b c1-3m c1-27 c1-2k c1-3n c1-3o c1-3p c1-3q c1-3r c1-3s c1-3t c1-3u c1-3v c1-3w c1-3x c1-7v c1-3y c1-3z c1-40 x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div></form></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-4g c1-55 c1-4h c1-b c1-c c1-4i c1-4j c1-5z c1-4l c1-d c1-4m c1-4n c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-11 c1-7w c1-b c1-c c1-7x c1-49 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-5u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-5n c1-24 c1-71 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-b c1-30 c1-c c1-32 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Do you have questions about what I can do for your event? Are you interested in collaborating on a project? Send me a message, and I will get back to you soon.&nbsp;</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-1 c1-2 c1-1p c1-1q c1-2y c1-22 c1-23 c1-24 c1-71 c1-b c1-57 c1-31 c1-32 c1-33 c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-route">shininglamp</h4></div></div></div></div></div></div></section> </div></div></div><div id="a81a16b7-3328-49f6-91d3-80fc52ea7fa5" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-7y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-7y c1-i c1-j c1-k c1-l c1-m c1-n c1-o c1-p c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-14 c1-d c1-15 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-11 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-2w c1-b c1-c c1-7z c1-14 c1-d c1-15 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-11 c1-80 c1-81 c1-b c1-c c1-14 c1-d c1-15 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-82 c1-4f c1-54 c1-55 c1-56 c1-24 c1-23 c1-25 c1-22 c1-b c1-c c1-83 c1-84 c1-d c1-e c1-f c1-g x-d-ux"></ul></div><p typography="BodyAlpha" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-5n c1-24 c1-85 c1-27 c1-b c1-86 c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">shininglamp</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-2q c1-43 c1-44 c1-45 c1-24 c1-23 c1-25 c1-22 c1-2s c1-11 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-54 c1-55 c1-56 c1-b c1-c c1-d c1-87 c1-88 c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-5n c1-24 c1-25 c1-b c1-89 c1-3n c1-32 c1-3t c1-8a c1-3y c1-3z c1-40 x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 shininglamp - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-43 c1-2f c1-4d c1-4e c1-z c1-4f c1-54 c1-55 c1-56 c1-b c1-c c1-d c1-87 c1-88 c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-1p c1-1q c1-5n c1-8b c1-25 c1-b c1-89 c1-3n c1-32 c1-3t c1-8c c1-5e c1-3y c1-3z c1-40 x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-1m c1-1n c1-1o c1-1p c1-1q c1-1r c1-1s c1-8b c1-b c1-8d c1-3n c1-1y c1-8e c1-8f c1-3t c1-8c c1-5e c1-3y c1-3z c1-40 x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.175.click,click">Website Builder</a></span></p></div></div></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.71.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/c11cad75f3112ea4/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/70b94c42ef48f212/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","fonts":["cabin","default",""],"colors":["#566987"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"b8f328ca-c7ca-49ce-9623-cd4bb5e5d633":{"isFlyoutMenu":false,"active":true,"pageId":"b8f328ca-c7ca-49ce-9623-cd4bb5e5d633","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme16"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"speed":-2,"uniqueId":"header_parallax167","noTransform":true,"widgetId":"c845a82d-7f59-4253-8e0d-ddd6740aab4e","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"c845a82d-7f59-4253-8e0d-ddd6740aab4e","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1d60b452de0e239d/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"textAlign":"center"},"logo":{"logoText":"shininglamp"},"fontPackLogoId":null,"widgetId":"c845a82d-7f59-4253-8e0d-ddd6740aab4e","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"c845a82d-7f59-4253-8e0d-ddd6740aab4e","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"speed":-2,"uniqueId":"header_parallax170","widgetId":"c845a82d-7f59-4253-8e0d-ddd6740aab4e","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"c845a82d-7f59-4253-8e0d-ddd6740aab4e","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e374870201fcd502/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","children":"Taking Your Event to the Next Level","noWrapper":true,"scaledFontSizes":["large","medium"],"style":{},"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"c845a82d-7f59-4253-8e0d-ddd6740aab4e","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"c845a82d-7f59-4253-8e0d-ddd6740aab4e","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-5',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Book Event","pageId":"b8f328ca-c7ca-49ce-9623-cd4bb5e5d633","widgetId":"a38af287-17b0-4cf1-b75a-4d4d480d926c"},"data-aid":"HEADER_CTA_BTN","data-field-id":"ctaButton","data-field-route":"\u002FctaButton","style":{"maxWidth":"100%"},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"c845a82d-7f59-4253-8e0d-ddd6740aab4e","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"c845a82d-7f59-4253-8e0d-ddd6740aab4e","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/55e19bca36c3b428/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/d7f9050c-f38e-44e7-abb0-2b5607b61426/gpub/9168414e0687225/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/3cf27ff767b7de40/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/d7f9050c-f38e-44e7-abb0-2b5607b61426/gpub/424af3057594cc46/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-165').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"d7f9050c-f38e-44e7-abb0-2b5607b61426"}),_trfd.push({"pd":"2020-02-19T12:17:07.375Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
