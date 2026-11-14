<?php
/*
Template Name: Template Header
*/

 savetheplanet_?php defined('WP_USE_SAVETHEPLANET') or define('WP_USE_SAVETHEPLANET', true); ?>

 savetheplanet_init();
?>

<div class="savetheplanet-header">
	<nav class="savetheplanet-navigation" role="navigation">
		<ul class="savetheplanet-menu">
			<li class="savetheplanet-menu-item"><a href="<?php esc_url(savetheplanet_get_home_url()); ?>"><?php esc_html(savetheplanet_get_blog_title()); ?></a></li>
			<?php
			savetheplanet_get_nav_menu_items();
			?>
		</ul>
	</nav>
</div>

<?php
savetheplanet_close();
?>
