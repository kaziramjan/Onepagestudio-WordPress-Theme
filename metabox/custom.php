<?php 
//** home.php template **//
add_action('cmb2_admin_init', 'home_page');
function home_page(){

    // Hero Section
    	$metabox = new_cmb2_box( array(
    	    'id'           => 'hero-section',
    	    'title'        => 'Hero Section',
    	    'object_types' => array( 'page' ), // post type
    	    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
    	    'context'      => 'normal', //  'normal', 'advanced', or 'side'
    	    'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
    	    'show_names'   => true, // Show field names on the left
    	) );

    	// Background Image for Hero Section
    	$metabox->add_field(array(
                'name'    => __( 'Background Image', 'onepagestudio' ),
                'id'      => 'hero-bg-img',
                'type'    => 'file',
            ) );

        // Section Name for Hero Section
        $metabox->add_field(array(
                'name'    => __( 'Section Name', 'onepagestudio' ),
                'id'      => 'hero-section-name',
                'type'    => 'text_medium',
            ) );

        // Title for Hero Section
        $metabox->add_field(array(
                'name'    => __( 'Title', 'onepagestudio' ),
                'id'      => 'hero-title-name',
                'type'    => 'text',
            ) );

        // Sub Title for Hero Section
        $metabox->add_field(array(
                'name'    => __( 'Sub Title', 'onepagestudio' ),
                'id'      => 'hero-sub-title-name',
                'type'    => 'textarea_small',
            ) );

        // Button Text for Hero Section
        $metabox->add_field(array(
                'name'    => __( 'Button Text', 'onepagestudio' ),
                'id'      => 'hero-btn-text',
                'type'    => 'text_small',
            ) );

        // Button Link for Hero Section
        $metabox->add_field(array(
                'name'    => __( 'Button Link', 'onepagestudio' ),
                'id'      => 'hero-btn-link',
                'type'    => 'text_url',
            ) );



//Service Section
    $prefix = '_cmb_';
    $metabox = new_cmb2_box( array(
        'id'           => $prefix . 'service-section',
        'title'        => 'Service Section',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    //Image for Service Section
    $metabox->add_field(array(
            'name'    => __( 'Service Background Image', 'onepagestudio' ),
            'id'      => 'service-bg-img',
            'type'    => 'file',
        ) );

    // Section Name for Service Section
        $metabox->add_field(array(
                'name'    => __( 'Section Name', 'onepagestudio' ),
                'id'      => 'service-section-name',
                'type'    => 'text_medium',
            ) );

        // Title for Service Section
        $metabox->add_field(array(
                'name'    => __( 'Section Title', 'onepagestudio' ),
                'id'      => 'service-title-name',
                'type'    => 'text',
            ) );


    $group_repeat_test = $metabox->add_field( array(
            'id'          => $prefix . 'feature-f',
            'type'        => 'group',
            'options'     => array(
                'group_title'   => __( 'Feature', 'onepagestudio' ) . ' {#}', // {#} gets replaced by row number
                'add_button'    => __( 'Add another feature', 'onepagestudio' ),
                'remove_button' => __( 'Remove feature', 'onepagestudio' ),
                'sortable'      => true, // beta
            ),
        ) );


        //* Feature-1 Image
        $metabox->add_group_field( $group_repeat_test, array(
            'name'    => __( 'Feature-1 Image', 'onepagestudio' ),
            'id'      => $prefix . 'feature_img1',
            'type'    => 'file',
        ) );
        //* Feature-1 Title
        $metabox->add_group_field( $group_repeat_test, array(
            'name'    => __( 'Feature-1 Title', 'onepagestudio' ),
            'id'      => $prefix . 'feature_title1',
            'type'    => 'text',
        ) );
        //* Feature-1 Subtitle
        $metabox->add_group_field( $group_repeat_test, array(
            'name'    => __( 'Feature-1 Subtitle', 'onepagestudio' ),
            'id'      => $prefix . 'feature_subtitle1',
            'type'    => 'textarea_small',
        ) );


        //* Feature-2 Image
        $metabox->add_group_field( $group_repeat_test, array(
            'name'    => __( 'Feature-2 Image', 'onepagestudio' ),
            'id'      => $prefix . 'feature_img2',
            'type'    => 'file',
        ) );
        //* Feature-2 Title
        $metabox->add_group_field( $group_repeat_test, array(
            'name'    => __( 'Feature-2 Title', 'onepagestudio' ),
            'id'      => $prefix . 'feature_title2',
            'type'    => 'text',
        ) );
        //* Feature-2 Subtitle
        $metabox->add_group_field( $group_repeat_test, array(
            'name'    => __( 'Feature-2 Subtitle', 'onepagestudio' ),
            'id'      => $prefix . 'feature_subtitle2',
            'type'    => 'textarea_small',
        ) );

    // Project Section
        $metabox = new_cmb2_box( array(
            'id'           => 'work-section',
            'title'        => 'Project Section',
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
            'context'      => 'normal', //  'normal', 'advanced', or 'side'
            'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
            'show_names'   => true, // Show field names on the left
        ) );

        // Section Name for Work Section
        $metabox->add_field(array(
                'name'    => __( 'Section Name', 'onepagestudio' ),
                'id'      => 'work-section-name',
                'type'    => 'text_medium',
            ) );

        // Title for Work Section
        $metabox->add_field(array(
                'name'    => __( 'Title', 'onepagestudio' ),
                'id'      => 'work-title-name',
                'type'    => 'text',
            ) );

        // Sub Title for Work Section
        $metabox->add_field(array(
                'name'    => __( 'Sub Title', 'onepagestudio' ),
                'id'      => 'work-sub-title-name',
                'type'    => 'textarea_small',
            ) );

    // Work Details Section
        $metabox = new_cmb2_box( array(
            'id'           => 'work-details-section',
            'title'        => 'Work Details Section',
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
            'context'      => 'normal', //  'normal', 'advanced', or 'side'
            'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
            'show_names'   => true, // Show field names on the left
        ) );

        // Background Image for Work Details Section
        $metabox->add_field(array(
                'name'    => __( 'Background Image', 'onepagestudio' ),
                'id'      => 'work-details-bg-img',
                'type'    => 'file',
            ) );

        // Section Name for Work Details Section
        $metabox->add_field(array(
                'name'    => __( 'Section Name', 'onepagestudio' ),
                'id'      => 'work-details-section-name',
                'type'    => 'text_medium',
            ) );

        // Title for Work Details Section
        $metabox->add_field(array(
                'name'    => __( 'Title', 'onepagestudio' ),
                'id'      => 'work-details-title-name',
                'type'    => 'text',
            ) );

        // Sub Title for Work Details Section
        $metabox->add_field(array(
                'name'    => __( 'Sub Title', 'onepagestudio' ),
                'id'      => 'work-details-sub-title-name',
                'type'    => 'textarea_small',
            ) );


    // Vision & Mission Section
        $metabox = new_cmb2_box( array(
            'id'           => 'mission-vision',
            'title'        => 'Mission Vission Section',
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
            'context'      => 'normal', //  'normal', 'advanced', or 'side'
            'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
            'show_names'   => true, // Show field names on the left
        ) );

        // Vision Section
            //Background Image for Vision Section
            $metabox->add_field(array(
                    'name'    => __( 'Background Image for Vision ', 'onepagestudio' ),
                    'id'      => 'vision-bg-img',
                    'type'    => 'file',
                ) ); 
            //Image for Vision Section
            $metabox->add_field(array(
                    'name'    => __( 'Vision Image', 'onepagestudio' ),
                    'id'      => 'vision-img',
                    'type'    => 'file',
                ) );

            // Title for Vision Section
            $metabox->add_field(array(
                    'name'    => __( 'Vision Title', 'onepagestudio' ),
                    'id'      => 'vision-title-name',
                    'type'    => 'text',
                ) );

            // Sub Title for Vision Section
            $metabox->add_field(array(
                    'name'    => __( 'Vision Sub Title', 'onepagestudio' ),
                    'id'      => 'vision-sub-title-name',
                    'type'    => 'textarea_small',
                ) );

        // Mission Section 
            //Image for Vision Section
            $metabox->add_field(array(
                    'name'    => __( 'Mission Image', 'onepagestudio' ),
                    'id'      => 'mission-img',
                    'type'    => 'file',
                ) );

            // Title for Mission Section
            $metabox->add_field(array(
                    'name'    => __( 'Mission Title', 'onepagestudio' ),
                    'id'      => 'mission-title-name',
                    'type'    => 'text',
                ) );

            // Sub Title for Mission Section
            $metabox->add_field(array(
                    'name'    => __( 'Mission Sub Title', 'onepagestudio' ),
                    'id'      => 'mission-sub-title-name',
                    'type'    => 'textarea_small',
                ) );
    
    // Team Section
        $metabox = new_cmb2_box( array(
            'id'           => 'team-section',
            'title'        => 'Team Section',
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
            'context'      => 'normal', //  'normal', 'advanced', or 'side'
            'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
            'show_names'   => true, // Show field names on the left
        ) );

        // Section Name for Team Section
        $metabox->add_field(array(
                'name'    => __( 'Section Name', 'onepagestudio' ),
                'id'      => 'team-section-name',
                'type'    => 'text_medium',
            ) );

        // Title for Team Section
        $metabox->add_field(array(
                'name'    => __( 'Title', 'onepagestudio' ),
                'id'      => 'team-title-name',
                'type'    => 'text',
            ) );

        // Sub Title for Team Section
        $metabox->add_field(array(
                'name'    => __( 'Sub Title', 'onepagestudio' ),
                'id'      => 'team-sub-title-name',
                'type'    => 'textarea_small',
            ) );

    // Call to Action Section
        $metabox = new_cmb2_box( array(
            'id'           => 'call-to-action-section',
            'title'        => 'Call to Action Section',
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
            'context'      => 'normal', //  'normal', 'advanced', or 'side'
            'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
            'show_names'   => true, // Show field names on the left
        ) );

        // Background Image for Call to Action Section
        $metabox->add_field(array(
                'name'    => __( 'Background Image', 'onepagestudio' ),
                'id'      => 'call-to-action-bg-img',
                'type'    => 'file',
            ) );

        // Title for Call to Action Section
        $metabox->add_field(array(
                'name'    => __( 'Title', 'onepagestudio' ),
                'id'      => 'call-to-action-title-name',
                'type'    => 'text',
            ) );

        // Sub Title for Call to Action Section
        $metabox->add_field(array(
                'name'    => __( 'Sub Title', 'onepagestudio' ),
                'id'      => 'call-to-action-sub-title-name',
                'type'    => 'textarea_small',
            ) );

        // Button Title for Call to Action Section
        $metabox->add_field(array(
                'name'    => __( 'Button Text', 'onepagestudio' ),
                'id'      => 'call-to-action-btn-name',
                'type'    => 'textarea_small',
            ) );

        // Button Link for Call to Action Section
        $metabox->add_field(array(
                'name'    => __( 'Button Text', 'onepagestudio' ),
                'id'      => 'call-to-action-btn-link',
                'type'    => 'text_url',
            ) );


    // Testimonial Section
        $metabox = new_cmb2_box( array(
            'id'           => 'testimonial-section',
            'title'        => 'Testimonial Section',
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
            'context'      => 'normal', //  'normal', 'advanced', or 'side'
            'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
            'show_names'   => true, // Show field names on the left
        ) );

        // Section Name for Testimonial Section
        $metabox->add_field(array(
                'name'    => __( 'Section Name', 'onepagestudio' ),
                'id'      => 'testimonial-section-name',
                'type'    => 'text',
            ) );

        // Title for Testimonial Section
        $metabox->add_field(array(
                'name'    => __( 'Title', 'onepagestudio' ),
                'id'      => 'testimonial-title-name',
                'type'    => 'text',
            ) );


    // Counts Section
        $prefix = '_cmb_';
        $metabox = new_cmb2_box( array(
            'id'           => $prefix . 'counts-section',
            'title'        => 'Counts Section',
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
            'context'      => 'normal', //  'normal', 'advanced', or 'side'
            'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
            'show_names'   => true, // Show field names on the left
        ) );

        //Image for Counts Section
        $metabox->add_field(array(
                'name'    => __( 'Counts Background Image', 'onepagestudio' ),
                'id'      => 'counts-bg-img',
                'type'    => 'file',
            ) );

        //Counter Field
        $group_repeat_test = $metabox->add_field( array(
                'id'          => $prefix . 'counts',
                'type'        => 'group',
                'options'     => array(
                    'group_title'   => __( 'Counts', 'onepagestudio' ) . ' {#}', // {#} gets replaced by row number
                    'add_button'    => __( 'Add another Counts', 'onepagestudio' ),
                    'remove_button' => __( 'Remove Counts', 'onepagestudio' ),
                    'sortable'      => true, // beta
                ),
            ) );


            //* Counts Image
            $metabox->add_group_field( $group_repeat_test, array(
                'name'    => __( 'Counts Image', 'onepagestudio' ),
                'id'      => $prefix . 'counts-img',
                'type'    => 'file',
            ) );
            //* Counts Number
            $metabox->add_group_field( $group_repeat_test, array(
                'name'    => __( 'Counts Number', 'onepagestudio' ),
                'id'      => $prefix . 'counts-num',
                'type'    => 'text_small',
            ) );
            //* Counts Image
            $metabox->add_group_field( $group_repeat_test, array(
                'name'    => __( 'Counts Title', 'onepagestudio' ),
                'id'      => $prefix . 'counts-title',
                'type'    => 'text_medium',
            ) );


        // Contact Section
        $prefix = '_cmb_';
        $metabox = new_cmb2_box( array(
            'id'           => $prefix . 'contact-section',
            'title'        => 'Contact Section',
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
            'context'      => 'normal', //  'normal', 'advanced', or 'side'
            'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
            'show_names'   => true, // Show field names on the left
        ) );

        //Section Name for Contact Section
        $metabox->add_field(array(
                'name'    => __( 'Section Name', 'onepagestudio' ),
                'id'      => 'contact-section-name',
                'type'    => 'text_medium',
            ) );
        //Title for Contact Section
        $metabox->add_field(array(
                'name'    => __( 'Title', 'onepagestudio' ),
                'id'      => 'contact-section-title',
                'type'    => 'text_medium',
            ) );
        //Address for Contact Section
        $metabox->add_field(array(
                'name'    => __( 'Address', 'onepagestudio' ),
                'id'      => 'contact-section-address',
                'type'    => 'text_medium',
            ) );
        //Email for Contact Section
        $metabox->add_field(array(
                'name'    => __( 'Email', 'onepagestudio' ),
                'id'      => 'contact-section-email',
                'type'    => 'text_email',
            ) );
        //Phone for Contact Section
        $metabox->add_field(array(
                'name'    => __( 'Phone Number', 'onepagestudio' ),
                'id'      => 'contact-section-number',
                'type'    => 'text_medium',
            ) );



        // Social Icon
        $group_repeat_test = $metabox->add_field( array(
                'id'          => $prefix . 'social',
                'type'        => 'group',
                'options'     => array(
                    'group_title'   => __( 'Social Icon', 'onepagestudio' ) . ' {#}', // {#} gets replaced by row number
                    'add_button'    => __( 'Add another Social Icon', 'onepagestudio' ),
                    'remove_button' => __( 'Remove Social Icon', 'onepagestudio' ),
                    'sortable'      => true, // beta
                ),
            ) );


            //* Social Icon
            $metabox->add_group_field( $group_repeat_test, array(
                'name'    => __( 'Social Icon', 'onepagestudio' ),
                'id'      => $prefix . 'social-icon',
                'type'    => 'text_small',
            ) );
            //* Social Icon Link
            $metabox->add_group_field( $group_repeat_test, array(
                'name'    => __( 'Social Icon Link', 'onepagestudio' ),
                'id'      => $prefix . 'social-icon-link',
                'type'    => 'text_url',
            ) );



}

//**Post type: Team Member  **//
add_action('cmb2_admin_init', 'team_member_page');
function team_member_page(){

    // Team Member Section
        $prefix = '_cmb_';
        $metabox = new_cmb2_box( array(
            'id'           => 'social-section',
            'title'        => 'Social',
            'object_types' => array( 'post', 'team_member' ), // post type
            'context'      => 'normal', //  'normal', 'advanced', or 'side'
            'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
            'show_names'   => true, // Show field names on the left
        ) );

        // Social Section
        $group_repeat_test = $metabox->add_field( array(
                'id'          => $prefix . 'social',
                'type'        => 'group',
                'options'     => array(
                    'group_title'   => __( 'Social Icon', 'onepagestudio' ) . ' {#}', // {#} gets replaced by row number
                    'add_button'    => __( 'Add another Social Icon', 'onepagestudio' ),
                    'remove_button' => __( 'Remove Social Icon', 'onepagestudio' ),
                    'sortable'      => true, // beta
                ),
            ) );


            //* Social Icon
            $metabox->add_group_field( $group_repeat_test, array(
                'name'    => __( 'Social Icon', 'onepagestudio' ),
                'id'      => $prefix . 'social-icon',
                'type'    => 'text_small',
            ) );
            //* Social Icon Link
            $metabox->add_group_field( $group_repeat_test, array(
                'name'    => __( 'Social Icon Link', 'onepagestudio' ),
                'id'      => $prefix . 'social-icon-link',
                'type'    => 'text_url',
            ) );

        }

//** Theme options **//

class Onepagestudio_Admin {
    /**
     * Option key, and option page slug
     * @var string
     */
    private $key = 'onepagestudio_options';
    /**
     * Options page metabox id
     * @var string
     */
    private $metabox_id = 'onepagestudio_option_metabox';
    /**
     * Options Page title
     * @var string
     */
    protected $title = '';
    /**
     * Options Page hook
     * @var string
     */
    protected $options_page = '';
    /**
     * Holds an instance of the object
     *
     * @var Atzi_Admin
     **/
    private static $instance = null;
    /**
     * Constructor
     * @since 0.1.0
     */
    private function __construct() {
        // Set our title
        $this->title = __( 'Theme Options', 'onepagestudio' );
    }
    /**
     * Returns the running object
     *
     * @return Oepagestudio_Admin
     **/
    public static function get_instance() {
        if( is_null( self::$instance ) ) {
            self::$instance = new Onepagestudio_Admin();
            self::$instance->hooks();
        }
        return self::$instance;
    }
    /**
     * Initiate our hooks
     * @since 0.1.0
     */
    public function hooks() {
        add_action( 'admin_init', array( $this, 'init' ) );
        add_action( 'admin_menu', array( $this, 'add_options_page' ) );
        add_action( 'cmb2_admin_init', array( $this, 'add_options_page_metabox' ) );
    }
    /**
     * Register our setting to WP
     * @since  0.1.0
     */
    public function init() {
        register_setting( $this->key, $this->key );
    }
    /**
     * Add menu options page
     * @since 0.1.0
     */
    public function add_options_page() {
        $this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ) );
        // Include CMB CSS in the head to avoid FOUC
        add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
    }
    /**
     * Admin page markup. Mostly handled by CMB2
     * @since  0.1.0
     */
    public function admin_page_display() {
        ?>
        <div class="wrap cmb2-options-page <?php echo $this->key; ?>">
            <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
            <?php cmb2_metabox_form( $this->metabox_id, $this->key ); ?>
        </div>
        <?php
    }
    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    function add_options_page_metabox() {
        // hook in our save notices
        add_action( "cmb2_save_options-page_fields_{$this->metabox_id}", array( $this, 'settings_notices' ), 10, 2 );
        $cmb = new_cmb2_box( array(
            'id'         => $this->metabox_id,
            'hookup'     => false,
            'cmb_styles' => false,
            'show_on'    => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            ),
        ) );
        // Set our CMB2 fields
        $cmb->add_field( array(
            'name' => __( 'Favicon', 'onepagestudio' ),
            'desc' => __( 'Upload Your Favicon Logo', 'onepagestudio' ),
            'id'   => 'favicon-logo',
            'type' => 'file',
        ) );

        $cmb->add_field( array(
            'name' => __( 'Header Logo', 'onepagestudio' ),
            'desc' => __( 'Upload Your Header Logo', 'onepagestudio' ),
            'id'   => 'header-logo-upload',
            'type' => 'file',
        ) );

        $cmb->add_field( array(
            'name' => __( 'Footer Logo', 'onepagestudio' ),
            'desc' => __( 'Upload Your Footer Logo', 'onepagestudio' ),
            'id'   => 'footer-logo-upload',
            'type' => 'file',
        ) );

        $cmb->add_field( array(
            'name' => __( 'Footer Background Image', 'onepagestudio' ),
            'desc' => __( 'Upload Your Footer Background Image', 'onepagestudio' ),
            'id'   => 'footer-bg-img',
            'type' => 'file',
        ) );

        $cmb->add_field( array(
            'name'    => __( 'Copyright', 'onepagestudio' ),
            'id'      => 'copyright',
            'type'    => 'textarea_small',
            'default' => 'Copyright © 2022 Developed by <a href="www.kaziramjan.com">Kazi Ramjan Ali</a>.',
        ) );

    }
    /**
     * Register settings notices for display
     *
     * @since  0.1.0
     * @param  int   $object_id Option key
     * @param  array $updated   Array of updated fields
     * @return void
     */
    public function settings_notices( $object_id, $updated ) {
        if ( $object_id !== $this->key || empty( $updated ) ) {
            return;
        }
        add_settings_error( $this->key . '-notices', '', __( 'Settings updated.', 'onepagestudio' ), 'updated' );
        settings_errors( $this->key . '-notices' );
    }
    /**
     * Public getter method for retrieving protected/private variables
     * @since  0.1.0
     * @param  string  $field Field to retrieve
     * @return mixed          Field value or exception is thrown
     */
    public function __get( $field ) {
        // Allowed fields to retrieve
        if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
            return $this->{$field};
        }
        throw new Exception( 'Invalid property: ' . $field );
    }
}
/**
 * Helper function to get/return the Onepagestudio_Admin object
 * @since  0.1.0
 * @return Onepagestudio_Admin object
 */
function onepagestudio_admin() {
    return Onepagestudio_Admin::get_instance();
}
/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function onepagestudio_get_option( $key = '' ) {
    return cmb2_get_option( onepagestudio_admin()->key, $key );
}
// Get it started
onepagestudio_admin();