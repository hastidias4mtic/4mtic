<?php get_header(); ?>


<?php if ( have_posts() ) :
    echo '<div class="dsn-posts p-relative">';
    while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/posts/content' );
    endwhile;
    echo '</div>';
else:
    get_template_part( 'template-parts/posts/content' , 'none' );

endif; ?>


<?php alcy_pagination( array(
                           'prev_text'          => alcy_buttons_pagination( esc_html__( 'PREV' , 'alcy' ) , 'dsn-prev' ) ,
                           'next_text'          => alcy_buttons_pagination( esc_html__( 'NEXT' , 'alcy' ) ) ,
                           'before_page_number' => '<span class="button-next dsn-numbers"><span class="number">' ,
                           'after_page_number'  => '</span></span>'
                       ) , true ); ?>


<?php
get_sidebar();
get_footer();
?>