<?php
function mann_get_css(){
	wp_enqueue_style("style",get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','mann_get_css');
?>