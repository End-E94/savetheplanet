<?php
/**
 * Title: Impact stats
 * Slug: savetheplanet/impact-stats
 * Categories: savetheplanet
 */
?>
<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
		<p class="has-text-align-center has-x-large-font-size"><strong>10,000</strong></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'Trees planted', 'savetheplanet' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
		<p class="has-text-align-center has-x-large-font-size"><strong>250</strong></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'Volunteers', 'savetheplanet' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
		<p class="has-text-align-center has-x-large-font-size"><strong>40</strong></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'Communities supported', 'savetheplanet' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->


- /wp:table {
	border-collapse: separate;
	width: 100%;
	border: 1px solid #ccc;
	margin: 0 0 20px 0;
	border-spacing: 0 5px;
}

- /wp:table caption {
	text-align: center;
	margin: 0;
	padding: 0;
	border: 1px solid #ccc;
	background-color: #f9f9f9;
}

- /wp:table tr {
	border-top: 1px solid #ccc;
}

- /wp:table th {
	background-color: #f9f9f9;
	padding: 10px;
	border: 1px solid #ccc;
	text-align: left;
	font-size: 16px;
	color: #333;
}

- /wp:table td {
	padding: 10px;
	border: 1px solid #ccc;
}

- /wp:table td:first-child {
	border-left: 1px solid #ccc;
}

- /wp:table td:last-child {
	border-right: 1px solid #ccc;
}

- /wp:table td:last-child a {
	text-decoration: none;
}

- /wp:table td:last-child a:hover {
	text-decoration: underline;
}
