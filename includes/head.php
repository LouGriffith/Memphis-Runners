<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>

		<!-- Basic Page Needs
		================================================== -->
			<meta charset="utf-8" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<title><?php echo $title; ?> | Memphis Runners Track Club</title>
			<meta name="description" content="">

		<!-- Mobile Specific Metas
		================================================== -->
		    <!-- Mobile viewport optimized: h5bp.com/viewport -->
			<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"  />
			<meta name="HandheldFriendly" content="True">
			<meta name="MobileOptimized" content="320">

		<!-- Favicons
		================================================== -->
			<link rel="apple-touch-icon" href="apple-icon-touch.png">
			<link rel='icon' type='image/x-icon' href='favicon.ico' />
			<link rel="icon" type="image/png" href="favicon.png"/>

		<!-- IE Fixes
		================================================== -->
			<!-- Based on Foundation & h5bp.com/d/head-Tips -->

			<!--[if lt IE 9]>
				<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->

			<!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
			<meta http-equiv="cleartype" content="on">

		<!-- CSS
		================================================== -->
			<link rel="stylesheet" href="stylesheets/app.css" />

		<!-- Modernizr - www.modernizr.com/download/
		================================================== -->		
		  	<!-- Modernizr enables HTML5 elements & feature detects for optimal performance. -->
		  	
    		<script src="bower_components/modernizr/modernizr.js"></script>
			
		  	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

	</head>

	<?php $page_class = str_replace(' ', '_', strtolower($title)); ?>

	<body class="<?php echo $page_class; ?>">