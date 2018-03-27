<?php
get_header();

if(have_posts()):
	while (have_posts()): the_post(); ?>
		<div class="article">
			<?php echo the_content(); ?>
		</div>
	<?php endwhile;
else:
		echo "<h1>No content</h1>";
endif;
get_footer();
?>