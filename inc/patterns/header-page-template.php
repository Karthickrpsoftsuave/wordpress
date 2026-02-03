<?php
/**
 * Header Page Template Pattern
 *
 * Use this pattern ON the "Header" page to design your header
 * Then use [edun_header] shortcode on other pages to pull this content
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Header Page Template', 'edun-child'),
    'description' => __('Complete header design - use this ON the Header page', 'edun-child'),
    'categories'  => array('edun', 'header'),
    'content'     => '<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"edun-header-navbar"} -->
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
<!-- /wp:group -->',
);
