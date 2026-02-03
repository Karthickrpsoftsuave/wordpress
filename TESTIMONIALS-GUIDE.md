# Testimonials Feature - User Guide

## Overview
This guide explains how to use the dynamic testimonials system in your Edun WordPress theme.

---

## Quick Start

### 1. Add Your First Testimonial

1. **Login to WordPress Admin**
2. **Navigate to**: `Testimonials` → `Add New` (in the left sidebar)
3. **Fill in the fields**:
   - **Title**: Internal reference (e.g., "Cassie Review")
   - **Rating**: Select 1-5 stars from dropdown
   - **Customer Name**: The customer's name (e.g., "Cassie")
   - **Customer Role**: Their role/company (e.g., "edun customer")
   - **Testimonial Text**: Use the main editor to enter the quote
4. **Click** `Publish`

### 2. Display Testimonials on Your Page

**Method 1: Using Shortcode (Recommended)**
- In the WordPress editor, add a **Shortcode block**
- Type: `[edun_testimonials]`
- Publish/Update your page

**Method 2: Using Custom HTML Block**
- Add a **Custom HTML block**
- Paste: `[edun_testimonials]`
- Publish/Update your page

---

## Features

### ✅ What You Can Do

- **Add Unlimited Testimonials** - No limit on how many you can create
- **Edit Anytime** - Update testimonials from WordPress admin
- **Delete Testimonials** - Remove testimonials you don't want
- **Reorder** - Change the display order by editing publish dates
- **Star Ratings** - Choose 1-5 star ratings per testimonial
- **Automatic Slider** - Testimonials appear in a carousel
- **Mobile Friendly** - Swipe gestures work on mobile devices
- **Keyboard Navigation** - Use arrow keys to navigate

### 🎨 Design Features

- Matches Figma design exactly
- Green background (#477257)
- Cream text color (#F7F6F0)
- Smooth slide transitions
- Previous/Next arrow navigation
- Responsive design for all screen sizes

---

## Admin Interface Guide

### Fields Explained

| Field | Required | Description | Example |
|-------|----------|-------------|---------|
| **Title** | Optional | Internal reference only, not shown on frontend | "Cassie Review" or "John's Testimonial" |
| **Rating** | Yes | Star rating (1-5 stars) | ⭐⭐⭐⭐⭐ (5 stars) |
| **Customer Name** | Yes | Name displayed below quote | "Cassie" |
| **Customer Role** | No | Role/company displayed below name | "edun customer" or "CEO at Company X" |
| **Testimonial Text** | Yes | The actual quote (use main editor) | "Edun is an excellent CRM..." |

### Admin List View

When you view all testimonials, you'll see:
- **Customer Name** - Quick reference
- **Customer Role** - Shown below name
- **Rating** - Visual star display
- **Date** - When published

---

## How the Slider Works

### Frontend Display

1. **Shows one testimonial at a time**
2. **Navigation arrows** appear at the bottom
3. **Click left arrow** (←) to see previous testimonial
4. **Click right arrow** (→) to see next testimonial
5. **Auto-rotates** (optional - currently disabled)

### User Interactions

- **Desktop**: Click arrow buttons or use keyboard arrows
- **Tablet**: Tap arrow buttons or swipe
- **Mobile**: Tap arrows or swipe left/right

---

## Usage Examples

### Example 1: Basic Testimonials Page

```
1. Create a new page: "Customer Reviews"
2. Add a Shortcode block
3. Enter: [edun_testimonials]
4. Publish
```

### Example 2: Homepage Section

```
1. Edit your homepage
2. Add content sections above and below
3. Insert Shortcode block with: [edun_testimonials]
4. The testimonials section will have green background automatically
5. Update page
```

---

## Managing Testimonials

### Adding New Testimonials

**Quick Steps:**
1. Testimonials → Add New
2. Enter customer name
3. Select rating
4. Enter role (optional)
5. Type the testimonial quote in the editor
6. Publish

**Tips:**
- Keep testimonials concise (2-4 sentences works best)
- Use real customer names when possible
- Include their role/company for credibility
- Aim for 5-star ratings when appropriate

### Editing Existing Testimonials

1. Go to `Testimonials` → `All Testimonials`
2. Hover over testimonial and click `Edit`
3. Make your changes
4. Click `Update`

Changes appear immediately on the frontend!

### Deleting Testimonials

1. Go to `Testimonials` → `All Testimonials`
2. Hover over testimonial and click `Trash`

Deleted testimonials are removed from the slider automatically.

### Changing Display Order

Testimonials display newest first by default.

**To reorder:**
1. Edit the testimonial
2. Change the publish date
3. Update

Testimonials with newer dates appear first in the rotation.

---

## Technical Details

### Files Created

```
inc/
├── custom-post-types.php          # Registers testimonials post type
├── testimonial-meta-boxes.php     # Adds custom fields
└── patterns/
    └── testimonials-section.php   # Testimonials display template

js/
└── testimonials-slider.js         # Slider functionality

css/
└── testimonials.css              # Testimonial styling
```

### Shortcode

**Shortcode:** `[edun_testimonials]`

**Usage:**
```
[edun_testimonials]
```

### Custom Post Type

- **Post Type:** `testimonial`
- **Slug:** `testimonial`
- **Icon:** Star (dashicon-star-filled)
- **Public:** No (admin only)
- **Has Archive:** No

### Meta Fields

- `_testimonial_customer_name` - Customer name
- `_testimonial_customer_role` - Customer role/company
- `_testimonial_rating` - Star rating (1-5)

---

## Styling & Design

### Colors Used

- **Background**: #477257 (Green)
- **Title**: #F7F6F0 (Cream)
- **Stars**: #294338 (Edun Green)
- **Quote Text**: #F7F6F0 (Cream)
- **Customer Name**: #D5D5BC (Olive)
- **Customer Role**: #D5D5BC (Olive)

### Typography

- **Font Family**: Poppins
- **Title**: 32px, Bold
- **Quote**: 18px, Regular
- **Customer Name**: 16px, Bold
- **Customer Role**: 16px, Regular

---

## Troubleshooting

### Testimonials Not Showing?

**Check:**
1. Are there any published testimonials?
2. Is the shortcode correct? `[edun_testimonials]`
3. Are you logged out? (Empty state only shows to admins)

### Slider Not Working?

**Check:**
1. Browser console for JavaScript errors
2. Make sure JavaScript is enabled
3. Try clearing browser cache

### Styling Issues?

**Check:**
1. Make sure CSS file is loading
2. Clear WordPress cache (if using caching plugin)
3. Check browser developer tools for CSS conflicts

---

## Best Practices

### Content Guidelines

✅ **DO:**
- Use authentic customer testimonials
- Keep quotes concise and impactful
- Include customer name and role
- Use 4-5 star ratings for credibility
- Add 5-10 testimonials for good rotation

❌ **DON'T:**
- Use fake testimonials
- Make quotes too long (over 200 words)
- Use all 5-star ratings (looks fake)
- Add testimonials without customer name

### SEO Tips

- Use real customer names (builds trust)
- Include relevant keywords naturally in testimonials
- Add variety in testimonial content
- Keep testimonials updated and fresh

---

## Support

For issues or questions:
1. Check this guide first
2. Review the troubleshooting section
3. Check WordPress debug log
4. Contact your developer

---

## Version History

**Version 1.0.0**
- Initial release
- Custom post type for testimonials
- Slider functionality
- Mobile-responsive design
- Keyboard and touch navigation
