<?php
/**
 * Mobile Menu Overlay Pattern (From Figma 1:2103)
 *
 * Full-screen green menu with navigation
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Mobile Menu Overlay', 'edun-child'),
    'description' => __('Full-screen mobile menu - Add this after Header Navbar pattern', 'edun-child'),
    'categories'  => array('edun', 'header'),
    'content'     => '<!-- wp:group {"layout":{"type":"default"},"className":"edun-mobile-menu-overlay"} -->
<div class="wp-block-group edun-mobile-menu-overlay" id="edun-mobile-menu">

<!-- wp:columns {"className":"edun-mobile-menu-columns"} -->
<div class="wp-block-columns edun-mobile-menu-columns">

<!-- wp:column {"className":"edun-mobile-menu-main"} -->
<div class="wp-block-column edun-mobile-menu-main">

<!-- wp:paragraph {"className":"edun-mobile-menu-link edun-mobile-menu-link-home"} -->
<p class="edun-mobile-menu-link edun-mobile-menu-link-home"><a href="/">Home</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-mobile-menu-link edun-mobile-menu-link-about"} -->
<p class="edun-mobile-menu-link edun-mobile-menu-link-about"><a href="/about">About</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-mobile-menu-link edun-mobile-menu-link-contact"} -->
<p class="edun-mobile-menu-link edun-mobile-menu-link-contact"><a href="/contact">Contact</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"className":"edun-mobile-menu-products"} -->
<div class="wp-block-column edun-mobile-menu-products">

<!-- wp:heading {"level":3,"className":"edun-mobile-menu-heading"} -->
<h3 class="edun-mobile-menu-heading">Products</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"edun-mobile-menu-product-link"} -->
<p class="edun-mobile-menu-product-link"><a href="/core-crm">Core CRM</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-mobile-menu-product-link"} -->
<p class="edun-mobile-menu-product-link"><a href="/connect">Connect</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-mobile-menu-product-link"} -->
<p class="edun-mobile-menu-product-link"><a href="/id">ID</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"edun-mobile-menu-product-link"} -->
<p class="edun-mobile-menu-product-link"><a href="/worker">Worker</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:image {"align":"right","sizeSlug":"large","linkDestination":"none","className":"edun-menu-hero-image"} -->
<figure class="wp-block-image alignright size-large edun-menu-hero-image"><img src="http://test.local/wp-content/uploads/2026/01/Hero-Image-1.png" alt="Person with laptop"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->',
);
