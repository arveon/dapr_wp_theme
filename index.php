<?php
get_header();

//display all of the posts
if(have_posts()) :
	while(have_posts()) : the_post();
?>
	<h2><?php the_title() ?> </h2>
	<p><?php the_content() ?> </p>
	
<?php
	endwhile;
else: //if there is no posts available, say that it's empty
	echo '<p>This section of the website is empty</p>';
endif;

get_footer();
?>