<?php /* Template Name: Page Demo Personal */ ?>

<?php get_header(); ?>

<?php
$full_name   = alcy_acf_option( 'full_name' );
$img         = get_the_post_thumbnail_url();
$overlay     = alcy_acf_option( 'background_overlay' , 2 );
$description = alcy_acf_option( 'description' );

$is_parallax  = alcy_acf_option( 'use_parallax' );
$is_type_text = alcy_acf_option( 'use_type_text' );
$type_text    = alcy_acf_option( 'type_text' );
$is_video     = alcy_acf_option( 'use_video' );
$bg_v         = '';
$bg_class     = '';
$video_source = str_replace( 'https://www.youtube.com/watch?v=' , '' , alcy_acf_option( 'link_video' ) );

if ( $is_video ):
    $bg_v     = 'demo-vi';
    $bg_class = 'bg-video';
endif;
?>
    <header class="hero particles-demo <?php echo esc_attr( $bg_v ) ?>  ">
        <div class="inner">
            <div class="inner-hero">
                <div class="details-inner">
                    <div class="details">
                        <div class="fullname">
                            <h3><?php echo alcy_sanitize_minimal_decoration( $full_name ) ?></h3>
                        </div>
                        <div class="line"></div>
                    </div>
                </div>


                <div class="bg" data-dsn-ajax="img">

                    <?php if ( $is_parallax ): ?>
                        <div id="particles-js"></div>
                    <?php endif; ?>


                    <div class="bg-image cover-bg <?php echo esc_attr( $bg_class ) ?>"
                         data-dsn-source="<?php echo esc_attr( $video_source ) ?>"
                         data-parallex="header.hero .inner-hero .details .fullname "
                         data-image-src="<?php echo esc_url( $img ) ?>"
                         data-overlay="<?php echo esc_attr( $overlay ) ?>"
                         style="background-position: top center;"></div>
                    <div class="details">
                        <div class="fullname">
                            <h3><?php echo alcy_sanitize_minimal_decoration( $full_name ) ?></h3>
                        </div>
                        <div class="line"></div>
                        <?php
                        if ( $is_type_text ):
                            echo '<h4><span data-dsn-type="' . esc_attr( $type_text ) . '"></span></h4>';
                        else:
                            printf( '<h4>%s</h4>' , esc_html( $description ) );
                        endif;
                        ?>

                    </div>
                </div>

                <?php
                $id_about = alcy_acf_option( 'about_button' );
                if ( $id_about ):
                    ?>
                    <a class="custom-btn effect-ajax" href="<?php echo esc_url( get_the_permalink( $id_about ) ) ?>"
                       data-dsn-ajax="about">
                        <div class="rect">
                            <div class="inner"><?php esc_html_e( 'About Me' , 'alcy' ) ?></div>
                        </div>
                        <div class="line">
                            <div class="inner"></div>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>


<?php get_footer(); ?>