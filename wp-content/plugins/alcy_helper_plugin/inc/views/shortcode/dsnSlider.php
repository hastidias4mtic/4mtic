<?php
$attr = get_query_var( 'attr' );
$content = get_query_var( 'content' );
$ids = explode( ',' , $attr[ 'ids' ] );
$img_size = alcy_acf_option_array( $attr , 'size-image' , 'alcy-slider-img' );
?>


<?php if ( count( $ids ) ): ?>


    <div class="project-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <?php foreach ( $ids as $id ): if ( $id && $img = wp_get_attachment_image_src( $id ) ): ?>
                    <div class="swiper-slide">
                        <?php echo wp_get_attachment_image( $id , $img_size ) ?>
                    </div>
                <?php endif; endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


<?php endif; ?>


