
<?php


function kensei_theme_calling_scripts() {
    // Enqueue CSS
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );
	

    // Enqueue custom JavaScript
    wp_enqueue_script( 'mytheme-scripts', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );

	
}
add_action( 'wp_enqueue_scripts', 'kensei_theme_calling_scripts' );


// Enqueue dark mode styles for Gutenberg editor
function mytheme_gutenberg_dark_mode_styles() {
    add_theme_support( 'editor-styles' );
    add_editor_style( 'editor-dark-mode.css' );
}
add_action( 'after_setup_theme', 'mytheme_gutenberg_dark_mode_styles' );


// Enqueue editor styles for custom color palettes in dark mode
function mytheme_gutenberg_dark_mode_styles() {
    // Add the dark mode palette styles
    add_theme_support( 'editor-styles' );
    add_editor_style( 'editor-style.css' );

    // Enqueue the script for switching dark mode in the editor
    wp_enqueue_script(
        'dark-mode-editor-toggle',
        get_template_directory_uri() . '/js/dark-mode-editor-toggle.js',
        array( 'wp-blocks', 'wp-element', 'wp-editor' ),
        null,
        true
    );
}
add_action( 'after_setup_theme', 'mytheme_gutenberg_dark_mode_styles' );






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



// Add custom color palette for dark mode in Gutenberg
function mytheme_gutenberg_dark_mode_palette() {
    // Register custom colors for the editor
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => __( 'White', 'mytheme' ),
            'slug'  => 'white',
            'color' => '#FFFFFF',
        ),
        array(
            'name'  => __( 'Black', 'mytheme' ),
            'slug'  => 'black',
            'color' => '#000000',
        ),
        array(
            'name'  => __( 'Dark Gray', 'mytheme' ),
            'slug'  => 'dark-gray',
            'color' => '#333333',
        ),
        array(
            'name'  => __( 'Light Gray', 'mytheme' ),
            'slug'  => 'light-gray',
            'color' => '#CCCCCC',
        ),
        array(
            'name'  => __( 'Primary Blue', 'mytheme' ),
            'slug'  => 'primary-blue',
            'color' => '#1E90FF',
        ),
        array(
            'name'  => __( 'Secondary Green', 'mytheme' ),
            'slug'  => 'secondary-green',
            'color' => '#28A745',
        ),
    ));
}
add_action( 'after_setup_theme', 'mytheme_gutenberg_dark_mode_palette' );
