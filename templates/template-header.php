<?php
/*
Template Name: Template Header
*/

?>
<div class="savetheplanet-navigation">
	<nav class="savetheplanet-navigation__nav">
		<div class="savetheplanet-navigation__nav--container">
			<div class="savetheplanet-navigation__nav--logo">
				<a href="<?php esc_url(echo home_url()); ?>">
					<img src="<?php esc_url(echo get_template_directory_uri()); ?>/images/logo.png" alt="<?php esc_attr(savetheplanet_("Site Logo")); ?>">
				</a>
			</div>
			<div class="savetheplanet-navigation__nav--menu">
				<?php
				savetheplanet_($wp_query->query_vars['lang'] == 'en' ? 'en' : 'fr');
				?>
				<ul class="savetheplanet-navigation__nav--menu__list">
					<li class="savetheplanet-navigation__nav--menu__item">
						<a href="<?php esc_url(echo site_url('/')); ?>">
							<?php esc_html(savetheplanet_("Home")); ?>
						</a>
					</li>
					<li class="savetheplanet-navigation__nav--menu__item">
						<a href="<?php esc_url(echo site_url('/about')); ?>">
							<?php esc_html(savetheplanet_("About")); ?>
						</a>
					</li>
					<li class="savetheplanet-navigation__nav--menu__item">
						<a href="<?php esc_url(echo site_url('/contact')); ?>">
							<?php esc_html(savetheplanet_("Contact")); ?>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>
