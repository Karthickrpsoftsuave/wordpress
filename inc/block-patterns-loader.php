<?php
/**
 * Block Patterns Loader
 *
 * Register custom Gutenberg block patterns from individual pattern files
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register pattern category
 */
function edun_register_pattern_category() {
    if (!function_exists('register_block_pattern_category')) {
        return;
    }

    register_block_pattern_category(
        'edun',
        array(
            'label' => __('Edun Sections', 'edun-child'),
        )
    );

    register_block_pattern_category(
        'testimonials',
        array(
            'label' => __('Testimonials', 'edun-child'),
        )
    );
}
add_action('init', 'edun_register_pattern_category');

/**
 * Register all block patterns from individual files
 */
function edun_register_block_patterns_from_files() {
    if (!function_exists('register_block_pattern')) {
        return;
    }

    // Define pattern files
    $pattern_files = array(
        'navbar'                      => 'navbar.php',
        'header-navbar'               => 'header-navbar.php',
        'header-page-template'        => 'header-page-template.php',
        'header-shortcode'            => 'header-shortcode.php',
        'mobile-menu-overlay'         => 'mobile-menu-overlay.php',
        'hero-section'                => 'hero-section.php',
        'what-is-edun'                => 'what-is-edun.php',
        'who-we-are-section'          => 'who-we-are-section.php',
        'core-crm-feature'            => 'core-crm-feature.php',
        'connect-feature'             => 'connect-feature.php',
        'your-partner-section'        => 'your-partner-section.php',
        'integrations-slider'         => 'integrations-slider.php',
        'testimonials'                => 'testimonials.php',
        'feature-section-with-image'  => 'feature-section-with-image.php',
        'footer'                      => 'footer.php',
        'footer-page-template'        => 'footer-page-template.php',
        'footer-shortcode'            => 'footer-shortcode.php',
        'core-crm-sidebar'            => 'core-crm-sidebar.php',
    );

    // Pattern files directory
    $patterns_dir = get_stylesheet_directory() . '/inc/patterns/';

    // Loop through pattern files and register them
    foreach ($pattern_files as $pattern_slug => $pattern_file) {
        $pattern_path = $patterns_dir . $pattern_file;

        // Check if pattern file exists
        if (!file_exists($pattern_path)) {
            // Log error in debug mode
            if (defined('WP_DEBUG') && WP_DEBUG) {
                error_log('Edun Pattern Error: Pattern file not found - ' . $pattern_path);
            }
            continue;
        }

        // Include the pattern file and get its config
        $pattern_config = include $pattern_path;

        // Validate pattern config
        if (!is_array($pattern_config) || empty($pattern_config['content'])) {
            if (defined('WP_DEBUG') && WP_DEBUG) {
                error_log('Edun Pattern Error: Invalid pattern config in - ' . $pattern_file);
            }
            continue;
        }

        // Register the pattern
        register_block_pattern(
            'edun/' . $pattern_slug,
            $pattern_config
        );
    }
}
add_action('init', 'edun_register_block_patterns_from_files');
