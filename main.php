<?php
error_reporting(0);
session_start();
if(!(isset($_SESSION['user'])) || ($_SESSION['type']=="student")){
header('Location:instructor.php');
echo "<script>parent.location.href='instructor.php';</script>";
}
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
<table><tr><td>
<iframe src="leftmenu.php" name="left" width=22% height=810 ></iframe>
<iframe src="rightpanel.html"  name="right" height=850 width=77%></iframe>
</table>
<?php include('footerbar.php');?>

