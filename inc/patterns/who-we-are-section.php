<?php
/**
 * Who We Are Section Pattern
 *
 * Team member section showing #teamedun
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Who We Are Section', 'edun-child'),
    'description' => __('Team members section with circular photos and roles', 'edun-child'),
    'categories'  => array('edun'),
    'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1129px"},"className":"edun-who-we-are-section"} -->
<div class="wp-block-group alignfull edun-who-we-are-section">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"889px"},"className":"edun-who-header"} -->
<div class="wp-block-group edun-who-header">

<!-- wp:paragraph {"align":"center","className":"edun-who-label"} -->
<p class="has-text-align-center edun-who-label">Who we are</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"edun-who-title"} -->
<h2 class="has-text-align-center edun-who-title">#teamedun</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"edun-who-description"} -->
<p class="has-text-align-center edun-who-description">Edun is the complete end-to-end workforce management tool. Our platform connects every part of the eduction and healthcare supply chain – temporary or permenant – with smart, scalable technology.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"1033px"},"className":"edun-team-grid"} -->
<div class="wp-block-group edun-team-grid">

<!-- wp:columns {"className":"edun-team-row"} -->
<div class="wp-block-columns edun-team-row">

<!-- wp:column {"className":"edun-team-member"} -->
<div class="wp-block-column edun-team-member">
<!-- wp:group {"className":"edun-team-member-inner"} -->
<div class="wp-block-group edun-team-member-inner">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-team-photo"} -->
<figure class="wp-block-image size-large edun-team-photo"><img src="" alt="Douglas Scott"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"edun-team-info"} -->
<div class="wp-block-group edun-team-info">
<!-- wp:paragraph {"align":"center","className":"edun-team-name"} -->
<p class="has-text-align-center edun-team-name">Douglas Scott</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"edun-team-role"} -->
<p class="has-text-align-center edun-team-role">Managing Director</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"className":"edun-team-member"} -->
<div class="wp-block-column edun-team-member">
<!-- wp:group {"className":"edun-team-member-inner"} -->
<div class="wp-block-group edun-team-member-inner">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-team-photo"} -->
<figure class="wp-block-image size-large edun-team-photo"><img src="" alt="Tim Horwood"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"edun-team-info"} -->
<div class="wp-block-group edun-team-info">
<!-- wp:paragraph {"align":"center","className":"edun-team-name"} -->
<p class="has-text-align-center edun-team-name">Tim Horwood</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"edun-team-role"} -->
<p class="has-text-align-center edun-team-role">Technical Director</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"className":"edun-team-member"} -->
<div class="wp-block-column edun-team-member">
<!-- wp:group {"className":"edun-team-member-inner"} -->
<div class="wp-block-group edun-team-member-inner">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-team-photo"} -->
<figure class="wp-block-image size-large edun-team-photo"><img src="" alt="George Bishop"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"edun-team-info"} -->
<div class="wp-block-group edun-team-info">
<!-- wp:paragraph {"align":"center","className":"edun-team-name"} -->
<p class="has-text-align-center edun-team-name">George Bishop</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"edun-team-role"} -->
<p class="has-text-align-center edun-team-role">Head of Engineering</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"className":"edun-team-member"} -->
<div class="wp-block-column edun-team-member">
<!-- wp:group {"className":"edun-team-member-inner"} -->
<div class="wp-block-group edun-team-member-inner">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-team-photo"} -->
<figure class="wp-block-image size-large edun-team-photo"><img src="" alt="Soraia Jesus"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"edun-team-info"} -->
<div class="wp-block-group edun-team-info">
<!-- wp:paragraph {"align":"center","className":"edun-team-name"} -->
<p class="has-text-align-center edun-team-name">Soraia Jesus</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"edun-team-role"} -->
<p class="has-text-align-center edun-team-role">Business Support</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"edun-team-row"} -->
<div class="wp-block-columns edun-team-row">

<!-- wp:column {"className":"edun-team-member"} -->
<div class="wp-block-column edun-team-member">
<!-- wp:group {"className":"edun-team-member-inner"} -->
<div class="wp-block-group edun-team-member-inner">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-team-photo"} -->
<figure class="wp-block-image size-large edun-team-photo"><img src="" alt="Alex Gidman"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"edun-team-info"} -->
<div class="wp-block-group edun-team-info">
<!-- wp:paragraph {"align":"center","className":"edun-team-name"} -->
<p class="has-text-align-center edun-team-name">Alex Gidman</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"edun-team-role"} -->
<p class="has-text-align-center edun-team-role">Technical Lead</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"className":"edun-team-member"} -->
<div class="wp-block-column edun-team-member">
<!-- wp:group {"className":"edun-team-member-inner"} -->
<div class="wp-block-group edun-team-member-inner">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-team-photo"} -->
<figure class="wp-block-image size-large edun-team-photo"><img src="" alt="James Brain"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"edun-team-info"} -->
<div class="wp-block-group edun-team-info">
<!-- wp:paragraph {"align":"center","className":"edun-team-name"} -->
<p class="has-text-align-center edun-team-name">James Brain</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"edun-team-role"} -->
<p class="has-text-align-center edun-team-role">Software Engineer</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"className":"edun-team-member"} -->
<div class="wp-block-column edun-team-member">
<!-- wp:group {"className":"edun-team-member-inner"} -->
<div class="wp-block-group edun-team-member-inner">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"edun-team-photo"} -->
<figure class="wp-block-image size-large edun-team-photo"><img src="" alt="Nicholas Athanasopoulos"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"edun-team-info"} -->
<div class="wp-block-group edun-team-info">
<!-- wp:paragraph {"align":"center","className":"edun-team-name"} -->
<p class="has-text-align-center edun-team-name">Nicholas Athanasopoulos</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"edun-team-role"} -->
<p class="has-text-align-center edun-team-role">Software Engineer</p>
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
<!-- /wp:group -->

</div>
<!-- /wp:group -->',
);
