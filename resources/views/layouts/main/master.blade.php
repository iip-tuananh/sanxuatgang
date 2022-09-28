<!DOCTYPE html>
<html lang="vi" prefix="og: https://ogp.me/ns#" class="loading-site no-js">
   <!--<![endif]-->
   <head>
      <meta charset="UTF-8" />
      <!-- Optimized with WP Meteor v2.3.10 - https://wordpress.org/plugins/wp-meteor/ --><script >var _wpmeteor={"rdelay":1000,"elementor-animations":true,"elementor-pp":true,"v":"2.3.10"};if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]wpmeteordisable/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?wpmeteordisable=1"}else{document.location.href=href.replace("#","?wpmeteordisable=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&wpmeteordisable=1"}else{document.location.href=href.replace("#","&wpmeteordisable=1#")}}}}</script><script >!function(t){var e={};function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(r,o,function(e){return t[e]}.bind(null,o));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="/",n(n.s=0)}([function(t,e,n){t.exports=n(1)},function(t,e,n){"use strict";n.r(e);var r=new(function(){function t(){this.l=[]}var e=t.prototype;return e.emit=function(t,e){void 0===e&&(e=null),this.l[t]&&this.l[t].forEach((function(t){return t(e)}))},e.on=function(t,e){var n;(n=this.l)[t]||(n[t]=[]),this.l[t].push(e)},e.off=function(t,e){this.l[t]=(this.l[t]||[]).filter((function(t){return t!==e}))},t}()),o=new Date,i=document,a=function(){function t(){this.known=[]}var e=t.prototype;return e.init=function(){var t,e=this,n=!1,o=function(t){if(!n&&t&&t.fn&&!t.__wpmeteor){var r=function(e){return i.addEventListener("DOMContentLoaded",(function(n){e.bind(i)(t,n)})),this};e.known.push([t,t.fn.ready,t.fn.init.prototype.ready]),t.fn.ready=r,t.fn.init.prototype.ready=r,t.__wpmeteor=!0}return t};window.jQuery&&(t=o(window.jQuery)),Object.defineProperty(window,"jQuery",{get:function(){return t},set:function(e){return t=o(e)}}),r.on("l",(function(){return n=!0}))},e.unmock=function(){this.known.forEach((function(t){var e=t[0],n=t[1],r=t[2];e.fn.ready=n,e.fn.init.prototype.ready=r}))},t}(),c={};!function(t,e){try{var n=Object.defineProperty({},e,{get:function(){c[e]=!0}});t.addEventListener(e,null,n),t.removeEventListener(e,null,n)}catch(t){}}(window,"passive");var u=c,f=window,d=document,s=["mouseover","keydown","touchmove","touchend","wheel"],l=["mouseover","mouseout","touchstart","touchmove","touchend","click"],p="data-wpmeteor-",v=function(){function t(){}return t.prototype.init=function(t){var e=!1,n=!1,o=function t(o){e||(e=!0,s.forEach((function(e){return d.body.removeEventListener(e,t,u)})),clearTimeout(n),location.href.match(/wpmeteornopreload/)||r.emit("pre"),r.emit("fi"))},i=function(t){var e=new MouseEvent("click",{view:t.view,bubbles:!0,cancelable:!0});return Object.defineProperty(e,"target",{writable:!1,value:t.target}),e};t<1e4&&r.on("i",(function(){e||(n=setTimeout(o,t))}));var a=[],c=function(t){t.target&&"dispatchEvent"in t.target&&("click"===t.type?(t.preventDefault(),t.stopPropagation(),a.push(i(t))):"touchmove"!==t.type&&a.push(t),t.target.setAttribute(p+t.type,!0))};r.on("l",(function(){var t;for(l.forEach((function(t){return f.removeEventListener(t,c)}));t=a.shift();){var e=t.target;e.getAttribute(p+"touchstart")&&e.getAttribute(p+"touchend")&&!e.getAttribute(p+"click")?(e.getAttribute(p+"touchmove")||(e.removeAttribute(p+"touchmove"),a.push(i(t))),e.removeAttribute(p+"touchstart"),e.removeAttribute(p+"touchend")):e.removeAttribute(p+t.type),e.dispatchEvent(t)}}));d.addEventListener("DOMContentLoaded",(function t(){s.forEach((function(t){return d.body.addEventListener(t,o,u)})),l.forEach((function(t){return f.addEventListener(t,c)})),d.removeEventListener("DOMContentLoaded",t)}))},t}(),m=document,h=m.createElement("span");h.setAttribute("id","elementor-device-mode"),h.setAttribute("class","elementor-screen-only");var y=window,b=document,g=b.documentElement,w=function(t){return t.getAttribute("class")||""},E=function(t,e){return t.setAttribute("class",e)},L=function(){window.addEventListener("load",(function(){var t=(m.body.appendChild(h),getComputedStyle(h,":after").content.replace(/"/g,"")),e=Math.max(g.clientWidth||0,y.innerWidth||0),n=Math.max(g.clientHeight||0,y.innerHeight||0),o=["_animation_"+t,"animation_"+t,"_animation","_animation","animation"];Array.from(b.querySelectorAll(".elementor-invisible")).forEach((function(t){var i=t.getBoundingClientRect();if(i.top+y.scrollY<=n&&i.left+y.scrollX<e)try{var a=JSON.parse(t.getAttribute("data-settings"));if(a.trigger_source)return;for(var c,u=a._animation_delay||a.animation_delay||0,f=0;f<o.length;f++)if(a[o[f]]){o[f],c=a[o[f]];break}if(c){var d=w(t),s="none"===c?d:d+" animated "+c,l=setTimeout((function(){E(t,s.replace(/\belementor\-invisible\b/,"")),o.forEach((function(t){return delete a[t]})),t.setAttribute("data-settings",JSON.stringify(a))}),u);r.on("fi",(function(){clearTimeout(l),E(t,w(t).replace(new RegExp("\b"+c+"\b"),""))}))}}catch(t){console.error(t)}}))}))},S=document,A="querySelectorAll",O="data-in-mega_smartmenus",_="DOMContentLoaded",j="readystatechange",P="message",k=console.error;!function(t,e,n,i,c,u,f,d,s){var l,p,m=t.constructor.name+"::",h=e.constructor.name+"::",y=function(e,n){n=n||t;for(var r=0;r<this.length;r++)e.call(n,this[r],r,this)};"NodeList"in t&&!NodeList.prototype.forEach&&(NodeList.prototype.forEach=y),"HTMLCollection"in t&&!HTMLCollection.prototype.forEach&&(HTMLCollection.prototype.forEach=y),_wpmeteor["elementor-animations"]&&L(),_wpmeteor["elementor-pp"]&&function(){var t=S.createElement("div");t.innerHTML='<span class="sub-arrow --wp-meteor"><i class="fa" aria-hidden="true"></i></span>';var e=t.firstChild;S.addEventListener("DOMContentLoaded",(function(){Array.from(S[A](".pp-advanced-menu ul")).forEach((function(t){if(!t.getAttribute(O)){(t.getAttribute("class")||"").match(/\bmega\-menu\b/)&&t[A]("ul").forEach((function(t){t.setAttribute(O,!0)}));var n=function(t){for(var e=[];t=t.previousElementSibling;)e.push(t);return e}(t),r=n.filter((function(t){return t})).filter((function(t){return"A"===t.tagName})).pop();if(r||(r=n.map((function(t){return Array.from(t[A]("a"))})).filter((function(t){return t})).flat().pop()),r){var o=e.cloneNode(!0);r.appendChild(o),new MutationObserver((function(t){t.forEach((function(t){t.addedNodes.forEach((function(t){if(1===t.nodeType&&"SPAN"===t.tagName)try{r.removeChild(o)}catch(t){}}))}))})).observe(r,{childList:!0})}}}))}))}();var b,g,w=[],E=[],x={},C=!1,T=!1,M=setTimeout;var N=e[n].bind(e),R=e[i].bind(e),H=t[n].bind(t),D=t[i].bind(t);"undefined"!=typeof EventTarget&&(b=EventTarget.prototype.addEventListener,g=EventTarget.prototype.removeEventListener,N=b.bind(e),R=g.bind(e),H=b.bind(t),D=g.bind(t));var z,q=e.createElement.bind(e),B=e.__proto__.__lookupGetter__("readyState").bind(e);Object.defineProperty(e,"readyState",{get:function(){return z||B()},set:function(t){return z=t}});var Q=function(t){return E.filter((function(e,n){var r=e[0],o=(e[1],e[2]);if(!(t.indexOf(r.type)<0)){o||(o=r.target);try{for(var i=o.constructor.name+"::"+r.type,a=0;a<x[i].length;a++){if(x[i][a])if(!W[i+"::"+n+"::"+a])return!0}}catch(t){}}})).length},W={},I=function(t){E.forEach((function(n,r){var o=n[0],i=n[1],a=n[2];if(!(t.indexOf(o.type)<0)){a||(a=o.target);try{var c=a.constructor.name+"::"+o.type;if((x[c]||[]).length)for(var u=0;u<x[c].length;u++){var f=x[c][u];if(f){var d=c+"::"+r+"::"+u;if(!W[d]){W[d]=!0,e.readyState=i;try{f.hasOwnProperty("prototype")&&f.prototype.constructor!==f?f(o):f.bind(a)(o)}catch(t){k(t,f)}}}}}catch(t){k(t)}}}))};N(_,(function(t){E.push([t,e.readyState,e])})),N(j,(function(t){E.push([t,e.readyState,e])})),H(_,(function(n){E.push([n,e.readyState,t])})),H(d,(function(n){E.push([n,e.readyState,t]),G||I([_,j,P,d])}));var J=function(n){E.push([n,e.readyState,t])};H(P,J),r.on("fi",(function(){T=!0,G=!0,e.readyState="loading",M(X)}));H(d,(function t(){C=!0,T&&!G&&(e.readyState="loading",M(X)),D(d,t)})),(new v).init(_wpmeteor.rdelay);var F=new a;F.init();var G=!1,X=function n(){var o=w.shift();if(o)if(o[c]("data-src"))o.hasAttribute("data-async")?(U(o),M(n)):U(o,n);else if("javascript/blocked"==o.type)U(o),M(n);else if(o.hasAttribute("data-wpmeteor-onload")){var i=o[c]("data-wpmeteor-onload");try{new Function(i).call(o)}catch(t){k(t)}M(n)}else M(n);else if(Q([_,j,P]))I([_,j,P]),M(n);else if(T&&C)if(Q([d,P]))I([d,P]),M(n);else{if(t.RocketLazyLoadScripts)try{RocketLazyLoadScripts.run()}catch(t){k(t)}e.readyState="complete",D(P,J),(x[m+"message"]||[]).forEach((function(t){H(P,t)})),F.unmock(),Z=N,$=R,nt=H,rt=D,G=!1,setTimeout((function(){return r.emit("l")}))}else G=!1},Y=function(t){for(var n=e.createElement("SCRIPT"),r=t.attributes,o=r.length-1;o>=0;o--)n.setAttribute(r[o].name,r[o].value);return n.bypass=!0,n.type=t.hasAttribute("data-wpmeteor-module")?"module":"text/javascript",(t.text||"").match(/^\s*class RocketLazyLoadScripts/)?n.text=t.text.replace(/^\s*class RocketLazyLoadScripts/,"window.RocketLazyLoadScripts=class").replace("RocketLazyLoadScripts.run();",""):n.text=t.text,n[f]("data-wpmeteor-after"),n},K=function(t,e){var n=t.parentNode;n&&n.replaceChild(e,t)},U=function(t,e){if(t[c]("data-src")){var r=Y(t),o=b?b.bind(r):r[n].bind(r);if(e){var i=function(){return M(e)};o(d,i),o(s,i)}r.src=t[c]("data-src"),r[f]("data-src"),K(t,r)}else"javascript/blocked"===t.type?K(t,Y(t)):onLoad&&onLoad()},V=function(t,e){var n=(x[t]||[]).indexOf(e);if(n>=0)return x[t][n]=void 0,!0},Z=function(t,e){if(e&&(t===_||t===j)){var n=h+t;return x[n]=x[n]||[],void x[n].push(e)}for(var r=arguments.length,o=new Array(r>2?r-2:0),i=2;i<r;i++)o[i-2]=arguments[i];return N.apply(void 0,[t,e].concat(o))},$=function(t,e){t===_&&V(h+t,e);return R(t,e)};Object.defineProperties(e,((l={})[n]={get:function(){return Z},set:function(){return Z}},l[i]={get:function(){return $},set:function(){return $}},l)),r.on("pre",(function(){return w.forEach((function(t){var n=t[c]("data-src");if(n){var r=q("link");r.rel="pre"+d,r.as="script",r.href=n,r.crossorigin=!0,e.head.appendChild(r)}}))})),N(_,(function(){e.querySelectorAll("script[data-wpmeteor-after]").forEach((function(t){return w.push(t)}));var t=["link"].map((function(t){return t+"[data-wpmeteor-onload]"})).join(",");e.querySelectorAll(t).forEach((function(t){return w.push(t)}))}));var tt=function(t){if(e.currentScript)try{var n=e.currentScript.parentElement,r=e.currentScript.nextSibling,i=document.createElement("div");i.innerHTML=t,Array.from(i.childNodes).forEach((function(t){"SCRIPT"===t.nodeName?n.insertBefore(Y(t),r):n.insertBefore(t,r)}))}catch(t){console.error(t)}else k((new Date-o)/1e3,"document.currentScript not set",t)},et=function(t){return tt(t+"\n")};Object.defineProperties(e,{write:{get:function(){return tt},set:function(t){return tt=t}},writeln:{get:function(){return et},set:function(t){return et=t}}});var nt=function(t,e){if(e&&(t===d||t===_||t===P)){var n=t===_?h+t:m+t;return x[n]=x[n]||[],void x[n].push(e)}for(var r=arguments.length,o=new Array(r>2?r-2:0),i=2;i<r;i++)o[i-2]=arguments[i];return H.apply(void 0,[t,e].concat(o))},rt=function(t,e){t===d&&V(t===_?h+t:m+t,e);return D(t,e)};Object.defineProperties(t,((p={})[n]={get:function(){return nt},set:function(){return nt}},p[i]={get:function(){return rt},set:function(){return rt}},p));var ot=function(t){var e;return{get:function(){return e},set:function(n){return e&&V(t,n),x[t]=x[t]||[],x[t].push(n),e=n}}},it=ot(m+d);Object.defineProperty(t,"onload",it),N(_,(function(){Object.defineProperty(e.body,"onload",it)})),Object.defineProperty(e,"onreadystatechange",ot(h+j)),Object.defineProperty(t,"onmessage",ot(m+P));var at=1,ct=function(){--at||r.emit("i")};H(d,(function t(){M((function(){e.querySelectorAll("img").forEach((function(t){if(!t.complete&&(t.currentSrc||t.src)&&"lazy"==!(t.loading||"").toLowerCase()||(r=t.getBoundingClientRect(),o=window.innerHeight||document.documentElement.clientHeight,i=window.innerWidth||document.documentElement.clientWidth,r.top>=-1*o*1&&r.left>=-1*i*1&&r.bottom<=2*o&&r.right<=2*i)){var e=new Image;e[n](d,ct),e[n](s,ct),e.src=t.currentSrc||t.src,at++}var r,o,i})),ct()})),D(d,t)}));var ut=Object.defineProperty;Object.defineProperty=function(n,r,o){return n===t&&["jQuery","onload"].indexOf(r)>=0||(n===e||n===e.body)&&["readyState","write"].indexOf(r)>=0?n:ut(n,r,o)},Object.defineProperties=function(t,e){for(var n in e)Object.defineProperty(t,n,e[n]);return t}}(window,document,"addEventListener","removeEventListener","getAttribute",0,"removeAttribute","load","error")}]);</script>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title>@yield('title')</title>
      <meta name="description" content="">
      <meta name="keywords" content="@yield('title')"/>
      <meta name="robots" content="noodp,index,follow" />
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <meta name="description" content="@yield('description')" />
      <link rel="canonical" href="{{url()->current()}}" />
      <meta property="og:locale" content="vi_VN" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="@yield('title')" />
      <meta property="og:description" content="@yield('description')" />
      <meta property="og:url" content="{{url()->current()}}" />
      <meta property="og:site_name" content="ahometh.vn" />
      <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
      <meta property="og:image" content="@yield('image')" />
      <meta property="og:image:secure_url" content="@yield('image')" />
      <meta property="og:image:width" content="598" />
      <meta property="og:image:height" content="333" />
      <meta property="og:image:alt" content="ahome-noi-that" />
      <meta property="og:image:type" content="image/jpeg" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:title" content="@yield('title')" />
      <meta name="twitter:description" content="@yield('description')" />
      <meta name="twitter:image" content="@yield('image')" />
      <meta name="google-site-verification" content="dzrsFE-Rz9iukFyirb8Fh1e_X8uk-LZUqW7glf3BGX4" />
      <!-- Fav Icon -->
      <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%7CRoboto%3Aregular%2C700%2Cregular%2C700%2Cregular&#038;subset=vietnamese%2Cgreek-ext&#038;display=swap" />
      <link rel="stylesheet" href="{{asset('frontend/css/245d3fbfe6133db92a634fc84c034b93.css')}}" media="all" data-minify="1" />
      <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" />
      <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}"  />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
      <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
      <style type="text/css">
      img.wp-smiley,
      img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 0.07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
      }
      </style>
      <style id='wp-block-library-inline-css' type='text/css'>
      :root{--wp-admin-theme-color:#007cba;--wp-admin-theme-color--rgb:0,124,186;--wp-admin-theme-color-darker-10:#006ba1;--wp-admin-theme-color-darker-10--rgb:0,107,161;--wp-admin-theme-color-darker-20:#005a87;--wp-admin-theme-color-darker-20--rgb:0,90,135;--wp-admin-border-width-focus:2px}@media (-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi){:root{--wp-admin-border-width-focus:1.5px}}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}:root .has-very-light-gray-background-color{background-color:#eee}:root .has-very-dark-gray-background-color{background-color:#313131}:root .has-very-light-gray-color{color:#eee}:root .has-very-dark-gray-color{color:#313131}:root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background{background:linear-gradient(135deg,#00d084,#0693e3)}:root .has-purple-crush-gradient-background{background:linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)}:root .has-hazy-dawn-gradient-background{background:linear-gradient(135deg,#faaca8,#dad0ec)}:root .has-subdued-olive-gradient-background{background:linear-gradient(135deg,#fafae1,#67a671)}:root .has-atomic-cream-gradient-background{background:linear-gradient(135deg,#fdd79a,#004a59)}:root .has-nightshade-gradient-background{background:linear-gradient(135deg,#330968,#31cdcf)}:root .has-midnight-gradient-background{background:linear-gradient(135deg,#020381,#2874fc)}.has-regular-font-size{font-size:1em}.has-larger-font-size{font-size:2.625em}.has-normal-font-size{font-size:var(--wp--preset--font-size--normal)}.has-huge-font-size{font-size:var(--wp--preset--font-size--huge)}.has-text-align-center{text-align:center}.has-text-align-left{text-align:left}.has-text-align-right{text-align:right}#end-resizable-editor-section{display:none}.aligncenter{clear:both}.items-justified-left{justify-content:flex-start}.items-justified-center{justify-content:center}.items-justified-right{justify-content:flex-end}.items-justified-space-between{justify-content:space-between}.screen-reader-text{border:0;clip:rect(1px,1px,1px,1px);-webkit-clip-path:inset(50%);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;word-wrap:normal!important}.screen-reader-text:focus{background-color:#ddd;clip:auto!important;-webkit-clip-path:none;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}html :where(.has-border-color),html :where([style*=border-width]){border-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}
      </style>
      <style id='woocommerce-inline-inline-css' type='text/css'>
      .woocommerce form .form-row .required { visibility: visible; }
      </style>
      <style id='flatsome-main-inline-css' type='text/css'>
      @font-face {
      font-family: "fl-icons";
      font-display: block;
      src: url(https://pkcvietnam.com.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot?v=3.15.5);
      src:
      url(https://pkcvietnam.com.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot#iefix?v=3.15.5) format("embedded-opentype"),
      url({{url('frontend/fonts/fl-icons.woff2')}}) format("woff2"),
      url({{url('frontend/fonts/fl-icons.ttf')}}) format("truetype"),
      url({{url('frontend/fonts/fl-icons.woff')}}) format("woff"),
      url(https://pkcvietnam.com.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.svg?v=3.15.5#fl-icons) format("svg");
      }
      </style>
      <style id='wpb-get-a-quote-button-styles-inline-css' type='text/css'>
      .wpb-get-a-quote-button-btn-default,
      .wpb-gqf-form-style-true input[type=submit],
      .wpb-gqf-form-style-true input[type=button],
      .wpb-gqf-form-style-true input[type=submit],
      .wpb-gqf-form-style-true input[type=button]{
      color: #ffffff;
      background: #0c3d77;
      }
      .wpb-get-a-quote-button-btn-default:hover, .wpb-get-a-quote-button-btn-default:focus,
      .wpb-gqf-form-style-true input[type=submit]:hover, .wpb-gqf-form-style-true input[type=submit]:focus,
      .wpb-gqf-form-style-true input[type=button]:hover, .wpb-gqf-form-style-true input[type=button]:focus,
      .wpb-gqf-form-style-true input[type=submit]:hover,
      .wpb-gqf-form-style-true input[type=button]:hover,
      .wpb-gqf-form-style-true input[type=submit]:focus,
      .wpb-gqf-form-style-true input[type=button]:focus {
      color: #ffffff;
      background: #446084;
      }
      </style>
      <script src='{{asset('frontend/js/jquery.min.js')}}' id='jquery-core-js'></script>
      <script type="javascript/blocked" src='{{asset('frontend/js/jquery-migrate.min.js')}}' id='jquery-migrate-js'></script>
      <script>
         $(document).ready(function () {
            var modal = $('.modal');
            var btn = $('.quick-view');
            var span = $('.close');

            $('.quick-view').click(function () {
               var id = $(this).data('id');
               $.ajax({
                  type: 'post',
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  data: {id: id},
                  url: '/get-product-for-popup',
                  success: function(data) {
                  $('.modal-content').html(data.html);
                  $('.modal').show();         
                  }, 
                  error: function(data) {
                     console.log('lỗi');
                  }
               })
            });
            $('.wpb-get-a-quote-button-btn-default').click(function () {
               var id = $(this).data('id');
               $.ajax({
                  type: 'post',
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  data: {id: id},
                  url: '/get-product-for-contact',
                  success: function(data) {
                  $('.modal-content').html(data.html);
                  $('.modal').show();         
                  }, 
                  error: function(data) {
                     console.log('lỗi');
                  }
               })
            });


            span.click(function () {
               modal.hide();
            });

            $(window).on('click', function (e) {
               if ($(e.target).is('.modal')) {
                  modal.hide();
               }
            });
            });
      </script>
      <style>
         @media only screen and (max-width: 768px) {
            .modal {
               display: none;
               position: fixed;
               z-index: 99;
               padding-top: 100px;
               padding-left: 0px;
               padding-right: 0px;
               left: 0;
               top: 0;
               width: 100%;
               height: 100%;
               overflow: auto;
               background-color: rgb(0, 0, 0);
               background-color: rgba(0, 0, 0, .4);
               }
         }
         @media only screen and (min-width: 768px) {
            .modal {
               display: none;
               position: fixed;
               z-index: 99;
               padding-top: 100px;
               padding-left: 180px;
               padding-right: 180px;
               left: 0;
               top: 0;
               width: 100%;
               height: 100%;
               overflow: auto;
               background-color: rgb(0, 0, 0);
               background-color: rgba(0, 0, 0, .4);
               }
         }

         .modal-content {
         background-color: #fefefe;
         margin: auto;
         padding: 20px;
         border: 1px solid #888;
         width: 70%;
         }

         .close {
         color: #000;
         float: right;
         font-size: 28px;
         font-weight: bold;
         right: 24px;
         top: 20px;
         }

         .close:hover,
         .close:focus {
         color: #aaaaaa;
         text-decoration: none;
         cursor: pointer;
         }
      </style>
      <style>.bg{opacity: 0; transition: opacity 1s; -webkit-transition: opacity 1s;} .bg-loaded{opacity: 1;}</style>	
      <noscript>
      <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
      </noscript>
      <style id="custom-css" type="text/css">:root {--primary-color: #0c3d77;}html{background-color:#b5b5b5!important;}.container-width, .full-width .ubermenu-nav, .container, .row{max-width: 1170px}.row.row-collapse{max-width: 1140px}.row.row-small{max-width: 1162.5px}.row.row-large{max-width: 1200px}.sticky-add-to-cart--active, #wrapper,#main,#main.dark{background-color: #ffffff}.header-main{height: 100px}#logo img{max-height: 100px}#logo{width:210px;}#logo img{padding:1px 0;}.header-bottom{min-height: 55px}.header-top{min-height: 30px}.transparent .header-main{height: 90px}.transparent #logo img{max-height: 90px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 170px;}.header.show-on-scroll,.stuck .header-main{height:70px!important}.stuck #logo img{max-height: 70px!important}.search-form{ width: 68%;}.header-bottom {background-color: #0c3d77}.header-bottom-nav > li > a{line-height: 16px }@media (max-width: 549px) {.header-main{height: 70px}#logo img{max-height: 70px}}.header-top{background-color:#0c3d77!important;}/* Color */.accordion-title.active, .has-icon-bg .icon .icon-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color='primary'], .is-outline.primary{color: #0c3d77;}/* Color !important */[data-text-color="primary"]{color: #0c3d77!important;}/* Background Color */[data-text-bg="primary"]{background-color: #0c3d77;}/* Background */.scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .icon-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .header-vertical-menu__opener ,.is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner{background-color: #0c3d77;}/* Border */.nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover{border-color: #0c3d77}.nav-tabs > li.active > a{border-top-color: #0c3d77}.widget_shopping_cart_content .blockUI.blockOverlay:before { border-left-color: #0c3d77 }.woocommerce-checkout-review-order .blockUI.blockOverlay:before { border-left-color: #0c3d77 }/* Fill */.slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow{fill: #0c3d77;}/* Background Color */[data-icon-label]:after, .secondary.is-underline:hover,.secondary.is-outline:hover,.icon-label,.button.secondary:not(.is-outline),.button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button, .current .breadcrumb-step{ background-color:#0480f4; }[data-text-bg="secondary"]{background-color: #0480f4;}/* Color */.secondary.is-underline,.secondary.is-link, .secondary.is-outline,.stars a.active, .star-rating:before, .woocommerce-page .star-rating:before,.star-rating span:before, .color-secondary{color: #0480f4}/* Color !important */[data-text-color="secondary"]{color: #0480f4!important;}/* Border */.secondary.is-outline:hover{border-color:#0480f4}body{font-size: 100%;}body{font-family:"Roboto", sans-serif}body{font-weight: 0}body{color: #000000}.nav > li > a {font-family:"Roboto", sans-serif;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-family:"Roboto", sans-serif;}.nav > li > a {font-weight: 700;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "Roboto", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 700;}.alt-font{font-family: "Roboto", sans-serif;}.alt-font{font-weight: 0!important;}.header:not(.transparent) .header-bottom-nav.nav > li > a{color: #ffffff;}.header:not(.transparent) .header-bottom-nav.nav > li > a:hover,.header:not(.transparent) .header-bottom-nav.nav > li.active > a,.header:not(.transparent) .header-bottom-nav.nav > li.current > a,.header:not(.transparent) .header-bottom-nav.nav > li > a.active,.header:not(.transparent) .header-bottom-nav.nav > li > a.current{color: #0c3d77;}.header-bottom-nav.nav-line-bottom > li > a:before,.header-bottom-nav.nav-line-grow > li > a:before,.header-bottom-nav.nav-line > li > a:before,.header-bottom-nav.nav-box > li > a:hover,.header-bottom-nav.nav-box > li.active > a,.header-bottom-nav.nav-pills > li > a:hover,.header-bottom-nav.nav-pills > li.active > a{color:#FFF!important;background-color: #0c3d77;}a:hover{color: #0c3d77;}.tagcloud a:hover{border-color: #111111;background-color: #111111;}.shop-page-title.featured-title .title-overlay{background-color: rgba(232,232,232,0.3);}@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 220px!important;width: 220px!important;}}.absolute-footer, html{background-color: #000000}.page-title-small + main .product-container > .row{padding-top:0;}/* Custom CSS */.quadmenu-description{display:none!important;}h1.product_title{ font-size: 20px;color: #0c3d77;}.khuyen-mai{border: 1px solid #0c3d77;padding: 8px;font-size: 15px;border-radius: 8px;margin-bottom: 15px;line-height: 18px;}.khuyen-mai li{list-style:none;}#block_widget-4,#block_widget-3{border: 1px solid #dfdfdf;border-radius: 2pborder-radius:8px;padding: 2px;}#block_widget-4 .box-vertical h5,#block_widget-3 .box-vertical h5{overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;font-size: 14px;}p.hiden-vantheweb{display:none;}.box-text .wpb-get-a-quote-button-btn.wpb-get-a-quote-button-btn-medium {margin: auto; }.wpb-get-a-quote-button-btn.wpb-get-a-quote-button-btn-medium {padding: 8px 15px 10px;font-size: 15px;background: #0c3d77;border-radius: 10px;/* box-shadow: -1px 1px 1px 1px #000; */}/* Custom CSS Mobile */@media (max-width: 549px){div.tab-panels img {width: 100%!important;height: auto;}}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}</style>
      <style type="text/css" id="wp-custom-css">
      .header.show-on-scroll, .stuck .header-main {    
      DISPLAY: none;
      }
      .section-title-normal span {
      clear: both;
      border-bottom: 1px solid #0c3d77!important;
      }
      /*menumain*/
      .header-bottom-nav.nav-line-bottom > li > a:before, .header-bottom-nav.nav-line-grow > li > a:before, .header-bottom-nav.nav-line > li > a:before, .header-bottom-nav.nav-box > li > a:hover, .header-bottom-nav.nav-box > li.active > a, .header-bottom-nav.nav-pills > li > a:hover, .header-bottom-nav.nav-pills > li.active > a {
      color: #FFF!important;
      background-color: #0c3d77;
      padding: 20px 10px;
      }
      #block_widget-3 img{
         height: auto;
      }
      /*megamenu*/
      .nav-dropdown .menu-item-has-children>a, .nav-dropdown .title>a, .nav-dropdown .nav-dropdown-col>a {
      text-transform: uppercase;
      font-size: 1em;
      font-weight: bolder;
      color: #0c3d77;
      }
      /*title san pham*/
      .section-title-normal {
      border-bottom: 1px solid #0c3d77;
      }
      /*boder widget*/
      .widget_nav_menu, ul.product_list_widget,
      .flatsome_recent_posts, .textwidget, .widget_nav_menu, #shop-sidebar .textwidget, #product-sidebar .textwidget {
      background: #fff;
      border: 1px solid #dfdfdf;
      border-radius: 2px;
      }
      .widget-title, .widget_nav_menu .widget-title, span.widget-title {
      background: #0c3d77;
      color:white;
      font-size:15px;
      float: none;
      padding: 10px 20px 7px;
      border-radius: 5px 5px 0 0px;
      width: 100%;
      display: -webkit-inline-box;
      max-width: 100%;
      margin-top: -5px;
      }
      .widget .is-divider {
      display: none;
      }
      /*title widget*/
      .section-title span {
      text-transform: uppercase;
      color: #0c3d77;
      }.section-title span {
      text-transform: uppercase;
      color: #0c3d77;
      }
      /*cat chu tin tuc noi bat widget*/
      .recent-blog-posts a { 
      overflow: hidden;
      text-overflow: ellipsis;
      -webkit-line-clamp: 2;
      display: -webkit-box;
      -webkit-box-orient: vertical;
      }
      /*tieu de san pham*/
      .box-text h1, .box-text h2, .box-text h3, .box-text h4, .box-text h5, .box-text h6, .box-text a:not(.button) {
      font-weight: bold;
      color: #0c3d77;
      }
      /*sidebar gioi thieu*/
      .widget li {
      list-style: none;
      margin-left: 1.3em;
      }
      /**sibar danh muc*/
      .product-categories{background: #fff;
      border: 1px solid #dfdfdf;
      border-radius: 2px;
      }
      ul.menu>li.has-child, .widget>ul>li.has-child {
      margin-left: 10px;
      margin-right:5px;
      padding: 7px 5px 3px 36px;
      background: url({{url('frontend/images/icon_star.png')}}) no-repeat top 10px left 0px;
      font-size: 14px;
      text-transform: uppercase;
      transition: all 0.5s;
      }
      ul.menu>li.has-child:hover, .widget>ul>li.has-child:hover {
         padding-left: 46px;
         background: url({{url('frontend/images/icon_star.png')}}) no-repeat top 10px left 10px;
         transition: all 0.5s;
      }
      /*xem nhanh san pham trang chu*/
      .flickity-viewport .image-tools a:last-child {
      margin-bottom: 7px;
      }
      .header.show-on-scroll, .stuck .header-main {    
      DISPLAY: none;
      }
      /*menumain*/
      .header-bottom-nav.nav-line-bottom > li > a:before, .header-bottom-nav.nav-line-grow > li > a:before, .header-bottom-nav.nav-line > li > a:before, .header-bottom-nav.nav-box > li > a:hover, .header-bottom-nav.nav-box > li.active > a, .header-bottom-nav.nav-pills > li > a:hover, .header-bottom-nav.nav-pills > li.active > a {
      color: #FFF!important;
      background-color: #0c3d77;
      padding: 20px 10px;
      }
      /*megamenu*/
      .nav-dropdown .menu-item-has-children>a, .nav-dropdown .title>a, .nav-dropdown .nav-dropdown-col>a {
      text-transform: uppercase;
      font-size: 1em;
      font-weight: bolder;
      color: #0c3d77;
      }
      /*title san pham*/
      .section-title-normal {
      border-bottom: 1px solid #0c3d77;
      }
      /*boder widget*/
      .widget_nav_menu, .textwidget, .widget_nav_menu, #shop-sidebar .textwidget, #product-sidebar .textwidget {
      background: #fff;
      border: 1px solid #dfdfdf;
      border-radius: 2px;
      }
      .widget-title, .widget_nav_menu .widget-title, span.widget-title {
      background: #0c3d77;
      color:white;
      font-size:15px;
      float: none;
      padding: 10px 20px 7px;
      border-radius: 5px 5px 0 0px;
      width: 100%;
      display: -webkit-inline-box;
      max-width: 100%;
      margin-top: -5px;
      }
      .widget .is-divider {
      display: none;
      }
      /*title widget*/
      .section-title span {
      text-transform: uppercase;
      color: #0c3d77;
      }.section-title span {
      text-transform: uppercase;
      color: #0c3d77;
      }
      /*tieu de san pham*/
      .box-text h1, .box-text h2, .box-text h3, .box-text h4, .box-text h5, .box-text h6, .box-text a:not(.button) {
      font-weight: bold;
      color: #0c3d77;
      }
      /*sidebar gioi thieu*/
      .widget li {
      list-style: none;
      margin-left: 1.3em;
      }
      /**sibar danh muc*/
      .product-categories{background: #fff;
      border: 1px solid #dfdfdf;
      border-radius: 2px;
      }
      ul.menu>li.has-child, .widget>ul>li.has-child {
      margin-left: 10px;
      margin-right:5px;
      }
      /*xem nhanh san pham trang chu*/
      .flickity-viewport .image-tools a:last-child {
      margin-bottom: 7px;
      }
      .vi-left-title span{
      width: auto;
      background: #0c3d77;
      color: #fff;   
      font-size: 18px;
      position: relative;
      margin: 0;
      font-size: 17px!important;
      }
      /* kich thuoc anh chi tiet mo ta*/
      /*pading*/
      li .recent-blog-posts {
      padding: 10px 7px 10px;
      }
      ul.product_list_widget  img {
      margin-left:7px;
      }
      .nptruyen-content .section-title b {
      display: block;
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      height: 1px;
      opacity: .1;
      background-color: currentColor;
      margin-top: 31px;
      color: #0c3d77;
      background: #0c3d77;
      opacity: 1;
      }.nptruyen-content .section-title a {   
      font-size: 14px;
      color: white;
      }
      .nptruyen-content .section-title-bold-center span, .section-title-bold span {    
      border: none;
      }
      .nptruyen-content .vi-left-title span:after {
      border: 16px solid transparent;
      border-left-color: #0c3d77;
      border-bottom-color: #0c3d77;
      position: absolute;
      top: 0px;
      left: 100%;
      content: "";
      }.nptruyen-content .section-title a {   
      margin-left: -85px;
      }
      .nptruyen-content h1.product-title{
      color:#0c3d77;
      font-size:20px;
      }
      .nptruyen-content .product-section-title {
      color:#0c3d77;
      } 
      /*xem nhanh*/
      .nptruyen-content .image-tools a:last-child {
      margin-bottom: 8px!important;
      }
      .product-thumbnails img {
      margin-bottom: -5px;
      opacity: 0.5;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      -webkit-transition: opacity 0.6s, -webkit-transform 0.6s;
      transition: opacity 0.6s, -webkit-transform 0.6s;
      -o-transition: transform 0.6s, opacity 0.6s;
      transition: transform 0.6s, opacity 0.6s;
      transition: transform 0.6s, opacity 0.6s, -webkit-transform 0.6s;
      width: 100%;
      height: 76px;
      }
      .nptruyen-content .section-title b{
      display:none!important;
      }.nptruyen-content .section-title{
      background: #880000;
      padding-right: 10px;}
      .vantheweb-blog h5.post-title{
      overflow: hidden;
      text-overflow: ellipsis;
      -webkit-line-clamp: 1;
      display: -webkit-box;
      -webkit-box-orient: vertical;}
      .tab-panels h2, .tab-panels h3
      {    color: #0c3d77!important;
      font-size: 23px!important;}
      .tab-panels p{
      line-height: 43px;
      font-size: 20px;}
      /*lien he bao gia*/
      </style>
   </head>
   <body data-rsssl=1 class="home page-template page-template-page-blank page-template-page-blank-php page page-id-2 theme-flatsome woocommerce-no-js full-width lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border">
      <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
      <div id="wrapper">
      @include('layouts.header.index')
      @yield('content')
      @include('layouts.footer.index')
      </div>
      <div class="modal">
         <span class="close">&times;</span>
         <div class="modal-content">
         </div>
      </div>
      <div id="fl813691" style="height: 222px;">
         <div id="eb951855">
            <div id="cob263512">
               <div id="coh963846">
                  <ul id="coc67178">
                     <li id="pf204652hide">
                        <a class="min" href="javascript:pf204652clickhide();" title="Ẩn  đi">Ẩn</a>
                     </li>
                     <li id="pf204652show" style="display: none;">
                        <a class="max" href="javascript:pf204652clickshow();" title="Hiện  lại">Xem </a>
                     </li>
                  </ul>
                  <h5 style="padding-left: 10px; color: white;">HỖ TRỢ TRỰC TUYẾN</h5>
               </div>
               <div id="co453569">
                  <!-- code ads -->
                  {{-- <img src="{{url('frontend/images/popupTT-2.jpg')}}" loading="lazy"> --}}
                  <p style="color: #0c3d77"><strong>HOTLINE: </strong><a href="tel:{{$setting->phone1}}" style="color: #880000">{{$setting->phone1}}</a></p>
                  @if ($setting->phone2)
                     <p style="color: #0c3d77"><strong>TEL 1: </strong><a href="tel:{{$setting->phone2}}" style="color: #880000">{{$setting->phone2}}</a></p>
                  @endif
                  @if ($setting->phone3)
                     <p style="color: #0c3d77"><strong>TEL 2: </strong><a href="tel:{{$setting->phone3}}" style="color: #880000">{{$setting->phone3}}</a></p>
                  @endif
                  <p style="color: #0c3d77"><strong>FACEBOOK: </strong></p><p><a href="{{$setting->facebook}}" style="color: #880000">CTy TMSX T&T Hà Nội</a></p>
                  <!-- code ads -->
                  <script>      
                     //<![CDATA[
                     pf204652bottomLayer = document.getElementById('fl813691');    
                     var pf204652IntervalId = 0;    
                     var pf204652maxHeight = 220;//Chieu cao khung quang cao     
                     
                     var pf204652minHeight = 20;    
                     var pf204652curHeight = 0;    
                     function pf204652show(){pf204652curHeight+=2,pf204652curHeight>pf204652maxHeight&&clearInterval(pf204652IntervalId),pf204652bottomLayer.style.height=pf204652curHeight+"px"}function pf204652hide(){pf204652curHeight-=3,pf204652curHeight<pf204652minHeight&&clearInterval(pf204652IntervalId),pf204652bottomLayer.style.height=pf204652curHeight+"px"}function pf204652clickhide(){document.getElementById("pf204652hide").style.display="none",document.getElementById("pf204652show").style.display="inline",pf204652IntervalId=setInterval("pf204652hide()",5)}function pf204652clickshow(){document.getElementById("pf204652hide").style.display="inline",document.getElementById("pf204652show").style.display="none",pf204652IntervalId=setInterval("pf204652show()",5)}function pf204652clickclose(){document.body.style.marginBottom="0px",pf204652bottomLayer.style.display="none"}pf204652IntervalId=setInterval("pf204652show()",5);
                     //]]>  
                     
                  </script>
               </div>
            </div>
         </div>
      </div>
      <!-- if gom all in one show -->
      <div id="button-contact-vr" class="">
      <div id="gom-all-in-one">
            <!-- v3 -->
            <!-- contact -->
            <!-- end contact -->
            <!-- viber -->
            <!-- end viber -->
            <!-- zalo -->
            <div id="zalo-vr" class="button-contact">
               <div class="phone-vr">
                  <div class="phone-vr-circle-fill"></div>
                  <div class="phone-vr-img-circle">
                  <a target="_blank" href="https://zalo.me/{{$setting->phone1}}">				
                  <img src="{{url('frontend/images/zalo.png')}}" loading="lazy" />
                  </a>
                  </div>
               </div>
            </div>
            <!-- end zalo -->
            <!-- Phone -->
            <div id="phone-vr" class="button-contact">
               <div class="phone-vr">
                  <div class="phone-vr-circle-fill"></div>
                  <div class="phone-vr-img-circle">
                  <a href="tel:{{$setting->phone1}}">				
                  <img src="{{url('frontend/images/phone.png')}}" loading="lazy" />
                  </a>
                  </div>
               </div>
            </div>
            <!-- end phone -->
      </div>
      <!-- end v3 class gom-all-in-one -->
      </div>
      <!-- Facebook Messenger -->
      <!-- color phone -->
      <!-- color contact -->
      <!-- color all in one -->
      <!-- size scale -->
      <style>
      #button-contact-vr {transform: scale(0.9);}
      #fl813691 {
         position: fixed;
         z-index: 9999;
         right: 0;
         border-radius: 4px 4px 0 0;
         bottom: 0;
         padding: 0px;
         background: #3b5998;
      }
      #eb951855 {
         width: 210px;
         position: relative;
      }
      #coh963846 {
         color: #690;
         display: block;
         height: 20px;
         line-height: 20px;
         font-size: 15px;
         width: 100%;
      }
      #coc67178 {
         float: right;
         padding: 0;
         margin: 0px;
         list-style: none;
         overflow: hidden;
         height: 15px;
      }
      #coc67178 li {
         display: inline;
      }
      #coc67178 li a.min {
         background-position: -30px 0;
      }
      #coc67178 li a {
         background-image: url(http://4.bp.blogspot.com/-53EJchH_4Bw/T2L-dTcqXNI/AAAAAAAAAng/RYJUMdSQLPQ/s1600/closebutton-namkna.gif);
         background-repeat: no-repeat;
         width: 30px;
         height: 10;
         padding-top: 55px;
         overflow: hidden;
         float: left;
      }
      #coh963846 a {
         color: #690;
         text-decoration: none;
      }
      #coc67178 li a.max {
         background-position: -60px 0;
      }
      #co453569 {
         display: block;
         width: 100%;
         height: 222px;
         position: absolute;
         z-index: 9999;
         background-color: #f5f6f7;
         padding: 20px 10px;
         text-align: center;
      }
      #co453569 p{
         margin-bottom: 5px;
      }
      </style>
      <!-- location left right -->
      <style>
      #button-contact-vr {left:0;}
      .phone-bar a {left: auto;right: 30px;padding: 8px 55px 7px 15px;}
      #button-contact-vr.active #gom-all-in-one .button-contact {margin-left: 100%;}
      </style>
      <!-- location bottom -->
      <style>
      #button-contact-vr {bottom: 20%;}
      </style>
      <style id='global-styles-inline-css' type='text/css'>
      body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
      </style>
      <script  data-wpmeteor-after="REORDER" type="javascript/blocked" data-src='{{asset('frontend/js/jquery.blockUI.min.js')}}' id='jquery-blockui-js'></script>
      <script  data-wpmeteor-after="REORDER" type="javascript/blocked" data-src='{{asset('frontend/js/owl.carousel.min.js')}}' id='owlcarousel-js'></script>
      <script  data-wpmeteor-after="REORDER" type="javascript/blocked" data-src='{{asset('frontend/js/hoverIntent.min.js')}}' id='hoverIntent-js'></script>
      <script  data-wpmeteor-after="REORDER" type="javascript/blocked" id='quadmenu-js-extra'>
      /* <![CDATA[ */
      var quadmenu = {"ajaxurl":"","gutter":"30"};
      /* ]]> */
      </script>
      <script data-wpmeteor-after="REORDER" type="javascript/blocked" data-src='{{asset('frontend/js/quadmenu.min.js')}}' id='quadmenu-js'></script>
      <script data-wpmeteor-after="REORDER" type="javascript/blocked" id='flatsome-js-js-extra'>
      /* <![CDATA[ */
      var flatsomeVars = {"theme":{"version":"3.15.5"},"ajaxurl":"","rtl":"","sticky_height":"70","assets_url":"","lightbox":{"close_markup":"<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>","close_btn_inside":false},"user":{"can_edit_pages":false},"i18n":{"mainMenu":"Main Menu","toggleButton":"Toggle"},"options":{"cookie_notice_version":"1","swatches_layout":false,"swatches_box_select_event":false,"swatches_box_behavior_selected":false,"swatches_box_update_urls":"1","swatches_box_reset":false,"swatches_box_reset_extent":false,"swatches_box_reset_time":300,"search_result_latency":"0"},"is_mini_cart_reveal":""};
      /* ]]> */
      </script>
      <script  data-wpmeteor-after="REORDER" data-minify="1" type="javascript/blocked" data-src='{{asset('frontend/js/flatsome.js')}}' id='flatsome-js-js'></script>
      <script  data-wpmeteor-after="REORDER" data-minify="1" type="javascript/blocked" data-src='{{asset('frontend/js/flatsome-lazy-load.js')}}' id='flatsome-lazy-js'></script>
      <script  data-wpmeteor-after="REORDER" data-minify="1" type="javascript/blocked" data-src='{{asset('frontend/js/woocommerce.js')}}' id='flatsome-theme-woocommerce-js-js'></script>
      <script  data-wpmeteor-after="REORDER" type="javascript/blocked" data-src='{{asset('frontend/js/mediaelement-and-player.min.js')}}' id='mediaelement-core-js'></script>
      <script  data-wpmeteor-after="REORDER" type="javascript/blocked" id='mediaelement-js-extra'>
      /* <![CDATA[ */
      var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
      /* ]]> */
      </script>
      <script  data-wpmeteor-after="REORDER" type="javascript/blocked" data-src='{{asset('frontend/js/wp-mediaelement.min.js')}}' id='wp-mediaelement-js'></script>
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="fkhz6VmZ"></script>
   </body>
</html>