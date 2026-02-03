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
    'content'     => '<!-- wp:group {"align":"full","className":"feature-section-with-image"} -->
<div class="wp-block-group alignfull feature-section-with-image">

<!-- wp:group {"className":"feature-section-inner"} -->
<div class="wp-block-group feature-section-inner">

<!-- wp:columns {"verticalAlignment":"center","className":"feature-section-columns"} -->
<div class="wp-block-columns are-vertically-aligned-center feature-section-columns">

<!-- wp:column {"verticalAlignment":"center","className":"feature-section-content"} -->
<div class="wp-block-column is-vertically-aligned-center feature-section-content">

<!-- wp:group {"className":"feature-section-text-group"} -->
<div class="wp-block-group feature-section-text-group">

<!-- wp:paragraph {"className":"feature-section-label"} -->
<p class="feature-section-label">About edun</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"feature-section-title"} -->
<h1 class="feature-section-title">Meet the people powering edun</h1>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"feature-section-buttons"} -->
<div class="wp-block-buttons feature-section-buttons">

<!-- wp:button {"className":"feature-section-btn"} -->
<div class="wp-block-button feature-section-btn"><a class="wp-block-button__link wp-element-button">Play video</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"feature-section-image-col"} -->
<div class="wp-block-column is-vertically-aligned-center feature-section-image-col">

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
