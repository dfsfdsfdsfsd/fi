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








<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>reichwa</title><meta name="author" content="reichwa"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://reichwa.godaddysites.com/"/>
<meta property="og:site_name" content="reichwa"/>
<meta property="og:title" content="Welcome to reichwa"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/Dx5a40w"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="reichwa"/>
<meta name="twitter:description" content="Welcome to reichwa"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/Dx5a40w"/>
<meta name="twitter:image:alt" content="reichwa"/>
<meta name="theme-color" content="#fafbf8"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
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
Copyright 2017 The Playfair Display Project Authors (https://github.com/clauseggers/Playfair-Display), with Reserved Font Name "Playfair Display".

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v19/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v19/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v19/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v19/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgEM86xQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v19/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v19/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v19/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v19/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgEM86xQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v19/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v19/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v19/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v19/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgEM86xQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Digitized data copyright 2010-2011, Google Corporation.

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
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hmIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hvIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hnIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hoIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hkIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hlIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hrIqOxjaPX.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Udc1GAK6bt6o.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0ddc1GAK6bt6o.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Vdc1GAK6bt6o.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0adc1GAK6bt6o.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Wdc1GAK6bt6o.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Xdc1GAK6bt6o.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Zdc1GAK6b.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhmIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhvIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhnIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhoIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhkIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhlIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhrIqOxjaPX.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OX-hpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OVuhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OXuhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OUehpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OXehpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OXOhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OUuhpKKSTjw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFWJ0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFUZ0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFWZ0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFVp0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFWp0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFW50bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFVZ0bf8pkAg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOX-hpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOVuhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOXuhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOUehpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOXehpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOXOhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOUuhpKKSTjw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOX-hpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOVuhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOXuhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOUehpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOXehpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOXOhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOUuhpKKSTjw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/2bd566c7-ca4f-41aa-9995-b731c572f756/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/2bd566c7-ca4f-41aa-9995-b731c572f756/gpub/6a10683c489fb888/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-q{padding-top:32px}}@media (max-width: 767px){.x .c1-r{padding-bottom:32px}}@media (max-width: 767px){.x .c1-21{width:100%}}@media (max-width: 767px){.x .c1-5m{padding-top:40px}}@media (max-width: 767px){.x .c1-5n{padding-bottom:40px}}@media (max-width: 767px){.x .c1-61 > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-62  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-6z > p > ul{margin-left:0}}@media (max-width: 767px){.x .c1-70 > p > ul{margin-right:0}}@media (max-width: 767px){.x .c1-71 > p > ul{padding-left:24px}}@media (max-width: 767px){.x .c1-78{order:-1}}@media (max-width: 767px){.x .c1-ab{display:flex}}@media (max-width: 767px){.x .c1-ac{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/2bd566c7-ca4f-41aa-9995-b731c572f756/gpub/687b921d110eb9fb/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/2bd566c7-ca4f-41aa-9995-b731c572f756/gpub/50ad4d681225563/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-1q{width:1160px}}@media (min-width: 1280px){.x .c1-31{font-size:32px}}@media (min-width: 1280px){.x .c1-4p{font-size:44px}}@media (min-width: 1280px){.x .c1-51{font-size:22px}}@media (min-width: 1280px){.x .c1-57 > div{max-width:1160px}}@media (min-width: 1280px){.x .c1-95{font-size:14px}}@media (min-width: 1280px){.x .c1-ah{font-size:12px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-1r{width:1280px}}@media (min-width: 1536px){.x .c1-32{font-size:36px}}@media (min-width: 1536px){.x .c1-4q{font-size:48px}}@media (min-width: 1536px){.x .c1-52{font-size:24px}}@media (min-width: 1536px){.x .c1-58 > div{max-width:1280px}}@media (min-width: 1536px){.x .c1-96{font-size:16px}}@media (min-width: 1536px){.x .c1-ai{font-size:14px}}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style></head>
<body class="x  x-fonts-playfair-display" context="[object Object]"><div id="layout-2-bd-566-c-7-ca-4-f-41-aa-9995-b-731-c-572-f-756" class="layout layout-layout layout-layout-layout-27 locale-en-US lang-en"><div data-ux="Page" id="page-12274" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="25772104-bfc0-45cb-a611-b01d4c0c9a41" class="widget widget-header widget-header-header-9"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-j c1-b c1-c c1-k c1-l c1-m c1-n c1-o c1-p c1-q c1-r c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-t c1-b c1-c c1-u c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContainerFluid" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-10 c1-b c1-c c1-d c1-11 c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-4 c1-b c1-c c1-12 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-13 c1-14 c1-15 c1-16 c1-z c1-17 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-b c1-c c1-1f c1-d c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-1o c1-1p c1-e c1-1q c1-f c1-1r c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1s c1-1t c1-1u c1-b c1-c c1-d c1-1v c1-1w c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1x c1-1y c1-z c1-1z c1-20 c1-c c1-21 c1-22 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="ec5b81e0-a6bc-459f-91d4-f8184cf68650" title="reichwa" href="/" class="x-el x-el-a c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-b c1-2e c1-c c1-2f c1-2g c1-2h c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.12276.click,click"><div id="bs-1"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-12277" logoText="reichwa" class="x-el x-el-h3 c1-2i c1-2 c1-26 c1-27 c1-2j c1-v c1-w c1-1d c1-1e c1-z c1-20 c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r c1-2s c1-2t c1-2u c1-1y c1-2v c1-2w c1-2x c1-2y c1-2z c1-30 c1-31 c1-32 x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-23 c1-24 c1-1x c1-4 c1-2w c1-33 c1-2f c1-34 c1-1y c1-2y c1-30 c1-31 c1-32 x-d-ux x-d-aid x-d-field-id x-d-field-route">reichwa</span></h3></div></a></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-17 c1-35 c1-b c1-c c1-d c1-1v c1-1w c1-e c1-f c1-g x-d-ux"></div></div></nav></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-17 c1-b c1-c c1-d c1-36 c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-4 c1-b c1-c c1-12 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-17 c1-37 c1-38 c1-39 c1-1d c1-14 c1-1e c1-13 c1-18 c1-19 c1-1a c1-15 c1-16 c1-1b c1-1c c1-b c1-c c1-3a c1-3b c1-3c c1-3d c1-d c1-1h c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-1o c1-1p c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-37 c1-19 c1-3e c1-3f c1-3g c1-3h c1-16 c1-1s c1-15 c1-b c1-c c1-3i c1-3j c1-3k c1-3l c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-37 c1-19 c1-3e c1-3m c1-3n c1-3h c1-16 c1-1s c1-15 c1-b c1-c c1-3i c1-3j c1-3k c1-3l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-17 c1-1y c1-z c1-1a c1-c c1-21 c1-22 c1-d c1-3o c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="ec5b81e0-a6bc-459f-91d4-f8184cf68650" title="reichwa" href="/" class="x-el x-el-a c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-z c1-b c1-2e c1-c c1-2f c1-2g c1-2h c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.12278.click,click"><div id="bs-2"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-12279" logoText="reichwa" class="x-el x-el-h3 c1-2i c1-2 c1-26 c1-27 c1-2j c1-v c1-w c1-1d c1-1e c1-z c1-20 c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r c1-2s c1-2t c1-2u c1-1y c1-2v c1-2w c1-2x c1-2y c1-2z c1-30 c1-31 c1-32 x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-23 c1-24 c1-1x c1-4 c1-2w c1-33 c1-2f c1-34 c1-1y c1-2y c1-30 c1-31 c1-32 x-d-ux x-d-aid x-d-field-id x-d-field-route">reichwa</span></h3></div></a></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-37 c1-19 c1-3e c1-3f c1-3g c1-3h c1-16 c1-1s c1-15 c1-b c1-c c1-3i c1-3j c1-3k c1-3l c1-d c1-e c1-f c1-g x-d-ux"></div></div></nav></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-3h c1-1s c1-1d c1-1e c1-b c1-c c1-1f c1-d c1-1g c1-e c1-1q c1-f c1-1r c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-3p c1-3q c1-3r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-17 c1-1a c1-18 c1-b c1-c c1-3s c1-3t c1-d c1-e c1-f c1-g x-d-ux"><figure data-ux="WrapperImage" data-field-id="background" class="x-el x-el-figure c1-1 c1-2 c1-s c1-1x c1-1d c1-14 c1-1e c1-13 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id"><img src="//img1.wsimg.com/isteam/stock/Dx5a40w/:/rs=h:1000,cg:true,m" srcSet="//img1.wsimg.com/isteam/stock/Dx5a40w/:/rs=h:1000,cg:true,m,
//img1.wsimg.com/isteam/stock/Dx5a40w/:/rs=h:1500,cg:true,m 1.5x,
//img1.wsimg.com/isteam/stock/Dx5a40w/:/rs=h:2000,cg:true,m 2x,
//img1.wsimg.com/isteam/stock/Dx5a40w/:/rs=h:3000,cg:true,m 3x" alt="image25" data-ux="Image" data-aid="BACKGROUND_IMAGE_RENDERED" data-ht="Inset" class="x-el x-el-img c1-1 c1-2 c1-z c1-3u c1-v c1-w c1-1d c1-1e c1-3v c1-3w c1-b c1-c c1-21 c1-3x c1-1f c1-3r c1-3y c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-ht"/><script>(function(){Number(window.vctElements)||(window.vctElements=0),window.vctElements++;var i=new Image();i.onload=window.markVisuallyComplete;i.srcset="//img1.wsimg.com/isteam/stock/Dx5a40w/:/rs=h:1000,cg:true,m, //img1.wsimg.com/isteam/stock/Dx5a40w/:/rs=h:1500,cg:true,m 1.5x, //img1.wsimg.com/isteam/stock/Dx5a40w/:/rs=h:2000,cg:true,m 2x, //img1.wsimg.com/isteam/stock/Dx5a40w/:/rs=h:3000,cg:true,m 3x";i.src="//img1.wsimg.com/isteam/stock/Dx5a40w/:/rs=h:1000,cg:true,m";})()</script></figure></div><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-20 c1-17 c1-1t c1-19 c1-1a c1-18 c1-x c1-y c1-3z c1-40 c1-41 c1-b c1-c c1-1f c1-42 c1-43 c1-44 c1-45 c1-46 c1-47 c1-48 c1-d c1-49 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1t c1-1a c1-18 c1-4a c1-4 c1-b c1-c c1-4b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-4c c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SupTagline" data-route="welcomeLine" class="x-el x-el-h2 c1-4d c1-4e c1-26 c1-27 c1-4f c1-v c1-w c1-1d c1-4g c1-4 c1-4h c1-s c1-b c1-c c1-2e c1-2x c1-d c1-e c1-f c1-g x-d-ux x-d-route">Welcome</h2><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-13 c1-14 c1-15 c1-16 c1-z c1-4i c1-b c1-c c1-1f c1-d c1-1g c1-e c1-1q c1-f c1-1r c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-4j c1-2 c1-26 c1-27 c1-4k c1-v c1-w c1-1d c1-4g c1-10 c1-4 c1-s c1-1y c1-2v c1-4l c1-2x c1-4m c1-4n c1-4o c1-4p c1-4q x-d-ux x-d-aid x-d-route">Welcome to reichwa</h1><div id="bs-3"><div data-ux="Element" id="tagline-container-12280" class="x-el x-el-div c1-1 c1-2 c1-26 c1-27 c1-4k c1-4r c1-b c1-c c1-d c1-36 c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-4j c1-2 c1-26 c1-27 c1-4k c1-v c1-w c1-1d c1-4g c1-4s c1-1x c1-4 c1-c c1-s c1-1y c1-2v c1-2x c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Welcome to reichwa</h1><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-12280" class="x-el x-el-span c1-4t c1-4u c1-10 c1-4v c1-4w c1-4x c1-4l c1-1y c1-4m c1-4o c1-4p c1-4q x-d-ux x-d-size x-d-scaler-id">Welcome to reichwa</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-12280" class="x-el x-el-span c1-4t c1-4u c1-10 c1-4v c1-4w c1-4x c1-2w c1-1y c1-2y c1-30 c1-31 c1-32 x-d-ux x-d-size x-d-scaler-id">Welcome to reichwa</span><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-12280" class="x-el x-el-span c1-4t c1-4u c1-10 c1-4v c1-4w c1-4x c1-4y c1-1y c1-4z c1-50 c1-51 c1-52 x-d-ux x-d-size x-d-scaler-id">Welcome to reichwa</span></div></div></div></div></div></div></div></div></div></section> </div></div></div><div id="d82217e4-a964-4ba8-94c9-36d1da3a9b8a" class="widget widget-about widget-about-about-5"><div data-ux="WidgetSplit" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-6 c1-53 c1-54 c1-7 c1-8 c1-9 c1-a c1-55 c1-56 c1-57 c1-58 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div data-ux="ContainerSplit" class="x-el x-el-div c1-1 c1-2 c1-13 c1-14 c1-15 c1-16 c1-z c1-17 c1-1t c1-59 c1-3 c1-b c1-c c1-d c1-5a c1-1h c1-5b c1-e c1-f c1-g x-d-ux"><div data-ux="SplitItem" class="x-el x-el-div c1-1 c1-2 c1-17 c1-19 c1-5c c1-z c1-s c1-b c1-c c1-5d c1-5e c1-5f c1-d c1-5g c1-5h c1-5i c1-5j c1-e c1-f c1-g x-d-ux"><section data-ux="SectionSplit" class="x-el x-el-section c1-1 c1-2 c1-3z c1-40 c1-41 c1-5k c1-19 c1-4 c1-x c1-y c1-5l c1-b c1-c c1-5m c1-5n c1-d c1-5o c1-5p c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-5q c1-b c1-c c1-d c1-5r c1-1m c1-1n c1-1o c1-1p c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionSplitHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" alignmentOption="left" class="x-el x-el-h2 c1-4d c1-4e c1-26 c1-27 c1-5s c1-13 c1-14 c1-1d c1-t c1-5t c1-5q c1-b c1-c c1-5u c1-2x c1-5v c1-d c1-5r c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">About Us</span></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-5w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" data-field-id="cards" data-field-route="/card/0" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-17 c1-1t c1-4 c1-5x c1-5y c1-5q c1-5z c1-60 c1-b c1-c c1-61 c1-62 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-63 c1-2 c1-26 c1-27 c1-4f c1-13 c1-14 c1-1d c1-1e c1-b c1-64 c1-4y c1-2x c1-4z c1-50 c1-51 c1-52 x-d-ux x-d-aid x-d-field-id x-d-field-route">Grab interest</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-65 c1-1d c1-1e c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-b c1-6y c1-c c1-2x c1-6z c1-70 c1-71 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Say something interesting about your business here.</span></p></div></div></div><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-5w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" data-field-id="cards" data-field-route="/card/1" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-17 c1-1t c1-4 c1-5x c1-5y c1-5q c1-5z c1-60 c1-b c1-c c1-61 c1-62 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-63 c1-2 c1-26 c1-27 c1-4f c1-13 c1-14 c1-1d c1-1e c1-b c1-64 c1-4y c1-2x c1-4z c1-50 c1-51 c1-52 x-d-ux x-d-aid x-d-field-id x-d-field-route">Generate excitement</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-65 c1-1d c1-1e c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-b c1-6y c1-c c1-2x c1-6z c1-70 c1-71 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>What's something exciting your business offers? Say it here.</span></p></div></div></div><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-1e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" data-field-id="cards" data-field-route="/card/2" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-17 c1-1t c1-4 c1-5x c1-5y c1-5q c1-5z c1-60 c1-b c1-c c1-61 c1-62 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-63 c1-2 c1-26 c1-27 c1-4f c1-13 c1-14 c1-1d c1-1e c1-b c1-64 c1-4y c1-2x c1-4z c1-50 c1-51 c1-52 x-d-ux x-d-aid x-d-field-id x-d-field-route">Close the deal</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-65 c1-1d c1-1e c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-b c1-6y c1-c c1-2x c1-6z c1-70 c1-71 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Give customers a reason to do business with you.</span></p></div></div></div></div></div></section></div><div data-ux="SplitItemImage" class="x-el x-el-div c1-1 c1-2 c1-17 c1-19 c1-5c c1-z c1-s c1-5k c1-77 c1-b c1-c c1-5d c1-5e c1-5f c1-78 c1-79 c1-d c1-5g c1-5h c1-5i c1-7a c1-7b c1-e c1-f c1-g x-d-ux"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-17 c1-19 c1-7c c1-b c1-c c1-7d c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg12281" role="img" data-ux="Background" data-aid="ABOUT_IMAGE_RENDERED1" data-route="imageData" data-field-route="/image" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-7e c1-7f c1-7g c1-7h c1-7i c1-17 c1-19 c1-7c c1-7j c1-7k c1-b c1-c c1-7d c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route"><script>new guacImage('//img1.wsimg.com/isteam/stock/68128/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg12281'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%)"]})</script></div></span></div></div> </div></div></div><div id="aebc176e-6878-479f-8a79-c63ce48491a6" class="widget widget-subscribe widget-subscribe-subscribe-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-q c1-r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-1f c1-d c1-1g c1-e c1-1q c1-f c1-1r c1-g x-d-ux"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-7l c1-b c1-c c1-d c1-1m c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-17 c1-37 c1-38 c1-39 c1-1d c1-7m c1-1e c1-7n c1-b c1-c c1-3a c1-3b c1-7o c1-3d c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-37 c1-19 c1-3e c1-7p c1-z c1-3h c1-7q c1-1s c1-7r c1-b c1-c c1-3i c1-3j c1-7s c1-3l c1-d c1-e c1-f c1-g x-d-ux"><div style="width:100%"><div id="aebc176e-6878-479f-8a79-c63ce48491a6-bootstrap-container"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4r c1-b c1-c c1-d c1-11 c1-7t c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4g c1-b c1-c c1-d c1-7u c1-1o c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h3 c1-2i c1-2 c1-26 c1-27 c1-4f c1-13 c1-14 c1-1d c1-1e c1-20 c1-1y c1-64 c1-2w c1-2x c1-2y c1-30 c1-31 c1-32 x-d-ux x-d-aid x-d-route">Subscribe</h3></div><div data-ux="Block" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-19 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><form data-ux="Form" aria-live="polite" class="x-el x-el-form c1-1 c1-2 c1-1e c1-17 c1-1t c1-1a c1-18 c1-20 c1-7v c1-b c1-c c1-d c1-1h c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c1-1 c1-2 c1-t c1-4 c1-b c1-c c1-d c1-1w c1-7w c1-7u c1-1o c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c1-1 c1-2 c1-s c1-7x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="BodyAlpha" data-ux="InputFloatLabel" id="input12282" value="" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c1-1 c1-2 c1-7x c1-7y c1-4 c1-7z c1-80 c1-2t c1-81 c1-82 c1-2l c1-15 c1-16 c1-83 c1-2p c1-b c1-6y c1-c c1-2x c1-84 c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-8b c1-8c c1-8d c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="BodyAlpha" data-ux="InputFloatLabelLabel" for="input12282" class="x-el x-el-label c1-1 c1-2 c1-26 c1-27 c1-4w c1-8e c1-4x c1-8f c1-8g c1-b c1-6y c1-c c1-2x c1-d c1-e c1-f c1-g x-d-ux">Email</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-7w c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c1-8h c1-4e c1-8i c1-8j c1-8k c1-8l c1-8m c1-8n c1-1x c1-20 c1-25 c1-29 c1-27 c1-26 c1-z c1-4 c1-8o c1-8p c1-8q c1-83 c1-b c1-64 c1-73 c1-7v c1-8r c1-8s c1-85 c1-8t c1-8u c1-8v c1-8w c1-8x c1-5o c1-5p c1-8y c1-8z c1-90 c1-91 c1-92 c1-93 c1-94 c1-95 c1-96 x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></div></div></div></div></div></div></section> </div></div></div><div id="7aea824a-39e3-4f5e-a4a6-fe08898ab04f" class="widget widget-contact widget-contact-contact-6"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-s c1-b c1-c c1-q c1-r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-1f c1-d c1-1g c1-e c1-1q c1-f c1-1r c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-4d c1-4e c1-26 c1-27 c1-5s c1-13 c1-14 c1-1d c1-t c1-5t c1-5q c1-b c1-c c1-5u c1-2x c1-5v c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Contact Us</span></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="7aea824a-39e3-4f5e-a4a6-fe08898ab04f-bootstrap-container"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-17 c1-37 c1-38 c1-39 c1-1d c1-7m c1-1e c1-7n c1-b c1-c c1-3a c1-3b c1-7o c1-3d c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-37 c1-19 c1-3e c1-7p c1-z c1-3h c1-7q c1-1s c1-7r c1-b c1-c c1-97 c1-98 c1-99 c1-3i c1-3j c1-7s c1-3l c1-d c1-9a c1-9b c1-9c c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-1a c1-20 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c1-63 c1-2 c1-26 c1-27 c1-4f c1-13 c1-14 c1-1d c1-t c1-b c1-64 c1-4y c1-2x c1-4z c1-50 c1-51 c1-52 x-d-ux x-d-aid x-d-route x-d-field-route">Drop us a line!</h4><form data-ux="Form" aria-live="polite" formFieldVariationOptions="[object Object]" formTitle="Drop us a line!" formFields="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]" formSubmitHost="https://contact.apps-api.instantpage.secureserver.net" recaptchaType="V3" domainName="reichwa.godaddysites.com" formSuccessMessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteId="2bd566c7-ca4f-41aa-9995-b731c572f756" pageId="ec5b81e0-a6bc-459f-91d4-f8184cf68650" accountId="cd771c38-4f4c-11ea-81e9-3417ebe73f23" staticContent="[object Object]" emailOptInMessage="Sign up for our email list for updates, promotions, and more." emailConfirmationMessage="We&#x27;ve sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c1-1 c1-2 c1-1e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><input type="text" name="_app_id" autoComplete="off" tabindex="-1" style="display:none" value=""/><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c1-1 c1-2 c1-s c1-7x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="BodyAlpha" data-ux="InputFloatLabel" id="input12283" value="" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c1-1 c1-2 c1-7x c1-7y c1-4 c1-7z c1-80 c1-2t c1-81 c1-82 c1-2l c1-15 c1-16 c1-83 c1-2p c1-b c1-6y c1-c c1-2x c1-84 c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-8b c1-8c c1-8d c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="BodyAlpha" data-ux="InputFloatLabelLabel" for="input12283" class="x-el x-el-label c1-1 c1-2 c1-26 c1-27 c1-4w c1-8e c1-4x c1-8f c1-8g c1-b c1-6y c1-c c1-2x c1-d c1-e c1-f c1-g x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c1-1 c1-2 c1-s c1-7x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="BodyAlpha" data-ux="InputFloatLabel" id="input12284" value="" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c1-1 c1-2 c1-7x c1-7y c1-4 c1-7z c1-80 c1-2t c1-81 c1-82 c1-2l c1-15 c1-16 c1-83 c1-2p c1-b c1-6y c1-c c1-2x c1-84 c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-8b c1-8c c1-8d c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="BodyAlpha" data-ux="InputFloatLabelLabel" for="input12284" class="x-el x-el-label c1-1 c1-2 c1-26 c1-27 c1-4w c1-8e c1-4x c1-8f c1-8g c1-b c1-6y c1-c c1-2x c1-d c1-e c1-f c1-g x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="Phone" class="x-el x-el-div c1-1 c1-2 c1-s c1-7x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="BodyAlpha" data-ux="InputFloatLabel" id="input12285" value="" data-aid="Phone" class="x-el x-el-input c1-1 c1-2 c1-7x c1-7y c1-4 c1-7z c1-80 c1-2t c1-81 c1-82 c1-2l c1-15 c1-16 c1-83 c1-2p c1-b c1-6y c1-c c1-2x c1-84 c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-8b c1-8c c1-8d c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="BodyAlpha" data-ux="InputFloatLabelLabel" for="input12285" class="x-el x-el-label c1-1 c1-2 c1-26 c1-27 c1-4w c1-8e c1-4x c1-8f c1-8g c1-b c1-6y c1-c c1-2x c1-d c1-e c1-f c1-g x-d-ux">Phone</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><textarea typography="BodyAlpha" rows="4" aria-label="I&#x27;m interested in" data-ux="InputTextArea" placeholder="I&#x27;m interested in" data-aid="I&#x27;m interested in" class="x-el x-el-textarea c1-1 c1-2 c1-7x c1-7y c1-4 c1-7z c1-80 c1-2t c1-81 c1-8i c1-8j c1-15 c1-16 c1-83 c1-2p c1-9d c1-b c1-6y c1-c c1-2x c1-84 c1-85 c1-8c c1-8d c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></textarea></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/4" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><textarea typography="BodyAlpha" rows="4" aria-label="Other notes" data-ux="InputTextArea" placeholder="Other notes" data-aid="Other notes" class="x-el x-el-textarea c1-1 c1-2 c1-7x c1-7y c1-4 c1-7z c1-80 c1-2t c1-81 c1-8i c1-8j c1-15 c1-16 c1-83 c1-2p c1-9d c1-b c1-6y c1-c c1-2x c1-84 c1-85 c1-8c c1-8d c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></textarea></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-17 c1-1a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><label data-ux="InputCheckbox" data-aid="CONTACT_FORM_EMAIL_OPT_IN" class="x-el x-el-label c1-1 c1-2 c1-17 c1-1a c1-18 c1-s c1-b c1-c c1-9e c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="checkbox" typography="BodyAlpha" data-ux="InputCheckbox" data-aid="CONTACT_FORM_EMAIL_OPT_IN" class="x-el x-el-input c1-1 c1-2 c1-3 c1-7y c1-4 c1-7z c1-80 c1-2t c1-81 c1-8i c1-8j c1-15 c1-16 c1-83 c1-2p c1-4w c1-9f c1-9g c1-b c1-6y c1-c c1-2x c1-84 c1-85 c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-9s c1-9t c1-9u c1-9v c1-9w c1-9x c1-9y c1-9z c1-8c c1-8d c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><div data-ux="Element" class="x-el x-el-div c1-1 c1-2 c1-1x c1-4x c1-a0 c1-a1 c1-a2 c1-a3 c1-2p c1-a4 c1-a5 c1-29 c1-s c1-2r c1-2s c1-2t c1-2u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div><p typography="BodyAlpha" data-ux="Text" class="x-el x-el-p c1-1 c1-2 c1-26 c1-27 c1-34 c1-1d c1-1e c1-1x c1-a6 c1-29 c1-a7 c1-a8 c1-5q c1-b c1-6y c1-c c1-2x c1-d c1-e c1-f c1-g x-d-ux">Sign up for our email list for updates, promotions, and more.</p></label></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/5" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-20 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c1-8h c1-4e c1-8i c1-8j c1-8k c1-8l c1-8m c1-8n c1-1x c1-20 c1-25 c1-29 c1-27 c1-26 c1-z c1-4 c1-8o c1-8p c1-8q c1-83 c1-b c1-64 c1-73 c1-7v c1-8r c1-8s c1-85 c1-8t c1-8u c1-8v c1-8w c1-8x c1-5o c1-5p c1-8y c1-8z c1-90 c1-91 c1-92 c1-93 c1-94 c1-95 c1-96 x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div><div style="width:1px;height:1px;visibility:hidden"></div></form></div></div></div></div></div></div></div></section> </div></div></div><div id="80a352c6-31bc-4541-946b-c2609005cf51" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-q c1-r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-1f c1-d c1-1g c1-e c1-1q c1-f c1-1r c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-20 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-1c c1-b c1-c c1-r c1-1f c1-d c1-1g c1-e c1-1q c1-f c1-1r c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-20 c1-a9 c1-i c1-b c1-c c1-1f c1-d c1-1g c1-e c1-1q c1-f c1-1r c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-aa c1-3h c1-16 c1-1s c1-15 c1-1d c1-14 c1-1e c1-13 c1-b c1-c c1-ab c1-ac c1-d c1-e c1-f c1-g x-d-ux"></ul></div><p typography="DetailsBeta" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-ad c1-4e c1-26 c1-27 c1-65 c1-1d c1-4g c1-73 c1-b c1-64 c1-ae c1-af c1-ag c1-ah c1-ai x-d-ux x-d-aid x-d-route">reichwa</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-17 c1-37 c1-38 c1-39 c1-1d c1-14 c1-1e c1-13 c1-18 c1-20 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-37 c1-19 c1-3e c1-aj c1-z c1-3h c1-16 c1-1s c1-15 c1-b c1-c c1-d c1-ak c1-al c1-e c1-f c1-g x-d-ux"><div typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-ad c1-4e c1-26 c1-27 c1-65 c1-1d c1-1e c1-b c1-a5 c1-ae c1-2x c1-af c1-5r c1-ag c1-ah c1-ai x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 reichwa - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-37 c1-19 c1-3e c1-aj c1-z c1-3h c1-16 c1-1s c1-15 c1-b c1-c c1-d c1-ak c1-al c1-e c1-f c1-g x-d-ux"><p typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-ad c1-4e c1-26 c1-27 c1-65 c1-am c1-1e c1-b c1-a5 c1-ae c1-2x c1-af c1-an c1-1m c1-ag c1-ah c1-ai x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-am c1-b c1-5u c1-ae c1-2f c1-ao c1-ap c1-af c1-an c1-1m c1-ag c1-ah c1-ai x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.12286.click,click">Website Builder</a></span></p></div></div></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.71.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/87d7d068d6193c6d/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1d60b452de0e239d/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","fonts":["playfair-display","default",""],"colors":["#fafbf8"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"ec5b81e0-a6bc-459f-91d4-f8184cf68650":{"isFlyoutMenu":false,"active":true,"pageId":"ec5b81e0-a6bc-459f-91d4-f8184cf68650","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme27","paintJob":"LIGHT"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"textAlign":"center"},"logo":{"logoText":"reichwa"},"fontPackLogoId":null,"widgetId":"25772104-bfc0-45cb-a611-b01d4c0c9a41","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"25772104-bfc0-45cb-a611-b01d4c0c9a41","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"textAlign":"center"},"logo":{"logoText":"reichwa"},"fontPackLogoId":null,"widgetId":"25772104-bfc0-45cb-a611-b01d4c0c9a41","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"25772104-bfc0-45cb-a611-b01d4c0c9a41","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e374870201fcd502/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"children":"Welcome to reichwa","scaledFontSizes":["xxlarge","xlarge","large"],"style":{},"tag":"h1","data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"25772104-bfc0-45cb-a611-b01d4c0c9a41","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"25772104-bfc0-45cb-a611-b01d4c0c9a41","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2b5c958c04dbef01/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-aebc176e-6878-479f-8a79-c63ce48491a6-bootstrap-container'] = {"renderMode":"PUBLISH","fonts":["playfair-display","default",""],"colors":["#fafbf8"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"ec5b81e0-a6bc-459f-91d4-f8184cf68650":{"isFlyoutMenu":false,"active":true,"pageId":"ec5b81e0-a6bc-459f-91d4-f8184cf68650","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme27"};</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/2bd566c7-ca4f-41aa-9995-b731c572f756/gpub/27782d525351b9de/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/717f4c070b4bbdc/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/2bd566c7-ca4f-41aa-9995-b731c572f756/gpub/1e54b301e93b2b0a/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-12274').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"2bd566c7-ca4f-41aa-9995-b731c572f756"}),_trfd.push({"pd":"2020-02-14T17:10:13.732Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
