<!html> 

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"> 
 
<head> 
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php bloginfo('name'); ?> | <?php wp_title(); ?> </title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
<!--[if lt IE 9]> <script src="<?php TEMPPATH; ?>/js/respond.min.js"></script> <![endif]-->

<?php wp_head(); ?>


</head>
<body>
	<div id="top" class="more"><a href="#morenav">more</a></div>
	<div id="container" class="group">
	
		<!--Header - Name of Item Here-->
		<header class="group">
				<div class="group">
					<a href="<?php bloginfo('home'); ?>"><img src="<?php print IMAGES; ?>/me-sketch-no-fill.png" alt="<?php bloginfo('name'); ?>"/></a>
					<h1><?php bloginfo('name'); ?></h1>
					<h2><?php bloginfo('description'); ?></h2>
				</div>
					<nav>
						<?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'menu group' )); ?>
					</nav>
			</header>

		<!-- End Header -->
		
		<div class="group">

		
		
		
		