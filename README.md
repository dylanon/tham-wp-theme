# tham-wp-theme

This WordPress theme is built on [Bootstrap](http://getbootstrap.com)

## Changelog (since initial sample site):
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

## To do list
- Remove 'category' base from Blog and Reviews (and update navbar)
- Fix portfolio and portfolio category link aesthetics
- Archive styling
- User-generated content styling
- Fix archive outline colours with post counting?
- Code directions for custom user-built pages (e.g. Present - if user wants columns and/or bordered boxes)

## Documentation

### Dependencies:
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
