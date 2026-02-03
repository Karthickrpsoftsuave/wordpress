<?php
/**
 * Navbar Pattern
 *
 * Main navigation bar with logo and buttons
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Navbar', 'edun-child'),
    'description' => __('Main navigation bar with logo, login and get started buttons', 'edun-child'),
    'categories'  => array('edun', 'header'),
    'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"color":{"background":"#FFFFFF"},"border":{"bottom":{"color":"#F7F6F0","width":"1px","style":"solid"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"edun-navbar"} -->
<div class="wp-block-group alignfull edun-navbar has-background" style="border-bottom-color:#F7F6F0;border-bottom-style:solid;border-bottom-width:1px;background-color:#FFFFFF;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">

<!-- wp:image {"width":"112px","height":"30px","sizeSlug":"full","linkDestination":"custom","className":"edun-logo"} -->
<figure class="wp-block-image size-full is-resized edun-logo"><a href="/"><img src="" alt="edun" style="width:112px;height:30px"/></a></figure>
<!-- /wp:image -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-buttons">

<!-- wp:button {"style":{"border":{"radius":"50px","width":"2px","color":"#294338","style":"solid"},"color":{"background":"transparent","text":"#294338"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"27px","right":"27px"}},"typography":{"fontSize":"16px","fontWeight":"700"}},"fontFamily":"poppins"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-poppins-font-family wp-element-button" style="border-color:#294338;border-style:solid;border-width:2px;border-radius:50px;color:#294338;background-color:transparent;padding-top:12px;padding-right:27px;padding-bottom:12px;padding-left:27px;font-size:16px;font-weight:700">Login</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"50px"},"color":{"background":"#294338","text":"#F7F6F0"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"27px","right":"27px"}},"typography":{"fontSize":"16px","fontWeight":"700"}},"fontFamily":"poppins"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-poppins-font-family wp-element-button" style="border-radius:50px;color:#F7F6F0;background-color:#294338;padding-top:12px;padding-right:27px;padding-bottom:12px;padding-left:27px;font-size:16px;font-weight:700">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"50px"},"color":{"background":"#294338","text":"#F7F6F0"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"12px","right":"12px"}},"typography":{"fontSize":"16px"}},"className":"edun-menu-toggle"} -->
<div class="wp-block-button edun-menu-toggle"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:50px;color:#F7F6F0;background-color:#294338;padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px;font-size:16px">☰</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->',
);
