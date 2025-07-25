# 📱 Mobile Featured Image

Adds a second featured image field for posts and pages, specifically for mobile display.

## ✨ Features

- Adds a **"Mobile Featured Image"** metabox in the WordPress editor (sidebar).
- Uses the native WordPress Media Library.
- Stores the selected image as post meta.
- Helper function to retrieve the image in templates.
- Lightweight and dependency-free.

## 🛠️ Installation

1. Upload the plugin folder to `/wp-content/plugins/mobile-featured-image`, or install it via the WordPress dashboard.
2. Activate the plugin from the **Plugins** menu.
3. Edit any post or page — you'll see a new **"Mobile Featured Image"** metabox in the sidebar.
4. Use the provided function in your theme to render the mobile image:

## ❓ FAQ

### Does it replace the default featured image?
No. It adds a second, independent image. You control how it’s displayed in your theme.

### Can I use it with custom post types?
Currently, only post and page are supported. Support for CPTs is planned.

### Is it translatable?
Yes. All labels are translatable using Loco Translate or .po/.mo files.

## 📸 Screenshots


## 🧩 Usage / Developer Helper

```php
echo get_mobile_featured_image($size, $post_id);    // Both parameters are optional
```

Or:

```php
echo the_mobile_featured_image($size, $post_id);    // Both parameters are optional
```

Or:

```php
<div class="mobile-only">
    <?php the_mobile_featured_image(); ?>
</div>
<div class="desktop-only">
    <?php the_post_thumbnail(); ?>
</div>
```

Or:

```php
<div class="mobile-only">
    <?php the_mobile_featured_image(); ?>
</div>
<div class="desktop-only">
    <?php the_post_thumbnail(); ?>
</div>
```

## 📦 Changelog

1.0.0
Initial release: adds metabox, media uploader integration, save logic, and helper function.

