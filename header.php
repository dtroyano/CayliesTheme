<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(' | ', true, 'right'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Princess+Sofia|Gabriela|Oleo+Script+Swash+Caps:400,700|Great+Vibes' rel='stylesheet' type='text/css'>	
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/style.jquery.js"></script>
</head>
<body <?php body_class(); ?>>
	<div id="page-wrap">
		<header>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h1>
				<p id="site-description"><?php bloginfo( 'description' ) ?></p>
			<nav>				
				<?php wp_nav_menu( array( 'menu' => 'Main Menu' ) ); ?>
			</nav>
		</header>
		<div id="main-content">