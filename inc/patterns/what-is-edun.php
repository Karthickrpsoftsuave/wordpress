<?php
/**
 * What is edun Section Pattern
 *
 * Centered intro section explaining what edun is
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('What is edun Section', 'edun-child'),
    'description' => __('Centered content section with headline and description', 'edun-child'),
    'categories'  => array('edun'),
    'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1129px"},"className":"edun-what-is-section edun-wave-divider-bottom-white"} -->
<div class="wp-block-group alignfull edun-what-is-section edun-wave-divider-bottom-white">

<!-- wp:paragraph {"align":"center","className":"edun-what-is-label"} -->
<p class="has-text-align-center edun-what-is-label">What is edun?</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"edun-what-is-title"} -->
<h2 class="has-text-align-center edun-what-is-title">Simply, technology connected</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"edun-what-is-description"} -->
<p class="has-text-align-center edun-what-is-description">Edun is the complete end-to-end workforce management tool. Our platform connects every part of the eduction and healthcare supply chain – temporary or permenant – with smart, scalable technology.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"className":"edun-what-is-buttons"} -->
<div class="wp-block-buttons edun-what-is-buttons">

<!-- wp:button {"className":"edun-what-is-btn"} -->
<div class="wp-block-button edun-what-is-btn"><a class="wp-block-button__link wp-element-button">See all products</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->',
);
