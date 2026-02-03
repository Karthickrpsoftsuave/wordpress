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
    'content'     => '<!-- wp:cover {"url":"","dimRatio":0,"align":"full","className":"edun-hero-section"} -->
<div class="wp-block-cover alignfull edun-hero-section">
<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
<div class="wp-block-cover__inner-container">

<!-- wp:columns {"verticalAlignment":"center","className":"edun-hero-columns"} -->
<div class="wp-block-columns are-vertically-aligned-center edun-hero-columns">

<!-- wp:column {"verticalAlignment":"center","className":"edun-hero-content"} -->
<div class="wp-block-column is-vertically-aligned-center edun-hero-content">

<!-- wp:paragraph {"className":"edun-hero-label"} -->
<p class="edun-hero-label">Say hello to edun</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"edun-hero-title"} -->
<h1 class="edun-hero-title">Powering the future of workforce management</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"edun-hero-description"} -->
<p class="edun-hero-description">Edun is the smarter, faster way to manage your entire workforce ecosystem. Built for agencies, MATs, and education professionals, edun connects every part of the supply chain through one sleek, intuitive platform.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"edun-hero-buttons"} -->
<div class="wp-block-buttons edun-hero-buttons">

<!-- wp:button {"className":"edun-hero-btn-primary"} -->
<div class="wp-block-button edun-hero-btn-primary"><a class="wp-block-button__link wp-element-button">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"edun-hero-btn-secondary"} -->
<div class="wp-block-button edun-hero-btn-secondary"><a class="wp-block-button__link wp-element-button">About edun</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column -->

<!-- wp:column {"className":"edun-hero-image-column"} -->
<div class="wp-block-column edun-hero-image-column">
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
