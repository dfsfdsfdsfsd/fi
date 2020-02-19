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
















<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>tidyaccess</title><meta name="author" content="tidyaccess"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://tidyaccess.appspot.com/"/>
<meta property="og:site_name" content="tidyaccess"/>
<meta property="og:title" content="Where Sand Meets Sea"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/D1roeoa"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="tidyaccess"/>
<meta name="twitter:description" content="Where Sand Meets Sea"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/D1roeoa"/>
<meta name="twitter:image:alt" content="tidyaccess"/>
<meta name="theme-color" content="#f5f4ec"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
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
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/a9a4d17e-dd1d-4665-8725-6700c01d1db4/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/a9a4d17e-dd1d-4665-8725-6700c01d1db4/gpub/aeef3881f32a4b81/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-m{padding-top:40px}}@media (max-width: 767px){.x .c1-n{padding-bottom:40px}}@media (max-width: 767px){.x .c1-1z{width:100%}}@media (max-width: 767px){.x .c1-3o{width:250px}}@media (max-width: 767px){.x .c1-3p{height:250px}}@media (max-width: 767px){.x .c1-3q{padding-top:24px}}@media (max-width: 767px){.x .c1-3r{padding-right:24px}}@media (max-width: 767px){.x .c1-3s{padding-bottom:24px}}@media (max-width: 767px){.x .c1-3t{padding-left:24px}}@media (max-width: 767px){.x .c1-5q > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-5r  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-8q{display:flex}}@media (max-width: 767px){.x .c1-8r{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/a9a4d17e-dd1d-4665-8725-6700c01d1db4/gpub/aefb50f7a9cd3820/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/a9a4d17e-dd1d-4665-8725-6700c01d1db4/gpub/70485d25bf96eb2c/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-2n{font-size:32px}}@media (min-width: 1280px){.x .c1-32{width:1160px}}@media (min-width: 1280px){.x .c1-40{font-size:44px}}@media (min-width: 1280px){.x .c1-49{font-size:22px}}@media (min-width: 1280px){.x .c1-5h{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-2o{font-size:36px}}@media (min-width: 1536px){.x .c1-33{width:1280px}}@media (min-width: 1536px){.x .c1-41{font-size:48px}}@media (min-width: 1536px){.x .c1-4a{font-size:24px}}@media (min-width: 1536px){.x .c1-5i{font-size:16px}}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(245, 244, 236); min-height: 100vh; }</style></head>
<body class="x  x-fonts-fjalla-one" context="[object Object]"><div id="layout-a-9-a-4-d-17-e-dd-1-d-4665-8725-6700-c-01-d-1-db-4" class="layout layout-layout layout-layout-layout-19 locale-en-US lang-en"><div data-ux="Page" id="page-8854" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="13652882-4b9f-4b26-b263-1c3061a83f7f" class="widget widget-header widget-header-header-9"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-h c1-i c1-j c1-k c1-l c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-o c1-b c1-c c1-d c1-p c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-q c1-4 c1-r c1-s c1-t c1-u c1-v c1-b c1-c c1-d c1-w c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-x c1-4 c1-y c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg8856" role="img" data-guac-image="loading" data-ux="Background" data-aid="BACKGROUND_IMAGE_RENDERED" data-field-id="background" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-14 c1-15 c1-16 c1-17 c1-18 c1-q c1-4 c1-19 c1-1a c1-1b c1-b c1-c c1-d c1-w c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-aid x-d-field-id"><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/D1roeoa/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg8856'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-13 c1-1c c1-q c1-b c1-c c1-d c1-1d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-13 c1-1e c1-19 c1-4 c1-1f c1-b c1-c c1-d c1-w c1-1d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1g c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1h c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-1o c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-1p c1-b c1-c c1-d c1-1q c1-1r c1-1s c1-1t c1-1u c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1v c1-1w c1-1x c1-1m c1-4 c1-1y c1-s c1-1j c1-u c1-1i c1-c c1-1z c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="88bedb1c-d434-4a20-8d61-c9fc029034da" title="tidyaccess" href="/" class="x-el x-el-a c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-b c1-2c c1-c c1-2d c1-2e c1-2f c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.8859.click,click"><div id="bs-1"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-8860" logoText="tidyaccess" class="x-el x-el-h3 c1-1 c1-1v c1-24 c1-25 c1-2g c1-v c1-t c1-s c1-u c1-1m c1-2h c1-1x c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-21 c1-1v c1-1w c1-4 c1-2j c1-2p c1-2d c1-2q c1-1x c1-2l c1-2m c1-2n c1-2o x-d-ux x-d-aid x-d-field-id x-d-field-route">tidyaccess</span></h3></div></a></div></nav><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-2r c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2s c1-4 c1-13 c1-2t c1-2h c1-2u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2v c1-2w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2x c1-2h c1-2w c1-13 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1v c1-1w c1-1x c1-1m c1-c c1-1z c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="88bedb1c-d434-4a20-8d61-c9fc029034da" title="tidyaccess" href="/" class="x-el x-el-a c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-b c1-2c c1-c c1-2d c1-2e c1-2f c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.8861.click,click"><div id="bs-2"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-8862" logoText="tidyaccess" class="x-el x-el-h3 c1-1 c1-1v c1-24 c1-25 c1-2g c1-v c1-t c1-s c1-u c1-1m c1-1x c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-21 c1-1v c1-1w c1-4 c1-2j c1-2p c1-2d c1-2q c1-1x c1-2l c1-2m c1-2n c1-2o x-d-ux x-d-aid x-d-field-id x-d-field-route">tidyaccess</span></h3></div></a></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2v c1-13 c1-2y c1-2w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div></div></div></div></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-2z c1-l c1-b c1-c c1-30 c1-d c1-31 c1-e c1-32 c1-f c1-33 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-13 c1-2t c1-2u c1-34 c1-2h c1-4 c1-i c1-j c1-b c1-c c1-d c1-35 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-36 c1-37 c1-13 c1-2t c1-2u c1-38 c1-39 c1-y c1-3a c1-3b c1-3c c1-3d c1-3e c1-3f c1-3g c1-3h c1-b c1-c c1-3i c1-3j c1-3k c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-3r c1-3s c1-3t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" fontSizeMap="[object Object]" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-1v c1-24 c1-25 c1-2g c1-v c1-t c1-s c1-3u c1-1m c1-1p c1-1x c1-3v c1-3w c1-2k c1-3x c1-3y c1-p c1-3z c1-40 c1-41 x-d-ux x-d-aid x-d-route">Where Sand Meets Sea</h1><div id="bs-3"><div data-ux="Element" id="tagline-container-8863" class="x-el x-el-div c1-1 c1-2 c1-24 c1-25 c1-2g c1-o c1-b c1-c c1-d c1-2r c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" fontSizeMap="[object Object]" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-1v c1-24 c1-25 c1-2g c1-v c1-t c1-s c1-3u c1-42 c1-1w c1-4 c1-1m c1-c c1-1x c1-3v c1-2k c1-3x c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Where Sand Meets Sea</h1><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-8863" class="x-el x-el-span c1-1v c1-43 c1-44 c1-1p c1-45 c1-y c1-10 c1-3w c1-1x c1-3y c1-3z c1-40 c1-41 x-d-ux x-d-size x-d-scaler-id">Where Sand Meets Sea</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-8863" class="x-el x-el-span c1-1v c1-43 c1-44 c1-1p c1-45 c1-y c1-10 c1-2j c1-1x c1-2l c1-2m c1-2n c1-2o x-d-ux x-d-size x-d-scaler-id">Where Sand Meets Sea</span><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-8863" class="x-el x-el-span c1-1v c1-43 c1-44 c1-1p c1-45 c1-y c1-10 c1-46 c1-1x c1-47 c1-48 c1-49 c1-4a x-d-ux x-d-size x-d-scaler-id">Where Sand Meets Sea</span></div></div><div id="bs-4" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="/#288821a7-b371-46b8-a707-caf5795def8b" target="" data-tccl="ux2.header.cta_button.click,click" data-page="88bedb1c-d434-4a20-8d61-c9fc029034da" data-section-jump="288821a7-b371-46b8-a707-caf5795def8b" class="x-el x-el-a c1-4b c1-1v c1-4c c1-4d c1-4e c1-4f c1-4g c1-4h c1-1w c1-2h c1-23 c1-27 c1-25 c1-24 c1-1m c1-4i c1-q c1-l c1-4j c1-b c1-4k c1-4l c1-18 c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Visit Us</a></div></div></div></div></div></div></div></div></section> </div></div></div><div id="5834a554-d5be-4b01-b7bd-3c65a2cddd17" class="widget widget-about widget-about-about-6"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-30 c1-d c1-31 c1-e c1-32 c1-f c1-33 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-1v c1-24 c1-25 c1-5j c1-v c1-t c1-s c1-5k c1-3c c1-2h c1-1x c1-2j c1-5l c1-2k c1-5m c1-2l c1-5n c1-2m c1-2n c1-2o x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">About Us</span></h2><div data-ux="ContentCards" class="x-el x-el-div x-el c1-1 c1-2 c1-2h c1-5o c1-5p c1-v c1-t c1-b c1-c c1-5q c1-5r c1-5s c1-5t c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-13 c1-5u c1-5v c1-5w c1-s c1-5x c1-5y c1-5z c1-b c1-c c1-60 c1-61 c1-62 c1-63 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-5u c1-34 c1-64 c1-65 c1-1m c1-66 c1-67 c1-68 c1-69 c1-13 c1-6a c1-5p c1-b c1-c c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-d c1-6h c1-6i c1-e c1-f c1-g x-d-ux"><div id="guacBg8864" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/0" index="0" treatmentData="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-13 c1-1e c1-2t c1-2h c1-5o c1-4 c1-6j c1-6k c1-6l c1-x c1-15 c1-3h c1-3f c1-6m c1-6n c1-6o c1-6p c1-6q c1-34 c1-b c1-c c1-5q c1-5r c1-d c1-6r c1-6s c1-6t c1-6u c1-6v c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-14 c1-15 c1-16 c1-17 c1-18 c1-1a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h3 c1-1 c1-1v c1-24 c1-25 c1-6w c1-v c1-t c1-s c1-u c1-1x c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o x-d-ux x-d-aid x-d-field-id x-d-field-route">Lifeguard Hours</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-6w c1-s c1-u c1-34 c1-18 c1-b c1-5l c1-46 c1-2k c1-47 c1-48 c1-49 c1-4a x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors about when there are lifeguards working at this beach.</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-5u c1-34 c1-64 c1-65 c1-1m c1-66 c1-67 c1-68 c1-69 c1-13 c1-6a c1-5p c1-b c1-c c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-d c1-6h c1-6i c1-e c1-f c1-g x-d-ux"><div id="guacBg8865" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/1" index="1" treatmentData="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-13 c1-1e c1-2t c1-2h c1-5o c1-4 c1-6j c1-6k c1-6l c1-x c1-15 c1-3h c1-3f c1-6m c1-6n c1-6o c1-6p c1-6q c1-34 c1-b c1-c c1-5q c1-5r c1-d c1-6r c1-6s c1-6t c1-6u c1-6v c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-14 c1-15 c1-16 c1-17 c1-18 c1-1a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h3 c1-1 c1-1v c1-24 c1-25 c1-6w c1-v c1-t c1-s c1-u c1-1x c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o x-d-ux x-d-aid x-d-field-id x-d-field-route">Nearby Attractions</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-6w c1-s c1-u c1-34 c1-18 c1-b c1-5l c1-46 c1-2k c1-47 c1-48 c1-49 c1-4a x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors about things to do near the beach.</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-5u c1-34 c1-64 c1-65 c1-1m c1-66 c1-67 c1-68 c1-69 c1-13 c1-6a c1-5p c1-b c1-c c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-d c1-6h c1-6i c1-e c1-f c1-g x-d-ux"><div id="guacBg8866" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/2" index="2" treatmentData="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-13 c1-1e c1-2t c1-2h c1-5o c1-4 c1-6j c1-6k c1-6l c1-x c1-15 c1-3h c1-3f c1-6m c1-6n c1-6o c1-6p c1-71 c1-34 c1-b c1-c c1-5q c1-5r c1-d c1-72 c1-6s c1-73 c1-6u c1-74 c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-14 c1-15 c1-16 c1-17 c1-18 c1-1a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h3 c1-1 c1-1v c1-24 c1-25 c1-6w c1-v c1-t c1-s c1-u c1-1x c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o x-d-ux x-d-aid x-d-field-id x-d-field-route">Beach Rules</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-6w c1-s c1-u c1-34 c1-18 c1-b c1-5l c1-46 c1-2k c1-47 c1-48 c1-49 c1-4a x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors about any rules or regulations at this beach.</span></p></div></div></div></div></div></section> </div></div></div><div id="288821a7-b371-46b8-a707-caf5795def8b" class="widget widget-contact widget-contact-contact-8"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-q c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-30 c1-d c1-31 c1-e c1-32 c1-f c1-33 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-1v c1-24 c1-25 c1-5j c1-v c1-t c1-s c1-5k c1-3c c1-2h c1-1x c1-2j c1-5l c1-2k c1-5m c1-2l c1-5n c1-2m c1-2n c1-2o x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Contact Us</span></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-13 c1-5u c1-5v c1-5w c1-s c1-5x c1-5y c1-5z c1-b c1-c c1-60 c1-61 c1-62 c1-63 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-5u c1-34 c1-64 c1-75 c1-1m c1-66 c1-67 c1-76 c1-69 c1-b c1-c c1-77 c1-78 c1-79 c1-6d c1-7a c1-7b c1-7c c1-d c1-7d c1-7e c1-7f c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-7g c1-2h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-5k c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-7h c1-s c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-b c1-8b c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Do you have questions about beach conditions or usage restrictions? Do you have something to report?&nbsp;</span></p><p style="margin:0"><span><br></span></p><p style="margin:0"><span>Send us a message, and we will get back to you soon!</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-4b c1-1v c1-24 c1-25 c1-6w c1-v c1-t c1-s c1-7i c1-b c1-5l c1-c c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">tidyaccess</h4></div></div></div></div></div></div></section> </div></div></div><div id="9a8ecd6b-b273-430f-8196-1a68fd57e65f" class="widget widget-footer widget-footer-footer-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-37 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-37 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-30 c1-d c1-31 c1-e c1-32 c1-f c1-33 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-13 c1-5u c1-5v c1-5w c1-s c1-t c1-u c1-v c1-2t c1-2h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-5u c1-8c c1-64 c1-65 c1-1m c1-66 c1-8d c1-68 c1-8e c1-b c1-c c1-d c1-8f c1-8g c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-7h c1-s c1-u c1-b c1-8h c1-4m c1-2k c1-58 c1-8i c1-5d c1-5h c1-5i x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 tidyaccess - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-5u c1-8c c1-64 c1-65 c1-1m c1-66 c1-8d c1-68 c1-8e c1-b c1-c c1-d c1-8f c1-8g c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-24 c1-25 c1-7h c1-8j c1-u c1-b c1-8h c1-4m c1-2k c1-58 c1-8k c1-8l c1-5d c1-5h c1-5i x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-8j c1-b c1-3v c1-4m c1-2d c1-8m c1-8n c1-58 c1-8k c1-8l c1-5d c1-5h c1-5i x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer2.Layout.Default.Link.Default.8867.click,click">Website Builder</a></span></p></div></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-1m c1-2h c1-8o c1-b c1-c c1-30 c1-d c1-31 c1-e c1-32 c1-f c1-33 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-8p c1-66 c1-8d c1-68 c1-8e c1-s c1-t c1-u c1-v c1-b c1-c c1-8q c1-8r c1-d c1-e c1-f c1-g x-d-ux"></ul></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.71.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/709f0559ff4933e6/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1d60b452de0e239d/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","fonts":["fjalla-one","default",""],"colors":["#f5f4ec"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"88bedb1c-d434-4a20-8d61-c9fc029034da":{"isFlyoutMenu":false,"active":true,"pageId":"88bedb1c-d434-4a20-8d61-c9fc029034da","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme19"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"textAlign":"center"},"logo":{"logoText":"tidyaccess"},"fontPackLogoId":null,"widgetId":"13652882-4b9f-4b26-b263-1c3061a83f7f","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"13652882-4b9f-4b26-b263-1c3061a83f7f","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"tidyaccess"},"fontPackLogoId":null,"widgetId":"13652882-4b9f-4b26-b263-1c3061a83f7f","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"13652882-4b9f-4b26-b263-1c3061a83f7f","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e374870201fcd502/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","style":{"maxWidth":"100%","lineHeight":"1.2","marginBottom":"xsmall"},"children":"Where Sand Meets Sea","scaledFontSizes":["xxlarge","xlarge","large"],"noWrapper":true,"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"13652882-4b9f-4b26-b263-1c3061a83f7f","section":"default","category":"primary","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"13652882-4b9f-4b26-b263-1c3061a83f7f","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Visit Us","pageId":"88bedb1c-d434-4a20-8d61-c9fc029034da","widgetId":"288821a7-b371-46b8-a707-caf5795def8b"},"data-aid":"HEADER_CTA_BTN","data-field-id":"ctaButton","data-field-route":"\u002FctaButton","style":{"marginTop":"xsmall","width":"auto","maxWidth":"100%"},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"13652882-4b9f-4b26-b263-1c3061a83f7f","section":"default","category":"primary","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"13652882-4b9f-4b26-b263-1c3061a83f7f","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript">document.getElementById('page-8854').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"a9a4d17e-dd1d-4665-8725-6700c01d1db4"}),_trfd.push({"pd":"2020-02-19T12:32:55.815Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
