=== Mobile Featured Image ===
Contributors: solodani
Tags: featured image, mobile image, responsive, admin, metabox
Requires at least: 5.0
Tested up to: 6.5
Requires PHP: 7.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds a second featured image field for posts and pages, specifically for mobile display.

== Description ==

This plugin adds a new metabox to posts and pages in the WordPress admin that lets you choose a **second featured image**, intended to be used on **mobile devices**.

Useful when you want a vertical image for mobile and a horizontal one for desktop, or simply need more control over responsive visuals.

**Features:**

- Adds a “Mobile Featured Image” metabox in the sidebar.
- Uses the native WordPress Media Library.
- Stores the selected image as post meta.
- Developer-friendly function to retrieve the image.
- Lightweight and dependency-free.

== Installation ==

1. Upload the plugin folder to `/wp-content/plugins/mobile-featured-image`, or install directly from the Plugins screen.
2. Activate the plugin.
3. Edit any post or page: you'll see a new **"Mobile Featured Image"** box in the sidebar.
4. Use the helper function in your theme to display the image:

== Usage ==

 In your theme, add_

```php

echo get_mobile_featured_image();
