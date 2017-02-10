# tham-wp-theme

This WordPress theme is made possible by the following awesome code:
- [Bootstrap](http://getbootstrap.com)
- [TouchSwipe](https://github.com/mattbryson/TouchSwipe-Jquery-Plugin) by Matt Bryson
- [*Portfolio Post Type*](https://github.com/devinsays/portfolio-post-type) by Devin Price and Gary Jones
- [Bootstrap on Wordpress Theme](https://github.com/babobski/bootstrap-on-wordpress-theme) by babobski (for comments)

## Changelog
### v1.8
1. Blog, Analysis, and Portfolio Category views
  - Changed font to *Courier New*
  - Centered post preview text content on desktop

### v1.7
1. Footer Links
  - Custom footer menu - Edit this menu from *Appearance > Menus*. You can add as many links as you want!
2. Portfolio navigation
  - Removed "View projects as:" text
  - Centered the nav
3. Posts views (Blog, Analysis, Portfolio Categories)
  - Unshade blue background for posts without a featured image - Colour now appears properly.
4. Portfolio - single posts
  - Add a title at the top on mobile
5. Bugfix: Mobile viewport is properly sized now.
6. Blog and Analysis
  - Add support for tags
  - Move date under post title and style it red
7. 404 Error Page
  - Loads when the user tries to access a URL that doesn't exist, and displays a message.
  - Also has a search bar, and allows for searching of the site's content.

### v1.6
1. Post/page editor
  - Remove baked-in custom styles, replace with plugin (*TinyMCE Advanced*)
  - Restyle headings in posts/pages - No longer all caps or in *Courier New* font.
2. Share buttons
  - Added styling for *AddThis* plugin social media share buttons
3. New: Portfolio Navigation menu - Easily change sections & see which categories apply to the posts in view.

### v1.5
1. Post titles are easier to read (added shader over featured images).
2. Made Footer sticky - appears at bottom even when content doesn't fill the page.
3. Mobile nav menu
  - Crossover has a different background color and an arrow.
  - *Performance* and *Thought* links are bigger.
  - Centered links and made them bigger.
4. Revert Portfolio post content stacking to original order - On mobile, featured image is displayed first.

### v1.4
1. Fixed *Image Background* page template behaviour - now **really** fills the whole background.
2. Bugfix: Performance navigation bar now responds to taps/clicks to switch over to Thought.
3. Add disabled code for jQuery Mobile for future use.
4. Hard code 'Why Analysis' post ID into *Analysis* posts view.
5. Change logo link - now leads to Blog or Present, depending on where you are.
6. Incorporate newly edited photography.
7. Blog and Analysis single post view
  - *Older* and *Newer* post links now stay within each category (no mixing of categories).
  - *Older* and *Newer* post links now stack & unstack depending on device size, and were moved above comments.
  - Add link back to Blog or Analysis page for easier navigation
  - Round *Leave a Comment* box corners for Blog posts.
8. Portfolio single post view
  - Fix ordering of content on mobile - Title now appears at top.
9. Landing page
  - On phones, swipe to select section of site you'd like to enter.
  - On larger touch devices, tap to see a section option - tap again to enter.
  - On full-sized computers, hover to selection section.

### v1.3
1. *Analysis* page
  - Fix page title on mobile/tablet
  - 'Why Analysis' post excerpt is displayed at top on mobile/tablet, and in place of right column on desktop. Reduced to two columns of posts.
2. Bugfix: Posts View PHP now closes Bootstrap rows properly.
3. Bugfix: Typos in posts view code.
4. New page templates
  - *Image Background (Performance Section)* and *Image Background (Thought Section)* are now options for pages
  under *Page Attributes*. Fills the background with a shaded featured image, and turns the text light grey
  for visibility.
  - Removed old, unnecessary templates: *index2.php*, *about.php*, *cv.php*, *performance-no-title.php*,
  *thought-no-title.php*
  - *Performance Section* and *Thought Section* allow you to pick which navigation shows at the top.
  (*Default Template* is identical to *Performance Section*.)
  - *Slim Layout* available in both *Performance* and *Thought* flavours.
  - Structural changes behind the scenes to make *Image Background* templates possible.

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
- plugin: TinyMCE Advanced
- plugin: Share Buttons by AddThis

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
