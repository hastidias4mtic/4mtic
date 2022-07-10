<?php /* Template Name: Posts Template */ ?>

<?php
$numPage = get_option( 'posts_per_page' );
$CurrentPage = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$myposts = new WP_Query( array( 'paged' => $CurrentPage , 'posts_per_page' => $numPage , 'post_type' => 'post' ) );
$is_ajax = alcy_acf_option( 'ajax_load_more' );

get_header(); ?>
<div class="dsn-block-content">
<?php if ( $myposts->have_posts() ) :
    echo '<div class="dsn-posts p-relative">';

    while ( $myposts->have_posts() ) :
        $myposts->the_post();
        get_template_part( 'template-parts/posts/content' );
    endwhile;

    echo '</div>';

else:
    get_template_part( 'template-parts/posts/content' , 'none' );

endif;

echo '</div>';

if ( $myposts->have_posts() && $is_ajax ) : ?>
    <div class="button-loadmore" data-type="post" data-page="2" data-dsn-grid="parallax"
         data-layout="">
        <span class="progress-text progress-load-more"><?php esc_html_e( 'Load More' , 'alcy' ) ?></span>
        <span class="progress-text progress-no-more"><?php esc_html_e( 'NO MORE' , 'alcy' ) ?></span>
        <div class="dsn-load-progress-ajax"></div>
    </div>
<?php endif;

if ( !$is_ajax ) : alcy_pagination( array(
    'prev_text' => alcy_buttons_pagination( esc_html__( 'PREV' , 'alcy' ) , 'dsn-prev' ) ,
    'next_text' => alcy_buttons_pagination( esc_html__( 'NEXT' , 'alcy' ) ) ,
    'before_page_number' => '<span class="button-next dsn-numbers"><span class="number">' ,
    'after_page_number' => '</span></span>' ,
    'total' => $myposts->max_num_pages ,
) , true ); endif;


wp_reset_postdata();
get_footer();