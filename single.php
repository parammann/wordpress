<?php
get_header();

if(have_posts()):
	while (have_posts()): the_post(); ?>
		<div class="article-blog">
			<a href='<?php the_permalink() ?> '> <h1> <?php echo the_title(); ?></h1></a>
			<?php echo the_time('F j, Y g:i a'); ?> | by: <a href=' <?php echo get_author_posts_url(get_the_author_meta("ID")) ?>'><?php the_author(); ?></a> | <?php $first=get_the_category();
			$output="";
			$comma=",";
			if($first){
				foreach($first as $category){
					$output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$comma;
				}
				echo trim($output,$comma);
			}

			 ?>
			<?php echo the_content(); ?>
		</div>
	<?php endwhile;
else:
		echo "<h1>No content</h1>";
endif;
get_footer();
?>