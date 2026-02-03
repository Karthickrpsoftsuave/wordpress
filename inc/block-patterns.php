<?php
/**
 * Edun Block Patterns
 * 
 * Register custom Gutenberg block patterns
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
}
add_action('init', 'edun_register_pattern_category');

/**
 * Register all block patterns
 */
function edun_register_block_patterns() {
    if (!function_exists('register_block_pattern')) {
        return;
    }

    // ============================================
    // 1. HERO SECTION
    // ============================================
    register_block_pattern(
        'edun/hero-section',
        array(
            'title'       => __('Edun Hero Section', 'edun-child'),
            'description' => __('Main hero with background image', 'edun-child'),
            'categories'  => array('edun', 'featured'),
            'content'     => '<!-- wp:cover {"dimRatio":0,"minHeight":600,"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"40px","right":"40px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:80px;padding-right:40px;padding-bottom:80px;padding-left:40px;min-height:600px">
<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
<div class="wp-block-cover__inner-container">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group">

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"color":{"background":"#ffffffeb"},"border":{"radius":"4px"}},"className":"edun-hero-content-box"} -->
<div class="wp-block-group edun-hero-content-box has-background" style="border-radius:4px;background-color:#ffffffeb;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"},"color":{"text":"#2d4a3e"}}} -->
<p class="has-text-color" style="color:#2d4a3e;font-size:14px">Say hello to edun</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"42px","fontWeight":"700","lineHeight":"1.15"},"color":{"text":"#1a2e23"}}} -->
<h1 class="has-text-color" style="color:#1a2e23;font-size:42px;font-weight:700;line-height:1.15">Powering the future of workforce management</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","lineHeight":"1.7"},"color":{"text":"#4a5d52"}}} -->
<p class="has-text-color" style="color:#4a5d52;font-size:15px;line-height:1.7">Edun is the smarter, faster way to manage your entire workforce ecosystem. Built for agencies, MATs, and education professionals, edun connects every part of the supply chain through one sleek, intuitive platform.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">

