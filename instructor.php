﻿<?php 
session_start();
if(isset($_SESSION['user']) && $_SESSION['type']=="instructor")
header('Location:main.php');
?>

<!DOCTYPE html>
<html lang="en-US"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>WordPress Themes | TemplateSquare.Com</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" media="all" href="student_files/style_002.css">
<link rel="stylesheet" type="text/css" media="all" href="student_files/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="student_files/nivo-slider.css">
<link rel="stylesheet" type="text/css" media="screen" href="student_files/prettyPhoto.css">


<link rel="alternate" id="templateurl" href="http://www.templatesquare.com/wp-content/themes/templatesquare">
<link rel="pingback" href="http://www.templatesquare.com/xmlrpc.php">
<meta name="carturl" id="carturl" content="">
<link rel="shortcut icon" href="http://www.templatesquare.com/wp-content/themes/templatesquare/images/favicon.ico">

<link rel="alternate" type="application/rss+xml" title="TemplateSquare.Com » Feed" href="http://www.templatesquare.com/feed/">
<link rel="alternate" type="application/rss+xml" title="TemplateSquare.Com » Comments Feed" href="http://www.templatesquare.com/comments/feed/">
<link rel="stylesheet" id="woocommerce_frontend_styles-css" href="student_files/woocommerce.css" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce_fancybox_styles-css" href="student_files/fancybox.css" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce_chosen_styles-css" href="student_files/chosen.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-pagenavi-css" href="student_files/pagenavi-css.css" type="text/css" media="all">
<script src="student_files/ga.js" async="" type="text/javascript"></script><script src="student_files/pinit_main.js" async="" type="text/javascript"></script><script type="text/javascript" src="student_files/jquery-1.js"></script>
<script type="text/javascript" src="student_files/jquery_002.js"></script>
<script type="text/javascript" src="student_files/jquery_003.js"></script>
<script type="text/javascript" src="student_files/jquery.js"></script>
<script type="text/javascript" src="student_files/jquery_004.js"></script>
<script type="text/javascript" src="student_files/jquery_005.js"></script>
<script type="text/javascript" src="student_files/ts-portfolio-fade.js"></script>
<script type="text/javascript" src="student_files/comment-reply.js"></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.templatesquare.com/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.templatesquare.com/wp-includes/wlwmanifest.xml"> 
<link rel="prev" title="Home" href="http://www.templatesquare.com/">
<link rel="next" title="About" href="http://www.templatesquare.com/about/">
<meta name="generator" content="WordPress 3.8.3">
<link rel="shortlink" href="http://wp.me/PIwqN-i">

<!-- All in One SEO Pack 1.6.15.2 by Michael Torbert of Semper Fi Web Design[72,116] -->
<link rel="canonical" href="http://www.templatesquare.com/wordpress-themes/">
<!-- /all in one seo pack -->
<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script><script charset="utf-8" type="text/javascript" src="student_files/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'wp.4bbbb66c-5f3f-4250-ba2f-cc354ada48fd'});var st_type='wordpress3.3.1';</script><meta name="robots" content="index, follow">


<!-- WooCommerce Version -->
<meta name="generator" content="WooCommerce 1.5.6">

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>


<!-- ////////////////////////////////// -->
<!-- //      Get Option					        // -->
<!-- ////////////////////////////////// -->
<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        			// -->
<!-- ////////////////////////////////// 
<script type="text/javascript">
	 Cufon.replace('h1') ('h2:not(h2.trigger)') ('h3') ('h4') ('h5') ('h6') ('.price-text') ('.introtitle');
	 Cufon.replace('.tbl-price', {fontFamily: 'Lao UI'});
</script>-->
<script type="text/javascript">
		/* Nivo Slideshow Hompage */
		
		var $jts = jQuery.noConflict();
		$jts(window).load(function() {
			$jts('#slider2').nivoSlider({
				effect:'random', //Specify sets like: 'fold,fade,sliceDown'
				slices:15,
				animSpeed:500, //Slide transition speed
				pauseTime:5000,
				directionNav:false, //Next &amp; Prev
								controlNav:true, // 1,2,3... navigation
												captionOpacity:0.5, // Universal caption opacity
								startSlide:0 //Set starting Slide (0 index)
			});
		});
		/*
		jQuery('#imageslider').cycle({
				timeout: 6000,  // milliseconds between slide transitions (0 to disable auto advance)
				fx:      'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
				next : '#nextslideimg',
				prev : '#prevslideimg',
				pause:   0,	  // true to enable "pause on hover"
				cleartypeNoBg: true, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides) 
				pauseOnPagerHover: 1 // true to pause when hovering over pager link
			});
		*/
