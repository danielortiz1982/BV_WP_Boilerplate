<?php

add_action('init', 'create_sample_post_type');
function create_sample_post_type(){

	register_post_type( 'home_slider',
            array(
                'labels' => array(
                    'name' => 'Home Slideshow',
                    'singular_name' => 'Home Slideshow',
                    'add_new' => 'Add New Slideshow',
                    'add_new_item' => 'Add New Sample',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Slideshow',
                    'new_item' => 'New Slideshow',
                    'view' => 'View Slideshow',
                    'view_item' => 'View Slideshow',
                    'search_items' => 'Search Slideshow',
                    'not_found' => 'No Slideshow found',
                    'not_found_in_trash' => 'No Home Slideshow found in Trash',    
                ),
                'public' => true,
                'menu_position' => 15,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-images-alt2',
                'has_archive' => true
            )
        );

}
// end of create_sample_post_type