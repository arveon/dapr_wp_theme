<?php
//function automatically loads the style for the page
function resources()
{
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'resources');

//register locations
register_nav_menus(array( 
	'primary' => __('Primary Menu'),
	'secondary' => __('Secondary Menu')
	));

?>