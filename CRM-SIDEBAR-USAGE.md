# Core CRM Feature List Sidebar - Usage Guide

## Overview
The Core CRM Sidebar is a slide-out panel that displays CRM features in an expandable accordion format. It slides in from the right side of the screen and can be opened/closed via buttons or URL links.

## Features
- ✅ Slide-out animation from the right
- ✅ Accordion-style expandable feature list
- ✅ URL-based linking (shareable links)
- ✅ Keyboard navigation (ESC to close)
- ✅ Click outside to close
- ✅ Mobile responsive
- ✅ Smooth animations

## How to Add the Sidebar to Your Page

### Method 1: Using the Block Pattern (Recommended)
1. Go to WordPress Admin → Pages/Posts
2. Edit the page where you want the sidebar available
3. Click the (+) button to add a new block
4. Search for "Core CRM Feature List Sidebar"
5. Insert the pattern at the end of your page content (it will be positioned fixed, so placement doesn't matter visually)

### Method 2: Add to Theme Template
The sidebar pattern is registered in `inc/block-patterns-loader.php` and will be available site-wide once added to your page template.

## How to Open the Sidebar

### Option 1: Add a Button with Data Attribute
Add this button anywhere in your content:

```html
<button data-open-crm-sidebar>View CRM Features</button>
```

### Option 2: Use a Regular Link with Hash
Add a link with the special hash `#crm-features`:

```html
<a href="#crm-features">Discover CRM Features</a>
```

### Option 3: Direct Link (Shareable URL)
Share a direct link to open the sidebar automatically:
```
https://yoursite.com/page-name/#crm-features
```

### Option 4: Custom JavaScript
Call the function directly in JavaScript:
```javascript
window.openCRMSidebar();
```

## Example: Add Button to Core CRM Feature Section

If you want to add a "View Features" button to your Core CRM feature section, edit the pattern and replace the existing button with:

```html
<!-- wp:button -->
<div class="wp-block-button">
    <a class="wp-block-button__link" href="#crm-features" data-open-crm-sidebar>
        View All Features
    </a>
</div>
<!-- /wp:button -->
```

## Customization

### Modify Feature Content
Edit the file: `inc/patterns/core-crm-sidebar.php`

Each feature is structured as:
```html
<div class="crm-accordion-item">
    <button class="crm-accordion-header">
        <h3 class="crm-accordion-title">Feature Name</h3>
        <span class="crm-accordion-icon">
            <!-- Plus/Minus icons -->
        </span>
    </button>
    <div class="crm-accordion-content">
        <p>Feature description here...</p>
    </div>
</div>
```

### Modify Styles
Edit the file: `css/crm-sidebar.css`

Key classes:
- `.crm-sidebar-panel` - Main container
- `.crm-sidebar-content` - The sliding panel
- `.crm-sidebar-overlay` - Dark background overlay
- `.crm-accordion-item` - Individual feature item
- `.crm-accordion-item.active` - Expanded item

### Modify Behavior
Edit the file: `js/crm-sidebar.js`

Available functions:
- `window.openCRMSidebar()` - Opens the sidebar
- `window.closeCRMSidebar()` - Closes the sidebar

## Files Created

1. **Pattern File**: `inc/patterns/core-crm-sidebar.php`
   - Contains the HTML structure for the sidebar

2. **Styles**: `css/crm-sidebar.css`
   - All styling and animations

3. **JavaScript**: `js/crm-sidebar.js`
   - Open/close functionality and accordion behavior

4. **Functions**: Modified `functions.php`
   - Enqueues CSS and JS assets

5. **Pattern Loader**: Modified `inc/block-patterns-loader.php`
   - Registers the pattern

## Browser Support
- ✅ Chrome/Edge (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Mobile browsers

## Accessibility Features
- Keyboard navigation (ESC to close)
- ARIA labels on close button
- Semantic HTML structure
- Focus management

## Need Help?
If you need to modify the features, styling, or behavior, refer to the files listed above. The code is well-commented for easy customization.
