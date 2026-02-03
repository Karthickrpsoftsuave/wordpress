<?php
/**
 * Header Navbar Pattern (From Figma 1:2145)
 *
 * White header with logo, buttons, and menu toggle
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Header Navbar', 'edun-child'),
    'description' => __('Main navigation bar with logo, login, get started buttons and menu button', 'edun-child'),
    'categories'  => array('edun', 'header'),
    'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#FFFFFF"},"border":{"bottom":{"color":"#F7F6F0","width":"1px","style":"solid"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"edun-header-navbar"} -->
<div class="wp-block-group alignfull edun-header-navbar has-background" style="border-bottom-color:#F7F6F0;border-bottom-style:solid;border-bottom-width:1px;background-color:#FFFFFF;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">

<!-- wp:image {"width":"112px","height":"30px","sizeSlug":"full","linkDestination":"custom","className":"edun-logo"} -->
<figure class="wp-block-image size-full is-resized edun-logo"><a href="/"><img src="' . esc_url(get_stylesheet_directory_uri()) . '/assets/edun-logo.svg" alt="edun" style="width:112px;height:30px"/></a></figure>
<!-- /wp:image -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-buttons">

<!-- wp:button {"style":{"border":{"radius":"50px","width":"2px","style":"solid","color":"#294338"},"color":{"background":"transparent","text":"#294338"},"spacing":{"padding":{"left":"27px","right":"27px","top":"12px","bottom":"12px"}},"typography":{"fontSize":"16px","fontWeight":"700"}},"className":"edun-btn-login","fontFamily":"poppins"} -->
<div class="wp-block-button has-custom-font-size edun-btn-login has-poppins-font-family" style="font-size:16px;font-weight:700"><a class="wp-block-button__link has-text-color has-background has-border-color wp-element-button" href="/login" style="border-color:#294338;border-style:solid;border-width:2px;border-radius:50px;color:#294338;background-color:transparent;padding-top:12px;padding-right:27px;padding-bottom:12px;padding-left:27px">Login</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"50px"},"color":{"background":"#294338","text":"#F7F6F0"},"spacing":{"padding":{"left":"27px","right":"27px","top":"12px","bottom":"12px"}},"typography":{"fontSize":"16px","fontWeight":"700"}},"className":"edun-btn-get-started","fontFamily":"poppins"} -->
<div class="wp-block-button has-custom-font-size edun-btn-get-started has-poppins-font-family" style="font-size:16px;font-weight:700"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="/get-started" style="border-radius:50px;color:#F7F6F0;background-color:#294338;padding-top:12px;padding-right:27px;padding-bottom:12px;padding-left:27px">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"50px"},"color":{"background":"#294338"},"spacing":{"padding":{"left":"12px","right":"12px","top":"12px","bottom":"12px"}}},"className":"edun-menu-toggle"} -->
<div class="wp-block-button edun-menu-toggle"><a class="wp-block-button__link has-background wp-element-button" id="edun-menu-toggle" href="#" style="border-radius:50px;background-color:#294338;padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px">
<svg class="menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 7h18M3 12h18M3 17h18" stroke="#F7F6F0" stroke-width="2" stroke-linecap="round"/></svg>
<svg class="close-icon" style="display:none" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L17 17M1 17L17 1" stroke="#F7F6F0" stroke-width="2" stroke-linecap="round"/></svg>
</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->',
);
