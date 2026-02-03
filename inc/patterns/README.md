# Edun Block Patterns

This directory contains individual Gutenberg block pattern files for the Edun theme. Each pattern is in its own file for better organization and maintainability.

## Pattern Files

### 1. hero-section.php
**Title:** Hero Section
**Description:** Main hero section with background image and call-to-action
**Categories:** edun, featured
**Usage:** Full-width hero with content on left and image on right

### 2. what-is-edun.php
**Title:** What is edun Section
**Description:** Centered content section with headline and description
**Categories:** edun
**Usage:** Introductory section explaining what edun is

### 3. core-crm-feature.php
**Title:** Core CRM Feature
**Description:** Feature section with text on left and image on right
**Categories:** edun
**Usage:** Showcase the Core CRM product

### 4. connect-feature.php
**Title:** Connect Feature
**Description:** Feature section with image on left and text on right
**Categories:** edun
**Usage:** Showcase the Connect product

### 5. testimonials-section.php
**Title:** Testimonials Section
**Description:** Customer testimonials with star ratings and slider
**Categories:** edun
**Usage:** Display customer testimonials using the [edun_testimonials] shortcode

### 6. your-partner-section.php
**Title:** Your Partner Section
**Description:** Partner section with device mockups and call to action
**Categories:** edun
**Usage:** Final section before footer

## How It Works

### Pattern Registration

All patterns are automatically registered through the `block-patterns-loader.php` file located in the parent `inc` directory. The loader:

1. Scans this directory for pattern files
2. Includes each pattern file
3. Registers the pattern with WordPress using `register_block_pattern()`

### Pattern File Structure

Each pattern file follows this structure:

```php
<?php
// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

return array(
    'title'       => __('Pattern Title', 'edun-child'),
    'description' => __('Pattern description', 'edun-child'),
    'categories'  => array('edun'),
    'content'     => '<!-- Block markup here -->'
);
```

### Adding a New Pattern

To add a new pattern:

1. Create a new PHP file in this directory (e.g., `my-pattern.php`)
2. Follow the pattern structure shown above
3. Add the pattern file name to the `$pattern_files` array in `block-patterns-loader.php`
4. The pattern will be automatically registered on the next page load

Example:

```php
// In block-patterns-loader.php
$pattern_files = array(
    'hero-section'         => 'hero-section.php',
    'what-is-edun'         => 'what-is-edun.php',
    // ... existing patterns ...
    'my-pattern'           => 'my-pattern.php', // Add your pattern here
);
```

## Design Specifications

All patterns are designed to match the Figma design pixel-perfectly with these specifications:

### Colors
- **Primary Green:** #2d4a3e
- **Dark Green:** #1a2e23
- **Light Green:** #5a6b60
- **Off White:** #f5f7f2
- **Gold (Stars):** #d4a853
- **White:** #ffffff

### Typography
- **Font Family:** DM Sans
- **Heading Sizes:**
  - H1: 60px (Hero)
  - H2: 48px (Section Headings)
  - H2: 40px (Feature Headings)
- **Body Text:** 16px
- **Small Text:** 14px

### Spacing
- **Section Padding:** 100px top/bottom, 191px left/right
- **Content Max Width:** 1129px
- **Column Gap:** 100px

### Responsive Breakpoints
- **Desktop:** 1280px+
- **Tablet:** 1024px - 1279px
- **Mobile:** 768px and below

## Customization

To customize a pattern:

1. Edit the corresponding PHP file
2. Modify the block markup in the `'content'` field
3. Save the file
4. Clear WordPress cache if using a caching plugin
5. The changes will be reflected in the pattern inserter

## Styling

Additional CSS for patterns is located at:
`/css/patterns.css`

This file includes:
- Responsive design adjustments
- Button hover effects
- Typography refinements
- Accessibility improvements

## Using Patterns in WordPress

1. Open the Block Editor (Gutenberg)
2. Click the "+" button to add a new block
3. Search for "Edun" or navigate to the "Edun Sections" category
4. Select the pattern you want to insert
5. Customize the content as needed

## Notes

- All patterns use native WordPress blocks (no custom blocks required)
- Patterns are fully responsive and mobile-friendly
- Images are placeholders - replace with actual images when using the patterns
- The testimonials section uses a custom shortcode: `[edun_testimonials]`
- All text is translatable using WordPress i18n functions

## Support

For issues or questions about the patterns, please refer to the main theme documentation or contact the theme developer.

