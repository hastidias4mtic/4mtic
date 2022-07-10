<?php

define( 'ALCY_DIRECTORY' , trailingslashit( get_template_directory() ) );
define( 'ALCY_THEME_DIRECTORY' , trailingslashit( get_template_directory_uri() ) );

/**
 * This walker is fully compliant with all Theme Review
 */

require_once ALCY_DIRECTORY . '/inc/alcy-class-nav-list-walker.php';

/**
 *
 * =======================================
 *          TGM Plugin Activation
 * =======================================
 * @description
 * TGM Plugin Activation is a PHP library that allows you to easily require or recommend plugins for your WordPress themes
 * (and plugins).
 * It allows your users to install,
 * update and even automatically activate plugins in singular or bulk fashion using native
 * WordPress classes, functions and interfaces.
 * You can reference bundled plugins, plugins from the WordPress Plugin Repository
 * or even plugins hosted elsewhere on the internet.
 *
 */
require_once ALCY_DIRECTORY . '/inc/class-tgm-plugin-activation.php';


/**
 *
 * - functions and definitions
 */


require_once ALCY_DIRECTORY . '/inc/function-helpers.php';

/**
 * Registers the script if $src provided (does NOT overwrite), and enqueues it.
 */
require_once ALCY_DIRECTORY . '/inc/function-enqueue.php';

/**
 *  Registers theme support for a given feature.
 */
require_once ALCY_DIRECTORY . '/inc/function-theme-support.php';

/**
 * The Primary Page navBar
 */
require_once ALCY_DIRECTORY . '/inc/function-nav.php';

/**
 * Accepts either a string or an array and then parses that against a set of default arguments for the new sidebar. WordPress will automatically generate a sidebar ID and name based on the current number of registered sidebars if those arguments are not included.
 */
require_once ALCY_DIRECTORY . '/inc/function-widget.php';

/**
 * This hook allows you to handle your custom AJAX endpoints. The wp_ajax_ hooks follows the format "wp_ajax_$youraction", where $youraction is the 'action' field submitted to admin-ajax.php.
 */
require_once ALCY_DIRECTORY . '/inc/function-ajax.php';
//
require_once ALCY_DIRECTORY . '/inc/function-filter.php';


require_once ALCY_DIRECTORY . '/inc/function-required-plugins.php';

function alcy_move_comment_field_to_bottom( $fields )
{

    $comment_field = $fields[ 'comment' ];
    if ( isset( $fields[ 'cookies' ] ) ) {
        $cookie_field = $fields[ 'cookies' ];
    }

    unset( $fields[ 'comment' ] );
    unset( $fields[ 'cookies' ] );
    $fields[ 'comment' ] = $comment_field;

    if ( isset( $fields[ 'cookies' ] ) && isset( $cookie_field ) ) {
        $fields[ 'cookies' ] = $cookie_field;
    }


    return $fields;
}

add_filter( 'comment_form_fields' , 'alcy_move_comment_field_to_bottom' );