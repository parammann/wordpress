<?php
get_header();

if(have_posts()):
	?><h1>home page</h1><?php
	while (have_posts()): the_post();
		get_template_part('content',get_post_format());
	endwhile;
else:
		echo "<h1>No content</h1>";
endif;
get_footer();
?>