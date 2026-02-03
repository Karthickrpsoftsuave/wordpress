<?php
/**
 * Hero Section Pattern
 *
 * Pattern for the main hero section with background and content
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Hero Section', 'edun-child'),
    'description' => __('Main hero section with background image and call-to-action', 'edun-child'),
    'categories'  => array('edun', 'featured'),
    'content'     => '<!-- wp:cover {"url":"","dimRatio":0,"minHeight":804,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"204px","bottom":"204px","left":"191px","right":"191px"}},"color":{"background":"#F7F6F0"}},"className":"edun-hero-section"} -->
<div class="wp-block-cover alignfull edun-hero-section has-background" style="background-color:#F7F6F0;padding-top:204px;padding-right:191px;padding-bottom:204px;padding-left:191px;min-height:804px">
<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
<div class="wp-block-cover__inner-container">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"148px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"649px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:649px">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontWeight":"700","lineHeight":"1"},"color":{"text":"#294338"},"spacing":{"margin":{"bottom":"20px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#294338;margin-bottom:20px;font-size:18px;font-weight:700;line-height:1">Say hello to edun</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"48px","fontWeight":"700","lineHeight":"1","letterSpacing":"0"},"color":{"text":"#294338"},"spacing":{"margin":{"top":"0","bottom":"20px"}},"fontFamily":"poppins"}} -->
<h1 class="has-text-color has-poppins-font-family" style="color:#294338;margin-top:0;margin-bottom:20px;font-size:48px;font-weight:700;line-height:1;letter-spacing:0">Powering the future of workforce management</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1"},"color":{"text":"#7C7C7C"},"spacing":{"margin":{"bottom":"28px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#7C7C7C;margin-bottom:28px;font-size:16px;font-weight:400;line-height:1">Edun is the smarter, faster way to manage your entire workforce ecosystem. Built for agencies, MATs, and education professionals, edun connects every part of the supply chain through one sleek, intuitive platform.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-buttons">

<!-- wp:button {"style":{"border":{"radius":"50px"},"color":{"background":"#294338","text":"#F7F6F0"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"27px","right":"27px"}},"typography":{"fontSize":"16px","fontWeight":"700"}},"fontFamily":"poppins"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-poppins-font-family wp-element-button" style="border-radius:50px;color:#F7F6F0;background-color:#294338;padding-top:12px;padding-right:27px;padding-bottom:12px;padding-left:27px;font-size:16px;font-weight:700">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"50px","width":"2px","color":"#294338","style":"solid"},"color":{"text":"#294338","background":"transparent"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"27px","right":"27px"}},"typography":{"fontSize":"16px","fontWeight":"700"}},"className":"is-style-outline","fontFamily":"poppins"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-background has-poppins-font-family wp-element-button" style="border-color:#294338;border-style:solid;border-width:2px;border-radius:50px;color:#294338;background-color:transparent;padding-top:12px;padding-right:27px;padding-bottom:12px;padding-left:27px;font-size:16px;font-weight:700">About edun</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"715px"} -->
<div class="wp-block-column" style="flex-basis:715px">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-hero-image"} -->
<figure class="wp-block-image size-large edun-hero-image"><img src="" alt="Edun Hero Image"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
</div>
<!-- /wp:cover -->',
);
