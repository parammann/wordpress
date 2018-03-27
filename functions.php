<?php
function mann_get_css(){
	wp_enqueue_style("style",get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','mann_get_css');



register_nav_menus(array('primary' =>  __('Primary_Menu'),
	'footer' => __('footer_Menu'),));

function mann_list_id(){
	global $post;
	if($post->post_parent){
		$subarr=array_reverse(get_post_ancestors($post->ID));
		return $subarr[0];

	}else{
	return $post->ID; }
}
function custom_excerpt_length(){
	return 25;
}
add_filter('excerpt_length','custom_excerpt_length');


function making_feature_image(){
	add_theme_support('post-thumbnails');
	add_image_size('post_img',150,120,true);
	add_theme_support('post-formats',array(aside,gallery,link));
}
add_action('after_setup_theme','making_feature_image');

function make_widget(){
	register_sidebar( array(
		'name' => 'sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div >',
		'after_widget' => '</div>'
		));
}
add_action('widgets_init','make_widget');
?>
