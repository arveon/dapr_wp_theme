<?php
get_header();
//the post
if(have_posts()) :
	while(have_posts()) : the_post();
?>
	<article class="post">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="pp_thumbnail" />
		<h2 class="pp_title"><?php the_title() ?></h2>
		<p><?php the_content(); ?> </p>
		<div class="pp_meta"><?php the_author(); ?> - <?php the_date(); ?> <?php the_time(); ?></div>
	</article>
<?php
	endwhile;
else: //if there is no posts available, say that it's empty
	echo '<p>Post does not exist</p>';
endif;

get_footer();
?>