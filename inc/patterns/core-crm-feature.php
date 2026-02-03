<?php
/**
 * Core CRM Feature Pattern
 *
 * Feature section with text left and image right
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Core CRM Feature', 'edun-child'),
    'description' => __('Feature section with text on left and image on right', 'edun-child'),
    'categories'  => array('edun'),
    'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1240px"},"className":"edun-wave-divider-bottom-white edun-pattern-core-crm"} -->
<div class="wp-block-group alignfull edun-wave-divider-bottom-white edun-pattern-core-crm">

<!-- wp:columns {"verticalAlignment":"center","className":"edun-core-crm-columns"} -->
<div class="wp-block-columns are-vertically-aligned-center edun-core-crm-columns">

<!-- wp:column {"verticalAlignment":"center","className":"edun-core-crm-content"} -->
<div class="wp-block-column is-vertically-aligned-center edun-core-crm-content">

<!-- wp:paragraph {"className":"edun-core-crm-label"} -->
<p class="edun-core-crm-label">Core CRM</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"edun-core-crm-title"} -->
<h2 class="edun-core-crm-title">The #1 CRM for education and healthcare agencies</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"edun-core-crm-description"} -->
<p class="edun-core-crm-description">Edun\'s Core CRM is the markets number one CRM for Education &amp; Healthcare Recruitment Agencies to prosper, built and scaled with compliance heavy environments in mind.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"edun-core-crm-buttons"} -->
<div class="wp-block-buttons edun-core-crm-buttons">

<!-- wp:button {"className":"edun-core-crm-btn"} -->
<div class="wp-block-button edun-core-crm-btn"><a class="wp-block-button__link wp-element-button" href="#crm-features" data-open-crm-sidebar>Discover more</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"edun-core-crm-image-col"} -->
<div class="wp-block-column is-vertically-aligned-center edun-core-crm-image-col">

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-core-crm-image"} -->
<figure class="wp-block-image size-large edun-core-crm-image"><img src="" alt="Core CRM Dashboard"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);
