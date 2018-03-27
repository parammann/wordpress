<?php
get_header();

if(have_posts()):
	while (have_posts()): the_post(); ?>
		<div class="article-blog">
		<h2>Search for: <?php the_search_query(); ?></h2>
			<a href='<?php the_permalink() ?> '> <h1> <?php echo the_title(); ?></h1></a>
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('post_img'); ?></a>
			<p><?php echo the_time('F j, Y g:i a'); ?> | by: <a href=' <?php echo get_author_posts_url(get_the_author_meta("ID")) ?>'><?php the_author(); ?></a> | <?php $first=get_the_category();
			$output="";
			$comma=",";
			if($first){
				foreach($first as $category){
					$output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$comma;
				}
				echo trim($output,$comma);
			}

			 ?></p>
			 <p>
			<?php echo get_the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">Continue Reading</a></p>

		</div>
	<?php endwhile;
else:
		echo "<h1>No content</h1>";
endif;
get_footer();
?>