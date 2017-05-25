<?php
add_theme_support( 'post-thumbnails' ); 


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


//create a new post type
add_action( 'init', 'create_post_type' );
function create_post_type()
{
	register_post_type('research_publication',
		array(
			'labels' => array(
					'name' => __('Publications'),
					'singular_name' => __('Publication'),
				),
				'public' => true,
				'has_archive' => true,
				'supports' => array(
					'title',
					'editor',
					'excerpt',
					'thumbnail',
					//'custom-fields'
				),
				'menu_position' => 4
		)
	);
}

//adding 'authors box to the publications post type'
add_action('add_meta_boxes', 'publication_add_authors_metabox');
add_action('save_post', 'save_meta', 10, 2);
function publication_add_authors_metabox()
{
	add_meta_box('publication_authors', 'Authors', 'add_authors_metabox_html', 'research_publication', 'normal', 'default');
}

function add_authors_metabox_html()
{
	global $post;
	wp_nonce_field( basename( __FILE__ ), 'authors_meta_nonce' );
	//echo '<input type="hidden" name="authorsmeta_noncename" id="authorsmeta_noncename" value="'.wp_create_nonce(plugin_basename(__FILE__)).'"/>';
	$authors=esc_attr(get_post_meta($post->ID, 'publication_authors', true));
	echo '<input type="text" name="publication_authors" value="'.$authors.'" class="widefat" />';
}

function save_meta($post_id, $post)
{
	//verify nonce
	if(!isset($_POST['authors_meta_nonce']) || !wp_verify_nonce($_POST['authors_meta_nonce'], basename( __FILE__ )))
		return $post_id;

	//get the object
	$post_type = get_post_type_object($post->post_type);

	if(!current_user_can($post_type->cap->edit_post, $post_id))
		return $post_id;

	//if authors were passed, sanitize the content for html use
	$new_meta_value = (isset($_POST['publication_authors']) ? sanitize_text_field($_POST['publication_authors']):'');

	$meta_key = 'publication_authors';//meta key
	$old_meta_value = get_post_meta($post_id, $meta_key, false);

	//if new meta value exists and old is empty means add it
	if($new_meta_value && $old_meta_value == '')
		add_post_meta($post_id, $meta_key, $new_meta_value, false);
	elseif($new_meta_value != $old_meta_value)//if new != old means update
		update_post_meta($post_id, $meta_key, $new_meta_value);
	elseif ($old_meta_value && $new_meta_value == '')//if there is no new value and old one exists means delete it
		delete_post_meta($post_id, $meta_key, $meta_value);

}

?>