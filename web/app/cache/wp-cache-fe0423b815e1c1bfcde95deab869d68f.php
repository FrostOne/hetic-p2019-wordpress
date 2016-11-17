<?php die(); ?><!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="http://localhost:8888/H3/hetic-p2019-wordpress/web//app/themes/Theme%20Election%202017/style.css" media="screen" title="no title">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
  <title>Election Présidentielle 2017 - Le Candidat Blanc</title>
  <meta name='robots' content='noindex,follow' />
<link rel='dns-prefetch' href='//s.w.org' />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2\/svg\/","svgExt":".svg","source":{"wpemoji":"http:\/\/localhost:8888\/H3\/hetic-p2019-wordpress\/web\/wp\/wp-includes\/js\/wp-emoji.js?ver=4.6.1","twemoji":"http:\/\/localhost:8888\/H3\/hetic-p2019-wordpress\/web\/wp\/wp-includes\/js\/twemoji.js?ver=4.6.1"}};
			( function( window, document, settings ) {
	var src, ready, ii, tests;

	/**
	 * Detect if the browser supports rendering emoji or flag emoji. Flag emoji are a single glyph
	 * made of two characters, so some browsers (notably, Firefox OS X) don't support them.
	 *
	 * @since 4.2.0
	 *
	 * @param type {String} Whether to test for support of "simple", "flag", "diversity" or "unicode8" emoji.
	 * @return {Boolean} True if the browser can render emoji, false if it cannot.
	 */
	function browserSupportsEmoji( type ) {
		var canvas = document.createElement( 'canvas' ),
			context = canvas.getContext && canvas.getContext( '2d' ),
			stringFromCharCode = String.fromCharCode,
			flag, flag2, tonedata, tone, tone2;

		if ( ! context || ! context.fillText ) {
			return false;
		}

		/*
		 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
		 * it doesn't work when the font is bolder than 500 weight. So, we
		 * check for bold rendering support to avoid invisible emoji in Chrome.
		 */
		context.textBaseline = 'top';
		context.font = '600 32px Arial';

		switch ( type ) {
			case 'flag':
				/*
				 * This works because the image will be one of three things:
				 * - Two empty squares, if the browser doesn't render emoji
				 * - Two squares with 'A' and 'U' in them, if the browser doesn't render flag emoji
				 * - The Australian flag
				 *
				 * The first two will encode to small images (1-2KB data URLs), the third will encode
				 * to a larger image (4-5KB data URL).
				 */
				context.fillText( stringFromCharCode( 55356, 56806, 55356, 56826 ), 0, 0 );
				if ( canvas.toDataURL().length < 3000 ) {
					return false;
				}

				context.clearRect( 0, 0, canvas.width, canvas.height );

				/*
				 * Test for rainbow flag compatibility. As the rainbow flag was added out of sequence with
				 * the usual Unicode release cycle, some browsers support it, and some don't, even if their
				 * Unicode support is up to date.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (white flag emoji + rainbow emoji).
				 */
				context.fillText( stringFromCharCode( 55356, 57331, 65039, 8205, 55356, 57096 ), 0, 0 );
				flag = canvas.toDataURL();

				context.clearRect( 0, 0, canvas.width, canvas.height );

				context.fillText( stringFromCharCode( 55356, 57331, 55356, 57096 ), 0, 0 );
				flag2 = canvas.toDataURL();

				return flag !== flag2;
			case 'diversity':
				/*
				 * This tests if the browser supports the Emoji Diversity specification, by rendering an
				 * emoji with no skin tone specified (in this case, Santa). It then adds a skin tone, and
				 * compares if the emoji rendering has changed.
				 */
				context.fillText( stringFromCharCode( 55356, 57221 ), 0, 0 );
				tonedata = context.getImageData( 16, 16, 1, 1 ).data;
				tone = tonedata[0] + ',' + tonedata[1] + ',' + tonedata[2] + ',' + tonedata[3];

				context.fillText( stringFromCharCode( 55356, 57221, 55356, 57343 ), 0, 0 );
				// Chrome has issues comparing arrays, and Safari has issues converting arrays to strings.
				// So, we create our own string and compare that, instead.
				tonedata = context.getImageData( 16, 16, 1, 1 ).data;
				tone2 = tonedata[0] + ',' + tonedata[1] + ',' + tonedata[2] + ',' + tonedata[3];

				return tone !== tone2;
			case 'simple':
				/*
				 * This creates a smiling emoji, and checks to see if there is any image data in the
				 * center pixel. In browsers that don't support emoji, the character will be rendered
				 * as an empty square, so the center pixel will be blank.
				 */
				context.fillText( stringFromCharCode( 55357, 56835 ), 0, 0 );
				return context.getImageData( 16, 16, 1, 1 ).data[0] !== 0;
			case 'unicode8':
				/*
				 * To check for Unicode 8 support, let's try rendering the most important advancement
				 * that the Unicode Consortium have made in years: the burrito.
				 */
				context.fillText( stringFromCharCode( 55356, 57135 ), 0, 0 );
				return context.getImageData( 16, 16, 1, 1 ).data[0] !== 0;
			case 'unicode9':
				/*
				 * Do Unicode 9 emoji render?
				 * ¯\_(ツ)_/¯
				 */
				context.fillText( stringFromCharCode( 55358, 56631 ), 0, 0 );
				return context.getImageData( 16, 16, 1, 1 ).data[0] !== 0;
		}

		return false;
	}

	function addScript( src ) {
		var script = document.createElement( 'script' );

		script.src = src;
		script.type = 'text/javascript';
		document.getElementsByTagName( 'head' )[0].appendChild( script );
	}

	tests = Array( 'simple', 'flag', 'unicode8', 'diversity', 'unicode9' );

	settings.supports = {
		everything: true,
		everythingExceptFlag: true
	};

	for( ii = 0; ii < tests.length; ii++ ) {
		settings.supports[ tests[ ii ] ] = browserSupportsEmoji( tests[ ii ] );

		settings.supports.everything = settings.supports.everything && settings.supports[ tests[ ii ] ];

		if ( 'flag' !== tests[ ii ] ) {
			settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && settings.supports[ tests[ ii ] ];
		}
	}

	settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && ! settings.supports.flag;

	settings.DOMReady = false;
	settings.readyCallback = function() {
		settings.DOMReady = true;
	};

	if ( ! settings.supports.everything ) {
		ready = function() {
			settings.readyCallback();
		};

		if ( document.addEventListener ) {
			document.addEventListener( 'DOMContentLoaded', ready, false );
			window.addEventListener( 'load', ready, false );
		} else {
			window.attachEvent( 'onload', ready );
			document.attachEvent( 'onreadystatechange', function() {
				if ( 'complete' === document.readyState ) {
					settings.readyCallback();
				}
			} );
		}

		src = settings.source || {};

		if ( src.concatemoji ) {
			addScript( src.concatemoji );
		} else if ( src.wpemoji && src.twemoji ) {
			addScript( src.twemoji );
			addScript( src.wpemoji );
		}
	}

} )( window, document, window._wpemojiSettings );
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='dashicons-css'  href='http://localhost:8888/H3/hetic-p2019-wordpress/web/wp/wp-includes/css/dashicons.css?ver=4.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='http://localhost:8888/H3/hetic-p2019-wordpress/web/wp/wp-includes/css/admin-bar.css?ver=4.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='wds_frontend-css'  href='http://localhost:8888/H3/hetic-p2019-wordpress/web//app/plugins/slider-wd/css/wds_frontend.css?ver=1.1.59' type='text/css' media='all' />
<link rel='stylesheet' id='wds_effects-css'  href='http://localhost:8888/H3/hetic-p2019-wordpress/web//app/plugins/slider-wd/css/wds_effects.css?ver=1.1.59' type='text/css' media='all' />
<link rel='stylesheet' id='wds_font-awesome-css'  href='http://localhost:8888/H3/hetic-p2019-wordpress/web//app/plugins/slider-wd/css/font-awesome/font-awesome.css?ver=4.6.3' type='text/css' media='all' />
<script type='text/javascript' src='http://localhost:8888/H3/hetic-p2019-wordpress/web/wp/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://localhost:8888/H3/hetic-p2019-wordpress/web/wp/wp-includes/js/jquery/jquery-migrate.js?ver=1.4.1'></script>
<script type='text/javascript' src='http://localhost:8888/H3/hetic-p2019-wordpress/web//app/plugins/slider-wd/js/jquery.mobile.js?ver=1.1.59'></script>
<script type='text/javascript' src='http://localhost:8888/H3/hetic-p2019-wordpress/web//app/plugins/slider-wd/js/wds_frontend.js?ver=1.1.59'></script>
<link rel='https://api.w.org/' href='http://localhost:8888/H3/hetic-p2019-wordpress/web/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost:8888/H3/hetic-p2019-wordpress/web/wp/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost:8888/H3/hetic-p2019-wordpress/web/wp/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.6.1" />
<link rel="canonical" href="http://localhost:8888/H3/hetic-p2019-wordpress/web/soutien" />
<link rel='shortlink' href='http://localhost:8888/H3/hetic-p2019-wordpress/web/?p=54' />
<link rel="alternate" type="application/json+oembed" href="http://localhost:8888/H3/hetic-p2019-wordpress/web/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%3A8888%2FH3%2Fhetic-p2019-wordpress%2Fweb%2Fsoutien" />
<link rel="alternate" type="text/xml+oembed" href="http://localhost:8888/H3/hetic-p2019-wordpress/web/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%3A8888%2FH3%2Fhetic-p2019-wordpress%2Fweb%2Fsoutien&#038;format=xml" />
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>
</head>

