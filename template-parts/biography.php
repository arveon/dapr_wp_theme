<?php
/**
 * The template part for displaying an Author biography
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="author-info">
	<div class="author-description">
		<h2 class="author-title"><span class="author-heading"><?php _e( 'Authors:', 'twentysixteen' ); ?></span> <?php 
			echo get_post_meta(get_the_ID(), 'publication_authors', true); 
			echo get_post_meta(get_the_ID(), 'project_authors', true);
			echo '<br>';
			?>
		<span class="author-heading"><?php _e( 'Source:', 'twentysixteen' ); ?></span>
		<?php
			if(get_post_meta(get_the_ID(), 'publication_venue', true) != '')
				echo get_post_meta(get_the_ID(), 'publication_venue', true);
		?></h2>
	</div><!-- .author-description -->

	<?php   


	?>
</div><!-- .author-info -->
