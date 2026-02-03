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
    'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"crm-sidebar-panel","layout":{"type":"default"}} -->
<div class="wp-block-group crm-sidebar-panel" id="core-crm-sidebar" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}},"color":{"background":"#ffffff"}},"className":"crm-sidebar-content","layout":{"type":"default"}} -->
<div class="wp-block-group crm-sidebar-content has-background" style="background-color:#ffffff;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"24px"},"margin":{"bottom":"24px"}},"border":{"bottom":{"width":"1px","color":"#e5e5e5"}}},"className":"crm-sidebar-header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group crm-sidebar-header" style="border-bottom-color:#e5e5e5;border-bottom-width:1px;margin-bottom:24px;padding-bottom:24px">

<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"24px","fontWeight":"700"},"color":{"text":"#2c2c2c"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"crm-sidebar-title","fontFamily":"poppins"} -->
<h2 class="wp-block-heading crm-sidebar-title has-text-color has-poppins-font-family" style="color:#2c2c2c;margin-top:0;margin-bottom:0;font-size:24px;font-weight:700">Core CRM Feature list</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"background":"#3d6055","text":"#ffffff"},"border":{"radius":"50%"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"12px","right":"12px"}}},"className":"crm-sidebar-close"} -->
<div class="wp-block-button"><a class="wp-block-button__link crm-sidebar-close has-text-color has-background wp-element-button" style="border-radius:50%;color:#ffffff;background-color:#3d6055;padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px">✕</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"crm-sidebar-accordion","layout":{"type":"default"}} -->
<div class="wp-block-group crm-sidebar-accordion">

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"0","left":"0","right":"0"}},"border":{"bottom":{"width":"1px","color":"#e5e5e5"}}},"className":"crm-accordion-item active","layout":{"type":"default"}} -->
<div class="wp-block-group crm-accordion-item active" style="border-bottom-color:#e5e5e5;border-bottom-width:1px;padding-top:24px;padding-right:0;padding-bottom:0;padding-left:0">

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700"},"color":{"text":"#2c2c2c"},"spacing":{"margin":{"bottom":"16px"}}},"className":"crm-accordion-title","fontFamily":"poppins"} -->
<h3 class="wp-block-heading crm-accordion-title has-text-color has-poppins-font-family" style="color:#2c2c2c;margin-bottom:16px;font-size:18px;font-weight:700">Candidate pipeline Management</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.7"},"color":{"text":"#5c5c5c"},"spacing":{"margin":{"bottom":"24px"}}},"className":"crm-accordion-content","fontFamily":"poppins"} -->
<p class="crm-accordion-content has-text-color has-poppins-font-family" style="color:#5c5c5c;margin-bottom:24px;font-size:16px;line-height:1.7">At Edun, we transform candidate management into a seamless and efficient process. Our Candidate Pipeline Management system organically structures and organizes candidate data, providing a clear and comprehensive view of each candidate\'s journey. This intuitive system ensures that you can easily track and manage candidate progress, from initial onboarding to ongoing engagement.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"0","right":"0"}},"border":{"bottom":{"width":"1px","color":"#e5e5e5"}}},"className":"crm-accordion-item","layout":{"type":"default"}} -->
<div class="wp-block-group crm-accordion-item" style="border-bottom-color:#e5e5e5;border-bottom-width:1px;padding-top:24px;padding-right:0;padding-bottom:24px;padding-left:0">

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700"},"color":{"text":"#2c2c2c"},"spacing":{"margin":{"bottom":"0"}}},"className":"crm-accordion-title","fontFamily":"poppins"} -->
<h3 class="wp-block-heading crm-accordion-title has-text-color has-poppins-font-family" style="color:#2c2c2c;margin-bottom:0;font-size:18px;font-weight:700">Electronic Document Submission, Vetting &amp; Clearance</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.7"},"color":{"text":"#5c5c5c"},"spacing":{"margin":{"top":"16px","bottom":"0"}}},"className":"crm-accordion-content","fontFamily":"poppins"} -->
<p class="crm-accordion-content has-text-color has-poppins-font-family" style="color:#5c5c5c;margin-top:16px;margin-bottom:0;font-size:16px;line-height:1.7">Streamline your document management with our electronic submission system. Handle vetting and clearance processes efficiently with automated workflows and secure document storage.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"0","right":"0"}},"border":{"bottom":{"width":"1px","color":"#e5e5e5"}}},"className":"crm-accordion-item","layout":{"type":"default"}} -->
<div class="wp-block-group crm-accordion-item" style="border-bottom-color:#e5e5e5;border-bottom-width:1px;padding-top:24px;padding-right:0;padding-bottom:24px;padding-left:0">

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700"},"color":{"text":"#2c2c2c"},"spacing":{"margin":{"bottom":"0"}}},"className":"crm-accordion-title","fontFamily":"poppins"} -->
<h3 class="wp-block-heading crm-accordion-title has-text-color has-poppins-font-family" style="color:#2c2c2c;margin-bottom:0;font-size:18px;font-weight:700">Complete booking system</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.7"},"color":{"text":"#5c5c5c"},"spacing":{"margin":{"top":"16px","bottom":"0"}}},"className":"crm-accordion-content","fontFamily":"poppins"} -->
<p class="crm-accordion-content has-text-color has-poppins-font-family" style="color:#5c5c5c;margin-top:16px;margin-bottom:0;font-size:16px;line-height:1.7">Manage all your bookings in one place with our comprehensive booking system. Schedule assignments, track availability, and manage placements with ease.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"0","right":"0"}},"border":{"bottom":{"width":"1px","color":"#e5e5e5"}}},"className":"crm-accordion-item","layout":{"type":"default"}} -->
<div class="wp-block-group crm-accordion-item" style="border-bottom-color:#e5e5e5;border-bottom-width:1px;padding-top:24px;padding-right:0;padding-bottom:24px;padding-left:0">

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700"},"color":{"text":"#2c2c2c"},"spacing":{"margin":{"bottom":"0"}}},"className":"crm-accordion-title","fontFamily":"poppins"} -->
<h3 class="wp-block-heading crm-accordion-title has-text-color has-poppins-font-family" style="color:#2c2c2c;margin-bottom:0;font-size:18px;font-weight:700">Electronic timesheeting</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.7"},"color":{"text":"#5c5c5c"},"spacing":{"margin":{"top":"16px","bottom":"0"}}},"className":"crm-accordion-content","fontFamily":"poppins"} -->
<p class="crm-accordion-content has-text-color has-poppins-font-family" style="color:#5c5c5c;margin-top:16px;margin-bottom:0;font-size:16px;line-height:1.7">Simplify time tracking with our electronic timesheeting solution. Candidates and clients can submit and approve timesheets digitally, reducing administrative overhead.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"0","right":"0"}},"border":{"bottom":{"width":"1px","color":"#e5e5e5"}}},"className":"crm-accordion-item","layout":{"type":"default"}} -->
<div class="wp-block-group crm-accordion-item" style="border-bottom-color:#e5e5e5;border-bottom-width:1px;padding-top:24px;padding-right:0;padding-bottom:24px;padding-left:0">

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700"},"color":{"text":"#2c2c2c"},"spacing":{"margin":{"bottom":"0"}}},"className":"crm-accordion-title","fontFamily":"poppins"} -->
<h3 class="wp-block-heading crm-accordion-title has-text-color has-poppins-font-family" style="color:#2c2c2c;margin-bottom:0;font-size:18px;font-weight:700">Client Management</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.7"},"color":{"text":"#5c5c5c"},"spacing":{"margin":{"top":"16px","bottom":"0"}}},"className":"crm-accordion-content","fontFamily":"poppins"} -->
<p class="crm-accordion-content has-text-color has-poppins-font-family" style="color:#5c5c5c;margin-top:16px;margin-bottom:0;font-size:16px;line-height:1.7">Build and maintain strong client relationships with our client management tools. Track interactions, manage contracts, and maintain detailed client profiles all in one place.</p>
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
