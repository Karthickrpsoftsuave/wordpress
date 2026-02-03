<?php
/**
 * Pattern Debug Script
 *
 * Add this to your page template temporarily to debug patterns
 * Usage: Add this code to your page and view the page source
 */

// Run this in WordPress
if (defined('ABSPATH')) {
    echo "<!-- PATTERN DEBUG -->\n";
    echo "<!-- Checking pattern registration... -->\n";

    $patterns_dir = get_stylesheet_directory() . '/inc/patterns/';
    $pattern_files = array(
        'navbar', 'header-navbar', 'mobile-menu-overlay', 'hero-section',
        'what-is-edun', 'who-we-are-section', 'core-crm-feature', 'connect-feature',
        'your-partner-section', 'integrations-slider', 'testimonials',
        'feature-section-with-image', 'footer', 'core-crm-sidebar'
    );

    echo "<!-- Pattern Files Check: -->\n";
    foreach ($pattern_files as $pattern) {
        $file = $patterns_dir . $pattern . '.php';
        $exists = file_exists($file) ? 'EXISTS' : 'MISSING';
        echo "<!-- $pattern.php: $exists -->\n";

        if (file_exists($file)) {
            $config = include $file;
            if (is_array($config) && !empty($config['content'])) {
                echo "<!-- $pattern: VALID CONFIG -->\n";
            } else {
                echo "<!-- $pattern: INVALID CONFIG -->\n";
            }
        }
    }

    // Check if patterns are registered
    if (function_exists('WP_Block_Patterns_Registry')) {
        $registry = WP_Block_Patterns_Registry::get_instance();
        $all_patterns = $registry->get_all_registered();

        echo "<!-- Total Registered Patterns: " . count($all_patterns) . " -->\n";
        echo "<!-- Edun Patterns: -->\n";

        foreach ($all_patterns as $pattern) {
            if (strpos($pattern['name'], 'edun/') === 0) {
                echo "<!-- ✓ " . $pattern['name'] . " -->\n";
            }
        }
    }

    echo "<!-- END PATTERN DEBUG -->\n";
}
