<?php
get_header();

if(is_page('Research projects'))
{
	query_posts('category_name=research-projects & posts_per_page=5');
}
else if(is_page('Publications'))
{
	query_posts('category_name=publications & posts_per_page=5');
}

if(have_posts()):
	while(have_posts()): the_post(); 
?>

	<article class="post">
		<h2><?php the_title() ?></h2>
		<?php the_content(); ?>
		<p> Last updated: <?php the_date(); ?> <?php the_time(); ?> </p>
	</article>
<?php
	endwhile;
else:
	echo '<p>The page is empty.</p>';
endif;
wp_reset_query();
get_footer();
?>