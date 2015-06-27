<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
		<script src="dist/html5shiv.js"></script>
	<![endif]-->
	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
		
	<div id="page" class="hfeed site">
	

		<section id="site-info">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1><br>
			<h1 id="tagline"><?php bloginfo('description'); ?></h1>
		</section>

			<div id="navbar" class="navbar">
				
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					
					<?php wp_nav_menu( array( 'theme_location' => 'top_menu', 'menu_class' => 'nav-menu' ) ); ?>					
				</nav><!-- #site-navigation -->				
			</div><!-- #navbar -->   
			
		

		<div id="main" class="site-main">