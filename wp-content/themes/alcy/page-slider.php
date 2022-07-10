<?php /* Template Name: Slider Template */ ?>

<?php

$numPage   = alcy_acf_option( 'maximum_number_of_slider' , 5 );
$dsn_views = alcy_acf_option( 'dsn-views' , 'work' );
$lid_order = alcy_acf_option( 'slid_order' , 'ASC' );

$is_custom    = false;
$dsn_projects = alcy_project_slug();

if ( $dsn_views === 'custom' ):
    $is_custom = true;
    $myposts   = alcy_acf_option( 'custom_slider' );
else :
    $myposts = get_posts( array(
                              'posts_per_page' => $numPage ,
                              'post_type'      => $dsn_projects ,
                              'order'          => $lid_order
                          ) );
endif;


?>

<?php get_header(); ?>

    <div class="home-footers"></div>
    <header class="hero">
        <div class="inner">
            <div class="slider-box">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <?php if ( count( $myposts ) ) :
                            $active_slid = 'dsn-active';
                            $index       = 1;
                            foreach ( $myposts as $current_post ) :

                                set_query_var( 'dsn-active' , $active_slid );
                                set_query_var( 'num' , $index );
                                $index++;
                                if ( $active_slid === 'section-slider-next' ) {
                                    $active_slid = '';
                                } else {
                                    $active_slid = 'section-slider-next';
                                }

                                if ( $is_custom ) {
                                    set_query_var( 'current_post' , get_post( $current_post[ 'link' ] ) );
                                    set_query_var( 'custom_slider' , $current_post );
                                } else {
                                    set_query_var( 'current_post' , $current_post );
                                }


                                get_template_part( 'template-parts/posts/content' , 'slid' );
                            endforeach;
                        else:
                            get_template_part( 'template-parts/posts/content' , 'none' );

                        endif; ?>

                    </div>
                </div>

            </div>

            <div class="dsn-grid-nav-box">
                <div class="boxnav-item to-prev" data-dsn-grid="parallax" data-dsn-grid-move="20">
                    <i class="fas fa-chevron-left"></i>
                </div>

                <div class="boxnav-item to-next" data-dsn-grid="parallax" data-dsn-grid-move="20">
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="boxnav-item boxnav-item-progress">
                    <div class="boxnav-progress">
                        <span class="progress-item"></span>
                    </div>


                    <div class="number"></div>
                </div>

            </div>


        </div>
    </header>

<?php
wp_reset_postdata();
get_footer();
?>