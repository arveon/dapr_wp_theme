<?php
get_header();

if(is_page('Research projects'))
{
	query_posts('category_name=research-projects & posts_per_page=5');
}
else if(is_page('Publications'))
{
	query_posts('post_type=research_publication & posts_per_page=5');
}

if(have_posts()):
	while(have_posts()): the_post(); 
?>

	<article class="post">
		<h2><a href="<?php echo the_permalink(); ?>"><?php the_title() ?></a></h2>
		
		<h5>
		<?php 
			$authors=get_post_meta(get_the_ID(), 'publication_authors', true);
			echo 'By: '.$authors;
		?>
		</h5>
		
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="post_thumb"/>
		<div class="excerpt"><?php the_excerpt() ?></div>
		<div class="article_bottom">
			<span class="viewpost"><a href="<?php the_permalink() ?>">View publication</a></span>
			<span class="meta">Published: <?php echo get_the_date(); ?> <?php the_time(); ?> </span>
		</div>
	</article>
<?php
	endwhile;
else:
	echo '<p>The page is empty.</p>';
endif;
wp_reset_query();


get_footer();
?>