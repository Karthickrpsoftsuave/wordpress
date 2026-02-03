<?php
/**
 * Feature Section with Image Block Pattern
 *
 * Reusable two-column pattern with heading and optional button on left, image on right
 * Button only shows if you add button text
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Feature Section with Image', 'edun-child'),
    'description' => __('Two-column section with heading on left, image on right, and optional button. Customizable for any feature section.', 'edun-child'),
    'categories'  => array('edun', 'featured'),
    'keywords'    => array('feature', 'section', 'image', 'two-column', 'hero'),
    'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#477257"}},"className":"feature-section-with-image"} -->
<div class="wp-block-group alignfull feature-section-with-image has-background" style="background-color:#477257;margin-top:0;margin-bottom:0;padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px">

<!-- wp:group {"style":{"spacing":{"padding":{"left":"191px","right":"191px"}}},"layout":{"type":"constrained","contentSize":"1512px"}} -->
<div class="wp-block-group" style="padding-right:191px;padding-left:191px">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

<!-- wp:group {"style":{"spacing":{"blockGap":"28px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontWeight":"700","lineHeight":"1"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"bottom":"0"}}},"fontFamily":"poppins"} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-bottom:0;font-size:18px;font-weight:700;line-height:1">About edun</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"48px","fontWeight":"700","lineHeight":"1.2","letterSpacing":"0"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"poppins"} -->
<h1 class="wp-block-heading has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-top:0;margin-bottom:0;font-size:48px;font-weight:700;line-height:1.2;letter-spacing:0">Meet the people powering edun</h1>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons">

<!-- wp:button {"style":{"border":{"radius":"50px","width":"2px"},"color":{"background":"transparent","text":"#F7F6F0"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"27px","right":"27px"}},"typography":{"fontSize":"16px","fontWeight":"700"}},"borderColor":"#F7F6F0","className":"is-style-outline","fontFamily":"poppins"} -->
<div class="wp-block-button is-style-outline has-poppins-font-family" style="font-size:16px;font-weight:700"><a class="wp-block-button__link has-text-color has-background has-border-color wp-element-button" style="border-color:#F7F6F0;border-width:2px;border-radius:50px;color:#F7F6F0;background-color:transparent;padding-top:12px;padding-right:27px;padding-bottom:12px;padding-left:27px">Play video</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"center","className":"feature-section-image"} -->
<figure class="wp-block-image aligncenter size-large feature-section-image"><img src="" alt=""/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->'
);
