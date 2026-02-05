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
define('EDUN_CHILD_VERSION', '1.0.4'); // Fixed: Hidden elements now visible in editor
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

    // Block patterns styles - High priority to override parent theme
    wp_enqueue_style(
        'edun-patterns-style',
        EDUN_CHILD_URI . '/css/patterns.css',
        array('edun-child-style', 'astra-theme-css'),
        EDUN_CHILD_VERSION,
        'all'
    );

    // Testimonials styles
    wp_enqueue_style(
        'edun-testimonials-style',
        EDUN_CHILD_URI . '/css/testimonials.css',
        array('edun-child-style', 'edun-patterns-style'),
        EDUN_CHILD_VERSION,
        'all'
    );

    // CRM Sidebar styles
    wp_enqueue_style(
        'edun-crm-sidebar-style',
        EDUN_CHILD_URI . '/css/crm-sidebar.css',
        array('edun-child-style', 'edun-patterns-style'),
        EDUN_CHILD_VERSION,
        'all'
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
add_action('wp_enqueue_scripts', 'edun_child_enqueue_assets', 15); // Priority 15 to load after Astra

/**
 * Enqueue block editor styles
 * IMPORTANT: editor-style.css must load LAST to override hidden elements
 */
function edun_child_block_editor_styles() {
    // Pattern CSS first (defines styles for hidden elements)
    add_editor_style('css/patterns.css');
    add_editor_style('css/testimonials.css');
    add_editor_style('css/header-navbar-pattern.css');
    add_editor_style('css/mobile-menu.css');
    add_editor_style('css/crm-sidebar.css');
    // Editor overrides LAST (makes hidden elements visible in editor)
    add_editor_style('css/editor-style.css');

    // Enqueue styles for block editor (including pattern previews)
    wp_enqueue_style(
        'edun-patterns-editor',
        EDUN_CHILD_URI . '/css/patterns.css',
        array(),
        EDUN_CHILD_VERSION
    );

    wp_enqueue_style(
        'edun-testimonials-editor',
        EDUN_CHILD_URI . '/css/testimonials.css',
        array('edun-patterns-editor'),
        EDUN_CHILD_VERSION
    );

    wp_enqueue_style(
        'edun-header-navbar-editor',
        EDUN_CHILD_URI . '/css/header-navbar-pattern.css',
        array('edun-patterns-editor'),
        EDUN_CHILD_VERSION
    );

    wp_enqueue_style(
        'edun-mobile-menu-editor',
        EDUN_CHILD_URI . '/css/mobile-menu.css',
        array('edun-patterns-editor'),
        EDUN_CHILD_VERSION
    );

    wp_enqueue_style(
        'edun-crm-sidebar-editor',
        EDUN_CHILD_URI . '/css/crm-sidebar.css',
        array('edun-patterns-editor'),
        EDUN_CHILD_VERSION
    );

    // Editor overrides - MUST be last to show hidden elements
    wp_enqueue_style(
        'edun-editor-overrides',
        EDUN_CHILD_URI . '/css/editor-style.css',
        array('edun-mobile-menu-editor', 'edun-crm-sidebar-editor'),
        EDUN_CHILD_VERSION
    );

    // Google Fonts for editor
    wp_enqueue_style(
        'edun-google-fonts-editor',
        'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap',
        array(),
        null
    );

    // Poppins font for editor
    wp_enqueue_style(
        'edun-google-fonts-poppins-editor',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap',
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

/**
 * Force enqueue pattern styles inline if not loading
 * This is a fallback to ensure styles always load
 */
function edun_force_pattern_styles() {
    // Only add inline styles if patterns.css isn't loading
    $patterns_css_url = EDUN_CHILD_URI . '/css/patterns.css?ver=' . EDUN_CHILD_VERSION;
    echo '<!-- Edun Pattern CSS: ' . esc_url($patterns_css_url) . ' -->' . "\n";
}
add_action('wp_head', 'edun_force_pattern_styles', 100);

/**
 * Debug: Check pattern registration
 * Remove this after patterns start showing
 */
function edun_debug_patterns() {
    if (is_admin() && current_user_can('manage_options')) {
        $patterns_dir = get_stylesheet_directory() . '/inc/patterns/';
        $count = 0;

        $files = glob($patterns_dir . '*.php');
        if ($files) {
            foreach ($files as $file) {
                if (file_exists($file)) {
                    $count++;
                }
            }
        }

        echo '<!-- Edun Patterns Found: ' . $count . ' files -->';
    }
}
add_action('admin_head', 'edun_debug_patterns');

/**
 * ==========================================================
 * REUSABLE HEADER/FOOTER SHORTCODES
 * ==========================================================
 *
 * Usage:
 * 1. Create a page called "Header" (slug: header) - design your header there
 * 2. Create a page called "Footer" (slug: footer) - design your footer there
 * 3. Use [edun_header] and [edun_footer] shortcodes on any page
 *
 * When you edit the Header or Footer page, all pages using
 * the shortcode will automatically update!
 */

/**
 * Header Shortcode - [edun_header]
 * Displays content from a page with slug "header"
 */
function edun_header_shortcode($atts) {
    $atts = shortcode_atts(array(
        'slug' => 'header', // Default page slug
    ), $atts, 'edun_header');

    return edun_get_page_content_by_slug($atts['slug'], 'header');
}
add_shortcode('edun_header', 'edun_header_shortcode');

/**
 * Footer Shortcode - [edun_footer]
 * Displays content from a page with slug "footer"
 */
function edun_footer_shortcode($atts) {
    $atts = shortcode_atts(array(
        'slug' => 'footer', // Default page slug
    ), $atts, 'edun_footer');

    return edun_get_page_content_by_slug($atts['slug'], 'footer');
}
add_shortcode('edun_footer', 'edun_footer_shortcode');

/**
 * Generic Page Content Shortcode - [edun_page_content slug="page-slug"]
 * Displays content from any page by its slug
 */
function edun_page_content_shortcode($atts) {
    $atts = shortcode_atts(array(
        'slug' => '', // Required page slug
    ), $atts, 'edun_page_content');

    if (empty($atts['slug'])) {
        return '<!-- Edun: Please specify a page slug -->';
    }

    return edun_get_page_content_by_slug($atts['slug'], 'content');
}
add_shortcode('edun_page_content', 'edun_page_content_shortcode');

/**
 * Helper function to get page content by slug
 *
 * @param string $slug The page slug
 * @param string $type The type of content (header, footer, content)
 * @return string The rendered page content
 */
function edun_get_page_content_by_slug($slug, $type = 'content') {
    // Get the page by slug
    $page = get_page_by_path($slug);

    if (!$page) {
        if (current_user_can('edit_posts')) {
            return '<!-- Edun: No page found with slug "' . esc_html($slug) . '". Please create a page with this slug. -->';
        }
        return '';
    }

    // Don't show if page is not published
    if ($page->post_status !== 'publish') {
        if (current_user_can('edit_posts')) {
            return '<!-- Edun: Page "' . esc_html($slug) . '" is not published. -->';
        }
        return '';
    }

    // Get the content and apply block rendering
    $content = $page->post_content;

    // Parse and render blocks
    $content = do_blocks($content);

    // Apply content filters (shortcodes, etc.)
    $content = do_shortcode($content);

    // Use semantic HTML elements and ensure full width
    $wrapper_class = 'edun-' . esc_attr($type) . '-wrapper';
    $wrapper_style = 'width:100%;max-width:100%;margin:0;padding:0;display:block;';

    // Use semantic HTML tags for header/footer
    if ($type === 'header') {
        return '<header class="' . $wrapper_class . '" style="' . $wrapper_style . '">' . $content . '</header>';
    } elseif ($type === 'footer') {
        return '<footer class="' . $wrapper_class . '" style="' . $wrapper_style . '">' . $content . '</footer>';
    }

    return '<div class="' . $wrapper_class . '" style="' . $wrapper_style . '">' . $content . '</div>';
}

/**
 * ==========================================================
 * REDIRECT HEADER/FOOTER PAGES TO HOME
 * ==========================================================
 *
 * Prevents direct access to header/footer template pages
 * while still allowing them to be edited in WordPress admin
 */
function edun_redirect_template_pages() {
    // Don't redirect in admin or when editing
    if (is_admin() || is_customize_preview()) {
        return;
    }

    // Don't redirect when previewing (checking for preview parameter)
    if (isset($_GET['preview']) && current_user_can('edit_posts')) {
        return;
    }

    // Get the current page
    global $post;

    if (!$post) {
        return;
    }

    // List of template page slugs to redirect
    $template_pages = array('header', 'footer');

    // Check if current page is a template page
    if (is_page() && in_array($post->post_name, $template_pages)) {
        // Redirect to home page
        wp_redirect(home_url('/'), 301);
        exit;
    }
}
add_action('template_redirect', 'edun_redirect_template_pages');
