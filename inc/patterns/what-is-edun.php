<?php
/**
 * What is edun Section Pattern
 *
 * Centered intro section explaining what edun is
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('What is edun Section', 'edun-child'),
    'description' => __('Centered content section with headline and description', 'edun-child'),
    'categories'  => array('edun'),
    'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"191px","right":"191px"}},"color":{"background":"#FFFFFF"}},"layout":{"type":"constrained","contentSize":"1129px"},"className":"edun-wave-divider-bottom-white"} -->
<div class="wp-block-group alignfull has-background edun-wave-divider-bottom-white" style="background-color:#FFFFFF;padding-top:100px;padding-right:191px;padding-bottom:100px;padding-left:191px;position:relative">

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","fontWeight":"700","lineHeight":"1"},"color":{"text":"#294338"},"spacing":{"margin":{"bottom":"20px"}},"fontFamily":"poppins"}} -->
<p class="has-text-align-center has-text-color has-poppins-font-family" style="color:#294338;margin-bottom:20px;font-size:18px;font-weight:700;line-height:1">What is edun?</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"32px","fontWeight":"700","lineHeight":"1","letterSpacing":"0"},"color":{"text":"#294338"},"spacing":{"margin":{"top":"0","bottom":"20px"}},"fontFamily":"poppins"}} -->
<h2 class="has-text-align-center has-text-color has-poppins-font-family" style="color:#294338;margin-top:0;margin-bottom:20px;font-size:32px;font-weight:700;line-height:1;letter-spacing:0">Simply, technology connected</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1"},"color":{"text":"#7C7C7C"},"spacing":{"margin":{"bottom":"28px"}},"fontFamily":"poppins"}} -->
<p class="has-text-align-center has-text-color has-poppins-font-family" style="color:#7C7C7C;margin-bottom:28px;font-size:16px;font-weight:400;line-height:normal">Edun is the complete end-to-end workforce management tool. Our platform connects every part of the eduction and healthcare supply chain – temporary or permenant – with smart, scalable technology.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"28px"}}}} -->
<div class="wp-block-buttons" style="margin-top:28px">

<!-- wp:button {"style":{"border":{"radius":"50px","width":"2px","color":"#294338","style":"solid"},"color":{"background":"transparent","text":"#294338"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"27px","right":"27px"}},"typography":{"fontSize":"16px","fontWeight":"700"}},"fontFamily":"poppins"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-poppins-font-family wp-element-button" style="border-color:#294338;border-style:solid;border-width:2px;border-radius:50px;color:#294338;background-color:transparent;padding-top:12px;padding-right:27px;padding-bottom:12px;padding-left:27px;font-size:16px;font-weight:700">See all products</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->',
);
