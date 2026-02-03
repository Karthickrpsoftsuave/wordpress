<?php
/**
 * Footer Shortcode Pattern
 *
 * Inserts [edun_footer] shortcode to pull content from the "Footer" page
 * Use this on all your pages to display the footer
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Footer Shortcode', 'edun-child'),
    'description' => __('Pulls footer content from the Footer page - edit once, updates everywhere', 'edun-child'),
    'categories'  => array('edun'),
    'content'     => '<!-- wp:shortcode -->
[edun_footer]
<!-- /wp:shortcode -->',
);
