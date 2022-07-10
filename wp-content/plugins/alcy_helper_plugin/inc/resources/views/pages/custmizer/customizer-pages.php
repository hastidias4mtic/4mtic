<?php

/**
 *
 *
 * ==============================================
 *
 *          Customize Register
 *
 * ===============================================
 *
 * The 'customize_register' action hook is used to customize and manipulate the Theme
 * Customization admin screen introduced .
 *
 */

if ( class_exists( 'Kirki' ) ):

   
    $dsn_customize = 'dsn_customize';
    $index         = 0;
    function alcy_custom_Label( $section , $text = '' , $label = '' , $active_callback = true )
    {
        $out = '';
        if ( $text ) {
            $out = '<div style="padding: 10px;background-color: #008ec2;color: #fff;border-radius: 3px;text-align: center;font-size: 14px;text-transform: capitalize;">' . $text . '</div>';
        }

        Kirki::add_field( 'dsn_customize' , [
            'type'            => 'custom' ,
            'settings'        => 'custom_setting_' . sanitize_title( $text ) . sanitize_title( $label ) ,
            'label'           => $label ,
            'section'         => $section ,
            'default'         => $out ,
            'active_callback' => $active_callback
        ] );
    }

    /**
     * Update Kirki Config
     */

    Kirki::add_config( $dsn_customize , array(
        'capability'  => 'edit_theme_options' ,
        'option_type' => 'theme_mod' ,
    ) );


    $dsn_panel = 'dsn_panel';
    Kirki::add_panel( $dsn_panel , array(
        'priority'    => 10 ,
        'title'       => esc_html__( 'Alcy Customize Option' , 'alcy' ) ,
        'description' => esc_html__( 'My panel description' , 'alcy' ) ,

    ) );


    /**
     * General options
     */

    $dsn_section = 'ajax_option';
    alcy_resources( 'views/pages/custmizer/block/general_options' , array(
        'dsn_panel'     => $dsn_panel ,
        'dsn_customize' => $dsn_customize ,
        'dsn_section'   => $dsn_section
    ) );

    /**
     * ajax_options
     */

    $dsn_section = 'section_general';
    alcy_resources( 'views/pages/custmizer/block/ajax_options' , array(
        'dsn_panel'     => $dsn_panel ,
        'dsn_customize' => $dsn_customize ,
        'dsn_section'   => $dsn_section
    ) );


    /**
     * event_smooth_scrolling
     */

    $dsn_section = 'event_smooth_scrolling';
    alcy_resources( 'views/pages/custmizer/block/event_smooth_scrolling' , array(
        'dsn_panel'     => $dsn_panel ,
        'dsn_customize' => $dsn_customize ,
        'dsn_section'   => $dsn_section
    ) );


    /**
     * Header Image
     */
    $dsn_section = 'header_image';
    alcy_resources( 'views/pages/custmizer/block/header_image' , array(
        'dsn_panel'     => $dsn_panel ,
        'dsn_customize' => $dsn_customize ,
        'dsn_section'   => $dsn_section
    ) );

    /**
     * Fonts_setting
     */
    $dsn_section = 'section_fonts';
    alcy_resources( 'views/pages/custmizer/block/typography' , array(
        'dsn_panel'     => $dsn_panel ,
        'dsn_customize' => $dsn_customize ,
        'dsn_section'   => $dsn_section
    ) );





    /**
     * social_settings
     */
    $dsn_section = 'social_settings';
    alcy_resources( 'views/pages/custmizer/block/social_settings' , array(
        'dsn_panel'     => $dsn_panel ,
        'dsn_customize' => $dsn_customize ,
        'dsn_section'   => $dsn_section
    ) );


    /**
     * footer_settings
     */
    $dsn_section = 'footer_setting';
    alcy_resources( 'views/pages/custmizer/block/footer_setting' , array(
        'dsn_panel'     => $dsn_panel ,
        'dsn_customize' => $dsn_customize ,
        'dsn_section'   => $dsn_section
    ) );


    /**
     * options_page
     */
    $dsn_section = 'options_page';
    alcy_resources( 'views/pages/custmizer/block/page_options' , array(
        'dsn_panel'     => $dsn_panel ,
        'dsn_customize' => $dsn_customize ,
        'dsn_section'   => $dsn_section
    ) );

    /**
     * contact_option
     */
    $dsn_section = 'contact_option';
    alcy_resources( 'views/pages/custmizer/block/contact_option' , array(
        'dsn_panel'     => $dsn_panel ,
        'dsn_customize' => $dsn_customize ,
        'dsn_section'   => $dsn_section
    ) );



    /**
     * info_menu
     */
    $dsn_section = 'info_menu';
    alcy_resources( 'views/pages/custmizer/block/info_menu' , array(
        'dsn_panel'     => $dsn_panel ,
        'dsn_customize' => $dsn_customize ,
        'dsn_section'   => $dsn_section
    ) );





endif;


add_action( 'wp_head' , function () {
    $width_logo       = get_theme_mod( 'width_number' , 80 );
    $width_logo       = ( (int) $width_logo === 0 ) ? 'auto' : $width_logo . 'px';
    $height_logo      = get_theme_mod( 'height_number' , 0 );
    $height_logo      = ( (int) $height_logo === 0 ) ? 'auto' : $height_logo . 'px';
    $logo_size_number = get_theme_mod( 'logo_size_number' , 30 );

    printf( '<style>.custom-logo,.site-header .extend-container .inner-header .main-logo{width:%s !important;height: %s !important}.custom-logo-link h1.dsn-text-size{font-size:%s}</style>' , $width_logo , $height_logo , $logo_size_number . 'px' );
    printf( '<style>%s</style>' , get_theme_mod( 'css_head_code' ) );
    printf( '<script>%s</script>' , get_theme_mod( 'js_head_code' ) );


} );


add_action( 'wp_footer' , function () {

    printf( '<script>%s</script>' , get_theme_mod( 'js_footer_code' ) );


} );