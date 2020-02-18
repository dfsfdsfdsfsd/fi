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















<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>blondsix</title><meta name="author" content="blondsix"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://blondsix.appspot.com/"/>
<meta property="og:site_name" content="blondsix"/>
<meta property="og:title" content="Stay with us in comfort"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/80246"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="blondsix"/>
<meta name="twitter:description" content="Stay with us in comfort"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/80246"/>
<meta name="twitter:image:alt" content="blondsix"/>
<meta name="theme-color" content="#d4dbea"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
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
Copyright (c) 2011 by Sorkin Type Co (www.sorkintype.com eben@eyebytes.com), with Reserved Font Name "Fjalla"

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Fjalla One';
  font-style: normal;
  font-weight: 400;
  src: local('Fjalla One'), local('FjallaOne-Regular'), url(https://img1.wsimg.com/gfonts/s/fjallaone/v7/Yq6R-LCAWCX3-6Ky7FAFrO96kjouQb5-6g.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Fjalla One';
  font-style: normal;
  font-weight: 400;
  src: local('Fjalla One'), local('FjallaOne-Regular'), url(https://img1.wsimg.com/gfonts/s/fjallaone/v7/Yq6R-LCAWCX3-6Ky7FAFrOF6kjouQb4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2010, 2012, 2014 Adobe Systems Incorporated (http://www.adobe.com/), with Reserved Font Name Source.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidh18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkido18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidg18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidv18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidj18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidi18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkids18S0xR41.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7qsDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7jsDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7rsDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7ksDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7osDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7psDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7nsDJB9cme.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdh18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdo18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdg18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdv18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdj18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdi18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSds18S0xR41.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmhdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwkxdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmxdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlBdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmBdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmRdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdu3cOWxw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNa7lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qPK7lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNK7lujVj9_mf.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qO67lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qN67lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNq7lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qOK7lujVj9w.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmhdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwkxdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmxdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlBdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmBdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmRdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlxdu3cOWxw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/9ea1c725-fea5-4309-be09-34b90e9c4560/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/9ea1c725-fea5-4309-be09-34b90e9c4560/gpub/81c66142fa3216f2/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-m{padding-top:40px}}@media (max-width: 767px){.x .c1-n{padding-bottom:40px}}@media (max-width: 767px){.x .c1-1z{width:100%}}@media (max-width: 767px){.x .c1-3o{width:250px}}@media (max-width: 767px){.x .c1-3p{height:250px}}@media (max-width: 767px){.x .c1-3q{padding-top:24px}}@media (max-width: 767px){.x .c1-3r{padding-right:24px}}@media (max-width: 767px){.x .c1-3s{padding-bottom:24px}}@media (max-width: 767px){.x .c1-3t{padding-left:24px}}@media (max-width: 767px){.x .c1-7b > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-7c  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-8j{max-width:360px}}@media (max-width: 767px){.x .c1-8k{margin-left:auto}}@media (max-width: 767px){.x .c1-8l{margin-right:auto}}@media (max-width: 767px){.x .c1-8m{flex-direction:column}}@media (max-width: 767px){.x .c1-ag{display:flex}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/9ea1c725-fea5-4309-be09-34b90e9c4560/gpub/11dbc60080105b61/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/9ea1c725-fea5-4309-be09-34b90e9c4560/gpub/aaf7b1c972fa1f4a/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-2n{font-size:32px}}@media (min-width: 1280px){.x .c1-32{width:1160px}}@media (min-width: 1280px){.x .c1-40{font-size:44px}}@media (min-width: 1280px){.x .c1-49{font-size:22px}}@media (min-width: 1280px){.x .c1-72{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-2o{font-size:36px}}@media (min-width: 1536px){.x .c1-33{width:1280px}}@media (min-width: 1536px){.x .c1-41{font-size:48px}}@media (min-width: 1536px){.x .c1-4a{font-size:24px}}@media (min-width: 1536px){.x .c1-73{font-size:16px}}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(212, 219, 234); min-height: 100vh; }</style></head>
<body class="x  x-fonts-fjalla-one" context="[object Object]"><div id="layout-9-ea-1-c-725-fea-5-4309-be-09-34-b-90-e-9-c-4560" class="layout layout-layout layout-layout-layout-19 locale-en-US lang-en"><div data-ux="Page" id="page-3192" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="1a1f5948-9740-495b-a9c5-d5e44f43c368" class="widget widget-header widget-header-header-9"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-h c1-i c1-j c1-k c1-l c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-o c1-b c1-c c1-d c1-p c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-q c1-4 c1-r c1-s c1-t c1-u c1-v c1-b c1-c c1-d c1-w c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-x c1-4 c1-y c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg3194" role="img" data-guac-image="loading" data-ux="Background" data-aid="BACKGROUND_IMAGE_RENDERED" data-field-id="background" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-14 c1-15 c1-16 c1-17 c1-18 c1-q c1-4 c1-19 c1-1a c1-1b c1-b c1-c c1-d c1-w c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-aid x-d-field-id"><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/80246/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg3194'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-13 c1-1c c1-q c1-b c1-c c1-d c1-1d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-13 c1-1e c1-19 c1-4 c1-1f c1-b c1-c c1-d c1-w c1-1d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1g c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1h c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-1o c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-1p c1-b c1-c c1-d c1-1q c1-1r c1-1s c1-1t c1-1u c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1v c1-1w c1-1x c1-1m c1-4 c1-1y c1-s c1-1j c1-u c1-1i c1-c c1-1z c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="ae140f98-d822-4141-8a04-51159dd0ed97" title="blondsix" href="/" class="x-el x-el-a c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-b c1-2c c1-c c1-2d c1-2e c1-2f c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.3197.click,click"><div id="bs-1"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-3198" logoText="blondsix" class="x-el x-el-h3 c1-1 c1-1v c1-24 c1-25 c1-2g c1-v c1-t c1-s c1-u c1-1m c1-2h c1-1x c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-21 c1-1v c1-1w c1-4 c1-2j c1-2p c1-2d c1-2q c1-1x c1-2l c1-2m c1-2n c1-2o x-d-ux x-d-aid x-d-field-id x-d-field-route">blondsix</span></h3></div></a></div></nav><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-2r c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2s c1-4 c1-13 c1-2t c1-2h c1-2u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2v c1-2w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2x c1-2h c1-2w c1-13 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1v c1-1w c1-1x c1-1m c1-c c1-1z c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="ae140f98-d822-4141-8a04-51159dd0ed97" title="blondsix" href="/" class="x-el x-el-a c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-b c1-2c c1-c c1-2d c1-2e c1-2f c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.3199.click,click"><div id="bs-2"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-3200" logoText="blondsix" class="x-el x-el-h3 c1-1 c1-1v c1-24 c1-25 c1-2g c1-v c1-t c1-s c1-u c1-1m c1-1x c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-21 c1-1v c1-1w c1-4 c1-2j c1-2p c1-2d c1-2q c1-1x c1-2l c1-2m c1-2n c1-2o x-d-ux x-d-aid x-d-field-id x-d-field-route">blondsix</span></h3></div></a></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2v c1-13 c1-2y c1-2w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div></div></div></div></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-2z c1-l c1-b c1-c c1-30 c1-d c1-31 c1-e c1-32 c1-f c1-33 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-13 c1-2t c1-2u c1-34 c1-2h c1-4 c1-i c1-j c1-b c1-c c1-d c1-35 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-36 c1-37 c1-13 c1-2t c1-2u c1-38 c1-39 c1-y c1-3a c1-3b c1-3c c1-3d c1-3e c1-3f c1-3g c1-3h c1-b c1-c c1-3i c1-3j c1-3k c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-3r c1-3s c1-3t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" fontSizeMap="[object Object]" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-1v c1-24 c1-25 c1-2g c1-v c1-t c1-s c1-3u c1-1m c1-1p c1-1x c1-3v c1-3w c1-2k c1-3x c1-3y c1-p c1-3z c1-40 c1-41 x-d-ux x-d-aid x-d-route">Stay with us in comfort</h1><div id="bs-3"><div data-ux="Element" id="tagline-container-3201" class="x-el x-el-div c1-1 c1-2 c1-24 c1-25 c1-2g c1-o c1-b c1-c c1-d c1-2r c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" fontSizeMap="[object Object]" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-1v c1-24 c1-25 c1-2g c1-v c1-t c1-s c1-3u c1-42 c1-1w c1-4 c1-1m c1-c c1-1x c1-3v c1-2k c1-3x c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Stay with us in comfort</h1><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-3201" class="x-el x-el-span c1-1v c1-43 c1-44 c1-1p c1-45 c1-y c1-10 c1-3w c1-1x c1-3y c1-3z c1-40 c1-41 x-d-ux x-d-size x-d-scaler-id">Stay with us in comfort</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-3201" class="x-el x-el-span c1-1v c1-43 c1-44 c1-1p c1-45 c1-y c1-10 c1-2j c1-1x c1-2l c1-2m c1-2n c1-2o x-d-ux x-d-size x-d-scaler-id">Stay with us in comfort</span><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-3201" class="x-el x-el-span c1-1v c1-43 c1-44 c1-1p c1-45 c1-y c1-10 c1-46 c1-1x c1-47 c1-48 c1-49 c1-4a x-d-ux x-d-size x-d-scaler-id">Stay with us in comfort</span></div></div></div></div></div></div></div></div></div></section> </div></div></div><div id="50fdb3cf-37a9-4428-bc61-71b68331a9a5" class="widget widget-introduction widget-introduction-introduction-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-3c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-4b c1-4c c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="SplitLayout" data-aid="SPLIT_LAYOUT_RENDERED" class="x-el x-el-div x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-13 c1-4d c1-4e c1-4f c1-s c1-4g c1-4h c1-4i c1-b c1-c c1-4j c1-4k c1-4l c1-4m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-4o c1-1m c1-4p c1-4q c1-4r c1-4s c1-b c1-c c1-4t c1-4u c1-4v c1-4w c1-d c1-4x c1-4y c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4z c1-50 c1-q c1-b c1-c c1-d c1-51 c1-52 c1-e c1-f c1-g x-d-ux"><img src="//img1.wsimg.com/isteam/stock/kDWVQmq/:/" alt="image1" data-ux="Image" data-field-id="image" data-field-route="/imagePivot" data-aid="IMAGE_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1m c1-4 c1-1i c1-1j c1-s c1-u c1-53 c1-54 c1-x c1-55 c1-b c1-c c1-d c1-56 c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid"/></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-4o c1-1m c1-4p c1-4q c1-4r c1-4s c1-b c1-c c1-4t c1-4u c1-4v c1-4w c1-d c1-4x c1-4y c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="VerticalBox" class="x-el x-el-div x-el c1-1 c1-2 c1-x c1-57 c1-13 c1-2u c1-1c c1-1e c1-2h c1-58 c1-4r c1-b c1-c c1-59 c1-d c1-5a c1-5b c1-5c c1-5d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingAlpha" data-ux="HeadingMajor" data-route="sectionTitle" data-aid="SECTION_TITLE_RENDERED" class="x-el x-el-h2 c1-1 c1-1v c1-24 c1-25 c1-2g c1-v c1-t c1-s c1-u c1-2h c1-4p c1-5e c1-5f c1-5g c1-1x c1-5h c1-3w c1-2k c1-3y c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-3z c1-40 c1-41 x-d-ux x-d-route x-d-aid">Welcome</h2><div data-ux="HorizontalBox" class="x-el x-el-div x-el c1-1 c1-2 c1-r c1-4 c1-13 c1-2u c1-1c c1-5r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="BodyBeta" data-ux="Text" data-route="description" data-aid="DESCRIPTION_TEXT" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-s c1-u c1-1m c1-b c1-5t c1-46 c1-2k c1-47 c1-48 c1-49 c1-4a x-d-ux x-d-route x-d-aid x-rt"><p style="margin:0"><span class="x-el x-el-span c1-5z c1-60 c1-b c1-46 c1-47 c1-48 c1-49 c1-4a x-d-ux">Come to your best home away from home!</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-61 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><a typography="ButtonAlpha" data-ux="Button" data-aid="CTA_BUTTON_RENDERED" href="#" target="" data-tccl="ux2.INTRODUCTION.introduction1.Group.Default.Button.Default.3202.click,click" class="x-el x-el-a c1-62 c1-1v c1-63 c1-64 c1-65 c1-66 c1-37 c1-67 c1-1w c1-2h c1-23 c1-27 c1-25 c1-24 c1-1m c1-4 c1-q c1-l c1-b c1-68 c1-5v c1-18 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-5d c1-5b c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 x-d-ux x-d-aid x-d-tccl">Book Now</a></div></div></div></div></div></div></div></section> </div></div></div><div id="95ed44e7-9517-4b8c-ad78-eaa6c66a57d3" class="widget widget-about widget-about-about-8"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-30 c1-d c1-31 c1-e c1-32 c1-f c1-33 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-1v c1-24 c1-25 c1-74 c1-v c1-t c1-s c1-75 c1-3c c1-2h c1-1x c1-2j c1-5h c1-2k c1-76 c1-2l c1-5i c1-2m c1-2n c1-2o x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">About Us</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-13 c1-4d c1-4e c1-4f c1-s c1-4g c1-4h c1-4i c1-2u c1-b c1-c c1-4j c1-4k c1-4l c1-4m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-4o c1-1m c1-4p c1-4q c1-1o c1-4s c1-b c1-c c1-4t c1-4u c1-4v c1-4w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/0" index="0" id="95d898ca-04f3-4938-93a2-8d562806830d" class="x-el x-el-div x-el c1-1 c1-2 c1-13 c1-1e c1-2t c1-2h c1-77 c1-4 c1-78 c1-79 c1-7a c1-b c1-c c1-7b c1-7c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-62 c1-1v c1-24 c1-25 c1-7d c1-v c1-t c1-s c1-u c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route">Dining</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-s c1-u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-b c1-5t c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Enjoy a complimentary continental breakfast of pastries, cereal, and a variety of hot drinks. The lounge is available in the afternoon for guests to relax with a book, tea and coffee, and a variety of snacks.</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-4o c1-1m c1-4p c1-4q c1-1o c1-4s c1-b c1-c c1-86 c1-87 c1-4t c1-4u c1-4v c1-4w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/1" index="1" id="6e23164e-3696-407e-941e-8482311a75e5" class="x-el x-el-div x-el c1-1 c1-2 c1-13 c1-1e c1-2t c1-2h c1-77 c1-4 c1-78 c1-79 c1-7a c1-b c1-c c1-7b c1-7c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-62 c1-1v c1-24 c1-25 c1-7d c1-v c1-t c1-s c1-u c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route">Amenities</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-s c1-u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-b c1-5t c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>We offer a variety of amenities to make your stay with us as comfortable as possible. Cable is available in every room with the option of pay-per-view movies. We provide complimentary high-speed internet access.&nbsp;</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-4o c1-1m c1-4p c1-4q c1-1o c1-4s c1-b c1-c c1-86 c1-87 c1-4t c1-4u c1-4v c1-4w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/2" index="2" id="1154b1ad-ade7-4acd-8064-911397272054" class="x-el x-el-div x-el c1-1 c1-2 c1-13 c1-1e c1-2t c1-2h c1-77 c1-4 c1-78 c1-79 c1-7a c1-b c1-c c1-7b c1-7c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-62 c1-1v c1-24 c1-25 c1-7d c1-v c1-t c1-s c1-u c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route">100% Satisfaction Guaranteed</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-s c1-u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-b c1-5t c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Whether this is your first visit, or you have been a guest many times, we want your experience to be excellent. Our staff is always available to help with any questions or concerns you may have.&nbsp;</span></p></div></div></div></div></div></section> </div></div></div><div id="af209b6c-fd34-4f58-a4f4-592537ed6690" class="widget widget-gallery widget-gallery-gallery-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-30 c1-d c1-31 c1-e c1-32 c1-f c1-33 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-1 c1-1v c1-24 c1-25 c1-74 c1-v c1-t c1-s c1-75 c1-3c c1-2h c1-1x c1-2j c1-5h c1-2k c1-76 c1-2l c1-5i c1-2m c1-2n c1-2o x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Our Rooms</span></h2></div><div id="bs-4"><div style="width:1px;height:1px;visibility:hidden"></div></div></section> </div></div></div><div id="4b2c34bd-b245-4b48-b115-0f1e06c1cd42" class="widget widget-menu widget-menu-menu-3"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-30 c1-d c1-31 c1-e c1-32 c1-f c1-33 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="MENU_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-1 c1-1v c1-24 c1-25 c1-74 c1-v c1-t c1-s c1-75 c1-3c c1-2h c1-1x c1-2j c1-5h c1-2k c1-76 c1-2l c1-5i c1-2m c1-2n c1-2o x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Price List</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-13 c1-4d c1-4e c1-4f c1-s c1-4g c1-4h c1-4i c1-b c1-c c1-4j c1-4k c1-4l c1-4m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-4o c1-1m c1-4p c1-4q c1-4r c1-4s c1-b c1-c c1-4t c1-4u c1-4v c1-4w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Menu" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="MENU_CATEGORY_ROOMS" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div menu-category c1-1 c1-2 c1-4r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="menu" data-field-route="/menu/0" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-13 c1-4d c1-1e c1-4f c1-s c1-4g c1-88 c1-4i c1-b c1-c c1-4j c1-4k c1-89 c1-4m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-8a c1-1m c1-4p c1-4q c1-5f c1-4s c1-b c1-c c1-4t c1-4u c1-8b c1-4w c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-field-id="menu.category" data-field-route="/menu/0" data-aid="MENU_SECTION_TITLE_0" class="x-el x-el-h3 c1-1 c1-1v c1-24 c1-25 c1-7d c1-v c1-t c1-s c1-u c1-2h c1-1x c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o x-d-ux x-d-field-id x-d-field-route x-d-aid">Rooms</h3></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-8a c1-1m c1-4p c1-4q c1-5f c1-4s c1-8c c1-b c1-c c1-4t c1-4u c1-8b c1-4w c1-d c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="Details" data-field-id="menu.description" data-field-route="/menu/0" data-aid="MENU_SECTION_DESCRIPTION_0" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-s c1-u c1-2h c1-b c1-8d c1-69 c1-2k c1-6v c1-6y c1-72 c1-73 x-d-ux x-d-field-id x-d-field-route x-d-aid">See for yourself what makes our rooms second-to-none</p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="MENU_ITEM_GRID_0" class="x-el x-el-div c1-1 c1-2 c1-13 c1-4d c1-4e c1-4f c1-s c1-4g c1-4h c1-4i c1-b c1-c c1-4j c1-4k c1-4l c1-4m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-4o c1-8f c1-4p c1-4q c1-4r c1-4s c1-13 c1-2u c1-b c1-c c1-86 c1-87 c1-4t c1-4u c1-4v c1-4w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="MENU_ITEM_DOUBLEROOM" class="x-el x-el-div c1-1 c1-2 c1-8g c1-1m c1-8h c1-58 c1-4r c1-b c1-c c1-1z c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" data-field-id="menu.items" data-field-route="/menu/0/items/0" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div id="bs-5"><div style="margin-top:35%;display:none"></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4e c1-13 c1-8i c1-4 c1-s c1-4o c1-b c1-c c1-8j c1-8k c1-8l c1-8m c1-d c1-e c1-f c1-g x-d-ux"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-8n c1-b c1-c c1-8o c1-8p c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="menu.items.title" data-field-route="/menu/0/items/0" data-aid="MENU_SECTION0_ITEM0_TITLE" class="x-el x-el-h4 c1-62 c1-1v c1-24 c1-25 c1-7d c1-v c1-t c1-s c1-u c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid">Double Room</h4></span><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8q c1-8r c1-b c1-c c1-8s c1-8t c1-8u c1-4j c1-8v c1-d c1-e c1-f c1-g x-d-ux"><div typography="BodyAlpha" data-ux="Price" data-field-id="menu.items.price" data-field-route="/menu/0/items/0" data-aid="MENU_SECTION0_ITEM0_PRICE" class="x-el x-el-div c1-1 c1-2 c1-24 c1-25 c1-8w c1-s c1-u c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid">75/night</div></div></div><div typography="BodyAlpha" data-ux="Text" data-field-id="menu.items.description" data-field-route="/menu/0/items/0" data-aid="MENU_SECTION0_ITEM0_DESC" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-8x c1-u c1-b c1-5t c1-c c1-2k c1-8j c1-8k c1-8l c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid x-rt"><p style="margin:0"><span>Two double beds, cable television, full bath</span></p></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-4o c1-8f c1-4p c1-4q c1-4r c1-4s c1-13 c1-2u c1-b c1-c c1-86 c1-87 c1-4t c1-4u c1-4v c1-4w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="MENU_ITEM_QUEENROOM" class="x-el x-el-div c1-1 c1-2 c1-8g c1-1m c1-8h c1-58 c1-4r c1-b c1-c c1-1z c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" data-field-id="menu.items" data-field-route="/menu/0/items/1" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div id="bs-6"><div style="margin-top:35%;display:none"></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4e c1-13 c1-8i c1-4 c1-s c1-4o c1-b c1-c c1-8j c1-8k c1-8l c1-8m c1-d c1-e c1-f c1-g x-d-ux"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-8n c1-b c1-c c1-8o c1-8p c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="menu.items.title" data-field-route="/menu/0/items/1" data-aid="MENU_SECTION0_ITEM1_TITLE" class="x-el x-el-h4 c1-62 c1-1v c1-24 c1-25 c1-7d c1-v c1-t c1-s c1-u c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid">Queen Room</h4></span><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8q c1-8r c1-b c1-c c1-8s c1-8t c1-8u c1-4j c1-8v c1-d c1-e c1-f c1-g x-d-ux"><div typography="BodyAlpha" data-ux="Price" data-field-id="menu.items.price" data-field-route="/menu/0/items/1" data-aid="MENU_SECTION0_ITEM1_PRICE" class="x-el x-el-div c1-1 c1-2 c1-24 c1-25 c1-8w c1-s c1-u c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid">85/night</div></div></div><div typography="BodyAlpha" data-ux="Text" data-field-id="menu.items.description" data-field-route="/menu/0/items/1" data-aid="MENU_SECTION0_ITEM1_DESC" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-8x c1-u c1-b c1-5t c1-c c1-2k c1-8j c1-8k c1-8l c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid x-rt"><p style="margin:0"><span>One queen bed, cable television, full bath&nbsp;</span></p></div></div></div></div></div></div></div></div><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-8y c1-8z c1-90 c1-8q c1-75 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"/></div><div data-ux="Block" data-aid="MENU_CATEGORY_SUITES" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div menu-category c1-1 c1-2 c1-4r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="menu" data-field-route="/menu/1" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-13 c1-4d c1-1e c1-4f c1-s c1-4g c1-88 c1-4i c1-b c1-c c1-4j c1-4k c1-89 c1-4m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-8a c1-1m c1-4p c1-4q c1-5f c1-4s c1-b c1-c c1-4t c1-4u c1-8b c1-4w c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-field-id="menu.category" data-field-route="/menu/1" data-aid="MENU_SECTION_TITLE_1" class="x-el x-el-h3 c1-1 c1-1v c1-24 c1-25 c1-7d c1-v c1-t c1-s c1-u c1-2h c1-1x c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o x-d-ux x-d-field-id x-d-field-route x-d-aid">Suites</h3></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-8a c1-1m c1-4p c1-4q c1-5f c1-4s c1-8c c1-b c1-c c1-4t c1-4u c1-8b c1-4w c1-d c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="Details" data-field-id="menu.description" data-field-route="/menu/1" data-aid="MENU_SECTION_DESCRIPTION_1" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-s c1-u c1-2h c1-b c1-8d c1-69 c1-2k c1-6v c1-6y c1-72 c1-73 x-d-ux x-d-field-id x-d-field-route x-d-aid">Our suites offer breathtaking views of the city and world-class comfort</p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="MENU_ITEM_GRID_1" class="x-el x-el-div c1-1 c1-2 c1-13 c1-4d c1-4e c1-4f c1-s c1-4g c1-4h c1-4i c1-b c1-c c1-4j c1-4k c1-4l c1-4m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-4o c1-8f c1-4p c1-4q c1-4r c1-4s c1-13 c1-2u c1-b c1-c c1-86 c1-87 c1-4t c1-4u c1-4v c1-4w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="MENU_ITEM_BRIDALSUIT" class="x-el x-el-div c1-1 c1-2 c1-8g c1-1m c1-8h c1-58 c1-4r c1-b c1-c c1-1z c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" data-field-id="menu.items" data-field-route="/menu/1/items/0" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div id="bs-7"><div style="margin-top:35%;display:none"></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4e c1-13 c1-8i c1-4 c1-s c1-4o c1-b c1-c c1-8j c1-8k c1-8l c1-8m c1-d c1-e c1-f c1-g x-d-ux"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-8n c1-b c1-c c1-8o c1-8p c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="menu.items.title" data-field-route="/menu/1/items/0" data-aid="MENU_SECTION1_ITEM0_TITLE" class="x-el x-el-h4 c1-62 c1-1v c1-24 c1-25 c1-7d c1-v c1-t c1-s c1-u c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid">Bridal Suite</h4></span><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8q c1-8r c1-b c1-c c1-8s c1-8t c1-8u c1-4j c1-8v c1-d c1-e c1-f c1-g x-d-ux"><div typography="BodyAlpha" data-ux="Price" data-field-id="menu.items.price" data-field-route="/menu/1/items/0" data-aid="MENU_SECTION1_ITEM0_PRICE" class="x-el x-el-div c1-1 c1-2 c1-24 c1-25 c1-8w c1-s c1-u c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid">150/night</div></div></div><div typography="BodyAlpha" data-ux="Text" data-field-id="menu.items.description" data-field-route="/menu/1/items/0" data-aid="MENU_SECTION1_ITEM0_DESC" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-8x c1-u c1-b c1-5t c1-c c1-2k c1-8j c1-8k c1-8l c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid x-rt"><p style="margin:0"><span>King sized bed, kitchenette, cable television, full bath with hot tub, sitting room</span></p></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-4o c1-8f c1-4p c1-4q c1-4r c1-4s c1-13 c1-2u c1-b c1-c c1-86 c1-87 c1-4t c1-4u c1-4v c1-4w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="MENU_ITEM_MASTERSUIT" class="x-el x-el-div c1-1 c1-2 c1-8g c1-1m c1-8h c1-58 c1-4r c1-b c1-c c1-1z c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" data-field-id="menu.items" data-field-route="/menu/1/items/1" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div id="bs-8"><div style="margin-top:35%;display:none"></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4e c1-13 c1-8i c1-4 c1-s c1-4o c1-b c1-c c1-8j c1-8k c1-8l c1-8m c1-d c1-e c1-f c1-g x-d-ux"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-8n c1-b c1-c c1-8o c1-8p c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="menu.items.title" data-field-route="/menu/1/items/1" data-aid="MENU_SECTION1_ITEM1_TITLE" class="x-el x-el-h4 c1-62 c1-1v c1-24 c1-25 c1-7d c1-v c1-t c1-s c1-u c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid">Master Suite</h4></span><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8q c1-8r c1-b c1-c c1-8s c1-8t c1-8u c1-4j c1-8v c1-d c1-e c1-f c1-g x-d-ux"><div typography="BodyAlpha" data-ux="Price" data-field-id="menu.items.price" data-field-route="/menu/1/items/1" data-aid="MENU_SECTION1_ITEM1_PRICE" class="x-el x-el-div c1-1 c1-2 c1-24 c1-25 c1-8w c1-s c1-u c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid">125/night</div></div></div><div typography="BodyAlpha" data-ux="Text" data-field-id="menu.items.description" data-field-route="/menu/1/items/1" data-aid="MENU_SECTION1_ITEM1_DESC" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-8x c1-u c1-b c1-5t c1-c c1-2k c1-8j c1-8k c1-8l c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid x-rt"><p style="margin:0"><span>Two double beds, kitchenette, cable television, full bath, sitting room</span></p></div></div></div></div></div></div></div></div></div></div></div></div></div></section> </div></div></div><div id="fe87064c-d4dd-4411-9b8b-0b7378859adb" class="widget widget-subscribe widget-subscribe-subscribe-3"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="guacBg3203" role="img" data-ux="Background" data-aid="SECTION_BACKGROUND" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-91 c1-15 c1-16 c1-17 c1-92 c1-1a c1-93 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><section data-ux="SectionBanner" class="x-el x-el-section c1-1 c1-2 c1-1f c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-30 c1-d c1-31 c1-e c1-32 c1-f c1-33 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-94 c1-b c1-c c1-d c1-5n c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingAlpha" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-1v c1-24 c1-25 c1-2g c1-v c1-t c1-s c1-95 c1-2h c1-1x c1-96 c1-3w c1-2k c1-3y c1-3z c1-40 c1-41 x-d-ux x-d-aid x-d-route">Stay connected</h2><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="fe87064c-d4dd-4411-9b8b-0b7378859adb-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-13 c1-4d c1-4e c1-4f c1-s c1-4g c1-u c1-4i c1-b c1-c c1-4j c1-4k c1-89 c1-4m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-97 c1-1m c1-4p c1-4q c1-5f c1-4s c1-b c1-c c1-98 c1-99 c1-9a c1-4t c1-4u c1-8b c1-4w c1-d c1-9b c1-9c c1-9d c1-e c1-f c1-g x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-s c1-9e c1-2h c1-b c1-96 c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Be the first to hear about local events and new amenities.</p><form data-ux="Form" aria-live="polite" class="x-el x-el-form c1-1 c1-2 c1-u c1-13 c1-1e c1-2u c1-2t c1-2h c1-18 c1-b c1-c c1-d c1-9f c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c1-1 c1-2 c1-88 c1-4 c1-b c1-c c1-d c1-1d c1-9g c1-1u c1-5p c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c1-1 c1-2 c1-q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input3204" value="" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c1-1 c1-2 c1-9h c1-9i c1-4 c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-90 c1-b c1-96 c1-69 c1-2k c1-9s c1-6b c1-9t c1-9u c1-9v c1-9w c1-9x c1-9y c1-9z c1-a0 c1-6v c1-6y c1-72 c1-73 x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input3204" class="x-el x-el-label c1-1 c1-2 c1-24 c1-25 c1-y c1-a1 c1-a2 c1-a3 c1-a4 c1-b c1-96 c1-69 c1-2k c1-6v c1-6y c1-72 c1-73 x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-9g c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c1-62 c1-1v c1-63 c1-64 c1-65 c1-66 c1-37 c1-67 c1-1w c1-2h c1-23 c1-27 c1-25 c1-24 c1-1m c1-4 c1-q c1-l c1-b c1-a5 c1-5v c1-18 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-5d c1-5b c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 x-d-ux x-d-tccl x-d-aid">Subscribe</button></div></div></form></div></div></span></div></div></div></div></section><script>new guacImage('//img1.wsimg.com/isteam/stock/100939/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg3203'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%)"]})</script></div> </div></div></div><div id="71b222d9-678e-4db0-a8a4-865caf19cfee" class="widget widget-contact widget-contact-contact-5"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-30 c1-d c1-31 c1-e c1-32 c1-f c1-33 c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-13 c1-4d c1-4e c1-4f c1-s c1-4g c1-u c1-4i c1-b c1-c c1-4j c1-4k c1-89 c1-4m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-4o c1-1m c1-4p c1-4q c1-5f c1-4s c1-b c1-c c1-4t c1-4u c1-8b c1-4w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-13 c1-4d c1-4e c1-4f c1-s c1-4g c1-u c1-4i c1-b c1-c c1-4j c1-4k c1-89 c1-4m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-97 c1-1m c1-4p c1-4q c1-5f c1-4s c1-b c1-c c1-4t c1-4u c1-8b c1-4w c1-d c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-route="sectionTitle" data-aid="CONTACT_SECTION_TITLE_REND" class="x-el x-el-h2 c1-1 c1-1v c1-24 c1-25 c1-74 c1-v c1-t c1-s c1-75 c1-3c c1-2h c1-1x c1-2j c1-5h c1-2k c1-76 c1-2l c1-5i c1-2m c1-2n c1-2o x-d-ux x-d-route x-d-aid"><span data-ux="Element" class="">Contact Us</span></h2></div></div></div></div><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-13 c1-4d c1-4e c1-4f c1-s c1-4g c1-u c1-4i c1-2h c1-b c1-c c1-4j c1-4k c1-89 c1-4m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-97 c1-1m c1-4p c1-4q c1-5f c1-4s c1-b c1-c c1-98 c1-99 c1-9a c1-4t c1-4u c1-8b c1-4w c1-d c1-9b c1-9c c1-9d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-75 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-s c1-88 c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-b c1-5t c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Ready to book with us? Have a question about our rooms or services? We'll be happy to help!</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-75 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-62 c1-1v c1-24 c1-25 c1-7d c1-v c1-t c1-s c1-88 c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">blondsix</h4></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-a6 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-route="hoursTitle" data-aid="CONTACT_HOURS_TITLE_REND" data-field-route="/hours" class="x-el x-el-h4 c1-62 c1-1v c1-24 c1-25 c1-7d c1-v c1-t c1-s c1-88 c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid x-d-field-route">Front Desk Hours</h4><div typography="BodyAlpha" data-ux="ContentText" data-route="hoursCustomMessage" data-aid="CONTACT_HOURS_CUST_MSG_REND" data-field-route="/hours" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-s c1-u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-b c1-5t c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid x-d-field-route x-rt"><p style="margin:0"><span>6:30am - 5pm</span></p></div></div></div></div></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-13 c1-4d c1-4e c1-4f c1-s c1-4g c1-u c1-4i c1-2h c1-b c1-c c1-4j c1-4k c1-89 c1-4m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4d c1-34 c1-4n c1-97 c1-1m c1-4p c1-4q c1-5f c1-4s c1-b c1-c c1-98 c1-99 c1-9a c1-4t c1-4u c1-8b c1-4w c1-d c1-9b c1-9c c1-9d c1-e c1-f c1-g x-d-ux"><div><div id="71b222d9-678e-4db0-a8a4-865caf19cfee-bootstrap-container"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button typography="ButtonAlpha" data-ux="Button" data-aid="CONTACT_FORM_REVEAL_BUTTON_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-button c1-62 c1-1v c1-63 c1-64 c1-65 c1-66 c1-37 c1-67 c1-1w c1-2h c1-23 c1-27 c1-25 c1-24 c1-1m c1-4 c1-q c1-l c1-8e c1-b c1-68 c1-5v c1-18 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-5d c1-5b c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 x-d-ux x-d-aid x-d-route x-d-field-route" data-tccl="ux2.CONTACT.contact5.Content.Default.Button.Default.3205.click,click">Book Now</button><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-8e c1-1p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c1-62 c1-1v c1-24 c1-25 c1-7d c1-v c1-t c1-s c1-88 c1-b c1-5h c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route">Book Now</h4><form data-ux="Form" aria-live="polite" formFieldVariationOptions="[object Object]" formTitle="Book Now" formFields="[object Object],[object Object],[object Object],[object Object],[object Object]" formSubmitHost="https://contact.apps-api.instantpage.secureserver.net" recaptchaType="V3" domainName="blondsix.godaddysites.com" formSuccessMessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteId="9ea1c725-fea5-4309-be09-34b90e9c4560" pageId="ae140f98-d822-4141-8a04-51159dd0ed97" accountId="ba6b13c8-524b-11ea-81b4-3417ebe724ff" staticContent="[object Object]" emailOptInMessage="Sign up for our email list for updates, promotions, and more." emailConfirmationMessage="We&#x27;ve sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c1-1 c1-2 c1-u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><input type="text" name="_app_id" autoComplete="off" tabindex="-1" style="display:none" value=""/><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c1-1 c1-2 c1-q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input3206" value="" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c1-1 c1-2 c1-h c1-a7 c1-4 c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-90 c1-b c1-a8 c1-69 c1-2k c1-9s c1-6b c1-9t c1-9u c1-a9 c1-9w c1-9x c1-aa c1-9z c1-a0 c1-6v c1-6y c1-72 c1-73 x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input3206" class="x-el x-el-label c1-1 c1-2 c1-24 c1-25 c1-y c1-a1 c1-a2 c1-a3 c1-a4 c1-b c1-a8 c1-69 c1-2k c1-6v c1-6y c1-72 c1-73 x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c1-1 c1-2 c1-q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input3207" value="" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c1-1 c1-2 c1-h c1-a7 c1-4 c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-90 c1-b c1-a8 c1-69 c1-2k c1-9s c1-6b c1-9t c1-9u c1-a9 c1-9w c1-9x c1-aa c1-9z c1-a0 c1-6v c1-6y c1-72 c1-73 x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input3207" class="x-el x-el-label c1-1 c1-2 c1-24 c1-25 c1-y c1-a1 c1-a2 c1-a3 c1-a4 c1-b c1-a8 c1-69 c1-2k c1-6v c1-6y c1-72 c1-73 x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="Your Travel Dates" class="x-el x-el-div c1-1 c1-2 c1-q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input3208" value="" data-aid="Your Travel Dates" class="x-el x-el-input c1-1 c1-2 c1-h c1-a7 c1-4 c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-90 c1-b c1-a8 c1-69 c1-2k c1-9s c1-6b c1-9t c1-9u c1-a9 c1-9w c1-9x c1-aa c1-9z c1-a0 c1-6v c1-6y c1-72 c1-73 x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input3208" class="x-el x-el-label c1-1 c1-2 c1-24 c1-25 c1-y c1-a1 c1-a2 c1-a3 c1-a4 c1-b c1-a8 c1-69 c1-2k c1-6v c1-6y c1-72 c1-73 x-d-ux">Your Travel Dates</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="5" aria-label="Tell us more about your desired accommodations." data-ux="InputTextArea" placeholder="Tell us more about your desired accommodations." data-aid="Tell us more about your desired accommodations." class="x-el x-el-textarea c1-1 c1-2 c1-h c1-a7 c1-4 c1-9j c1-9k c1-9l c1-9m c1-1o c1-9o c1-9p c1-1n c1-9r c1-90 c1-ab c1-b c1-a8 c1-69 c1-2k c1-9s c1-6b c1-9z c1-a0 c1-6v c1-6y c1-72 c1-73 x-d-ux x-d-aid"></textarea></div></div><div style="width:1px;height:1px;visibility:hidden"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/4" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="ButtonFullWidth" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c1-62 c1-1v c1-63 c1-64 c1-65 c1-66 c1-37 c1-67 c1-1w c1-2h c1-23 c1-27 c1-25 c1-24 c1-1m c1-4 c1-q c1-l c1-b c1-68 c1-5v c1-18 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-30 c1-6v c1-6w c1-6x c1-5d c1-5b c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div><div data-ux="Block" class="x-el x-el-div controls c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="CONTACT_CANCEL_BUTTON_REND" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-s c1-u c1-ac c1-5y c1-2c c1-2h c1-1j c1-1i c1-b c1-c c1-2k c1-ad c1-d c1-e c1-f c1-g x-d-ux x-d-aid">Cancel</p></div></form></div></div></div></div></div></div></div></div></section> </div></div></div><div id="c94a862f-1e5f-4425-92cc-302ee7397cd0" class="widget widget-footer widget-footer-footer-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-37 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-37 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-30 c1-d c1-31 c1-e c1-32 c1-f c1-33 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-2h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-s c1-88 c1-b c1-ae c1-69 c1-2k c1-6v c1-6y c1-72 c1-73 x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 blondsix - All Rights Reserved.</span></p></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-2h c1-61 c1-b c1-c c1-30 c1-d c1-31 c1-e c1-32 c1-f c1-33 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-af c1-4p c1-5e c1-5f c1-5g c1-s c1-t c1-u c1-v c1-b c1-c c1-ag c1-8m c1-d c1-e c1-f c1-g x-d-ux"></ul></div><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-ah c1-8z c1-90 c1-s c1-88 c1-ai c1-1i c1-1j c1-3e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"/><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-5s c1-s c1-u c1-b c1-ae c1-69 c1-2k c1-6v c1-6y c1-72 c1-73 x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-b c1-3v c1-69 c1-2d c1-aj c1-ak c1-6v c1-6y c1-72 c1-73 x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer1.Layout.Default.Link.Default.3209.click,click">Website Builder</a></span></p></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.71.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/709f0559ff4933e6/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1d60b452de0e239d/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","fonts":["fjalla-one","default",""],"colors":["#d4dbea"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"ae140f98-d822-4141-8a04-51159dd0ed97":{"isFlyoutMenu":false,"active":true,"pageId":"ae140f98-d822-4141-8a04-51159dd0ed97","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme19"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"textAlign":"center"},"logo":{"logoText":"blondsix"},"fontPackLogoId":null,"widgetId":"1a1f5948-9740-495b-a9c5-d5e44f43c368","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"1a1f5948-9740-495b-a9c5-d5e44f43c368","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"blondsix"},"fontPackLogoId":null,"widgetId":"1a1f5948-9740-495b-a9c5-d5e44f43c368","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"1a1f5948-9740-495b-a9c5-d5e44f43c368","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e374870201fcd502/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","style":{"maxWidth":"100%","lineHeight":"1.2","marginBottom":"xsmall"},"children":"Stay with us in comfort","scaledFontSizes":["xxlarge","xlarge","large"],"noWrapper":true,"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"1a1f5948-9740-495b-a9c5-d5e44f43c368","section":"default","category":"primary","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"1a1f5948-9740-495b-a9c5-d5e44f43c368","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/f09c859d00cd73c2/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/9ea1c725-fea5-4309-be09-34b90e9c4560/gpub/65caaabb0c9baec7/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/28e0330c74f21f37/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-5',componentName:'ImagePlaceholder',props:props,context:context,contextKey:'context-bs-1'});
})({"data-aid":"MENU_SECTION0_ITEM0_IMAGE_PLACEHOLDER","itemIndex":0,"items":[{"title":"Double Room","description":"Two double beds, cable television, full bath","price":"75\u002Fnight","id":"004d7845-6f4e-4153-9ada-28024d42d6e8"},{"title":"Queen Room","description":"One queen bed, cable television, full bath ","price":"85\u002Fnight","id":"ed2311b3-b9b4-4f3f-a39c-d41ef07abda1"}],"widgetId":"4b2c34bd-b245-4b48-b115-0f1e06c1cd42","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"4b2c34bd-b245-4b48-b115-0f1e06c1cd42","widgetType":"MENU","widgetPreset":"menu3","order":3,"section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Menu","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-6',componentName:'ImagePlaceholder',props:props,context:context,contextKey:'context-bs-1'});
})({"data-aid":"MENU_SECTION0_ITEM1_IMAGE_PLACEHOLDER","itemIndex":1,"items":[{"title":"Double Room","description":"Two double beds, cable television, full bath","price":"75\u002Fnight","id":"004d7845-6f4e-4153-9ada-28024d42d6e8"},{"title":"Queen Room","description":"One queen bed, cable television, full bath ","price":"85\u002Fnight","id":"ed2311b3-b9b4-4f3f-a39c-d41ef07abda1"}],"widgetId":"4b2c34bd-b245-4b48-b115-0f1e06c1cd42","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"4b2c34bd-b245-4b48-b115-0f1e06c1cd42","widgetType":"MENU","widgetPreset":"menu3","order":3,"section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Menu","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-7',componentName:'ImagePlaceholder',props:props,context:context,contextKey:'context-bs-1'});
})({"data-aid":"MENU_SECTION1_ITEM0_IMAGE_PLACEHOLDER","itemIndex":0,"items":[{"title":"Bridal Suite","description":"King sized bed, kitchenette, cable television, full bath with hot tub, sitting room","price":"150\u002Fnight","id":"3c9596a5-b025-4547-8de2-78b093e7a627"},{"title":"Master Suite","description":"Two double beds, kitchenette, cable television, full bath, sitting room","price":"125\u002Fnight","id":"e3aed43b-58a2-463f-951e-de79841ebd8b"}],"widgetId":"4b2c34bd-b245-4b48-b115-0f1e06c1cd42","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"4b2c34bd-b245-4b48-b115-0f1e06c1cd42","widgetType":"MENU","widgetPreset":"menu3","order":3,"section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Menu","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-8',componentName:'ImagePlaceholder',props:props,context:context,contextKey:'context-bs-1'});
})({"data-aid":"MENU_SECTION1_ITEM1_IMAGE_PLACEHOLDER","itemIndex":1,"items":[{"title":"Bridal Suite","description":"King sized bed, kitchenette, cable television, full bath with hot tub, sitting room","price":"150\u002Fnight","id":"3c9596a5-b025-4547-8de2-78b093e7a627"},{"title":"Master Suite","description":"Two double beds, kitchenette, cable television, full bath, sitting room","price":"125\u002Fnight","id":"e3aed43b-58a2-463f-951e-de79841ebd8b"}],"widgetId":"4b2c34bd-b245-4b48-b115-0f1e06c1cd42","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"4b2c34bd-b245-4b48-b115-0f1e06c1cd42","widgetType":"MENU","widgetPreset":"menu3","order":3,"section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Menu","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9eeddcbe4280d360/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/9ea1c725-fea5-4309-be09-34b90e9c4560/gpub/ef2ddf5bdd1d780c/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/b74e7c10aa82f87b/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/9ea1c725-fea5-4309-be09-34b90e9c4560/gpub/ed6616d26d77715d/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-3192').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"9ea1c725-fea5-4309-be09-34b90e9c4560"}),_trfd.push({"pd":"2020-02-18T12:40:38.737Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
