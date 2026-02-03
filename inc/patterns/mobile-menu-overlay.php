<?php
/**
 * Mobile Menu Overlay Pattern (From Figma 1:2103)
 *
 * Full-screen green menu with navigation
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Mobile Menu Overlay', 'edun-child'),
    'description' => __('Full-screen mobile menu - Add this after Header Navbar pattern', 'edun-child'),
    'categories'  => array('edun', 'header'),
    'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"140px","right":"192px","bottom":"100px","left":"192px"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#477257"}},"layout":{"type":"default"},"className":"edun-mobile-menu-overlay"} -->
<div class="wp-block-group edun-mobile-menu-overlay has-background" id="edun-mobile-menu" style="background-color:#477257;margin-top:0;margin-bottom:0;padding-top:200px;padding-right:192px;padding-bottom:100px;padding-left:192px">

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"200px"}}}} -->
<div class="wp-block-columns">

<!-- wp:column {"width":"360px"} -->
<div class="wp-block-column" style="flex-basis:360px">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"48px","fontWeight":"700","lineHeight":"1"},"color":{"text":"#d5d5bc"},"spacing":{"margin":{"bottom":"92px"}}},"fontFamily":"poppins"} -->
<p class="has-text-color has-poppins-font-family" style="color:#d5d5bc;margin-bottom:92px;font-size:48px;font-weight:700;line-height:1"><a href="/">Home</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"48px","fontWeight":"700","lineHeight":"1"},"color":{"text":"#f7f6f0"},"spacing":{"margin":{"bottom":"92px"}}},"fontFamily":"poppins"} -->
<p class="has-text-color has-poppins-font-family" style="color:#f7f6f0;margin-bottom:92px;font-size:48px;font-weight:700;line-height:1"><a href="/about">About</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"48px","fontWeight":"700","lineHeight":"1"},"color":{"text":"#f7f6f0"}},"fontFamily":"poppins"} -->
<p class="has-text-color has-poppins-font-family" style="color:#f7f6f0;font-size:48px;font-weight:700;line-height:1"><a href="/contact">Contact</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"360px"} -->
<div class="wp-block-column" style="flex-basis:360px">

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"48px","fontWeight":"700","lineHeight":"1"},"color":{"text":"#f7f6f0"},"spacing":{"margin":{"bottom":"92px"}}},"fontFamily":"poppins"} -->
<h3 class="wp-block-heading has-text-color has-poppins-font-family" style="color:#f7f6f0;margin-bottom:92px;font-size:48px;font-weight:700;line-height:1">Products</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"32px","fontWeight":"400","lineHeight":"1"},"color":{"text":"#f7f6f0"},"spacing":{"margin":{"bottom":"68px"}}},"fontFamily":"poppins"} -->
<p class="has-text-color has-poppins-font-family" style="color:#f7f6f0;margin-bottom:68px;font-size:32px;font-weight:400;line-height:1"><a href="/core-crm">Core CRM</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"32px","fontWeight":"400","lineHeight":"1"},"color":{"text":"#f7f6f0"},"spacing":{"margin":{"bottom":"68px"}}},"fontFamily":"poppins"} -->
<p class="has-text-color has-poppins-font-family" style="color:#f7f6f0;margin-bottom:68px;font-size:32px;font-weight:400;line-height:1"><a href="/connect">Connect</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"32px","fontWeight":"400","lineHeight":"1"},"color":{"text":"#f7f6f0"},"spacing":{"margin":{"bottom":"68px"}}},"fontFamily":"poppins"} -->
<p class="has-text-color has-poppins-font-family" style="color:#f7f6f0;margin-bottom:68px;font-size:32px;font-weight:400;line-height:1"><a href="/id">ID</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"32px","fontWeight":"400","lineHeight":"1"},"color":{"text":"#f7f6f0"}},"fontFamily":"poppins"} -->
<p class="has-text-color has-poppins-font-family" style="color:#f7f6f0;font-size:32px;font-weight:400;line-height:1"><a href="/worker">Worker</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:image {"align":"right","width":"620px","sizeSlug":"large","linkDestination":"none","className":"edun-menu-hero-image"} -->
<figure class="wp-block-image1 alignright size-large is-resized edun-menu-hero-image"><img src="http://test.local/wp-content/uploads/2026/01/Hero-Image-1.png" alt="Person with laptop" style="width:620px"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->',
);
