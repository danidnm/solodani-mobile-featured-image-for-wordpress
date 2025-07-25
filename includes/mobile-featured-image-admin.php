<?php

// Add a meta box to the admin post edit
add_action('add_meta_boxes', function() {
    foreach (['post', 'page'] as $post_type) {
        add_meta_box(
            'solodani_mobile_featured_image',
            'Imagen destacada móvil',
            'solodani_mobile_featured_image_metabox',
            $post_type,
            'side',
            'high'
        );
    }
});

// Meta box content
function solodani_mobile_featured_image_metabox($post) {
    include locate_template('mobile-featured-image-metabox.php') ?: MOBILE_FEATURED_IMAGE_PATH . 'includes/templates/mobile-featured-image-metabox.php';
}

// Enqueue scripts for meta box to show media frame
function solodani_mobile_featured_image_admin_scripts($hook) {
    if (in_array($hook, ['post.php', 'post-new.php'])) {
        wp_enqueue_script(
            'mobile-featured-image-js',
            MOBILE_FEATURED_IMAGE_URL . 'assets/js/mobile-featured-image.js',
            ['jquery'],
            '1.0',
            true
        );
        wp_localize_script('mobile-featured-image-js', 'DFI_TEXTS', [
            'title'  => __('Featured image for mobile', 'mobile-featured-image'),
            'button' => __('Use this image', 'mobile-featured-image')
        ]);
    }
};
add_action('admin_enqueue_scripts', 'solodani_mobile_featured_image_admin_scripts');

// Enqueue CSS File for styles
function solodani_mobile_featured_image_admin_styles() {
    wp_enqueue_style(
        'mobile-featured-image-style',
        MOBILE_FEATURED_IMAGE_URL . 'assets/css/mobile-featured-image.css',
        [],
        '1.0.0'
    );
}
add_action('admin_enqueue_scripts', 'solodani_mobile_featured_image_admin_styles');

// Save meta box content on post save
function solodani_mobile_featured_image_save_post_action($post_id) {
    if (isset($_POST['solodani_mobile_featured_image_id'])) {
        update_post_meta($post_id, '_solodani_mobile_featured_image_id', intval($_POST['solodani_mobile_featured_image_id']));
    }
}
add_action('save_post', 'solodani_mobile_featured_image_save_post_action');