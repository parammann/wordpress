<?php
get_header();

if(have_posts()):
	while (have_posts()): the_post(); ?>
		<div class="article">
			<h1> <?php echo the_title(); ?></h1>
			<?php echo the_content(); ?>
		</div>
	<?php endwhile;
else:
		echo "<h1>No content</h1>";
endif;
get_footer();
?>