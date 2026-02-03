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
    'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1129px"},"className":"edun-partner-section"} -->
<div class="wp-block-group alignfull edun-partner-section">

<!-- wp:columns {"verticalAlignment":"center","className":"edun-partner-columns"} -->
<div class="wp-block-columns are-vertically-aligned-center edun-partner-columns">

<!-- wp:column {"verticalAlignment":"center","className":"edun-partner-image-col"} -->
<div class="wp-block-column is-vertically-aligned-center edun-partner-image-col">

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-partner-image"} -->
<figure class="wp-block-image size-large edun-partner-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/edun-devices.png" alt="Edun platform on tablet and mobile devices"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"edun-partner-content"} -->
<div class="wp-block-column is-vertically-aligned-center edun-partner-content">

<!-- wp:group {"className":"edun-partner-inner"} -->
<div class="wp-block-group edun-partner-inner">

<!-- wp:group {"className":"edun-partner-text-group"} -->
<div class="wp-block-group edun-partner-text-group">

<!-- wp:paragraph {"className":"edun-partner-label"} -->
<p class="edun-partner-label">Your partner</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"edun-partner-title"} -->
<h2 class="edun-partner-title">Want to know more about us?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"edun-partner-description"} -->
<p class="edun-partner-description">Edun\'s Connect is a MATs new best friend. Harness workforce management like never before, report instantly and reach out to agency partners through deep integration.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"edun-partner-buttons-group","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group edun-partner-buttons-group">

<!-- wp:button {"className":"edun-partner-btn-outline is-style-outline"} -->
<div class="wp-block-button edun-partner-btn-outline is-style-outline"><a class="wp-block-button__link wp-element-button">About edun</a></div>
<!-- /wp:button -->

<!-- wp:paragraph {"className":"edun-underline-text"} -->
<p class="edun-underline-text"><a href="#">See partners</a></p>
<!-- /wp:paragraph -->

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
