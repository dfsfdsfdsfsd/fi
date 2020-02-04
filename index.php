<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader.php';

$campaign_id = 'e810fm';

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




<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>crystalized</title><meta name="author" content="crystalized"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://crystalized.appspot.com/"/>
<meta property="og:site_name" content="crystalized"/>
<meta property="og:title" content="Welcome to crystalized"/>
<meta property="og:type" content="website"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="crystalized"/>
<meta name="twitter:description" content="Welcome to crystalized"/>
<meta name="theme-color" content="#02537E"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
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
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
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
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
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
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
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
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
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
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
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
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
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
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/cd4eeb33-22a9-42b2-9d2b-ddc249d1c541/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/cd4eeb33-22a9-42b2-9d2b-ddc249d1c541/gpub/1bfdaa8e6c0db81b/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-l{padding-top:40px}}@media (max-width: 767px){.x .c1-m{padding-bottom:40px}}@media (max-width: 767px){.x .c1-1b{width:100%}}@media (max-width: 767px){.x .c1-2p{padding-left:24px}}@media (max-width: 767px){.x .c1-2q{padding-right:24px}}@media (max-width: 767px){.x .c1-50 > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-51  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-8y{display:flex}}@media (max-width: 767px){.x .c1-8z{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/cd4eeb33-22a9-42b2-9d2b-ddc249d1c541/gpub/59edb850ff0dddc7/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/cd4eeb33-22a9-42b2-9d2b-ddc249d1c541/gpub/21f60bb8ff4b2770/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-16{width:1160px}}@media (min-width: 1280px){.x .c1-25{font-size:32px}}@media (min-width: 1280px){.x .c1-38{font-size:44px}}@media (min-width: 1280px){.x .c1-3k{font-size:22px}}@media (min-width: 1280px){.x .c1-8u{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-17{width:1280px}}@media (min-width: 1536px){.x .c1-26{font-size:36px}}@media (min-width: 1536px){.x .c1-39{font-size:48px}}@media (min-width: 1536px){.x .c1-3l{font-size:24px}}@media (min-width: 1536px){.x .c1-8v{font-size:16px}}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style></head>
<body class="x  x-fonts-fjalla-one" context="[object Object]"><div id="layout-cd-4-eeb-33-22-a-9-42-b-2-9-d-2-b-ddc-249-d-1-c-541" class="layout layout-layout layout-layout-layout-12 locale-en-US lang-en"><div data-ux="Page" id="page-4834" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58" class="widget widget-header widget-header-header-9"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-j c1-k c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-n c1-b c1-c c1-d c1-o c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-u c1-v c1-w c1-x c1-y c1-z c1-10 c1-b c1-c c1-11 c1-d c1-12 c1-13 c1-14 c1-15 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-18 c1-19 c1-1a c1-t c1-c c1-1b c1-1c c1-d c1-1d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="3ae29ff7-5d1d-4ed7-9e35-6520b7cbe3b2" title="crystalized" href="/" class="x-el x-el-a c1-1e c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-1o c1-b c1-1p c1-c c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.4836.click,click"><div id="bs-1"><h3 typography="HeadingEpsilon" data-ux="LogoHeading" id="logo-container-4837" logoText="crystalized" class="x-el x-el-h3 c1-1 c1-18 c1-1h c1-1i c1-1t c1-1u c1-1v c1-1w c1-1x c1-t c1-1y c1-1a c1-1p c1-1z c1-20 c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-1e c1-18 c1-19 c1-4 c1-1z c1-27 c1-1q c1-28 c1-1a c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-aid x-d-field-id x-d-field-route">crystalized</span></h3></div></a></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-29 c1-10 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg4838" role="img" data-guac-image="loading" data-ux="Background" data-aid="BACKGROUND_IMAGE_RENDERED" data-field-id="background" overlay="none" treatment="Fill" data-ht="Fill" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-2a c1-2b c1-2c c1-2d c1-2e c1-u c1-v c1-2f c1-2g c1-2h c1-2i c1-b c1-c c1-d c1-2j c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-aid x-d-field-id x-d-ht"><div data-ux="Block" id="header_parallax4839" class="x-el x-el-div c1-1 c1-2 c1-4 c1-10 c1-2k c1-w c1-v c1-x c1-1w c1-1x c1-b c1-c c1-d c1-2l c1-23 c1-2m c1-e c1-f c1-g x-d-ux"><div id="bs-2"></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1u c1-1v c1-r c1-s c1-t c1-2n c1-2o c1-b c1-c c1-1b c1-2p c1-2q c1-l c1-11 c1-d c1-12 c1-2m c1-15 c1-2r c1-2s c1-2t c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-u c1-x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-u c1-v c1-x c1-w c1-y c1-z c1-2u c1-2v c1-1y c1-2w c1-b c1-c c1-4 c1-2x c1-2y c1-2z c1-d c1-30 c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1u c1-1v c1-31 c1-32 c1-t c1-33 c1-b c1-c c1-11 c1-d c1-12 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-18 c1-1h c1-1i c1-1t c1-1u c1-1v c1-1w c1-1x c1-t c1-2k c1-1a c1-34 c1-35 c1-20 c1-36 c1-o c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-route">Welcome to crystalized</h1><div id="bs-3"><div data-ux="Element" id="tagline-container-4840" class="x-el x-el-div c1-1 c1-2 c1-1h c1-1i c1-1t c1-n c1-b c1-c c1-d c1-3a c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-18 c1-1h c1-1i c1-1t c1-1u c1-1v c1-1w c1-1x c1-3b c1-t c1-19 c1-4 c1-c c1-1a c1-34 c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Welcome to crystalized</h1><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-4840" class="x-el x-el-span c1-18 c1-3c c1-3d c1-2k c1-3e c1-3f c1-3g c1-35 c1-1a c1-36 c1-37 c1-38 c1-39 x-d-ux x-d-size x-d-scaler-id">Welcome to crystalized</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-4840" class="x-el x-el-span c1-18 c1-3c c1-3d c1-2k c1-3e c1-3f c1-3g c1-1z c1-1a c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-size x-d-scaler-id">Welcome to crystalized</span><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-4840" class="x-el x-el-span c1-18 c1-3c c1-3d c1-2k c1-3e c1-3f c1-3g c1-3h c1-1a c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-size x-d-scaler-id">Welcome to crystalized</span></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-3m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-4" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="/#ffc4190d-87ff-4bfc-add6-88c0690ba695" target="" data-tccl="ux2.header.cta_button.click,click" data-page="3ae29ff7-5d1d-4ed7-9e35-6520b7cbe3b2" data-section-jump="ffc4190d-87ff-4bfc-add6-88c0690ba695" class="x-el x-el-a c1-3n c1-18 c1-3o c1-3p c1-3q c1-3r c1-3 c1-3s c1-19 c1-1y c1-1g c1-1k c1-1i c1-1h c1-t c1-4 c1-3t c1-b c1-3u c1-3v c1-2e c1-c c1-3w c1-3x c1-3y c1-3z c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Contact Us</a></div></div></div></div></div></div><div data-ux="Block" id="header_parallax4841" class="x-el x-el-div c1-1 c1-2 c1-4 c1-10 c1-u c1-w c1-v c1-x c1-1w c1-1x c1-b c1-c c1-d c1-2l c1-23 c1-3a c1-e c1-f c1-g x-d-ux"><div id="bs-5"></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1u c1-1v c1-r c1-s c1-t c1-2n c1-2o c1-b c1-c c1-1b c1-2p c1-2q c1-l c1-11 c1-d c1-12 c1-2m c1-15 c1-2r c1-2s c1-2t c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-u c1-x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-u c1-v c1-x c1-w c1-y c1-z c1-2u c1-2v c1-1y c1-2w c1-b c1-c c1-4 c1-2x c1-2y c1-2z c1-d c1-30 c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1u c1-1v c1-31 c1-32 c1-t c1-33 c1-b c1-c c1-11 c1-d c1-12 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-18 c1-1h c1-1i c1-1t c1-1u c1-1v c1-1w c1-1x c1-t c1-2k c1-1a c1-34 c1-35 c1-20 c1-36 c1-o c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-route">Welcome to crystalized</h1><div id="bs-6"><div data-ux="Element" id="tagline-container-4842" class="x-el x-el-div c1-1 c1-2 c1-1h c1-1i c1-1t c1-n c1-b c1-c c1-d c1-3a c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-18 c1-1h c1-1i c1-1t c1-1u c1-1v c1-1w c1-1x c1-3b c1-t c1-19 c1-4 c1-c c1-1a c1-34 c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Welcome to crystalized</h1><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-4842" class="x-el x-el-span c1-18 c1-3c c1-3d c1-2k c1-3e c1-3f c1-3g c1-35 c1-1a c1-36 c1-37 c1-38 c1-39 x-d-ux x-d-size x-d-scaler-id">Welcome to crystalized</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-4842" class="x-el x-el-span c1-18 c1-3c c1-3d c1-2k c1-3e c1-3f c1-3g c1-1z c1-1a c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-size x-d-scaler-id">Welcome to crystalized</span><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-4842" class="x-el x-el-span c1-18 c1-3c c1-3d c1-2k c1-3e c1-3f c1-3g c1-3h c1-1a c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-size x-d-scaler-id">Welcome to crystalized</span></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-3m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-7" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="/#ffc4190d-87ff-4bfc-add6-88c0690ba695" target="" data-tccl="ux2.header.cta_button.click,click" data-page="3ae29ff7-5d1d-4ed7-9e35-6520b7cbe3b2" data-section-jump="ffc4190d-87ff-4bfc-add6-88c0690ba695" class="x-el x-el-a c1-3n c1-18 c1-3o c1-3p c1-3q c1-3r c1-3 c1-3s c1-19 c1-1y c1-1g c1-1k c1-1i c1-1h c1-t c1-4 c1-3t c1-b c1-3u c1-3v c1-2e c1-c c1-3w c1-3x c1-3y c1-3z c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Contact Us</a></div></div></div></div></div></div><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/45979/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg4838'),{"shouldMarkVisuallyComplete":true})</script></div></div></div></section> </div></div></div><div id="f9544b67-488e-4f36-a980-4251d48ca128" class="widget widget-about widget-about-about-9"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-b c1-c c1-11 c1-d c1-12 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-18 c1-1h c1-1i c1-40 c1-p c1-1v c1-1w c1-41 c1-j c1-1y c1-1a c1-35 c1-1p c1-20 c1-36 c1-22 c1-2r c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-18 c1-1a c1-35 c1-36 c1-37 c1-38 c1-39 x-d-ux">About Us</span><div data-ux="Block" class="x-el x-el-div c1-18 c1-4 c1-42 c1-1a c1-35 c1-36 c1-37 c1-38 c1-39 x-d-ux"><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-18 c1-43 c1-44 c1-45 c1-46 c1-1x c1-47 c1-19 c1-1a c1-35 c1-36 c1-37 c1-38 c1-39 x-d-ux"/></div></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-u c1-48 c1-49 c1-4a c1-1w c1-4b c1-4c c1-4d c1-b c1-c c1-4e c1-4f c1-4g c1-4h c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-4j c1-t c1-4k c1-4l c1-4m c1-4n c1-b c1-c c1-4o c1-4p c1-4q c1-4r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/0" class="x-el x-el-div c1-1 c1-2 c1-u c1-48 c1-49 c1-4a c1-1w c1-4b c1-1x c1-4d c1-x c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-4j c1-t c1-4k c1-4l c1-4t c1-4n c1-u c1-x c1-w c1-b c1-c c1-4u c1-4v c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="0" id="aa223b4c-8710-4711-8716-13b7f9f349e6" class="x-el x-el-div x-el c1-1 c1-2 c1-u c1-v c1-4 c1-4x c1-w c1-1y c1-4y c1-4z c1-b c1-c c1-50 c1-51 c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-53 c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-aid x-d-field-id x-d-field-route">Our Team Spirit</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-1w c1-1x c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-b c1-5x c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors what it is that makes you the winning team. What have been your big victories? What is your competition philosophy?</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-4j c1-t c1-4k c1-4l c1-4m c1-4n c1-b c1-c c1-4o c1-4p c1-4q c1-4r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/1" class="x-el x-el-div c1-1 c1-2 c1-u c1-48 c1-49 c1-4a c1-1w c1-4b c1-1x c1-4d c1-x c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-4j c1-t c1-4k c1-4l c1-4t c1-4n c1-u c1-x c1-w c1-b c1-c c1-4u c1-4v c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="1" id="3e403897-f5e8-4409-aa8d-d698a92f2a41" class="x-el x-el-div x-el c1-1 c1-2 c1-u c1-v c1-4 c1-4x c1-w c1-1y c1-4y c1-4z c1-b c1-c c1-50 c1-51 c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-53 c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-aid x-d-field-id x-d-field-route">Our Home Field</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-1w c1-1x c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-b c1-5x c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors about where you practice and play your home games. Do you allow visitors for practice? Do you share the field with other teams?</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-4j c1-t c1-4k c1-4l c1-4m c1-4n c1-b c1-c c1-4o c1-4p c1-4q c1-4r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/2" class="x-el x-el-div c1-1 c1-2 c1-u c1-48 c1-49 c1-4a c1-1w c1-4b c1-1x c1-4d c1-x c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-4j c1-t c1-4k c1-4l c1-4t c1-4n c1-u c1-x c1-w c1-b c1-c c1-4u c1-4v c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="2" id="125da512-7098-42f4-90f0-444fc1aba069" class="x-el x-el-div x-el c1-1 c1-2 c1-u c1-v c1-4 c1-4x c1-w c1-1y c1-4y c1-4z c1-b c1-c c1-50 c1-51 c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-53 c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-aid x-d-field-id x-d-field-route">The Seasons</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-1w c1-1x c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-b c1-5x c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors when you train and when you compete. Do you have open team tryouts? Scrimmage opportunities?</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="321eb6e3-7022-4e8c-bb01-fe0bb81aa5c4" class="widget widget-calendar widget-calendar-calendar-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-62 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-62 c1-h c1-i c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-b c1-c c1-11 c1-d c1-12 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><div data-ux="Intro" class="x-el x-el-div x-el c1-1 c1-2 c1-41 c1-1y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="CALENDAR_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-18 c1-1h c1-1i c1-40 c1-p c1-1v c1-1w c1-1x c1-j c1-1y c1-1a c1-35 c1-1p c1-20 c1-36 c1-22 c1-2r c1-23 c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-18 c1-1a c1-35 c1-36 c1-37 c1-38 c1-39 x-d-ux">Games and Events</span><div data-ux="Block" class="x-el x-el-div c1-18 c1-4 c1-42 c1-1a c1-35 c1-36 c1-37 c1-38 c1-39 x-d-ux"><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-18 c1-63 c1-44 c1-45 c1-46 c1-1x c1-47 c1-19 c1-1a c1-35 c1-36 c1-37 c1-38 c1-39 x-d-ux"/></div></h2></div><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="321eb6e3-7022-4e8c-bb01-fe0bb81aa5c4-bootstrap-container"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><style>
        .cal-nav-arrow {
          opacity: .8;
          cursor: pointer;
        }
        .cal-nav-arrow:hover {
          opacity: 1;
        }
        .event-group {
          animation: fadeInDown 1s ease-in-out;
          -webkit-animation: fadeInDown 1s ease-in-out;
        }
        @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @-webkit-keyframes fadeInDown {
           0% { opacity: 0; -webkit-transform: translateY(-20px); }
           100% { opacity: 1; -webkit-transform: translateY(0); }
         }
        @keyframes fadeInDown {
          0% { opacity: 0; transform: translateY(-20px); }
          100% { opacity: 1; transform: translateY(0); }
        }
      </style><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-u c1-48 c1-49 c1-4a c1-1w c1-4b c1-1x c1-4d c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-4l c1-4t c1-4n c1-b c1-c c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div event-group c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-65 c1-48 c1-49 c1-4a c1-1w c1-4b c1-1x c1-66 c1-4 c1-67 c1-4k c1-2o c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-4l c1-4t c1-4n c1-b c1-c c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="CALENDAR_SMALLER_SCREEN_CONTAINER" class="x-el x-el-div c1-1 c1-2 c1-u c1-48 c1-49 c1-4a c1-1w c1-1v c1-1x c1-1u c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-68 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-4j c1-t c1-4k c1-4l c1-4t c1-31 c1-69 c1-b c1-c c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="DisplayHeading" class="x-el x-el-h3 c1-1 c1-18 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-1a c1-6a c1-1z c1-20 c1-21 c1-24 c1-25 c1-26 x-d-ux"><div data-ux="Block" data-aid="CALENDAR_EVENT_DATE" class="x-el x-el-div c1-18 c1-1a c1-1z c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-aid"><div data-ux="Block" data-field-id="events.date" data-field-route="/events/0" class="x-el x-el-div c1-18 c1-1a c1-1z c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-field-id x-d-field-route">Monday</div></div></h3></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-4j c1-t c1-4k c1-32 c1-4t c1-31 c1-69 c1-b c1-c c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="events.title" data-field-route="/events/0" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-field-id x-d-field-route">Team Practice</h4><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-aid="CALENDAR_EVENT_TIME" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-aid"><span data-ux="Element" data-field-id="events.start" data-field-route="/events/0" class="x-el x-el-span c1-1 c1-2 c1-19 c1-b c1-3h c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-field-id x-d-field-route">6:00pm</span></h4><p typography="BodyAlpha" data-ux="Text" data-field-id="events.location" data-field-route="/events/0" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-6b c1-1x c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">Practice Field</p><div data-ux="Block" data-aid="CALENDAR_DESC" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div typography="BodyAlpha" data-ux="Text" data-aid="CALENDAR_DESC_TEXT" data-field-id="events.desc" data-field-route="/events/0" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-6b c1-1x c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"></div><span rel="" typography="LinkAlpha" data-ux="MoreLinkExpand" data-aid="CALENDAR_DESC_EXPAND" class="x-el x-el-span c1-1e c1-1f c1-1g c1-1h c1-1i c1-19 c1-1k c1-6d c1-6b c1-6e c1-b c1-1p c1-c c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux x-d-aid" data-tccl="ux2.CALENDAR.calendar1.Group.Default.MoreLink.Expand.4843.click,click"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" data-ux="Icon" data-aid="plus" class="x-el x-el-svg c1-1 c1-2 c1-27 c1-19 c1-6f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><path fill-rule="evenodd" d="M10.9 4v6.899H4v2h6.9v6.9h2v-6.9h6.898v-2H12.9V4z"></path></svg><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-6f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Event Details</span></span></div></div></div><div data-ux="Grid" data-aid="CALENDAR_BIGGER_SCREEN_CONTAINER" class="x-el x-el-div c1-1 c1-2 c1-2k c1-48 c1-49 c1-4a c1-1w c1-4b c1-1x c1-4d c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-6g c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-4l c1-4t c1-6h c1-b c1-c c1-6i c1-6j c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="DisplayHeading" class="x-el x-el-h3 c1-1 c1-18 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-1a c1-6a c1-1z c1-20 c1-21 c1-24 c1-25 c1-26 x-d-ux"><div data-ux="Block" data-aid="CALENDAR_EVENT_DATE" class="x-el x-el-div c1-18 c1-1a c1-1z c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-aid"><div data-ux="Block" data-field-id="events.date" data-field-route="/events/0" class="x-el x-el-div c1-18 c1-1a c1-1z c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-field-id x-d-field-route">Monday</div></div></h3></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-4l c1-4t c1-4n c1-6k c1-b c1-c c1-4u c1-4v c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="events.title" data-field-route="/events/0" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-field-id x-d-field-route">Team Practice</h4><div data-ux="Block" data-aid="CALENDAR_DESC" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div typography="BodyAlpha" data-ux="Text" data-aid="CALENDAR_DESC_TEXT" data-field-id="events.desc" data-field-route="/events/0" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-6b c1-1x c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>We practice every Monday evening, working to be the best.</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-6l c1-4t c1-4n c1-6m c1-b c1-c c1-6i c1-6j c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-aid="CALENDAR_EVENT_TIME" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-aid"><span data-ux="Element" data-field-id="events.start" data-field-route="/events/0" class="x-el x-el-span c1-1 c1-2 c1-19 c1-b c1-3h c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-field-id x-d-field-route">6:00pm</span></h4><p typography="BodyAlpha" data-ux="Text" data-field-id="events.location" data-field-route="/events/0" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-6b c1-1x c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">Practice Field</p></div></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-65 c1-48 c1-49 c1-4a c1-1w c1-4b c1-1x c1-66 c1-4 c1-67 c1-2n c1-2o c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-4l c1-4t c1-4n c1-b c1-c c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="CALENDAR_SMALLER_SCREEN_CONTAINER" class="x-el x-el-div c1-1 c1-2 c1-u c1-48 c1-49 c1-4a c1-1w c1-1v c1-1x c1-1u c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-68 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-4j c1-t c1-4k c1-4l c1-4t c1-31 c1-69 c1-b c1-c c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="DisplayHeading" class="x-el x-el-h3 c1-1 c1-18 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-1a c1-6a c1-1z c1-20 c1-21 c1-24 c1-25 c1-26 x-d-ux"><div data-ux="Block" data-aid="CALENDAR_EVENT_DATE" class="x-el x-el-div c1-18 c1-1a c1-1z c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-aid"><div data-ux="Block" data-field-id="events.date" data-field-route="/events/1" class="x-el x-el-div c1-18 c1-1a c1-1z c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-field-id x-d-field-route">Thursday</div></div></h3></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-4j c1-t c1-4k c1-32 c1-4t c1-31 c1-69 c1-b c1-c c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="events.title" data-field-route="/events/1" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-field-id x-d-field-route">Practice Scrimmage</h4><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-aid="CALENDAR_EVENT_TIME" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-aid"><span data-ux="Element" data-field-id="events.start" data-field-route="/events/1" class="x-el x-el-span c1-1 c1-2 c1-19 c1-b c1-3h c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-field-id x-d-field-route">6:00pm</span></h4><p typography="BodyAlpha" data-ux="Text" data-field-id="events.location" data-field-route="/events/1" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-6b c1-1x c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">Home Field</p><div data-ux="Block" data-aid="CALENDAR_DESC" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div typography="BodyAlpha" data-ux="Text" data-aid="CALENDAR_DESC_TEXT" data-field-id="events.desc" data-field-route="/events/1" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-6b c1-1x c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"></div><span rel="" typography="LinkAlpha" data-ux="MoreLinkExpand" data-aid="CALENDAR_DESC_EXPAND" class="x-el x-el-span c1-1e c1-1f c1-1g c1-1h c1-1i c1-19 c1-1k c1-6d c1-6b c1-6e c1-b c1-1p c1-c c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux x-d-aid" data-tccl="ux2.CALENDAR.calendar1.Group.Default.MoreLink.Expand.4844.click,click"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" data-ux="Icon" data-aid="plus" class="x-el x-el-svg c1-1 c1-2 c1-27 c1-19 c1-6f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><path fill-rule="evenodd" d="M10.9 4v6.899H4v2h6.9v6.9h2v-6.9h6.898v-2H12.9V4z"></path></svg><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-6f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Event Details</span></span></div></div></div><div data-ux="Grid" data-aid="CALENDAR_BIGGER_SCREEN_CONTAINER" class="x-el x-el-div c1-1 c1-2 c1-2k c1-48 c1-49 c1-4a c1-1w c1-4b c1-1x c1-4d c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-6g c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-4l c1-4t c1-6h c1-b c1-c c1-6i c1-6j c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="DisplayHeading" class="x-el x-el-h3 c1-1 c1-18 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-1a c1-6a c1-1z c1-20 c1-21 c1-24 c1-25 c1-26 x-d-ux"><div data-ux="Block" data-aid="CALENDAR_EVENT_DATE" class="x-el x-el-div c1-18 c1-1a c1-1z c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-aid"><div data-ux="Block" data-field-id="events.date" data-field-route="/events/1" class="x-el x-el-div c1-18 c1-1a c1-1z c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-field-id x-d-field-route">Thursday</div></div></h3></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-4l c1-4t c1-4n c1-6k c1-b c1-c c1-4u c1-4v c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="events.title" data-field-route="/events/1" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-field-id x-d-field-route">Practice Scrimmage</h4><div data-ux="Block" data-aid="CALENDAR_DESC" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div typography="BodyAlpha" data-ux="Text" data-aid="CALENDAR_DESC_TEXT" data-field-id="events.desc" data-field-route="/events/1" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-6b c1-1x c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Join us as we mix it up for practice night.</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-6l c1-4t c1-4n c1-6m c1-b c1-c c1-6i c1-6j c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-aid="CALENDAR_EVENT_TIME" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-aid"><span data-ux="Element" data-field-id="events.start" data-field-route="/events/1" class="x-el x-el-span c1-1 c1-2 c1-19 c1-b c1-3h c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-field-id x-d-field-route">6:00pm</span></h4><p typography="BodyAlpha" data-ux="Text" data-field-id="events.location" data-field-route="/events/1" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-6b c1-1x c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">Home Field</p></div></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-65 c1-48 c1-49 c1-4a c1-1w c1-4b c1-1x c1-66 c1-4 c1-67 c1-2n c1-2o c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-4l c1-4t c1-4n c1-b c1-c c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="CALENDAR_SMALLER_SCREEN_CONTAINER" class="x-el x-el-div c1-1 c1-2 c1-u c1-48 c1-49 c1-4a c1-1w c1-1v c1-1x c1-1u c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-68 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-4j c1-t c1-4k c1-4l c1-4t c1-31 c1-69 c1-b c1-c c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="DisplayHeading" class="x-el x-el-h3 c1-1 c1-18 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-1a c1-6a c1-1z c1-20 c1-21 c1-24 c1-25 c1-26 x-d-ux"><div data-ux="Block" data-aid="CALENDAR_EVENT_DATE" class="x-el x-el-div c1-18 c1-1a c1-1z c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-aid"><div data-ux="Block" data-field-id="events.date" data-field-route="/events/2" class="x-el x-el-div c1-18 c1-1a c1-1z c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-field-id x-d-field-route">Saturday</div></div></h3></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-4j c1-t c1-4k c1-32 c1-4t c1-31 c1-69 c1-b c1-c c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="events.title" data-field-route="/events/2" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-field-id x-d-field-route">Game Day</h4><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-aid="CALENDAR_EVENT_TIME" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-aid"><span data-ux="Element" data-field-id="events.start" data-field-route="/events/2" class="x-el x-el-span c1-1 c1-2 c1-19 c1-b c1-3h c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-field-id x-d-field-route">11:00am</span></h4><p typography="BodyAlpha" data-ux="Text" data-field-id="events.location" data-field-route="/events/2" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-6b c1-1x c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">Home Field</p><div data-ux="Block" data-aid="CALENDAR_DESC" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div typography="BodyAlpha" data-ux="Text" data-aid="CALENDAR_DESC_TEXT" data-field-id="events.desc" data-field-route="/events/2" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-6b c1-1x c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"></div><span rel="" typography="LinkAlpha" data-ux="MoreLinkExpand" data-aid="CALENDAR_DESC_EXPAND" class="x-el x-el-span c1-1e c1-1f c1-1g c1-1h c1-1i c1-19 c1-1k c1-6d c1-6b c1-6e c1-b c1-1p c1-c c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux x-d-aid" data-tccl="ux2.CALENDAR.calendar1.Group.Default.MoreLink.Expand.4845.click,click"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" data-ux="Icon" data-aid="plus" class="x-el x-el-svg c1-1 c1-2 c1-27 c1-19 c1-6f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><path fill-rule="evenodd" d="M10.9 4v6.899H4v2h6.9v6.9h2v-6.9h6.898v-2H12.9V4z"></path></svg><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-6f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Event Details</span></span></div></div></div><div data-ux="Grid" data-aid="CALENDAR_BIGGER_SCREEN_CONTAINER" class="x-el x-el-div c1-1 c1-2 c1-2k c1-48 c1-49 c1-4a c1-1w c1-4b c1-1x c1-4d c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-6g c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-4l c1-4t c1-6h c1-b c1-c c1-6i c1-6j c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="DisplayHeading" class="x-el x-el-h3 c1-1 c1-18 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-1a c1-6a c1-1z c1-20 c1-21 c1-24 c1-25 c1-26 x-d-ux"><div data-ux="Block" data-aid="CALENDAR_EVENT_DATE" class="x-el x-el-div c1-18 c1-1a c1-1z c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-aid"><div data-ux="Block" data-field-id="events.date" data-field-route="/events/2" class="x-el x-el-div c1-18 c1-1a c1-1z c1-21 c1-24 c1-25 c1-26 x-d-ux x-d-field-id x-d-field-route">Saturday</div></div></h3></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-4l c1-4t c1-4n c1-6k c1-b c1-c c1-4u c1-4v c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="events.title" data-field-route="/events/2" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-field-id x-d-field-route">Game Day</h4><div data-ux="Block" data-aid="CALENDAR_DESC" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div typography="BodyAlpha" data-ux="Text" data-aid="CALENDAR_DESC_TEXT" data-field-id="events.desc" data-field-route="/events/2" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-6b c1-1x c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Come cheer us on at our home field. Stay after the game for our victory celebration!&nbsp;</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-6l c1-4t c1-4n c1-6m c1-b c1-c c1-6i c1-6j c1-4o c1-4p c1-4w c1-4r c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="HeadingMinor" data-aid="CALENDAR_EVENT_TIME" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-1x c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-aid"><span data-ux="Element" data-field-id="events.start" data-field-route="/events/2" class="x-el x-el-span c1-1 c1-2 c1-19 c1-b c1-3h c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-field-id x-d-field-route">11:00am</span></h4><p typography="BodyAlpha" data-ux="Text" data-field-id="events.location" data-field-route="/events/2" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-6b c1-1x c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">Home Field</p></div></div></div></div></div></div></div></div></div></div></div></div></div></section> </div></div></div><div id="eb467dfd-cba4-4bc9-a12d-ec61d0c15be7" class="widget widget-subscribe widget-subscribe-subscribe-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-b c1-c c1-11 c1-d c1-12 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><h2 typography="HeadingAlpha" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-18 c1-1h c1-1i c1-1t c1-1u c1-1v c1-6n c1-6o c1-1y c1-1a c1-53 c1-35 c1-20 c1-36 c1-2l c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-route">Subscribe</h2><div><div id="eb467dfd-cba4-4bc9-a12d-ec61d0c15be7-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-u c1-48 c1-49 c1-4a c1-1w c1-4b c1-1x c1-4d c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-4l c1-4t c1-4n c1-b c1-c c1-6p c1-6q c1-6r c1-4o c1-4p c1-4w c1-4r c1-d c1-6s c1-6t c1-6u c1-e c1-f c1-g x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-1w c1-6v c1-1y c1-b c1-5x c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Sign up to hear from us about joining us, games, and special events.</p><form data-ux="Form" aria-live="polite" class="x-el x-el-form c1-1 c1-2 c1-1x c1-u c1-v c1-x c1-w c1-1y c1-2e c1-b c1-c c1-d c1-13 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c1-1 c1-2 c1-6w c1-4 c1-b c1-c c1-d c1-6x c1-30 c1-6y c1-23 c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-29 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c1-1 c1-2 c1-29 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input4846" value="" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c1-1 c1-2 c1-3 c1-43 c1-4 c1-6z c1-70 c1-71 c1-72 c1-3t c1-73 c1-74 c1-2u c1-2v c1-45 c1-b c1-75 c1-c c1-20 c1-76 c1-3x c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input4846" class="x-el x-el-label c1-1 c1-2 c1-1h c1-1i c1-3f c1-7f c1-7g c1-7h c1-7i c1-b c1-75 c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux">Email</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-30 c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-29 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c1-3n c1-18 c1-3o c1-3p c1-3q c1-3r c1-7j c1-3s c1-19 c1-1y c1-1g c1-1k c1-1i c1-1h c1-t c1-4 c1-3t c1-b c1-34 c1-3v c1-2e c1-c c1-7k c1-3x c1-7l c1-3z c1-d c1-e c1-f c1-g x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></div></div></div></section> </div></div></div><div id="ffc4190d-87ff-4bfc-add6-88c0690ba695" class="widget widget-contact widget-contact-contact-6"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-62 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-62 c1-h c1-i c1-29 c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-b c1-c c1-11 c1-d c1-12 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-18 c1-1h c1-1i c1-40 c1-p c1-1v c1-1w c1-41 c1-j c1-1y c1-1a c1-35 c1-1p c1-20 c1-36 c1-22 c1-2r c1-37 c1-38 c1-39 x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-18 c1-1a c1-35 c1-36 c1-37 c1-38 c1-39 x-d-ux">Contact Us</span><div data-ux="Block" class="x-el x-el-div c1-18 c1-4 c1-42 c1-1a c1-35 c1-36 c1-37 c1-38 c1-39 x-d-ux"><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-18 c1-63 c1-44 c1-45 c1-46 c1-1x c1-47 c1-19 c1-1a c1-35 c1-36 c1-37 c1-38 c1-39 x-d-ux"/></div></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="ffc4190d-87ff-4bfc-add6-88c0690ba695-bootstrap-container"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-u c1-48 c1-49 c1-4a c1-1w c1-4b c1-1x c1-4d c1-b c1-c c1-4e c1-4f c1-4s c1-4h c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-4l c1-4t c1-4n c1-b c1-c c1-6p c1-6q c1-6r c1-4o c1-4p c1-4w c1-4r c1-d c1-6s c1-6t c1-6u c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-x c1-1y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-6w c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-aid x-d-route x-d-field-route">Send Us a Message</h4><form data-ux="Form" aria-live="polite" formFieldVariationOptions="[object Object]" formTitle="Send Us a Message" formFields="[object Object],[object Object],[object Object],[object Object]" formSubmitHost="https://contact.apps-api.instantpage.secureserver.net" recaptchaType="V3" domainName="crystalized.godaddysites.com" formSuccessMessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteId="cd4eeb33-22a9-42b2-9d2b-ddc249d1c541" pageId="3ae29ff7-5d1d-4ed7-9e35-6520b7cbe3b2" accountId="28c040ef-474f-11ea-81b7-3417ebe72601" staticContent="[object Object]" emailOptInMessage="Sign up for our email list for updates, promotions, and more." emailConfirmationMessage="We&#x27;ve sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c1-1 c1-2 c1-1x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><input type="text" name="_app_id" autoComplete="off" tabindex="-1" style="display:none" value=""/><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c1-1 c1-2 c1-29 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input4847" value="" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c1-1 c1-2 c1-3 c1-63 c1-4 c1-6z c1-70 c1-71 c1-72 c1-3t c1-73 c1-74 c1-2u c1-2v c1-45 c1-b c1-75 c1-c c1-20 c1-76 c1-3x c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input4847" class="x-el x-el-label c1-1 c1-2 c1-1h c1-1i c1-3f c1-7f c1-7g c1-7h c1-7i c1-b c1-75 c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c1-1 c1-2 c1-29 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input4848" value="" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c1-1 c1-2 c1-3 c1-63 c1-4 c1-6z c1-70 c1-71 c1-72 c1-3t c1-73 c1-74 c1-2u c1-2v c1-45 c1-b c1-75 c1-c c1-20 c1-76 c1-3x c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input4848" class="x-el x-el-label c1-1 c1-2 c1-1h c1-1i c1-3f c1-7f c1-7g c1-7h c1-7i c1-b c1-75 c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="6" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" class="x-el x-el-textarea c1-1 c1-2 c1-3 c1-63 c1-4 c1-6z c1-70 c1-71 c1-72 c1-3t c1-3o c1-3p c1-2u c1-2v c1-45 c1-7m c1-b c1-75 c1-c c1-20 c1-76 c1-3x c1-7d c1-7e c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></textarea></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-6w c1-u c1-x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><label data-ux="InputCheckbox" data-aid="CONTACT_FORM_EMAIL_OPT_IN" class="x-el x-el-label c1-1 c1-2 c1-u c1-x c1-w c1-29 c1-b c1-c c1-7n c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="checkbox" typography="InputAlpha" data-ux="InputCheckbox" data-aid="CONTACT_FORM_EMAIL_OPT_IN" class="x-el x-el-input c1-1 c1-2 c1-3 c1-63 c1-4 c1-6z c1-70 c1-71 c1-72 c1-3t c1-3o c1-3p c1-2u c1-2v c1-45 c1-3f c1-7o c1-7p c1-b c1-75 c1-c c1-20 c1-76 c1-3x c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-87 c1-88 c1-7d c1-7e c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><div data-ux="Element" class="x-el x-el-div c1-1 c1-2 c1-19 c1-3g c1-89 c1-8a c1-8b c1-8c c1-45 c1-8d c1-8e c1-1k c1-29 c1-6z c1-70 c1-71 c1-72 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div><p typography="BodyAlpha" data-ux="Text" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-28 c1-1w c1-1x c1-19 c1-8f c1-1k c1-8g c1-8h c1-6k c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux">Sign up for our email list for updates, promotions, and more.</p></label></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c1-3n c1-18 c1-3o c1-3p c1-3q c1-3r c1-7j c1-3s c1-19 c1-1y c1-1g c1-1k c1-1i c1-1h c1-t c1-4 c1-3t c1-b c1-34 c1-3v c1-2e c1-c c1-7k c1-3x c1-7l c1-3z c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div><div style="width:1px;height:1px;visibility:hidden"></div></form></div></div></div></div></div><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-u c1-48 c1-49 c1-4a c1-1w c1-4b c1-4c c1-4d c1-b c1-c c1-4e c1-4f c1-4g c1-4h c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-10 c1-4i c1-64 c1-t c1-4k c1-4l c1-z c1-4n c1-b c1-c c1-6p c1-6q c1-6r c1-4o c1-4p c1-4q c1-4r c1-d c1-6s c1-6t c1-6u c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8i c1-1y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-41 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-1w c1-6w c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-b c1-6c c1-c c1-20 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Our fans are a real part of our team. Send us a message to cheer us on, or ask us a question about our training. We look forward to hearing from you, and we will get back to you soon.</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-1 c1-2 c1-1h c1-1i c1-52 c1-1u c1-1v c1-1w c1-6w c1-b c1-6a c1-3h c1-20 c1-3i c1-3j c1-3k c1-3l x-d-ux x-d-aid x-d-route">crystalized</h4></div></div></div></div></div></div></section> </div></div></div><div id="53676e0b-7bb6-43b5-96ee-99429ffb1d99" class="widget widget-footer widget-footer-footer-3"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-8j c1-8k c1-43 c1-6z c1-8l c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-b c1-c c1-11 c1-d c1-12 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-u c1-48 c1-49 c1-4a c1-1w c1-1v c1-1x c1-1u c1-w c1-1y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-8m c1-4i c1-4j c1-t c1-4k c1-32 c1-4t c1-31 c1-b c1-c c1-d c1-8n c1-8o c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-1w c1-1x c1-b c1-8p c1-8q c1-20 c1-8r c1-8s c1-8t c1-8u c1-8v x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 crystalized - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-48 c1-8m c1-4i c1-4j c1-t c1-4k c1-32 c1-4t c1-31 c1-b c1-c c1-d c1-8n c1-8o c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-1h c1-1i c1-54 c1-46 c1-1x c1-b c1-8p c1-8q c1-20 c1-8r c1-8w c1-2l c1-8t c1-8u c1-8v x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-1e c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-46 c1-b c1-1p c1-8q c1-1q c1-1r c1-1s c1-8r c1-8w c1-2l c1-8t c1-8u c1-8v x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer3.Layout.Default.Link.Default.4849.click,click">Website Builder</a></span></p></div></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-r c1-s c1-t c1-1y c1-46 c1-b c1-c c1-11 c1-d c1-12 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-8x c1-4k c1-32 c1-4t c1-31 c1-1w c1-1v c1-1x c1-1u c1-b c1-c c1-8y c1-8z c1-d c1-e c1-f c1-g x-d-ux"></ul></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.62.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/84f5ab1d69588a0d/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1d60b452de0e239d/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","fonts":["fjalla-one","default",""],"colors":["#02537E"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"3ae29ff7-5d1d-4ed7-9e35-6520b7cbe3b2":{"isFlyoutMenu":false,"active":true,"pageId":"3ae29ff7-5d1d-4ed7-9e35-6520b7cbe3b2","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme12"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"textAlign":"center","maxWidth":"100%","@md":{"textAlign":"center","marginBottom":"0"}},"logo":{"logoText":"crystalized"},"fontPackLogoId":null,"widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/70b94c42ef48f212/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax4839","widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e374870201fcd502/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","style":{},"children":"Welcome to crystalized","scaledFontSizes":["xxlarge","xlarge","large"],"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","section":"default","category":"primary","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"3ae29ff7-5d1d-4ed7-9e35-6520b7cbe3b2","widgetId":"ffc4190d-87ff-4bfc-add6-88c0690ba695"},"data-aid":"HEADER_CTA_BTN","data-field-id":"ctaButton","data-field-route":"\u002FctaButton","data-tccl":"ux2.header.cta_button.click,click","widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","section":"default","category":"primary","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-5',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax4841","widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-6',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","style":{},"children":"Welcome to crystalized","scaledFontSizes":["xxlarge","xlarge","large"],"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","section":"default","category":"primary","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-7',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"3ae29ff7-5d1d-4ed7-9e35-6520b7cbe3b2","widgetId":"ffc4190d-87ff-4bfc-add6-88c0690ba695"},"data-aid":"HEADER_CTA_BTN","data-field-id":"ctaButton","data-field-route":"\u002FctaButton","data-tccl":"ux2.header.cta_button.click,click","widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","section":"default","category":"primary","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"e50c54d6-9e0a-40eb-8b59-2b8de3ebfb58","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/46bfba146eeaf2f/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/cd4eeb33-22a9-42b2-9d2b-ddc249d1c541/gpub/38b674bc7c32c1c4/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/d9df70d794ec7a6a/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/cd4eeb33-22a9-42b2-9d2b-ddc249d1c541/gpub/64b26d9ac5493bc7/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/717f4c070b4bbdc/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/cd4eeb33-22a9-42b2-9d2b-ddc249d1c541/gpub/d0552011e08ec8c0/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-4834').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"cd4eeb33-22a9-42b2-9d2b-ddc249d1c541"}),_trfd.push({"pd":"2020-02-04T13:07:23.538Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