</script>
<script type="text/javascript">
var $jts = jQuery.noConflict();

if (jQuery) (function($) {
    $.extend($.fn, {
        scrollEvent:function(p) {
            var obj = {
                init:function(items, fun) {
                    items.each(function() {
                        var visibleAtTop = $(this).offset().top + $(this).height() >= window.scrollY;
                        var visibleAtBottom = $(this).offset().top <= window.scrollY + $(window).height();
                        if (visibleAtTop && visibleAtBottom) {
                            fun($(this).attr('id'), true, null);
                        } else {
                            fun($(this).attr('id'), false, (visibleAtTop ? 'bottom' : 'top'));
                        }
                    });
                }
            };
            this.unbind('scroll');
            var items = $(p.eclass);
            this.scroll(function() {
                obj.init(items, p.fun);
            });
            if (('undefined' != typeof p.autostart) && (p.autostart)) {
                obj.init(items, p.fun);
            }
            return false;
        }
    });
})(jQuery);

$jts(document).ready(function(){
		var winheight = jQuery(window).height();
		var winwidth = jQuery(window).width();
		
		jQuery("a.hoverimg").hover(
			function(evt){ 
			
				var imgcontainer = jQuery('<div class="bigimgcontainer"></div>');
				var imghtml = new Image();
				var imgloaded = false;
				var imginfo = jQuery(this).attr('title').split('|');
				var imgwidth = imginfo[1];
				var imgheight = imginfo[2];
				
				imgcontainer.css('width',imgwidth);
				imgcontainer.css('height',imgheight);
				
				imghtml.src = imginfo[0];
				imghtml.class = "thebigimg";
				
				var topimgcontainer = (winheight - imgheight)/2;
				var leftimgcontainer = (evt.pageX - imgwidth - 60);
				
				imgcontainer.append(imghtml);
				jQuery('body').append(imgcontainer);
				imgcontainer.css('top', topimgcontainer);
				imgcontainer.css('left', leftimgcontainer);
				
				jQuery(this).mousemove(
					function(evm){
						xzero = (evm.pageX - imgwidth - 60);
						xedge = (evm.pageX + 50) ;
						
						if(xzero < 0){
							leftimgcontainer = (evm.pageX + 50) ;
						}else{
							leftimgcontainer = (evm.pageX - imgwidth - 60);
						}
						imgcontainer.css('left', leftimgcontainer);
					}
				);
				
			},
			function(evt){ 
				jQuery('.thebigimg').remove();
				jQuery('.bigimgcontainer').remove();
			}
		);
		/* Navigation */
		$jts(" #topnav ul ").css({display: "none"}); // Opera Fix
		$jts(" #topnav li").hover(function(){
		$jts(this).find('ul:first').css({visibility: "visible",display: "none"}).slideDown(400);
		},function(){
		$jts(this).find('ul:first').css({visibility: "hidden"});
		});

	
	/* Cycle Slider Homepage Default
	 $jts('#slider').cycle({
		timeout: ,  // milliseconds between slide transitions (0 to disable auto advance)
		fx:      '', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
		pager:   '.navButton',  // selector for element to use as pager container
		pause:   0,	  // true to enable "pause on hover"
		cleartypeNoBg: true, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides) 
		pauseOnPagerHover: 0 // true to pause when hovering over pager link
		
	});*/	
	
	
	/* Cycle Slider Homepage */	
	 $jts('#sliderCycle').cycle({
		timeout: 5000,  // milliseconds between slide transitions (0 to disable auto advance)
		fx:      'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
		pager:   '#pager',  // selector for element to use as pager container
		pause:   0,	  // true to enable "pause on hover"
		cleartypeNoBg: true, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides) 
		pauseOnPagerHover: 0 // true to pause when hovering over pager link
		
	});
	
	
	/* Accordion Slider  Homepage */
	$jts('.kwicks').kwicks({
		max: 800,
		min : 54,
		spacing:0,
		duration: 1500,
		easing: 'easeOutBounce'
	});


	/* jQuery Tab */	
	$jts(".tab-content").hide(); //Hide all content
	$jts("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$jts(".tab-content:first").show(); //Show first tab content
	//On Click Event
	$jts("ul.tabs li").click(function() {
		$jts("ul.tabs li").removeClass("active"); //Remove any "active" class
		$jts(this).addClass("active"); //Add "active" class to selected tab
		$jts(".tab-content").hide(); //Hide all tab content
		var activeTab = $jts(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$jts(activeTab).fadeIn(200); //Fade in the active content
		return false;
	});
	
	/* jQuery Toggle */
	$jts(".toggle_container").hide();
	$jts("h2.trigger").click(function(){
		$jts(this).toggleClass("active").next().slideToggle("slow");
	});
	
	// Portfolio Lightbox
	jQuery("a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'facebook',slideshow:2000});
	
	/* Widget Ts Post Cycle */
	$jts('.boxslideshow').cycle({
		timeout: 6000,  // milliseconds between slide transitions (0 to disable auto advance)
		fx:      'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
		pause:   0,	  // true to enable "pause on hover"
		next:".next",  // selector for element to use as click trigger for next slide 
		prev:".prev",  // selector for element to use as click trigger for previous slide 
		cleartypeNoBg:true, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides)
		pauseOnPagerHover: 0
	});
	
	$jts('.boxslideshow2').cycle({
		timeout: 6000,  // milliseconds between slide transitions (0 to disable auto advance)
		fx:      'scrollVert', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
		pause:   0,	  // true to enable "pause on hover"
		next:".next",  // selector for element to use as click trigger for next slide 
		prev:".prev",  // selector for element to use as click trigger for previous slide 
		cleartypeNoBg:true, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides)
		pauseOnPagerHover: 0 // true to pause when hovering over pager link
	});
	
});
</script>
<!-- ////////////////////////////////// -->
<!-- //      Style Color		 // -->
<!-- ////////////////////////////////// -->
<style type="text/css" media="all">
h1, h2, h3, h4, h5, h6, .posttitle a, .posttitle a:visited, #side .widget-title{color:#454545}

