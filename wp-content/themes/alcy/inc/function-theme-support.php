<?php

/*
 *  @package Alcy/Inc
 *  =======================================
 *              Theme Support
 *  =======================================
 */


/**
 * This hook is called during each page load,
 * after the theme is initialized. It is generally used to perform basic
 * setup, registration, and init actions for a theme.
 */

add_action( 'after_setup_theme' , function () {


    /**
     *
     * ===================================================
     *      Load the theme is translated strings.
     * ===================================================
     *  If the current locale exists as a
     * .mo file in the theme is root directory,
     * it will be included in the translated strings by the $domain
     *
     */
    load_theme_textdomain( 'alcy' , get_template_directory() . '/lang' );


    //--==== Let WordPress manage the document title (no hard-coded <title> tag in the document head) ====--//
    add_theme_support( 'title-tag' );
    //--==== Enables post and comment RSS feed links to head ====--//
    add_theme_support( 'automatic-feed-links' );


    $defaults = array(
        'default-color'      => '#0d0d0d' ,
        'default-repeat'     => 'no-repeat' ,
        'default-position-x' => 'left' ,
        'default-position-y' => 'top' ,
        'default-size'       => 'auto' ,
        'default-attachment' => 'scroll' ,

    );
    add_theme_support( 'custom-background' , $defaults );


    /**
     * * Using a custom logo allows site owners to upload an image for their website,
     * which can be placed at the top of their website. It can be uploaded from Appearance > Header,
     */

    add_theme_support( 'custom-logo' , array(
        'height'      => 40 ,
        'width'       => 250 ,
        'flex-height' => true ,
        'flex-width'  => true ,
        'header-text' => array( 'site-title' , 'site-description' ) ,
    ) );


    //--==== Add thumbnail theme support ====//
    add_theme_support( 'post-thumbnails' );

    /**
     *
     * ============================
     *     add html5 markup
     * ============================
     *
     *  - This feature allows the use of HTML5 markup for the search forms, comment forms, comment lists, gallery, and
     * caption.
     */
    add_theme_support( 'html5' , array( 'comment-list' , 'comment-form' , 'search-form' , 'gallery' , 'caption' ) );


    //--==== Cropping behavior for the image size is dependent on the value ====//
    add_image_size( 'alcy-large-img' , 1240 , 826 , true );
    add_image_size( 'alcy-media-img' , 880 , 400 , true );
    add_image_size( 'alcy-slider-img' , 800 , 500 , true );
    add_image_size( 'alcy_image_part' , 400 , 300 , true );
    add_image_size( 'alcy_height_img' , 880 , 1399 , true );
    add_image_size( 'alcy_logo_brand' , 150 , 40 , true );


    /**
     * ============================
     *     Editor Color Palette
     * ============================
     * A default set of colors is provided, but themes can register their own and optionally lock users into picking from the defined palette.
     */


    add_theme_support( 'editor-color-palette' , array(
        array(
            'name'  => esc_html__( 'Primary' , 'alcy' ) ,
            'slug'  => 'primary' ,
            'color' => '#3b3b3b' ,
        ) ,
        array(
            'name'  => esc_html__( 'dark gray' , 'alcy' ) ,
            'slug'  => 'dark-gray' ,
            'color' => '#131313' ,
        ) ,
        array(
            'name'  => esc_html__( 'very light gray' , 'alcy' ) ,
            'slug'  => 'very-light-gray' ,
            'color' => '#eee' ,
        ) ,
        array(
            'name'  => esc_html__( 'very dark gray' , 'alcy' ) ,
            'slug'  => 'very-dark-gray' ,
            'color' => '#444' ,
        ) ,
        array(
            'name'  => esc_html__( 'White' , 'alcy' ) ,
            'slug'  => 'white' ,
            'color' => '#FFF' ,
        ) ,
    ) );

    /**
     * ============================
     *     Editor Text Size Palette
     * ============================
     * A default set of sizes is provided, but themes can register their own and optionally lock users into picking from preselected sizes.
     */
    add_theme_support( 'editor-font-sizes' , array(
        array(
            'name'      => esc_html__( 'Small' , 'alcy' ) ,
            'shortName' => __( 'S' , 'alcy' ) ,
            'size'      => 16 ,
            'slug'      => 'small'
        ) ,
        array(
            'name'      => esc_html__( 'Normal' , 'alcy' ) ,
            'shortName' => __( 'N' , 'alcy' ) ,
            'size'      => 20 ,
            'slug'      => 'normal'
        ) ,
        array(
            'name'      => esc_html__( 'Medium' , 'alcy' ) ,
            'shortName' => __( 'M' , 'alcy' ) ,
            'size'      => 24 ,
            'slug'      => 'medium'
        ) ,
        array(
            'name'      => esc_html__( 'Large' , 'alcy' ) ,
            'shortName' => __( 'L' , 'alcy' ) ,
            'size'      => 36 ,
            'slug'      => 'large'
        ) ,
        array(
            'name'      => esc_html__( 'Huge' , 'alcy' ) ,
            'shortName' => __( 'XL' , 'alcy' ) ,
            'size'      => 50 ,
            'slug'      => 'huge'
        )
    ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );


    /**
     * ============================
     *     Responsive Embeds
     * ============================
     * Themes must opt-in to responsive embeds.
     */
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'dark-editor-style' );

// Enqueue editor styles.
    add_editor_style( 'alcy-editor.css' );
} );

if ( !isset( $content_width ) ) {
    $content_width = 960;
}


if ( function_exists( 'alcy_resources' ) ) {
    alcy_resources( 'views/pages/options/Block-pages' );
    alcy_resources( 'views/pages/options/option-pages' );
    alcy_resources( 'views/pages/custmizer/customizer-pages' );
}