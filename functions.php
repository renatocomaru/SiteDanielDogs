<?php
function create_post_type()
{
    register_post_type(
        'gallery-images',
        array(
            'labels' => array(
                'name' => __('Gallery Images'),
                'singular_name' => __('Gallery Image')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'comments'),
            'taxonomies' => array('category'),
        )
    );
}
add_action('init', 'create_post_type');

add_theme_support('post-thumbnails', array('post', 'gallery-images'));


function custom_gallery_size()
{
    add_image_size('gallery-thumb', 350, 350, true); // 350px wide and 350px tall, cropped
}
add_action('after_setup_theme', 'custom_gallery_size');
