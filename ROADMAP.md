# Roadmap

Goal: Minimalistic block theme (full site editing) for non-profits and eco-friendly businesses. Requirements: block theme using theme.json, templates, parts and patterns; full WooCommerce support with block templates; follows the latest WordPress coding standards (WPCS: tabs, escaping, prefixes, translatable strings); ready for WordPress.org theme review (GPL, no external resources, readme.txt, accessibility-ready, no minified code).

Each item is one small task that changes a single file. The roadmap bot ticks items off automatically.

## Block theme foundation
- [x] Create style.css with the WordPress theme header (Theme Name: Save the Planet, Description: Minimalistic block theme for non-profits and eco-friendly businesses, Version: 0.1.0, Requires at least: 6.6, Tested up to: 7.1, Requires PHP: 7.4, License: GNU General Public License v3 or later, License URI: https://www.gnu.org/licenses/gpl-3.0.html, Text Domain: savetheplanet, Tags: full-site-editing, block-patterns, e-commerce, accessibility-ready, wide-blocks, translation-ready) and no other CSS _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create theme.json (version 3) with the schema URL, appearanceTools, layout contentSize 720px and wideSize 1200px, and a green and earth-tone color palette _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Add system font stacks, a fluid font size scale and a spacing scale to theme.json _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/index.html with the header template part, a query loop with post-template and pagination, and the footer template part _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create parts/header.html with the site logo, site title and navigation blocks _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create parts/footer.html with the site title, a copyright line and a footer navigation block _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/single.html with post title, featured image, post content, post meta, post navigation and comments _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/page.html with post title, featured image and post content _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/archive.html with an archive title, a query loop and pagination _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/search.html with a search block, a results heading, a query loop and pagination _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/404.html with a friendly message and a search block _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/home.html for the blog posts index with a query loop _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create functions.php with a file docblock and a savetheplanet_setup() function hooked to after_setup_theme that adds wp-block-styles and editor-styles support _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Add a savetheplanet_register_pattern_categories() function hooked to init that registers a savetheplanet block pattern category in functions.php _(done by roadmap bot, 2026-11-13, built-in)_

## Patterns and style
- [x] Create patterns/hero.php with a block pattern header comment (Title, Slug: savetheplanet/hero, Categories: savetheplanet) and a cover block with a heading, paragraph and call-to-action button, using esc_html_e() with the savetheplanet text domain for every visible string _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create patterns/call-to-action.php with a donate or get-involved banner using group, heading and buttons blocks and esc_html_e() with the savetheplanet text domain _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create patterns/impact-stats.php with three columns each showing a large number and a label, using esc_html_e() with the savetheplanet text domain _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create patterns/features-three-columns.php with three columns each with a heading and a short paragraph, using esc_html_e() with the savetheplanet text domain _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create patterns/testimonials.php with a quote block pattern using esc_html_e() with the savetheplanet text domain _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create styles/dark.json style variation (version 3) with a dark green color palette _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Add button, link and heading element styles to theme.json using the color palette _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Add a visible :focus-visible outline for links and buttons to theme.json styles _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Add a prefers-reduced-motion rule to the custom CSS in theme.json _(done by roadmap bot, 2026-11-13, built-in)_

## WooCommerce
- [x] Add WooCommerce theme support (wc-product-gallery-zoom, wc-product-gallery-lightbox, wc-product-gallery-slider) in savetheplanet_setup() in functions.php _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/single-product.html using WooCommerce blocks for the product gallery, title, price, add to cart and related products _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/archive-product.html with the WooCommerce product collection, sorting and pagination blocks _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/product-search-results.html with the WooCommerce product collection block _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/page-cart.html with the WooCommerce cart block _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/page-checkout.html with the WooCommerce checkout block _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/order-confirmation.html with the WooCommerce order confirmation blocks _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create parts/header-shop.html with the site logo, navigation and the WooCommerce mini-cart block _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Add WooCommerce block style rules for prices, sale badges and product buttons to theme.json _(done by roadmap bot, 2026-11-13, built-in)_

## WordPress.org readiness and coding standards
- [x] Create readme.txt in the WordPress.org theme readme format with Description, Installation, Frequently Asked Questions, Copyright (credits for any bundled resources) and Changelog, stating Requires at least 6.6, Tested up to 7.1 and Requires PHP 7.4 _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create phpcs.xml.dist that uses the WordPress-Extra and WordPress-Docs rulesets with text domain and prefix savetheplanet and minimum_supported_wp_version 6.6 _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create composer.json with dev dependencies wp-coding-standards/wpcs and phpcompatibility/phpcompatibility-wp and lint and fix scripts that run phpcs and phpcbf _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Review functions.php against the WordPress PHP coding standards (tabs, spacing inside parentheses, Yoda conditions, docblocks) and fix any issues _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Update README.md with the theme description, requirements, installation steps, supported features (block theme, WooCommerce) and development instructions _(done by roadmap bot, 2026-11-13, built-in)_

## Cycle 2 - 2026-11-13
- [x] Create templates/taxonomy-product_cat.html using the WooCommerce legacy template block _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/taxonomy-product_tag.html using the WooCommerce legacy template block _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/front-page.html that shows the hero and impact-stats patterns above the latest posts _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create templates/page-no-title.html for pages without a visible title _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create parts/sidebar.html with a search block and a recent posts list _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create styles/sand.json style variation with a warm earth-tone color palette _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create patterns/team-members.php with a three-column team pattern _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create patterns/faq.php with a details block pattern _(done by roadmap bot, 2026-11-13, built-in)_

## Cycle 3 - 2026-11-13
- [x] Create patterns/donation-tiers.php with three columns each showing an amount and a donate button _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Add block style variations (card group and underlined heading) in functions.php _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Create languages/README.md explaining how to translate the theme _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Add fluid heading size presets to theme.json _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Add WooCommerce product grid spacing styles to theme.json _(done by roadmap bot, 2026-11-13, built-in)_
- [x] Add print styles to theme.json _(done by roadmap bot, 2026-11-13, built-in)_

## Cycle 4 - 2026-11-13
- [ ] Update theme.json to include RTL languages support.
- [ ] Improve templates/search.html to include a skip link for keyboard navigation.
- [ ] Update styles/dark.json to include reduced motion styles.
- [x] Create templates/template-header.php to improve navigation templates. _(done by roadmap bot, 2026-11-14)_
- [x] Improve parts/footer.html to include ARIA attributes for focus states. _(done by roadmap bot, 2026-11-14)_
- [x] Update functions.php to include browser-specific block style variations. _(done by roadmap bot, 2026-11-14)_
- [ ] Create patterns/testimonials.php to improve color contrast for testimonial text.
- [x] Update README.md to include documentation links and editor experience instructions. _(done by roadmap bot, 2026-11-14)_

## Cycle 5 - 2026-11-14
- [x] Add customTemplates for the page without a title template to theme.json _(done by roadmap bot, 2026-11-14, built-in)_
- [x] Add underlined link styles to theme.json so links are not identified by colour alone _(done by roadmap bot, 2026-11-14, built-in)_
- [x] Add a forced-colors media query for focus outlines to theme.json _(done by roadmap bot, 2026-11-14, built-in)_
- [x] Add a minimum 44px touch target size for buttons and form fields to theme.json _(done by roadmap bot, 2026-11-14, built-in)_
- [x] Create styles/high-contrast.json style variation with a high contrast color palette _(done by roadmap bot, 2026-11-14, built-in)_
- [x] Create patterns/blog-posts-grid.php with a three-column grid of the latest posts _(done by roadmap bot, 2026-11-14, built-in)_
- [x] Improve templates/single-product.html to use the header-shop template part _(done by roadmap bot, 2026-11-14, built-in)_
- [x] Improve templates/archive-product.html to use the header-shop template part _(done by roadmap bot, 2026-11-14, built-in)_

## Cycle 6 - 2026-11-14
- [x] Improve templates/product-search-results.html to use the header-shop template part _(done by roadmap bot, 2026-11-14, built-in)_
- [x] Improve templates/taxonomy-product_cat.html to use the header-shop template part _(done by roadmap bot, 2026-11-14, built-in)_
- [ ] Improve templates/taxonomy-product_tag.html to use the header-shop template part
- [ ] Improve templates/page-cart.html to use the header-shop template part
- [ ] Improve templates/page-checkout.html to use the header-shop template part
- [ ] Improve templates/order-confirmation.html to use the header-shop template part
- [ ] Update README.md with a list of the included block patterns and style variations
