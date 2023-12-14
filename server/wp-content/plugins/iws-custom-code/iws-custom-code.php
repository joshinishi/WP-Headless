<?php
/*
 * Plugin Name:       IWS Custom Code
 * Description:       Add Custom Code.
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Nishita Joshi
 */

// Remove auto-paragraph from excerpts and content
remove_filter('the_excerpt', 'wpautop');
remove_filter('the_content', 'wpautop');

// Custom function to get the featured image URL
function iws_get_featured_img_src($obj, $fieldName, $request)
{
    if ($obj['featured_media']) {
        $img = wp_get_attachment_image_src($obj['featured_media'], 'full');
        return $img[0];
    }

    return false;
}

// Register the custom field for featured image in REST API
add_action('rest_api_init', function () {
    if (!function_exists('iws_get_featured_img_src')) {
        register_rest_field('post', 'featured_src', [
            'get_callback' => 'iws_get_featured_img_src',
        ]);
    }
});
