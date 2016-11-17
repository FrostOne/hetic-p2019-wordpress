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
<div class="carousel__slider js_slider js_simple">
        <style>
      .wds_bigplay_0,
      .wds_slideshow_image_0,
      .wds_slideshow_video_0 {
        display: block;
      }
     .wds_bulframe_0 {
        display: none; 
        background-image: url(''); 
        margin: 0px;  
        position: absolute;
        z-index: 3;
        -webkit-transition: left 1s, right 1s;
        transition: left 1s, right 1s;
        width: 240px;
        height: 105px;
      }
      #wds_container1_0 #wds_container2_0 {
        text-align: center;
        margin: 0px 0;
        visibility: hidden;
        position: relative;      }
      #wds_container1_0 #wds_container2_0 .wds_slideshow_image_wrap_0,
      #wds_container1_0 #wds_container2_0 .wds_slideshow_image_wrap_0 * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
      }
      #wds_container1_0 #wds_container2_0 .wds_slideshow_image_wrap_0 {
        background-color: rgba(0, 0, 0, 0.00);
        border-width: 0px;
        border-style: none;
        border-color: #000000;
        border-radius: ;
        border-collapse: collapse;
        display: inline-block;
        position: absolute;
        text-align: center;
        width: 100%;
        max-width: 800px;
        box-shadow: ;
        overflow: hidden;
        z-index: 0;
      }
      #wds_container1_0 #wds_container2_0 .wds_slideshow_image_0 {
        padding: 0 !important;
        margin: 0 !important;
        float: none !important;
        vertical-align: middle;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
      }
      #wds_container1_0 #wds_container2_0 .wds_slideshow_image_container_0 {
        display: /*table*/block;
        position: absolute;
        text-align: center;
        none: 0px;
        vertical-align: middle;
        width: 100%;
        height: /*inherit*/100%;
      }

            @media only screen and (min-width: 0px) and (max-width: 320px) {
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
          height: 16px;
          width: 48px;
        }
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
          font-size: 12px;
          margin: 2px;
                    width: 12px;
          height: 12px;
                    }
        #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
          font-size: 20px;
          height: 20px;
          width: 20px;
        }
        #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
        #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
          height: 20px;
          font-size: 20px;
          width: 20px;
        }
      }
              @media only screen and (min-width: 321px) and (max-width: 480px) {
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
          height: 22px;
          width: 66px;
        }
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
          font-size: 18px;
          margin: 2px;
                    width: 18px;
          height: 18px;
                    }
        #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
          font-size: 30px;
          height: 30px;
          width: 30px;
        }
        #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
        #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
          height: 30px;
          font-size: 30px;
          width: 30px;
        }
      }
              @media only screen and (min-width: 481px) and (max-width: 640px) {
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
          height: 26px;
          width: 78px;
        }
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
          font-size: 20px;
          margin: 3px;
                    width: 20px;
          height: 20px;
                    }
        #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
          font-size: 40px;
          height: 40px;
          width: 40px;
        }
        #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
        #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
          height: 40px;
          font-size: 40px;
          width: 40px;
        }
      }
              @media only screen and (min-width: 641px) and (max-width: 768px) {
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
          height: 26px;
          width: 78px;
        }
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
          font-size: 20px;
          margin: 3px;
                    width: 20px;
          height: 20px;
                    }
        #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
          font-size: 40px;
          height: 40px;
          width: 40px;
        }
        #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
        #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
          height: 40px;
          font-size: 40px;
          width: 40px;
        }
      }
              @media only screen and (min-width: 769px) and (max-width: 800px) {
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
          height: 26px;
          width: 78px;
        }
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
          font-size: 20px;
          margin: 3px;
                    width: 20px;
          height: 20px;
                    }
        #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
          font-size: 40px;
          height: 40px;
          width: 40px;
        }
        #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
        #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
          height: 40px;
          font-size: 40px;
          width: 40px;
        }
      }
              @media only screen and (min-width: 801px) and (max-width: 1024px) {
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
          height: 26px;
          width: 78px;
        }
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
          font-size: 20px;
          margin: 3px;
                    width: 20px;
          height: 20px;
                    }
        #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
          font-size: 40px;
          height: 40px;
          width: 40px;
        }
        #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
        #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
          height: 40px;
          font-size: 40px;
          width: 40px;
        }
      }
              @media only screen and (min-width: 1025px) and (max-width: 1366px) {
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
          height: 26px;
          width: 78px;
        }
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
          font-size: 20px;
          margin: 3px;
                    width: 20px;
          height: 20px;
                    }
        #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
          font-size: 40px;
          height: 40px;
          width: 40px;
        }
        #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
        #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
          height: 40px;
          font-size: 40px;
          width: 40px;
        }
      }
              @media only screen and (min-width: 1367px) and (max-width: 1824px) {
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
          height: 26px;
          width: 78px;
        }
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
          font-size: 20px;
          margin: 3px;
                    width: 20px;
          height: 20px;
                    }
        #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
          font-size: 40px;
          height: 40px;
          width: 40px;
        }
        #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
        #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
          height: 40px;
          font-size: 40px;
          width: 40px;
        }
      }
              @media only screen and (min-width: 1825px) and (max-width: 3000px) {
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
          height: 26px;
          width: 78px;
        }
        #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
          font-size: 20px;
          margin: 3px;
                    width: 20px;
          height: 20px;
                    }
        #wds_container1_0 #wds_container2_0 .wds_pp_btn_cont {  
          font-size: 40px;
          height: 40px;
          width: 40px;
        }
        #wds_container1_0 #wds_container2_0 .wds_left_btn_cont,
        #wds_container1_0 #wds_container2_0 .wds_right_btn_cont {
          height: 40px;
          font-size: 40px;
          width: 40px;
        }
      }
        
      #wds_container1_0 #wds_container2_0 .wds_slideshow_video_0 {
        padding: 0 !important;
        margin: 0 !important;
        float: none !important;
        width: 100%;
        vertical-align: middle;
        display: inline-block;
      }
      #wds_container1_0 #wds_container2_0 #wds_slideshow_play_pause_0 {  
        color: #000000;
        cursor: pointer;
        position: relative;
        z-index: 13;
        width: inherit;
        height: inherit;
        font-size: inherit;
      }
      #wds_container1_0 #wds_container2_0 #wds_slideshow_play_pause_0:hover {  
        color: #000000;
        cursor: pointer;
      }
            #wds_container1_0 #wds_container2_0 .wds_left-ico_0,
      #wds_container1_0 #wds_container2_0 .wds_right-ico_0 {
        background-color: rgba(255, 255, 255, 0.00);
        border-radius: 20px;
        border: 0px none #FFFFFF;
        border-collapse: separate;
        color: #000000;
        left: 0;
        top: 0;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        cursor: pointer;
        line-height: 0;
        width: inherit;
        height: inherit;
        font-size: inherit;
        position: absolute;
      }
      #wds_container1_0 #wds_container2_0 .wds_left-ico_0 {
        left: -4000px;
      }
      #wds_container1_0 #wds_container2_0 .wds_right-ico_0 {
        left: 4000px;
      }
            #wds_container1_0 #wds_container2_0 #wds_slideshow_play_pause_0 {
        opacity: 0;
        filter: "Alpha(opacity=0)";
      }
      #wds_container1_0 #wds_container2_0 .wds_left-ico_0:hover,
      #wds_container1_0 #wds_container2_0 .wds_right-ico_0:hover {
        color: #000000;
        cursor: pointer;
      }

      #wds_container1_0 #wds_container2_0 .wds_none_selectable_0 {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      #wds_container1_0 #wds_container2_0 .wds_slide_container_0 {
        display: table-cell;
        margin: 0 auto;
        position: absolute;
        vertical-align: middle;
        width: 100%;
        height: 100%;
        overflow: hidden;
        cursor: inherit;
        cursor: inherit;
        cursor: inherit;
      }
      #wds_container1_0 #wds_container2_0 .wds_slide_container_0:active {
        cursor: inherit;
        cursor: inherit;
        cursor: inherit;
      }
      #wds_container1_0 #wds_container2_0 .wds_slide_bg_0 {
        margin: 0 auto;
        width: /*inherit*/100%;
        height: /*inherit*/100%;
      }
      #wds_container1_0 #wds_container2_0 .wds_slider_0 {
        height: /*inherit*/100%;
        width: /*inherit*/100%;
      }
      #wds_container1_0 #wds_container2_0 .wds_slideshow_image_spun_0 {
        width: /*inherit*/100%;
        height: /*inherit*/100%;
        display: table-cell;
        filter: Alpha(opacity=100);
        opacity: 1;
        position: absolute;
        vertical-align: middle;
        z-index: 2;
      }
      #wds_container1_0 #wds_container2_0 .wds_slideshow_image_second_spun_0 {
        width: /*inherit*/100%;
        height: /*inherit*/100%;
        display: table-cell;
        filter: Alpha(opacity=0);
        opacity: 0;
        position: absolute;
        vertical-align: middle;
        z-index: 1;
      }
      #wds_container1_0 #wds_container2_0 .wds_grid_0 {
        display: none;
        height: 100%;
        overflow: hidden;
        position: absolute;
        width: 100%;
      }
      #wds_container1_0 #wds_container2_0 .wds_gridlet_0 {
        opacity: 1;
        filter: Alpha(opacity=100);
        position: absolute;
      }

      /* Dots.*/
      #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_container_0 {
        opacity: 1;
        filter: "Alpha(opacity=100)";
      }
      #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_container_0 {
        display: block;
        overflow: hidden;
        position: absolute;
        width: 100%;
        bottom: 0;
        /*z-index: 17;*/
      }
      #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_thumbnails_0 {
        left: 0px;
        font-size: 0;
        margin: 0 auto;
        position: relative;
        z-index: 999;
      }
      #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_0 {
        display: inline-block;
        position: relative;
        color: #FFFFFF;
        cursor: pointer;
        z-index: 17;
      }
      #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_active_0 {
        color: #FFFFFF;
        opacity: 1;
        filter: Alpha(opacity=100);
          
      }
      #wds_container1_0 #wds_container2_0 .wds_slideshow_dots_deactive_0 {
              }
            /* Line timer.*/
      #wds_container1_0 #wds_container2_0 .wds_line_timer_container_0 {
        display: block;
        position: absolute;
        overflow: hidden;
        top: 0;
        z-index: 16;
        width: 100%;
        height: 5px;
      }
      #wds_container1_0 #wds_container2_0 .wds_line_timer_0 {
        z-index: 17;
        width: 0;
        height: 5px;
        background: #BBBBBB;
        opacity: 0.50;
        filter: alpha(opacity=50);
      }
        
      #wds_container1_0 #wds_container2_0 .wds_slideshow_image_spun1_0 {
        display: table; 
        width: /*inherit*/100%; 
        height: /*inherit*/100%;
      }
      #wds_container1_0 #wds_container2_0 .wds_slideshow_image_spun2_0 {
        display: table-cell; 
        vertical-align: middle; 
        text-align: center;
        overflow: hidden;
      }
      #wds_container1_0 .wds_loading_img {
        background-image: url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/plugins/slider-wd/images/loading/0.gif');
      }
                      </style>
    <script>
      var wds_data_0 = [];
      var wds_event_stack_0 = [];
      var wds_clear_layers_effects_in_0 = [];
      var wds_clear_layers_effects_out_0 = [];
      var wds_clear_layers_effects_out_before_change_0 = [];
      if (0) {
        var wds_duration_for_change_0 = 500;
        var wds_duration_for_clear_effects_0 = 530;
      }
      else {
        var wds_duration_for_change_0 = 0;
        var wds_duration_for_clear_effects_0 = 0;
      }
              wds_clear_layers_effects_in_0["0"] = [];
        wds_clear_layers_effects_out_0["0"] = [];
        wds_clear_layers_effects_out_before_change_0["0"] = [];
        wds_data_0["0"] = [];
        wds_data_0["0"]["id"] = "1";
        wds_data_0["0"]["image_url"] = "http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/delacroix.png";
        wds_data_0["0"]["thumb_url"] = "http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/delacroix-150x150.png";
        wds_data_0["0"]["is_video"] = "image";
        wds_data_0["0"]["slide_layers_count"] = 0;
        wds_data_0["0"]["bg_fit"] = "cover";
        wds_data_0["0"]["bull_position"] = "bottom";
        wds_data_0["0"]["full_width"] = "1";
        wds_data_0["0"]["image_thumb_url"] = "http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/delacroix-150x150.png";
                wds_clear_layers_effects_in_0["1"] = [];
        wds_clear_layers_effects_out_0["1"] = [];
        wds_clear_layers_effects_out_before_change_0["1"] = [];
        wds_data_0["1"] = [];
        wds_data_0["1"]["id"] = "2";
        wds_data_0["1"]["image_url"] = "http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/maxresdefault.jpg";
        wds_data_0["1"]["thumb_url"] = "http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/maxresdefault-150x150.jpg";
        wds_data_0["1"]["is_video"] = "image";
        wds_data_0["1"]["slide_layers_count"] = 0;
        wds_data_0["1"]["bg_fit"] = "cover";
        wds_data_0["1"]["bull_position"] = "bottom";
        wds_data_0["1"]["full_width"] = "1";
        wds_data_0["1"]["image_thumb_url"] = "http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/maxresdefault-150x150.jpg";
                wds_clear_layers_effects_in_0["2"] = [];
        wds_clear_layers_effects_out_0["2"] = [];
        wds_clear_layers_effects_out_before_change_0["2"] = [];
        wds_data_0["2"] = [];
        wds_data_0["2"]["id"] = "3";
        wds_data_0["2"]["image_url"] = "http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/109803341_o.jpg";
        wds_data_0["2"]["thumb_url"] = "http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/109803341_o-150x150.jpg";
        wds_data_0["2"]["is_video"] = "image";
        wds_data_0["2"]["slide_layers_count"] = 0;
        wds_data_0["2"]["bg_fit"] = "cover";
        wds_data_0["2"]["bull_position"] = "bottom";
        wds_data_0["2"]["full_width"] = "1";
        wds_data_0["2"]["image_thumb_url"] = "http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/109803341_o-150x150.jpg";
            </script>
    <div id="wds_container1_0">
      <div class="wds_loading">
        <div class="wds_loading_img"></div>
      </div>
      <div id="wds_container2_0">
        <div class="wds_slideshow_image_wrap_0">
                    <div id="wds_slideshow_image_container_0" class="wds_slideshow_image_container_0">
                        <div class="wds_slideshow_dots_container_0" onmouseleave="wds_hide_thumb(0)">
              <div class="wds_slideshow_dots_thumbnails_0">
                                <i id="wds_dots_0_0"
                   class="wds_slideshow_dots_0 fa fa-square wds_slideshow_dots_active_0"
                                      onclick="wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), '0', wds_data_0)">
                </i>
                                    <i id="wds_dots_1_0"
                   class="wds_slideshow_dots_0 fa fa-square-o wds_slideshow_dots_deactive_0"
                                      onclick="wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), '1', wds_data_0)">
                </i>
                                    <i id="wds_dots_2_0"
                   class="wds_slideshow_dots_0 fa fa-square-o wds_slideshow_dots_deactive_0"
                                      onclick="wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), '2', wds_data_0)">
                </i>
                                  </div>
            </div>
                                          <div class="wds_line_timer_container_0"><div class="wds_line_timer_0"></div></div>			
                          <div class="wds_slide_container_0" id="wds_slide_container_0">
              <div class="wds_slide_bg_0">
                <div class="wds_slider_0">
                                  <span class="wds_slideshow_image_spun_0" id="wds_image_id_0_1">
                    <span class="wds_slideshow_image_spun1_0">
                      <span class="wds_slideshow_image_spun2_0">
                        <span img_id="wds_slideshow_image_0"
                             class="wds_slideshow_image_0"
                             onclick=""
                             style="background-image: url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/delacroix.png');">
                                                </span>
                      </span>
                    </span>
                  </span>
                                    <span class="wds_slideshow_image_second_spun_0" id="wds_image_id_0_2">
                    <span class="wds_slideshow_image_spun1_0">
                      <span class="wds_slideshow_image_spun2_0">
                        <span img_id="wds_slideshow_image_second_0"
                             class="wds_slideshow_image_0"
                             onclick=""
                             style="">
                                                </span>
                      </span>
                    </span>
                  </span>
                                    <span class="wds_slideshow_image_second_spun_0" id="wds_image_id_0_3">
                    <span class="wds_slideshow_image_spun1_0">
                      <span class="wds_slideshow_image_spun2_0">
                        <span img_id="wds_slideshow_image_second_0"
                             class="wds_slideshow_image_0"
                             onclick=""
                             style="">
                                                </span>
                      </span>
                    </span>
                  </span>
                                  <input type="hidden" id="wds_current_image_key_0" value="0" />
                </div>
              </div>
            </div>
                          <div class="wds_btn_cont wds_contTableCell">
                <div class="wds_btn_cont wds_contTable">
                  <span class="wds_btn_cont wds_contTableCell" style="position: relative; text-align: left;">
                    <span class="wds_left_btn_cont">
                      <span class="wds_left-ico_0" onclick="wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) - wds_iterator_0()) >= 0 ? (parseInt(jQuery('#wds_current_image_key_0').val()) - wds_iterator_0()) % wds_data_0.length : wds_data_0.length - 1, wds_data_0, false, 'left'); return false;">
                                                  <i class="fa fa-angle-left"></i>
                                                </span>
                    </span>
                   </span>
                </div>
              </div>
              <div class="wds_btn_cont wds_contTableCell">
                <div class="wds_btn_cont wds_contTable">
                  <span class="wds_btn_cont wds_contTableCell" style="position: relative; text-align: right;">
                    <span class="wds_right_btn_cont">
                      <span class="wds_right-ico_0" onclick="wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) + wds_iterator_0()) % wds_data_0.length, wds_data_0, false, 'right'); return false;">
                                                  <i class="fa fa-angle-right"></i>
                                                </span>
                    </span>
                  </span>
                </div>
              </div>
                        </div>
                  </div>
      </div>
    </div>

    <script>
      var wds_trans_in_progress_0 = false;
      var wds_transition_duration_0 = 800;
      if (5 < 4) {
        if (5 != 0) {
          wds_transition_duration_0 = (5 * 1000) / 4;
        }
      }
      var wds_playInterval_0;
      var progress = 0;
      var bottom_right_deggree_0;
      var bottom_left_deggree_0;
      var top_left_deggree_0;
      var curent_time_deggree_0 = 0;
      var circle_timer_animate_0;
      function circle_timer_0(angle) {
        circle_timer_animate_0 = jQuery({deg: angle}).animate({deg: 360}, {
          duration: 5000,
          step: function(now) {
            curent_time_deggree_0 = now;
            if (now >= 0) {
              if (now < 271) {
                jQuery('#top_right_0').css({
                  '-moz-transform':'rotate('+now+'deg)',
                  '-webkit-transform':'rotate('+now+'deg)',
                  '-o-transform':'rotate('+now+'deg)',
                  '-ms-transform':'rotate('+now+'deg)',
                  'transform':'rotate('+now+'deg)',

                  '-webkit-transform-origin': 'left bottom',
                  '-ms-transform-origin': 'left bottom',
                  '-moz-transform-origin': 'left bottom',
                  'transform-origin': 'left bottom'
                });
              }
            }
            if (now >= 90) {
              if (now < 271) {
                bottom_right_deggree_0 = now - 90;
                jQuery('#bottom_right_0').css({
                  '-moz-transform':'rotate('+bottom_right_deggree_0 +'deg)',
                '-webkit-transform':'rotate('+bottom_right_deggree_0 +'deg)',
                '-o-transform':'rotate('+bottom_right_deggree_0 +'deg)',
                '-ms-transform':'rotate('+bottom_right_deggree_0 +'deg)',
                'transform':'rotate('+bottom_right_deggree_0 +'deg)',

                '-webkit-transform-origin': 'left top',
                '-ms-transform-origin': 'left top',
                '-moz-transform-origin': 'left top',
                'transform-origin': 'left top'
                });
              }
            }
            if (now >= 180) {
              if (now < 361) {
                bottom_left_deggree_0 = now - 180;
                jQuery('#bottom_left_0').css({
                  '-moz-transform':'rotate('+bottom_left_deggree_0 +'deg)',
                  '-webkit-transform':'rotate('+bottom_left_deggree_0 +'deg)',
                  '-o-transform':'rotate('+bottom_left_deggree_0 +'deg)',
                  '-ms-transform':'rotate('+bottom_left_deggree_0 +'deg)',
                  'transform':'rotate('+bottom_left_deggree_0 +'deg)',

                  '-webkit-transform-origin': 'right top',
                  '-ms-transform-origin': 'right top',
                  '-moz-transform-origin': 'right top',
                  'transform-origin': 'right top'
                });
              }
            }
            if (now >= 270) {
              if (now < 361) {
                top_left_deggree_0  = now - 270;
                jQuery('#top_left_0').css({
                  '-moz-transform':'rotate('+top_left_deggree_0 +'deg)',
                  '-webkit-transform':'rotate('+top_left_deggree_0 +'deg)',
                  '-o-transform':'rotate('+top_left_deggree_0 +'deg)',
                  '-ms-transform':'rotate('+top_left_deggree_0 +'deg)',
                  'transform':'rotate('+top_left_deggree_0 +'deg)',

                  '-webkit-transform-origin': 'right bottom',
                  '-ms-transform-origin': 'right bottom',
                  '-moz-transform-origin': 'right bottom',
                  'transform-origin': 'right bottom'
                });
              }
            }
          }
        });
      }
      /* Stop autoplay.*/
      window.clearInterval(wds_playInterval_0);
      var wds_current_key_0 = '0';
      var wds_current_filmstrip_pos_0 = 0;
      function wds_move_dots_0() {
        var image_left = jQuery(".wds_slideshow_dots_active_0").position().left;
        var image_right = jQuery(".wds_slideshow_dots_active_0").position().left + jQuery(".wds_slideshow_dots_active_0").outerWidth(true);
        var wds_dots_width = jQuery(".wds_slideshow_dots_container_0").outerWidth(true);
        var wds_dots_thumbnails_width = jQuery(".wds_slideshow_dots_thumbnails_0").outerWidth(true);
        var long_filmstrip_cont_left = jQuery(".wds_slideshow_dots_thumbnails_0").position().left;
        var long_filmstrip_cont_right = Math.abs(jQuery(".wds_slideshow_dots_thumbnails_0").position().left) + wds_dots_width;
        if (wds_dots_width > wds_dots_thumbnails_width) {
          return;
        }
        if (image_left < Math.abs(long_filmstrip_cont_left)) {
          jQuery(".wds_slideshow_dots_thumbnails_0").animate({
            left: -image_left
          }, {
            duration: 500
          });
        }
        else if (image_right > long_filmstrip_cont_right) {
          jQuery(".wds_slideshow_dots_thumbnails_0").animate({
            left: -(image_right - wds_dots_width)
          }, {
            duration: 500
          });
        }
      }
      function wds_testBrowser_cssTransitions_0() {
        return wds_testDom_0('Transition');
      }
      function wds_testBrowser_cssTransforms3d_0() {
        return wds_testDom_0('Perspective');
      }
      function wds_testDom_0(prop) {
        /* Browser vendor CSS prefixes.*/
        var browserVendors = ['', '-webkit-', '-moz-', '-ms-', '-o-', '-khtml-'];
        /* Browser vendor DOM prefixes.*/
        var domPrefixes = ['', 'Webkit', 'Moz', 'ms', 'O', 'Khtml'];
        var i = domPrefixes.length;
        while (i--) {
          if (typeof document.body.style[domPrefixes[i] + prop] !== 'undefined') {
            return true;
          }
        }
        return false;
      }
      function wds_set_dots_class_0() {
        jQuery(".wds_slideshow_dots_0").removeClass("wds_slideshow_dots_active_0").addClass("wds_slideshow_dots_deactive_0");
        jQuery("#wds_dots_" + wds_current_key_0 + "_0").removeClass("wds_slideshow_dots_deactive_0").addClass("wds_slideshow_dots_active_0");
                jQuery(".wds_slideshow_dots_0").removeClass("fa-square").addClass("fa-square-o");
        jQuery("#wds_dots_" + wds_current_key_0 + "_0").removeClass("fa-square-o").addClass("fa-square");
              }
      function wds_grid_0(cols, rows, ro, tx, ty, sc, op, current_image_class, next_image_class, direction, random, roy, easing) {
        /* If browser does not support CSS transitions.*/
        if (!wds_testBrowser_cssTransitions_0()) {
          return wds_fallback_0(current_image_class, next_image_class, direction);
        }
        wds_trans_in_progress_0 = true;
        /* Set active thumbnail.*/
        wds_set_dots_class_0();
        /* The time (in ms) added to/subtracted from the delay total for each new gridlet.*/
        var count = (wds_transition_duration_0) / (cols + rows);
        /* Gridlet creator (divisions of the image grid, positioned with background-images to replicate the look of an entire slide image when assembled)*/
        function wds_gridlet(width, height, top, img_top, left, img_left, src, imgWidth, imgHeight, c, r) {
          var delay = random ? Math.floor((cols + rows) * count * Math.random()) : (c + r) * count;
          /* Return a gridlet elem with styles for specific transition.*/
          var grid_div = jQuery('<span class="wds_gridlet_0" />').css({
            display: "block",
            width : imgWidth,/*"100%"*/
            height : jQuery(".wds_slideshow_image_spun_0").height() + "px",
            top : -top,
            left : -left,
            backgroundImage : src,
            backgroundSize: jQuery(".wds_slideshow_image_0").css("background-size"),
            backgroundPosition: jQuery(".wds_slideshow_image_0").css("background-position"),
            /*backgroundColor: jQuery(".wds_slideshow_image_wrap_0").css("background-color"),*/
            backgroundRepeat: 'no-repeat'
          });
          return jQuery('<span class="wds_gridlet_0" />').css({
            display: "block",
            width : width,/*"100%"*/
            height : height,
            top : top,
            left : left,
            backgroundSize : imgWidth + 'px ' + imgHeight + 'px',
            backgroundPosition : img_left + 'px ' + img_top + 'px',
            backgroundRepeat: 'no-repeat',
            overflow: "hidden",
            transition : 'all ' + wds_transition_duration_0 + 'ms ' + easing + ' ' + delay + 'ms',
            transform : 'none'
          }).append(grid_div);
        }
        /* Get the current slide's image.*/
        var cur_img = jQuery(current_image_class).find('span[img_id^="wds_slideshow_image"]');
        /* Create a grid to hold the gridlets.*/
        var grid = jQuery('<span style="display: block;" />').addClass('wds_grid_0');
        /* Prepend the grid to the next slide (i.e. so it's above the slide image).*/
        jQuery(current_image_class).prepend(grid);
        /* vars to calculate positioning/size of gridlets*/
        var cont = jQuery(".wds_slide_bg_0");
        var imgWidth = cur_img.width();
        var imgHeight = cur_img.height();
        var contWidth = cont.width(),
            contHeight = cont.height(),
            imgSrc = cur_img.css('background-image'),/*.replace('/thumb', ''),*/
            colWidth = Math.floor(contWidth / cols),
            rowHeight = Math.floor(contHeight / rows),
            colRemainder = contWidth - (cols * colWidth),
            colAdd = Math.ceil(colRemainder / cols),
            rowRemainder = contHeight - (rows * rowHeight),
            rowAdd = Math.ceil(rowRemainder / rows),
            leftDist = 0,
            img_leftDist = (jQuery(".wds_slide_bg_0").width() - cur_img.width()) / 2;
        /* tx/ty args can be passed as 'auto'/'min-auto' (meaning use slide width/height or negative slide width/height).*/
        tx = tx === 'auto' ? contWidth : tx;
        tx = tx === 'min-auto' ? - contWidth : tx;
        ty = ty === 'auto' ? contHeight : ty;
        ty = ty === 'min-auto' ? - contHeight : ty;
        /* Loop through cols*/
        for (var i = 0; i < cols; i++) {
          var topDist = 0,
              img_topDst = (jQuery(".wds_slide_bg_0").height() - cur_img.height()) / 2,
              newColWidth = colWidth;
          /* If imgWidth (px) does not divide cleanly into the specified number of cols, adjust individual col widths to create correct total.*/
          if (colRemainder > 0) {
            var add = colRemainder >= colAdd ? colAdd : colRemainder;
            newColWidth += add;
            colRemainder -= add;
          }
          /* Nested loop to create row gridlets for each col.*/
          for (var j = 0; j < rows; j++)  {
            var newRowHeight = rowHeight,
                newRowRemainder = rowRemainder;
            /* If contHeight (px) does not divide cleanly into the specified number of rows, adjust individual row heights to create correct total.*/
            if (newRowRemainder > 0) {
              add = newRowRemainder >= rowAdd ? rowAdd : rowRemainder;
              newRowHeight += add;
              newRowRemainder -= add;
            }
            /* Create & append gridlet to grid.*/
            grid.append(wds_gridlet(newColWidth, newRowHeight, topDist, img_topDst, leftDist, img_leftDist, imgSrc, imgWidth, imgHeight, i, j));
            topDist += newRowHeight;
            img_topDst -= newRowHeight;
          }
          
          img_leftDist -= newColWidth;
          leftDist += newColWidth;
        }
        /* Show grid & hide the image it replaces.*/
        grid.show();
        cur_img.css('opacity', 0);
        /* Add identifying classes to corner gridlets (useful if applying border radius).*/
        grid.children().first().addClass('rs-top-left');
        grid.children().last().addClass('rs-bottom-right');
        grid.children().eq(rows - 1).addClass('rs-bottom-left');
        grid.children().eq(- rows).addClass('rs-top-right');
        /* Execution steps.*/
        setTimeout(function () {
          grid.children().css({
            opacity: op,
            transform: 'rotate('+ ro +'deg) rotateY('+ roy +'deg) translateX('+ tx +'px) translateY('+ ty +'px) scale('+ sc +')'
          });
        }, 1);
        jQuery(next_image_class).css('opacity', 1);
        /* After transition.*/
        var cccount = 0;
        var obshicccount = cols * rows;
        grid.children().one('webkitTransitionEnd transitionend otransitionend oTransitionEnd mstransitionend', jQuery.proxy(wds_after_trans_each));
        function wds_after_trans_each() {
         if (++cccount == obshicccount) {
           wds_after_trans();
         }
        }
        function wds_after_trans() {
          jQuery(current_image_class).css({'opacity' : 0, 'z-index': 1});
          jQuery(next_image_class).css({'opacity' : 1, 'z-index' : 2});
          cur_img.css('opacity', 1);
          grid.remove();
          wds_trans_in_progress_0 = false;
          if (typeof wds_event_stack_0 !== 'undefined') {
            if (wds_event_stack_0.length > 0) {
              key = wds_event_stack_0[0].split("-");
              wds_event_stack_0.shift();
              wds_change_image_0(key[0], key[1], wds_data_0, true, direction);
            }
          }
	          }
      }
      function wds_none_0(current_image_class, next_image_class, direction) {
        jQuery(current_image_class).css({'opacity' : 0, 'z-index': 1});
        jQuery(next_image_class).css({'opacity' : 1, 'z-index' : 2});
        /* Set active thumbnail.*/
        wds_set_dots_class_0();
      }
      function wds_fade_0(current_image_class, next_image_class, direction) {
        /* Set active thumbnail.*/
        wds_set_dots_class_0();
        if (wds_testBrowser_cssTransitions_0()) {
          jQuery(next_image_class).css('transition', 'opacity ' + wds_transition_duration_0 + 'ms linear');
          jQuery(current_image_class).css({'opacity' : 0, 'z-index': 1});
          jQuery(next_image_class).css({'opacity' : 1, 'z-index' : 2});
        }
        else {
          jQuery(current_image_class).animate({'opacity' : 0, 'z-index' : 1}, wds_transition_duration_0);
          jQuery(next_image_class).animate({
              'opacity' : 1,
              'z-index': 2
            }, {
              duration: wds_transition_duration_0,
              complete: function () {  }
            });
          /* For IE.*/
          jQuery(current_image_class).fadeTo(wds_transition_duration_0, 0);
          jQuery(next_image_class).fadeTo(wds_transition_duration_0, 1);
        }
	      }  
      function wds_sliceH_0(current_image_class, next_image_class, direction) {
        if (direction == 'right') {
          var translateX = 'min-auto';
        }
        else if (direction == 'left') {
          var translateX = 'auto';
        }
        wds_grid_0(1, 8, 0, translateX, 0, 1, 0, current_image_class, next_image_class, direction, 0, 0, 'ease-in-out');
      }
      function wds_fan_0(current_image_class, next_image_class, direction) {
        if (direction == 'right') {
          var rotate = 45;
          var translateX = 100;
        }
        else if (direction == 'left') {
          var rotate = -45;
          var translateX = -100;
        }
        wds_grid_0(1, 10, rotate, translateX, 0, 1, 0, current_image_class, next_image_class, direction, 0, 0, 'ease-in-out');
      }
      function wds_scaleIn_0(current_image_class, next_image_class, direction) {
        wds_grid_0(1, 1, 0, 0, 0, 0.5, 0, current_image_class, next_image_class, direction, 0, 0, 'ease-in-out');
      }
      function wds_iterator_0() {
        var iterator = 1;
        if (0) {
          iterator = Math.floor((wds_data_0.length - 1) * Math.random() + 1);
        }
        return iterator;
      }
      function wds_change_image_0(current_key, key, wds_data_0, from_effect, btn) {
        if (typeof btn == "undefined") {
          var btn = "";
        }
        if (wds_data_0[key]["is_video"] == 'image') {
          jQuery('<img />').attr("src", wds_data_0[key]["image_url"])
          .load(function() {
            jQuery(this).remove();
            wds_change_image_when_loaded_0(current_key, key, wds_data_0, from_effect, btn);
          })
          .error(function() {
            jQuery(this).remove();
            wds_change_image_when_loaded_0(current_key, key, wds_data_0, from_effect, btn);
          });
        }
        else {
          wds_change_image_when_loaded_0(current_key, key, wds_data_0, from_effect, btn);
        }
      }
      function wds_change_image_when_loaded_0(current_key, key, wds_data_0, from_effect, btn) {
                /* Pause videos.*/
        jQuery("#wds_slideshow_image_container_0").find("iframe").each(function () {
          if (typeof jQuery(this)[0].contentWindow != "undefined") {
            jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
            jQuery(this)[0].contentWindow.postMessage('{ "method": "stop" }', "*");
            jQuery(this)[0].contentWindow.postMessage('stop', '*');
          }
        });
        /* Pause layer videos.*/
        jQuery(".wds_video_layer_frame_0").each(function () {
          if (typeof jQuery(this)[0].contentWindow != "undefined") {
            jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
            jQuery(this)[0].contentWindow.postMessage('{ "method": "pause" }', "*");
            jQuery(this)[0].contentWindow.postMessage('pause', '*');
          }
        });
        if (wds_data_0[key]) {
          if (jQuery('.wds_ctrl_btn_0').hasClass('fa-pause') || ('')) {
            play_0();
          }
          if (!from_effect) {
            /* Change image key.*/
            jQuery("#wds_current_image_key_0").val(key);
            if (current_key == '-1') { /* Filmstrip.*/
              current_key = jQuery(".wds_slideshow_thumb_active_0").children("img").attr("image_key");
            }
            else if (current_key == '-2') { /* Dots.*/
              /*current_key = jQuery(".wds_slideshow_dots_active_0").attr("image_key");*/
              currId = jQuery(".wds_slideshow_dots_active_0").attr("id");
              current_key = currId.replace('wds_dots_', '').replace('_0', '');
            }
          }
          if (wds_trans_in_progress_0) {
            wds_event_stack_0.push(current_key + '-' + key);
            return;
          }
          if (btn == "") {
            var direction = 'right';
            var int_curr_key = parseInt(wds_current_key_0);
            var int_key = parseInt(key);
            var last_pos = wds_data_0.length - 1;
            if (int_curr_key > int_key) {
              direction = 'left';
            }
            else if (int_curr_key == int_key) {
              return;
            }
            if (int_key == 0) {
              if (int_curr_key == last_pos) {
                direction = 'right';
              }
            }
            if (int_key == last_pos) {
              if (int_curr_key == 0) {
                direction = 'left';
              }
            }
          }
          else {
            direction = btn;
          }
          /* Set active thumbnail position.*/
          wds_current_filmstrip_pos_0 = key * (jQuery(".wds_slideshow_filmstrip_thumbnail_0").width() + 2 + 2 * 0);
          wds_current_key_0 = key;
          /* Change image id.*/
          jQuery("div[img_id=wds_slideshow_image_0]").attr('image_id', wds_data_0[key]["id"]);
          var current_image_class = "#wds_image_id_0_" + wds_data_0[current_key]["id"];
          var next_image_class = "#wds_image_id_0_" + wds_data_0[key]["id"];
                    if (wds_data_0[key]["is_video"] == 'image') {
            jQuery(next_image_class).find(".wds_slideshow_image_0").css("background-image", 'url("' + wds_data_0[key]["image_url"] + '")');
          }
                    var current_slide_layers_count = wds_data_0[current_key]["slide_layers_count"];
          var next_slide_layers_count = wds_data_0[key]["slide_layers_count"];

          /* Clear layers before image change.*/
          function set_layer_effect_out_before_change(m) {
            wds_clear_layers_effects_out_before_change_0[current_key][m] = setTimeout(function() {
              if (wds_data_0[current_key]["layer_" + m + "_type"] != 'social') {
                jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + m + "_id"]).css('-webkit-animation-duration' , 0.6 + 's').css('animation-duration' , 0.6 + 's');
                jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + m + "_id"]).removeClass().addClass( wds_data_0[current_key]["layer_" + m + "_layer_effect_out"] + ' wds_animated');
                  jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + m + "_id"]).addClass(jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + m + "_id"]).data("class"));
              }
              else {
                jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + m + "_id"]).css('-webkit-animation-duration' , 0.6 + 's').css('animation-duration' , 0.6 + 's');
                jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + m + "_id"]).removeClass().addClass( wds_data_0[current_key]["layer_" + m + "_layer_effect_out"] + ' fa fa-' + wds_data_0[current_key]["layer_" + m + "_social_button"] + ' wds_animated');
              }
            }, 10);
          }
          if (0) {
            for (var m = 0; m < current_slide_layers_count; m++) {
              if (jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + m + "_id"]).css('opacity') != 0) {
                set_layer_effect_out_before_change(m);
              }
            }
          }
          /* Loop through current slide layers for clear effects.*/
          setTimeout(function() {
            for (var k = 0; k < current_slide_layers_count; k++) {
              clearTimeout(wds_clear_layers_effects_in_0[current_key][k]);
              clearTimeout(wds_clear_layers_effects_out_0[current_key][k]);
              if (wds_data_0[current_key]["layer_" + k + "_type"] != 'social') {
                jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + k + "_id"]).removeClass().addClass('wds_layer_'+ wds_data_0[current_key]["layer_" + k + "_id"]);
              }
              else {
                jQuery('#wds_0_slide' + wds_data_0[current_key]["id"] + '_layer' + wds_data_0[current_key]["layer_" + k + "_id"]).removeClass().addClass('fa fa-' + wds_data_0[current_key]["layer_" + k + "_social_button"] + ' wds_layer_' + wds_data_0[current_key]["layer_" + k + "_id"]);
              }
            }
          }, wds_duration_for_clear_effects_0);
          /* Loop through layers in.*/
          for (var j = 0; j < next_slide_layers_count; j++) {
            wds_set_layer_effect_in_0(j, key);
          }
          /* Loop through layers out if pause button not pressed.*/
          for (var i = 0; i < next_slide_layers_count; i++) {
            wds_set_layer_effect_out_0(i, key);
          }
          setTimeout(function() {
            if (typeof jQuery().finish !== 'undefined') {
              if (jQuery.isFunction(jQuery().finish)) {
                jQuery(".wds_line_timer_0").finish();
              }
            }
            jQuery(".wds_line_timer_0").css({width: 0});
            wds_fade_0(current_image_class, next_image_class, direction);
            if ('top' != 'none') {
              if (0 || jQuery('.wds_ctrl_btn_0').hasClass('fa-pause')) {
                if ('top' == 'top' || 'top' == 'bottom') {
                  if (!jQuery(".wds_ctrl_btn_0").hasClass("fa-play")) {
                    jQuery(".wds_line_timer_0").animate({
                      width: "100%"
                    }, {
                      duration: 5000,
                      specialEasing: {width: "linear"}
                    });
                  }
                }
                else if ('top' != 'none') {
                  if (typeof circle_timer_animate_0 !== 'undefined') {
                    circle_timer_animate_0.stop();
                  }
                  jQuery('#top_right_0').css({
                    '-moz-transform':'rotate(0deg)',
                    '-webkit-transform':'rotate(0deg)',
                    '-o-transform':'rotate(0deg)',
                    '-ms-transform':'rotate(0deg)',
                    'transform':'rotate(0deg)',
                     
                    '-webkit-transform-origin': 'left bottom',
                    '-ms-transform-origin': 'left bottom',
                    '-moz-transform-origin': 'left bottom',
                    'transform-origin': 'left bottom'
                  });
                  jQuery('#bottom_right_0').css({
                    '-moz-transform':'rotate(0deg)',
                    '-webkit-transform':'rotate(0deg)',
                    '-o-transform':'rotate(0deg)',
                    '-ms-transform':'rotate(0deg)',
                    'transform':'rotate(0deg)',
                   
                    '-webkit-transform-origin': 'left top',
                    '-ms-transform-origin': 'left top',
                    '-moz-transform-origin': 'left top',
                    'transform-origin': 'left top'
                  });
                  jQuery('#bottom_left_0').css({
                    '-moz-transform':'rotate(0deg)',
                    '-webkit-transform':'rotate(0deg)',
                    '-o-transform':'rotate(0deg)',
                    '-ms-transform':'rotate(0deg)',
                    'transform':'rotate(0deg)',
                   
                    '-webkit-transform-origin': 'right top',
                    '-ms-transform-origin': 'right top',
                    '-moz-transform-origin': 'right top',
                    'transform-origin': 'right top'
                  });
                  jQuery('#top_left_0').css({
                    '-moz-transform':'rotate(0deg)',
                    '-webkit-transform':'rotate(0deg)',
                    '-o-transform':'rotate(0deg)',
                    '-ms-transform':'rotate(0deg)',
                    'transform':'rotate(0deg)',
                   
                    '-webkit-transform-origin': 'right bottom',
                    '-ms-transform-origin': 'right bottom',
                    '-moz-transform-origin': 'right bottom',
                    'transform-origin': 'right bottom'
                  });	
                  if (!jQuery(".wds_ctrl_btn_0").hasClass("fa-play")) {
                    /* Begin circle timer on next.*/				  		
                    circle_timer_0(0);
                  }
                  else {
                    curent_time_deggree_0 = 0;
                  }
                }
              }
            }
                          wds_move_dots_0();
                          if (wds_data_0[key]["is_video"] != 'image') {
              jQuery("#wds_slideshow_play_pause_0").css({display: 'none'});
            }
            else {
              jQuery("#wds_slideshow_play_pause_0").css({display: ''});
            }
          }, wds_duration_for_change_0);
        }
        wds_window_fixed_size0(next_image_class);
              }
      function wds_resize_slider_0() {
        wds_glb_margin_0 = parseInt('0');
        if ('style' == 'text') {
          wds_set_text_dots_cont(0);
        }
        var slide_orig_width = 800;
        var slide_orig_height = 350;
        /* var slide_width = jQuery("#wds_container1_0").parent().width(); */
        var slide_width = wds_get_overall_parent(jQuery("#wds_container1_0"));
        if (slide_width > slide_orig_width) {
          slide_width = slide_orig_width;
        }
        var ratio = slide_width / (slide_orig_width + 2 * wds_glb_margin_0);

                ratio = jQuery(window).width() / slide_orig_width;
        /* wds_glb_margin_0 *= ratio; */
        slide_orig_width = jQuery(window).width()/*  - (2 * wds_glb_margin_0) */;
        slide_orig_height = 350 * slide_orig_width / 800;
        slide_width = jQuery(window).width()/*  - (2 * wds_glb_margin_0) */;
        wds_full_width_0();
                  wds_glb_margin_0 = parseInt('0');
        wds_glb_margin_0 *= ratio;
        if ('1' == 0) {
          slide_orig_height -= wds_glb_margin_0;
        }
        jQuery("#wds_container2_0").css("margin", wds_glb_margin_0 + "px 0");
        var slide_height = slide_orig_height;
        if (slide_orig_width > slide_width) {
          slide_height = Math.floor(slide_width * slide_orig_height / slide_orig_width);
        }

        jQuery(".wds_slideshow_image_wrap_0, #wds_container2_0").height(slide_height + 0);
        jQuery(".wds_slideshow_image_container_0").height(slide_height);
        jQuery(".wds_slideshow_image_0").height(slide_height);
        jQuery(".wds_slideshow_video_0").height(slide_height);
        jQuery(".wds_slideshow_image_0 img").each(function () {
          var wds_theImage = new Image();
          wds_theImage.src = jQuery(this).attr("src");
          var wds_origWidth = wds_theImage.width;
          var wds_origHeight = wds_theImage.height;
          if (typeof wds_theImage.remove != 'undefined') {
            wds_theImage.remove();
          }
          var wds_imageWidth = jQuery(this).attr("wds_image_width");
          var wds_imageHeight = jQuery(this).attr("wds_image_height");
          var wds_width = wds_imageWidth;
          if (wds_imageWidth > wds_origWidth) {
            wds_width = wds_origWidth;
          }
          var wds_height = wds_imageHeight;
          if (wds_imageHeight > wds_origHeight) {
            wds_height = wds_origHeight;
          }
          jQuery(this).css({
            maxWidth: (parseFloat(wds_imageWidth) * ratio) + "px",
            maxHeight: (parseFloat(wds_imageHeight) * ratio) + "px",
          });
          if (jQuery(this).attr("wds_scale") != "on") {
            jQuery(this).css({
              width: (parseFloat(wds_imageWidth) * ratio) + "px",
              height: (parseFloat(wds_imageHeight) * ratio) + "px"
            });
          }
          else if (wds_imageWidth > wds_origWidth || wds_imageHeight > wds_origHeight) {
            if (wds_origWidth / wds_imageWidth > wds_origHeight / wds_imageHeight) {
              jQuery(this).css({
                width: (parseFloat(wds_imageWidth) * ratio) + "px"
              });
            }
            else {
              jQuery(this).css({
                height: (parseFloat(wds_imageHeight) * ratio) + "px"
              });
            }
          }

        });
        jQuery(".wds_slideshow_image_0 span, .wds_slideshow_image_0 i").each(function () {
          jQuery(this).css({
            fontSize: (parseFloat(jQuery(this).attr("wds_fsize")) * ratio) + "px",
            lineHeight: "1.25em",
            paddingLeft: (parseFloat(jQuery(this).attr("wds_fpaddingl")) * ratio) + "px",
            paddingRight: (parseFloat(jQuery(this).attr("wds_fpaddingr")) * ratio) + "px",
            paddingTop: (parseFloat(jQuery(this).attr("wds_fpaddingt")) * ratio) + "px",
            paddingBottom: (parseFloat(jQuery(this).attr("wds_fpaddingb")) * ratio) + "px",
          });
        });
        wds_window_fixed_size0("#wds_image_id_0_" + wds_data_0[parseInt(jQuery('#wds_current_image_key_0').val())]["id"]);
      }
      /* Generate background position for Zoom Fade effect.*/
      function wds_genBgPos_0() {
        var bgSizeArray = [0, 70];
        var bgSize = bgSizeArray[Math.floor(Math.random() * bgSizeArray.length)];
        
        var bgPosXArray = ['left', 'right'];
        var bgPosYArray = ['top', 'bottom'];
        var bgPosX = bgPosXArray[Math.floor(Math.random() * bgPosXArray.length)];
        var bgPosY = bgPosYArray[Math.floor(Math.random() * bgPosYArray.length)];
        jQuery(".wds_slideshow_image_0").css({
          backgroundPosition: bgPosX + " " + bgPosY,
          backgroundSize : (100 + bgSize) + "%",
          webkitAnimation: '5s linear 0s alternate infinite wdszoom' + bgSize,
          mozAnimation: '5s linear 0s alternate infinite wdszoom' + bgSize,
          animation: '5s linear 0s alternate infinite wdszoom' + bgSize
        });
      }
      jQuery(window).resize(function () {
        wds_resize_slider_0();
              });
      function wds_full_width_0() {
        var left = jQuery("#wds_container1_0").offset().left;
        jQuery(".wds_slideshow_image_wrap_0").css({
          left: (-left/*  + wds_glb_margin_0 */) + "px",
          width: (jQuery(window).width()/*  - (2 * wds_glb_margin_0) */) + "px",
          maxWidth: "none"
        });
      }
      if ("http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/delacroix.png" != '') {
        jQuery('<img />').attr("src", "http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/delacroix.png").load(function() {
          jQuery(this).remove();
          wds_ready_0();
        });
      }
      else {
        jQuery(document).ready(function () {
          wds_ready_0();
        });
      }
      if ('0' == 1) {
        jQuery(window).scroll(function () {
          wds_window_fixed_pos0();
        });
      }
      function wds_window_fixed_size0(id) {
        if ('0' != 1) {
          return;
        }
        var image = new Image();
        image.src = jQuery(id + " .wds_slideshow_image_0").css('background-image').replace(/url\(|\)$|"/ig, '');
        var slide_bg_width = image.width;
        var slide_bg_height = image.height;
        if (typeof image.remove != 'undefined') {
          image.remove();
        }
        var window_height = jQuery(window).height();
        var window_width = jQuery(window).width();
        var width, height;
        if ('cover' == 'cover' || 'cover' == 'contain') {
          var scale = Math.max(window_width / slide_bg_width, window_height / slide_bg_height);
          width = slide_bg_width * scale;
          height = slide_bg_height * scale;
        }
        else {
          width = window_width;
          height = window_height;
        }
        jQuery(id + " .wds_slideshow_image_0").css({"background-size": width + "px " + height + "px"});
        wds_window_fixed_pos0(id);
      }
      function wds_window_fixed_pos0(id) {
        var cont = (typeof id == "undefined") ? "" : id + " ";
        var offset = jQuery(cont + ".wds_slideshow_image_0").offset().top;
        var scrtop = jQuery(document).scrollTop();
        var sliderheight = jQuery(cont + ".wds_slideshow_image_0").height();
        var window_height = jQuery(window).height();
        var fixed_pos;
        if ('' ) {
          if ('center center' == 'right bottom'
            || 'center center' == 'center bottom'
            || 'center center' == 'left bottom') {
            pos_retion_height = "100%";
          }
          else if ('center center' == 'left center'
            || 'center center' == 'center center'
            || 'center center' == 'right center') {
            pos_retion_height = "50%";
          }
          else if ('center center' == 'left top'
            || 'center center' == 'center top'
            || 'center center' == 'right top') {
            pos_retion_height = "0%";
          }
        }
        fixed_pos = offset - scrtop - window_height / 2 + sliderheight / 2;
        jQuery(cont + ".wds_slideshow_image_0").css({"background-position": "50% " + "calc(50% - " + fixed_pos + "px)"});
        if (scrtop < offset + sliderheight) {
          if ('' == true) {
            jQuery(cont + ".wds_slideshow_image_0").css({"background-position": "" + pos_retion_height + " " + "calc(50% - " + fixed_pos + "px)"});
          }
        }
      }
      function wds_ready_0() {
                if ('style' == 'text') {
          wds_set_text_dots_cont(0);
        }
        jQuery(".wds_slideshow_image_0 span, .wds_slideshow_image_0 i").each(function () {
          jQuery(this).attr("wds_fpaddingl", jQuery(this).css("paddingLeft"));
          jQuery(this).attr("wds_fpaddingr", jQuery(this).css("paddingRight"));
          jQuery(this).attr("wds_fpaddingt", jQuery(this).css("paddingTop"));
          jQuery(this).attr("wds_fpaddingb", jQuery(this).css("paddingBottom"));
        });
        if (4000) {
          jQuery("#wds_container2_0").hover(function () {
            jQuery(".wds_right-ico_0").animate({left: 0}, 700, "swing");
            jQuery(".wds_left-ico_0").animate({left: 0}, 700, "swing");
            jQuery("#wds_slideshow_play_pause_0").animate({opacity: 1, filter: "Alpha(opacity=100)"}, 700, "swing");
          }, function () {
            jQuery(".wds_right-ico_0").css({left: 4000});
            jQuery(".wds_left-ico_0").css({left: -4000});
            jQuery("#wds_slideshow_play_pause_0").css({opacity: 0, filter: "Alpha(opacity=0)"});
          });
        }
        if (!1) {
          jQuery("#wds_container2_0").hover(function () {
            jQuery(".wds_slideshow_dots_container_0").animate({opacity: 1, filter: "Alpha(opacity=100)"}, 700, "swing");
          }, function () {
            jQuery(".wds_slideshow_dots_container_0").css({opacity: 0, filter: "Alpha(opacity=0)"});
          });
        }

        wds_resize_slider_0();
        jQuery("#wds_container2_0").css({visibility: 'visible'});
        jQuery(".wds_loading").hide();

      	        var curr_img_id = wds_data_0[parseInt(jQuery('#wds_current_image_key_0').val())]["id"];
        jQuery("#wds_image_id_0_" + curr_img_id).css('transition', 'opacity ' + wds_transition_duration_0 + 'ms linear');
                  var isMobile = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));

        if (isMobile) {
          if (1) {
            wds_swipe();
          }
        }
        else {
          if (0) {
            wds_swipe();
          }
        }
        function wds_swipe() {
          if (typeof jQuery().swiperight !== 'undefined') {
            if (jQuery.isFunction(jQuery().swiperight)) {
              jQuery('#wds_container1_0').swiperight(function () {
                wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) - wds_iterator_0()) >= 0 ? (parseInt(jQuery('#wds_current_image_key_0').val()) - wds_iterator_0()) % wds_data_0.length : wds_data_0.length - 1, wds_data_0, false, "left");
                                 return false;
              });
            }
          }
          if (typeof jQuery().swipeleft !== 'undefined') {
            if (jQuery.isFunction(jQuery().swipeleft)) {
              jQuery('#wds_container1_0').swipeleft(function () {
                wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) + wds_iterator_0()) % wds_data_0.length, wds_data_0, false, "right");
                                return false;
              });
            }
          }
        }

        var wds_click = isMobile ? 'touchend' : 'click';

        var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel"; /* FF doesn't recognize mousewheel as of FF3.x */
         var wds_play_pause = 0;
        function wds_play_pause_0() {
          if (jQuery(".wds_ctrl_btn_0").hasClass("fa-play") || wds_play_pause) {
            wds_play_pause = 0;
            /* Play.*/
            jQuery(".wds_slideshow_play_pause_0").attr("title", "Pause");
            jQuery(".wds_slideshow_play_pause_0").attr("class", "wds_ctrl_btn_0 wds_slideshow_play_pause_0 fa fa-pause");

            /* Finish current animation and begin the other.*/
            if (0) {
              if ('top' != 'top') {
                if ('top' != 'bottom') {
                  if (typeof circle_timer_animate_0 !== 'undefined') {
                    circle_timer_animate_0.stop();
                  }
                  circle_timer_0(curent_time_deggree_0);
                }
              }
            }
            play_0();
            if (0) {
              document.getElementById("wds_audio_0").play();
            }
          }
          else {
            /* Pause.*/
            /* Pause layers out effect.*/
            wds_play_pause = 1;
            var current_key = jQuery('#wds_current_image_key_0').val();
            var current_slide_layers_count = wds_data_0[current_key]["slide_layers_count"];
            setTimeout(function() {
              for (var k = 0; k < current_slide_layers_count; k++) {
                clearTimeout(wds_clear_layers_effects_out_0[current_key][k]);
              }
            }, wds_duration_for_clear_effects_0);

            window.clearInterval(wds_playInterval_0);
            jQuery(".wds_slideshow_play_pause_0").attr("title", "Play");
            jQuery(".wds_slideshow_play_pause_0").attr("class", "wds_ctrl_btn_0 wds_slideshow_play_pause_0 fa fa-play");
            if (0) {
              document.getElementById("wds_audio_0").pause();
            }
            if (typeof jQuery().stop !== 'undefined') {
              if (jQuery.isFunction(jQuery().stop)) {
                                  jQuery(".wds_line_timer_0").stop();
                                }
            }
          }
        }
        /* Mouswheel navigation.*/
        if (0) {
          jQuery('.wds_slide_container_0').bind(mousewheelevt, function(e) {
            var evt = window.event || e; /* Equalize event object.*/
            evt = evt.originalEvent ? evt.originalEvent : evt; /* Convert to originalEvent if possible.*/
            var delta = evt.detail ? evt.detail*(-40) : evt.wheelDelta; /* Check for detail first, because it is used by Opera and FF.*/
            if (delta > 0) {
              /* Scroll up.*/
              wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) - wds_iterator_0()) >= 0 ? (parseInt(jQuery('#wds_current_image_key_0').val()) - wds_iterator_0()) % wds_data_0.length : wds_data_0.length - 1, wds_data_0, false, "left");
            }
            else {
              /* Scroll down.*/
              wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) + wds_iterator_0()) % wds_data_0.length, wds_data_0, false, "right");
            }
            return false;
          });
        }
        /* Keyboard navigation.*/
        if (0) {
          jQuery(document).on('keydown', function (e) {
            if (e.keyCode === 39 || e.keyCode === 38) { /* Right arrow.*/
              wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) + wds_iterator_0()) % wds_data_0.length, wds_data_0, false, "right");
            }
            else if (e.keyCode === 37 || e.keyCode === 40) { /* Left arrow.*/
              wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) - wds_iterator_0()) >= 0 ? (parseInt(jQuery('#wds_current_image_key_0').val()) - wds_iterator_0()) % wds_data_0.length : wds_data_0.length - 1, wds_data_0, false, "left");  
            }
            else if (e.keyCode === 32) { /* Space.*/
              wds_play_pause_0();
            } 
          });
        }
        /* Play/pause.*/
        jQuery("#wds_slideshow_play_pause_0").on(wds_click, function () {
           wds_play_pause_0();
        });
        if (0) {
          play_0();

          jQuery(".wds_slideshow_play_pause_0").attr("title", "Pause");
          jQuery(".wds_slideshow_play_pause_0").attr("class", "wds_ctrl_btn_0 wds_slideshow_play_pause_0 fa fa-pause");
          if (0) {
            document.getElementById("wds_audio_0").play();
          }
          if ('top' != 'none') {
            if ('top' != 'top') {
              if ('top' != 'bottom') {
                circle_timer_0(0);
              }
            }
          }
        }
                function wds_preload_0(preload_key) {
          if (wds_data_0[preload_key]["is_video"] == 'image') {
          jQuery('<img />')
            .load(function() {
              jQuery(this).remove();
              if (preload_key < wds_data_0.length - 1) wds_preload_0(preload_key + 1);
            })
            .error(function() {
              jQuery(this).remove();
              if (preload_key < wds_data_0.length - 1) wds_preload_0(preload_key + 1);
            })
            .attr("src", wds_data_0[preload_key]["image_url"]);
          }
          else {
            if (preload_key < wds_data_0.length - 1) wds_preload_0(preload_key + 1);
          }
        }
        wds_preload_0(0);
                var first_slide_layers_count_0 = wds_data_0[0]["slide_layers_count"];
        if (first_slide_layers_count_0) {
          /* Loop through layers in.*/
          for (var j = 0; j < first_slide_layers_count_0; j++) {
            wds_set_layer_effect_in_0(j, 0);
          }
          /* Loop through layers out.*/
          for (var i = 0; i < first_slide_layers_count_0; i++) {
            wds_set_layer_effect_out_0(i, 0);
          }
        }
        if ('0' == 1) {
          wds_window_fixed_pos0();
        }
        jQuery(".wds_slideshow_filmstrip_0").hover(function() {
          jQuery(".wds_slideshow_filmstrip_left_0 i, .wds_slideshow_filmstrip_right_0 i").animate({opacity: 1, filter: "Alpha(opacity=100)"}, 700, "swing");
        }, function () {
          jQuery(".wds_slideshow_filmstrip_left_0 i, .wds_slideshow_filmstrip_right_0 i").animate({opacity: 0, filter: "Alpha(opacity=0)"}, 700, "swing");
        });
        jQuery("#wds_container1_0").hover(function() {
            
        }, function () {
           
        });
        jQuery("#wds_slideshow_play_pause_0").on("click", ".fa-play", function() {
             
        });
        jQuery("#wds_slideshow_play_pause_0").on("click", ".fa-pause", function() {
             
        });
      }
	    function wds_stop_animation_0() {
        window.clearInterval(wds_playInterval_0);
        /* Pause layers out effect.*/
        var current_key = jQuery('#wds_current_image_key_0').val();
        var current_slide_layers_count = wds_data_0[current_key]["slide_layers_count"];			
        setTimeout(function() {
          for (var k = 0; k < current_slide_layers_count; k++) {
            clearTimeout(wds_clear_layers_effects_out_0[current_key][k]);
          }
        }, wds_duration_for_clear_effects_0);
        if (0) {
          document.getElementById("wds_audio_0").pause();
        }
        if (typeof jQuery().stop !== 'undefined') {
          if (jQuery.isFunction(jQuery().stop)) {
            if ('top' == 'top' || 'top' == 'bottom') {
              jQuery(".wds_line_timer_0").stop();
            }
            else if ('top' != 'none') {
              circle_timer_animate_0.stop();
            }
          }
        }
      }
      function wds_play_animation_0() {
        if (jQuery(".wds_ctrl_btn_0").hasClass("fa-play")) {
          return;
        }
        play_0();
        if ('top' != 'none') {
          if ('top' != 'bottom') {
            if ('top' != 'top') {
              if (typeof circle_timer_animate_0 !== 'undefined') {
                circle_timer_animate_0.stop();
              }
              circle_timer_0(curent_time_deggree_0);
            }
          }
        }
        if (0) {
          document.getElementById("wds_audio_0").play();
        }	 
      }
      /* Effects in part.*/		
		  function wds_set_layer_effect_in_0(j, key) {
		    wds_clear_layers_effects_in_0[key][j] = setTimeout(function(){
          if (wds_data_0[key]["layer_" + j + "_type"] != 'social') {
            jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + j + "_id"]).css('-webkit-animation-duration' , wds_data_0[key]["layer_" + j + "_duration_eff_in"] / 1000 + 's').css('animation-duration' , wds_data_0[key]["layer_" + j + "_duration_eff_in"] / 1000 + 's');			 
		        jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + j + "_id"]).removeClass().addClass( wds_data_0[key]["layer_" + j + "_layer_effect_in"] + ' wds_animated');
              jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + j + "_id"]).addClass(jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + j + "_id"]).data("class"));
		      }
          else {
            jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + j + "_id"]).css('-webkit-animation-duration' , wds_data_0[key]["layer_" + j + "_duration_eff_in"] / 1000 + 's').css('animation-duration' , wds_data_0[key]["layer_" + j + "_duration_eff_in"] / 1000 + 's');	
            jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + j + "_id"]).removeClass().addClass( wds_data_0[key]["layer_" + j + "_layer_effect_in"] + ' fa fa-' + wds_data_0[key]["layer_" + j + "_social_button"] + ' wds_animated');
          }
          /* Play video on layer in.*/
          if (wds_data_0[key]["layer_" + j + "_type"] == "video") {
            if (wds_data_0[key]["layer_" + j + "_video_autoplay"] == "on") {
              jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + j + "_id"]).find("iframe").each(function () {
                jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
                jQuery(this)[0].contentWindow.postMessage('{ "method": "play" }', "*");
              });
            }
          }
		    }, wds_data_0[key]["layer_" + j + "_start"]);
		  }
      /* Effects out part.*/
		  function wds_set_layer_effect_out_0(i, key) {
			  wds_clear_layers_effects_out_0[key][i] = setTimeout(function() {
          if (wds_data_0[key]["layer_" + i + "_layer_effect_out"] != 'none') {
            if (wds_data_0[key]["layer_" + i + "_type"] != 'social') {
              jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + i + "_id"]).css('-webkit-animation-duration' , wds_data_0[key]["layer_" + i + "_duration_eff_out"] / 1000 + 's').css('animation-duration' , wds_data_0[key]["layer_" + i + "_duration_eff_out"] / 1000 + 's');				 
              jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + i + "_id"]).removeClass().addClass( wds_data_0[key]["layer_" + i + "_layer_effect_out"] + ' wds_animated');
            }
            else {
              jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + i + "_id"]).css('-webkit-animation-duration' , wds_data_0[key]["layer_" + i + "_duration_eff_out"] / 1000 + 's').css('animation-duration' , wds_data_0[key]["layer_" + i + "_duration_eff_out"] / 1000 + 's');
              jQuery('#wds_0_slide' + wds_data_0[key]["id"] + '_layer' + wds_data_0[key]["layer_" + i + "_id"]).removeClass().addClass( wds_data_0[key]["layer_" + i + "_layer_effect_out"] + ' fa fa-' + wds_data_0[key]["layer_" + i + "_social_button"] + ' wds_animated');
            }
          }
		    }, wds_data_0[key]["layer_" + i + "_end"]);
		  }
      function play_0() {
        if ('top' != 'none') {
          if (0 || jQuery('.wds_ctrl_btn_0').hasClass('fa-pause')) {
            jQuery(".wds_line_timer_0").animate({
              width: "100%"
            }, {
              duration: 5000,
              specialEasing: {width: "linear"}
            });
          }
        }
        window.clearInterval(wds_playInterval_0);
        /* Play.*/
        wds_playInterval_0 = setInterval(function () {
          var curr_img_index = parseInt(jQuery('#wds_current_image_key_0').val());
          if ('1' == 0) {
            if (curr_img_index == 2) {
              return false;
            }
          }
          var iterator = 1;
          if (0) {
            iterator = Math.floor((wds_data_0.length - 1) * Math.random() + 1);
          }
          wds_change_image_0(parseInt(jQuery('#wds_current_image_key_0').val()), (parseInt(jQuery('#wds_current_image_key_0').val()) + iterator) % wds_data_0.length, wds_data_0);
        }, parseInt('5000') + wds_duration_for_change_0);
      }
      jQuery(window).focus(function() {
        if (!jQuery(".wds_ctrl_btn_0").hasClass("fa-play")) {
          if (0) {
            play_0();
            if ('top' != 'none') {
              if ('top' != 'top') {
                if ('top' != 'bottom') {
                  if (typeof circle_timer_animate_0 !== 'undefined') {
                    circle_timer_animate_0.stop();
                  }
                  circle_timer_0(curent_time_deggree_0);
                }
              }
            }
          }
        }
        var i_0 = 0;
        jQuery(".wds_slider_0").children("span").each(function () {
          if (jQuery(this).css('opacity') == 1) {
            jQuery("#wds_current_image_key_0").val(i_0);
          }
          i_0++;
        });
      });
      jQuery(window).blur(function() {
        wds_event_stack_0 = [];
        window.clearInterval(wds_playInterval_0);
        if (typeof jQuery().stop !== 'undefined') {
          if (jQuery.isFunction(jQuery().stop)) {
            if ('top' == 'top' || 'top' == 'bottom') {
              jQuery(".wds_line_timer_0").stop();
            }
            else if ('top' != 'none') {
              circle_timer_animate_0.stop();
            }
          }
        }
      });
    </script>
        <div class="carousel__text">
        <h2 class="carousel__title">POUR UNE<br>FRANCE PLUS <span style="color: #bfded9;">NEUTRE</span></h2>
        <div class="carousel__description">Le vote blanc consiste à déposer un bulletrin blanc, ou une enveloppe vide dans l’urne. Cela manifeste une envie de </div>
        <div class="button">SOUTENEZ LE <strong>VOTE BLANC</strong></div>
    </div>
