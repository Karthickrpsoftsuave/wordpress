<?php
/**
 * Custom Post Types
 *
 * Register custom post types for the theme
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Testimonials Custom Post Type
 */
function edun_register_testimonials_cpt() {
    $labels = array(
        'name'                  => _x('Testimonials', 'Post Type General Name', 'astra-child'),
        'singular_name'         => _x('Testimonial', 'Post Type Singular Name', 'astra-child'),
        'menu_name'             => __('Testimonials', 'astra-child'),
        'name_admin_bar'        => __('Testimonial', 'astra-child'),
        'archives'              => __('Testimonial Archives', 'astra-child'),
        'attributes'            => __('Testimonial Attributes', 'astra-child'),
        'parent_item_colon'     => __('Parent Testimonial:', 'astra-child'),
        'all_items'             => __('All Testimonials', 'astra-child'),
        'add_new_item'          => __('Add New Testimonial', 'astra-child'),
        'add_new'               => __('Add New', 'astra-child'),
        'new_item'              => __('New Testimonial', 'astra-child'),
        'edit_item'             => __('Edit Testimonial', 'astra-child'),
        'update_item'           => __('Update Testimonial', 'astra-child'),
        'view_item'             => __('View Testimonial', 'astra-child'),
        'view_items'            => __('View Testimonials', 'astra-child'),
        'search_items'          => __('Search Testimonial', 'astra-child'),
        'not_found'             => __('Not found', 'astra-child'),
        'not_found_in_trash'    => __('Not found in Trash', 'astra-child'),
        'featured_image'        => __('Featured Image', 'astra-child'),
        'set_featured_image'    => __('Set featured image', 'astra-child'),
        'remove_featured_image' => __('Remove featured image', 'astra-child'),
        'use_featured_image'    => __('Use as featured image', 'astra-child'),
        'insert_into_item'      => __('Insert into testimonial', 'astra-child'),
        'uploaded_to_this_item' => __('Uploaded to this testimonial', 'astra-child'),
        'items_list'            => __('Testimonials list', 'astra-child'),
        'items_list_navigation' => __('Testimonials list navigation', 'astra-child'),
        'filter_items_list'     => __('Filter testimonials list', 'astra-child'),
    );

    $args = array(
        'label'                 => __('Testimonial', 'astra-child'),
        'description'           => __('Customer testimonials and reviews', 'astra-child'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-star-filled',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'edun_register_testimonials_cpt', 0);

/**
 * Register Testimonial Category Taxonomy
 */
function edun_register_testimonial_category_taxonomy() {
    $labels = array(
        'name'                       => _x('Testimonial Categories', 'Taxonomy General Name', 'astra-child'),
        'singular_name'              => _x('Testimonial Category', 'Taxonomy Singular Name', 'astra-child'),
        'menu_name'                  => __('Categories', 'astra-child'),
        'all_items'                  => __('All Categories', 'astra-child'),
        'parent_item'                => __('Parent Category', 'astra-child'),
        'parent_item_colon'          => __('Parent Category:', 'astra-child'),
        'new_item_name'              => __('New Category Name', 'astra-child'),
        'add_new_item'               => __('Add New Category', 'astra-child'),
        'edit_item'                  => __('Edit Category', 'astra-child'),
        'update_item'                => __('Update Category', 'astra-child'),
        'view_item'                  => __('View Category', 'astra-child'),
        'separate_items_with_commas' => __('Separate categories with commas', 'astra-child'),
        'add_or_remove_items'        => __('Add or remove categories', 'astra-child'),
        'choose_from_most_used'      => __('Choose from the most used', 'astra-child'),
        'popular_items'              => __('Popular Categories', 'astra-child'),
        'search_items'               => __('Search Categories', 'astra-child'),
        'not_found'                  => __('Not Found', 'astra-child'),
        'no_terms'                   => __('No categories', 'astra-child'),
        'items_list'                 => __('Categories list', 'astra-child'),
        'items_list_navigation'      => __('Categories list navigation', 'astra-child'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => false,
        'show_tagcloud'              => false,
        'show_in_rest'               => true,
        'rewrite'                    => array('slug' => 'testimonial-category'),
    );

    register_taxonomy('testimonial_category', array('testimonial'), $args);
}
add_action('init', 'edun_register_testimonial_category_taxonomy', 0);
