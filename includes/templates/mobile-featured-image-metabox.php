<?php
$image_id = get_post_meta($post->ID, '_solodani_mobile_featured_image_id', true);
$image_html = $image_id ? wp_get_attachment_image($image_id, 'thumbnail') : '';
?>
<div id="mobile-featured-image-container"><?php echo $image_html; ?></div>
<input type="hidden" id="mobile-featured-image-id" name="solodani_mobile_featured_image_id" value="<?php echo esc_attr($image_id); ?>">
<button type="button" class="button" id="set-mobile-featured-image"><?php echo __('Set image', 'mobile-featured-image');?></button>
<button type="button" class="button" id="remove-mobile-featured-image"><?php echo __('Remove', 'mobile-featured-image');?></button>
