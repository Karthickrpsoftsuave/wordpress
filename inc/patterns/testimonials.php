<?php
/**
 * Testimonials Section Block Pattern
 *
 * A draggable block pattern for the testimonials carousel
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Testimonials Section', 'edun-child'),
    'description' => __('Customer testimonials carousel with star ratings (full-width green section)', 'edun-child'),
    'categories'  => array('edun', 'featured', 'testimonials'),
    'keywords'    => array('testimonials', 'reviews', 'customers', 'carousel', 'slider'),
    'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"testimonials-wrapper"} -->
<div class="wp-block-group alignfull testimonials-wrapper" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

<!-- wp:shortcode -->
[edun_testimonials]
<!-- /wp:shortcode -->

</div>
<!-- /wp:group -->'
);
