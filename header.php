<!DOCTYPE html>
<html <?php language_attributes(); ?> >
	<head>
	</head>
	<meta charset='<?php bloginfo("charset") ?>' ></meta>
	<meta name="viewport" content="width:device-width"></html></meta>
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<div class="main-body">
	<div class="header-css">
	<div class="searchno">
		<?php get_search_form(); ?>
		</div>
		<h1><a href='<?php echo esc_url(home_url('/')) ; ?>' > <?php bloginfo('name') ?></a></h1>
		<h2><?php bloginfo('description') ?>
		<?php if(is_page(11)){ ?>
		only for about page
		<?php } ?>
		</h2>
		<nav class="site-nav">
		<?php $args=array('theme_location' => 'primary');
			wp_nav_menu($args); ?>
			<?php $arg=array("child_of" => mann_list_id(),
				"title_li" => '' ); 
			 wp_list_pages($arg) ?>
		</nav>
	</div>