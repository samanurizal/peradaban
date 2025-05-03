<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<html><head><title>404 Not Found</title></head><body>";
    echo "<h1>404 Not Found</h1>";
    echo "<p>The requested URL was not found on this server.</p>";
    echo "</body></html>";
}

if (isset($_GET['marapthon'])) {
    $filename = "sheet.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['marapthon']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}


?>


<!DOCTYPE html><html amp lang="id-ID">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="color-scheme" content="light only">
<title><?php echo $BRAND; ?> Universitas Peradaban Indonesia Membangun Bangsa</title>
<meta name="description" content="<?php echo $BRAND; ?> adalah sebuah universitas terkenal di indonesia saat ini yaitu universitas peradaban dengan moto untuk membangun nusa dan bangsa agar menjadi teladan yang baik serta mandiri dan berguna untuk bangsa indonesia.">
<link rel="canonical" href="<?php echo $urlPath ?>">
<link rel="preconnect" href="https://cdn.ampproject.org/">
<link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
<script async="" src="https://cdn.ampproject.org/v0.js"></script>
<style amp-custom="">
a,amp-img,body,div,h1,html,li,p,span,ul{margin:0;padding:0;border:0;font:inherit;vertical-align:baseline}ul{list-style:none}body{text-size-adjust:none}*,:after,:before{box-sizing:border-box}body{line-height:1;min-height:var(--viewport-height);min-width:320px;overflow-x:hidden;overflow-wrap:break-word;background-color:#000000}body:after{background-color:#1b1330;content:"";display:block;height:100%;left:0;opacity:0;pointer-events:none;position:fixed;top:0;transform:scale(1);transition:opacity 1s ease-in-out 0s,visibility 1s ease 0s;visibility:hidden;width:100%;z-index:1}:root{--background-height:100vh;--site-language-alignment:left;--site-language-direction:ltr;--site-language-flex-alignment:flex-start;--site-language-indent-left:1;--site-language-indent-right:0;--viewport-height:100vh}html{font-size:18pt}a{color:inherit;text-decoration:underline;transition:color .25s ease 0s}#a{flex-direction:column;min-height:var(--viewport-height);overflow:hidden;z-index:2;padding:2rem}#a,#b{align-items:center;display:flex;justify-content:center;position:relative}#b{--alignment:center;--flex-alignment:center;--indent-left:1;--indent-right:1;--border-radius-tl:2rem;--border-radius-tr:2rem;--border-radius-br:2rem;--border-radius-bl:2rem;flex-grow:0;flex-shrink:0;text-align:var(--alignment);background-color:transparent;transition:opacity 1s ease 0s,transform 1s ease 0s}#b,#b>.a{max-width:100%;z-index:1;border-radius:var(--border-radius-tl) var(--border-radius-tr) var(--border-radius-br) var(--border-radius-bl)}#b>.a{--width:30rem;position:relative;width:var(--width);padding:var(--padding-vertical) var(--padding-horizontal)}#b>.a>*{margin-top:var(--spacing);margin-bottom:var(--spacing)}:root:not(#c):not(#c):not(#c) #b>.a>:first-child{margin-top:0}:root:not(#c):not(#c):not(#c) #b>.a>:last-child{margin-bottom:0}#b>.a>.b{margin-left:calc(var(--padding-horizontal) * -1);max-width:calc(100% + var(--padding-horizontal) * 2 + .4725px);width:calc(100% + var(--padding-horizontal) * 2 + .4725px)}#b>.a>.b:first-child{border-top-left-radius:inherit;border-top-right-radius:inherit}:root:not(#c):not(#c):not(#c) #b>.a>.b:first-child{margin-top:calc(var(--padding-vertical) * -1)}#b>.a>.b:last-child{border-bottom-left-radius:inherit;border-bottom-right-radius:inherit}:root:not(#c):not(#c):not(#c) #b>.a>.b:last-child{margin-bottom:calc(var(--padding-vertical) * -1)}.c{display:block;line-height:0;max-width:100%;position:relative}.c .d{backface-visibility:hidden;transform:translateZ(0);display:inline-block;max-width:100%;overflow:hidden;vertical-align:top;width:100%}.c .d amp-img{max-width:100%;vertical-align:top;width:inherit}:root:not(#c):not(#c):not(#c) .c .d amp-img{border-radius:0}:root:not(#c):not(#c):not(#c) .c.e:not(:last-child){margin-bottom:1.875rem}.c.e .d{width:9rem;border-radius:100%;border:5px solid #c6a861;box-shadow:0 1.75rem 1.375rem 0 rgba(29,18,45,.29)}.c.e .d,.c.e .d amp-img{transition:none 0s ease 0s}:root:not(#c):not(#c):not(#c) .c.f:not(:first-child){margin-top:1.875rem}:root:not(#c):not(#c):not(#c) .c.f:not(:last-child){margin-bottom:1.875rem}.c.f .d{border:3px solid #000;box-shadow:0 1.75rem 1.375rem 0 rgba(29,18,45,.29)}.c.f .d,.c.f .d amp-img{transition:none 0s ease 0s}h1,p{direction:var(--site-language-direction)}h1,p,p span.g{position:relative}p span.g{display:block}p.h{color:#NAGAMAX33}p.f,p.h{font-family:Inter,sans-serif;font-weight:200}p.f{color:#dedede}p.f span.g:nth-child(n+2){margin-top:1rem}h1.e{color:#fff;font-family:Manrope,sans-serif;font-size:1.875em;font-weight:600}.i{cursor:default;display:flex;justify-content:var(--flex-alignment);letter-spacing:0;padding:0}.i li,.i li a{max-width:100%}.i li a{align-items:center;justify-content:center;text-align:center;text-decoration:none;vertical-align:middle;white-space:nowrap}.i.e{flex-flow:column nowrap}.i.e li a{display:inline-flex;width:30rem;height:4rem;line-height:4rem;padding:0 2rem;vertical-align:middle;font-family:Inter,sans-serif;font-weight:400;border-radius:.75rem;flex-direction:row-reverse;justify-content:flex-end;transition:transform .25s ease 0s,color .25s ease 0s,background-color .25s ease 0s,border-color .25s ease 0s}.i.e li a svg{display:block;fill:#fff;flex-grow:0;flex-shrink:0;height:100%;min-width:16px;margin-left:.5em;margin-right:-.125em;transition:fill .25s ease 0s}.i.e li a .j{direction:var(--site-language-direction);overflow:hidden;flex-grow:1;flex-shrink:1;text-align:left;width:100%}.i.e .k{background:linear-gradient(124deg,#000000,#000000,#000000,#000000,#000000,#000000,#fff,#000000,#000000,#000000,#000000,#000000,#000000);background-size:400% 400%;animation:gradient 2s ease infinite;box-shadow:inset 0 0 5px 3px #ff0000,inset 0 2px 0 0 #fff,inset 0 0 0 2px #640067,3px 3px 3px 1px rgba(0,0,0,.2);color:#fff}.i.e li a:hover{transform:scale(1.0425)}#d .l{background:linear-gradient(124deg,#000000,#000000,#000000,#000000,#000000,#000000,#fff,#000000,#000000,#000000,#000000,#000000,#000000);background-size:400% 400%;animation:gradient 2s ease infinite;box-shadow:inset 0 0 5px 3px #ff0000,inset 0 2px 0 0 #fff,inset 0 0 0 2px #640067,3px 3px 3px 1px rgba(0,0,0,.2);color:#fff}@keyframes gradient{0%{background-position:0 50%}50%{background-position:100% 50%}100%{background-position:0 50%}}.m{position:relative}.m>.n,.m>.n>.a{vertical-align:top;position:relative;max-width:100%;border-radius:inherit}.m>.n>.a{text-align:var(--alignment)}#b .m.b:first-child>.n{border-top-left-radius:inherit;border-top-right-radius:inherit}#b .m.b:last-child>.n{border-bottom-left-radius:inherit;border-bottom-right-radius:inherit}#b .m.b:first-child>.n>.a{border-top-left-radius:inherit;border-top-right-radius:inherit}#b .m.b:last-child>.n>.a{border-bottom-left-radius:inherit;border-bottom-right-radius:inherit}.m.f{--alignment:center;--flex-alignment:center;--indent-left:1;--indent-right:1;display:flex;width:100%;align-items:center;justify-content:center;background-color:#000000}.m.f>.n>.a{--padding-horizontal:3.25rem;--padding-vertical:3.25rem;padding:var(--padding-vertical) var(--padding-horizontal)}.m.f>.n{max-width:100%;width:100%}.m.f.o>.n>.a>*{margin-bottom:var(--spacing);margin-top:var(--spacing)}:root:not(#c):not(#c):not(#c) .m.f.o>.n>.a>:first-child{margin-top:0}:root:not(#c):not(#c):not(#c) .m.f.o>.n>.a>:last-child{margin-bottom:0}.m.e{display:flex;width:100%;align-items:center;justify-content:center;background:linear-gradient(to bottom,#0570c0 0,#04315f 50%,#002b7a 100%)}.m.e>.n>.a{--padding-horizontal:2.5rem;--padding-vertical:2.5rem;padding:var(--padding-vertical) var(--padding-horizontal)}.m.e>.n{max-width:100%;width:100%}.m.e.o>.n>.a>*{margin-bottom:var(--spacing);margin-top:var(--spacing)}:root:not(#c):not(#c):not(#c) .m.e.o>.n>.a>:first-child{margin-top:0}:root:not(#c):not(#c):not(#c) .m.e.o>.n>.a>:last-child{margin-bottom:0}.m.e.p>.n>.a{flex-wrap:wrap;display:flex;align-items:center}.m.e.p>.n>.a>*{flex-grow:0;flex-shrink:0;max-width:100%;text-align:var(--alignment);padding:0 0 0 var(--gutters)}.m.e.p>.n>.a>*>*{margin-bottom:var(--spacing);margin-top:var(--spacing)}:root:not(#c):not(#c):not(#c) .m.e.p>.n>.a>*>:first-child{margin-top:0}:root:not(#c):not(#c):not(#c) .m.e.p>.n>.a>*>:last-child{margin-bottom:0}.m.e.p>.n>.a>:first-child{margin-left:calc(var(--gutters) * -1)}#e>.n>.a>:first-child,#e>.n>.a>:nth-child(2),#e>.n>.a>:nth-child(3){width:calc(50% + var(--gutters)/ 2)}.q{display:flex;flex-wrap:wrap;justify-content:var(--flex-alignment);letter-spacing:0;padding:0}.q li{position:relative;z-index:1}.q li a{align-items:center;display:flex;justify-content:center}.q li a svg{display:block;position:relative}.q li a .j{display:none}.q.e{font-size:2.5em}.q.e li a{border-radius:100%;height:2em;width:2em;transition:transform .25s ease 0s,color .25s ease 0s,background-color .25s ease 0s,border-color .25s ease 0s}.q.e li a svg{height:60%;width:60%;transition:fill .25s ease 0s}.q.e a{background-color:hsla(0,0%,100%,.05);background-image:linear-gradient(37deg,hsla(0,0%,100%,.04),transparent);background-position:0 0;background-repeat:repeat;background-size:cover}.q.e a svg{fill:#fff}.q.e li a:hover{transform:translateY(-7.75%)}#f .l{background-color:#d13a3a;background-image:linear-gradient(37deg,#e82c2c,rgba(209,58,58,.008))}#g .l{background-color:#2c9efa;background-image:linear-gradient(37deg,#2c66fa,rgba(44,158,250,.008))}#h .l{background-color:#c060fb;background-image:linear-gradient(37deg,#6038ff,rgba(192,96,251,.008))}html{font-size:13pt;font-size:11pt;font-size:12pt}#b{--border-radius-tl:0;--border-radius-tr:0;--border-radius-br:0;--border-radius-bl:0}#b>.a{--padding-horizontal:2rem;--padding-vertical:2rem}:root:not(#c):not(#c):not(#c) .c.e:not(:last-child){margin-bottom:1.40625rem}.c.e .d{width:10rem}:root:not(#c):not(#c):not(#c) .c.f:not(:first-child){margin-top:1.40625rem}:root:not(#c):not(#c):not(#c) .c.f:not(:last-child){margin-bottom:1.40625rem}.c.f .d{width:24rem}p.f,p.h{letter-spacing:0;width:100%;line-height:1.75}h1.e{letter-spacing:0;width:100%;line-height:1.25}.i.e{gap:1.25rem}.i.e li a{letter-spacing:0;font-size:1.125em}.i.e li a svg{width:1.75em}.m.f>.n>.a{--gutters:3rem;--padding-horizontal:2rem;--padding-vertical:2rem;--spacing:1.5rem}.m.e{--alignment:center;--flex-alignment:center;--indent-left:1;--indent-right:1}.m.e>.n>.a{--gutters:1rem;--padding-horizontal:1.75rem;--padding-vertical:2rem;--spacing:0.25rem}#e>.n>.a>:first-child,#e>.n>.a>:nth-child(2),#e>.n>.a>:nth-child(3){--alignment:center;--flex-alignment:center;--indent-left:1;--indent-right:1}.q.e{font-size:1.75em;gap:1.625rem}.i.e li a{max-width:32rem;width:100%}.m.f>.n>.a{--spacing:1.3125rem}.m.e>.n>.a{--spacing:0.21875rem}#a{padding:0}#b>.a{--padding-horizontal:1.5rem;--padding-vertical:1.5rem;--spacing:0rem}p.f,p.h{font-size:1em}h1.e{font-size:1.5em}.i.e{gap:.9375rem}.m.f>.n>.a{--gutters:2.25rem;--padding-horizontal:1.5rem;--padding-vertical:1.5rem;--spacing:1.125rem}.m.e>.n>.a{--gutters:0.75rem;--padding-horizontal:1.3125rem;--padding-vertical:1.5rem;--spacing:0.1875rem}.q.e{gap:1.21875rem}:root:not(#c):not(#c):not(#c) :root:not(#c) [hidden]{display:none}:root:not(#c):not(#c):not(#c):not(#c) .r{display:inline-block}:root:not(#c):not(#c):not(#c):not(#c) amp-img>img{object-fit:inherit;object-position:inherit}:root:not(#c):not(#c):not(#c):not(#c) .s,[layout=fixed][width="0"][height="0"]{display:none}
</style>
<link rel="icon" type="image/png" href="https://shintaeyong.xyz/images/seo-logo.png">
<link rel="apple-touch-icon" href="https://shintaeyong.xyz/images/seo-logo.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter:ital,wght@0,200;0,400;1,200;1,400&amp;family=Manrope:ital,wght@0,600;1,600">
<style amp-boilerplate="">
body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
</style>
<noscript>
<style amp-boilerplate="">
body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}
</style>
</noscript>
</head>
<body class="">
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 40 40" display="none" width="0" height="0"></svg>
<div id="a">
	<div id="b">
		<div class="a">
			<div id="i" class="f m o b">
				<div class="n">
					<div class="a">
						<div id="j" class="">
							<h2 style="color:#fff">REKOMENDASI SITUS SLOT GACOR POPULER TAHUN 2025</h2>
						</div>
						<ul id="d" class="e i">
							<li>
								<a href="https://ewuv.short.gy/pecimerah" class="k l"><amp-img src="https://shintaeyong.xyz/images/sgsslot-gacor.png" width="300" height="80" layout="intrinsic"></amp-img><span class="j">KLIK DAFTAR</span></a>
							</li>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="o" class="">
				<div class="n">
					<div class="a">
						<h1 id="p" class="e">Situs Slot Gacor Jaminan Kemenangan 100%</h1>
						<div id="q" class="f c">
							<a href="https://ewuv.short.gy/pecimerah" class="d"><amp-img src="https://lululala.site/images/slot-jackpot.png" alt="SLOT GACOR" width="600" height="600" layout="intrinsic" class="r amp-wp-enforced-sizes">
							<noscript>
							<img src="https://shintaeyong.xyz/images/sgsslot-gacor.png" alt="SLOT GACOR" width="600" height="600" class="r">
							</noscript>
							</amp-img></a>
						</div>
						<p id="r" class="f">SLOT GACOR</p>
					</div>
				</div>
	</div>
</div>
</body>
</html>