<body class="homepage">
   <nav class="row">
      <a href="http://localhost:8888/H3/hetic-p2019-wordpress/web" title="Logo"><img src="http://localhost:8888/H3/hetic-p2019-wordpress/web//app/themes/Theme%20Election%202017/images/logo.png"></a>
      <div class="col-1"></div>
      <div class="col-7 ma">
        <ul>
          <li><a href="http://localhost:8888/H3/hetic-p2019-wordpress/web" title="Accueil">ACCUEIL</a></li>
          <li><a href="?page_id=56" title="Pourquoi voter blanc">POURQUOI VOTER BLANC</a></li>
          <li><a href="?page_id=52" title="Le Programme">LE PROGRAMME</a></li>
          <li><a href="?page_id=54" title="Comité de soutien">COMITÉ DE SOUTIEN</a></li>
          <li><a href="?page_id=60" title="Blog">BLOG</a></li>
          <li><a href="?page_id=50" title="Contact">CONTACT</a></li>
      </ul>

  </div>
  <div class="col-3 timer ma">
    COMPTE À REBOURS ÉLÉCTORAL
    <div id="coutdown"></div>
</div>
</nav>
  <div class="row">
    <h1 class="ma desc__title">Comité de <strong>Soutien</strong></h1>
  </div>

  <div class="row mt2">
    <div class="col-05"></div>
    <div class="col-5">
      <p class="desc__content">Vous retrouverez dans cette section tous les gens qui nous soutiennent non seulement via des témoignages écrits, mais également par le biais de vidéos.</p>
    </div>
    <div class="col-05"></div>
    <div class="col-5">
      <p class="desc__content">Vous pouvez bien évidemment laissez le vôtre afin de nous montrer votre soutien, votre commentaire sera publié. Laisser un commentaire témoigne de votre soutien au mouvement.</p>
    </div>
  </div>

  <div class="row mt2 desc__subtitle"><h2>VIDEO ILS TEMOIGNENT</h2></div>

  <div class="row"><div class="bar4"></div><div class="separation"></div></div>

  <div class="row">
    <div class="col-3 video">
      <div><img class="video__img" src="http://localhost:8888/H3/hetic-p2019-wordpress/web//app/themes/Theme%20Election%202017/images/bg-video-1.png"></div>
      <h2 class="video__author">Temoignage de <strong> Maya Church</strong></h2>
      <h3 class="video__role">Economic Student at McGill</h3>
    </div>
    <div class="col-3 video">
      <div><img class="video__img" src="http://localhost:8888/H3/hetic-p2019-wordpress/web//app/themes/Theme%20Election%202017/images/bg-video-1.png"></div>
      <h2 class="video__author">Temoignage de <strong> Maya Church</strong></h2>
      <h3 class="video__role">Economic Student at McGill</h3>
    </div>
    <div class="col-3 video">
      <div><img class="video__img" src="http://localhost:8888/H3/hetic-p2019-wordpress/web//app/themes/Theme%20Election%202017/images/bg-video-1.png"></div>
      <h2 class="video__author">Temoignage de <strong> Maya Church</strong></h2>
      <h3 class="video__role">Economic Student at McGill</h3>
    </div>
    <div class="col-3 video">
      <div><img class="video__img" src="http://localhost:8888/H3/hetic-p2019-wordpress/web//app/themes/Theme%20Election%202017/images/bg-video-1.png"></div>
      <h2 class="video__author">Temoignage de <strong> Maya Church</strong></h2>
      <h3 class="video__role">Economic Student at McGill</h3>
    </div>
    
  </div>
  <div class="ban">
      <div class="row">
        <div class="ma ban__title col-8">  Vous avez le Pouvoir de changer les chose, votez blanc</div>
        <div class="ban__button">
          <button class="ma"> SOUTENEZ <strong>LE VOTE BLANC</strong></button>
        </div>
      </div>
  </div>
  <div class="row"><h2 class="desc__subtitle">PAROLES D'INTERNAUTE</h2></div>
  
  <div class="row"><div class="bar4"></div><div class="separation"></div></div>

  <div class="row2">
    <div class="col-5">
      <div class="post">
        <h3 class="post__author">Jean Dujardin</h3>
        <p class="post__content">“Le vote blanc c’est vraiment incroyable !! J’adore voter blanc, je vais le faire toute ma vie.”</p>
      </div>
      <div class="post">
        <h3 class="post__author">Jean Dujardin</h3>
        <p class="post__content">“Le vote blanc c’est vraiment incroyable !! J’adore voter blanc, je vais le faire toute ma vie.”</p>
      </div>
      <div class="post">
        <h3 class="post__author">Jean Dujardin</h3>
        <p class="post__content">“Le vote blanc c’est vraiment incroyable !! J’adore voter blanc, je vais le faire toute ma vie.”</p>
      </div>
      <div class="post">
        <h3 class="post__author">Jean Dujardin</h3>
        <p class="post__content">“Le vote blanc c’est vraiment incroyable !! J’adore voter blanc, je vais le faire toute ma vie.”</p>
      </div>
  
    </div>
    <div class="col-1"></div>
    <div class="col-6">
      <h2 class="message__title">Vous Aussi témoignez</h2>
      <div class="mt2"></div>
      <form class="message">
        <label class="message__label">Nom</label><br><br>
        <input type="text" class="text"><br>
        <label class="message__label">Prenom</label><br><br>
        <input type="text" class="text"><br>
        <label class="message__label">Votre message</label><br><br>
        <textarea></textarea><br>
        <button type="submit">Poster Le <strong>Message</strong></button>
      </form>
    </div>

  </div>
  <div class="mt2"></div>


    <script src="http://localhost:8888/H3/hetic-p2019-wordpress/web//app/themes/Theme%20Election%202017/script.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var simple = document.querySelector('.js_simple');
        lory(simple, {
          infinite: 1
      });
    });
</script>
<footer id="footer">
    <div class="row">
        <div class="col-8">
          <ul>
              <li><a href="http://localhost:8888/H3/hetic-p2019-wordpress/web" title="Accueil">ACCUEIL</a></li>
              <li><a href="?page_id=56" title="Pourquoi voter blanc">POURQUOI VOTER BLANC</a></li>
              <li><a href="?page_id=52" title="Le Programme">LE PROGRAMME</a></li>
              <li><a href="?page_id=54" title="Comité de soutien">COMITÉ DE SOUTIEN</a></li>
              <li><a href="?page_id=60" title="Blog">BLOG</a></li>
              <li><a href="?page_id=50" title="Contact">CONTACT</a></li>
          </ul>
      </div>
      <div class="col-4 left">© Copyright 2016 - HETIC</div>
  </div>
</footer>
</body>
</html>

<!-- Dynamic page generated in 0.248 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2016-11-17 11:50:54 -->
