<?php
$attr = get_query_var( 'attr' );
$content = get_query_var( 'content' );

$ids = explode( ',' , $attr[ 'ids' ] );
$img_size = alcy_acf_option_array( $attr , 'size-image' , 'full' );


?>


<?php

foreach ( $ids as $id ): if ( $id && $img = wp_get_attachment_image_src( $id , $img_size ) ): ?>
    <div class="img-fullscreen" data-dsn-grid="move-up">
        <div class="cover-bg" data-image-src="<?php echo esc_url( $img[ 0 ] ) ?>">
            <?php echo wp_get_attachment_image( $id , $img_size , false , array( 'class' => 'img-src' ) ) ?>
        </div>
    </div>
<?php endif; endforeach; ?>
