<?php

function alcy_add_body_class( $classes )
{
    $dsn_style = alcy_acf_option( 'background_color' , 'dark' );
    if ( $dsn_style === 'dark' ):
        $classes[] = 'dark-theme';
    endif;
    $is_mouse_effect = get_theme_mod( 'effect_cursor' );
    if ( $is_mouse_effect ):
        $classes[] = 'dsn-mousemove';
    endif;

    $is_ajax_pages = get_theme_mod( 'ajax_pages' );
    if ( $is_ajax_pages ):
        $classes[] = 'dsn-ajax';
    endif;

    $is_ajax_pages = get_theme_mod( 'event_smooth_scrolling' );
    if ( $is_ajax_pages ):
        $classes[] = 'dsn-effect-scroll';
    endif;


    return $classes;
}

add_filter( 'body_class' , 'alcy_add_body_class' );

/**
 *
 *  Filters the list of CSS class names for the current post.
 *
 */


add_filter( 'post_class' , function ( $classes ) {
    $layout = alcy_acf_option( 'layout' , 'full' );
    if ( get_post_type() === 'post' ) {
        $layout = 'half';
    }
    $classes[] = 'dsn-' . esc_attr( $layout );


    return $classes;
} );


if ( class_exists( 'ACF' ) ) :
    add_filter( 'acf/settings/show_admin' , '__return_false' );
endif;

/*
 * Admin Logo Link
 * */

add_filter( 'login_headerurl' , function () {
    return home_url( '/' );
} );


add_action( 'login_head' , function () {
    if ( get_theme_mod( 'admin_custom_logo' ) ) {
        $src         = get_theme_mod( 'admin_custom_logo' );
        $width_logo  = get_theme_mod( 'width_number' , 80 );
        $width_logo  = ( (int) $width_logo === 0 ) ? 'auto' : $width_logo . 'px';
        $height_logo = get_theme_mod( 'height_number' , 0 );
        $height_logo = ( (int) $height_logo === 0 ) ? 'auto' : $height_logo . 'px';


        echo '<style type="text/css">
        h1 a { 
            background: transparent url(' . esc_url( $src ) . ') 50% 50% no-repeat !important;
            width:' . esc_attr( $width_logo ) . '!important; 
            height:' . esc_attr( $height_logo ) . '!important; 
            background-size: cover !important;
        }
    </style>';
    }
} );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 *
 * @return int (Maybe) modified excerpt length.
 */
function alcy_custom_excerpt_length( $length )
{
    $num = esc_attr( get_theme_mod( 'dsn_except_length' , 50 ) );
    return $num;

}

add_filter( 'excerpt_length' , 'alcy_custom_excerpt_length' , 999 );


/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 *
 * @return string (Maybe) modified "read more" excerpt string.
 */
function alcy_excerpt_more( $more )
{
    $end_text = esc_html( get_theme_mod( 'dsn_end_of_excerpt_text' , '...' ) );
    return $end_text;
}

add_filter( 'excerpt_more' , 'alcy_excerpt_more' );
