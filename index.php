<?php
get_header();

//display all of the posts
if(have_posts()) :
	while(have_posts()) : the_post();
?>
	<h2><a href="<?php echo the_permalink(); ?>"><?php the_title() ?> </a></h2>
	<p><?php the_content() ?> </p>
	
<?php
	endwhile;
else: //if there is no posts available, say that it's empty
	echo '<p>This section of the website is empty</p>';
endif;

get_footer();
?>