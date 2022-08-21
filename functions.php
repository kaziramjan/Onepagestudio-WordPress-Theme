<?php
/**
 * ONEPAGE STUDIO functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 */

// Theme setup functions 
add_action('after_setup_theme', 'onepagestudio_functions');
function onepagestudio_functions() {

    // Text Domain 
    load_theme_textdomain('onepagestudio', get_template_directory().'/lang');

    // Theme supports 
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menu('main-menu', __('Main Menu', 'onepagestudio'));
    register_nav_menu('footer-menu', __('Footer Menu', 'onepagestudio'));

}

// Including the styles
add_action('wp_enqueue_scripts', 'onepagestudio_styles');

function onepagestudio_styles(){
    

    wp_enqueue_style('normalize', get_template_directory_uri().'/resources/normalize.css');
    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style('gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('googleapis2', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
    wp_enqueue_style('FontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');
    wp_enqueue_style('owlcarousel', get_template_directory_uri().'/resources/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css');
    wp_enqueue_style('owl-theme-default', get_template_directory_uri().'/resources/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css');
    wp_enqueue_style('animate', get_template_directory_uri().'/resources/animate.css-main/animate.css');
    wp_enqueue_style('main-css', get_template_directory_uri().'/css/main.css');


    wp_enqueue_style('stylesheet', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'onepagestudio_scripts');

function onepagestudio_scripts(){
    wp_enqueue_script('jquery-3.5.1', get_template_directory_uri().'/resources/jquery-3.5.1.js', array('jquery'), '', true);
    wp_enqueue_script('OwlCarousel2', get_template_directory_uri().'/resources/OwlCarousel2-2.3.4/dist/owl.carousel.js', array('jquery', 'jquery-3.5.1'), '', true);
    wp_enqueue_script('counterup', get_template_directory_uri().'/resources/counterup/counterup.min.js', array('jquery', 'jquery-3.5.1', 'OwlCarousel2'), '', true);
    wp_enqueue_script('wow', get_template_directory_uri().'/resources/WOW-master/dist/wow.js', array('jquery', 'jquery-3.5.1', 'OwlCarousel2', 'counterup'), '', true);
    wp_enqueue_script('js', get_template_directory_uri().'/js/script.js', array('jquery', 'jquery-3.5.1', 'OwlCarousel2', 'counterup', 'wow'), '', true);

}


//Metabox_CMB2
if(file_exists( __DIR__ . '/metabox/init.php')){
    require_once __DIR__ . '/metabox/init.php';
}
if(file_exists(__DIR__ . '/metabox/custom.php')){
    require_once __DIR__ . '/metabox/custom.php';
}

// Register Sidebar
function onepagestudio_custom_sidebars() {
    $args = array(
        'id'            => 'footer',
        'name'          => __( 'Footer', 'onepagestudio' ),
        );
    register_sidebar( $args );
 }
add_action( 'widgets_init', 'onepagestudio_custom_sidebars' );

// Register All Custom Post Types
function onepagestudio_register_custom_post_type() {

    /**
     * Post Type: Projects.
     */

    $labels = [
        "name" => __( "Projects", "onepagestudio" ),
        "singular_name" => __( "Project", "onepagestudio" ),
        "menu_name" => __( "Project", "onepagestudio" ),
        "all_items" => __( "All Projects", "onepagestudio" ),
        "add_new" => __( "Add New Project", "onepagestudio" ),
        "add_new_item" => __( "Add New Project", "onepagestudio" ),
        "edit_item" => __( "Edit Project", "onepagestudio" ),
        "new_item" => __( "New Project", "onepagestudio" ),
        "view_item" => __( "View Project", "onepagestudio" ),
        "view_items" => __( "View Projects", "onepagestudio" ),
        "search_items" => __( "Search Project", "onepagestudio" ),
        "not_found" => __( "No Project found", "onepagestudio" ),
        "not_found_in_trash" => __( "No Project in Trash", "onepagestudio" ),
        "parent" => __( "Parent Project:)", "onepagestudio" ),
        "featured_image" => __( "Featured Image for this Project", "onepagestudio" ),
        "set_featured_image" => __( "Set Featured Image for this Project", "onepagestudio" ),
        "remove_featured_image" => __( "Remove Featured Image for this Project", "onepagestudio" ),
        "use_featured_image" => __( "Use Featured Image for this Project", "onepagestudio" ),
        "archives" => __( "Project Archives", "onepagestudio" ),
        "insert_into_item" => __( "Insert into Project", "onepagestudio" ),
        "uploaded_to_this_item" => __( "Uploaded to this Project", "onepagestudio" ),
        "filter_items_list" => __( "Filter Project List", "onepagestudio" ),
        "items_list_navigation" => __( "Project List Navigation", "onepagestudio" ),
        "items_list" => __( "Project List", "onepagestudio" ),
        "attributes" => __( "Project Attributes", "onepagestudio" ),
        "name_admin_bar" => __( "Project", "onepagestudio" ),
        "item_published" => __( "Project Published", "onepagestudio" ),
        "item_published_privately" => __( "Project Published Privately", "onepagestudio" ),
        "item_reverted_to_draft" => __( "Project Reverted To Draft", "onepagestudio" ),
        "item_scheduled" => __( "Project Scheduled", "onepagestudio" ),
        "item_updated" => __( "Project Updated", "onepagestudio" ),
        "parent_item_colon" => __( "Parent Project:)", "onepagestudio" ),
    ];

    $args = [
        "label" => __( "Projects", "onepagestudio" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "can_export" => false,
        "rewrite" => [ "slug" => "project", "with_front" => true ],
        "query_var" => true,
        "menu_icon" => "dashicons-hammer",
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "project", $args );

    /**
     * Post Type: Team Members.
     */

    $labels = [
        "name" => __( "Team Members", "onepagestudio" ),
        "singular_name" => __( "Team Member", "onepagestudio" ),
        "menu_name" => __( "Team Member", "onepagestudio" ),
        "all_items" => __( "All Team Member", "onepagestudio" ),
        "add_new" => __( "Add New Team Member", "onepagestudio" ),
        "add_new_item" => __( "Add New Team Member", "onepagestudio" ),
        "edit_item" => __( "Edit Team Member", "onepagestudio" ),
        "new_item" => __( "New Team Member", "onepagestudio" ),
        "view_item" => __( "View Team Member", "onepagestudio" ),
        "view_items" => __( "View Team Member", "onepagestudio" ),
        "search_items" => __( "Search Team Member", "onepagestudio" ),
        "not_found" => __( "No Team Member found", "onepagestudio" ),
        "not_found_in_trash" => __( "No Team Member Found in Trash", "onepagestudio" ),
        "parent" => __( "Parent Team Member:)", "onepagestudio" ),
        "featured_image" => __( "Featured Image for this Team Member", "onepagestudio" ),
        "set_featured_image" => __( "Set Featured Image for this Team Member", "onepagestudio" ),
        "remove_featured_image" => __( "Remove Featured Image for this Team Member", "onepagestudio" ),
        "use_featured_image" => __( "Use Featured Image for this Team Member", "onepagestudio" ),
        "archives" => __( "Team Member Archives", "onepagestudio" ),
        "insert_into_item" => __( "Insert into Team Member", "onepagestudio" ),
        "uploaded_to_this_item" => __( "Uploaded to this Team Member", "onepagestudio" ),
        "filter_items_list" => __( "Filter Team Member List", "onepagestudio" ),
        "items_list_navigation" => __( "Team Member List Navigation", "onepagestudio" ),
        "items_list" => __( "Team Member List", "onepagestudio" ),
        "attributes" => __( "Team Member Attributes", "onepagestudio" ),
        "name_admin_bar" => __( "Team Member", "onepagestudio" ),
        "item_published" => __( "Team Member Published", "onepagestudio" ),
        "item_published_privately" => __( "Team Member Published Privately", "onepagestudio" ),
        "item_reverted_to_draft" => __( "Team Member Reverted To Draft", "onepagestudio" ),
        "item_scheduled" => __( "Team Member Scheduled", "onepagestudio" ),
        "item_updated" => __( "Team Member Updated", "onepagestudio" ),
        "parent_item_colon" => __( "Parent Team Member:)", "onepagestudio" ),
    ];

    $args = [
        "label" => __( "Team Members", "onepagestudio" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "can_export" => false,
        "rewrite" => [ "slug" => "team_member", "with_front" => true ],
        "query_var" => true,
        "menu_icon" => "dashicons-admin-users",
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "team_member", $args );

    /**
     * Post Type: Testimonials.
     */

    $labels = [
        "name" => __( "Testimonials", "onepagestudio" ),
        "singular_name" => __( "Testimonial", "onepagestudio" ),
        "menu_name" => __( "Testimonial", "onepagestudio" ),
        "all_items" => __( "All Testimonial", "onepagestudio" ),
        "add_new" => __( "Add New Testimonial", "onepagestudio" ),
        "add_new_item" => __( "Add New Testimonial", "onepagestudio" ),
        "edit_item" => __( "Edit Testimonial", "onepagestudio" ),
        "new_item" => __( "New Testimonial", "onepagestudio" ),
        "view_item" => __( "View Testimonial", "onepagestudio" ),
        "view_items" => __( "View Testimonial", "onepagestudio" ),
        "search_items" => __( "Search Testimonial", "onepagestudio" ),
        "not_found" => __( "No Testimonial found", "onepagestudio" ),
        "not_found_in_trash" => __( "No Testimonial in Trash", "onepagestudio" ),
        "parent" => __( "Parent Testimonial:)", "onepagestudio" ),
        "featured_image" => __( "Featured Image for this Testimonial", "onepagestudio" ),
        "set_featured_image" => __( "Set Featured Image for this Testimonial", "onepagestudio" ),
        "remove_featured_image" => __( "Remove Featured Image for this Testimonial", "onepagestudio" ),
        "use_featured_image" => __( "Use Featured Image for this Testimonial", "onepagestudio" ),
        "archives" => __( "Testimonial Archives", "onepagestudio" ),
        "insert_into_item" => __( "Insert into Testimonial", "onepagestudio" ),
        "uploaded_to_this_item" => __( "Uploaded to this Testimonial", "onepagestudio" ),
        "filter_items_list" => __( "Filter Testimonial List", "onepagestudio" ),
        "items_list_navigation" => __( "Testimonial List Navigation", "onepagestudio" ),
        "items_list" => __( "Testimonial List", "onepagestudio" ),
        "attributes" => __( "Testimonial Attributes", "onepagestudio" ),
        "name_admin_bar" => __( "Testimonial", "onepagestudio" ),
        "item_published" => __( "Testimonial Published", "onepagestudio" ),
        "item_published_privately" => __( "Testimonial Published Privately", "onepagestudio" ),
        "item_reverted_to_draft" => __( "Testimonial Reverted To Draft", "onepagestudio" ),
        "item_scheduled" => __( "Testimonial Scheduled", "onepagestudio" ),
        "item_updated" => __( "Testimonial Updated", "onepagestudio" ),
        "parent_item_colon" => __( "Parent Testimonial:)", "onepagestudio" ),
    ];

    $args = [
        "label" => __( "Testimonials", "onepagestudio" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "can_export" => false,
        "rewrite" => [ "slug" => "testimonial", "with_front" => true ],
        "query_var" => true,
        "menu_icon" => "dashicons-testimonial",
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "testimonial", $args );
}

add_action( 'init', 'onepagestudio_register_custom_post_type' );


// Register All Custom Post Type Taxonomies
function onepagestudio_register_custom_post_type_taxonomies() {

    /**
     * Taxonomy: Project types.
     */

    $labels = [
        "name" => __( "Project types", "onepagestudio" ),
        "singular_name" => __( "Project type", "onepagestudio" ),
        "menu_name" => __( "Project type", "onepagestudio" ),
    ];

    
    $args = [
        "label" => __( "Project types", "onepagestudio" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'project_type', 'with_front' => true,  'hierarchical' => true, ],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "project_type",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => false,
        "sort" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "project_type", [ "project" ], $args );

    /**
     * Taxonomy: Team Member Designation.
     */

    $labels = [
        "name" => __( "Designation", "onepagestudio" ),
        "singular_name" => __( "Designation", "onepagestudio" ),
    ];

    
    $args = [
        "label" => __( "Designation", "onepagestudio" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'designation', 'with_front' => true, ],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "designation",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => false,
        "sort" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "designation", [ "team_member" ], $args );

    /**
     * Taxonomy: Testimonial Designation.
     */

    $labels = [
        "name" => __( "Designation", "onepagestudio" ),
        "singular_name" => __( "Designation", "onepagestudio" ),
    ];

    
    $args = [
        "label" => __( "Designation", "onepagestudio" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'testimonial_designation', 'with_front' => true, ],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "testimonial_designation",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => false,
        "sort" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "testimonial_designation", [ "testimonial" ], $args );
}
add_action( 'init', 'onepagestudio_register_custom_post_type_taxonomies' );




//TGMPA Register
    /**
     * Include the TGM_Plugin_Activation class.
     */
    require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';

    add_action( 'tgmpa_register', 'onepagestudio_register_required_plugins' );

    /**
     * Register the required plugins for this theme.
     *
     * In this example, we register five plugins:
     * - one included with the TGMPA library
     * - two from an external source, one from an arbitrary source, one from a GitHub repository
     * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
     *
     * The variables passed to the `tgmpa()` function should be:
     * - an array of plugin arrays;
     * - optionally a configuration array.
     * If you are not changing anything in the configuration array, you can remove the array and remove the
     * variable from the function call: `tgmpa( $plugins );`.
     * In that case, the TGMPA default settings will be used.
     *
     * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
     */
    function onepagestudio_register_required_plugins() {
        /*
         * Array of plugin arrays. Required keys are name and slug.
         * If the source is NOT from the .org repo, then source is also required.
         */
        $plugins = array(

            // This is an example of how to include a plugin from the WordPress Plugin Repository.
            array(
                'name'      => 'Contact Form 7',
                'slug'      => 'contact-form-7',
                'required'  => true,
            ),

        );

        /*
         * Array of configuration settings. Amend each line as needed.
         *
         * TGMPA will start providing localized text strings soon. If you already have translations of our standard
         * strings available, please help us make TGMPA even better by giving us access to these translations or by
         * sending in a pull-request with .po file(s) with the translations.
         *
         * Only uncomment the strings in the config array if you want to customize the strings.
         */
        $config = array(
            'id'           => 'onepagestudio',                 // Unique ID for hashing notices for multiple instances of TGMPA.
            'default_path' => '',                      // Default absolute path to bundled plugins.
            'menu'         => 'tgmpa-install-plugins', // Menu slug.
            'has_notices'  => true,                    // Show admin notices or not.
            'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
            'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
            'is_automatic' => false,                   // Automatically activate plugins after installation or not.
            'message'      => '',                      // Message to output right before the plugins table.


        );

        tgmpa( $plugins, $config );
    }