<!-- wp:button {"style":{"border":{"radius":"6px"},"color":{"background":"#2d4a3e"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="border-radius:6px;background-color:#2d4a3e">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"color":{"text":"#1a2e23"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" style="color:#1a2e23">About edun</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

</div>
</div>
<!-- /wp:cover -->',
        )
    );

    // ============================================
    // 2. WHAT IS EDUN SECTION
    // ============================================
    register_block_pattern(
        'edun/what-is-edun',
        array(
            'title'       => __('What is Edun Section', 'edun-child'),
            'description' => __('Centered intro section', 'edun-child'),
            'categories'  => array('edun'),
            'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"40px","right":"40px"}},"color":{"background":"#ffffff"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:100px;padding-right:40px;padding-bottom:100px;padding-left:40px">

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"13px"},"color":{"text":"#5a6b60"}}} -->
<p class="has-text-align-center has-text-color" style="color:#5a6b60;font-size:13px">What is edun?</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"36px","fontWeight":"700"},"color":{"text":"#1a2e23"}}} -->
<h2 class="has-text-align-center has-text-color" style="color:#1a2e23;font-size:36px;font-weight:700">Simply, technology connected</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","lineHeight":"1.8"},"color":{"text":"#5a6b60"}}} -->
<p class="has-text-align-center has-text-color" style="color:#5a6b60;font-size:16px;line-height:1.8">Edun is the complete end-to-end workforce management tool. Our platform connects every part of the education and healthcare supply chain – temporary or permanent – with smart, scalable technology.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":"6px","width":"1px","color":"#1a2e23"},"color":{"background":"#ffffff","text":"#1a2e23"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-color:#1a2e23;border-width:1px;border-radius:6px;color:#1a2e23;background-color:#ffffff">See all products</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->',
        )
    );

    // ============================================
    // 3. FEATURE - IMAGE RIGHT
    // ============================================
    register_block_pattern(
        'edun/feature-image-right',
        array(
            'title'       => __('Feature Section - Image Right', 'edun-child'),
            'description' => __('Text left, image right', 'edun-child'),
            'categories'  => array('edun'),
            'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"40px","right":"40px"}},"color":{"background":"#f5f7f2"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f5f7f2;padding-top:100px;padding-right:40px;padding-bottom:100px;padding-left:40px">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"},"color":{"text":"#5a6b60"}}} -->
<p class="has-text-color" style="color:#5a6b60;font-size:13px">Core CRM</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontWeight":"700"},"color":{"text":"#1a2e23"}}} -->
<h2 class="has-text-color" style="color:#1a2e23;font-size:32px;font-weight:700">The #1 CRM for education and healthcare agencies</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","lineHeight":"1.8"},"color":{"text":"#5a6b60"}}} -->
<p class="has-text-color" style="color:#5a6b60;font-size:15px;line-height:1.8">Edun\'s Core CRM is the markets number one CRM for Education &amp; Healthcare Recruitment agencies to prosper, built and scaled with compliance heavy environments in mind.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":"6px","width":"1px","color":"#1a2e23"},"color":{"background":"#ffffff","text":"#1a2e23"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-color:#1a2e23;border-width:1px;border-radius:6px;color:#1a2e23;background-color:#ffffff">Discover more</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large"><img src="" alt="Dashboard Preview" style="border-radius:12px"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
        )
    );

    // ============================================
    // 4. FEATURE - IMAGE LEFT
    // ============================================
    register_block_pattern(
        'edun/feature-image-left',
        array(
            'title'       => __('Feature Section - Image Left', 'edun-child'),
            'description' => __('Image left, text right', 'edun-child'),
            'categories'  => array('edun'),
            'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"40px","right":"40px"}},"color":{"background":"#ffffff"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:100px;padding-right:40px;padding-bottom:100px;padding-left:40px">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large"><img src="" alt="Dashboard Preview" style="border-radius:12px"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"},"color":{"text":"#5a6b60"}}} -->
<p class="has-text-color" style="color:#5a6b60;font-size:13px">Connect</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontWeight":"700"},"color":{"text":"#1a2e23"}}} -->
<h2 class="has-text-color" style="color:#1a2e23;font-size:32px;font-weight:700">Power your multi academy trust with workforce intelligence</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","lineHeight":"1.8"},"color":{"text":"#5a6b60"}}} -->
<p class="has-text-color" style="color:#5a6b60;font-size:15px;line-height:1.8">Edun\'s Connect is a MAT\'s new best friend. Harness workforce management like never before, report instantly and reach out to agency partners through deep integration.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":"6px","width":"1px","color":"#1a2e23"},"color":{"background":"#ffffff","text":"#1a2e23"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-color:#1a2e23;border-width:1px;border-radius:6px;color:#1a2e23;background-color:#ffffff">Discover more</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
        )
    );

    // ============================================
    // 5. TESTIMONIALS (Shortcode Block Pattern)
    // ============================================
    register_block_pattern(
        'edun/testimonials',
        array(
            'title'       => __('Testimonials Slider', 'edun-child'),
            'description' => __('Dynamic testimonials slider from admin', 'edun-child'),
            'categories'  => array('edun'),
            'content'     => '<!-- wp:shortcode -->
[edun_testimonials]
<!-- /wp:shortcode -->',
        )
    );

    // ============================================
    // 6. ABOUT/PARTNER SECTION
    // ============================================
    register_block_pattern(
        'edun/about-partner',
        array(
            'title'       => __('About & Partner Section', 'edun-child'),
            'description' => __('Device mockups with CTA', 'edun-child'),
            'categories'  => array('edun'),
            'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"40px","right":"40px"}},"color":{"background":"#f5f7f2"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f5f7f2;padding-top:100px;padding-right:40px;padding-bottom:100px;padding-left:40px">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="" alt="Edun on multiple devices"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"},"color":{"text":"#5a6b60"}}} -->
<p class="has-text-color" style="color:#5a6b60;font-size:13px">Your partner</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontWeight":"700"},"color":{"text":"#1a2e23"}}} -->
<h2 class="has-text-color" style="color:#1a2e23;font-size:32px;font-weight:700">Want to know more about us?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","lineHeight":"1.8"},"color":{"text":"#5a6b60"}}} -->
<p class="has-text-color" style="color:#5a6b60;font-size:15px;line-height:1.8">Edun\'s Connect is a MAT\'s new best friend. Harness workforce management like never before, report instantly and reach out to agency partners through deep integration.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":"6px","width":"1px","color":"#1a2e23"},"color":{"background":"#ffffff","text":"#1a2e23"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-color:#1a2e23;border-width:1px;border-radius:6px;color:#1a2e23;background-color:#ffffff">About edun</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"color":{"text":"#1a2e23"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" style="color:#1a2e23;text-decoration:underline">See partners</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
        )
    );

    // ============================================
    // 7. SIMPLE CTA
    // ============================================
    register_block_pattern(
        'edun/simple-cta',
        array(
            'title'       => __('Simple Call to Action', 'edun-child'),
            'description' => __('Centered CTA section', 'edun-child'),
            'categories'  => array('edun'),
            'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}},"color":{"background":"#ffffff"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:80px;padding-bottom:80px">

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"32px","fontWeight":"700"},"color":{"text":"#1a2e23"}}} -->
<h2 class="has-text-align-center has-text-color" style="color:#1a2e23;font-size:32px;font-weight:700">Ready to get started?</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":"6px"},"color":{"background":"#2d4a3e"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="border-radius:6px;background-color:#2d4a3e">Get Started Now</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->',
        )
    );
}
add_action('init', 'edun_register_block_patterns');
