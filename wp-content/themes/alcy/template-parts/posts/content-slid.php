<?php
$current_slid = get_query_var( 'current_post' );
$overlay      = alcy_acf_option( 'overlay' , 4 );

$custom_slider = get_query_var( 'custom_slider' , false );
$dsn_active    = get_query_var( 'dsn-active' , false );


$id                 = alcy_acf_option_array( $current_slid , 'ID' );
$custom_title       = get_the_title( $id );
$bg_video           = alcy_acf_option( 'background_video' , false , $id );
$description_header = alcy_acf_option( 'description_header' , false , $id );

$link        = get_the_permalink( $id );
$img         = '';
$id_img      = get_post_thumbnail_id( $current_slid );
$element_img = ( $id_img ) ? wp_get_attachment_image( $id_img , 'full' , false , array( 'class' => 'img-src' ) ) : '';


if ( has_post_thumbnail( $current_slid ) ):
    $img = get_the_post_thumbnail_url( $current_slid , 'full' );
endif;

$index = get_query_var( 'num' );

if ( $custom_slider ):
    $custom_title       = alcy_acf_option_array( $custom_slider , 'title' , $custom_title );
    $description_header = alcy_acf_option_array( $custom_slider , 'description' , $description_header );
    $array_img          = alcy_acf_option_array( $custom_slider , 'image' );
    $img                = alcy_acf_option_array( $array_img , 'url' , $img );
endif;

if ( !$description_header ) {

    if ( $current_slid->post_type === alcy_project_slug() ) {

        $description_header = alcy_post_category( ', ' , alcy_category_slug() , false , $current_slid );
    } else {
        $description_header = alcy_post_category( ', ' , 'category' , false , $current_slid );
    }
}

$is_ajax_slider = get_theme_mod( 'ajax_slider' );
$class_ajax     = '';
if ( $is_ajax_slider ):
    $class_ajax = 'effect-ajax';
endif;

?>


<div class="slider-item swiper-slide">
    <div class="inner-hero">

        <div class="bg">
            <div class="bg-image cover-bg" data-image-src="<?php echo esc_url( $img ) ?>"
                 data-overlay="<?php echo esc_attr( $overlay ) ?>"></div>
        </div>

        <div class="container">
            <div class="info">
                <div class="tagline" data-swiper-parallax="-25">
                    <span><?php echo esc_html( alcy_get_num_slug( $index ) ) ?></span>
                    <?php printf( '<h6>%1$s</h6>' , $description_header ) ?>
                </div>

                <h1 data-swiper-parallax-x="-25" data-swiper-parallax-scale="1.2"
                    data-swiper-parallax-opacity="0"><?php echo esc_html( $custom_title ) ?></h1>
                <a href="<?php echo esc_url( $link ) ?>" class="veiw-c <?php echo esc_attr( $class_ajax ) ?>"
                   data-swiper-parallax="25" data-dsn-ajax="slider">
                      <span>
                      <span></span> <?php esc_html_e( 'Discover' , 'alcy' ) ?>
                      </span>
                </a>
            </div>
        </div>

    </div>
</div>