</div>
<section class="description">
  <h2 class="description__title">Votre vote est <strong>important</strong></h2>
  <p class="description__content">Faites votre devoir de citoyen, et votez pour vos convictions. Même si en France, le droit de vote est un droit et n’est pas, juridiquement, une obligation.
    La question d’une éventuelle obligation du vote a souvent été débattue. Elle existe d’ailleurs dans certains pays, tels que la Belgique, la Suisse ou la Grèce. Néanmoins, elle n’a jamais été envisagée sérieusement en France. En revanche, le droit de vote est moralement un devoir pour les citoyens, comme le rappelle l’inscription figurant sur les cartes électorales : " Voter est un droit, c’est aussi un devoir civique ".
    Le vote n’est pas juridiquement un devoir d’abord par principe. Si le vote est un droit, on peut, comme tout autre droit (ex : liberté de réunion ou d’association), ne pas l’exercer. Il pourrait sembler paradoxal de transformer un droit aussi essentiel en contrainte.
    Ce n’est pas juridiquement un devoir également pour une question de pratique politique. En effet, obliger les citoyens à voter pose au moins deux problèmes : Vérifier que cette règle sera suivie. En clair, il faudrait mettre en oeuvre une sanction pénale efficace, à savoir une amende sévère. Faute de quoi l’obligation posée pourrait demeurer lettre morte ;
    forcer les citoyens à utiliser leur droit de vote peut avoir des effets déstabilisateurs sur les résultats : augmentation des votes blancs, nuls ou extrémistes, qui pourraient signifier l’opposition des citoyens à une telle procédure.</p>
