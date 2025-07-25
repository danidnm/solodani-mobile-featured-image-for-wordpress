<?php

// Returns mobile featured image
function get_mobile_featured_image($size = 'full', $post_id = null) {
    $post_id = $post_id ?: get_the_ID();
    $image_id = get_post_meta($post_id, '_solodani_mobile_featured_image_id', true);
    if ($image_id) {
        return wp_get_attachment_image($image_id, $size);
    }
    return '';
}

// Prints mobile featured image
function the_mobile_featured_image($size = 'full', $post_id = null) {
    echo get_mobile_featured_image($size, $post_id);
}
