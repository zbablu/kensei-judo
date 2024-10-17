
<?php


function kensei_theme_calling_scripts() {
    // Enqueue CSS
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );

    // Enqueue custom JavaScript
    wp_enqueue_script( 'mytheme-scripts', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'kensei_theme_calling_scripts' );




// Register Custom Post Type Instructor
function create_instructor_cpt() {

	$labels = array(
		'name' => _x( 'Instructors', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Instructor', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Instructors', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Instructor', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Instructor Archives', 'textdomain' ),
		'attributes' => __( 'Instructor Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Instructor:', 'textdomain' ),
		'all_items' => __( 'All Instructors', 'textdomain' ),
		'add_new_item' => __( 'Add New Instructor', 'textdomain' ),
		'add_new' => __( 'Add New Instructor', 'textdomain' ),
		'new_item' => __( 'New Instructor', 'textdomain' ),
		'edit_item' => __( 'Edit Instructor', 'textdomain' ),
		'update_item' => __( 'Update Instructor', 'textdomain' ),
		'view_item' => __( 'View Instructor', 'textdomain' ),
		'view_items' => __( 'View Instructors', 'textdomain' ),
		'search_items' => __( 'Search Instructor', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Instructor', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Instructor', 'textdomain' ),
		'items_list' => __( 'Instructors list', 'textdomain' ),
		'items_list_navigation' => __( 'Instructors list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Instructors list', 'textdomain' ),
        
	);
	$args = array(
		'label' => __( 'Instructor', 'textdomain' ),
		'description' => __( 'Add or Find Instructors here', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessperson',
		'supports' => array('title', 'thumbnail', 'custom-fields','editor'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'instructor', $args );

}
add_action( 'init', 'create_instructor_cpt', 0 );