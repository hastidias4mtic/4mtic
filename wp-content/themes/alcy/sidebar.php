<?php


$show_sidebar = alcy_acf_option( 'show_sidebar' , 'show' );

if ( is_home() ) {
    $show_sidebar = get_theme_mod( 'home_show_sidebar' , 'show' );
} elseif ( is_archive() ) {
    $show_sidebar = get_theme_mod( 'archive_show_sidebar' , 'show' );
}


if ( is_active_sidebar( 'blog-sidebar' ) && $show_sidebar === 'show' ) : ?>

    <div class="dsn-button-sidebar">
        <span><i class="fa fa-arrow-left"></i></span>
    </div>
    <div class="dsn-sidebar">
        <div class="close-wind" data-dsn-close=".dsn-sidebar"></div>
        <div class="sidebar-single">
            <?php dynamic_sidebar( 'blog-sidebar' ); ?>
        </div>
    </div>

<?php endif; ?>