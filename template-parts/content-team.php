<?php
/**
 * The template used for displaying team content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="person">
	<article>
		<?php 
			$avatar_src='';
			if(has_post_thumbnail())
				$avatar_src=get_the_post_thumbnail_url();
			else
				$avatar_src=get_template_directory_uri().'/img/default-avatar.png';
		 ?>
		<a href="<?php echo the_permalink(); ?>" class="person_name">
			<div class="img"><a href="<?php the_permalink() ?>"><img src="<?php echo $avatar_src; ?>" /></a></div>
		</a>
			<div class="desc">
				<!--<a href="<?php //echo the_permalink(); ?>" class="person_name">--><p class="name"><?php the_title() ?></p>
				<span class="position"><?php echo get_post_meta(get_the_ID(), 'team_member_position', true); ?></span>
				<?php echo get_query_var('pagename'); ?>
			</div>
	</article>
</div>