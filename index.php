<?php /* Template Name: homepage */
get_header();
//display all of the posts
if(have_posts()) :
	query_posts('posts_per_page=5');
	while(have_posts()) : the_post();
?>
	<article class="post">
		<h2><a href="<?php echo the_permalink(); ?>"><?php the_title() ?> </a></h2>
		<p><?php the_content(); ?> </p>
		<p><?php the_author(); ?> - <?php the_date(); ?> <?php the_time(); ?></p>
	</article>
<?php
	endwhile;
else: //if there is no posts available, say that it's empty
	echo '<p>This section of the website is empty</p>';
endif;
wp_reset_query();
get_footer();
?>