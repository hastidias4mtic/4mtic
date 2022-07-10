<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="<?php echo is_ssl() ? 'https' : 'http' ?>://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>

</head>
<?php
$is_mouse_effect = get_theme_mod( 'effect_cursor' );

if ( $is_mouse_effect ) {
    $is_mouse_effect = 'true';
} else {
    $is_mouse_effect = 'false';
}

?>

<body <?php body_class(); ?> data-dsn-mousemove="<?php echo esc_attr( $is_mouse_effect ) ?>">

<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}
?>

<?php if ( get_theme_mod( 'page_preloader', true ) ): ?>
    <div class="preloader">
        <div class="preloader-after"></div>
        <div class="preloader-before"></div>
        <div class="preloader-block">
            <div class="title"><?php echo esc_html( get_bloginfo( 'name' ) ) ?></div>
            <div class="percent">0</div>
            <div class="loading"><?php esc_html_e( 'loading', 'alcy' ) ?></div>
        </div>
        <div class="preloader-bar">
            <div class="preloader-progress"></div>
        </div>
    </div>
<?php endif; ?>

<?php if ( $is_mouse_effect === 'true' ): ?>
    <div class="cursor">
        <div class="cursor-helper cursor-hold">
            <span><?php esc_html_e( 'Hold', 'alcy' ) ?></span>
        </div>

        <div class="cursor-helper cursor-Watch">
            <span><?php esc_html_e( 'Watch', 'alcy' ) ?></span>
        </div>

        <div class="cursor-helper cursor-view">
            <span><?php esc_html_e( 'View', 'alcy' ) ?></span>
        </div>

        <div class="cursor-helper cursor-link"></div>
    </div>
<?php endif; ?>


<div class="sidebar left light-bg">
    <a href="<?php echo esc_url( home_url( '/' ) ) ?>" class="box-logo logo-light effect-ajax">

        <?php
        if ( has_custom_logo() ):
            echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full', false, array(
                'class' => 'custom-logo',
                'alt'   => get_bloginfo( 'name', 'display' )
            ) );
        else:
            echo '<h4>' . esc_html( substr( get_bloginfo( 'name' ), 0, 1 ) ) . '</h4>';
        endif;
        ?>
    </a>

    <a href="<?php echo esc_url( home_url( '/' ) ) ?>" class="box-logo logo-dark custom-logo-link effect-ajax"
       rel="home">
        <?php
        if ( get_theme_mod( 'custom_logo_dark' ) ):
            echo wp_get_attachment_image( get_theme_mod( 'custom_logo_dark' ), 'full', false, array(
                'class' => 'custom-logo',
                'alt'   => get_bloginfo( 'name', 'display' )
            ) );
        else:
            echo '<h4>' . esc_html( substr( get_bloginfo( 'name' ), 0, 1 ) ) . '</h4>';
        endif;
        ?>

    </a>

    <div class="box-social">
        <?php echo alcy_social_setting( get_theme_mod( 'display_social_footer', 'name' ) ) ?>
    </div>

    <div id="menu-toggle">
        <div id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="cross">
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<nav class="menu-full dark-bg">
    <div class="menu-height ">
        <div class="menu-container ">

            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'alcy-primary-list',
                'menu_class'     => '',
                'container'      => false,
                'depth'          => 2,
                'fallback_cb'    => 'alcy_class_nav_list_walker::fallback',
                'walker'         => new \alcy_class_nav_list_walker()
            ) );

            ?>


            <div class="contactWrapper">
                <?php
                $num_contact = get_theme_mod( 'num_menu_contact', 3 );
                $info_menu = get_theme_mod( 'alcy_info_contact' );
                $index = 1;

                if ( $info_menu ):
                    foreach ( $info_menu as $info ):

                        $content_inf = alcy_acf_option_array( $info, 'name' );

                        if ( $index === 1 ):
                            echo '<ul class="contact-item">';
                            printf( '<li class="item-header">%s</li>', esc_html( $content_inf ) );
                        else:
                            printf( '<li class="">%s</li>', esc_html( $content_inf ) );
                        endif;

                        if ( $index === (int)$num_contact ):
                            echo '</ul>';
                            $index = 1;
                        else:
                            $index++;
                        endif;
                    endforeach;
                endif;
                ?>

            </div>
        </div>
    </div>
</nav>

<main class="inner-wrap inner-wrap-slider">
    <!--    header-sticky-full-->
    <?php
    $dir_sticky = alcy_acf_option( 'type_sticky', 'left' );
    $type_sticky_full = '';
    if ( $dir_sticky === 'full' ) {
        $type_sticky_full = 'header-sticky-full';
    }
    ?>
    <div class="dsn-main-root <?php echo esc_attr( $type_sticky_full ) ?>">
        <?php
        $type_header = alcy_type_header();
        $is_sticky_header = false;
        if ( $type_header === 'sticky' ) {
            $is_sticky_header = true;
        }

        $grid = '';

        if ( $is_sticky_header ):
            alcy_header_sticky( true, $dir_sticky );
            $grid = 'col-large';
        else:
            $dir_sticky = 'dsn-full';
        endif;

        $dsn_style = alcy_acf_option( 'background_color', 'dark' );
        ?>
        <div data-dsn-style="<?php echo esc_attr( $dsn_style ) ?>"></div>
        <div class="p-relative <?php echo esc_attr( $dir_sticky . '-large ' . $grid ) ?> ">
            <div class="page-<?php echo esc_attr( $type_header ) ?>">
<?php
if ( $type_header === 'post' ):
    alcy_header();
elseif ( $type_header === 'normal' ):

    alcy_normal_header();
endif;
?>