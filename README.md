# tham-wp-theme

This WordPress theme is built on [Bootstrap](http://getbootstrap.com)

## Changelog
### v1.2
1. Comments now supported on the blog.
2. *Reviews* section changed to *Analysis*
3. Bugfix: Posts in *Analysis* now light up the appropriate nav link in single post view.
4. Consolidated single post view template files and rewrote PHP to show active category in nav for single posts and category views (*Blog* and *Analysis*).
5. Fix permalink structure, specifically for portfolio streams. E.g. When *Actor* is clicked, brings user to website.ca/past/actor.
6. Better solution for choosing portfolio post layouts. Select a template from *Page Attributes* - No more wrestling with custom fields and values! (Made possible with WordPress 4.7)
7. Incorporate featured images into post and portfolio listings, including a hover effect for desktop and pagination support.
8. Prettied up URLs for Blog, Analysis, Portfolio Category listings.

### v1.1
1. Portfolio items (single view)
  - Support for 2 custom content boxes
  - Support for alternative layout (use custom field to specify if left or right content box should be widest)
2. Photo gallery support site-wide and inside single portfolio page custom content boxes (FooGallery recommended)
3. Past page
  - Portfolio section tiles 
    - Resized to appear on 1 line on desktop, and to appear smaller on mobile (to encourage scrolling)
    - Font is now Arial Black
    - Colorize effect on hover
    - Background images are now user-changeable through custom fields in the backend (Past page)
  - Optional featured image moved below portfolio section tiles
4. Documentation
  - Added dependencies list
  - Added "How to set images on Past page"
5. Blog Posts and Reviews
  - Single posts
    - Removed timestamps
    - Featured image now displays at half the page's width, aligned to the top right corner (larger devices)
  - Category pages
    - Added page title ("Blog" "Reviews") on mobile devices because of collapsed navigation menu
6. About & CV pages
  - Narrowed the content area (Use "About" and "CV" page templates in WordPress backend)
7. Landing page
  - Added photography
  - Added photography 'animation'
  - Adjusted hover transition times

## Documentation

### Dependencies:
- WordPress 4.7 or higher
- plugin: Meta Box
- plugin: FooGallery
- plugin: FooBox Image Lightbox
- plugin: Portfolio Post Type by Devin Price

### Known issues:
No known issues right now.

### How to set images on Past page:
- Use these custom fields when editing the Past page:
  - Section Image - Actor
  - Section Image - Creator
  - Section Image - Director
  - Section Image - Teacher
- Simply paste a direct link to your desired image in the Value field (should end with .jpg, .png, or another image file type) and click Update.
- Note: Only edit the Value field - Changing the Name field will break this functionality.

### Picking a layout for a portfolio post
You can choose from two layouts for portfolio posts:
1. **Left Column Wider** - Recommended when featured image is in *landscape* orientation
2. **Right Column Wider** - Recommended when featured image is in *portrait* orientation

Note that *Left Column Wider* is the default - If you don't choose otherwise, *Default Template* will be used, which is identical to *Left Column Wider*.
