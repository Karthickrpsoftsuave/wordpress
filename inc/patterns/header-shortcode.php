<?php
/**
 * Header Shortcode Pattern
 *
 * Inserts [edun_header] shortcode to pull content from the "Header" page
 * Use this on all your pages to display the header
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Header Shortcode', 'edun-child'),
    'description' => __('Pulls header content from the Header page - edit once, updates everywhere', 'edun-child'),
    'categories'  => array('edun'),
    'content'     => '<!-- wp:shortcode -->
[edun_header]
<!-- /wp:shortcode -->',
);
