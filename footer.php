<footer class="footer-css">
<div class="footer-nav">
<?php 
$args=array(theme_location => footer);
wp_nav_menu($args) ?>
</div>
	<?php bloginfo('name'); ?> &copy <?php echo date('Y'); ?>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>