<?php
get_header();

if(have_posts()):
	while (have_posts()): the_post();
	dynamic_sidebar('sidebar1');
		get_template_part('content',get_post_format());
	endwhile;
else:
		echo "<h1>No content</h1>";
endif;
get_footer();
?>