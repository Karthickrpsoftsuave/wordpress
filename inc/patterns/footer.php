<?php
/**
 * Footer Pattern
 *
 * Main footer with company info, links and contact details
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Footer', 'edun-child'),
    'description' => __('Main footer with company info, product links and contact details', 'edun-child'),
    'categories'  => array('edun', 'footer'),
    'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"191px","right":"191px"}},"color":{"background":"#212121"}},"layout":{"type":"constrained"},"className":"edun-footer"} -->
<div class="wp-block-group alignfull edun-footer has-background" style="background-color:#212121;padding-top:40px;padding-right:191px;padding-bottom:40px;padding-left:191px">

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
<div class="wp-block-columns">

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%">

<!-- wp:image {"width":"112px","height":"30px","sizeSlug":"full","className":"edun-footer-logo"} -->
<figure class="wp-block-image size-full is-resized edun-footer-logo"><img src="" alt="edun" style="width:112px;height:30px;filter:brightness(0) invert(1)"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"top":"20px","bottom":"20px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-top:20px;margin-bottom:20px;font-size:16px;font-weight:400;line-height:1.5">Powering the future of workforce management</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"top":"20px","bottom":"8px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-top:20px;margin-bottom:8px;font-size:16px;font-weight:400;line-height:1.5"><a href="mailto:info@helloedun.co.uk" style="color:#F7F6F0;text-decoration:underline">info@helloedun.co.uk</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"top":"0","bottom":"20px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-top:0;margin-bottom:20px;font-size:16px;font-weight:400;line-height:1.5"><a href="tel:01914069222" style="color:#F7F6F0;text-decoration:underline">0191 406 9222</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"700","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"bottom":"16px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-bottom:16px;font-size:16px;font-weight:700;line-height:1.5">Company</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"bottom":"12px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-bottom:12px;font-size:16px;font-weight:400;line-height:1.5"><a href="#" style="color:#F7F6F0;text-decoration:none">About</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"bottom":"12px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-bottom:12px;font-size:16px;font-weight:400;line-height:1.5"><a href="#" style="color:#F7F6F0;text-decoration:none">Contact</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"bottom":"12px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-bottom:12px;font-size:16px;font-weight:400;line-height:1.5"><a href="#" style="color:#F7F6F0;text-decoration:none">Partners</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"bottom":"12px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-bottom:12px;font-size:16px;font-weight:400;line-height:1.5"><a href="#" style="color:#F7F6F0;text-decoration:none">Cookies</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;font-size:16px;font-weight:400;line-height:1.5"><a href="#" style="color:#F7F6F0;text-decoration:none">Privacy</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"700","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"bottom":"16px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-bottom:16px;font-size:16px;font-weight:700;line-height:1.5">Products</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"bottom":"12px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-bottom:12px;font-size:16px;font-weight:400;line-height:1.5"><a href="#" style="color:#F7F6F0;text-decoration:none">Core CRM</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"bottom":"12px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-bottom:12px;font-size:16px;font-weight:400;line-height:1.5"><a href="#" style="color:#F7F6F0;text-decoration:none">Connect</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"bottom":"12px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-bottom:12px;font-size:16px;font-weight:400;line-height:1.5"><a href="#" style="color:#F7F6F0;text-decoration:none">ID</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;font-size:16px;font-weight:400;line-height:1.5"><a href="#" style="color:#F7F6F0;text-decoration:none">Worker</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"700","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"spacing":{"margin":{"bottom":"16px"}},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;margin-bottom:16px;font-size:16px;font-weight:700;line-height:1.5">Social</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;font-size:16px;font-weight:400;line-height:1.5"><a href="#" style="color:#F7F6F0;text-decoration:none">LinkedIn</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"left":"80px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:40px">

<!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"400","lineHeight":"1.5"},"color":{"text":"#F7F6F0"},"fontFamily":"poppins"}} -->
<p class="has-text-color has-poppins-font-family" style="color:#F7F6F0;font-size:12px;font-weight:400;line-height:1.5">© 2025 edun</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%">

<!-- wp:image {"align":"right","sizeSlug":"large","linkDestination":"none","className":"edun-footer-decoration"} -->
<figure class="wp-block-image alignright size-large edun-footer-decoration"><img src="" alt=""/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);
