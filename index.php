<?php 

include "configuration.php";

// var_dump($badges);

$rank = getProfileData();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

		<title>Profiel van OrdiGe - escapetalk.nl</title>
		<meta name="description" content="Bekijk het profiel van OrdiGe.">

		<!-- Powered by Lift 3 - www.lift3.nl -->

		<meta name="author" content="Escapetalk.nl">
		<meta name="robots" content="noodp, noydir, follow, index">

		<meta property="og:image" content="https://escapetalk.nl/og.png">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">
		<meta property="og:title" content="Profiel van OrdiGe - escapetalk.nl">
		<meta property="og:description" content="Bekijk het profiel van OrdiGe.">
		<meta property="og:url" content="https://escapetalk.nl/profiel/">
		<meta property="og:locale" content="nl_US">
		<meta property="og:type" content="website">

		<style type="text/css">:host,:root{--fa-font-solid:normal 900 1em/1 "Font Awesome 6 Solid";--fa-font-regular:normal 400 1em/1 "Font Awesome 6 Regular";--fa-font-light:normal 300 1em/1 "Font Awesome 6 Light";--fa-font-thin:normal 100 1em/1 "Font Awesome 6 Thin";--fa-font-duotone:normal 900 1em/1 "Font Awesome 6 Duotone";--fa-font-brands:normal 400 1em/1 "Font Awesome 6 Brands"}svg:not(:host).svg-inline--fa,svg:not(:root).svg-inline--fa{overflow:visible;box-sizing:content-box}.svg-inline--fa{display:var(--fa-display,inline-block);height:1em;overflow:visible;vertical-align:-.125em}.svg-inline--fa.fa-2xs{vertical-align:.1em}.svg-inline--fa.fa-xs{vertical-align:0}.svg-inline--fa.fa-sm{vertical-align:-.0714285705em}.svg-inline--fa.fa-lg{vertical-align:-.2em}.svg-inline--fa.fa-xl{vertical-align:-.25em}.svg-inline--fa.fa-2xl{vertical-align:-.3125em}.svg-inline--fa.fa-pull-left{margin-right:var(--fa-pull-margin,.3em);width:auto}.svg-inline--fa.fa-pull-right{margin-left:var(--fa-pull-margin,.3em);width:auto}.svg-inline--fa.fa-li{width:var(--fa-li-width,2em);top:.25em}.svg-inline--fa.fa-fw{width:var(--fa-fw-width,1.25em)}.fa-layers svg.svg-inline--fa{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.fa-layers-counter,.fa-layers-text{display:inline-block;position:absolute;text-align:center}.fa-layers{display:inline-block;height:1em;position:relative;text-align:center;vertical-align:-.125em;width:1em}.fa-layers svg.svg-inline--fa{-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-text{left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter{background-color:var(--fa-counter-background-color,#ff253a);border-radius:var(--fa-counter-border-radius,1em);box-sizing:border-box;color:var(--fa-inverse,#fff);line-height:var(--fa-counter-line-height,1);max-width:var(--fa-counter-max-width,5em);min-width:var(--fa-counter-min-width,1.5em);overflow:hidden;padding:var(--fa-counter-padding,.25em .5em);right:var(--fa-right,0);text-overflow:ellipsis;top:var(--fa-top,0);-webkit-transform:scale(var(--fa-counter-scale,.25));transform:scale(var(--fa-counter-scale,.25));-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-bottom-right{bottom:var(--fa-bottom,0);right:var(--fa-right,0);top:auto;-webkit-transform:scale(var(--fa-layers-scale,.25));transform:scale(var(--fa-layers-scale,.25));-webkit-transform-origin:bottom right;transform-origin:bottom right}.fa-layers-bottom-left{bottom:var(--fa-bottom,0);left:var(--fa-left,0);right:auto;top:auto;-webkit-transform:scale(var(--fa-layers-scale,.25));transform:scale(var(--fa-layers-scale,.25));-webkit-transform-origin:bottom left;transform-origin:bottom left}.fa-layers-top-right{top:var(--fa-top,0);right:var(--fa-right,0);-webkit-transform:scale(var(--fa-layers-scale,.25));transform:scale(var(--fa-layers-scale,.25));-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-top-left{left:var(--fa-left,0);right:auto;top:var(--fa-top,0);-webkit-transform:scale(var(--fa-layers-scale,.25));transform:scale(var(--fa-layers-scale,.25));-webkit-transform-origin:top left;transform-origin:top left}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-2xs{font-size:.625em;line-height:.1em;vertical-align:.225em}.fa-xs{font-size:.75em;line-height:.0833333337em;vertical-align:.125em}.fa-sm{font-size:.875em;line-height:.0714285718em;vertical-align:.0535714295em}.fa-lg{font-size:1.25em;line-height:.05em;vertical-align:-.075em}.fa-xl{font-size:1.5em;line-height:.0416666682em;vertical-align:-.125em}.fa-2xl{font-size:2em;line-height:.03125em;vertical-align:-.1875em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:var(--fa-li-margin,2.5em);padding-left:0}.fa-ul>li{position:relative}.fa-li{left:calc(var(--fa-li-width,2em) * -1);position:absolute;text-align:center;width:var(--fa-li-width,2em);line-height:inherit}.fa-border{border-color:var(--fa-border-color,#eee);border-radius:var(--fa-border-radius,.1em);border-style:var(--fa-border-style,solid);border-width:var(--fa-border-width,.08em);padding:var(--fa-border-padding,.2em .25em .15em)}.fa-pull-left{float:left;margin-right:var(--fa-pull-margin,.3em)}.fa-pull-right{float:right;margin-left:var(--fa-pull-margin,.3em)}.fa-beat{-webkit-animation-name:fa-beat;animation-name:fa-beat;-webkit-animation-delay:var(--fa-animation-delay,0);animation-delay:var(--fa-animation-delay,0);-webkit-animation-direction:var(--fa-animation-direction,normal);animation-direction:var(--fa-animation-direction,normal);-webkit-animation-duration:var(--fa-animation-duration,1s);animation-duration:var(--fa-animation-duration,1s);-webkit-animation-iteration-count:var(--fa-animation-iteration-count,infinite);animation-iteration-count:var(--fa-animation-iteration-count,infinite);-webkit-animation-timing-function:var(--fa-animation-timing,ease-in-out);animation-timing-function:var(--fa-animation-timing,ease-in-out)}.fa-bounce{-webkit-animation-name:fa-bounce;animation-name:fa-bounce;-webkit-animation-delay:var(--fa-animation-delay,0);animation-delay:var(--fa-animation-delay,0);-webkit-animation-direction:var(--fa-animation-direction,normal);animation-direction:var(--fa-animation-direction,normal);-webkit-animation-duration:var(--fa-animation-duration,1s);animation-duration:var(--fa-animation-duration,1s);-webkit-animation-iteration-count:var(--fa-animation-iteration-count,infinite);animation-iteration-count:var(--fa-animation-iteration-count,infinite);-webkit-animation-timing-function:var(--fa-animation-timing,cubic-bezier(.28,.84,.42,1));animation-timing-function:var(--fa-animation-timing,cubic-bezier(.28,.84,.42,1))}.fa-fade{-webkit-animation-name:fa-fade;animation-name:fa-fade;-webkit-animation-delay:var(--fa-animation-delay,0);animation-delay:var(--fa-animation-delay,0);-webkit-animation-direction:var(--fa-animation-direction,normal);animation-direction:var(--fa-animation-direction,normal);-webkit-animation-duration:var(--fa-animation-duration,1s);animation-duration:var(--fa-animation-duration,1s);-webkit-animation-iteration-count:var(--fa-animation-iteration-count,infinite);animation-iteration-count:var(--fa-animation-iteration-count,infinite);-webkit-animation-timing-function:var(--fa-animation-timing,cubic-bezier(.4,0,.6,1));animation-timing-function:var(--fa-animation-timing,cubic-bezier(.4,0,.6,1))}.fa-beat-fade{-webkit-animation-name:fa-beat-fade;animation-name:fa-beat-fade;-webkit-animation-delay:var(--fa-animation-delay,0);animation-delay:var(--fa-animation-delay,0);-webkit-animation-direction:var(--fa-animation-direction,normal);animation-direction:var(--fa-animation-direction,normal);-webkit-animation-duration:var(--fa-animation-duration,1s);animation-duration:var(--fa-animation-duration,1s);-webkit-animation-iteration-count:var(--fa-animation-iteration-count,infinite);animation-iteration-count:var(--fa-animation-iteration-count,infinite);-webkit-animation-timing-function:var(--fa-animation-timing,cubic-bezier(.4,0,.6,1));animation-timing-function:var(--fa-animation-timing,cubic-bezier(.4,0,.6,1))}.fa-flip{-webkit-animation-name:fa-flip;animation-name:fa-flip;-webkit-animation-delay:var(--fa-animation-delay,0);animation-delay:var(--fa-animation-delay,0);-webkit-animation-direction:var(--fa-animation-direction,normal);animation-direction:var(--fa-animation-direction,normal);-webkit-animation-duration:var(--fa-animation-duration,1s);animation-duration:var(--fa-animation-duration,1s);-webkit-animation-iteration-count:var(--fa-animation-iteration-count,infinite);animation-iteration-count:var(--fa-animation-iteration-count,infinite);-webkit-animation-timing-function:var(--fa-animation-timing,ease-in-out);animation-timing-function:var(--fa-animation-timing,ease-in-out)}.fa-shake{-webkit-animation-name:fa-shake;animation-name:fa-shake;-webkit-animation-delay:var(--fa-animation-delay,0);animation-delay:var(--fa-animation-delay,0);-webkit-animation-direction:var(--fa-animation-direction,normal);animation-direction:var(--fa-animation-direction,normal);-webkit-animation-duration:var(--fa-animation-duration,1s);animation-duration:var(--fa-animation-duration,1s);-webkit-animation-iteration-count:var(--fa-animation-iteration-count,infinite);animation-iteration-count:var(--fa-animation-iteration-count,infinite);-webkit-animation-timing-function:var(--fa-animation-timing,linear);animation-timing-function:var(--fa-animation-timing,linear)}.fa-spin{-webkit-animation-name:fa-spin;animation-name:fa-spin;-webkit-animation-delay:var(--fa-animation-delay,0);animation-delay:var(--fa-animation-delay,0);-webkit-animation-direction:var(--fa-animation-direction,normal);animation-direction:var(--fa-animation-direction,normal);-webkit-animation-duration:var(--fa-animation-duration,2s);animation-duration:var(--fa-animation-duration,2s);-webkit-animation-iteration-count:var(--fa-animation-iteration-count,infinite);animation-iteration-count:var(--fa-animation-iteration-count,infinite);-webkit-animation-timing-function:var(--fa-animation-timing,linear);animation-timing-function:var(--fa-animation-timing,linear)}.fa-spin-reverse{--fa-animation-direction:reverse}.fa-pulse,.fa-spin-pulse{-webkit-animation-name:fa-spin;animation-name:fa-spin;-webkit-animation-direction:var(--fa-animation-direction,normal);animation-direction:var(--fa-animation-direction,normal);-webkit-animation-duration:var(--fa-animation-duration,1s);animation-duration:var(--fa-animation-duration,1s);-webkit-animation-iteration-count:var(--fa-animation-iteration-count,infinite);animation-iteration-count:var(--fa-animation-iteration-count,infinite);-webkit-animation-timing-function:var(--fa-animation-timing,steps(8));animation-timing-function:var(--fa-animation-timing,steps(8))}@media (prefers-reduced-motion:reduce){.fa-beat,.fa-beat-fade,.fa-bounce,.fa-fade,.fa-flip,.fa-pulse,.fa-shake,.fa-spin,.fa-spin-pulse{-webkit-animation-delay:-1ms;animation-delay:-1ms;-webkit-animation-duration:1ms;animation-duration:1ms;-webkit-animation-iteration-count:1;animation-iteration-count:1;-webkit-transition-delay:0s;transition-delay:0s;-webkit-transition-duration:0s;transition-duration:0s}}@-webkit-keyframes fa-beat{0%,90%{-webkit-transform:scale(1);transform:scale(1)}45%{-webkit-transform:scale(var(--fa-beat-scale,1.25));transform:scale(var(--fa-beat-scale,1.25))}}@keyframes fa-beat{0%,90%{-webkit-transform:scale(1);transform:scale(1)}45%{-webkit-transform:scale(var(--fa-beat-scale,1.25));transform:scale(var(--fa-beat-scale,1.25))}}@-webkit-keyframes fa-bounce{0%{-webkit-transform:scale(1,1) translateY(0);transform:scale(1,1) translateY(0)}10%{-webkit-transform:scale(var(--fa-bounce-start-scale-x,1.1),var(--fa-bounce-start-scale-y,.9)) translateY(0);transform:scale(var(--fa-bounce-start-scale-x,1.1),var(--fa-bounce-start-scale-y,.9)) translateY(0)}30%{-webkit-transform:scale(var(--fa-bounce-jump-scale-x,.9),var(--fa-bounce-jump-scale-y,1.1)) translateY(var(--fa-bounce-height,-.5em));transform:scale(var(--fa-bounce-jump-scale-x,.9),var(--fa-bounce-jump-scale-y,1.1)) translateY(var(--fa-bounce-height,-.5em))}50%{-webkit-transform:scale(var(--fa-bounce-land-scale-x,1.05),var(--fa-bounce-land-scale-y,.95)) translateY(0);transform:scale(var(--fa-bounce-land-scale-x,1.05),var(--fa-bounce-land-scale-y,.95)) translateY(0)}57%{-webkit-transform:scale(1,1) translateY(var(--fa-bounce-rebound,-.125em));transform:scale(1,1) translateY(var(--fa-bounce-rebound,-.125em))}64%{-webkit-transform:scale(1,1) translateY(0);transform:scale(1,1) translateY(0)}100%{-webkit-transform:scale(1,1) translateY(0);transform:scale(1,1) translateY(0)}}@keyframes fa-bounce{0%{-webkit-transform:scale(1,1) translateY(0);transform:scale(1,1) translateY(0)}10%{-webkit-transform:scale(var(--fa-bounce-start-scale-x,1.1),var(--fa-bounce-start-scale-y,.9)) translateY(0);transform:scale(var(--fa-bounce-start-scale-x,1.1),var(--fa-bounce-start-scale-y,.9)) translateY(0)}30%{-webkit-transform:scale(var(--fa-bounce-jump-scale-x,.9),var(--fa-bounce-jump-scale-y,1.1)) translateY(var(--fa-bounce-height,-.5em));transform:scale(var(--fa-bounce-jump-scale-x,.9),var(--fa-bounce-jump-scale-y,1.1)) translateY(var(--fa-bounce-height,-.5em))}50%{-webkit-transform:scale(var(--fa-bounce-land-scale-x,1.05),var(--fa-bounce-land-scale-y,.95)) translateY(0);transform:scale(var(--fa-bounce-land-scale-x,1.05),var(--fa-bounce-land-scale-y,.95)) translateY(0)}57%{-webkit-transform:scale(1,1) translateY(var(--fa-bounce-rebound,-.125em));transform:scale(1,1) translateY(var(--fa-bounce-rebound,-.125em))}64%{-webkit-transform:scale(1,1) translateY(0);transform:scale(1,1) translateY(0)}100%{-webkit-transform:scale(1,1) translateY(0);transform:scale(1,1) translateY(0)}}@-webkit-keyframes fa-fade{50%{opacity:var(--fa-fade-opacity,.4)}}@keyframes fa-fade{50%{opacity:var(--fa-fade-opacity,.4)}}@-webkit-keyframes fa-beat-fade{0%,100%{opacity:var(--fa-beat-fade-opacity,.4);-webkit-transform:scale(1);transform:scale(1)}50%{opacity:1;-webkit-transform:scale(var(--fa-beat-fade-scale,1.125));transform:scale(var(--fa-beat-fade-scale,1.125))}}@keyframes fa-beat-fade{0%,100%{opacity:var(--fa-beat-fade-opacity,.4);-webkit-transform:scale(1);transform:scale(1)}50%{opacity:1;-webkit-transform:scale(var(--fa-beat-fade-scale,1.125));transform:scale(var(--fa-beat-fade-scale,1.125))}}@-webkit-keyframes fa-flip{50%{-webkit-transform:rotate3d(var(--fa-flip-x,0),var(--fa-flip-y,1),var(--fa-flip-z,0),var(--fa-flip-angle,-180deg));transform:rotate3d(var(--fa-flip-x,0),var(--fa-flip-y,1),var(--fa-flip-z,0),var(--fa-flip-angle,-180deg))}}@keyframes fa-flip{50%{-webkit-transform:rotate3d(var(--fa-flip-x,0),var(--fa-flip-y,1),var(--fa-flip-z,0),var(--fa-flip-angle,-180deg));transform:rotate3d(var(--fa-flip-x,0),var(--fa-flip-y,1),var(--fa-flip-z,0),var(--fa-flip-angle,-180deg))}}@-webkit-keyframes fa-shake{0%{-webkit-transform:rotate(-15deg);transform:rotate(-15deg)}4%{-webkit-transform:rotate(15deg);transform:rotate(15deg)}24%,8%{-webkit-transform:rotate(-18deg);transform:rotate(-18deg)}12%,28%{-webkit-transform:rotate(18deg);transform:rotate(18deg)}16%{-webkit-transform:rotate(-22deg);transform:rotate(-22deg)}20%{-webkit-transform:rotate(22deg);transform:rotate(22deg)}32%{-webkit-transform:rotate(-12deg);transform:rotate(-12deg)}36%{-webkit-transform:rotate(12deg);transform:rotate(12deg)}100%,40%{-webkit-transform:rotate(0);transform:rotate(0)}}@keyframes fa-shake{0%{-webkit-transform:rotate(-15deg);transform:rotate(-15deg)}4%{-webkit-transform:rotate(15deg);transform:rotate(15deg)}24%,8%{-webkit-transform:rotate(-18deg);transform:rotate(-18deg)}12%,28%{-webkit-transform:rotate(18deg);transform:rotate(18deg)}16%{-webkit-transform:rotate(-22deg);transform:rotate(-22deg)}20%{-webkit-transform:rotate(22deg);transform:rotate(22deg)}32%{-webkit-transform:rotate(-12deg);transform:rotate(-12deg)}36%{-webkit-transform:rotate(12deg);transform:rotate(12deg)}100%,40%{-webkit-transform:rotate(0);transform:rotate(0)}}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.fa-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.fa-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.fa-flip-both,.fa-flip-horizontal.fa-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}.fa-rotate-by{-webkit-transform:rotate(var(--fa-rotate-angle,none));transform:rotate(var(--fa-rotate-angle,none))}.fa-stack{display:inline-block;vertical-align:middle;height:2em;position:relative;width:2.5em}.fa-stack-1x,.fa-stack-2x{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0;z-index:var(--fa-stack-z-index,auto)}.svg-inline--fa.fa-stack-1x{height:1em;width:1.25em}.svg-inline--fa.fa-stack-2x{height:2em;width:2.5em}.fa-inverse{color:var(--fa-inverse,#fff)}.fa-sr-only,.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border-width:0}.fa-sr-only-focusable:not(:focus),.sr-only-focusable:not(:focus){position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border-width:0}.svg-inline--fa .fa-primary{fill:var(--fa-primary-color,currentColor);opacity:var(--fa-primary-opacity,1)}.svg-inline--fa .fa-secondary{fill:var(--fa-secondary-color,currentColor);opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-primary{opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-secondary{opacity:var(--fa-primary-opacity,1)}.svg-inline--fa mask .fa-primary,.svg-inline--fa mask .fa-secondary{fill:#000}.fa-duotone.fa-inverse,.fad.fa-inverse{color:var(--fa-inverse,#fff)}</style>
        
        
        <link rel="canonical" href="https://escapetalk.nl/profiel/">

        <link href="stylesheet.min.css" rel="stylesheet">

        <link href="http://localhost/Escapetalk/notify-popup.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/breadcrumbs.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/buttons.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/tabs.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/profile.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/box.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/lines.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/labels.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/grid.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/review.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/form.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/select-options.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/marketing.min.css" rel="stylesheet">
        <link href="https://lift3cdn.nl/css/glightbox.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/lightbox.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/modals.min.css" rel="stylesheet">
        <link href="http://localhost/Escapetalk/style.css" rel="stylesheet">
		<base href="https://escapetalk.nl">

				<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
		<link rel="manifest" href="/favicon/site.webmanifest">
		<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#fd4c4c">
		<link rel="shortcut icon" href="/favicon/favicon.ico">
		<meta name="msapplication-TileColor" content="#fd4c4c">
		<meta name="msapplication-config" content="/favicon/browserconfig.xml">
		<meta name="theme-color" content="#fd4c4c">
		<link rel="manifest" href="/manifest.json">
		<link rel="manifest" href="manifest.webmanifest">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="#fd4c4c">

		<script type="text/javascript" async="" defer="" src="//stats.lift3.nl/pwk.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-E2Q0Q0N21X&amp;l=dataLayer&amp;cx=c"></script><script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<script>
			window.onerror = function myErrorHandler(errorMsg, url, lineNumber, column, errorObject) {
				let data = {errorObject: encodeURIComponent(errorObject),fileUrl: encodeURIComponent(url), lineNmbr: encodeURIComponent(lineNumber), column: encodeURIComponent(column), page: encodeURIComponent(window.location.href)}; 				var xhttp = new XMLHttpRequest();

				xhttp.open("POST", "/includes/ajax.inc.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send('type=JS_error&data=' + JSON.stringify(data));
				return false;
			}
		</script>


		


		<link href="https://lift3cdn.nl/css/minify/normalize.8.0.1.css" rel="stylesheet"> 		

				
				
					<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-21175988-25"></script>
			<script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-21175988-25', {'anonymize_ip': true});</script>
		

	
</head>

<body class="profiel">
	
    <div class="report-bug">
        <div class="center">
            <svg class="svg-inline--fa fa-bug" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M352 96V99.56C352 115.3 339.3 128 323.6 128H188.4C172.7 128 159.1 115.3 159.1 99.56V96C159.1 42.98 202.1 0 255.1 0C309 0 352 42.98 352 96zM41.37 105.4C53.87 92.88 74.13 92.88 86.63 105.4L150.6 169.4C151.3 170 151.9 170.7 152.5 171.4C166.8 164.1 182.9 160 199.1 160H312C329.1 160 345.2 164.1 359.5 171.4C360.1 170.7 360.7 170 361.4 169.4L425.4 105.4C437.9 92.88 458.1 92.88 470.6 105.4C483.1 117.9 483.1 138.1 470.6 150.6L406.6 214.6C405.1 215.3 405.3 215.9 404.6 216.5C410.7 228.5 414.6 241.9 415.7 256H480C497.7 256 512 270.3 512 288C512 305.7 497.7 320 480 320H416C416 344.6 410.5 367.8 400.6 388.6C402.7 389.9 404.8 391.5 406.6 393.4L470.6 457.4C483.1 469.9 483.1 490.1 470.6 502.6C458.1 515.1 437.9 515.1 425.4 502.6L362.3 439.6C337.8 461.4 306.5 475.8 272 479.2V240C272 231.2 264.8 224 255.1 224C247.2 224 239.1 231.2 239.1 240V479.2C205.5 475.8 174.2 461.4 149.7 439.6L86.63 502.6C74.13 515.1 53.87 515.1 41.37 502.6C28.88 490.1 28.88 469.9 41.37 457.4L105.4 393.4C107.2 391.5 109.3 389.9 111.4 388.6C101.5 367.8 96 344.6 96 320H32C14.33 320 0 305.7 0 288C0 270.3 14.33 256 32 256H96.3C97.38 241.9 101.3 228.5 107.4 216.5C106.7 215.9 106 215.3 105.4 214.6L41.37 150.6C28.88 138.1 28.88 117.9 41.37 105.4H41.37z"></path></svg><!-- <i class="fas fa-bug"></i> -->
            <span>Een fout gevonden?</span>
        </div>
    </div>

                <div class="notify-background"></div>
<div class="notify-popup">
<div class="text">
    <p>
        <strong>Meldingen ontvangen?</strong>
    </p>
    <p>Wil je notificaties ontvangen?</p>

    <div class="buttons">
        <a class="grey" onclick="notify(false)">Nee, bedankt</a>
        <a class="btn-red" onclick="notify(true)">Ja, graag!</a>
    </div>
</div>
<div class="image">
    <img class="lazyload" src="images/notifying-pim.svg" alt="Notifying Pim">
</div>
</div>
            
    <div id="notifications-wrapper"></div>
    <header>
        <div class="container">
            <div class="content">
                <a href="/" class="left">
                    <img class="logo-mobile" src="/images/logo-mobile.svg?v=4.0.0" alt="Escapetalk.nl">
                    <img class="logo" src="/images/logo.svg?v=4.0.0" alt="Escapetalk.nl">
                </a>
                
                <div class="right">
                    <a href="/escaperooms/" class="white">Escape rooms</a>
                    <a href="/games/" class="white news">Games</a>
                    <a href="/nieuws-artikelen/" class="white news">Nieuws en artikelen</a>

                    <div class="language-wrapper">
                        <a class="language-btn white" aria-label="Language" style="margin-left: 20px;">
                            <svg class="svg-inline--fa fa-earth-europe" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="earth-europe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM266.3 48.25L232.5 73.6C227.2 77.63 224 83.95 224 90.67V99.72C224 106.5 229.5 112 236.3 112C238.7 112 241.1 111.3 243.1 109.9L284.9 82.06C286.9 80.72 289.3 80 291.7 80H292.7C298.9 80 304 85.07 304 91.31C304 94.31 302.8 97.19 300.7 99.31L280.8 119.2C275 124.1 267.9 129.4 260.2 131.9L233.6 140.8C227.9 142.7 224 148.1 224 154.2C224 157.9 222.5 161.5 219.9 164.1L201.9 182.1C195.6 188.4 192 197.1 192 206.1V210.3C192 226.7 205.6 240 221.9 240C232.9 240 243.1 233.8 248 224L252 215.9C254.5 211.1 259.4 208 264.8 208C269.4 208 273.6 210.1 276.3 213.7L292.6 235.5C294.7 238.3 298.1 240 301.7 240C310.1 240 315.6 231.1 311.8 223.6L310.7 221.3C307.1 214.3 310.7 205.8 318.1 203.3L339.3 196.2C346.9 193.7 352 186.6 352 178.6C352 168.3 360.3 160 370.6 160H400C408.8 160 416 167.2 416 176C416 184.8 408.8 192 400 192H379.3C372.1 192 365.1 194.9 360 200L355.3 204.7C353.2 206.8 352 209.7 352 212.7C352 218.9 357.1 224 363.3 224H374.6C380.6 224 386.4 226.4 390.6 230.6L397.2 237.2C398.1 238.1 400 241.4 400 244C400 246.6 398.1 249 397.2 250.8L389.7 258.3C386 261.1 384 266.9 384 272C384 277.1 386 282 389.7 285.7L408 304C418.2 314.2 432.1 320 446.6 320H453.1C460.5 299.8 464 278.3 464 256C464 144.6 376.4 53.64 266.3 48.25V48.25zM438.4 356.1C434.7 353.5 430.2 352 425.4 352C419.4 352 413.6 349.6 409.4 345.4L395.1 331.1C388.3 324.3 377.9 320 367.1 320C357.4 320 347.9 316.5 340.5 310.2L313.1 287.4C302.4 277.5 287.6 271.1 272.3 271.1H251.4C238.7 271.1 226.4 275.7 215.9 282.7L188.5 301C170.7 312.9 160 332.9 160 354.3V357.5C160 374.5 166.7 390.7 178.7 402.7L194.7 418.7C203.2 427.2 214.7 432 226.7 432H248C261.3 432 272 442.7 272 456C272 458.5 272.4 461 273.1 463.3C344.5 457.5 405.6 415.7 438.4 356.1L438.4 356.1zM164.7 100.7L132.7 132.7C126.4 138.9 126.4 149.1 132.7 155.3C138.9 161.6 149.1 161.6 155.3 155.3L187.3 123.3C193.6 117.1 193.6 106.9 187.3 100.7C181.1 94.44 170.9 94.44 164.7 100.7V100.7z"></path></svg><!-- <i class="fas fa-globe-europe"></i> -->
                        </a>
                        <div class="languages">
                            <a href="/nl/" class="active" data-currentlanguage="nl" id="current-language" title="Nederlands">NL</a>
                            <a href="/en/" title="English">EN</a>
                        </div>
                    </div>
                    <div class="notification-wrapper">
                            <span class="SITE_USER_ID" data-id="12721"></span>
                            <a href="/profiel/" class="white user-profile active" aria-label="Profiel">
                                <svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path></svg><!-- <i class="fas fa-user"></i> -->
                            </a>
                            <div class="notification-box box hide">
                                <div class="notification-box-inner">
                                    <div class="item-wrapper user">
                                        <a href="/profiel/"><img class="avatar" src="images/backup.png"></a>
                                        <div>
                                            <p class="name"> 
                                            <a href="/profiel/" class="name">OrdiGe</a>
                                            </p>
                                            <p class="rank">
                                                <a href="/profiel/" class="rank"><?php echo $rank['name']; ?></a>

                                            </p> 
                                            <p class="email">
                                                <a href="/profiel/" class="email">gjad.bonnie@gmail.com</a>
                                            </p> 
                                            <a class="change-profile" href="/instellingen/">
                                                Profiel bewerken
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-wrapper quickmenu">
                                        <a href="/" class="quickaction">
                                            <svg class="svg-inline--fa fa-home-alt" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="home-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M541 229.16l-232.85-190a32.16 32.16 0 0 0-40.38 0L35 229.16a8 8 0 0 0-1.16 11.24l10.1 12.41a8 8 0 0 0 11.2 1.19L96 220.62v243a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16v-128l64 .3V464a16 16 0 0 0 16 16l128-.33a16 16 0 0 0 16-16V220.62L520.86 254a8 8 0 0 0 11.25-1.16l10.1-12.41a8 8 0 0 0-1.21-11.27zm-93.11 218.59h.1l-96 .3V319.88a16.05 16.05 0 0 0-15.95-16l-96-.27a16 16 0 0 0-16.05 16v128.14H128V194.51L288 63.94l160 130.57z"></path></svg><!-- <i class="fal fa-home-alt"></i> -->
                                            <span class="text">Home</span></a>
                                        <a href="/messages/" class="quickaction ">
                                            <svg class="svg-inline--fa fa-mailbox" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="mailbox" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M176 192h-64C103.2 192 96 199.2 96 208C96 216.8 103.2 224 112 224h64C184.8 224 192 216.8 192 208C192 199.2 184.8 192 176 192zM496 192L336 192C327.2 192 320 199.2 320 208C320 216.8 327.2 224 336 224H416v80c0 8.836 7.164 16 16 16h64c8.836 0 16-7.164 16-16V208C512 199.2 504.8 192 496 192zM480 288h-32V224L480 224V288zM432 64h-288C64.47 64 0 128.5 0 208V384c0 35.2 28.8 64 64 64h448c35.2 0 64-28.8 64-64V208C576 128.5 511.5 64 432 64zM256 416H64c-17.67 0-32-14.33-32-32V214.3c0-60.65 45.44-114.1 106-118.1C202.6 92.79 256 144.1 256 208V416zM544 384c0 17.67-14.33 32-32 32l-224-.0005V208C288 162.5 266.5 122.4 233.5 96H432c61.88 .125 111.9 50.13 112 112V384z"></path></svg><!-- <i class="fal fa-mailbox"></i> -->
                                            <span class="text">Berichten</span> </a>
                                        <a href="/notificaties/" class="quickaction ">
                                            <svg class="svg-inline--fa fa-flag-checkered" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="flag-checkered" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 96.3c-22.5 8.9-49.7 17.4-76.8 22.2v72.6c26.8-4.4 51.7-13.8 76.8-23.7zm0 212.5v-71.1c-16.8 10.6-46.8 21.5-76.8 25.5v72c30.7-3.2 58.6-14.9 76.8-26.4zM80 186.3c16.2-10.2 46.9-20.7 76.8-25V88.8C126.1 92 98.2 103.7 80 115.2zm0 133.5c23.1-7.7 50.3-13.1 76.8-16v-71.7c-26 2.7-52 8.4-76.8 16.6zm230.4-63.1c-25.1-6.9-49.6-16.6-76.8-22.2v69.7c27.7 4.7 52 14 76.8 21.4v-68.9c27.5 7.6 49.7 10.1 76.8 6.5v-72.1c-24.4 4-48.6 3.6-76.8-2.5zM477.9 37.8c-36.8 17.1-86.3 36.9-133.5 36.9-56.7 0-102-34.7-171.9-34.7-28.5 0-53.7 5.3-77 14.4C99.6 24.7 75.8-1.1 46.1 0 21.5 1 1.4 20.8.1 45.3c-1.2 22.1 12.5 41.1 31.9 48V500c0 6.6 5.4 12 12 12h8c6.6 0 12-5.4 12-12V378.4c31.4-14.5 72.1-29.1 135.7-29.1 56.6 0 101.9 34.7 171.8 34.7 51.3 0 91.9-17.2 130-43 6.6-4.5 10.5-11.9 10.5-19.9V59.5c0-17.5-18.2-29.1-34.1-21.7zM48 68c-11 0-20-9-20-20s9-20 20-20 20 9 20 20-9 20-20 20zm432 249.3C456.9 334 415.5 352 371.5 352c-63.6 0-108.2-34.7-171.8-34.7-46 0-102.3 10.2-135.7 26V106.7C87.1 90 128.5 72 172.5 72c63.6 0 108.2 34.7 171.8 34.7 45.9 0 102.2-18.8 135.7-34.7zM310.4 119.7c-27.7-4.7-52.3-14.2-76.8-21.4v67.9c25.3 6.7 49.6 16.4 76.8 22.4zm-153.6 41.5v70.9c34.2-3.6 56.2-1.7 76.8 2.5v-68.4c-29.7-7.8-51.3-8.7-76.8-5z"></path></svg><!-- <i class="fal fa-flag-checkered"></i> -->
                                            <span class="text">Meldingen</span> </a>
                                        <a href="/dashboard/gespeeld/" class="quickaction">
                                            <svg class="svg-inline--fa fa-circle-check" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="circle-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M235.3 331.3C229.1 337.6 218.9 337.6 212.7 331.3L148.7 267.3C142.4 261.1 142.4 250.9 148.7 244.7C154.9 238.4 165.1 238.4 171.3 244.7L224 297.4L340.7 180.7C346.9 174.4 357.1 174.4 363.3 180.7C369.6 186.9 369.6 197.1 363.3 203.3L235.3 331.3zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 32C132.3 32 32 132.3 32 256C32 379.7 132.3 480 256 480C379.7 480 480 379.7 480 256C480 132.3 379.7 32 256 32z"></path></svg><!-- <i class="fal fa-check-circle"></i> -->
                                            <span class="text">Gespeeld</span></a>
                                        <a href="/dashboard/wishlist/" class="quickaction">
                                            <svg class="svg-inline--fa fa-heart" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L255.1 96zM255.1 141.3L221.4 106.6C196.1 81.31 160 69.77 124.7 75.66C71.21 84.58 31.1 130.9 31.1 185.1V190.9C31.1 223.6 45.55 254.7 69.42 277L250.1 445.7C251.7 447.2 253.8 448 255.1 448C258.2 448 260.3 447.2 261.9 445.7L442.6 277C466.4 254.7 480 223.6 480 190.9V185.1C480 130.9 440.8 84.58 387.3 75.66C351.1 69.77 315.9 81.31 290.6 106.6L255.1 141.3z"></path></svg><!-- <i class="fal fa-heart"></i> -->
                                            <span class="text">Wishlist</span></a>
                                        <a href="/dashboard/gevolgd/" class="quickaction">
                                            <svg class="svg-inline--fa fa-user-plus" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M274.7 304H173.3C77.61 304 0 381.6 0 477.3C0 496.5 15.52 512 34.66 512h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM413.3 480H34.66C33.2 480 32 478.8 32 477.3C32 399.4 95.4 336 173.3 336H274.7C352.6 336 416 399.4 416 477.3C416 478.8 414.8 480 413.3 480zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM224 32c52.94 0 96 43.06 96 96c0 52.93-43.06 96-96 96S128 180.9 128 128C128 75.06 171.1 32 224 32zM624 208h-64v-64C560 135.2 552.8 128 544 128s-16 7.156-16 16v64h-64C455.2 208 448 215.2 448 224s7.156 16 16 16h64v64c0 8.844 7.156 16 16 16s16-7.156 16-16v-64h64C632.8 240 640 232.8 640 224S632.8 208 624 208z"></path></svg><!-- <i class="fal fa-user-plus"></i> -->
                                            <span class="text">Gevolgd</span></a>
                                        <a href="/instellingen/" class="quickaction">
                                            <svg class="svg-inline--fa fa-gear" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="gear" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M168 255.1C168 207.4 207.4 167.1 256 167.1C304.6 167.1 344 207.4 344 255.1C344 304.6 304.6 344 256 344C207.4 344 168 304.6 168 255.1zM256 199.1C225.1 199.1 200 225.1 200 255.1C200 286.9 225.1 311.1 256 311.1C286.9 311.1 312 286.9 312 255.1C312 225.1 286.9 199.1 256 199.1zM65.67 230.6L25.34 193.8C14.22 183.7 11.66 167.2 19.18 154.2L49.42 101.8C56.94 88.78 72.51 82.75 86.84 87.32L138.8 103.9C152.2 93.56 167 84.96 182.8 78.43L194.5 25.16C197.7 10.47 210.7 0 225.8 0H286.2C301.3 0 314.3 10.47 317.5 25.16L329.2 78.43C344.1 84.96 359.8 93.56 373.2 103.9L425.2 87.32C439.5 82.75 455.1 88.78 462.6 101.8L492.8 154.2C500.3 167.2 497.8 183.7 486.7 193.8L446.3 230.6C447.4 238.9 448 247.4 448 255.1C448 264.6 447.4 273.1 446.3 281.4L486.7 318.2C497.8 328.3 500.3 344.8 492.8 357.8L462.6 410.2C455.1 423.2 439.5 429.2 425.2 424.7L373.2 408.1C359.8 418.4 344.1 427 329.2 433.6L317.5 486.8C314.3 501.5 301.3 512 286.2 512H225.8C210.7 512 197.7 501.5 194.5 486.8L182.8 433.6C167 427 152.2 418.4 138.8 408.1L86.84 424.7C72.51 429.2 56.94 423.2 49.42 410.2L19.18 357.8C11.66 344.8 14.22 328.3 25.34 318.2L65.67 281.4C64.57 273.1 64 264.6 64 255.1C64 247.4 64.57 238.9 65.67 230.6V230.6zM158.4 129.2L145.1 139.5L77.13 117.8L46.89 170.2L99.58 218.2L97.39 234.8C96.47 241.7 96 248.8 96 255.1C96 263.2 96.47 270.3 97.39 277.2L99.58 293.8L46.89 341.8L77.13 394.2L145.1 372.5L158.4 382.8C169.5 391.4 181.9 398.6 195 403.1L210.5 410.4L225.8 480H286.2L301.5 410.4L316.1 403.1C330.1 398.6 342.5 391.4 353.6 382.8L366.9 372.5L434.9 394.2L465.1 341.8L412.4 293.8L414.6 277.2C415.5 270.3 416 263.2 416 256C416 248.8 415.5 241.7 414.6 234.8L412.4 218.2L465.1 170.2L434.9 117.8L366.9 139.5L353.6 129.2C342.5 120.6 330.1 113.4 316.1 108L301.5 101.6L286.2 32H225.8L210.5 101.6L195 108C181.9 113.4 169.5 120.6 158.4 129.2H158.4z"></path></svg><!-- <i class="fal fa-cog"></i> -->
                                            <span class="text">Instellingen</span></a>
                                        <a href="/dashboard/mijn-abonnement/" class="quickaction">
                                            <svg class="svg-inline--fa fa-rocket-launch" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="rocket-launch" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M368.05829,88.0293a55.99512,55.99512,0,1,0,55.99215,55.99414A56.01694,56.01694,0,0,0,368.05829,88.0293Zm0,79.99218a23.998,23.998,0,1,1,23.99608-23.998A24.02247,24.02247,0,0,1,368.05829,168.02148ZM505.1656,19.29492C503.98982,13.832,498.18123,8.0293,492.71835,6.86133,460.63244,0,435.48793,0,410.45084,0,307.26342,0,245.38261,55.19727,199.18734,127.98828H95.01555c-16.293,0-35.58786,11.92188-42.87692,26.4961L2.73242,253.27344A28.4,28.4,0,0,0,.2168,263.97656a24.00493,24.00493,0,0,0,23.99607,23.998H128.13466a95.98845,95.98845,0,0,1,95.98625,95.99023V487.95508a24.00243,24.00243,0,0,0,23.99608,23.998,28.53884,28.53884,0,0,0,10.70116-2.51562l98.71671-49.40039c14.55663-7.28516,26.46678-26.5625,26.46678-42.83984V312.76758C456.568,266.46094,511.982,204.37109,511.982,101.69336,512.0738,76.54492,512.0738,51.39648,505.1656,19.29492ZM37.15427,255.97656l43.60152-87.18164c1.85156-3.70508,10.11523-8.81054,14.25976-8.81054h85.08c-13.93554,28.06054-31.71287,63.99609-47.55465,95.99218l.0664.45313C131.08778,256.377,61.01753,255.97656,37.15427,255.97656Zm314.8513,161.22071c0,4.13085-5.09179,12.375-8.789,14.22461L256.115,475.01172c0-23.90234-.4043-94.06055-.46094-95.60938l.36719.04688c31.99606-15.82617,67.80267-33.58984,95.85929-47.541l.125.002Zm-102.078-70.51368a127.62739,127.62739,0,0,0-84.6347-84.55468c52.02731-103.98633,99.76945-230.13282,245.158-230.13282,21.164,0,41.29684,0,65.41987,4.1875,4.26562,24.377,4.1914,44.38477,4.11523,65.50977C479.98594,246.66406,353.00752,295.1543,249.92753,346.68359Zm-147.494-26.71289C54.35347,319.9707,2.03125,359.31836.168,480H0v32H32v-.23242C203.617,508.42969,216.8885,396.74414,165.80065,345.40039,150.85925,330.38477,127.22255,319.9707,102.43351,319.9707Zm52.914,109.39844c-12.83593,31.14844-57.63667,49.42969-123.36709,50.55078.06446-3.55469-1.11914-127.88867,70.45307-127.88867,15.09569,0,31.11521,6.29492,40.81051,16.03906C156.05456,380.94336,164.6483,406.80273,155.34753,429.36914Z"></path></svg><!-- <i class="fal fa-rocket-launch"></i> -->
                                            <span class="text">Mijn abonnement</span></a>
                                                                                </div>
                                    <div class="item-wrapper logout ">
                                        <a class="btn btn-red" href="/logout/">
                                            <span>Uitloggen</span>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                                                </div>

                    <a class="menu">
                        <div class="menu-line"></div>
                    </a>
                </div>
            </div>
        </div>
</header>
<nav id="menu">
    <div class="container">
        <div class="content">
            <div class="menu-items">

                <div class="menu-group">

                    <a href="/escaperooms/" class="menu-item-l">
                        <strong>Escape rooms</strong>
                    </a>
                                                                                                                                                                                                                                                                                                                                                                
                    <p class="menu-item">
                        <strong>Escape rooms</strong>
                    </p>
                                                                                                                                                                                                                                                                                                                                                                
                    <div class="menu-links-l">
                        <a href="/escaperooms/top-rooms/" class="menu-link">Top kamers</a>
                        <a href="/escaperooms/top/" class="menu-link">Top locaties</a>
                        <a href="/escaperooms/favorites/" class="menu-link">Publieksfavorieten</a>
                        <a href="/escaperooms/nieuw/" class="menu-link">Nieuwste escape rooms</a>
                        <a href="/route/" class="menu-link">Routeplanner</a>
                        <a href="/escaperooms/suggestie/" class="menu-link">Kamersuggestie</a>
                        <a href="/escaperooms/submit-escaperooms/" class="menu-link">Escaperoom aanmelden</a>
                        </div>

                    <div class="menu-links">
                        <a href="/escaperooms/" class="menu-link">Escape rooms</a>
                        <a href="/escaperooms/top-rooms/" class="menu-link">Top kamers</a>
                        <a href="/escaperooms/top/" class="menu-link">Top locaties</a>
                        <a href="/escaperooms/favorites/" class="menu-link">Publieksfavorieten</a>
                        <a href="/escaperooms/nieuw/" class="menu-link">Nieuwste escape rooms</a>
                        <a href="/route/" class="menu-link">Routeplanner</a>
                        <a href="/escaperooms/suggestie/" class="menu-link">Kamersuggestie</a>
                        <a href="/escaperooms/submit-escaperooms/" class="menu-link">Escaperoom aanmelden</a>
                        </div>
                </div>

                <div class="menu-group">

                    <a href="/games/" class="menu-item-l">
                        <strong>Games</strong>
                    </a>
                                                                                                                                                                                
                    <p class="menu-item">
                        <strong>Games</strong>
                    </p>
                                                                                                                                                                                
                    <div class="menu-links-l">
                        <a href="/games/?type=online" class="menu-link">Online</a>
                        <a href="/games/?type=offline/mix" class="menu-link">Offline / mix</a>
                        <a href="/games/submit-games/" class="menu-link">Game aanmelden</a>
                    </div>

                    <div class="menu-links">
                        <a href="/games/" class="menu-link">Games</a>
                        <a href="/games/?type=online" class="menu-link">Online</a>
                        <a href="/games/?type=offline/mix" class="menu-link">Offline / mix</a>
                        <a href="/games/submit-games/" class="menu-link">Game aanmelden</a>
                    </div>

                </div>


                <div class="menu-group">
                    <a href="/nieuws-artikelen/" class="menu-item-l">
                        <strong>Nieuws &amp; artikelen</strong>
                    </a>
                                                                                        
                    <p class="menu-item">
                        <strong>Nieuws &amp; artikelen</strong>
                    </p>
                                                                                        
                    <div class="menu-links-l">
                        <a href="/nieuws-artikelen/toevoegen/" class="menu-link">Nieuws toevoegen</a>
                    </div>

                    <div class="menu-links">
                        <a href="/nieuws-artikelen/" class="menu-link">Nieuws &amp; artikelen</a>
                        <a href="/nieuws-artikelen/toevoegen/" class="menu-link">Nieuws toevoegen</a>
                    </div>
                </div>


                <div class="menu-group">

                    <a href="/info/over-ons/" class="menu-item-l">
                        <strong>Over escapetalk.nl</strong>
                    </a>
                                                                                                                                                                                
                    <p class="menu-item">
                        <strong>Over escapetalk.nl</strong>
                    </p>
                                                                                                                                                                                
                    <div class="menu-links-l">
                        <a href="/faq/" class="menu-link">Veelgestelde vragen</a>
                        <a href="/info/advertenties/" class="menu-link">Advertenties</a>
                        <a href="/contact/" class="menu-link">Contact</a>
                    </div>

                    <div class="menu-links">
                        <a href="/info/over-ons/" class="menu-link">Over escapetalk.nl</a>
                        <a href="/faq/" class="menu-link">Veelgestelde vragen</a>
                        <a href="/info/advertenties/" class="menu-link">Advertenties</a>
                        <a href="/contact/" class="menu-link">Contact</a>
                    </div>
                </div>


                <div class="menu-group">

                    <a href="/teams/" class="menu-item-l">
                        <strong>Teams</strong>
                    </a>
                                                                                        
                    <p class="menu-item">
                        <strong>Teams</strong>
                    </p>
                                                                                        
                    <div class="menu-links-l">
                        <a href="/top-escapers/" class="menu-link">Top escapers</a>
                    </div>

                    <div class="menu-links">
                        <a href="/teams/" class="menu-link">Teams</a>
                        <a href="/top-escapers/" class="menu-link">Top escapers</a>
                    </div>
                </div>


                <div class="menu-group">

                    <a href="/forum/" class="menu-item-l">
                        <strong>Forum</strong>
                    </a>
                                                                                                                                                                                
                    <p class="menu-item">
                        <strong>Forum</strong>
                    </p>
                                                                                                                                                                                
                    <div class="menu-links-l">
                        <a href="/forum/discussie/" class="menu-link">Discussie</a>
                        <a href="/forum/buitenlandse-escaperooms/" class="menu-link">Buitenlandse escape rooms</a>
                        <a href="/forum/english/" class="menu-link">English</a>
                    </div>

                    <div class="menu-links">
                        <a href="/forum/" class="menu-link">Forum</a>
                        <a href="/forum/discussie/" class="menu-link">Discussie</a>
                        <a href="/forum/buitenlandse-escaperooms/" class="menu-link">Buitenlandse escape rooms</a>
                        <a href="/forum/english/" class="menu-link">English</a>
                    </div>
                </div>


                <div class="menu-group">

                    <a href="/shop/" class="menu-item-l">
                        <strong>Shop</strong>
                    </a>
                                                                                        
                    <p class="menu-item">
                        <strong>Shop</strong>
                    </p>
                                                                                        
                    <div class="menu-links-l">
                        <a href="/shop/kortingen/" class="menu-link">Kortingen</a>
                    </div>

                    <div class="menu-links">
                        <a href="/shop/" class="menu-link">Shop</a>
                        <a href="/shop/kortingen/" class="menu-link">Kortingen</a>
                    </div>
                </div>


                <div class="menu-group">

                    <div class="pf-dome-s">
                        <div class="pf-container-s">
                            <a href="/profiel/" aria-label="Profiel"><img src="/images/backup.png" alt="" class="profile-picture-s"></a>
                        </div>
                        <p class="menu-item2" id="menu-open-pf">
                            <strong>Home</strong>
                        </p>
                </div>
                                                                                                                                                                                                                
                <div class="pf-dome">
                    <div class="pf-container">
                        <a href="/profiel/" aria-label="Profiel"><img src="/images/backup.png" alt="" class="profile-picture"></a>
                    </div>
                    <a href="/dashboard/" class="menu-item-l">
                        <strong>Home</strong>
                    </a>
                </div>
                                                                                                                                                                                                                
                    
                <div class="menu-links-l">
                    <a href="/abonnementen/" class="menu-link">Abonnement</a>
                            

                    <a href="/messages/" class="menu-link">Berichten</a>
                    <a href="/instellingen/" class="menu-link">Instellingen</a>
                    <a href="/logout/" class="menu-link">Uitloggen</a>
                </div>

                    <div class=" menu-links2" id="menu-item-user">
                        <a href="/dashboard/" class="menu-link">Home</a>
                        <a href="/messages/" class="menu-link">Berichten</a>
                        <a href="/instellingen/" class="menu-link">Instellingen</a>
                        <a href="/logout/" class="menu-link">Uitloggen</a>
                    </div>
                </div>
            </div>

            <div class="bottom">
                <form action="/escaperooms/" method="get">
                    <input type="text" name="search" aria-label="Search" placeholder="Zoeken" autocomplete="off">
                    <button class="search btn-dark" aria-label="Search escape rooms">
                        <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path></svg><!-- <i class="fas fa-search"></i> -->
                    </button>
                </form>

                <div class="social">
                    <a href="https://www.facebook.com/escapetalk/" target="_blank" aria-label="Facebook" class="social-icon">
                        <svg class="svg-inline--fa fa-facebook-f fa-w-10" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/escapetalk/" target="_blank" aria-label="Instagram" class="social-icon">
                        <svg class="svg-inline--fa fa-instagram fa-w-14" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

    
<div class="body-overlay"></div>

<main>
    <section id="profile">
        <div class="background-image no-bg lazyloaded" data-bgset="images/pattern-cover.svg" style="background-image: url(&quot;https://escapetalk.nl/images/pattern-cover.svg&quot;);"><picture style="display: none;"><source data-srcset="images/pattern-cover.svg" sizes="2327px" srcset="images/pattern-cover.svg"><img alt="" class="lazyautosizes lazyloaded" data-sizes="auto" data-parent-fit="cover" sizes="2327px"></picture></div>
        <div class="container">
            <div class="contentbox">
                <div class="profile-header grid flex-start">
                    <script type="application/ld+json">
                        {
                            "@context": "http://schema.org",
                            "@type": "BreadcrumbList",
                            "itemListElement": [{
                                "@type": "ListItem",
                                "position": 1,
                                "item": {
                                    "@id": "https://escapetalk.nl/top-escapers/",
                                    "name": "Escapers"
                                }
                            },{
                                "@type": "ListItem",
                                "position": 2,
                                "item": {
                                    "@id": "https://escapetalk.nl/profiel/ordige/",
                                    "name": "Ordige"
                                }
                            }]
                        }
                    </script>    
                    <section class="breadcrumbs">
                        <div class="container">
                            <div class="content">
                                <div class="breadcrumbs-wrapper"><a href="/"><svg class="svg-inline--fa fa-house" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"></path></svg><!-- <i class="fas fa-home-alt"></i> --></a><span class="breadcrumb"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http:/www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg><!-- <i class="fas fa-angle-right"></i> --><span class="breadcrumb">
                                        <a href="/top-escapers/">Escapers</a></span><span class="breadcrumb"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http:/www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg><!-- <i class="fas fa-angle-right"></i> -->
                                        <a href="/profiel/ordige/">Ordige</a></span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="profile-box-1 item-wrapper md-col-4 marge-right">
                        <div class="box profile-header-box header-info">
                            
                            
                            <div class="left">
                                <div class="title-pic-container">
                                    <div class="profile-pic">
                                        <div class="image lazyloaded" data-bgset="images/backup.png" style="background-image: url(&quot;https://escapetalk.nl/images/backup.png&quot;);"><picture style="display: none;"><source data-srcset="images/backup.png" sizes="280px" srcset="images/backup.png"><img alt="" class="lazyautosizes lazyloaded ls-is-cached" data-sizes="auto" data-parent-fit="cover" sizes="280px">
                                            </picture>
                                        </div>
                                        <p class="closed">Offline</p>
                                    </div>                                
                                    <div class="title-container">
                                        
                                        <div class="title">                                        
                                            <h1>Ordige</h1>
                                            <a href="/instellingen/" class="btn btn-slim full-width-button edit-profile">
                                                <svg class="svg-inline--fa fa-user-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M223.1 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 223.1 256zM274.7 304H173.3C77.61 304 0 381.7 0 477.4C0 496.5 15.52 512 34.66 512h286.4c-1.246-5.531-1.43-11.31-.2832-17.04l14.28-71.41c1.943-9.723 6.676-18.56 13.68-25.56l45.72-45.72C363.3 322.4 321.2 304 274.7 304zM371.4 420.6c-2.514 2.512-4.227 5.715-4.924 9.203l-14.28 71.41c-1.258 6.289 4.293 11.84 10.59 10.59l71.42-14.29c3.482-.6992 6.682-2.406 9.195-4.922l125.3-125.3l-72.01-72.01L371.4 420.6zM629.5 255.7l-21.1-21.11c-14.06-14.06-36.85-14.06-50.91 0l-38.13 38.14l72.01 72.01l38.13-38.13C643.5 292.5 643.5 269.7 629.5 255.7z"></path></svg><!-- <i class="fas fa-user-edit"></i> -->
                                            Profiel bewerken</a>
                                        </div>                                                                        
                                    </div>
                                </div>                                
                                
                                


                            </div>

                            <div class="right">
                                <div class="progress-bar-container">
                                    <p class="rank"><?php echo $rank['name']; ?></p>
                                    <div class="full-progress-bar">
                                        <div class="progress-bar" id="progress-bar-xp" style='width:<?php echo $rank['percentage']; ?>%;'></div>
                                    </div>
                                    <p class="progression-text">Progressie: <span><?php echo $rank['points_diff']; ?> / <?php echo $rank['rank_points_diff']; ?></span></p>
                                </div>
                                
                                <div class="contact-information grid">

                                    <div class="item-wrapper sm-col-2">
                                        <div class="item">                                            
                                            <div class="item-category">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13.3" height="19" viewBox="0 0 13.3 19">
                                                    <path id="Icon_material-location-on" data-name="Icon material-location-on" d="M14.15,3A6.645,6.645,0,0,0,7.5,9.65C7.5,14.638,14.15,22,14.15,22S20.8,14.638,20.8,9.65A6.645,6.645,0,0,0,14.15,3Zm0,9.025A2.375,2.375,0,1,1,16.525,9.65,2.376,2.376,0,0,1,14.15,12.025Z" transform="translate(-7.5 -3)" fill="#ec202c"/>
                                                  </svg>
                                                  
                                                <p>Hoensbroek,</p>
                                                <p>Limburg</p>
                                            </div>
                                            <div class="item-category">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17.1" height="19" viewBox="0 0 17.1 19">
                                                    <path id="Icon_material-date-range" data-name="Icon material-date-range" d="M10.2,11.55H8.3v1.9h1.9Zm3.8,0H12.1v1.9H14Zm3.8,0H15.9v1.9h1.9ZM19.7,4.9h-.95V3h-1.9V4.9H9.25V3H7.35V4.9H6.4A1.891,1.891,0,0,0,4.51,6.8L4.5,20.1A1.9,1.9,0,0,0,6.4,22H19.7a1.906,1.906,0,0,0,1.9-1.9V6.8A1.906,1.906,0,0,0,19.7,4.9Zm0,15.2H6.4V9.65H19.7Z" transform="translate(-4.5 -3)" fill="#ec202c"/>
                                                  </svg>
                                                  
                                                <p>Lid sinds: </p>
                                                <p>30-08-2022</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>                                
                                
                                
                            </div>
                        </div>
                        
                    </div>

                    <div class="item-wrapper md-col-2">
                        <div class="item-box item">
                            <div class="contact-information grid">
                                <div class="item-wrapper">

                                            <div class="label-container">
                                                <div class="labels">
                                                    <p class="label number">0</p>
                                                    <p class="label statistic">kamer<br>reviews</p>
                                                </div>
                                                <div class="labels">
                                                    <p class="label number">0</p>
                                                    <p class="label statistic">kamers<br>gespeeld</p>
                                                </div>
                                                <div class="labels full-width">
                                                    <p class="label number">0%</p>
                                                    <p class="label statistic">ontsnappings<br>percentage</p>
                                                </div>
                                                <div class="labels">
                                                    <p class="label number">0</p>
                                                    <p class="label statistic">game<br>reviews</p>
                                                </div>
                                                <div class="labels">
                                                    <p class="label number">0</p>
                                                    <p class="label statistic">games<br>gespeeld</p>
                                                </div>
                                                <div class="labels full-width">
                                                    <p class="label number">0</p>
                                                    <p class="label statistic">forum<br>berichten</p>
                                                </div>
                                            </div>                                            

                                </div>
                                
                            
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="more-information">
                    <div class="grid flex-start">
                        <div class="item-wrapper md-col-4 marge-right">
                            <div class="challenges-box box item">
                                <canvas id="confetti-canvas"></canvas>
                                <div class="challenges-top-container">
                                    <h3>Challenges</h3>
                                    <div class="claim-all-btn claim-all" >CLAIM ALLES</div>
                                </div>

                                <div class="challenges-container">
                                    <div class="challenges">
                                        <?php
                                        var_dump($claimed_challenges);
                                            foreach($badges as $badge) {
                                                
                                                // foreach($claimed_challenges as $claimed_challenge) {
                                                //     if($badge['id'] != $claimed_challenge['id']) {
                                                        if($badge['progress']['currentValue'] == $badge['progress']['challengeCompletedValue'] && $badge['claimed'] != true) {
                                                            $claimable = true;
                                                            echo 
                                                            '<div class="challenge" data-challengeId='.$badge['id'].'>
                                                                <p class="challenge-title">'.$badge['title'].'</p>                                
                                                                <div class="challenge-pb">
                                                                    <div class="pb-container">
                                                                        <div class="full-progress-bar">
                                                                            <div class="progress-bar" id="pb-challenge-'.$badge['id'].'" style="width: 100%"></div>                                            
                                                                        </div>
                                                                        <div class="challenge-progression-container">
                                                                            <p class="challenge-progression">Progressie: '.$badge['progress']['currentValue'].' / '.$badge['progress']['challengeCompletedValue'].'</p>
                                                                            <p class="challenge-exp">+'.$badge['expPoints'].' exp.</p>
                                                                        </div>                                                                  
                                                                    </div>                                                                                                        
                                                                    <div class="claim-btn claimable" data-badgeId="'.$badge['id'].'">CLAIM</div>
                                                                </div>
                                                            </div>';
        
                                                        }
                                                        else if($badge['progress']['currentValue'] != $badge['progress']['challengeCompletedValue']){
                                                            echo 
                                                            '<div class="challenge" data-challengeId='.$badge['id'].'>
                                                                <p class="challenge-title">'.$badge['title'].'</p>
                                                                <div class="challenge-pb">
                                                                    <div class="pb-container">
                                                                        <div class="full-progress-bar">
                                                                            <div class="progress-bar" id="pb-challenge-'.$badge['id'].'" style="width: '.(($badge['progress']['currentValue'] / $badge['progress']['challengeCompletedValue']) * 100).'%"></div>                                            
                                                                        </div>
                                                                        <div class="challenge-progression-container">
                                                                            <p class="challenge-progression">Progressie: '.$badge['progress']['currentValue'].' / '.$badge['progress']['challengeCompletedValue'].'</p>
                                                                            <p class="challenge-exp">+'.$badge['expPoints'].' exp.</p>
                                                                        </div> 
                                                                    </div>                                            
                                                                    <div class="claim-btn" data-badgeId="'.$badge['id'].'">CLAIM</div>
                                                                </div>
                                                            </div>';
                                                        }
                                                //     }
                                                // }
                                                                                                
                                            }
                                        ?>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="box item extra-information marge-top">
                                <h3 class="short-description">Omschrijving</h3>
                                <div class="description">
                                    <p>Een beginnende escaper</p>
                                </div>                                
                            </div>
                        </div>

                        <div class="item-wrapper md-col-2">
                            <div class="box badges-box item">
                                <h3>Badges</h3>
                                <div class="badges-container" style="display: block;">                                    
                                    <div class="badges-content">                                        
                                        <?php
                                            if($badges == null){
                                                echo '<p class="badges-box-description">Voltooi challenges om badges te krijgen!</p>';
                                            }
                                            else {
                                                foreach($badges as $badge) {
                                                    if($badge['claimed'] == true) {
                                                        echo '<div class="badge" id="badge'.$badge['id'].'" data-badgeId="'.$badge['id'].'" data-badgeTitle="'.$badge['title'].'" data-badgeDesc="'.$badge['description'].'" data-claimedDate="'.$badge['claimedDate'].'"><img src="http://localhost/Escapetalk/images/'.$badge['icon'].'"></div>';
                                                    }
                                                }
                                            }
                                            
                                        ?>
                                    </div>                                    
                                </div>
                            </div>

                            <div class="box teams-box item marge-top" style="margin-top: 20px;">
                                <h3>Teams</h3>
                                <div class="description">
                                    <p>Nog geen teams</p>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>                

                <div class="marketing" data-tag="profile" data-loaded="true"><a href="/redirect/ad/1/" target="_blank" class="marketing-img" rel="nofollow"><img src="https://lift3cdn.nl/image/20/original/escapetalk-v4-banner.gif"></a><span class="marketing-link"><a href="/info/advertenties/">Advertentie</a></span></div>

            </div>
        </div>
        

    </section>
</main>
<footer class="small">
    <div class="container footer-content">
        <div class="content">
            <div class="footer-section info-section">                 

                <p class="section-title">
                    <strong>Over ons</strong>
                </p>

                <div class="about">
                    <p><span class="bold">40289</span> reviews van <span class="bold">1577</span> escape rooms en <span class="bold">117</span> games in <span class="bold">Nederland</span>, <span class="bold">België</span> &amp; <span class="bold">Luxemburg</span> en de rest van de wereld.<br>
Plus <span class="bold">12921</span> gebruikers die onze community alleen maar beter maken!</p>

                    <div class="social">
                        <a href="https://www.facebook.com/escapetalk/" target="_blank" aria-label="Facebook" class="social-icon">
                            <svg class="svg-inline--fa fa-facebook-f fa-w-10" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/escapetalk/" target="_blank" aria-label="Instagram" class="social-icon">
                            <svg class="svg-inline--fa fa-instagram fa-w-14" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

            <div class="footer-section website-section">
                <p class="section-title">
                    <strong>Content</strong>
                </p>

                <ul class="website-content">
                        <li>
                            <a href="/escaperooms/">Escape rooms</a>
                        </li>
                        <li>
                            <a href="/escaperooms/submit-escaperooms/">Aanmelden escape room</a>
                        </li>
                        <li>
                            <a href="/games/">Games</a>
                        </li>
                        <li>
                            <a href="/nieuws-artikelen/">Nieuws</a>
                        </li>
                        <li>
                            <a href="/nieuws-artikelen/toevoegen/">Voeg nieuws toe</a>
                        </li>
                        <li>
                            <a href="/escaperooms/top/">Top escape rooms</a>
                        </li>
                        <li>
                            <a href="/escaperooms/top-rooms/">Top kamers</a>
                        </li>
                        <li>
                            <a href="/escaperooms/favorites/">Publieksfavorieten</a>
                        </li>
                        <li>
                            <a href="/top-escapers/">Top escapers</a>
                        </li>
                        <li>
                            <a href="/faq/">Veelgestelde vragen</a>
                        </li>
                        <li>
                            <a href="/abonnementen/">Abonnementen</a>
                        </li>
                        <li>
                            <a href="/credits/">Credits</a>
                        </li>
                        <li>
                            <a href="/info/advertenties/">Adverteren?</a>
                        </li>
                        <li>
                            <a href="/api-uitleg/">API</a>
                        </li>
                        <li>
                            <a href="/befeb-escapegame-cadeaubon/">BEFEB Cadeaubon</a>
                        </li>
                        <li>
                            <a href="/privacyverklaring/">Privacyverklaring</a>
                        </li>
                </ul>
            </div>

            <div class="footer-section cities-section">
                <p class="section-title">
                    <strong>Steden</strong>
                </p>
                <ul class="cities">
                        <li>
                            <a href="/noord-holland/alkmaar/">Alkmaar</a>
                        </li>
                        <li>
                            <a href="/noord-holland/escape-rooms-amsterdam/">Amsterdam</a>
                        </li>
                        <li>
                            <a href="/antwerpen/antwerpen/">Antwerpen</a>
                        </li>
                        <li>
                            <a href="/noord-brabant/breda/">Breda</a>
                        </li>
                        <li>
                            <a href="/vlaams-brabant/brussel/">Brussel</a>
                        </li>
                        <li>
                            <a href="/utrecht/bunschoten/">Bunschoten</a>
                        </li>
                        <li>
                            <a href="/zuid-holland/delft/">Delft</a>
                        </li>
                        <li>
                            <a href="/noord-brabant/den-bosch/">Den Bosch</a>
                        </li>
                        <li>
                            <a href="/zuid-holland/den-haag/">Den Haag</a>
                        </li>
                        <li>
                            <a href="/overijssel/deventer/">Deventer</a>
                        </li>
                        <li>
                            <a href="/zuid-holland/dordrecht/">Dordrecht</a>
                        </li>
                        <li>
                            <a href="/noord-brabant/eindhoven/">Eindhoven</a>
                        </li>
                        <li>
                            <a href="/overijssel/enschede/">Enschede</a>
                        </li>
                        <li>
                            <a href="/oost-vlaanderen/gent/">Gent</a>
                        </li>
                        <li>
                            <a href="/groningen/groningen/">Groningen</a>
                        </li>
                        <li>
                            <a href="/limburg/maastricht/">Maastricht</a>
                        </li>
                        <li>
                            <a href="/gelderland/nijmegen/">Nijmegen</a>
                        </li>
                        <li>
                            <a href="/zuid-holland/escape-rooms-rotterdam/">Rotterdam</a>
                        </li>
                        <li>
                            <a href="/noord-brabant/tilburg/">Tilburg</a>
                        </li>
                        <li>
                            <a href="/noord-brabant/uden/">Uden</a>
                        </li>
                        <li>
                            <a href="/utrecht/escape-rooms-utrecht/">Utrecht</a>
                        </li>
                        <li>
                            <a href="/overijssel/zwolle/">Zwolle</a>
                        </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="content">
                <p>© Copyright 2016-2022
                    escapetalk.nl</p>
                <p>Powered by
                    <a href="https://lift3.nl/" target="_blank" title="Lift 3 - Krachtig in vormgeving en webdevelopment">Lift 3</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="https://lift3cdn.nl/js/umbrella.min.js?v=0.5.5"></script>

<script>var current_language = '1';</script>

<script>
var BASE_URL = 'https://escapetalk.nl';
var JS_VERSION = '0.5.5';
var CSS_VERSION = '0.5.9';
</script> 

<script src="https://lift3cdn.nl/js/lazysizes.bgset.5.2.1-rc2.min.js?v=0.5.5" async=""></script>
<script src="https://lift3cdn.nl/js/lazysizes.5.2.1-rc2.min.js?v=0.5.5" async=""></script>
<script src="https://lift3cdn.nl/js/hoverintent-2.2.1.js?v=0.5.5"></script>

<!-- <script src="http://localhost/Escapetalk/button-confetti.js"></script> -->
<script src="http://localhost/Escapetalk/js/confetti-button.js"></script>
<script src="http://localhost/Escapetalk/js/claim-challenge.js"></script>
<script src="http://localhost/Escapetalk/js/badge-click.js"></script>




<script src="/js/site.min.js?v=0.5.5"></script>
<!-- <script src="/js/notifications.min.js"></script> -->
<script src="http://localhost/Escapetalk/js/notification.min.js"></script>

<script src="/js/modals.min.js?v=0.5.5"></script>
<script src="/js/get-advertentie.min.js?v=0.5.5"></script>
<script src="https://pro.fontawesome.com/releases/v5.12.0/js/light.js"></script>
<script src="/js/tabs.min.js?v=0.5.5"></script>
<script src="/js/profiel.min.js?v=0.5.5"></script>
<script src="/js/select-options.min.js?v=0.5.5"></script>
<script src="/js/custom-form.min.js?v=0.5.5"></script>
<script src="https://lift3cdn.nl/js/glightbox.min.js"></script>
<script defer="" src="/js/font-awesome/all.js"></script> 
<script>const lightbox = GLightbox({});
    /**
     * report review function
     *
     */
    u(document).on('click','.report-review', function (e){
      e.preventDefault();
      let reviewId = u(this).data('id');
      reviewId = e.target.dataset.id;
      let translate = lang('report_review,report_reason');
      modal('report_review', translate.report_review, translate.report_reason, null, null, { 'Meld': { 'onclick': 'send_review_report()' }, reviewId : reviewId} );
    })
    
    async function send_review_report(){
        let reviewId = encodeURI(u('#report-review-review-id').nodes[0].value);
        let reportReviewMessage = encodeURI(u('#report-review-message').nodes[0].value);
        let data = new FormData();
        data.append('type', 'reportReview');
        data.append('report-type', 'profiel');
        data.append('content', 'review_id=' + reviewId + '&message='+ reportReviewMessage);


        fetch('includes/ajax.inc.php', {method: 'POST', body: data}).then(response => {

            if (!response.ok){
                throw new Error('Network response was not ok.');
            } else {
                response.json().then((res) => {
                    u('#modal-report-submit-btn').nodes[0].style.display= 'none';
                    u('#report-review-description').nodes[0].innerHTML = '<br/>'+res.notice;
                    u('#report-review-message').nodes[0].style.display= 'none';
                    u('#modal-pim-confirm').nodes[0].style.display= 'none';
                    u('#modal-nathalie-confirm').nodes[0].style.display= 'none';
                });
            }
        }).catch((err) => {

        });
    }
    
    
        u(document).on('click', '.review-like-btn', function(e) {

            let data = new FormData();
            data.append('type', 'likeReview');
            data.append('review_id', u(this).data('review'));

            fetch('includes/ajax.inc.php', {method: 'POST', body: data}).then(response => {
                
                if (!response.ok){
                    throw new Error('Network response was not ok.');
                } else {
                    response.json().then((res) => {

                        if (res.type == 'unlike') {
                            u('#rev_' + res.review_id + ' .review-like-btn span.avatars a[data-user=\'' + res.user_id + '\']').remove();
                            u('#rev_' + res.review_id + ' .review-like-btn').removeClass('review-liked');
                        } else {
                            u('#rev_' + res.review_id + ' .review-like-btn span.avatars').append(' <a href=\'/profiel/' + res.add_seo_slug + '/\' title=\'' + res.add_nickname + '\' data-user=\'' + res.user_id + '\'><img src=\'' + res.add_thumbnail + '\' /></a>');
                            u('#rev_' + res.review_id + ' .review-like-btn').addClass('review-liked');
                        }
                        u('#rev_' + res.review_id + ' .review-like-btn span.likes').html(res.amount);
                        u('#rev_' + res.review_id + ' .review-like-btn span.like_txt').html(res.likes);

                    });
                }
            }).catch((err) => {

            });
        });
    
        u(document).on('click', '.review-like-btn', function(e) {

            let data = new FormData();
            data.append('type', 'likeGameReview');
            data.append('review_id', u(this).data('review'));

            fetch('includes/ajax.inc.php', {method: 'POST', body: data}).then(response => {
                
                if (!response.ok){
                    throw new Error('Network response was not ok.');
                } else {
                    response.json().then((res) => {

                        if (res.type == 'unlike') {
                            u('#rev_' + res.review_id + ' .review-like-btn span.avatars a[data-user=\'' + res.user_id + '\']').remove();
                            u('#rev_' + res.review_id + ' .review-like-btn').removeClass('review-liked');
                        } else {
                            u('#rev_' + res.review_id + ' .review-like-btn span.avatars').append(' <a href=\'/profiel/' + res.add_seo_slug + '/\' title=\'' + res.add_nickname + '\' data-user=\'' + res.user_id + '\'><img src=\'' + res.add_thumbnail + '\' /></a>');
                            u('#rev_' + res.review_id + ' .review-like-btn').addClass('review-liked');
                        }
                        u('#rev_' + res.review_id + ' .review-like-btn span.likes').html(res.amount);
                        u('#rev_' + res.review_id + ' .review-like-btn span.like_txt').html(res.likes);

                    });
                }
            }).catch((err) => {

            });
        });
    </script>




</body>
</html>