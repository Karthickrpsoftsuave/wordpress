<?php
/**
 * Integrations Slider Pattern
 *
 * Logo slider section for integrations
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Integrations Slider', 'edun-child'),
    'description' => __('Integration logos with slider functionality', 'edun-child'),
    'categories'  => array('edun'),
    'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1129px"},"className":"edun-integrations-slider-section"} -->
<div class="wp-block-group alignfull edun-integrations-slider-section">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"720px"},"className":"edun-integrations-header"} -->
<div class="wp-block-group edun-integrations-header">

<!-- wp:paragraph {"align":"center","className":"edun-integrations-label"} -->
<p class="has-text-align-center edun-integrations-label">Integrations</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"edun-integrations-title"} -->
<h2 class="has-text-align-center edun-integrations-title">Power your workflow</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"edun-integrations-description"} -->
<p class="has-text-align-center edun-integrations-description">We work with industry-leading tools to keep your operations running smoothly</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"edun-logo-slider-container"} -->
<div class="wp-block-group edun-logo-slider-container">

<!-- wp:group {"className":"edun-logo-slider-wrapper"} -->
<div class="wp-block-group edun-logo-slider-wrapper">

<!-- wp:group {"className":"edun-logo-slider-track"} -->
<div class="wp-block-group edun-logo-slider-track">

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-logo-item"} -->
<figure class="wp-block-image size-large edun-logo-item"><img src="" alt="Integration Logo 1"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-logo-item"} -->
<figure class="wp-block-image size-large edun-logo-item"><img src="" alt="Integration Logo 2"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-logo-item"} -->
<figure class="wp-block-image size-large edun-logo-item"><img src="" alt="Integration Logo 3"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-logo-item"} -->
<figure class="wp-block-image size-large edun-logo-item"><img src="" alt="Integration Logo 4"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-logo-item"} -->
<figure class="wp-block-image size-large edun-logo-item"><img src="" alt="Integration Logo 5"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-logo-item"} -->
<figure class="wp-block-image size-large edun-logo-item"><img src="" alt="Integration Logo 6"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-logo-item"} -->
<figure class="wp-block-image size-large edun-logo-item"><img src="" alt="Integration Logo 7"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-logo-item"} -->
<figure class="wp-block-image size-large edun-logo-item"><img src="" alt="Integration Logo 8"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-logo-item"} -->
<figure class="wp-block-image size-large edun-logo-item"><img src="" alt="Integration Logo 9"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-logo-item"} -->
<figure class="wp-block-image size-large edun-logo-item"><img src="" alt="Integration Logo 10"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-logo-item"} -->
<figure class="wp-block-image size-large edun-logo-item"><img src="" alt="Integration Logo 11"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-logo-item"} -->
<figure class="wp-block-image size-large edun-logo-item"><img src="" alt="Integration Logo 12"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"edun-slider-navigation"} -->
<div class="wp-block-group edun-slider-navigation">

<!-- wp:html -->
<button class="edun-slider-btn edun-slider-prev" aria-label="Previous">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</button>
<!-- /wp:html -->

<!-- wp:html -->
<button class="edun-slider-btn edun-slider-next" aria-label="Next">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</button>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->',
);
