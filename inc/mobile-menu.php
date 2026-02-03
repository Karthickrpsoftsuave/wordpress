<?php
/**
 * Mobile Menu Overlay
 *
 * Full-screen mobile menu that opens when menu button is clicked
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add mobile menu to footer
 */
function edun_add_mobile_menu() {
    ?>
    <!-- Mobile Menu Overlay -->
    <div class="edun-mobile-menu-overlay" id="edun-mobile-menu" aria-hidden="true">
        <!-- Background with decorative elements -->
        <div class="edun-mobile-menu-bg"></div>

        <!-- Menu Content -->
        <div class="edun-mobile-menu-inner">

            <!-- Top Header with Logo and Close Button -->
            <div class="edun-mobile-menu-header">
                <!-- Logo -->
                <div class="edun-mobile-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/edun-logo-white.svg" alt="edun" width="112" height="30">
                    </a>
                </div>

                <!-- Buttons and Close -->
                <div class="edun-mobile-menu-header-actions">
                    <a href="<?php echo esc_url(home_url('/login')); ?>" class="edun-mobile-btn edun-mobile-btn-outline">
                        Login
                    </a>
                    <a href="<?php echo esc_url(home_url('/get-started')); ?>" class="edun-mobile-btn edun-mobile-btn-filled">
                        Get started
                    </a>
                    <button class="edun-mobile-menu-close" id="edun-menu-close" aria-label="Close menu">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L17 17M1 17L17 1" stroke="#F7F6F0" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Menu Columns -->
            <div class="edun-mobile-menu-content">

                <!-- Left Column - Main Links -->
                <div class="edun-mobile-menu-main">
                    <nav>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Right Column - Products -->
                <div class="edun-mobile-menu-products">
                    <h3>Products</h3>
                    <nav>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/core-crm')); ?>">Core CRM</a></li>
                            <li><a href="<?php echo esc_url(home_url('/connect')); ?>">Connect</a></li>
                            <li><a href="<?php echo esc_url(home_url('/id')); ?>">ID</a></li>
                            <li><a href="<?php echo esc_url(home_url('/worker')); ?>">Worker</a></li>
                        </ul>
                    </nav>
                </div>

            </div>

            <!-- Hero Image with Decorations -->
            <div class="image-position-hamburger edun-mobile-menu-image">
                <img src="http://test.local/wp-content/uploads/2026/01/Hero-Image-1.png" alt="Person using laptop2">
            </div>

        </div>
    </div>
    <?php
}
add_action('wp_footer', 'edun_add_mobile_menu');
