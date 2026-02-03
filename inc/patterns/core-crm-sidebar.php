<?php
/**
 * Core CRM Feature List Sidebar Pattern
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Core CRM Feature List Sidebar', 'edun-child'),
    'description' => __('Slide-out sidebar panel with CRM features - fully editable', 'edun-child'),
    'categories'  => array('edun', 'featured'),
    'content'     => '<!-- wp:group {"className":"crm-sidebar-panel","layout":{"type":"default"}} -->
<div class="wp-block-group crm-sidebar-panel" id="core-crm-sidebar">

<!-- wp:group {"className":"crm-sidebar-content","layout":{"type":"default"}} -->
<div class="wp-block-group crm-sidebar-content">

<!-- wp:group {"className":"crm-sidebar-header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group crm-sidebar-header">

<!-- wp:heading {"level":2,"className":"crm-sidebar-title","fontFamily":"poppins"} -->
<h2 class="wp-block-heading crm-sidebar-title has-poppins-font-family">Core CRM Feature list</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"crm-sidebar-close-btn"} -->
<div class="wp-block-button crm-sidebar-close-btn"><a class="wp-block-button__link crm-sidebar-close wp-element-button" href="#" aria-label="Close sidebar">✕</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"crm-sidebar-accordion","layout":{"type":"default"}} -->
<div class="wp-block-group crm-sidebar-accordion">

<!-- wp:group {"className":"crm-accordion-item active","layout":{"type":"default"}} -->
<div class="wp-block-group crm-accordion-item active">

<!-- wp:heading {"level":3,"className":"crm-accordion-title","fontFamily":"poppins"} -->
<h3 class="wp-block-heading crm-accordion-title has-poppins-font-family">Candidate pipeline Management</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"crm-accordion-content","fontFamily":"poppins"} -->
<p class="crm-accordion-content has-poppins-font-family">At Edun, we transform candidate management into a seamless and efficient process. Our Candidate Pipeline Management system organically structures and organizes candidate data, providing a clear and comprehensive view of each candidate\'s journey. This intuitive system ensures that you can easily track and manage candidate progress, from initial onboarding to ongoing engagement.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"crm-accordion-item","layout":{"type":"default"}} -->
<div class="wp-block-group crm-accordion-item">

<!-- wp:heading {"level":3,"className":"crm-accordion-title","fontFamily":"poppins"} -->
<h3 class="wp-block-heading crm-accordion-title has-poppins-font-family">Electronic Document Submission, Vetting &amp; Clearance</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"crm-accordion-content","fontFamily":"poppins"} -->
<p class="crm-accordion-content has-poppins-font-family">Streamline your document management with our electronic submission system. Handle vetting and clearance processes efficiently with automated workflows and secure document storage.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"crm-accordion-item","layout":{"type":"default"}} -->
<div class="wp-block-group crm-accordion-item">

<!-- wp:heading {"level":3,"className":"crm-accordion-title","fontFamily":"poppins"} -->
<h3 class="wp-block-heading crm-accordion-title has-poppins-font-family">Complete booking system</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"crm-accordion-content","fontFamily":"poppins"} -->
<p class="crm-accordion-content has-poppins-font-family">Manage all your bookings in one place with our comprehensive booking system. Schedule assignments, track availability, and manage placements with ease.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"crm-accordion-item","layout":{"type":"default"}} -->
<div class="wp-block-group crm-accordion-item">

<!-- wp:heading {"level":3,"className":"crm-accordion-title","fontFamily":"poppins"} -->
<h3 class="wp-block-heading crm-accordion-title has-poppins-font-family">Electronic timesheeting</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"crm-accordion-content","fontFamily":"poppins"} -->
<p class="crm-accordion-content has-poppins-font-family">Simplify time tracking with our electronic timesheeting solution. Candidates and clients can submit and approve timesheets digitally, reducing administrative overhead.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"crm-accordion-item","layout":{"type":"default"}} -->
<div class="wp-block-group crm-accordion-item">

<!-- wp:heading {"level":3,"className":"crm-accordion-title","fontFamily":"poppins"} -->
<h3 class="wp-block-heading crm-accordion-title has-poppins-font-family">Client Management</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"crm-accordion-content","fontFamily":"poppins"} -->
<p class="crm-accordion-content has-poppins-font-family">Build and maintain strong client relationships with our client management tools. Track interactions, manage contracts, and maintain detailed client profiles all in one place.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->',
);
