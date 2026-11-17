<?php
/**
 * Title: Blog posts grid
 * Slug: savetheplanet/blog-posts-grid
 * Categories: savetheplanet
 */
?>
<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:post-featured-image {"isLink":true} /-->
		<!-- wp:post-title {"isLink":true,"level":3} /-->
		<!-- wp:post-excerpt /-->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->

