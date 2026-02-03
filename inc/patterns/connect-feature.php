<?php
/**
 * Connect Feature Pattern
 *
 * Feature section with image left and text right
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Connect Feature', 'edun-child'),
    'description' => __('Feature section with image on left and text on right', 'edun-child'),
    'categories'  => array('edun'),
    'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"191px","right":"191px"}},"color":{"background":"#F7F6F0"}},"layout":{"type":"constrained","contentSize":"1240px"},"className":"edun-wave-divider-bottom-white edun-pattern-connect"} -->
<div class="wp-block-group alignfull has-background edun-wave-divider-bottom-white edun-pattern-connect" style="background-color:#F7F6F0;padding-top:100px;padding-right:191px;padding-bottom:100px;padding-left:191px;position:relative">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"600px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:600px">

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="" alt="Connect Dashboard" style="max-width:100%;height:auto;"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"552px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:552px">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontWeight":"700","lineHeight":"1"},"color":{"text":"#294338"},"spacing":{"margin":{"bottom":"20px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#294338;margin-bottom:20px;font-size:18px;font-weight:700;line-height:1">Connect</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontWeight":"700","lineHeight":"1","letterSpacing":"0"},"color":{"text":"#294338"},"spacing":{"margin":{"top":"0","bottom":"20px"}},"fontFamily":"poppins"}} -->
<h2 class="has-text-color has-poppins-font-family" style="color:#294338;margin-top:0;margin-bottom:20px;font-size:32px;font-weight:700;line-height:1;letter-spacing:0">Power your multi academy trust with workforce intelligence</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#7C7C7C"},"spacing":{"margin":{"bottom":"28px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#7C7C7C;margin-bottom:28px;font-size:16px;font-weight:400;line-height:1.5">Edun\'s Connect is a MATs new best friend. Harness workforce management like never before, report instantly and reach out to agency partners through deep integration.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
<div class="wp-block-buttons" style="margin-top:28px">

<!-- wp:button {"style":{"border":{"radius":"50px","width":"2px","color":"#294338","style":"solid"},"color":{"background":"transparent","text":"#294338"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"27px","right":"27px"}},"typography":{"fontSize":"16px","fontWeight":"700"}},"fontFamily":"poppins"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-poppins-font-family wp-element-button" style="border-color:#294338;border-style:solid;border-width:2px;border-radius:50px;color:#294338;background-color:transparent;padding-top:12px;padding-right:27px;padding-bottom:12px;padding-left:27px;font-size:16px;font-weight:700">Discover more</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);
