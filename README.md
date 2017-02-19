# tham-wp-theme

## Changelog
### v0.8
1. Blog, Analysis, and Portfolio Category views
  - Changed font to *Courier New*
  - Centered post preview text content on desktop
2. Responsive Video Embed
  - Make embedded videos responsive using *Advanced Responsive Video Embedder (ARVE)* plugin. Supports YouTube, Vimeo,
  your own hosted video files, and more. See theme documentation below for more info.
3. Pages with Full Image Backgrounds
  - Links now appear white, rather than unreadable blue.
  - Fix navbar drop shadow - now appears darker and blends in with the shaded page background.
4. Removed old/unnecessary theme files
5. Fix version numbering
  - Retroactively re-numbered versions. 0.x means the theme is in development. The version used at site launch will be numbered
  1.0. For now, the old numbering scheme (e.g. *1.x*) becomes *0.x*.
  

### v0.7
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

### v0.6
1. Post/page editor
  - Remove baked-in custom styles, replace with plugin (*TinyMCE Advanced*)
  - Restyle headings in posts/pages - No longer all caps or in *Courier New* font.
2. Share buttons
  - Added styling for *AddThis* plugin social media share buttons
3. New: Portfolio Navigation menu - Easily change sections & see which categories apply to the posts in view.

### v0.5
1. Post titles are easier to read (added shader over featured images).
2. Made Footer sticky - appears at bottom even when content doesn't fill the page.
3. Mobile nav menu
  - Crossover has a different background color and an arrow.
  - *Performance* and *Thought* links are bigger.
  - Centered links and made them bigger.
4. Revert Portfolio post content stacking to original order - On mobile, featured image is displayed first.

### v0.4
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

### v0.3
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

### v0.2
1. Comments now supported on the blog.
2. *Reviews* section changed to *Analysis*
3. Bugfix: Posts in *Analysis* now light up the appropriate nav link in single post view.
4. Consolidated single post view template files and rewrote PHP to show active category in nav for single posts and category views (*Blog* and *Analysis*).
5. Fix permalink structure, specifically for portfolio streams. E.g. When *Actor* is clicked, brings user to website.ca/past/actor.
6. Better solution for choosing portfolio post layouts. Select a template from *Page Attributes* - No more wrestling with custom fields and values! (Made possible with WordPress 4.7)
7. Incorporate featured images into post and portfolio listings, including a hover effect for desktop and pagination support.
8. Prettied up URLs for Blog, Analysis, Portfolio Category listings.

### v0.1
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

### Requirements:
- WordPress 4.7 or higher
- plugin: [Meta Box](https://en-ca.wordpress.org/plugins/meta-box/)
- plugin: [FooGallery](https://en-ca.wordpress.org/plugins/foogallery/)
- plugin: [FooBox Image Lightbox](https://en-ca.wordpress.org/plugins/foobox-image-lightbox/)
- plugin: [Portfolio Post Type by Devin Price](https://en-ca.wordpress.org/plugins/portfolio-post-type/)
- plugin: [TinyMCE Advanced](https://en-ca.wordpress.org/plugins/tinymce-advanced/)
- plugin: [Share Buttons by AddThis](https://en-ca.wordpress.org/plugins/addthis/)
- plugin: [Advanced Responsive Video Embedder](https://en-ca.wordpress.org/plugins/advanced-responsive-video-embedder/)
- plugin: [Shortcake (Shortcode UI)](https://en-ca.wordpress.org/plugins/shortcode-ui/)

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

### Embedding videos
#### From online video providers
Videos can be embedded by clicking the *Embed Video (ARVE)* button in the post editor. Supports many providers including
YouTube and Vimeo. Paste the video link in right field and the ARVE will do the rest.

#### From your video files
To embed your own video, first upload the video file to the WordPress Media Library. Supports .mp4/.m4v/.webm/.ogv files.

When the upload completes, click the video thumbnail to open the *Attachment Details* popup. Copy the video URL provided by
WordPress - This is the path to your video file.

Click the *Embed Video (ARVE)* button in the post editor and paste in your video URL.Click

#### Changing video size and alignment
By default, embedded videos take up the full width available - Setting alignment is unnecessary and might break things.

When embedding a video in a post, you can specify *Maximal width* (number of pixels) and *Alignment* (None, Left, Right, Center)
if you'd like the video to take up less than the full width available.

## Copyright and Licenses

Copyright 2016-2017 Dylan On. Code released under [GNU GPL v2](http://www.gnu.org/licenses/gpl-2.0.html) license.

This project incorporates awesome licensed code from:
- [Bootstrap](http://getbootstrap.com) created by Mark Otto and Jacob Thornton (MIT License)
- [TouchSwipe](https://github.com/mattbryson/TouchSwipe-Jquery-Plugin) by Matt Bryson (MIT License)
- [Bootstrap on Wordpress Theme](https://github.com/babobski/bootstrap-on-wordpress-theme) by Babobski (for comments - GPL v2 License)

Thank you for sharing your work!