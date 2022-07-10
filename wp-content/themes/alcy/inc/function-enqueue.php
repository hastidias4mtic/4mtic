<?php

/**
 *  --===== wp_enqueue_scripts --=====
 * is the proper hook to use when enqueuing items
 * that are meant to appear on the front end.
 * Despite the name, it is used for enqueuing both scripts and styles.
 *
 *  Custom CSS , JS For Web
 *
 */

add_action( 'wp_enqueue_scripts' , 'alcy_load_templete_script' );


function alcy_fonts_url()
{
    $fonts_url = '';
    $fonts     = array();
    $subsets   = 'latin-ext';
    $fonts[]   = 'Roboto:400,500,700,900|Open+Sans:300,400,600,700,800|Rufina:400,700';
    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
                                        'family' => urlencode( implode( '|' , $fonts ) ) ,
                                        'subset' => urlencode( $subsets ) ,
                                    ) , '//fonts.googleapis.com/css' );
    }

    return $fonts_url;
}


function alcy_load_templete_script( $hook )
{

    $ver = '1.1.0';
    global $wp_version;
    $is_active_aos = get_theme_mod( 'effect_aos' );

    wp_enqueue_style( 'alcy-google-fonts' , alcy_fonts_url() , array() , $ver );

    wp_enqueue_style( 'bootstrap-grid' , ALCY_THEME_DIRECTORY . '/assets/css/plugins/bootstrap-grid.min.css' );
    wp_enqueue_style( 'fontawesome-all' , ALCY_THEME_DIRECTORY . '/assets/css/plugins/fontawesome-all.min.css' );
    wp_enqueue_style( 'animate' , ALCY_THEME_DIRECTORY . '/assets/css/plugins/animate.css' );
    wp_enqueue_style( 'swiper' , ALCY_THEME_DIRECTORY . '/assets/css/plugins/swiper.min.css' );
    if ( $is_active_aos ) {
        wp_enqueue_style( 'aos' , ALCY_THEME_DIRECTORY . '/assets/css/plugins/aos.css' );
    }
    wp_enqueue_style( 'justifiedGallery' , ALCY_THEME_DIRECTORY . '/assets/css/plugins/justifiedGallery.min.css' );
    wp_enqueue_style( 'magnific-popup' , ALCY_THEME_DIRECTORY . '/assets/css/plugins/magnific-popup.css' );
    wp_enqueue_style( 'YouTubePopUp' , ALCY_THEME_DIRECTORY . '/assets/css/plugins/YouTubePopUp.css' );

    if ( (float) $wp_version < 5 ) {
        wp_enqueue_style( 'alcy-content' , ALCY_THEME_DIRECTORY . '/assets/css/content.min.css' );
    }

    wp_enqueue_style( 'alcy-custom-style' , ALCY_THEME_DIRECTORY . '/assets/css/style.css' , array() , $ver );
    wp_enqueue_style( 'alcy-responsive-css' , ALCY_THEME_DIRECTORY . '/assets/css/responsive.css' , array() , $ver );


    /**
     *
     *  --===== Load File Js =====--
     *
     */


    // enable reply to comments
    if ( ( !is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script( 'popper' , ALCY_THEME_DIRECTORY . '/assets/js/popper.min.js' , array( 'jquery' ) , false , true );
    wp_enqueue_script( 'bootstrap' , ALCY_THEME_DIRECTORY . '/assets/js/bootstrap.min.js' , array( 'jquery' ) , false , true );
    wp_enqueue_script( 'tweenlite' , ALCY_THEME_DIRECTORY . '/assets/js/TweenLite.min.js' , array( 'jquery' ) , false , true );
    wp_enqueue_script( 'tweenmax' , ALCY_THEME_DIRECTORY . '/assets/js/TweenMax.min.js' , array( 'jquery' ) , false , true );
    if ( $is_active_aos ) {
        wp_enqueue_script( 'aos' , ALCY_THEME_DIRECTORY . '/assets/js/aos.main.js' , array( 'jquery' ) , false , true );
    }
    wp_enqueue_script( 'isotope' , ALCY_THEME_DIRECTORY . '/assets/js/Isotope.min.js' , array( 'jquery' ) , false , true );
    wp_enqueue_script( 'justifiedGallery' , ALCY_THEME_DIRECTORY . '/assets/js/justifiedGallery.min.js' , array( 'jquery' ) , false , true );
    wp_enqueue_script( 'magnific-popup' , ALCY_THEME_DIRECTORY . '/assets/js/magnific-popup.min.js' , array( 'jquery' ) , false , true );
    wp_enqueue_script( 'swiper' , ALCY_THEME_DIRECTORY . '/assets/js/swiper.min.js' , array( 'jquery' ) , false , true );
    wp_enqueue_script( 'nicescroll' , ALCY_THEME_DIRECTORY . '/assets/js/jquery.nicescroll.min.js' , array( 'jquery' ) , false , true );
    wp_enqueue_script( 'YouTubePopUp' , ALCY_THEME_DIRECTORY . '/assets/js/YouTubePopUp.js' , array( 'jquery' ) , false , true );
    wp_enqueue_script( 'typed' , ALCY_THEME_DIRECTORY . '/assets/js/Typed.min.js' , array( 'jquery' ) , false , true );
    wp_enqueue_script( 'particles' , ALCY_THEME_DIRECTORY . '/assets/js/particles.min.js' , array( 'jquery' ) , false , true );
    wp_enqueue_script( 'ultimate-bg' , ALCY_THEME_DIRECTORY . '/assets/js/ultimate-bg.min.js' , array( 'jquery' ) , false , true );

    wp_enqueue_script( 'dsn-grid' , ALCY_THEME_DIRECTORY . '/assets/js/dsn-grid.js' , array( 'jquery' ) , $ver , true );
    wp_enqueue_script( 'alcy-scripts' , ALCY_THEME_DIRECTORY . '/assets/js/custom.js' , array(
        'jquery' ,
        'imagesloaded'
    ) , $ver , true );


    $Param = array(
        'queries'           => esc_url( admin_url( 'admin-ajax.php?action=alcy_post_query' ) ) ,
        'effect_aos'        => get_theme_mod( 'effect_aos' ) ,
        'hold_time'         => get_theme_mod( 'hold_time' , 1.5 ) ,
        'mouse_scroll_step' => get_theme_mod( 'mouse_scroll_step' , 25 ) ,
        'scroll_speed'      => get_theme_mod( 'scroll_speed' , 250 ) ,
        'cursor_drag_speed' => get_theme_mod( 'cursor_drag_speed' , 0.3 ) ,
    );

    wp_localize_script( 'alcy-scripts' , 'dsnParam' , $Param );

}


/**
 *
 * Enqueue scripts for all admin pages.
 *  Custom CSS , JS For Admin
 */

add_action( 'admin_enqueue_scripts' , 'alcy_load_admin_script' );

function alcy_load_admin_script( $hook )
{

    if ( !in_array( $hook , array( 'term.php' , 'edit-tags.php' , 'post.php' , 'post-new.php' ) ) ) {
        return;
    }
    wp_enqueue_style( 'alcy-google-fonts' , alcy_fonts_url() , array()  );
    wp_enqueue_style( 'alcy-main-styles' , ALCY_THEME_DIRECTORY . '/assets/css/admin/main.css?v=1' );


}

