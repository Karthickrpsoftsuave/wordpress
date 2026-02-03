<?php
/**
 * Navbar Pattern
 *
 * Main navigation bar with logo and buttons
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Navbar', 'edun-child'),
    'description' => __('Main navigation bar with logo, login and get started buttons', 'edun-child'),
    'categories'  => array('edun', 'header'),
    'content'     => '<!-- wp:group {"align":"full","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"edun-navbar"} -->
<div class="wp-block-group alignfull edun-navbar">

<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"edun-logo"} -->
<figure class="wp-block-image size-full edun-logo"><a href="/"><img src="" alt="edun"/></a></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className":"edun-navbar-buttons"} -->
<div class="wp-block-buttons edun-navbar-buttons">

<!-- wp:button {"className":"edun-navbar-btn-login"} -->
<div class="wp-block-button edun-navbar-btn-login"><a class="wp-block-button__link wp-element-button">Login</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"edun-navbar-btn-get-started"} -->
<div class="wp-block-button edun-navbar-btn-get-started"><a class="wp-block-button__link wp-element-button">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"edun-menu-toggle"} -->
<div class="wp-block-button edun-menu-toggle"><a class="wp-block-button__link wp-element-button">☰</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->',
);
