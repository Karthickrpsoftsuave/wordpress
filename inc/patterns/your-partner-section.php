<?php
/**
 * Your Partner Section Pattern
 *
 * Device mockups with partner information
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Your Partner Section', 'edun-child'),
    'description' => __('Device mockups with partner content', 'edun-child'),
    'categories'  => array('edun'),
    'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"191px","right":"191px"}},"color":{"background":"#FFFFFF"}},"layout":{"type":"constrained","contentSize":"1129px"},"className":"edun-partner-section"} -->
<div class="wp-block-group alignfull has-background edun-partner-section" style="background-color:#FFFFFF;padding-top:100px;padding-right:191px;padding-bottom:100px;padding-left:191px">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"577px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:577px">

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/edun-devices.png" alt="Edun platform on tablet and mobile devices" style="max-width:100%;height:auto;"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"552px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:552px">

<!-- wp:group {"style":{"spacing":{"blockGap":"28px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">

<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontWeight":"700","lineHeight":"1"},"color":{"text":"#294338"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"poppins"} -->
<p class="has-text-color has-poppins-font-family" style="color:#294338;margin-top:0;margin-bottom:0;font-size:18px;font-weight:700;line-height:1">Your partner</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontWeight":"700","lineHeight":"1"},"color":{"text":"#294338"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"poppins"} -->
<h2 class="has-text-color has-poppins-font-family" style="color:#294338;margin-top:0;margin-bottom:0;font-size:32px;font-weight:700;line-height:1">Want to know more about us?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#7C7C7C"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"poppins"} -->
<p class="has-text-color has-poppins-font-family" style="color:#7C7C7C;margin-top:0;margin-bottom:0;font-size:16px;font-weight:400;line-height:1.5">Edun\'s Connect is a MATs new best friend. Harness workforce management like never before, report instantly and reach out to agency partners through deep integration.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

<!-- wp:button {"style":{"border":{"radius":"50px","width":"2px","style":"solid","color":"#294338"},"color":{"background":"transparent","text":"#294338"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"27px","right":"27px"}},"typography":{"fontSize":"16px","fontWeight":"700"}},"className":"is-style-outline","fontFamily":"poppins"} -->
<div class="wp-block-button is-style-outline has-poppins-font-family"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-color:#294338;border-style:solid;border-width:2px;border-radius:50px;color:#294338;background-color:transparent;padding-top:12px;padding-right:27px;padding-bottom:12px;padding-left:27px;font-size:16px;font-weight:700">About edun</a></div>
<!-- /wp:button -->

<!-- wp:html -->
<div class="edun-underline-button">
<p style="margin:0;padding:0;font-family:Poppins,sans-serif;font-size:16px;font-weight:700;color:#294338;line-height:1.5;">See partners</p>
<div style="width:100%;height:2px;background-color:#294338;margin-top:2px;"></div>
</div>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);
