<?php
/**
 * Edun Custom Header
 * 
 * Add this file to your child theme folder as: inc/custom-header.php
 * Then include it in functions.php
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Remove default Astra header
 */
function edun_remove_astra_header() {
    remove_action('astra_header', 'astra_header_markup');
}
add_action('after_setup_theme', 'edun_remove_astra_header', 11);

/**
 * Add custom Edun header
 */
function edun_custom_header() {
    ?>
    <header id="edun-header" class="edun-header">
        <div class="edun-header-container">
            
            <!-- Logo -->
            <div class="edun-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php if (has_custom_logo()): ?>
                        <?php the_custom_logo(); ?>
                    <?php else: ?>
                        <span class="edun-logo-text">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="14" fill="#2d4a3e"/>
                                <path d="M10 16C10 12.5 13 10 16 10C14 12 14 14 14 16C14 18 14 20 16 22C13 22 10 19.5 10 16Z" fill="white"/>
                            </svg>
                            <span>edun</span>
                        </span>
                    <?php endif; ?>
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="edun-nav-desktop">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'edun-primary',
                    'container'      => false,
                    'menu_class'     => 'edun-menu',
                    'fallback_cb'    => 'edun_fallback_menu',
                    'depth'          => 2,
                ));
                ?>
            </nav>
            
            <!-- Header Buttons -->
            <div class="edun-header-buttons">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('login'))); ?>" class="edun-btn edun-btn-outline">
                    Login
                </a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('get-started'))); ?>" class="edun-btn edun-btn-primary">
                    Get started
                </a>
                
                <!-- Hamburger Menu Button -->
                <button class="edun-menu-toggle" id="edun-menu-toggle" aria-label="Open menu" aria-expanded="false">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>
            
        </div>
    </header>
    
    <!-- Mobile Menu Overlay -->
    <div class="edun-mobile-menu" id="edun-mobile-menu" aria-hidden="true">
        <div class="edun-mobile-menu-inner">
            
            <!-- Mobile Header -->
            <div class="edun-mobile-header">
                <div class="edun-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <span class="edun-logo-text edun-logo-white">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="14" fill="white"/>
                                <path d="M10 16C10 12.5 13 10 16 10C14 12 14 14 14 16C14 18 14 20 16 22C13 22 10 19.5 10 16Z" fill="#2d4a3e"/>
                            </svg>
                            <span>edun</span>
                        </span>
                    </a>
                </div>
                
                <div class="edun-mobile-header-buttons">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('login'))); ?>" class="edun-btn edun-btn-outline-white">
                        Login
                    </a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('get-started'))); ?>" class="edun-btn edun-btn-white">
                        Get started
                    </a>
                    
                    <!-- Close Button -->
                    <button class="edun-menu-close" id="edun-menu-close" aria-label="Close menu">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18M6 6L18 18" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation -->
            <nav class="edun-mobile-nav">
                <div class="edun-mobile-nav-columns">
                    
                    <!-- Main Links Column -->
                    <div class="edun-mobile-nav-main">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'edun-mobile-main',
                            'container'      => false,
                            'menu_class'     => 'edun-mobile-menu-main',
                            'fallback_cb'    => 'edun_fallback_mobile_main',
                            'depth'          => 1,
                        ));
                        ?>
                    </div>
                    
                    <!-- Products Column -->
                    <div class="edun-mobile-nav-products">
                        <span class="edun-mobile-nav-title">Products</span>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'edun-mobile-products',
                            'container'      => false,
                            'menu_class'     => 'edun-mobile-menu-products',
                            'fallback_cb'    => 'edun_fallback_mobile_products',
                            'depth'          => 1,
                        ));
                        ?>
                    </div>
                    
                </div>
            </nav>
            
            <!-- Mobile Menu Image -->
            <div class="image-position-hamburger edun-mobile-menu-image">
                <img src="http://test.local/wp-content/uploads/2026/01/Hero-Image-1.png" alt="Person using laptop1">
            </div>
            
        </div>
        
        <!-- Decorative Background Elements -->
        <div class="edun-mobile-menu-bg">
            <div class="edun-bg-shape edun-bg-shape-1"></div>
            <div class="edun-bg-shape edun-bg-shape-2"></div>
            <div class="edun-bg-circles"></div>
        </div>
    </div>
    <?php
}
add_action('astra_header', 'edun_custom_header');

/**
 * Register Custom Menu Locations
 */
function edun_register_menus() {
    register_nav_menus(array(
        'edun-primary'         => __('Edun Primary Menu', 'edun-child'),
        'edun-mobile-main'     => __('Edun Mobile - Main Links', 'edun-child'),
        'edun-mobile-products' => __('Edun Mobile - Products', 'edun-child'),
    ));
}
add_action('init', 'edun_register_menus');

/**
 * Fallback menu for primary navigation
 */
function edun_fallback_menu() {
    echo '<ul class="edun-menu">';
    echo '<li><a href="' . home_url('/') . '">Home</a></li>';
    echo '<li><a href="#">About</a></li>';
    echo '<li><a href="#">Contact</a></li>';
    echo '</ul>';
}

/**
 * Fallback menu for mobile main links
 */
function edun_fallback_mobile_main() {
    echo '<ul class="edun-mobile-menu-main">';
    echo '<li><a href="' . home_url('/') . '">Home</a></li>';
    echo '<li><a href="#">About</a></li>';
    echo '<li><a href="#">Contact</a></li>';
    echo '</ul>';
}

/**
 * Fallback menu for mobile products
 */
function edun_fallback_mobile_products() {
    echo '<ul class="edun-mobile-menu-products">';
    echo '<li><a href="#">Core CRM</a></li>';
    echo '<li><a href="#">Connect</a></li>';
    echo '<li><a href="#">ID</a></li>';
    echo '<li><a href="#">Worker</a></li>';
    echo '</ul>';
}

/**
 * Enqueue header scripts
 */
function edun_header_scripts() {
    wp_enqueue_script(
        'edun-header',
        get_stylesheet_directory_uri() . '/js/header.js',
        array(),
        EDUN_CHILD_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'edun_header_scripts');
