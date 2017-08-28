<?php

// add_action('init', 'create_sample_post_type');
// function create_sample_post_type(){

// 	register_post_type( 'sample',
//             array(
//                 'labels' => array(
//                     'name' => 'Sample',
//                     'singular_name' => 'Sample',
//                     'add_new' => 'Add New Sample',
//                     'add_new_item' => 'Add New Sample',
//                     'edit' => 'Edit',
//                     'edit_item' => 'Edit Sample',
//                     'new_item' => 'New Sample',
//                     'view' => 'View Sample',
//                     'view_item' => 'View Sample',
//                     'search_items' => 'Search Sample',
//                     'not_found' => 'No Sample found',
//                     'not_found_in_trash' => 'No Sample found in Trash',    
//                 ),
//                 'public' => true,
//                 'menu_position' => 15,
//                 'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'),
//                 'taxonomies' => array( '' ),
//                 'menu_icon' => 'dashicons-images-alt2',
//                 'has_archive' => true
//             )
//         );

// }
// // end of create_sample_post_type


add_action('init', 'create_home_slider_post_type');
function create_home_slider_post_type(){

    register_post_type( 'home_slider',
            array(
                'labels' => array(
                    'name' => 'Home Slider',
                    'singular_name' => 'Home Slider',
                    'add_new' => 'Add New Image',
                    'add_new_item' => 'Add New Image',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Image',
                    'new_item' => 'New Image',
                    'view' => 'View Image',
                    'view_item' => 'View Image',
                    'search_items' => 'Search Image',
                    'not_found' => 'No Image found',
                    'not_found_in_trash' => 'No Image found in Trash',    
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
// end of create_home_slider_post_type