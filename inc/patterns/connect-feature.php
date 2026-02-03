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
    'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1240px"},"className":"edun-wave-divider-bottom-white edun-pattern-connect"} -->
<div class="wp-block-group alignfull edun-wave-divider-bottom-white edun-pattern-connect">

<!-- wp:columns {"verticalAlignment":"center","className":"edun-connect-columns"} -->
<div class="wp-block-columns are-vertically-aligned-center edun-connect-columns">

<!-- wp:column {"verticalAlignment":"center","className":"edun-connect-image-col"} -->
<div class="wp-block-column is-vertically-aligned-center edun-connect-image-col">

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-connect-image"} -->
<figure class="wp-block-image size-large edun-connect-image"><img src="" alt="Connect Dashboard"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"edun-connect-content"} -->
<div class="wp-block-column is-vertically-aligned-center edun-connect-content">

<!-- wp:paragraph {"className":"edun-connect-label"} -->
<p class="edun-connect-label">Connect</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"edun-connect-title"} -->
<h2 class="edun-connect-title">Power your multi academy trust with workforce intelligence</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"edun-connect-description"} -->
<p class="edun-connect-description">Edun\'s Connect is a MATs new best friend. Harness workforce management like never before, report instantly and reach out to agency partners through deep integration.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"edun-connect-buttons"} -->
<div class="wp-block-buttons edun-connect-buttons">

<!-- wp:button {"className":"edun-connect-btn"} -->
<div class="wp-block-button edun-connect-btn"><a class="wp-block-button__link wp-element-button">Discover more</a></div>
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