</style>
<style type="text/css">a.PIN_1405766971168_pin_it_button_20 { cursor: pointer!important; background-repeat: none!important; background-size: 40px 60px!important; height: 20px!important; padding: 0!important; vertical-align: baseline!important; text-decoration: none!important; width: 40px!important; background-position: 0 -20px }
a.PIN_1405766971168_pin_it_button_20:hover { background-position: 0 0px }
a.PIN_1405766971168_pin_it_button_20:active, a.PIN_1405766971168_pin_it_button_20.PIN_1405766971168_hazClick { background-position: 0 -40px }
a.PIN_1405766971168_pin_it_button_inline_20 { cursor: pointer!important; position: relative!important; display: inline-block!important; }
a.PIN_1405766971168_pin_it_button_floating_20 { cursor: pointer!important; position: absolute!important; }
a.PIN_1405766971168_pin_it_beside_20_pad { margin-right: 45px!important; }
a.PIN_1405766971168_pin_it_button_en_20_red { background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_en_rect_red_20_1.png)!important; }
a.PIN_1405766971168_pin_it_button_en_20_white { background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_en_rect_white_20_1.png)!important; }
a.PIN_1405766971168_pin_it_button_en_20_gray { background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_en_rect_gray_20_1.png)!important; }
a.PIN_1405766971168_pin_it_button_ja_20_red { background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_ja_rect_red_20_1.png)!important; }
a.PIN_1405766971168_pin_it_button_ja_20_white { background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_ja_rect_white_20_1.png)!important; }
a.PIN_1405766971168_pin_it_button_ja_20_gray { background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_ja_rect_gray_20_1.png)!important; }
a.PIN_1405766971168_pin_it_above_20 span.PIN_1405766971168_pin_it_button_count { background: transparent url(http://passets.pinterest.com/images/pidgets/count_north_white_rect_20_1.png) 0 0 no-repeat!important; background-size: 40px 29px!important; position: absolute!important; bottom: 21px!important; left: 0px!important; height: 29px!important; width: 40px!important; font: 12px Arial, Helvetica, sans-serif!important; line-height: 24px!important; text-indent: 0!important;}
a.PIN_1405766971168_pin_it_button_20 span.PIN_1405766971168_pin_it_button_count { position: absolute!important; color: #777!important; text-align: center!important; text-indent: 0!important; }
a.PIN_1405766971168_pin_it_beside_20 span.PIN_1405766971168_pin_it_button_count, a.PIN_1405766971168_pin_it_beside_20 span.PIN_1405766971168_pin_it_button_count i { background-color: transparent!important; background-repeat: no-repeat!important; background-image: url(http://passets.pinterest.com/images/pidgets/count_east_white_rect_20_1.png)!important; }
a.PIN_1405766971168_pin_it_beside_20 span.PIN_1405766971168_pin_it_button_count { padding: 0 3px 0 10px!important; background-size: 45px 20px!important; background-position: 0 0!important; position: absolute!important; top: 0!important; left: 41px!important; height: 20px!important; font: 10px Arial, Helvetica, sans-serif!important; line-height: 20px!important; }
a.PIN_1405766971168_pin_it_beside_20 span.PIN_1405766971168_pin_it_button_count i { background-position: 100% 0!important; position: absolute!important; top: 0!important; right: -2px!important; height: 20px!important; width: 2px!important; }
a.PIN_1405766971168_pin_it_button_20.PIN_1405766971168_pin_it_above { margin-top: 20px!important; }
a.PIN_1405766971168_pin_it_button_28 { cursor: pointer!important; background-repeat: none!important; background-size: 56px 84px!important; height: 28px!important; padding: 0!important; vertical-align: baseline!important; text-decoration: none!important; width: 56px!important; background-position: 0 -28px }
a.PIN_1405766971168_pin_it_button_28:hover { background-position: 0 0px }
a.PIN_1405766971168_pin_it_button_28:active, a.PIN_1405766971168_pin_it_button_28.PIN_1405766971168_hazClick { background-position: 0 -56px }
a.PIN_1405766971168_pin_it_button_inline_28 { cursor: pointer!important; position: relative!important; display: inline-block!important; }
a.PIN_1405766971168_pin_it_button_floating_28 { cursor: pointer!important; position: absolute!important; }
a.PIN_1405766971168_pin_it_beside_28_pad { margin-right: 50px!important;}
a.PIN_1405766971168_pin_it_button_en_28_red { background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_en_rect_red_28_1.png)!important; }
a.PIN_1405766971168_pin_it_button_en_28_white { background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_en_rect_white_28_1.png)!important; }
a.PIN_1405766971168_pin_it_button_en_28_gray { background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_en_rect_gray_28_1.png)!important; }
a.PIN_1405766971168_pin_it_button_ja_28_red { background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_ja_rect_red_28_1.png)!important; }
a.PIN_1405766971168_pin_it_button_ja_28_white { background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_ja_rect_white_28_1.png)!important; }
a.PIN_1405766971168_pin_it_button_ja_28_gray { background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_ja_rect_gray_28_1.png)!important; }
a.PIN_1405766971168_pin_it_button_en_16_red_round, a.PIN_1405766971168_pin_it_button_en_32_red_round { background-repeat: none!important; margin: 0!important; padding: 0!important; vertical-align: baseline!important; text-decoration: none!important; }
a.PIN_1405766971168_pin_it_button_en_16_red_round { height: 16px!important; width: 16px!important; background-size: 16px 16px!important; background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_en_round_red_16_1.png)!important;}
a.PIN_1405766971168_pin_it_button_en_32_red_round { height: 32px!important; width: 32px!important; background-size: 32px 32px!important; background-image: url(http://passets.pinterest.com/images/pidgets/pinit_bg_en_round_red_32_1.png)!important;}
a.PIN_1405766971168_pin_it_button_inline_en_16_red_round, a.PIN_1405766971168_pin_it_button_inline_en_32_red_round { position: relative!important; display: inline-block!important; }
a.PIN_1405766971168_pin_it_button_floating_en_16_red_round, a.PIN_1405766971168_pin_it_button_floating_en_32_red_round  { position: absolute!important; }
a.PIN_1405766971168_pin_it_button_28 span.PIN_1405766971168_pin_it_button_count { position: absolute!important; color: #777!important; text-align: center!important; text-indent: 0!important; }
a.PIN_1405766971168_pin_it_above_28 span.PIN_1405766971168_pin_it_button_count { background: transparent url(http://passets.pinterest.com/images/pidgets/count_north_white_rect_28_1.png) 0 0 no-repeat!important; background-size: 56px 37px!important; position: absolute!important; bottom: 29px!important; left: 0px!important; height: 37px!important; width: 56px!important; font: 15px Arial, Helvetica, sans-serif!important; line-height: 28px!important; text-indent: 0!important;}
a.PIN_1405766971168_pin_it_beside_28 span.PIN_1405766971168_pin_it_button_count, a.PIN_1405766971168_pin_it_beside_28 span.PIN_1405766971168_pin_it_button_count i { background-color: transparent!important; background-repeat: no-repeat!important; background-image: url(http://passets.pinterest.com/images/pidgets/count_east_white_rect_28_1.png)!important; }
a.PIN_1405766971168_pin_it_beside_28 span.PIN_1405766971168_pin_it_button_count { padding: 0 3px 0 10px!important; background-size: 63px 28px!important; background-position: 0 0!important; position: absolute!important; top: 0!important; left: 57px!important; height: 28px!important; font: 12px Arial, Helvetica, sans-serif!important; line-height: 28px!important; }
a.PIN_1405766971168_pin_it_beside_28 span.PIN_1405766971168_pin_it_button_count i { background-position: 100% 0!important; position: absolute!important; top: 0!important; right: -2px!important; height: 28px!important; width: 2px!important; }
a.PIN_1405766971168_pin_it_button_28.PIN_1405766971168_pin_it_above { margin-top: 28px!important; }
a.PIN_1405766971168_follow_me_button, a.PIN_1405766971168_follow_me_button i { background-size: 200px 60px!important; background: transparent url(http://passets.pinterest.com/images/pidgets/bfs1.png) 0 0 no-repeat }
a.PIN_1405766971168_follow_me_button { cursor: pointer!important; color: #444!important; display: inline-block!important; font: bold normal normal 11px/20px "Helvetica Neue",helvetica,arial,san-serif!important; height: 20px!important; margin: 0!important; padding: 0!important; position: relative!important; text-decoration: none!important; text-indent: 19px!important; vertical-align: baseline!important;}
a.PIN_1405766971168_follow_me_button:hover { background-position: 0 -20px}
a.PIN_1405766971168_follow_me_button:active  { background-position: 0 -40px}
a.PIN_1405766971168_follow_me_button b { position: absolute!important; top: 3px!important; left: 3px!important; height: 14px!important; width: 14px!important; background-size: 14px 14px!important; background-image: url(http://passets.pinterest.com/images/pidgets/log1.png)!important; }
a.PIN_1405766971168_follow_me_button i { position: absolute!important; top: 0!important; right: -4px!important; height: 20px!important; width: 4px!important; background-position: 100% 0px!important; }
a.PIN_1405766971168_follow_me_button:hover i { background-position: 100% -20px!important;  }
a.PIN_1405766971168_follow_me_button:active i { background-position: 100% -40px!important; }
a.PIN_1405766971168_follow_me_button_28, a.PIN_1405766971168_follow_me_button_28 i { background-size: 400px 84px!important; background: transparent url(http://passets.pinterest.com/images/pidgets/bft1.png) 0 0 no-repeat }
a.PIN_1405766971168_follow_me_button_28 { cursor: pointer!important; color: #444!important; display: inline-block!important; font: bold normal normal 13px/28px "Helvetica Neue",helvetica,arial,san-serif!important; height: 28px!important; margin: 0!important; padding: 0!important; position: relative!important; text-decoration: none!important; text-indent: 33px!important; vertical-align: baseline!important;}
a.PIN_1405766971168_follow_me_button_28:hover { background-position: 0 -28px}
a.PIN_1405766971168_follow_me_button_28:active  { background-position: 0 -56px}
a.PIN_1405766971168_follow_me_button_28 b { position: absolute!important; top: 5px!important; left: 10px!important; height: 18px!important; width: 18px!important; background-size: 18px 18px!important; background-image: url(http://passets.pinterest.com/images/pidgets/smt1.png)!important; }
a.PIN_1405766971168_follow_me_button_28 i { position: absolute!important; top: 0!important; right: -10px!important; height: 28px!important; width: 10px!important; background-position: 100% 0px!important; }
a.PIN_1405766971168_follow_me_button_28:hover i { background-position: 100% -28px!important;  }
a.PIN_1405766971168_follow_me_button_28:active i { background-position: 100% -56px!important; }
span.PIN_1405766971168_embed_pin { -webkit-font-smoothing: antialiased!important; cursor: pointer!important; display: inline-block!important; text-align: center!important; width: 237px!important; overflow: hidden!important; vertical-align: top!important; }
span.PIN_1405766971168_embed_pin.PIN_1405766971168_fancy { background: #fff!important; box-shadow: 0 1px 3px rgba(0, 0, 0, .33)!important; border-radius: 3px!important; }
span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_link { display: block!important;  margin: 0 auto!important; padding: 0!important; position: relative!important;  line-height: 0}
span.PIN_1405766971168_embed_pin img.PIN_1405766971168_embed_pin_link_img { border: 0!important; margin: 0!important; padding: 0!important; border-bottom: 1px solid rgba(0, 0, 0, .09)!important;}
span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_link i.PIN_1405766971168_repin { left: 12px!important; top: 12px!important; position: absolute!important; height: 20px!important; width: 40px!important; background-size: 40px 60px!important;  background: transparent url(http://passets.pinterest.com/images/pidgets/pinit_bg_en_rect_red_20_1.png) }
span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_link i.PIN_1405766971168_repin_ja { left: 12px!important; top: 12px!important; position: absolute!important; height: 20px!important; width: 40px!important; background-size: 40px 60px!important; background: transparent url(http://passets.pinterest.com/images/pidgets/pinit_bg_ja_rect_red_20_1.png) }
span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_link i.PIN_1405766971168_repin:hover, span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_link i.PIN_1405766971168_repin_ja:hover { background-position: 0 -20px!important; }
span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_link i.PIN_1405766971168_repin.PIN_1405766971168_hazClick, span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_link i.PIN_1405766971168_repin_ja.PIN_1405766971168_hazClick { background-position: 0 -40px!important; }
span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_link i.PIN_1405766971168_play { display: block!important; width: 50px!important; white-space: pre!important; font-family: "Helvetica Neue",helvetica,arial,san-serif!important; font-weight: bold!important; font-style: normal!important; font-size: 9px!important; line-height: 12px!important; margin: 0!important; position: absolute!important; bottom: 12px!important; left: 12px!important; text-decoration: none!important; background: rgba(0, 0, 0, .4)!important; color: rgba(255, 255, 255, 1)!important; border-radius: 13px!important; padding: 5px 0!important; box-shadow: 0 0 2px rgba(0, 0, 0, .2)!important; border: 2px solid rgba(255, 255, 255, .68)!important;}
span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_link i.PIN_1405766971168_play:hover { background: rgba(0, 0, 0, .8)!important; color: #fff!important; }
span.PIN_1405766971168_embed_pin span.PIN_1405766971168_embed_pin_desc { color: #363636!important; white-space: normal!important; border-bottom: 1px solid rgba(0, 0, 0, .09)!important;!important; display: block!important; font-family: "Helvetica Neue", arial, sans-serif!important; font-size: 13px!important; line-height: 17px!important; padding: 12px!important; text-align: left!important; }
span.PIN_1405766971168_embed_pin span.PIN_1405766971168_embed_pin_attrib { color: #a8a8a8!important; font-family: "Helvetica Neue", sans-serif!important; font-size: 11px!important; line-height: 18px!important; margin-top: 12px!important; font-weight: bold!important; display: block!important;}
span.PIN_1405766971168_embed_pin span.PIN_1405766971168_embed_pin_attrib img.PIN_1405766971168_embed_pin_attrib_icon { height: 16px!important; width: 16px!important; vertical-align: middle!important; padding: 0!important; margin: 0 5px 0 0!important; float: left!important;}
span.PIN_1405766971168_embed_pin span.PIN_1405766971168_embed_pin_attrib a { color: #a8a8a8!important; text-decoration: none!important;}
span.PIN_1405766971168_embed_pin span.PIN_1405766971168_embed_pin_stats { display: block!important; }
span.PIN_1405766971168_embed_pin span.PIN_1405766971168_embed_pin_stats span.PIN_1405766971168_embed_pin_stats_repin_count, span.PIN_1405766971168_embed_pin span.PIN_1405766971168_embed_pin_stats span.PIN_1405766971168_embed_pin_stats_like_count { display: inline-block!important; padding-left: 17px!important; padding-right: 10px!important; color: #a8a8a8!important; font-family: "Helvetica Neue", sans-serif!important; font-size: 11px!important; line-height: 12px!important; margin-top: 12px!important; font-weight: bold!important; }
span.PIN_1405766971168_embed_pin span.PIN_1405766971168_embed_pin_stats span.PIN_1405766971168_embed_pin_stats_repin_count { background: url(data:image/png!important;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAALCAAAAABq7uO+AAAASklEQVQI10WNMQrAMBRCvf/Z3pQcImPplsIPdqhNXOSJqLxVtnWQsuUO9IM3cHlV8dSSDZQHAOPH2YA2FU+qtH7MRhaVh/xt/PQCEW6N4EV+CPEAAAAASUVORK5CYII=) 0 0 no-repeat!important; }
span.PIN_1405766971168_embed_pin span.PIN_1405766971168_embed_pin_stats span.PIN_1405766971168_embed_pin_stats_like_count { background: url(data:image/png!important;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAKCAAAAAClR+AmAAAAUElEQVR4AT2HMQpFIQwEc/+zbXhFLBW8QUihIAT2E8Q/xe6M0Jv2zK7NKUcBzAlAjzjqtdZl4c8S2nOjMPS6BoWMr/wLVnAbYJs3mGMkXzx+OeRqUf5HHRoAAAAASUVORK5CYII=) 0 2px no-repeat!important; }
span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_text { padding: 12px!important; position: relative!important; text-decoration: none!important; display: block!important; font-weight: bold!important; color: #b7b7b7!important; font-family: "Helvetica Neue", arial, sans-serif!important; font-size: 11px!important; line-height: 14px!important; height: 30px!important; text-align: left!important; }
span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_text:hover { background: #eee!important;}
span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_text img.PIN_1405766971168_embed_pin_text_avatar { border-radius: 15px!important; overflow: hidden!important; height: 30px!important; width: 30px!important; vertical-align: middle!important; margin: 0 8px 12px 0!important; float: left!important;}
span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_text span.PIN_1405766971168_embed_pin_text_container_pinner, span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_text span.PIN_1405766971168_embed_pin_text_container_board { display: block!important; width: 175px!important; white-space: nowrap!important; overflow: hidden!important; text-overflow: ellipsis!important;}
span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_text span.PIN_1405766971168_embed_pin_text_container_pinner { color: #777!important;}
span.PIN_1405766971168_embed_pin a.PIN_1405766971168_embed_pin_text b.PIN_1405766971168_embed_pin_link_shield { position: absolute!important; top: 0!important; left: 0!important; height: 100%!important; width: 100%!important; }
span.PIN_1405766971168_embed_grid { display: inline-block!important; margin: 0!important; padding:10px 0!important; position: relative!important; text-align: center}
span.PIN_1405766971168_embed_grid.PIN_1405766971168_fancy { background: #fff!important; box-shadow: 0 0 3px #aaa!important; border-radius: 3px!important; }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_hd { display: block!important; margin: 0 10px!important; padding: 0!important; height: 45px!important; position: relative!important; background: #fff}
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_hd a.PIN_1405766971168_avatar { position: absolute!important; top: 0!important; left: 0!important; height: 36px!important; width: 36px!important; }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_hd a.PIN_1405766971168_avatar::before { position: absolute!important; content:""!important; z-index: 2!important; top: 0!important; left: 0!important; right: 0!important; bottom: 0!important; box-shadow: inset 0 0 2px #888!important;  border-radius: 3px!important; }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_hd a.PIN_1405766971168_avatar img { position: relative!important; height: 36px!important; width: 36px!important; margin: 0!important; padding: 0!important; border-radius: 3px!important; border: none!important;}
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_hd a { text-decoration: none!important; background: transparent!important; cursor: pointer!important; white-space: nowrap!important; position: absolute!important; left: 44px!important; text-align: left!important; overflow: hidden!important; text-overflow: ellipsis!important; }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_hd a:hover { text-decoration: none!important; background: #fff!important; }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_hd a:active { text-decoration: none!important; background: #fff!important; }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_hd a.PIN_1405766971168_embed_grid_first { top: 2px!important; font-family: helvetica, sans-serif!important; font-weight: bold!important; color:#333!important; font-size: 14px!important; line-height: 16px!important; }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_hd a.PIN_1405766971168_embed_grid_second { bottom: 11px!important; font-family: helvetica, sans-serif!important; color:#8e8e8e!important; font-size: 12px!important; line-height: 14px!important; }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_hd a.PIN_1405766971168_embed_grid_mid { top: 12px!important; font-family: helvetica, sans-serif!important; font-weight: bold!important; color:#333!important; font-size: 14px!important; line-height: 16px!important; }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_bd { display:block!important; margin: 0 10px!important; border-radius: 2px!important; position: relative!important; overflow: hidden }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_scrolling_okay { overflow: auto!important; }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_bd span.PIN_1405766971168_embed_grid_ct { display:block!important; position: relative!important; overflow: hidden!important; }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_bd a.PIN_1405766971168_embed_grid_th { cursor: pointer!important; display: inline-block!important; position: absolute!important; overflow: hidden!important; }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_bd a.PIN_1405766971168_embed_grid_th::before { position: absolute!important; content:""!important; z-index: 2!important; top: 0!important; left: 0!important; right: 0!important; bottom: 0!important; box-shadow: inset 0 0 2px #888!important; }
span.PIN_1405766971168_embed_grid span.PIN_1405766971168_embed_grid_bd a.PIN_1405766971168_embed_grid_th img.PIN_1405766971168_embed_grid_img { border: none!important; position: absolute!important; top: 50%!important; left: 0!important; }
a.PIN_1405766971168_embed_grid_ft { cursor: pointer!important; text-shadow: 0 1px #fff!important; display: block!important; text-align: center!important; border: 1px solid #ccc!important; margin: 10px 10px 0!important; height: 31px!important; line-height: 30px!important;border-radius: 2px!important; text-decoration: none!important; font-family: Helvetica!important; font-weight: bold!important; font-size: 13px!important; color: #746d6a!important; background: #f4f4f4 url(http://passets.pinterest.com/images/pidgets/board_button_link.png) 0 0 repeat-x}
a.PIN_1405766971168_embed_grid_ft:hover { text-decoration: none!important; background: #fefefe url(http://passets.pinterest.com/images/pidgets/board_button_hover.png) 0 0 repeat-x}
a.PIN_1405766971168_embed_grid_ft:active { text-decoration: none!important; background: #e4e4e4 url(http://passets.pinterest.com/images/pidgets/board_button_active.png) 0 0 repeat-x}
a.PIN_1405766971168_embed_grid_ft span.PIN_1405766971168_embed_grid_ft_logo { vertical-align: top!important; display: inline-block!important; margin-left: 2px!important; height: 30px!important; width: 66px!important; background: transparent url(http://passets.pinterest.com/images/pidgets/board_button_logo.png) 50% 48% no-repeat!important; }
.PIN_1405766971168_hidden { display:none!important; }</style><script src="student_files/getAllAppDefault.esi" type="text/javascript"></script><script src="student_files/checkOAuth.esi" type="text/javascript"></script><link href="student_files/buttons.css" type="text/css" rel="stylesheet"></head>

<body class="page page-id-18 page-template page-template-page-productcat-php theme-templatesquarev10">
	<div id="wrapper-topmenu"></div>
	<span id="sharptop"></span>
	<div id="wrapper-top">
			<div id="top-container">
					<div id="top-left">
																			<div id="logo">
								<a href="http://www.templatesquare.com/" title="TemplateSquare.Com" rel="home">
									<img src="student_files/logo.png" alt="">
								</a>
							</div><!-- end #logo -->
											</div><!-- end top-left -->
					<div id="top-right">
                    	
						<div id="top-navigation">
<?php include('top.php');						?>
</div><!-- end top-navigation -->
					</div><!-- end top-right -->
			</div><!-- end top-container -->
	</div> <!-- end wrapper-top -->
	
	<div id="wrapper-header-inner" style="height:40px">
    <div>
	<div id="wrapper-header-shadowline">
			<div id="header-inner">
                 <div id="titlecontainer" style="height:10px">
                    				<h1 class="pagetitle">Instructor</h1>
			                    <div class="clear"></div>
                </div>
                			</div><!-- end header-inner -->
	</div><!-- end wrapper-header-shadowline -->
    </div>
	</div>
<table border=0>
<tr>
<td>
<iframe src="Login/become_instructor.html" style="height:700px;width:650px;" scrolling=no></iframe>
</td>

<td>
<?php if(isset($_REQUEST['id'])){ 
echo "<iframe src='Login/index4.php?id=".$_REQUEST['id']."' style='height:700px;width:650px' scrolling=no></iframe>";}
else
echo "<iframe src='Login/index4.php' style='height:700px;width:650px' scrolling=no></iframe>";?>
</td>
</table>
 <div class="clear"></div>


                   
				<div class="clear"></div><!-- end clear -->
			</div><!-- end content-container -->
	</div> <!-- end wrapper-content -->
	<div id="wrapper-shadow-line-bottom"></div><!-- end wrapper-shadow-line-bottom -->
<?php include('footerbar.php');?>