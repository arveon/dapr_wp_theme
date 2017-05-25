<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title> <?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">

		<nav class="site-nav">
			<!-- calling this location in the theme as primary -->
			<?php $args = array('theme-location' => 'primary'); ?>
			<?php wp_nav_menu($args); ?>
		</nav>

		<header class="site-header">
			<h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name');?></a></h1>
			<h5><?php bloginfo('description'); ?> </h5>
		</header>