</section>
<section class="supporters">
                <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-9.png');"></div>
                <h5 class="supporters__name">Etudiante à Hetic</h5>
                <div class="supporters__job">Margaux Tellier</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-19.png');"></div>
                <h5 class="supporters__name">Musicien</h5>
                <div class="supporters__job">Marc Cheatam</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-4-1.png');"></div>
                <h5 class="supporters__name">Cuisinière</h5>
                <div class="supporters__job">Angel Hamilton</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-10.png');"></div>
                <h5 class="supporters__name">Etudiant à Hetic</h5>
                <div class="supporters__job">Ulysse Tallepied</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-9.png');"></div>
                <h5 class="supporters__name">Etudiante à Hetic</h5>
                <div class="supporters__job">Margaux Tellier</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-8.png');"></div>
                <h5 class="supporters__name">Livreur de pizza</h5>
                <div class="supporters__job">Matt Drupal</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-7.png');"></div>
                <h5 class="supporters__name">Sportif professionnel</h5>
                <div class="supporters__job">Thomas Fellon</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-6.png');"></div>
                <h5 class="supporters__name">Freelance</h5>
                <div class="supporters__job">Sam Smith</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-5-1.png');"></div>
                <h5 class="supporters__name">Chargée de recrutement</h5>
                <div class="supporters__job">Sarah Harisson</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-16.png');"></div>
                <h5 class="supporters__name">Couturière chez Eram</h5>
                <div class="supporters__job">Windy Greer</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-14.png');"></div>
                <h5 class="supporters__name">Employé chez Micro Designs</h5>
                <div class="supporters__job">Edmund Calderone</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-4.png');"></div>
                <h5 class="supporters__name">CEO à Hetic</h5>
                <div class="supporters__job">Rachelle Fentom</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-3.png');"></div>
                <h5 class="supporters__name">Front end Developpeur</h5>
                <div class="supporters__job">Robert Zaganelli</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-2.png');"></div>
                <h5 class="supporters__name">Actrice</h5>
                <div class="supporters__job">Emilia Clarke</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-1.png');"></div>
                <h5 class="supporters__name">UI/UX Designer à Uber</h5>
                <div class="supporters__job">Max Maxell</div>
            </div>
                        <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-5.png');"></div>
                <h5 class="supporters__name">Etudiante en Licence d'Economie</h5>
                <div class="supporters__job">Maya Church</div>
            </div>
            </section>
