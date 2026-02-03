# Edun Child Theme with Working Testimonials

A complete WordPress child theme with Gutenberg block patterns and a **fully working testimonials slider**.

---

## 📁 Theme Structure

```
edun-child-theme/
├── style.css                    # Main styles
├── functions.php                # Theme functions
├── screenshot.png               # Add your own (1200x900px)
├── css/
│   └── editor-style.css         # Gutenberg editor styles
├── js/
│   └── testimonials-slider.js   # Slider functionality
├── inc/
│   ├── block-patterns.php       # Gutenberg patterns
│   ├── testimonials-cpt.php     # Testimonials Custom Post Type
│   └── testimonials-shortcode.php # [edun_testimonials] shortcode
└── assets/images/               # Your images
```

---

## 🚀 Installation

### Step 1: Edit Parent Theme Name

Open `style.css` and change line 9:
```css
Template: developer theme name
```
Replace `developer theme name` with your actual parent theme folder name.

### Step 2: Upload Theme

**Via WordPress Admin:**
1. Zip the `edun-child-theme` folder
2. Go to **Appearance → Themes → Add New → Upload Theme**
3. Upload and **Activate**

**Via FTP:**
1. Upload folder to `/wp-content/themes/`
2. Activate in WordPress admin

---

## 📝 How to Add Testimonials

### For Non-Technical Users:

1. Go to **WordPress Admin → Testimonials → Add New**

2. Fill in the form:
   ```
   ┌─────────────────────────────────────────┐
   │  Title: [Internal reference only]       │
   │                                         │
   │  Quote: [Customer's testimonial text]   │
   │                                         │
   │  Customer Name: [John Smith]            │
   │                                         │
   │  Title/Company: [CEO, ABC Company]      │
   │                                         │
   │  Rating: ★★★★★                          │
   │                                         │
   │  Customer Photo: [Upload button]        │
   └─────────────────────────────────────────┘
   ```

3. Click **Publish**

4. Repeat for all testimonials

---

## 📺 Display Testimonials on a Page

### Option 1: Use Block Pattern
1. Edit your page
2. Click **+** → **Patterns** → **Edun Sections**
3. Select **"Testimonials Slider"**

### Option 2: Use Shortcode
Add this anywhere:
```
[edun_testimonials]
```

### Shortcode Options:
```
[edun_testimonials count="5"]           # Show only 5 testimonials
[edun_testimonials autoplay="false"]    # Disable auto-rotation
[edun_testimonials speed="3000"]        # Change speed (milliseconds)
[edun_testimonials orderby="rand"]      # Random order
```

---

## 🎨 Block Patterns Included

| Pattern | Description |
|---------|-------------|
| **Hero Section** | Main hero with background image |
| **What is Edun** | Centered intro section |
| **Feature - Image Right** | Text left, image right |
| **Feature - Image Left** | Image left, text right |
| **Testimonials Slider** | Dynamic from admin ⭐ |
| **About & Partner** | Device mockups section |
| **Simple CTA** | Call to action |

---

## 🎨 Brand Colors

| Color | Hex | CSS Variable |
|-------|-----|--------------|
| Dark Green | `#1a2e23` | `--edun-dark-green` |
| Medium Green | `#2d4a3e` | `--edun-medium-green` |
| Accent Green | `#3d6b5a` | `--edun-accent-green` |
| Light Green | `#5a6b60` | `--edun-light-green` |
| Off White | `#f5f7f2` | `--edun-off-white` |
| Gold | `#d4a853` | `--edun-gold` |

---

## ✨ Testimonials Slider Features

- ✅ **Auto-rotation** (pauses on hover)
- ✅ **Arrow navigation** (← →)
- ✅ **Dot navigation**
- ✅ **Touch/swipe support** (mobile)
- ✅ **Keyboard navigation** (arrow keys)
- ✅ **Responsive design**
- ✅ **Accessibility ready**
- ✅ **No plugin required**

---

## 🔧 Customization

### Change Slider Colors

Edit `style.css`, find `.edun-testimonials-section`:
```css
.edun-testimonials-section {
    background-color: #2d4a3e;  /* Change background */
}

.edun-testimonial-rating {
    color: #d4a853;  /* Change star color */
}
```

### Change Slider Speed

In shortcode:
```
[edun_testimonials speed="3000"]
```

Or edit `testimonials-slider.js`:
```javascript
this.speed = 5000;  // Change default speed
```

---

## ❓ Troubleshooting

**Testimonials not showing?**
- Make sure testimonials are **Published** (not Draft)
- Check shortcode is correct: `[edun_testimonials]`

**Slider not working?**
- Check browser console for JavaScript errors
- Clear cache

**Styles look wrong?**
- Verify parent theme is active
- Clear browser cache

---

## 📄 License

GNU General Public License v2 or later

---

## 👤 Client Quick Reference

```
To add a new testimonial:
1. Go to: Testimonials → Add New
2. Fill in: Quote, Name, Title, Rating
3. Click: Publish

To display testimonials:
- Use shortcode: [edun_testimonials]
- Or insert "Testimonials Slider" pattern
```
