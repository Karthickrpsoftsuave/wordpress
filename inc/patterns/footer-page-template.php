<?php
/**
 * Footer Page Template Pattern
 *
 * Use this pattern on the "Footer" page for the [edun_footer] shortcode
 * Edit this page once, and all pages using [edun_footer] will update!
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Footer Page Template', 'edun-child'),
    'description' => __('Complete footer template for use on the Footer page with shortcode', 'edun-child'),
    'categories'  => array('edun', 'footer'),
    'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained"},"className":"edun-site-footer edun-footer"} -->
<div class="wp-block-group alignfull edun-site-footer edun-footer">

<!-- wp:columns {"className":"edun-footer-columns"} -->
<div class="wp-block-columns edun-footer-columns">

<!-- wp:column {"className":"edun-footer-col-brand"} -->
<div class="wp-block-column edun-footer-col-brand">

<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"edun-footer-logo"} -->
<figure class="wp-block-image size-full edun-footer-logo"><a href="/"><img src="' . esc_url(get_stylesheet_directory_uri()) . '/assets/edun-logo-white.svg" alt="edun"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"edun-footer-tagline"} -->
<p class="edun-footer-tagline">Powering the future of workforce management</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-footer-contact"} -->
<p class="edun-footer-contact"><a href="mailto:info@helloedun.co.uk">info@helloedun.co.uk</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-footer-contact"} -->
<p class="edun-footer-contact"><a href="tel:01914069222">0191 406 9222</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"className":"edun-footer-col-company"} -->
<div class="wp-block-column edun-footer-col-company">

<!-- wp:paragraph {"className":"edun-footer-heading"} -->
<p class="edun-footer-heading">Company</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-footer-link"} -->
<p class="edun-footer-link"><a href="/about">About</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-footer-link"} -->
<p class="edun-footer-link"><a href="/contact">Contact</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-footer-link"} -->
<p class="edun-footer-link"><a href="/partners">Partners</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-footer-link"} -->
<p class="edun-footer-link"><a href="/cookies">Cookies</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-footer-link"} -->
<p class="edun-footer-link"><a href="/privacy">Privacy</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"className":"edun-footer-col-products"} -->
<div class="wp-block-column edun-footer-col-products">

<!-- wp:paragraph {"className":"edun-footer-heading"} -->
<p class="edun-footer-heading">Products</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-footer-link"} -->
<p class="edun-footer-link"><a href="/core-crm">Core CRM</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-footer-link"} -->
<p class="edun-footer-link"><a href="/connect">Connect</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-footer-link"} -->
<p class="edun-footer-link"><a href="/id">ID</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-footer-link"} -->
<p class="edun-footer-link"><a href="/worker">Worker</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"className":"edun-footer-col-social"} -->
<div class="wp-block-column edun-footer-col-social">

<!-- wp:paragraph {"className":"edun-footer-heading"} -->
<p class="edun-footer-heading">Social</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-footer-link"} -->
<p class="edun-footer-link"><a href="https://linkedin.com" target="_blank" rel="noopener">LinkedIn</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"bottom","className":"edun-footer-bottom"} -->
<div class="wp-block-columns are-vertically-aligned-bottom edun-footer-bottom">

<!-- wp:column {"verticalAlignment":"bottom","className":"edun-footer-copyright-col"} -->
<div class="wp-block-column is-vertically-aligned-bottom edun-footer-copyright-col">

<!-- wp:paragraph {"className":"edun-footer-copyright"} -->
<p class="edun-footer-copyright">© 2025 edun</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","className":"edun-footer-decoration-col"} -->
<div class="wp-block-column is-vertically-aligned-bottom edun-footer-decoration-col">

<!-- wp:image {"align":"right","sizeSlug":"large","linkDestination":"none","className":"edun-footer-decoration"} -->
<figure class="wp-block-image alignright size-large edun-footer-decoration"><img src="' . esc_url(get_stylesheet_directory_uri()) . '/assets/images/footer-decoration.png" alt=""/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);