<section class="cta">
  <div class="cta__text">Vous avez le pouvoir de changer les choses, votez blanc</div>
  <div class="button">SOUTENEZ LE VOTE <strong>BLANC</strong></div>
</section>
<section style="background-color : black;">
  <div class="comments">
                  <div class="comments__single">
                <div class="comments__content">Je vote blanc parce que c&#039;est plus rapide mdrrr. Non en vrai c&#039;est surtout parce que les candidats sont moches.</div>
                <div class="comments__profile-container">
                    <div class="comments__picture" style="background-image: url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-9.png')"></div>
                    <div class="comments__name">Margaux Tellier</div>
                </div>
            </div>
                        <div class="comments__single">
                <div class="comments__content">Car aucune de mes valeurs ou idées sont représentées. Nous avons besoin d&#039;actes et non plus d&#039;eternelles promesses. Une lassitude vis-à-vis de la politique s&#039;est installé, mais par devoir je vais voter</div>
                <div class="comments__profile-container">
                    <div class="comments__picture" style="background-image: url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-19.png')"></div>
                    <div class="comments__name">Marc Cheatam</div>
                </div>
            </div>
                        <div class="comments__single">
                <div class="comments__content">Oui, j&#039;ai voté trois fois &quot;blanc&quot;. Et j&#039;ai arrêté de voter. J&#039;ai voté &quot;blanc&quot; car excédé, gouvernement après gouvernement depuis 1974, de constater notre pauvre France se vider de la production économique indispensable à sa vie, et aussi de production sociale objective, réaliste - donc active, et, année après année, s&#039;alourdir d&#039;un déficit public. L&#039;appréciation est claire: les politiciens français ne gèrent pas. Ils ne savent pas (et ne veulent pas) gérer. Et pourtant avant toute tendance, il faut commencer par gérer la structure &quot;et&quot; sa production &quot;et&quot; son résultat. On part en vacances quand on a de quoi manger ; et pas l&#039;inverse. Puis j&#039;ai arrêté de voter, quand j&#039;ai pris conscience que mes votes blancs n&#039;étaient pas considérés et que par conséquent, le seul moyen de contester tous les partis politiques français actuellement tous non gestionnaire - pour un parti gestionnaire attendu, était d&#039;augmenter l&#039;abstention.</div>
                <div class="comments__profile-container">
                    <div class="comments__picture" style="background-image: url('http://localhost:8888/H3/hetic-p2019-wordpress/web//app/uploads/2016/11/Calque-4-1.png')"></div>
                    <div class="comments__name">Angel Hamilton</div>
                </div>
            </div>
            </div>
</section>
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

<!-- Dynamic page generated in 0.399 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2016-11-17 11:50:44 -->
