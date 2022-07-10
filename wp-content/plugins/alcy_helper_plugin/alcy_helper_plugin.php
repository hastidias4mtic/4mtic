<?php

/**
 * Plugin Name: ALCY Functionality Plugin & Gutenberg Blocks
 * Plugin URI: https://themeforest.net/user/design_grid
 * Description: Gutenberg editor blocks  , Shortcodes and Custom Post Type for Lida Wordpress Theme
 * Version: 1.2.0
 * Author: Design Grid
 * Author URI: https://themeforest.net/user/design_grid
 * License:
 */

if ( !defined( 'ABSPATH' ) ) {
    die( '-1' );
}

define( 'ALCY__PLUGIN_BASENAME' , plugin_basename( __FILE__ ) );
define( 'ALCY__PLUGIN_DIR' , plugin_dir_path( __FILE__ ) );
define( 'ALCY__PLUGIN_DIR_URL' , plugin_dir_url( __FILE__ ) );


class AlcyHelperPlugin
{

    public function __construct()
    {

        $this->include_helper_files();
    }

    public function include_files( $files , $suffix = '' )
    {
        foreach ( $files as $file ) {
            $filepath = ALCY__PLUGIN_DIR . $suffix . $file . '.php';
            if ( !file_exists( $filepath ) ) :
                trigger_error( sprintf( esc_html__( 'Error locating %s for inclusion' , 'alcy' ) , $file ) , E_USER_ERROR );
            endif;
            require_once $filepath;
        }
        unset( $file , $filepath );
    }


    public function include_helper_files()
    {
        $files = array(
            'alcy-function-helper' ,
            'alcy-admin-post' ,
            'alcy-shortcut-code' ,

        );
        $this->include_files( $files , 'inc/' );


        /**
         *
         *  page Tempelete
         *
         */
        $classes = array(
            'AlcyPageTemplete'
        );
        $this->include_files( $classes );


    }


}

function AlcyDev()
{
    return new AlcyHelperPlugin();
}

AlcyDev();