<?php
/**
 * Header Shortcode Pattern
 *
 * Inserts [edun_header] shortcode - pulls content from the "Header" page
 * Create a page with slug "header" and design your header there
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Header (Shortcode)', 'edun-child'),
    'description' => __('Inserts [edun_header] - pulls content from Header page', 'edun-child'),
    'categories'  => array('edun', 'header'),
    'content'     => '<!-- wp:shortcode -->
[edun_header]
<!-- /wp:shortcode -->

<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"edun-header-navbar"} -->
<div class="wp-block-group alignfull edun-header-navbar">

<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"edun-logo"} -->
<figure class="wp-block-image size-full edun-logo"><a href="/"><img src="' . esc_url(get_stylesheet_directory_uri()) . '/assets/edun-logo.svg" alt="edun"/></a></figure>
<!-- /wp:image -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"className":"edun-header-buttons"} -->
<div class="wp-block-buttons edun-header-buttons">

<!-- wp:button {"className":"edun-btn-login"} -->
<div class="wp-block-button edun-btn-login"><a class="wp-block-button__link wp-element-button" href="/login">Login</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"edun-btn-get-started"} -->
<div class="wp-block-button edun-btn-get-started"><a class="wp-block-button__link wp-element-button" href="/get-started">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"edun-menu-toggle"} -->
<div class="wp-block-button edun-menu-toggle"><a class="wp-block-button__link wp-element-button" id="edun-menu-toggle" href="#">
<svg class="menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 7h18M3 12h18M3 17h18" stroke="#F7F6F0" stroke-width="2" stroke-linecap="round"/></svg>
<svg class="close-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L17 17M1 17L17 1" stroke="#F7F6F0" stroke-width="2" stroke-linecap="round"/></svg>
</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"edun-mobile-menu-overlay"} -->
<div class="wp-block-group edun-mobile-menu-overlay">

<!-- wp:group {"className":"edun-mobile-menu-content"} -->
<div class="wp-block-group edun-mobile-menu-content">

<!-- wp:navigation {"className":"edun-mobile-nav"} -->
<!-- wp:navigation-link {"label":"Home","url":"/"} /-->
<!-- wp:navigation-link {"label":"About","url":"/about"} /-->
<!-- wp:navigation-link {"label":"Products","url":"/products"} /-->
<!-- wp:navigation-link {"label":"Partners","url":"/partners"} /-->
<!-- wp:navigation-link {"label":"Contact","url":"/contact"} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"className":"edun-mobile-menu-buttons"} -->
<div class="wp-block-buttons edun-mobile-menu-buttons">

<!-- wp:button {"className":"edun-mobile-btn-login"} -->
<div class="wp-block-button edun-mobile-btn-login"><a class="wp-block-button__link wp-element-button" href="/login">Login</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"edun-mobile-btn-get-started"} -->
<div class="wp-block-button edun-mobile-btn-get-started"><a class="wp-block-button__link wp-element-button" href="/get-started">Get started</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->',
);
