<?php
$attr = get_query_var( 'attr' );
$content = get_query_var( 'content' );


$ids = explode( ',' , $attr[ 'id-img' ] );

$iframe = str_replace( '?feature=oembed' , '?feature=oembed&autoplay=1' , wp_oembed_get( $content ) );
$img_size = alcy_acf_option_array( $attr , 'size-image' , 'large' );

?>
<?php if ( isset( $ids[ 0 ] ) && $img = wp_get_attachment_image_src( $ids[ 0 ] , $img_size ) ): ?>


    <div class="gallery-video" data-overlay='1'>
        <?php echo wp_get_attachment_image( $ids[ 0 ] , $img_size ) ?>

        <a class="vid" href="<?php echo esc_url( $content ) ?>">
            <div class="play-button">
                <svg class="play-circles" viewBox="0 0 152 152">
                    <circle class="play-circle-01" fill="none" stroke="#fff" stroke-width="3"
                            stroke-dasharray="343 343" cx="76" cy="76" r="72.7"/>
                    <circle class="play-circle-02" fill="none" stroke="#fff" stroke-width="3"
                            stroke-dasharray="309 309" cx="76" cy="76" r="65.5"/>
                </svg>
            </div>
            <div class="play-btn">
                <i class="fas fa-play"></i>
            </div>
        </a>
    </div>


<?php endif; ?>
