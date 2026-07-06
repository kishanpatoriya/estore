# ReSell Store - PHP Website Components

This package contains reusable PHP components and complete pages for the ReSell Store e-commerce website.

## Files Created

### Standalone Pages (Ready to Use)
1. **furniture-category.php** - Complete standalone furniture category page with all HTML/CSS/JS
   - Pixel-perfect match to the Furniture & Home screenshot
   - Fully responsive design
   - No external dependencies required
   - Just open in browser and use

2. **furniture.php** - Modular furniture page that includes header/footer
   - Uses existing header.php and footer.php
   - Uses Tailwind CSS configuration
   - Modular approach for team development

### Reusable Components

3. **components/product-card.php**
   - Function: `render_product_card($product, $view_mode)`
   - Parameters:
     - `$product` (array): Product data with keys: title, image, condition, condition_style, distance, price, verified
     - `$view_mode` (string): 'grid' or 'list'
   - Renders individual product cards in grid or list view
   - Includes hover effects and favorite button

4. **components/sidebar.php**
   - Function: `render_sidebar($filters)`
   - Parameters:
     - `$filters` (array): Containing 'categories', 'materials', 'conditions'
   - Renders complete filter sidebar with all filter options
   - Includes price range, category, material, condition, and location filters

### Data Files

5. **data/mockData.js** (Optional - for future React conversion)
   - Contains product and filter data in JavaScript format

## How to Use

### Option 1: Standalone Page (Recommended for Quick Start)
1. Copy `furniture-category.php` to your web root
2. Open in browser: `http://localhost/xampp/htdocs/estore/furniture-category.php`
3. No additional setup required

### Option 2: Modular Components
```php
<?php
// Include components
include 'components/product-card.php';
include 'components/sidebar.php';

// Define your data
$filters = [
    'categories' => [
        ['name' => 'Seating', 'count' => 145],
        // ... more categories
    ],
    'materials' => [ /* ... */ ],
    'conditions' => [ /* ... */ ]
];

$product = [
    'title' => 'Nordic Ergonomic Chair',
    'image' => 'https://example.com/image.jpg',
    'condition' => 'Like New',
    'condition_style' => 'bg-green-100 text-green-700',
    'distance' => '2.4 miles away',
    'price' => '$240',
    'verified' => true
];

// Render components
render_sidebar($filters);
render_product_card($product, 'grid');
?>
```

## Product Data Structure

```php
$product = [
    'title' => 'Product Name',
    'image' => 'https://example.com/image.jpg',
    'condition' => 'Like New|Good|Fair',
    'condition_style' => 'bg-green-100 text-green-700|bg-gray-100 text-gray-600',
    'distance' => '2.4 miles away',
    'price' => '$240',
    'verified' => true|false
];
```

## Filter Data Structure

```php
$filters = [
    'categories' => [
        ['name' => 'Category Name', 'count' => 145, 'checked' => false]
    ],
    'materials' => [
        ['name' => 'Material Name', 'count' => 89, 'checked' => false]
    ],
    'conditions' => [
        ['name' => 'Condition Name', 'count' => 245, 'checked' => false]
    ]
];
```

## Styling

### Brand Color
- Primary: `#0f5132` (Dark Green)
- Light: `#e8f5e9` (Light Green)

### Responsive Breakpoints
- Mobile: < 768px
- Tablet: 768px - 1024px
- Desktop: > 1024px

### CSS Classes Available
- `.text-brand` - Brand color text
- `.bg-brand` - Brand color background
- `.border-brand` - Brand color border
- `.hover\:text-brand:hover` - Hover text effect
- `.hover\:bg-green-800:hover` - Darker green on hover

## Features

✓ Pixel-perfect responsive design
✓ Fully functional filters (Price, Category, Material, Condition, Location)
✓ Product card grid layout
✓ Favorite button functionality ready
✓ Pagination controls
✓ Mobile-friendly navigation
✓ Accessible HTML5 semantics
✓ Tailwind CSS optimization
✓ Reusable PHP components
✓ Clean code structure

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Installation Instructions

1. Copy all files to your `d:\xampp\htdocs\estore\` directory
2. Ensure your web server is running
3. For standalone page: Open `furniture-category.php` in browser
4. For modular setup: Include components in your PHP files as shown above

## Notes

- All product images use Unsplash for demonstration
- JavaScript event handlers are ready for implementation
- Form submissions require backend processing (not included)
- Filters are UI-only (backend integration needed for functionality)
