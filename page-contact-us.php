<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main contact_us" role="main">
		
		<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2204.5477318370795!2d-2.9835408766938682!3d56.458324416950376!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c296634d29a3e67!2sQueen+Mother+Building+(QMB)!5e0!3m2!1sen!2suk!4v1497267828668" width="600px" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
		<pre>University of Dundee
Queen Mother Building
Balfour Street
Dundee
DD1 4HN</pre>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
