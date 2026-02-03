<?php
/**
 * Edun Child Theme Functions
 *
 * @package Edun_Child
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme constants
define('EDUN_CHILD_VERSION', '1.0.0');
define('EDUN_CHILD_DIR', get_stylesheet_directory());
define('EDUN_CHILD_URI', get_stylesheet_directory_uri());

/**
 * Enqueue styles and scripts
 */
function edun_child_enqueue_assets() {
    // Parent theme style
    $parent_style = 'parent-style';
    $parent_theme = wp_get_theme(get_template());
    
    wp_enqueue_style(
        $parent_style,
        get_template_directory_uri() . '/style.css',
        array(),
        $parent_theme->get('Version')
    );
    
    // Child theme style
    wp_enqueue_style(
        'edun-child-style',
        get_stylesheet_uri(),
        array($parent_style),
        EDUN_CHILD_VERSION
    );
    
    // Custom header styles - Disabled (using pattern instead)
    // wp_enqueue_style(
    //     'edun-header-style',
    //     EDUN_CHILD_URI . '/css/header.css',
    //     array('edun-child-style'),
    //     EDUN_CHILD_VERSION
    // );

    // Header navbar pattern styles
    wp_enqueue_style(
        'edun-header-navbar-pattern',
        EDUN_CHILD_URI . '/css/header-navbar-pattern.css',
        array('edun-child-style'),
        EDUN_CHILD_VERSION
    );

    // Mobile menu styles
    wp_enqueue_style(
        'edun-mobile-menu',
        EDUN_CHILD_URI . '/css/mobile-menu.css',
        array('edun-child-style'),
        EDUN_CHILD_VERSION
    );

    // Google Fonts - Poppins
    wp_enqueue_style(
        'edun-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap',
        array(),
        null
    );

    // Block patterns styles
    wp_enqueue_style(
        'edun-patterns-style',
        EDUN_CHILD_URI . '/css/patterns.css',
        array('edun-child-style'),
        EDUN_CHILD_VERSION
    );

    // Testimonials styles
    wp_enqueue_style(
        'edun-testimonials-style',
        EDUN_CHILD_URI . '/css/testimonials.css',
        array('edun-child-style'),
        EDUN_CHILD_VERSION
    );

    // CRM Sidebar styles
    wp_enqueue_style(
        'edun-crm-sidebar-style',
        EDUN_CHILD_URI . '/css/crm-sidebar.css',
        array('edun-child-style'),
        EDUN_CHILD_VERSION
    );

    // Mobile menu script
    wp_enqueue_script(
        'edun-mobile-menu',
        EDUN_CHILD_URI . '/js/mobile-menu.js',
        array(),
        EDUN_CHILD_VERSION,
        true
    );

    // Testimonials slider script
    wp_enqueue_script(
        'edun-testimonials-slider',
        EDUN_CHILD_URI . '/js/testimonials-slider.js',
        array(),
        EDUN_CHILD_VERSION,
        true
    );

    // Integrations/Partners slider script
    wp_enqueue_script(
        'edun-integrations-slider',
        EDUN_CHILD_URI . '/js/integrations-slider.js',
        array(),
        EDUN_CHILD_VERSION,
        true
    );

    // CRM Sidebar script
    wp_enqueue_script(
        'edun-crm-sidebar',
        EDUN_CHILD_URI . '/js/crm-sidebar.js',
        array(),
        EDUN_CHILD_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'edun_child_enqueue_assets');

/**
 * Enqueue block editor styles
 */
function edun_child_block_editor_styles() {
    add_editor_style('css/editor-style.css');
    add_editor_style('css/patterns.css');

    wp_enqueue_style(
        'edun-google-fonts-editor',
        'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap',
        array(),
        null
    );
}
add_action('enqueue_block_editor_assets', 'edun_child_block_editor_styles');

/**
 * Load includes
 */
$block_patterns_loader_file = EDUN_CHILD_DIR . '/inc/block-patterns-loader.php';

if (file_exists($block_patterns_loader_file)) {
    require_once $block_patterns_loader_file;
}

// Load custom post types
$custom_post_types_file = EDUN_CHILD_DIR . '/inc/custom-post-types.php';
if (file_exists($custom_post_types_file)) {
    require_once $custom_post_types_file;
}

// Load testimonial meta boxes
$testimonial_meta_boxes_file = EDUN_CHILD_DIR . '/inc/testimonial-meta-boxes.php';
if (file_exists($testimonial_meta_boxes_file)) {
    require_once $testimonial_meta_boxes_file;
}

// Load testimonials section pattern/shortcode
$testimonials_pattern_file = EDUN_CHILD_DIR . '/inc/patterns/testimonials-section.php';
if (file_exists($testimonials_pattern_file)) {
    require_once $testimonials_pattern_file;
}

/**
 * Theme setup
 */
function edun_child_theme_setup() {
    // Block styles
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-line-height');
    add_theme_support('custom-spacing');
    add_theme_support('appearance-tools');

    // Editor color palette
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => __('Edun Dark Green', 'edun-child'),
            'slug'  => 'edun-dark-green',
            'color' => '#1a2e23',
        ),
        array(
            'name'  => __('Edun Medium Green', 'edun-child'),
            'slug'  => 'edun-medium-green',
            'color' => '#2d4a3e',
        ),
        array(
            'name'  => __('Edun Accent Green', 'edun-child'),
            'slug'  => 'edun-accent-green',
            'color' => '#3d6b5a',
        ),
        array(
            'name'  => __('Edun Light Green', 'edun-child'),
            'slug'  => 'edun-light-green',
            'color' => '#5a6b60',
        ),
        array(
            'name'  => __('Edun Off White', 'edun-child'),
            'slug'  => 'edun-off-white',
            'color' => '#f5f7f2',
        ),
        array(
            'name'  => __('Edun Gold', 'edun-child'),
            'slug'  => 'edun-gold',
            'color' => '#d4a853',
        ),
        array(
            'name'  => __('Edun White', 'edun-child'),
            'slug'  => 'edun-white',
            'color' => '#ffffff',
        ),
    ));
}
add_action('after_setup_theme', 'edun_child_theme_setup');

/**
 * Disable Astra default header (using pattern-based header instead)
 */
add_filter('astra_header_disable', '__return_true');

function edun_remove_astra_header() {
    remove_action('astra_header', 'astra_header_markup');
    remove_action('astra_header', 'astra_hb_header_markup');
}
add_action('after_setup_theme', 'edun_remove_astra_header', 99);

/**
 * Add body class
 */
function edun_child_body_classes($classes) {
    $classes[] = 'edun-theme';
    return $classes;
}
add_filter('body_class', 'edun_child_body_classes');
